--
-- PostgreSQL database dump
--

-- Dumped from database version 13.3
-- Dumped by pg_dump version 13.3

-- Started on 2024-12-19 11:37:52

SET statement_timeout = 0;
SET lock_timeout = 0;
SET idle_in_transaction_session_timeout = 0;
SET client_encoding = 'UTF8';
SET standard_conforming_strings = on;
SELECT pg_catalog.set_config('search_path', '', false);
SET check_function_bodies = false;
SET xmloption = content;
SET client_min_messages = warning;
SET row_security = off;

SET default_tablespace = '';

SET default_table_access_method = heap;

--
-- TOC entry 203 (class 1259 OID 24871)
-- Name: categoria; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.categoria (
    id integer NOT NULL,
    descricao character varying(100),
    imagem character(50)
);


ALTER TABLE public.categoria OWNER TO postgres;

--
-- TOC entry 202 (class 1259 OID 24869)
-- Name: categoria_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.categoria_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.categoria_id_seq OWNER TO postgres;

--
-- TOC entry 3013 (class 0 OID 0)
-- Dependencies: 202
-- Name: categoria_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.categoria_id_seq OWNED BY public.categoria.id;


--
-- TOC entry 200 (class 1259 OID 24729)
-- Name: noticia; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.noticia (
    id integer NOT NULL,
    titulo character varying(100),
    data date,
    autor character varying(100),
    categoria_id integer,
    imagem character(50)
);


ALTER TABLE public.noticia OWNER TO postgres;

--
-- TOC entry 201 (class 1259 OID 24732)
-- Name: noticia_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.noticia_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.noticia_id_seq OWNER TO postgres;

--
-- TOC entry 3014 (class 0 OID 0)
-- Dependencies: 201
-- Name: noticia_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.noticia_id_seq OWNED BY public.noticia.id;


--
-- TOC entry 205 (class 1259 OID 33285)
-- Name: usuario; Type: TABLE; Schema: public; Owner: postgres
--

CREATE TABLE public.usuario (
    id integer NOT NULL,
    email character varying(100) NOT NULL,
    senha character varying(100)
);


ALTER TABLE public.usuario OWNER TO postgres;

--
-- TOC entry 204 (class 1259 OID 33283)
-- Name: usuario_id_seq; Type: SEQUENCE; Schema: public; Owner: postgres
--

CREATE SEQUENCE public.usuario_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;


ALTER TABLE public.usuario_id_seq OWNER TO postgres;

--
-- TOC entry 3015 (class 0 OID 0)
-- Dependencies: 204
-- Name: usuario_id_seq; Type: SEQUENCE OWNED BY; Schema: public; Owner: postgres
--

ALTER SEQUENCE public.usuario_id_seq OWNED BY public.usuario.id;


--
-- TOC entry 2863 (class 2604 OID 24874)
-- Name: categoria id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.categoria ALTER COLUMN id SET DEFAULT nextval('public.categoria_id_seq'::regclass);


--
-- TOC entry 2862 (class 2604 OID 24734)
-- Name: noticia id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.noticia ALTER COLUMN id SET DEFAULT nextval('public.noticia_id_seq'::regclass);


--
-- TOC entry 2864 (class 2604 OID 33288)
-- Name: usuario id; Type: DEFAULT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.usuario ALTER COLUMN id SET DEFAULT nextval('public.usuario_id_seq'::regclass);


--
-- TOC entry 3005 (class 0 OID 24871)
-- Dependencies: 203
-- Data for Name: categoria; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.categoria (id, descricao, imagem) VALUES (5, 'Finanças e Investimentos', 'voggdMQL7Y3Rqi1QIkOnUw6q3yD6RERRJDobaZqt.jpg      ');
INSERT INTO public.categoria (id, descricao, imagem) VALUES (17, 'Cultura e Diversão', 'LRYpbrATzIVWF0oeZyTbpUvEXkzhlwQdrRs1azEl.png      ');
INSERT INTO public.categoria (id, descricao, imagem) VALUES (8, 'Arte e Entretenimento', 'koCkthXMcfz4EcmUE1jm1AWqHyx30mqQokNi49E0.jpg      ');
INSERT INTO public.categoria (id, descricao, imagem) VALUES (4, 'Saúde e Bem Estar', 'gKdFUSPmb2PDXSFSHTiNdOwmJrZ0SLKAlUHno8mQ.jpg      ');
INSERT INTO public.categoria (id, descricao, imagem) VALUES (14, 'Esporte e Competição', '5w6GGeQLzsJHkdguKXT7IWgMRzN1PnLkiLaxjxHW.webp     ');


