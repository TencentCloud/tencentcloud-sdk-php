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
 * QueryBatchPaymentResult接口返回响应
 *
 * @method string getBatchId() 获取批次号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBatchId(string $BatchId) 设置批次号
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalAmount() 获取批次总额
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalAmount(integer $TotalAmount) 设置批次总额
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取批次总量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置批次总量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReqReserved() 获取批次预留字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReqReserved(string $ReqReserved) 设置批次预留字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取批次备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置批次备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTransferType() 获取渠道类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransferType(integer $TransferType) 设置渠道类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTransferInfoList() 获取转账明细
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTransferInfoList(array $TransferInfoList) 设置转账明细
注意：此字段可能返回 null，表示取不到有效值。
 */
class QueryBatchPaymentResultData extends AbstractModel
{
    /**
     * @var string 批次号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BatchId;

    /**
     * @var integer 批次总额
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalAmount;

    /**
     * @var integer 批次总量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var string 批次预留字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReqReserved;

    /**
     * @var string 批次备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var integer 渠道类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TransferType;

    /**
     * @var array 转账明细
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TransferInfoList;

    /**
     * @param string $BatchId 批次号
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalAmount 批次总额
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 批次总量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReqReserved 批次预留字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 批次备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TransferType 渠道类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TransferInfoList 转账明细
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
        if (array_key_exists("BatchId",$param) and $param["BatchId"] !== null) {
            $this->BatchId = $param["BatchId"];
        }

        if (array_key_exists("TotalAmount",$param) and $param["TotalAmount"] !== null) {
            $this->TotalAmount = $param["TotalAmount"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("ReqReserved",$param) and $param["ReqReserved"] !== null) {
            $this->ReqReserved = $param["ReqReserved"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("TransferType",$param) and $param["TransferType"] !== null) {
            $this->TransferType = $param["TransferType"];
        }

        if (array_key_exists("TransferInfoList",$param) and $param["TransferInfoList"] !== null) {
            $this->TransferInfoList = [];
            foreach ($param["TransferInfoList"] as $key => $value){
                $obj = new QueryBatchPaymentResultDataInfo();
                $obj->deserialize($value);
                array_push($this->TransferInfoList, $obj);
            }
        }
    }
}
