<?php
/**
 * Module:      fr-FR.lang.php
 * Description: This module houses all display text in french language.
 *
 */

include (INCLUDES.'url_variables.inc.php');

if (isset($entry_open)) $entry_open = $entry_open;
else $entry_open = "";

if (isset($judge_open)) $judge_open = $judge_open;
else $judge_open = "";

if (isset($judge_closed)) $judge_closed = $judge_closed;
else $judge_closed = "";

if (isset($reg_open)) $reg_open = $reg_open;
else $reg_open = "";

if (isset($total_entries)) $total_entries = $total_entries;
else $total_entries = "";

if (isset($current_time)) $current_time = $current_time;
else $current_time = "";

if (isset($current_time)) $current_time = $current_time;
else $current_time = "";

if (isset($row_limits['prefsEntryLimit'])) $row_limits['prefsEntryLimit'] = $row_limits['prefsEntryLimit'];
else $row_limits['prefsEntryLimit'] = "";

if (isset($row_limits['prefsEntryLimitPaid'])) $row_limits['prefsEntryLimitPaid'] = $row_limits['prefsEntryLimitPaid'];
else $row_limits['prefsEntryLimitPaid'] = "";

$php_version = phpversion();

$j_s_text = "";
if (strpos($section, "step") === FALSE) {
	if ((isset($judge_limit)) && (isset($steward_limit))) {
		if (($judge_limit) && (!$steward_limit)) $j_s_text = "Bénévole"; // missing punctuation intentional
		elseif ((!$judge_limit) && ($steward_limit)) $j_s_text = "Juge"; // missing punctuation intentional
		else $j_s_text = "Juge ou bénévole"; // missing punctuation intentional
	}
}

// -------------------- Global Labels - mostly used for titles and navigation --------------------
// All labels are capitalized and without punctuation

$label_home = "Accueil";
$label_welcome = "Bienvenue";
$label_comps = "Index du concours";
$label_info = "Info";
$label_volunteers = "Volontaires";
$label_register = "S'enregistrer";
$label_help = "Aide";
$label_print = "Imprimer";
$label_my_account = "Mon compte";
$label_yes = "Oui";
$label_no = "Non";
$label_low_none = "Peu/Aucun";
$label_low = "Bas";
$label_med = "Moyen";
$label_high = "Elevé";
$label_pay = "Paiement des droits d'entrée";
$label_reset_password = "Réinitialiser le mot de passe";
$label_log_in = "Connexion";
$label_logged_in = "Connecté";
$label_log_out = "Déconnexion";
$label_logged_out = "Déconnecté";
$label_sponsors = "Partenaires";
$label_rules = "Règles";
$label_volunteer_info = "Info bénévoles";
$label_reg = $label_register;
$label_judge_reg = "Enregistrement des juges";
$label_steward_reg = "Enregistrement des bénévoles";
$label_past_winners = "Vainqueurs précédents";
$label_contact = "Contact";
$label_style = "Style";
$label_entry = "Entrée (bière) ";
$label_add_entry = "Ajouter une entrée (bière) ";
$label_edit_entry = "Editer entrée (bière) ";
$label_upload = "Télécharger";
$label_bos = "Gagnant toutes catégories confondues";
$label_brewer = "Brasseur";
$label_cobrewer = "Co-Brasseur";
$label_entry_name = "Nom de l'entrée";
$label_required_info = "Info requise";
$label_character_limit = " limite de caractères - utilisez des mots clés ou des abréviations si l'espace est limité.<br>Caractères utilisés: ";
$label_carbonation = "Carbonatation";
$label_sweetness = "Rondeur";
$label_strength = "Force";
$label_color = 	"Couleur";
$label_table = "Table";
$label_standard = "Standard";
$label_super = "Super";
$label_session = "Session";
$label_double = "Double";
$label_blonde = "Blonde";
$label_amber = "Amber";
$label_brown = "Brown";
$label_pale = "Pale";
$label_dark = "Dark";
$label_hydromel = "Hydromel";
$label_sack = "Sack";
$label_still = "Plate";
$label_petillant = "Petillant";
$label_sparkling = "Gazeux";
$label_dry = "Sèche";
$label_med_dry = "Moyennement Sèche";
$label_med_sweet = "Rondeur moyenne";
$label_sweet = "Douce";
$label_brewer_specifics = "Spécificités selon le brasseur";
$label_general = "General";
$label_amount_brewed = "Quantité brassée";
$label_specific_gravity = "Densité spécifique";
$label_fermentables = "Fermentescibles";
$label_malt_extract = "Extrait de malt";
$label_grain = "Grain";
$label_hops = "Houblons";
$label_hop = "Houblon";
$label_mash = "Empatage";
$label_steep = "Steep";
$label_other = "Autre";
$label_weight = "Poids";
$label_use = "Use";
$label_time = "Temps";
$label_first_wort = "First Wort";
$label_boil = "Ebullition";
$label_aroma = "Arome";
$label_dry_hop = "Houblonnage à cru";
$label_type = "Type";
$label_bittering = "Amérisant";
$label_both = "Les deux";
$label_form = "Forme";
$label_whole = "Entier";
$label_pellets = "Pellets";
$label_plug = "Prise";
$label_extract = "Extrait";
$label_date = "Date";
$label_bottled = "Embouteillée";
$label_misc = "Divers";
$label_minutes = "Minutes";
$label_hours = "Heures";
$label_step = "Etape";
$label_temperature = "Température";
$label_water = "Eau";
$label_amount = "Quantité";
$label_yeast = "Levure";
$label_name = "Nom";
$label_manufacturer = "Fabricants";
$label_nutrients = "Nutrients";
$label_liquid = "Liquide";
$label_ale = "Ale";
$label_lager = "Lager";
$label_wine = "Vin";
$label_champagne = "Champagne";
$label_boil = "Ebullition";
$label_fermentation = "Fermentation";
$label_finishing = "Finition";
$label_finings = "Clarification";
$label_primary = "Primaire";
$label_secondary = "Secondaire";
$label_days = "Jours";
$label_forced = "Carbonatation forcée";
$label_bottle_cond = "Conditionnée en bouteille";
$label_volume = "Volume";
$label_og = "Densité initiale";
$label_fg = "Densité finale";
$label_starter = "Starter";
$label_password = "Mot de passe";
$label_judging_number = "Numéro d'inscription";
$label_check_in = "Inscription";
$label_box_number = "Box Number";
$label_first_name = "Prénom";
$label_last_name = "Nom de famille";
$label_secret_01 = "Quelle est votre bière préférée";
$label_secret_02 = "Quel était le nom de votre premier animal de compagnie ?";
$label_secret_03 = "Quel était le nom de la rue où vous avez grandi ?";
$label_secret_04 = "Quel est votre équipe de sport préférée ?";
$label_security_answer = "Réponse à la question de sécurité";
$label_security_question = "Question de sécurité";
$label_judging = "Juger";
$label_judge = "Juge";
$label_steward = "Bénévole";
$label_account_info = "Informations du compte";
$label_street_address = "Rue";
$label_address = "Adresse";
$label_city = "Ville";
$label_state_province = "Département ou Région";
$label_zip = "Code postal";
$label_country = "Pays";
$label_phone = "Téléphone";
$label_phone_primary = "Téléphone principal";
$label_phone_secondary = "Téléphone optionnel";
$label_drop_off = "Lieu pour déposer";
$label_drop_offs = "Lieux pour déposer";
$label_club = "Association ou Club";
$label_aha_number = "Pseudo";
$label_org_notes = "Notes pour les organisateurs";
$label_avail = "Disponibilité";
$label_location = "Lieu";
$label_judging_avail = "Disponibilité de la session de jugement";
$label_stewarding = "Bénévolat";
$label_stewarding_avail = "Disponibilité des bénévoles";
$label_bjcp_id = "BJCP ID";
$label_bjcp_mead = "Juge d'hydromels";
$label_bjcp_rank = "Classement BJCP";
$label_designations = "Appellation";
$label_judge_sensory = "Juge avec entrainement des sens";
$label_judge_pro = "Brasseur professionnel";
$label_judge_comps = "Competitions jugées";
$label_judge_preferred = "Styles préférés";
$label_judge_non_preferred = "Styles non préférés";
$label_waiver = "Renonciation";
$label_add_admin = "Ajouter les informations de l'administrateur";
$label_add_account = "Ajouter des informations de compte";
$label_edit_account = "Modifier les informations du compte";
$label_entries = "Entrées (Bières) ";
$label_confirmed = "Confirmées";
$label_paid = "Payés";
$label_updated = "Mis à jour";
$label_mini_bos = "Mini-BOS";
$label_actions = "Actions";
$label_score = "Score";
$label_winner = "Gagnant ?";
$label_change_email = "Changer Email";
$label_change_password = "Changer mot de passe";
$label_add_beerXML = "Ajouter une entrée en utilisant BeerXML";
$label_none_entered = "Aucune entrée";
$label_none = "Aucune";
$label_discount = "Remise";
$label_subject = "Sujet";
$label_message = "Message";
$label_send_message = "Envoyer le message";
$label_email = "Adresse email";
$label_account_registration = "Enregistrement des comptes utilisateurs:";
$label_entry_registration = "Enregistrement des entrées (vos bières):";
$label_entry_fees = "Tarif des entrées";
$label_entry_limit = "Limite d'entrées";
$label_entry_info = "Infos des entrées";
$label_entry_per_entrant = "Limites du participant";
$label_categories_accepted = "Styles acceptés";
$label_judging_categories = "Catégories jugées";
$label_entry_acceptance_rules = "Règles d'admission des entrées et formats souhaités";
$label_shipping_info = "Infos sur les expéditions";
$label_packing_shipping = "Emballage et expédition";
$label_awards = "Prix";
$label_awards_ceremony = "Cérémonie de remise des prix";
$label_circuit = "Qualifications";
$label_hosted = "Editions accueillies";
$label_entry_check_in = "Reception des entrées";
$label_cash = "Cash";
$label_check = "Check";
$label_pay_online = "Payer en ligne";
$label_cancel = "Annuler";
$label_understand = "Je comprends";
$label_fee_discount = "Tarification réduite";
$label_discount_code = "Code de réduction";
$label_register_judge = "Vous vous inscrivez comme participant, bénévole ou juge ?";
$label_register_judge_standard = "Inscrire un juge ou un bénévole (Standard)";
$label_register_judge_quick = "Inscrire un juge ou un bénévole (Rapide)";
$label_all_participants = "Tous les participants";
$label_open = "Ouvert";
$label_closed = "Terminées";
$label_judging_loc = "Lieu et date du concours";
$label_new = "Nouveau";
$label_old = "Ancien";
$label_sure = "Etes vous sûr ?";
$label_judges = "Juges";
$label_stewards = "Bénévoles";
$label_staff = "Organisateurs";
$label_category = "Categorie";
$label_delete = "Effacer";
$label_undone = "Ceci ne peut pas être annulé";
$label_bitterness = "Amertume";
$label_close = "Terminée";
$label_custom_style = "Style usuel";
$label_custom_style_types = "Types de styles usuels";
$label_assigned_to_table = "Assigné à la table";
$label_organizer = "Organisateur";
$label_by_table = "Par Table";
$label_by_category = "Par Style";
$label_by_subcategory = "Par Sous-Style";
$label_by_last_name = "Par nom de famille";
$label_by_table = "Par Table";
$label_by_location = "Par lieu de session";
$label_shipping_entries = "Entrées expédiées";
$label_no_availability = "Aucune disponibilité définie";
$label_error = "Erreur";
$label_round = "Round";
$label_flight = "Flight";
$label_rounds = "Rounds";
$label_flights = "Flights";
$label_sign_in = "Se connecter";
$label_signature = "Signature";
$label_assignment = "Affectation";
$label_assignments = "Affectations";
$label_letter = "Lettre";
$label_re_enter = "Re-Entrer";
$label_website = "Site web";
$label_place = "Place";
$label_cheers = "A la votre";
$label_count = "Compte";
$label_total = "Total";
$label_participant = "Participant";
$label_entrant = "Participant";
$label_received = "Reçu";
$label_please_note = "Notez svp";
$label_pull_order = "Ordre de passage";
$label_box = "Box";
$label_sorted = "Trié";
$label_subcategory = "Sous catégorie";
$label_affixed = "Label apposé ?";
$label_points = "Points";
$label_comp_id = "Identifiant de competition BJCP";
$label_days = "Jours";
$label_sessions = "Sessions";
$label_number = "Nombre";
$label_more_info = "Plus d'infos";
$label_entry_instructions = "Instructions d'entrée";
$label_commercial_examples = "Exemples commerciaux";
$label_users = "Utilisateurs";
$label_participants = "Participants";
$label_please_confirm = "Confirmez svp";
$label_undone = "Ceci ne peut pas être annulé.";
$label_data_retain = "Données à retenir";
$label_comp_portal = "Directoire de la competition";
$label_comp = "Concours";
$label_continue = "Continuez";
$label_host = "Hote";
$label_closing_soon = "Fermeture imminente";
$label_access = "Accès";
$label_length = "Longueur";

