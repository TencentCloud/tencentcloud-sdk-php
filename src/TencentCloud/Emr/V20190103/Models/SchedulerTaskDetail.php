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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 调度任务详情
 *
 * @method string getStep() 获取步骤
 * @method void setStep(string $Step) 设置步骤
 * @method string getProgress() 获取进度
 * @method void setProgress(string $Progress) 设置进度
 * @method string getFailReason() 获取失败信息
 * @method void setFailReason(string $FailReason) 设置失败信息
 * @method integer getJobId() 获取用来获取详情的id
 * @method void setJobId(integer $JobId) 设置用来获取详情的id
 */
class SchedulerTaskDetail extends AbstractModel
{
    /**
     * @var string 步骤
     */
    public $Step;

    /**
     * @var string 进度
     */
    public $Progress;

    /**
     * @var string 失败信息
     */
    public $FailReason;

    /**
     * @var integer 用来获取详情的id
     */
    public $JobId;

    /**
     * @param string $Step 步骤
     * @param string $Progress 进度
     * @param string $FailReason 失败信息
     * @param integer $JobId 用来获取详情的id
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
        if (array_key_exists("Step",$param) and $param["Step"] !== null) {
            $this->Step = $param["Step"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("FailReason",$param) and $param["FailReason"] !== null) {
            $this->FailReason = $param["FailReason"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }
    }
}
