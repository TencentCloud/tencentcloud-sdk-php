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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeModifyCheckSyncJobResult返回参数结构体
 *
 * @method string getStatus() 获取校验任务执行状态，如：notStarted(未开始)、running(校验中)、failed(校验任务失败)、success(任务成功)
 * @method void setStatus(string $Status) 设置校验任务执行状态，如：notStarted(未开始)、running(校验中)、failed(校验任务失败)、success(任务成功)
 * @method integer getStepCount() 获取校验的步骤总数
 * @method void setStepCount(integer $StepCount) 设置校验的步骤总数
 * @method integer getStepCur() 获取当前所在步骤
 * @method void setStepCur(integer $StepCur) 设置当前所在步骤
 * @method integer getProgress() 获取总体进度，范围为[0,100]	
 * @method void setProgress(integer $Progress) 设置总体进度，范围为[0,100]	
 * @method array getStepInfos() 获取步骤详细信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStepInfos(array $StepInfos) 设置步骤详细信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeModifyCheckSyncJobResultResponse extends AbstractModel
{
    /**
     * @var string 校验任务执行状态，如：notStarted(未开始)、running(校验中)、failed(校验任务失败)、success(任务成功)
     */
    public $Status;

    /**
     * @var integer 校验的步骤总数
     */
    public $StepCount;

    /**
     * @var integer 当前所在步骤
     */
    public $StepCur;

    /**
     * @var integer 总体进度，范围为[0,100]	
     */
    public $Progress;

    /**
     * @var array 步骤详细信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StepInfos;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Status 校验任务执行状态，如：notStarted(未开始)、running(校验中)、failed(校验任务失败)、success(任务成功)
     * @param integer $StepCount 校验的步骤总数
     * @param integer $StepCur 当前所在步骤
     * @param integer $Progress 总体进度，范围为[0,100]	
     * @param array $StepInfos 步骤详细信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StepCount",$param) and $param["StepCount"] !== null) {
            $this->StepCount = $param["StepCount"];
        }

        if (array_key_exists("StepCur",$param) and $param["StepCur"] !== null) {
            $this->StepCur = $param["StepCur"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("StepInfos",$param) and $param["StepInfos"] !== null) {
            $this->StepInfos = [];
            foreach ($param["StepInfos"] as $key => $value){
                $obj = new StepInfo();
                $obj->deserialize($value);
                array_push($this->StepInfos, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
