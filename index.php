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
<?php ob_start(); ?>
    <body id="body-pd">
    <div class="l-navbar " id="navbar">
            <nav class="nav" id="nevvv">
                <div>
                    <div class="nav__brand" onclick="eee()">
                        <ion-icon name="menu-outline" class="nav__toggle" id="nav-toggle"></ion-icon>
                        <p class="nav__logo">القائمة</p>
                    </div>
                    <div class="nav__list">
                        <a href="index.php" class="nav__link active">
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
                        <a href="weights.php" class="nav__link ">
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
                        <a href="weekly_salaries.php" class="nav__link ">
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

        <h1 style="" class="hme">الصفحة الرئيسية</h1>
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
<br>
<div>
    <?php
                                            include 'includes/session.php';

            $sql1 = "SELECT MAX(id) as id FROM piston3";
            $result1 = mysqli_query($conn, $sql1);
            $row1=mysqli_fetch_assoc($result1);
            $pst1id = $row1['id'];

            $sql12 = "SELECT * FROM piston3 WHERE id = '$pst1id'";
            $result12 = mysqli_query($conn, $sql12);
            $row12=mysqli_fetch_assoc($result12);
            $pst3idm3 = $row12['m3'];
            $pst3idm4 = $row12['m4'];
            $pst3idete = $row12['date'];




            $sql12 = "SELECT MAX(id) as id FROM piston2";
            $result12 = mysqli_query($conn, $sql12);
            $row12=mysqli_fetch_assoc($result12);
            $pst2id = $row12['id'];

            $sql123 = "SELECT * FROM piston2 WHERE id = '$pst2id'";
            $result123 = mysqli_query($conn, $sql123);
            $row123=mysqli_fetch_assoc($result123);
            $pst2idm3 = $row123['m3'];
            $pst2idm4 = $row123['m4'];
            $pst2idete = $row123['date'];


            $sql123 = "SELECT MAX(id) as id FROM piston1";
            $result123 = mysqli_query($conn, $sql123);
            $row123=mysqli_fetch_assoc($result123);
            $pst1id = $row123['id'];

            $sql1234 = "SELECT * FROM piston1 WHERE id = '$pst1id'";
            $result1234 = mysqli_query($conn, $sql1234);
            $row1234=mysqli_fetch_assoc($result1234);
            $pst1idm3 = $row1234['m3'];
            $pst1idm4 = $row1234['m4'];
            $pst1idete = $row1234['date'];



            $sql1234 = "SELECT SUM(quantity) as quantity FROM iron_smlentrance WHERE date > '$farom'";#اضافة الوقتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتت
            $result1234 = mysqli_query($conn, $sql1234);
            $row1234=mysqli_fetch_assoc($result1234);
            $iron = $row1234['quantity'];


            $sql1235 = "SELECT MAX(id) as id FROM iron_smlentrance WHERE date > '$farom'";
            $result1235 = mysqli_query($conn, $sql1235);
            $row1235=mysqli_fetch_assoc($result1235);
            $ironid = $row1235['id'];

            $sql12346 = "SELECT * FROM iron_smlentrance WHERE id = '$ironid' and date > '$farom'";
            $result12346 = mysqli_query($conn, $sql12346);
            $row12346=mysqli_fetch_assoc($result12346);
            $irondta = $row12346['date'];

            $sql12357 = "SELECT SUM(amount) as amount FROM  income WHERE date > '$farom'";
            $result12357 = mysqli_query($conn, $sql12357);
            $row12357=mysqli_fetch_assoc($result12357);
            $sadda1 = $row12357['amount'];

            $sql123578 = "SELECT SUM(amount) as amount FROM  expenses WHERE date > '$farom'";
            $result123578 = mysqli_query($conn, $sql123578);
            $row123578=mysqli_fetch_assoc($result123578);
            $sadda2 = $row123578['amount'];
            

            $blns = ($sadda1 - $sadda2);


            $sql1235789 = "SELECT SUM(quantity) as quantity FROM  fuel_entr ";
            $result1235789 = mysqli_query($conn, $sql1235789);
            $row1235789=mysqli_fetch_assoc($result1235789);
            $sv1 = $row1235789['quantity'];

            $sql1235781 = "SELECT SUM(quantity) as quantity FROM  fuel";
            $result1235781 = mysqli_query($conn, $sql1235781);
            $row1235781=mysqli_fetch_assoc($result1235781);
            $sv2 = $row1235781['quantity'];
            

            $blnsv = ($sv1 - $sv2);


            $sql12352 = "SELECT MAX(id) as id FROM fuel";
            $result12352 = mysqli_query($conn, $sql12352);
            $row12352=mysqli_fetch_assoc($result12352);
            $fuelid = $row12352['id'];

            $sql123463 = "SELECT * FROM fuel WHERE id = '$fuelid'";
            $result123463 = mysqli_query($conn, $sql123463);
            $row123463=mysqli_fetch_assoc($result123463);
            $fuledate = $row123463['date'];




            $sql12343 = "SELECT SUM(quantity) as quantity FROM batteries_entrance WHERE date > '$farom'";#اضافة الوقتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتتت
            $result12343 = mysqli_query($conn, $sql12343);
            $row12343=mysqli_fetch_assoc($result12343);
            $bytr = $row12343['quantity'];


            $sql12354 = "SELECT MAX(id) as id FROM batteries_entrance WHERE date > '$farom'";
            $result12354 = mysqli_query($conn, $sql12354);
            $row12354=mysqli_fetch_assoc($result12354);
            $bytrid = $row12354['id'];

            $sql123465 = "SELECT * FROM batteries_entrance WHERE id = '$bytrid' and date > '$farom'";
            $result123465 = mysqli_query($conn, $sql123465);
            $row123465=mysqli_fetch_assoc($result123465);
            $bytrdete = $row123465['date'];
    ?>
