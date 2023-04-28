<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/select2@4.0.13/dist/js/select2.min.js"></script>

</head>
<?php ob_start(); 
    include 'includes/session.php';

    if(!isset($_GET['id'])){
        header('location:customers.php ');
    }
    else{
        $id = $_GET['id'];
        $sql = "SELECT * FROM weekly_salaries WHERE id = '$id'";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) == 0){
            header('location:weekly_salaries.php ');
        }
        else{
            $row=mysqli_fetch_assoc($result);   
        }
    }
?>
    <body id="body-pd">
        <div class="l-navbar ds" id="navbar">
            <nav class="nav" id="nevvv">
                <div>
                    <div class="nav__brand" onclick="eee()">
                        <ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon>
                        <p class="nav__logo">القائمة</p>
                    </div>
                    <div class="nav__list">
                        <a href="index.php" class="nav__link">
                            <i class="fa fa-home" aria-hidden="true" class="nav__icon"></i>
                            <span class="nav__name"> الصفحة الرئيسية</span>
                        </a>
                        
                        <a href="iron_smlentrance.php" class="nav__link ">
                            <i class="fa fa-eraser" aria-hidden="true" class="nav__icon"></i>
                            <span class="nav__name">مشتريات حديد صغيرة</span>
                        </a>


                        <a href="iron_entrance.php" class="nav__link ">
                            <i class="fa fa-cube" aria-hidden="true" class="nav__icon"></i>
                            <span class="nav__name">مشتريات حديد كبيرة</span>
                        </a>

                        <a href="iron_purchases.php" class="nav__link ">
                            <i class="fa fa-shopping-cart" aria-hidden="true" class="nav__icon"></i>
                            <span class="nav__name">مبيعات حديد</span>
                        </a>

                        <a href="fuel.php" class="nav__link ">
                            <i class="fa fa-filter" aria-hidden="true" class="nav__icon"></i>
                            <span class="nav__name">تعبئة سولار</span>
                        </a>
                        <a href="weights.php" class="nav__link">
                            <i class="fa fa-balance-scale" aria-hidden="true" class="nav__icon"></i>
                            <span class="nav__name">توزينات نقدية</span>
                        </a>                        
                      
                        <a href="expenses.php" class="nav__link ">
                            <i class="fa fa-shopping-basket" aria-hidden="true" class="nav__icon"></i>
                            <span class="nav__name">المصاريف</span>
                        </a>                         
                        <a href="pistones.php" class="nav__link ">
                            <i class="fa fa-cubes" aria-hidden="true" class="nav__icon"></i>
                            <span class="nav__name">انتاج المكابس</span>
                        </a>                        
                        <a href="income.php" class="nav__link ">
                            <i class="fa fa-money" aria-hidden="true" class="nav__icon"></i>
                            <span class="nav__name">المدخولات</span>
                        </a>
                        <a href="batteries_entrance.php" class="nav__link ">
                            <i class="fa fa-battery-three-quarters" aria-hidden="true" class="nav__icon"></i>
                            <span class="nav__name">مشتريات بطاريات</span>
                        </a>
                        <a href="muazafun.php" class="nav__link ">
                            <i class="fa fa-address-card-o" aria-hidden="true" class="nav__icon"></i>
                            <span class="nav__name"> الموظفين</span>
                        </a>  
                        <a href="employee_salaries.php" class="nav__link ">
                            <i class="fa fa-id-badge" aria-hidden="true" class="nav__icon"></i>
                            <span class="nav__name">رواتب الموظفين</span>
                        </a>  
                        <a href="weekly_salaries.php" class="nav__link active">
                            <i class="fa fa-calendar" aria-hidden="true" class="nav__icon"></i>
                            <span class="nav__name">الرواتب الاسبوعية</span>
                        </a> 
                        <a href="fuel_entr.php" class="nav__link ">
                            <i class="fa fa-filter" aria-hidden="true" class="nav__icon"></i>
                            <span class="nav__name">مدخولات السولار</span>
                        </a>
                        <a href="advance.php" class="nav__link ">
                            <i class="fa fa-hourglass-half" aria-hidden="true" class="nav__icon"></i>
                            <span class="nav__name">تسليفات العمال</span>
                        </a>
                        <a href="iron_out.php" class="nav__link ">
                            <i class="fa fa-sign-out" aria-hidden="true" class="nav__icon"></i>
                            <span class="nav__name">تصدير الحديد</span>
                        </a>
                        <a href="customers.php" class="nav__link ">
                            <i class="fa fa-user-circle" aria-hidden="true" class="nav__icon"></i>
                            <span class="nav__name">الزبائن</span>
                        </a>
                        <a href="accountes.php" class="nav__link ">
                            <i class="fa fa-user-circle-o" aria-hidden="true" class="nav__icon"></i>
                            <span class="nav__name">الحسابات</span>
                        </a>
                    </div>
                </div>

            </nav>
        </div>

        <h1 style="margin-left:700px ;  position: absolute;"class="ds">رواتب الموظفين للاسبوع رقم :<?php echo $row['id']; ?></h1>
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
                            <form  method="post">
                                            <button type="submit" class="btn btn-primary ds" name="prnt">طباعة</button>


                </form>
                <div style="float: right;position: absolute; margin-left:1100px ; margin-top: 100px; font-size: x-large" class="ds">:الحركات</div>
                <table class="table table-hover tp" >
                    <thead>
                        <tr>
                          <th style="width: 15%;"><center>ملاحظات</center></th>
                          <th style="width: 15%;"><center>الراتب المعطى</center></th>
                          <th style="width: 10%;"><center>السلف</center></th>
                          <th style="width: 10%;"><center>المبلغ المطلوب</center></th>
                          <th style="width: 10%;"><center>الراتب اليومي</center></th>
                          <th style="width: 10%;"><center>ايام العمل</center></th>
                          <th style="width: 25%;"><center>اسم الموظف</center></th>
                          <th style="width: 5%;"><center>الرقم</center></th>



                        </tr>
                      </thead>
                    <tbody id="output1" style="width: 100%;">
                        <?php
                                  include 'includes/conn.php';
                                    $sql = "SELECT * FROM employee_salaries WHERE weekly_salaries_id = '$id' ORDER BY id DESC";
                                    $result = mysqli_query($conn, $sql);
                                    if(mysqli_num_rows($result)>0){
                                        while ($row=mysqli_fetch_assoc($result)) {
                                            echo '
                                        	<tr dir="rtl"> 
                                            <td style=" text-align:center; width: %;">'.$row['notes'].'</td>
                                            <td style=" text-align:center; width: %;">'.$row['amount'].'</td>
                                            <td style=" text-align:center; width: %;">'.$row['advance'].'</td>
                                            <td style=" text-align:center; width: %;">'.($row['daily_salary'] * $row['days']) .'</td>
                                            <td style=" text-align:center; width: %;">'.$row['daily_salary'].'</td>
                                            <td style=" text-align:center; width: %;">'.$row['days'].'</td>
                                            <td style=" text-align:center; width: %;">'.$row['name'].'</td>
                                            <td style=" text-align:center; width: %;">'.$row['id'].'</td>
                                            </tr>';                
                                        }
                                    }
                        ?>
                    </tbody>
                  </table>
                  
                                  <table class="table table-hover tp" style="">

                    <tbody id="output1" style="width: 100%;">
                    <?php
                        include 'includes/conn.php';
                                $id = $_GET['id'];
                            $sql123578 = "SELECT SUM(days) as days FROM  employee_salaries WHERE weekly_salaries_id = '$id' ";
                            $sql1235782 = "SELECT AVG(daily_salary) as daily_salary FROM  employee_salaries WHERE weekly_salaries_id = '$id' ";
                            $sql1235783 = "SELECT SUM(advance) as advance FROM  employee_salaries WHERE weekly_salaries_id = '$id' ";
                            $sql1235784 = "SELECT SUM(amount) as amount FROM  employee_salaries WHERE weekly_salaries_id = '$id' ";
                            
                            $result123578 = mysqli_query($conn, $sql123578);
                            $row123578=mysqli_fetch_assoc($result123578);
                            $sadda2 = $row123578['days'];
                            
                            $result1235782 = mysqli_query($conn, $sql1235782);
                            $row1235782=mysqli_fetch_assoc($result1235782);
                            $sadda22 = $row1235782['daily_salary'];
                            
                            $result1235783 = mysqli_query($conn, $sql1235783);
                            $row1235783=mysqli_fetch_assoc($result1235783);
                            $sadda23 = $row1235783['advance'];
                            
                            $result1235784 = mysqli_query($conn, $sql1235784);
                            $row1235784=mysqli_fetch_assoc($result1235784);
                            $sadda24 = $row1235784['amount'];
                    ?>

              <td style=" text-align:center;">المبلغ الصافي : <?php echo $sadda24; ?> شيكل </td>
              <td style=" text-align:center;">السلف : <?php echo $sadda23; ?> شيكل </td>
              <td style=" text-align:center;">المبلغ المطلوب : <?php echo ($sadda2 * $sadda22); ?> شيكل </td>
              <td style=" text-align:center;">متوسط راتب الموظف : <?php echo $sadda22; ?> شيكل </td>
              <td style=" text-align:center;">مجموع ايام العمل : <?php echo $sadda2; ?> يوم </td>
                            </tr>
                        </tbody>
                  </table>
                  
                  <?php 
                            $sql123578 = "SELECT * FROM  weekly_salaries WHERE id = '$id' ";
                            
                            $result123578 = mysqli_query($conn, $sql123578);
                            $row123578=mysqli_fetch_assoc($result123578);
                            $sadda = $row123578['thursday_date'];
                            $from = date("Y-m-d " , (strtotime($sadda) - strtotime("-5 days")));
                  ?>
