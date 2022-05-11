<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * 高防包资产实例的规格信息
 *
 * @method integer getProtectBandwidth() 获取保底防护峰值，单位Gbps
 * @method void setProtectBandwidth(integer $ProtectBandwidth) 设置保底防护峰值，单位Gbps
 * @method integer getProtectCountLimit() 获取防护次数，单位次
 * @method void setProtectCountLimit(integer $ProtectCountLimit) 设置防护次数，单位次
 * @method integer getProtectIPNumberLimit() 获取防护IP数，单位个
 * @method void setProtectIPNumberLimit(integer $ProtectIPNumberLimit) 设置防护IP数，单位个
 * @method integer getAutoRenewFlag() 获取自动续费状态，取值[
0：没有开启自动续费
1：开启了自动续费
]
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费状态，取值[
0：没有开启自动续费
1：开启了自动续费
]
 * @method integer getUnionPackFlag() 获取联合产品标记，0代表普通高防包，1代表联合高防包
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnionPackFlag(integer $UnionPackFlag) 设置联合产品标记，0代表普通高防包，1代表联合高防包
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getServiceBandWidth() 获取业务带宽
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceBandWidth(integer $ServiceBandWidth) 设置业务带宽
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getBattleEditionFlag() 获取战斗服版本标记，0表示普通高防包，1表示战斗服高防包
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBattleEditionFlag(integer $BattleEditionFlag) 设置战斗服版本标记，0表示普通高防包，1表示战斗服高防包
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getChannelEditionFlag() 获取渠道版标记，0表示普通高防包，1表示渠道版高防包
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelEditionFlag(integer $ChannelEditionFlag) 设置渠道版标记，0表示普通高防包，1表示渠道版高防包
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getEnterpriseFlag() 获取高防包企业版标记，0表示普通高防包；1表示企业版高防包
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnterpriseFlag(integer $EnterpriseFlag) 设置高防包企业版标记，0表示普通高防包；1表示企业版高防包
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getElasticLimit() 获取高防包企业版弹性阈值，0表示未开启；大于0为弹性防护阈值
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setElasticLimit(integer $ElasticLimit) 设置高防包企业版弹性阈值，0表示未开启；大于0为弹性防护阈值
注意：此字段可能返回 null，表示取不到有效值。
 */
class BGPInstanceSpecification extends AbstractModel
{
    /**
     * @var integer 保底防护峰值，单位Gbps
     */
    public $ProtectBandwidth;

    /**
     * @var integer 防护次数，单位次
     */
    public $ProtectCountLimit;

    /**
     * @var integer 防护IP数，单位个
     */
    public $ProtectIPNumberLimit;

    /**
     * @var integer 自动续费状态，取值[
0：没有开启自动续费
1：开启了自动续费
]
     */
    public $AutoRenewFlag;

    /**
     * @var integer 联合产品标记，0代表普通高防包，1代表联合高防包
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnionPackFlag;

    /**
     * @var integer 业务带宽
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceBandWidth;

    /**
     * @var integer 战斗服版本标记，0表示普通高防包，1表示战斗服高防包
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BattleEditionFlag;

    /**
     * @var integer 渠道版标记，0表示普通高防包，1表示渠道版高防包
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelEditionFlag;

    /**
     * @var integer 高防包企业版标记，0表示普通高防包；1表示企业版高防包
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnterpriseFlag;

    /**
     * @var integer 高防包企业版弹性阈值，0表示未开启；大于0为弹性防护阈值
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ElasticLimit;

    /**
     * @param integer $ProtectBandwidth 保底防护峰值，单位Gbps
     * @param integer $ProtectCountLimit 防护次数，单位次
     * @param integer $ProtectIPNumberLimit 防护IP数，单位个
     * @param integer $AutoRenewFlag 自动续费状态，取值[
0：没有开启自动续费
1：开启了自动续费
]
     * @param integer $UnionPackFlag 联合产品标记，0代表普通高防包，1代表联合高防包
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ServiceBandWidth 业务带宽
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $BattleEditionFlag 战斗服版本标记，0表示普通高防包，1表示战斗服高防包
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ChannelEditionFlag 渠道版标记，0表示普通高防包，1表示渠道版高防包
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $EnterpriseFlag 高防包企业版标记，0表示普通高防包；1表示企业版高防包
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ElasticLimit 高防包企业版弹性阈值，0表示未开启；大于0为弹性防护阈值
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
        if (array_key_exists("ProtectBandwidth",$param) and $param["ProtectBandwidth"] !== null) {
            $this->ProtectBandwidth = $param["ProtectBandwidth"];
        }

        if (array_key_exists("ProtectCountLimit",$param) and $param["ProtectCountLimit"] !== null) {
            $this->ProtectCountLimit = $param["ProtectCountLimit"];
        }

        if (array_key_exists("ProtectIPNumberLimit",$param) and $param["ProtectIPNumberLimit"] !== null) {
            $this->ProtectIPNumberLimit = $param["ProtectIPNumberLimit"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("UnionPackFlag",$param) and $param["UnionPackFlag"] !== null) {
            $this->UnionPackFlag = $param["UnionPackFlag"];
        }

        if (array_key_exists("ServiceBandWidth",$param) and $param["ServiceBandWidth"] !== null) {
            $this->ServiceBandWidth = $param["ServiceBandWidth"];
        }

        if (array_key_exists("BattleEditionFlag",$param) and $param["BattleEditionFlag"] !== null) {
            $this->BattleEditionFlag = $param["BattleEditionFlag"];
        }

        if (array_key_exists("ChannelEditionFlag",$param) and $param["ChannelEditionFlag"] !== null) {
            $this->ChannelEditionFlag = $param["ChannelEditionFlag"];
        }

        if (array_key_exists("EnterpriseFlag",$param) and $param["EnterpriseFlag"] !== null) {
            $this->EnterpriseFlag = $param["EnterpriseFlag"];
        }

        if (array_key_exists("ElasticLimit",$param) and $param["ElasticLimit"] !== null) {
            $this->ElasticLimit = $param["ElasticLimit"];
        }
    }
}
