<?php
/**
 * Installer main english strings declaration file.
 * @copyright	The ImpressCMS project http://www.impresscms.org/
 * @license      http://www.fsf.org/copyleft/gpl.html GNU public license
 * @author       Skalpa Keo <skalpa@xoops.org>
 * @author       Martijn Hertog (AKA wtravel) <martin@efqconsultancy.com>
 * @since        1.0
 * @package 		installer
 */

define("SHOW_HIDE_HELP", "Afficher/masquer le texte d'aide");

define("ALTERNATE_LANGUAGE_MSG", "Téléchargez un pack de langue alternatif sur le site Web ImpressCMS");
define("ALTERNATE_LANGUAGE_LNK_MSG", "Sélectionnez une autre langue qui n'est pas listée ici.");
define("ALTERNATE_LANGUAGE_LNK_URL", "https://sourceforge.net/projects/impresscms/files/ImpressCMS%20Languages/");

// Configuration check page
define("SERVER_API", "API du serveur");
define("PHP_EXTENSION", "Extension %s");
define("CHAR_ENCODING", "Encodage des caractères");
define("XML_PARSING", "XML parsing");
define("REQUIREMENTS", "Besoins");
define("_PHP_VERSION", "Version PHP");
define("RECOMMENDED_SETTINGS", "Paramètres recommandés");
define("RECOMMENDED_EXTENSIONS", "Extensions recommandées");
define("SETTING_NAME", "Nom du paramètre");
define("RECOMMENDED", "Recommandé");
define("CURRENT", "Actuel");
define("RECOMMENDED_EXTENSIONS_MSG", "Ces extensions ne sont pas nécessaires pour une utilisation normale, mais peuvent être nécessaires pour exploiter certaines fonctionnalités spécifiques (comme le support du multilangage ou RSS). Il est donc recommandé de les installer." );
define("NONE", "Aucun");
define("SUCCESS", "Succès");
define("WARNING", "Attention");
define("FAILED", "Échoué");

// Titles (main and pages)
define("XOOPS_INSTALL_WIZARD", " %s - Assistant d'installation");
define("INSTALL_STEP", "Étape");
define("INSTALL_H3_STEPS", "Étapes");
define("INSTALL_OUTOF", " hors de ");
define("INSTALL_COPYRIGHT", "Copyright &copy; 2007-" . date('Y', time()) . " <a href=\"https://www.impresscms.org\" target=\"_blank\">The ImpressCMS Project</a>");

define("LANGUAGE_SELECTION", "Sélection de la langue");
define("LANGUAGE_SELECTION_TITLE", "Sélectionnez votre langue"); // L128
define("INTRODUCTION", "Introduction");
define("INTRODUCTION_TITLE", "Bienvenue dans l'assistant d'installation ImpressCMS"); // L0
define("CONFIGURATION_CHECK", "Vérification de la configuration");
define("CONFIGURATION_CHECK_TITLE", "Vérification de la configuration de votre serveur");
define("PATHS_SETTINGS", "Paramétrages des chemins");
define("PATHS_SETTINGS_TITLE", "Paramétrages des chemins");
define("DATABASE_CONNECTION", "Connexion à la base de données");
define("DATABASE_CONNECTION_TITLE", "Connexion à la base de données");
define("DATABASE_CONFIG", "Configuration de la base de données");
define("DATABASE_CONFIG_TITLE", "Configuration de la base de données");
define("CONFIG_SAVE", "Enregistrer la configuration");
define("CONFIG_SAVE_TITLE", "Enregistrement de la configuration du système");
define("TABLES_CREATION", "Création des tables");
define("TABLES_CREATION_TITLE", "Création des tables dans la base de données");
define("INITIAL_SETTINGS", "Paramètres initiaux");
define("INITIAL_SETTINGS_TITLE", "Veuillez entrer vos paramètres initiaux");
define("DATA_INSERTION", "Insertion de données");
define("DATA_INSERTION_TITLE", "Enregistrement de vos paramètres dans la base de données");
define("WELCOME", "Bienvenue,");
define("NO_PHP5", "Pas de PHP 5");
define("WELCOME_TITLE", "Installation de ImpressCMS complété"); // L0
define("MODULES_INSTALL", "Install modules");
define("MODULES_INSTALL_TITLE", "Installation of modules ");
define("NO_PHP5_TITLE", "Pas de PHP 5");
define("NO_PHP5_CONTENT", "PHP 5.2.0 minimum is required for ImpressCMS to function properly - your installation cannot continue. Please work with your hosting provider to upgrade your environment to a version of PHP that is newer than 5.2.0 (5.2.8 + is recommended) before attempting to install again. For more information, read <a href='https://www.impresscms.org/modules/news/article.php?article_id=122' >ImpressCMS on PHP5 </a>.");
define("SAFE_MODE", "Safe Mode On");
define("SAFE_MODE_TITLE", "Safe Mode On");
define("SAFE_MODE_CONTENT", "ImpressCMS has detected PHP is running in Safe Mode. Because of this, your installation cannot continue. Please work with your hosting provider to change your environment before attempting to install again.");

