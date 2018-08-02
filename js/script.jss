var c = 2;
$(document).ready(function() {
	$("tfoot tr td button").click(function() {
		$("tbody").append("<tr>"+
							"<td>"+
								"<input type='text' name='ccode"+c+"' minlength='7' maxlength='7' class='form-control'>"+
							"</td>"+
							"<td>"+
								"<input type='text' name='cname"+c+"' class='form-control'>"+
							"</td>"+
							"<td>"+
								"<select name='ctype"+c+"' class='form-control'>"+
									"<option value='Theory'>Theory</option>"+
									"<option value='Practical'>Practical</option>"+
								"</select>"+
							"</td>"+
						"</tr>");
		c++;
	});
	$("#year").html((new Date()).getFullYear());
});
function validate(form) {
	if (form.pass.value == form.repass.value) {
		return true;
	} else {
		return false;
	}
}
function printDiv(divName) {
	var printContents = document.getElementById(divName).innerHTML;
	w=window.open();
	w.document.write(printContents);
	w.print();
	w.close();
}