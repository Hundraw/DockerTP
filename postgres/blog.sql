CREATE TABLE IF NOT EXISTS role (
    id VARCHAR(50) PRIMARY KEY UNIQUE NOT NULL
);

CREATE TABLE IF NOT EXISTS users (
    id VARCHAR(50) PRIMARY KEY UNIQUE NOT NULL,
    name VARCHAR(16) UNIQUE NOT NULL,
    password VARCHAR(255) UNIQUE NOT NULL,

    role_id VARCHAR(50) NOT NULL,
    CONSTRAINT fk_role
        FOREIGN KEY (role_id)
        REFERENCES role(id)
);

CREATE TABLE IF NOT EXISTS article (
    id SERIAL PRIMARY KEY UNIQUE NOT NULL,
    title VARCHAR(255) UNIQUE NOT NULL,
    content TEXT UNIQUE NOT NULL,

    author_id VARCHAR(50) NOT NULL,
    CONSTRAINT fk_author
        FOREIGN KEY (author_id)
        REFERENCES users(id)
);

CREATE TABLE IF NOT EXISTS comment (
    id SERIAL PRIMARY KEY UNIQUE NOT NULL,
    content TEXT UNIQUE NOT NULL,

    article_id INT NOT NULL,
    CONSTRAINT fk_article
        FOREIGN KEY (article_id)
        REFERENCES article(id),

    author_id VARCHAR(50) NOT NULL,
    CONSTRAINT fk_author
        FOREIGN KEY (author_id)
        REFERENCES users(id)
);

INSERT INTO role(id) VALUES('admin');
INSERT INTO role(id) VALUES('user');

INSERT INTO users(id, name, password, role_id)
VALUES('chauvel.dimitri@posteo.net', 'admin', 'password', 'admin');
