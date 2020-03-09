<?php  
//Connect to database
require 'connectDB.php';

if (isset($_POST['FingerID'])) {
	
	$fingerID = $_POST['FingerID'];

	$sql = "SELECT * FROM employees WHERE fingerprint_id=?";
    $result = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($result, $sql)) {
        echo "SQL_Error_Select_card".mysqli_error($conn);
        exit();
    }
    else{
    	mysqli_stmt_bind_param($result, "s", $fingerID);
        mysqli_stmt_execute($result);
        $resultl = mysqli_stmt_get_result($result);
        if ($row = mysqli_fetch_assoc($resultl)){
        	//*****************************************************
            //An existed fingerprint has been detected for Login or Logout
            if (!empty($row['username'])){
            	$Uname = $row['username'];
                $Number = $row['serialnumber'];
                $sql = "SELECT * FROM employees_logs WHERE fingerprint_id=? AND checkindate=CURDATE() AND timeout=''";
                $result = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($result, $sql)) {
                    echo "SQL_Error_Select_logs".mysqli_error($conn);
                    exit();
                }
                else{
                	mysqli_stmt_bind_param($result, "i", $fingerID);
                    mysqli_stmt_execute($result);
                    $resultl = mysqli_stmt_get_result($result);
                    //*****************************************************
                    //Login
                    if (!$row = mysqli_fetch_assoc($resultl)){

                    	$sql = "INSERT INTO employees_logs (username, serialnumber, fingerprint_id, checkindate, timein, timeout) VALUES (? ,?, ?, CURDATE(), CURTIME(), ?)";
                        $result = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($result, $sql)) {
                            echo "SQL_Error_Select_login1".mysqli_error($conn);
                            exit();
                        }
                        else{
                        	$timeout = "";
                            mysqli_stmt_bind_param($result, "sdis", $Uname, $Number, $fingerID, $timeout);
                            mysqli_stmt_execute($result);

                            echo "login".$Uname;
                            exit();
                        }
                    }
                    //*****************************************************
                    //Logout
                    else{
                    	$sql="UPDATE employees_logs SET timeout=CURTIME() WHERE fingerprint_id=? AND checkindate=CURDATE()";
                        $result = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($result, $sql)) {
                            echo "SQL_Error_insert_logout1".mysqli_error($conn);
                            exit();
                        }
                        else{
                            mysqli_stmt_bind_param($result, "i", $fingerID);
                            mysqli_stmt_execute($result);

                            echo "logout".$Uname;
                            exit();
                        }
                    }
                }
            }
            //*****************************************************
            //An available Fingerprint has been detected
            else{
            	$sql = "SELECT fingerprint_select FROM employees WHERE fingerprint_select=1";
                $result = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($result, $sql)) {
                    echo "SQL_Error_Select".mysqli_error($conn);
                    exit();
                }
                else{
                    mysqli_stmt_execute($result);
                    $resultl = mysqli_stmt_get_result($result);
                    
                    if ($row = mysqli_fetch_assoc($resultl)) {
                    	$sql="UPDATE employees SET fingerprint_select=0";
                        $result = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($result, $sql)) {
                            echo "SQL_Error_insert".mysqli_error($conn);
                            exit();
                        }
                        else{
                            mysqli_stmt_execute($result);

                            $sql="UPDATE employees SET fingerprint_select=1 WHERE fingerprint_id=?";
                            $result = mysqli_stmt_init($conn);
                            if (!mysqli_stmt_prepare($result, $sql)) {
                                echo "SQL_Error_insert_An_available_card".mysqli_error($conn);
                                exit();
                            }
                            else{
                                mysqli_stmt_bind_param($result, "i", $fingerID);
                                mysqli_stmt_execute($result);

                                echo "available";
                                exit();
                            }
                        }
                    }
                    else{
                    	$sql="UPDATE employees SET fingerprint_select=1 WHERE fingerprint_id=?";
                        $result = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($result, $sql)) {
                            echo "SQL_Error_insert_An_available_card".mysqli_error($conn);
                            exit();
                        }
                        else{
                            mysqli_stmt_bind_param($result, "i", $finger_sel, $fingerID);
                            mysqli_stmt_execute($result);

                            echo "available";
                            exit();
                        }
                    }
                }
            }
        }
        //*****************************************************
        //New Fingerprint has been added
        else{
        	$Uname = "";
            $Number = "";
            $gender= "";

            $sql = "SELECT fingerprint_select FROM employees WHERE fingerprint_select=1";
            $result = mysqli_stmt_init($conn);
            if (!mysqli_stmt_prepare($result, $sql)) {
                echo "SQL_Error_Select".mysqli_error($conn);
                exit();
            }
            else{
                mysqli_stmt_execute($result);
                $resultl = mysqli_stmt_get_result($result);
                if ($row = mysqli_fetch_assoc($resultl)) {
                	$sql="UPDATE employees SET fingerprint_select =0";
                    $result = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($result, $sql)) {
                        echo "SQL_Error_insert".mysqli_error($conn);
                        exit();
                    }
                    else{
                        mysqli_stmt_execute($result);

                        $sql = "INSERT INTO employees (username , serialnumber, gender, fingerprint_id, fingerprint_select) VALUES (?, ?, ?, ?, ?)";
                        $result = mysqli_stmt_init($conn);
                        if (!mysqli_stmt_prepare($result, $sql)) {
                            echo "SQL_Error_Select_add".mysqli_error($conn);
                            exit();
                        }
                        else{
                            mysqli_stmt_bind_param($result, "sdsi", $Uname, $Number, $gender, $fingerID);
                            mysqli_stmt_execute($result);

                            echo "succesful1";
                            exit();
                        }
                    }
                }
                else{
                	$sql = "INSERT INTO employees (username , serialnumber, gender, fingerprint_id, fingerprint_select) VALUES (?, ?, ?, ?, ?)";
                    $result = mysqli_stmt_init($conn);
                    if (!mysqli_stmt_prepare($result, $sql)) {
                        echo "SQL_Error_Select_add".mysqli_error($conn);
                        exit();
                    }
                    else{
                        mysqli_stmt_bind_param($result, "sdsi", $Uname, $Number, $gender, $fingerID);
                        mysqli_stmt_execute($result);

                        echo "succesful2";
                        exit();
                    }
                }
            }
        }
    }
}
if (isset($_POST['Get_Fingerid'])) {
    
    if ($_POST['Get_Fingerid'] == "get_id") {
        $sql= "SELECT fingerprint_id FROM employees WHERE add_fingerid=1 AND username=''";
        $result = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($result, $sql)) {
            echo "SQL_Error_Select".mysqli_error($conn);
            exit();
        }
        else{
            mysqli_stmt_execute($result);
            $resultl = mysqli_stmt_get_result($result);
            if ($row = mysqli_fetch_assoc($resultl)) {
                echo "add-id".$row['fingerprint_id'];
                exit();
            }
            else{
                echo "Nothing";
                exit();
            }
        }
    }
    else{
        exit();
    }
}
if (!empty($_POST['confirm_id'])) {

    $fingerid = $_POST['confirm_id'];

    $sql="UPDATE employees SET fingerprint_select=0 WHERE fingerprint_select=1";
    $result = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($result, $sql)) {
        echo "SQL_Error_Select".mysqli_error($conn);
        exit();
    }
    else{
        mysqli_stmt_execute($result);
        
        $sql="UPDATE employees SET add_fingerid=0, fingerprint_select=1 WHERE fingerprint_id=?";
        $result = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($result, $sql)) {
            echo "SQL_Error_Select".mysqli_error($conn);
            exit();
        }
        else{
            mysqli_stmt_bind_param($result, "s", $fingerid);
            mysqli_stmt_execute($result);
            echo "Fingerprint has been added!";
            exit();
        }
    }  
}
if (isset($_POST['DeleteID'])) {

	if ($_POST['DeleteID'] == "check") {
        $sql = "SELECT fingerprint_id FROM employees WHERE del_fingerid=1";
        $result = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($result, $sql)) {
            echo "SQL_Error_Select".mysqli_error($conn);
            exit();
        }
        else{
            mysqli_stmt_execute($result);
            $resultl = mysqli_stmt_get_result($result);
            if ($row = mysqli_fetch_assoc($resultl)) {
                
                echo "del-id".$row['fingerprint_id'];

                $sql = "DELETE FROM employees WHERE del_fingerid=1";
                $result = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($result, $sql)) {
                    echo "SQL_Error_delete".mysqli_error($conn);
                    exit();
                }
                else{
                    mysqli_stmt_execute($result);
                    exit();
                }
            }
            else{
                echo "nothing";
                exit();
            }
        }
	}
	else{
		exit();
	}
}
?>