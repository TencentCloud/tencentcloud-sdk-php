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
namespace TencentCloud\Omics\V20221128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Nextflow工作流引擎设置
 *
 * @method integer getExecutorQueueSize() 获取工作流任务并发数
 * @method void setExecutorQueueSize(integer $ExecutorQueueSize) 设置工作流任务并发数
 */
class NextflowConfig extends AbstractModel
{
    /**
     * @var integer 工作流任务并发数
     */
    public $ExecutorQueueSize;

    /**
     * @param integer $ExecutorQueueSize 工作流任务并发数
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
        if (array_key_exists("ExecutorQueueSize",$param) and $param["ExecutorQueueSize"] !== null) {
            $this->ExecutorQueueSize = $param["ExecutorQueueSize"];
        }
    }
}
