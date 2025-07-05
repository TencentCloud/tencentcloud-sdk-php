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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyUsersConfig请求参数结构体
 *
 * @method string getConfigName() 获取配置名称
<li>license_monitor 新增授权监控配置 0 关闭, 1开启</li>
 * @method void setConfigName(string $ConfigName) 设置配置名称
<li>license_monitor 新增授权监控配置 0 关闭, 1开启</li>
 * @method string getConfigValue() 获取配置值
 * @method void setConfigValue(string $ConfigValue) 设置配置值
 */
class ModifyUsersConfigRequest extends AbstractModel
{
    /**
     * @var string 配置名称
<li>license_monitor 新增授权监控配置 0 关闭, 1开启</li>
     */
    public $ConfigName;

    /**
     * @var string 配置值
     */
    public $ConfigValue;

    /**
     * @param string $ConfigName 配置名称
<li>license_monitor 新增授权监控配置 0 关闭, 1开启</li>
     * @param string $ConfigValue 配置值
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
        if (array_key_exists("ConfigName",$param) and $param["ConfigName"] !== null) {
            $this->ConfigName = $param["ConfigName"];
        }

        if (array_key_exists("ConfigValue",$param) and $param["ConfigValue"] !== null) {
            $this->ConfigValue = $param["ConfigValue"];
        }
    }
}
