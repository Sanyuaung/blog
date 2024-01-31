import React from "react";
import { createRoot } from "react-dom/client";
import { HashRouter,Routes,Route } from "react-router-dom";
import { SaveArticle } from "./Profile/SaveArticle";
import { Setting } from "./Profile/Setting";

const App = () => {
    return (
        <HashRouter>
            <Routes>
                <Route path="/" element={<SaveArticle/>}></Route>
                <Route path="/setting" element={<Setting/>}></Route>
            </Routes>
        </HashRouter>
    );
};
createRoot(document.getElementById("root")).render(<App />);
