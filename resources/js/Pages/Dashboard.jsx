import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Head } from "@inertiajs/react";

export default function Dashboard({
    auth,
    financialinformation,
    announcements,
    batch,
}) {
    console.log(batch[0]);
    const student_announcements = announcements.data;

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
                                    <div className="card info-card revenue-card">
                                        <div className="card-body">
                                            <h5 className="card-title">
                                                {batch[0].course.name}
                                                <span></span>
                                            </h5>
                                            <div className="d-flex align-items-center">
                                                <div className="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                    <i className="bi bi-book-half" />
                                                </div>
                                                <div className="ps-3">
                                                    <h6>3.2</h6>
                                                    <span className="text-success small pt-1 fw-bold">
                                                        {batch[0].name}
                                                    </span>{" "}
                                                    <span className="text-muted small pt-2 ps-1">
                                                        Completion Date:{" "}
                                                        {batch[0].end_date.substring(
                                                            0,
                                                            10
                                                        )}
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                            </div>
                        </div>

                        <div className="col-lg-4">
                            <div className="card">
                                <div className="card-body">
                                    <h5 className="card-title">
                                        Announcements
                                    </h5>
                                    {student_announcements.map(
                                        (announcement) => (
                                            <div
                                                key={announcement.id}
                                                className="activity"
                                            >
                                                <div className="activity-item d-flex">
                                                    <div className="activite-label">
                                                        32 min
                                                    </div>
                                                    <i className="bi bi-circle-fill activity-badge text-success align-self-start" />
                                                    <div className="activity-content">
                                                        {announcement.title}
                                                    </div>
                                                </div>
                                            </div>
                                        )
                                    )}
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
