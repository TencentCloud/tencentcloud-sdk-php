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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RunJobSpec请求参数结构体
 *
 * @method string getSpecId() 获取<p>配置ID</p>
 * @method void setSpecId(string $SpecId) 设置<p>配置ID</p>
 * @method string getFlowId() 获取<p>外部工作流引擎业务键 flowId</p>
 * @method void setFlowId(string $FlowId) 设置<p>外部工作流引擎业务键 flowId</p>
 * @method string getExecutionId() 获取<p>外部工作流引擎业务键 executionId</p>
 * @method void setExecutionId(string $ExecutionId) 设置<p>外部工作流引擎业务键 executionId</p>
 * @method string getJobSource() 获取<p>业务来源标识（调用上下文，长度上限 64，禁止控制字符）</p>
 * @method void setJobSource(string $JobSource) 设置<p>业务来源标识（调用上下文，长度上限 64，禁止控制字符）</p>
 */
class RunJobSpecRequest extends AbstractModel
{
    /**
     * @var string <p>配置ID</p>
     */
    public $SpecId;

    /**
     * @var string <p>外部工作流引擎业务键 flowId</p>
     */
    public $FlowId;

    /**
     * @var string <p>外部工作流引擎业务键 executionId</p>
     */
    public $ExecutionId;

    /**
     * @var string <p>业务来源标识（调用上下文，长度上限 64，禁止控制字符）</p>
     */
    public $JobSource;

    /**
     * @param string $SpecId <p>配置ID</p>
     * @param string $FlowId <p>外部工作流引擎业务键 flowId</p>
     * @param string $ExecutionId <p>外部工作流引擎业务键 executionId</p>
     * @param string $JobSource <p>业务来源标识（调用上下文，长度上限 64，禁止控制字符）</p>
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
        if (array_key_exists("SpecId",$param) and $param["SpecId"] !== null) {
            $this->SpecId = $param["SpecId"];
        }

        if (array_key_exists("FlowId",$param) and $param["FlowId"] !== null) {
            $this->FlowId = $param["FlowId"];
        }

        if (array_key_exists("ExecutionId",$param) and $param["ExecutionId"] !== null) {
            $this->ExecutionId = $param["ExecutionId"];
        }

        if (array_key_exists("JobSource",$param) and $param["JobSource"] !== null) {
            $this->JobSource = $param["JobSource"];
        }
    }
}
