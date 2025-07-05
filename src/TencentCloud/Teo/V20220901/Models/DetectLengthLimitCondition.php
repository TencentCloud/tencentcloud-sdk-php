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
 * 检测长度限制配置条件。
 *
 * @method string getName() 获取匹配条件的参数名称，取值有：
<li>body_depth：请求正文包部分的检测深度。</li>
 * @method void setName(string $Name) 设置匹配条件的参数名称，取值有：
<li>body_depth：请求正文包部分的检测深度。</li>
 * @method array getValues() 获取匹配条件的参数值，取值与 Name 成对使用。
当 Name 值为 body_depth 时， Values 只支持传入单个值，取值有：
<li>10KB；</li>
<li>64KB；</li>
<li>128KB。</li>
 * @method void setValues(array $Values) 设置匹配条件的参数值，取值与 Name 成对使用。
当 Name 值为 body_depth 时， Values 只支持传入单个值，取值有：
<li>10KB；</li>
<li>64KB；</li>
<li>128KB。</li>
 */
class DetectLengthLimitCondition extends AbstractModel
{
    /**
     * @var string 匹配条件的参数名称，取值有：
<li>body_depth：请求正文包部分的检测深度。</li>
     */
    public $Name;

    /**
     * @var array 匹配条件的参数值，取值与 Name 成对使用。
当 Name 值为 body_depth 时， Values 只支持传入单个值，取值有：
<li>10KB；</li>
<li>64KB；</li>
<li>128KB。</li>
     */
    public $Values;

    /**
     * @param string $Name 匹配条件的参数名称，取值有：
<li>body_depth：请求正文包部分的检测深度。</li>
     * @param array $Values 匹配条件的参数值，取值与 Name 成对使用。
当 Name 值为 body_depth 时， Values 只支持传入单个值，取值有：
<li>10KB；</li>
<li>64KB；</li>
<li>128KB。</li>
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

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
