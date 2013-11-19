<?php

class BrandingSettingsItem extends SettingsItem {
	public function getName() {
		return "Branding";
	}
	
	public function getOrder() {
		return 100;
	}
	
	public function getContent() {
		$form = new Form("settings-branding");
		$form->add(new TextField("name", "Website Name"));
		$form->add(new TextField("description", "Website Description"));
		$form->add(new TextField("organization", "Organization Name"));
		return $form->getHtml();
	}
}