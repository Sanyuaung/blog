import React, { useState } from "react";
import { createRoot } from "react-dom/client";
const datas = bladeArticleAll;
const data = datas.data;
console.log(datas);

const App = () => {
    const pageSize = datas.per_page;
    const [currentPage, setCurrentPage] = useState(1);

    const totalPages = Math.ceil(data.length / pageSize);

    const handlePageChange = (pageNumber) => {
        setCurrentPage(pageNumber);
    };

    const visibleData = data.slice(
        (currentPage - 1) * pageSize,
        currentPage * pageSize
    );

    return (
        <>
            <div className="mt-4">
                <form action="" className="d-flex">
                    <input
                        type="text"
                        name="name"
                        id="name"
                        placeholder="Search Blog..."
                        className="form-control rounded bg-card"
                    />
                    <input
                        type="submit"
                        value="Search"
                        defaultValue="Search"
                        className="btn btn-primary ml-2"
                    />
                </form>
            </div>
            <div className="mt-4 blog-list">
                <div className="row p-0 m-0">
                    {visibleData.map((d) => (
                        <div key={d.id} className="col-6  pl-0 mt-4">
                            <div className="rounded bg-card">
                                <a href={`/article/${d.slug}`}>
                                    <img
                                        className="rounded"
                                        src={d.image_url}
                                        style={{ width: "100%" }}
                                        alt=""
                                    />
                                </a>
                                <div className="p-4 text-white">
                                    <h4 className="text-white">{d.name}</h4>
                                    <div className="d-flex justify-content-between">
                                        <button
                                            className="btn btn-dark"
                                            style={{ pointerEvents: "none" }}
                                        >
                                            <span className="text-success">
                                                <i className="bx bx-happy-heart-eyes" />
                                            </span>{" "}
                                            : {d.view_count}
                                        </button>
                                        <button
                                            className="btn btn-dark"
                                            style={{ pointerEvents: "none" }}
                                        >
                                            <span className="text-success">
                                                <i className="bx bx-heart" />
                                            </span>{" "}
                                            : {d.like_count}
                                        </button>

                                        <button
                                            className="btn btn-dark"
                                            style={{ pointerEvents: "none" }}
                                        >
                                            <span className="text-success">
                                                <i className="bx bx-message-square-dots" />
                                            </span>{" "}
                                            : {d.comment_count}
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    ))}
                </div>
            </div>
            <div className="row mt-3">
                <div className="col-12">
                    {/* Pagination Controls */}
                    <nav>
                        <ul className="pagination">
                            {[...Array(totalPages)].map((_, index) => (
                                <li
                                    key={index}
                                    className={`page-item ${
                                        currentPage === index + 1
                                            ? "active"
                                            : ""
                                    }`}
                                >
                                    <button
                                        className="page-link"
                                        onClick={() =>
                                            handlePageChange(index + 1)
                                        }
                                    >
                                        {index + 1}
                                    </button>
                                </li>
                            ))}
                        </ul>
                    </nav>
                </div>
            </div>
        </>
    );
};

createRoot(document.getElementById("root")).render(<App />);
