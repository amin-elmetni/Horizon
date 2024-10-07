/** @type {import('tailwindcss').Config} */
export default {
    content: [
        "./resources/**/*.blade.php",
        "./resources/**/*.js",
        "./resources/**/*.vue",
    ],
    theme: {
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
                    DEFAULT: "#FFCB1F",
                    foreground: "hsl(var(--secondary-foreground))",
                },
                third: {
                    DEFAULT: "#FF969D",
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
                bg1: {
                    DEFAULT: "#F6F7FB",
                    foreground: "hsl(var(--muted-foreground))",
                },
                bg2: {
                    DEFAULT: "#E3F5F4",
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
            borderRadius: {
                lg: "var(--radius)",
                md: "calc(var(--radius) - 2px)",
                sm: "calc(var(--radius) - 4px)",
            },
            keyframes: {
                "accordion-down": {
                    from: { height: "0" },
                    to: { height: "var(--radix-accordion-content-height)" },
                },
                "accordion-up": {
                    from: { height: "var(--radix-accordion-content-height)" },
                    to: { height: "0" },
                },
            },
            animation: {
                "accordion-down": "accordion-down 0.2s ease-out",
                "accordion-up": "accordion-up 0.2s ease-out",
            },
        },
    },
    plugins: [],
};
