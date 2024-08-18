window.addEventListener("DOMContentLoaded", function() {
	var c = document.getElementById("md-container");
	const p = new URLSearchParams(window.location.search);
	if (p.has("d")) {
		const d = p.get("d").trim();
		const r = /^[a-zA-Z0-9'`´ÀÁÂÃÄÅÆÇÈÉÊËÌÍÎÏÐÑÒÓÔÕÖÙÚÛÜÝßàáâãäåæçèéêëìíîïðñòóôõöùúûüýþÿ\s-]+$/;
		if (r.test(d)) {
			c.innerHTML = `<md-block src="${d}.md"><h1>Does the page exist?!</h1></md-block>`;
			document.title = d;
		} else {
			c.innerHTML = "<h1>No.</h1>";
			document.title = "No.";
		}
	}
	c.style.display = "block";
});