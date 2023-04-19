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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RenewCkafkaInstance接口出参bigDealIds
 *
 * @method string getBigDealId() 获取订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBigDealId(string $BigDealId) 设置订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDealName() 获取子订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDealName(string $DealName) 设置子订单号
注意：此字段可能返回 null，表示取不到有效值。
 */
class RenewCkafkaInstanceResponse extends AbstractModel
{
    /**
     * @var string 订单号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BigDealId;

    /**
     * @var string 子订单号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DealName;

    /**
     * @param string $BigDealId 订单号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DealName 子订单号
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
        if (array_key_exists("BigDealId",$param) and $param["BigDealId"] !== null) {
            $this->BigDealId = $param["BigDealId"];
        }

        if (array_key_exists("DealName",$param) and $param["DealName"] !== null) {
            $this->DealName = $param["DealName"];
        }
    }
}
