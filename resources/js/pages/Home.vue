<template>
  <div class="gc-root" :class="{ scrolled }">

    <!-- ══════════════ CURSOR FOLLOWER ══════════════ -->
    <div class="gc-cursor" ref="cursorRef" aria-hidden="true"></div>
    <div class="gc-cursor-dot" ref="cursorDotRef" aria-hidden="true"></div>

    <!-- ══════════════ HEADER ══════════════ -->
    <header class="gc-header">
      <div class="gc-header__inner">
        <a href="#inicio" class="gc-logo" @click.prevent="scrollTo('#inicio')">
          <svg class="gc-logo__mark" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
            <defs>
              <linearGradient id="logoGrad" x1="0" y1="0" x2="1" y2="1">
                <stop offset="0%"   stop-color="#007BFF"/>
                <stop offset="100%" stop-color="#A3E635"/>
              </linearGradient>
            </defs>
            <path d="M24 3 L42 13.5 L42 34.5 L24 45 L6 34.5 L6 13.5 Z"
                  fill="none" stroke="url(#logoGrad)" stroke-width="2"/>
            <path d="M16 22 C16 17 19.5 14 24 14 C27.5 14 30.5 15.5 30.5 15.5 L26.5 18.5
                     C25.6 18 25 17.8 24 17.8 C21.5 17.8 19.8 19.5 19.8 21.5
                     L19.8 26.5 C19.8 28.5 21.5 30.2 24 30.2
                     C26 30.2 27.3 29 27.6 27.5 L25 27.5 L25 24.2 L31.5 24.2
                     L31.5 27 C31.5 31.5 28 34 24 34 C19.5 34 16 31 16 27 Z"
                  fill="url(#logoGrad)"/>
            <path d="M34 21 C34 18.2 32.2 16.5 30 17" stroke="url(#logoGrad)" stroke-width="2.2" stroke-linecap="round"/>
            <path d="M34 27 C34 29.8 32.2 31.5 30 31" stroke="url(#logoGrad)" stroke-width="2.2" stroke-linecap="round"/>
          </svg>
          <span class="gc-logo__text">GIONCORE</span>
        </a>

        <nav class="gc-nav" aria-label="Navegación principal">
          <ul class="gc-nav__list">
            <li v-for="link in navLinks" :key="link.id">
              <a :href="'#' + link.id" @click.prevent="scrollTo('#' + link.id)" class="gc-nav__link">
                {{ link.label }}
              </a>
            </li>
          </ul>
        </nav>

        <a href="#contacto" @click.prevent="scrollTo('#contacto')" class="gc-btn gc-btn--cta-nav">
          Contacto
        </a>

        <button class="gc-burger" @click="mobileOpen = !mobileOpen"
                :class="{ open: mobileOpen }" aria-label="Menú">
          <span></span><span></span><span></span>
        </button>
      </div>

      <div class="gc-mobile-drawer" :class="{ open: mobileOpen }">
        <a v-for="link in navLinks" :key="link.id"
           :href="'#' + link.id"
           @click.prevent="scrollTo('#' + link.id); mobileOpen = false">
          {{ link.label }}
        </a>
        <a href="#contacto" @click.prevent="scrollTo('#contacto'); mobileOpen = false"
           class="gc-btn gc-btn--primary">Contacto</a>
      </div>
    </header>

    <!-- ══════════════ HERO ══════════════ -->
    <section class="gc-hero" id="inicio" aria-label="Hero">
      <!-- Animated mesh background -->
      <div class="gc-hero__mesh" aria-hidden="true">
        <div class="gc-mesh-orb gc-mesh-orb--1"></div>
        <div class="gc-mesh-orb gc-mesh-orb--2"></div>
        <div class="gc-mesh-orb gc-mesh-orb--3"></div>
      </div>

      <!-- Grid lines -->
      <div class="gc-hero__grid" aria-hidden="true">
        <svg class="gc-hero__grid-svg" viewBox="0 0 1200 800" preserveAspectRatio="xMidYMid slice">
          <defs>
            <linearGradient id="patGrad" x1="0" y1="0" x2="1" y2="1">
              <stop offset="0%"   stop-color="#007BFF" stop-opacity="0.1"/>
              <stop offset="100%" stop-color="#A3E635" stop-opacity="0.04"/>
            </linearGradient>
          </defs>
          <g stroke="rgba(0,123,255,0.08)" stroke-width="1" fill="none">
            <polygon v-for="hex in hexGrid" :key="hex.id"
                     :points="hex.points" opacity="0.7"/>
          </g>
          <line x1="0" y1="300" x2="1200" y2="500" stroke="url(#patGrad)" stroke-width="1" opacity="0.3"/>
          <line x1="0" y1="600" x2="1200" y2="200" stroke="url(#patGrad)" stroke-width="0.5" opacity="0.2"/>
        </svg>
      </div>

      <!-- Animated scan line -->
      <div class="gc-scan-line" aria-hidden="true"></div>

      <div class="gc-hero__inner">
        <div class="gc-hero__content">
          <div class="gc-hero__eyebrow">
            <span class="gc-chip">
              <span class="gc-chip__dot"></span>
              Software serio para operaciones reales
            </span>
          </div>

          <h1 class="gc-hero__h1">
            <span class="gc-hero__h1-line">GIONCORE</span>
            <span class="gc-hero__h1-line gc-hero__h1--accent">Productos digitales</span>
            <span class="gc-hero__h1-line">con criterio empresarial</span>
          </h1>

          <p class="gc-hero__sub">
            Diseñamos plataformas SaaS, automatizaciones e inteligencia operativa para empresas que necesitan orden,
            evidencia y velocidad sin sacrificar confianza.
          </p>

          <div class="gc-hero__ctas">
            <a href="#servicios" @click.prevent="scrollTo('#servicios')" class="gc-btn gc-btn--primary">
              <span>Ver soluciones</span>
              <svg viewBox="0 0 20 20" fill="none" width="18">
                <path d="M4 10h12M11 5l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </a>
            <a href="#portfolio" @click.prevent="scrollTo('#portfolio')" class="gc-btn gc-btn--ghost">
              Ver productos
            </a>
          </div>

          <!-- Animated tech tags -->
          <div class="gc-hero__tags">
            <span v-for="(tag, i) in techTags" :key="tag"
                  class="gc-tech-tag"
                  :style="{ animationDelay: (0.8 + i * 0.1) + 's' }">
              {{ tag }}
            </span>
          </div>
        </div>

        <!-- Hero visual -->
        <div class="gc-hero__visual" ref="heroVisRef">
          <div class="gc-card gc-hero__card" ref="mainCard">
            <div class="gc-card__header">
              <div class="gc-dots"><span class="r"></span><span class="y"></span><span class="g"></span></div>
              <span class="gc-card__label">gioncore.cloud — control operativo</span>
              <span class="gc-card__status">
                <span class="gc-status-pulse"></span>LIVE
              </span>
            </div>
            <div class="gc-card__body">
              <div class="gc-chart-heading">Salud de productos activos</div>
              <div class="gc-bars">
                <div
                  v-for="(b, i) in dashBars"
                  :key="i"
                  class="gc-bar"
                  :style="{ height: b + '%', '--delay': (i * 0.08) + 's' }"
                  @mouseenter="hovBar = i"
                  @mouseleave="hovBar = null"
                  :class="{ active: hovBar === i }"
                ></div>
              </div>
              <div class="gc-kpis">
                <div class="gc-kpi" v-for="k in dashKpis" :key="k.lbl">
                  <span class="gc-kpi__val">{{ k.val }}</span>
                  <span class="gc-kpi__lbl">{{ k.lbl }}</span>
                </div>
              </div>

              <!-- Mini activity line -->
              <div class="gc-activity-bar">
                <div class="gc-activity-bar__fill"></div>
              </div>
              <div class="gc-activity-label">Sincronizando evidencias, reportes y flujos críticos</div>
            </div>
          </div>

          <!-- Floating badge 1 -->
          <div class="gc-float-badge gc-float-badge--tl" ref="badge1">
            <svg width="16" viewBox="0 0 16 16" fill="none">
              <circle cx="8" cy="8" r="6" stroke="#A3E635" stroke-width="1.5"/>
              <path d="M5 8l2 2 4-4" stroke="#A3E635" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
            <div>
              <span class="gc-float-badge__val">Auditable</span>
              <span class="gc-float-badge__lbl">Trazabilidad</span>
            </div>
          </div>

          <!-- Floating badge 2 -->
          <div class="gc-float-badge gc-float-badge--br" ref="badge2">
            <svg width="16" viewBox="0 0 16 16" fill="none">
              <path d="M2 12l3-3 3 3 5-6" stroke="#007BFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <div>
              <span class="gc-float-badge__val">3</span>
              <span class="gc-float-badge__lbl">Productos base</span>
            </div>
          </div>

          <!-- New floating badge 3 -->
          <div class="gc-float-badge gc-float-badge--ml" ref="badge3">
            <svg width="16" viewBox="0 0 16 16" fill="none">
              <circle cx="8" cy="8" r="3" stroke="#00c6ff" stroke-width="1.5"/>
              <path d="M8 2v2M8 12v2M2 8h2M12 8h2" stroke="#00c6ff" stroke-width="1.5" stroke-linecap="round"/>
            </svg>
            <div>
              <span class="gc-float-badge__val">IA útil</span>
              <span class="gc-float-badge__lbl">Sin humo</span>
            </div>
          </div>
        </div>
      </div>

      <div class="gc-scroll-hint" aria-hidden="true">
        <div class="gc-scroll-hint__wheel"></div>
        <span>Explorar</span>
      </div>
    </section>

    <!-- ══════════════ SERVICIOS ══════════════ -->
    <section class="gc-section gc-section--light" id="servicios" aria-label="Nuestros Servicios">
      <div class="gc-container">
        <div class="gc-section__head gc-reveal" style="text-align:center">
          <span class="gc-eyebrow">Capacidades</span>
          <h2 class="gc-section__h2">Construimos sistemas que <em>aguantan operación</em></h2>
          <p class="gc-section__desc">Nos enfocamos en flujos completos: usuarios, permisos, datos, reportes, automatización y mantenimiento.</p>
        </div>

        <div class="gc-services-grid">
          <div
            v-for="(svc, i) in services"
            :key="i"
            class="gc-service-card gc-reveal"
            :style="{ transitionDelay: (i * 0.12) + 's' }"
            :class="{ hovered: hovSvc === i, active: activeSvc === i }"
            @mouseenter="hovSvc = i"
            @mouseleave="hovSvc = null"
            @click="activeSvc = activeSvc === i ? null : i"
          >
            <div class="gc-service-card__number">0{{ i + 1 }}</div>
            <div class="gc-service-card__icon">
              <svg :viewBox="svc.vb" fill="none" width="32" height="32">
                <path v-for="(p, j) in svc.paths" :key="j"
                      :d="p.d" :stroke="p.stroke || '#007BFF'"
                      :fill="p.fill || 'none'"
                      stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </div>
            <h3 class="gc-service-card__title">{{ svc.title }}</h3>
            <p class="gc-service-card__desc">{{ svc.desc }}</p>
            <div v-if="activeSvc === i" class="gc-service-card__detail">
              <span>Ideal para:</span> {{ svc.fit }}
            </div>
            <div class="gc-service-card__cta">
              {{ activeSvc === i ? 'Ver menos' : 'Saber más' }}
              <svg viewBox="0 0 16 16" fill="none" width="14">
                <path d="M3 8h10M8 4l4 4-4 4" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
              </svg>
            </div>
            <div class="gc-service-card__border-anim"></div>
            <div class="gc-service-card__shine"></div>
          </div>
        </div>
      </div>
    </section>

    <!-- ══════════════ POR QUÉ GIONCORE ══════════════ -->
    <section class="gc-section gc-section--navy" id="porque" aria-label="Por qué GIONCORE">
      <div class="gc-container">
        <div class="gc-why-layout">
          <div class="gc-why-left gc-reveal">
            <span class="gc-eyebrow gc-eyebrow--light">Cómo trabajamos</span>
            <h2 class="gc-section__h2 gc-section__h2--light">
              Producto, ingeniería y operación en <span class="gc-accent-green">una misma conversación</span>
            </h2>
            <p class="gc-why-desc">
              Evitamos el show técnico innecesario. Primero entendemos el proceso, después diseñamos una solución medible,
              mantenible y lista para crecer con tu empresa.
            </p>
            <!-- Animated counter strip -->
            <div class="gc-counter-strip">
              <div class="gc-counter" v-for="c in counterStats" :key="c.label">
                <span class="gc-counter__num">{{ c.num }}</span>
                <span class="gc-counter__lbl">{{ c.label }}</span>
              </div>
            </div>
          </div>
          <div class="gc-why-right">
            <div
              v-for="(item, i) in whyItems"
              :key="i"
              class="gc-why-item gc-reveal"
              :style="{ transitionDelay: (i * 0.1) + 's' }"
            >
              <div class="gc-why-item__check">
                <svg viewBox="0 0 20 20" fill="none" width="14">
                  <path d="M4 10l4 4 8-8" stroke="#A3E635" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </div>
              <div>
                <h4 class="gc-why-item__title">{{ item.title }}</h4>
                <p class="gc-why-item__desc">{{ item.desc }}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ══════════════ PORTFOLIO ══════════════ -->
    <section class="gc-section gc-section--light" id="portfolio" aria-label="Productos">
      <div class="gc-container">
        <div class="gc-section__head gc-reveal">
          <span class="gc-eyebrow">Productos</span>
          <h2 class="gc-section__h2">Tres líneas de producto <em>listas para adaptar</em></h2>
          <p class="gc-section__desc">Soluciones con base técnica reutilizable y personalización por industria, proceso y nivel de madurez.</p>
        </div>

        <div class="gc-portfolio-grid">
          <div
            v-for="(proj, i) in portfolio"
            :key="i"
            class="gc-portfolio-card gc-reveal"
            :style="{ transitionDelay: (i * 0.1) + 's' }"
            @mouseenter="hovProj = i"
            @mouseleave="hovProj = null"
          >
            <div class="gc-portfolio-card__visual">
              <div class="gc-mockup">
                <div class="gc-mockup__bar">
                  <div class="gc-dots"><span class="r"></span><span class="y"></span><span class="g"></span></div>
                  <div class="gc-mockup__url">{{ proj.url }}</div>
                </div>
                <div class="gc-mockup__screen" :style="{ background: proj.screenBg }">
                  <div class="gc-mockup__content">
                    <div class="gc-mockup__mini-bars">
                      <div
                        v-for="(h, bi) in proj.bars"
                        :key="bi"
                        class="gc-mockup__mini-bar"
                        :style="{ height: h + '%', '--d': (bi * 0.05) + 's' }"
                      ></div>
                    </div>
                    <div class="gc-mockup__badge">{{ proj.badge }}</div>
                    <div class="gc-mockup__signal">
                      <span>{{ proj.signal }}</span>
                      <strong>{{ proj.metric }}</strong>
                    </div>
                  </div>
                </div>
              </div>
              <a
                class="gc-portfolio-card__overlay"
                :class="{ visible: hovProj === i }"
                :href="proj.link || '#'"
                :target="proj.link ? '_blank' : '_self'"
                rel="noopener"
              >
                <span class="gc-portfolio-card__overlay-text">Solicitar demo</span>
              </a>
            </div>

            <div class="gc-portfolio-card__info">
              <div class="gc-portfolio-card__meta">
                <span class="gc-tag">{{ proj.category }}</span>
                <span class="gc-tag gc-tag--year">{{ proj.year }}</span>
              </div>
              <h3 class="gc-portfolio-card__title">{{ proj.title }}</h3>
              <p class="gc-portfolio-card__desc">{{ proj.desc }}</p>
              <div class="gc-portfolio-card__stage">{{ proj.stage }}</div>
              <div class="gc-portfolio-card__results">
                <span v-for="r in proj.results" :key="r" class="gc-result">{{ r }}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ══════════════ SOBRE NOSOTROS ══════════════ -->
    <section class="gc-section gc-section--navy" id="sobre" aria-label="Sobre Nosotros">
      <div class="gc-container">
        <div class="gc-about-layout">
          <div class="gc-about-left gc-reveal">
            <span class="gc-eyebrow gc-eyebrow--light">Sobre Nosotros</span>
            <h2 class="gc-section__h2 gc-section__h2--light">
              Tecnología con <span class="gc-accent-green">responsabilidad</span>
            </h2>
            <p class="gc-about-desc">
              GIONCORE nace para construir software confiable, entendible y útil. Nuestra prioridad es que cada plataforma
              tenga lógica de negocio clara, seguridad básica bien resuelta y una experiencia que el equipo realmente pueda usar.
            </p>
            <p class="gc-about-desc">
              Trabajamos con una base propia para acelerar entregas, pero cada implementación se adapta a reglas reales:
              aprobaciones, evidencias, reportes, usuarios, permisos y operación diaria.
            </p>
            <a href="#contacto" @click.prevent="scrollTo('#contacto')" class="gc-btn gc-btn--primary gc-btn--green">
              Trabaja con nosotros
            </a>
          </div>
          <div class="gc-about-right gc-reveal">
            <div class="gc-team-grid">
              <div class="gc-team-card" v-for="(m, i) in team" :key="i"
                   :style="{ animationDelay: (i * 0.1) + 's' }">
                <div class="gc-team-card__av">{{ m.initials }}</div>
                <div class="gc-team-card__name">{{ m.name }}</div>
                <div class="gc-team-card__role">{{ m.role }}</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- ══════════════ CTA BAND ══════════════ -->
    <section class="gc-cta-band">
      <div class="gc-cta-band__bg" aria-hidden="true">
        <svg class="gc-cta-band__geo" viewBox="0 0 1200 200" preserveAspectRatio="none">
          <defs>
            <linearGradient id="ctaGrad" x1="0" y1="0" x2="1" y2="0">
              <stop offset="0%"   stop-color="#007BFF" stop-opacity="0.15"/>
              <stop offset="100%" stop-color="#A3E635" stop-opacity="0.1"/>
            </linearGradient>
          </defs>
          <polygon points="0,200 300,50 600,180 900,20 1200,150 1200,200" fill="url(#ctaGrad)"/>
        </svg>
      </div>
      <div class="gc-container gc-cta-band__inner">
        <h2 class="gc-cta-band__title">Convirtamos tu proceso en un producto confiable</h2>
        <p class="gc-cta-band__sub">Revisamos tu operación, detectamos riesgos y proponemos una primera versión con alcance claro.</p>
        <a href="#contacto" @click.prevent="scrollTo('#contacto')" class="gc-btn gc-btn--primary gc-btn--lg">
          <span>Agendar diagnóstico</span>
          <svg viewBox="0 0 20 20" fill="none" width="20">
            <path d="M4 10h12M11 5l5 5-5 5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </a>
      </div>
    </section>

    <!-- ══════════════ CONTACTO ══════════════ -->
    <section class="gc-section gc-section--light" id="contacto" aria-label="Contacto">
      <div class="gc-container">
        <div class="gc-contact-layout">
          <div class="gc-contact-info gc-reveal">
            <span class="gc-eyebrow">Contacto</span>
            <h2 class="gc-section__h2">Hablemos de tu <em>siguiente sistema</em></h2>
            <p class="gc-contact-desc">
              Cuéntanos qué proceso quieres ordenar, automatizar o convertir en SaaS. Te respondemos con una ruta concreta.
            </p>

            <div class="gc-contact-items">
              <div class="gc-contact-item" v-for="ci in contactItems" :key="ci.label">
                <div class="gc-contact-item__icon">
                  <svg :viewBox="ci.vb" fill="none" width="18">
                    <path v-for="p in ci.paths" :key="p" :d="p"
                          stroke="#007BFF" stroke-width="1.5" stroke-linecap="round"/>
                  </svg>
                </div>
                <div>
                  <span class="gc-contact-item__label">{{ ci.label }}</span>
                  <span class="gc-contact-item__val" :class="{ green: ci.green }">{{ ci.val }}</span>
                </div>
              </div>
            </div>

            <div class="gc-socials">
              <a v-for="s in socials" :key="s.name" :href="s.href"
                 class="gc-social" :aria-label="s.name" target="_blank" rel="noopener">
                <svg :viewBox="s.vb" width="18" height="18" fill="currentColor">
                  <path :d="s.path"/>
                </svg>
              </a>
            </div>
          </div>

          <div class="gc-form-wrap gc-reveal">
            <form class="gc-form" @submit.prevent="submitForm" novalidate>
              <div class="gc-form__row">
                <div class="gc-form__field">
                  <label for="f-name">Nombre completo *</label>
                  <input id="f-name" v-model="form.name" type="text"
                         placeholder="Tu nombre" required autocomplete="name"/>
                </div>
                <div class="gc-form__field">
                  <label for="f-email">Email *</label>
                  <input id="f-email" v-model="form.email" type="email"
                         placeholder="tu@empresa.com" required autocomplete="email"/>
                </div>
              </div>
              <div class="gc-form__field">
                <label for="f-company">Empresa</label>
                <input id="f-company" v-model="form.company" type="text"
                       placeholder="Nombre de tu empresa" autocomplete="organization"/>
              </div>
              <div class="gc-form__field">
                <label for="f-service">Servicio de interés</label>
                <select id="f-service" v-model="form.service">
                  <option value="">Selecciona un servicio</option>
                  <option value="concilia">Concilia Cloud</option>
                  <option value="nom35">NOM-35 Digital</option>
                  <option value="pulse">PulseOps</option>
                  <option value="custom">Software a la medida</option>
                  <option value="consulting">Diagnóstico técnico</option>
                </select>
              </div>
              <div class="gc-form__field">
                <label for="f-budget">Presupuesto estimado</label>
                <select id="f-budget" v-model="form.budget">
                  <option value="">Selecciona un rango</option>
                  <option value="10k-25k">$10,000 – $25,000 USD</option>
                  <option value="25k-50k">$25,000 – $50,000 USD</option>
                  <option value="50k-100k">$50,000 – $100,000 USD</option>
                  <option value="100k+">$100,000+ USD</option>
                </select>
              </div>
              <div class="gc-form__field">
                <label for="f-msg">Cuéntanos sobre tu proyecto *</label>
                <textarea id="f-msg" v-model="form.message" rows="4"
                          placeholder="Describe tu idea, problema o necesidad..." required></textarea>
              </div>
              <button type="submit" class="gc-btn gc-btn--primary gc-btn--full" :disabled="sending">
                <span v-if="!sending">Enviar Mensaje →</span>
                <span v-else class="gc-spinner-wrap">
                  <span class="gc-spinner"></span>Enviando…
                </span>
              </button>
              <Transition name="fade">
                <div v-if="formSuccess" class="gc-form__success" role="alert">
                  <svg viewBox="0 0 20 20" fill="none" width="20">
                    <circle cx="10" cy="10" r="8" stroke="#A3E635" stroke-width="1.5"/>
                    <path d="M7 10l2 2 4-4" stroke="#A3E635" stroke-width="1.5" stroke-linecap="round"/>
                  </svg>
                  Mensaje recibido. Te contactaremos en menos de 24 horas.
                </div>
              </Transition>
              <Transition name="fade">
                <div v-if="formError" class="gc-form__error" role="alert">
                  Algo salió mal. Por favor intenta de nuevo.
                </div>
              </Transition>
            </form>
          </div>
        </div>
      </div>
    </section>

    <!-- ══════════════ FOOTER ══════════════ -->
    <footer class="gc-footer" aria-label="Pie de página">
      <div class="gc-container">
        <div class="gc-footer__top">
          <div class="gc-footer__brand">
            <div class="gc-footer__logo">
              <svg width="32" viewBox="0 0 48 48" fill="none">
                <defs><linearGradient id="fLG" x1="0" y1="0" x2="1" y2="1"><stop offset="0%" stop-color="#007BFF"/><stop offset="100%" stop-color="#A3E635"/></linearGradient></defs>
                <path d="M24 3 L42 13.5 L42 34.5 L24 45 L6 34.5 L6 13.5 Z" fill="none" stroke="url(#fLG)" stroke-width="2"/>
                <path d="M16 22 C16 17 19.5 14 24 14 C27.5 14 30.5 15.5 30.5 15.5 L26.5 18.5 C25.6 18 25 17.8 24 17.8 C21.5 17.8 19.8 19.5 19.8 21.5 L19.8 26.5 C19.8 28.5 21.5 30.2 24 30.2 C26 30.2 27.3 29 27.6 27.5 L25 27.5 L25 24.2 L31.5 24.2 L31.5 27 C31.5 31.5 28 34 24 34 C19.5 34 16 31 16 27 Z" fill="url(#fLG)"/>
                <path d="M34 21 C34 18.2 32.2 16.5 30 17" stroke="url(#fLG)" stroke-width="2.2" stroke-linecap="round"/>
                <path d="M34 27 C34 29.8 32.2 31.5 30 31" stroke="url(#fLG)" stroke-width="2.2" stroke-linecap="round"/>
              </svg>
              <span>GIONCORE</span>
            </div>
            <p class="gc-footer__tagline">Productos digitales, SaaS y automatización operativa</p>
            <a href="mailto:javier@gioncore.com" class="gc-footer__email">javier@gioncore.com</a>
          </div>

          <div class="gc-footer__nav">
            <div class="gc-footer__col" v-for="col in footerCols" :key="col.title">
              <h4 class="gc-footer__col-title">{{ col.title }}</h4>
              <ul>
                <li v-for="link in col.links" :key="link.label">
                  <a :href="link.href" @click.prevent="link.scroll && scrollTo(link.href)">
                    {{ link.label }}
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>

        <div class="gc-footer__bottom">
          <p>© {{ new Date().getFullYear() }} GionCore. Todos los derechos reservados.</p>
          <!-- Discrete GDJG watermark -->
          <span class="gc-watermark">crafted by GDJG</span>
          <div class="gc-socials">
            <a v-for="s in socials" :key="s.name" :href="s.href"
               class="gc-social" :aria-label="s.name" target="_blank" rel="noopener">
              <svg :viewBox="s.vb" width="18" height="18" fill="currentColor">
                <path :d="s.path"/>
              </svg>
            </a>
          </div>
        </div>
      </div>
    </footer>

  </div>
