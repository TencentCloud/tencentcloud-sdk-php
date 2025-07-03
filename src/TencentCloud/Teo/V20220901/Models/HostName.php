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
namespace TencentCloud\Teo\V20220901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 访问 URL 重定向 HostName 配置参数。
 *
 * @method string getAction() 获取目标 HostName 配置，取值有：
<li>follow：跟随请求；</li>
<li>custom：自定义。</li>
 * @method void setAction(string $Action) 设置目标 HostName 配置，取值有：
<li>follow：跟随请求；</li>
<li>custom：自定义。</li>
 * @method string getValue() 获取目标 HostName 自定义取值，最大长度 1024。<br>注意：当 Action 为 custom 时，此字段必填；当 Action 为 follow 时，此字段不生效。
 * @method void setValue(string $Value) 设置目标 HostName 自定义取值，最大长度 1024。<br>注意：当 Action 为 custom 时，此字段必填；当 Action 为 follow 时，此字段不生效。
 */
class HostName extends AbstractModel
{
    /**
     * @var string 目标 HostName 配置，取值有：
<li>follow：跟随请求；</li>
<li>custom：自定义。</li>
     */
    public $Action;

    /**
     * @var string 目标 HostName 自定义取值，最大长度 1024。<br>注意：当 Action 为 custom 时，此字段必填；当 Action 为 follow 时，此字段不生效。
     */
    public $Value;

    /**
     * @param string $Action 目标 HostName 配置，取值有：
<li>follow：跟随请求；</li>
<li>custom：自定义。</li>
     * @param string $Value 目标 HostName 自定义取值，最大长度 1024。<br>注意：当 Action 为 custom 时，此字段必填；当 Action 为 follow 时，此字段不生效。
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
        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }
    }
}
