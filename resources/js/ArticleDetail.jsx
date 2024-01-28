import React from "react";
import { createRoot } from "react-dom";
const $data = bladeArticleDetail;
const App = () => {
    return (
        <>
            <div>
                <img src={$data.image_url} alt="" className="w-100 rounded" />
                <div>
                    <h3 className="mt-3 text-white">{$data.name}</h3>
                </div>
                <div className="mt-3">
                    {$data.tag.map((t) => (
                        <span
                            key={t.id}
                            className="btn btn-dark btn-sm text-white"
                        >
                            {t.name}
                        </span>
                    ))}
                    {$data.programming.map((p) => (
                        <span
                            key={p.id}
                            className="btn btn-primary btn-sm text-white"
                        >
                            {p.name}
                        </span>
                    ))}
                    |<button className="btn btn-sm btn-success">Like</button>
                    <button className="btn btn-sm btn-warning">Save</button>
                </div>
                <div className="card card-body bg-card mt-3">Desc </div>
                <div className="card card-body bg-card mt-3">
                    <h4 className="text-white">Comment List</h4>
                    <textarea
                        name="comment"
                        id=""
                        cols="30"
                        rows="10"
                        className="form-control"
                    ></textarea>
                    <div className="mt-3">
                        <button className="btn btn-primary">Comment</button>
                    </div>
                </div>
                {$data.comment.map((c) => (
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
