import axios from "axios";
import React, { useEffect, useState } from "react";

export const Setting = () => {
    const [user, setUser] = useState({
        name: "",
        email: "",
        password: "",
    });
    const [loader, setLoader] = useState(true);
    useEffect(() => {
        axios
            .get("/api/user-info")
            .then((response) => {
                const userData = response.data;
                setUser({
                    name: userData.name || "",
                    email: userData.email || "",
                    password: "",
                });
                setLoader(false);
            })
            .catch((error) => {
                console.error("Error fetching user data:", error);
            });
    }, []);

    const handleChange = (e) => {
        const { name, value } = e.target;
        setUser((prevUser) => ({
            ...prevUser,
            [name]: value,
        }));
    };

    const handleSubmit = (e) => {
        e.preventDefault();

        axios
            .post("/api/user-update", user)
            .then((response) => {
                console.log("User data updated successfully:", response.data);
                showSuccess("Updated");
            })
            .catch((error) => {
                console.error("Error updating user data:", error);
                showError(error.response.data.message);
            });
    };

    return (
        <>
            <div className="rounded bg-card p-3">
                <form onSubmit={handleSubmit}>
                    <div className="form-group">
                        <label htmlFor="name">Your Name</label>
                        <input
                            type="text"
                            name="name"
                            id="name"
                            className="form-control"
                            value={user.name}
                            onChange={handleChange}
                        />
                    </div>

                    <div className="form-group">
                        <label htmlFor="email">Your Email</label>
                        <input
                            type="email"
                            name="email"
                            id="email"
                            className="form-control"
                            value={user.email}
                            onChange={handleChange}
                        />
                    </div>
                    <div className="form-group">
                        <label htmlFor="password">Your Password</label>
                        <small className="ml-2 text-warning">
                            (If empty, password will remain the same)
                        </small>
                        <input
                            type="password"
                            name="password"
                            id="password"
                            className="form-control"
                            placeholder="********"
                            value={user.password}
                            onChange={handleChange}
                        />
                    </div>
                    <input
                        type="submit"
                        value="Update"
                        className="btn btn-primary"
                    />
                </form>
            </div>
        </>
    );
};
