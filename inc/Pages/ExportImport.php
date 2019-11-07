<?php

namespace PerkoCustomizerUI\Pages;

use PerkoCustomizerUI\Base\BaseController;
use PerkoCustomizerUI\Services\AdminSettingsService;
use PerkoCustomizerUI\Services\DataService;
use PerkoCustomizerUI\Services\ImportExportSettingsService;

class ExportImport extends BaseController {

	public function register() {
        add_action( 'admin_menu', [ $this, 'addExportImportPage' ] );

		$settings_service = new ImportExportSettingsService();
		add_action( 'admin_init', [ $settings_service, 'setSettings' ] );
	}

	function exportImportIndex() {
		require_once "$this->plugin_path/templates/exportImport.php";
	}

	function addExportImportPage() {
		add_submenu_page( 'wpcui', 'Export/Import', 'Export/Import', 'manage_options', 'wpcui-export-import', [$this, 'exportImportIndex'] );
	}
}