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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 版本管理配置组工作模式信息。
 *
 * @method string getConfigGroupType() 获取配置组类型，可选项如下：<li>l7_acceleration: 七层加速配置组；</li><li>edge_functions: 边缘函数配置组。</li>
 * @method void setConfigGroupType(string $ConfigGroupType) 设置配置组类型，可选项如下：<li>l7_acceleration: 七层加速配置组；</li><li>edge_functions: 边缘函数配置组。</li>
 * @method string getWorkMode() 获取工作模式，可选项如下：<li>immediate_effect: 即时生效模式；</li><li>version_control: 版本管理模式。</li>
 * @method void setWorkMode(string $WorkMode) 设置工作模式，可选项如下：<li>immediate_effect: 即时生效模式；</li><li>version_control: 版本管理模式。</li>
 */
class ConfigGroupWorkModeInfo extends AbstractModel
{
    /**
     * @var string 配置组类型，可选项如下：<li>l7_acceleration: 七层加速配置组；</li><li>edge_functions: 边缘函数配置组。</li>
     */
    public $ConfigGroupType;

    /**
     * @var string 工作模式，可选项如下：<li>immediate_effect: 即时生效模式；</li><li>version_control: 版本管理模式。</li>
     */
    public $WorkMode;

    /**
     * @param string $ConfigGroupType 配置组类型，可选项如下：<li>l7_acceleration: 七层加速配置组；</li><li>edge_functions: 边缘函数配置组。</li>
     * @param string $WorkMode 工作模式，可选项如下：<li>immediate_effect: 即时生效模式；</li><li>version_control: 版本管理模式。</li>
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
        if (array_key_exists("ConfigGroupType",$param) and $param["ConfigGroupType"] !== null) {
            $this->ConfigGroupType = $param["ConfigGroupType"];
        }

        if (array_key_exists("WorkMode",$param) and $param["WorkMode"] !== null) {
            $this->WorkMode = $param["WorkMode"];
        }
    }
}
