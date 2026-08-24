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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 日志投递信息配置
 *
 * @method integer getVipType() 获取<p>接入类型</p>
 * @method void setVipType(integer $VipType) 设置<p>接入类型</p>
 * @method string getInstanceId() 获取<p>实例id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例id</p>
 * @method string getInstanceName() 获取<p>实例名称</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>实例名称</p>
 * @method string getVip() 获取<p>虚拟ip  VipType 为7 有效</p>
 * @method void setVip(string $Vip) 设置<p>虚拟ip  VipType 为7 有效</p>
 * @method string getVport() 获取<p>虚拟端口 VipType 为7有效</p>
 * @method void setVport(string $Vport) 设置<p>虚拟端口 VipType 为7有效</p>
 * @method string getDomain() 获取<p>域名  VipType 为1有效</p>
 * @method void setDomain(string $Domain) 设置<p>域名  VipType 为1有效</p>
 * @method string getDomainPort() 获取<p>域名端口 VipType 为1有效</p>
 * @method void setDomainPort(string $DomainPort) 设置<p>域名端口 VipType 为1有效</p>
 * @method string getRegionId() 获取<p>实例地域</p>
 * @method void setRegionId(string $RegionId) 设置<p>实例地域</p>
 * @method string getVpcId() 获取<p>实例vpc</p>
 * @method void setVpcId(string $VpcId) 设置<p>实例vpc</p>
 * @method string getSubnetId() 获取<p>实例子网</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>实例子网</p>
 * @method integer getHealthy() 获取<p>实例健康状态， 1：健康，2：告警，3：异常&#39;, 4: 实例不存在</p>
 * @method void setHealthy(integer $Healthy) 设置<p>实例健康状态， 1：健康，2：告警，3：异常&#39;, 4: 实例不存在</p>
 * @method integer getLogType() 获取<p>日志类型</p>
 * @method void setLogType(integer $LogType) 设置<p>日志类型</p>
 * @method string getTopicId() 获取<p>投递的topicid</p>
 * @method void setTopicId(string $TopicId) 设置<p>投递的topicid</p>
 * @method string getTopicName() 获取<p>投递的topicname</p>
 * @method void setTopicName(string $TopicName) 设置<p>投递的topicname</p>
 * @method integer getStatus() 获取<p>投递状态</p>
 * @method void setStatus(integer $Status) 设置<p>投递状态</p>
 * @method string getStatusMessages() 获取<p>状态信息</p>
 * @method void setStatusMessages(string $StatusMessages) 设置<p>状态信息</p>
 * @method integer getIsOpen() 获取<p>开启or关闭，投递状态1为开启，0 关闭，默认开启，但是如果没有topic 则关闭</p>
 * @method void setIsOpen(integer $IsOpen) 设置<p>开启or关闭，投递状态1为开启，0 关闭，默认开启，但是如果没有topic 则关闭</p>
 */
class LogDeliveryCkafkaConfig extends AbstractModel
{
    /**
     * @var integer <p>接入类型</p>
     */
    public $VipType;

    /**
     * @var string <p>实例id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>实例名称</p>
     */
    public $InstanceName;

    /**
     * @var string <p>虚拟ip  VipType 为7 有效</p>
     */
    public $Vip;

    /**
     * @var string <p>虚拟端口 VipType 为7有效</p>
     */
    public $Vport;

    /**
     * @var string <p>域名  VipType 为1有效</p>
     */
    public $Domain;

    /**
     * @var string <p>域名端口 VipType 为1有效</p>
     */
    public $DomainPort;

    /**
     * @var string <p>实例地域</p>
     */
    public $RegionId;

    /**
     * @var string <p>实例vpc</p>
     */
    public $VpcId;

    /**
     * @var string <p>实例子网</p>
     */
    public $SubnetId;

    /**
     * @var integer <p>实例健康状态， 1：健康，2：告警，3：异常&#39;, 4: 实例不存在</p>
     */
    public $Healthy;

    /**
     * @var integer <p>日志类型</p>
     */
    public $LogType;

    /**
     * @var string <p>投递的topicid</p>
     */
    public $TopicId;

    /**
     * @var string <p>投递的topicname</p>
     */
    public $TopicName;

    /**
     * @var integer <p>投递状态</p>
     */
    public $Status;

    /**
     * @var string <p>状态信息</p>
     */
    public $StatusMessages;

    /**
     * @var integer <p>开启or关闭，投递状态1为开启，0 关闭，默认开启，但是如果没有topic 则关闭</p>
     */
    public $IsOpen;

    /**
     * @param integer $VipType <p>接入类型</p>
     * @param string $InstanceId <p>实例id</p>
     * @param string $InstanceName <p>实例名称</p>
     * @param string $Vip <p>虚拟ip  VipType 为7 有效</p>
     * @param string $Vport <p>虚拟端口 VipType 为7有效</p>
     * @param string $Domain <p>域名  VipType 为1有效</p>
     * @param string $DomainPort <p>域名端口 VipType 为1有效</p>
     * @param string $RegionId <p>实例地域</p>
     * @param string $VpcId <p>实例vpc</p>
     * @param string $SubnetId <p>实例子网</p>
     * @param integer $Healthy <p>实例健康状态， 1：健康，2：告警，3：异常&#39;, 4: 实例不存在</p>
     * @param integer $LogType <p>日志类型</p>
     * @param string $TopicId <p>投递的topicid</p>
     * @param string $TopicName <p>投递的topicname</p>
     * @param integer $Status <p>投递状态</p>
     * @param string $StatusMessages <p>状态信息</p>
     * @param integer $IsOpen <p>开启or关闭，投递状态1为开启，0 关闭，默认开启，但是如果没有topic 则关闭</p>
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
        if (array_key_exists("VipType",$param) and $param["VipType"] !== null) {
            $this->VipType = $param["VipType"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }

        if (array_key_exists("Vport",$param) and $param["Vport"] !== null) {
            $this->Vport = $param["Vport"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("DomainPort",$param) and $param["DomainPort"] !== null) {
            $this->DomainPort = $param["DomainPort"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("Healthy",$param) and $param["Healthy"] !== null) {
            $this->Healthy = $param["Healthy"];
        }

        if (array_key_exists("LogType",$param) and $param["LogType"] !== null) {
            $this->LogType = $param["LogType"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("TopicName",$param) and $param["TopicName"] !== null) {
            $this->TopicName = $param["TopicName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("StatusMessages",$param) and $param["StatusMessages"] !== null) {
            $this->StatusMessages = $param["StatusMessages"];
        }

        if (array_key_exists("IsOpen",$param) and $param["IsOpen"] !== null) {
            $this->IsOpen = $param["IsOpen"];
        }
    }
}
