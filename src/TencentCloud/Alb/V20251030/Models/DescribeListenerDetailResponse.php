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
 * DescribeListenerDetail返回参数结构体
 *
 * @method array getCaCertificateIds() 获取<p>监听器绑定的CA证书ID列表。</p>
 * @method void setCaCertificateIds(array $CaCertificateIds) 设置<p>监听器绑定的CA证书ID列表。</p>
 * @method boolean getCaEnabled() 获取<p>是否开启双向认证。</p>
 * @method void setCaEnabled(boolean $CaEnabled) 设置<p>是否开启双向认证。</p>
 * @method array getCertificateIds() 获取<p>服务器证书 ID 列表。</p>
 * @method void setCertificateIds(array $CertificateIds) 设置<p>服务器证书 ID 列表。</p>
 * @method string getCreateTime() 获取<p>监听器实例的创建时间。格式：ISO 8601（例如 2025-01-01T08:30:00+08:00）</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>监听器实例的创建时间。格式：ISO 8601（例如 2025-01-01T08:30:00+08:00）</p>
 * @method array getDefaultActions() 获取<p>规则动作列表。</p>
 * @method void setDefaultActions(array $DefaultActions) 设置<p>规则动作列表。</p>
 * @method boolean getGzipEnabled() 获取<p>是否启用 Gzip 压缩。</p>
 * @method void setGzipEnabled(boolean $GzipEnabled) 设置<p>是否启用 Gzip 压缩。</p>
 * @method boolean getHttp2Enabled() 获取<p>是否开启HTTP/2特性。</p>
 * @method void setHttp2Enabled(boolean $Http2Enabled) 设置<p>是否开启HTTP/2特性。</p>
 * @method integer getIdleTimeout() 获取<p>指定连接空闲超时时间。单位：秒。</p>
 * @method void setIdleTimeout(integer $IdleTimeout) 设置<p>指定连接空闲超时时间。单位：秒。</p>
 * @method string getListenerId() 获取<p>监听器 ID，格式为 lst- 后接 8 位字母数字。</p>
 * @method void setListenerId(string $ListenerId) 设置<p>监听器 ID，格式为 lst- 后接 8 位字母数字。</p>
 * @method string getListenerName() 获取<p>自定义监听名称。</p>
 * @method void setListenerName(string $ListenerName) 设置<p>自定义监听名称。</p>
 * @method integer getListenerPort() 获取<p>负载均衡实例前端使用的端口。</p>
 * @method void setListenerPort(integer $ListenerPort) 设置<p>负载均衡实例前端使用的端口。</p>
 * @method string getListenerProtocol() 获取<p>监听协议。</p>
 * @method void setListenerProtocol(string $ListenerProtocol) 设置<p>监听协议。</p>
 * @method string getListenerStatus() 获取<p>监听器状态。取值:=</p><ul><li><strong>Active</strong>: 运行中。</li><li><strong>Provisioning</strong>：创建中。</li><li><strong>Configuring</strong>：变配中。</li><li><strong>ProvisionFailed</strong>：创建失败</li></ul>
 * @method void setListenerStatus(string $ListenerStatus) 设置<p>监听器状态。取值:=</p><ul><li><strong>Active</strong>: 运行中。</li><li><strong>Provisioning</strong>：创建中。</li><li><strong>Configuring</strong>：变配中。</li><li><strong>ProvisionFailed</strong>：创建失败</li></ul>
 * @method string getLoadBalancerId() 获取<p>负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。</p>
 * @method void setLoadBalancerId(string $LoadBalancerId) 设置<p>负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。</p>
 * @method string getModifyTime() 获取<p>监听器实例的最后变更时间。格式：ISO 8601（例如 2025-01-01T08:30:00+08:00）</p>
 * @method void setModifyTime(string $ModifyTime) 设置<p>监听器实例的最后变更时间。格式：ISO 8601（例如 2025-01-01T08:30:00+08:00）</p>
 * @method integer getRequestTimeout() 获取<p>连接请求超时时间。单位：秒。</p>
 * @method void setRequestTimeout(integer $RequestTimeout) 设置<p>连接请求超时时间。单位：秒。</p>
 * @method string getSecurityPolicyId() 获取<p>安全策略 ID，格式为 tls- 后接 8 位字母数字。</p>
 * @method void setSecurityPolicyId(string $SecurityPolicyId) 设置<p>安全策略 ID，格式为 tls- 后接 8 位字母数字。</p>
 * @method array getTags() 获取<p>标签。</p>
 * @method void setTags(array $Tags) 设置<p>标签。</p>
 * @method XForwardedForConfig getXForwardedForConfig() 获取<p>XForwardedFor配置。</p>
 * @method void setXForwardedForConfig(XForwardedForConfig $XForwardedForConfig) 设置<p>XForwardedFor配置。</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeListenerDetailResponse extends AbstractModel
{
    /**
     * @var array <p>监听器绑定的CA证书ID列表。</p>
     */
    public $CaCertificateIds;

    /**
     * @var boolean <p>是否开启双向认证。</p>
     */
    public $CaEnabled;

    /**
     * @var array <p>服务器证书 ID 列表。</p>
     */
    public $CertificateIds;

    /**
     * @var string <p>监听器实例的创建时间。格式：ISO 8601（例如 2025-01-01T08:30:00+08:00）</p>
     */
    public $CreateTime;

    /**
     * @var array <p>规则动作列表。</p>
     */
    public $DefaultActions;

    /**
     * @var boolean <p>是否启用 Gzip 压缩。</p>
     */
    public $GzipEnabled;

    /**
     * @var boolean <p>是否开启HTTP/2特性。</p>
     */
    public $Http2Enabled;

    /**
     * @var integer <p>指定连接空闲超时时间。单位：秒。</p>
     */
    public $IdleTimeout;

    /**
     * @var string <p>监听器 ID，格式为 lst- 后接 8 位字母数字。</p>
     */
    public $ListenerId;

    /**
     * @var string <p>自定义监听名称。</p>
     */
    public $ListenerName;

    /**
     * @var integer <p>负载均衡实例前端使用的端口。</p>
     */
    public $ListenerPort;

    /**
     * @var string <p>监听协议。</p>
     */
    public $ListenerProtocol;

    /**
     * @var string <p>监听器状态。取值:=</p><ul><li><strong>Active</strong>: 运行中。</li><li><strong>Provisioning</strong>：创建中。</li><li><strong>Configuring</strong>：变配中。</li><li><strong>ProvisionFailed</strong>：创建失败</li></ul>
     */
    public $ListenerStatus;

    /**
     * @var string <p>负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。</p>
     */
    public $LoadBalancerId;

    /**
     * @var string <p>监听器实例的最后变更时间。格式：ISO 8601（例如 2025-01-01T08:30:00+08:00）</p>
     */
    public $ModifyTime;

    /**
     * @var integer <p>连接请求超时时间。单位：秒。</p>
     */
    public $RequestTimeout;

    /**
     * @var string <p>安全策略 ID，格式为 tls- 后接 8 位字母数字。</p>
     */
    public $SecurityPolicyId;

    /**
     * @var array <p>标签。</p>
     */
    public $Tags;

    /**
     * @var XForwardedForConfig <p>XForwardedFor配置。</p>
     */
    public $XForwardedForConfig;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $CaCertificateIds <p>监听器绑定的CA证书ID列表。</p>
     * @param boolean $CaEnabled <p>是否开启双向认证。</p>
     * @param array $CertificateIds <p>服务器证书 ID 列表。</p>
     * @param string $CreateTime <p>监听器实例的创建时间。格式：ISO 8601（例如 2025-01-01T08:30:00+08:00）</p>
     * @param array $DefaultActions <p>规则动作列表。</p>
     * @param boolean $GzipEnabled <p>是否启用 Gzip 压缩。</p>
     * @param boolean $Http2Enabled <p>是否开启HTTP/2特性。</p>
     * @param integer $IdleTimeout <p>指定连接空闲超时时间。单位：秒。</p>
     * @param string $ListenerId <p>监听器 ID，格式为 lst- 后接 8 位字母数字。</p>
     * @param string $ListenerName <p>自定义监听名称。</p>
     * @param integer $ListenerPort <p>负载均衡实例前端使用的端口。</p>
     * @param string $ListenerProtocol <p>监听协议。</p>
     * @param string $ListenerStatus <p>监听器状态。取值:=</p><ul><li><strong>Active</strong>: 运行中。</li><li><strong>Provisioning</strong>：创建中。</li><li><strong>Configuring</strong>：变配中。</li><li><strong>ProvisionFailed</strong>：创建失败</li></ul>
     * @param string $LoadBalancerId <p>负载均衡实例 ID，格式为 alb- 后接 8 位字母数字。</p>
     * @param string $ModifyTime <p>监听器实例的最后变更时间。格式：ISO 8601（例如 2025-01-01T08:30:00+08:00）</p>
     * @param integer $RequestTimeout <p>连接请求超时时间。单位：秒。</p>
     * @param string $SecurityPolicyId <p>安全策略 ID，格式为 tls- 后接 8 位字母数字。</p>
     * @param array $Tags <p>标签。</p>
     * @param XForwardedForConfig $XForwardedForConfig <p>XForwardedFor配置。</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("CaCertificateIds",$param) and $param["CaCertificateIds"] !== null) {
            $this->CaCertificateIds = $param["CaCertificateIds"];
        }

        if (array_key_exists("CaEnabled",$param) and $param["CaEnabled"] !== null) {
            $this->CaEnabled = $param["CaEnabled"];
        }

        if (array_key_exists("CertificateIds",$param) and $param["CertificateIds"] !== null) {
            $this->CertificateIds = $param["CertificateIds"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("DefaultActions",$param) and $param["DefaultActions"] !== null) {
            $this->DefaultActions = [];
            foreach ($param["DefaultActions"] as $key => $value){
                $obj = new DefaultAction();
                $obj->deserialize($value);
                array_push($this->DefaultActions, $obj);
            }
        }

        if (array_key_exists("GzipEnabled",$param) and $param["GzipEnabled"] !== null) {
            $this->GzipEnabled = $param["GzipEnabled"];
        }

        if (array_key_exists("Http2Enabled",$param) and $param["Http2Enabled"] !== null) {
            $this->Http2Enabled = $param["Http2Enabled"];
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

        if (array_key_exists("LoadBalancerId",$param) and $param["LoadBalancerId"] !== null) {
            $this->LoadBalancerId = $param["LoadBalancerId"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("RequestTimeout",$param) and $param["RequestTimeout"] !== null) {
            $this->RequestTimeout = $param["RequestTimeout"];
        }

        if (array_key_exists("SecurityPolicyId",$param) and $param["SecurityPolicyId"] !== null) {
            $this->SecurityPolicyId = $param["SecurityPolicyId"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("XForwardedForConfig",$param) and $param["XForwardedForConfig"] !== null) {
            $this->XForwardedForConfig = new XForwardedForConfig();
            $this->XForwardedForConfig->deserialize($param["XForwardedForConfig"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
