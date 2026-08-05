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
 * 推理引擎具体信息
 *
 * @method string getEngineId() 获取<p>引擎标识符</p>
 * @method void setEngineId(string $EngineId) 设置<p>引擎标识符</p>
 * @method string getName() 获取<p>引擎名称</p>
 * @method void setName(string $Name) 设置<p>引擎名称</p>
 * @method string getVersion() 获取<p>引擎版本</p>
 * @method void setVersion(string $Version) 设置<p>引擎版本</p>
 * @method string getDescription() 获取<p>引擎描述</p>
 * @method void setDescription(string $Description) 设置<p>引擎描述</p>
 * @method array getTags() 获取<p>标签列表</p>
 * @method void setTags(array $Tags) 设置<p>标签列表</p>
 * @method array getModelTypes() 获取<p>支持的模型类型</p>
 * @method void setModelTypes(array $ModelTypes) 设置<p>支持的模型类型</p>
 * @method boolean getExclusive() 获取<p>是否独占，如果为 true，表示自定义模型看不到这个推理引擎，通常用于自研内置模型</p>
 * @method void setExclusive(boolean $Exclusive) 设置<p>是否独占，如果为 true，表示自定义模型看不到这个推理引擎，通常用于自研内置模型</p>
 * @method boolean getEnabled() 获取<p>是否启用</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>是否启用</p>
 * @method EngineCapabilities getCapabilities() 获取<p>引擎能力声明</p>
 * @method void setCapabilities(EngineCapabilities $Capabilities) 设置<p>引擎能力声明</p>
 */
class InferenceEngineInfo extends AbstractModel
{
    /**
     * @var string <p>引擎标识符</p>
     */
    public $EngineId;

    /**
     * @var string <p>引擎名称</p>
     */
    public $Name;

    /**
     * @var string <p>引擎版本</p>
     */
    public $Version;

    /**
     * @var string <p>引擎描述</p>
     */
    public $Description;

    /**
     * @var array <p>标签列表</p>
     */
    public $Tags;

    /**
     * @var array <p>支持的模型类型</p>
     */
    public $ModelTypes;

    /**
     * @var boolean <p>是否独占，如果为 true，表示自定义模型看不到这个推理引擎，通常用于自研内置模型</p>
     */
    public $Exclusive;

    /**
     * @var boolean <p>是否启用</p>
     */
    public $Enabled;

    /**
     * @var EngineCapabilities <p>引擎能力声明</p>
     */
    public $Capabilities;

    /**
     * @param string $EngineId <p>引擎标识符</p>
     * @param string $Name <p>引擎名称</p>
     * @param string $Version <p>引擎版本</p>
     * @param string $Description <p>引擎描述</p>
     * @param array $Tags <p>标签列表</p>
     * @param array $ModelTypes <p>支持的模型类型</p>
     * @param boolean $Exclusive <p>是否独占，如果为 true，表示自定义模型看不到这个推理引擎，通常用于自研内置模型</p>
     * @param boolean $Enabled <p>是否启用</p>
     * @param EngineCapabilities $Capabilities <p>引擎能力声明</p>
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
        if (array_key_exists("EngineId",$param) and $param["EngineId"] !== null) {
            $this->EngineId = $param["EngineId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("ModelTypes",$param) and $param["ModelTypes"] !== null) {
            $this->ModelTypes = $param["ModelTypes"];
        }

        if (array_key_exists("Exclusive",$param) and $param["Exclusive"] !== null) {
            $this->Exclusive = $param["Exclusive"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Capabilities",$param) and $param["Capabilities"] !== null) {
            $this->Capabilities = new EngineCapabilities();
            $this->Capabilities->deserialize($param["Capabilities"]);
        }
    }
}
