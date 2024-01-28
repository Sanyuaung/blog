import React from "react";
import { createRoot } from "react-dom";
const App = () => {
    return <h1>Hello React</h1>;
};
createRoot(document.getElementById("root")).render(<App />);
