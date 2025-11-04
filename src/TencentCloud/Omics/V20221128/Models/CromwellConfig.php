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
 * Cromwell工作流引擎设置
 *
 * @method integer getMaxConcurrentWorkflows() 获取工作流并发数
 * @method void setMaxConcurrentWorkflows(integer $MaxConcurrentWorkflows) 设置工作流并发数
 * @method integer getConcurrentJobLimit() 获取作业并发数
 * @method void setConcurrentJobLimit(integer $ConcurrentJobLimit) 设置作业并发数
 */
class CromwellConfig extends AbstractModel
{
    /**
     * @var integer 工作流并发数
     */
    public $MaxConcurrentWorkflows;

    /**
     * @var integer 作业并发数
     */
    public $ConcurrentJobLimit;

    /**
     * @param integer $MaxConcurrentWorkflows 工作流并发数
     * @param integer $ConcurrentJobLimit 作业并发数
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
        if (array_key_exists("MaxConcurrentWorkflows",$param) and $param["MaxConcurrentWorkflows"] !== null) {
            $this->MaxConcurrentWorkflows = $param["MaxConcurrentWorkflows"];
        }

        if (array_key_exists("ConcurrentJobLimit",$param) and $param["ConcurrentJobLimit"] !== null) {
            $this->ConcurrentJobLimit = $param["ConcurrentJobLimit"];
        }
    }
}
