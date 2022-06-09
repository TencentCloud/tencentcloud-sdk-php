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
namespace TencentCloud\Mmps\V20200710\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeScanTaskStatus返回参数结构体
 *
 * @method integer getResult() 获取返回值, 0:成功, 其他值请查看“返回值”定义
 * @method void setResult(integer $Result) 设置返回值, 0:成功, 其他值请查看“返回值”定义
 * @method integer getStatus() 获取0:默认值(待检测/待咨询), 1.检测中,  4:任务完成/咨询完成, 5:任务失败, 6:咨询中;
 * @method void setStatus(integer $Status) 设置0:默认值(待检测/待咨询), 1.检测中,  4:任务完成/咨询完成, 5:任务失败, 6:咨询中;
 * @method string getErrMsg() 获取诊断失败的错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrMsg(string $ErrMsg) 设置诊断失败的错误信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFlowSteps() 获取任务流详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFlowSteps(array $FlowSteps) 设置任务流详情
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeScanTaskStatusResponse extends AbstractModel
{
    /**
     * @var integer 返回值, 0:成功, 其他值请查看“返回值”定义
     */
    public $Result;

    /**
     * @var integer 0:默认值(待检测/待咨询), 1.检测中,  4:任务完成/咨询完成, 5:任务失败, 6:咨询中;
     */
    public $Status;

    /**
     * @var string 诊断失败的错误信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrMsg;

    /**
     * @var array 任务流详情
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FlowSteps;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Result 返回值, 0:成功, 其他值请查看“返回值”定义
     * @param integer $Status 0:默认值(待检测/待咨询), 1.检测中,  4:任务完成/咨询完成, 5:任务失败, 6:咨询中;
     * @param string $ErrMsg 诊断失败的错误信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FlowSteps 任务流详情
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
        if (array_key_exists("Result",$param) and $param["Result"] !== null) {
            $this->Result = $param["Result"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("FlowSteps",$param) and $param["FlowSteps"] !== null) {
            $this->FlowSteps = [];
            foreach ($param["FlowSteps"] as $key => $value){
                $obj = new TaskFlowStepsInfo();
                $obj->deserialize($value);
                array_push($this->FlowSteps, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
