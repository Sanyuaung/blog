import React from "react";
import { createRoot } from "react-dom/client";
import { HashRouter, Routes, Route, useNavigate, Link } from "react-router-dom";
import { SaveArticle } from "./Profile/SaveArticle";
import { Setting } from "./Profile/Setting";

const App = () => {
    return (
        <>
            <HashRouter>
                <div className="mb-2">
                    <Link to={"/"} className="btn btn-primary">
                        Save Article
                    </Link>
                    <Link to={"/setting"} className="btn btn-primary">
                        Account Setting
                    </Link>
                </div>
                <Routes>
                    <Route path="/" element={<SaveArticle />}></Route>
                    <Route path="/setting" element={<Setting />}></Route>
                </Routes>
            </HashRouter>
        </>
    );
};
createRoot(document.getElementById("root")).render(<App />);