</div>

                    <div class="card text-white bg-danger mb-3 p m1" style="">
                        <div class="card-header"><span style="float: right;"> انتاج المكبس (الاخير)</span></div>
                        <div class="card-body ">
                            <h5 class="card-title"><span style="float: right;">مشاطيح 3 : <span> <?php echo $pst3idm3;?> مشطاح</span> <br> مشاطيج 4 : <span> <?php echo $pst3idm4;?> مشطاح</span></span></h5><br><br>
                            <p class="card-text"><span style="float: right;"> التاريخ: <span> <?php echo $pst3idete;?></span>  </span></p>
                        </div>
                    </div>
                    <div class="card text-dark bg-warning mb-3 p m2" style="">
                        <div class="card-header"><span style="float: right;"> انتاج المكبس (الوسط)</span></div>
                        <div class="card-body ">
                        <h5 class="card-title"><span style="float: right;">مشاطيح 3 : <span> <?php echo $pst2idm3;?> مشطاح</span> <br> مشاطيج 4 : <span> <?php echo $pst2idm4;?> مشطاح</span></span></h5><br><br>
                        <p class="card-text"><span style="float: right;"> التاريخ: <span> <?php echo $pst2idete;?></span>  </span></p>
                        </div>
                    </div>
                    <div class="card text-white bg-success mb-3 p m3" style="">
                        <div class="card-header"><span style="float: right;"> انتاج المكبس (الصغير)</span></div>
                        <div class="card-body ">
                        <h5 class="card-title"><span style="float: right;">مشاطيح 3 : <span> <?php echo $pst1idm3;?> مشطاح</span> <br> مشاطيج 4 : <span> <?php echo $pst1idm4;?> مشطاح</span></span></h5><br><br>
                        <p class="card-text"><span style="float: right;"> التاريخ: <span> <?php echo $pst1idete;?></span>  </span></p>
                        </div>
                    </div>

                    <div class="card text-dark bg-light mb-3 p m4" style="">
                        <div class="card-header"><span style="float: right;"> البنزين المتوفر</span></div>
                        <div class="card-body ">
                            <h5 class="card-title"><span style="float: right;"> الكمية: <?php echo $blnsv ;?> لتر</span></h5>
                            <p class="card-text"><span style="float: right;"> اخر  سحب : <?php echo $fuledate ; ?></span></p>
                        </div>
                    </div>
                    <div class="card text-white bg-secondary mb-3 p m5" style="">
                        <div class="card-header"><span style="float: right;"> رصيد الصندوق الحالي</span></div>
                        <div class="card-body ">
                            <h5 class="card-title"><span style="float: right;"> الرصيد : <?php echo $blns; ?> ش</span></h5>
                        </div>
                    </div>
                    
                    <div class="card text-white bg-primary mb-3 p m6" style="">
                        <div class="card-header"><span style="float: right;"> الحديد المشتري اليوم</span></div>
                        <div class="card-body ">
                            <h5 class="card-title"><span style="float: right;"> الكمية : <?php echo $iron ; ?> كيلوغرام</span></h5>
                            <p class="card-text"><span style="float: right;"> اخر شراء : <?php echo $irondta ; ?></span></p>
                        </div>
                    </div>

                 <div style="margin-top: 330px; font-size: 25px; float: right; padding-right: 50px;">:التقارير</div>

                        <div class="card text-end mb-3 border-primary t1" >
                              <div class="card-header">التقرير المالي الاساسي</div>
                          <div class="card-body">

                            <p class="card-text">اطلع على جميع الايرادات والمصروفات من بداية الاسبوع حتى الان</p>
                            <a href="sum.php" class="btn btn-primary">مشاهدة التقرير</a>
                          </div>
                        </div>
                        <div class="card text-end mb-3 border-dark  t2" >
                              <div class="card-header">التقرير المالي اليومي</div>
                          <div class="card-body">

                            <p class="card-text">اطلع على جميع الايرادات والمصروفات ومشتريات الحديد التي جرت اليوم</p>
                            <a href="sumt.php" class="btn btn-dark ">مشاهدة التقرير</a>
                          </div>
                        </div>
                        
                        <div class="card text-end mb-3 border-success    t3" >
                              <div class="card-header">تقرير استهلاك الوقود </div>
                          <div class="card-body">

                            <p class="card-text">اطلع على جميع حركات سحب الوقود وكمية سحب الاليات الموجودة</p>
                            <a href="sumf.php" class="btn btn-success   ">مشاهدة التقرير</a>
                          </div>
                        </div>

    </body>