// Admin
$label_admin = "Administration";
$label_admin_short = "Admin";
$label_admin_dashboard = "Tableau de bord";
$label_admin_judging = $label_judging;
$label_admin_stewarding = "Bénévolat";
$label_admin_participants = $label_participants;
$label_admin_entries = $label_entries;
$label_admin_comp_info = "Infos du concours";
$label_admin_web_prefs = "Preferences du site web";
$label_admin_judge_prefs = "Preferences de l'organisation du concours";
$label_admin_archives = "Archives";
$label_admin_style = $label_style;
$label_admin_styles = "Styles";
$label_admin_dropoff = $label_drop_offs;
$label_admin_judging_loc = $label_judging_loc;
$label_admin_contacts = "Contacts";
$label_admin_tables = "Tables";
$label_admin_scores = "Scores";
$label_admin_bos = $label_bos;
$label_admin_bos_acr = "BOS";
$label_admin_style_types = "Type de styles";
$label_admin_custom_cat = "Personnaliser les catégories";
$label_admin_custom_cat_data = "Entrées personalisées";
$label_admin_sponsors = $label_sponsors;
$label_admin_entry_count = "Nombre d'entrées par style";
$label_admin_entry_count_sub = "Nombre d'entrées par sous catégories";
$label_admin_custom_mods = "Module de personnalisation";
$label_admin_check_in = $label_entry_check_in;
$label_admin_make_admin = "Changer le niveau de l'utilisateur";
$label_admin_register = "Enregistrer un participant";
$label_admin_upload_img = "Télécharger des images";
$label_admin_upload_doc = "Télécharger les feuilles de scores et autres documents";
$label_admin_password = "Changer le mot de passe de l'utilisateur";
$label_admin_edit_account = "Editer le compte utilisateur";

// Sidebar Labels
$label_account_summary = "Mon résumé de compte";
$label_confirmed_entries = "Entrées confirmées";
$label_unpaid_confirmed_entries = "Entrées confirmées non payées";
$label_total_entry_fees = "Total des frais des entrées";
$label_entry_fees_to_pay = "Frais des entrées à payer";
$label_entry_drop_off = "Lieu de dépôt des entrées";

// v2.1.9
$label_maintenance = "Maintenance";
$label_judge_info = "Informations des juges";
$label_cellar = "Ma cave";
$label_verify = "Verifier";
$label_entry_number = "Numéro de l'entrée";

// -------------------- Headers --------------------
// Missing punctuation intentional for all
$header_text_000 = "L'installation est un succès.";
$header_text_001 = "Vous êtes connecté et prêt pour personnaliser le site de votre compétition";
$header_text_002 = "Toutefois, vos droits sur le fichier de permissions config.php ne pouvaient pas être changés";
$header_text_003 = "Il est recommandé que vous changiez les permissions du serveur (chmod) du fichier config.php en 555. Pour faire ceci vous aurez besoin d'acceder au fichier sur votre serveur";
$header_text_004 = "D'habitude la variable &#36;setup_free_access dans config.php est couramment réglée sur TRUE. Pour des raisons de sécurité ce réglage devrait être sur FALSE. Vous aurez besoin d'éditer config.php directement et de le re-télécharger sur votre serveur pour effectuer cette action.";
$header_text_005 = "Informations rajoutées avec succès.";
$header_text_006 = "Informations éditées avec succès.";
$header_text_007 = "Il y a eu une erreur.";
$header_text_008 = "SVP essayez encore.";
$header_text_009 = "Vous devez être un administrateur pour accèder aux fonctions d'admin.";
$header_text_010 = "Changer";
$header_text_011 = $label_email;
$header_text_012 = $label_password;
$header_text_013 = "L'adresse mail fournie est déjà utilisée, merci d'en utiliser une autre";
$header_text_014 = "Il y a eu un souci avec votre dernière requête, merci d'essayer à nouveau";
$header_text_015 = "Votre mot de passe actuel est incorrect.";
$header_text_016 = "Merci de fournir une adresse mail.";
$header_text_017 = "Désolé, il y a eu un problème avec votre dernière tentative de connexion.";
$header_text_018 = "Désolé, le nom d'utilisateur que vous avez entré est déjà utilisé.";
$header_text_019 = "Peut-être avez-vous déjà créé un compte ?";
$header_text_020 = "Si oui connectez vous ici.";
$header_text_021 = "Le nom d'utilisateur fourni n'est pas une adresse mail valide.";
$header_text_022 = "Merci d'entrer une adresse mail valide.";
$header_text_023 = "Le captcha n'est pas le bon.";
$header_text_024 = "Les adresses mail que vous avez rentré ne concordent pas.";
$header_text_025 = "Le numéro AHA que vous avez entré est déjà dans le système.";
$header_text_026 = "Votre paiement en ligne a été reçu et la transaction est complète. Merci de patienter quelques minutes pour que le statut du paiement soit mis à jour ici - n'hésitez pas à actualiser cette page ou à accèder à vos entrées. Vous recevrez un reçu de paiement par mail de la part de Paypal.";
$header_text_027 = "Merci de vous assurer d'imprimer le reçu et de l'attacher à l'une de vos bouteilles comme preuve de paiement.";
$header_text_028 = "Votre paiement en ligne a été annulé.";
$header_text_029 = "Le code a été vérifié.";
$header_text_030 = "Désolé, le code que vous avez entré est incorrect.";
$header_text_031 = "Vous devez vous connecter et bénéficier des droits d'admin pour acceder aux fonctions d'admin.";
$header_text_032 = "Désolé il y a eu un souci avec votre dernière tentative de connexion.";
$header_text_033 = "Assurez vous que votre adresse mail et votre mot de passe sont corrects.";
$header_text_034 = "Un token de réinitialisation de mot de passe a été généré et envoyé par mail à l'adresse associée à votre compte.";
$header_text_035 = "- vous pouvez désormais vous connecter en utilisant votre pseudo et nouveau mot de passe.";
$header_text_036 = "Vous avez été déconnecté.";
$header_text_037 = "Voulez vous vous reconnecter ?";
$header_text_038 = "Votre question de sécurité ne correspond pas à celle présente dans la base de données.";
$header_text_039 = "Vos informations de vérification ont été envoyées à l'adresse mail associé avec votre compte.";
$header_text_040 = "Votre message a été envoyé à";
$header_text_041 = $header_text_023;
$header_text_042 = "Votre adresse mail a été mise à jour.";
$header_text_043 = "Votre mot de passe a été mis à jour.";
$header_text_044 = "Informations effacées avec succès.";
$header_text_045 = "Vous devriez vérifier toutes vos entrées importées en tant que BeerXML.";
$header_text_046 = "Vous êtes enregistré.";
$header_text_047 = "Vous avez atteint la limite du nombre d'entrées.";
$header_text_048 = "Votre entrée n'a pas été ajoutée.";
$header_text_049 = "Vous avez atteint la limite d'entrées pour cette sous catégorie.";
$header_text_050 = "Installation: Installer les tables de la base de données et les données";
$header_text_051 = "Installation: Créer un⋅e administrat⋅eur⋅rice";
$header_text_052 = "Installation: Ajouter les infos de l'administrat⋅eur⋅rice";
$header_text_053 = "Installation: Gérer les préférences du site web";
$header_text_054 = "Installation: Ajouter les infos du concours";
$header_text_055 = "Installation: Ajouter les lieux du concours";
$header_text_056 = "Installation: Ajouter les lieux de dépôt des bières";
$header_text_057 = "Installation: Lister les styles acceptés";
$header_text_058 = "Installation: Configurer les préférences de jugement";
$header_text_059 = "Importer une entrée en utilisant BeerXML";
$header_text_060 = "Votre entrée a été enregistrée.";
$header_text_061 = "Votre entrée a été confirmée.";
$header_text_065 = "Toutes les entrées reçues ont été vérifiées et celles pas encore assignées à des tables ont été assignées.";
$header_text_066 = "Infos mises à jour avec succès.";
$header_text_067 = "Le suffixe que vous avez entré est déjà utilisé, svp choisissez en un autre.";
$header_text_068 = "Les données de ce concours ont été nettoyées.";
$header_text_069 = "Archives créées avec succès. ";
$header_text_070 = "Cliquez sur le nom d'une archive pour la voir.";
$header_text_071 = "Pensez à mettre à jour votre ".$label_admin_comp_info." et votre ".$label_admin_judging_loc." si vous commencez un nouveau concours.";
$header_text_072 = "Archive \"".$filter."\" effacée.";
$header_text_073 = "Les enregistrements ont été mis à jour.";
$header_text_074 = "Le nom d'utilisateur que vous avez entré est déjà utilisé.";
$header_text_075 = "Ajouter un autre lieu de dépôt ?";
$header_text_076 = "Ajouter un autre lieu de concours, date ou heure ?";
$header_text_077 = "La table qui vient d'être définie n'a pas de styles associés.";
$header_text_078 = "Une ou plusieurs informations requises manquent - surlignées en rouge ci dessous.";
$header_text_079 = "Les adresses mails que vous avez entrés ne correspondent pas.";
$header_text_080 = "Le numéro AHA que vous avez entré est déjà utilisé dans le système.";
$header_text_081 = "Toutes les entrées ont été marquées comme payées.";
$header_text_082 = "Toutes les entrées ont été marquées comme reçues.";
$header_text_083 = "Toutes les entrées non confirmées sont désormais marquées comme confirmées.";
$header_text_084 = "Toutes les tâches des participants ont été nettoyées.";
$header_text_085 = "Un numéro de jugement que vous avez entré n'a pas été trouvé dans la base de donnée.";
$header_text_086 = "Tous les styles d'entrées ont été convertis du BJCP 2008 au BJCP 2015.";
$header_text_087 = "Données effacées avec succès.";
$header_text_088 = "Le juge/bénévole a été ajouté avec succès. Pensez à définir l'utilisateur comme juge ou bénévole avant de l'assigner à une table.";
$header_text_089 = "Le fichier a été téléchargé avec succès. Vérifiez sur la liste.";
$header_text_090 = "Le fichier qui a essayé d'être téléchargé n'est pas dans un format de fichier accepté.";
$header_text_091 = "Fichier(s) effacé(s) avec succès.";
$header_text_092 = "Le mail de test a été envoyé. Vérifiez votre dossier spam au cas où.";
$header_text_093 = "Le mot de passe de l'utilisat⋅eur⋅rice a été changé. Assurez vous qu'iel connaissent bien leur nouveau mot de passe !";
$header_text_094 = "Le changement de permission en 755 du dossier user_images a échoué.";
$header_text_095 = "Vous devrez changer la permission du dossier manuellement. Consultez votre programme FTP ou la documentation de votre ISP pour chmod (permission des dossiers).";
$header_text_096 = "Les numéros de jugement ont été regénerés.";
$header_text_097 = "Votre installation a été installée avec succès!";
$header_text_098 = "POUR DES RAISONS DE SECURITÉ vous devriez immédiatement regler la variable &#36;setup_free_access dans config.php à FALSE.";
$header_text_099 = "Sinon votre installation et votre serveur sont vulnérables à des failles de sécurité.";
$header_text_100 = "Connectez vous maintenant pour accèder au tableau de bord d'administration";
$header_text_101 = "Votre installation a été mise à jour avec succès !";
$header_text_102 = "Les adresses mail ne correspondent pas.";
$header_text_103 = "Merci de vous connecter pour accèder à votre compte.";
$header_text_104 = "Voys n'êtes pas autorisé à voir cette page.";
$header_text_105 = "Des informations supplémentaires sont nécessaires pour que votre entrée soit acceptée et confirmée.";
$header_text_106 = "Voyez les endroits surlignés en ROUGE ci dessous.";
$header_text_107 = "Merci de choisir un style.";
$header_text_108 = "Cette entrée ne peut être acceptée ou confirmée tant qu'un style n'a pas été choisi. Les entrées non confirmées seront effacées du système sans avertissement préalable.";

// v2.1.9
$header_text_109 = "Vous vous êtes enregistré comme bénévole.";
$header_text_110 = "Toutes les entrées ne sont plus indiquées comme payées";
$header_text_111 = "Toutes les entrées ne sont plus indiquées comme reçues";

