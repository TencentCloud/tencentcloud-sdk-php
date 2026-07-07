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
 * 转发配置
 *
 * @method boolean getXForwardedForAlbIdEnabled() 获取是否通过 ALB-ID 头字段获取负载均衡实例ID。
- **true**：是。
- **false**：否。
 * @method void setXForwardedForAlbIdEnabled(boolean $XForwardedForAlbIdEnabled) 设置是否通过 ALB-ID 头字段获取负载均衡实例ID。
- **true**：是。
- **false**：否。
 * @method boolean getXForwardedForClientSrcPortEnabled() 获取是否通过X-Forwarded-Client-srcport头字段获取访问负载均衡实例客户端的端口。
- **true**：是。
- **false**：否。
 * @method void setXForwardedForClientSrcPortEnabled(boolean $XForwardedForClientSrcPortEnabled) 设置是否通过X-Forwarded-Client-srcport头字段获取访问负载均衡实例客户端的端口。
- **true**：是。
- **false**：否。
 * @method boolean getXForwardedForHostEnabled() 获取是否开启通过X-Forwarded-Host头字段获取访问负载均衡实例客户端的域名。
- **true**：是。
- **false**：否。
 * @method void setXForwardedForHostEnabled(boolean $XForwardedForHostEnabled) 设置是否开启通过X-Forwarded-Host头字段获取访问负载均衡实例客户端的域名。
- **true**：是。
- **false**：否。
 * @method string getXForwardedForMode() 获取指定如何处理 X-Forwarded-For（XFF）HTTP 头字段。
- **append**:  附加模式（默认），将客户端的真实 IP 地址附加到 X-Forwarded-For 头的末尾，保留原有的 XFF 链路信息
- **remove**:  删除模式，移除 X-Forwarded-For 头字段，不将该头传递给后端服务器
- **passthrough**: 透传模式，保持 X-Forwarded-For 头不变，直接透传给后端服务器，不做任何修改

 * @method void setXForwardedForMode(string $XForwardedForMode) 设置指定如何处理 X-Forwarded-For（XFF）HTTP 头字段。
- **append**:  附加模式（默认），将客户端的真实 IP 地址附加到 X-Forwarded-For 头的末尾，保留原有的 XFF 链路信息
- **remove**:  删除模式，移除 X-Forwarded-For 头字段，不将该头传递给后端服务器
- **passthrough**: 透传模式，保持 X-Forwarded-For 头不变，直接透传给后端服务器，不做任何修改

 * @method boolean getXForwardedForPortEnabled() 获取是否通过X-Forwarded-Port头字段获取负载均衡实例的监听端口。
- **true**：是。
- **false**：否。
 * @method void setXForwardedForPortEnabled(boolean $XForwardedForPortEnabled) 设置是否通过X-Forwarded-Port头字段获取负载均衡实例的监听端口。
- **true**：是。
- **false**：否。
 * @method boolean getXForwardedForProtoEnabled() 获取是否通过X-Forwarded-Proto头字段获取负载均衡实例的监听协议。
- **true**：是。
- **false**：否。

 * @method void setXForwardedForProtoEnabled(boolean $XForwardedForProtoEnabled) 设置是否通过X-Forwarded-Proto头字段获取负载均衡实例的监听协议。
- **true**：是。
- **false**：否。

 * @method boolean getXTencentClientIDNEnabled() 获取是否通过 X-Tencent-Client-IDN 头访问 客户端证书的颁发者 $ssl_client_i_dn。
- **true**：是。
- **false**：否。

 * @method void setXTencentClientIDNEnabled(boolean $XTencentClientIDNEnabled) 设置是否通过 X-Tencent-Client-IDN 头访问 客户端证书的颁发者 $ssl_client_i_dn。
- **true**：是。
- **false**：否。

 * @method boolean getXTencentClientSDNEnabled() 获取是否通过 X-Tencent-Client-SDN 头访问客户端证书的主题$ssl_client_s_dn。
- **true**：是。
- **false**：否。

 * @method void setXTencentClientSDNEnabled(boolean $XTencentClientSDNEnabled) 设置是否通过 X-Tencent-Client-SDN 头访问客户端证书的主题$ssl_client_s_dn。
