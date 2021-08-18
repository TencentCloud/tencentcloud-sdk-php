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
 * CreateBatchPayment接口返回响应
 *
 * @method string getBatchId() 获取批次号
 * @method void setBatchId(string $BatchId) 设置批次号
 * @method array getBatchInfoList() 获取批次列表详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBatchInfoList(array $BatchInfoList) 设置批次列表详情
注意：此字段可能返回 null，表示取不到有效值。
 */
class CreateBatchPaymentData extends AbstractModel
{
    /**
     * @var string 批次号
     */
    public $BatchId;

    /**
     * @var array 批次列表详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BatchInfoList;

    /**
     * @param string $BatchId 批次号
     * @param array $BatchInfoList 批次列表详情
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

        if (array_key_exists("BatchInfoList",$param) and $param["BatchInfoList"] !== null) {
            $this->BatchInfoList = [];
            foreach ($param["BatchInfoList"] as $key => $value){
                $obj = new CreateBatchPaymentBatchData();
                $obj->deserialize($value);
                array_push($this->BatchInfoList, $obj);
            }
        }
    }
}