// -------------------- Navigation --------------------



// -------------------- Alertes --------------------
$alert_text_000 = "Faites preuve d'attention si vous donnez à des utilisateurs un accès admin et top-level.";
$alert_text_001 = "Le nettoyage des données est complet.";
$alert_text_002 = "La variable &#36;setup_free_access dans config.php est actuellement reglée sur TRUE";
$alert_text_003 = "Pour des raisons de sécurité, ce réglage devrait pointer sur FALSE. Vous aurez besoin d'éditer config.php directement et de re-télécharger votre fichier sur votre serveur.";
$alert_text_005 = "Aucun lieu de dépôt n'a été spécifié.";
$alert_text_006 = "Ajouter un lieu de dépôt ?";
$alert_text_008 = "Aucun lieu ou date du concours n'a été spécifié.";
$alert_text_009 = "Ajoutez un lieu de concours ?";
$alert_text_011 = "Aucun contact pour le concours n'a été spécifié.";
$alert_text_012 = "Ajouter un contact pour le concours ?";
$alert_text_014 = "Votre style actuel est reglé sur le BJCP 2008.";
$alert_text_015 = "Voulez vous convertir toutes vos entrées au BJCP 2015 ?";
$alert_text_016 = "Etes vous sur? Cette action va convertir toutes les entrées de la base pour être compatibles avec le guide BJCP 2015. Les catégories seront 1:1 quand c'est possible, toutefois des entrées de styles spéciaux devront peut-être être mises à jour par le candidat.";
$alert_text_017 = "Pour garder la fonctionnalité la conversion doit être réalisée<em>avant</em> la définition des tables.";
$alert_text_019 = "Toutes les entrées non confirmées ont été effacées de la base.";
$alert_text_020 = "Les entrées non confirmées sont surlignées et annotées avec l'<span class=\"fa fa-lg fa-exclamation-triangle text-danger\"></span> icône ci dessous.";
$alert_text_021 = "Les propriétaires de ces entrées doivent être contactés. Ces entrées ne sont pas inclues dans le calcul des frais.";
$alert_text_023 = "Ajouter un lieu de dépôt ?";
$alert_text_024 = $label_yes;
$alert_text_025 = $label_no;
$alert_text_027 = "Les inscriptions n'ont pas encore commencé.";
$alert_text_028 = "Les inscriptions sont terminées.";
$alert_text_029 = "L'ajout d'entrées n'est pas disponible.";
$alert_text_030 = "La limite d'entrées a été atteinte.";
$alert_text_031 = "La limite de votre nombre d'entrées a été atteinte.";
$alert_text_032 = "Vous pourrez rajouter des entrées à compter du ".$entry_open.".";
$alert_text_033 = "Les inscriptions seront ouvertes à partir du ".$reg_open.".";
$alert_text_034 = "Merci de revenir enregistrer votre compte.";
$alert_text_036 = "Les inscriptions seront ouvertes à partir du ".$entry_open.".";
$alert_text_037 = "Merci de revenir à ce moment là pour ajouter vos entrées.";
$alert_text_039 = "Les inscriptions des juges et bénévoles commencera le ".$judge_open.".";
$alert_text_040 = "Merci de revenir à ce moment là pour vous enregistrer comme juge ou bénévole.";
$alert_text_042 = "Les inscriptions sont ouvertes !";
$alert_text_043 = "Un total de ".$total_entries." entrées ont été ajoutées à la date du ".$current_time.".";
$alert_text_044 = "Les inscriptions sont bientôt terminées ";
$alert_text_046 = "La limite du nombre d'entrées est quasiment atteinte !";
$alert_text_047 = $total_entries." de ".$row_limits['prefsEntryLimit']."  entrées maximales ont été ajoutées en base en date du ".$current_time.".";
$alert_text_049 = "La limite du nombre d'entrées a été atteinte.";
$alert_text_050 = "La limite de ".$row_limits['prefsEntryLimit']." entrées a été atteinte. Aucune autre entrée ne sera acceptée.";
$alert_text_052 = "La limite du nombre d'entrées payantes a été atteinte.";
$alert_text_053 = "La limite de ".$row_limits['prefsEntryLimitPaid']." entrées <em> payées </em>  a été atteint. Aucune autre entrée ne sera acceptée.";
$alert_text_055 = "Les enregistrements sont terminés.";
$alert_text_056 = "Si vous avez déjà enregistré un compte,";
$alert_text_057 = "connectez vous ici"; // lower-case and missing punctuation intentional
$alert_text_059 = "L'enregistrement des entrées est terminé.";
$alert_text_060 = "Un total de".$total_entries." entrées ont été ajoutées.";
$alert_text_062 = "Le dépôt des entrées est terminé.";
$alert_text_063 = "Les bouteilles ne sont plus acceptées aux lieux de dépôt.";
$alert_text_065 = "L'envoi des entrées est terminé.";
$alert_text_066 = "Les bouteilles ne sont plus acceptées aux lieux d'expédition.";
$alert_text_068 = $j_s_text." enregistrement ouvert.";
$alert_text_069 = "Inscrivez vous ici"; // missing punctuation intentional
$alert_text_070 = $j_s_text." enregistrement va se terminer ".$judge_closed.".";
$alert_text_072 = "La limite de juges enregistrés a été atteinte.";
$alert_text_073 = "Plus aucun enregistrement de juge n'est accepté.";
$alert_text_074 = "S'enregistrer comme bénévole est encore possible.";
$alert_text_076 = "La limite de bénévoles enregistrées a été atteinte.";
$alert_text_077 = "Plus aucun enregistrement de bénévole sera possible.";
$alert_text_078 = "S'enregistrer en tant que juge est toujours possible.";
$alert_text_080 = "Mot de passe incorrect.";
$alert_text_081 = "Mot de passe accepté.";

$alert_email_valid = "Format d'adresse mail valide !";
$alert_email_not_valid = "Format d'adresse mail non valide !";
$alert_email_in_use = "L'adresse mail que vous avez renseigné est déjà utilisé, merci d'en choisir une autre.";
$alert_email_not_in_use = "Félicitations ! L'adresse mail que vous avez renseigné est disponible.";

// ----------------------------------------------------------------------------------
// Public Pages
// ----------------------------------------------------------------------------------

// v2.1.9
$comps_text_000 = "Choisissez le concours auquel vous voulez accèder depuis le menu ci dessous";
$comps_text_001 = "Concours actuel:";
$comps_text_002 = "Il n'y a aucun concours avec des entrées ouvertes pour le moment.";
$comps_text_003 = "Il n'y a aucun concours avec des entrées se terminant dans les 7 prochains jours.";

// -------------------- BeerXML --------------------

$beerxml_text_000 = "L'importation d'entrées n'est pas disponible.";
$beerxml_text_001 = "a été téléchargé et la bière ajoutée a votre liste d'entrées.";
$beerxml_text_002 = "Désolé, ce type de fichier ne peut pas être téléchargé, uniquement les extensions en .xml sont autorisées.";
$beerxml_text_003 = "La taille du fichier est au dessus de 2 Mo. Merci d'ajuster la taille et réessayez.";
$beerxml_text_004 = "Fichier invalide spécifié.";
$beerxml_text_005 = "Toutefois elle n'a pas été confirmée. Pour confirmer votre entrée accèdez à votre liste d'entrées pour obtenir de plus amples information. Ou vous pouvez ajouter une autre entrée BeerXML ci dessous.";
$beerxml_text_006 = "La version de PHP sur votre serveur ne supporte pas l'option d'import de BeerXML.";
$beerxml_text_007 = "PHP version 5.x ou plus récente est requise &mdash; ce serveur utilise PHP version ".$php_version.".";
$beerxml_text_008 = "Choisissez un format de fichier compatible avec BeerXML sur votre disque dur er cliquez sur <em>Télécharger</em>.";
$beerxml_text_009 = "Choisissez un fichier BeerXML";
$beerxml_text_010 = "Pas de fichier choisi...";
$beerxml_text_011 = "entrées ajoutées"; // lower-case and missing punctuation intentional
$beerxml_text_012 = "entrée ajoutée"; // lower-case and missing punctuation intentional

// -------------------- Best of Show --------------------
// None


// -------------------- Brew (Add Entry) --------------------

if ($section == "brew") {
	$brew_text_000 = "Cliquez pour connaitre les spécificités du style"; // missing punctuation intentional
	$brew_text_001 = "Les juges ne connaitront pas le nom de votre entrée.";
	$brew_text_002 = "[désactivé - la limite du nombre d'entrées pour ce style a été atteinte]"; // missing punctuation intentional
	$brew_text_003 = "[désactivé - la limite du nombre d'entrées pour cet utilisateur a été atteinte]"; // missing punctuation intentional
	$brew_text_004 = "Type, ingrédients spéciaux, style classique, % en alcool (pour les styles de bières), et/ou couleur sont requis.";
	$brew_text_005 = "% en alcool requis"; // missing punctuation intentional
	$brew_text_006 = "Niveau de carbonatation requis"; // missing punctuation intentional
	$brew_text_007 = "Niveau de sucrosité requis"; // missing punctuation intentional
	$brew_text_008 = "Ce style requiert que vous fournissiez des informations spécifiques.";
	$brew_text_009 = "Prérequis pour"; // missing punctuation intentional
	$brew_text_010 = "Ce style requiert plus d'informations. Merci de les préciser aux endroits prévus à cet effet.";
	$brew_text_011 = "Le nom de l'entrée est requis.";
	$brew_text_012 = "***NON REQUIS*** Indiquez des informations UNIQUEMENT si vous souhaitez que les juges prennent en considération ce que vous écrivez ici quand ils évalueront et jugeront votre bière. A utiliser pour rentrer des détails que vous ne pouvez préciser par ailleurs (ex: technique d'empatage, variétés d'houblons, variété de miel, variété de raisin, variété de poire etc) et que vous souhaitez voir pris en compte par les juges.";
	$brew_text_013 = "NE REMPLISSEZ PAS ce champ pour spécifier des ingrédients spéciaux, un style, une couleur ou le % en alcool.";
	$brew_text_014 = "Fournissez des infos seulement si vous voulez que les juges prennent en considération ce que vous avez spécifié au moment de leur dégustation.";
	$brew_text_015 = "Type d'extrait de malt (ex: blond, ambré,) ou la marque.";
	$brew_text_016 = "Type de grain (ex: pilsner, pale, etc.)";
	$brew_text_017 = "Type d'ingrédient ou nom.";
	$brew_text_018 = "Nom du houblon.";
	$brew_text_019 = "Numéros uniquement (ex: 12.2, 6.6, etc.).";
	$brew_text_020 = "Nom de la souche (ex: 1056 American Ale).";
	$brew_text_021 = "Wyeast, White Labs, etc.";
	$brew_text_022 = "1 smackpack, 2 flacons, 2000 ml, etc.";
	$brew_text_023 = "Fermentation primaire en jours.";
	$brew_text_024 = "Saccharification, etc.";
	$brew_text_025 = "Fermentation secondaire en jours.";
	$brew_text_026 = "Autre fermentation en jours.";

}

// -------------------- Brewer (Account) --------------------

