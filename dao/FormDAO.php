<?php
require_once WWW_ROOT . 'dao' . DS . 'DAO.php';
class FormDAO extends DAO {

	public function insert($data) {
		$sql = "INSERT INTO `form` (`Optie1`, `Optie2`, `Optie3`, `Naam`, `Email`, `Telefoon`) VALUES (:Optie1, :Optie2, :Optie3, :Naam, :Email, :Telefoon)";
		$stmt = $this->pdo->prepare($sql);
		$stmt->bindValue(':Optie1', $data['optie1']);
		$stmt->bindValue(':Optie2', $data['optie2']);
		$stmt->bindValue(':Optie3', $data['optie3']);
		$stmt->bindValue(':Naam', $data['naam']);
		$stmt->bindValue(':Email', $data['email']);
		$stmt->bindValue(':Telefoon', $data['telefoon']);
		if($stmt->execute()) {
			return true;
		}
		return false;
	}
}