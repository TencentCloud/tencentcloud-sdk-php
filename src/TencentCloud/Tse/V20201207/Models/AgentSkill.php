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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AgentSkill AI Agent 技能定义
 *
 * @method string getId() 获取<p>agentID</p>
 * @method void setId(string $Id) 设置<p>agentID</p>
 * @method string getName() 获取<p>skill名称</p>
 * @method void setName(string $Name) 设置<p>skill名称</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method array getTags() 获取<p>标签</p>
 * @method void setTags(array $Tags) 设置<p>标签</p>
 * @method array getExamples() 获取<p>样例</p>
 * @method void setExamples(array $Examples) 设置<p>样例</p>
 * @method array getInputModes() 获取<p>输入模式</p>
 * @method void setInputModes(array $InputModes) 设置<p>输入模式</p>
 * @method array getOutputModes() 获取<p>输出模式</p>
 * @method void setOutputModes(array $OutputModes) 设置<p>输出模式</p>
 * @method string getVersion() 获取<p>版本</p>
 * @method void setVersion(string $Version) 设置<p>版本</p>
 */
class AgentSkill extends AbstractModel
{
    /**
     * @var string <p>agentID</p>
     */
    public $Id;

    /**
     * @var string <p>skill名称</p>
     */
    public $Name;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var array <p>标签</p>
     */
    public $Tags;

    /**
     * @var array <p>样例</p>
     */
    public $Examples;

    /**
     * @var array <p>输入模式</p>
     */
    public $InputModes;

    /**
     * @var array <p>输出模式</p>
     */
    public $OutputModes;

    /**
     * @var string <p>版本</p>
     */
    public $Version;

    /**
     * @param string $Id <p>agentID</p>
     * @param string $Name <p>skill名称</p>
     * @param string $Description <p>描述</p>
     * @param array $Tags <p>标签</p>
     * @param array $Examples <p>样例</p>
     * @param array $InputModes <p>输入模式</p>
     * @param array $OutputModes <p>输出模式</p>
     * @param string $Version <p>版本</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("Examples",$param) and $param["Examples"] !== null) {
            $this->Examples = $param["Examples"];
        }

        if (array_key_exists("InputModes",$param) and $param["InputModes"] !== null) {
            $this->InputModes = $param["InputModes"];
        }

        if (array_key_exists("OutputModes",$param) and $param["OutputModes"] !== null) {
            $this->OutputModes = $param["OutputModes"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }
    }
}
