<?hh

final class HTTPHeaders {
  private $headers;

  public function __construct() {
    $this->headers = Map {
      'foo' => 'bar',
      'baz' => 'quux',
    };
  }

  public function getAllHeaders(): Map<string,string> {
    return $this->headers;
  }

  public function getHeader(string $name, ?string $default = null): ?string {
    return idx($this->getAllHeaders(), strtolower($name), $default);
  }
}

function main() {
  $h = new HTTPHeaders();
  $val = $h->getHeader('blah', 'wat');
  echo $val;
  echo "\n";
}
main();
