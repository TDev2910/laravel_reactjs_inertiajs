import { Link } from "@inertiajs/react";
import "bootstrap/dist/css/bootstrap.min.css";

export default function Main({children}) {
    return <div className="container py-3">
        <div className="row">
            <div className="col-3">
                <h3>Menu</h3>
                <ul>
                    <li>
                        <Link href="/">Home</Link>                     
                    </li>
                    <li>
                        <Link href="/about">About</Link>
                    </li>
                    <li>
                        <Link href="/users">Users</Link>
                    </li>
                    <li>
                        <Link href="/contact">Contact</Link>
                    </li>
                </ul>
            </div>
            <div className="col-9">{children}</div>
        </div>
    </div>;
}