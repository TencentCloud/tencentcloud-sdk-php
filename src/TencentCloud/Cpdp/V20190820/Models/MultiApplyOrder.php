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
 * 分账订单信息
 *
 * @method string getOutDistributeNo() 获取商户分账单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutDistributeNo(string $OutDistributeNo) 设置商户分账单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDistributeNo() 获取平台分账单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDistributeNo(string $DistributeNo) 设置平台分账单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOrderNo() 获取平台交易订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOrderNo(string $OrderNo) 设置平台交易订单号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取分账订单状态（0初始1成功2失败3撤销）
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(string $Status) 设置分账订单状态（0初始1成功2失败3撤销）
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getInDate() 获取入账日期，格式yyyy-MM-dd
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInDate(string $InDate) 设置入账日期，格式yyyy-MM-dd
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDetails() 获取分账明细
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDetails(array $Details) 设置分账明细
注意：此字段可能返回 null，表示取不到有效值。
 */
class MultiApplyOrder extends AbstractModel
{
    /**
     * @var string 商户分账单号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutDistributeNo;

    /**
     * @var string 平台分账单号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DistributeNo;

    /**
     * @var string 平台交易订单号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OrderNo;

    /**
     * @var string 分账订单状态（0初始1成功2失败3撤销）
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var string 入账日期，格式yyyy-MM-dd
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InDate;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var array 分账明细
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Details;

    /**
     * @param string $OutDistributeNo 商户分账单号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DistributeNo 平台分账单号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OrderNo 平台交易订单号
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 分账订单状态（0初始1成功2失败3撤销）
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $InDate 入账日期，格式yyyy-MM-dd
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Details 分账明细
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
        if (array_key_exists("OutDistributeNo",$param) and $param["OutDistributeNo"] !== null) {
            $this->OutDistributeNo = $param["OutDistributeNo"];
        }

        if (array_key_exists("DistributeNo",$param) and $param["DistributeNo"] !== null) {
            $this->DistributeNo = $param["DistributeNo"];
        }

        if (array_key_exists("OrderNo",$param) and $param["OrderNo"] !== null) {
            $this->OrderNo = $param["OrderNo"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("InDate",$param) and $param["InDate"] !== null) {
            $this->InDate = $param["InDate"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Details",$param) and $param["Details"] !== null) {
            $this->Details = [];
            foreach ($param["Details"] as $key => $value){
                $obj = new MultiApplyDetail();
                $obj->deserialize($value);
                array_push($this->Details, $obj);
            }
        }
    }
}
