window.addEventListener("DOMContentLoaded", function() {
	const toc = document.getElementById("table-of-contents");
	
	for (const categoryInfo of GUIDE_INFOS["categories"]) {
		const tbody = document.createElement("tbody");
		tbody.innerHTML = `<tr><th id="${categoryInfo["key"]}">${categoryInfo["title"]}</th></tr>`;
		toc.appendChild(tbody);
		
		for (const guideInfo of categoryInfo["entries"]) {
			const guideRow = document.createElement("tr");
			
			if (guideInfo["todo"]) {
				guideRow.innerHTML = `<td>${guideInfo["title"]} <span class="todo">(TODO)</span></td>`;
			} else if (guideInfo["url"] == null) {
				guideRow.innerHTML = `<td><a href="?d=${guideInfo["title"]}" target="_blank">${guideInfo["title"]}</a></td>`;
			} else {
				guideRow.innerHTML = `<td><a href="${guideInfo["url"]}" target="_blank">${guideInfo["title"]}</a></td>`;
			}
			
			tbody.appendChild(guideRow);
		}
	}
});