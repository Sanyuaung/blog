import React from "react";
import { createRoot } from "react-dom";
const App = () => {
    return (
        <>
            <div>
                <img
                    src="http://127.0.0.1:8000/images/65b2708146c5a684x630.jpg"
                    alt=""
                    className="w-100 rounded"
                />
                <div>
                    <h3 className="mt-3 text-white">Title</h3>
                </div>
                <div className="mt-3">
                    <span className="btn btn-dark btn-sm text-white">Tag</span>
                    <span className="btn btn-primary btn-sm text-white">
                        Programming
                    </span>
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
                <div className="card card-body bg-card mt-3">
                    <div>
                        <b className="text-white">User name</b>
                        <small className="text-muted ml-3">1 week ago</small>
                    </div>
                </div>
                <p className="mt-3"> this is the comment </p>
            </div>
        </>
    );
};
createRoot(document.getElementById("root")).render(<App />);
