/**
 * Original AJAX script from W3Schools
 */

// Send chat data into database with AJAX

function sendChat()
{
	var xml;
	// Create Ajax for IE7+, Firefox, Chrome, Opera, Safari
	if (window.XMLHttpRequest)
	{
		xml = new XMLHttpRequest();
	} else {
	// Create Ajax for IE6, IE5
		xml = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xml.onreadystatechange = function(){
		if (xml.readyState == 4 && xml.status == 200)
		{
			document.getElementById("myDiv").innerHTML = xml.responseText;
    	}
  	}
	xml.open("POST", "localhost/home/send_chat", true);
	xml.send();
}

// Menampilkan data chat dengan AJAX
function showChatData()
{
	var xml;
	// Create Ajax for IE7+, Firefox, Chrome, Opera, Safari
	if (window.XMLHttpRequest)
	{
		xml = new XMLHttpRequest();
	} else {
	// Create Ajax for IE6, IE5
		xml = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xml.onreadystatechange = function()
	{
		if (xml.readyState == 4 && xml.status == 200)
		{
			document.getElementById("chat-result").innerHTML = xml.responseText;
    	}
  	}

	xml.open("POST", "localhost/home/send_chat", true);
	xml.send();
}

// Mendapatkan query search dari GET method
function getParameterByName(name) 
{
    name = name.replace(/[\[]/, "\\[").replace(/[\]]/, "\\]");
    var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
        results = regex.exec(location.search);
    return results === null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
}

// Menghapus lagu
function deleteSong()
{
	var xml;
	// Create Ajax for IE7+, Firefox, Chrome, Opera, Safari
	if (window.XMLHttpRequest)
	{
		xml = new XMLHttpRequest();
	} else {
	// Create Ajax for IE6, IE5
		xml = new ActiveXObject("Microsoft.XMLHTTP");
	}
	xml.onreadystatechange = function(){
		if (xml.readyState == 4 && xml.status == 200)
		{
			document.getElementById("responseText").innerHTML = xml.responseText;
    	}
  	}
	xml.open("POST", "localhost/user/delete", true);
	xml.send();
}

function remove(id)
{
	var xml;
	if (window.XMLHttpRequest){
		xml = new XMLHttpRequest();
	} else {
		xml = new ActiveXObject("Microsoft.XMLHTTP");
	}
	/**
	xml.onreadystatechange = function(){
		if (xml.readyState == 4 && xml.status == 200)
		{
			//
    	}
  	}
  	**/
	xml.open("POST", "localhost/user/delete", true);
	xml.send();
}