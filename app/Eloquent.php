<?php

class Eloquent extends Database
{
	private $table = 'xpeedstudio';
	private $sqlCode;
	private $queries;

	public function all($order = false)
	{
		$this->sqlCode = "SELECT * FROM {$this->table}";

		if (is_bool($order) && $order === true) {
			$this->sqlCode .= " ORDER BY `id` DESC";
		} else {
			$this->sqlCode .= " ORDER BY `id` ASC";
		}

		$this->queries = $this->connect->prepare($this->sqlCode);
		$this->queries->execute();
		$totalDataLists = $this->queries->fetchAll(PDO::FETCH_ASSOC);
		$totalRowSelect = $this->queries->rowCount();

		if ($totalRowSelect > 0) {
			return $totalDataLists;
		} else {
			return 0;
		}
	}

	public function find($col1, $val1, $col2 = null, $val2 = null, $col3 = null, $val3 = null)
	{
		$this->sqlCode = "SELECT * FROM {$this->table} WHERE {$col1} = {$val1}";

		if (!is_null($col2) && !is_null($col3)) {
			$this->sqlCode .= " AND {$col2} = {$val2}  AND {$col2} = {$val2}";
		} elseif (!is_null($col2) && is_null($col3)) {
			$this->sqlCode .= " AND {$col2} = {$val2}";
		}

		$this->queries = $this->connect->prepare($this->sqlCode);
		$this->queries->execute();
		$totalDataLists = $this->queries->fetchAll(PDO::FETCH_ASSOC);
		$totalRowSelect = $this->queries->rowCount();

		if ($totalRowSelect > 0) {
			return $totalDataLists;
		} else {
			return 0;
		}
	}

	public function create($amount, $buyer, $receiptId, $items, $buyerEmail, $note, $city, $phone, $entryBy)
	{
		$this->sqlCode = "INSERT INTO {$this->table} (
                           amount, buyer, hash_key, items, buyer_email, buyer_ip, note, city, phone, entry_at, entry_by
                        ) VALUES (
                           :BP_AMOUNT, :BP_BUYER, :BP_HASH_KEY, :BP_ITEMS, :BP_BUYER_EMAIL, :BP_BUYER_IP, :BP_NOTE, :BP_CITY, :BP_PHONE, :BP_ENTRY_AT, :BP_ENTRY_BY
                        )";

		$this->queries = $this->connect->prepare($this->sqlCode);
		$bindParam = array(
			':BP_AMOUNT'      => trim($amount),
			':BP_BUYER'       => trim($buyer),
			':BP_HASH_KEY'    => trim(hash('sha512', $receiptId)),
			':BP_ITEMS'       => trim($items),
			':BP_BUYER_EMAIL' => trim($buyerEmail),
			':BP_BUYER_IP' 	=> UserAgent::ip(),
			':BP_NOTE'        => trim($note),
			':BP_CITY'        => trim($city),
			':BP_PHONE'       => trim($phone),
			':BP_ENTRY_AT'    => date('Y-m-d H:i:s'),
			':BP_ENTRY_BY'    => trim($entryBy)
		);

		try {
			if ($this->queries->execute($bindParam)) {
				$totalRowCount	= $this->queries->rowCount();
				$lastInsertId	= $this->connect->lastInsertId();

				return array(
					'totalRowInsert' => $totalRowCount,
					'lastInsertID'   => $lastInsertId,
				);
			}
		} catch (\Exception $e) {
			return $e->getMessage();
		}
	}
}
