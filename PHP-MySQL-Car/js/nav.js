$('#hidden')[0].style.display = 'block';
$("a:contains('Modelview')").show();
var href1 = $("a:contains('About')");
var href2 = $("a:contains('Project')");
var href3 = $("a:contains('Contact')");
var href4 = $("a:contains('Home')");

href1.html('StyleView');
href2.html('EngineView');
href3.html('DealerView');
href4.html('AdminView');

href1.attr("href", "../style");
href2.attr("href", "../engine");
href2.attr("target", "_self");
href3.attr("href", "../dealer");
href4.attr("href", "../admin");