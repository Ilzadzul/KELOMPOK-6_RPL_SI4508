@section('content')
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-12 mb-lg-0 mb-4">
                <div class="card">
                    <div class="card-header pb-0 p-3">
                        <h6 class="mb-0">Skill Test Overview</h6>
                    </div>
                    <div class="table-responsive">
                        <table class="table align-items-center">
                            <thead>
                                <tr>
                                    <th scope="col">Test Name</th>
                                    <th scope="col">Difficulty</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1 align-items-center">
                                            <div class="ms-4">
                                                <h6 class="text-sm mb-0">HTML Basics</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-gradient-success">Easy</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-gradient-info">In Progress</span>
                                    </td>
                                    <td>
                                        <button class="btn btn-outline-success btn-sm">Start Test</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1 align-items-center">
                                            <div class="ms-4">
                                                <h6 class="text-sm mb-0">JavaScript Fundamentals</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-gradient-warning">Intermediate</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-gradient-danger">Not Started</span>
                                    </td>
                                    <td>
                                        <button class="btn btn-outline-success btn-sm">Start Test</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <div class="d-flex px-2 py-1 align-items-center">
                                            <div class="ms-4">
                                                <h6 class="text-sm mb-0">Python Basics</h6>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-gradient-danger">Difficult</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-gradient-success">Completed</span>
                                    </td>
                                    <td>
                                        <button class="btn btn-outline-secondary btn-sm">Review Test</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

