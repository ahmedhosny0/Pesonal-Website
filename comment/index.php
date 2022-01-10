
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title> اكتب تعليقا</title>
	<link rel="stylesheet" a href="form.css">
	<link rel="stylesheet" a href="../css/font-awesome.min.css"></head>
	 <style>
	     body{font-size:20px;}
	 </style>
	</head>
<body>
  
       <div id="for">
		<form   name="sfr" action="add.php"  method="POST">
                <ul  id="form-input">
                    <li id="input">
                  <span >الاسم:</span>

<input id="te" type="text" name="name"  placeholder="اكتب اسمك" >
                    </li>
			
            <li id="input">
                  <span >السن:</span>
				<input id="te" type="text" name="age"  />
                    </li>  
            <li id="input">
                <span >النوع:</span><br>
				<input id="male" type="radio" name="gender" value="ذكر">
                <!-- don't forget for="" to make male for male -->
                <label for="male">ذكر</label><br> 
				<input id="female" type="radio" name="gender" value="أنثي">
                <label for="female">أنثي</label>
                    </li>
                     <input type="hidden" name="gender" value="NULL" >
				<li id="input">
العنوان او المدينه             
<input id="te" type="text" name="address"  placeholder="اكتب عنوانك">
			
			</li>
                    <li id="input">
                    تعليقك او رسالتك
                    <br><span style="color:red">(مسموح الكتابه بالعربي او الانجليزي وغير مسموح بالرموز او تعبيرات الوجه)</span>
                    <textarea  name="comment" id="te" type="text" name="address" style="height:100px" placeholder="اكتب رساله" ></textarea>
			
			</li>
			 <li id="input">
                <span >هل ترغب في ظهور تعليقك علي الموقع </span><br>
				<input id="yes" type="radio" name="want" value="نعم">
                <!-- don't forget for="" to make male for male -->
                <label for="yes">نعم</label><br> 
				<input id="no" type="radio" name="want" value="لا">
                <label for="no">لا</label>
                <input type="hidden" name="want" value="NULL" >
                    </li>
                     <input type="submit" type="submit" value="ارسل" id="btn-submit" >

                </ul>
		</form>
      
    </div>
</body>
</html>
