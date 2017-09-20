var $ = require('jQuery');

$("#submit-code").click(function() {
    $("pre code").text($("textarea").val());
}).next().click(function () {
    $("textarea").val($("pre code").text());
});