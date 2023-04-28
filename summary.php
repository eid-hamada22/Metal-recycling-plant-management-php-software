<?php
  $fthp = "00";

  @$ironp = "00";#المصروافات/مشتريات حديد
  @$eatp = "00";#المصروافات/مشتريات الطعام
  @$drinkp = "00";#المصروافات/مشتريات الشراب
  @$syanip = "100";#المصروافات/الصيانة
  @$solfp = "00";#المصروافات/السولف
  @$elsop = "00";#المصروافات/اخرى
  @$allp =($ironp+$eatp+$drinkp+$solfp+$syanip+$elsop);#المجموع

  $fthz = "00";

  $mtorz = "00";#البنزين/الماتور
  $ba8erz = "020";#البنزين/الباقر
  $mzly8z = "00";#البنزين/المزليق
  $carz = "00";#البنزين/سيارة تارقيت
  $elsoz = "00";#البنزين/اخرى
  $allz =($mtorz+$ba8erz+$mzly8z+$carz+$elsoz);#المجموع



  $ironn_sbt = "366";
  $ironn_ahd = "1290";
  $ironn_etnyn = "290";
  $ironn_tlath = "400";
  $ironn_arb3 = "65";
  $ironn_hamys = "90";
  $ironn_all = ($ironn_sbt+$ironn_ahd+$ironn_etnyn+$ironn_tlath+$ironn_arb3+$ironn_hamys);#المجموع

  $iron_avgter = "00";#متوسط سعر البيع
  $iron_neettobe = "00";#سعر البيع المفترض
  $iron_be = "00";#سعر البيع الحقيقي
  $iron_sell = "00";#الحديد المباع

  $alliron = "00";

  $tuzynenter = "00";
  $ironseal = "00";
  $allanter =($tuzynenter+$ironseal);#المجموع


  $ironn_sbt1 = "5";
  $ironn_ahd1 = "0";
  $ironn_etnyn1 = "0";
  $ironn_tlath1 = "00";
  $ironn_arb31 = "00";
  $ironn_hamys1 = "00";
  $ironn_all1 = ($ironn_sbt1+$ironn_ahd1+$ironn_etnyn1+$ironn_tlath1+$ironn_arb31+$ironn_hamys1);#المجموع

  $ironn_sbt2 = "7";
  $ironn_ahd2 = "8";
  $ironn_etnyn2 = "7";
  $ironn_tlath2 = "00";
  $ironn_arb32 = "00";
  $ironn_hamys2 = "00";
  $ironn_all2 = ($ironn_sbt2+$ironn_ahd2+$ironn_etnyn2+$ironn_tlath2+$ironn_arb32+$ironn_hamys2);#المجموع

  $ironn_sbt3 = "13";
  $ironn_ahd3 = "11";
  $ironn_etnyn3 = "12";
  $ironn_tlath3 = "00";
  $ironn_arb33 = "00";
  $ironn_hamys3 = "00";
  $ironn_all3 = ($ironn_sbt3+$ironn_ahd3+$ironn_etnyn3+$ironn_tlath3+$ironn_arb33+$ironn_hamys3);#المجموع
?>



