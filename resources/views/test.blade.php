<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="{{asset('js/persian-datepicker/dist/css/persian-datepicker.css')}}" />
</head>

<body>
    <input type="text" class="date-picker" />
    <script src="{{asset('js/jquery/dist/jquery.js')}}"></script>
    <script src="{{asset('js/persian-datepicker/dist/js/persian-datepicker.min.js')}}"></script>
    <script src="{{asset('js/persian-date/dist/persian-date.min.js')}}"></script>

</body>
<script type="text/javascript">
  $(document).ready(function() {
	$(".date-picker").pDatepicker({
		initialValue: false		
	});
  });
</script>

</html>