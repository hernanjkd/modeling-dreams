function showSub(id, data) {
    var es = document.getElementById(id).style
    if (data == 'show')
	es.visibility = 'visible'
    else
	es.visibility = 'hidden'
}

function enterp(element) {
    var input = prompt('Password','')

    var formp = '<form name="f1" action="php/verify.php" method="post">' +
	'<input name="pswd" type="hidden" value="' + input + '" />' +
		'</form>'

    document.write(formp)

    document.f1.submit()
}