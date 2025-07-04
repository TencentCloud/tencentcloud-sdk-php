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
 * CreateEnvironment请求参数结构体
 *
 * @method string getName() 获取环境名称。
 * @method void setName(string $Name) 设置环境名称。
 * @method EnvironmentConfig getConfig() 获取环境配置信息。
 * @method void setConfig(EnvironmentConfig $Config) 设置环境配置信息。
 * @method string getDescription() 获取环境描述。
 * @method void setDescription(string $Description) 设置环境描述。
 * @method boolean getIsDefault() 获取是否为默认环境。
 * @method void setIsDefault(boolean $IsDefault) 设置是否为默认环境。
 */
class CreateEnvironmentRequest extends AbstractModel
{
    /**
     * @var string 环境名称。
     */
    public $Name;

    /**
     * @var EnvironmentConfig 环境配置信息。
     */
    public $Config;

    /**
     * @var string 环境描述。
     */
    public $Description;

    /**
     * @var boolean 是否为默认环境。
     */
    public $IsDefault;

    /**
     * @param string $Name 环境名称。
     * @param EnvironmentConfig $Config 环境配置信息。
     * @param string $Description 环境描述。
     * @param boolean $IsDefault 是否为默认环境。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new EnvironmentConfig();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("IsDefault",$param) and $param["IsDefault"] !== null) {
            $this->IsDefault = $param["IsDefault"];
        }
    }
}
