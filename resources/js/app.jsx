import "./bootstrap";
import "../css/app.css";

// import "../theme/js/main";
import "../theme/vendor/bootstrap/css/bootstrap.min.css";
import "../theme/vendor/bootstrap-icons/bootstrap-icons.css";
import "../theme/vendor/boxicons/css/boxicons.min.css";
import "../theme/vendor/quill/quill.snow.css";
import "../theme/vendor/quill/quill.bubble.css";
import "../theme/vendor/remixicon/remixicon.css";
import "../theme/vendor/simple-datatables/style.css";
import "../theme/css/style.css";

import "../theme/vendor/apexcharts/apexcharts.min.js";
import "../theme/vendor/bootstrap/js/bootstrap.bundle.min.js";
import "../theme/vendor/chart.js/chart.umd.js";
import "../theme/vendor/echarts/echarts.min.js";
import "../theme/vendor/quill/quill.min.js";
import "../theme/vendor/simple-datatables/simple-datatables.js";
import "../theme/vendor/tinymce/tinymce.min.js";
import "../theme/vendor/php-email-form/validate.js";
import "../theme/js/main.js";

import { createRoot } from "react-dom/client";
import { createInertiaApp } from "@inertiajs/react";
import { resolvePageComponent } from "laravel-vite-plugin/inertia-helpers";

const appName = import.meta.env.VITE_APP_NAME || "Zetech University";

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name) =>
        resolvePageComponent(
            `./Pages/${name}.jsx`,
            import.meta.glob("./Pages/**/*.jsx")
        ),
    setup({ el, App, props }) {
        const root = createRoot(el);

        root.render(<App {...props} />);
    },
    progress: {
        color: "#4B5563",
    },
});
