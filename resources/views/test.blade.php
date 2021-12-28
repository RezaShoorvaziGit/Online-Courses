{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">  
<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">

  <title>Document</title>
</head>
<body>
  <input type="checkbox" checked data-toggle="toggle" data-onstyle="primary" data-offstyle="secondary">
<input type="checkbox" checked data-toggle="toggle" data-onstyle="secondary" data-offstyle="success">
<input type="checkbox" checked data-toggle="toggle" data-onstyle="success" data-offstyle="danger">
<input type="checkbox" checked data-toggle="toggle" data-onstyle="danger" data-offstyle="warning">
<input type="checkbox" checked data-toggle="toggle" data-onstyle="warning" data-offstyle="info">
<input type="checkbox" checked data-toggle="toggle" data-onstyle="info" data-offstyle="light">
<input type="checkbox" checked data-toggle="toggle" data-onstyle="light" data-offstyle="dark" data-style="border">
<input type="checkbox" checked data-toggle="toggle" data-onstyle="dark" data-offstyle="light" data-style="border">
</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

</html> --}}



{{-- <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <script language="javascript" type="text/javascript">
 function dropdownlist(listindex)
 {
  
document.formname.subcategory.options.length = 0;
 switch (listindex)
 {
  
 case "Home Ware" :
 document.formname.subcategory.options[0]=new Option("Select Sub-Category","");
 document.formname.subcategory.options[1]=new Option("Air-Conditioners/Coolers","Air-Conditioners/Coolers");
 document.formname.subcategory.options[2]=new Option("Audio/Video","Audio/Video");
 document.formname.subcategory.options[3]=new Option("Beddings","Beddings");
 document.formname.subcategory.options[4]=new Option("Camera","Camera");
 document.formname.subcategory.options[5]=new Option("Cell Phones","Cell Phones");
  
 break;
  
 case "Education" :
 document.formname.subcategory.options[0]=new Option("Select Sub-Category","");
 document.formname.subcategory.options[1]=new Option("Colleges","Colleges");
 document.formname.subcategory.options[2]=new Option("Institutes","Institutes");
 document.formname.subcategory.options[3]=new Option("Schools","Schools");
 document.formname.subcategory.options[4]=new Option("Tuitions","Tuitions");
 document.formname.subcategory.options[5]=new Option("Universities","Universities");
  
 break;
  
 case "Books" :
 document.formname.subcategory.options[0]=new Option("Select Sub-Category","");
 document.formname.subcategory.options[1]=new Option("College Books","College Books");
 document.formname.subcategory.options[2]=new Option("Engineering","Engineering");
 document.formname.subcategory.options[3]=new Option("Magazines","Magazines");
 document.formname.subcategory.options[4]=new Option("Medicine","Medicine");
 document.formname.subcategory.options[5]=new Option("References","References");
  
 break;
  
 }
 return true;
 }
 </script>
 </head>
 <title>Dynamic Drop Down List</title>
 <body>
  
<form id="formname" name="formname" method="post" action="submitform.asp" >
 <table width="50%" border="0" cellspacing="0" cellpadding="5">
 <tr>
 <td width="41%" align="right" valign="middle">Category :</td>
 <td width="59%" align="left" valign="middle"><select name="category" id="category" onchange="javascript<b></b>: dropdownlist(this.options[this.selectedIndex].value);">
 <option value="">Select Category</option>
 <option value="Home Ware">Home Ware</option>
 <option value="Education">Education</option>
 <option value="Books">Books</option>
 </select></td>
 </tr>
 <tr>
 <td align="right" valign="middle">Sub Category :
 </td>
 <td align="left" valign="middle"><script type="text/javascript" language="JavaScript">
 document.write('<select name="subcategory"><option value="">Select Sub-Category</option></select>')
 </script>
 <noscript><select name="subcategory" id="subcategory" >
 <option value="">Select Sub-Category</option>
 </select>
 </noscript></td>
 </tr>
 </table>
  
</form>
  
  
</body>
 </html>

 --}}

 <head>
	<meta charset="utf-8" />	
	<link rel="stylesheet" href="bootstrap.min.css" />
	<link rel="stylesheet" href="bootstrap-theme.min.css" />
	<link rel="stylesheet" href="jquery.Bootstrap-PersianDateTimePicker.css" />

    <script type="text/javascript" src="jquery-2.1.1.js"> </script>
    <script type="text/javascript" src="bootstrap.min.js"> </script>	
</head>
.
.
.
<body>

	<script src="calendar.js" type="text/javascript"></script>
    <script src="jquery.Bootstrap-PersianDateTimePicker.js" type="text/javascript"></script>
</body>