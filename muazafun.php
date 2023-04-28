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
<?php ob_start();    include 'includes/session.php'; ?>
    <body id="body-pd">
        <div class="l-navbar " id="navbar">
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
                        <a href="pistones.php" class="nav__link">
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
                        <a href="muazafun.php" class="nav__link active">
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

        <h1 style="margin-left:900px ;  position: absolute;">الموظفين</h1>
        <script src="https://unpkg.com/ionicons@5.1.2/dist/ionicons.js"></script>
        
        <div style="float: right;position: absolute; font-size: x-large; margin-top: 50px;"><button type="button" class="btn btn-primary btn-lg" data-bs-toggle="modal" data-bs-target="#name">اضافة موظف جديد</button></div>
                <div class="modal fade" id="name"  tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <form method="post">
                        <div class="modal-dialog ">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">اضافة موظف جديد</h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    
                                    <div style="float: right;">: الاسم</div>
                                    <div class="form-group">
                                        <input type="text" dir="rtl" placeholder="اسم الحساب" required class="form-control" name="name"  style="float: right;">
                                    </div>

                                    <div style="float: right;">: الراتب اليومي</div>
                                    <div class="form-group">
                                        <input type="number" dir="rtl" placeholder="راتب الموظف اليومي"  required class="form-control" name="amount" style="float: right;">
                                    </div>

                                    <div style="float: right;">: تاريخ الميلاد</div>
                                    <div class="form-group">
                                        <input type="date" dir="rtl" placeholder="تاريخ ميلاد الموظف"  required class="form-control" name="brtday" style="float: right;">
                                    </div>

                                    <div style="float: right;">: تاريخ التوظيف</div>
                                    <div class="form-group">
                                        <input type="date" dir="rtl" placeholder="تاريخ توظيف الموظف"  required class="form-control" name="toyzufdete" style="float: right;">
                                    </div>

                                    <div style="float: right;">: ملاحظات</div>
                                    <div class="form-group">
                                        <input type="text" dir="rtl"placeholder="ملاحظات" class="form-control" name="notes"  style="float: right;">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">الغاء</button>
                                    <button type="submit" class="btn btn-primary" name="add">اضافة</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div style="float: right;position: absolute; margin-left:1100px ; margin-top: 100px; font-size: x-large">:الموظفين</div>
                <table class="table table-hover" style="width: 100%; margin-top: 150px;">
                    <thead>
                        <tr>
                          <th style="width: 20%;"><center>الراتب اليومي</center></th>
                          <th style="width: 20%;"><center>تاريخ التوظيف</center></th>
                          <th style="width: 20%;"><center>تاريخ الميلاد</center></th>
                          <th style="width: 20%;"><center> الاسم</center></th>
                          <th style="width: 20%;"><center>الرقم</center></th>



                        </tr>
                      </thead>
                    <tbody id="output1" style="width: 100%;">
                    <?php
                              include 'includes/conn.php';
                                $sql = "SELECT * FROM muazafun ORDER BY id DESC";
                                $result = mysqli_query($conn, $sql);
                                if(mysqli_num_rows($result)>0){
                                    while ($row=mysqli_fetch_assoc($result)) {
                                        echo '
                                    	<tr dir="rtl"> 
                                        <td style=" text-align:center; width: 30%;">'.$row['ratbday'].'</td>
                                        <td style=" text-align:center; width: 30%;">'.$row['toyzufdete'].'</td>
                                        <td style=" text-align:center; width: 25%;">'.$row['brtday'].'</td>
                                        <td style=" text-align:center; width: 25%;">'.$row['name'].'</td>
                                        <td style=" text-align:center; width: 20%;">'.$row['id'].'</td>
                                        </tr>';                
                                    }
                                }
                    ?>
                    </tbody>
                  </table>
    </body>
</html>
<style>
        /*===== GOOGLE FONTS =====*/
    @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap");

    /*===== VARIABLES CSS =====*/
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
 

    $name = $_POST['name'];
    $ratbday = $_POST['amount'];
    $notes = $_POST['notes'];
    $toyzufdete1 = $_POST['toyzufdete'];
    $brtday1 = $_POST['brtday'];
    $toyzufdete = date("Y-m-d H:i:s" , strtotime($toyzufdete1));
    $brtday = date("Y-m-d H:i:s" , strtotime($brtday1));
    $sql ="INSERT INTO `muazafun`(`name`, `brtday`, `ratbday`,`toyzufdete`, `notes`) VALUES ('$name','$brtday','$ratbday','$toyzufdete','$notes')";

    if ($conn->query($sql)) { 

        header('location:muazafun.php ');
    }
    }


    ob_end_flush();

?>