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
 * 规则引擎条件参数
 *
 * @method string getOperator() 获取运算符，取值有：
<li> equal: 等于； </li>
<li> notequal: 不等于；</li>
<li> exist: 存在； </li>
<li> notexist: 不存在。</li>
 * @method void setOperator(string $Operator) 设置运算符，取值有：
<li> equal: 等于； </li>
<li> notequal: 不等于；</li>
<li> exist: 存在； </li>
<li> notexist: 不存在。</li>
 * @method string getTarget() 获取匹配类型，取值有：
<li> filename：文件名； </li>
<li> extension：文件后缀； </li>
<li> host：HOST； </li>
<li> full_url：URL Full，当前站点下完整 URL 路径，必须包含 HTTP 协议，Host 和 路径； </li>
<li> url：URL Path，当前站点下 URL 路径的请求； </li><li>client_country：客户端国家/地区；</li>
<li> query_string：查询字符串，当前站点下请求URL的查询字符串； </li>
<li> request_header：HTTP请求头部。 </li>
 * @method void setTarget(string $Target) 设置匹配类型，取值有：
<li> filename：文件名； </li>
<li> extension：文件后缀； </li>
<li> host：HOST； </li>
<li> full_url：URL Full，当前站点下完整 URL 路径，必须包含 HTTP 协议，Host 和 路径； </li>
<li> url：URL Path，当前站点下 URL 路径的请求； </li><li>client_country：客户端国家/地区；</li>
<li> query_string：查询字符串，当前站点下请求URL的查询字符串； </li>
<li> request_header：HTTP请求头部。 </li>
 * @method array getValues() 获取对应匹配类型的参数值，仅在匹配类型为查询字符串或HTTP请求头并且运算符取值为存在或不存在时允许传空数组，对应匹配类型有：
<li> 文件后缀：jpg、txt等文件后缀；</li>
<li> 文件名称：例如 foo.jpg 中的 foo；</li>
<li> 全部（站点任意请求）： all； </li>
<li> HOST：当前站点下的 host ，例如www.maxx55.com；</li>
<li> URL Path：当前站点下 URL 路径的请求，例如：/example；</li>
<li> URL Full：当前站点下完整 URL 请求，必须包含 HTTP 协议，Host 和 路径，例如：https://www.maxx55.cn/example；</li>
<li> 客户端国家/地区：符合ISO3166标准的国家/地区标识；</li>
<li> 查询字符串: 当前站点下URL请求中查询字符串的参数值，例如lang=cn&version=1中的cn和1； </li>
<li> HTTP 请求头: HTTP请求头部字段值，例如Accept-Language:zh-CN,zh;q=0.9中的zh-CN,zh;q=0.9。 </li>
 * @method void setValues(array $Values) 设置对应匹配类型的参数值，仅在匹配类型为查询字符串或HTTP请求头并且运算符取值为存在或不存在时允许传空数组，对应匹配类型有：
<li> 文件后缀：jpg、txt等文件后缀；</li>
<li> 文件名称：例如 foo.jpg 中的 foo；</li>
<li> 全部（站点任意请求）： all； </li>
<li> HOST：当前站点下的 host ，例如www.maxx55.com；</li>
<li> URL Path：当前站点下 URL 路径的请求，例如：/example；</li>
<li> URL Full：当前站点下完整 URL 请求，必须包含 HTTP 协议，Host 和 路径，例如：https://www.maxx55.cn/example；</li>
<li> 客户端国家/地区：符合ISO3166标准的国家/地区标识；</li>
<li> 查询字符串: 当前站点下URL请求中查询字符串的参数值，例如lang=cn&version=1中的cn和1； </li>
<li> HTTP 请求头: HTTP请求头部字段值，例如Accept-Language:zh-CN,zh;q=0.9中的zh-CN,zh;q=0.9。 </li>
 * @method boolean getIgnoreCase() 获取是否忽略参数值的大小写，默认值为 false。
 * @method void setIgnoreCase(boolean $IgnoreCase) 设置是否忽略参数值的大小写，默认值为 false。
 * @method string getName() 获取对应匹配类型的参数名称，在 Target 值为以下取值时有效，有效时值不能为空：
<li> query_string（查询字符串）: 当前站点下URL请求中查询字符串的参数名称，例如lang=cn&version=1中的lang和version； </li>
<li> request_header（HTTP 请求头）: HTTP请求头部字段名，例如Accept-Language:zh-CN,zh;q=0.9中的Accept-Language。 </li>
 * @method void setName(string $Name) 设置对应匹配类型的参数名称，在 Target 值为以下取值时有效，有效时值不能为空：
<li> query_string（查询字符串）: 当前站点下URL请求中查询字符串的参数名称，例如lang=cn&version=1中的lang和version； </li>
<li> request_header（HTTP 请求头）: HTTP请求头部字段名，例如Accept-Language:zh-CN,zh;q=0.9中的Accept-Language。 </li>
 * @method boolean getIgnoreNameCase() 获取是否忽略参数名称的大小写，默认值为 false。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIgnoreNameCase(boolean $IgnoreNameCase) 设置是否忽略参数名称的大小写，默认值为 false。
注意：此字段可能返回 null，表示取不到有效值。
 */
class RuleCondition extends AbstractModel
{
    /**
     * @var string 运算符，取值有：
<li> equal: 等于； </li>
<li> notequal: 不等于；</li>
<li> exist: 存在； </li>
<li> notexist: 不存在。</li>
     */
    public $Operator;

