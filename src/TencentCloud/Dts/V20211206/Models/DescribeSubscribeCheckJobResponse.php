<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
 * DescribeSubscribeCheckJob返回参数结构体
 *
 * @method string getSubscribeId() 获取订阅实例ID
 * @method void setSubscribeId(string $SubscribeId) 设置订阅实例ID
 * @method string getMessage() 获取失败或者报错提示，成功则提示success。
 * @method void setMessage(string $Message) 设置失败或者报错提示，成功则提示success。
 * @method string getStatus() 获取任务运行状态，可能值为 running(运行中),failed(失败),success(成功),unknown(未知状态)。
 * @method void setStatus(string $Status) 设置任务运行状态，可能值为 running(运行中),failed(失败),success(成功),unknown(未知状态)。
 * @method integer getProgress() 获取当前总体进度，范围 0~100
 * @method void setProgress(integer $Progress) 设置当前总体进度，范围 0~100
 * @method integer getStepAll() 获取校验总步骤数
 * @method void setStepAll(integer $StepAll) 设置校验总步骤数
 * @method integer getStepNow() 获取当前执行步骤
 * @method void setStepNow(integer $StepNow) 设置当前执行步骤
 * @method array getSteps() 获取各个步骤运行状态
 * @method void setSteps(array $Steps) 设置各个步骤运行状态
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSubscribeCheckJobResponse extends AbstractModel
{
    /**
     * @var string 订阅实例ID
     */
    public $SubscribeId;

    /**
     * @var string 失败或者报错提示，成功则提示success。
     */
    public $Message;

    /**
     * @var string 任务运行状态，可能值为 running(运行中),failed(失败),success(成功),unknown(未知状态)。
     */
    public $Status;

    /**
     * @var integer 当前总体进度，范围 0~100
     */
    public $Progress;

    /**
     * @var integer 校验总步骤数
     */
    public $StepAll;

    /**
     * @var integer 当前执行步骤
     */
    public $StepNow;

    /**
     * @var array 各个步骤运行状态
     */
    public $Steps;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $SubscribeId 订阅实例ID
     * @param string $Message 失败或者报错提示，成功则提示success。
     * @param string $Status 任务运行状态，可能值为 running(运行中),failed(失败),success(成功),unknown(未知状态)。
     * @param integer $Progress 当前总体进度，范围 0~100
     * @param integer $StepAll 校验总步骤数
     * @param integer $StepNow 当前执行步骤
     * @param array $Steps 各个步骤运行状态
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
        if (array_key_exists("SubscribeId",$param) and $param["SubscribeId"] !== null) {
            $this->SubscribeId = $param["SubscribeId"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("StepAll",$param) and $param["StepAll"] !== null) {
            $this->StepAll = $param["StepAll"];
        }

        if (array_key_exists("StepNow",$param) and $param["StepNow"] !== null) {
            $this->StepNow = $param["StepNow"];
        }

        if (array_key_exists("Steps",$param) and $param["Steps"] !== null) {
            $this->Steps = [];
            foreach ($param["Steps"] as $key => $value){
                $obj = new SubscribeCheckStepInfo();
                $obj->deserialize($value);
                array_push($this->Steps, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
