<?
const NEED_AUTH = true;
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Вход");
?><?$APPLICATION->IncludeComponent(
	"bitrix:system.auth.form", 
	"login", 
	array(
		"FORGOT_PASSWORD_URL" => "/auth/?register=yes",
		"PROFILE_URL" => "/auth/profile.php",
		"REGISTER_URL" => "/auth/registration.php",
		"SHOW_ERRORS" => "Y",
		"COMPONENT_TEMPLATE" => "login"
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>