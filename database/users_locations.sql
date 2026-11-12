CREATE TABLE IF NOT EXISTS users_locations (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    user_id INT UNSIGNED NOT NULL,
    location POINT NOT NULL,
    time_location DATETIME NOT NULL,
    PRIMARY KEY (id),
    KEY fk_users_locations_users_idx (user_id),
    SPATIAL KEY location (location),
    CONSTRAINT fk_users_locations_users
        FOREIGN KEY (user_id) REFERENCES users (id)
        ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;