<div style="float: right; padding-right: 20px;"> رواتب الموظفين للاسبوع  <?php echo $sadda ;?></div>
    </body>
</html>
<?php
    if (isset($_POST['prnt'])) {
        ?>
        <style>
                .ds{
                        display: none;
                }
                .tp{
                    width: 100%; margin-top: 0px;
                }
                table {
                  border-collapse: collapse;
                  
                }                

                table, tbody {
                  border: 1px solid black;
                }
                td{
                     border: 1px solid black;

                }
                td {
    height: min-content;
                }
        </style>
        <?php
    }
    else{
    
?>
<style>
        /*===== GOOGLE FONTS =====*/
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap");

    /*===== VARIABLES CSS =====*/
    @media screen and (max-width: 500px){
        .mstera{
            margin-left:20px ;  width: 280px;
        }
        .ihra{
            display: none;
        }
    }

    @media screen and (min-width: 1000px) {
        .mstera{
            margin-left:1000px ;  position: absolute;
        }
        .ihra{
            float: right;position: absolute; margin-left:1100px ; margin-top: 120px; font-size: x-large
        }
    }
                    .tp{
                    width: 100%; margin-top: 150px;
                }
                .ds2{
                     display: none;
                }
    :root{
    --nav-width: 92px;

    /*===== Colores =====*/
    --first-color: #0C5DF4;
    --bg-color: #12192C;
    --sub-color: #B6CEFC;
    --white-color: #FFF;
    
    /*===== Fuente y tipografia =====*/
    --body-font: 'Poppins', sans-serif;
    --normal-font-size: 1rem;
    --small-font-size: .875rem;
    
    /*===== z index =====*/
    --z-fixed: 100;
    }


    /*===== BASE =====*/
    *,::before,::after{
    box-sizing: border-box;
    }
    body{
    position: relative;
    margin: 0;
    padding: 2rem 0 0 6.75rem;
    font-size: var(--normal-font-size);
    transition: .5s;
    }
    h1{
    margin: 0;
    }
    ul{
    margin: 0;
    padding: 0;
    list-style: none;
    }
    a{
    text-decoration: none;
    }

    /*===== l NAV =====*/
    .l-navbar{
    position: fixed;
    top: 0;
    left: 0;
    width: var(--nav-width);
    height: 100vh;
    background-color: var(--bg-color);
    color: var(--white-color);
    padding: 1.5rem 1.5rem 2rem;
    transition: .5s;
    z-index: var(--z-fixed);
    }

    /*===== NAV =====*/
    .nav{
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    overflow:auto;
    }
    .nav__brand{
    display: grid;
    grid-template-columns: max-content max-content;
    justify-content: space-between;
    align-items: center;
    margin-bottom: 2rem;
    }
    .nav__toggle{
    font-size: 1.25rem;
    padding: .75rem;
    cursor: pointer;
    }
    .nav__logo{
    color: var(--white-color);
    font-weight: 600;
    }

    .nav__link{
    display: grid;
    grid-template-columns: max-content max-content;
    align-items: center;
    column-gap: .75rem;
    padding: .75rem;
    color: var(--white-color);
    border-radius: .5rem;
    margin-bottom: 1rem;
    transition: .3s;
    cursor: pointer;
    }
    .nav__link:hover{
    background-color: var(--first-color);
    }
    .nav__icon{
    font-size: 1.7rem;
    }
    .nav__name{
    font-size: var(--small-font-size);
    }

    /*Expander menu*/
    .expander{
    width: calc(var(--nav-width) + 9.25rem);
    
    }

    /*Add padding body*/
    .body-pd{
    padding: 2rem 0 0 16rem;
    

    }

    /*Active links menu*/
    .active{
    background-color: var(--first-color);
    }

    /*===== COLLAPSE =====*/
    .collapse{
    grid-template-columns: 20px max-content 1fr;
    }
    .collapse__link{
    justify-self: flex-end;
    transition: .5s;
    }
    .collapse__menu{
    display: none;
    padding: .75rem 2.25rem;
    }
    .collapse__sublink{
    color: var(--sub-color);
    font-size: var(--small-font-size);
    }
    .collapse__sublink:hover{
    color: white;
    }

    /*Show collapse*/
    .showCollapse{
    display: block;
    }

    /*Rotate icon*/
    .rotate{
    transform: rotate(180deg);
    }
    .nav::-webkit-scrollbar {
    width: 5px;               /* width of the entire scrollbar */
    margin-left:auto;
    }

    .nav::-webkit-scrollbar-track {
    background: none;        /* color of the tracking area */
    }

    .nav::-webkit-scrollbar-thumb {
    background-color: black;    /* color of the scroll thumb */
    border-radius: 20px;       /* roundness of the scroll thumb */
    border: 3px solid none;  /* creates padding around scroll thumb */
    }
</style>

<?php
}
?>