if (($section == "brasseur") || ($section == "enregistrement") || ($section == "étape 2") || (($section == "admin") && ($go == "entrant")) || (($section == "admin") && ($go == "juge"))) {
	$brewer_text_000 = "SVP n'entrez que le nom d'<em>une</em> personne.";
	$brewer_text_001 = "Choisissez une question. Elle servira a vérifier votre identité si d'aventure vous perdiez votre mot de passe.";
	$brewer_text_003 = "Pour être consideré comme une opportunité de GABF Pro-Am vous devez être un membre du AHA.";
	$brewer_text_004 = "Renseignez toute information que vous pensez que l'organisation doive savoir (ex: allergies, régime alimentaire particulier, taille de t-shirt, etc.).";
	$brewer_text_005 = "Non applicable / Entrées expédiées";
	$brewer_text_006 = "Etes vous volontaire et qualifié pour servir comme juge dans ce concours?";
	$brewer_text_007 = "Avez-vous passé l'examen BJCP de juge d'hydromel?";
	$brewer_text_008 = "* Le rang <em>Non-BJCP</em> est pour ceux qui n'ont pas passé l'examen d'entrée de juge BJCP et ne <em>sont</em> pas brasseurs professionnels.";
	$brewer_text_009 = "** Le rang <em>Provisoire</em> est pour ceux qui ont passé l'examen d'entrée de juge BJCP, mais pas encore l'examen de dégustation de juge BJCP.";
	$brewer_text_010 = "Seulement les premères désignations apparaitront sur votre feuille de note imprimée.";
	$brewer_text_011 = "Combien de concours avez vous fait en temps que <strong>".strtolower($label_judge)."</strong>?";
	$brewer_text_012 = "Pour vos préférences SEULEMENT. En laissant un style non coché vous indiquez que vous êtes disponibles pour le juger – il n'y a nul besoin de cocher tous les styles que vous pouvez juger.";
	$brewer_text_013 = "Cliquer sur le bouton ci dessus pour agrandir la liste de styles non-préférentiels.";
	$brewer_text_014 = "Il n'y a pas besoin de marquer les styles pour lesquels vous avez des entrées; le système ne vous permettra pas de juger à une table ou l'on retrouve vos entrées.";
	$brewer_text_015 = "Souhaitez vous être bénévole pendant le concours ?";
	$brewer_text_016 = "Ma participation comme juge est totalement volontaire. Je comprends que participer à ces jugements comporte la consommation de boissons alcolisées et que cette consommation peut altérer mes perceptions et réactions.";
	$brewer_text_017 = "Cliquer sur le bouton ci dessus pour agrandir la liste de styles préférentiels.";
	$brewer_text_018 = "En cochant cette case, je signe un document légal ou j'accepte la responsabilité de ma conduite, attitude et actes et j'absous entièrement le concours et ses organisateurs, individuellement ou collectivement, de la responsabilité de ma conduite, attitude et actes.";

	// v2.1.9
	$brewer_text_019 = "Si vous comptez être juge lors d'une compétition cliquez sur le bouton au dessus et renseignez vos informations de juge.";
	$brewer_text_020 = "Etes vous disponible pour aider à l'organisation du concours en tant que bénévole?";
	$brewer_text_021 = "L'équipe organisatrice du concours remplit divers rôles pour assurer le bon déroulement du concours avant, pendant et après le travail des juges. Juges et bénévoles peuvent servir dans l'équipe. Les membres de l'équipe gagnent des points BJCP si le concours est labelisé BJCP.";

}

// -------------------- Contact --------------------

if ($section == "contact") {

	$contact_text_000 = "Utilisez les liens suivants pour contacter les organisateurs de l'évènement:";
	$contact_text_001 = "Utilisez le formulaire ci dessous pour contacter les organisateurs. Tous les champs marqués d'une astérisque sont requis";
	$contact_text_002 = "Une copie a été envoyée a l'adresse mail que vous nous avez indiqué";
	$contact_text_003 = "Voulez vous envoyer un autre message ?";

}

// -------------------- Default (Home) -------------------

if ($section == "default") {

	$default_page_text_000 = "Aucun lieu pour le dépôt de bouteilles n'a été encore spécifié";
	$default_page_text_001 = "Ajouter un lieu pour le dépôt de bouteilles ?";
	$default_page_text_002 = "Aucune date ou lieu pour le concours n'a été spécifiée";
	$default_page_text_003 = "Ajouter un lieu de concours ?";
	$default_page_text_004 = "Entrées gagnantes";
	$default_page_text_005 = "Les gagnants seront postés pendant ou après";
	$default_page_text_006 = "Bienvenue";
	$default_page_text_007 = "Consultez les détails de votre compte et votre liste d'entrées";
	$default_page_text_008 = "Consultez les détails de votre compte ici.";
	$default_page_text_009 = "Gagnants 'Best of Show'";
	$default_page_text_010 = "Entrées gagnantes";
	$default_page_text_011 = "Vous n'avez besoin d'enregistrer vos infos qu'une seule fois et pourrez retourner sur ce site pour inscrire des bières supplémentaires ou éditer vos bières déjà inscrites.";
	$default_page_text_012 = "Vous pouvez aussi payer vos frais d'inscriptions en ligne si vous le souhaitez";
	$default_page_text_013 = "Organisateur du concours";
	$default_page_text_014 = "Organisateurs du concours";
	$default_page_text_015 = "Vous pouvez envoyer un mail à n'importe lequel des individus suivants via";
	$default_page_text_016 = "sont fières d'avoir les";
	$default_page_text_017 = "suivants pour le concours";
	$default_page_text_018 = "Téléchargez les gagnants 'Best of Show' au format PDF";
	$default_page_text_019 = "Téléchargez les gagnants 'Best of Show' au format HTML";
	$default_page_text_020 = "Téléchargez les gagnants au format PDF.";
	$default_page_text_021 = "Téléchargez les gagnants au format HTML.";
	$default_page_text_022 = "Merci de votre intérêt pour le";
	$default_page_text_023 = "organisé par";

	$reg_open_text_000 = "L'inscription des juges et bénévoles est";
	$reg_open_text_001 = "ouvertes";
	$reg_open_text_002 = "Si vous <em>n'êtes pas</em> enregistré sur le site pour le concours et souhaitez devenir bénévole,";
	$reg_open_text_003 = "enregistrez vous svp";
	$reg_open_text_004 = "Si vous <em>avez</em> enregistré un compte, connectez vous et choisissez <em>Editer Compte</em> du menu Mon Compte indiqué par";
	$reg_open_text_005 = "icône en haut du menu";
	$reg_open_text_006 = "Comme vous êtes déjà enregistré vous pouvez";
	$reg_open_text_007 = "vérifier vos infos de compte";
	$reg_open_text_008 = "afin de vérifier si vous souhaitez être juge et/ou bénévole";
	$reg_open_text_009 = "Si vous souhaitez être juge ou bénévole, merci de revenir vous enregistrer à partir du";
	$reg_open_text_010 = "Les inscriptions pour les bières sont";
	$reg_open_text_011 = "Pour participer";
	$reg_open_text_012 = "merci de vous enregistrer";
	$reg_open_text_013 = "si vous avez déjà un compte.";
	$reg_open_text_014 = "utilisez le formulaire d'ajout d'entrée";

	// v2.1.9
	$reg_open_text_015 = "Les inscriptions des juges sont :";
	$reg_open_text_016 = "Les inscriptions des bénévoles sont :";
	$reg_closed_text_000 = "Merci et bonne chance !";
	$reg_closed_text_001 = "Il y a";
	$reg_closed_text_002 = "participants, juges et bénévoles inscrits";
	$reg_closed_text_003 = "bières inscrites et";
	$reg_closed_text_004 = "participants, juges et bénévoles inscrits.";
	$reg_closed_text_005 = "A la date du";
	$reg_closed_text_006 = "entrées reçues et validées (ce nombre sera mis à jour avec les entrées recuperées au lieu de dépôt)";
	$reg_closed_text_007 = "Les dates du concours ne sont pas encore determinées, merci de repasser vérifier plus tard.";
	$reg_closed_text_008 = "Lien pour";
	$judge_closed_000 = "Merci à tous ceux qui ont participé au";
	$judge_closed_001 = "Il y a eu";
	$judge_closed_002 = "entrées jugées et";
	$judge_closed_003 = "participants, juges et bénévoles inscrits.";

}

// -------------------- Entry Info --------------------

if ($section == "entrées") {

	$entry_info_text_000 = "Vous pourrez créer votre compte à compter du";
	$entry_info_text_001 = "au";
	$entry_info_text_002 = "Juges et bénévoles peuvent s'enregistrer à compter";
	$entry_info_text_003 = "par entrée. L'entrée est gratuite, comme dit par ailleurs il suffit juste d'être membre de l'association";
	$entry_info_text_004 = "Vous pouvez créer votre compte aujourd'hui jusqu'au";
	$entry_info_text_005 = "Juges et bénévoles peuvent s'enregistrer maintenant via";
	$entry_info_text_006 = "Inscriptions pour";
	$entry_info_text_007 = "juges et bénévoles uniquement";
	$entry_info_text_008 = "acceptées jusqu'au";
	$entry_info_text_009 = "Les inscriptions sont <strong class=\"text-danger\">fermées</strong>.";
	$entry_info_text_010 = "Bienvenue";
	$entry_info_text_011 = "See your account details and list of entries.";
	$entry_info_text_012 = "Consultez vos infos de compte ici.";
	$entry_info_text_013 = "par entrée après le";
	$entry_info_text_014 = "Vous pourrez entrer vos entrées dans le système à compter";
	$entry_info_text_015 = "Vous pouvez enregistrer vos entrées à compter d'aujourd'hui jusqu'au ";
	$entry_info_text_016 = "Les enregistrements des entrées sont <strong class=\"text-danger\">fermées</strong>.";
	$entry_info_text_017 = "pour des entrées illimitées.";
	$entry_info_text_018 = "pour les membres AHA.";
	$entry_info_text_019 = "Il y a une limite de";
	$entry_info_text_020 = "entrées pour cette competition.";
	$entry_info_text_021 = "Chaque participant est limité à";
	$entry_info_text_022 = strtolower($label_entry);
	$entry_info_text_023 = strtolower($label_entries);
	$entry_info_text_024 = "entrée par sous catégorie";
	$entry_info_text_025 = "entrées par sous catégories";
	$entry_info_text_026 = "les exceptions sont détaillées ci dessous";
	$entry_info_text_027 = strtolower($label_subcategory);
	$entry_info_text_028 = "sous catégories";
	$entry_info_text_029 = "entrée pour le suivant";
	$entry_info_text_030 = "entrées pour ls suivants";
	$entry_info_text_031 = "Après avoir créé votre compte et ajouté vos entrées dans le système, vous devez payer vos frais d'inscriptions.Les méthodes de paiement acceptées sont:";
	$entry_info_text_032 = $label_cash;
	$entry_info_text_033 = $label_check.", adressé à";
	$entry_info_text_034 = "Carte de crédit et e-chèque, via Paypal";
	$entry_info_text_035 = "Les dates du concours ne sont pas encore définies. Merci de repasser plus tard.";
	$entry_info_text_036 = "Les entrées sont acceptées à notre adresse de reception à partir du";
	$entry_info_text_037 = "Envoyez vos entrées à:";
	$entry_info_text_038 = "Emballez soigneusement vos entrées dans une boite rigide. Protegez l'intérieur de votre carton avec un sac poubelle en plastique. Protegez chaque bouteille avec de l'emballage adéquat. SVP ne surchargez pas votre carton!";
	$entry_info_text_039 = "Ecrivez clairement:<em>Fragile. This Side Up.</em> sur votre colis. SVP utilisez du papier bulle comme support d'emballage des bières.";
	$entry_info_text_040 = "Joignez <em>chaque</em> étiquette de vos bouteilles dans un sac zip-lock avant de les attacher à vos bouteilles respectives. De cette façon ça permettra à l'organisation d'identifier quelle bouteille s'est cassée durant le transport s'il y a eu de la casse pendant l'expédition.";
	$entry_info_text_041 = "Des efforts raisonnables seront faits pour contacter les participants dont les entrées se seraient cassées durant le transport afin de mettre en place ensemble une solution de remplacement.";
	$entry_info_text_042 = "Si vous vivez aux USA notez qu'il est <strong>illégal</strong> d'envoyer vos entrées par United States Postal Service (USPS). Des transporteurs privés ont le droit de refuser votre envoi s'ils sont informés que le colis contient du verre et/ou des boissons alcoolisées. Soyez vigilants, les entrées postées à l'international ont souvent besoin de documents adéquats pour les douanes. Ces entrées peuvent être ouvertes et/ou retournées à l'envoyeur par les douanes. Il est de votre responsabilité de bien suivre les lois en vigueur en matière de transport.";
	$entry_info_text_043 = "Les bouteilles inscrites sont acceptées à notre lieu de dépôt";
	$entry_info_text_044 = "Pointer vers";
	$entry_info_text_045 = "Cliquez pour les infos requises des entrées";
	$entry_info_text_046 = "Si le nom d'un style a un lien hypertexte c'est qu'il possède des exigences précises. Cliquez sur le nom pour voir ce qui est exigé de cette sous catégorie.";

}

// -------------------- Footer --------------------

// -------------------- Judge Info --------------------

// -------------------- List (User Entry List) --------------------

