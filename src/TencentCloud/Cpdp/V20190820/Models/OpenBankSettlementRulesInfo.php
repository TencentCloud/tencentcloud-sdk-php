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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云企付-结算规则信息
 *
 * @method string getUnfreezeRule() 获取ONCE：仅单次解冻（默认）
MULTI：多次解冻
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUnfreezeRule(string $UnfreezeRule) 设置ONCE：仅单次解冻（默认）
MULTI：多次解冻
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRefundRule() 获取ONCE：仅单次退款（默认）
MULTI：多次退款
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRefundRule(string $RefundRule) 设置ONCE：仅单次退款（默认）
MULTI：多次退款
注意：此字段可能返回 null，表示取不到有效值。
 */
class OpenBankSettlementRulesInfo extends AbstractModel
{
    /**
     * @var string ONCE：仅单次解冻（默认）
MULTI：多次解冻
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UnfreezeRule;

    /**
     * @var string ONCE：仅单次退款（默认）
MULTI：多次退款
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RefundRule;

    /**
     * @param string $UnfreezeRule ONCE：仅单次解冻（默认）
MULTI：多次解冻
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RefundRule ONCE：仅单次退款（默认）
MULTI：多次退款
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
        if (array_key_exists("UnfreezeRule",$param) and $param["UnfreezeRule"] !== null) {
            $this->UnfreezeRule = $param["UnfreezeRule"];
        }

        if (array_key_exists("RefundRule",$param) and $param["RefundRule"] !== null) {
            $this->RefundRule = $param["RefundRule"];
        }
    }
}
