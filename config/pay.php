<?php

return [
    'alipay' => [
        'app_id'         => '2016092400584676',
        'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEAwLSDMB+pUhXH4KRIloy7XGz9GyDgWvsICw2vAEnFvpq1HIMegcYhnNqWLskWI6H+t+gXkxL4sqke8ihhn1CmO64Y68gLu3bmw0b1A93qa7ucGcFby4HLJ62nsq5gPaRBxSrAX/xriYTEU/bO2sA3IzTb8axSpiuby2R6hb2LX7FTnyLu1MTj9/caflZb2DLZSS2+RcbzmU13fENjb2hZgpcgozcFi3zLsVE4YZm4O3Glw9nXvhaugZH7oZP7H0Vf1qlkESsThQFLowGkTP33XGfqXViS0y1pGyjWWTnICSP5uPr84ftbGxSt+ViGOphsAh5fVIY1IhMoc1YqlXweXwIDAQAB',
        'private_key'    => 'MIIEpQIBAAKCAQEAtU41ZhZAlGhRcL2sNhmWUeoucmANS0rIfpm/3ex17huL2NyPkpKgp+hWdKVsPoS0BFRt2Q01Eub3hqE3x/c/eHZqKxId46GBvMVUyQe5rgOzeXVQvDZYkLOiw8ZJgm63IPDa8yRDTQYervIWcg/KryZUT3ajxd9mjWwb8Q9v1jIWQxBZD7wmIxyY5b9xbYXYKiIF3A+MpKsbHTislKM+1fCOp+6tG1JXl1FZAwqbisn+dW/tHFYwHcvKtcxPhlJIcu5O4CICPkWtmtJLRpMPOJk4TMCr5y+tJzjpnd0HZqM07L1sOD7Eh1oPdbpqOHHuNqi8VanVY4VQCwFW/4S6PQIDAQABAoIBAQCVzRHX0Ij5Vhv8H+tbI9cMxYYs4Gn7jMWNvPFHpullnAL3Yn2J6HavZQuSA2AlY7XtYekFDqGMhaN87FXPdd1OZeCgx65Edxxf4VeFZkmnms0+jIzxhaG1pYbVZU81Ys8Se48cmBi3Wlgdyk57Xcrk3rGImokEo+ny7aFEkrGf8oq/8w98EHDkn/9JfJ1UpaJNKSxzlRZWEClvzzopS3KpXcRrhJvfI/lnGMM13ZH29fDQ97Rmo/9p8JOc8Fj0crfldyOsQ4PS8SC+3RsH0Z5iyLzMMbl0mHaBEf1YN6lWFVvnXyV3kt0yy9vh/krVV796ClAkdz+p1iMsr2jGc70BAoGBAO1GJaysRDyQeq/jNHjJS1IT243R/C0O91To9hHW4E+2rQVx8jbvydlSMxNtMad8DOwFBbH+82B1a+SZrdt99A5ONAWWqOHj3pWCI2gCwXdb2QMb89NN5CVwxSvPyTsHZKK10h92dY4VCuligURZVixPBYQ2cxJeFz5txUIvX499AoGBAMOdR/GtVF1z+U+/+2pnH5ETPONAHsIP3RF7vpkORDowea7sIBBkte21/b+guhizDge3loSqqW2yB1KnwaFTMeJqXJs4hgJJnWl/d/xLL6ZWK/CT8TVdOHjpmUXL0nuLOQ8IHV3ssDHd8vcELJUhTr8aMRsgxa8lRGdQYOX+z1HBAoGBAMYnqxcF1wbtckip6wxkr66gPt+12nCW6x/SXo6PcU2hNeYyPyJ6J4yDBXzX2HwTMYd6ukLotMB9z9leLr/79HJuBSwVonzkHOOnh4I5qvDPl/DsyzhQ+JP8Fe583YWaqwTn68+y0oISOMaoKWS3Zywh4m2EO52/TpIognC/t4LRAoGAQrE0/ijiQppvvcjupvBRytyMPc52riNKc9OEwBolGNG+Ku1GYVB01n7d7J+X0yP4/JiTMNgeu8+ev4eCdMYwk8k/mYxD5DPE/1r+RX482LE4eeV2r4MA5fh+0VUUhhqJcZ6KpKM1z0qks6MwsAeTGYSMiXs66uQB1leJMeEWPgECgYEAhfkBm0QK3WI765iYjGU4FsdmH3o5cGWtsct3XkiP8KzsfGk+Z177E5JLLO+4akg7jJsiDFLAt0bECogDaBkesjadrVdNLvEcl5478eZP01EP0BYGBDf9x/4l4UZdJu24vdhoP0XX8I7dKD934bTHyjpPsuNsELjy17tuKvd1uyA=',
        'log'            => [
            'file' => storage_path('logs/alipay.log'),
        ],
    ],

    'wechat' => [
        'app_id'      => '',
        'mch_id'      => '',
        'key'         => '',
        'cert_client' => '',
        'cert_key'    => '',
        'log'         => [
            'file' => storage_path('logs/wechat_pay.log'),
        ],
    ],
];