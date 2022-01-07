<?php
    include 'db.php';
    session_start();


function createDB()
{
    include('variable.php');
    $result=mysqli_query($conn,"show databases;");
    $i=1;
    echo 'List of database<br>';
    while ($row=mysqli_fetch_row($result)){
        echo $i.".".$row[0]."<br>";
        $i++;
    }
    
    $sql="CREATE DATABASE ".$database;
    if (mysqli_select_db($conn,"mydatabase") ) {
        // delete command database sql=DROP DATABASE `mydatabase`;
        // delete if the database exist and recreate the database
        // if database is not exist , simply create 
        $sqldelete="DROP DATABASE ".$database;
        mysqli_query($conn,$sqldelete);
        echo "database is deleted successfully<br>";
        mysqli_query($conn,$sql);
        echo "database is created successfully<br>";
    }
    else{
        if (mysqli_query($conn,$sql)){
            echo "database is created successfully<br>";
        }else
        {
            echo " Error on creation<br>" .mysqli_error($conn);
        }
    }

}

function goto2 ($to,$Message){
	echo "<script language=\"JavaScript\">alert(\"".$Message."\") \n window.location = \"".$to."\"</script>";
}

function alert1 ($str){
	print "<script>alert(\"".$str."\")</script>";
}

function calculate($x,$y){
    return $x+$y;
}

function show()
{
   echo '<br>this is a function';
}

function cal($x,$y){
    $z = $x+$y;
    return $z;
    //local $z
    //function parameter $x and $y
}

function getdate1($date){
    $dob=$date;
    $dob_year=date("Y",strtotime($dob));
    $currentyear=date("Y");
    $age=$currentyear-$dob_year;
    return $age;
}

function checkUType($u,$type){
    include('variable.php');
        $conn=new mysqli($servername,$user,$passw);
        mysqli_select_db($conn,"webproject");
        $sql=" SELECT
        tblcategory.Interface,tblcategory.UserType,tbluser.Name,tbluser.avatar, tbluser.created_time,
        tbluser.State, tbluser.City, tbluser.Country
        FROM
        tblcategory
        INNER JOIN tbluser ON tbluser.UserType = tblcategory.UserType
        where UserID='".$u."' ";
        $result=mysqli_query($conn,$sql);
        $rowtype=mysqli_fetch_array($result);
        if ($type==1){
            return $rowtype['UserType'];
        }else if ($type==2)
        {
            return $rowtype['Interface'];
        }
        else if ($type==3){
            return $rowtype['Name'];
        }
        else if ($type==4){
            return $rowtype['avatar'];
        }
        else if ($type==4){
            return $rowtype['avatar'];
        }
        else if ($type==5){
            return $rowtype['created_time'];
        }
        else if ($type==6){
            return $rowtype['State'];
        }
        else if ($type==7){
            return $rowtype['City'];
        }
        else if ($type==8){
            return $rowtype['Country'];
        }
};


// function retrieveAboutUs($id,$type=1){
//     include('variable.php');
//     $conn=new mysqli($servername,$user,$passw);
//     mysqli_select_db($conn,"webproject");
//     $sql= "SELECT * FROM aboutus where infoID='$id'";
//      $result=mysqli_query($conn,$sql);
//     //$rowtype=mysqli_fetch_assoc($result);
//     //echo $sql;
//     if ($type==1){
//         return $rowtype['Characteristics1'];
//     }
//     else if ($type==2){
//         return $rowtype['Char_Description1'];
//     }
//     if ($type==3){
//         return $rowtype['Characteristics2'];
//     }
//     else if ($type==4){
//         return $rowtype['Char_Description2'];
//     }
//     if ($type==5){
//         return $rowtype['Characteristics3'];
//     }
//     else if ($type==6){
//         return $rowtype['Char_Description3'];
//     }
//     else if ($type==7){
//         return $rowtype['CompanyName'];
//     }
//     else if ($type==8){
//         return $rowtype['CompanyDescription'];
//     }
//     else if ($type==9){
//         return $rowtype['Description1title'];
//     }
//     else if ($type==10){
//         return $rowtype['Description1'];
//     }
//     else if ($type==11){
//         return $rowtype['Description2title'];
//     }
//     else if ($type==12){
//         return $rowtype['Description2'];
//     }
// };

