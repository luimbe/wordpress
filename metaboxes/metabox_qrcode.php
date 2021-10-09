class QRCode_Meta_Box {

public function __construct() {

    if ( is_admin() ) {
        add_action( 'load-post.php',     array( $this, 'init_metabox' ) );
        add_action( 'load-post-new.php', array( $this, 'init_metabox' ) );
    }

}

public function init_metabox() {

    add_action( 'add_meta_boxes',        array( $this, 'add_metabox' )         );
    add_action( 'save_post',             array( $this, 'save_metabox' ), 10, 2 );

}

public function add_metabox() {

    add_meta_box(
        'post_qrcode',
        'QR Code',
        array( $this, 'render_metabox' ),
        array( 'post', ' page' ),
        'side',
        'low'
    );

}

public function render_metabox( $post ) {

    // Add nonce for security and authentication.
    wp_nonce_field( 'qrcode_meta_boxnonce_action', 'qrcode_meta_boxnonce' );

}

public function save_metabox( $post_id, $post ) {

    // Add nonce for security and authentication.
    $nonce_name   = isset( $_POST['qrcode_meta_boxnonce'] ) ? $_POST['qrcode_meta_boxnonce'] : '';
    $nonce_action = 'qrcode_meta_boxnonce_action';

    // Check if a nonce is set.
    if ( ! isset( $nonce_name ) )
        return;

    // Check if a nonce is valid.
    if ( ! wp_verify_nonce( $nonce_name, $nonce_action ) )
        return;

}

}

new QRCode_Meta_Box;