// Settings (labels and help text)
define("XOOPS_ROOT_PATH_LABEL", "ImpressCMS documents root physical path"); // L55
define("XOOPS_ROOT_PATH_HELP", "This is the physical path of the ImpressCMS documents folder, the very web root of your ImpressCMS application"); // L59

define("XOOPS_URL_LABEL", "Website location (URL)"); // L56
define("XOOPS_URL_HELP", "Main URL that will be used to access your ImpressCMS installation"); // L58

define("LEGEND_CONNECTION", "Server connection");
define("LEGEND_DATABASE", "Database"); // L51

define("DB_HOST_LABEL", "Server hostname"); // L27
define("DB_HOST_HELP", "Hostname of the database server. If you are unsure, <em>localhost</em> works in most cases"); // L67
define("DB_USER_LABEL", "User name"); // L28
define("DB_USER_HELP", "Name of the user account that will be used to connect to the database server"); // L65
define("DB_PASS_LABEL", "Mot de passe"); // L52
define("DB_PASS_HELP", "Password of your database user account"); // L68
define("DB_NAME_LABEL", "Database name"); // L29
define("DB_NAME_HELP", "The name of database on the host. The installer will attempt to create a database if one does not exist"); // L64
define("DB_CHARSET_LABEL", "Database character set, we STRONGLY recommend you to use UTF-8 as default.");
define("DB_CHARSET_HELP", "MySQL includes character set support that enables you to store data using a variety of character sets and perform comparisons according to a variety of collations.");
define("DB_COLLATION_LABEL", "Database collation");
define("DB_COLLATION_HELP", "A collation is a set of rules for comparing characters in a character set.");
define("DB_PREFIX_LABEL", "Table prefix"); // L30
define("DB_PREFIX_HELP", "This prefix will be added to all new tables created to avoid name conflicts in the database. If you are unsure, just keep the default"); // L63
define("DB_PCONNECT_LABEL", "Use persistent connection"); // L54

define("DB_SALT_LABEL", "Password Salt Key"); // L98
define("DB_SALT_HELP", "This salt key will be appended to passwords in function icms_encryptPass(), and is used to create a totally unique secure password. Do Not change this key once your site is live, doing so will render ALL passwords invalid. If you are unsure, just keep the default"); // L97

define("LEGEND_ADMIN_ACCOUNT", "Administrator account");
define("ADMIN_LOGIN_LABEL", "Admin login"); // L37
define("ADMIN_EMAIL_LABEL", "Admin e-mail"); // L38
define("ADMIN_PASS_LABEL", "Admin password"); // L39
define("ADMIN_CONFIRMPASS_LABEL", "Confirm password"); // L74
define("ADMIN_SALT_LABEL", "Password Salt Key"); // L99

// Buttons
define("BUTTON_PREVIOUS", "<< Pr&eacute;c&eacute;dent"); // L42
define("BUTTON_NEXT", "Proch"); // L47
define("BUTTON_FINISH", "Terminer");
define("BUTTON_REFRESH", "Actualiser");
define("BUTTON_SHOW_SITE", "Show my site");

// Messages
define("XOOPS_FOUND", "%s found");
define("CHECKING_PERMISSIONS", "Checking file and directory permissions..."); // L82
define("IS_NOT_WRITABLE", "%s is NOT writable."); // L83
define("IS_WRITABLE", "%s is writable."); // L84
define("ALL_PERM_OK", "All Permissions are correct.");

define("READY_CREATE_TABLES", "No ImpressCMS tables were detected.<br />The installer is now ready to create the ImpressCMS system tables.<br />Press <em>next</em> to proceed.");
define("XOOPS_TABLES_FOUND", "The ImpressCMS system tables already exists in your database.<br />Press <em>next</em> to go to the next step."); // L131
define("READY_INSERT_DATA", "The installer is now ready to insert initial data into your database.");
define("READY_SAVE_MAINFILE", "The installer is now ready to save the specified settings to <em>.env</em>.<br />Press <em>next</em> to proceed.");
define("DATA_ALREADY_INSERTED", "ImpressCMS data is stored in your database already. No further data will be stored by this action.<br />Press <em>next</em> to go to the next step.");

// %s is database name
define("DATABASE_CREATED", "Database %s created!"); // L43
// %s is table name
define("TABLE_NOT_CREATED", "Unable to create table %s"); // L118
define("TABLE_CREATED", "Table %s cr&eacute;er."); // L45
define("ROWS_INSERTED", "%d entries inserted to table %s."); // L119
define("ROWS_FAILED", "Failed inserting %d entries to table %s."); // L120
define("TABLE_ALTERED", "Table %s updated."); // L133
define("TABLE_NOT_ALTERED", "Failed updating table %s."); // L134
define("TABLE_DROPPED", "Table %s dropped."); // L163
define("TABLE_NOT_DROPPED", "Failed deleting table %s."); // L164