--
-- TOC entry 3002 (class 0 OID 24729)
-- Dependencies: 200
-- Data for Name: noticia; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.noticia (id, titulo, data, autor, categoria_id, imagem) VALUES (26, 'Botafogo quase campeão, se não dependesse do São Paulo', '2024-12-05', 'Tino Marco', 14, 'TgRhhV0mser8nWNZ1EgBttFkDRsxgAbLyZ9JLJbN.jpg      ');
INSERT INTO public.noticia (id, titulo, data, autor, categoria_id, imagem) VALUES (20, 'Magazine Luiza investe 1 bilhão em propaganda', '2024-10-17', 'Luciano Hulk', 4, 'G729qRfnU5zydFRtsj7vt5iVn5Yk2LDdVLZBVX8A.jpg      ');
INSERT INTO public.noticia (id, titulo, data, autor, categoria_id, imagem) VALUES (3, 'IA vai ajudar os desenvolvedores a criarem sistemas mais seguros', '2024-10-02', 'Bill Gates', 8, 'wnbyPheXlt9sVsUp7LygsPNamW40vT8l19518MKH.jpg      ');
INSERT INTO public.noticia (id, titulo, data, autor, categoria_id, imagem) VALUES (11, 'O Circo chegou e está sendo um sucesso de público', '2024-10-01', 'Secretaria da Cultura', 5, 'uFiPkWNyPwZrem3TApOnu23f5Nw77ySuNTupb9p8.jpg      ');


--
-- TOC entry 3007 (class 0 OID 33285)
-- Dependencies: 205
-- Data for Name: usuario; Type: TABLE DATA; Schema: public; Owner: postgres
--

INSERT INTO public.usuario (id, email, senha) VALUES (1, 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b');


--
-- TOC entry 3016 (class 0 OID 0)
-- Dependencies: 202
-- Name: categoria_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.categoria_id_seq', 17, true);


--
-- TOC entry 3017 (class 0 OID 0)
-- Dependencies: 201
-- Name: noticia_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.noticia_id_seq', 27, true);


--
-- TOC entry 3018 (class 0 OID 0)
-- Dependencies: 204
-- Name: usuario_id_seq; Type: SEQUENCE SET; Schema: public; Owner: postgres
--

SELECT pg_catalog.setval('public.usuario_id_seq', 1, true);


--
-- TOC entry 2868 (class 2606 OID 24876)
-- Name: categoria categoria_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.categoria
    ADD CONSTRAINT categoria_pkey PRIMARY KEY (id);


--
-- TOC entry 2866 (class 2606 OID 24736)
-- Name: noticia noticia_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.noticia
    ADD CONSTRAINT noticia_pkey PRIMARY KEY (id);


--
-- TOC entry 2870 (class 2606 OID 33290)
-- Name: usuario usuario_pkey; Type: CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.usuario
    ADD CONSTRAINT usuario_pkey PRIMARY KEY (id);


--
-- TOC entry 2871 (class 2606 OID 33300)
-- Name: noticia fk_noticia_categoria; Type: FK CONSTRAINT; Schema: public; Owner: postgres
--

ALTER TABLE ONLY public.noticia
    ADD CONSTRAINT fk_noticia_categoria FOREIGN KEY (categoria_id) REFERENCES public.categoria(id) NOT VALID;


-- Completed on 2024-12-19 11:37:53

--
-- PostgreSQL database dump complete
--

