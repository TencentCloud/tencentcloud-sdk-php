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
 * 校验任务运行详情
 *
 * @method string getStartAt() 获取任务开始时间
 * @method void setStartAt(string $StartAt) 设置任务开始时间
 * @method string getEndAt() 获取任务结束时间
 * @method void setEndAt(string $EndAt) 设置任务结束时间
 * @method ProcessProgress getProgress() 获取任务步骤信息
 * @method void setProgress(ProcessProgress $Progress) 设置任务步骤信息
 */
class CheckStepInfo extends AbstractModel
{
    /**
     * @var string 任务开始时间
     */
    public $StartAt;

    /**
     * @var string 任务结束时间
     */
    public $EndAt;

    /**
     * @var ProcessProgress 任务步骤信息
     */
    public $Progress;

    /**
     * @param string $StartAt 任务开始时间
     * @param string $EndAt 任务结束时间
     * @param ProcessProgress $Progress 任务步骤信息
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
        if (array_key_exists("StartAt",$param) and $param["StartAt"] !== null) {
            $this->StartAt = $param["StartAt"];
        }

        if (array_key_exists("EndAt",$param) and $param["EndAt"] !== null) {
            $this->EndAt = $param["EndAt"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = new ProcessProgress();
            $this->Progress->deserialize($param["Progress"]);
        }
    }
}
