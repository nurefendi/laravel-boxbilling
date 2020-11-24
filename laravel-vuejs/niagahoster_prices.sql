create table prices
(
    id             bigint unsigned auto_increment
        primary key,
    label_package  varchar(50)                  not null,
    real_price     bigint                       not null,
    discount_price bigint                       null,
    total_users    int                          not null,
    features       longtext collate utf8mb4_bin null,
    is_best_seller tinyint(1) default 0         not null,
    constraint features
        check (json_valid(`features`))
)
    collate = utf8mb4_unicode_ci;

INSERT INTO niagahoster.prices (id, label_package, real_price, discount_price, total_users, features, is_best_seller) VALUES (5, 'bayi', 19900, 14900, 938, '["<b>0.5X RESOURCE POWER<\\/b>","<b>500 MB<\\/b> Disk Space","<b>Unlimited<\\/b> Bandwidth","<b>Unlimited<\\/b> Databases","<b>1<\\/b> Domain","<b>Instant<\\/b> Backup","<b>Unlimited SSL<\\/b> Gratis Selamanya"]', 0);
INSERT INTO niagahoster.prices (id, label_package, real_price, discount_price, total_users, features, is_best_seller) VALUES (6, 'pelajar', 46900, 23450, 4168, '["<b>1X RESOURCE POWER<\\/b>","<b>Unlimited<\\/b> Disk Space","<b>Unlimited<\\/b> Bandwidth","<b>Unlimited<\\/b> POP3 Email","<b>Unlimited<\\/b> Databases","<b>10<\\/b> Addon Domains","<b>Instant<\\/b> Backup","<b>Domain<\\/b> Gratis Selamanya","<b>Unlimited SSL<\\/b> Gratis Selamanya"]', 0);
INSERT INTO niagahoster.prices (id, label_package, real_price, discount_price, total_users, features, is_best_seller) VALUES (7, 'personal', 58900, 38900, 10017, '["<b>2X RESOURCE POWER<\\/b>","<b>Unlimited<\\/b> Disk Space","<b>Unlimited<\\/b> Bandwidth","<b>Unlimited<\\/b> POP3 Email","<b>Unlimited<\\/b> Databases","<b>Unlimited<\\/b> Addon Domains","<b>Instant<\\/b> Backup","<b>Domain<\\/b> Gratis Selamanya","<b>Unlimited SSL<\\/b> Gratis Selamanya","<b>SpamAssasin<\\/b> Mail Protection"]', 1);
INSERT INTO niagahoster.prices (id, label_package, real_price, discount_price, total_users, features, is_best_seller) VALUES (8, 'bisnis', 109900, 65900, 3552, '["<b>3X RESOURCE POWER<\\/b>","<b>Unlimited<\\/b> Disk Space","<b>Unlimited<\\/b> Bandwidth","<b>Unlimited<\\/b> POP3 Email","<b>Unlimited<\\/b> Databases","<b>Unlimited<\\/b> Addon Domains","<b>Magic Auto<\\/b> Backup & Restore","<b>Domain<\\/b> Gratis Selamanya","<b>Unlimited SSL<\\/b> Gratis Selamanya","<b>Private<\\/b> Name Server","<b>Prioritas<\\/b> Layanan Support","<i class=''fa fa-star text-primary''><\\/i> <i class=''fa fa-star text-primary''><\\/i> <i class=''fa fa-star text-primary''><\\/i> <i class=''fa fa-star text-primary''><\\/i> <i class=''fa fa-star text-primary''><\\/i>","<b>SpamExpert<\\/b> Pro Mail Protection"]', 0);