if (($section == "liste") || ($section == "compte") || ($go == "entrées")) {

	$brewer_entries_text_000 = "Il y a un bug connu quand on tente d'imprimer directement depuis Firefox.";
	$brewer_entries_text_001 = "Vous avez des entrées non confirmées.";
	$brewer_entries_text_002 = "Pour chaque entrée ci dessous avec une <span class=\"fa fa-lg fa-exclamation-circle text-danger\"></span> icone, cliquez sur <span class=\"fa fa-lg fa-pencil text-primary\"></span> l'icone pour vérifier et confirmer toutes les données inhérentes à vos entrées. Les entrées non confirmées seront effacées de la base de données sans avertissement.";
	$brewer_entries_text_003 = "Vous ne POUVEZ pas payer pour vos entrées tant que toutes vos entrées ne sont pas encore confirmées.";
	$brewer_entries_text_004 = "Vous avez des entrées qui nécessite de definir un type spécifique, des ingrédients spéciaux, un style classique, % ABV, et/ou couleur.";
	$brewer_entries_text_005 = "Pour chaque entrée ci dessous avec l'icône <span class=\"fa fa-lg fa-exclamation-circle text-danger\"></span>, cliquez sur l'icône <span class=\"fa fa-lg fa-pencil text-primary\"></span> pour entrer l'information requise. Les entrées sans un style spécifique, des ingrédients spéciaux, un style classique, %, et/ou la couleur dans les catégories qui les requièrent peuvent être effacées du système sans avertissement préalable.";
	$brewer_entries_text_006 = "Téléchargez les feuilles de notes des juges &rsquo; pour";
	$brewer_entries_text_007 = "Style NON entré";
	$brewer_entries_text_008 = "Formulaire d'entrée et";
	$brewer_entries_text_009 = "Etiquettes des bouteilles";
	$brewer_entries_text_010 = "Imprimez votre recette pour";
	$brewer_entries_text_011 = "Aussi, vous ne pourrez pas ajouter d'entrée supplémentaire car la limite d'entrées pour la compétition a été atteinte. Cliquez sur annuler et ensuite éditez votre entrée si vous souhaitez la garder.";
	$brewer_entries_text_012 = "Etes vous sur que vous voulez effacer l'entrée appelée";
	$brewer_entries_text_013 = "Vous pourrez ajouter des entrées à partir du ou après ";
	$brewer_entries_text_014 = "Vous n'avez pas aj outé d'entrées dans le système.";
	$brewer_entries_text_015 = "Vous ne pouvez pas effacer votre entrée maintenant.";

}

// -------------------- Login --------------------

// -------------------- Past Winners --------------------
if ($section == "gagnants précédents") {
	$past_winners_text_000 = "Consultez les gagnants précédents:";
}

// -------------------- Pay for Entries --------------------

$pay_text_000 = "la fenêtre de paiement est terminée.";
$pay_text_001 = "Contactez un organisateur si vous avez des questions.";
$pay_text_002 = "voici vos options pour payer vos droits d'entrée.";
$pay_text_003 = "Les frais sont de";
$pay_text_004 = "par entrée";
$pay_text_005 = "par entrée après le";
$pay_text_006 = "pour des entrées illimitées";
$pay_text_007 = "Vos frais ont été décomptés à";
$pay_text_008 = "Vos frais totaux sont de ";
$pay_text_009 = "Vous devez payer";
$pay_text_010 = "Yos frais ont été marqués comme payés. Merci!";
$pay_text_011 = "Vous avez en ce moment";
$pay_text_012 = "non payé confirmé";
$pay_text_013 = "Attachez un chèque pour la totalité de vos entrées à une de vos bouteilles. Le chèque devra être rédigé à l'ordre de";
$pay_text_014 = "Votre récépissé de chèque sera votre reçu.";
$pay_text_015 = "Attachez votre paiment en liquide pour la totalité de vos entrées à l'une de vos bouteilles dans une <em>enveloppe cachetée</em>.";
$pay_text_016 = "Vos feuilles de notes retournées feront office de reçu.";
$pay_text_017 = "Votre confirmation de paiement est votre reçu. Joigez une copie avec vos entrées comme preuve de paiement.";
$pay_text_018 = "Cliquez sur <em>Payer avec PayPal</em> ci dessous pour payer en ligne.";
$pay_text_019 = "SVP notez qu'il y aura des frais sur la transaction de";
$pay_text_020 = "sera ajouté à votre total.";
$pay_text_021 = "Pour etre sur que votre paiement Paypal est marqué comme <strong>payé</strong> sur <strong>ce site</strong>, assurez vous de cliquer<em>Retour au...</em> lien sur l'écran de confirmation PayPal&rsquo;s <strong>après</strong> avoir envoyé votre paiement. Aussi, assurez vous d'imprimer votre reçu de paiement et de l'attacher à l'une de vos bouteilles.";
$pay_text_022 = "Assurez vous de cliquer sur<em>Retour vers...</em> Après avoir payé vos entrées";
$pay_text_023 = "Entrez le code fourni par les organisateurs de la compétition  pour obtenir une réduction sur vos frais.";
$pay_text_024 = $pay_text_010;
$pay_text_025 = "Vous n'avez pas renseigné d'entrées pour le moment.";
$pay_text_026 = "Vous ne pouvez pas payer pour vos entrées car ou une ou plusieurs de vos entrées n'est pas encore confirmée.";
$pay_text_027 = "Cliquez sur <em>Mon compte</em> ci dessus pour revoir vos entrées non confirmées.";
$pay_text_028 = "Vous avez des entrées non confirmées qui <em>ne se</em> retrouvent pas dans votre total des entrées ci dessous.";
$pay_text_029 = "SVP allez à votre liste des entrées pour confirmer toutes les informations liées à vos entrées. Des entrées non confirmées peuvent être effacées du système sans avertissement.";

// -------------------- QR --------------------

	if (strpos($view, "^") !== FALSE) {
		$qr_text_019 = sprintf("%04d",$checked_in_numbers[0]);
		if (is_numeric($checked_in_numbers[1])) $qr_text_020 = sprintf("%06d",$checked_in_numbers[1]);
		else $qr_text_020 = $checked_in_numbers[1];
	}

	$qr_text_000 = $alert_text_080;
	$qr_text_001 = $alert_text_081;
	if (strpos($view, "^") !== FALSE) $qr_text_002 = sprintf("L'entrée numéro <span class=\"text-danger\">%s</span> est vérifiée avec <span class=\"text-danger\">%s</span> comme numéro de jugement.",$qr_text_019,$qr_text_020); else $qr_text_002 = "";
	$qr_text_003 = "Si ce numéro de jugement n'est <em>pas</em> correct, <strong>re-scannez le code et rerentrez le bon numéro de jugement.";
	if (strpos($view, "^") !== FALSE) $qr_text_004 = sprintf("L'entrée numéro %s est validée.",$qr_text_019); else $qr_text_004 = "";
	if (strpos($view, "^") !== FALSE) $qr_text_005 = sprintf("L'entrée numéro %s n'a pas été trouvée dans la base de donnée. Mettez la bouteille de côté et prevenez les organisateurs du concours.",$qr_text_019); else $qr_text_005 = "";
	if (strpos($view, "^") !== FALSE) $qr_text_006 = sprintf("Le numéro de jugement que vous avez entré - %s - est déjà assigné à l'entrée numéro %s.",$qr_text_020,$qr_text_019); else $qr_text_006 = "";
	$qr_text_007 = "Validation des QR Code";
	$qr_text_008 = "Pour vérifier les entrées avec un code QR, founissez le bon mot de passe. Vous n'aurez à fournir le mdp qu'une fois par session - assurez vous d'avoir votre appli QR Code ouverte.";
	$qr_text_009 = "Assignez un numéro de jugement et/ou un numéro de boite à l'entrée";
	$qr_text_010 = "Renseignez SEULEMENT un numéro de jugement si votre concours utilise des étiquettes avec numéros de jugement pour trier les entrées.";
	$qr_text_011 = "Six numéros avec des zéros devant - ex: 000021.";
	$qr_text_012 = "Assurez vous de bien vérifier vos données et attachez kes étiquettes avec les bons numéros de jugement à chaque bouteille.";
	$qr_text_013 = "Les numéros de jugement doivent faire 6 caractères de long et ne peuvent oas avoir le caractère circonflexe(^).";
	$qr_text_014 = "En attente du retour de l'input du code QR scanné.";
	$qr_text_015 = "Démarrez ou retourner sur l'appli de scan de votre mobile pour scanner un code QR.";
	$qr_text_016 = "Vous avez besoin d'une application pour scanner des codes QR ? Cherchez <a href=\"https://play.google.com/store/search?q=qr%20code%20scanner&c=apps&hl=en\" target=\"_blank\">Google Play</a> (Android) ou <a href=\"https://itunes.apple.com/store/\" target=\"_blank\">iTunes</a> (iOS).";
	$qr_text_017 = "Une application de scan de code QR est nécessaire pour utiliser cette fonction.";
	$qr_text_018 = "Lancez l'appli sur votre téléphone mobile, scannez le code QR sur la bouteille, entrez le mdp réclamé, et validez l'entrée.";


// -------------------- Registration Open --------------------

// -------------------- Registration Closed --------------------

// -------------------- Register --------------------

if (($section == "enregistrer") || ($section == "brasseur") || ($action == "enregistrer") || ($go == "compte") || ($section == "étape2")) {

	$register_text_000 = "Est le volontaire ";
	$register_text_001 = "Etes-vous ";
	$register_text_002 = "Les enregistrements sont terminés.";
	$register_text_003 = "Merci pour votre intérêt.";
	$register_text_004 = "Les informations que vous nous indiquez ne servent que pour le concours et à pouvoir vous contacter au besoin, surtout si vous êtes nouveau aux Forces du Malt.";
	$register_text_005 = "Une des conditions d'inscription au concours est que vos infos soient à jour (nom/prénom/mail). Votre nom apparaitra sur le site lors du classement final mais aucune autre info ne sera rendue publique.";
	$register_text_006 = "Rappel: Vous ne pouvez entrer qu'une région et une fois que vous avez enregistré un lieu, vous ne pourrez PAS changer.";
	$register_text_007 = "Rapide";
	$register_text_008 = "Enregistrer";
	$register_text_009 = "un Juge/Steward";
	$register_text_010 = "un Participant";
	$register_text_011 = "Pour vous enregistrer veuillez créer votre compte en ligne en remplissant les champs ci dessous.";
	$register_text_012 = "Ajoutez rapidement un participant à la compétition&rsquo;s pool ds juges/stewards. Une adresse et un numéro de téléphone poubelle seront utilisés ainsi qu'un mot de passe par défaut <em>bcoem</em> sera donné à chaque participant rajouté par cette fenêtre.";
	$register_text_013 = "Les entrées dans cette competition ne sont font qu'en ligne.";
	$register_text_014 = "Pour ajouter vos entrées et/ou indiquer que vous souhaitez être juge ou bénévole (juges et bénévoles peuvent aussi ajouter des entrées), vous devez d'abord vous créer un compte sur le système.";
	$register_text_015 = "Votre adresse mail sera votre nom d'utilisateur et pourra être utilisée pour vous joindre par l'équipe du concours si nécessaire. Merci de vous assurer qu'elle est correcte.";
	$register_text_016 = "Une fois que vous vous êtes enregistré, vous pouvez aller inscrire vos entrées (bières).";
	$register_text_017 = "Chaque entrée que vous ajoutez se verra automatiquement assigner un numéro par le système.";
	$register_text_018 = "Choisissez une question. Elle servira à vérifier votre identité si d'aventure vous perdiez votre mot de passe.";
	$register_text_019 = "SVP indiquez une adresse mail.";
	$register_text_020 = "Les adresses mail que vous avez entré ne correspondent pas.";
	$register_text_021 = "Les adresses mail servent comme identifiant.";
	$register_text_022 = "SVP mettez un mot de passe.";
	$register_text_023 = "SVP indiquez une réponse à votre question de sécurité.";
	$register_text_024 = "Faites de votre réponse quelque chose de simple à retenir!";
	$register_text_025 = "SVP mettez un prénom ou votre pseudo du forum.";
	$register_text_026 = "SVP mettez un nom de famille .";
	$register_text_027 = "";
	$register_text_028 = "SVP indiquez une rue.";
	$register_text_029 = "SVP indiquez une ville.";
	$register_text_030 = "SVP indiquez un état ou une province.";
	$register_text_031 = "SVP indiquez un code postal.";
	$register_text_032 = "SVP indiquez un numéro de téléphone.";
	$register_text_033 = "Indiquez votre pseudo dans l'asso.";
	$register_text_034 = "Pour vous enregistrer, vous devait cocher la case, indiquant que vous êtes d'accord avec la déclaration de renonciation.";

}

// -------------------- Sidebar --------------------

