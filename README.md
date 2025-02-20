# Another WordPress Theme for Developers

Another WordPress Theme for Developers (AWTD) é um tema WordPress moderno e otimizado, criado com **Sass, Bootstrap 5 e jQuery**, focado em desempenho e flexibilidade para desenvolvedores.

## 🚀 Recursos Principais
- 🔹 **Totalmente Responsivo** com **Bootstrap 5**
- 🎨 **Customizable Admin Page** para configurações do tema
- 🏗 **Custom Post Types** para **Projetos, Portfólio e Tecnologias**
- 💡 **Menus Dinâmicos** usando `wp_nav_menu()`
- 📂 **Estrutura Modular** com arquivos separados para melhor manutenção
- ⚡ **Sass + Compilação Automática**
- 📜 **Animações e efeitos** em jQuery (menus, carregamento de skills, etc.)

## 📂 Estrutura do Projeto
```
/another-wp-theme-for-devs
├── assets/
│   ├── css/           # Arquivos CSS compilados
│   ├── js/            # Scripts personalizados
│   ├── sass/          # Arquivos SASS (SCSS)
│   ├── images/        # Imagens do tema
├── includes/
│   ├── admin-page.php # Página de configurações no WP-Admin
│   ├── cpt-projects.php # Custom Post Type - Projects
│   ├── cpt-portfolios.php # Custom Post Type - Portfolio
│   ├── cpt-technologies.php # Custom Post Type - Technologies
├── template-parts/
│   ├── header.php     # Cabeçalho
│   ├── footer.php     # Rodapé
├── functions.php      # Funções principais do tema
├── front-page.php     # Página inicial personalizada
├── style.css         # Definições do tema (requerido pelo WordPress)
├── README.md         # Documentação do projeto
```

## 🛠️ Instalação
### 1️⃣ Clone o repositório:
```sh
git clone https://github.com/seu-usuario/another-wp-theme-for-devs.git
```
### 2️⃣ Mova para a pasta de temas do WordPress:
```sh
mv another-wp-theme-for-devs /wp-content/themes/
```
### 3️⃣ Ative o tema:
No painel do WordPress, vá até **Aparência > Temas** e ative o **Another WP Theme for Developers**.

## 🎨 Personalização
O tema conta com uma página de configurações dentro do painel WP-Admin:

📌 **Local:** `Aparência > Theme Options`

Lá você pode configurar:
- Nome e descrição do site
- Favicon (upload via WP Media Library)
- Links sociais (Email, LinkedIn, GitHub)

## 🔄 Compilação do SCSS
Se precisar editar os estilos do tema, utilize o **Sass**:
```sh
sass --watch assets/sass/main.scss assets/css/style.css
```

## 🏗 Custom Post Types (CPTs)
O tema vem com **3 CPTs** pré-configurados:
- **Projects** → Para listar projetos
- **Portfolio** → Para trabalhos do portfólio
- **Technologies** → Para habilidades e nível de proficiência (barra de progresso animada)

## ⚡ Scripts & Funcionalidades
- **Mobile Menu Customizado** com overlay e animação fade-in/out
- **Efeito de Digitação** no título principal
- **Progress Bars animadas** ao rolar a tela
- **Slick Slider** para seções de Projetos e WordPress Portfolio

## 📌 Melhorias Futuras
- 🔄 Modo escuro (Dark Mode)
- 📦 Integração com API externa para listar repositórios do GitHub
- 🚀 Melhorias de SEO e performance

## 🤝 Contribuição
Sinta-se à vontade para enviar **Pull Requests** ou abrir **Issues** caso encontre bugs ou queira sugerir melhorias!

## 📄 Licença
Este projeto está licenciado sob a **GNU v3 License**. Você pode usá-lo e modificá-lo livremente. 😊