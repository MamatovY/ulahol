<div class="top">
    <div class="top__container container">
        <div class="top__lang">
            <?php
            if ($lang_value=='on')
            {
                foreach($lang as $key=>$value) 
                {
                ?>
                <a href="<?php echo $domain; echo '/language.php?lang='; echo $key; ?>" class='fic active'>
                    <span>
                        <?php echo $value; ?>
                    </span>
                    <svg width="18.000000" height="18.000000" viewBox="0 0 18 18" fill="none" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                        <defs>
                            <clipPath id="clip2_381">
                                <rect id="SVG" width="18.000000" height="18.000000" transform="translate(-0.520020 -0.750000)" fill="white" fill-opacity="0" />
                            </clipPath>
                        </defs>
                        <g clip-path="url(#clip2_381)">
                            <path id="Vector" d="M8.47 0.75C4.33 0.75 0.97 4.11 0.97 8.25C0.97 12.38 4.33 15.75 8.47 15.75C12.62 15.75 15.98 12.38 15.98 8.25C15.98 4.11 12.62 0.75 8.47 0.75ZM13.66 5.25L11.45 5.25C11.21 4.31 10.87 3.41 10.42 2.58C11.8 3.05 12.95 4.01 13.66 5.25ZM8.47 2.28C9.1 3.17 9.58 4.17 9.91 5.25L7.04 5.25C7.37 4.17 7.85 3.17 8.47 2.28ZM2.67 9.75C2.55 9.27 2.47 8.76 2.47 8.25C2.47 7.73 2.55 7.22 2.67 6.75L5.2 6.75C5.14 7.24 5.1 7.73 5.1 8.25C5.1 8.76 5.14 9.25 5.2 9.75L2.67 9.75ZM3.29 11.25L5.5 11.25C5.74 12.18 6.08 13.08 6.53 13.91C5.15 13.44 4 12.49 3.29 11.25ZM5.5 5.25L3.29 5.25C4 4 5.15 3.05 6.53 2.58C6.08 3.41 5.74 4.31 5.5 5.25ZM8.47 14.22C7.85 13.32 7.37 12.32 7.04 11.25L9.91 11.25C9.58 12.32 9.1 13.32 8.47 14.22ZM10.23 9.75L6.72 9.75C6.65 9.25 6.6 8.76 6.6 8.25C6.6 7.73 6.65 7.23 6.72 6.75L10.23 6.75C10.3 7.23 10.35 7.73 10.35 8.25C10.35 8.76 10.3 9.25 10.23 9.75ZM10.42 13.91C10.87 13.08 11.21 12.18 11.45 11.25L13.66 11.25C12.95 12.48 11.8 13.44 10.42 13.91ZM11.75 9.75C11.81 9.25 11.85 8.76 11.85 8.25C11.85 7.73 11.81 7.24 11.75 6.75L14.28 6.75C14.4 7.22 14.48 7.73 14.48 8.25C14.48 8.76 14.4 9.27 14.28 9.75L11.75 9.75Z"
                                                                                                                                                                                                                                    fill="#FFFFFF" fill-opacity="1.000000" fill-rule="nonzero" />
                        </g>
                    </svg>
                </a>
                <?php
            }
            }
            ?>
        </div>
        <div class="top__right">
            <a href='#' class="bvi-open top__visually fic">
                <span>
                    <?=$til['version_v_i']?><!--Версия для слабовидящих-->
                </span>
                <svg width="32.000000" height="20.000000" viewBox="0 0 32 20" fill="none" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                    <defs>
                        <pattern id="pattern_2_830" patternContentUnits="objectBoundingBox" width="1.000000" height="1.000000">
                            <use xlink:href="#image2_83_0" transform="matrix(0.03125,0,0,0.05,0.046875,0)" />
                        </pattern>
                        <image id="image2_83_0" width="29.000000" height="20.000000"
                                                                                                                                                                                                                                xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB0AAAAUCAYAAABxnDbHAAAABHNCSVQICAgIfAhkiAAAAmNJREFUSInd1UuolWUUBuD3PwkWqKeL5rGLNc+IjEwsNcqChM6kBlKYhDgrD3RRaGaDECR0ljnzEhQ4UyJwoGioQTVokNJFSQUJEZRSDLWnwV67s/nZZ3fQgdCCH37edXnX+r611pfcAmkmY4SHk4wmWZLkkSRzksxIcq6+k0kOJdndNM2Jm8oIi/AlrhuX3/E99uEoTvTo/sZePHMjZHdjVwWBI1iDB/EQVmId3sADZf9aJdL12YXZkyV8Aqd7yBYVfid24idswlv4CD9iO6aX3ZM4VP5nsPC/CJ/H5cp2A4YKH8Z3eB9TWj5T8EEd+bTChvAOruISXpqIcF4ZXMLLLd02rKv/hTiIgy2bD/FJC3sBf1TMx9uE03C8Khxt6Wbj56poAY5hKZqW3VT8hlkt/Dn8hV9xV6/i47qDDX1OYEW3AuzBsr5H1dFvxat98PUVf2uSDBW+OsmVJBv7xLonyen6vyPJgYlIk5xK0q9jtyS5mGRFL+mOJLcnebePw/l0lkGaplnWNM21AaQjZd+W95IMJ/niX6Tu9Bdcm+BOT2LqALJuxx7HvS18tOKexcy206O4gCvtFsen3e4dQDqGbS3sxZ6JeGoix6X4szJb3+1QTK85HevObqvCMXyLGYU1eLvm9DKWD0o4mF+tD/uxoPBhnY10DJtr+DfrbKTPMFx2j9UcqyN9eiBhD/Es7DAuX2Mt7sd9eF1nO63CXIzgTRzo8fkcI5MibJEvxlfGlzicwmGd5f5NVdOV7iuzeFDcyb6nc5O8kuTZJPPTGaHbklxNcjbJD0n2Jdl70+/p/0r+ATnzDyT+n72PAAAAAElFTkSuQmCC" />
                    </defs>
                    <rect id="Link" width="32.000000" height="20.000000" fill="url(#pattern_2_830)" fill-opacity="1.000000" />
                </svg>

            </a>

            <button type='button' class="burger">
                <svg class='burger__menu' stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path fill="none" d="M0 0h24v24H0z"></path>
                    <path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z"></path>
                </svg>
                <svg class='burger__cross' stroke="currentColor" fill="none" stroke-width="0" viewBox="0 0 15 15" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.7816 4.03157C12.0062 3.80702 12.0062 3.44295 11.7816 3.2184C11.5571 2.99385 11.193 2.99385 10.9685 3.2184L7.50005 6.68682L4.03164 3.2184C3.80708 2.99385 3.44301 2.99385 3.21846 3.2184C2.99391 3.44295 2.99391 3.80702 3.21846 4.03157L6.68688 7.49999L3.21846 10.9684C2.99391 11.193 2.99391 11.557 3.21846 11.7816C3.44301 12.0061 3.80708 12.0061 4.03164 11.7816L7.50005 8.31316L10.9685 11.7816C11.193 12.0061 11.5571 12.0061 11.7816 11.7816C12.0062 11.557 12.0062 11.193 11.7816 10.9684L8.31322 7.49999L11.7816 4.03157Z"
                                                                                                                                                                                                                            fill="currentColor"></path>
                </svg>
            </button>
        </div>
    </div>
