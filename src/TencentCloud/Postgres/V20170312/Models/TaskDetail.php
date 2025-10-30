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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务的详情信息
 *
 * @method string getCurrentStep() 获取当前执行的子任务步骤名称。
 * @method void setCurrentStep(string $CurrentStep) 设置当前执行的子任务步骤名称。
 * @method string getAllSteps() 获取当前任务所拥有的子步骤描述。
 * @method void setAllSteps(string $AllSteps) 设置当前任务所拥有的子步骤描述。
 * @method string getInput() 获取任务的输入参数。
 * @method void setInput(string $Input) 设置任务的输入参数。
 * @method string getOutput() 获取任务的输出参数。
 * @method void setOutput(string $Output) 设置任务的输出参数。
 * @method integer getSwitchTag() 获取指定实例配置完成变更后的切换时间，默认值：0
0:   此任务不需要切换
1：立即切换
2：指定时间切换
3：维护时间窗口内切换。
 * @method void setSwitchTag(integer $SwitchTag) 设置指定实例配置完成变更后的切换时间，默认值：0
0:   此任务不需要切换
1：立即切换
2：指定时间切换
3：维护时间窗口内切换。
 * @method string getSwitchTime() 获取指定的切换时间。
 * @method void setSwitchTime(string $SwitchTime) 设置指定的切换时间。
 * @method string getMessage() 获取任务的提示信息。
 * @method void setMessage(string $Message) 设置任务的提示信息。
 */
class TaskDetail extends AbstractModel
{
    /**
     * @var string 当前执行的子任务步骤名称。
     */
    public $CurrentStep;

    /**
     * @var string 当前任务所拥有的子步骤描述。
     */
    public $AllSteps;

    /**
     * @var string 任务的输入参数。
     */
    public $Input;

    /**
     * @var string 任务的输出参数。
     */
    public $Output;

    /**
     * @var integer 指定实例配置完成变更后的切换时间，默认值：0
0:   此任务不需要切换
1：立即切换
2：指定时间切换
3：维护时间窗口内切换。
     */
    public $SwitchTag;

    /**
     * @var string 指定的切换时间。
     */
    public $SwitchTime;

    /**
     * @var string 任务的提示信息。
     */
    public $Message;

    /**
     * @param string $CurrentStep 当前执行的子任务步骤名称。
     * @param string $AllSteps 当前任务所拥有的子步骤描述。
     * @param string $Input 任务的输入参数。
     * @param string $Output 任务的输出参数。
     * @param integer $SwitchTag 指定实例配置完成变更后的切换时间，默认值：0
0:   此任务不需要切换
1：立即切换
2：指定时间切换
3：维护时间窗口内切换。
     * @param string $SwitchTime 指定的切换时间。
     * @param string $Message 任务的提示信息。
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
        if (array_key_exists("CurrentStep",$param) and $param["CurrentStep"] !== null) {
            $this->CurrentStep = $param["CurrentStep"];
        }

        if (array_key_exists("AllSteps",$param) and $param["AllSteps"] !== null) {
            $this->AllSteps = $param["AllSteps"];
        }

        if (array_key_exists("Input",$param) and $param["Input"] !== null) {
            $this->Input = $param["Input"];
        }

        if (array_key_exists("Output",$param) and $param["Output"] !== null) {
            $this->Output = $param["Output"];
        }

        if (array_key_exists("SwitchTag",$param) and $param["SwitchTag"] !== null) {
            $this->SwitchTag = $param["SwitchTag"];
        }

        if (array_key_exists("SwitchTime",$param) and $param["SwitchTime"] !== null) {
            $this->SwitchTime = $param["SwitchTime"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
