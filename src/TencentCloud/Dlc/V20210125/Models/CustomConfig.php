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
 * 自定义参数
 *
 * @method string getConfigKey() 获取自定义参数名
 * @method void setConfigKey(string $ConfigKey) 设置自定义参数名
 * @method string getConfigValue() 获取自定义参数值
 * @method void setConfigValue(string $ConfigValue) 设置自定义参数值
 */
class CustomConfig extends AbstractModel
{
    /**
     * @var string 自定义参数名
     */
    public $ConfigKey;

    /**
     * @var string 自定义参数值
     */
    public $ConfigValue;

    /**
     * @param string $ConfigKey 自定义参数名
     * @param string $ConfigValue 自定义参数值
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
        if (array_key_exists("ConfigKey",$param) and $param["ConfigKey"] !== null) {
            $this->ConfigKey = $param["ConfigKey"];
        }

        if (array_key_exists("ConfigValue",$param) and $param["ConfigValue"] !== null) {
            $this->ConfigValue = $param["ConfigValue"];
        }
    }
}