$sidebar_text_000 = "Inscriptions pour les juges ou bénévoles";
$sidebar_text_001 = "Inscriptions pour les juges bénévoles";
$sidebar_text_002 = "Inscriptions pour les juges";
$sidebar_text_003 = "Les inscriptions ne sont plus acceptées. La limite des juges et des bénévoles inscrits a été atteinte";
$sidebar_text_004 = "au";
$sidebar_text_005 = "Les inscriptions pour la création de compte sont acceptés";
$sidebar_text_006 = "est ouvert seulement pour les juges et bénévoles";
$sidebar_text_007 = "est ouvert seulement pour les bénévoles";
$sidebar_text_008 = "est ouvert seulement pour les juges";
$sidebar_text_009 = "Inscriptions acceptées pour les entrées du concours";
$sidebar_text_010 = "La limite de bières inscrites et payantes a été atteinte.";
$sidebar_text_011 = "La limite du nombre d'entrées inscrites a été atteinte.";
$sidebar_text_012 = "Consultez votre liste d'entrées.";
$sidebar_text_013 = "Cliquez ici pour payer vos frais.";
$sidebar_text_014 = "Les frais d'inscriptions n'incluent pas les entrées non confirmées.";
$sidebar_text_015 = "Vous avez des entrées non confirmées - une action est requise pour confirmation";
$sidebar_text_016 = "Consultez votre liste d'entrées.";
$sidebar_text_017 = "Vous avez";
$sidebar_text_018 = "disponibles avant d'atteindre la limite de ";
$sidebar_text_019 = "par participant";
$sidebar_text_020 = "Vous avez atteint la limite de ";
$sidebar_text_021 = "dans ce concours";
$sidebar_text_022 = "Les bouteilles du concours sont acceptés chez";
$sidebar_text_023 = "le lieu d'envoi";
$sidebar_text_024 = "Les dates du concours n'ont pas encore été décidées. Merci de revérifier plus tard";
$sidebar_text_025 = "ont été ajoutées en base à la date du";

// -------------------- Sponsors --------------------
// NONE


// -------------------- Styles ---------------------

$styles_entry_text_07C = "The entrant must specify whether the entry is a Munich Kellerbier (pale, based on Helles) or a Franconian Kellerbier (amber, based on Marzen). The entrant may specify another type of Kellerbier based on other base styles such as Pils, Bock, Schwarzbier, but should supply a style description for judges.";
$styles_entry_text_09A = "The entrant must specify whether the entry is a pale or a dark variant.";
$styles_entry_text_10C = "The entrant must specify whether the entry is a pale or a dark variant.";
$styles_entry_text_21B = "Entrant must specify a strength (session: 3.0-5.0%, standard: 5.0-7.5%, double: 7.5-9.5%); if no strength is specified, standard will be assumed. Entrant must specify specific type of Specialty IPA from the library of known types listed in the Style Guidelines, or as amended by the BJCP web site; or the entrant must describe the type of Specialty IPA and its key characteristics in comment form so judges will know what to expect. Entrants may specify specific hop varieties used, if entrants feel that judges may not recognize the varietal characteristics of newer hops. Entrants may specify a combination of defined IPA types (e.g., Black Rye IPA) without providing additional descriptions. Entrants may use this category for a different strength version of an IPA defined by its own BJCP subcategory (e.g., session-strength American or English IPA) - except where an existing BJCP subcategory already exists for that style (e.g., double [American] IPA). Currently Defined Types: Black IPA, Brown IPA, White IPA, Rye IPA, Belgian IPA, Red IPA.";
$styles_entry_text_23F = "The type of fruit used must be specified. The brewer must declare a carbonation level (low, medium, high) and a sweetness level (low/none, medium, high).";
$styles_entry_text_24C = "Entrant must specify blond, amber, or brown biere de garde. If no color is specified, the judge should attempt to judge based on initial observation, expecting a malt flavor and balance that matches the color.";
$styles_entry_text_25B = "The entrant must specify the strength (table, standard, super) and the color (pale, dark).";
$styles_entry_text_27A = "The entrant must either specify a style with a BJCP-supplied description, or provide a similar description for the judges of a different style. If a beer is entered with just a style name and no description, it is very unlikely that judges will understand how to judge it. Currently defined examples: Gose, Piwo Grodziskie, Lichtenhainer, Roggenbier, Sahti, Kentucky Common, Pre-Prohibition Lager, Pre-Prohibition Porter, London Brown Ale.";
$styles_entry_text_28A = "The entrant must specify either a base beer style (classic BJCP style, or a generic style family) or provide a description of the ingredients/specs/desired character. The entrant must specify if a 100% Brett fermentation was conducted. The entrant may specify the strain(s) of Brettanomyces used, along with a brief description of its character.";
$styles_entry_text_28B = "The entrant must specify a description of the beer, identifying the yeast/bacteria used and either a base style or the ingredients/specs/target character of the beer.";
$styles_entry_text_28C = "Entrant must specify the type of fruit, spice, herb, or wood used. Entrant must specify a description of the beer, identifying the yeast/bacteria used and either a base style or the ingredients/specs/target character of the beer. A general description of the special nature of the beer can cover all the required items.";
$styles_entry_text_29A = "The entrant must specify a base style; the declared style does not have to be a Classic Style. The entrant must specify the type of fruit used. Soured fruit beers that aren't lambics should be entered in the American Wild Ale category.";
$styles_entry_text_29B = "The entrant must specify a base style; the declared style does not have to be a Classic Style. The entrant must specify the type of fruit and spices, herbs, or vegetables (SHV) used; individual SHV ingredients do not need to be specified if a well-known blend of spices is used (e.g., apple pie spice).";
$styles_entry_text_29C = "The entrant must specify a base style; the declared style does not have to be a Classic Style. The entrant must specify the type of fruit used. The entrant must specify the type of additional fermentable sugar or special process employed.";
$styles_entry_text_30A = "The entrant must specify a base style; the declared style does not have to be a Classic Style. The entrant must specify the type of spices, herbs, or vegetables used; individual ingredients do not need to be specified if a well-known blend of spices is used (e.g., apple pie spice).";
$styles_entry_text_30B = "The entrant must specify a base style; the declared style does not have to be a Classic Style. The entrant must specify the type of spices, herbs, or vegetables used; individual ingredients do not need to be specified if a well-known blend of spices is used (e.g., pumpkin pie spice). The beer must contain spices, and may contain vegetables and/or sugars.";
$styles_entry_text_30C = "The entrant must specify a base style; the declared style does not have to be a Classic Style. The entrant must specify the type of spices, sugars, fruits, or additional fermentables used; individual ingredients do not need to be specified if a well-known blend of spices is used (e.g., mulling spice).";
$styles_entry_text_31A = "The entrant must specify a base style; the declared style does not have to be a Classic Style. The entrant must specify the type of alternative grain used.";
$styles_entry_text_31B = "The entrant must specify a base style; the declared style does not have to be a Classic Style. The entrant must specify the type of sugar used.";
$styles_entry_text_32A = "The entrant must specify a Classic Style base beer. The entrant must specify the type of wood or smoke if a varietal smoke character is noticeable.";
$styles_entry_text_32B = "The entrant must specify a base beer style; the base beer does not have to be a Classic Style. The entrant must specify the type of wood or smoke if a varietal smoke character is noticeable. The entrant must specify the additional ingredients or processes that make this a specialty smoked beer.";
$styles_entry_text_33A = "The entrant must specify the type of wood used and the char level (if charred). The entrant must specify the base style; the base style can be either a classic BJCP style (i.e., a named subcategory) or may be a generic type of beer (e.g., porter, brown ale). If an unusual wood has been used, the entrant must supply a brief description of the sensory aspects the wood adds to beer.";
$styles_entry_text_33B = "The entrant must specify the additional alcohol character, with information about the barrel if relevant to the finished flavor profile. The entrant must specify the base style; the base style can be either a classic BJCP style (i.e., a named subcategory) or may be a generic type of beer (e.g., porter, brown ale). If an unusual wood or ingredient has been used, the entrant must supply a brief description of the sensory aspects the ingredients adds to the beer.";
$styles_entry_text_34A = "The entrant must specify the name of the commercial beer being cloned, specifications (vital statistics) for the beer, and either a brief sensory description or a list of ingredients used in making the beer. Without this information, judges who are unfamiliar with the beer will have no basis for comparison.";
$styles_entry_text_34B = "The entrant must specify the styles being mixed. The entrant may provide an additional description of the sensory profile of the beer or the vital statistics of the resulting beer.";
$styles_entry_text_34C = " The entrant must specify the special nature of the experimental beer, including the special ingredients or processes that make it not fit elsewhere in the guidelines. The entrant must provide vital statistics for the beer, and either a brief sensory description or a list of ingredients used in making the beer. Without this information, judges will have no basis for comparison.";
$styles_entry_text_M1A = "Entry Instructions: Entrants must specify carbonation level and strength. Sweetness is assumed to be DRY in this category. Entrants may specify honey varieties.";
$styles_entry_text_M1B = "Entrants must specify carbonation level and strength. Sweetness is assumed to be SEMI-SWEET in this category. Entrants MAY specify honey varieties.";
$styles_entry_text_M1C = "Entrants MUST specify carbonation level and strength. Sweetness is assumed to be SWEET in this category. Entrants MAY specify honey varieties.";
$styles_entry_text_M2A = "Entrants must specify carbonation level, strength, and sweetness. Entrants may specify honey varieties. Entrants may specify the varieties of apple used; if specified, a varietal character will be expected. Products with a relatively low proportion of honey are better entered as a Specialty Cider. A spiced cyser should be entered as a Fruit and Spice Mead. A cyser with other fruit should be entered as a Melomel. A cyser with additional ingredients should be entered as an Experimental mead.";
$styles_entry_text_M2B = "Entrants must specify carbonation level, strength, and sweetness. Entrants may specify honey varieties. Entrants may specify the varieties of grape used; if specified, a varietal character will be expected. A spiced pyment (hippocras) should be entered as a Fruit and Spice Mead. A pyment made with other fruit should be entered as a Melomel. A pyment with other ingredients should be entered as an Experimental Mead.";
$styles_entry_text_M2C = "Entrants must specify carbonation level, strength, and sweetness. Entrants may specify honey varieties. Entrants must specify the varieties of fruit used. A mead made with both berries and non-berry fruit (including apples and grapes) should be entered as a Melomel. A berry mead that is spiced should be entered as a Fruit and Spice Mead. A berry mead containing other ingredients should be entered as an Experimental Mead.";
$styles_entry_text_M2D = "Entrants must specify carbonation level, strength, and sweetness. Entrants may specify honey varieties. Entrants must specify the varieties of fruit used. A stone fruit mead that is spiced should be entered as a Fruit and Spice Mead. A stone fruit mead that contains non-stone fruit should be entered as a Melomel. A stone fruit mead that contains other ingredients should be entered as an Experimental Mead.";
$styles_entry_text_M2E = "Entrants must specify carbonation level, strength, and sweetness. Entrants may specify honey varieties. Entrants must specify the varieties of fruit used. A melomel that is spiced should be entered as a Fruit and Spice Mead. A melomel containing other ingredients should be entered as an Experimental Mead. Melomels made with either apples or grapes as the only fruit source should be entered as Cysers and Pyments, respectively. Melomels with apples or grapes, plus other fruit should be entered in this category, not Experimental.";
$styles_entry_text_M3A = "Entrants must specify carbonation level, strength, and sweetness. Entrants may specify honey varieties. Entrants must specify the types of spices used, (although well-known spice blends may be referred to by common name, such as apple pie spices). Entrants must specify the types of fruits used. If only combinations of spices are used, enter as a Spice, Herb, or Vegetable Mead. If only combinations of fruits are used, enter as a Melomel. If other types of ingredients are used, enter as an Experimental Mead.";
$styles_entry_text_M3B = "Entrants MUST specify carbonation level, strength, and sweetness. Entrants MAY specify honey varieties. Entrants MUST specify the types of spices used (although well-known spice blends may be referred to by common name, such as apple pie spices).";
$styles_entry_text_M4A = "Entrants MUST specify carbonation level, strength, and sweetness. Entrants MAY specify honey varieties. Entrants MAY specify the base style or beer or types of malt used. Products with a relatively low proportion of honey should be entered in the Spiced Beer category as a Honey Beer.";
$styles_entry_text_M4B = "Entrants MUST specify carbonation level, strength, and sweetness. Entrants MAY specify honey varieties. Entrants MUST specify the special nature of the mead, providing a description of the mead for judges if no such description is available from the BJCP.";
$styles_entry_text_M4C = "Entrants MUST specify carbonation level, strength, and sweetness. Entrants MAY specify honey varieties. Entrants MUST specify the special nature of the mead, whether it is a combination of existing styles, an experimental mead, or some other creation. Any special ingredients that impart an identifiable character MAY be declared.";
$styles_entry_text_C1E = "Entrants MUST specify carbonation level (3 levels). Entrants MUST specify sweetness (5 categories). Entrants MUST state variety of pear(s) used.";
$styles_entry_text_C2A = "Entrants MUST specify if the cider was barrel-fermented or aged. Entrants MUST specify carbonation level (3 levels). Entrants MUST specify sweetness (5 levels).";
$styles_entry_text_C2B = "Entrants MUST specify carbonation level (3 levels). Entrants MUST specify sweetness (5 categories). Entrants MUST specify all fruit(s) and/or fruit juice(s) added.";
$styles_entry_text_C2C = "Entrants MUST specify carbonation level (3 levels). Entrants MUST specify sweetness (5 levels).";
$styles_entry_text_C2D = "Entrants MUST specify starting gravity, final gravity or residual sugar, and alcohol level. Entrants MUST specify carbonation level (3 levels).";
$styles_entry_text_C2E = "Entrants MUST specify carbonation level (3 levels). Entrants MUST specify sweetness (5 categories). Entrants MUST specify all botanicals added. If hops are used, entrant must specify variety/varieties used.";
$styles_entry_text_C2F = "Entrants MUST specify all ingredients. Entrants MUST specify carbonation level (3 levels). Entrants MUST specify sweetness (5 categories).";