- **true**：是。
- **false**：否。

 * @method boolean getXTencentClientSerialEnabled() 获取是否通过 X-Tencent-Client-Serial 头访问 客户端证书的序列号 $ssl_client_serial。
- **true**：是。
- **false**：否。

 * @method void setXTencentClientSerialEnabled(boolean $XTencentClientSerialEnabled) 设置是否通过 X-Tencent-Client-Serial 头访问 客户端证书的序列号 $ssl_client_serial。
- **true**：是。
- **false**：否。

 * @method boolean getXTencentClientVerifyEnabled() 获取是通过 X-Tencent-Client-Verify 头访问 客户端证书的验证结果 $ssl_client_verify。
- **true**：是。
- **false**：否。

 * @method void setXTencentClientVerifyEnabled(boolean $XTencentClientVerifyEnabled) 设置是通过 X-Tencent-Client-Verify 头访问 客户端证书的验证结果 $ssl_client_verify。
- **true**：是。
- **false**：否。
 */
class XForwardedForConfig extends AbstractModel
{
    /**
     * @var boolean 是否通过 ALB-ID 头字段获取负载均衡实例ID。
- **true**：是。
- **false**：否。
     */
    public $XForwardedForAlbIdEnabled;

    /**
     * @var boolean 是否通过X-Forwarded-Client-srcport头字段获取访问负载均衡实例客户端的端口。
- **true**：是。
- **false**：否。
     */
    public $XForwardedForClientSrcPortEnabled;

    /**
     * @var boolean 是否开启通过X-Forwarded-Host头字段获取访问负载均衡实例客户端的域名。
- **true**：是。
- **false**：否。
     */
    public $XForwardedForHostEnabled;

    /**
     * @var string 指定如何处理 X-Forwarded-For（XFF）HTTP 头字段。
- **append**:  附加模式（默认），将客户端的真实 IP 地址附加到 X-Forwarded-For 头的末尾，保留原有的 XFF 链路信息
- **remove**:  删除模式，移除 X-Forwarded-For 头字段，不将该头传递给后端服务器
- **passthrough**: 透传模式，保持 X-Forwarded-For 头不变，直接透传给后端服务器，不做任何修改

     */
    public $XForwardedForMode;

    /**
     * @var boolean 是否通过X-Forwarded-Port头字段获取负载均衡实例的监听端口。
- **true**：是。
- **false**：否。
     */
    public $XForwardedForPortEnabled;

    /**
     * @var boolean 是否通过X-Forwarded-Proto头字段获取负载均衡实例的监听协议。
- **true**：是。
- **false**：否。

     */
    public $XForwardedForProtoEnabled;

    /**
     * @var boolean 是否通过 X-Tencent-Client-IDN 头访问 客户端证书的颁发者 $ssl_client_i_dn。
- **true**：是。
- **false**：否。

     */
    public $XTencentClientIDNEnabled;

    /**
     * @var boolean 是否通过 X-Tencent-Client-SDN 头访问客户端证书的主题$ssl_client_s_dn。
- **true**：是。
- **false**：否。

     */
    public $XTencentClientSDNEnabled;

    /**
     * @var boolean 是否通过 X-Tencent-Client-Serial 头访问 客户端证书的序列号 $ssl_client_serial。
- **true**：是。
- **false**：否。

     */
    public $XTencentClientSerialEnabled;

    /**
     * @var boolean 是通过 X-Tencent-Client-Verify 头访问 客户端证书的验证结果 $ssl_client_verify。
- **true**：是。
- **false**：否。

     */
    public $XTencentClientVerifyEnabled;

