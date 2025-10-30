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
 * 任务步骤信息
 *
 * @method string getStatus() 获取步骤的状态， 包括：notStarted(未开始)、running(运行中)、success(成功)、failed(失败)等
 * @method void setStatus(string $Status) 设置步骤的状态， 包括：notStarted(未开始)、running(运行中)、success(成功)、failed(失败)等
 * @method integer getPercent() 获取进度信息
 * @method void setPercent(integer $Percent) 设置进度信息
 * @method integer getStepAll() 获取总的步骤数
 * @method void setStepAll(integer $StepAll) 设置总的步骤数
 * @method integer getStepNow() 获取当前进行的步骤
 * @method void setStepNow(integer $StepNow) 设置当前进行的步骤
 * @method string getMessage() 获取当前步骤输出提示信息
 * @method void setMessage(string $Message) 设置当前步骤输出提示信息
 * @method array getSteps() 获取步骤信息
 * @method void setSteps(array $Steps) 设置步骤信息
 */
class ProcessProgress extends AbstractModel
{
    /**
     * @var string 步骤的状态， 包括：notStarted(未开始)、running(运行中)、success(成功)、failed(失败)等
     */
    public $Status;

    /**
     * @var integer 进度信息
     */
    public $Percent;

    /**
     * @var integer 总的步骤数
     */
    public $StepAll;

    /**
     * @var integer 当前进行的步骤
     */
    public $StepNow;

    /**
     * @var string 当前步骤输出提示信息
     */
    public $Message;

    /**
     * @var array 步骤信息
     */
    public $Steps;

    /**
     * @param string $Status 步骤的状态， 包括：notStarted(未开始)、running(运行中)、success(成功)、failed(失败)等
     * @param integer $Percent 进度信息
     * @param integer $StepAll 总的步骤数
     * @param integer $StepNow 当前进行的步骤
     * @param string $Message 当前步骤输出提示信息
     * @param array $Steps 步骤信息
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

        if (array_key_exists("Percent",$param) and $param["Percent"] !== null) {
            $this->Percent = $param["Percent"];
        }

        if (array_key_exists("StepAll",$param) and $param["StepAll"] !== null) {
            $this->StepAll = $param["StepAll"];
        }

        if (array_key_exists("StepNow",$param) and $param["StepNow"] !== null) {
            $this->StepNow = $param["StepNow"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Steps",$param) and $param["Steps"] !== null) {
            $this->Steps = [];
            foreach ($param["Steps"] as $key => $value){
                $obj = new StepDetailInfo();
                $obj->deserialize($value);
                array_push($this->Steps, $obj);
            }
        }
    }
}
