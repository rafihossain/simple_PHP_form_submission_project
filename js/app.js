"use strict";

// TODO: Fetch All Reports
function allReports() {
  $.ajax({
    url: "action.php",
    type: "POST",
    data: {
      action: "GetAllReports",
    },
    success: function (response) {
      if (response) {
        $("#allReports").html(response);

        // TODO: Datatable Plugin Initialized
         $("#example").DataTable();

      }
    },
  });
}
allReports();

$(document).ready(function () {

  // TODO: Serialize Plugin Initialized
  $("#input-tags").selectize({
    delimiter: ",",
    persist: false,
    create: function (input) {
      return {
        value: input,
        text: input,
      };
    },
  });

  // TODO: Form Submission Using AJAX
  $(document).on("click", "#insert", function (e) {
    e.preventDefault();

    let amount = checkValidate('[name="amount"]', "amountRequired");
    let buyer = checkValidate('[name="buyer"]', "buyerRequired");
    let receipt = checkValidate('[name="receipt_id"]', "receiptRequired");
    let items = checkValidate('[name="items"]', "itemsRequired");
    let email = checkValidate('[name="buyer_email"]', "emailRequired");
    let note = checkValidate('[name="note"]', "noteRequired");
    let city = checkValidate('[name="city"]', "cityRequired");
    let phone = checkValidate('[name="phone"]', "phoneRequired");
    let entry = checkValidate('[name="entry_by"]', "entryRequired");

    if (
      amount !== "" &&
      buyer !== "" &&
      receipt !== "" &&
      items !== "" &&
      email !== "" &&
      note !== "" &&
      city !== "" &&
      phone !== "" &&
      entry !== ""
    ) {
      $.ajax({
        url: "action.php",
        type: "POST",
        data: {
          action: "AddNewReport",
          amount: amount,
          buyer: buyer,
          receipt: receipt,
          items: items,
          email: email,
          note: note,
          city: city,
          phone: phone,
          entry: entry,
        },
        success: function (response) {
          if (response) {
            Swal.fire({
              title: "Report Added Successfully",
              text: "Do you want to continue",
              icon: "success",
              confirmButtonText: "Ok",
            });
            $("#exampleModal").modal("hide");
            $("#formData")[0].reset();

            allReports();
          }
        },
      });
    } else {
      return false;
    }
  });
});

// TODO: Input Field Validation
function checkValidate(input, id) {
  let data = $(input).val();
  if (data !== "") {
    $("#" + id + "")
      .removeClass("text-danger")
      .text("")
    return data;
  } else {
    $("#" + id + "")
      .addClass("text-danger")
      .text("Please fill this input field");
    return false;
  }
}

// TODO: Number Masking
function numberMask(code = "+88") {
  $(document).on("keyup", '[name="phone"]', function () {
    let mobile = $(this).val();

    if (mobile.length > 1) {
      $("#countryCode").text(code);
    } else {
      $("#countryCode").text("@");
    }
    console.log(mobile);
  });
}

numberMask();

// TODO: Submission Prevention
function submitPrevention() {
  $(document).on("keyup", '[name="buyer_email"]', function () {
    let email = $(this).val();
    $.ajax({
      url: "action.php",
      type: "POST",
      data: {
        action: "IsClientExisted",
        email: email,
      },
      success: function (response) {
        if (response == 1) {
          $("#emailRequired")
            .addClass("text-danger")
            .text("Oops! email already existed");
          $("#insert").attr("disabled", "disabled");
        } else if (response == 0) {
          $("#emailRequired").text("");
          $("#insert").attr("disabled", false);
        }
      },
    });
  });
}

submitPrevention();

//Todo: filed validation

function buyerValidation() {
  $(document).on("keyup", '[name="buyer"]', function (e) {
    let letters = /^[a-zA-Z\s\d]+$/; //only text number and spaces
    let buyer = $(this).val();

    if (!buyer.match(letters)) {
      $("#buyerRequired")
        .addClass("text-danger")
        .text("Please use only letter and number");
    } else if (buyer.length > 20) {
      $("#buyerRequired")
        .addClass("text-danger")
        .text("Please enter maximum 20 character");
    } else {
      $("#buyerRequired").text("");
    }
  });
}

buyerValidation();

function receiptValidation() {
  $(document).on("keyup", '[name="receipt_id"]', function () {
    let letters = /^[a-zA-Z\s]+$/; //only text and spaces
    let receipt = $(this).val();

    if (!receipt.match(letters)) {
      $("#receiptRequired")
        .addClass("text-danger")
        .text("Please use only letter");
    } else {
      $("#receiptRequired").text("");
    }
  });
}
receiptValidation();

function noteValidation() {
  $(document).on("keyup", '[name="note"]', function () {

    let note = $(this).val();

    if (note.length > 30 ) {
      $("#noteRequired")
        .addClass("text-danger")
        .text("Please enter maximum 30 characters");
    } else {
      $("#noteRequired").text("");
    }
  });
}
noteValidation();

function cityValidation() {
   $(document).on("keyup", '[name="city"]', function () {
     let letters = /^[a-zA-Z\s]+$/; //only text and spaces
     let city = $(this).val();
 
     if (!city.match(letters)) {
       $("#cityRequired")
         .addClass("text-danger")
         .text("Please use only letter");
     } else {
       $("#cityRequired").text("");
     }
   });
 }
 cityValidation();

 function numberValidation() {
   $(document).on("keyup", '[name="phone"]', function () {
     let letters = /^[0-9]+$/; //only number
     let phone = $(this).val();
 
     if (!phone.match(letters)) {
       $("#phoneRequired")
         .addClass("text-danger")
         .text("Please use only number");
     } else {
       $("#phoneRequired").text("");
     }
   });
 }
 numberValidation();
