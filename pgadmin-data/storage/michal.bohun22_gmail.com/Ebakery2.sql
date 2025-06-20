PGDMP  )    "        	        }            ebakery    17.5 (Debian 17.5-1.pgdg120+1)    17.5 $    I           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                           false            J           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                           false            K           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                           false            L           1262    16384    ebakery    DATABASE     r   CREATE DATABASE ebakery WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE_PROVIDER = libc LOCALE = 'en_US.utf8';
    DROP DATABASE ebakery;
                     ebakery    false            �            1259    16410 
   cart_items    TABLE     �   CREATE TABLE public.cart_items (
    id integer NOT NULL,
    user_id integer NOT NULL,
    product_id integer NOT NULL,
    quantity integer DEFAULT 1 NOT NULL,
    created_at timestamp without time zone DEFAULT CURRENT_TIMESTAMP
);
    DROP TABLE public.cart_items;
       public         heap r       ebakery    false            �            1259    16409    cart_items_id_seq    SEQUENCE     �   CREATE SEQUENCE public.cart_items_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 (   DROP SEQUENCE public.cart_items_id_seq;
       public               ebakery    false    222            M           0    0    cart_items_id_seq    SEQUENCE OWNED BY     G   ALTER SEQUENCE public.cart_items_id_seq OWNED BY public.cart_items.id;
          public               ebakery    false    221            �            1259    16429    orders    TABLE     N  CREATE TABLE public.orders (
    id integer NOT NULL,
    user_id integer NOT NULL,
    order_date timestamp without time zone DEFAULT CURRENT_TIMESTAMP,
    status character varying(50) DEFAULT 'nowe'::character varying,
    total_amount numeric(10,2) NOT NULL,
    payment_method character varying(50),
    shipping_address text
);
    DROP TABLE public.orders;
       public         heap r       ebakery    false            �            1259    16428    orders_id_seq    SEQUENCE     �   CREATE SEQUENCE public.orders_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 $   DROP SEQUENCE public.orders_id_seq;
       public               ebakery    false    224            N           0    0    orders_id_seq    SEQUENCE OWNED BY     ?   ALTER SEQUENCE public.orders_id_seq OWNED BY public.orders.id;
          public               ebakery    false    223            �            1259    16401    products    TABLE     j  CREATE TABLE public.products (
    id integer NOT NULL,
    name character varying(255) NOT NULL,
    image character varying(255),
    price numeric(10,2) NOT NULL,
    description text,
    ingredients text,
    cals integer,
    protein integer,
    carbs integer,
    fats integer,
    fiber integer,
    salt integer,
    category character varying(100)
);
    DROP TABLE public.products;
       public         heap r       ebakery    false            �            1259    16400    products_id_seq    SEQUENCE     �   CREATE SEQUENCE public.products_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 &   DROP SEQUENCE public.products_id_seq;
       public               ebakery    false    220            O           0    0    products_id_seq    SEQUENCE OWNED BY     C   ALTER SEQUENCE public.products_id_seq OWNED BY public.products.id;
          public               ebakery    false    219            �            1259    16390    users    TABLE     �   CREATE TABLE public.users (
    id integer NOT NULL,
    email character varying(255) NOT NULL,
    password character varying(255) NOT NULL,
    name character varying(255) NOT NULL,
    surname character varying(255) NOT NULL
);
    DROP TABLE public.users;
       public         heap r       ebakery    false            �            1259    16389    users_id_seq    SEQUENCE     �   CREATE SEQUENCE public.users_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 #   DROP SEQUENCE public.users_id_seq;
       public               ebakery    false    218            P           0    0    users_id_seq    SEQUENCE OWNED BY     =   ALTER SEQUENCE public.users_id_seq OWNED BY public.users.id;
          public               ebakery    false    217            �           2604    16413    cart_items id    DEFAULT     n   ALTER TABLE ONLY public.cart_items ALTER COLUMN id SET DEFAULT nextval('public.cart_items_id_seq'::regclass);
 <   ALTER TABLE public.cart_items ALTER COLUMN id DROP DEFAULT;
       public               ebakery    false    222    221    222            �           2604    16432 	   orders id    DEFAULT     f   ALTER TABLE ONLY public.orders ALTER COLUMN id SET DEFAULT nextval('public.orders_id_seq'::regclass);
 8   ALTER TABLE public.orders ALTER COLUMN id DROP DEFAULT;
       public               ebakery    false    224    223    224            �           2604    16404    products id    DEFAULT     j   ALTER TABLE ONLY public.products ALTER COLUMN id SET DEFAULT nextval('public.products_id_seq'::regclass);
 :   ALTER TABLE public.products ALTER COLUMN id DROP DEFAULT;
       public               ebakery    false    220    219    220            �           2604    16393    users id    DEFAULT     d   ALTER TABLE ONLY public.users ALTER COLUMN id SET DEFAULT nextval('public.users_id_seq'::regclass);
 7   ALTER TABLE public.users ALTER COLUMN id DROP DEFAULT;
       public               ebakery    false    218    217    218            D          0    16410 
   cart_items 
   TABLE DATA           S   COPY public.cart_items (id, user_id, product_id, quantity, created_at) FROM stdin;
    public               ebakery    false    222   �)       F          0    16429    orders 
   TABLE DATA           q   COPY public.orders (id, user_id, order_date, status, total_amount, payment_method, shipping_address) FROM stdin;
    public               ebakery    false    224   *       B          0    16401    products 
   TABLE DATA           �   COPY public.products (id, name, image, price, description, ingredients, cals, protein, carbs, fats, fiber, salt, category) FROM stdin;
    public               ebakery    false    220   !*       @          0    16390    users 
   TABLE DATA           C   COPY public.users (id, email, password, name, surname) FROM stdin;
    public               ebakery    false    218   ',       Q           0    0    cart_items_id_seq    SEQUENCE SET     @   SELECT pg_catalog.setval('public.cart_items_id_seq', 47, true);
          public               ebakery    false    221            R           0    0    orders_id_seq    SEQUENCE SET     <   SELECT pg_catalog.setval('public.orders_id_seq', 1, false);
          public               ebakery    false    223            S           0    0    products_id_seq    SEQUENCE SET     =   SELECT pg_catalog.setval('public.products_id_seq', 5, true);
          public               ebakery    false    219            T           0    0    users_id_seq    SEQUENCE SET     :   SELECT pg_catalog.setval('public.users_id_seq', 5, true);
          public               ebakery    false    217            �           2606    16417    cart_items cart_items_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.cart_items
    ADD CONSTRAINT cart_items_pkey PRIMARY KEY (id);
 D   ALTER TABLE ONLY public.cart_items DROP CONSTRAINT cart_items_pkey;
       public                 ebakery    false    222            �           2606    16438    orders orders_pkey 
   CONSTRAINT     P   ALTER TABLE ONLY public.orders
    ADD CONSTRAINT orders_pkey PRIMARY KEY (id);
 <   ALTER TABLE ONLY public.orders DROP CONSTRAINT orders_pkey;
       public                 ebakery    false    224            �           2606    16408    products products_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.products
    ADD CONSTRAINT products_pkey PRIMARY KEY (id);
 @   ALTER TABLE ONLY public.products DROP CONSTRAINT products_pkey;
       public                 ebakery    false    220            �           2606    16399    users users_email_key 
   CONSTRAINT     Q   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_email_key UNIQUE (email);
 ?   ALTER TABLE ONLY public.users DROP CONSTRAINT users_email_key;
       public                 ebakery    false    218            �           2606    16397    users users_pkey 
   CONSTRAINT     N   ALTER TABLE ONLY public.users
    ADD CONSTRAINT users_pkey PRIMARY KEY (id);
 :   ALTER TABLE ONLY public.users DROP CONSTRAINT users_pkey;
       public                 ebakery    false    218            �           2606    16423 %   cart_items cart_items_product_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.cart_items
    ADD CONSTRAINT cart_items_product_id_fkey FOREIGN KEY (product_id) REFERENCES public.products(id) ON DELETE CASCADE;
 O   ALTER TABLE ONLY public.cart_items DROP CONSTRAINT cart_items_product_id_fkey;
       public               ebakery    false    3238    220    222            �           2606    16418 "   cart_items cart_items_user_id_fkey    FK CONSTRAINT     �   ALTER TABLE ONLY public.cart_items
    ADD CONSTRAINT cart_items_user_id_fkey FOREIGN KEY (user_id) REFERENCES public.users(id) ON DELETE CASCADE;
 L   ALTER TABLE ONLY public.cart_items DROP CONSTRAINT cart_items_user_id_fkey;
       public               ebakery    false    3236    218    222            �           2606    16439    orders fk_user    FK CONSTRAINT        ALTER TABLE ONLY public.orders
    ADD CONSTRAINT fk_user FOREIGN KEY (user_id) REFERENCES public.users(id) ON DELETE CASCADE;
 8   ALTER TABLE ONLY public.orders DROP CONSTRAINT fk_user;
       public               ebakery    false    218    3236    224            D   C   x�Eʱ !�������Gv��>$�[�bjN�������G�?�~s���� g'��	3h      F      x������ � �      B   �  x�u��n�0���S��(��m�۪�J�՞V{���86vd!8F�C������^;H�Ү�13���=x�j�ƽo�1�[A�n��n��,^�����ɛ�i0��FC��ʑ6M�-���1�����(�am�ǻ�a�lw*���$��=,3X@��P3J�k�8���M����Y��$�'������-��&e!��'���H*����$�,�Z(�v�S��WJ
��2H`�`��|-D���_�Z[7�b+�*%sZ-J.}��}�Z�O�\O�]�
�$p�{�KB�l`)s������ػSx����rA���$�9|RȮ�f�(�e�־?�A��T��`)rk�l���x����cn�����z<��DE5�w�ӡM߆�)R|:�zT3�������"��08?��*s�ꄈR�n7�=���L^y%!w�{�&�i������r�����1?ѫ�w�x!�;�۸6������o�L䟽�.�^N��l�K����(��2�      @   �   x�e�Ar�0  �sx�P��f�RE�j�@(`F1����8Ӟ���ŀ�i3�4ťFh������@ER�T"Ca���4r��;Ro�&ڪb� e���L�F���["{K$p�����b����~v>��x�g������'U0/�Z,���&�[��x6�qw�6�5a�|*ܬNS��Ae����i��ȩ�r�d&�ٚ� ��t�������%��G����p�X��n����*��İ\=     