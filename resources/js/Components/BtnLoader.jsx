import React from "react";
import HashLoader from "react-spinners/HashLoader";

const BtnLoader = () => {
    return (
        <HashLoader
            color={"#36d7b7"}
            loading={true}
            size={20}
            cssOverride={{ marginLeft: 10 }}
            aria-label="Loading Spinner"
            data-testid="loader"
        />
    );
};
export default BtnLoader;
