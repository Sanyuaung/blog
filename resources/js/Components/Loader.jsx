import React from "react";
import HashLoader from "react-spinners/HashLoader";

export const Loader = () => {
    return (
        <div className="p-3 d-flex justify-content-center align-items-center">
            <HashLoader
                color={"#36d7b7"}
                loading={true}
                size={40}
                cssOverride={{ marginLeft: 10 }}
                aria-label="Loading Spinner"
                data-testid="loader"
            />
        </div>
    );
};
export default Loader;
