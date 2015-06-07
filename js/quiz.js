var questions_asked = { "questions_asked" : [] };
var array;
$(document).ready(function(){
    $("button").click(function(){
        $.get("php/questions.php?questions_asked=[]",
    function(data, status){
        alert("Data: " + data + "\nStatus: " + status);
        array = $.parseJSON(data);
        $("p#question").text(array.question.text);
        $("p#answer_a").text(array.question.possibleAnswers[0].answer);
        $("p#answer_b").text(array.question.possibleAnswers[1].answer);
        $("p#answer_c").text(array.question.possibleAnswers[2].answer);
        $("p#answer_d").text(array.question.possibleAnswers[3].answer);
    });
    });
	$("p.answer").click(function(){
	var content = $(this).html();
	for(i=0; i<4; i++){
		if(array.question.possibleAnswers[i].answer == content){
			alert("Inhalt: "+content+" ; JSON: "+array.question.possibleAnswers[i].answer+"; is correct?: "+array.question.possibleAnswers[i].is_correct);
			$(this).text(array.question.possibleAnswers[i].is_correct);
		}
	}
	
	});
});



/*$("button").click(function(){
    $.post("php/questions.php",
    {
        questions_asked: []
    },
    function(data, status){
        alert("Data: " + data + "\nStatus: " + status);
    });
});*/
/*var questions_asked = '{ "questions_asked" : [] }';
$(document).ready(function(){
        $.getJSON("/php/questions.php", questions_asked, function(result){
            $.each(result, function(i, field){
                $(p#question).append(field + " ");    
            });
        });
    });
});*/

/*
    $(document).ajaxError(function(event, request, settings){
        alert("Error requesting page " + settings.url);
    });
    $(button#next_question).click(function(){*/