</template>

<script setup>
import { ref, onMounted, onUnmounted } from 'vue'

// ──────────────────────────────────────────
// STATIC DATA
// ──────────────────────────────────────────

const navLinks = [
  { id: 'servicios', label: 'Servicios' },
  { id: 'portfolio',  label: 'Productos' },
  { id: 'porque',    label: 'Método' },
  { id: 'sobre',     label: 'Empresa' },
]

const techTags = ['Laravel', 'Vue', 'SaaS', 'Automatización', 'NOM-35', 'Conciliación', 'Operaciones']

const dashBars  = [48, 72, 61, 86, 68, 94, 79, 98]
const dashKpis  = [
  { val: '24h', lbl: 'Ruta inicial' },
  { val: '3x',  lbl: 'Base SaaS'  },
  { val: '100%',   lbl: 'Evidencia' },
]

const counterStats = [
  { num: '3', label: 'Productos base' },
  { num: '24h',  label: 'Respuesta inicial' },
  { num: '2026',  label: 'Stack actualizado' },
]

const hexGrid = (() => {
  const pts = []
  const r = 48
  const h = r * Math.sqrt(3)
  let id = 0
  for (let row = -1; row < 8; row++) {
    for (let col = -1; col < 12; col++) {
      const cx = col * r * 1.5 + (row % 2 === 0 ? 0 : r * 0.75)
      const cy = row * h * 0.5
      const p = []
      for (let a = 0; a < 6; a++) {
        const angle = (Math.PI / 180) * (60 * a - 30)
        p.push(`${(cx + r * Math.cos(angle)).toFixed(1)},${(cy + r * Math.sin(angle)).toFixed(1)}`)
      }
      pts.push({ id: id++, points: p.join(' ') })
    }
  }
  return pts
})()

