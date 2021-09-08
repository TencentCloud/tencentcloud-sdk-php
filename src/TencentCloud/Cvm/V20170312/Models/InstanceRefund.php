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
namespace TencentCloud\Cvm\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述退款详情。
 *
 * @method string getInstanceId() 获取实例Id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceId(string $InstanceId) 设置实例Id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getRefunds() 获取退款数额。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRefunds(float $Refunds) 设置退款数额。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPriceDetail() 获取退款详情。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPriceDetail(string $PriceDetail) 设置退款详情。
注意：此字段可能返回 null，表示取不到有效值。
 */
class InstanceRefund extends AbstractModel
{
    /**
     * @var string 实例Id。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceId;

    /**
     * @var float 退款数额。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Refunds;

    /**
     * @var string 退款详情。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PriceDetail;

    /**
     * @param string $InstanceId 实例Id。
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Refunds 退款数额。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PriceDetail 退款详情。
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Refunds",$param) and $param["Refunds"] !== null) {
            $this->Refunds = $param["Refunds"];
        }

        if (array_key_exists("PriceDetail",$param) and $param["PriceDetail"] !== null) {
            $this->PriceDetail = $param["PriceDetail"];
        }
    }
}
