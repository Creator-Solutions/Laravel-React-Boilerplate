import { useEffect } from "react";
import { useLocation } from "react-router-dom";

const pageTitles = {
    "/": "Login",
    "/register": "Register",
    // Add other routes and titles here
};

export function usePageTitle() {
    const location = useLocation();

    useEffect(() => {
        document.title =
            "SavvyShopper || " + pageTitles[location.pathname] ||
            "Default Title";
    }, [location.pathname]);
}
