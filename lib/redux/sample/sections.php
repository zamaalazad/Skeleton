<?php 

Redux::setSection( $opt_name, array(
        'title'  => esc_html__( 'Basic Field', 'your-textdomain-here' ),
        'id'     => 'basic',
        'icon'   => 'el el-home',
    ) );

Redux::setSection( $opt_name, array(
    'title'         => esc_html__('Basic Options', $td_name),
    'id'            => 'basic_options',
    'icon'          => 'el el-text',
    'subsection'   => true,
    'fields' => array(
        array(
            'id'       => 'opt-text',
            'type'     => 'text',
            'title'    => esc_html__( 'Example Text', 'your-textdomain-here' ),
            'desc'     => esc_html__( 'Example description.', 'your-textdomain-here' ),
            'subtitle' => esc_html__( 'Example subtitle.', 'your-textdomain-here' ),
        )
    )
));