// function retrieveServices($id,$type=1){
//     include('variable.php');
//     $conn=new mysqli($servername,$user,$passw);
//     mysqli_select_db($conn,"webproject");
//     $sql=" SELECT * FROM services where ServicesID='$id'";
//      $result=mysqli_query($conn,$sql);
//     $rowtype=mysqli_fetch_assoc($result);
//     //echo $sql;
//     if ($type==1){
//         return $rowtype['ServicesTitle1'];
//     }
//     else if ($type==2){
//         return $rowtype['ServicesDescription1'];
//     } 
//     if ($type==3){
//         return $rowtype['ServicesTitle2'];
//     }
//     else if ($type==4){
//         return $rowtype['ServicesDescription2'];
//     }
//     if ($type==5){
//         return $rowtype['ServicesTitle3'];
//     }
//     else if ($type==6){
//         return $rowtype['ServicesDescription3'];
//     }
//     else if ($type==7){
//         return $rowtype['ServicesTitle4'];
//     }
//     else if ($type==8){
//         return $rowtype['ServicesDescription4'];
//     }
//     else if ($type==9){
//         return $rowtype['ServicesTitle5'];
//     }
//     else if ($type==10){
//         return $rowtype['ServicesDescription5'];
//     }
//     else if ($type==11){
//         return $rowtype['ServicesTitle6'];
//     }
//     else if ($type==12){
//         return $rowtype['ServicesDescription6'];
//     }
// };

// function retrievepricing($id,$type=2){
//     include('variable.php');
//     $conn=new mysqli($servername,$user,$passw);
//     mysqli_select_db($conn,"webproject");
//     $sql=" SELECT *    FROM     pricing
//      where pricingID=".$id;
//      $result=mysqli_query($conn,$sql);
//     $rowtype=mysqli_fetch_assoc($result);
//     //echo $sql;
//     if ($type==2){
//         return $rowtype['planName1'];
//     }
//     else if ($type==3){
//         return $rowtype['planValue1'];
//     }
//     if ($type==4){
//         return $rowtype['planDescriptionA1'];
//     }
//     else if ($type==5){
//         return $rowtype['planDescriptionA2'];
//     }
//     if ($type==6){
//         return $rowtype['planDescriptionA3'];
//     }
//     else if ($type==7){
//         return $rowtype['planDescriptionA4'];
//     }
//     else if ($type==8){
//         return $rowtype['planDescriptionA5'];
//     }
//     else if ($type==9){
//         return $rowtype['planDescriptionA6'];
//     }
//     else if ($type==10){
//         return $rowtype['planName2'];
//     }
//     else if ($type==11){
//         return $rowtype['planValue2'];
//     }
//     else if ($type==12){
//         return $rowtype['planDescriptionB1'];
//     }
//     else if ($type==13){
//         return $rowtype['planDescriptionB2'];
//     }
//     else if ($type==14){
//         return $rowtype['planDescriptionB3'];
//     }
//     else if ($type==15){
//         return $rowtype['planDescriptionB4'];
//     }
//     else if ($type==16){
//         return $rowtype['planDescriptionB5'];
//     }
//     else if ($type==17){
//         return $rowtype['planDescriptionB6'];
//     }
//     else if ($type==18){
//         return $rowtype['planName3'];
//     }
//     else if ($type==19){
//         return $rowtype['planValue3'];
//     }
//     else if ($type==20){
//         return $rowtype['planDescriptionC1'];
//     }
//     else if ($type==21){
//         return $rowtype['planDescriptionC2'];
//     }
//     else if ($type==22){
//         return $rowtype['planDescriptionC3'];
//     }
//     else if ($type==23){
//         return $rowtype['planDescriptionC4'];
//     }
//     else if ($type==24){
//         return $rowtype['planDescriptionC5'];
//     }
//     else if ($type==25){
//         return $rowtype['planDescriptionC6'];
//     }
// };

