<?php

namespace PerkoCustomizerUI\Pages;

use PerkoCustomizerUI\Base\BaseController;
use PerkoCustomizerUI\Services\AdminSettingsService;
use PerkoCustomizerUI\Services\DataService;

class ExportImport extends BaseController {

	public function register() {
        add_action( 'admin_menu', [ $this, 'addExportImportPage' ] );
	}

	function exportImportIndex() {
		require_once "$this->plugin_path/templates/exportImport.php";
	}

	function addExportImportPage() {
		add_submenu_page( 'wpcui', 'Export/Import', 'Export/Import', 'manage_options', 'wpcui-export-import', [$this, 'exportImportIndex'] );
	}
}