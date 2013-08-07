<?
	class my_class
	{
		static function GetBrends()
		{
			$q = "
		SELECT *
		FROM b_iblock_element as el
		WHERE el.IBLOCK_ID = 10
		";
			return self::Fetch($q);
		}

		static function Fetch($q)
		{
			global $DB;
			$t      = $DB->Query($q);
			$result = array();
			while ($res = $t->Fetch()) {
				$result[] = $res;
			}
			return $result;
		}
		static function GetRazdelName($id){
			CModule::IncludeModule('iblock');
			$razdel = CIBlockSection::GetByID($id)->Fetch();
			return $razdel['NAME'];
		}
	}
