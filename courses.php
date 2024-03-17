<?php
include("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    
    <section id="details">
        <div id="home"> 
            <div class="addbtn">
                <a href="admission.php">Admision Form</a>
            </div>
        </div>
        
        <!-- mscit -->
    <div class="course-info">
        <img src="https://cleanstudy.com/wp-content/uploads/2019/11/Webp.net-compress-image-2020-03-13T172754.017.jpg" alt="" srcset="">
        <div class="info">
            <h4>Course name: MSCIT</h4>
            <p>Duration: 144 Hours</p>
            <p>(50 Hourse Theory + 50 Horse Lab</P><p> + 44 Hours Self Study)</p>
            <p>Cerification By: MSBTE MKCL</p>
           <p>Fees: 4500</p> 
        </div>
    </div>
    <!-- c -->
    <div class="course-info">
        <img src="https://th.bing.com/th/id/OIP.-ZUY2DbID8cqzUs7UGxy9gHaE6?rs=1&pid=ImgDetMain" alt="" srcset="">
        <div class="info">
            <h4>Course name: C Programming</h4>
            <p>Duration: 3 month</p>
            <p>Cerification By: MKCL AICPE</p>
           <p>Fees: 4500</p> 
        </div>
    </div>
    <!-- cpp -->
    <div class="course-info">
        <img src="https://www.positioniseverything.net/wp-content/uploads/2021/11/anatomy-of-C-booleans-1024x682.jpg" alt="" srcset="">
        <div class="info">
            <h4>Course name: C++ Programming</h4>
            <p>Duration: 3month</p>
            <p>Cerification By: MKCL AICPE</p>
           <p>Fees: 4500</p> 
        </div>
    </div>
    <!-- java -->
    <div class="course-info">
        <img src="https://th.bing.com/th/id/OIP.0b8fbow5MVTiBeZf9PYscAHaD1?w=1540&h=799&rs=1&pid=ImgDetMain" alt="" srcset="">
        <div class="info">
            <h4>Course name: Java Programming</h4>
            <p>Duration: 3month</p>
            <p>Cerification By: MKCL AICPE</p>
           <p>Fees: 4500</p> 
        </div>
    </div>
    <!-- python -->
    <div class="course-info">
        <img src="https://cdn.analyticsvidhya.com/wp-content/uploads/2021/07/38787wallpaper.png" alt="" srcset="">
        <div class="info">
            <h4>Course name: Python Programming</h4>
            <p>Duration: 3month</p>
            <p>Cerification By: MKCL AICPE</p>
           <p>Fees: 4500</p> 
        </div>
        </div>
         <!-- hide image box -->
       <div id="hide">
        <!-- web desing -->
        <div class="course-info">
            <img src="https://th.bing.com/th/id/OIP.FTkGKLboNcWFwG26xUkckAHaEr?rs=1&pid=ImgDetMain" alt="" srcset="">
            <div class="info">
                <h4>Course name: Web Designing </h4>
                <p>Duration: 3month</p>
                <p>Cerification By: MKCL AICPE</p>
                <p>Fees: 4500</p> 
            </div>
         </div>
         <!-- graphics design -->
         <div class="course-info">
            <img src="https://static.startuptalky.com/2021/05/Become-A-Graphic-designer-design-Startuptalky.jpg" alt="" srcset="">
            <div class="info">
                <h4>Course name: Graphics Designing </h4>
                <p>Duration: 3month</p>
                <p>Cerification By: MKCL AICPE</p>
               <p>Fees: 4500</p> 
            </div>
         </div>
        <!-- SQL -->
        <div class="course-info">
            <img src="https://www.eginnovations.com/blog/wp-content/uploads/2022/11/Azure-SQL-Database-Related-Blog.jpg" alt="" srcset="">
            <div class="info">
                <h4>Course name: MYSQL / Data science</h4>
                <p>Duration: 3month</p>
                <p>Cerification By: MKCL AICPE</p>
               <p>Fees: 4500</p> 
            </div>
            </div>
            <!-- tally prime -->
            <div class="course-info">
                <img src="https://cdn-aphnm.nitrocdn.com/EvmPuNKlyDVRlEXiFehfNBKMWoksCHPM/assets/static/optimized/wp-content/uploads/2021/03/Tally-PrimeArtboard-1-100-600x338.jpg" alt="" srcset="">
                <div class="info">
                    <h4>Course name: Tally Prime / TallyERP.9</h4>
                    <p>Duration: 3month</p>
                    <p>Cerification By: MKCL AICPE</p>
                   <p>Fees: 4500</p> 
                </div>
             </div>
             <!-- Advance Excel -->
             <div class="course-info">
                <img src="https://www.visioncomputeracademy.com/images/courses/advance-exclel.png" alt="" srcset="">
                <div class="info">
                    <h4>Course name: Advance Excel</h4>
                    <p>Duration: 3month</p>
                    <p>Cerification By: MKCL AICPE</p>
                   <p>Fees: 4500</p> 
                </div>
             </div>
             <!-- autocad -->
             <div class="course-info">
                <img src="https://1.bp.blogspot.com/-IRV4bJW2-p8/XRriu9ZGJGI/AAAAAAAAA28/NpC6ASS76WUMclnJfXX9wUnkFb50nqa0ACPcBGAYYCw/s1600/AuyoCAD.jpg" alt="" srcset="">
                <div class="info">
                    <h4>Course name: Autocad</h4>
                    <p>Duration: 3month</p>
                    <p>Cerification By: MKCL AICPE</p>
                   <p>fees: 4500</p> 
                </div>
             </div>
        </div>       
        <div class="seemore">
        <button type="button" id="see" onclick="show()">Show More </button> 
    </div>
</section>
<script>
    var i=0;
    function show(){
        if(!i){
            document.getElementById("hide").style.display="initial";
            document.getElementById("see").innerHTML="Show Less";
            i=1;
        }
        else{
            document.getElementById("hide").style.display="none";
            document.getElementById("see").innerHTML="Show More"; 
            i=0;
        }

    }
</script>
</body>
</html>