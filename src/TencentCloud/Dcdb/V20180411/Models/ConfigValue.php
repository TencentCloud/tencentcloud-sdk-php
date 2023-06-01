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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 配置信息。包含配置项Config，配置值Value
 *
 * @method string getConfig() 获取配置项的名称，支持填写max_user_connections
 * @method void setConfig(string $Config) 设置配置项的名称，支持填写max_user_connections
 * @method string getValue() 获取配置值
 * @method void setValue(string $Value) 设置配置值
 */
class ConfigValue extends AbstractModel
{
    /**
     * @var string 配置项的名称，支持填写max_user_connections
     */
    public $Config;

    /**
     * @var string 配置值
     */
    public $Value;

    /**
     * @param string $Config 配置项的名称，支持填写max_user_connections
     * @param string $Value 配置值
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
        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = $param["Config"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
