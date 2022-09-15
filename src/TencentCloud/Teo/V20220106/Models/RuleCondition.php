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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 规则引擎条件参数
 *
 * @method string getOperator() 获取运算符，取值有：
<li> equal: 等于； </li>
<li> notequal: 不等于。</li>
 * @method void setOperator(string $Operator) 设置运算符，取值有：
<li> equal: 等于； </li>
<li> notequal: 不等于。</li>
 * @method string getTarget() 获取匹配类型，取值有：
<li> 全部（站点任意请求）: host。 </li>
<li> 文件名: filename； </li>
<li> 文件后缀: extension； </li>
<li> HOST: host； </li>
<li> URL Full: full_url，当前站点下完整 URL 路径，必须包含 HTTP 协议，Host 和 路径； </li>
<li> URL Path: url，当前站点下 URL 路径的请求。 </li>
 * @method void setTarget(string $Target) 设置匹配类型，取值有：
<li> 全部（站点任意请求）: host。 </li>
<li> 文件名: filename； </li>
<li> 文件后缀: extension； </li>
<li> HOST: host； </li>
<li> URL Full: full_url，当前站点下完整 URL 路径，必须包含 HTTP 协议，Host 和 路径； </li>
<li> URL Path: url，当前站点下 URL 路径的请求。 </li>
 * @method array getValues() 获取对应匹配类型的参数值，对应匹配类型的取值有：
<li> 文件后缀：jpg、txt等文件后缀；</li>
<li> 文件名称：例如 foo.jpg 中的 foo；</li>
<li> 全部（站点任意请求）： all； </li>
<li> HOST：当前站点下的 host ，例如www.maxx55.com；</li>
<li> URL Path：当前站点下 URL 路径的请求，例如：/example；</li>
<li> URL Full：当前站点下完整 URL 请求，必须包含 HTTP 协议，Host 和 路径，例如：https://www.maxx55.cn/example。</li>
 * @method void setValues(array $Values) 设置对应匹配类型的参数值，对应匹配类型的取值有：
<li> 文件后缀：jpg、txt等文件后缀；</li>
<li> 文件名称：例如 foo.jpg 中的 foo；</li>
<li> 全部（站点任意请求）： all； </li>
<li> HOST：当前站点下的 host ，例如www.maxx55.com；</li>
<li> URL Path：当前站点下 URL 路径的请求，例如：/example；</li>
<li> URL Full：当前站点下完整 URL 请求，必须包含 HTTP 协议，Host 和 路径，例如：https://www.maxx55.cn/example。</li>
 */
class RuleCondition extends AbstractModel
{
    /**
     * @var string 运算符，取值有：
<li> equal: 等于； </li>
<li> notequal: 不等于。</li>
     */
    public $Operator;

    /**
     * @var string 匹配类型，取值有：
<li> 全部（站点任意请求）: host。 </li>
<li> 文件名: filename； </li>
<li> 文件后缀: extension； </li>
<li> HOST: host； </li>
<li> URL Full: full_url，当前站点下完整 URL 路径，必须包含 HTTP 协议，Host 和 路径； </li>
<li> URL Path: url，当前站点下 URL 路径的请求。 </li>
     */
    public $Target;

    /**
     * @var array 对应匹配类型的参数值，对应匹配类型的取值有：
<li> 文件后缀：jpg、txt等文件后缀；</li>
<li> 文件名称：例如 foo.jpg 中的 foo；</li>
<li> 全部（站点任意请求）： all； </li>
<li> HOST：当前站点下的 host ，例如www.maxx55.com；</li>
<li> URL Path：当前站点下 URL 路径的请求，例如：/example；</li>
<li> URL Full：当前站点下完整 URL 请求，必须包含 HTTP 协议，Host 和 路径，例如：https://www.maxx55.cn/example。</li>
     */
    public $Values;

    /**
     * @param string $Operator 运算符，取值有：
<li> equal: 等于； </li>
<li> notequal: 不等于。</li>
     * @param string $Target 匹配类型，取值有：
<li> 全部（站点任意请求）: host。 </li>
<li> 文件名: filename； </li>
<li> 文件后缀: extension； </li>
<li> HOST: host； </li>
<li> URL Full: full_url，当前站点下完整 URL 路径，必须包含 HTTP 协议，Host 和 路径； </li>
<li> URL Path: url，当前站点下 URL 路径的请求。 </li>
     * @param array $Values 对应匹配类型的参数值，对应匹配类型的取值有：
<li> 文件后缀：jpg、txt等文件后缀；</li>
<li> 文件名称：例如 foo.jpg 中的 foo；</li>
<li> 全部（站点任意请求）： all； </li>
<li> HOST：当前站点下的 host ，例如www.maxx55.com；</li>
<li> URL Path：当前站点下 URL 路径的请求，例如：/example；</li>
<li> URL Full：当前站点下完整 URL 请求，必须包含 HTTP 协议，Host 和 路径，例如：https://www.maxx55.cn/example。</li>
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
        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }
    }
}
