CREATE DATABASE epiz_30427948_ficha CHARACTER SET UTF8;
USE epiz_30427948_ficha;

CREATE TABLE IF NOT EXISTS DetalhePessoal
(
	ID_DPessoal INT NOT NULL,
	Nome_DPessoal VARCHAR(50) NOT NULL,
    Jogador_DPessoal VARCHAR(50) NOT NULL,
    Ocupaco_DPessoal VARCHAR(50) NOT NULL,
    Idade_DPessoal VARCHAR(2) NOT NULL,
    Genero_DPessoal VARCHAR(20) NOT NULL,
    Nascimento_DPessoal VARCHAR(50) NOT NULL,
    Residencia_DPessoal VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS Interface
(
	ID_Interface INT NOT NULL,
	Imagem_Interface LONGBLOB,
    Uploaded_Interface DATETIME,
    VidaMax_Interface INT NOT NULL,
    VidaAt_Interface INT NOT NULL,
    SanidadeMax_Interface INT NOT NULL,
	SanidadeAt_Interface INT NOT NULL,
    OcultismoMax_Interface INT NOT NULL,
    OcultismoAt_Interface INT NOT NULL,
	DanoEx_Interface INT NOT NULL,
    Corpo_Interface INT NOT NULL,
    ExposicaoP_Interface INT NOT NULL
);

CREATE TABLE IF NOT EXISTS Atributo
(
	ID_Atributo INT NOT NULL,
	Aparencia_Atributo INT NOT NULL,
    Constituicao_Atributo INT NOT NULL,
    Destreza_Atributo INT NOT NULL,
    Educacao_Atributo INT NOT NULL,
	Forca_Atributoe INT NOT NULL,
    Inteligencia_Atributo INT NOT NULL,
    Poder_Atributo INT NOT NULL,
	Sorte_Atributo INT NOT NULL,
    Movimento_Atributo INT NOT NULL,
    Tamanho_Atributo INT NOT NULL
);

CREATE TABLE IF NOT EXISTS Combate
(
	ID_Combate INT NOT NULL,
    Nome_Combate VARCHAR(50) NOT NULL,
    Tipo_Combate VARCHAR(50) NOT NULL,
    Dano_Combate INT NOT NULL,
    MunicaoAT_Combate INT NOT NULL,
    MunicaoMX_Combate INT NOT NULL,
    Ataque_Combate INT NOT NULL,
    Alcance_Combate INT NOT NULL,
    Defeito_Combate INT NOT NULL,
    Area_Combate VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS Pericias
(
	ID_Pericia INT NOT NULL,
	Antropologia_Pericia INT NOT NULL,
    Arco_Pericia INT NOT NULL,
    Pistola_Pericia INT NOT NULL,
    Rifle_Pericia INT NOT NULL,
    Arqueologia_Pericia INT NOT NULL,
    Arremessar_Pericia INT NOT NULL,
    Arte_Pericia INT NOT NULL,
    Avaliacao_Pericia INT NOT NULL,
    Charme_Pericia INT NOT NULL,
    Chaveiro_Pericia INT NOT NULL,
    Ciencia_Pericia INT NOT NULL,
    ConEle_Pericia INT NOT NULL,
    ConMec_Pericia INT NOT NULL,
    Contabilidade_Pericia INT NOT NULL,
    Direito_Pericia INT NOT NULL,
    Dirigir_Pericia INT NOT NULL,
    Disfarce_Pericia INT NOT NULL,
    Eletronica_Pericia INT NOT NULL,
    Encontrar_Pericia INT NOT NULL,
    Escalar_Pericia INT NOT NULL,
    Escutar_Pericia INT NOT NULL,
    Esquivar_Pericia INT NOT NULL,
    Furtividade_Pericia INT NOT NULL,
    Historia_Pericia INT NOT NULL,
    Intimidacao_Pericia INT NOT NULL,
    Labia_Pericia INT NOT NULL,
    LinguaNat_Pericia INT NOT NULL,
    LinguaOut_Pericia INT NOT NULL,
    Lutar_Pericia INT NOT NULL,
    Medicina_Pericia INT NOT NULL,
    MundoNat_Pericia INT NOT NULL,
    Natacao_Pericia INT NOT NULL,
    Navegacao_Pericia INT NOT NULL,
    Credito_Pericia INT NOT NULL,
    Ocultismo_Pericia INT NOT NULL,
    Maquinario_Pericia INT NOT NULL,
    Persuasao_Pericia INT NOT NULL,
    Pilotar_Pericia INT NOT NULL,
    Prestidigitacao_Pericia INT NOT NULL,
    Socorros_Pericia INT NOT NULL,
    Psicanalise_Pericia INT NOT NULL,
    Psicologia_Pericia INT NOT NULL,
    Rastrear_Pericia INT NOT NULL,
    Saltar_Pericia INT NOT NULL,
    Seduzir_Pericia INT NOT NULL,
    Sobrevivencia_Pericia INT NOT NULL,
    Biblioteca_Pericia INT NOT NULL,
    Computador_Pericia INT NOT NULL
);

CREATE TABLE IF NOT EXISTS Inventario
(
	ID_Inventario INT NOT NULL,
    PesoAT_Inventario INT NOT NULL,
    Nome_Inventario VARCHAR(50) NOT NULL,
    Tipo_Inventario VARCHAR(50) NOT NULL,
    Peso_Inventario INT NOT NULL
);

CREATE TABLE IF NOT EXISTS Ritual
(
	ID_Ritual INT NOT NULL,
    Nome_Ritual VARCHAR(50) NOT NULL,
    Elemento_Ritual VARCHAR(50) NOT NULL,
    Conjuracao_Ritual VARCHAR(50) NOT NULL,
    Efeito_Ritual VARCHAR(50) NOT NULL,
    Custo_Ritual INT NOT NULL
);

/*Execução de PK e FK*/
ALTER TABLE DetalhePessoal
ADD CONSTRAINT PK_COMBATE PRIMARY KEY AUTO_INCREMENT(ID_DPessoal);

ALTER TABLE Interface
ADD CONSTRAINT PK_INTERFACE PRIMARY KEY AUTO_INCREMENT(ID_Interface);

ALTER TABLE Atributo
ADD CONSTRAINT PK_ATRIBUTO PRIMARY KEY AUTO_INCREMENT(ID_Atributo);

ALTER TABLE Combate
ADD CONSTRAINT PK_COMBATE PRIMARY KEY AUTO_INCREMENT(ID_Combate);

ALTER TABLE Pericias
ADD CONSTRAINT PK_PERICIA PRIMARY KEY AUTO_INCREMENT(ID_Pericia);

ALTER TABLE Inventario
ADD CONSTRAINT PK_INVENTARIO PRIMARY KEY AUTO_INCREMENT(ID_Inventario);

ALTER TABLE Ritual
ADD CONSTRAINT PK_RITUAL PRIMARY KEY AUTO_INCREMENT(ID_Ritual);
