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
 * Anycast转外套餐详情
 *
 * @method integer getNormalBandwidth() 获取业务带宽(单位M)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNormalBandwidth(integer $NormalBandwidth) 设置业务带宽(单位M)
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getForwardRulesLimit() 获取转发规则数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setForwardRulesLimit(integer $ForwardRulesLimit) 设置转发规则数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAutoRenewFlag() 获取自动续费标记
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费标记
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCurDeadline() 获取到期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCurDeadline(string $CurDeadline) 设置到期时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class AnycastOutPackRelation extends AbstractModel
{
    /**
     * @var integer 业务带宽(单位M)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NormalBandwidth;

    /**
     * @var integer 转发规则数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ForwardRulesLimit;

    /**
     * @var integer 自动续费标记
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoRenewFlag;

    /**
     * @var string 到期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CurDeadline;

    /**
     * @param integer $NormalBandwidth 业务带宽(单位M)
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ForwardRulesLimit 转发规则数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AutoRenewFlag 自动续费标记
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CurDeadline 到期时间
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
        if (array_key_exists("NormalBandwidth",$param) and $param["NormalBandwidth"] !== null) {
            $this->NormalBandwidth = $param["NormalBandwidth"];
        }

        if (array_key_exists("ForwardRulesLimit",$param) and $param["ForwardRulesLimit"] !== null) {
            $this->ForwardRulesLimit = $param["ForwardRulesLimit"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("CurDeadline",$param) and $param["CurDeadline"] !== null) {
            $this->CurDeadline = $param["CurDeadline"];
        }
    }
}
