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
 * 治理中心实例信息。
 *
 * @method string getId() 获取实例id。
 * @method void setId(string $Id) 设置实例id。
 * @method string getService() 获取实例所在服务名。
 * @method void setService(string $Service) 设置实例所在服务名。
 * @method string getNamespace() 获取实例所在命名空间名。
 * @method void setNamespace(string $Namespace) 设置实例所在命名空间名。
 * @method string getHost() 获取实例ip地址。
 * @method void setHost(string $Host) 设置实例ip地址。
 * @method integer getPort() 获取实例端口信息。
 * @method void setPort(integer $Port) 设置实例端口信息。
 * @method string getProtocol() 获取通信协议。
 * @method void setProtocol(string $Protocol) 设置通信协议。
 * @method string getVersion() 获取版本信息。
 * @method void setVersion(string $Version) 设置版本信息。
 * @method integer getWeight() 获取负载均衡权重。
 * @method void setWeight(integer $Weight) 设置负载均衡权重。
 * @method boolean getEnableHealthCheck() 获取是否开启健康检查。
 * @method void setEnableHealthCheck(boolean $EnableHealthCheck) 设置是否开启健康检查。
 * @method boolean getHealthy() 获取实例是否健康。
 * @method void setHealthy(boolean $Healthy) 设置实例是否健康。
 * @method boolean getIsolate() 获取实例是否隔离。
 * @method void setIsolate(boolean $Isolate) 设置实例是否隔离。
 * @method string getCreateTime() 获取实例创建时间。
 * @method void setCreateTime(string $CreateTime) 设置实例创建时间。
 * @method string getModifyTime() 获取实例修改时间。
 * @method void setModifyTime(string $ModifyTime) 设置实例修改时间。
 * @method array getMetadatas() 获取元数据数组。
 * @method void setMetadatas(array $Metadatas) 设置元数据数组。
 * @method integer getTtl() 获取上报心跳间隔。
 * @method void setTtl(integer $Ttl) 设置上报心跳间隔。
 * @method string getInstanceVersion() 获取版本信息。
 * @method void setInstanceVersion(string $InstanceVersion) 设置版本信息。
 * @method string getHealthStatus() 获取状态信息
 * @method void setHealthStatus(string $HealthStatus) 设置状态信息
 * @method string getComment() 获取描述
 * @method void setComment(string $Comment) 设置描述
 */
class GovernanceInstance extends AbstractModel
{
    /**
     * @var string 实例id。
     */
    public $Id;

    /**
     * @var string 实例所在服务名。
     */
    public $Service;

    /**
     * @var string 实例所在命名空间名。
     */
    public $Namespace;

    /**
     * @var string 实例ip地址。
     */
    public $Host;

    /**
     * @var integer 实例端口信息。
     */
    public $Port;

    /**
     * @var string 通信协议。
     */
    public $Protocol;

    /**
     * @var string 版本信息。
     */
    public $Version;

    /**
     * @var integer 负载均衡权重。
     */
    public $Weight;

    /**
     * @var boolean 是否开启健康检查。
     */
    public $EnableHealthCheck;

    /**
     * @var boolean 实例是否健康。
     */
    public $Healthy;

    /**
     * @var boolean 实例是否隔离。
     */
    public $Isolate;

    /**
     * @var string 实例创建时间。
     */
    public $CreateTime;

    /**
     * @var string 实例修改时间。
     */
    public $ModifyTime;

    /**
     * @var array 元数据数组。
     */
    public $Metadatas;

    /**
     * @var integer 上报心跳间隔。
     */
    public $Ttl;

    /**
     * @var string 版本信息。
     */
    public $InstanceVersion;

    /**
     * @var string 状态信息
     */
    public $HealthStatus;

    /**
     * @var string 描述
     */
    public $Comment;

    /**
     * @param string $Id 实例id。
     * @param string $Service 实例所在服务名。
     * @param string $Namespace 实例所在命名空间名。
     * @param string $Host 实例ip地址。
     * @param integer $Port 实例端口信息。
     * @param string $Protocol 通信协议。
     * @param string $Version 版本信息。
     * @param integer $Weight 负载均衡权重。
     * @param boolean $EnableHealthCheck 是否开启健康检查。
     * @param boolean $Healthy 实例是否健康。
     * @param boolean $Isolate 实例是否隔离。
     * @param string $CreateTime 实例创建时间。
     * @param string $ModifyTime 实例修改时间。
     * @param array $Metadatas 元数据数组。
     * @param integer $Ttl 上报心跳间隔。
     * @param string $InstanceVersion 版本信息。
     * @param string $HealthStatus 状态信息
     * @param string $Comment 描述
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Service",$param) and $param["Service"] !== null) {
            $this->Service = $param["Service"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
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

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("EnableHealthCheck",$param) and $param["EnableHealthCheck"] !== null) {
            $this->EnableHealthCheck = $param["EnableHealthCheck"];
        }

        if (array_key_exists("Healthy",$param) and $param["Healthy"] !== null) {
            $this->Healthy = $param["Healthy"];
        }

        if (array_key_exists("Isolate",$param) and $param["Isolate"] !== null) {
            $this->Isolate = $param["Isolate"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("Metadatas",$param) and $param["Metadatas"] !== null) {
            $this->Metadatas = [];
            foreach ($param["Metadatas"] as $key => $value){
                $obj = new Metadata();
                $obj->deserialize($value);
                array_push($this->Metadatas, $obj);
            }
        }

        if (array_key_exists("Ttl",$param) and $param["Ttl"] !== null) {
            $this->Ttl = $param["Ttl"];
        }

        if (array_key_exists("InstanceVersion",$param) and $param["InstanceVersion"] !== null) {
            $this->InstanceVersion = $param["InstanceVersion"];
        }

        if (array_key_exists("HealthStatus",$param) and $param["HealthStatus"] !== null) {
            $this->HealthStatus = $param["HealthStatus"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }
    }
}