const services = [
  {
    title: 'SaaS operativos',
    desc:  'Plataformas con usuarios, roles, permisos, paneles, estados, reportes y flujos pensados para operación diaria.',
    fit:   'empresas que quieren dejar hojas de cálculo, chats y capturas manuales para operar desde un sistema propio.',
    vb: '0 0 24 24',
    paths: [
      { d: 'M2 3h20v14H2zM8 21h8M12 17v4' },
      { d: 'M7 7h3M7 11h5' },
    ],
  },
  {
    title: 'Automatización confiable',
    desc:  'Flujos para conciliación, seguimiento, alertas, clasificación documental y generación de evidencias sin perder control humano.',
    fit:   'equipos que repiten tareas críticas y necesitan reducir errores sin depender de automatismos opacos.',
    vb: '0 0 24 24',
    paths: [
      { d: 'M12 3v3M12 18v3M3 12h3M18 12h3M5.6 5.6l2.1 2.1M16.3 16.3l2.1 2.1M18.4 5.6l-2.1 2.1M7.7 16.3l-2.1 2.1' },
      { d: 'M12 8a4 4 0 100 8 4 4 0 000-8z' },
    ],
  },
  {
    title: 'IA aplicada a procesos',
    desc:  'Asistentes, lectura de documentos y tableros inteligentes integrados a sistemas reales, con datos auditables.',
    fit:   'empresas que quieren usar IA para decidir mejor, no para decorar una presentación.',
    vb: '0 0 24 24',
    paths: [
      { d: 'M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z' },
    ],
  },

]

const whyItems = [
  { title: 'Diagnóstico antes de construir', desc: 'Mapeamos responsables, reglas, excepciones y evidencia necesaria antes de tocar código.' },
  { title: 'Entregas visibles',          desc: 'Trabajamos por módulos funcionales, con demos y decisiones documentadas para evitar sorpresas.' },
  { title: 'Seguridad desde la base', desc: 'Roles, permisos, validaciones, logs y respaldos se consideran parte del producto, no un extra.' },
  { title: 'Mantenimiento posible',      desc: 'Código ordenado, dependencias razonables y arquitectura lista para seguir evolucionando.' },
]

