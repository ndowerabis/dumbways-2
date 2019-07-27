<?php
function checkEmail($email) {
	
		  if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			if(!preg_match("/^[a-z@.]*$/",$email)){
				$huruf_besar = false;
				echo("email : $email harus karakter huruf kecil");
				return false;
			}else{
				echo("$email is a valid email address");
				return true;
			}
		  } else {
			echo("$email is not a valid email address");
			return false;
		  }

  
}

function cekUsername($cekUsername){
	if(!preg_match("/^[a-z]*$/",$cekUsername)){
		echo("user name : $cekUsername harus karakter huruf kecil");
		return false;
	}
					 
					 
	if(Strlen($cekUsername)==8){		
		echo("benar");
		return true;
	}else{
		echo("user name : $cekUsername harus 8 karakter");
		return false;
			
	}		
	
	
}



// buat function checkPassword
function checkPassword($password) {
  // validasi huruf besar
		if(!preg_match("/^[a-zA-Z]*$/",$password)){
			$huruf_besar = false;
			echo("password : $password tidak ada hurf besar atau huruf kecil");
			return false;
		}
		// Kode vhuruf kecil
		if(!preg_match('@[0-9]@',$password)){
			$huruf_angka = false;
			echo("password : $password tidak ada angka");
			return false;
		}
		
		// Cek minimal karakter password (minimal 8 digit)
		if(strlen($password) != 8){
			$valid_panjang = false;
			echo("password : $password harus 8 karakter");
			return false;
		}  
		echo("password : $password valid");
		return true;
}

// pemanggilan function
checkEmail('kuk.uruyuk@gmail');
checkPassword('jakarta7');
cekUsername('vladimRf');