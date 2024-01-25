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
 * UpdateBatchTaskAdvancedSettings请求参数结构体
 *
 * @method array getTaskIds() 获取待更新的任务ID
 * @method void setTaskIds(array $TaskIds) 设置待更新的任务ID
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method integer getRetryWait() 获取重试等待时间
 * @method void setRetryWait(integer $RetryWait) 设置重试等待时间
 * @method integer getTryLimit() 获取失败重试次数
 * @method void setTryLimit(integer $TryLimit) 设置失败重试次数
 * @method integer getRunPriority() 获取任务优先级
 * @method void setRunPriority(integer $RunPriority) 设置任务优先级
 * @method integer getExecutionTTL() 获取超时处理策略
 * @method void setExecutionTTL(integer $ExecutionTTL) 设置超时处理策略
 */
class UpdateBatchTaskAdvancedSettingsRequest extends AbstractModel
{
    /**
     * @var array 待更新的任务ID
     */
    public $TaskIds;

    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var integer 重试等待时间
     */
    public $RetryWait;

    /**
     * @var integer 失败重试次数
     */
    public $TryLimit;

    /**
     * @var integer 任务优先级
     */
    public $RunPriority;

    /**
     * @var integer 超时处理策略
     */
    public $ExecutionTTL;

    /**
     * @param array $TaskIds 待更新的任务ID
     * @param string $ProjectId 项目ID
     * @param integer $RetryWait 重试等待时间
     * @param integer $TryLimit 失败重试次数
     * @param integer $RunPriority 任务优先级
     * @param integer $ExecutionTTL 超时处理策略
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
        if (array_key_exists("TaskIds",$param) and $param["TaskIds"] !== null) {
            $this->TaskIds = $param["TaskIds"];
        }

        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("RetryWait",$param) and $param["RetryWait"] !== null) {
            $this->RetryWait = $param["RetryWait"];
        }

        if (array_key_exists("TryLimit",$param) and $param["TryLimit"] !== null) {
            $this->TryLimit = $param["TryLimit"];
        }

        if (array_key_exists("RunPriority",$param) and $param["RunPriority"] !== null) {
            $this->RunPriority = $param["RunPriority"];
        }

        if (array_key_exists("ExecutionTTL",$param) and $param["ExecutionTTL"] !== null) {
            $this->ExecutionTTL = $param["ExecutionTTL"];
        }
    }
}
