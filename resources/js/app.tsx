import React from "react";
import { createRoot } from "react-dom/client";
import ExampleComponent from "./src/Main";

const root = createRoot(document.getElementById("app")!);
root.render(<ExampleComponent />);
