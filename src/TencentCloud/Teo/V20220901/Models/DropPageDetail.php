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
 * 拦截页面的配置信息
 *
 * @method integer getPageId() 获取拦截页面的唯一 Id。系统默认包含一个自带拦截页面，Id 值为0。
该 Id 可通过创建拦截页面接口进行上传获取。如传入0，代表使用系统默认拦截页面。该参数已废弃。
 * @method void setPageId(integer $PageId) 设置拦截页面的唯一 Id。系统默认包含一个自带拦截页面，Id 值为0。
该 Id 可通过创建拦截页面接口进行上传获取。如传入0，代表使用系统默认拦截页面。该参数已废弃。
 * @method integer getStatusCode() 获取拦截页面的 HTTP 状态码。状态码取值：100～600，不支持 3xx 状态码。托管规则拦截页面默认：566，安全防护（除托管规则外）拦截页面默认：567.
 * @method void setStatusCode(integer $StatusCode) 设置拦截页面的 HTTP 状态码。状态码取值：100～600，不支持 3xx 状态码。托管规则拦截页面默认：566，安全防护（除托管规则外）拦截页面默认：567.
 * @method string getName() 获取页面文件名或 url。
 * @method void setName(string $Name) 设置页面文件名或 url。
 * @method string getType() 获取页面的类型，取值有：
<li>page：指定页面。</li>

 * @method void setType(string $Type) 设置页面的类型，取值有：
<li>page：指定页面。</li>

 * @method string getCustomResponseId() 获取自定义响应 Id。该 Id 可通过查询自定义错误页列表接口获取。默认值为default，使用系统默认页面。Type 类型是 page 时必填，且不能为空。
 * @method void setCustomResponseId(string $CustomResponseId) 设置自定义响应 Id。该 Id 可通过查询自定义错误页列表接口获取。默认值为default，使用系统默认页面。Type 类型是 page 时必填，且不能为空。
 */
class DropPageDetail extends AbstractModel
{
    /**
     * @var integer 拦截页面的唯一 Id。系统默认包含一个自带拦截页面，Id 值为0。
该 Id 可通过创建拦截页面接口进行上传获取。如传入0，代表使用系统默认拦截页面。该参数已废弃。
     */
    public $PageId;

    /**
     * @var integer 拦截页面的 HTTP 状态码。状态码取值：100～600，不支持 3xx 状态码。托管规则拦截页面默认：566，安全防护（除托管规则外）拦截页面默认：567.
     */
    public $StatusCode;

    /**
     * @var string 页面文件名或 url。
     */
    public $Name;

    /**
     * @var string 页面的类型，取值有：
<li>page：指定页面。</li>

     */
    public $Type;

    /**
     * @var string 自定义响应 Id。该 Id 可通过查询自定义错误页列表接口获取。默认值为default，使用系统默认页面。Type 类型是 page 时必填，且不能为空。
     */
    public $CustomResponseId;

    /**
     * @param integer $PageId 拦截页面的唯一 Id。系统默认包含一个自带拦截页面，Id 值为0。
该 Id 可通过创建拦截页面接口进行上传获取。如传入0，代表使用系统默认拦截页面。该参数已废弃。
     * @param integer $StatusCode 拦截页面的 HTTP 状态码。状态码取值：100～600，不支持 3xx 状态码。托管规则拦截页面默认：566，安全防护（除托管规则外）拦截页面默认：567.
     * @param string $Name 页面文件名或 url。
     * @param string $Type 页面的类型，取值有：
<li>page：指定页面。</li>

     * @param string $CustomResponseId 自定义响应 Id。该 Id 可通过查询自定义错误页列表接口获取。默认值为default，使用系统默认页面。Type 类型是 page 时必填，且不能为空。
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
        if (array_key_exists("PageId",$param) and $param["PageId"] !== null) {
            $this->PageId = $param["PageId"];
        }

        if (array_key_exists("StatusCode",$param) and $param["StatusCode"] !== null) {
            $this->StatusCode = $param["StatusCode"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("CustomResponseId",$param) and $param["CustomResponseId"] !== null) {
            $this->CustomResponseId = $param["CustomResponseId"];
        }
    }
}
