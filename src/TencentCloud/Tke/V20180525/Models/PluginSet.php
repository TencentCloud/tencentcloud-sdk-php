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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 管理调度插件(plugins)的启用和禁用
 *
 * @method array getEnabled() 获取指定需要额外启用的插件列表
 * @method void setEnabled(array $Enabled) 设置指定需要额外启用的插件列表
 * @method array getDisabled() 获取指定需要禁用的默认插件列表
 * @method void setDisabled(array $Disabled) 设置指定需要禁用的默认插件列表
 */
class PluginSet extends AbstractModel
{
    /**
     * @var array 指定需要额外启用的插件列表
     */
    public $Enabled;

    /**
     * @var array 指定需要禁用的默认插件列表
     */
    public $Disabled;

    /**
     * @param array $Enabled 指定需要额外启用的插件列表
     * @param array $Disabled 指定需要禁用的默认插件列表
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = [];
            foreach ($param["Enabled"] as $key => $value){
                $obj = new SchedulerPolicyPriority();
                $obj->deserialize($value);
                array_push($this->Enabled, $obj);
            }
        }

        if (array_key_exists("Disabled",$param) and $param["Disabled"] !== null) {
            $this->Disabled = [];
            foreach ($param["Disabled"] as $key => $value){
                $obj = new SchedulerPolicyPriority();
                $obj->deserialize($value);
                array_push($this->Disabled, $obj);
            }
        }
    }
}
