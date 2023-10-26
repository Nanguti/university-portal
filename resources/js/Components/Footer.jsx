import React from "react";

const Footer = () => {
    // Get the current date
    const currentDate = new Date();

    // Format the current date as a string (e.g., "2023")
    const year = currentDate.getFullYear();

    return (
        <>
            <footer id="footer" className="footer">
                <div className="copyright">
                    © Copyright{" "}
                    <strong>
                        <span>ZETECH UNIVERSITY</span>
                    </strong>
                    . All Rights Reserved {year}
                </div>
            </footer>
        </>
    );
};

export default Footer;
