import { useState } from "react";
import { router, usePage } from "@inertiajs/react";

export default function Create() 
{
    const [form, setForm] = useState({});  
    const {errors} = usePage().props; 
    const handleSubmit = (e) => {
        e.preventDefault();   
        console.log(form);   
        router.post("/users/create", form);
    };
    const handleChangeValue = (e) => {
        setForm({
            ...form,
            [e.target.name]: e.target.value
        });
    }
    console.log(errors);
    return <>
    <h2>Create User</h2>
    <form action="" onSubmit={handleSubmit}>
        <div className="mb-3">
            <label htmlFor="name" className="form-label">
                Name
            </label>
            <input 
            type="text" 
            className="form-control" 
            id="name" 
            name="name" 
            placeholder="Name..."
            onChange={handleChangeValue}/>
            {errors?.name && (
                <span className="text-danger">{errors.name}</span> //hiển thi lỗi nhập
            )}
        </div>
        <div className="mb-3">
            <label htmlFor="email" className="form-label">
                Email
            </label>
            <input type="email" 
            className="form-control" 
            id="email" 
            name="email" 
            placeholder="Email..." 
            onChange={handleChangeValue}/>
            {errors?.email && (
                <span className="text-danger">{errors.email}</span> //hiển thi lỗi nhập
            )}
        </div>
        <div className="mb-3">
            <label htmlFor="password" className="form-label">
                Password
            </label>
            <input type="password" 
            className="form-control" 
            id="password" 
            name="password" 
            placeholder="Password..."
            onChange={handleChangeValue}/>
            {errors?.password && (
                <span className="text-danger">{errors.password}</span> //hiển thi lỗi nhập
            )}
        </div>
        <button type="submit" className="btn btn-primary">Save</button>
    </form>
    </>;
}

