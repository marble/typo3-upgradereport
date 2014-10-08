<?php
// DO NOT CHANGE THIS FILE! It is automatically generated by extdeveval::buildAutoloadRegistry.
// This file was generated on 2013-10-27 23:34

$extensionPath = t3lib_extMgm::extPath('smoothmigration');
$extensionClassesPath = $extensionPath . 'Classes/';
return array(
	'tx_smoothmigration_checks_abstractcheckdefinition' => $extensionClassesPath . 'Checks/AbstractCheckDefinition.php',
	'tx_smoothmigration_checks_abstractcheckprocessor' => $extensionClassesPath . 'Checks/AbstractCheckProcessor.php',
	'tx_smoothmigration_checks_abstractcheckresultanalyzer' => $extensionClassesPath . 'Checks/AbstractCheckResultAnalyzer.php',
	'tx_smoothmigration_checks_core_calltodeprecatedstaticmethods_definition' => $extensionClassesPath . 'Checks/Core/CallToDeprecatedStaticMethods/Definition.php',
	'tx_smoothmigration_checks_core_calltodeprecatedstaticmethods_processor' => $extensionClassesPath . 'Checks/Core/CallToDeprecatedStaticMethods/Processor.php',
	'tx_smoothmigration_checks_core_calltodeprecatedstaticmethods_resultanalyzer' => $extensionClassesPath . 'Checks/Core/CallToDeprecatedStaticMethods/ResultAnalyzer.php',
	'tx_smoothmigration_checks_core_calltodeprecatedviewhelpers_definition' => $extensionClassesPath . 'Checks/Core/CallToDeprecatedViewHelpers/Definition.php',
	'tx_smoothmigration_checks_core_calltodeprecatedviewhelpers_processor' => $extensionClassesPath . 'Checks/Core/CallToDeprecatedViewHelpers/Processor.php',
	'tx_smoothmigration_checks_core_calltodeprecatedviewhelpers_resultanalyzer' => $extensionClassesPath . 'Checks/Core/CallToDeprecatedViewHelpers/ResultAnalyzer.php',
	'tx_smoothmigration_checks_core_mysql_definition' => $extensionClassesPath . 'Checks/Core/Mysql/Definition.php',
	'tx_smoothmigration_checks_core_mysql_processor' => $extensionClassesPath . 'Checks/Core/Mysql/Processor.php',
	'tx_smoothmigration_checks_core_mysql_resultanalyzer' => $extensionClassesPath . 'Checks/Core/Mysql/ResultAnalyzer.php',
	'tx_smoothmigration_checks_core_namespace_definition' => $extensionClassesPath . 'Checks/Core/Namespace/Definition.php',
	'tx_smoothmigration_checks_core_namespace_processor' => $extensionClassesPath . 'Checks/Core/Namespace/Processor.php',
	'tx_smoothmigration_checks_core_removedconstants_definition' => $extensionClassesPath . 'Checks/Core/RemovedConstants/Definition.php',
	'tx_smoothmigration_checks_core_removedconstants_processor' => $extensionClassesPath . 'Checks/Core/RemovedConstants/Processor.php',
	'tx_smoothmigration_checks_core_removedconstants_resultanalyzer' => $extensionClassesPath . 'Checks/Core/RemovedConstants/ResultAnalyzer.php',
	'tx_smoothmigration_checks_core_requireonceinextensions_definition' => $extensionClassesPath . 'Checks/Core/RequireOnceInExtensions/Definition.php',
	'tx_smoothmigration_checks_core_requireonceinextensions_processor' => $extensionClassesPath . 'Checks/Core/RequireOnceInExtensions/Processor.php',
	'tx_smoothmigration_checks_core_requireonceinextensions_resultanalyzer' => $extensionClassesPath . 'Checks/Core/RequireOnceInExtensions/ResultAnalyzer.php',
	'tx_smoothmigration_checks_core_xclasses_definition' => $extensionClassesPath . 'Checks/Core/Xclasses/Definition.php',
	'tx_smoothmigration_checks_core_xclasses_processor' => $extensionClassesPath . 'Checks/Core/Xclasses/Processor.php',
	'tx_smoothmigration_checks_core_xclasses_resultanalyzer' => $extensionClassesPath . 'Checks/Core/Xclasses/ResultAnalyzer.php',
	'tx_smoothmigration_checks_dam_calltodamclasses_definition' => $extensionClassesPath . 'Checks/Dam/CallToDamClasses/Definition.php',
	'tx_smoothmigration_checks_dam_calltodamclasses_processor' => $extensionClassesPath . 'Checks/Dam/CallToDamClasses/Processor.php',
	'tx_smoothmigration_checks_dam_calltodamclasses_resultanalyzer' => $extensionClassesPath . 'Checks/Dam/CallToDamClasses/ResultAnalyzer.php',
	'tx_smoothmigration_checks_database_utf8_definition' => $extensionClassesPath . 'Checks/Database/Utf8/Definition.php',
	'tx_smoothmigration_checks_database_utf8_processor' => $extensionClassesPath . 'Checks/Database/Utf8/Processor.php',
	'tx_smoothmigration_checks_database_utf8_resultanalyzer' => $extensionClassesPath . 'Checks/Database/Utf8/ResultAnalyzer.php',
	'tx_smoothmigration_checks_extension_incompatiblewithlts_definition' => $extensionClassesPath . 'Checks/Extension/IncompatibleWithLts/Definition.php',
	'tx_smoothmigration_checks_extension_incompatiblewithlts_processor' => $extensionClassesPath . 'Checks/Extension/IncompatibleWithLts/Processor.php',
	'tx_smoothmigration_checks_extension_incompatiblewithlts_resultanalyzer' => $extensionClassesPath . 'Checks/Extension/IncompatibleWithLts/ResultAnalyzer.php',
	'tx_smoothmigration_checks_extension_obsolete_definition' => $extensionClassesPath . 'Checks/Extension/Obsolete/Definition.php',
	'tx_smoothmigration_checks_extension_obsolete_processor' => $extensionClassesPath . 'Checks/Extension/Obsolete/Processor.php',
	'tx_smoothmigration_checks_extension_obsolete_resultanalyzer' => $extensionClassesPath . 'Checks/Extension/Obsolete/ResultAnalyzer.php',
	'tx_smoothmigration_cli' => $extensionClassesPath . 'Cli/class.smoothmigration_cli.php',
	'tx_smoothmigration_controller_abstractmodulecontroller' => $extensionClassesPath . 'Controller/AbstractModuleController.php',
	'tx_smoothmigration_controller_ajaxcontroller' => $extensionClassesPath . 'Controller/AjaxController.php',
	'tx_smoothmigration_controller_reportcontroller' => $extensionClassesPath . 'Controller/ReportController.php',
	'tx_smoothmigration_domain_interface_check' => $extensionClassesPath . 'Domain/Interface/Check.php',
	'tx_smoothmigration_domain_interface_checkdescription' => $extensionClassesPath . 'Domain/Interface/CheckDescription.php',
	'tx_smoothmigration_domain_interface_checkprocessor' => $extensionClassesPath . 'Domain/Interface/CheckProcessor.php',
	'tx_smoothmigration_domain_interface_checkrequirements' => $extensionClassesPath . 'Domain/Interface/CheckRequirements.php',
	'tx_smoothmigration_domain_interface_checkresultanalyzer' => $extensionClassesPath . 'Domain/Interface/CheckResultAnalyzer.php',
	'tx_smoothmigration_domain_interface_description' => $extensionClassesPath . 'Domain/Interface/Description.php',
	'tx_smoothmigration_domain_interface_issuelocation' => $extensionClassesPath . 'Domain/Interface/IssueLocation.php',
	'tx_smoothmigration_domain_interface_migration' => $extensionClassesPath . 'Domain/Interface/Migration.php',
	'tx_smoothmigration_domain_interface_migrationdescription' => $extensionClassesPath . 'Domain/Interface/MigrationDescription.php',
	'tx_smoothmigration_domain_interface_migrationprocessor' => $extensionClassesPath . 'Domain/Interface/MigrationProcessor.php',
	'tx_smoothmigration_domain_interface_migrationrequirements' => $extensionClassesPath . 'Domain/Interface/MigrationRequirements.php',
	'tx_smoothmigration_domain_interface_migrationresultanalyzer' => $extensionClassesPath . 'Domain/Interface/MigrationResultAnalyzer.php',
	'tx_smoothmigration_domain_interface_processor' => $extensionClassesPath . 'Domain/Interface/Processor.php',
	'tx_smoothmigration_domain_interface_requirements' => $extensionClassesPath . 'Domain/Interface/Requirements.php',
	'tx_smoothmigration_domain_interface_resultanalyzer' => $extensionClassesPath . 'Domain/Interface/ResultAnalyzer.php',
	'tx_smoothmigration_domain_model_deprecation' => $extensionClassesPath . 'Domain/Model/Deprecation.php',
	'tx_smoothmigration_domain_model_issue' => $extensionClassesPath . 'Domain/Model/Issue.php',
	'tx_smoothmigration_domain_model_issuelocation_configuration' => $extensionClassesPath . 'Domain/Model/IssueLocation/Configuration.php',
	'tx_smoothmigration_domain_model_issuelocation_database' => $extensionClassesPath . 'Domain/Model/IssueLocation/Database.php',
	'tx_smoothmigration_domain_model_issuelocation_extension' => $extensionClassesPath . 'Domain/Model/IssueLocation/Extension.php',
	'tx_smoothmigration_domain_model_issuelocation_file' => $extensionClassesPath . 'Domain/Model/IssueLocation/File.php',
	'tx_smoothmigration_domain_model_issuelocation_physicallocation' => $extensionClassesPath . 'Domain/Model/IssueLocation/PhysicalLocation.php',
	'tx_smoothmigration_domain_repository_deprecationrepository' => $extensionClassesPath . 'Domain/Repository/DeprecationRepository.php',
	'tx_smoothmigration_domain_repository_issuerepository' => $extensionClassesPath . 'Domain/Repository/IssueRepository.php',
	'tx_smoothmigration_migrations_abstractmigrationdefinition' => $extensionClassesPath . 'Migrations/AbstractMigrationDefinition.php',
	'tx_smoothmigration_migrations_abstractmigrationprocessor' => $extensionClassesPath . 'Migrations/AbstractMigrationProcessor.php',
	'tx_smoothmigration_migrations_core_calltodeprecatedstaticmethods_definition' => $extensionClassesPath . 'Migrations/Core/CallToDeprecatedStaticMethods/Definition.php',
	'tx_smoothmigration_migrations_core_calltodeprecatedstaticmethods_processor' => $extensionClassesPath . 'Migrations/Core/CallToDeprecatedStaticMethods/Processor.php',
	'tx_smoothmigration_migrations_core_namespace_definition' => $extensionClassesPath . 'Migrations/Core/Namespace/Definition.php',
	'tx_smoothmigration_migrations_core_namespace_processor' => $extensionClassesPath . 'Migrations/Core/Namespace/Processor.php',
	'tx_smoothmigration_migrations_core_requireonceinextensions_definition' => $extensionClassesPath . 'Migrations/Core/RequireOnceInExtensions/Definition.php',
	'tx_smoothmigration_migrations_core_requireonceinextensions_processor' => $extensionClassesPath . 'Migrations/Core/RequireOnceInExtensions/Processor.php',
	'tx_smoothmigration_migrations_database_utf8_definition' => $extensionClassesPath . 'Migrations/Database/Utf8/Definition.php',
	'tx_smoothmigration_migrations_database_utf8_processor' => $extensionClassesPath . 'Migrations/Database/Utf8/Processor.php',
	'tx_smoothmigration_service_check_registry' => $extensionClassesPath . 'Service/Check/Registry.php',
	'tx_smoothmigration_service_classaliasprovider' => $extensionClassesPath . 'Service/ClassAliasProvider.php',
	'tx_smoothmigration_service_migration_registry' => $extensionClassesPath . 'Service/Migration/Registry.php',
	'tx_smoothmigration_service_requirementsanalyzer' => $extensionClassesPath . 'Service/RequirementsAnalyzer.php',
	'tx_smoothmigration_userfunctions_tca' => $extensionClassesPath . 'UserFunctions/Tca.php',
	'tx_smoothmigration_utility_databaseutility' => $extensionClassesPath . 'Utility/DatabaseUtility.php',
	'tx_smoothmigration_utility_extensionutility' => $extensionClassesPath . 'Utility/ExtensionUtility.php',
	'tx_smoothmigration_utility_filelocatorutility' => $extensionClassesPath . 'Utility/FileLocatorUtility.php',
	'tx_smoothmigration_viewhelpers_ifmigrationavailableviewhelper' => $extensionClassesPath . 'ViewHelpers/IfMigrationAvailableViewHelper.php',
	'tx_smoothmigration_viewhelpers_inspectionviewhelper' => $extensionClassesPath . 'ViewHelpers/InspectionViewHelper.php',
	'tx_smoothmigration_viewhelpers_resultanalyzerviewhelper' => $extensionClassesPath . 'ViewHelpers/ResultAnalyzerViewHelper.php',
);
?>