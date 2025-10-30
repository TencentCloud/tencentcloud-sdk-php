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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务进度查询
 *
 * @method string getCurrentStep() 获取当前步骤
 * @method void setCurrentStep(string $CurrentStep) 设置当前步骤
 * @method integer getCurrentStepProgress() 获取当前进度
 * @method void setCurrentStepProgress(integer $CurrentStepProgress) 设置当前进度
 * @method string getCurrentStepRemainingTime() 获取预估时间
 * @method void setCurrentStepRemainingTime(string $CurrentStepRemainingTime) 设置预估时间
 */
class TaskProgressInfo extends AbstractModel
{
    /**
     * @var string 当前步骤
     */
    public $CurrentStep;

    /**
     * @var integer 当前进度
     */
    public $CurrentStepProgress;

    /**
     * @var string 预估时间
     */
    public $CurrentStepRemainingTime;

    /**
     * @param string $CurrentStep 当前步骤
     * @param integer $CurrentStepProgress 当前进度
     * @param string $CurrentStepRemainingTime 预估时间
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

        if (array_key_exists("CurrentStepProgress",$param) and $param["CurrentStepProgress"] !== null) {
            $this->CurrentStepProgress = $param["CurrentStepProgress"];
        }

        if (array_key_exists("CurrentStepRemainingTime",$param) and $param["CurrentStepRemainingTime"] !== null) {
            $this->CurrentStepRemainingTime = $param["CurrentStepRemainingTime"];
        }
    }
}
