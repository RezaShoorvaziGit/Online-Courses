function sendAnswer() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });
    let a = $.ajax({
        type: 'POST',
        url: "http://127.0.0.1:8000/exam/holding/store",
        data: {
            answer: $('.answer:checked').val(),
            user_id: $('#user_id').val(),
            exam_id: $('#exam_id').val(),
            question_id: $('#question_id').val()
         },
        success: function(data) {
            alert("پاسخ شما ثبت شد");
        } 
    });

    
    console.log(a);

}