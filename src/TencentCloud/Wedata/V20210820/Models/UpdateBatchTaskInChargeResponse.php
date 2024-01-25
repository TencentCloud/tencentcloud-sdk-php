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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateBatchTaskInCharge返回参数结构体
 *
 * @method integer getTotalNumber() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalNumber(integer $TotalNumber) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSuccessNumber() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSuccessNumber(integer $SuccessNumber) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFailNumber() 获取1
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFailNumber(integer $FailNumber) 设置1
注意：此字段可能返回 null，表示取不到有效值。
 * @method BatchTaskOperateNew getData() 获取批量操作返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setData(BatchTaskOperateNew $Data) 设置批量操作返回
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class UpdateBatchTaskInChargeResponse extends AbstractModel
{
    /**
     * @var integer 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalNumber;

    /**
     * @var integer 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SuccessNumber;

    /**
     * @var integer 1
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FailNumber;

    /**
     * @var BatchTaskOperateNew 批量操作返回
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Data;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $TotalNumber 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SuccessNumber 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FailNumber 1
注意：此字段可能返回 null，表示取不到有效值。
     * @param BatchTaskOperateNew $Data 批量操作返回
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("TotalNumber",$param) and $param["TotalNumber"] !== null) {
            $this->TotalNumber = $param["TotalNumber"];
        }

        if (array_key_exists("SuccessNumber",$param) and $param["SuccessNumber"] !== null) {
            $this->SuccessNumber = $param["SuccessNumber"];
        }

        if (array_key_exists("FailNumber",$param) and $param["FailNumber"] !== null) {
            $this->FailNumber = $param["FailNumber"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = new BatchTaskOperateNew();
            $this->Data->deserialize($param["Data"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