function retrievecontact($id,$type=1){
    include('variable.php');
    $conn=new mysqli($servername,$user,$passw);
    mysqli_select_db($conn,"webproject");
    $sql=" SELECT *    FROM  contact
     where contactID=".$id;
     $result=mysqli_query($conn,$sql);
    $rowtype=mysqli_fetch_assoc($result);
    //echo $sql;
    if ($type==2){
        return $rowtype['contactDetails'];
    }
    else if ($type==3){
        return $rowtype['contactLocation'];
    }
    if ($type==4){
        return $rowtype['contactPhone'];
    }
    else if ($type==5){
        return $rowtype['contactFax'];
    }
    if ($type==6){
        return $rowtype['contactEmail'];
    }
    else if ($type==7){
        return $rowtype['MapsLatitude'];
    }
    else if ($type==8){
        return $rowtype['MapsLongitude'];
    }
};

function logincheck($u,$p){
    $conn=getConnection();
    $sql="select * from tbluser where UserID='$u' and Password= '$p'";
    $result = $conn->query($sql);
		if($result-> num_rows > 0){
            $row=$result->fetch_assoc();
            $_SESSION['name']=$row['Name'];
            $_SESSION['username']=$row['UserID'];
            $_SESSION['type']=$row['UserType'];
            return true;
        }
        else{
            return false;
        }

}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function generateId($i){
    $numbers = preg_replace('/[^0-9]/', '', $i);
    $letters = preg_replace('/[^a-zA-Z]/', '', $i);

    if ($numbers<10) {
        return $letters.'0'.$numbers+1;
    } else {
        return $letters.$numbers+1;}
}

function displayselected($infoid){
    include('variable.php');
    $conn=new mysqli($servername,$user,$passw);
    $sql ="select infoID from webcontents WHERE infoID =" .$infoid;  // sql command
    mysqli_select_db($conn,"webproject"); ///select database as default
    $result=mysqli_query($conn,$sql);  // command allow sql cmd to be sent to mysql
   
    if(mysqli_num_rows($result) < 1){
      return "";
    }
    else{
      return " (template currently in-use)";
    }
}

function combineword($r,$t){
    $c=$r." ".$t;

    return $c;

}

function div1($r,$t){
    $c=$r/$t;
    return $c;
}

// --------------------------------

function showBlog(){
    $conn=getConnection();
    $sql="select * from blog limit 3";
    $result = mysqli_query($conn, $sql);
		$blogs =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($blogs, $row); 
		}
		return $blogs;
}

function showAllBlog(){
    $conn=getConnection();
    $sql="select * from blog";
    $result = mysqli_query($conn, $sql);
		$blogs =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($blogs, $row); 
		}
		return $blogs;
}

function getBlogByID($id){
    $conn=getConnection();
    $sql="select * from blog where id='$id'";
	$result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}

function getUserByID($id){
    $conn=getConnection();
    $sql="select * from tbluser where UserID='$id'";
	$result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    return $row;
}

function insertBlog($data){
    $conn=getConnection();
        $sql="insert into blog values('','{$data['blog_title']}','$data[author_name]','$data[featured_image_name]','$data[primary_content]', '$data[secondary_image_name]', '$data[secondary_content]','$data[date]')";
        if ($conn->query($sql)) {
            return true;
        }
        else{
            return false;
        }
}

function deleteBlog($id){
    $conn= getConnection();    
    $sql = "delete from blog where id={$id}";
    if ($conn->query($sql)) {
        return true;
    }
    else{
        return false;
    }
}


?>