</div>
<header class="header container">
    <a href='<?=$domain_url?>/' class="header__logo logo">
        <img src="<?=$domain."/view/themes/".$contacts[5]['d_title']?>/assets/img/gerb-icon.png" alt="logo">
        <span>
            <?php echo $title_site; ?>
        </span>
    </a>
    <div class="header__right">
        <div class="header__contact">
            <div class='fic'>
                <svg width="17.000000" height="14.000000" viewBox="0 0 17 14" fill="none" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                    <defs />
                    <path id="Vector" d="M14.75 3.16L8.09 7.33L1.42 3.16L1.42 1.5L8.09 5.66L14.75 1.5L14.75 3.16ZM14.75 -0.17L1.42 -0.17C0.49 -0.17 -0.25 0.57 -0.25 1.5L-0.25 11.5C-0.25 11.94 -0.07 12.36 0.24 12.67C0.55 12.99 0.98 13.16 1.42 13.16L14.75 13.16C15.19 13.16 15.62 12.99 15.93 12.67C16.24 12.36 16.42 11.94 16.42 11.5L16.42 1.5C16.42 0.57 15.67 -0.17 14.75 -0.17Z" fill="#000000"
                                                                                                                                                                                                                            fill-opacity="1.000000" fill-rule="nonzero" />
                </svg>
                <span>
                    <!--Электронная почта--><?php echo $til['email']; ?>
                </span>
            </div>
            <div>
                <?php echo $contacts[0][3]; ?>
            </div>
        </div>
        <div class="header__contact">
            <div class='fic'>
                <svg width="15.000000" height="15.000000" viewBox="0 0 15 15" fill="none" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                    <defs />
                    <path id="Vector" d="M2.2 6.49C3.4 8.85 5.33 10.78 7.69 11.98L9.53 10.14C9.76 9.91 10.08 9.85 10.38 9.94C11.31 10.25 12.31 10.41 13.35 10.41C13.57 10.41 13.78 10.5 13.94 10.66C14.1 10.81 14.18 11.02 14.18 11.25L14.18 14.16C14.18 14.38 14.1 14.59 13.94 14.75C13.78 14.91 13.57 15 13.35 15C9.59 15 5.99 13.5 3.33 10.85C0.68 8.19 -0.82 4.59 -0.82 0.83C-0.82 0.61 -0.73 0.4 -0.57 0.24C-0.41 0.08 -0.2 0 0.02 0L2.93 0C3.16 0 3.37 0.08 3.52 0.24C3.68 0.4 3.77 0.61 3.77 0.83C3.77 1.87 3.93 2.87 4.24 3.8C4.33 4.1 4.27 4.42 4.04 4.65L2.2 6.49Z"
                                                                                                                                                                                                                            fill="#000000" fill-opacity="1.000000" fill-rule="nonzero" />
                </svg>
                <span>
                    <!--Телефон--><?php echo $til['telephone']; ?>
                </span>
            </div>
            <div>
                <?php echo $contacts[2][3]; ?>
            </div>
        </div>

        <form class="header__search">
            <input type="text" placeholder='<?php echo $til['search_search']; ?>' class="header__input">
            <button type="submit" class="header__submit">
                <svg width="15.000000" height="15.000000" viewBox="0 0 15 15" fill="none" xmlns="https://www.w3.org/2000/svg" xmlns:xlink="https://www.w3.org/1999/xlink">
                    <defs />
                    <path id="Vector" d="M4.91 -0.5C6.35 -0.5 7.73 0.07 8.74 1.08C9.76 2.1 10.33 3.47 10.33 4.91C10.33 6.25 9.84 7.49 9.03 8.44L9.25 8.66L9.91 8.66L14.08 12.83L12.83 14.08L8.66 9.91L8.66 9.25L8.44 9.03C7.49 9.84 6.25 10.33 4.91 10.33C3.47 10.33 2.1 9.76 1.08 8.74C0.07 7.73 -0.5 6.35 -0.5 4.91C-0.5 3.47 0.07 2.1 1.08 1.08C2.1 0.07 3.47 -0.5 4.91 -0.5ZM4.91 1.16C2.83 1.16 1.16 2.83 1.16 4.91C1.16 7 2.83 8.66 4.91 8.66C7 8.66 8.66 7 8.66 4.91C8.66 2.83 7 1.16 4.91 1.16Z"
                                                                                                                                                                                                                            fill="#7F7F7F" fill-opacity="1.000000" fill-rule="nonzero" />
                </svg>
            </button>
        </form>
    </div>
