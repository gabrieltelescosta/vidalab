<?php
/**
 * Inline header.
 *
 * @since   3.0.0
 * @package The7/Templates
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}
?>

<div <?php presscore_header_class( 'masthead inline-header' ); ?> <?php presscore_header_inline_style(); ?> role="banner">

	<?php presscore_get_template_part( 'theme', 'header/top-bar' ); ?>

	<header class="header-bar">

		<?php presscore_get_template_part( 'theme', 'header/branding' ); ?>

		<?php presscore_get_template_part( 'theme', 'header/primary-menu' ); ?>

		<?php presscore_render_header_elements( 'near_menu_right' ); ?>

		<div class="buscar-exame">
		<form id="form_laudos" method="POST">
			<label class="titulo">Buscar exames</label>
			<input type="text" name="codigocnpj" data-required="true" data-title="Código ou CNPJ" placeholder="Código ou CNPJ">
			<input type="password" name="senha" data-required="true" data-title="Senha" placeholder="Senha">
			<button>Enviar</button>
		</form>
		</div>

	</header>

</div>
