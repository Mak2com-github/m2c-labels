<?php
function m2c_labels($atts) {
    $atts = shortcode_atts(
        array(
            'theme' => 'light',
            'lines' => '1,2,3,4',
            'note' => 'A',
            'url' => 'https://www.websitecarbon.com/',
            'percent' => '89',
            'border' => 'light',
        ),
        $atts,
        'm2c-labels'
    );

    $theme_class = ($atts['theme'] === 'dark') ? 'ecograder__dark' : 'ecograder__light';
    $border_class = ($atts['border'] === 'dark') ? 'ecograder-border__dark' : 'ecograder-border__light';
    $lines = array_map('trim', explode(',', $atts['lines']));
    $custom_style = '';
    if (preg_match('/^#(?:[0-9a-fA-F]{3}){1,2}$/', $atts['theme'])) {
        $theme_class = '';
        $custom_style = 'style="background-color: ' . esc_attr($atts['theme']) . ';"';
    }
    ob_start();
    ?>
    <div class="ecograder__container <?php echo esc_attr($theme_class); echo esc_attr($border_class); ?>" <?php echo $custom_style; ?>>
        <?php if (in_array('1', $lines)) : ?>
        <div class="ecograder__inner-top ecograder__line">
            <p>Un site noté</p>
            <div class="ecograder__arrow">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="44" viewBox="0 0 50 44" fill="none">
                    <path d="M4.81549 28.2989C4.69393 28.1528 4.66567 27.9422 4.76057 27.7635C4.81777 27.6557 10.6217 16.9452 21.7824 13.635C28.7028 11.5817 36.1936 12.7448 44.0463 17.09C44.2781 17.2179 44.3637 17.5126 44.2351 17.7457C44.1057 17.9788 43.8125 18.0632 43.5794 17.9345C35.9608 13.7191 28.7195 12.5844 22.0563 14.5607C11.2792 17.7571 5.66797 28.1128 5.61282 28.217C5.48771 28.4522 5.19545 28.5415 4.96025 28.4164C4.90307 28.3862 4.85467 28.3461 4.81549 28.2989Z" fill="white"/>
                    <path d="M35.2248 18.2837C35.1563 18.2013 35.115 18.0957 35.1136 17.9801C35.1111 17.7137 35.3251 17.4955 35.5912 17.4926L43.4085 17.4121L40.7319 10.8863C40.6309 10.6396 40.749 10.3582 40.9954 10.2568C41.2418 10.1561 41.523 10.2724 41.6249 10.5203L44.5716 17.7051C44.632 17.8532 44.6158 18.0217 44.5271 18.155C44.4388 18.2881 44.2895 18.3689 44.1301 18.3704L35.6012 18.4577C35.4502 18.4596 35.3146 18.3916 35.2248 18.2837Z" fill="white"/>
                </svg>
            </div>
            <div class="ecograder_websitecarbon">
                <a href="<?php echo esc_url($atts['url']); ?>" title="Lien vers le site websitecarbon" target="_blank">websitecarbon</a>
                <p><?php echo esc_html($atts['note']); ?></p>
            </div>
        </div>
        <?php
        endif;
        if (in_array('2', $lines)) :
        ?>
        <div class="ecograder__line">
            <div class="ecograder__divider">
                <svg width="176" height="10" viewBox="0 0 176 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="path-white" d="M0 5.00012L176 5.00014" stroke="white" stroke-width="0.5"/>
                    <path class="path-white" d="M4 0.00012207V9.50012" stroke="white" stroke-width="0.5"/>
                    <path d="M4 0.00012207V9.50012" stroke="#F08017" stroke-width="0.5"/>
                    <path d="M0 5.00012H11" stroke="#F08017" stroke-width="0.5"/>
                </svg>
            </div>
            <div class="ecograder__inner-detail">
                <p>Plus propre que <span class="ecograder__inner-detail__bold"><?php echo esc_html($atts['percent']); ?>%</span> des autres sites</p>
            </div>
        </div>
        <?php
        endif;
        if (in_array('3', $lines)) :
        ?>
        <div class="ecograder__line">
            <div class="ecograder__divider">
                <svg width="176" height="10" viewBox="0 0 176 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="path-white" d="M0 5.00012L176 5.00014" stroke="white" stroke-width="0.5"/>
                    <path class="path-white" d="M4 0.00012207V9.50012" stroke="white" stroke-width="0.5"/>
                    <path d="M4 0.00012207V9.50012" stroke="#F08017" stroke-width="0.5"/>
                    <path d="M0 5.00012H11" stroke="#F08017" stroke-width="0.5"/>
                </svg>
            </div>
            <div class="ecograder__inner-detail">
                <p>Hébergé sur un serveur
                    <span class="ecograder__inner-detail__bold">vert</span>
                    <span class="ecograder__inner-detail__svg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                        <path d="M1.85931 12.8309L2.00068 12.9699C4.53652 15.463 8.66405 15.463 11.1999 12.9699C13.7357 10.4767 13.7357 6.4186 11.1999 3.92543L11.0585 3.78644L1.85931 12.8309Z" fill="white"/>
                        <path d="M1.63342 12.9277L1.77984 13.0716C4.3952 15.643 8.65147 15.643 11.2681 13.0716C13.8835 10.5003 13.8835 6.31561 11.2681 3.74302L11.1217 3.59906L1.63342 12.9277ZM8.74488 10.88L10.8099 12.9103C10.1434 13.3273 8.70954 13.2193 7.12795 12.4685L8.74362 10.88H8.74488ZM6.74297 12.2737C6.0033 11.879 5.24469 11.3454 4.52521 10.6604L6.52334 8.69586L8.45204 10.5921L6.74171 12.2737H6.74297ZM11.1015 12.6211L9.03772 10.5921L10.6345 9.02224C10.8175 9.40571 10.9702 9.79415 11.0863 10.1826C11.3968 11.2201 11.3968 12.1384 11.1015 12.6199V12.6211ZM8.74488 10.3042L6.81618 8.40795L8.8143 6.44344C9.46562 7.10862 10.0185 7.85694 10.4401 8.63877L8.74614 10.3042H8.74488ZM4.23237 10.9483C4.93418 11.6159 5.69026 12.157 6.44256 12.569L4.6628 14.3188C3.77671 14.0508 2.93858 13.5879 2.22036 12.9264L4.23237 10.9483ZM5.12352 14.4405L6.82628 12.7663C8.01278 13.3484 9.16268 13.609 10.0387 13.542C8.57574 14.5112 6.78841 14.8103 5.12352 14.4405ZM11.7276 11.889C11.7919 11.0265 11.5243 9.88722 10.9412 8.72068L12.6578 7.03291C13.0365 8.67848 12.726 10.4457 11.7276 11.889ZM12.5341 6.57995L10.7417 8.34217C10.3239 7.59137 9.77739 6.8418 9.10714 6.15677L11.1192 4.17861C11.7919 4.8835 12.2627 5.70752 12.5354 6.57995H12.5341Z" fill="black"/>
                        <path d="M2.39074 12.2178C0.484759 10.2123 0.523888 7.05646 2.51318 5.10188C3.87387 3.76408 5.85685 3.28878 7.66059 3.80752L4.96066 5.42082L5.47565 6.25353L9.56152 3.81248L6.8212 0.00012207L6.01084 0.563537L7.60884 2.78741C5.55265 2.31583 3.35004 2.90159 1.81264 4.41313C-0.5629 6.74745 -0.603292 10.5213 1.6902 12.9078L2.392 12.2178H2.39074Z" fill="#F08017"/>
                        <path d="M1.7785 12.9996C1.78986 13.0107 1.79996 13.0232 1.81258 13.0343L1.7785 12.9996Z" fill="#F08017"/>
                    </svg>
                </span>
                </p>
            </div>
        </div>
        <?php
        endif;
        if (in_array('4', $lines)) :
        ?>
        <div class="ecograder__line">
            <div class="ecograder__divider">
                <svg width="176" height="10" viewBox="0 0 176 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path class="path-white" d="M0 5.00012L176 5.00014" stroke="white" stroke-width="0.5"/>
                    <path class="path-white" d="M4 0.00012207V9.50012" stroke="white" stroke-width="0.5"/>
                    <path d="M4 0.00012207V9.50012" stroke="#F08017" stroke-width="0.5"/>
                    <path d="M0 5.00012H11" stroke="#F08017" stroke-width="0.5"/>
                </svg>
            </div>
            <div class="ecograder__inner-detail">
                <p>Respecteux du <span class="ecograder__inner-detail__bold">RGAA</span> (accessibilité)</p>
            </div>
        </div>
        <?php endif; ?>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('m2c-labels', 'm2c_labels');

function m2c_copyright($atts) {
    $atts = shortcode_atts(
        array(
            'theme' => 'light',
        ),
        $atts,
        'm2c-copyright'
    );

    $theme_class = ($atts['theme'] === 'dark') ? 'm2c-copyright__dark' : 'm2c-copyright__light';
    ob_start();
    ?>
    <div class="m2c-copyright__container <?php echo esc_attr($theme_class); ?>">
        <p>
            <span>
                Un site fait pour
            </span>
            <span class="m2c-copyright__svg-container">
                durer,
                <svg class="m2c-copyright__svg" xmlns="http://www.w3.org/2000/svg" width="10" height="5" viewBox="0 0 10 5" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0 3.31849C0.177758 3.09344 0.410723 2.91017 0.67995 2.78359C0.949177 2.65701 1.24707 2.59069 1.54939 2.59003C1.85172 2.58936 2.14995 2.65436 2.41984 2.77975C2.68972 2.90514 2.92364 3.08737 3.10257 3.31164C2.63711 3.1519 2.13848 3.09091 1.64384 3.13321C1.61672 3.13469 1.59019 3.14112 1.56581 3.15215C1.54143 3.16317 1.51969 3.17856 1.50185 3.19741C1.48401 3.21626 1.47044 3.2382 1.46193 3.26194C1.45342 3.28568 1.45014 3.31074 1.45229 3.33566L1.45873 3.41071C1.46305 3.45959 1.48795 3.50499 1.5281 3.53723C1.56826 3.56947 1.62051 3.586 1.67372 3.58331C2.17919 3.5362 2.68904 3.61728 3.14801 3.81776C3.07872 3.88467 3.0039 3.94654 2.92424 4.00283C2.69376 4.16541 2.42622 4.2778 2.14175 4.33154C1.85728 4.38528 1.56327 4.37899 1.28182 4.31312C1.00037 4.24726 0.738811 4.12354 0.516796 3.95126C0.29478 3.77899 0.118088 3.56264 0 3.31849ZM9.98257 0.251772C9.50523 0.0563754 8.98279 -0.0274123 8.46176 0.00786262C7.94073 0.0431375 7.43725 0.196381 6.99611 0.45396C6.55497 0.71154 6.18986 1.06547 5.93325 1.48426C5.67664 1.90305 5.53649 2.37371 5.52527 2.85438C6.2408 1.9773 7.05544 1.45195 8.11485 1.03264C8.13983 1.02279 8.16669 1.01762 8.19386 1.01744C8.22103 1.01726 8.24796 1.02208 8.27309 1.0316C8.29821 1.04112 8.32101 1.05516 8.34017 1.0729C8.35932 1.09063 8.37443 1.11171 8.38462 1.13488L8.4154 1.20452C8.43546 1.25005 8.43535 1.30099 8.4151 1.34646C8.39486 1.39192 8.35608 1.42828 8.30707 1.44776C7.25377 1.86544 6.44946 2.40092 5.77493 3.30796C6.09844 3.41276 6.4382 3.46883 6.78112 3.47401C7.22947 3.48038 7.67419 3.39915 8.0859 3.23567C8.49762 3.0722 8.86696 2.8302 9.16953 2.52566C9.47211 2.22112 9.70103 1.86097 9.84118 1.469C9.98134 1.07703 10.0295 0.66215 9.98257 0.251772Z" fill="white"/>
                </svg>
            </span> par
            <a href="https://mak2com.fr" title="site de l'agence mak2com" target="_blank" rel="external norefeer">mak2com</a>
        </p>
    </div>
    <?php
    return ob_get_clean();
}
add_shortcode('m2c-copyright', 'm2c_copyright');
