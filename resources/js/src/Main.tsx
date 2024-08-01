import React from "react";
import { RouterProvider } from "react-router-dom";
import router from "./navigation/Router";

const ExampleComponent: React.FC = () => {
    return <RouterProvider router={router} />;
};

export default ExampleComponent;
