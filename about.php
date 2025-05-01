<?php include 'header.php'; ?>

<style>
  .about-section {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 60px 40px;
    gap: 40px;
    flex-wrap: wrap;
  }

  .about-text {
    flex: 1;
    min-width: 300px;
    max-width: 600px;
  }

  .about-text h2 {
    font-size: 2em;
    color: #a0522d;
    margin-bottom: 20px;
  }

  .about-text p {
    line-height: 1.8;
    font-size: 1.1em;
  }

  .three-container {
    flex: 1;
    min-width: 300px;
    max-width: 600px;
    height: 500px; /* ← أكبر */
    background: #f5f5f5;
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
  }

  canvas {
    width: 100%;
    height: 100%;
    display: block;
    
    
  }
</style>

<section class="about-section">
  <div class="about-text">
    <h2>About Our Project</h2>
    <p>
      Our skincare product line is a result of years of research in natural and organic beauty. We believe that radiant skin starts from within, and that’s why our products are made with love, using only the finest botanical ingredients.
    </p>
    <p>
      Whether it's a herbal toner or a deeply moisturizing cream, every item we offer is designed to nourish, protect, and rejuvenate your skin—naturally and safely. We are passionate about helping you feel confident in your own skin.
    </p>
  </div>

  <div class="three-container">
    <canvas id="scene3D"></canvas>
  </div>
</section>

<!-- THREE.JS -->
<script src="https://cdn.jsdelivr.net/npm/three@0.128.0/build/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/three@0.128.0/examples/js/loaders/GLTFLoader.js"></script>

<script>
  const scene = new THREE.Scene();
  const camera = new THREE.PerspectiveCamera(75, 1, 0.1, 1000);
  const renderer = new THREE.WebGLRenderer({ canvas: document.getElementById('scene3D'), alpha: true, antialias: true });
  renderer.setSize(600, 500); // ← أكبر

  const light = new THREE.HemisphereLight(0xffffff, 0x444444);
  scene.add(light);

  const loader = new THREE.GLTFLoader();
  loader.load('models/model.glb', function (gltf) {
    const model = gltf.scene;
    model.scale.set(10, 10, 10); // ← أكبر
    model.position.set(0, -2, 0);
    scene.add(model);
  }, undefined, function (error) {
    console.error('خطأ في تحميل النموذج:', error);
  });

  camera.position.z = 6;

  function animate() {
    requestAnimationFrame(animate);
    scene.traverse(function (obj) {
      if (obj.isMesh) obj.rotation.y += 0.003;
    });
    renderer.render(scene, camera);
  }

  animate();
</script>

<?php include 'footer.php'; ?>