const portfolio = [
  {
    title:    'Concilia Cloud',
    category: 'FinOps',
    year:     '2026',
    desc:     'Plataforma para conciliar pagos, facturas, cuentas por cobrar y discrepancias con trazabilidad por responsable.',
    url:      'concilia.gioncore.com',
    badge:    'CONCILIA',
    signal:   'Casos cerrados',
    metric:   '92%',
    stage:    'Ideal para administración, cobranza, contabilidad y equipos que necesitan evidencia por movimiento.',
    screenBg: 'linear-gradient(135deg, #102033 0%, #14515b 48%, #1d6b58 100%)',
    bars:     [44, 58, 72, 61, 84, 76, 92, 88],
    results:  ['Matching de pagos', 'Bitácora por caso', 'Alertas de diferencia'],
  },
  {
    title:    'NOM-35 Digital',
    category: 'HR Compliance',
    year:     '2026',
    desc:     'Sistema para aplicar cuestionarios NOM-035, administrar centros de trabajo y generar reportes listos para auditoría.',
    url:      'nom35.gioncore.com',
    badge:    'NOM-35',
    signal:   'Evidencias',
    metric:   'PDF',
    stage:    'Diseñado para RRHH, seguridad laboral y consultores que necesitan orden, historial y reportes exportables.',
    screenBg: 'linear-gradient(135deg, #0D2240 0%, #113b70 52%, #0b6f8d 100%)',
    bars:     [40, 65, 48, 82, 60, 95, 70, 100],
    results:  ['Evaluaciones digitales', 'Reportes por centro', 'Multi-empresa'],
  },
  {
    title:    'PulseOps',
    category: 'AI Ops',
    year:     '2026',
    desc:     'Centro operativo para convertir solicitudes, documentos y tareas repetitivas en flujos medibles con apoyo de IA.',
    url:      'pulseops.gioncore.com',
    badge:    'PULSE',
    signal:   'Tareas visibles',
    metric:   '24/7',
    stage:    'Pensado para operaciones internas, soporte, backoffice y áreas que viven entre archivos, correos y pendientes.',
    screenBg: 'linear-gradient(135deg, #1b2132 0%, #4b3765 52%, #0e766e 100%)',
    bars:     [50, 72, 60, 88, 65, 95, 78, 100],
    results:  ['Clasificación IA', 'Dashboards', 'Alertas accionables'],
  },
]

const team = [
  { initials: 'GJ', name: 'Gilberto de Jesús', role: 'Founder & Lead Engineer'  },
  { initials: 'UX', name: 'Producto y experiencia',    role: 'Flujos claros para usuarios reales'            },
  { initials: 'AI', name: 'Automatización e IA',    role: 'Modelos útiles con supervisión humana'       },
  { initials: 'CL', name: 'Cloud y seguridad',     role: 'Infraestructura mantenible y respaldos'          },
]

const contactItems = [
  {
    label: 'Email',
    val:   'javier@gioncore.com',
    vb:    '0 0 20 20',
    paths: ['M3 6l7 5 7-5', 'M3 6a1 1 0 011-1h12a1 1 0 011 1v10a1 1 0 01-1 1H4a1 1 0 01-1-1V6z'],
  },
  {
    label: 'Web',
    val:   'gioncore.com',
    vb:    '0 0 20 20',
    paths: ['M10 3a7 7 0 100 14A7 7 0 0010 3z', 'M10 3c0 0-3 3.5-3 7s3 7 3 7', 'M10 3c0 0 3 3.5 3 7s-3 7-3 7', 'M3 10h14'],
  },
  {
    label: 'Disponibilidad',
    val:   'Diagnósticos 2026 abiertos ●',
    vb:    '0 0 20 20',
    paths: ['M10 3a7 7 0 100 14A7 7 0 0010 3z', 'M10 7v3l2 2'],
    green: true,
  },
]

const socials = [
  {
    name: 'Facebook',
    href: '#',
    vb:   '0 0 24 24',
    path: 'M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z',
  },
  {
    name: 'Instagram',
    href: '#',
    vb:   '0 0 24 24',
    path: 'M16 4H8a4 4 0 00-4 4v8a4 4 0 004 4h8a4 4 0 004-4V8a4 4 0 00-4-4zm-4 9a3 3 0 110-6 3 3 0 010 6zm4.5-7a1 1 0 110 2 1 1 0 010-2z',
  },
  {
    name: 'Twitter / X',
    href: '#',
    vb:   '0 0 24 24',
    path: 'M18.244 2.25h3.308l-7.227 8.26 8.502 11.24H16.17l-5.214-6.817L4.99 21.75H1.68l7.73-8.835L1.254 2.25H8.08l4.713 6.231zm-1.161 17.52h1.833L7.084 4.126H5.117z',
  },
  {
    name: 'YouTube',
    href: '#',
    vb:   '0 0 24 24',
    path: 'M22.54 6.42a2.78 2.78 0 00-1.95-1.96C18.88 4 12 4 12 4s-6.88 0-8.59.46A2.78 2.78 0 001.46 6.42 29 29 0 001 12a29 29 0 00.46 5.58A2.78 2.78 0 003.41 19.54C5.12 20 12 20 12 20s6.88 0 8.59-.46a2.78 2.78 0 001.95-1.96A29 29 0 0023 12a29 29 0 00-.46-5.58zM9.75 15.02V8.98L15.5 12l-5.75 3.02z',
  },
]

const footerCols = [
  {
    title: 'Servicios',
    links: [
      { label: 'Concilia Cloud',   href: '#portfolio', scroll: true },
      { label: 'NOM-35 Digital',          href: '#portfolio', scroll: true },
      { label: 'PulseOps', href: '#portfolio', scroll: true },
      { label: 'Software a la medida', href: '#servicios', scroll: true },
    ],
  },
  {
    title: 'Empresa',
    links: [
      { label: 'Empresa', href: '#sobre',    scroll: true },
      { label: 'Productos',      href: '#portfolio', scroll: true },
      { label: 'Método',           href: '#porque',   scroll: true },
    ],
  },
  {
    title: 'Legal',
    links: [
      { label: 'Privacidad',     href: '#', scroll: false },
      { label: 'Términos de uso', href: '#', scroll: false },
    ],
  },
]

// ──────────────────────────────────────────
// STATE
// ──────────────────────────────────────────
const scrolled    = ref(false)
const mobileOpen  = ref(false)
const hovSvc      = ref(null)
const activeSvc   = ref(null)
const hovBar      = ref(null)
const hovProj     = ref(null)
const sending     = ref(false)
const formSuccess = ref(false)
const formError   = ref(false)
const form        = ref({ name: '', email: '', company: '', service: '', budget: '', message: '' })

const heroVisRef  = ref(null)
const mainCard    = ref(null)
const badge1      = ref(null)
const badge2      = ref(null)
const badge3      = ref(null)
const cursorRef    = ref(null)
const cursorDotRef = ref(null)

// ──────────────────────────────────────────
// METHODS
// ──────────────────────────────────────────
const scrollTo = (selector) => {
  document.querySelector(selector)?.scrollIntoView({ behavior: 'smooth' })
}

const onScroll = () => { scrolled.value = window.scrollY > 60 }

const setupReveal = () => {
  const revealEls = document.querySelectorAll('.gc-reveal')

  if (!('IntersectionObserver' in window)) {
    revealEls.forEach(el => el.classList.add('visible'))
    return
  }

  const obs = new IntersectionObserver((entries) => {
    entries.forEach(e => {
      if (e.isIntersecting) { e.target.classList.add('visible'); obs.unobserve(e.target) }
    })
  }, { threshold: 0.08, rootMargin: '0px 0px -40px 0px' })
  revealEls.forEach(el => {
    const rect = el.getBoundingClientRect()
    if (rect.top < window.innerHeight && rect.bottom > 0) {
      el.classList.add('visible')
      return
    }
    obs.observe(el)
  })
}

let cursorX = 0, cursorY = 0, dotX = 0, dotY = 0
const onMouseMove = (e) => {
  cursorX = e.clientX
  cursorY = e.clientY

  if (cursorRef.value) {
    cursorRef.value.style.transform = `translate(${cursorX - 20}px, ${cursorY - 20}px)`
  }

  if (!mainCard.value) return
  const dx = (e.clientX / window.innerWidth  - 0.5) * 2
  const dy = (e.clientY / window.innerHeight - 0.5) * 2
  mainCard.value.style.transform = `perspective(900px) rotateY(${dx * 4}deg) rotateX(${-dy * 3}deg)`
  if (badge1.value) badge1.value.style.transform = `translate(${dx * 12}px, ${dy * 8}px)`
  if (badge2.value) badge2.value.style.transform = `translate(${-dx * 10}px, ${-dy * 6}px)`
  if (badge3.value) badge3.value.style.transform = `translate(${dx * 8}px, ${-dy * 10}px)`
}

// Smooth cursor dot follow
const animateDot = () => {
  if (cursorDotRef.value) {
    dotX += (cursorX - dotX) * 0.12
    dotY += (cursorY - dotY) * 0.12
    cursorDotRef.value.style.transform = `translate(${dotX - 4}px, ${dotY - 4}px)`
  }
  requestAnimationFrame(animateDot)
}

const submitForm = async () => {
  sending.value     = true
  formSuccess.value = false
  formError.value   = false
  try {
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.content || ''
    const res = await fetch('/contact', {
      method: 'POST',
      headers: { 'Content-Type': 'application/json', 'X-CSRF-TOKEN': csrfToken },
      body: JSON.stringify(form.value),
    })
    if (res.ok) {
      formSuccess.value = true
      form.value = { name: '', email: '', company: '', service: '', budget: '', message: '' }
    } else {
      formError.value = true
    }
  } catch {
    formError.value = true
  } finally {
    sending.value = false
  }
}

onMounted(() => {
  window.addEventListener('scroll', onScroll, { passive: true })
  window.addEventListener('mousemove', onMouseMove, { passive: true })
  setupReveal()
  animateDot()

  // Stagger hero h1 lines
  document.querySelectorAll('.gc-hero__h1-line').forEach((el, i) => {
    el.style.animationDelay = (0.2 + i * 0.18) + 's'
  })
})
onUnmounted(() => {
  window.removeEventListener('scroll', onScroll)
  window.removeEventListener('mousemove', onMouseMove)
})
</script>

