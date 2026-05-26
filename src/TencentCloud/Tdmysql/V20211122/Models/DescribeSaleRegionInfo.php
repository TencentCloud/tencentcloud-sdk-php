<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *    http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */
namespace TencentCloud\Tdmysql\V20211122\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询售卖接口，region信息返回类型
 *
 * @method string getRegion() 获取<p>Region英文字符串</p>
 * @method void setRegion(string $Region) 设置<p>Region英文字符串</p>
 * @method array getZoneList() 获取<p>售卖Zone列表</p>
 * @method void setZoneList(array $ZoneList) 设置<p>售卖Zone列表</p>
 * @method string getRegionName() 获取<p>Region中文字符串</p>
 * @method void setRegionName(string $RegionName) 设置<p>Region中文字符串</p>
 * @method integer getEnable() 获取<p>是否售卖。1:售卖，0不售卖</p>
 * @method void setEnable(integer $Enable) 设置<p>是否售卖。1:售卖，0不售卖</p>
 * @method integer getAvailableZoneNum() 获取<p>多可用可选数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvailableZoneNum(integer $AvailableZoneNum) 设置<p>多可用可选数量</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsSupportedLogReplica() 获取<p>是否允许使用日志副本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsSupportedLogReplica(boolean $IsSupportedLogReplica) 设置<p>是否允许使用日志副本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getZoneGroup() 获取<p>可用区组合</p>
 * @method void setZoneGroup(array $ZoneGroup) 设置<p>可用区组合</p>
 * @method boolean getIsSupportServerless() 获取<p>是否支持serverless</p>
 * @method void setIsSupportServerless(boolean $IsSupportServerless) 设置<p>是否支持serverless</p>
 */
class DescribeSaleRegionInfo extends AbstractModel
{
    /**
     * @var string <p>Region英文字符串</p>
     */
    public $Region;

    /**
     * @var array <p>售卖Zone列表</p>
     */
    public $ZoneList;

    /**
     * @var string <p>Region中文字符串</p>
     */
    public $RegionName;

    /**
     * @var integer <p>是否售卖。1:售卖，0不售卖</p>
     */
    public $Enable;

    /**
     * @var integer <p>多可用可选数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AvailableZoneNum;

    /**
     * @var boolean <p>是否允许使用日志副本</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsSupportedLogReplica;

    /**
     * @var array <p>可用区组合</p>
     */
    public $ZoneGroup;

    /**
     * @var boolean <p>是否支持serverless</p>
     */
    public $IsSupportServerless;

    /**
     * @param string $Region <p>Region英文字符串</p>
     * @param array $ZoneList <p>售卖Zone列表</p>
     * @param string $RegionName <p>Region中文字符串</p>
     * @param integer $Enable <p>是否售卖。1:售卖，0不售卖</p>
     * @param integer $AvailableZoneNum <p>多可用可选数量</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsSupportedLogReplica <p>是否允许使用日志副本</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ZoneGroup <p>可用区组合</p>
     * @param boolean $IsSupportServerless <p>是否支持serverless</p>
     */
    function __construct()
    {

    }

    /**
     * For internal only. DO NOT USE IT.
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("ZoneList",$param) and $param["ZoneList"] !== null) {
            $this->ZoneList = [];
            foreach ($param["ZoneList"] as $key => $value){
                $obj = new DescribeSaleZonesInfo();
                $obj->deserialize($value);
                array_push($this->ZoneList, $obj);
            }
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("AvailableZoneNum",$param) and $param["AvailableZoneNum"] !== null) {
            $this->AvailableZoneNum = $param["AvailableZoneNum"];
        }

        if (array_key_exists("IsSupportedLogReplica",$param) and $param["IsSupportedLogReplica"] !== null) {
            $this->IsSupportedLogReplica = $param["IsSupportedLogReplica"];
        }

        if (array_key_exists("ZoneGroup",$param) and $param["ZoneGroup"] !== null) {
            $this->ZoneGroup = [];
            foreach ($param["ZoneGroup"] as $key => $value){
                $obj = new DescribeSaleZonesGroup();
                $obj->deserialize($value);
                array_push($this->ZoneGroup, $obj);
            }
        }

        if (array_key_exists("IsSupportServerless",$param) and $param["IsSupportServerless"] !== null) {
            $this->IsSupportServerless = $param["IsSupportServerless"];
        }
    }
}
