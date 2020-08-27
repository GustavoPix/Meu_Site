<?php if(!class_exists('Rain\Tpl')){exit;}?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo ROUTE_WEBSITE; ?>/css/adm_style.css">
    <link rel="stylesheet" href="<?php echo ROUTE_WEBSITE; ?>/css/style2.css">
    <script src="<?php echo ROUTE_WEBSITE; ?>/js/plugins/vue.js"></script>
    <script src="<?php echo ROUTE_WEBSITE; ?>/js/plugins/axios.js"></script>
    <title>ADM Motor site</title>
</head>
<script>
    const globalConfigs = {
        host: "<?php echo ROUTE; ?>",
        hostApi: "<?php echo ROUTE_API; ?>"
    }    
    </script>
<script>
    var pages = [
        <?php $counter1=-1;  if( isset($pages) && ( is_array($pages) || $pages instanceof Traversable ) && sizeof($pages) ) foreach( $pages as $key1 => $value1 ){ $counter1++; ?>
        {
            id:"<?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?>",
            name:"<?php echo htmlspecialchars( $value1["name"], ENT_COMPAT, 'UTF-8', FALSE ); ?>",
            link:"<?php echo htmlspecialchars( $value1["link"], ENT_COMPAT, 'UTF-8', FALSE ); ?>",
            posted:"<?php echo htmlspecialchars( $value1["posted"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"
        },
        <?php } ?>
    ];
    var customSections = [
        <?php $counter1=-1;  if( isset($pageTemplate) && ( is_array($pageTemplate) || $pageTemplate instanceof Traversable ) && sizeof($pageTemplate) ) foreach( $pageTemplate as $key1 => $value1 ){ $counter1++; ?>
        {
            id:"<?php echo htmlspecialchars( $value1["id"], ENT_COMPAT, 'UTF-8', FALSE ); ?>",
            name:"<?php echo htmlspecialchars( $value1["name"], ENT_COMPAT, 'UTF-8', FALSE ); ?>",
            id_pageCategories:"<?php echo htmlspecialchars( $value1["id_pageCategories"], ENT_COMPAT, 'UTF-8', FALSE ); ?>",
            thumb:"<?php echo htmlspecialchars( $value1["thumb"], ENT_COMPAT, 'UTF-8', FALSE ); ?>"
        },
        <?php } ?>
    ];
