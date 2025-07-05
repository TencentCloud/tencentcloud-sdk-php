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
 * 访问协议强制 HTTPS 跳转配置。
 *
 * @method string getSwitch() 获取访问强制跳转配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method void setSwitch(string $Switch) 设置访问强制跳转配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
 * @method integer getRedirectStatusCode() 获取重定向状态码。当 Switch 为 on 时，此字段必填，否则此字段不生效。取值有：
<li>301：301跳转；</li>
<li>302：302跳转。</li>
 * @method void setRedirectStatusCode(integer $RedirectStatusCode) 设置重定向状态码。当 Switch 为 on 时，此字段必填，否则此字段不生效。取值有：
<li>301：301跳转；</li>
<li>302：302跳转。</li>
 */
class ForceRedirectHTTPSParameters extends AbstractModel
{
    /**
     * @var string 访问强制跳转配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     */
    public $Switch;

    /**
     * @var integer 重定向状态码。当 Switch 为 on 时，此字段必填，否则此字段不生效。取值有：
<li>301：301跳转；</li>
<li>302：302跳转。</li>
     */
    public $RedirectStatusCode;

    /**
     * @param string $Switch 访问强制跳转配置开关，取值有：
<li>on：开启；</li>
<li>off：关闭。</li>
     * @param integer $RedirectStatusCode 重定向状态码。当 Switch 为 on 时，此字段必填，否则此字段不生效。取值有：
<li>301：301跳转；</li>
<li>302：302跳转。</li>
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

        if (array_key_exists("RedirectStatusCode",$param) and $param["RedirectStatusCode"] !== null) {
            $this->RedirectStatusCode = $param["RedirectStatusCode"];
        }
    }
}
