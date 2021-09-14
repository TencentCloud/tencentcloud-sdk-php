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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Referer 防盗链配置
 *
 * @method string getStatus() 获取[Referer 防盗链](https://cloud.tencent.com/document/product/266/14046)设置状态，可选值：
<li>Enabled: 启用；</li>
<li>Disabled: 禁用。</li>
 * @method void setStatus(string $Status) 设置[Referer 防盗链](https://cloud.tencent.com/document/product/266/14046)设置状态，可选值：
<li>Enabled: 启用；</li>
<li>Disabled: 禁用。</li>
 * @method string getAuthType() 获取Referer 校验类型，可选值：
<li>Black：黑名单方式校验。HTTP 请求携带了 Referers 列表中的某个 Referer 将被拒绝访问。</li>
<li>White：白名单方式校验。HTTP 请求携带了 Referers 列表中的 Referer 时才允许访问。</li>
当 Status 取值为 Enabled 时，AuthType 必须赋值。
 * @method void setAuthType(string $AuthType) 设置Referer 校验类型，可选值：
<li>Black：黑名单方式校验。HTTP 请求携带了 Referers 列表中的某个 Referer 将被拒绝访问。</li>
<li>White：白名单方式校验。HTTP 请求携带了 Referers 列表中的 Referer 时才允许访问。</li>
当 Status 取值为 Enabled 时，AuthType 必须赋值。
 * @method array getReferers() 获取用于校验的 Referer 列表，最大支持20个 Referer。当 Status 取值为 Enabled 时， Referers 不能为空数组。Referer 的格式参考域名的格式。
 * @method void setReferers(array $Referers) 设置用于校验的 Referer 列表，最大支持20个 Referer。当 Status 取值为 Enabled 时， Referers 不能为空数组。Referer 的格式参考域名的格式。
 * @method string getBlankRefererAllowed() 获取是否允许空 Referer 访问本域名，可选值：
<li>Yes： 是。</li>
<li>No： 否。</li>
当 Status 取值为 Enabled 时，BlankRefererAllowed 必须赋值。
 * @method void setBlankRefererAllowed(string $BlankRefererAllowed) 设置是否允许空 Referer 访问本域名，可选值：
<li>Yes： 是。</li>
<li>No： 否。</li>
当 Status 取值为 Enabled 时，BlankRefererAllowed 必须赋值。
 */
class RefererAuthPolicy extends AbstractModel
{
    /**
     * @var string [Referer 防盗链](https://cloud.tencent.com/document/product/266/14046)设置状态，可选值：
<li>Enabled: 启用；</li>
<li>Disabled: 禁用。</li>
     */
    public $Status;

    /**
     * @var string Referer 校验类型，可选值：
<li>Black：黑名单方式校验。HTTP 请求携带了 Referers 列表中的某个 Referer 将被拒绝访问。</li>
<li>White：白名单方式校验。HTTP 请求携带了 Referers 列表中的 Referer 时才允许访问。</li>
当 Status 取值为 Enabled 时，AuthType 必须赋值。
     */
    public $AuthType;

    /**
     * @var array 用于校验的 Referer 列表，最大支持20个 Referer。当 Status 取值为 Enabled 时， Referers 不能为空数组。Referer 的格式参考域名的格式。
     */
    public $Referers;

    /**
     * @var string 是否允许空 Referer 访问本域名，可选值：
<li>Yes： 是。</li>
<li>No： 否。</li>
当 Status 取值为 Enabled 时，BlankRefererAllowed 必须赋值。
     */
    public $BlankRefererAllowed;

    /**
     * @param string $Status [Referer 防盗链](https://cloud.tencent.com/document/product/266/14046)设置状态，可选值：
<li>Enabled: 启用；</li>
<li>Disabled: 禁用。</li>
     * @param string $AuthType Referer 校验类型，可选值：
<li>Black：黑名单方式校验。HTTP 请求携带了 Referers 列表中的某个 Referer 将被拒绝访问。</li>
<li>White：白名单方式校验。HTTP 请求携带了 Referers 列表中的 Referer 时才允许访问。</li>
当 Status 取值为 Enabled 时，AuthType 必须赋值。
     * @param array $Referers 用于校验的 Referer 列表，最大支持20个 Referer。当 Status 取值为 Enabled 时， Referers 不能为空数组。Referer 的格式参考域名的格式。
     * @param string $BlankRefererAllowed 是否允许空 Referer 访问本域名，可选值：
<li>Yes： 是。</li>
<li>No： 否。</li>
当 Status 取值为 Enabled 时，BlankRefererAllowed 必须赋值。
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
        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("Referers",$param) and $param["Referers"] !== null) {
            $this->Referers = $param["Referers"];
        }

        if (array_key_exists("BlankRefererAllowed",$param) and $param["BlankRefererAllowed"] !== null) {
            $this->BlankRefererAllowed = $param["BlankRefererAllowed"];
        }
    }
}