</header>

<nav class='nav'>
    <div class="container">
        <div class="nav__logo logo">
        <img src="<?=$domain."/view/themes/".$contacts[5]['d_title']?>/assets/img/gerb-icon.png" alt="logo">
        <span>
            <?php echo $title_site; ?>
        </span>
        </div>
    <ul class="nav__ul">
        <li class="nav__item">
            <a class='nav__link' href="<?php echo $domain_url; ?>/">
                <?php echo $til['glavn']; ?><!--Главная-->
            </a>
        </li>
        <li class="nav__item dropdown">
            <div class='dropdown-title f'>
                <?php echo $til_t['pages']; ?>
                <svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <g clip-path="url(#clip0_252_2025)">
                        <path d="M12.0002 17.17C11.3431 17.1712 10.6923 17.0428 10.0849 16.7923C9.47746 16.5418 8.92538 16.174 8.46019 15.71L0.290185 7.53999C0.101882 7.35169 -0.00390625 7.09629 -0.00390625 6.82999C-0.00390625 6.56369 0.101882 6.30829 0.290185 6.11999C0.478489 5.93169 0.733884 5.8259 1.00019 5.8259C1.26649 5.8259 1.52188 5.93169 1.71019 6.11999L9.88019 14.29C10.4427 14.8518 11.2052 15.1673 12.0002 15.1673C12.7952 15.1673 13.5577 14.8518 14.1202 14.29L22.2902 6.11999C22.4785 5.93169 22.7339 5.8259 23.0002 5.8259C23.2665 5.8259 23.5219 5.93169 23.7102 6.11999C23.8985 6.30829 24.0043 6.56369 24.0043 6.82999C24.0043 7.09629 23.8985 7.35169 23.7102 7.53999L15.5402 15.71C15.075 16.174 14.5229 16.5418 13.9155 16.7923C13.3081 17.0428 12.6572 17.1712 12.0002 17.17Z"
                                                                                                                                                                                                                                fill="#BDBABA" />
                    </g>
                    <defs>
                        <clipPath id="clip0_252_2025">
                            <rect width="24" height="24" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </div>
            <ul>
                <?php
                for ($i=0;$i<$obj95->i;$i++)
                {
                ?>
                <li class='dropdown__item'><a href="<?php echo $domain_url; echo '/'; echo $row95[$i]["n_url"]; ?>/"><?php echo $row95[$i]["n_tema".$_lang]; ?></a></li>
                <?php
                }
                ?>
            </ul>
        </li>
        <li class="nav__item">
            <a class='nav__link' href="<?php echo $domain_url; ?>/sotru/">
                <!--Сотрудники--><?php echo $til['sotrudniki']; ?>
            </a>
        </li>
        <li class="nav__item dropdown">
            <div class='dropdown-title f'>
                <!--Документы--><?php echo $til['documents']; ?>
                <svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <g clip-path="url(#clip0_252_2025)">
                        <path d="M12.0002 17.17C11.3431 17.1712 10.6923 17.0428 10.0849 16.7923C9.47746 16.5418 8.92538 16.174 8.46019 15.71L0.290185 7.53999C0.101882 7.35169 -0.00390625 7.09629 -0.00390625 6.82999C-0.00390625 6.56369 0.101882 6.30829 0.290185 6.11999C0.478489 5.93169 0.733884 5.8259 1.00019 5.8259C1.26649 5.8259 1.52188 5.93169 1.71019 6.11999L9.88019 14.29C10.4427 14.8518 11.2052 15.1673 12.0002 15.1673C12.7952 15.1673 13.5577 14.8518 14.1202 14.29L22.2902 6.11999C22.4785 5.93169 22.7339 5.8259 23.0002 5.8259C23.2665 5.8259 23.5219 5.93169 23.7102 6.11999C23.8985 6.30829 24.0043 6.56369 24.0043 6.82999C24.0043 7.09629 23.8985 7.35169 23.7102 7.53999L15.5402 15.71C15.075 16.174 14.5229 16.5418 13.9155 16.7923C13.3081 17.0428 12.6572 17.1712 12.0002 17.17Z"
                                                                                                                                                                                                                                fill="#BDBABA" />
                    </g>
                    <defs>
                        <clipPath id="clip0_252_2025">
                            <rect width="24" height="24" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </div>
            <ul>
            <?php
            if ($contacts[8]['d_tema']=='on')                
            {
                for ($i=0;$i<$obj100->i;$i++)
                {
                ?>
                <li class='dropdown__item'>
                    <a href="<?php echo $domain_url; echo '/documents/?id='; echo $row100[$i]['d3_id'] ?>">
                    <?php echo $row100[$i]["d3_title".$_lang] ?>
                    </a>
                </li>
                <?php
                }
            }
            ?>
            </ul>
        </li>
        <li class="nav__item">
            <a class='nav__link' href="<?php echo $domain_url; ?>/news/">
                <!--Новости--><?php echo $til['news']; ?>
            </a>
        </li>
        <li class='nav__item dropdown'>
            <div class='dropdown-title f'>
                <!--Разделы--><?php echo $til_t['sections']; ?>
                <svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <g clip-path="url(#clip0_252_2025)">
                        <path d="M12.0002 17.17C11.3431 17.1712 10.6923 17.0428 10.0849 16.7923C9.47746 16.5418 8.92538 16.174 8.46019 15.71L0.290185 7.53999C0.101882 7.35169 -0.00390625 7.09629 -0.00390625 6.82999C-0.00390625 6.56369 0.101882 6.30829 0.290185 6.11999C0.478489 5.93169 0.733884 5.8259 1.00019 5.8259C1.26649 5.8259 1.52188 5.93169 1.71019 6.11999L9.88019 14.29C10.4427 14.8518 11.2052 15.1673 12.0002 15.1673C12.7952 15.1673 13.5577 14.8518 14.1202 14.29L22.2902 6.11999C22.4785 5.93169 22.7339 5.8259 23.0002 5.8259C23.2665 5.8259 23.5219 5.93169 23.7102 6.11999C23.8985 6.30829 24.0043 6.56369 24.0043 6.82999C24.0043 7.09629 23.8985 7.35169 23.7102 7.53999L15.5402 15.71C15.075 16.174 14.5229 16.5418 13.9155 16.7923C13.3081 17.0428 12.6572 17.1712 12.0002 17.17Z"
                                                                                                                                                                                                                                fill="#BDBABA" />
                    </g>
                    <defs>
                        <clipPath id="clip0_252_2025">
                            <rect width="24" height="24" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </div>
            <ul>
            <?php
            for ($i=0;$i<$obj96->i;$i++)
            {
                if ( $row96[$i]['sub_category'] == '' )
                {
                ?>
                <li class='dropdown__item'><a href="<?php echo $domain_url; echo '/'; echo $row96[$i]["r_url"]; ?>/"><?php echo $row96[$i]["r_title".$_lang]; ?></a></li>
                <?php
                }
                else
                {
                ?>
                <li class='dropdown pod'>
                    <div class="dropdown-title">
                        <?php echo $row96[$i]["r_title".$_lang]; ?>
                        <svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <g clip-path="url(#clip0_252_2025)">
                                <path d="M12.0002 17.17C11.3431 17.1712 10.6923 17.0428 10.0849 16.7923C9.47746 16.5418 8.92538 16.174 8.46019 15.71L0.290185 7.53999C0.101882 7.35169 -0.00390625 7.09629 -0.00390625 6.82999C-0.00390625 6.56369 0.101882 6.30829 0.290185 6.11999C0.478489 5.93169 0.733884 5.8259 1.00019 5.8259C1.26649 5.8259 1.52188 5.93169 1.71019 6.11999L9.88019 14.29C10.4427 14.8518 11.2052 15.1673 12.0002 15.1673C12.7952 15.1673 13.5577 14.8518 14.1202 14.29L22.2902 6.11999C22.4785 5.93169 22.7339 5.8259 23.0002 5.8259C23.2665 5.8259 23.5219 5.93169 23.7102 6.11999C23.8985 6.30829 24.0043 6.56369 24.0043 6.82999C24.0043 7.09629 23.8985 7.35169 23.7102 7.53999L15.5402 15.71C15.075 16.174 14.5229 16.5418 13.9155 16.7923C13.3081 17.0428 12.6572 17.1712 12.0002 17.17Z"
                                                                                                                                                                                                                                        fill="#0F2C7C" />
                            </g>
                            <defs>
                                <clipPath id="clip0_252_2025">
                                    <rect width="24" height="24" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>

                    <ul>
                        <?php
                        foreach($row96[$i]['sub_category'] as $v)
                        {
                        ?>
                        <li class='dropdown__item'>
                            <a href="<?php echo $domain_url; echo '/'; echo $row96[$i]["r_url"]; echo '/'; echo $v['sub_url']; ?>/">
                            <?php echo $v['sub_title']; ?>
                            </a>
                        </li>
                        <?php
                        }
                        ?>
                    </ul>
                </li>
                <?php 
                }
            }
            ?>
            </ul>
        </li>
        <!--<li class='nav__item dropdown left'>
            <div class='dropdown-title f'>
                Положение
                <svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <g clip-path="url(#clip0_252_2025)">
                        <path d="M12.0002 17.17C11.3431 17.1712 10.6923 17.0428 10.0849 16.7923C9.47746 16.5418 8.92538 16.174 8.46019 15.71L0.290185 7.53999C0.101882 7.35169 -0.00390625 7.09629 -0.00390625 6.82999C-0.00390625 6.56369 0.101882 6.30829 0.290185 6.11999C0.478489 5.93169 0.733884 5.8259 1.00019 5.8259C1.26649 5.8259 1.52188 5.93169 1.71019 6.11999L9.88019 14.29C10.4427 14.8518 11.2052 15.1673 12.0002 15.1673C12.7952 15.1673 13.5577 14.8518 14.1202 14.29L22.2902 6.11999C22.4785 5.93169 22.7339 5.8259 23.0002 5.8259C23.2665 5.8259 23.5219 5.93169 23.7102 6.11999C23.8985 6.30829 24.0043 6.56369 24.0043 6.82999C24.0043 7.09629 23.8985 7.35169 23.7102 7.53999L15.5402 15.71C15.075 16.174 14.5229 16.5418 13.9155 16.7923C13.3081 17.0428 12.6572 17.1712 12.0002 17.17Z"
                                                                                                                                                                                                                                fill="#BDBABA" />
                    </g>
                    <defs>
                        <clipPath id="clip0_252_2025">
                            <rect width="24" height="24" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </div>
            <ul>
                <li class='dropdown__item'><a href="/">Раздел 1</a></li>

                <li class='dropdown__item'><a href="#">Раздел 2</a></li>

                <li class='dropdown pod left'>
                    <div class="dropdown-title">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Hic, ullam.
                        <svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                            <g clip-path="url(#clip0_252_2025)">
                                <path d="M12.0002 17.17C11.3431 17.1712 10.6923 17.0428 10.0849 16.7923C9.47746 16.5418 8.92538 16.174 8.46019 15.71L0.290185 7.53999C0.101882 7.35169 -0.00390625 7.09629 -0.00390625 6.82999C-0.00390625 6.56369 0.101882 6.30829 0.290185 6.11999C0.478489 5.93169 0.733884 5.8259 1.00019 5.8259C1.26649 5.8259 1.52188 5.93169 1.71019 6.11999L9.88019 14.29C10.4427 14.8518 11.2052 15.1673 12.0002 15.1673C12.7952 15.1673 13.5577 14.8518 14.1202 14.29L22.2902 6.11999C22.4785 5.93169 22.7339 5.8259 23.0002 5.8259C23.2665 5.8259 23.5219 5.93169 23.7102 6.11999C23.8985 6.30829 24.0043 6.56369 24.0043 6.82999C24.0043 7.09629 23.8985 7.35169 23.7102 7.53999L15.5402 15.71C15.075 16.174 14.5229 16.5418 13.9155 16.7923C13.3081 17.0428 12.6572 17.1712 12.0002 17.17Z"
                                                                                                                                                                                                                                        fill="#0F2C7C" />
                            </g>
                            <defs>
                                <clipPath id="clip0_252_2025">
                                    <rect width="24" height="24" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                    </div>

                    <ul>
                        <li class='dropdown__item'><a href="/">Подраздел 1</a></li>
                        <li class='dropdown pod left dropdown__item'>
                            <div class="dropdown-title">
                                Подраздел 2
                                <svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <g clip-path="url(#clip0_252_2025)">
                                        <path d="M12.0002 17.17C11.3431 17.1712 10.6923 17.0428 10.0849 16.7923C9.47746 16.5418 8.92538 16.174 8.46019 15.71L0.290185 7.53999C0.101882 7.35169 -0.00390625 7.09629 -0.00390625 6.82999C-0.00390625 6.56369 0.101882 6.30829 0.290185 6.11999C0.478489 5.93169 0.733884 5.8259 1.00019 5.8259C1.26649 5.8259 1.52188 5.93169 1.71019 6.11999L9.88019 14.29C10.4427 14.8518 11.2052 15.1673 12.0002 15.1673C12.7952 15.1673 13.5577 14.8518 14.1202 14.29L22.2902 6.11999C22.4785 5.93169 22.7339 5.8259 23.0002 5.8259C23.2665 5.8259 23.5219 5.93169 23.7102 6.11999C23.8985 6.30829 24.0043 6.56369 24.0043 6.82999C24.0043 7.09629 23.8985 7.35169 23.7102 7.53999L15.5402 15.71C15.075 16.174 14.5229 16.5418 13.9155 16.7923C13.3081 17.0428 12.6572 17.1712 12.0002 17.17Z"
                                                                                                                                                                                                                                                fill="#0F2C7C" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_252_2025">
                                            <rect width="24" height="24" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </div>

                            <ul>
                                <li class='dropdown__item'><a href="">Под подраздел 1</a></li>
                                <li class='dropdown__item'><a href="#">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis, praesentium.</a></li>
                                <li class='dropdown__item'><a href="#">Под подраздел 3</a></li>
                            </ul>
                        </li>
                        <li class='dropdown__item'><a href="/">Раздел 3</a></li>
                        <li class='dropdown__item'><a href="#">Раздел 3</a></li>
                        <li class='dropdown__item'><a href="#">Раздел 3</a></li>
                        <li class='dropdown__item'><a href="#">Раздел 3</a></li>
                        <li class='dropdown__item'><a href="#">Раздел 3</a></li>
                        <li class='dropdown__item'><a href="#">Раздел 3</a></li>
                        <li class='dropdown__item'><a href="#">Раздел 3</a></li>
                        <li class='dropdown__item'><a href="#">Раздел 3</a></li>
                    </ul>
                </li>

                <li class='dropdown__item'><a href="/">Раздел 4</a></li>
                <li class='dropdown__item'><a href="#">Раздел 5</a></li>
            </ul>
        </li>-->
        <li class="nav__item dropdown">
            <div class='dropdown-title f'>
                <!--Фотогалерея--><?php echo $til['f_galer']; ?>
                <svg xmlns="https://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                    <g clip-path="url(#clip0_252_2025)">
                        <path d="M12.0002 17.17C11.3431 17.1712 10.6923 17.0428 10.0849 16.7923C9.47746 16.5418 8.92538 16.174 8.46019 15.71L0.290185 7.53999C0.101882 7.35169 -0.00390625 7.09629 -0.00390625 6.82999C-0.00390625 6.56369 0.101882 6.30829 0.290185 6.11999C0.478489 5.93169 0.733884 5.8259 1.00019 5.8259C1.26649 5.8259 1.52188 5.93169 1.71019 6.11999L9.88019 14.29C10.4427 14.8518 11.2052 15.1673 12.0002 15.1673C12.7952 15.1673 13.5577 14.8518 14.1202 14.29L22.2902 6.11999C22.4785 5.93169 22.7339 5.8259 23.0002 5.8259C23.2665 5.8259 23.5219 5.93169 23.7102 6.11999C23.8985 6.30829 24.0043 6.56369 24.0043 6.82999C24.0043 7.09629 23.8985 7.35169 23.7102 7.53999L15.5402 15.71C15.075 16.174 14.5229 16.5418 13.9155 16.7923C13.3081 17.0428 12.6572 17.1712 12.0002 17.17Z"
                                                                                                                                                                                                                                fill="#BDBABA" />
                    </g>
                    <defs>
                        <clipPath id="clip0_252_2025">
                            <rect width="24" height="24" fill="white" />
                        </clipPath>
                    </defs>
                </svg>
            </div>
            <ul>
            <?php
            for ($i=0;$i<$obj98->i;$i++)
            {
                ?>
                <li class='dropdown__item'>
                <a href="<?php echo $domain_url; echo '/gallery/?id='; echo $row98[$i]['g2_id']; ?>">
                    <?php echo $row98[$i]["g2_title".$_lang]; ?>
                </a>
                </li>
                <?php
            }
            ?>
            </ul>
        </li>


    </ul>
    </div>
</nav>