<script>
        /*===== EXPANDER MENU  =====*/ 
    const showMenu = (toggleId, navbarId, bodyId)=>{
    const toggle = document.getElementById(toggleId),
    navbar = document.getElementById(navbarId),
    bodypadding = document.getElementById(bodyId)

    if(toggle && navbar){
        toggle.addEventListener('click', ()=>{
        navbar.classList.toggle('expander')
        document.getElementsByClassName('nav').style.overflow = "scroll";
        bodypadding.classList.toggle('body-pd')
        })
    }
    }
    showMenu('nav-toggle','navbar','body-pd')

    /*===== LINK ACTIVE  =====*/ 
    const linkColor = document.querySelectorAll('.nav__link')
    function colorLink(){
    linkColor.forEach(l=> l.classList.remove('active'))
    this.classList.add('active')
    }
    linkColor.forEach(l=> l.addEventListener('click', colorLink))


    /*===== COLLAPSE MENU  =====*/ 
    const linkCollapse = document.getElementsByClassName('collapse__link')
    var i

    for(i=0;i<linkCollapse.length;i++){
    linkCollapse[i].addEventListener('click', function(){
        const collapseMenu = this.nextElementSibling
        collapseMenu.classList.toggle('showCollapse')

        const rotate = collapseMenu.previousElementSibling
        rotate.classList.toggle('rotate')
    })
    }
   function eee(){
    var x = document.getElementById("nav");
    if (x.style.overflow === "hidden") {
        x.style.overflow === "scroll";
    }
    else{
        x.style.overflow === "hidden";
    }
   }

</script>
<?php

if (isset($_POST['add'])) {

    $name = $_POST['name'];
    $amount = $_POST['amount'];
    $notes = $_POST['notes'];
    $type = $_POST['type'];
    $datea = date("Y-m-d H:i:s");
    $sql ="INSERT INTO `customers`(`name`, `type`, `balance`, `notes`) VALUES ('$name', '$type', '$amount','$notes')";

    if ($conn->query($sql)) { 

        header('location:customers.php ');
    }
    }

    ob_end_flush();

?>
