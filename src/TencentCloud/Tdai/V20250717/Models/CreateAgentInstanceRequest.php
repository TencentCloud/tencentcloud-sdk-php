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
 * CreateAgentInstance请求参数结构体
 *
 * @method string getAgentId() 获取智能体ID
 * @method void setAgentId(string $AgentId) 设置智能体ID
 * @method string getAgentVersion() 获取智能体版本
 * @method void setAgentVersion(string $AgentVersion) 设置智能体版本
 * @method string getInstanceName() 获取实例名
 * @method void setInstanceName(string $InstanceName) 设置实例名
 * @method array getParameters() 获取智能体实例的参数列表
 * @method void setParameters(array $Parameters) 设置智能体实例的参数列表
 * @method array getTags() 获取资源的标签信息
 * @method void setTags(array $Tags) 设置资源的标签信息
 */
class CreateAgentInstanceRequest extends AbstractModel
{
    /**
     * @var string 智能体ID
     */
    public $AgentId;

    /**
     * @var string 智能体版本
     */
    public $AgentVersion;

    /**
     * @var string 实例名
     */
    public $InstanceName;

    /**
     * @var array 智能体实例的参数列表
     */
    public $Parameters;

    /**
     * @var array 资源的标签信息
     */
    public $Tags;

    /**
     * @param string $AgentId 智能体ID
     * @param string $AgentVersion 智能体版本
     * @param string $InstanceName 实例名
     * @param array $Parameters 智能体实例的参数列表
     * @param array $Tags 资源的标签信息
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
        if (array_key_exists("AgentId",$param) and $param["AgentId"] !== null) {
            $this->AgentId = $param["AgentId"];
        }

        if (array_key_exists("AgentVersion",$param) and $param["AgentVersion"] !== null) {
            $this->AgentVersion = $param["AgentVersion"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Parameters",$param) and $param["Parameters"] !== null) {
            $this->Parameters = [];
            foreach ($param["Parameters"] as $key => $value){
                $obj = new Parameter();
                $obj->deserialize($value);
                array_push($this->Parameters, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagItem();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
