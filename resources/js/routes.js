import Home from "./pages/Home";
import Train from "./pages/Training";
import Words from "./pages/Words";

const routes = [
    { path: '/', component: Home },
    { path: '/words', component: Words },
    { path: '/training', component: Train },
];

export default routes
