<?

function js_register_folder($path)
{
  global $js_folders;
  if (!file_exists($path)) click_error("Error. JS path $path does not exist.");
  $js_folders[] = $path;
}