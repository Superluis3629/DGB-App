import { createWebHistory, createRouter } from "vue-router";

import ComplianceApp from "../pages/ComplianceApp.vue";
import ComplianceLoggin from "../pages/ComplianceLoggin.vue";

export const routes = [
    {
        name: "complianceapp",
        path: "/complianceapp",
        component: ComplianceApp
    },
    {
        name: "complianceloggin",
        path: "/complianceloggin",
        component: ComplianceLoggin
    },

]

const router = createRouter ({
    history: createWebHistory(),
    routes: routes,
    scrollBehavior() {
        window.scrollTo(0,0)
    }
});

export default router;