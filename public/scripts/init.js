document.addEventListener('DOMContentLoaded', function () {
    AOS.init({
        duration: 1000,
        once: true
    });
});

tailwind.config = {
    darkMode: 'selector',
    theme: {
        extend: {
            fontFamily: {
                barlow: ['"Barlow Condensed"', 'sans-serif'],
                'body': [
                    'Inter',
                    'ui-sans-serif',
                    'system-ui',
                    '-apple-system',
                    'system-ui',
                    'Segoe UI',
                    'Roboto',
                    'Helvetica Neue',
                    'Arial',
                    'Noto Sans',
                    'sans-serif',
                    'Apple Color Emoji',
                    'Segoe UI Emoji',
                    'Segoe UI Symbol',
                    'Noto Color Emoji'
                ],
                'sans': [
                    'Inter',
                    'ui-sans-serif',
                    'system-ui',
                    '-apple-system',
                    'system-ui',
                    'Segoe UI',
                    'Roboto',
                    'Helvetica Neue',
                    'Arial',
                    'Noto Sans',
                    'sans-serif',
                    'Apple Color Emoji',
                    'Segoe UI Emoji',
                    'Segoe UI Symbol',
                    'Noto Color Emoji'
                ],
            },
            colors: {
                primary: {
                    "50": "#fffbeb",
                    "100": "#fef3c7",
                    "200": "#fde68a",
                    "300": "#fcd34d",
                    "400": "#fbbf24",
                    "500": "#f59e0b",
                    "600": "#d97706",
                    "700": "#b45309",
                    "800": "#92400e",
                    "900": "#78350f",
                    "950": "#451a03"
                }
            },
            animation: {
                'bounce-once': 'bounceOnce 1s ease-in-out 1',
            },
            keyframes: {
                bounceOnce: {
                    '0%': { transform: 'translateX(-100vh)' },
                    '100%': { transform: 'translateX(0)' },
                },
            },
        },
    },
};