// -------------------- User (Edit Email) --------------------

$user_text_000 = "Une nouvelle adresse mail est requise et doit être un format valide.";
$user_text_001 = "Entrez l'ancien mot de passe";
$user_text_002 = "Entrez le nouveau mot de passe";
$user_text_003 = "SVP cochez cette case si vous souhaitez proceder au changement de votre adresse mail.";

// -------------------- Volunteers --------------------

if ($section == "bénévoles") {

	$volunteers_text_000 = "Si vous vous êtes enregistré,";
	$volunteers_text_001 = "puis choisissez  <em>Editer Compte</em> du menu Mon Compte indiqué par";
	$volunteers_text_002 = "l'icône sur le menu du haut";
	$volunteers_text_003 = "et";
	$volunteers_text_004 = "Si vous ne <em>vous êtes pas</em> inscrit et souhaitez devenir juge ou bénévole, inscrivez vous svp";
	$volunteers_text_005 = "Comme vous êtes déjà inscrit,";
	$volunteers_text_006 = "accèdez à votre compte";
	$volunteers_text_007 = "pour vérifier si vous vous êtes porté volontaire pour être juge ou bénévole";
	$volunteers_text_008 = "Si vous souhaitez être juge ou bénévole, veuillez vous inscrire après";

	// v2.1.9
	$volunteers_text_009 = "Si vous souhaitez nous rejoindre pour aider à l'organisation du concours, enregistrez vous ou mettez à jour votre compte en indiquant que vous souhaitez en être.";
	$volunteers_text_010 = "";

}

$login_text_000 = "Vous êtes déjà connecté.";
$login_text_001 = "Il n'y a aucune adresse mail en base qui concorde avec celle que vous avez rentré.";
$login_text_002 = "Essayez à nouveau?";
$login_text_003 = "Avez vous déjà enregistré votre compte?";
$login_text_004 = "Vous avez oublié votre mot de passe?";
$login_text_005 = "Réinitialisez le";
$login_text_006 = "Pour réinitialiser votre mot de passe, entrez l'adresse mail dont vous vous êtes servi lors de votre inscription.";
$login_text_007 = "Verifiez";
$login_text_008 = "Généré de façon aléatoire.";
$login_text_009 = "<strong>Indisponible.</strong> Votre compte a été crée par un administrateur et votre &quot;réponse secrète&quot; génerée aléatoirement. SVP contactez un administrateur pour récuperer ou changer votre mot de passe.";
$login_text_010 = "Ou, utilisez l'option email ci dessous.";
$login_text_011 = "Votre question de sécurité est...";
$login_text_012 = "Si vous n'avez pas reçu le mail,";
$login_text_013 = "Un email vous sera envoyé avec votre question de vérification et la réponse. Si vous ne trouvez rien, assurez vous de regarder dans votre courrier indésirable.";
$login_text_014 = "cliquez ici pour le renvoyer à";
$login_text_015 = "Si vous ne vous souvenez pas de la réponse à votre question de sécurité, contactez un administrateur du site.";
$login_text_016 = "Faites vous le mailer à";

// -------------------- Winners --------------------

$winners_text_000 = "Aucuns gagnants n'ont été renseignés pour cette table. Merci de revérifier plus tard.";
$winners_text_001 = "Les entrées gagnantes n'ont pas été postées encore. Merci de revérifier plus tard.";
$winners_text_002 = "Votre façon de récompenser les gagnants a été faite en distribuant les récompenses par table. Selectionnez les places d'honneur pour la table comme l'ensenmble ci dessous.";
$winners_text_003 = "Votre façon de récompenser les gagnants a été faite en distribuant les récompenses par catégorie. Selectionnez les places d'honneur pour chaque catégorie ci dessous (Il se peut qu'il y en ait plus d'une à cette table).";
$winners_text_004 = "Votre façon de récompenser les gagnants a été faite en distribuant les récompenses par sous-catégorie. Selectionnez les places d'honneur pour chaque sous-catégorie ci dessous (Il se peut qu'il y en ait plus d'une à cette table).";

// ----------------------------------------------------------------------------------
// Output
// ----------------------------------------------------------------------------------

$output_text_000 = "Merci de participer à notre concours";
$output_text_001 = "A summary of your entries, scores, and places is below.";
$output_text_002 = "Summary for";
$output_text_003 = "entries were judged";
$output_text_004 = "Your scoresheets could not be properly generated. Please contact the organizers of the competition.";
$output_text_005 = "No judge/steward assignments have been defined";
$output_text_006 = "for this location";
$output_text_007 = "If you would like to print blank table cards, close this window and choose <em>Print Table Cards: All Tables</em> from the <em>Reporting</em> menu.";
$output_text_008 = "Please be sure to check if your BJCP Judge ID is correct. If it is not, or if you have one and it is not listed, please enter it on the form.";
$output_text_009 = "If your name is not on the list below, sign in on the attached sheet(s).";
$output_text_010 = "To receive judging credit, please be sure to enter your BJCP Judge ID correctly and legibly.";
$output_text_011 = "No assignments have been made.";
$output_text_012 = "Total entries at this location";
$output_text_013 = "No participants provided notes to organizers.";
$output_text_014 = "The following are the notes to organizers entered by judges.";
$output_text_015 = "No participants provided notes to organizers.";
$output_text_016 = "Post-Judging Entry Inventory";
$output_text_017 = "If there are no entries showing below, flights at this table have not been assigned to rounds.";
$output_text_018 = "If entries are missing, all entries have not been assigned to a flight or round OR they have been assigned to a different round.";
$output_text_019 = "If there are no entries below, this table has not been assigned to a round.";
$output_text_020 = "No entries are eligible.";
$output_text_021 = "Entry Number / Judging Number Cheat Sheet";
$output_text_022 = "The points in this report are derived from the official BJCP Sanctioned Competition Requirements, available at";
$output_text_023 = "includes Best of Show";
$output_text_024 = "BJCP Points Report";
$output_text_025 = "Total Staff Points Available";
$output_text_026 = "Styles in this category are not accepted in this competition.";
$output_text_027 = "link to Beer Judge Certification Program Style Guidelines";
$output_text_028 = "";
$output_text_029 = "";
$output_text_030 = "";

// ----------------------------------------------------------------------------------
// Maintenance
// ----------------------------------------------------------------------------------

// v2.1.9
$maintenance_text_000 = "L'admin du site a mis le site hors-ligne pour des besoins de maintenance.";
$maintenance_text_001 = "Merci de vérifier plus tard.";

// ----------------------------------------------------------------------------------
// END initial release translation variables
// ----------------------------------------------------------------------------------

/***********************************************************************************/

// ----------------------------------------------------------------------------------
// Version 2.1.10 Additions
// ----------------------------------------------------------------------------------

// -------------------- Labels --------------------
$label_entry_numbers = "Numéro de l'entrée"; // For PayPal IPN Email
$label_status = "Statut"; // For PayPal IPN Email
$label_amount = "Montant"; // For PayPal IPN Email
$label_transaction_id = "Identifiant de la transaction"; // For PayPal IPN Email
$label_organization = "Organisation";
$label_ttb = "Numéro TTB";
$label_username = "Nom d'utilisateur";
$label_from = "De"; // For email headers
$label_to = "A"; // For email headers
$label_varies = "Varies";
$label_styles_accepted = "Styles acceptés";
$label_judging_styles = "Styles jugés";
$label_select_club = "Choisissez ou recherchez votre club ou asso";
$label_select_style = "Choisissez ou recherchez le style de votre entrée";
$label_select_country = "Choisissez ou recherchez votre pays";
$label_select_dropoff = "Selectionnez votre lieu de dépôt";
$label_club_enter = "Entrez le nom de votre asso";
$label_secret_05 = "Quel était le nom de jeune fille de votre grand-mère?";
$label_secret_06 = "Quel était le prénom de votre premier copain ou première copine?";
$label_secret_07 = "Quel était la marque et le modèle de votre première voiture?";
$label_secret_08 = "Quel était le nom de votre maitre ou maitresse de CE2?";
$label_secret_09 = "Dans quel ville avez-vous rencontré votre moitié?";
$label_secret_10 = "Quel était le prénom de votre meilleur ami ou meilleure amie au collège?";
$label_secret_11 = "Quel est le nom de votre groupe préféré après Pantera?";
$label_secret_12 = "Quel fut votre surnom pendant votre enfance?";
$label_secret_13 = "Quel est le nom de ce professeur qui vous saquait tout le temps au lycée?";
$label_secret_14 = "Quel est le nom de votre meilleur ami d'enfance?";
$label_secret_15 = "Dans quelle ville vos parents se sont-ils rencontrés?";
$label_secret_16 = "Quel est le numéro de téléphone fixe de votre enfance dont vous vous souvenez encore?";
$label_secret_17 = "Quel était l'endroit que vous préferiez visiter étant petit?";
$label_secret_18 = "Ou s'est déroulé votre premier baiser?";
$label_secret_19 = "Dans quelle ville avez-vous eu votre premier job?";
$label_secret_20 = "Dans quelle ville étiez vous pour le reveillon de l'an 2000?";
$label_secret_21 = "Quel est le nom de cette fac ou vous avez envoyé un dossier d'inscription mais n'avez jamais été pris?";
$label_secret_22 = "Quel est le prénom de la première fille ou du premier garçon que vous avez embrassé?";
$label_secret_23 = "Quel était le nom de votre jouet préféré étant enfant ?";
$label_secret_24 = "Dans quelle ville avez-vous rencontré votre moitié?";
$label_secret_25 = "Quelle est la densité originale de 25l de mout à 1092 qui bout pendant 3 heures avec un taux d'évaporation de 4%?";
$label_secret_26 = "Quel est la vitesse d'une hirondelle qui vole à vide?";
$label_secret_27 = "Quel est le nom de cette série télé qui d'après vous n'aurait jamais due être arrêtée?";
$label_pro = "Professionnel";
$label_amateur = "Amateur";
$label_hosted = "Accueilli";
$label_edition = "Edition";
$label_pro_comp_edition = "Professional Competition Edition";
$label_amateur_comp_edition = "Amateur Competition Edition";
$label_optional_info = "Info optionnelle";
$label_or = "Ou";
$label_admin_payments = "Payments";
$label_payer = "Payer";
$label_pay_with_paypal = "Payer avec PayPal";
$label_submit = "Soumettre";
$label_id_verification_question = "ID Verfication Question";
$label_id_verification_answer = "ID Verification Answer";
$label_server = "Server";
$label_password_reset = "Password Reset";
$label_id_verification_request = "ID Verification Request";
$label_new_password = "New Password";
$label_confirm_password = "Confirm Password";
$label_with_token = "With Token";
$label_password_strength = "Password Strength";
$label_entry_shipping = "Entry Shipping";
$label_jump_to = "Jump to...";
$label_top = "Top";

// -------------------- Headers --------------------
$header_text_112 = "You do not have sufficient access privileges to perform this action.";
$header_text_113 = "You can only edit your own account information.";
$header_text_114 = "As an admin, you can change a user's account information via Admin > Entries and Particpants > Manage Participants.";
$header_text_115 = "Results have been published.";
$header_text_116 = "If you do not receive the email within a reasonable amount of time, contact a competition official or site administrator to reset your password for you.";

