function Header() {
  return (
    <header>
      <nav className="navbar navbar-expand-lg navbar-dark bg-dark">
        <div className="container">
          <a className="navbar-brand" href="/"><img src="/src/logo.webp" alt="Logo" style={{ borderRadius: '15px', maxWidth: '80px' }} /></a>
          <button className="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span className="navbar-toggler-icon"></span>
          </button>
          <div className="collapse navbar-collapse" id="navbarNav">
            <ul className="navbar-nav ms-auto">
             
              
              <li className="nav-item">
                <a className="nav-link" href="/exit.php"><button type="button"
                  className="btn btn-danger btn-bg w-100">SAIR</button></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </header>
  );
}

