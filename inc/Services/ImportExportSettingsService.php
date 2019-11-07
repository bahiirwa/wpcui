<?php

namespace PerkoCustomizerUI\Services;


class ImportExportSettingsService {

	private $formControlService;
	private $sanitizer;


	public function __construct() {
		$this->formControlService = new FormControlsService();
		$this->sanitizer          = new AdminSanitizerService();
	}


	public function setSettings() {

		/**
		 * Section Settings
		 */
		register_setting( 'wpcui-import', 'wpcui_import', [ $this->sanitizer, 'sanitizeImport' ] );

		add_settings_section( 'wpcui_import_code', 'Import Code', [ $this, 'sectionOutput' ], 'wpcui-export-import' );

		add_settings_field( 'section_title',
			'WPCUI Import Code',
			[ $this->formControlService, 'textArea' ],
			'wpcui-export-import',
			'wpcui_import_code',
			[
				'option_name' => 'import_controls',
				'label_for'   => 'import_code',
				'placeholder' => 'Enter code here',
			] );
	}

	public function sectionOutput() {
		echo '<p>Paste the WPCUI export from another WordPress installation below to import into this installation.</p>';
		echo '<p><em>WARNING: This will delete any existing customizer controls you have registered with WPCUI</em></p>';
	}

}