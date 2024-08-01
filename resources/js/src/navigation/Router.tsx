import React from "react";
import {
    createBrowserRouter,
    RouterProvider,
} from "react-router-dom";
import LoginPage from "../screens/login/login.screen";

const router = createBrowserRouter([
    {
        path: "/",
        element: <LoginPage />,
    },
]);

export default router;
