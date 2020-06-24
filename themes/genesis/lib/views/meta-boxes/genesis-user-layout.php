<?php
/**
 * Genesis Framework.
 *
 * WARNING: This file is part of the core Genesis Framework. DO NOT edit this file under any circumstances.
 * Please do all modifications in the form of a child theme.
 *
 * @package StudioPress\Genesis
 * @author  StudioPress
 * @license GPL-2.0-or-later
 * @link    https://my.studiopress.com/themes/genesis/
 */

$genesis_layout = get_the_author_meta( 'layout', $object->ID );
$genesis_layout = $genesis_layout ?: '';
?>
<h2><?php esc_html_e( 'Layout Settings', 'genesis' ); ?></h2>
<p><span class="description"><?php esc_html_e( 'These settings apply to this author\'s archive pages.', 'genesis' ); ?></span></p>
<table class="form-table">
	<tbody>
		<tr>
			<th scope="row"><?php esc_html_e( 'Choose Layout', 'genesis' ); ?></th>
			<td>
				<fieldset class="genesis-layout-selector">
					<legend class="screen-reader-text"><?php esc_html_e( 'Choose Layout', 'genesis' ); ?></legend>
					<p>
						<input type="radio" name="genesis-meta[layout]" class="default-layout" id="default-layout" value="" <?php checked( $genesis_layout, '' ); ?> />
						<label class="default" for="default-layout">
							<?php
							/* translators: %s: Theme settings admin screen link. */
							printf( esc_html__( 'Default Layout set in %s', 'genesis' ), '<a href="' . esc_url( menu_page_url( 'genesis', 0 ) ) . '">' . esc_html__( 'Theme Settings', 'genesis' ) . '</a>' );
							?>
						</label>
					</p>

					<?php
					genesis_layout_selector(
						[
							'name'     => 'genesis-meta[layout]',
							'selected' => $genesis_layout,
							'type'     => [ 'archive', 'author', $object->ID ],
						]
					);
					?>

				</fieldset>
			</td>
		</tr>
	</tbody>
</table>