// -------------------- Alerts --------------------
$alert_text_082 = "Since you signed up as a judge or steward, you are not allowed to add entries to your account. Only representatives of an organization are able to add entries to their accounts.";
$alert_text_083 = "Adding and edting of entries is not available.";
$alert_text_084 = "As an Administrator, you can add an entry to an organization's account by using the &quot;Add Entry For...&quot; dropdown menu on the Admin &gt; Entries and Participants &gt; Manage Entries page.";
$alert_text_085 = "You will not be able to print any entry's paperwork (bottle labels, etc.) until payment for it has been confirmed and it has been marked as &quot;paid&quot; below.";

// -------------------- Brew (Add Entry) --------------------
if ($section == "brew") {
	$brew_text_027 = "This Brewers Association style requires a statement from the brewer regarding the special nature of the product. See the <a href=\"https://www.brewersassociation.org/resources/brewers-association-beer-style-guidelines/\" target=\"_blank\">BA Style Guidelines</a> for specific guidance.";
	$brew_text_028 = "***NOT REQUIRED*** Add information here that is detailed in the style guidelines as a characteristic that you MAY declare.";
	$brew_text_029 = "Admin editing disabled. Your profile is considered a personal profile and not a organizational profile, and thus, not eligible to add entries. To add an entry for an organization, access the Manage Entries list and choose an organization from the &quot;Add an Entry For...&quot; dropdown.";


}

// -------------------- Brewer (Account) --------------------
if (($section == "brewer") || ($section == "enregistrer") || ($section == "step2") || (($section == "admin") && ($go == "entrant")) || (($section == "admin") && ($go == "judge"))) {
	$brewer_text_022 = "Vous pourrez identifier un co-brasseur quand vous ajouterez vos entrées en base.";
	$brewer_text_023 = "Selectionnez &quot;None&quot; si vous n'êtes pas afficilié à un club en particulier. Selectionnez &quot;Other&quot; si votre club ou asso n'est pas dans la liste - <strong>assurez vous d'utiliser la fonction recherche</strong>.";
    $brewer_text_024 = "SVP indiquez votre prénom.";
    $brewer_text_025 = "SVP indiquez votre nom de famille.";
    $brewer_text_026 = "SVP indiquez votre numéro de téléphone.";
    $brewer_text_027 = "SVP indiquez votre adresse.";
    $brewer_text_028 = "SVP indiquez votre ville.";
    $brewer_text_029 = "SVP indiquez votre région.";
    $brewer_text_030 = "SVP indiquez votre code postal.";
    $brewer_text_031 = "SVP indiquez votre pays.";
    $brewer_text_032 = "SVP indquez un nom pour votre orga, asso ou autre.";
    $brewer_text_033 = "SVP choisissez une question de sécurité.";
    $brewer_text_034 = "SVP choisissez une réponse pour votre question de sécurité.";
}

// -------------------- Entry Info --------------------
if ($section == "entry") {
	$entry_info_text_047 = "If a style's name is hyperlinked, it has specific entry requirements. Click or tap on the name to access the Brewers Association styles as listed on their website.";
}

// -------------------- List (User Entry List) --------------------
if (($section == "list") || ($section == "account") || ($go == "entries")) {
	$brewer_entries_text_016 = "Style Entered NOT Accepted";
	$brewer_entries_text_017 = "Entries will not be displayed as received until the competition staff has marked them as such in the system. Typically, this occurs AFTER all entries have been collected from all drop-off and shipping locations and sorted.";
	$brewer_entries_text_018 = "You will not be able to print this entry's paperwork (bottle labels, etc.) until it has been marked as paid.";
	$brewer_entries_text_019 = "Printing of entry paperwork is not available at this time.";
	$brewer_entries_text_020 = "Editing of entries is not available at this time. If you wish to edit your entry, contact a competition official.";
}

if (SINGLE) $brewer_info_000 = "Hello";
else $brewer_info_000 = "Merci de participer à";
$brewer_info_001 = "Vos détails de compte ont été mis à jour pour la dernière fois: ";
$brewer_info_002 = "Prenez un moment pour <a href=\"#entries\">consulter vos entrées</a>";
$brewer_info_003 = "payer vos frais d'entrées</a>";
$brewer_info_004 = "par entrée";
$brewer_info_005 = "An American Homebrewers Association (AHA) membership is required if one of your entries is selected for a Great American Beer Festival Pro-Am.";
$brewer_info_006 = "Print shipping labels to attach to your box(es) of bottles.";
$brewer_info_007 = "Print Shipping Labels";
$brewer_info_008 = "You have already been assigned to a table as a";
$brewer_info_009 = "If you wish to change your availabilty and/or withdraw your role, contact the competition organizer or judge coordinator.";
$brewer_info_010 = "You have already been assigned as a";
$brewer_info_011 = "ou";
$brewer_info_012 = "Print your judging scoresheet labels ";

// -------------------- Pay --------------------
$pay_text_030 = "By clicking the &quot;I Understand&quot; button below, you will be directed to PayPal to make your payment. Once you have <strong>completed</strong> your payment, PayPal will redirect you back to this site and will email you a receipt for the transaction. <strong>If your payment was successful, your paid status will be updated automatically. Please note that you may need wait a few minutes for the payment status to be updated.</strong> Be sure to refresh the pay page or access your entries list.";
$pay_text_031 = "About to Leave this Site";
$pay_text_032 = "No payment is necessary. Thank you!";
$pay_text_033 = "You have unpaid entries. Click or tap to pay for your entries.";

// -------------------- Register --------------------
if (($section == "enregistrer") || ($section == "brasseur") || ($action == "enregistrer") || ($go == "compte") || ($section == "step2")) {
	$register_text_035 = "The information you provide beyond your organization's name is strictly for record-keeping and contact purposes.";
	$register_text_036 = "A condition of entry into the competition is providing this information, including a contact person's email address and phone number. Your organization's name may be displayed should one of your entries place, but no other information will be made public.";
	$register_text_037 = "Registration Confirmation";
	$register_text_038 = "An administrator has registerd you for an account. The following is confirmation of the information input:";
	$register_text_039 = "Thank you for registering an account. The following is confirmation of the information you provided:";
	$register_text_040 = "If any of the above information is incorrect,";
	$register_text_041 = "log in to your account";
	$register_text_042 = "and make the necessary changes. Best of luck in the competition!";
	$register_text_043 = "Please do not reply to this email as it is automatically generated. The originating account is not active or monitored.";
	$register_text_044 = "Please provide an organization name.";
	$register_text_045 = "Provide a brewery name, brewpub name, etc. Be sure to check the competition information for types of beverages accepted.";
	$register_text_046 = "For U.S. organizations only.";
}

// -------------------- User Registration --------------------
$user_text_004 = "Be sure to use upper and lower case letters, numbers, and special characters for a stronger password.";
$user_text_005 = "Your current email address is";

// -------------------- Login --------------------
$login_text_017 = "Email Me My Security Question Answer";
$login_text_018 = "Your user name (email address) is required.";
$login_text_019 = "Your password is required.";
$login_text_020 = "The token provided is invalid or has already been used. Please use the forgot password function again to generate a new password reset token.";
$login_text_021 = "The token provided has expired. Please use the forgot password function again to generate a new password reset token.";
$login_text_022 = "The email you entered is not associated with the provided token. Please try again.";
$login_text_023 = "The passwords do not match. Please try again.";
$login_text_024 = "A confirmation password is required.";
$login_text_025 = "Mot de passe oublié ?";
$login_text_026 = "Enter your account email address and new password below.";
$login_text_027 = "Your password has been reset successfully. You may now log in with the new password.";

// -------------------- Winners --------------------
$winners_text_005 = "Les gagnants n'ont pas encore été postés. Merci de vérifier plus tard.";

// -------------------- Output - PayPal Response --------------------
$paypal_response_text_000 = "Your payment has been completed. The transaction details are provided here for your convience.";
$paypal_response_text_001 = "Please note that you will receive an official commuication from PayPal at the email address listed below.";
$paypal_response_text_002 = "Best of luck in the competition!";
$paypal_response_text_003 = "Please do not reply to this email as it is automatically generated. The originating account is not active or monitored.";
$paypal_response_text_004 = "PayPal has processed your transaction.";
$paypal_response_text_005 = "The status of your PayPal payment is:";
$paypal_response_text_006 = "Paypal response was &quot;invalid.&quot;. Please try to make your payment again.";
$paypal_response_text_007 = "Please contact the competition organizer if you have any questions.";
$paypal_response_text_008 = "Invalid PayPal Payment";
$paypal_response_text_009 = "PayPal Payment Details";

// -------------------- Output - Password reset email text --------------------
$pwd_email_reset_text_000 = "A request was made to verify the account at the";
$pwd_email_reset_text_001 = "website using the ID Verfication email function. If you did not initiate this, please contact the competition's organizer.";
$pwd_email_reset_text_002 = "The ID verification answer is case sensitive";
$pwd_email_reset_text_003 = "A request was made to change your password at the";
$pwd_email_reset_text_004 = "website. If you did not initiate this, don't worry. Your password cannot be reset without the link below.";
$pwd_email_reset_text_005 = "To reset your password, click the link below or copy/paste it into your browser.";

// -------------------- Best Brewer --------------------
$best_brewer_text_000 = "brasseur participants";
$best_brewer_text_001 = "HM";
$best_brewer_text_002 = "Tie-breakers have been applied in accordance with the <a href=\"#\" data-toggle=\"modal\" data-target=\"#scoreMethod\">scoring methodology</a>.";
$best_brewer_text_003 = "Méthodologie de notage";
$best_brewer_text_004 = "Each placing entry is given the following points:";
$best_brewer_text_005 = "The following tie-breakers have been applied, in order of priority:";
$best_brewer_text_006 = "The highest total number of first, second and third places.";
$best_brewer_text_007 = "The highest total number of first, second, third, fourth, and honorable mention places.";
$best_brewer_text_008 = "The highest number of first places.";
$best_brewer_text_009 = "The lowest number of entries.";
$best_brewer_text_010 = "The highest minimum score.";
$best_brewer_text_011 = "The highest maximum score.";
$best_brewer_text_012 = "The highest average score.";
$best_brewer_text_013 = "Non utilisé.";
$best_brewer_text_014 = "Clubs ou Assos participantes";

// ----------------------------------------------------------------------------------
// END Version 2.1.10
// ----------------------------------------------------------------------------------

/***********************************************************************************/

// ----------------------------------------------------------------------------------
// Various conditionals
// No translations below this line
// ----------------------------------------------------------------------------------

if (strpos($section, "step") === FALSE) $alert_text_032 = $alert_text_032; else $alert_text_032 = "";
if (strpos($section, "step") === FALSE) $alert_text_033 = $alert_text_033; else $alert_text_033 = "";
if (strpos($section, "step") === FALSE) $alert_text_036 = $alert_text_036; else $alert_text_036 = "";
if (strpos($section, "step") === FALSE) $alert_text_039 = $alert_text_039; else $alert_text_039 = "";
if ((strpos($section, "step") === FALSE) && ((isset($_SESSION['prefsProEdition'])) && ($_SESSION['prefsProEdition'] == 0))) $alert_text_043 = $alert_text_043; else $alert_text_043 = "";
if ((strpos($section, "step") === FALSE) && ((isset($_SESSION['prefsProEdition'])) && ($_SESSION['prefsProEdition'] == 0))) $alert_text_047 = $alert_text_047; else $alert_text_047 = "";
if (strpos($section, "step") === FALSE) $alert_text_050 = $alert_text_050; else $alert_text_050 = "";
if (strpos($section, "step") === FALSE) $alert_text_053 = $alert_text_053; else $alert_text_053 = "";
if ((strpos($section, "step") === FALSE) && ((isset($_SESSION['prefsProEdition'])) && ($_SESSION['prefsProEdition'] == 0))) $alert_text_060 = $alert_text_060; else $alert_text_060 = "";
if (strpos($section, "step") === FALSE) $alert_text_068 = $alert_text_068; else $alert_text_068 = "";
if (strpos($section, "step") === FALSE) $alert_text_070 = $alert_text_070; else $alert_text_070 = "";
if (strpos($section, "step") === FALSE) $label_character_limit = $label_character_limit; else $label_character_limit = "";
if (strpos($section, "step") === FALSE) $header_text_031 = $header_text_031; else $header_text_031 = "";
if (strpos($section, "step") === FALSE) $beerxml_text_007 = $beerxml_text_007; else $beerxml_text_007 = "";


// ----------------------------------------------------------------------------------
// Admin Pages - Admin pages will be included in a future release
// ----------------------------------------------------------------------------------
// if ($section == "admin") include (LANG.'en_admin.lang.php');

?>
