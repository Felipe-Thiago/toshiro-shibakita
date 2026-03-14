CREATE TABLE dados_compra (
    CompraID int not null,
    Nome_Cliente varchar(50) not null,
    CPF varchar(14),
    Cidade varchar(50),
    Valor decimal(10, 2) not null,
    OpcaoPagamento varchar(50),
    Data_Compra DATETIME DEFAULT CURRENT_TIMESTAMP,
    Host varchar(50)
);
