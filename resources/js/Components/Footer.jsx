import React from "react";

const Footer = () => {
    const currentDate = new Date();
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
