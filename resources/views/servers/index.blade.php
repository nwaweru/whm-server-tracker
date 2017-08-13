@extends('layouts.master', ['menu' => 'servers'])

@section('title', 'Servers')

@section('content')

    <div>
        <div class="breadcrumb has-arrow-separator" aria-label="breadcrumbs">
            <ul>
                <li class="is-active">
                    <a href="{{ route('servers.index') }}">Servers</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="box">

        <!-- Main container -->
        <div>
            <nav class="level mb-3">
                <!-- Left side -->
                <div class="level-left">
                    <div class="level-item">

                    </div>
                </div>

                <!-- Right side -->
                <div class="level-right">
                    <p class="level-item"><strong>All</strong></p>
                    <p class="level-item"><a>Dedicated</a></p>
                    <p class="level-item"><a>Reseller</a></p>
                    <p class="level-item"><a>VPS</a></p>
                    <p class="level-item ml-2">
                        <a class="button">
                        <span class="icon is-small">
                            <i class="fa fa-plus"></i>
                        </span>
                            <span>
                            New
                        </span>
                        </a>
                    </p>
                </div>
            </nav>
        </div>

        <table class="table is-narrow is-fullwidth is-aligned-center">
            <thead>
                <tr class="no-hover">
                    <th>Server</th>
                    <th>Type</th>
                    <th>Accounts</th>
                    <th>Backups</th>
                    <th><abbr title="Disk Usage">Usage</abbr></th>
                    <th></th>
                </tr>
            </thead>
            <tfoot>
                <tr class="no-hover">
                    <td colspan="6">
                        <!-- Pagination -->
                        <nav class="pagination mt-1">
                            <a class="pagination-previous" title="This is the first page" disabled>Previous</a>
                            <a class="pagination-next">Next page</a>
                            <ul class="pagination-list">
                                <li>
                                    <a class="pagination-link is-current">1</a>
                                </li>
                                <li>
                                    <a class="pagination-link">2</a>
                                </li>
                                <li>
                                    <a class="pagination-link">3</a>
                                </li>
                            </ul>
                        </nav>
                    </td>
                </tr>
            </tfoot>
            <tbody>
            <tr>
                <td><a href="#">WebDesignsOkc.com</a></td>
                <td>VPS</td>
                <td>8</td>
                <td><span class="tag is-success is-rounded">Yes</span></td>
                <td>13%</td>
                <td>
                    <div class="field is-grouped is-pulled-right">
                        <p class="control">
                            <a href="#" class="button">
                                <span class="icon"><i class="fa fa-external-link"></i></span>
                            </a>
                        </p>
                        <p class="control">
                            <a class="button">
                                            <span class="icon">
                                              <i class="fa fa-ellipsis-h"></i>
                                            </span>
                            </a>
                        </p>
                    </div>
                </td>
            </tr>
            <tr>
                <td><a href="#">WebDesignerTulsa.com</a></td>
                <td>Dedicated</td>
                <td>18</td>
                <td><span class="tag is-danger is-rounded">No</span></td>
                <td>50%</td>
                <td>
                    <div class="field is-grouped is-pulled-right">
                        <p class="control">
                            <a href="#" class="button">
                                <span class="icon"><i class="fa fa-external-link"></i></span>
                            </a>
                        </p>
                        <p class="control">
                            <a class="button">
                                            <span class="icon">
                                              <i class="fa fa-ellipsis-h"></i>
                                            </span>
                            </a>
                        </p>
                    </div>
                </td>
            </tr>
            <tr>
                <td><a href="#">HostOklahoma.com</a></td>
                <td>VPS</td>
                <td>3</td>
                <td><span class="tag is-success is-rounded">Yes</span></td>
                <td>8%</td>
                <td>
                    <div class="field is-grouped is-pulled-right">
                        <p class="control">
                            <a href="#" class="button">
                                <span class="icon"><i class="fa fa-external-link"></i></span>
                            </a>
                        </p>
                        <p class="control">
                            <a class="button">
                                            <span class="icon">
                                              <i class="fa fa-ellipsis-h"></i>
                                            </span>
                            </a>
                        </p>
                    </div>
                </td>
            </tr>
            <tr>
                <td><a href="#">WebDesignerMoore.com</a></td>
                <td>Reseller</td>
                <td>n/a</td>
                <td><span class="tag is-danger is-rounded">No</span></td>
                <td>n/a</td>
                <td>
                    <div class="field is-grouped is-pulled-right">
                        <p class="control">
                            <a href="#" class="button">
                                <span class="icon"><i class="fa fa-external-link"></i></span>
                            </a>
                        </p>
                        <p class="control">
                            <a class="button">
                                            <span class="icon">
                                              <i class="fa fa-ellipsis-h"></i>
                                            </span>
                            </a>
                        </p>
                    </div>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="#">OkcHost.com</a>
                    <span class="tag is-warning">
                                    <span class="icon is-small">
                                        <i class="fa fa-exclamation"></i>
                                    </span>
                                    <span>No Token</span>
                                </span>
                </td>
                <td>Dedicated</td>
                <td>18</td>
                <td><span class="tag is-success is-rounded">Yes</span></td>
                <td>70%</td>
                <td>
                    <div class="field is-grouped is-pulled-right">
                        <p class="control">
                            <a href="#" class="button">
                                <span class="icon"><i class="fa fa-external-link"></i></span>
                            </a>
                        </p>
                        <p class="control">
                            <a class="button">
                                            <span class="icon">
                                              <i class="fa fa-ellipsis-h"></i>
                                            </span>
                            </a>
                        </p>
                    </div>
                </td>
            </tr>
            </tbody>
        </table>

        <!-- end box -->
    </div>

@endsection