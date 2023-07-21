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
namespace TencentCloud\Partners\V20180321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 退款单关联的原始订单信息
 *
 * @method string getDealName() 获取退款单关联的原始子订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDealName(string $DealName) 设置退款单关联的原始子订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRefundAmount() 获取退款金额，单位分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRefundAmount(integer $RefundAmount) 设置退款金额，单位分
注意：此字段可能返回 null，表示取不到有效值。
 */
class RefundMap extends AbstractModel
{
    /**
     * @var string 退款单关联的原始子订单号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DealName;

    /**
     * @var integer 退款金额，单位分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RefundAmount;

    /**
     * @param string $DealName 退款单关联的原始子订单号
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RefundAmount 退款金额，单位分
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
        if (array_key_exists("DealName",$param) and $param["DealName"] !== null) {
            $this->DealName = $param["DealName"];
        }

        if (array_key_exists("RefundAmount",$param) and $param["RefundAmount"] !== null) {
            $this->RefundAmount = $param["RefundAmount"];
        }
    }
}
