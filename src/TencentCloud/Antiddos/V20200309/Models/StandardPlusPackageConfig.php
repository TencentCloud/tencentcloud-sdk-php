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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * {
    "Region": "ap-guangzhou",
    "ProtectCount": "TWO_TIMES",
    "ProtectIpCount": 1,
    "Bandwidth": 50,
    "ElasticBandwidthFlag": true
}
 *
 * @method string getRegion() 获取购买高防包所属地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置购买高防包所属地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProtectCount() 获取防护次数：TWO_TIMES:两次全力防 UNLIMITED无限次防
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtectCount(string $ProtectCount) 设置防护次数：TWO_TIMES:两次全力防 UNLIMITED无限次防
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getProtectIpCount() 获取防护IP数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProtectIpCount(integer $ProtectIpCount) 设置防护IP数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBandwidth() 获取防护带宽50Mbps
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBandwidth(integer $Bandwidth) 设置防护带宽50Mbps
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getElasticBandwidthFlag() 获取是否开启弹性业务带宽
true 开启
false 不开启 
默认不开启
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setElasticBandwidthFlag(boolean $ElasticBandwidthFlag) 设置是否开启弹性业务带宽
true 开启
false 不开启 
默认不开启
注意：此字段可能返回 null，表示取不到有效值。
 */
class StandardPlusPackageConfig extends AbstractModel
{
    /**
     * @var string 购买高防包所属地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var string 防护次数：TWO_TIMES:两次全力防 UNLIMITED无限次防
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProtectCount;

    /**
     * @var integer 防护IP数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProtectIpCount;

    /**
     * @var integer 防护带宽50Mbps
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Bandwidth;

    /**
     * @var boolean 是否开启弹性业务带宽
true 开启
false 不开启 
默认不开启
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ElasticBandwidthFlag;

    /**
     * @param string $Region 购买高防包所属地域
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ProtectCount 防护次数：TWO_TIMES:两次全力防 UNLIMITED无限次防
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ProtectIpCount 防护IP数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Bandwidth 防护带宽50Mbps
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ElasticBandwidthFlag 是否开启弹性业务带宽
true 开启
false 不开启 
默认不开启
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("ProtectCount",$param) and $param["ProtectCount"] !== null) {
            $this->ProtectCount = $param["ProtectCount"];
        }

        if (array_key_exists("ProtectIpCount",$param) and $param["ProtectIpCount"] !== null) {
            $this->ProtectIpCount = $param["ProtectIpCount"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("ElasticBandwidthFlag",$param) and $param["ElasticBandwidthFlag"] !== null) {
            $this->ElasticBandwidthFlag = $param["ElasticBandwidthFlag"];
        }
    }
}
