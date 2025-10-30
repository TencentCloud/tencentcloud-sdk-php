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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实例信息
 *
 * @method string getService() 获取实例所在服务名。
 * @method void setService(string $Service) 设置实例所在服务名。
 * @method string getNamespace() 获取实例服务所在命名空间。
 * @method void setNamespace(string $Namespace) 设置实例服务所在命名空间。
 * @method integer getWeight() 获取实例负载均衡权重信息。不填默认为100。
 * @method void setWeight(integer $Weight) 设置实例负载均衡权重信息。不填默认为100。
 * @method boolean getHealthy() 获取实例默认健康信息。不填默认为健康。
 * @method void setHealthy(boolean $Healthy) 设置实例默认健康信息。不填默认为健康。
 * @method boolean getIsolate() 获取实例隔离信息。不填默认为非隔离。
 * @method void setIsolate(boolean $Isolate) 设置实例隔离信息。不填默认为非隔离。
 * @method string getHost() 获取实例ip。
 * @method void setHost(string $Host) 设置实例ip。
 * @method integer getPort() 获取实例监听端口。
 * @method void setPort(integer $Port) 设置实例监听端口。
 * @method string getProtocol() 获取实例使用协议。不填默认为空。
 * @method void setProtocol(string $Protocol) 设置实例使用协议。不填默认为空。
 * @method string getInstanceVersion() 获取实例版本。不填默认为空。
 * @method void setInstanceVersion(string $InstanceVersion) 设置实例版本。不填默认为空。
 * @method boolean getEnableHealthCheck() 获取是否启用健康检查。不填默认不启用。
 * @method void setEnableHealthCheck(boolean $EnableHealthCheck) 设置是否启用健康检查。不填默认不启用。
 * @method integer getTtl() 获取上报心跳时间间隔。若 EnableHealthCheck 为不启用，则此参数不生效；若 EnableHealthCheck 启用，此参数不填，则默认 ttl 为 5s。
 * @method void setTtl(integer $Ttl) 设置上报心跳时间间隔。若 EnableHealthCheck 为不启用，则此参数不生效；若 EnableHealthCheck 启用，此参数不填，则默认 ttl 为 5s。
 */
class GovernanceInstanceInput extends AbstractModel
{
    /**
     * @var string 实例所在服务名。
     */
    public $Service;

    /**
     * @var string 实例服务所在命名空间。
     */
    public $Namespace;

    /**
     * @var integer 实例负载均衡权重信息。不填默认为100。
     */
    public $Weight;

    /**
     * @var boolean 实例默认健康信息。不填默认为健康。
     */
    public $Healthy;

    /**
     * @var boolean 实例隔离信息。不填默认为非隔离。
     */
    public $Isolate;

    /**
     * @var string 实例ip。
     */
    public $Host;

    /**
     * @var integer 实例监听端口。
     */
    public $Port;

    /**
     * @var string 实例使用协议。不填默认为空。
     */
    public $Protocol;

    /**
     * @var string 实例版本。不填默认为空。
     */
    public $InstanceVersion;

    /**
     * @var boolean 是否启用健康检查。不填默认不启用。
     */
    public $EnableHealthCheck;

    /**
     * @var integer 上报心跳时间间隔。若 EnableHealthCheck 为不启用，则此参数不生效；若 EnableHealthCheck 启用，此参数不填，则默认 ttl 为 5s。
     */
    public $Ttl;

    /**
     * @param string $Service 实例所在服务名。
     * @param string $Namespace 实例服务所在命名空间。
     * @param integer $Weight 实例负载均衡权重信息。不填默认为100。
     * @param boolean $Healthy 实例默认健康信息。不填默认为健康。
     * @param boolean $Isolate 实例隔离信息。不填默认为非隔离。
     * @param string $Host 实例ip。
     * @param integer $Port 实例监听端口。
     * @param string $Protocol 实例使用协议。不填默认为空。
     * @param string $InstanceVersion 实例版本。不填默认为空。
     * @param boolean $EnableHealthCheck 是否启用健康检查。不填默认不启用。
     * @param integer $Ttl 上报心跳时间间隔。若 EnableHealthCheck 为不启用，则此参数不生效；若 EnableHealthCheck 启用，此参数不填，则默认 ttl 为 5s。
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
        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("Healthy",$param) and $param["Healthy"] !== null) {
            $this->Healthy = $param["Healthy"];
        }

        if (array_key_exists("Isolate",$param) and $param["Isolate"] !== null) {
            $this->Isolate = $param["Isolate"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("InstanceVersion",$param) and $param["InstanceVersion"] !== null) {
            $this->InstanceVersion = $param["InstanceVersion"];
        }

        if (array_key_exists("EnableHealthCheck",$param) and $param["EnableHealthCheck"] !== null) {
            $this->EnableHealthCheck = $param["EnableHealthCheck"];
        }

        if (array_key_exists("Ttl",$param) and $param["Ttl"] !== null) {
            $this->Ttl = $param["Ttl"];
        }
    }
}
