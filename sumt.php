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
<?php
ob_start(); 
    include 'includes/conn.php'; include 'includes/session.php';
          if (isset($_GET['date'])) {
          $dt = $_GET['date'];
          $date = "  '%".$_GET['date']."%'";
      }else{
        $dt = null;
          $date = null;
      }
        if($_GET['iron'] == "1"){
        $sql123578 = "SELECT SUM(amount) as amount FROM  expenses WHERE date LIKE '%$dt%' and date > '$farom'  ";
        }
        if($_GET['iron'] == "0"){
        $sql123578 = "SELECT SUM(amount) as amount FROM  expenses WHERE account != 'شراء حديد' and date LIKE '%$dt%' and date > '$farom' ";

        }
        $result123578 = mysqli_query($conn, $sql123578);
        $row123578=mysqli_fetch_assoc($result123578);
        $sadda2 = $row123578['amount'];


?>
    <body id="body-pd">
        <div class="l-navbar ds " id="navbar">
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
                        
                        <a href="iron_smlentrance.php" class="nav__link">
                            <i class="fa fa-eraser" aria-hidden="true" class="nav__icon"></i>
                            <span class="nav__name">مشتريات حديد صغيرة</span>
                        </a>


                        <a href="iron_entrance.php" class="nav__link">
                            <i class="fa fa-cube" aria-hidden="true" class="nav__icon"></i>
                            <span class="nav__name">مشتريات حديد كبيرة</span>
                        </a>

                        <a href="iron_purchases.php" class="nav__link">
                            <i class="fa fa-shopping-cart" aria-hidden="true" class="nav__icon"></i>
                            <span class="nav__name">مبيعات حديد</span>
                        </a>

                        <a href="fuel.php" class="nav__link">
                            <i class="fa fa-filter" aria-hidden="true" class="nav__icon"></i>
                            <span class="nav__name">تعبئة سولار</span>
                        </a>
                        <a href="weights.php" class="nav__link">
                            <i class="fa fa-balance-scale" aria-hidden="true" class="nav__icon"></i>
                            <span class="nav__name">توزينات نقدية</span>
                        </a>                        
                      
                        <a href="expenses.php" class="nav__link active">
                            <i class="fa fa-shopping-basket" aria-hidden="true" class="nav__icon"></i>
                            <span class="nav__name">المصاريف</span>
                        </a>                         
                        <a href="pistones.php" class="nav__link">
                            <i class="fa fa-cubes" aria-hidden="true" class="nav__icon"></i>
                            <span class="nav__name">انتاج المكابس</span>
                        </a>                        
                        <a href="income.php" class="nav__link">
                            <i class="fa fa-money" aria-hidden="true" class="nav__icon"></i>
                            <span class="nav__name">المدخولات</span>
                        </a>
                        <a href="batteries_entrance.php" class="nav__link ">
                            <i class="fa fa-battery-three-quarters" aria-hidden="true" class="nav__icon"></i>
                            <span class="nav__name">مشتريات بطاريات</span>
                        </a>
                        <a href="muazafun.php" class="nav__link">
                            <i class="fa fa-address-card-o" aria-hidden="true" class="nav__icon"></i>
                            <span class="nav__name"> الموظفين</span>
                        </a>  
                        <a href="employee_salaries.php" class="nav__link ">
                            <i class="fa fa-id-badge" aria-hidden="true" class="nav__icon"></i>
                            <span class="nav__name">رواتب الموظفين</span>
                        </a>  
                        <a href="weekly_salaries.php" class="nav__link">
                            <i class="fa fa-calendar" aria-hidden="true" class="nav__icon"></i>
                            <span class="nav__name">الرواتب الاسبوعية</span>
                        </a> 
                        <a href="fuel_entr.php" class="nav__link">
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



        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
        

                        <center>
                    <form  method="post">



            <button type="submit" class="btn btn-primary ds" name="prnt">تهيئة للطباعة</button>


                </form>
                </center>


                <table class="table table-hover tp" style="">
                    <thead>
                        <tr>
                          <th style="width: 35%;"><center>ملاحظات</center></th>
                          <th style="width: 15%;"><center>الرصيد</center></th>                            
                          <th style="width: 15%;"><center>خارج</center></th>
                          <th style="width: 15%;"><center>داخل</center></th>
                          <th style="width: 20%;"><center> البيان</center></th>
                          <th style="width: 5%;"><center>الرقم</center></th>



                        </tr>
                      </thead>
                    <tbody id="output1" style="width: 100%;">
                            <?php
                              $datea =  date("Y-m-d");
                              $sql123578 = "SELECT SUM(amount) as amount FROM  income WHERE date < '$datea'  ";
                                $result123578 = mysqli_query($conn, $sql123578);
                                $row123578=mysqli_fetch_assoc($result123578);
                                $sadda2 = $row123578['amount'];
                                
                              $sql12357811 = "SELECT SUM(amount) as amount FROM  expenses WHERE date < '$datea'  ";
                                $result12357811 = mysqli_query($conn, $sql12357811);
                                $row12357811=mysqli_fetch_assoc($result12357811);
                                $sadda211 = $row12357811['amount'];
                                $allr = ($sadda2 -$sadda211 );
                                
                             $sql1235782 = "SELECT SUM(amount) as amount FROM  income WHERE account = 'بيع حديد' and date LIKE '%$dt%' and date = '$datea' ";
                                $result1235782 = mysqli_query($conn, $sql1235782);
                                $row1235782=mysqli_fetch_assoc($result1235782);
                                $sadda22 = $row1235782['amount'];
                                
                            $sql1235783 = "SELECT SUM(amount) as amount FROM  income WHERE account = 'مدخولات الميزان'  and date = '$datea'"; 
                                $result1235783 = mysqli_query($conn, $sql1235783);
                                $row1235783=mysqli_fetch_assoc($result1235783);
                                $sadda23 = $row1235783['amount'];
                                                                
                            $sql12357831 = "SELECT SUM(amount) as amount FROM  income WHERE account = 'تحويل رصيد'  and date = '$datea'"; 
                                $result12357831 = mysqli_query($conn, $sql12357831);
                                $row12357831=mysqli_fetch_assoc($result12357831);
                                $sadda231 = $row12357831['amount'];
                                
                                $yfa = ($sadda2 - ($sadda22 + $sadda23 + $sadda231) );
                                
                            $sql1235784 = "SELECT SUM(quantity) as quantity FROM  iron_purchases WHERE date = '$datea' ";
                                $result1235784 = mysqli_query($conn, $sql1235784);
                                $row1235784=mysqli_fetch_assoc($result1235784);
                                $sadda24 = $row1235784['quantity'];
                                
                                
                                
                            $sql1235785 = "SELECT SUM(quantity) as quantity FROM  iron_smlentrance WHERE date = '$datea' ";
                                $result1235785 = mysqli_query($conn, $sql1235785);
                                $row1235785=mysqli_fetch_assoc($result1235785);
                                $sadda25 = $row1235785['quantity'];

                                
                            $sql12357826 = "SELECT SUM(amount) as amount FROM  iron_smlentrance WHERE date = '$datea' and bg = 0 ";
                                $result12357826 = mysqli_query($conn, $sql12357826);
                                $row12357826=mysqli_fetch_assoc($result12357826);
                                $sadda26 = $row12357826['amount'];
                            
                            $sql1235787 = "SELECT SUM(amount) as amount FROM  expenses WHERE account != 'شراء حديد' and  account != 'تسليفات ' and date = '$datea'  "; 
                                $result1235787 = mysqli_query($conn, $sql1235787);
                                $row1235787=mysqli_fetch_assoc($result1235787);
                                $sadda27 = $row1235787['amount'];

       
                                   
                            $sql1235788 = "SELECT SUM(amount) as amount FROM  expenses WHERE account = 'تسليفات'  and date = '$datea'"; 
                                $result1235788 = mysqli_query($conn, $sql1235788);
                                $row1235788=mysqli_fetch_assoc($result1235788);
                                $sadda28 = $row1235788['amount'];
                                                                   
                            $sql1235789 = "SELECT SUM(amount) as amount FROM  income WHERE account = 'يافا'  and date = '$datea'"; 
                                $result1235789 = mysqli_query($conn, $sql1235789);
                                $row1235789=mysqli_fetch_assoc($result1235789);
                                $yfa = $row1235789['amount'];
                                
                                $all = ($yfa -$sadda23 - $sadda22 - $sadda231 + $sadda26 + $sadda27 + $sadda28 + $sadda29)
                            
                            ?>
                         <tr>
                              <td style=" text-align:center;" >الرصيد ما قبل العمليات</td>
                              <td style=" text-align:center;" ><?php echo $allr ;?></td>
                              <td style=" text-align:center;" >0</td>
                              <td style=" text-align:center;"><?php echo $allr ;?></td>
                              <td style=" text-align:center;"> الرصيد الاولي </td>
                              <td style=" text-align:center;">1 </td>
                        </tr>
                         <tr>
                              <td style=" text-align:center;" ></td>
                              <td style=" text-align:center;" ><?php echo ($yfa + $allr) ;?></td>
                              <td style=" text-align:center;" >0</td>
                              <td style=" text-align:center;"><?php echo $yfa ;?></td>
                              <td style=" text-align:center;"> دخل من يافا </td>
                              <td style=" text-align:center;">1 </td>
                        </tr>
                         <tr>
                              <td style=" text-align:center;" ></td>
                              <td style=" text-align:center;" ><?php echo ($yfa +$allr + $sadda23) ;?></td>
                              <td style=" text-align:center;" >0</td>
                              <td style=" text-align:center;"><?php echo $sadda23 ;?></td>
                              <td style=" text-align:center;">  خدمات التوزين  </td>
                              <td style=" text-align:center;">2 </td>
                        </tr>
                        <tr>
                              <td style=" text-align:center;" >الكمية المباعة : <?php echo $sadda24 ;?> كيلو</td>
                              <td style=" text-align:center;" ><?php echo ($yfa +$allr + $sadda23 + $sadda22) ;?></td>
                              <td style=" text-align:center;" >0</td>
                              <td style=" text-align:center;"><?php echo $sadda22 ;?></td>
                              <td style=" text-align:center;"> دخل بيع حديد  </td>
                              <td style=" text-align:center;">3 </td>
                        </tr>
                        
                        <tr>
                              <td style=" text-align:center;" >الكمية المشترية : <?php echo $sadda25 ;?> كيلو</td>
                              <td style=" text-align:center;" ><?php echo ($yfa +$allr + $sadda23 + $sadda22 - $sadda26) ;?></td>
                              <td style=" text-align:center;"><?php echo $sadda26 ;?></td>
                              <td style=" text-align:center;" >0</td>
                              <td style=" text-align:center;">  شراء الحديد   </td>
                              <td style=" text-align:center;">4 </td>
                        </tr>
                        
                         <tr>
                              <td style=" text-align:center;" > التكاليف التشغلية</td>
                              <td style=" text-align:center;" ><?php echo ($yfa +$allr + $sadda23 + $sadda22 - $sadda26 - $sadda27) ;?></td>
                              <td style=" text-align:center;"><?php echo $sadda27 ;?></td>
                              <td style=" text-align:center;" >0</td>
                              <td style=" text-align:center;"> تكاليف اخرى  </td>
                              <td style=" text-align:center;">5 </td>
                        </tr>
                         
                         <tr>
                              <td style=" text-align:center;" > </td>
                              <td style=" text-align:center;" ><?php echo ($yfa +$sadda23 + $sadda22 + $allr - $sadda26 - $sadda27 - $sadda28) ;?></td>
                              <td style=" text-align:center;"><?php echo $sadda28 ;?></td>
                              <td style=" text-align:center;" >0</td>
                              <td style=" text-align:center;"> السلف  </td>
                              <td style=" text-align:center;">6 </td>
                        </tr>
                        

                                                

                        </tbody>
                  </table>
                  
                <table class="table table-hover tp" style="">
                    <thead>
                        <tr>

                          <th style="width: 24%;"><center>المتبقي</center></th>                            
                          <th style="width: 23%;"><center>كل الخارج</center></th>
                          <th style="width: 23%;"><center>كل الداخل</center></th>
                          <th style="width: 30%;"><center></center></th>




                        </tr>
                      </thead>
                    <tbody id="output1" style="width: 100%;">
                         <tr>

                              <td style=" text-align:center;" ><?php echo ($yfa +$sadda23 + $sadda22 + $allr - $sadda26 - $sadda27 - $sadda28 - $sadda29) ;?></td>

                              <td style=" text-align:center;"><?php echo ($sadda26 +$sadda27 + $sadda28 + $sadda29)  ;?></td>
                                <td style=" text-align:center;"><?php echo ($yfa +$sadda23 + $sadda22 + $allr)  ;?></td>
                              <td style=" text-align:center;"> الرصيد المتبقي  </td>
 
                        </tr>
                            </tbody>
                </table>
                       <div style="float: right; padding-right: 20px; font-size: large;">  <?php echo $datea;?> : التاريخ</div>
                

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
                    width: 100%; margin-top: 50px;
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
        if (isset($_POST['prnt'])) {
    if($_GET['iron'] == 0){
              ?>
                <style>
          
                        .tp3{
                               display: none;
                        }
                 </style>
                 <?php
    }
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
    include 'includes/session.php';

    $quantity = $_POST['quantity'];
    $pricing = $_POST['pricing'];
    $amount = $_POST['amount'];
    $date = $_POST['date'];
    $notes = $_POST['notes'];
    $ac = $_POST['ac'];
    $datea = date("Y-m-d H:i:s" , strtotime($date));

    
    
    #$sql ="INSERT INTO `expenses`(`date`, `account`, `amount`, `notes`) VALUES ('$datea','$ac','$amount','$notes')";

        $dateas = $row['date'];
        $sql12357 = "SELECT SUM(income) as amount FROM  box ";
        $result12357 = mysqli_query($conn, $sql12357);
        $row12357=mysqli_fetch_assoc($result12357);
        $sadda1 = $row12357['amount'];

        $sql123578 = "SELECT SUM(expenses) as amount FROM  box ";
        $result123578 = mysqli_query($conn, $sql123578);
        $row123578=mysqli_fetch_assoc($result123578);
        $sadda2 = $row123578['amount'];

        $blns = ($sadda1 - $sadda2);
        $box = ($blns - $amount);
                                    
                                
    $sql ="INSERT INTO `box`(`income`, `expenses`, `box`, `ac`, `date`, `notes`) VALUES ('0','$amount','$box','$ac','$datea','$notes')";


    if ($conn->query($sql)) { 

        header('location:expenses.php ');
    }
    }
    
    
    
    if (isset($_POST['dt'])) {
        $dataas = $_POST['dataas'];
         header('location:?date='.$dataas.' ');
    }
    if (isset($_POST['chak'])) {
        $dataas = $_POST['dataas'];
         header('location:?date='.$dataas.'&iron=0 ');
    }
        if (isset($_POST['chak2'])) {
        $dataas = $_POST['dataas'];
         header('location:?date='.$dataas.'&iron=1 ');
    }
    ob_end_flush();

?>






