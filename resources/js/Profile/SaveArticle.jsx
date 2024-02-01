import axios from "axios";
import React, { useEffect, useState } from "react";
import Loader from "../Components/Loader";

export const SaveArticle = () => {
    const [article, setArticle] = useState([]);
    const [loader, setLoader] = useState(true);
    useEffect(() => {
        axios.get("/api/article-save").then((d) => {
            setArticle(d.data);
            setLoader(false);
        });
    }, []);
    return (
        <div className="card bg-card card-body">
            {loader && <Loader />}
            {!loader && (
                <div className="row">
                    {article.map((d) => (
                        <div key={d.id} className="col-4">
                            <a href={`/article/${d.article.slug}`}>
                                <img
                                    src={d.article.image_url}
                                    alt=""
                                    className="w-100 rounded"
                                />
                                <p className="text-white text-center mt-2">
                                    {d.article.name}
                                </p>
                            </a>
                        </div>
                    ))}
                </div>
            )}
        </div>
    );
};
