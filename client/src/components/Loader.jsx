import React from "react";

export const Loader = () => {
  const build = () => {
    const divs = [];

    for (let i = 0; i < 12; i++) {
      divs.push(<div key={i} />);
    }

    return (
      <div className="center-loader">
        <div className="lds-spinner">{divs}</div>
      </div>
    );
  };

  return build();
};
