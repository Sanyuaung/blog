import React, { useState } from "react";
import { createRoot } from "react-dom/client";
import BtnLoader from "./Components/BtnLoader";
import axios from "axios";
const data = bladeArticleDetail;
const isAuth = bladeIsAuth;
const App = () => {
    const [comments, setComments] = useState(data.comment);
    const [comment, setComment] = useState("");
    const [commentLoader, setCommentLoader] = useState(false);
    const [likeCount, setLikeCount] = useState(data.like_count);
    const addComment = () => {
        setCommentLoader(true);
        axios
            .post("/api/article-comment", { comment, article_id: data.id })
            .then((d) => {
                setComments([d.data, ...comments]);
                setComment("");
                setCommentLoader(false);
                showSuccess("Comment Successufully");
            });
    };
    const articleLike = () => {
        axios.post("/api/article-like", { slug: data.slug }).then((d) => {
            if (d.data == "success") {
                setLikeCount(likeCount + 1);
                showSuccess("Like Successufully");
            }
        });
    };
    const saveArticle = () => {
        axios.post("/api/article-save", { slug: data.slug }).then((d) => {
            if (d.data == "already_save") {
                showError("Article Already Saved");
                return;
            }
            if (d.data == "success") {
                showSuccess("Article Saved Successufully");
            }
        });
    };

    return (
        <>
            <div>
                <img src={data.image_url} alt="" className="w-100 rounded" />
                <div>
                    <h3 className="mt-3 text-white">{data.name}</h3>
                </div>
                <div className="mt-3">
                    {data.tag.map((t) => (
                        <span
                            key={t.id}
                            className="btn btn-dark btn-sm text-white"
                        >
                            {t.name}
                        </span>
                    ))}
                    {data.programming.map((p) => (
                        <span
                            key={p.id}
                            className="btn btn-primary btn-sm text-white"
                        >
                            {p.name}
                        </span>
                    ))}
                    |
                    <button
                        onClick={isAuth ? articleLike : null}
                        className={`btn btn-sm btn-success${
                            isAuth ? "" : " disabled"
                        }`}
                        disabled={!isAuth}
                    >
                        Like {likeCount}
                    </button>
                    <button
                        onClick={isAuth ? saveArticle : null}
                        className={`btn btn-sm btn-warning${
                            isAuth ? "" : " disabled"
                        }`}
                    >
                        Save
                    </button>
                </div>
                <div
                    className="card card-body bg-card mt-3"
                    dangerouslySetInnerHTML={{ __html: data.description }}
                ></div>
                <div className="card card-body bg-card mt-3">
                    <h4 className="text-white">Comment List</h4>
                    {isAuth && (
                        <>
                            <textarea
                                value={comment}
                                onChange={(e) => setComment(e.target.value)}
                                name="comment"
                                id=""
                                cols="30"
                                rows="10"
                                className="form-control"
                            ></textarea>
                            <div className="mt-3">
                                <button
                                    disabled={commentLoader}
                                    onClick={addComment}
                                    className="btn btn-primary"
                                >
                                    Comment
                                    {commentLoader && <BtnLoader />}
                                </button>
                            </div>
                        </>
                    )}
                    {!isAuth && (
                        <div className="alert alert-warning">
                            Please Login First.
                        </div>
                    )}
                </div>
                {comments.map((c) => (
                    <div key={c.id} className="card card-body bg-card mt-3">
                        <div>
                            <b className="text-white">{c.user.name}</b>
                            <small className="text-muted ml-3">
                                {c.time_ago}
                            </small>
                        </div>
                        <p className="mt-3"> {c.comment}</p>
                    </div>
                ))}
            </div>
        </>
    );
};
createRoot(document.getElementById("root")).render(<App />);
