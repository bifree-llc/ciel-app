import React from 'react';
import ReactDOM from 'react-dom/client';
import Header from './Header';
import Button from './Button';

function Example() {
    return (
        <div className="container">
            <div className="row justify-content-center">
                <div className="col-md-8">
                    <div className="card mb-12">
                        <div className="card-header">Example Component</div>

                        <div className="card-body font-bold">この日本語がすぐ出たら同期してるってことか！</div>
                        
                    </div>
                </div>
            </div>
        </div>
    );
}

export default Example;

if (document.getElementById('app')) {
    const Index = ReactDOM.createRoot(document.getElementById("app"));

    Index.render(
        <React.StrictMode>
            <Header/>
            <Example/>
            <Button/>
        </React.StrictMode>
    )
}