</script>
<body>
    <div id="menuAndPage">
    <div class="menu">
        
        <div class="selected">
            <svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.585786 0.585786C0.960859 0.210714 1.46957 0 2 0H6.66667C6.84348 0 7.01305 0.0702379 7.13807 0.195262L11.8047 4.86193C11.9298 4.98695 12 5.15652 12 5.33333V12.6667C12 13.1971 11.7893 13.7058 11.4142 14.0809C11.0391 14.456 10.5304 14.6667 10 14.6667H2C1.46957 14.6667 0.960859 14.456 0.585786 14.0809C0.210714 13.7058 0 13.1971 0 12.6667V2C0 1.46957 0.210714 0.960859 0.585786 0.585786ZM2 1.33333C1.82319 1.33333 1.65362 1.40357 1.5286 1.5286C1.40357 1.65362 1.33333 1.82319 1.33333 2V12.6667C1.33333 12.8435 1.40357 13.013 1.5286 13.1381C1.65362 13.2631 1.82319 13.3333 2 13.3333H10C10.1768 13.3333 10.3464 13.2631 10.4714 13.1381C10.5964 13.013 10.6667 12.8435 10.6667 12.6667V5.60948L6.39052 1.33333H2Z" fill="white"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.66667 0C7.03486 0 7.33333 0.298477 7.33333 0.666667V4.66667H11.3333C11.7015 4.66667 12 4.96514 12 5.33333C12 5.70152 11.7015 6 11.3333 6H6.66667C6.29848 6 6 5.70152 6 5.33333V0.666667C6 0.298477 6.29848 0 6.66667 0Z" fill="white"/>
            </svg>
            <p>Páginas</p>
        </div>
        <div class="right">
            <div >
                <svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.63164 0.126389C5.8483 -0.0421296 6.1517 -0.0421296 6.36836 0.126389L11.7684 4.32639C11.9145 4.44006 12 4.61485 12 4.8V11.4C12 11.8774 11.8104 12.3352 11.4728 12.6728C11.1352 13.0104 10.6774 13.2 10.2 13.2H1.8C1.32261 13.2 0.864773 13.0104 0.527208 12.6728C0.189642 12.3352 0 11.8774 0 11.4V4.8C0 4.61485 0.0854837 4.44006 0.231636 4.32639L5.63164 0.126389ZM1.2 5.09345V11.4C1.2 11.5591 1.26321 11.7117 1.37574 11.8243C1.48826 11.9368 1.64087 12 1.8 12H10.2C10.3591 12 10.5117 11.9368 10.6243 11.8243C10.7368 11.7117 10.8 11.5591 10.8 11.4V5.09345L6 1.36012L1.2 5.09345Z" fill="#FFFAFF"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.6 6.6C3.6 6.26863 3.86863 6 4.2 6H7.8C8.13137 6 8.4 6.26863 8.4 6.6V12.6C8.4 12.9314 8.13137 13.2 7.8 13.2C7.46863 13.2 7.2 12.9314 7.2 12.6V7.2H4.8V12.6C4.8 12.9314 4.53137 13.2 4.2 13.2C3.86863 13.2 3.6 12.9314 3.6 12.6V6.6Z" fill="#FFFAFF"/>
                </svg>
                <p>Home</p>
            </div>
            <?php $countLoop = 0; ?>
            <?php $counter1=-1;  if( isset($pages) && ( is_array($pages) || $pages instanceof Traversable ) && sizeof($pages) ) foreach( $pages as $key1 => $value1 ){ $counter1++; ?>
            <div :class="{selected: selected == <?php echo htmlspecialchars( $countLoop, ENT_COMPAT, 'UTF-8', FALSE ); ?>}" @click="selectPage(<?php echo htmlspecialchars( $countLoop, ENT_COMPAT, 'UTF-8', FALSE ); ?>)">
                <svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.585786 0.585786C0.960859 0.210714 1.46957 0 2 0H6.66667C6.84348 0 7.01305 0.0702379 7.13807 0.195262L11.8047 4.86193C11.9298 4.98695 12 5.15652 12 5.33333V12.6667C12 13.1971 11.7893 13.7058 11.4142 14.0809C11.0391 14.456 10.5304 14.6667 10 14.6667H2C1.46957 14.6667 0.960859 14.456 0.585786 14.0809C0.210714 13.7058 0 13.1971 0 12.6667V2C0 1.46957 0.210714 0.960859 0.585786 0.585786ZM2 1.33333C1.82319 1.33333 1.65362 1.40357 1.5286 1.5286C1.40357 1.65362 1.33333 1.82319 1.33333 2V12.6667C1.33333 12.8435 1.40357 13.013 1.5286 13.1381C1.65362 13.2631 1.82319 13.3333 2 13.3333H10C10.1768 13.3333 10.3464 13.2631 10.4714 13.1381C10.5964 13.013 10.6667 12.8435 10.6667 12.6667V5.60948L6.39052 1.33333H2Z" fill="white"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.66667 0C7.03486 0 7.33333 0.298477 7.33333 0.666667V4.66667H11.3333C11.7015 4.66667 12 4.96514 12 5.33333C12 5.70152 11.7015 6 11.3333 6H6.66667C6.29848 6 6 5.70152 6 5.33333V0.666667C6 0.298477 6.29848 0 6.66667 0Z" fill="white"/>
                </svg>
                <p><?php echo htmlspecialchars( $value1["name"], ENT_COMPAT, 'UTF-8', FALSE ); ?></p>
            </div>
            <?php $countLoop = $countLoop + 1; ?>
            <?php } ?>
            <div @click="selectNewPage()" :class="{selected: selected == -1}">
                <svg width="12" height="15" viewBox="0 0 12 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M0.585786 0.585786C0.960859 0.210714 1.46957 0 2 0H7.33333C7.51014 0 7.67971 0.0702379 7.80474 0.195262L11.8047 4.19526C11.9298 4.32029 12 4.48986 12 4.66667V12.6667C12 13.1971 11.7893 13.7058 11.4142 14.0809C11.0391 14.456 10.5304 14.6667 10 14.6667H2C1.46957 14.6667 0.960859 14.456 0.585786 14.0809C0.210714 13.7058 0 13.1971 0 12.6667V2C0 1.46957 0.210714 0.960859 0.585786 0.585786ZM2 1.33333C1.82319 1.33333 1.65362 1.40357 1.5286 1.5286C1.40357 1.65362 1.33333 1.82319 1.33333 2V12.6667C1.33333 12.8435 1.40357 13.013 1.5286 13.1381C1.65362 13.2631 1.82319 13.3333 2 13.3333H10C10.1768 13.3333 10.3464 13.2631 10.4714 13.1381C10.5964 13.013 10.6667 12.8435 10.6667 12.6667V4.94281L7.05719 1.33333H2Z" fill="#FFFAFF"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.33334 0C7.70153 0 8.00001 0.298477 8.00001 0.666667V4H11.3333C11.7015 4 12 4.29848 12 4.66667C12 5.03486 11.7015 5.33333 11.3333 5.33333H7.33334C6.96515 5.33333 6.66667 5.03486 6.66667 4.66667V0.666667C6.66667 0.298477 6.96515 0 7.33334 0Z" fill="#FFFAFF"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.99999 6.66667C6.36818 6.66667 6.66666 6.96515 6.66666 7.33334V11.3333C6.66666 11.7015 6.36818 12 5.99999 12C5.63181 12 5.33333 11.7015 5.33333 11.3333V7.33334C5.33333 6.96515 5.63181 6.66667 5.99999 6.66667Z" fill="#FFFAFF"/>
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.33334 9.33334C3.33334 8.96515 3.63181 8.66667 4 8.66667H8C8.36819 8.66667 8.66667 8.96515 8.66667 9.33334C8.66667 9.70153 8.36819 10 8 10H4C3.63181 10 3.33334 9.70153 3.33334 9.33334Z" fill="#FFFAFF"/>
                </svg>    
                <p>Nova Página</p>
            </div>
        </div>
        <div>
            <svg width="12" height="14" viewBox="0 0 12 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.10129 0.240413C5.37461 0.0829109 5.68453 0 6 0C6.31548 0 6.62542 0.0829177 6.89875 0.240432C6.89916 0.240673 6.89958 0.240913 6.9 0.241154L11.1 2.64115C11.3734 2.79898 11.6004 3.02592 11.7584 3.2992C11.9164 3.57248 11.9997 3.8825 12 4.19815V8.99938C11.9997 9.31504 11.9164 9.62506 11.7584 9.89834C11.6004 10.1716 11.3734 10.3986 11.1 10.5564L11.0977 10.5577L6.9 12.9564C6.89964 12.9566 6.89928 12.9568 6.89892 12.957C6.62555 13.1146 6.31555 13.1975 6 13.1975C5.68446 13.1975 5.37447 13.1146 5.10111 12.957C5.10074 12.9568 5.10037 12.9566 5.1 12.9564L0.902316 10.5577L0.9 10.5564C0.626636 10.3986 0.399582 10.1716 0.241615 9.89834C0.0836486 9.62506 0.000323761 9.31504 0 8.99938V4.19815C0.000323761 3.8825 0.0836484 3.57248 0.241615 3.2992C0.399582 3.02592 0.626636 2.79898 0.9 2.64115L0.902313 2.63982L5.10129 0.240413ZM6 1.2C5.89468 1.2 5.79121 1.22772 5.7 1.28038L5.69769 1.28172L1.5 3.68038C1.49968 3.68057 1.49937 3.68075 1.49905 3.68093C1.40835 3.73352 1.33301 3.80895 1.28054 3.89973C1.22793 3.99075 1.20015 4.094 1.2 4.19913V8.99841C1.20015 9.10354 1.22793 9.20679 1.28054 9.2978C1.33301 9.38858 1.40835 9.46402 1.49905 9.51661C1.49937 9.51679 1.49968 9.51697 1.5 9.51715L5.7 11.9171C5.79121 11.9698 5.89468 11.9975 6 11.9975C6.10532 11.9975 6.20879 11.9698 6.3 11.9172L6.30232 11.9158L10.5 9.51715C10.5003 9.51697 10.5006 9.51679 10.501 9.5166C10.5916 9.46402 10.667 9.38858 10.7195 9.2978C10.7721 9.20671 10.7999 9.10337 10.8 8.99815V4.19938C10.7999 4.09417 10.7721 3.99083 10.7195 3.89973C10.667 3.80896 10.5916 3.73352 10.501 3.68093C10.5006 3.68075 10.5003 3.68057 10.5 3.68038L6.3 1.28039C6.20879 1.22773 6.10532 1.2 6 1.2Z" fill="#FFFAFF"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M0.242639 3.27434C0.408564 2.9875 0.7756 2.88948 1.06244 3.05541L6 5.91162L10.9376 3.05541C11.2244 2.88948 11.5914 2.9875 11.7574 3.27434C11.9233 3.56117 11.8253 3.92821 11.5384 4.09413L6.30044 7.12413C6.11458 7.23165 5.88543 7.23165 5.69957 7.12413L0.461569 4.09413C0.174732 3.92821 0.0767136 3.56117 0.242639 3.27434Z" fill="#FFFAFF"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M6 5.99878C6.33137 5.99878 6.6 6.26741 6.6 6.59878V12.6468C6.6 12.9782 6.33137 13.2468 6 13.2468C5.66863 13.2468 5.4 12.9782 5.4 12.6468V6.59878C5.4 6.26741 5.66863 5.99878 6 5.99878Z" fill="#FFFAFF"/>
            </svg>    
            <p>Produtos</p>
        </div>
        <div>
            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.70476 0.944242C3.56714 0.826127 3.39106 0.761887 3.20931 0.763673L3.20556 0.763691H1.51086C1.40695 0.763813 1.30422 0.785516 1.20922 0.827397C1.11416 0.869301 1.02894 0.930474 0.958967 1.00698C0.888993 1.08348 0.835788 1.17364 0.802695 1.2717C0.769893 1.3689 0.757555 1.47178 0.766426 1.57391C0.945906 3.25581 1.51958 4.87199 2.4411 6.29167L2.44291 6.29449C3.28018 7.60951 4.39734 8.72447 5.71509 9.56017L5.71806 9.56207C7.13411 10.4786 8.74573 11.0511 10.4236 11.2336C10.5264 11.2425 10.63 11.23 10.7278 11.197C10.8266 11.1636 10.9172 11.1101 10.9939 11.0399C11.0707 10.9696 11.1318 10.8842 11.1735 10.789C11.2151 10.6939 11.2364 10.5912 11.236 10.4875L11.236 10.4859V8.7944C11.236 8.79123 11.2361 8.78807 11.2361 8.78491C11.2407 8.60223 11.1778 8.42415 11.0593 8.28454C10.9411 8.1453 10.7757 8.054 10.5944 8.0281C10.0241 7.95289 9.46422 7.81362 8.9253 7.61292L8.92444 7.6126C8.79046 7.56233 8.64482 7.55145 8.50479 7.58125C8.36507 7.61099 8.23688 7.67998 8.13533 7.77997C8.13512 7.78018 8.13491 7.78039 8.13469 7.78059L7.41871 8.49517C7.29723 8.6164 7.1098 8.64169 6.96054 8.55699C5.48643 7.72044 4.26578 6.50226 3.42747 5.03088C3.34225 4.88131 3.36766 4.69321 3.4895 4.57161L4.2055 3.85704C4.20572 3.85682 4.20593 3.8566 4.20615 3.85638C4.30631 3.75504 4.37526 3.62731 4.40497 3.48829C4.43474 3.34896 4.42388 3.20404 4.37364 3.07066L4.37332 3.06979C4.17218 2.53184 4.03259 1.97292 3.95721 1.40366C3.93156 1.22526 3.84195 1.062 3.70476 0.944242ZM3.20382 5.46846e-05C3.56972 -0.00305395 3.92446 0.126467 4.20211 0.364776C4.48029 0.603538 4.66213 0.935243 4.71353 1.29814L4.71401 1.30166C4.78175 1.81426 4.90737 2.31757 5.08846 2.80201C5.19008 3.07211 5.21205 3.36565 5.15175 3.64787C5.0914 3.93025 4.95123 4.18936 4.74795 4.39452L4.74644 4.39604L4.23888 4.90259C4.95133 6.06077 5.92764 7.03502 7.08839 7.74596L7.59677 7.23858L7.59829 7.23708C7.80385 7.03421 8.06328 6.89448 8.34582 6.83434C8.62818 6.77424 8.92189 6.79613 9.1922 6.89744C9.67771 7.07822 10.1822 7.20362 10.6959 7.27124L10.6993 7.27171C11.0663 7.32337 11.4016 7.50787 11.6414 7.79032C11.8801 8.0715 12.0076 8.4302 11.9997 8.79878V10.4853C12.0004 10.6953 11.9572 10.9031 11.8729 11.0955C11.7885 11.2881 11.6648 11.461 11.5096 11.6031C11.3545 11.7451 11.1714 11.8532 10.972 11.9205C10.7727 11.9878 10.5615 12.0128 10.3519 11.9939C10.3496 11.9937 10.3473 11.9934 10.3451 11.9932C8.54791 11.7983 6.82156 11.1856 5.30463 10.2041C3.89341 9.30883 2.69678 8.11459 1.79966 6.70604C0.812714 5.18508 0.198473 3.45348 0.00672894 1.65145C0.00651743 1.64946 0.00632155 1.64747 0.00614131 1.64548C-0.0127669 1.43666 0.012102 1.2262 0.0791502 1.02753C0.146198 0.82885 0.253944 0.646337 0.395486 0.491588C0.537025 0.336842 0.709255 0.213252 0.901183 0.128644C1.09311 0.0440363 1.30055 0.000251991 1.51032 5.48406e-05L3.20382 5.46846e-05Z" fill="#FFFAFF"/>
            </svg>
            <p>Contatos</p>
        </div>
        <div>
            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M6 4.36329C5.09626 4.36329 4.36364 5.09592 4.36364 5.99966C4.36364 6.90339 5.09626 7.63602 6 7.63602C6.90374 7.63602 7.63636 6.90339 7.63636 5.99966C7.63636 5.09592 6.90374 4.36329 6 4.36329ZM3.27273 5.99966C3.27273 4.49343 4.49377 3.27238 6 3.27238C7.50623 3.27238 8.72727 4.49343 8.72727 5.99966C8.72727 7.50589 7.50623 8.72693 6 8.72693C4.49377 8.72693 3.27273 7.50589 3.27273 5.99966Z" fill="white"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.43641 0.575248C4.66076 -0.00334733 6.04484 -0.15075 7.36358 0.157006C8.68233 0.464762 9.85819 1.20958 10.7 2.27035C11.5417 3.33111 11.9999 4.64544 12 5.99962V6.54511C12 7.12377 11.7701 7.67872 11.361 8.08789C10.9518 8.49706 10.3968 8.72693 9.81818 8.72693C9.23953 8.72693 8.68458 8.49706 8.2754 8.08789C7.86623 7.67872 7.63637 7.12377 7.63637 6.54511V3.81784C7.63637 3.5166 7.88057 3.27239 8.18182 3.27239C8.48307 3.27239 8.72727 3.5166 8.72727 3.81784V6.54511C8.72727 6.83444 8.84221 7.11192 9.04679 7.3165C9.25138 7.52109 9.52886 7.63602 9.81818 7.63602C10.1075 7.63602 10.385 7.52109 10.5896 7.3165C10.7942 7.11192 10.9091 6.83444 10.9091 6.54511V5.99969C10.9091 5.99968 10.9091 5.9997 10.9091 5.99969C10.909 4.89174 10.5341 3.81636 9.84543 2.94846C9.1567 2.08056 8.19464 1.47117 7.11566 1.21937C6.03669 0.967568 4.90426 1.08817 3.90252 1.56157C2.90078 2.03496 2.08864 2.83331 1.59815 3.82679C1.10766 4.82028 0.96768 5.95047 1.20096 7.0336C1.43424 8.11673 2.02707 9.0891 2.88304 9.79258C3.73902 10.4961 4.8078 10.8893 5.9156 10.9084C7.0234 10.9274 8.10507 10.5712 8.98473 9.89751C9.2239 9.71435 9.56626 9.75976 9.74942 9.99893C9.93258 10.2381 9.88717 10.5805 9.648 10.7636C8.57287 11.587 7.25082 12.0224 5.89684 11.9991C4.54286 11.9758 3.23657 11.4952 2.19038 10.6354C1.14419 9.77556 0.419627 8.58712 0.134506 7.26329C-0.150615 5.93947 0.0204763 4.55812 0.61996 3.34386C1.21944 2.1296 2.21206 1.15384 3.43641 0.575248Z" fill="white"/>
            </svg>
            <p>Sociais</p>
        </div>
        <div>
            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M6 5C5.44772 5 5 5.44772 5 6C5 6.55228 5.44772 7 6 7C6.55228 7 7 6.55228 7 6C7 5.44772 6.55228 5 6 5ZM4 6C4 4.89543 4.89543 4 6 4C7.10457 4 8 4.89543 8 6C8 7.10457 7.10457 8 6 8C4.89543 8 4 7.10457 4 6Z" fill="white"/>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M6 1C5.86739 1 5.74022 1.05268 5.64645 1.14645C5.55268 1.24022 5.5 1.36739 5.5 1.5V1.58699C5.49897 1.8454 5.4224 2.09786 5.27972 2.31331C5.13704 2.52875 4.93448 2.69778 4.69697 2.79957C4.65469 2.81769 4.61021 2.82985 4.56481 2.83578C4.34899 2.91136 4.11666 2.92999 3.8905 2.88898C3.63 2.84175 3.38963 2.71756 3.20037 2.53243L3.19642 2.52857L3.16645 2.49855C3.12001 2.45206 3.06467 2.41499 3.00397 2.38983C2.94327 2.36466 2.87821 2.35171 2.8125 2.35171C2.74679 2.35171 2.68173 2.36466 2.62103 2.38983C2.56033 2.41499 2.50519 2.45187 2.45875 2.49836L2.45836 2.49875C2.41187 2.54519 2.37499 2.60033 2.34983 2.66103C2.32466 2.72173 2.31171 2.78679 2.31171 2.8525C2.31171 2.91821 2.32466 2.98327 2.34983 3.04397C2.37499 3.10467 2.41187 3.15981 2.45836 3.20625L2.49245 3.24035C2.67758 3.4296 2.80175 3.67 2.84898 3.9305C2.89527 4.18581 2.86556 4.44898 2.76373 4.68739C2.67094 4.93066 2.50849 5.14134 2.29652 5.29294C2.08027 5.44761 1.82249 5.53365 1.55669 5.53986L1.545 5.54H1.5C1.36739 5.54 1.24022 5.59268 1.14645 5.68645C1.05268 5.78022 1 5.90739 1 6.04C1 6.17261 1.05268 6.29978 1.14645 6.39355C1.24022 6.48732 1.36739 6.54 1.5 6.54H1.58699C1.8454 6.54103 2.09786 6.6176 2.31331 6.76028C2.528 6.90246 2.6966 7.10412 2.79851 7.34056C2.90454 7.58213 2.93605 7.84988 2.88898 8.1095C2.84175 8.37 2.71756 8.61037 2.53243 8.79963L2.52857 8.80358L2.49855 8.83355C2.45206 8.87999 2.41499 8.93533 2.38983 8.99603C2.36466 9.05673 2.35171 9.12179 2.35171 9.1875C2.35171 9.25321 2.36466 9.31827 2.38983 9.37897C2.41499 9.43967 2.45187 9.49481 2.49836 9.54125L2.49875 9.54164C2.54519 9.58813 2.60033 9.62501 2.66103 9.65017C2.72173 9.67534 2.78679 9.68829 2.8525 9.68829C2.91821 9.68829 2.98327 9.67534 3.04397 9.65017C3.10467 9.62501 3.15981 9.58813 3.20625 9.54164L3.24035 9.50755C3.4296 9.32242 3.67 9.19825 3.9305 9.15102C4.18581 9.10473 4.44898 9.13443 4.68738 9.23627C4.93066 9.32905 5.14133 9.49151 5.29294 9.70348C5.44761 9.91973 5.53365 10.1775 5.53986 10.4433L5.54 10.455V10.5C5.54 10.6326 5.59268 10.7598 5.68645 10.8536C5.78022 10.9473 5.90739 11 6.04 11C6.17261 11 6.29978 10.9473 6.39355 10.8536C6.48732 10.7598 6.54 10.6326 6.54 10.5V10.415L6.54 10.413C6.54103 10.1546 6.6176 9.90214 6.76028 9.68669C6.90248 9.47198 7.10415 9.30337 7.34062 9.20147C7.58217 9.09545 7.8499 9.06395 8.1095 9.11102C8.37 9.15825 8.61037 9.28244 8.79963 9.46757L8.80357 9.47143L8.83355 9.50145C8.87999 9.54793 8.93533 9.58501 8.99603 9.61017C9.05673 9.63534 9.12179 9.64829 9.1875 9.64829C9.25321 9.64829 9.31827 9.63534 9.37897 9.61017C9.43967 9.58501 9.49481 9.54813 9.54125 9.50164L9.54164 9.50125C9.58813 9.45481 9.62501 9.39967 9.65017 9.33897C9.67534 9.27827 9.68829 9.21321 9.68829 9.1475C9.68829 9.08179 9.67534 9.01673 9.65017 8.95603C9.62501 8.89533 9.58813 8.84018 9.54164 8.79375L9.50755 8.75965C9.32242 8.5704 9.19825 8.33 9.15102 8.0695C9.10395 7.8099 9.13545 7.54217 9.24147 7.30062C9.34337 7.06415 9.51198 6.86248 9.72669 6.72028C9.94214 6.5776 10.1946 6.50103 10.453 6.5L10.455 6.5L10.5 6.5C10.6326 6.5 10.7598 6.44732 10.8536 6.35355C10.9473 6.25978 11 6.13261 11 6C11 5.86739 10.9473 5.74022 10.8536 5.64645C10.7598 5.55268 10.6326 5.5 10.5 5.5H10.415L10.413 5.5C10.1546 5.49897 9.90214 5.4224 9.68669 5.27972C9.47125 5.13704 9.30223 4.93448 9.20043 4.69697C9.18231 4.65469 9.17015 4.61021 9.16422 4.5648C9.08864 4.34899 9.07001 4.11666 9.11102 3.8905C9.15825 3.63 9.28244 3.38963 9.46757 3.20037L9.47142 3.19643L9.50144 3.16645C9.54793 3.12001 9.58501 3.06467 9.61017 3.00397C9.63534 2.94327 9.64829 2.87821 9.64829 2.8125C9.64829 2.74679 9.63534 2.68173 9.61017 2.62103C9.58501 2.56033 9.54813 2.50519 9.50164 2.45875L9.50125 2.45836C9.45481 2.41187 9.39967 2.37499 9.33897 2.34983C9.27827 2.32466 9.21321 2.31171 9.1475 2.31171C9.08179 2.31171 9.01673 2.32466 8.95603 2.34983C8.89533 2.37499 8.84019 2.41187 8.79375 2.45836L8.75965 2.49245C8.5704 2.67758 8.33 2.80175 8.0695 2.84898C7.80988 2.89605 7.54213 2.86454 7.30056 2.75851C7.06412 2.6566 6.86246 2.488 6.72028 2.27331C6.5776 2.05786 6.50103 1.8054 6.5 1.54699L6.5 1.545V1.5C6.5 1.36739 6.44732 1.24022 6.35355 1.14645C6.25978 1.05268 6.13261 1 6 1ZM9.7 7.5L10.1574 7.70188C10.1312 7.76129 10.1234 7.82719 10.135 7.89109C10.1464 7.95428 10.1764 8.01265 10.2209 8.05883L10.2484 8.08625C10.2484 8.08631 10.2483 8.08619 10.2484 8.08625C10.3877 8.22552 10.4985 8.39108 10.5739 8.57309C10.6494 8.75519 10.6883 8.95038 10.6883 9.1475C10.6883 9.34462 10.6494 9.53981 10.5739 9.72191C10.4985 9.90401 10.3878 10.0694 10.2484 10.2087L9.895 9.855L10.2488 10.2084C10.1094 10.3478 9.94401 10.4585 9.76191 10.5339C9.57981 10.6094 9.38462 10.6483 9.1875 10.6483C8.99038 10.6483 8.79519 10.6094 8.61309 10.5339C8.43108 10.4585 8.26571 10.3479 8.12645 10.2086C8.12638 10.2085 8.12651 10.2086 8.12645 10.2086L8.09883 10.1809C8.05265 10.1364 7.99428 10.1064 7.93109 10.095C7.86719 10.0834 7.80129 10.0912 7.74188 10.1174L7.73698 10.1196C7.67872 10.1446 7.62902 10.186 7.59403 10.2388C7.55917 10.2915 7.5404 10.3531 7.54 10.4163V10.5C7.54 10.8978 7.38196 11.2794 7.10066 11.5607C6.81936 11.842 6.43783 12 6.04 12C5.64217 12 5.26064 11.842 4.97934 11.5607C4.69804 11.2794 4.54 10.8978 4.54 10.5V10.4622C4.53763 10.3986 4.51663 10.337 4.47957 10.2852C4.44163 10.2322 4.38861 10.1918 4.32741 10.1693C4.31752 10.1656 4.30775 10.1617 4.29812 10.1574C4.23871 10.1312 4.17281 10.1234 4.10891 10.135C4.04571 10.1464 3.98733 10.1764 3.94115 10.221L3.91375 10.2484C3.91369 10.2484 3.91381 10.2483 3.91375 10.2484C3.77448 10.3877 3.60892 10.4985 3.42691 10.5739C3.24481 10.6494 3.04962 10.6883 2.8525 10.6883C2.65538 10.6883 2.46019 10.6494 2.27809 10.5739C2.09617 10.4985 1.93087 10.388 1.79164 10.2488C1.65218 10.1094 1.54154 9.94401 1.46605 9.76191C1.39057 9.57981 1.35171 9.38462 1.35171 9.1875C1.35171 8.99038 1.39057 8.79519 1.46605 8.61309C1.54154 8.43099 1.65218 8.26556 1.79164 8.12625L1.81906 8.09884C1.86364 8.05265 1.89357 7.99429 1.90502 7.93109C1.91661 7.86719 1.90879 7.80129 1.88257 7.74188L1.8804 7.73698C1.85544 7.67872 1.814 7.62902 1.76116 7.59403C1.70852 7.55917 1.64687 7.5404 1.58375 7.54H1.5C1.10217 7.54 0.720644 7.38196 0.43934 7.10066C0.158035 6.81936 0 6.43782 0 6.04C0 5.64218 0.158035 5.26064 0.43934 4.97934C0.720644 4.69804 1.10217 4.54 1.5 4.54H1.53782C1.60142 4.53763 1.66296 4.51663 1.71478 4.47957C1.76782 4.44163 1.80822 4.38862 1.83073 4.32741C1.83437 4.31752 1.83832 4.30775 1.84257 4.29812C1.86879 4.23871 1.87661 4.17281 1.86502 4.10891C1.85356 4.04571 1.82364 3.98734 1.77905 3.94116L1.75164 3.91375C1.61218 3.77444 1.50154 3.60901 1.42605 3.42691C1.35057 3.24481 1.31171 3.04962 1.31171 2.8525C1.31171 2.65538 1.35057 2.46019 1.42605 2.27809C1.5015 2.09608 1.61207 1.93072 1.75145 1.79145C1.89072 1.65207 2.05608 1.5415 2.23809 1.46605C2.42019 1.39057 2.61538 1.35171 2.8125 1.35171C3.00962 1.35171 3.20481 1.39057 3.38691 1.46605C3.56901 1.54154 3.73444 1.65218 3.87375 1.79164L3.90115 1.81905C3.94734 1.86364 4.00571 1.89356 4.06891 1.90502C4.13281 1.91661 4.19871 1.90879 4.25812 1.88257C4.29014 1.86844 4.32346 1.85775 4.35754 1.85061C4.3924 1.82695 4.42249 1.79662 4.44597 1.76116C4.48083 1.70852 4.4996 1.64687 4.5 1.58375V1.5C4.5 1.10217 4.65804 0.720644 4.93934 0.43934C5.22064 0.158035 5.60218 0 6 0C6.39782 0 6.77936 0.158035 7.06066 0.43934C7.34196 0.720644 7.5 1.10217 7.5 1.5V1.54375C7.5004 1.60687 7.51917 1.66852 7.55403 1.72116C7.58902 1.774 7.63871 1.81546 7.69697 1.84043L7.70189 1.84254C7.7613 1.86876 7.82719 1.87661 7.89109 1.86502C7.95429 1.85357 8.01265 1.82364 8.05884 1.77906L8.08625 1.75164C8.22556 1.61218 8.39099 1.50154 8.57309 1.42605C8.75519 1.35057 8.95038 1.31171 9.1475 1.31171C9.34462 1.31171 9.53981 1.35057 9.72191 1.42605C9.90401 1.50154 10.0694 1.61218 10.2087 1.75164C10.348 1.89087 10.4585 2.05616 10.5339 2.23809C10.6094 2.42019 10.6483 2.61538 10.6483 2.8125C10.6483 3.00962 10.6094 3.20481 10.5339 3.38691C10.4585 3.56892 10.3479 3.73428 10.2086 3.87355C10.2085 3.87362 10.2086 3.87349 10.2086 3.87355L10.181 3.90115C10.1364 3.94734 10.1064 4.00571 10.095 4.06891C10.0834 4.13281 10.0912 4.19871 10.1174 4.25812C10.1316 4.29014 10.1423 4.32346 10.1494 4.35753C10.1731 4.3924 10.2034 4.42249 10.2388 4.44597C10.2915 4.48083 10.3531 4.4996 10.4163 4.5H10.5C10.8978 4.5 11.2794 4.65804 11.5607 4.93934C11.842 5.22064 12 5.60217 12 6C12 6.39783 11.842 6.77936 11.5607 7.06066C11.2794 7.34196 10.8978 7.5 10.5 7.5H10.4563C10.3931 7.5004 10.3315 7.51917 10.2788 7.55403C10.226 7.58902 10.1845 7.63871 10.1596 7.69697L9.7 7.5Z" fill="white"/>
            </svg>
            <p>Configurações</p>
        </div>
        
    </div>