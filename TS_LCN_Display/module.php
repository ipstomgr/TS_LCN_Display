<?
class TS_LCN_Display extends IPSModule
{
    
		public function Create()
		{
			//Never delete this line!
			parent::Create();
        //These lines are parsed on Symcon Startup or Instance creation
        //You cannot use variables here. Just static values.
        $this->RegisterPropertyInteger("LCNDisplayId", 0);
        $this->RegisterPropertyInteger("Trigger", 42269);
        $this->RegisterPropertyInteger("UmschaltId", 17776);
        $this->RegisterPropertyInteger("LCNDisplayLine1", 1);
        $this->RegisterPropertyInteger("LCNDisplayLine2", 3);
        $this->RegisterPropertyInteger("Var1", 44915);
        $this->RegisterPropertyString("Var1P", "A");
        $this->RegisterPropertyString("Var1S", "°");
        
        $this->RegisterPropertyInteger("Var2", 19873);
        $this->RegisterPropertyString("Var2P", "");
        $this->RegisterPropertyString("Var2S", "%");

        $this->RegisterPropertyInteger("Var3", 25511);
        $this->RegisterPropertyString("Var3P", "W");
        $this->RegisterPropertyString("Var3S", "°");

        $this->RegisterPropertyInteger("Var4", 44915);
        $this->RegisterPropertyString("Var4P", "B");
        $this->RegisterPropertyString("Var4S", "°");

        $this->RegisterPropertyInteger("Var5", 54855);
        $this->RegisterPropertyString("Var5P", "K");
        $this->RegisterPropertyString("Var5S", "°");

        $this->RegisterPropertyInteger("Var6", 25511);
        $this->RegisterPropertyString("Var6P", "O");
        $this->RegisterPropertyString("Var6S", "°");

        $this->RegisterPropertyInteger("Var11", 21679);
        $this->RegisterPropertyString("Var11P", "K");
        $this->RegisterPropertyString("Var11S", "°");

        $this->RegisterPropertyInteger("Var12", 48528);
        $this->RegisterPropertyString("Var12P", "S");
        $this->RegisterPropertyString("Var12S", "°");

        $this->RegisterPropertyInteger("Var13", 52478);
        $this->RegisterPropertyString("Var13P", "A");
        $this->RegisterPropertyString("Var13S", "°");

        $this->RegisterPropertyInteger("Var14", 46178);
        $this->RegisterPropertyString("Var14P", "V");
        $this->RegisterPropertyString("Var14S", "°");

        $this->RegisterPropertyInteger("Var15", 59093);
        $this->RegisterPropertyString("Var15P", "R");
        $this->RegisterPropertyString("Var15S", "°");

        $this->RegisterPropertyInteger("Var16", 25511);
        $this->RegisterPropertyString("Var16P", "O");
        $this->RegisterPropertyString("Var16S", "°");
     
    }

//*********************************************************************************************************
    public function ApplyChanges()
    {
        //Never delete this line!
        parent::ApplyChanges();

        
        // Start create profiles

         
        // Start add scripts 
        $skript = '<?
$LCNDisplay_id = IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "LCNDisplayId");
$LCNDisplayLine1_id = IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "LCNDisplayLine1");
$LCNDisplayLine2_id = IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "LCNDisplayLine2");

$Trigger_id= IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "Trigger");
$Umschalt_id = IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "UmschaltId");

$Var1_id = IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "Var1");
$Var2_id = IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "Var2");
$Var3_id = IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "Var3");
$Var4_id = IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "Var4");
$Var5_id = IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "Var5");
$Var6_id = IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "Var6");

$Var1p = IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "Var1P");
$Var2p = IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "Var2P");
$Var3p = IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "Var3P");
$Var4p = IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "Var4P");
$Var5p = IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "Var5P");
$Var6p = IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "Var6P");
$Var1s = IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "Var1S");
$Var2s = IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "Var2S");
$Var3s = IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "Var3S");
$Var4s = IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "Var4S");
$Var5s = IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "Var5S");
$Var6s = IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "Var6S");

$Var11_id = IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "Var11");
$Var12_id = IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "Var12");
$Var13_id = IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "Var13");
$Var14_id = IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "Var14");
$Var15_id = IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "Var15");
$Var16_id = IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "Var16");

$Var11p = IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "Var11P");
$Var12p = IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "Var12P");
$Var13p = IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "Var13P");
$Var14p = IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "Var14P");
$Var15p = IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "Var15P");
$Var16p = IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "Var16P");
$Var11s = IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "Var11S");
$Var12s = IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "Var12S");
$Var13s = IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "Var13S");
$Var14s = IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "Var14S");
$Var15s = IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "Var15S");
$Var16s = IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "Var16S");

$dsp1 = IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "LCNDisplayLine1");
$dsp2 = IPS_GetProperty(IPS_GetParent($_IPS["SELF"]), "LCNDisplayLine2");


$zeile1_id = IPS_GetObjectIDByName("zeile1", IPS_GetParent($_IPS["SELF"]));
$zeile2_id = IPS_GetObjectIDByName("zeile2", IPS_GetParent($_IPS["SELF"]));

$lichtstatus = GetValueBoolean($Trigger_id);
$Umschalt=GetValueBoolean($Umschalt_id);

// Wenn im Büro Licht ist
    
if ($lichtstatus)
{
  IPS_SetScriptTimer($_IPS["SELF"]  , 10);                  
}
else
{
  IPS_SetScriptTimer($_IPS["SELF"]  , 0);                 
}

