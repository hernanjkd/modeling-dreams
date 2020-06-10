function getYear(d) {
  var i = d.indexOf('2009')
  if (i < 0) i = d.indexOf('201')
  if (i < 0) i = d.indexOf('202')
  if (i < 0) i = d.indexOf('203')
  if (i < 0) i = d.indexOf('204')
  var y = d.substr(i, 4)
  return y
}

function getMonth(d) {
  var i = d.indexOf('J')
  if (i < 0) i = d.indexOf('Fe')
  if (i < 0) i = d.indexOf('Ma')
  if (i < 0) i = d.indexOf('A')
  if (i < 0) i = d.indexOf('Se')
  if (i < 0) i = d.indexOf('O')
  if (i < 0) i = d.indexOf('N')
  if (i < 0) i = d.indexOf('D')
  var m = d.substr(i, 3)
  return m
}

function getDay(d) {
  var i = d.indexOf(' ')
  var day = d
  while (i > 0) {
    day = day.substr(i+1, 3)  
    if (day.charAt(1) == ' ') {
      day = day.charAt(0)
      return day
    }
    if (day.charAt(2) == ' ') {
      day = day.substr(0, 2)
      return day
    }
    day = d.substring(i+1, d.length)
    i = day.indexOf(' ')
  }
}

/*
 *  If content is false, it will delete the cookie
 */
function writec(name, content, reload) {
  if (content == 'false')
    cookie = name+'=; expires=16 Jul 2008 10:45:00 UTC; path=/'

  else {
    var date = new Date()
    var hour = date.getHours()
    var min = date.getMinutes()
    var sec = date.getSeconds()
    date = date + ''
    var day = getDay(date)
    var month = getMonth(date)
    var year = getYear(date)
    year = parseInt(year) + 1
  
    var cookie = 	name+'='+content+'; expires='+day+' '+month+
		' '+year+' '+hour+':'+min+':'+sec+' UTC; path=/'
  }

  document.cookie = cookie

  if (!reload) window.location.reload()

}

function displayDB(element) {
    //display database in between the lines
    writec('ddbibtl', element.name)
}

function log(data) {
    if (data == 'in') {
	var input = prompt('Password')
	if (input == 'pasiones') 
	    writec('riverpeme','true')
    }
    else
	writec('riverpeme','false')
}

function sendTN(content) {
    //send the table name to know what mysql table to use
    writec('sttntkwmttu', content, 'true') //true is so it doesn't reload
}

function deletesql(content, reload) {
    //cookie to delete row from mysql
    if (reload)
	writec('ctdrfmysql', content, 'true')
    else
	writec('ctdrfmysql', content)
}

//read inside riverpeme
function unlinki(img_name, page) {
    //unlink the image that is no good
    writec('unlinktiting', img_name)
    window.location.href = '../' + page + '.php'
}