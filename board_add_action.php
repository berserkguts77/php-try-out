<?php
    $board_pw = $_POST["board_pw"]; // request.getParameter 변수 앞에 무조건 $를 붙인다.
    $board_title = $_POST["board_title"];
    $board_content = $_POST["board_content"];
    $board_user = $_POST["board_user"];
 
    echo "board_pw : ".$board_pw."<br>"; // .연산자는 자바의 +연산자 역활
    echo "board_title : ".$board_title."<br>";    //출력하는 것. out.print console.log 같은 것.
    echo "board_content : ".$board_content."<br>";  
    echo "board_user : ".$board_user."<br>";
 
    $conn = mysqli_connect('localhost'
                            ,'root'
                            ,'java0000'
                            ,'nodedb');
 
    $sql = "INSERT INTO board(board_pw,board_title,board_content,board_user,board_date) VALUES('".$board_pw."','".$board_title."','".$board_content."','".$board_user."',now())";
    $result = mysqli_query($conn, $sql);    // jdbc executeUpdate
 
    if($result){    // 0, null -> false, 1 -> true
        echo '입력 성공 :<br>'.$result;
        
    }else{
        echo '입력 실패 :<br>'.mysqli_error($conn);
 
    }
 
    mysqli_close($conn);
 
    header("Location: http://localhost/board_list.php");    // response.경로 메서드와 같은것
?>