    /**
     * @var string 匹配类型，取值有：
<li> filename：文件名； </li>
<li> extension：文件后缀； </li>
<li> host：HOST； </li>
<li> full_url：URL Full，当前站点下完整 URL 路径，必须包含 HTTP 协议，Host 和 路径； </li>
<li> url：URL Path，当前站点下 URL 路径的请求； </li><li>client_country：客户端国家/地区；</li>
<li> query_string：查询字符串，当前站点下请求URL的查询字符串； </li>
<li> request_header：HTTP请求头部。 </li>
     */
    public $Target;

    /**
     * @var array 对应匹配类型的参数值，仅在匹配类型为查询字符串或HTTP请求头并且运算符取值为存在或不存在时允许传空数组，对应匹配类型有：
<li> 文件后缀：jpg、txt等文件后缀；</li>
<li> 文件名称：例如 foo.jpg 中的 foo；</li>
<li> 全部（站点任意请求）： all； </li>
<li> HOST：当前站点下的 host ，例如www.maxx55.com；</li>
<li> URL Path：当前站点下 URL 路径的请求，例如：/example；</li>
<li> URL Full：当前站点下完整 URL 请求，必须包含 HTTP 协议，Host 和 路径，例如：https://www.maxx55.cn/example；</li>
<li> 客户端国家/地区：符合ISO3166标准的国家/地区标识；</li>
<li> 查询字符串: 当前站点下URL请求中查询字符串的参数值，例如lang=cn&version=1中的cn和1； </li>
<li> HTTP 请求头: HTTP请求头部字段值，例如Accept-Language:zh-CN,zh;q=0.9中的zh-CN,zh;q=0.9。 </li>
     */
    public $Values;

    /**
     * @var boolean 是否忽略参数值的大小写，默认值为 false。
     */
    public $IgnoreCase;

    /**
     * @var string 对应匹配类型的参数名称，在 Target 值为以下取值时有效，有效时值不能为空：
<li> query_string（查询字符串）: 当前站点下URL请求中查询字符串的参数名称，例如lang=cn&version=1中的lang和version； </li>
<li> request_header（HTTP 请求头）: HTTP请求头部字段名，例如Accept-Language:zh-CN,zh;q=0.9中的Accept-Language。 </li>
     */
    public $Name;

    /**
     * @var boolean 是否忽略参数名称的大小写，默认值为 false。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IgnoreNameCase;

    /**
     * @param string $Operator 运算符，取值有：
<li> equal: 等于； </li>
<li> notequal: 不等于；</li>
<li> exist: 存在； </li>
<li> notexist: 不存在。</li>
     * @param string $Target 匹配类型，取值有：
<li> filename：文件名； </li>
<li> extension：文件后缀； </li>
<li> host：HOST； </li>
<li> full_url：URL Full，当前站点下完整 URL 路径，必须包含 HTTP 协议，Host 和 路径； </li>
<li> url：URL Path，当前站点下 URL 路径的请求； </li><li>client_country：客户端国家/地区；</li>
<li> query_string：查询字符串，当前站点下请求URL的查询字符串； </li>
<li> request_header：HTTP请求头部。 </li>
     * @param array $Values 对应匹配类型的参数值，仅在匹配类型为查询字符串或HTTP请求头并且运算符取值为存在或不存在时允许传空数组，对应匹配类型有：
<li> 文件后缀：jpg、txt等文件后缀；</li>
<li> 文件名称：例如 foo.jpg 中的 foo；</li>
<li> 全部（站点任意请求）： all； </li>
<li> HOST：当前站点下的 host ，例如www.maxx55.com；</li>
<li> URL Path：当前站点下 URL 路径的请求，例如：/example；</li>
<li> URL Full：当前站点下完整 URL 请求，必须包含 HTTP 协议，Host 和 路径，例如：https://www.maxx55.cn/example；</li>
<li> 客户端国家/地区：符合ISO3166标准的国家/地区标识；</li>
<li> 查询字符串: 当前站点下URL请求中查询字符串的参数值，例如lang=cn&version=1中的cn和1； </li>
<li> HTTP 请求头: HTTP请求头部字段值，例如Accept-Language:zh-CN,zh;q=0.9中的zh-CN,zh;q=0.9。 </li>
     * @param boolean $IgnoreCase 是否忽略参数值的大小写，默认值为 false。
     * @param string $Name 对应匹配类型的参数名称，在 Target 值为以下取值时有效，有效时值不能为空：
<li> query_string（查询字符串）: 当前站点下URL请求中查询字符串的参数名称，例如lang=cn&version=1中的lang和version； </li>
<li> request_header（HTTP 请求头）: HTTP请求头部字段名，例如Accept-Language:zh-CN,zh;q=0.9中的Accept-Language。 </li>
     * @param boolean $IgnoreNameCase 是否忽略参数名称的大小写，默认值为 false。
注意：此字段可能返回 null，表示取不到有效值。
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

        if (array_key_exists("IgnoreCase",$param) and $param["IgnoreCase"] !== null) {
            $this->IgnoreCase = $param["IgnoreCase"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("IgnoreNameCase",$param) and $param["IgnoreNameCase"] !== null) {
            $this->IgnoreNameCase = $param["IgnoreNameCase"];
        }
    }
}
