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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 会话保持配置。
 *
 * @method boolean getStickySessionEnabled() 获取是否开启会话保持。
- **true**：开启。
- **false**：不开启。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStickySessionEnabled(boolean $StickySessionEnabled) 设置是否开启会话保持。
- **true**：开启。
- **false**：不开启。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCookie() 获取自定义 Cookie 名称。
长度为 1~255 个字符，只能包含英文字母和数字字符，且不能为`tgw_l7_tg_route`，该字段为目标组间会话保持Cookie保留字段。
>仅当 **StickySessionEnabled** 为 **true** 时该参数生效。
 * @method void setCookie(string $Cookie) 设置自定义 Cookie 名称。
长度为 1~255 个字符，只能包含英文字母和数字字符，且不能为`tgw_l7_tg_route`，该字段为目标组间会话保持Cookie保留字段。
>仅当 **StickySessionEnabled** 为 **true** 时该参数生效。
 * @method integer getCookieTimeout() 获取会话保持时间。
取值范围：**1-86400**，单位：**秒**。
默认值：**1000**。
>仅当 **StickySessionEnabled** 为 **true**时，该参数生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCookieTimeout(integer $CookieTimeout) 设置会话保持时间。
取值范围：**1-86400**，单位：**秒**。
默认值：**1000**。
>仅当 **StickySessionEnabled** 为 **true**时，该参数生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStickySessionType() 获取会话保持类型（处理Cookie的方式）。
- **Insert**（默认值）：植入 Cookie。 客户端第一次访问后端服务时，应用型负载均衡会在返回请求中植入 Cookie。下次客户端请求时携带该 Cookie，负载均衡将请求转发到上次请求的相同后端服务。
- **Rewrite**：重写 Cookie。 负载均衡会对用户自定义的 Cookie 进行重写，下次客户端请求时携带该 Cookie，负载均衡将请求转发到上次请求的相同后端服务。
>仅当 **StickySessionEnabled** 为 **true** 时该参数生效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStickySessionType(string $StickySessionType) 设置会话保持类型（处理Cookie的方式）。
- **Insert**（默认值）：植入 Cookie。 客户端第一次访问后端服务时，应用型负载均衡会在返回请求中植入 Cookie。下次客户端请求时携带该 Cookie，负载均衡将请求转发到上次请求的相同后端服务。
- **Rewrite**：重写 Cookie。 负载均衡会对用户自定义的 Cookie 进行重写，下次客户端请求时携带该 Cookie，负载均衡将请求转发到上次请求的相同后端服务。
>仅当 **StickySessionEnabled** 为 **true** 时该参数生效。
注意：此字段可能返回 null，表示取不到有效值。
 */
class StickySessionConfig extends AbstractModel
{
    /**
     * @var boolean 是否开启会话保持。
- **true**：开启。
- **false**：不开启。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StickySessionEnabled;

    /**
     * @var string 自定义 Cookie 名称。
长度为 1~255 个字符，只能包含英文字母和数字字符，且不能为`tgw_l7_tg_route`，该字段为目标组间会话保持Cookie保留字段。
>仅当 **StickySessionEnabled** 为 **true** 时该参数生效。
     */
    public $Cookie;

    /**
     * @var integer 会话保持时间。
取值范围：**1-86400**，单位：**秒**。
默认值：**1000**。
>仅当 **StickySessionEnabled** 为 **true**时，该参数生效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CookieTimeout;

    /**
     * @var string 会话保持类型（处理Cookie的方式）。
- **Insert**（默认值）：植入 Cookie。 客户端第一次访问后端服务时，应用型负载均衡会在返回请求中植入 Cookie。下次客户端请求时携带该 Cookie，负载均衡将请求转发到上次请求的相同后端服务。
- **Rewrite**：重写 Cookie。 负载均衡会对用户自定义的 Cookie 进行重写，下次客户端请求时携带该 Cookie，负载均衡将请求转发到上次请求的相同后端服务。
>仅当 **StickySessionEnabled** 为 **true** 时该参数生效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $StickySessionType;

    /**
     * @param boolean $StickySessionEnabled 是否开启会话保持。
- **true**：开启。
- **false**：不开启。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Cookie 自定义 Cookie 名称。
长度为 1~255 个字符，只能包含英文字母和数字字符，且不能为`tgw_l7_tg_route`，该字段为目标组间会话保持Cookie保留字段。
>仅当 **StickySessionEnabled** 为 **true** 时该参数生效。
     * @param integer $CookieTimeout 会话保持时间。
取值范围：**1-86400**，单位：**秒**。
默认值：**1000**。
>仅当 **StickySessionEnabled** 为 **true**时，该参数生效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StickySessionType 会话保持类型（处理Cookie的方式）。
- **Insert**（默认值）：植入 Cookie。 客户端第一次访问后端服务时，应用型负载均衡会在返回请求中植入 Cookie。下次客户端请求时携带该 Cookie，负载均衡将请求转发到上次请求的相同后端服务。
- **Rewrite**：重写 Cookie。 负载均衡会对用户自定义的 Cookie 进行重写，下次客户端请求时携带该 Cookie，负载均衡将请求转发到上次请求的相同后端服务。
>仅当 **StickySessionEnabled** 为 **true** 时该参数生效。
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
        if (array_key_exists("StickySessionEnabled",$param) and $param["StickySessionEnabled"] !== null) {
            $this->StickySessionEnabled = $param["StickySessionEnabled"];
        }

        if (array_key_exists("Cookie",$param) and $param["Cookie"] !== null) {
            $this->Cookie = $param["Cookie"];
        }

        if (array_key_exists("CookieTimeout",$param) and $param["CookieTimeout"] !== null) {
            $this->CookieTimeout = $param["CookieTimeout"];
        }

        if (array_key_exists("StickySessionType",$param) and $param["StickySessionType"] !== null) {
            $this->StickySessionType = $param["StickySessionType"];
        }
    }
}
