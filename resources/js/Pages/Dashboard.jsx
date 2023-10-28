import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head } from "@inertiajs/react";

export default function Dashboard({ auth }) {
    return (
        <AuthenticatedLayout
            user={auth.user}
            header={
                <h2 className="font-semibold text-xl text-gray-800 leading-tight">
                    Dashboard
                </h2>
            }
        >
            <Head title="Dashboard" />

            <main id="main" className="main">
                <div className="pagetitle">
                    <h1>Dashboard</h1>
                    <nav>
                        <ol className="breadcrumb">
                            <li className="breadcrumb-item">
                                <a href="index.html">Home</a>
                            </li>
                            <li className="breadcrumb-item active">
                                Dashboard
                            </li>
                        </ol>
                    </nav>
                </div>

                <section className="section dashboard">
                    <div className="row">
                        <div className="col-lg-8">
                            <div className="row">
                                <div className="col-xxl-4 col-md-6">
                                    <div className="card info-card sales-card">
                                        <div className="card-body">
                                            <h5 className="card-title">
                                                Fee Balance
                                            </h5>
                                            <div className="d-flex align-items-center">
                                                <div className="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                    <i className="bi bi-cash-stack" />
                                                </div>
                                                <div className="ps-3">
                                                    <h6>1451</h6>
                                                    <span className="text-success small pt-1 fw-bold">
                                                        72 %
                                                    </span>{" "}
                                                    <span className="text-muted small pt-2 ps-1">
                                                        completed
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div className="col-xxl-4 col-md-6">
                                    <div className="card info-card revenue-card">
                                        <div className="card-body">
                                            <h5 className="card-title">
                                                Year of Study <span></span>
                                            </h5>
                                            <div className="d-flex align-items-center">
                                                <div className="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                    <i className="bi bi-book-half" />
                                                </div>
                                                <div className="ps-3">
                                                    <h6>3.2</h6>
                                                    <span className="text-success small pt-1 fw-bold">
                                                        75%
                                                    </span>{" "}
                                                    <span className="text-muted small pt-2 ps-1">
                                                        completed
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div className="col-xxl-4 col-xl-12">
                                    <div className="card info-card customers-card">
                                        <div className="card-body">
                                            <h5 className="card-title">
                                                Customers <span></span>
                                            </h5>
                                            <div className="d-flex align-items-center">
                                                <div className="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                    <i className="bi bi-people" />
                                                </div>
                                                <div className="ps-3">
                                                    <h6>1244</h6>
                                                    <span className="text-danger small pt-1 fw-bold">
                                                        72 %
                                                    </span>{" "}
                                                    <span className="text-muted small pt-2 ps-1">
                                                        completed
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div className="col-12">
                                    <div className="card">
                                        <div className="card-body">
                                            <h5 className="card-title">
                                                Reports
                                            </h5>

                                            <div id="reportsChart" />
                                        </div>
                                    </div>
                                </div>

                                <div className="col-12">
                                    <div className="card recent-sales overflow-auto">
                                        <div className="card-body">
                                            <h5 className="card-title">
                                                Recent Sales{" "}
                                            </h5>
                                            <table className="table table-borderless datatable">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">
                                                            ID:{" "}
                                                        </th>
                                                        <th scope="col">
                                                            Customer
                                                        </th>
                                                        <th scope="col">
                                                            Product
                                                        </th>
                                                        <th scope="col">
                                                            Price
                                                        </th>
                                                        <th scope="col">
                                                            Status
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">
                                                            <a href="#">
                                                                #2457
                                                            </a>
                                                        </th>
                                                        <td>Brandon Jacob</td>
                                                        <td>
                                                            <a
                                                                href="#"
                                                                className="text-primary"
                                                            >
                                                                At praesentium
                                                                minu
                                                            </a>
                                                        </td>
                                                        <td>64</td>
                                                        <td>
                                                            <span className="badge bg-success">
                                                                Approved
                                                            </span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div className="col-12">
                                    <div className="card top-selling overflow-auto">
                                        <div className="card-body pb-0">
                                            <h5 className="card-title">
                                                Top Selling
                                            </h5>
                                            <table className="table table-borderless">
                                                <thead>
                                                    <tr>
                                                        <th scope="col">
                                                            Preview
                                                        </th>
                                                        <th scope="col">
                                                            Product
                                                        </th>
                                                        <th scope="col">
                                                            Price
                                                        </th>
                                                        <th scope="col">
                                                            Sold
                                                        </th>
                                                        <th scope="col">
                                                            Revenue
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">
                                                            <a href="#">
                                                                <img
                                                                    src="img/product-1.jpg"
                                                                    alt=""
                                                                />
                                                            </a>
                                                        </th>
                                                        <td>
                                                            <a
                                                                href="#"
                                                                className="text-primary fw-bold"
                                                            >
                                                                Ut inventore
                                                                ipsa voluptas
                                                                nulla
                                                            </a>
                                                        </td>
                                                        <td>64</td>
                                                        <td className="fw-bold">
                                                            124
                                                        </td>
                                                        <td>5,828</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div className="col-lg-4">
                            <div className="card">
                                <div className="card-body">
                                    <h5 className="card-title">
                                        Upcoming Events
                                    </h5>
                                    <div className="activity">
                                        <div className="activity-item d-flex">
                                            <div className="activite-label">
                                                32 min
                                            </div>
                                            <i className="bi bi-circle-fill activity-badge text-success align-self-start" />
                                            <div className="activity-content">
                                                Quia quae rerum{" "}
                                                <a
                                                    href="#"
                                                    className="fw-bold text-dark"
                                                >
                                                    explicabo officiis
                                                </a>{" "}
                                                beatae
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div className="card">
                                <div className="card-body pb-0">
                                    <h5 className="card-title">
                                        Announcements
                                    </h5>
                                    <div className="news">
                                        <div className="post-item clearfix">
                                            <img src="img/news-1.jpg" alt="" />
                                            <h4>
                                                <a href="#">
                                                    Nihil blanditiis at in nihil
                                                    autem
                                                </a>
                                            </h4>
                                            <p>
                                                Sit recusandae non aspernatur
                                                laboriosam. Quia enim eligendi
                                                sed ut harum...
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </main>
        </AuthenticatedLayout>
    );
}
