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
 * 自定义 Cache Key 查询字符串配置参数。
 *
 * @method string getSwitch() 获取查询字符串保留/忽略指定参数开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method void setSwitch(string $Switch) 设置查询字符串保留/忽略指定参数开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method string getAction() 获取查询字符串保留/忽略指定参数动作。取值有：
<li>includeCustom：表示保留部分参数；</li>
<li>excludeCustom：表示忽略部分参数。</li>注意：当 Switch 为 on 时，此字段必填；当 Switch 为 off 时，无需填写此字段，若填写则不生效。
 * @method void setAction(string $Action) 设置查询字符串保留/忽略指定参数动作。取值有：
<li>includeCustom：表示保留部分参数；</li>
<li>excludeCustom：表示忽略部分参数。</li>注意：当 Switch 为 on 时，此字段必填；当 Switch 为 off 时，无需填写此字段，若填写则不生效。
 * @method array getValues() 获取查询字符串中需保留/忽略的参数名列表。<br>注意：当 Switch 为 on 时，此字段必填；当 Switch 为 off 时，无需填写此字段，若填写则不生效。
 * @method void setValues(array $Values) 设置查询字符串中需保留/忽略的参数名列表。<br>注意：当 Switch 为 on 时，此字段必填；当 Switch 为 off 时，无需填写此字段，若填写则不生效。
 */
class CacheKeyQueryString extends AbstractModel
{
    /**
     * @var string 查询字符串保留/忽略指定参数开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     */
    public $Switch;

    /**
     * @var string 查询字符串保留/忽略指定参数动作。取值有：
<li>includeCustom：表示保留部分参数；</li>
<li>excludeCustom：表示忽略部分参数。</li>注意：当 Switch 为 on 时，此字段必填；当 Switch 为 off 时，无需填写此字段，若填写则不生效。
     */
    public $Action;

    /**
     * @var array 查询字符串中需保留/忽略的参数名列表。<br>注意：当 Switch 为 on 时，此字段必填；当 Switch 为 off 时，无需填写此字段，若填写则不生效。
     */
    public $Values;

    /**
     * @param string $Switch 查询字符串保留/忽略指定参数开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     * @param string $Action 查询字符串保留/忽略指定参数动作。取值有：
<li>includeCustom：表示保留部分参数；</li>
<li>excludeCustom：表示忽略部分参数。</li>注意：当 Switch 为 on 时，此字段必填；当 Switch 为 off 时，无需填写此字段，若填写则不生效。
     * @param array $Values 查询字符串中需保留/忽略的参数名列表。<br>注意：当 Switch 为 on 时，此字段必填；当 Switch 为 off 时，无需填写此字段，若填写则不生效。
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