</html>
<style>
        /*===== GOOGLE FONTS =====*/
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap");
    .p{
        position: absolute;
    }
    /*===== VARIABLES CSS =====*/
    @media screen and (max-width: 500px){
        .hme {
            margin-left: 50px;
            width: 200px;
            text-align: center;
        }
        .m1{
            width: 17rem; margin-left: rem ;margin-top: 480px;
        }
        .m2{
            width: 17rem; margin-left: rem;margin-top: 310px;
        }
        .m3{
            width: 17rem; margin-left: rem;margin-top:140px;
        }
        .m4{
            width: 17rem; margin-left: rem;margin-top: 650px;
        }
        .m5{
            width: 17rem; margin-left: rem;margin-top: 790px;
        }
        .m6{
            width: 17rem; margin-left: rem;margin-top: 0px;
        }
        .m7{
            width: 17rem; margin-left: rem;margin-top: 900px;
        }
        .t1{
            width: 17rem; margin-left: rem;margin-top: 1000px;
        }
                .t2{
            width: 17rem; margin-left: rem;margin-top: 000px;
        }
                .t3{
            width: 17rem; margin-left: rem;margin-top: 00px;
        }
    }
    @media screen and (min-width: 1000px) {
        .hme{
            margin-left:880px ;
        }
        .m1{
            width: 18rem; margin-left: 19rem;
        }
        .m2{
            width: 18rem; margin-left: 38rem;
        }
        .m3{
            width: 18rem; margin-left: 57rem;
        }
        .m4{
            width: 18rem; margin-left: 19rem;margin-top: 180px;
        }
        .m5{
            width: 18rem; margin-left: 38rem;margin-top: 180px;
        }
        .m6{
            width: 18rem; margin-left: 57rem;margin-top: 180px;
        }
        .m7{
            width: 18rem; margin-left: 57rem;margin-top: 330px;
        }
        .t1{
            width: 18rem; margin-left: 57rem;margin-top: 380px; position: absolute;
        }
        .t2{
            width: 18rem; margin-left: 38rem;margin-top: 380px; position: absolute;
        }
        .t3{
            width: 18rem; margin-left: 19rem;margin-top: 380px; position: absolute;
        }
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
    $amount = $_POST['amount'];
    $date = $_POST['date'];
    $notes = $_POST['notes'];
    $datea = date("Y-m-d H:i:s" , strtotime($date));
    $sql ="INSERT INTO `weights`(`date`, `weight`, `amount`, `notes`) VALUES ('$datea','$quantity','$amount','$notes')";
    $sql2 ="INSERT INTO `income`(`date`, `account`, `amount`, `notes`) VALUES ('$datea','مدخولات المزليق','$amount','$notes . دخل مزليق')";

    if ($conn->query($sql) && $conn->query($sql2)) { 

        header('location:weights.php ');
    }
    }

    ob_end_flush();

?>