<style scoped>
/* ═══════════════════════════════════════
   DESIGN TOKENS
═══════════════════════════════════════ */
.gc-root {
  --slate-white:  #F1F3F5;
  --deep-navy:    #0D2240;
  --electric-blue:#007BFF;
  --green-accent: #A3E635;
  --tech-cyan:    #00c6ff;
  --steel:        #334155;
  --teal:         #0f766e;
  --violet:       #6d5dfc;
  --ink:          #0D2240;
  --muted:        #5a6a80;
  --dim:          #8899aa;
  --border:       rgba(13,34,64,0.1);
  --border2:      rgba(13,34,64,0.18);
  --card-shadow:  0 10px 30px rgba(13,34,64,0.08);
  --card-shadow-hover: 0 24px 70px rgba(13,34,64,0.18);

  --grad-blue:  linear-gradient(135deg, #007BFF 0%, #00c6ff 100%);
  --grad-green: linear-gradient(135deg, #A3E635 0%, #22c55e 100%);
  --grad-brand: linear-gradient(135deg, #007BFF 0%, #A3E635 100%);

  --font-display: 'Aileron', 'DM Sans', sans-serif;
  --font-body:    'Aileron', 'DM Sans', sans-serif;
  --font-mono:    'JetBrains Mono', monospace;

  --nav-h:  70px;
  --max-w:  1160px;
  --r:      12px;
  --r-lg:   20px;

  background: var(--slate-white);
  color: var(--ink);
  font-family: var(--font-body);
  font-size: 16px;
  line-height: 1.65;
  -webkit-font-smoothing: antialiased;
  cursor: none;
}

*, *::before, *::after { box-sizing: border-box; margin: 0; padding: 0; }
a { color: inherit; text-decoration: none; }
ul { list-style: none; }
em { font-style: normal; }

/* ═══════════ CUSTOM CURSOR ═══════════ */
.gc-cursor {
  position: fixed; top: 0; left: 0; z-index: 9999; pointer-events: none;
  width: 40px; height: 40px; border-radius: 50%;
  border: 1.5px solid rgba(0,123,255,0.4);
  backdrop-filter: blur(1px);
  transition: transform 0.08s ease, width 0.3s ease, height 0.3s ease, border-color 0.3s ease;
  mix-blend-mode: difference;
}
.gc-cursor-dot {
  position: fixed; top: 0; left: 0; z-index: 10000; pointer-events: none;
  width: 8px; height: 8px; border-radius: 50%;
  background: var(--electric-blue);
}

@media (hover: none) {
  .gc-cursor, .gc-cursor-dot { display: none; }
  .gc-root { cursor: auto; }
}

/* ═══════════ LAYOUT ═══════════ */
.gc-container { max-width: var(--max-w); margin: 0 auto; padding: 0 28px; }

/* ═══════════ REVEAL ═══════════ */
.gc-reveal {
  opacity: 0; transform: translateY(28px);
  transition: opacity 0.7s cubic-bezier(0.16,1,0.3,1), transform 0.7s cubic-bezier(0.16,1,0.3,1);
}
.gc-reveal.visible { opacity: 1; transform: translateY(0); }

/* ═══════════ BUTTONS ═══════════ */
.gc-btn {
  display: inline-flex; align-items: center; gap: 10px;
  padding: 13px 28px; border-radius: var(--r);
  font-family: var(--font-body); font-size: 15px; font-weight: 600;
  transition: all 0.3s cubic-bezier(0.34,1.56,0.64,1);
  cursor: none; border: none; letter-spacing: 0.01em; position: relative; overflow: hidden;
}
.gc-btn::after {
  content: ''; position: absolute; inset: 0;
  background: linear-gradient(135deg, rgba(255,255,255,0.15) 0%, transparent 60%);
  opacity: 0; transition: opacity 0.3s;
}
.gc-btn:hover::after { opacity: 1; }

.gc-btn--primary {
  background: var(--grad-blue);
  color: white;
  box-shadow: 0 4px 20px rgba(0,123,255,0.3);
}
.gc-btn--primary:hover {
  transform: translateY(-3px) scale(1.02);
  box-shadow: 0 12px 40px rgba(0,123,255,0.5);
}
.gc-btn--primary svg { transition: transform 0.2s; }
.gc-btn--primary:hover svg { transform: translateX(5px); }

.gc-btn--green {
  background: var(--grad-green) !important;
  box-shadow: 0 4px 20px rgba(163,230,53,0.3) !important;
}
.gc-btn--green:hover { box-shadow: 0 12px 40px rgba(163,230,53,0.5) !important; }

.gc-btn--ghost {
  background: transparent;
  border: 1.5px solid rgba(255,255,255,0.25);
  color: white;
}
.gc-btn--ghost:hover {
  border-color: rgba(255,255,255,0.6);
  background: rgba(255,255,255,0.08);
  transform: translateY(-2px);
}
.gc-btn--lg { padding: 16px 36px; font-size: 16px; border-radius: 14px; }
.gc-btn--full { width: 100%; justify-content: center; }
.gc-btn--cta-nav {
  padding: 9px 22px; border-radius: 10px;
  background: var(--electric-blue); color: white;
  font-size: 14px; font-weight: 600;
  box-shadow: 0 2px 12px rgba(0,123,255,0.25);
}
.gc-btn--cta-nav:hover {
  background: #0056cc; transform: translateY(-2px);
  box-shadow: 0 6px 20px rgba(0,123,255,0.45);
}
.gc-btn--outline-green {
  background: transparent;
  border: 1.5px solid var(--green-accent);
  color: var(--green-accent);
  font-size: 14px; font-weight: 700; padding: 11px 22px;
  border-radius: 10px; flex-shrink: 0;
}
.gc-btn--outline-green:hover {
  background: rgba(163,230,53,0.12);
  transform: translateY(-2px);
}
.gc-btn:disabled { opacity: 0.6; cursor: not-allowed; transform: none !important; }

/* ═══════════ EYEBROW ═══════════ */
.gc-eyebrow {
  display: inline-block;
  font-size: 11px; font-weight: 700; letter-spacing: 0.2em; text-transform: uppercase;
  color: var(--electric-blue); margin-bottom: 14px;
}
.gc-eyebrow--light { color: #5ef0c8; }
.gc-accent-green { color: var(--green-accent); }

/* ═══════════ SECTION HEADERS ═══════════ */
.gc-section { padding: 100px 0; }
.gc-section--light { background: linear-gradient(180deg, #ffffff 0%, #f8fafc 100%); }
.gc-section--navy  { background: linear-gradient(135deg, #0D2240 0%, #14283f 52%, #092f36 100%); }
.gc-section__head  { text-align: center; margin-bottom: 64px; }
.gc-section__h2 {
  font-family: var(--font-display);
  font-size: clamp(32px, 4.5vw, 52px);
  font-weight: 700; letter-spacing: -0.04em; line-height: 1.12; margin-bottom: 16px;
  color: var(--ink);
}
.gc-section__h2 em {
  background: var(--grad-brand);
  -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
}
.gc-section__h2--light { color: white; }
.gc-section__desc { font-size: 16px; color: var(--muted); max-width: 500px; margin: 0 auto; line-height: 1.75; }

/* ═══════════ HEADER ═══════════ */
.gc-header {
  position: fixed; top: 0; left: 0; right: 0; z-index: 900;
  background: rgba(241,243,245,0.88);
  backdrop-filter: blur(24px) saturate(180%);
  -webkit-backdrop-filter: blur(24px) saturate(180%);
  border-bottom: 1px solid transparent;
  transition: border-color 0.3s, box-shadow 0.3s;
}
.scrolled .gc-header {
  border-bottom-color: var(--border);
  box-shadow: 0 2px 24px rgba(13,34,64,0.1);
}
.gc-header__inner {
  max-width: var(--max-w); margin: 0 auto; padding: 0 28px;
  height: var(--nav-h); display: flex; align-items: center; gap: 40px;
}
.gc-logo { display: flex; align-items: center; gap: 10px; flex-shrink: 0; }
.gc-logo__mark { width: 36px; transition: transform 0.3s; }
.gc-logo:hover .gc-logo__mark { transform: rotate(15deg) scale(1.05); }
.gc-logo__text {
  font-family: var(--font-display); font-size: 17px; font-weight: 700;
  letter-spacing: 0.06em; color: var(--deep-navy);
}
.gc-nav { margin-left: auto; }
.gc-nav__list { display: flex; gap: 36px; }
.gc-nav__link {
  font-size: 14px; font-weight: 500; color: var(--muted);
  position: relative; padding-bottom: 2px; transition: color 0.2s;
}
.gc-nav__link::after {
  content: ''; position: absolute; bottom: -2px; left: 0; right: 0; height: 2px;
  background: var(--grad-brand); transform: scaleX(0); transform-origin: left;
  transition: transform 0.3s cubic-bezier(0.34,1.56,0.64,1); border-radius: 2px;
}
.gc-nav__link:hover { color: var(--electric-blue); }
.gc-nav__link:hover::after { transform: scaleX(1); }

.gc-burger { display: none; background: none; border: none; cursor: pointer; flex-direction: column; gap: 5px; padding: 4px; margin-left: 12px; }
.gc-burger span { display: block; width: 22px; height: 2px; background: var(--deep-navy); border-radius: 2px; transition: all 0.3s; }
.gc-burger.open span:nth-child(1) { transform: translateY(7px) rotate(45deg); }
.gc-burger.open span:nth-child(2) { opacity: 0; }
.gc-burger.open span:nth-child(3) { transform: translateY(-7px) rotate(-45deg); }
.gc-mobile-drawer {
  display: none; flex-direction: column;
  background: white; border-top: 1px solid var(--border);
  max-height: 0; overflow: hidden;
  transition: max-height 0.35s ease, padding 0.3s ease;
}
.gc-mobile-drawer.open { max-height: 450px; padding: 16px 28px 24px; }
.gc-mobile-drawer a { padding: 12px 0; border-bottom: 1px solid var(--border); color: var(--ink); font-size: 16px; font-weight: 500; }
.gc-mobile-drawer a:last-child { border-bottom: none; margin-top: 8px; }

/* ═══════════ HERO ═══════════ */
.gc-hero {
  min-height: 100vh;
  background: var(--deep-navy);
  position: relative; overflow: hidden;
  display: flex; align-items: center;
  padding: calc(var(--nav-h) + 60px) 28px 80px;
}

/* Animated depth layers */
.gc-hero__mesh { position: absolute; inset: 0; pointer-events: none; }
.gc-mesh-orb {
  position: absolute;
  border-radius: 28px;
  filter: blur(38px);
  opacity: 0.22;
  transform: rotate(-12deg);
}
.gc-mesh-orb--1 {
  width: 620px; height: 360px; top: -90px; right: -80px;
  background: linear-gradient(135deg, rgba(0,123,255,0.5), rgba(15,118,110,0.08));
  animation: orbFloat 12s ease-in-out infinite;
}
.gc-mesh-orb--2 {
  width: 480px; height: 260px; bottom: -70px; left: 8%;
  background: linear-gradient(135deg, rgba(163,230,53,0.28), rgba(0,198,255,0.08));
  animation: orbFloat 16s ease-in-out infinite reverse;
}
.gc-mesh-orb--3 {
  width: 360px; height: 220px; top: 42%; left: 42%;
  background: linear-gradient(135deg, rgba(109,93,252,0.26), rgba(0,198,255,0.08));
  animation: orbFloat 10s ease-in-out infinite 3s;
}
@keyframes orbFloat {
  0%, 100% { transform: translate(0, 0) scale(1); }
  33%  { transform: translate(30px, -20px) scale(1.05); }
  66%  { transform: translate(-20px, 15px) scale(0.95); }
}

/* Grid */
.gc-hero__grid { position: absolute; inset: 0; pointer-events: none; }
.gc-hero__grid-svg { width: 100%; height: 100%; }

/* Scan line */
.gc-scan-line {
  position: absolute; left: 0; right: 0; height: 1px;
  background: linear-gradient(90deg, transparent, rgba(0,198,255,0.3), transparent);
  animation: scanMove 8s ease-in-out infinite;
  pointer-events: none; z-index: 1;
}
@keyframes scanMove {
  0%   { top: 0%; opacity: 0; }
  5%   { opacity: 1; }
  95%  { opacity: 1; }
  100% { top: 100%; opacity: 0; }
}

.gc-hero__inner {
  max-width: var(--max-w); margin: 0 auto; width: 100%;
  display: grid; grid-template-columns: 1fr 1fr; gap: 64px;
  align-items: center; position: relative; z-index: 2;
}

/* Chip */
.gc-chip {
  display: inline-flex; align-items: center; gap: 8px;
  padding: 6px 14px; border-radius: 100px;
  background: rgba(0,123,255,0.12); border: 1px solid rgba(0,123,255,0.25);
  font-size: 11.5px; font-weight: 600; letter-spacing: 0.12em; text-transform: uppercase;
  color: #60b4ff; margin-bottom: 28px;
  animation: fadeUp 0.6s ease both;
}
.gc-chip__dot {
  width: 6px; height: 6px; border-radius: 50%;
  background: var(--green-accent); animation: pulse 2s ease infinite;
}
@keyframes pulse { 0%,100%{transform:scale(1);opacity:1} 50%{transform:scale(0.6);opacity:0.5} }

/* H1 lines - stagger entrance */
.gc-hero__h1 {
  font-family: var(--font-display);
  font-size: clamp(40px, 5vw, 68px);
  font-weight: 700; line-height: 1.06; letter-spacing: -0.04em;
  color: white; margin-bottom: 24px;
  display: flex; flex-direction: column;
}
.gc-hero__h1-line {
  display: block;
  opacity: 0; transform: translateY(24px);
  animation: slideUp 0.7s cubic-bezier(0.16,1,0.3,1) both;
}
@keyframes slideUp {
  to { opacity: 1; transform: translateY(0); }
}
.gc-hero__h1--accent {
  background: var(--grad-brand);
  -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
}
.gc-hero__sub {
  font-size: 17px; color: rgba(255,255,255,0.6); line-height: 1.75;
  max-width: 460px; margin-bottom: 40px;
  animation: fadeUp 0.7s ease 0.6s both;
}
.gc-hero__ctas {
  display: flex; gap: 14px; flex-wrap: wrap; margin-bottom: 36px;
  animation: fadeUp 0.7s ease 0.75s both;
}

/* Tech tags */
.gc-hero__tags { display: flex; flex-wrap: wrap; gap: 8px; }
.gc-tech-tag {
  padding: 4px 12px; border-radius: 100px;
  background: rgba(255,255,255,0.06); border: 1px solid rgba(255,255,255,0.12);
  font-size: 11px; font-weight: 600; letter-spacing: 0.06em;
  color: rgba(255,255,255,0.45);
  opacity: 0; transform: translateY(10px);
  animation: fadeUp 0.5s ease both;
  transition: background 0.2s, color 0.2s, border-color 0.2s;
}
.gc-tech-tag:hover {
  background: rgba(0,123,255,0.15);
  border-color: rgba(0,123,255,0.4);
  color: #60b4ff;
}

@keyframes fadeUp { from{opacity:0;transform:translateY(16px)} to{opacity:1;transform:translateY(0)} }

/* Hero card */
.gc-hero__visual { position: relative; }
.gc-card {
  background: rgba(255,255,255,0.04);
  border: 1px solid rgba(255,255,255,0.1);
  border-radius: var(--r-lg); overflow: hidden;
  backdrop-filter: blur(20px);
  box-shadow: 0 32px 80px rgba(0,0,0,0.4), 0 0 0 1px rgba(255,255,255,0.06);
  transition: transform 0.1s ease-out;
  animation: fadeUp 0.8s ease 0.3s both;
}
.gc-card__header {
  display: flex; align-items: center; gap: 10px;
  padding: 13px 18px;
  background: rgba(255,255,255,0.04); border-bottom: 1px solid rgba(255,255,255,0.08);
}
.gc-card__label { font-family: var(--font-mono); font-size: 11px; color: rgba(255,255,255,0.3); margin-left: auto; }
.gc-card__status {
  display: flex; align-items: center; gap: 5px;
  font-family: var(--font-mono); font-size: 9px; font-weight: 700;
  color: var(--green-accent); letter-spacing: 0.1em;
}
.gc-status-pulse {
  width: 5px; height: 5px; border-radius: 50%; background: var(--green-accent);
  animation: pulse 2s ease infinite;
}
.gc-card__body { padding: 22px; }
.gc-dots { display: flex; gap: 5px; }
.gc-dots span { width: 9px; height: 9px; border-radius: 50%; }
.gc-dots .r{background:#ff5f57} .gc-dots .y{background:#febc2e} .gc-dots .g{background:#28c840}
.gc-chart-heading { font-size: 11px; color: rgba(255,255,255,0.4); letter-spacing: 0.1em; text-transform: uppercase; margin-bottom: 14px; }
.gc-bars { display: flex; align-items: flex-end; gap: 7px; height: 110px; margin-bottom: 18px; }
.gc-bar {
  flex: 1; border-radius: 4px 4px 0 0;
  background: linear-gradient(180deg, rgba(0,198,255,0.8) 0%, rgba(0,123,255,0.5) 100%);
  animation: growBar 0.7s ease var(--delay) both;
  transition: filter 0.2s, transform 0.2s;
  cursor: none;
}
.gc-bar:hover, .gc-bar.active {
  filter: brightness(1.5);
  background: linear-gradient(180deg, rgba(163,230,53,0.9) 0%, rgba(0,123,255,0.7) 100%);
  transform: scaleY(1.08); transform-origin: bottom;
}
@keyframes growBar { from{transform:scaleY(0);transform-origin:bottom} to{transform:scaleY(1)} }

.gc-kpis { display: grid; grid-template-columns: repeat(3,1fr); gap: 10px; margin-bottom: 14px; }
.gc-kpi {
  padding: 12px; border-radius: 10px;
  background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.08);
  transition: background 0.2s, transform 0.2s;
}
.gc-kpi:hover { background: rgba(255,255,255,0.1); transform: translateY(-3px); }
.gc-kpi__val {
  display: block; font-family: var(--font-display); font-size: 17px; font-weight: 700;
  background: var(--grad-brand);
  -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
  letter-spacing: -0.02em; margin-bottom: 2px;
}
.gc-kpi__lbl { font-size: 10px; color: rgba(255,255,255,0.3); letter-spacing: 0.06em; }

/* Activity bar */
.gc-activity-bar {
  height: 3px; background: rgba(255,255,255,0.08); border-radius: 2px;
  overflow: hidden; margin-bottom: 6px;
}
.gc-activity-bar__fill {
  height: 100%; width: 60%;
  background: linear-gradient(90deg, #007BFF, #A3E635);
  border-radius: 2px;
  animation: activityPulse 3s ease-in-out infinite;
}
@keyframes activityPulse {
  0%   { width: 30%; transform: translateX(-100%); }
  100% { width: 70%; transform: translateX(200%); }
}
.gc-activity-label { font-family: var(--font-mono); font-size: 9.5px; color: rgba(255,255,255,0.2); letter-spacing: 0.04em; }

/* Floating badges */
.gc-float-badge {
  position: absolute; display: flex; align-items: center; gap: 10px;
  padding: 12px 16px; border-radius: 12px;
  background: white; box-shadow: 0 12px 40px rgba(13,34,64,0.25);
  border: 1px solid rgba(13,34,64,0.06);
  animation: fadeUp 0.8s ease both;
  transition: transform 0.15s ease-out;
}
.gc-float-badge--tl { top: -20px; left: -24px; animation-delay: 0.5s; }
.gc-float-badge--br { bottom: 28px; right: -24px; animation-delay: 0.7s; }
.gc-float-badge--ml { top: 45%; left: -36px; transform: translateY(-50%); animation-delay: 0.9s; }
.gc-float-badge__val { display: block; font-family: var(--font-display); font-size: 16px; font-weight: 700; color: var(--deep-navy); }
.gc-float-badge__lbl { font-size: 10px; color: var(--muted); letter-spacing: 0.04em; }

/* Scroll hint */
.gc-scroll-hint {
  position: absolute; bottom: 28px; left: 50%; transform: translateX(-50%);
  display: flex; flex-direction: column; align-items: center; gap: 8px;
  color: rgba(255,255,255,0.25); font-size: 11px; letter-spacing: 0.12em; text-transform: uppercase;
}
.gc-scroll-hint__wheel {
  width: 22px; height: 36px; border: 1.5px solid rgba(255,255,255,0.15); border-radius: 11px;
  display: flex; justify-content: center; padding-top: 6px;
}
.gc-scroll-hint__wheel::after {
  content: ''; display: block; width: 3px; height: 8px;
  background: rgba(255,255,255,0.3); border-radius: 2px;
  animation: scrollWheel 2s ease infinite;
}
@keyframes scrollWheel { 0%{transform:translateY(0);opacity:1} 100%{transform:translateY(12px);opacity:0} }

/* ═══════════ SERVICES ═══════════ */
.gc-services-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 24px; }
.gc-service-card {
  padding: 32px 26px; border-radius: 16px;
  background: white; border: 1px solid var(--border);
  box-shadow: var(--card-shadow);
  position: relative; overflow: hidden;
  transition: transform 0.4s cubic-bezier(0.34,1.56,0.64,1), box-shadow 0.4s, border-color 0.3s;
  cursor: none;
}
.gc-service-card:hover,
.gc-service-card.active {
  transform: translateY(-10px);
  box-shadow: var(--card-shadow-hover);
  border-color: rgba(0,123,255,0.2);
}
.gc-service-card__number {
  font-family: var(--font-mono); font-size: 11px; font-weight: 700;
  color: rgba(0,123,255,0.2); letter-spacing: 0.1em;
  margin-bottom: 16px; display: block;
}
.gc-service-card__icon {
  width: 52px; height: 52px; border-radius: 14px; margin-bottom: 20px;
  background: linear-gradient(135deg, rgba(0,123,255,0.08) 0%, rgba(163,230,53,0.08) 100%);
  border: 1px solid rgba(0,123,255,0.12);
  display: flex; align-items: center; justify-content: center;
  transition: transform 0.3s, background 0.3s;
}
.gc-service-card:hover .gc-service-card__icon,
.gc-service-card.active .gc-service-card__icon {
  transform: scale(1.1) rotate(3deg);
  background: linear-gradient(135deg, rgba(0,123,255,0.15) 0%, rgba(163,230,53,0.15) 100%);
}
.gc-service-card__title {
  font-family: var(--font-display); font-size: 18px; font-weight: 700;
  letter-spacing: -0.02em; color: var(--ink); margin-bottom: 10px;
}
.gc-service-card__desc { font-size: 13px; color: var(--muted); line-height: 1.72; margin-bottom: 20px; }
.gc-service-card__detail {
  margin: -4px 0 18px;
  padding: 12px 14px;
  border-radius: 10px;
  background: rgba(0,123,255,0.06);
  border: 1px solid rgba(0,123,255,0.12);
  color: var(--muted);
  font-size: 12.5px;
  line-height: 1.6;
}
.gc-service-card__detail span {
  color: var(--electric-blue);
  font-weight: 800;
}
.gc-service-card__cta {
  display: flex; align-items: center; gap: 6px;
  font-size: 13px; font-weight: 700; color: var(--electric-blue);
  transition: gap 0.2s;
}
.gc-service-card:hover .gc-service-card__cta,
.gc-service-card.active .gc-service-card__cta { gap: 10px; }

/* Animated border on hover — usar box-shadow en lugar de pseudo-elemento con z-index */
.gc-service-card__border-anim { display: none; }
.gc-service-card:hover,
.gc-service-card.active {
  box-shadow: var(--card-shadow-hover), 0 0 0 2px rgba(0,123,255,0.25);
}

.gc-service-card__shine {
  position: absolute; inset: 0;
  background: linear-gradient(135deg, rgba(0,123,255,0.04) 0%, transparent 60%);
  opacity: 0; transition: opacity 0.3s; pointer-events: none;
}
.gc-service-card:hover .gc-service-card__shine,
.gc-service-card.active .gc-service-card__shine { opacity: 1; }

/* ═══════════ WHY ═══════════ */
.gc-why-layout { display: grid; grid-template-columns: 4fr 6fr; gap: 80px; align-items: center; }
.gc-why-desc { font-size: 15px; color: rgba(255,255,255,0.5); line-height: 1.8; margin-top: 20px; margin-bottom: 32px; }
.gc-why-right { display: flex; flex-direction: column; gap: 16px; }
.gc-why-item {
  display: flex; align-items: flex-start; gap: 16px;
  padding: 20px 22px; border-radius: var(--r);
  background: rgba(255,255,255,0.04); border: 1px solid rgba(255,255,255,0.08);
  transition: background 0.3s, transform 0.3s, border-color 0.3s;
}
.gc-why-item:hover {
  background: rgba(255,255,255,0.08);
  transform: translateX(6px);
  border-color: rgba(163,230,53,0.2);
}
.gc-why-item__check {
  width: 28px; height: 28px; border-radius: 8px; flex-shrink: 0;
  background: rgba(163,230,53,0.12); border: 1px solid rgba(163,230,53,0.25);
  display: flex; align-items: center; justify-content: center;
}
.gc-why-item__title { font-size: 15px; font-weight: 700; color: white; margin-bottom: 4px; }
.gc-why-item__desc { font-size: 13px; color: rgba(255,255,255,0.4); line-height: 1.65; }

/* Counter strip */
.gc-counter-strip { display: flex; gap: 28px; }
.gc-counter__num {
  display: block; font-family: var(--font-display); font-size: 30px; font-weight: 700;
  background: var(--grad-brand);
  -webkit-background-clip: text; -webkit-text-fill-color: transparent; background-clip: text;
  letter-spacing: -0.04em; margin-bottom: 2px;
}
.gc-counter__lbl { font-size: 11px; color: rgba(255,255,255,0.35); letter-spacing: 0.06em; }

/* ═══════════ PORTFOLIO ═══════════ */
.gc-portfolio-grid { display: grid; grid-template-columns: repeat(3,1fr); gap: 24px; align-items: stretch; }
.gc-portfolio-card {
  border-radius: 16px; overflow: hidden;
  background: white; border: 1px solid rgba(13,34,64,0.12);
  box-shadow: var(--card-shadow);
  transition: transform 0.35s cubic-bezier(0.16,1,0.3,1), box-shadow 0.35s, border-color 0.35s;
  display: flex; flex-direction: column;
}
.gc-portfolio-card:hover {
  transform: translateY(-8px);
  box-shadow: var(--card-shadow-hover);
  border-color: rgba(0,123,255,0.24);
}

.gc-portfolio-card__visual { position: relative; }
.gc-mockup { border-radius: 16px 16px 0 0; overflow: hidden; }
.gc-mockup__bar {
  display: flex; align-items: center; gap: 8px; padding: 10px 14px;
  background: #eef2f6; border-bottom: 1px solid rgba(0,0,0,0.08);
}
.gc-mockup__url {
  flex: 1; margin-left: 6px; padding: 4px 10px; border-radius: 6px;
  background: white; font-family: var(--font-mono); font-size: 10px; color: var(--muted);
}
.gc-mockup__screen {
  height: 168px;
  display: flex; align-items: center; justify-content: center;
  position: relative;
}
.gc-mockup__screen::before {
  content: '';
  position: absolute; inset: 18px;
  border: 1px solid rgba(255,255,255,0.16);
  border-radius: 12px;
}
.gc-mockup__content { width: 88%; position: relative; z-index: 1; }
.gc-mockup__mini-bars { display: flex; align-items: flex-end; gap: 5px; height: 66px; margin-bottom: 12px; }
.gc-mockup__mini-bar {
  flex: 1; border-radius: 2px 2px 0 0;
  background: linear-gradient(180deg, rgba(255,255,255,0.82), rgba(255,255,255,0.34));
  animation: growBar 0.6s ease var(--d) both;
}
.gc-mockup__badge {
  display: inline-block; padding: 4px 10px; border-radius: 999px;
  background: rgba(255,255,255,0.9); color: #102033;
  font-size: 11px; font-weight: 800; letter-spacing: 0.08em;
  box-shadow: 0 8px 22px rgba(0,0,0,0.14);
}
.gc-mockup__signal {
  margin-top: 10px;
  display: flex; justify-content: space-between; align-items: center;
  padding: 8px 10px; border-radius: 10px;
  background: rgba(255,255,255,0.12);
  border: 1px solid rgba(255,255,255,0.16);
  color: rgba(255,255,255,0.72);
  backdrop-filter: blur(8px);
}
.gc-mockup__signal span {
  font-size: 10px; letter-spacing: 0.08em; text-transform: uppercase;
}
.gc-mockup__signal strong {
  font-family: var(--font-display);
  font-size: 18px;
  color: white;
}
.gc-portfolio-card__overlay {
  position: absolute; inset: 0; border-radius: 16px 16px 0 0;
  background: rgba(13,34,64,0.78);
  display: flex; align-items: center; justify-content: center;
  opacity: 0; transition: opacity 0.3s;
  backdrop-filter: blur(4px);
}
.gc-portfolio-card__overlay.visible { opacity: 1; }
.gc-portfolio-card__overlay-text {
  color: white; font-size: 13px; font-weight: 800; letter-spacing: 0.12em; text-transform: uppercase;
  padding: 10px 16px; border: 1px solid rgba(255,255,255,0.34); border-radius: 999px;
}

.gc-portfolio-card__info { padding: 24px; display: flex; flex-direction: column; flex: 1; }
.gc-portfolio-card__meta { display: flex; gap: 8px; margin-bottom: 12px; }
.gc-tag { font-size: 10.5px; font-weight: 700; letter-spacing: 0.08em; text-transform: uppercase; padding: 4px 10px; border-radius: 999px; background: rgba(0,123,255,0.08); color: var(--electric-blue); }
.gc-tag--year { background: rgba(13,34,64,0.06); color: var(--muted); }
.gc-portfolio-card__title { font-family: var(--font-display); font-size: 20px; font-weight: 800; letter-spacing: -0.02em; color: var(--ink); margin-bottom: 8px; }
.gc-portfolio-card__desc { font-size: 13.5px; color: var(--muted); line-height: 1.68; margin-bottom: 14px; }
.gc-portfolio-card__stage {
  font-size: 12.5px;
  color: var(--steel);
  line-height: 1.6;
  padding: 12px 0;
  border-top: 1px solid rgba(13,34,64,0.08);
  border-bottom: 1px solid rgba(13,34,64,0.08);
  margin-bottom: 14px;
}
.gc-portfolio-card__results { display: flex; flex-wrap: wrap; gap: 6px; margin-top: auto; }
.gc-result { font-size: 11.5px; font-weight: 700; color: #0f766e; background: rgba(15,118,110,0.08); padding: 4px 10px; border-radius: 999px; }

/* ═══════════ ABOUT ═══════════ */
.gc-about-layout { display: grid; grid-template-columns: 1fr 1fr; gap: 80px; align-items: center; }
.gc-about-desc { font-size: 15px; color: rgba(255,255,255,0.48); line-height: 1.8; margin-bottom: 20px; }
.gc-team-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 14px; }
.gc-team-card {
  padding: 22px; border-radius: var(--r);
  background: rgba(255,255,255,0.05); border: 1px solid rgba(255,255,255,0.08);
  transition: background 0.3s, transform 0.3s, border-color 0.3s;
}
.gc-team-card:hover {
  background: rgba(255,255,255,0.1);
  transform: translateY(-4px);
  border-color: rgba(163,230,53,0.2);
}
.gc-team-card__av {
  width: 44px; height: 44px; border-radius: 12px; margin-bottom: 14px;
  background: var(--grad-brand);
  display: flex; align-items: center; justify-content: center;
  font-family: var(--font-display); font-size: 14px; font-weight: 800; color: white;
}
.gc-team-card__name { font-size: 14px; font-weight: 700; color: white; margin-bottom: 3px; }
.gc-team-card__role { font-size: 11.5px; color: rgba(255,255,255,0.38); letter-spacing: 0.04em; }

/* ═══════════ CTA BAND ═══════════ */
.gc-cta-band {
  background: var(--slate-white);
  border-top: 1px solid var(--border); border-bottom: 1px solid var(--border);
  padding: 80px 28px; text-align: center; position: relative; overflow: hidden;
}
.gc-cta-band__bg { position: absolute; inset: 0; pointer-events: none; }
.gc-cta-band__geo { width: 100%; height: 100%; }
.gc-cta-band__inner { position: relative; z-index: 1; }
.gc-cta-band__title {
  font-family: var(--font-display); font-size: clamp(28px, 4vw, 48px);
  font-weight: 700; letter-spacing: -0.04em; color: var(--deep-navy);
  margin-bottom: 16px; line-height: 1.15;
}
.gc-cta-band__sub { font-size: 16px; color: var(--muted); margin-bottom: 36px; }

/* ═══════════ CONTACT ═══════════ */
.gc-contact-layout { display: grid; grid-template-columns: 4fr 6fr; gap: 80px; align-items: start; }
.gc-contact-desc { font-size: 15px; color: var(--muted); line-height: 1.8; margin-bottom: 36px; }
.gc-contact-items { display: flex; flex-direction: column; gap: 18px; margin-bottom: 32px; }
.gc-contact-item { display: flex; align-items: center; gap: 14px; }
.gc-contact-item__icon {
  width: 40px; height: 40px; border-radius: 10px;
  background: rgba(0,123,255,0.08); border: 1px solid rgba(0,123,255,0.12);
  display: flex; align-items: center; justify-content: center; flex-shrink: 0;
  transition: background 0.2s, transform 0.2s;
}
.gc-contact-item:hover .gc-contact-item__icon {
  background: rgba(0,123,255,0.15);
  transform: scale(1.08);
}
.gc-contact-item__label { font-size: 10.5px; color: var(--dim); letter-spacing: 0.1em; text-transform: uppercase; display: block; margin-bottom: 2px; }
.gc-contact-item__val { font-size: 14px; font-weight: 600; color: var(--ink); }
.gc-contact-item__val.green { color: #16a34a; }
.gc-socials { display: flex; gap: 10px; }
.gc-social {
  width: 36px; height: 36px; border-radius: 8px;
  background: rgba(13,34,64,0.07); border: 1px solid var(--border);
  display: flex; align-items: center; justify-content: center;
  color: var(--muted); transition: background 0.25s, color 0.25s, transform 0.3s cubic-bezier(0.34,1.56,0.64,1);
}
.gc-social:hover { background: var(--electric-blue); color: white; transform: translateY(-3px) scale(1.05); }

/* Form */
.gc-form-wrap {
  background: white; border: 1px solid var(--border2);
  border-radius: var(--r-lg); padding: 40px;
  box-shadow: var(--card-shadow);
}
.gc-form { display: flex; flex-direction: column; gap: 18px; }
.gc-form__row { display: grid; grid-template-columns: 1fr 1fr; gap: 16px; }
.gc-form__field { display: flex; flex-direction: column; gap: 7px; }
.gc-form__field label { font-size: 12.5px; font-weight: 600; color: var(--ink); }
.gc-form__field input,
.gc-form__field select,
.gc-form__field textarea {
  background: var(--slate-white);
  border: 1.5px solid var(--border2);
  border-radius: 10px; padding: 11px 15px;
  color: var(--ink); font-size: 14px; font-family: var(--font-body);
  outline: none; transition: border-color 0.2s, box-shadow 0.2s, background 0.2s;
}
.gc-form__field input::placeholder,
.gc-form__field textarea::placeholder { color: var(--dim); }
.gc-form__field input:focus,
.gc-form__field select:focus,
.gc-form__field textarea:focus {
  border-color: var(--electric-blue);
  box-shadow: 0 0 0 3px rgba(0,123,255,0.1);
  background: white;
}
.gc-form__field select {
  appearance: none; cursor: none;
  background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='12' height='12' viewBox='0 0 20 20' fill='none'%3E%3Cpath d='M5 7l5 5 5-5' stroke='%235a6a80' stroke-width='1.5' stroke-linecap='round'/%3E%3C/svg%3E");
  background-repeat: no-repeat; background-position: right 14px center;
}
.gc-form__success {
  display: flex; align-items: center; gap: 10px; padding: 14px 16px;
  background: rgba(22,163,74,0.08); border: 1px solid rgba(22,163,74,0.2);
  border-radius: 10px; font-size: 14px; color: #16a34a;
}
.gc-form__error {
  padding: 14px 16px; background: rgba(220,38,38,0.07);
  border: 1px solid rgba(220,38,38,0.18); border-radius: 10px;
  font-size: 14px; color: #dc2626;
}
.gc-spinner-wrap { display: flex; align-items: center; gap: 8px; }
.gc-spinner { width: 16px; height: 16px; border-radius: 50%; border: 2px solid rgba(255,255,255,0.3); border-top-color: white; animation: spin 0.7s linear infinite; }
@keyframes spin { to { transform: rotate(360deg); } }

.fade-enter-active, .fade-leave-active { transition: opacity 0.4s ease; }
.fade-enter-from, .fade-leave-to { opacity: 0; }

/* ═══════════ FOOTER ═══════════ */
.gc-footer { background: var(--deep-navy); padding: 60px 0 32px; }
.gc-footer__top { display: grid; grid-template-columns: 2fr 3fr; gap: 64px; margin-bottom: 48px; }
.gc-footer__logo { display: flex; align-items: center; gap: 10px; font-family: var(--font-display); font-size: 18px; font-weight: 700; letter-spacing: 0.06em; color: white; margin-bottom: 10px; }
.gc-footer__tagline { font-size: 13px; color: rgba(255,255,255,0.35); margin-bottom: 14px; }
.gc-footer__email { font-size: 14px; font-weight: 600; color: rgba(0,198,255,0.75); transition: color 0.2s; }
.gc-footer__email:hover { color: var(--green-accent); }
.gc-footer__nav { display: grid; grid-template-columns: repeat(3,1fr); gap: 32px; }
.gc-footer__col-title { font-size: 12px; font-weight: 700; letter-spacing: 0.12em; text-transform: uppercase; color: rgba(255,255,255,0.3); margin-bottom: 16px; }
.gc-footer__col ul { display: flex; flex-direction: column; gap: 10px; }
.gc-footer__col a { font-size: 14px; color: rgba(255,255,255,0.45); transition: color 0.2s, transform 0.2s; display: inline-block; }
.gc-footer__col a:hover { color: white; transform: translateX(3px); }
.gc-footer__bottom {
  display: flex; align-items: center; justify-content: space-between;
  padding-top: 28px; border-top: 1px solid rgba(255,255,255,0.08);
}
.gc-footer__bottom p { font-size: 13px; color: rgba(255,255,255,0.25); }

/* GDJG watermark — discrete */
.gc-watermark {
  font-family: var(--font-mono); font-size: 10px;
  color: rgba(255,255,255,0.15); letter-spacing: 0.12em;
  transition: color 0.3s;
}
.gc-watermark:hover { color: rgba(163,230,53,0.4); }

.gc-footer .gc-social { background: rgba(255,255,255,0.06); border-color: rgba(255,255,255,0.08); color: rgba(255,255,255,0.35); }
.gc-footer .gc-social:hover { background: var(--electric-blue); color: white; }

/* ═══════════ RESPONSIVE ═══════════ */
@media (max-width: 1024px) {
  .gc-services-grid   { grid-template-columns: 1fr 1fr; }
  .gc-portfolio-grid  { grid-template-columns: 1fr; }
  .gc-why-layout      { grid-template-columns: 1fr; gap: 48px; }
  .gc-about-layout    { grid-template-columns: 1fr; gap: 48px; }
  .gc-footer__top     { grid-template-columns: 1fr; gap: 40px; }
}
@media (max-width: 860px) {
  .gc-hero__inner     { grid-template-columns: 1fr; }
  .gc-hero__visual    { display: none; }
  .gc-contact-layout  { grid-template-columns: 1fr; }
  .gc-nav, .gc-btn--cta-nav { display: none; }
  .gc-burger { display: flex; }
  .gc-mobile-drawer { display: flex; }
  .gc-footer__nav { grid-template-columns: 1fr 1fr; }
  .gc-footer__bottom { flex-direction: column; gap: 12px; text-align: center; }
  .gc-counter-strip { justify-content: center; }
}
@media (max-width: 600px) {
  .gc-services-grid  { grid-template-columns: 1fr; }
  .gc-portfolio-grid { grid-template-columns: 1fr; }
  .gc-team-grid      { grid-template-columns: 1fr; }
  .gc-form__row      { grid-template-columns: 1fr; }
  .gc-form-wrap      { padding: 22px; }
  .gc-footer__nav    { grid-template-columns: 1fr; }
}
</style>
