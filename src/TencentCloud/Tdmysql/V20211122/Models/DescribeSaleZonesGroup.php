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
 * 查询售卖地域，提供推荐的可用区组合
 *
 * @method integer getZoneNum() 获取<p>可用区数</p>
 * @method void setZoneNum(integer $ZoneNum) 设置<p>可用区数</p>
 * @method array getZones() 获取<p>可用区组合</p>
 * @method void setZones(array $Zones) 设置<p>可用区组合</p>
 * @method array getSupportTypes() 获取<p>支持的类型</p>
 * @method void setSupportTypes(array $SupportTypes) 设置<p>支持的类型</p>
 * @method array getAvailableDiskTypes() 获取<p>支持的磁盘类型</p><p>枚举值：</p><ul><li>CLOUD_TCS： 本地盘</li><li>CLOUD_HSSD： 增强型云盘</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvailableDiskTypes(array $AvailableDiskTypes) 设置<p>支持的磁盘类型</p><p>枚举值：</p><ul><li>CLOUD_TCS： 本地盘</li><li>CLOUD_HSSD： 增强型云盘</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsSupportServerless() 获取<p>是否支持serverless</p>
 * @method void setIsSupportServerless(boolean $IsSupportServerless) 设置<p>是否支持serverless</p>
 */
class DescribeSaleZonesGroup extends AbstractModel
{
    /**
     * @var integer <p>可用区数</p>
     */
    public $ZoneNum;

    /**
     * @var array <p>可用区组合</p>
     */
    public $Zones;

    /**
     * @var array <p>支持的类型</p>
     */
    public $SupportTypes;

    /**
     * @var array <p>支持的磁盘类型</p><p>枚举值：</p><ul><li>CLOUD_TCS： 本地盘</li><li>CLOUD_HSSD： 增强型云盘</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AvailableDiskTypes;

    /**
     * @var boolean <p>是否支持serverless</p>
     */
    public $IsSupportServerless;

    /**
     * @param integer $ZoneNum <p>可用区数</p>
     * @param array $Zones <p>可用区组合</p>
     * @param array $SupportTypes <p>支持的类型</p>
     * @param array $AvailableDiskTypes <p>支持的磁盘类型</p><p>枚举值：</p><ul><li>CLOUD_TCS： 本地盘</li><li>CLOUD_HSSD： 增强型云盘</li></ul>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("ZoneNum",$param) and $param["ZoneNum"] !== null) {
            $this->ZoneNum = $param["ZoneNum"];
        }

        if (array_key_exists("Zones",$param) and $param["Zones"] !== null) {
            $this->Zones = $param["Zones"];
        }

        if (array_key_exists("SupportTypes",$param) and $param["SupportTypes"] !== null) {
            $this->SupportTypes = $param["SupportTypes"];
        }

        if (array_key_exists("AvailableDiskTypes",$param) and $param["AvailableDiskTypes"] !== null) {
            $this->AvailableDiskTypes = $param["AvailableDiskTypes"];
        }

        if (array_key_exists("IsSupportServerless",$param) and $param["IsSupportServerless"] !== null) {
            $this->IsSupportServerless = $param["IsSupportServerless"];
        }
    }
}
