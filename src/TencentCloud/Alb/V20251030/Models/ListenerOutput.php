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
 * @method boolean getCaEnable() 获取<p>是否开启双向认证。</p>
 * @method void setCaEnable(boolean $CaEnable) 设置<p>是否开启双向认证。</p>
 * @method string getCreateTime() 获取<p>监听器实例的创建时间。格式：ISO 8601（例如 2025-01-01T08:30:00+08:00）</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>监听器实例的创建时间。格式：ISO 8601（例如 2025-01-01T08:30:00+08:00）</p>
 * @method boolean getGzipEnabled() 获取<p>是否启用 Gzip 压缩。</p>
 * @method void setGzipEnabled(boolean $GzipEnabled) 设置<p>是否启用 Gzip 压缩。</p>
 * @method boolean getHttp2Enable() 获取<p>是否启用http2。</p>
 * @method void setHttp2Enable(boolean $Http2Enable) 设置<p>是否启用http2。</p>
 * @method integer getIdleTimeout() 获取<p>空闲超时时间。</p>
 * @method void setIdleTimeout(integer $IdleTimeout) 设置<p>空闲超时时间。</p>
 * @method string getListenerId() 获取<p>监听器 ID，格式为 lst- 后接 8 位字母数字。</p>
 * @method void setListenerId(string $ListenerId) 设置<p>监听器 ID，格式为 lst- 后接 8 位字母数字。</p>
 * @method string getListenerName() 获取<p>监听器名称。</p>
 * @method void setListenerName(string $ListenerName) 设置<p>监听器名称。</p>
 * @method integer getListenerPort() 获取<p>监听器端口。</p>
 * @method void setListenerPort(integer $ListenerPort) 设置<p>监听器端口。</p>
 * @method string getListenerProtocol() 获取<p>监听器协议。</p>
 * @method void setListenerProtocol(string $ListenerProtocol) 设置<p>监听器协议。</p>
 * @method string getListenerStatus() 获取<p>监听器状态。取值:=</p><ul><li><strong>Active</strong>: 运行中。</li><li><strong>Provisioning</strong>：创建中。</li><li><strong>Configuring</strong>：变配中。</li><li><strong>ProvisionFailed</strong>：创建失败</li></ul>
 * @method void setListenerStatus(string $ListenerStatus) 设置<p>监听器状态。取值:=</p><ul><li><strong>Active</strong>: 运行中。</li><li><strong>Provisioning</strong>：创建中。</li><li><strong>Configuring</strong>：变配中。</li><li><strong>ProvisionFailed</strong>：创建失败</li></ul>
 * @method string getModifyTime() 获取<p>监听器实例的最后变更时间。格式：ISO 8601（例如 2025-01-01T08:30:00+08:00）</p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>监听器实例的最后变更时间。格式：ISO 8601（例如 2025-01-01T08:30:00+08:00）</p>
 * @method integer getRequestTimeout() 获取<p>连接请求超时时间。</p>
 * @method void setRequestTimeout(integer $RequestTimeout) 设置<p>连接请求超时时间。</p>
 * @method array getTags() 获取<p>标签。</p>
 * @method void setTags(array $Tags) 设置<p>标签。</p>
 * @method string getTlsSecurityPolicyId() 获取<p>安全策略 ID。</p>
 * @method void setTlsSecurityPolicyId(string $TlsSecurityPolicyId) 设置<p>安全策略 ID。</p>
 * @method XForwardedForConfig getXForwardedForConfig() 获取<p>XForwardedFor配置。</p>
 * @method void setXForwardedForConfig(XForwardedForConfig $XForwardedForConfig) 设置<p>XForwardedFor配置。</p>
 */
class ListenerOutput extends AbstractModel
{
    /**
     * @var boolean <p>是否开启双向认证。</p>
     */
    public $CaEnable;

    /**
     * @var string <p>监听器实例的创建时间。格式：ISO 8601（例如 2025-01-01T08:30:00+08:00）</p>
     */
    public $CreateTime;

    /**
     * @var boolean <p>是否启用 Gzip 压缩。</p>
     */
    public $GzipEnabled;

    /**
     * @var boolean <p>是否启用http2。</p>
     */
    public $Http2Enable;

    /**
     * @var integer <p>空闲超时时间。</p>
     */
    public $IdleTimeout;

    /**
     * @var string <p>监听器 ID，格式为 lst- 后接 8 位字母数字。</p>
     */
    public $ListenerId;

    /**
     * @var string <p>监听器名称。</p>
     */
    public $ListenerName;

    /**
     * @var integer <p>监听器端口。</p>
     */
    public $ListenerPort;

    /**
     * @var string <p>监听器协议。</p>
     */
    public $ListenerProtocol;

    /**
     * @var string <p>监听器状态。取值:=</p><ul><li><strong>Active</strong>: 运行中。</li><li><strong>Provisioning</strong>：创建中。</li><li><strong>Configuring</strong>：变配中。</li><li><strong>ProvisionFailed</strong>：创建失败</li></ul>
     */
    public $ListenerStatus;

    /**
     * @var string <p>监听器实例的最后变更时间。格式：ISO 8601（例如 2025-01-01T08:30:00+08:00）</p>
     */
    public $ModifyTime;

    /**
     * @var integer <p>连接请求超时时间。</p>
     */
    public $RequestTimeout;

    /**
     * @var array <p>标签。</p>
     */
    public $Tags;

    /**
     * @var string <p>安全策略 ID。</p>
     */
    public $TlsSecurityPolicyId;

    /**
     * @var XForwardedForConfig <p>XForwardedFor配置。</p>
     */
    public $XForwardedForConfig;

    /**
     * @param boolean $CaEnable <p>是否开启双向认证。</p>
     * @param string $CreateTime <p>监听器实例的创建时间。格式：ISO 8601（例如 2025-01-01T08:30:00+08:00）</p>
     * @param boolean $GzipEnabled <p>是否启用 Gzip 压缩。</p>
     * @param boolean $Http2Enable <p>是否启用http2。</p>
     * @param integer $IdleTimeout <p>空闲超时时间。</p>
     * @param string $ListenerId <p>监听器 ID，格式为 lst- 后接 8 位字母数字。</p>
     * @param string $ListenerName <p>监听器名称。</p>
     * @param integer $ListenerPort <p>监听器端口。</p>
     * @param string $ListenerProtocol <p>监听器协议。</p>
     * @param string $ListenerStatus <p>监听器状态。取值:=</p><ul><li><strong>Active</strong>: 运行中。</li><li><strong>Provisioning</strong>：创建中。</li><li><strong>Configuring</strong>：变配中。</li><li><strong>ProvisionFailed</strong>：创建失败</li></ul>
     * @param string $ModifyTime <p>监听器实例的最后变更时间。格式：ISO 8601（例如 2025-01-01T08:30:00+08:00）</p>
     * @param integer $RequestTimeout <p>连接请求超时时间。</p>
     * @param array $Tags <p>标签。</p>
     * @param string $TlsSecurityPolicyId <p>安全策略 ID。</p>
     * @param XForwardedForConfig $XForwardedForConfig <p>XForwardedFor配置。</p>
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
