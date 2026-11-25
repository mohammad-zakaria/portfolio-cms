<?php
namespace App\Http\Controllers;
use App\Models\{Post, Project, Venture};
use Illuminate\Http\Response;
class SitemapController extends Controller {
public function __invoke(): Response {
$urls = [
  ["loc" => url("/"), "p" => "1.0", "f" => "weekly"],
  ["loc" => url("/about"), "p" => "0.9", "f" => "monthly"],
  ["loc" => url("/ventures"), "p" => "0.9", "f" => "monthly"],
  ["loc" => url("/projects"), "p" => "0.8", "f" => "weekly"],
  ["loc" => url("/research"), "p" => "0.8", "f" => "monthly"],
  ["loc" => url("/insights"), "p" => "0.8", "f" => "weekly"],
  ["loc" => url("/contact"), "p" => "0.7", "f" => "yearly"],
];
foreach (Venture::where("is_published", true)->get() as $v) { $urls[] = ["loc" => route("ventures.show", $v), "m" => $v->updated_at?->toAtomString(), "p" => "0.8", "f" => "monthly"]; }
foreach (Project::where("is_published", true)->get() as $p) { $urls[] = ["loc" => route("projects.show", $p), "m" => $p->updated_at?->toAtomString(), "p" => "0.8", "f" => "monthly"]; }
foreach (Post::where("status", "published")->get() as $post) { $urls[] = ["loc" => route("insights.show", $post), "m" => $post->updated_at?->toAtomString(), "p" => "0.7", "f" => "weekly"]; }
$xml = "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n<urlset xmlns=\"http://www.sitemaps.org/schemas/sitemap/0.9\">\n";
foreach ($urls as $u) {
  $xml .= "<url><loc>" . e($u["loc"]) . "</loc>";
  if (!empty($u["m"])) $xml .= "<lastmod>{$u["m"]}</lastmod>";
  $xml .= "<changefreq>{$u["f"]}</changefreq><priority>{$u["p"]}</priority></url>\n";
}
$xml .= "</urlset>";
return response($xml, 200, ["Content-Type" => "application/xml"]);
}}
