<?

AutoLoader::register_view_path("plugin", __DIR__."/view/");
AutoLoader::register_controller_path("plugin", __DIR__."/lib/controller/");
AutoLoader::register_controller_path("plugin", __DIR__."/resources/app/controller/");
AutoLoader::$plugin_array[] = array("name"=>"wildfire.cms_users","dir"=>__DIR__);

CMSApplication::register_module("users", array("display_name"=>"Users", "link"=>"/admin/users/"));

?>