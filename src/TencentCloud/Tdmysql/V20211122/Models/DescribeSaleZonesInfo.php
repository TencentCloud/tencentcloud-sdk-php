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
 * 查询售卖接口，zone信息返回类型
 *
 * @method string getZone() 获取<p>Zone英文字符串</p>
 * @method void setZone(string $Zone) 设置<p>Zone英文字符串</p>
 * @method string getZoneName() 获取<p>Zone中文字符串</p>
 * @method void setZoneName(string $ZoneName) 设置<p>Zone中文字符串</p>
 * @method integer getEnable() 获取<p>是否售卖，1：售卖；0：不售卖</p>
 * @method void setEnable(integer $Enable) 设置<p>是否售卖，1：售卖；0：不售卖</p>
 * @method integer getIsDefaultMaster() 获取<p>是否是默认主可用区,0不是，1是</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsDefaultMaster(integer $IsDefaultMaster) 设置<p>是否是默认主可用区,0不是，1是</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAvailableDiskTypes() 获取<p>可用区可选磁盘类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvailableDiskTypes(array $AvailableDiskTypes) 设置<p>可用区可选磁盘类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSupportTypes() 获取<p>是否是独享可用区</p>
 * @method void setSupportTypes(array $SupportTypes) 设置<p>是否是独享可用区</p>
 * @method boolean getIsSupportServerless() 获取<p>是否支持serverless</p>
 * @method void setIsSupportServerless(boolean $IsSupportServerless) 设置<p>是否支持serverless</p>
 */
class DescribeSaleZonesInfo extends AbstractModel
{
    /**
     * @var string <p>Zone英文字符串</p>
     */
    public $Zone;

    /**
     * @var string <p>Zone中文字符串</p>
     */
    public $ZoneName;

    /**
     * @var integer <p>是否售卖，1：售卖；0：不售卖</p>
     */
    public $Enable;

    /**
     * @var integer <p>是否是默认主可用区,0不是，1是</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsDefaultMaster;

    /**
     * @var array <p>可用区可选磁盘类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AvailableDiskTypes;

    /**
     * @var array <p>是否是独享可用区</p>
     */
    public $SupportTypes;

    /**
     * @var boolean <p>是否支持serverless</p>
     */
    public $IsSupportServerless;

    /**
     * @param string $Zone <p>Zone英文字符串</p>
     * @param string $ZoneName <p>Zone中文字符串</p>
     * @param integer $Enable <p>是否售卖，1：售卖；0：不售卖</p>
     * @param integer $IsDefaultMaster <p>是否是默认主可用区,0不是，1是</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AvailableDiskTypes <p>可用区可选磁盘类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SupportTypes <p>是否是独享可用区</p>
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ZoneName",$param) and $param["ZoneName"] !== null) {
            $this->ZoneName = $param["ZoneName"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("IsDefaultMaster",$param) and $param["IsDefaultMaster"] !== null) {
            $this->IsDefaultMaster = $param["IsDefaultMaster"];
        }

        if (array_key_exists("AvailableDiskTypes",$param) and $param["AvailableDiskTypes"] !== null) {
            $this->AvailableDiskTypes = $param["AvailableDiskTypes"];
        }

        if (array_key_exists("SupportTypes",$param) and $param["SupportTypes"] !== null) {
            $this->SupportTypes = $param["SupportTypes"];
        }

        if (array_key_exists("IsSupportServerless",$param) and $param["IsSupportServerless"] !== null) {
            $this->IsSupportServerless = $param["IsSupportServerless"];
        }
    }
}
