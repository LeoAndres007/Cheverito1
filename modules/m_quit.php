<?php
/*
 * @name: Quit
 * @desc: Agrega el comando quit
 * @ver: 1.0
 * @author: MRX
 * @id: quit
 * @key: pinkflyingelephants
 *
 */

class pinkflyingelephants{
	public function __construct(&$core){
		$core->registerCommand("quit", "quit", "Desconecta del IRC y cierra el bot.", 10, "*", null, SMARTIRC_TYPE_QUERY|SMARTIRC_TYPE_CHANNEL);
		$core->registerCommand("reconnect", "quit", "Desconecta del IRC y conecta de nuevo.", 10, "*", null, SMARTIRC_TYPE_QUERY|SMARTIRC_TYPE_CHANNEL);
		$core->registerCommand("restart", "quit", "Reinicia el bot.", 10, "*", null, SMARTIRC_TYPE_QUERY|SMARTIRC_TYPE_CHANNEL);
   	}
	
	public function restart(&$irc, $data, &$core){
		$irc->quit("[RESTART] Reseteado :C");
		exec("php restart.php &");
		exit;
	}
	public function quit(&$irc, $data, &$core){
        $irc->quit("[QUIT] Me Fui.");
        die("D: Me Mataron TnT");
	}
    
    public function reconnect(&$irc, $data, &$core){
        $irc->reconnect();
	}
    
	
}
