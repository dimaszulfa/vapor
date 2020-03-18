<?php 
//koneksi ke database
$conn = mysqli_connect("localhost","root","","vapor");

function query($query){
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ( $row=mysqli_fetch_assoc($result)){
		$rows[] = $row;
	}
	return $rows;
}



function tambah ($_data){
		global $conn;
		$name = htmlspecialchars($_data["name"]);
		$email = htmlspecialchars($_data["email"]);
		$product = htmlspecialchars($_data["product"]);
		$message = htmlspecialchars($_data["message"]);

				$query = "INSERT INTO orders
					VALUES 
					('','$name','$email','$product','$message')";
		mysqli_query($conn, $query);

		return mysqli_affected_rows($conn);


}


function hapus ($id){
	global $conn;
	mysqli_query($conn, "DELETE FROM orders WHERE id= '$id'");
	return mysqli_affected_rows($conn);
}



function ubah($_data){
		global $conn;
		$id = $_data["id"];
		$name = htmlspecialchars($_data["name"]);
		$email = htmlspecialchars($_data["email"]);
		$product = htmlspecialchars($_data["product"]);
		$message = htmlspecialchars($_data["message"]);


				$query = "UPDATE  orders SET
				name = '$name',
				email = '$email',
				product = '$product',
				message = '$message'
				WHERE id = '$id'";
				mysqli_query($conn, $query);
		return mysqli_affected_rows($conn);
}




?>


