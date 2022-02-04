<?php
class Url
{
    private static $url = null;
    private static $baseUrl = null;
    
    public static function getURL( $id )
    {
        if( self::$url == null )
        // Verifica se a lista de URL ja foi preenchida
            self::getURLList();
        
        // Valida se existe o ID informado e retorna.
        if( isset( self::$url[ $id ] ) )
            return self::$url[ $id ];
        
        // Caso nao exista o ID, retorna nulo
        return null;
    }
    
    public static function getBase()
    {
        if( self::$baseUrl != null )
            return self::$baseUrl;

        global $_SERVER;
        $startUrl = strlen( $_SERVER["DOCUMENT_ROOT"] );
        $excludeUrl = substr( $_SERVER["SCRIPT_FILENAME"], $startUrl, -9 );
        if( $excludeUrl[0] == "/" )
            self::$baseUrl = $excludeUrl; 
        else
            self::$baseUrl = "/" . $excludeUrl;
        return self::$baseUrl;
    }
    
    private static function getURLList()
    {
        global $_SERVER;
        
        // Primeiro traz todos as pastas abaixo do index.php
        $startUrl = strlen( $_SERVER["DOCUMENT_ROOT"] ) -1;
        $excludeUrl = substr( $_SERVER["SCRIPT_FILENAME"], $startUrl, -10 );
        
        // a variavel$request possui toda a string da URL apos o dominio.
        $request = $_SERVER['REQUEST_URI'];
        
        // Agora retira toda as pastas abaixo da pasta raiz
        $request = substr( $request, strlen( $excludeUrl ) );
        
        // Explode a URL para pegar retirar tudo apos o ?
        $urlTmp = explode("?", $request);
        $request = $urlTmp[ 0 ];
        
        // Explo a URL para pegar cada uma das partes da URL
        $urlExplodida = explode("/", $request);
        
        $retorna = array();

        for($a = 0; $a <= count($urlExplodida); $a ++)
        {
            if(isset($urlExplodida[$a]) AND $urlExplodida[$a] != "")
            {
                array_push($retorna, $urlExplodida[$a]);
            }
        }
        self::$url = $retorna;
    }
}