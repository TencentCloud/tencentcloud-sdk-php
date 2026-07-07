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
 * 监听器简要信息出参
 *
 * @method boolean getCaEnable() 获取是否开启双向认证。
 * @method void setCaEnable(boolean $CaEnable) 设置是否开启双向认证。
 * @method string getCreateTime() 获取监听器实例的创建时间。格式：ISO 8601（例如 2025-01-01T08:30:00+08:00）
 * @method void setCreateTime(string $CreateTime) 设置监听器实例的创建时间。格式：ISO 8601（例如 2025-01-01T08:30:00+08:00）
 * @method boolean getGzipEnabled() 获取是否启用 Gzip 压缩。
 * @method void setGzipEnabled(boolean $GzipEnabled) 设置是否启用 Gzip 压缩。
 * @method boolean getHttp2Enable() 获取是否启用http2。
 * @method void setHttp2Enable(boolean $Http2Enable) 设置是否启用http2。
 * @method integer getIdleTimeout() 获取空闲超时时间。
 * @method void setIdleTimeout(integer $IdleTimeout) 设置空闲超时时间。
 * @method string getListenerId() 获取监听器 ID，格式为 lst- 后接 8 位字母数字。
 * @method void setListenerId(string $ListenerId) 设置监听器 ID，格式为 lst- 后接 8 位字母数字。
 * @method string getListenerName() 获取监听器名称。
 * @method void setListenerName(string $ListenerName) 设置监听器名称。
 * @method integer getListenerPort() 获取监听器端口。
 * @method void setListenerPort(integer $ListenerPort) 设置监听器端口。
 * @method string getListenerProtocol() 获取监听器协议。
 * @method void setListenerProtocol(string $ListenerProtocol) 设置监听器协议。
 * @method string getListenerStatus() 获取监听器状态。取值:=

- **Active**: 运行中。
- **Provisioning**：创建中。
- **Configuring**：变配中。
- **ProvisionFailed**：创建失败
 * @method void setListenerStatus(string $ListenerStatus) 设置监听器状态。取值:=

- **Active**: 运行中。
- **Provisioning**：创建中。
- **Configuring**：变配中。
- **ProvisionFailed**：创建失败
 * @method string getModifyTime() 获取监听器实例的最后变更时间。格式：ISO 8601（例如 2025-01-01T08:30:00+08:00）
 * @method void setModifyTime(string $ModifyTime) 设置监听器实例的最后变更时间。格式：ISO 8601（例如 2025-01-01T08:30:00+08:00）
 * @method integer getRequestTimeout() 获取请求超时时间。
 * @method void setRequestTimeout(integer $RequestTimeout) 设置请求超时时间。
 * @method array getTags() 获取标签。
 * @method void setTags(array $Tags) 设置标签。
 * @method string getTlsSecurityPolicyId() 获取安全策略 ID。
 * @method void setTlsSecurityPolicyId(string $TlsSecurityPolicyId) 设置安全策略 ID。
 * @method XForwardedForConfig getXForwardedForConfig() 获取XForwardedFor配置。
 * @method void setXForwardedForConfig(XForwardedForConfig $XForwardedForConfig) 设置XForwardedFor配置。
 */
class ListenerOutput extends AbstractModel
{
    /**
     * @var boolean 是否开启双向认证。
     */
    public $CaEnable;

    /**
     * @var string 监听器实例的创建时间。格式：ISO 8601（例如 2025-01-01T08:30:00+08:00）
     */
    public $CreateTime;

    /**
     * @var boolean 是否启用 Gzip 压缩。
     */
    public $GzipEnabled;

    /**
     * @var boolean 是否启用http2。
     */
    public $Http2Enable;

    /**
     * @var integer 空闲超时时间。
     */
    public $IdleTimeout;

    /**
     * @var string 监听器 ID，格式为 lst- 后接 8 位字母数字。
     */
    public $ListenerId;

    /**
     * @var string 监听器名称。
     */
    public $ListenerName;

    /**
     * @var integer 监听器端口。
     */
    public $ListenerPort;

    /**
     * @var string 监听器协议。
     */
    public $ListenerProtocol;