<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
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


  <head>
    <!--Load the AJAX API-->
    <script type="text/javascript" src="https://www.google.com/jsapi"></script>
    <script type="text/javascript">
          google.charts.load('current', {packages: ['corechart','bar']});//add multiple packages
          google.charts.setOnLoadCallback(drawMaterial); //call there corresponsing draw functions
          google.charts.setOnLoadCallback(drawChart);//call there corresponsing draw functions
          google.charts.setOnLoadCallback(drawAnnotations);//call there corresponsing draw functions
          google.charts.setOnLoadCallback(drawStacked);//call there corresponsing draw functions

          function drawMaterial() { // add each function definition
                  var data = google.visualization.arrayToDataTable([
                ['اليوم', 'مكبس 1', 'مكبس 2', 'مكبس 3'],
                ['السبت', <?php echo $ironn_sbt1;?>, <?php echo $ironn_sbt2;?>, <?php echo $ironn_sbt3;?>],
                ['الاحد', <?php echo $ironn_ahd1;?>, <?php echo $ironn_ahd2;?>, <?php echo $ironn_ahd3;?>],
                ['الاثنين', <?php echo $ironn_etnyn1;?>, <?php echo $ironn_etnyn2;?>, <?php echo $ironn_etnyn3;?>],
                ['الثلاثاء', <?php echo $ironn_tlath1;?>, <?php echo $ironn_tlath2;?>, <?php echo $ironn_tlath3;?>],
                ['الاربعاء', <?php echo $ironn_arb31;?>, <?php echo $ironn_arb32;?>, <?php echo $ironn_arb33;?>],
                ['الخميس', <?php echo $ironn_hamys1;?>, <?php echo $ironn_hamys2;?>, <?php echo $ironn_hamys3;?>]
              ]);

              var options = {
                legend: { position: "top" },
              };

              var chart = new google.charts.Bar(document.getElementById('chart_div2'));

              chart.draw(data, google.charts.Bar.convertOptions(options));
          }

          function drawChart() {// add each function definition

            var data = google.visualization.arrayToDataTable([
              ['Task', 'Hours per Day'],
              ['تكاليف شراب',     <?php echo $drinkp;?>],
              ['تكاليف طعام',      <?php echo $eatp;?>],
              ['تكاليف صيانة',  <?php echo $syanip;?>],
              ['تكاليف اخرى ', <?php echo $elsop;?>],
              ['الرواتب',    <?php echo $solfp;?>],
              ['مشتريات الحديد',     <?php echo $ironp;?>],

            ]);

            var options = {
              legend: 'none',
            };

            var chart = new google.visualization.PieChart(document.getElementById('chart_div'));//draw on different-different elements

            chart.draw(data, options);

            var data2 = google.visualization.arrayToDataTable([
              ['Task', 'Hours per Day'],
              ['الباقر',     <?php echo $ba8erz;?>],
              ['المزليق',      <?php echo $mzly8z;?>],
              ['الماتور',  <?php echo $mtorz;?>],
              ['تكاليف اخرى ', <?php echo $elsoz;?>],
              ['التارجيت',    <?php echo $carz;?>]
            ]);

            var options2 = {
              legend: 'none',
            };


            var chart2 = new google.visualization.PieChart(document.getElementById('chart_div3'));//draw on different-different elements

            chart2.draw(data2, options2);
          }
          
          function drawAnnotations() {


                        var data = google.visualization.arrayToDataTable([
                          ['City', '2010 Population', {type: 'string', role: 'annotation'},],
                          ['الخميس', <?php echo $ironn_hamys;?>, '<?php echo $ironn_hamys;?>'],
                          ['الاربعاء', <?php echo $ironn_arb3;?>, '<?php echo $ironn_arb3;?>'],
                          ['الثلاثاء', <?php echo $ironn_tlath;?>, '<?php echo $ironn_tlath;?>'],
                          ['الاثنين', <?php echo $ironn_etnyn;?>, '<?php echo $ironn_etnyn;?>'],
                          ['الاحد', <?php echo $ironn_ahd;?>, '<?php echo $ironn_ahd;?>'],
                          ['السبت', <?php echo $ironn_sbt;?>, '<?php echo $ironn_sbt;?>']

                        ]);
                        
                  var options = {
                    chartArea: {width: '50%'},
                    annotations: {
                      alwaysOutside: true,
                      textStyle: {
                        fontSize: 12,
                        auraColor: 'none',
                        color: '#555'
                      },
                      boxStyle: {
                        stroke: '#ccc',
                        strokeWidth: 1,
                        gradient: {
                          color1: '#f3e5f5',
                          color2: '#f3e5f5',
                          x1: '0%', y1: '0%',
                          x2: '100%', y2: '100%'
                        }
                      }
                    },
                    hAxis: {
                      minValue: 0,
                    },
                    vAxis: {
                    },
                    legend: 'none',

                  };
                  var chart = new google.visualization.BarChart(document.getElementById('chart_div4'));
                  chart.draw(data, options);
          }
          
          function drawStacked() {
            var data = google.visualization.arrayToDataTable([
        ['Genre', 'Fantasy & Sci Fi', 'Romance', { role: 'annotation' } ],
        ['2010', 10, 24, '1'],
        ['2020', 16, 22, '5'],
        ['2030', 28, 19,  '9']
      ]);

      var options = {
        width: 800,
        height: 400,
        legend: { position: 'top', maxLines: 10 },
        bar: { groupWidth: '50%' },
        isStacked: true,
      };

              var chart = new google.visualization.ColumnChart(document.getElementById('chart_div5'));
              chart.draw(data, options);
          }
    </script>
  </head>
  <body>
    <div style="font-size: xx-large;"><center>البيان الومي</center></div>
    <div style="font-size: large;">التاريخ :22/7/2021</div>
    <hr>
    <div style="font-size: x-large;"><center>المصروفات</center></div>
    <br>
    <div style="font-size: large;float: right;">:افتتح الاسبوع بميزانية  <strong><?php echo $fthp;?> ش</strong>, وصرف على النحو التالي</div>
    <br><br>
    <ul style="float: right;" dir="rtl">
      <strong>
      <li style="color: #0099C6;">مشتريات الحديد :<?php echo $ironp;?> ش</li>
      <li style="color: #FF9900;">تكاليف طعام :<?php echo $eatp;?> ش</li>
      <li style="color: #3366CC;">تكاليف شراب :<?php echo $drinkp;?> ش</li>
      <li style="color: #DC3912;">تكاليف صيانة :<?php echo $syanip;?> ش</li>
      <li style="color: #990099;">الرواتب :<?php echo $solfp;?> ش</li>
      <li style="color: #109618;">تكاليف اخرى :<?php echo $elsop;?> ش</li>
      <li style="color: ;">المجموع :<?php echo $allp;?> ش</li>

      <li style="color: ;">تم ادخال مبلغ <?php echo $allanter;?> من خدمات التوزين وبيع الحديد</li>

      <li style="color: ;">للتفاصيل امسح الرمز:</li>

    </strong>
    </ul>
    <div style="position: absolute; margin-left: 350px;border: 3px solid black;margin-top: 100px; "><img width="120px" src='https://chart.googleapis.com/chart?cht=qr&chl=http%3A%2F%2Fhamadairon.dalilips.com%2Fexpenses.php&chs=180x180&choe=UTF-8&chld=L|2' alt='qr code'><a href='https://www.qr-code-generator.com' border='0' style='cursor:default'  rel='nofollow'></a></div>
    <div id="chart_div" style="width: 500px; height: 450px;position: absolute; margin-top: -180px;background: none;z-index: -53413213123;margin-left: -70px;"></div>
    <hr style="margin-top: 150px;width: 100%;">

    <div style="font-size: x-large;"><center>"استهلاك "البنزين</center></div>
    <br>
    <div style="font-size: large;float: right;">:افتتح الاسبوع بكمية  <strong><?php echo $fthz;?> لتر</strong>, من "البنزين"وصرف على النحو التالي</div>
    <br><br>
    <ul style="float: right;" dir="rtl">
      <strong>
      <li style="color: #FF9900;">الماتور :<?php echo $mtorz;?> لتر</li>
      <li style="color: #3366CC;">"الباقر" :<?php echo $ba8erz;?> لتر</li>
      <li style="color: #DC3912;">"المزليق" :<?php echo $mzly8z;?> لتر</li>
      <li style="color: #990099;">"سيارة التارجيت" :<?php echo $carz;?> لتر</li>
      <li style="color: #109618;">استهلاكات اخرى :<?php echo $elsoz;?> لتر</li>
      <li style="color: ;">المجموع :<?php echo $allz;?> لتر</li>
      <li style="color: ;">للتفاصيل امسح الرمز:</li>

    </strong>
    </ul>
    <div style="position: absolute; margin-left: 350px;border: 3px solid black;margin-top: 50px; "><img width="120px" src='fuel.png'></a></div>
    <div id="chart_div3" style="width: 500px; height: 350px;position: absolute; margin-top: -160px;background: none;z-index: -534123213123;margin-left: -70px;"></div>
    <hr style="margin-top: 150px;width: 100%;">
    



    <div style="font-size: x-large; float: right;padding-right: 100px;"><center>إدخلات الحديد</center></div>
    <br>
    <br><br>
    <ul style="float: right;" dir="rtl">
      <strong>
      <li style="color: #3366CC;">الحديد المشترى :<?php echo $alliron;?> ك</li>
      <li style="color: ;">متوسط سعر الشراء :<?php echo $iron_avgter;?>ش </li>
      <li style="color: ;">المفترض دفعه :<?php echo $iron_neettobe;?>ش</li>
      <li style="color: ;">المدفوع :<?php echo $iron_be;?>ش</li>
      <li style="color: ;">الحديد المباع:<?php echo $iron_sell;?>ك</li>




    </strong>
    </ul>
    <div style="position: absolute; margin-left: 550px;border: 3px solid black;margin-top: 90px; "><img width="100px" src='iron.png'></a></div>

    <div id="chart_div4" style="width: 900px; height: 350px;position: absolute; margin-top: -115px;background: none;z-index: -534123213123;margin-left: -170px;"></div>
    <hr style="margin-top: 200px;width: 100%;">


    <div style="font-size: x-large; "><center>المدخولات</center></div>
    <br>
    <br>
    <ul style="" >
      <strong>
      <li dir="rtl" style="color: #3366CC; font-size: 20px ;position: absolute;margin-left: 5%;">خدمات التوزين :<?php echo $tuzynenter;?> ش</li>
      <li dir="rtl" style="color: #DC3912;font-size: 20px;position: absolute; margin-left:40%;">بيع حديد :<?php echo $ironseal;?> ش</li>
      <li dir="rtl" style="color: #F4B400;font-size: 20px;position: absolute; margin-left: 66%;">الميزانية الابتدائية :<?php echo $fthp;?>ش</li>

    </strong>
    </ul>
    <hr style="margin-top: 100px;width: 100%;">
    <div style="font-size: x-large; "><center>كبس الحديد </center></div>
    <br>
    
    <ul style="" >
      <strong>
      <li dir="rtl" style="color: #4285F4; font-size: large;position: absolute;margin-left: 10%;">مكبس 1(الصغير) :<?php echo $ironn_all1;?></li>
      <li dir="rtl" style="color: #DB4437;font-size: large;position: absolute; margin-left: 40%;">مكبس 2(الوسط) :<?php echo $ironn_all2;?></li>
      <li dir="rtl" style="color: #F4B400;font-size: large;position: absolute; margin-left: 70%;">مكبس 3(الأخير) :<?php echo $ironn_all3;?></li>
    </strong>
    </ul>
    <div id="chart_div2"  style="width: 60%; height: 500px;position: absolute; margin-top: 30px;background: none;z-index: -534123213123;margin-left: 0px;"></div>
  
    <div style="margin-top: 550px; font-size: 18px; float: right;"><center>.ملاحظة:يوم الاثنين والاثلاثاء كان دوام العمل يوم ونصف* </center></div>
    <hr style="margin-top: 250px;width: 100%;">
    <div style="font-size: x-large; "><center>تصدير الحديد </center></div>
    <br>
    
    <ul style="float: right;" dir="rtl">
      <strong>
      <li dir="rtl" >مكبس 1(الصغير) :<?php echo $ironn_all1;?></li>
      <li dir="rtl" >مكبس 2(الوسط) :<?php echo $ironn_all2;?></li>
      <li dir="rtl" >مكبس 3(الأخير) :<?php echo $ironn_all3;?></li>
    </strong>
    </ul>
    <div id="chart_div5"  style="width: 60%; height: 500px;position: absolute; margin-top: 0px;background: none;z-index: -534123213123;margin-left: 0px;"></div>
  
    <div style="margin-top: 550px; font-size: ; float: right;"><center>.ملاحظة:تم حساب كل من "مشاطيح" 4*4 و 3*3 كمشطاح واحد* </center></div>
    <hr style="margin-top: 250px;width: 100%;">
  
  </body>
</html>
