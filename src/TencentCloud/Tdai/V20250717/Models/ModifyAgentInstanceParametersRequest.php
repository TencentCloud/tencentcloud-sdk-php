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
namespace TencentCloud\Tdai\V20250717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAgentInstanceParameters请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getTaskType() 获取任务类型, 可选，默认default
 * @method void setTaskType(string $TaskType) 设置任务类型, 可选，默认default
 * @method Parameter getParameters() 获取更新的参数列表
 * @method void setParameters(Parameter $Parameters) 设置更新的参数列表
 * @method SqlAgentParameter getSqlAgentParameter() 获取风险SQL智能体参数列表
 * @method void setSqlAgentParameter(SqlAgentParameter $SqlAgentParameter) 设置风险SQL智能体参数列表
 */
class ModifyAgentInstanceParametersRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 任务类型, 可选，默认default
     */
    public $TaskType;

    /**
     * @var Parameter 更新的参数列表
     */
    public $Parameters;

    /**
     * @var SqlAgentParameter 风险SQL智能体参数列表
     */
    public $SqlAgentParameter;

    /**
     * @param string $InstanceId 实例ID
     * @param string $TaskType 任务类型, 可选，默认default
     * @param Parameter $Parameters 更新的参数列表
     * @param SqlAgentParameter $SqlAgentParameter 风险SQL智能体参数列表
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = new Parameter();
            $this->Parameters->deserialize($param["Parameters"]);
        }

        if (array_key_exists("SqlAgentParameter",$param) and $param["SqlAgentParameter"] !== null) {
            $this->SqlAgentParameter = new SqlAgentParameter();
            $this->SqlAgentParameter->deserialize($param["SqlAgentParameter"]);
        }
    }
}