    /**
     * @param boolean $XForwardedForAlbIdEnabled 是否通过 ALB-ID 头字段获取负载均衡实例ID。
- **true**：是。
- **false**：否。
     * @param boolean $XForwardedForClientSrcPortEnabled 是否通过X-Forwarded-Client-srcport头字段获取访问负载均衡实例客户端的端口。
- **true**：是。
- **false**：否。
     * @param boolean $XForwardedForHostEnabled 是否开启通过X-Forwarded-Host头字段获取访问负载均衡实例客户端的域名。
- **true**：是。
- **false**：否。
     * @param string $XForwardedForMode 指定如何处理 X-Forwarded-For（XFF）HTTP 头字段。
- **append**:  附加模式（默认），将客户端的真实 IP 地址附加到 X-Forwarded-For 头的末尾，保留原有的 XFF 链路信息
- **remove**:  删除模式，移除 X-Forwarded-For 头字段，不将该头传递给后端服务器
- **passthrough**: 透传模式，保持 X-Forwarded-For 头不变，直接透传给后端服务器，不做任何修改

     * @param boolean $XForwardedForPortEnabled 是否通过X-Forwarded-Port头字段获取负载均衡实例的监听端口。
- **true**：是。
- **false**：否。
     * @param boolean $XForwardedForProtoEnabled 是否通过X-Forwarded-Proto头字段获取负载均衡实例的监听协议。
- **true**：是。
- **false**：否。

     * @param boolean $XTencentClientIDNEnabled 是否通过 X-Tencent-Client-IDN 头访问 客户端证书的颁发者 $ssl_client_i_dn。
- **true**：是。
- **false**：否。

     * @param boolean $XTencentClientSDNEnabled 是否通过 X-Tencent-Client-SDN 头访问客户端证书的主题$ssl_client_s_dn。
- **true**：是。
- **false**：否。

     * @param boolean $XTencentClientSerialEnabled 是否通过 X-Tencent-Client-Serial 头访问 客户端证书的序列号 $ssl_client_serial。
- **true**：是。
- **false**：否。

     * @param boolean $XTencentClientVerifyEnabled 是通过 X-Tencent-Client-Verify 头访问 客户端证书的验证结果 $ssl_client_verify。
- **true**：是。
- **false**：否。
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
        if (array_key_exists("XForwardedForAlbIdEnabled",$param) and $param["XForwardedForAlbIdEnabled"] !== null) {
            $this->XForwardedForAlbIdEnabled = $param["XForwardedForAlbIdEnabled"];
        }

        if (array_key_exists("XForwardedForClientSrcPortEnabled",$param) and $param["XForwardedForClientSrcPortEnabled"] !== null) {
            $this->XForwardedForClientSrcPortEnabled = $param["XForwardedForClientSrcPortEnabled"];
        }

        if (array_key_exists("XForwardedForHostEnabled",$param) and $param["XForwardedForHostEnabled"] !== null) {
            $this->XForwardedForHostEnabled = $param["XForwardedForHostEnabled"];
        }

        if (array_key_exists("XForwardedForMode",$param) and $param["XForwardedForMode"] !== null) {
            $this->XForwardedForMode = $param["XForwardedForMode"];
        }

        if (array_key_exists("XForwardedForPortEnabled",$param) and $param["XForwardedForPortEnabled"] !== null) {
            $this->XForwardedForPortEnabled = $param["XForwardedForPortEnabled"];
        }

        if (array_key_exists("XForwardedForProtoEnabled",$param) and $param["XForwardedForProtoEnabled"] !== null) {
            $this->XForwardedForProtoEnabled = $param["XForwardedForProtoEnabled"];
        }

        if (array_key_exists("XTencentClientIDNEnabled",$param) and $param["XTencentClientIDNEnabled"] !== null) {
            $this->XTencentClientIDNEnabled = $param["XTencentClientIDNEnabled"];
        }

        if (array_key_exists("XTencentClientSDNEnabled",$param) and $param["XTencentClientSDNEnabled"] !== null) {
            $this->XTencentClientSDNEnabled = $param["XTencentClientSDNEnabled"];
        }

        if (array_key_exists("XTencentClientSerialEnabled",$param) and $param["XTencentClientSerialEnabled"] !== null) {
            $this->XTencentClientSerialEnabled = $param["XTencentClientSerialEnabled"];
        }

        if (array_key_exists("XTencentClientVerifyEnabled",$param) and $param["XTencentClientVerifyEnabled"] !== null) {
            $this->XTencentClientVerifyEnabled = $param["XTencentClientVerifyEnabled"];
        }
    }
}
