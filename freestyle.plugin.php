<?php
class FreeStyle extends Plugin {
    public function configure() {

	$ui = new FormUI(strtolower(get_class($this)));
	$clientcode    = $ui->append('textarea', 'clientcode', 'freestyle__css', _t('FreeStyle CSS'));
	$ui->append( 'submit', 'save', _t( 'Save' ) );
	return $ui;
    }

    private static function getvar($var) {
        return Options::get('freestyle__'.$var);
    }

    function action_template_header() {
        echo '<style type="text/css">'."\n";
        echo self::getvar('css')."\n";
        echo '</style>'."\n";
    }

}
?>