if ($Umschalt == 0)
{
		$Var1 = GetValueFloat ($Var1_id);
		$Var2 = GetValueFloat ($Var2_id);
		$Var3 = GetValueFloat ($Var3_id);
		$zeile=display_text($Var1,$Var2,$Var3,$Var1p,$Var2p,$Var3p,$Var1s,$Var2s,$Var3s,$zeile1_id);
		send_display($zeile,$LCNDisplay_id,$dsp1);
		//Zeile2
		$Var4 = GetValueFloat ($Var4_id);
		$Var5 = GetValueFloat ($Var5_id);
		$Var6 = GetValueFloat ($Var6_id);
		$zeile = display_text($Var4,$Var5,$Var6,$Var4p,$Var5p,$Var6p,$Var4s,$Var5s,$Var6s,$zeile2_id);
		send_display($zeile,$LCNDisplay_id,$dsp2);
}
//----------------------------------------------------------------------------------------------------------------
else //Relais ==1  //Umschalt_id
{
		$Var11= GetValueFloat ($Var11_id );
		$Var12 = GetValueFloat ($Var12_id );
		$Var13 = GetValueFloat ($Var13_id );
		$zeile = display_text($Var11,$Var12,$Var13,$Var11p,$Var12p,$Var13p,$Var11s,$Var12s,$Var13s,$zeile1_id);
		send_display($zeile,$LCNDisplay_id,$dsp1);
		//Zeile2
		$Var14 = GetValueFloat ($Var14_id);
		$Var15 = GetValueFloat ($Var15_id);
		$Var16 = GetValueFloat ($Var16_id);
		$zeile = display_text($Var14,$Var15,$Var16,$Var14p,$Var15p,$Var16p,$Var14s,$Var15s,$Var16s,$zeile2_id);
		send_display($zeile,$LCNDisplay_id,$dsp2);
}

function display_text($V1,$V2,$V3,$V1p,$V2p,$V3p,$V1s,$V2s,$V3s,$zeile_id)
{
if (strlen($V1) === 2){$V1=$V1.".0";}
if (strlen($V2) === 2){$V2=$V2.".0";}
if (strlen($V3) === 2){$V3=$V3.".0";}

$zeile=$V1p.$V1.$V1s." ".$V2p.$V2.$V2s." ".$V3p.$V3.$V3s;
$zeilealt=GetValueString($zeile_id );
if ($zeile != $zeilealt)
	{
	SetValueString($zeile_id , $zeile);
	return $zeile;
	}
//$zeile ="";
return $zeile ="";
}

function send_display($zeile,$LCNDisplay_id,$dsp)
{
if ($zeile != "")
	{
		$text=(substr($zeile,0,12));
		LCN_SendCommand($LCNDisplay_id ,"GT","DT".$dsp."1".$text.chr(10));
		IPS_Sleep(100);
		$text=(substr($zeile,12,12));
		LCN_SendCommand($LCNDisplay_id ,"GT","DT".$dsp."2".$text.chr(10));
		IPS_Sleep(100);
		$text=(substr($zeile,24,12));
		LCN_SendCommand($LCNDisplay_id ,"GT","DT".$dsp."3".$text.chr(10));
		IPS_Sleep(100);
		$text=(substr($zeile,36,12));
		LCN_SendCommand($LCNDisplay_id ,"GT","DT".$dsp."4".$text.chr(10));
	}
}
?>';
  $skriptID = $this->RegisterScript("_lcn_display", "_lcn_display", $skript, 99); 
        IPS_SetHidden($skriptID,true);
        $Trigger_id =$this->ReadPropertyInteger("Trigger");
        $this->Registerevent_trigger($skriptID,$Trigger_id); 
  $sk_id=IPS_GetObjectIDByIdent('_lcn_display', $this->InstanceID);
  if ( IPS_ScriptExists($sk_id)){
      IPS_SetScriptContent ( $sk_id, $skript);
  } 
        // End add scripts

       // Start Register variables and Actions
  		 $this->RegisterVariableString("zeile1", "zeile1", "",10);
  		 $this->RegisterVariableString("zeile2", "zeile2", "",20);
  		 $this->RegisterVariableString("zeile3", "zeile3", "",30);
  		 $this->RegisterVariableString("webfrontzeile1", "webfrontzeile1", "",40);
  		 $this->RegisterVariableString("webfrontzeile2", "webfrontzeile2", "",50);
  		 $this->RegisterVariableString("webfrontzeile3", "webfrontzeile3", "",60);




    }
//*********************************************************************************************************
		private function Registerevent_trigger($TargetID,$sid_berechnung)
		{ 
      if(!isset($_IPS))
      global $_IPS;  
      $EreignisID = @IPS_GetEventIDByName("E_trigger",  $TargetID);
      if ($EreignisID == true){
      if (IPS_EventExists(IPS_GetEventIDByName ( "E_trigger", $TargetID)))
      {
       IPS_DeleteEvent(IPS_GetEventIDByName ( "E_trigger", $TargetID));
      }
      }       
      $eid = IPS_CreateEvent(0);                  //Ausgelöstes Ereignis
      IPS_SetName($eid, "E_trigger");
      IPS_SetEventTrigger($eid, 1, $sid_berechnung);        //Bei Änderung von Variable mit ID 15754
      IPS_SetParent($eid, $TargetID);         //Ereignis zuordnen
      IPS_SetEventActive($eid, true);             //Ereignis aktivieren
    }	

}
?>
