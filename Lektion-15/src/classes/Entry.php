<?php

class Entry extends Mapper {
  // Hämta inlägg
  public function getEntries($user,$order,$limit) {   
    $s = $this->db->prepare("SELECT * FROM entries $user ORDER BY createdAt $order $limit");
    $s->execute();
    return $s->fetchAll(PDO::FETCH_ASSOC);
  }
}
