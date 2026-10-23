<?php
// Cau hinh ket noi cua do an. Chi sua file nay o may local, khong dua API key len GitHub.

define('DB_HOST', '127.0.0.1');
define('DB_NAME', 'semantic_search_demo');
define('DB_USER', 'root');
define('DB_PASS', '');

// Dan API key OpenAI vao day neu muon dung tim kiem ngu nghia.
// De trong thi tim kiem MySQL LIKE van hoat dong binh thuong.
define('OPENAI_API_KEY', '');
define('OPENAI_EMBEDDING_MODEL', 'text-embedding-3-small');

define('CHROMA_URL', 'http://127.0.0.1:8000');
define('CHROMA_TENANT', 'default_tenant');
define('CHROMA_DATABASE', 'default_database');
define('CHROMA_COLLECTION', 'thu_vien_hoc_tap');