// Error messages
define("ERR_COULD_NOT_ACCESS", "Could not access the specified folder. Please verify that it exists and is readable by the server.");
define("ERR_NO_XOOPS_FOUND", "No ImpressCMS installation could be found in the specified folder.");
define("ERR_INVALID_EMAIL", "Addresse email invalide"); // L73
define("ERR_REQUIRED", "Please enter all the required info."); // L41
define("ERR_PASSWORD_MATCH", "The two passwords do not match");
define("ERR_NEED_WRITE_ACCESS", "The server must be given write access to the following files and folders<br />(i.e. <em>chmod 777 directory_name</em> on a UNIX/LINUX server)"); // L72
define("ERR_NO_DATABASE", "Could not create database. Contact the server administrator for details."); // L31
define("ERR_NO_DBCONNECTION", "Could not connect to the database server."); // L106
define("ERR_WRITING_CONSTANT", "Failed writing constant %s."); // L122
define('ERR_WRITE_ENV_DATA', 'Error write .env data');
define("ERR_INVALID_DBCHARSET", "The charset '%s' is not supported.");
define("ERR_INVALID_DBCOLLATION", "The collation '%s' is not supported.");
define("ERR_CHARSET_NOT_SET", "Default character set is not set for ImpressCMS database.");

//
define("_INSTALL_SELECT_MODS_INTRO", 'From the list below, please select the modules that you wish to install on this site. <br /><br />
All the installed modules are accessible by the Administrators group and the Registered Users group by default. <br /><br />
If you need to set permissions for Anonymous Users please do so in the Administration Panel after you complete this installer. <br /><br />
For more information regarding Group Administration, please visit the <a href="https://www.impresscms.org/modules/simplywiki/index.php?page=Permissions" rel="external">wiki</a>.');

define("_INSTALL_SELECT_MODULES", 'Select modules to be installed');
define("_INSTALL_SELECT_MODULES_ANON_VISIBLE", 'Select modules visible to visitors');
define("_INSTALL_IMPOSSIBLE_MOD_INSTALL", "Module %s could not be installed.");
define("_INSTALL_ERRORS", 'Erreurs');
define("_INSTALL_MOD_ALREADY_INSTALLED", "Module %s has already been installed");
define("_INSTALL_FAILED_TO_EXECUTE", "Failed to execute ");
define("_INSTALL_EXECUTED_SUCCESSFULLY", "Executed correctly");

define("_INSTALL_MOD_INSTALL_SUCCESSFULLY", "Module %s has been installed succesfully.");
define("_INSTALL_MOD_INSTALL_FAILED", "The wizard could not install module %s.");
define("_INSTALL_INSTALLING", "Installing %s module");

define("_INSTALL_WEB_LOCATIONS", "Web location");
define("_INSTALL_WEB_LOCATIONS_LABEL", "Web location");

define("_INSTALL_COULD_NOT_INSERT", "The wizard was unable to install module %s the database.");
define("_INSTALL_CHARSET", "utf-8");

define("_INSTALL_PHYSICAL_PATH", "Physical path");

define("_MD_AM_MULTLOGINMSG_TXT", 'Impossible de vous connecter au site!! <br />
        <p align="left" style="color:red;">
        Causes possibles:<br />
         - Vous ');
define("_INSTALL_LOCAL_SITE", 'http://www.impresscms.org/'); //Link to local support site
define("_LOCAL_FOOTER", 'Powered by ImpressCMS &copy; 2007-' . date('Y', time()) . ' <a href=\"https://www.impresscms.org/\" rel=\"external\">The ImpressCMS Project</a><br />Hosting by <a href="http://www.siteground.com/impresscms-hosting.htm?afcode=7e9aa639d30265c079823a498f5b8f15">SiteGround</a>'); //footer Link to local support site
define("_ADM_USE_RTL", "0"); // turn this to 1 if your language is right to left

######################## Added in 1.2 ###################################
define("ADMIN_DISPLAY_LABEL", "Admin Display Name"); // L37
define('_CORE_PASSLEVEL1', 'Trop court');
define('_CORE_PASSLEVEL2', 'Faible');
define('_CORE_PASSLEVEL3', 'Bon');
define('_CORE_PASSLEVEL4', 'Fort');
define('DB_PCONNECT_HELP', "Persistent connections are useful with slower internet connections. They are not generally required for most installations. Default is 'NO'. Choose 'NO' if you are unsure"); // L69
define("DB_PCONNECT_HELPS", "Persistent connections are useful with slower internet connections. They are not generally required for most installations."); // L69

// Added in 1.3
define("FILE_PERMISSIONS", "File Permissions");
