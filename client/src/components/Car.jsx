import React from "react";

export const Car = ({ name, year, price, image }) => (
  <div className="card">
    <h2 className="card-title">
      {name} <b>({year})</b>
    </h2>
    <img className="card-image" src={image} alt={name} />
    <div className="card-footer">
      <h4>{price}$</h4>
      <a href={"/"}>
        <svg
          xmlns="http://www.w3.org/2000/svg"
          width="25"
          height="25"
          fill="currentColor"
          viewBox="0 0 16 16"
        >
          <path
            fillRule="evenodd"
            d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"
          />
        </svg>
      </a>
    </div>
  </div>
);
