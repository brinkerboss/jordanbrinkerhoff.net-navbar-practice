{ coded = "NwQHM53lQ95G4QXw88@3iM9U.Ywi"
  key = "Vbx9QGR4Amt3aJNHnYFhw0SzqT7EBlf1LPODvirkMeCp5gWXjdIc2uoZsU8Ky6"
  shift=coded.length
  link=""
  for (i=0; i<coded.length; i++) {
    if (key.indexOf(coded.charAt(i))==-1) {
      ltr = coded.charAt(i)
      link += (ltr)
    }
    else {     
      ltr = (key.indexOf(coded.charAt(i))-shift+key.length) % key.length
      link += (key.charAt(ltr))
    }
  }
document.write("<a href='mailto:"+link+"'><i class="fa fa-envelope-square" ></i></a>")
}