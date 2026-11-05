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
 * 访问 URL 重定向目标端口配置参数。
 *
 * @method string getAction() 获取<p>目标端口配置</p><p>枚举值：</p><ul><li>FollowProtocol： 使用目标协议的默认端口。重定向地址中不显式指定端口，由目标协议使用默认端口，HTTP 使用 80，HTTPS 使用 443。</li><li>FollowRequest： 跟随客户端请求的目标端口。请求地址显式携带端口时沿用该端口；未显式携带时，重定向地址中不携带端口。</li><li>Custom： 使用指定的自定义端口。</li></ul>
 * @method void setAction(string $Action) 设置<p>目标端口配置</p><p>枚举值：</p><ul><li>FollowProtocol： 使用目标协议的默认端口。重定向地址中不显式指定端口，由目标协议使用默认端口，HTTP 使用 80，HTTPS 使用 443。</li><li>FollowRequest： 跟随客户端请求的目标端口。请求地址显式携带端口时沿用该端口；未显式携带时，重定向地址中不携带端口。</li><li>Custom： 使用指定的自定义端口。</li></ul>
 * @method integer getValue() 获取<p>自定义目标端口。</p><p>取值范围：[1, 65535]</p><p>当 Action 为 Custom 时，此字段必填；当 Action 为 FollowProtocol 或 FollowRequest 时，此字段不生效。</p>
 * @method void setValue(integer $Value) 设置<p>自定义目标端口。</p><p>取值范围：[1, 65535]</p><p>当 Action 为 Custom 时，此字段必填；当 Action 为 FollowProtocol 或 FollowRequest 时，此字段不生效。</p>
 */
class AccessURLRedirectPort extends AbstractModel
{
    /**
     * @var string <p>目标端口配置</p><p>枚举值：</p><ul><li>FollowProtocol： 使用目标协议的默认端口。重定向地址中不显式指定端口，由目标协议使用默认端口，HTTP 使用 80，HTTPS 使用 443。</li><li>FollowRequest： 跟随客户端请求的目标端口。请求地址显式携带端口时沿用该端口；未显式携带时，重定向地址中不携带端口。</li><li>Custom： 使用指定的自定义端口。</li></ul>
     */
    public $Action;

    /**
     * @var integer <p>自定义目标端口。</p><p>取值范围：[1, 65535]</p><p>当 Action 为 Custom 时，此字段必填；当 Action 为 FollowProtocol 或 FollowRequest 时，此字段不生效。</p>
     */
    public $Value;

    /**
     * @param string $Action <p>目标端口配置</p><p>枚举值：</p><ul><li>FollowProtocol： 使用目标协议的默认端口。重定向地址中不显式指定端口，由目标协议使用默认端口，HTTP 使用 80，HTTPS 使用 443。</li><li>FollowRequest： 跟随客户端请求的目标端口。请求地址显式携带端口时沿用该端口；未显式携带时，重定向地址中不携带端口。</li><li>Custom： 使用指定的自定义端口。</li></ul>
     * @param integer $Value <p>自定义目标端口。</p><p>取值范围：[1, 65535]</p><p>当 Action 为 Custom 时，此字段必填；当 Action 为 FollowProtocol 或 FollowRequest 时，此字段不生效。</p>
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
