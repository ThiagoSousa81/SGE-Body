
-- --------------------------------------------------------

--
-- Estrutura para tabela `PRECIFICACAO`
--

CREATE TABLE `PRECIFICACAO` (
  `FK_USER_ID_USER` int(11) DEFAULT NULL,
  `FK_PRODUCT_ID_PRODUCT` int(11) DEFAULT NULL,
  `DATA_EDICAO` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `PRODUCT`
--

CREATE TABLE `PRODUCT` (
  `ID_PRODUCT` int(11) NOT NULL,
  `NOME_PRODUCT` varchar(500) DEFAULT NULL,
  `PV_PRODUCT` float DEFAULT NULL,
  `CMV_PRODUCT` float DEFAULT NULL,
  `FRETE_PRODUCT` float DEFAULT NULL,
  `TAXA_CARTAO_PRODUCT` float DEFAULT NULL,
  `PORCENT_IMPOSTO_PRODUCT` float DEFAULT NULL,
  `IMPOSTO_PRODUCT` float DEFAULT NULL,
  `PORCENT_COMISSAO_PRODUCT` float DEFAULT NULL,
  `COMISSAO_PRODUCT` float DEFAULT NULL,
  `TOTAL_CUSTO_PRODUCT` float DEFAULT NULL,
  `MARGEM_LUCRO_PRODUCT` float DEFAULT NULL,
  `PERCENT_MARGEM_LUCRO_PRODUCT` float DEFAULT NULL,
  `PERCENT_MARGEM_LUCRO_DES_PRODUCT` float DEFAULT NULL,
  `MARGEM_LUCRO_DES_PRODUCT` float DEFAULT NULL,
  `FC_PRODUCT` float DEFAULT NULL,
  `VALOR_VENDA_PRODUCT` float DEFAULT NULL,
  `MARGEM_MINIMA_PRODUCT` float DEFAULT NULL,
  `PERCENT_MARGEM_MINIMA_PRODUCT` float DEFAULT NULL,
  `CPA_PRODUCT` float DEFAULT NULL,
  `ROAS_PRODUCT` float DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura para tabela `USER`
--

CREATE TABLE `USER` (
  `ID_USER` int(11) NOT NULL,
  `NOME_USER` varchar(50) DEFAULT NULL,
  `EMAIL_USER` varchar(50) DEFAULT NULL,
  `HASH_USER` varchar(40) DEFAULT NULL,
  `NIVEL_USER` varchar(10) DEFAULT NULL,
  `DATA_USER` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `USER`
--

INSERT INTO `USER` (`ID_USER`, `NOME_USER`, `EMAIL_USER`, `HASH_USER`, `NIVEL_USER`, `DATA_USER`) VALUES
(0, 'QWRtaW5pc3RyYWRvcg==', 'admin', 'f865b53623b121fd34ee5426c792e5c33af8c227', 'Admin', '2023-12-17');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `PRECIFICACAO`
--
ALTER TABLE `PRECIFICACAO`
  ADD KEY `FK_PRECIFICACAO_1` (`FK_USER_ID_USER`),
  ADD KEY `FK_PRECIFICACAO_2` (`FK_PRODUCT_ID_PRODUCT`);

--
-- Índices de tabela `PRODUCT`
--
ALTER TABLE `PRODUCT`
  ADD PRIMARY KEY (`ID_PRODUCT`);

--
-- Índices de tabela `USER`
--
ALTER TABLE `USER`
  ADD PRIMARY KEY (`ID_USER`);
COMMIT;
