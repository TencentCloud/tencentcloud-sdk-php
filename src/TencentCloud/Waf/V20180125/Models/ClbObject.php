<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Clb类型防护对象
 *
 * @method string getObjectId() 获取对象ID
 * @method void setObjectId(string $ObjectId) 设置对象ID
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getInstanceName() 获取实例名称
 * @method void setInstanceName(string $InstanceName) 设置实例名称
 * @method array getPreciseDomains() 获取精准域名列表
 * @method void setPreciseDomains(array $PreciseDomains) 设置精准域名列表
 * @method integer getStatus() 获取WAF功能开关状态，0关闭1开启
 * @method void setStatus(integer $Status) 设置WAF功能开关状态，0关闭1开启
 * @method integer getClsStatus() 获取WAF日志开关状态，0关闭1开启
 * @method void setClsStatus(integer $ClsStatus) 设置WAF日志开关状态，0关闭1开启
 * @method string getVirtualDomain() 获取CLB对象对应的虚拟域名
 * @method void setVirtualDomain(string $VirtualDomain) 设置CLB对象对应的虚拟域名
 * @method string getObjectName() 获取对象名称
 * @method void setObjectName(string $ObjectName) 设置对象名称
 * @method array getPublicIp() 获取公网地址
 * @method void setPublicIp(array $PublicIp) 设置公网地址
 * @method array getPrivateIp() 获取内网地址
 * @method void setPrivateIp(array $PrivateIp) 设置内网地址
 * @method string getVpcName() 获取VPC名称
 * @method void setVpcName(string $VpcName) 设置VPC名称
 * @method string getVpc() 获取VPC ID
 * @method void setVpc(string $Vpc) 设置VPC ID
 * @method integer getInstanceLevel() 获取waf实例等级，如果未绑定实例为0
 * @method void setInstanceLevel(integer $InstanceLevel) 设置waf实例等级，如果未绑定实例为0
 * @method integer getPostCLSStatus() 获取clb投递开关
 * @method void setPostCLSStatus(integer $PostCLSStatus) 设置clb投递开关
 * @method integer getPostCKafkaStatus() 获取kafka投递开关
 * @method void setPostCKafkaStatus(integer $PostCKafkaStatus) 设置kafka投递开关
 * @method string getType() 获取对象类型：CLB:负载均衡器，TSE:云原生网关
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置对象类型：CLB:负载均衡器，TSE:云原生网关
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRegion() 获取对象地域
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置对象地域
注意：此字段可能返回 null，表示取不到有效值。
 */
class ClbObject extends AbstractModel
{
    /**
     * @var string 对象ID
     */
    public $ObjectId;

    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 实例名称
     */
    public $InstanceName;

    /**
     * @var array 精准域名列表
     */
    public $PreciseDomains;

    /**
     * @var integer WAF功能开关状态，0关闭1开启
     */
    public $Status;

    /**
     * @var integer WAF日志开关状态，0关闭1开启
     */
    public $ClsStatus;

    /**
     * @var string CLB对象对应的虚拟域名
     */
    public $VirtualDomain;

    /**
     * @var string 对象名称
     */
    public $ObjectName;

    /**
     * @var array 公网地址
     */
    public $PublicIp;

    /**
     * @var array 内网地址
     */
    public $PrivateIp;

    /**
     * @var string VPC名称
     */
    public $VpcName;

    /**
     * @var string VPC ID
     */
    public $Vpc;

    /**
     * @var integer waf实例等级，如果未绑定实例为0
     */
    public $InstanceLevel;

    /**
     * @var integer clb投递开关
     */
    public $PostCLSStatus;

    /**
     * @var integer kafka投递开关
     */
    public $PostCKafkaStatus;

    /**
     * @var string 对象类型：CLB:负载均衡器，TSE:云原生网关
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 对象地域
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @param string $ObjectId 对象ID
     * @param string $InstanceId 实例ID
     * @param string $InstanceName 实例名称
     * @param array $PreciseDomains 精准域名列表
     * @param integer $Status WAF功能开关状态，0关闭1开启
     * @param integer $ClsStatus WAF日志开关状态，0关闭1开启
     * @param string $VirtualDomain CLB对象对应的虚拟域名
     * @param string $ObjectName 对象名称
     * @param array $PublicIp 公网地址
     * @param array $PrivateIp 内网地址
     * @param string $VpcName VPC名称
     * @param string $Vpc VPC ID
     * @param integer $InstanceLevel waf实例等级，如果未绑定实例为0
     * @param integer $PostCLSStatus clb投递开关
     * @param integer $PostCKafkaStatus kafka投递开关
     * @param string $Type 对象类型：CLB:负载均衡器，TSE:云原生网关
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Region 对象地域
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
        if (array_key_exists("ObjectId",$param) and $param["ObjectId"] !== null) {
            $this->ObjectId = $param["ObjectId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("PreciseDomains",$param) and $param["PreciseDomains"] !== null) {
            $this->PreciseDomains = $param["PreciseDomains"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ClsStatus",$param) and $param["ClsStatus"] !== null) {
            $this->ClsStatus = $param["ClsStatus"];
        }

        if (array_key_exists("VirtualDomain",$param) and $param["VirtualDomain"] !== null) {
            $this->VirtualDomain = $param["VirtualDomain"];
        }

        if (array_key_exists("ObjectName",$param) and $param["ObjectName"] !== null) {
            $this->ObjectName = $param["ObjectName"];
        }

        if (array_key_exists("PublicIp",$param) and $param["PublicIp"] !== null) {
            $this->PublicIp = $param["PublicIp"];
        }

        if (array_key_exists("PrivateIp",$param) and $param["PrivateIp"] !== null) {
            $this->PrivateIp = $param["PrivateIp"];
        }

        if (array_key_exists("VpcName",$param) and $param["VpcName"] !== null) {
            $this->VpcName = $param["VpcName"];
        }

        if (array_key_exists("Vpc",$param) and $param["Vpc"] !== null) {
            $this->Vpc = $param["Vpc"];
        }

        if (array_key_exists("InstanceLevel",$param) and $param["InstanceLevel"] !== null) {
            $this->InstanceLevel = $param["InstanceLevel"];
        }

        if (array_key_exists("PostCLSStatus",$param) and $param["PostCLSStatus"] !== null) {
            $this->PostCLSStatus = $param["PostCLSStatus"];
        }

        if (array_key_exists("PostCKafkaStatus",$param) and $param["PostCKafkaStatus"] !== null) {
            $this->PostCKafkaStatus = $param["PostCKafkaStatus"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }
    }
}
