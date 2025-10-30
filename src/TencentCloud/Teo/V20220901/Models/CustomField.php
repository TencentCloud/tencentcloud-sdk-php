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
 * 实时日志投递任务中的自定义日志字段。
 *
 * @method string getName() 获取自定义日志字段类型。从 HTTP 请求和响应中的指定位置提取数据，取值有：
<li>ReqHeader：从 HTTP 请求头中提取指定字段值；</li>
<li>RspHeader：从 HTTP 响应头中提取指定字段值；</li>
<li>Cookie: 从 Cookie 中提取指定字段值；</li>
<li>ReqBody: 从 HTTP 请求正文中通过 Google RE2 正则表达式提取指定内容。</li>
 * @method void setName(string $Name) 设置自定义日志字段类型。从 HTTP 请求和响应中的指定位置提取数据，取值有：
<li>ReqHeader：从 HTTP 请求头中提取指定字段值；</li>
<li>RspHeader：从 HTTP 响应头中提取指定字段值；</li>
<li>Cookie: 从 Cookie 中提取指定字段值；</li>
<li>ReqBody: 从 HTTP 请求正文中通过 Google RE2 正则表达式提取指定内容。</li>
 * @method string getValue() 获取根据字段类型（Name）填入字段值的定义。需要区分大小写。
<li>当字段类型为 ReqHeader、RspHeader、Cookie 时，填入需要提取值的参数名称，例如：Accept-Language。可输入 1-100 个字符，允许的字符开头为字母，中间为字母、数字、-，结尾为字母、数字；</li>
<li>当字段类型为 ReqBody 时，填入 Google RE2 正则表达式，正则表达式长度上限为 4KB。</li>
 * @method void setValue(string $Value) 设置根据字段类型（Name）填入字段值的定义。需要区分大小写。
<li>当字段类型为 ReqHeader、RspHeader、Cookie 时，填入需要提取值的参数名称，例如：Accept-Language。可输入 1-100 个字符，允许的字符开头为字母，中间为字母、数字、-，结尾为字母、数字；</li>
<li>当字段类型为 ReqBody 时，填入 Google RE2 正则表达式，正则表达式长度上限为 4KB。</li>
 * @method boolean getEnabled() 获取是否投递该字段，不填表示不投递此字段。
 * @method void setEnabled(boolean $Enabled) 设置是否投递该字段，不填表示不投递此字段。
 */
class CustomField extends AbstractModel
{
    /**
     * @var string 自定义日志字段类型。从 HTTP 请求和响应中的指定位置提取数据，取值有：
<li>ReqHeader：从 HTTP 请求头中提取指定字段值；</li>
<li>RspHeader：从 HTTP 响应头中提取指定字段值；</li>
<li>Cookie: 从 Cookie 中提取指定字段值；</li>
<li>ReqBody: 从 HTTP 请求正文中通过 Google RE2 正则表达式提取指定内容。</li>
     */
    public $Name;

    /**
     * @var string 根据字段类型（Name）填入字段值的定义。需要区分大小写。
<li>当字段类型为 ReqHeader、RspHeader、Cookie 时，填入需要提取值的参数名称，例如：Accept-Language。可输入 1-100 个字符，允许的字符开头为字母，中间为字母、数字、-，结尾为字母、数字；</li>
<li>当字段类型为 ReqBody 时，填入 Google RE2 正则表达式，正则表达式长度上限为 4KB。</li>
     */
    public $Value;

    /**
     * @var boolean 是否投递该字段，不填表示不投递此字段。
     */
    public $Enabled;

    /**
     * @param string $Name 自定义日志字段类型。从 HTTP 请求和响应中的指定位置提取数据，取值有：
<li>ReqHeader：从 HTTP 请求头中提取指定字段值；</li>
<li>RspHeader：从 HTTP 响应头中提取指定字段值；</li>
<li>Cookie: 从 Cookie 中提取指定字段值；</li>
<li>ReqBody: 从 HTTP 请求正文中通过 Google RE2 正则表达式提取指定内容。</li>
     * @param string $Value 根据字段类型（Name）填入字段值的定义。需要区分大小写。
<li>当字段类型为 ReqHeader、RspHeader、Cookie 时，填入需要提取值的参数名称，例如：Accept-Language。可输入 1-100 个字符，允许的字符开头为字母，中间为字母、数字、-，结尾为字母、数字；</li>
<li>当字段类型为 ReqBody 时，填入 Google RE2 正则表达式，正则表达式长度上限为 4KB。</li>
     * @param boolean $Enabled 是否投递该字段，不填表示不投递此字段。
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

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }
    }
}