    /**
     * @var string 监听器状态。取值:=

- **Active**: 运行中。
- **Provisioning**：创建中。
- **Configuring**：变配中。
- **ProvisionFailed**：创建失败
     */
    public $ListenerStatus;

    /**
     * @var string 监听器实例的最后变更时间。格式：ISO 8601（例如 2025-01-01T08:30:00+08:00）
     */
    public $ModifyTime;

    /**
     * @var integer 请求超时时间。
     */
    public $RequestTimeout;

    /**
     * @var array 标签。
     */
    public $Tags;

    /**
     * @var string 安全策略 ID。
     */
    public $TlsSecurityPolicyId;

    /**
     * @var XForwardedForConfig XForwardedFor配置。
     */
    public $XForwardedForConfig;

    /**
     * @param boolean $CaEnable 是否开启双向认证。
     * @param string $CreateTime 监听器实例的创建时间。格式：ISO 8601（例如 2025-01-01T08:30:00+08:00）
     * @param boolean $GzipEnabled 是否启用 Gzip 压缩。
     * @param boolean $Http2Enable 是否启用http2。
     * @param integer $IdleTimeout 空闲超时时间。
     * @param string $ListenerId 监听器 ID，格式为 lst- 后接 8 位字母数字。
     * @param string $ListenerName 监听器名称。
     * @param integer $ListenerPort 监听器端口。
     * @param string $ListenerProtocol 监听器协议。
     * @param string $ListenerStatus 监听器状态。取值:=

- **Active**: 运行中。
- **Provisioning**：创建中。
- **Configuring**：变配中。
- **ProvisionFailed**：创建失败
     * @param string $ModifyTime 监听器实例的最后变更时间。格式：ISO 8601（例如 2025-01-01T08:30:00+08:00）
     * @param integer $RequestTimeout 请求超时时间。
     * @param array $Tags 标签。
     * @param string $TlsSecurityPolicyId 安全策略 ID。
     * @param XForwardedForConfig $XForwardedForConfig XForwardedFor配置。
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
        if (array_key_exists("CaEnable",$param) and $param["CaEnable"] !== null) {
            $this->CaEnable = $param["CaEnable"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("GzipEnabled",$param) and $param["GzipEnabled"] !== null) {
            $this->GzipEnabled = $param["GzipEnabled"];
        }

        if (array_key_exists("Http2Enable",$param) and $param["Http2Enable"] !== null) {
            $this->Http2Enable = $param["Http2Enable"];
        }

        if (array_key_exists("IdleTimeout",$param) and $param["IdleTimeout"] !== null) {
            $this->IdleTimeout = $param["IdleTimeout"];
        }

        if (array_key_exists("ListenerId",$param) and $param["ListenerId"] !== null) {
            $this->ListenerId = $param["ListenerId"];
        }

        if (array_key_exists("ListenerName",$param) and $param["ListenerName"] !== null) {
            $this->ListenerName = $param["ListenerName"];
        }

        if (array_key_exists("ListenerPort",$param) and $param["ListenerPort"] !== null) {
            $this->ListenerPort = $param["ListenerPort"];
        }

        if (array_key_exists("ListenerProtocol",$param) and $param["ListenerProtocol"] !== null) {
            $this->ListenerProtocol = $param["ListenerProtocol"];
        }

        if (array_key_exists("ListenerStatus",$param) and $param["ListenerStatus"] !== null) {
            $this->ListenerStatus = $param["ListenerStatus"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("RequestTimeout",$param) and $param["RequestTimeout"] !== null) {
            $this->RequestTimeout = $param["RequestTimeout"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("TlsSecurityPolicyId",$param) and $param["TlsSecurityPolicyId"] !== null) {
            $this->TlsSecurityPolicyId = $param["TlsSecurityPolicyId"];
        }

        if (array_key_exists("XForwardedForConfig",$param) and $param["XForwardedForConfig"] !== null) {
            $this->XForwardedForConfig = new XForwardedForConfig();
            $this->XForwardedForConfig->deserialize($param["XForwardedForConfig"]);
        }
    }
}
