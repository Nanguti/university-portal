import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { Link } from "@inertiajs/react";
import { Head } from "@inertiajs/react";
const Award = ({ auth, award }) => {
    console.log(award);
    return (
        <>
            <AuthenticatedLayout
                user={auth.user}
                header={
                    <h2 className="font-semibold text-xl text-gray-800 leading-tight">
                        Award
                    </h2>
                }
            >
                <Head title="Award" />
                <main id="main" className="main">
                    <div className="pagetitle">
                        <h1>Award</h1>
                        <nav>
                            <ol className="breadcrumb">
                                <li className="breadcrumb-item">
                                    <Link href={route("dashboard")}>Home</Link>
                                </li>
                                <li className="breadcrumb-item active">
                                    Award
                                </li>
                            </ol>
                        </nav>
                    </div>

                    <section className="section dashboard">
                        <div className="row">
                            <div className="col-lg-8">
                                <div className="row">
                                    <div className="col-xxl-4 col-md-12">
                                        <div className="card info-card sales-card">
                                            <div className="card-body">
                                                <h5 className="card-title">
                                                    Average Score:{" "}
                                                    {award.averagePercentage} /
                                                    100
                                                </h5>
                                                <div className="d-flex align-items-center">
                                                    <div className="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                                        <i className="bi bi-award-fill" />
                                                    </div>
                                                    <div className="ps-3">
                                                        <h6>{award.award}</h6>
                                                        <span className="text-success small pt-1 fw-bold">
                                                            {award.units}
                                                        </span>{" "}
                                                        <span className="text-muted small pt-2 ps-1">
                                                            Units
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </main>
            </AuthenticatedLayout>
        </>
    );
};

export default Award;
