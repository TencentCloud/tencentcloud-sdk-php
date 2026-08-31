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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * TestModelInputModalities请求参数结构体
 *
 * @method string getModel() 获取<p>待探测的模型（原始模型名称）</p>
 * @method void setModel(string $Model) 设置<p>待探测的模型（原始模型名称）</p>
 * @method string getProviderKey() 获取<p>待探测的API Key（明文）</p>
 * @method void setProviderKey(string $ProviderKey) 设置<p>待探测的API Key（明文）</p>
 * @method string getProviderKeyId() 获取<p>已创建的BYOK API Key ID（与ProviderKey二选一传入）</p>
 * @method void setProviderKeyId(string $ProviderKeyId) 设置<p>已创建的BYOK API Key ID（与ProviderKey二选一传入）</p>
 * @method string getAccessType() 获取<p>BYOK类型，当ProviderKey传入时必填</p>
 * @method void setAccessType(string $AccessType) 设置<p>BYOK类型，当ProviderKey传入时必填</p>
 * @method string getModelProtocol() 获取<p>模型厂商协议，当ProviderKey传入时必填</p>
 * @method void setModelProtocol(string $ModelProtocol) 设置<p>模型厂商协议，当ProviderKey传入时必填</p>
 * @method string getModelProvider() 获取<p>模型的厂商</p>
 * @method void setModelProvider(string $ModelProvider) 设置<p>模型的厂商</p>
 * @method string getApiBase() 获取<p>自定义ApiBase，当ProviderKey传入且AccessType且PrivateCustom/PublicCustom时必填</p>
 * @method void setApiBase(string $ApiBase) 设置<p>自定义ApiBase，当ProviderKey传入且AccessType且PrivateCustom/PublicCustom时必填</p>
 * @method string getHostHeader() 获取<p>请求携带的Host头部，当AccessType为PrivateCustom时生效</p>
 * @method void setHostHeader(string $HostHeader) 设置<p>请求携带的Host头部，当AccessType为PrivateCustom时生效</p>
 * @method string getServiceProviderId() 获取<p>BYOK实例ID，当AccessType为PrivateCustom时生效，ProviderKey传入时必填</p>
 * @method void setServiceProviderId(string $ServiceProviderId) 设置<p>BYOK实例ID，当AccessType为PrivateCustom时生效，ProviderKey传入时必填</p>
 * @method boolean getVerifySSL() 获取<p>是否校验服务提供商的SSL证书</p><p>PublicBYOK时为True且禁止传入；若传入VerifySSL，则优先同步入参逻辑；若传入了ServiceProviderId则同步已创建的Byok实例该Model的逻辑；否则PublicCustom模式下为True，PrivateCustom模式下为False。</p>
 * @method void setVerifySSL(boolean $VerifySSL) 设置<p>是否校验服务提供商的SSL证书</p><p>PublicBYOK时为True且禁止传入；若传入VerifySSL，则优先同步入参逻辑；若传入了ServiceProviderId则同步已创建的Byok实例该Model的逻辑；否则PublicCustom模式下为True，PrivateCustom模式下为False。</p>
 * @method string getHealthCheckProtocol() 获取<p>健康检查协议</p><p>枚举值：</p><ul><li>chat： 表示/chat/completion协议</li><li>messages： 表示/v1/messages协议</li><li>responses： 表示/responses协议</li></ul>
 * @method void setHealthCheckProtocol(string $HealthCheckProtocol) 设置<p>健康检查协议</p><p>枚举值：</p><ul><li>chat： 表示/chat/completion协议</li><li>messages： 表示/v1/messages协议</li><li>responses： 表示/responses协议</li></ul>
 * @method string getCMRPrivateNetworkTunnelId() 获取<p>CMR私网管道ID</p>
 * @method void setCMRPrivateNetworkTunnelId(string $CMRPrivateNetworkTunnelId) 设置<p>CMR私网管道ID</p>
 */
class TestModelInputModalitiesRequest extends AbstractModel
{
    /**
     * @var string <p>待探测的模型（原始模型名称）</p>
     */
    public $Model;

    /**
     * @var string <p>待探测的API Key（明文）</p>
     */
    public $ProviderKey;

    /**
     * @var string <p>已创建的BYOK API Key ID（与ProviderKey二选一传入）</p>
     */
    public $ProviderKeyId;

    /**
     * @var string <p>BYOK类型，当ProviderKey传入时必填</p>
     */
    public $AccessType;

    /**
     * @var string <p>模型厂商协议，当ProviderKey传入时必填</p>
     */
    public $ModelProtocol;

    /**
     * @var string <p>模型的厂商</p>
     */
    public $ModelProvider;

    /**
     * @var string <p>自定义ApiBase，当ProviderKey传入且AccessType且PrivateCustom/PublicCustom时必填</p>
     */
    public $ApiBase;

