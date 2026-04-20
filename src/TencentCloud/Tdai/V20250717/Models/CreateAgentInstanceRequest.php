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
 * @method string getAgentId() 获取<p>智能体ID</p>
 * @method void setAgentId(string $AgentId) 设置<p>智能体ID</p>
 * @method string getAgentVersion() 获取<p>智能体版本</p>
 * @method void setAgentVersion(string $AgentVersion) 设置<p>智能体版本</p>
 * @method string getInstanceName() 获取<p>实例名</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名</p>
 * @method array getParameters() 获取<p>智能体实例的参数列表</p>
 * @method void setParameters(array $Parameters) 设置<p>智能体实例的参数列表</p>
 * @method array getTags() 获取<p>资源的标签信息</p>
 * @method void setTags(array $Tags) 设置<p>资源的标签信息</p>
 * @method string getInstanceType() 获取<p>无</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>无</p>
 * @method integer getTemplateId() 获取<p>无</p>
 * @method void setTemplateId(integer $TemplateId) 设置<p>无</p>
 * @method array getSkills() 获取<p>无</p>
 * @method void setSkills(array $Skills) 设置<p>无</p>
 * @method integer getSoulId() 获取<p>无</p>
 * @method void setSoulId(integer $SoulId) 设置<p>无</p>
 * @method string getDescription() 获取<p>无</p>
 * @method void setDescription(string $Description) 设置<p>无</p>
 */
class CreateAgentInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>智能体ID</p>
     */
    public $AgentId;

    /**
     * @var string <p>智能体版本</p>
     */
    public $AgentVersion;

    /**
     * @var string <p>实例名</p>
     */
    public $InstanceName;

    /**
     * @var array <p>智能体实例的参数列表</p>
     */
    public $Parameters;

    /**
     * @var array <p>资源的标签信息</p>
     */
    public $Tags;

    /**
     * @var string <p>无</p>
     */
    public $InstanceType;

    /**
     * @var integer <p>无</p>
     */
    public $TemplateId;

    /**
     * @var array <p>无</p>
     */
    public $Skills;

    /**
     * @var integer <p>无</p>
     */
    public $SoulId;

    /**
     * @var string <p>无</p>
     */
    public $Description;

    /**
     * @param string $AgentId <p>智能体ID</p>
     * @param string $AgentVersion <p>智能体版本</p>
     * @param string $InstanceName <p>实例名</p>
     * @param array $Parameters <p>智能体实例的参数列表</p>
     * @param array $Tags <p>资源的标签信息</p>
     * @param string $InstanceType <p>无</p>
     * @param integer $TemplateId <p>无</p>
     * @param array $Skills <p>无</p>
     * @param integer $SoulId <p>无</p>
     * @param string $Description <p>无</p>
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

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("Skills",$param) and $param["Skills"] !== null) {
            $this->Skills = $param["Skills"];
        }

        if (array_key_exists("SoulId",$param) and $param["SoulId"] !== null) {
            $this->SoulId = $param["SoulId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
