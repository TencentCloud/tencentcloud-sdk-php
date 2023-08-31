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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 集群购买、扩缩容、续费订单信息
 *
 * @method integer getType() 获取创建、续费、扩缩容 1 2 3
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(integer $Type) 设置创建、续费、扩缩容 1 2 3
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAutoRenewFlag() 获取自动续费 1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费 1
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOperateUin() 获取操作人的UIN
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOperateUin(string $OperateUin) 设置操作人的UIN
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getComputeCu() 获取最终集群的CU数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setComputeCu(integer $ComputeCu) 设置最终集群的CU数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrderTime() 获取订单的时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrderTime(string $OrderTime) 设置订单的时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class Order extends AbstractModel
{
    /**
     * @var integer 创建、续费、扩缩容 1 2 3
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var integer 自动续费 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoRenewFlag;

    /**
     * @var string 操作人的UIN
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OperateUin;

    /**
     * @var integer 最终集群的CU数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ComputeCu;

    /**
     * @var string 订单的时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrderTime;

    /**
     * @param integer $Type 创建、续费、扩缩容 1 2 3
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AutoRenewFlag 自动续费 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OperateUin 操作人的UIN
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ComputeCu 最终集群的CU数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrderTime 订单的时间
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("OperateUin",$param) and $param["OperateUin"] !== null) {
            $this->OperateUin = $param["OperateUin"];
        }

        if (array_key_exists("ComputeCu",$param) and $param["ComputeCu"] !== null) {
            $this->ComputeCu = $param["ComputeCu"];
        }

        if (array_key_exists("OrderTime",$param) and $param["OrderTime"] !== null) {
            $this->OrderTime = $param["OrderTime"];
        }
    }
}