    /**
     * @var string <p>请求携带的Host头部，当AccessType为PrivateCustom时生效</p>
     */
    public $HostHeader;

    /**
     * @var string <p>BYOK实例ID，当AccessType为PrivateCustom时生效，ProviderKey传入时必填</p>
     */
    public $ServiceProviderId;

    /**
     * @var boolean <p>是否校验服务提供商的SSL证书</p><p>PublicBYOK时为True且禁止传入；若传入VerifySSL，则优先同步入参逻辑；若传入了ServiceProviderId则同步已创建的Byok实例该Model的逻辑；否则PublicCustom模式下为True，PrivateCustom模式下为False。</p>
     */
    public $VerifySSL;

    /**
     * @var string <p>健康检查协议</p><p>枚举值：</p><ul><li>chat： 表示/chat/completion协议</li><li>messages： 表示/v1/messages协议</li><li>responses： 表示/responses协议</li></ul>
     */
    public $HealthCheckProtocol;

    /**
     * @var string <p>CMR私网管道ID</p>
     */
    public $CMRPrivateNetworkTunnelId;

    /**
     * @param string $Model <p>待探测的模型（原始模型名称）</p>
     * @param string $ProviderKey <p>待探测的API Key（明文）</p>
     * @param string $ProviderKeyId <p>已创建的BYOK API Key ID（与ProviderKey二选一传入）</p>
     * @param string $AccessType <p>BYOK类型，当ProviderKey传入时必填</p>
     * @param string $ModelProtocol <p>模型厂商协议，当ProviderKey传入时必填</p>
     * @param string $ModelProvider <p>模型的厂商</p>
     * @param string $ApiBase <p>自定义ApiBase，当ProviderKey传入且AccessType且PrivateCustom/PublicCustom时必填</p>
     * @param string $HostHeader <p>请求携带的Host头部，当AccessType为PrivateCustom时生效</p>
     * @param string $ServiceProviderId <p>BYOK实例ID，当AccessType为PrivateCustom时生效，ProviderKey传入时必填</p>
     * @param boolean $VerifySSL <p>是否校验服务提供商的SSL证书</p><p>PublicBYOK时为True且禁止传入；若传入VerifySSL，则优先同步入参逻辑；若传入了ServiceProviderId则同步已创建的Byok实例该Model的逻辑；否则PublicCustom模式下为True，PrivateCustom模式下为False。</p>
     * @param string $HealthCheckProtocol <p>健康检查协议</p><p>枚举值：</p><ul><li>chat： 表示/chat/completion协议</li><li>messages： 表示/v1/messages协议</li><li>responses： 表示/responses协议</li></ul>
     * @param string $CMRPrivateNetworkTunnelId <p>CMR私网管道ID</p>
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
        if (array_key_exists("Model",$param) and $param["Model"] !== null) {
            $this->Model = $param["Model"];
        }

        if (array_key_exists("ProviderKey",$param) and $param["ProviderKey"] !== null) {
            $this->ProviderKey = $param["ProviderKey"];
        }

        if (array_key_exists("ProviderKeyId",$param) and $param["ProviderKeyId"] !== null) {
            $this->ProviderKeyId = $param["ProviderKeyId"];
        }

        if (array_key_exists("AccessType",$param) and $param["AccessType"] !== null) {
            $this->AccessType = $param["AccessType"];
        }

        if (array_key_exists("ModelProtocol",$param) and $param["ModelProtocol"] !== null) {
            $this->ModelProtocol = $param["ModelProtocol"];
        }

        if (array_key_exists("ModelProvider",$param) and $param["ModelProvider"] !== null) {
            $this->ModelProvider = $param["ModelProvider"];
        }

        if (array_key_exists("ApiBase",$param) and $param["ApiBase"] !== null) {
            $this->ApiBase = $param["ApiBase"];
        }

        if (array_key_exists("HostHeader",$param) and $param["HostHeader"] !== null) {
            $this->HostHeader = $param["HostHeader"];
        }

        if (array_key_exists("ServiceProviderId",$param) and $param["ServiceProviderId"] !== null) {
            $this->ServiceProviderId = $param["ServiceProviderId"];
        }

        if (array_key_exists("VerifySSL",$param) and $param["VerifySSL"] !== null) {
            $this->VerifySSL = $param["VerifySSL"];
        }

        if (array_key_exists("HealthCheckProtocol",$param) and $param["HealthCheckProtocol"] !== null) {
            $this->HealthCheckProtocol = $param["HealthCheckProtocol"];
        }

        if (array_key_exists("CMRPrivateNetworkTunnelId",$param) and $param["CMRPrivateNetworkTunnelId"] !== null) {
            $this->CMRPrivateNetworkTunnelId = $param["CMRPrivateNetworkTunnelId"];
        }
    }
}
