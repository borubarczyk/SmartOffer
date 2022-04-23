const AccessoriesManList = 'php/querry.php/?f=rq&d=AccManList';
const DevicesManList = 'php/querry.php/?f=rq&d=DevManList';
const DevicesTypeList = 'php/querry.php/?f=rq&d=DevTypesList';
const AccessoriesTypeList = 'php/querry.php/?f=rq&d=AccTypesList';


function GetData(page) {
	switch (page) {
		case 'getPhoneList':
			data = document.getElementById(
				'text-search').value;
			if (data == "") {
				console.log("none");
				return;
			}
			console.log(data);
			link =
				'php/search_phone.php/?s=' +
				data;
			type_req = 'GET';
			css_class = '.replace';
			request(type_req, link,
				css_class);
			break;
		case 'getCaseList':
			data = document.getElementById(
				'text-search').value;
			link = 'php/search_case.php/?s=' +
				data;
			type_req = 'GET';
			css_class = '.replace';
			request(type_req, link,
				css_class);
			break;
		case 'PostUpdateSettings':
			break;
		case 'getLogsList':
			link = 'php/logs.php';
			type_req = 'GET';
			css_class = '.replace';
			request(type_req, link,
				css_class);
			break;
		default:
			break;
	}
}

function showProduct(id) {
	if (id == "") {
		console.log("id null");
		return;
	}
	type_req = 'GET';
	link = 'php/gsm_info.php/?id_1=' + id;
	css_class = ".replace-info";
	request(type_req, link, css_class);
	console.log(id);
}

function showAccessories(id) {
	if (id == "") {
		console.log("id null");
		return;
	}
	type_req = 'GET';
	link = 'php/'
	// nowa strona php do pokazania akcesoriów - potrzeba obiektowego podejścia
}

function CreateSKU(name) {
	if (name == '') {
		var string;
		console.log('looking for inputs');
		producent_sku = "Sam";
		nazwa_modelu = document.getElementById('NazwaModelu');
		nazwa_producenta = document.getElementById('producent');
		if (nazwa_modelu.value != '' && nazwa_producenta.value != '' && producent_sku != '') {
			final = producent_sku + ((nazwa_modelu.value.replace(nazwa_producenta.value, '')).replace(' ', ''));
			if (final.search('5G') != -1) {
				final = final.replace('5G', '(5G)');
			}
			if (final.search('4G') != -1) {
				final = final.replace('4G', '(4G)');
			}
			document.getElementById('sku_input').value = final;
		} else {
			nazwa_modelu.placeholder = 'Wymagane';
			nazwa_producenta.placeholder = 'Wymagane';
			console.log("no data");
		}
	} else {
		console.log('found data');
		string = name.split('%');
		if (string[1].search('5G') != -1) {
			string[1] = string[1].replace('5G', '(5G)');
		}
		if (string[1].search('4G') != -1) {
			string[1] = string[1].replace('4G', '(4G)');
		}
		string[1] = ((string[1].replace(string[2], '')).split(' ').join(''));
		final = string[0] + (string[1].trim());
		document.getElementById('sku_input').value = final;
	}
}

function Validate() {
	pf = document.getElementById(
		"password_f").value;
	ps = document.getElementById(
		"password_s").value;
	if (pf === ps & pf != "" & length(
			pf) > 8) {
		return true;
	} else {
		return false;
	}
}

function request(type_req, link, css_class, sync) {
	if (sync = "") {
		sync = true;
	} else {
		sync = false;
	}
	$.ajax({
		async: sync,
		cache: true,
		type: type_req,
		url: link,
		success: function (data) {
			if (css_class != '') {
				if (data != '') {
					$(css_class).replaceWith(data);
				} else {
					$(css_class).replaceWith("No data");
				}
			}
			return data;
		},
		error: function () {
			console.log("Can't reach this website");
			return false;
		}
	})
}

function RemoveElements(element) {
	if (element.childNodes.length != 0) {
		child = element.lastElementChild;
		while (child) {
			element.removeChild(child);
			child = element.lastElementChild;
		}
	} else {
		return;
	}
}

function AddNumeration(data) {
	for (var i = 0; i < data.length; i++) {
		data = Object.values(data[i]);
		data[0] = i + ". " + data[0];
	}
	return data;
}


function JsonFormatter(data, selector, data_type) {
	selector = document.getElementById(selector);
	RemoveElements(selector);

	for (var i = 0; i < data.length; i++) {
		insertion = Object.values(data[i]);
		val = document.createElement(data_type);
		val.value = insertion[1];
		val.innerHTML = insertion[0];
		selector.appendChild(val);
	}
}

function GetDataFromThis(selector) {
	return selector.value;
}

function GetDataList(name, selector, data_type) {
	fetch(name)
		.then(response => response.json())
		.then(data => JsonFormatter(data, selector, data_type));
}

function AjaxRequest(page_url, what_method, is_sync = false) {
	if (page_url && what_method != '') {
		result = $.ajax({
			url: page_url,
			async: is_sync,
			cache: true,
			type: what_method,
		})
		return result;
	} else {
		return;
	}
}

function StripUrl(url) {
	if (url.includes("https") && url.includes(".com")) {
		url = url.replace(/https.*.com/, "");
	}
	if (url.includes("www") && url.includes(".com")) {
		url = url.replace(/www.*.com/, "");
	}
	if (url.includes(".php")) {
		url = url.replace(".php", "");
	}
	if (url.includes(".html")) {
		url = url.replace(".html", "");
	}
	return url;
}

function LoadDeviceFromLink() {
	const selector = document.getElementById("DeviceGSMLink");
	link = selector.value;
	const domain = "gsmarena";
	const url = "https://www." + domain + ".com/";
	const php_req = "php/getpagedata.php/?d=";	

	if (link != '' & link.includes(url) === true) {
		link = StripUrl(link);
		full_request_url = php_req + domain + "&u=" + link;
		response = AjaxRequest(full_request_url,'GET'); 

	} else {
		selector.value = "Twój link musi pochodzić z " + url;
		return false;
	}

}