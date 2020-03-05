Survey.StylesManager.applyTheme("winterstone");

var surveyJSON = {
    showProgressBar: "bottom",
    startSurveyText: "Start Quiz",
    "completedHtml":"<h1>Thanks A lot For Complete The Exam , We Hope You Nice Time</h1>",
"pages":[{"name":"A","elements":[{"type":"text","name":"question5","title":"How Are You"}]},{"name":"B","elements":[{"type":"text","name":"question2","title":"1+2=?"},{"type":"imagepicker","name":"question4","title":"Pick The Tiger","choices":[{"value":"lion","imageLink":"https://surveyjs.io/Content/Images/examples/image-picker/lion.jpg"},{"value":"giraffe","imageLink":"https://surveyjs.io/Content/Images/examples/image-picker/giraffe.jpg"},{"value":"panda","imageLink":"https://surveyjs.io/Content/Images/examples/image-picker/panda.jpg"},{"value":"camel","imageLink":"https://surveyjs.io/Content/Images/examples/image-picker/camel.jpg"}]}]},{"name":"C","elements":[{"type":"rating","name":"question1","title":"Rating Webiste"},{"type":"radiogroup","name":"question6","title":"Do Know About Programming Langauge","choices":[{"value":"item1","text":"Yes"},{"value":"item2","text":"No"},{"value":"item3","text":"Little"}]}]}]}

function sendDataToServer(survey) {
    //send Ajax request to your web server.
    alert("The results are:" + JSON.stringify(survey.data));
    $('.Exam-Button').append(' <i style="color:#1175E2" class="fa fa-2x fa-check Check-Icon"></i>');
    $('.Exam-Button').attr('data-complete','true');

}

var survey = new Survey.Model(surveyJSON);
$("#surveyContainer").Survey({
    model: survey,
    onComplete: sendDataToServer
});