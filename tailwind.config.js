/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
        fontFamily: {
            sans: ["Mulish", "sans-serif"],
            serif: ["Merriweather", "serif"],
        },
        extend: {
            screens: {
                md: "860px",
                lg: "1120px",
            },
            colors: {
                border: "hsl(var(--border))",
                input: "hsl(var(--input))",
                ring: "hsl(var(--ring))",
                background: "hsl(var(--background))",
                foreground: "hsl(var(--foreground))",
                primary: {
                    DEFAULT: "#00C494",
                    foreground: "hsl(var(--primary-foreground))",
                },
                secondary: {
                    DEFAULT: "#20CBA1",
                    foreground: "hsl(var(--secondary-foreground))",
                },
                third: {
                    DEFAULT: "#FFCB1F",
                    foreground: "hsl(var(--secondary-foreground))",
                },
                fourth: {
                    DEFAULT: "#C40030",
                    foreground: "hsl(var(--accent-foreground))",
                },
                gray1: {
                    DEFAULT: "#797C77",
                    foreground: "hsl(var(--accent-foreground))",
                },
                gray2: {
                    DEFAULT: "#A5A8A3",
                    foreground: "hsl(var(--accent-foreground))",
                },
                gray3: {
                    DEFAULT: "#B0B3AF",
                    foreground: "hsl(var(--accent-foreground))",
                },
                bg1: {
                    DEFAULT: "#F7F7F8",
                    // DEFAULT: "#F5F5F5",
                    foreground: "hsl(var(--muted-foreground))",
                },
                bg2: {
                    DEFAULT: "#FDF7E2",
                    foreground: "hsl(var(--destructive-foreground))",
                },
                popover: {
                    DEFAULT: "hsl(var(--popover))",
                    foreground: "hsl(var(--popover-foreground))",
                },
                card: {
                    DEFAULT: "hsl(var(--card))",
                    foreground: "hsl(var(--card-foreground))",
                },
            },

            keyframes: {
                wiggle: {
                    "0%, 100%": { transform: "rotate(-8deg)" },
                    "50%": { transform: "rotate(8deg)" },
                },
                circle: {
                    "0%": { "stroke-dasharray": "0 100" },
                    "100%": { "stroke-dasharray": "100 0" },
                },
            },
            animation: {
                wiggle: "wiggle 1s ease-in-out infinite",
                circle: "border-draw 2s linear forwards",
            },
        },
    },
    plugins: [],
};
