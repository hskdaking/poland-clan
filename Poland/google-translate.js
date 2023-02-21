
const googleTranslateConfig = {
	/* Original language */
	lang: "pl",
	/* langFirstVisit: 'en', */
	/* domain: "you-domain.com" */
};

$(function () {

	let script = document.createElement("script");
	script.src = `//translate.google.com/translate_a/element.js?cb=TranslateWidgetIsLoaded`;
	document.getElementsByTagName("head")[0].appendChild(script);
});

function TranslateWidgetIsLoaded() {
	TranslateInit(googleTranslateConfig);
}

function TranslateInit(config) {
	if (config.langFirstVisit && !$.cookie("googtrans")) {
		TranslateCookieHandler("/auto/" + config.langFirstVisit);
	}

	let code = TranslateGetCode(config);

	TranslateHtmlHandler(code);

	if (code == config.lang) {

		TranslateCookieHandler(null, config.domain);
	}

	new google.translate.TranslateElement({
		pageLanguage: config.lang,
	});

	$("[data-google-lang]").click(function () {
		TranslateCookieHandler(
			"/auto/" + $(this).attr("data-google-lang"),
			config.domain
		);
		window.location.reload();
	});
}

function TranslateGetCode(config) {
	let lang =
		$.cookie("googtrans") != undefined && $.cookie("googtrans") != "null"
			? $.cookie("googtrans")
			: config.lang;
	return lang.match(/(?!^\/)[^\/]*$/gm)[0];
}

function TranslateCookieHandler(val, domain) {
	$.cookie("googtrans", val);
	$.cookie("googtrans", val, {
		domain: "." + document.domain,
	});

	if (domain == "undefined") return;
	$.cookie("googtrans", val, {
		domain: domain,
	});

	$.cookie("googtrans", val, {
		domain: "." + domain,
	});
}

function TranslateHtmlHandler(code) {
	$('[data-google-lang="' + code + '"]').addClass("language__img_active");
}
