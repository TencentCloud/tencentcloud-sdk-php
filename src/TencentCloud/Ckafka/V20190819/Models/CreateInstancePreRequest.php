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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstancePre请求参数结构体
 *
 * @method string getInstanceName() 获取实例名称，是一个不超过 64 个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线(-)
 * @method void setInstanceName(string $InstanceName) 设置实例名称，是一个不超过 64 个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线(-)
 * @method integer getZoneId() 获取可用区，购买多可用区实例时，填写ZoneIds.N字段中的任意一个值
 * @method void setZoneId(integer $ZoneId) 设置可用区，购买多可用区实例时，填写ZoneIds.N字段中的任意一个值
 * @method string getPeriod() 获取预付费购买时长，例如 "1m",就是一个月
 * @method void setPeriod(string $Period) 设置预付费购买时长，例如 "1m",就是一个月
 * @method integer getInstanceType() 获取实例规格说明 专业版实例[所有规格]填写1.
标准版实例 ([入门型]填写1，[标准型]填写2，[进阶型]填写3，[容量型]填写4，[高阶型1]填写5，[高阶性2]填写6,[高阶型3]填写7,[高阶型4]填写8，[独占型]填写9。
 * @method void setInstanceType(integer $InstanceType) 设置实例规格说明 专业版实例[所有规格]填写1.
标准版实例 ([入门型]填写1，[标准型]填写2，[进阶型]填写3，[容量型]填写4，[高阶型1]填写5，[高阶性2]填写6,[高阶型3]填写7,[高阶型4]填写8，[独占型]填写9。
 * @method string getVpcId() 获取vpcId，不填默认基础网络
 * @method void setVpcId(string $VpcId) 设置vpcId，不填默认基础网络
 * @method string getSubnetId() 获取子网id，vpc网络需要传该参数，基础网络可以不传
 * @method void setSubnetId(string $SubnetId) 设置子网id，vpc网络需要传该参数，基础网络可以不传
 * @method integer getMsgRetentionTime() 获取可选。实例日志的最长保留时间，单位分钟，默认为10080（7天），最大30天，不填默认0，代表不开启日志保留时间回收策略
 * @method void setMsgRetentionTime(integer $MsgRetentionTime) 设置可选。实例日志的最长保留时间，单位分钟，默认为10080（7天），最大30天，不填默认0，代表不开启日志保留时间回收策略
 * @method integer getClusterId() 获取创建实例时可以选择集群Id, 该入参表示集群Id
 * @method void setClusterId(integer $ClusterId) 设置创建实例时可以选择集群Id, 该入参表示集群Id
 * @method integer getRenewFlag() 获取预付费自动续费标记，0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费(用户设置)
 * @method void setRenewFlag(integer $RenewFlag) 设置预付费自动续费标记，0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费(用户设置)
 * @method string getKafkaVersion() 获取CKafka版本号[0.10.2、1.1.1、2.4.1], 默认是1.1.1
 * @method void setKafkaVersion(string $KafkaVersion) 设置CKafka版本号[0.10.2、1.1.1、2.4.1], 默认是1.1.1
 * @method string getSpecificationsType() 获取实例类型: [标准版实例]填写 standard(默认), [专业版实例]填写 profession
 * @method void setSpecificationsType(string $SpecificationsType) 设置实例类型: [标准版实例]填写 standard(默认), [专业版实例]填写 profession
 * @method integer getDiskSize() 获取磁盘大小,专业版不填写默认最小磁盘,填写后根据磁盘带宽分区数弹性计算
 * @method void setDiskSize(integer $DiskSize) 设置磁盘大小,专业版不填写默认最小磁盘,填写后根据磁盘带宽分区数弹性计算
 * @method integer getBandWidth() 获取带宽,专业版不填写默认最小带宽,填写后根据磁盘带宽分区数弹性计算
 * @method void setBandWidth(integer $BandWidth) 设置带宽,专业版不填写默认最小带宽,填写后根据磁盘带宽分区数弹性计算
 * @method integer getPartition() 获取分区大小,专业版不填写默认最小分区数,填写后根据磁盘带宽分区数弹性计算
 * @method void setPartition(integer $Partition) 设置分区大小,专业版不填写默认最小分区数,填写后根据磁盘带宽分区数弹性计算
 * @method array getTags() 获取标签
 * @method void setTags(array $Tags) 设置标签
 * @method string getDiskType() 获取磁盘类型（ssd填写CLOUD_SSD，sata填写CLOUD_BASIC）
 * @method void setDiskType(string $DiskType) 设置磁盘类型（ssd填写CLOUD_SSD，sata填写CLOUD_BASIC）
 * @method boolean getMultiZoneFlag() 获取跨可用区，zoneIds必填
 * @method void setMultiZoneFlag(boolean $MultiZoneFlag) 设置跨可用区，zoneIds必填
 * @method array getZoneIds() 获取可用区列表，购买多可用区实例时为必填项
 * @method void setZoneIds(array $ZoneIds) 设置可用区列表，购买多可用区实例时为必填项
 */
class CreateInstancePreRequest extends AbstractModel
{
    /**
     * @var string 实例名称，是一个不超过 64 个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线(-)
     */
    public $InstanceName;

    /**
     * @var integer 可用区，购买多可用区实例时，填写ZoneIds.N字段中的任意一个值
     */
    public $ZoneId;

    /**
     * @var string 预付费购买时长，例如 "1m",就是一个月
     */
    public $Period;

    /**
     * @var integer 实例规格说明 专业版实例[所有规格]填写1.
标准版实例 ([入门型]填写1，[标准型]填写2，[进阶型]填写3，[容量型]填写4，[高阶型1]填写5，[高阶性2]填写6,[高阶型3]填写7,[高阶型4]填写8，[独占型]填写9。
     */
    public $InstanceType;

    /**
     * @var string vpcId，不填默认基础网络
     */
    public $VpcId;

    /**
     * @var string 子网id，vpc网络需要传该参数，基础网络可以不传
     */
    public $SubnetId;

    /**
     * @var integer 可选。实例日志的最长保留时间，单位分钟，默认为10080（7天），最大30天，不填默认0，代表不开启日志保留时间回收策略
     */
    public $MsgRetentionTime;

    /**
     * @var integer 创建实例时可以选择集群Id, 该入参表示集群Id
     */
    public $ClusterId;

    /**
     * @var integer 预付费自动续费标记，0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费(用户设置)
     */
    public $RenewFlag;

    /**
     * @var string CKafka版本号[0.10.2、1.1.1、2.4.1], 默认是1.1.1
     */
    public $KafkaVersion;

    /**
     * @var string 实例类型: [标准版实例]填写 standard(默认), [专业版实例]填写 profession
     */
    public $SpecificationsType;

    /**
     * @var integer 磁盘大小,专业版不填写默认最小磁盘,填写后根据磁盘带宽分区数弹性计算
     */
    public $DiskSize;

    /**
     * @var integer 带宽,专业版不填写默认最小带宽,填写后根据磁盘带宽分区数弹性计算
     */
    public $BandWidth;

    /**
     * @var integer 分区大小,专业版不填写默认最小分区数,填写后根据磁盘带宽分区数弹性计算
     */
    public $Partition;

    /**
     * @var array 标签
     */
    public $Tags;

    /**
     * @var string 磁盘类型（ssd填写CLOUD_SSD，sata填写CLOUD_BASIC）
     */
    public $DiskType;

    /**
     * @var boolean 跨可用区，zoneIds必填
     */
    public $MultiZoneFlag;

    /**
     * @var array 可用区列表，购买多可用区实例时为必填项
     */
    public $ZoneIds;

    /**
     * @param string $InstanceName 实例名称，是一个不超过 64 个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线(-)
     * @param integer $ZoneId 可用区，购买多可用区实例时，填写ZoneIds.N字段中的任意一个值
     * @param string $Period 预付费购买时长，例如 "1m",就是一个月
     * @param integer $InstanceType 实例规格说明 专业版实例[所有规格]填写1.
标准版实例 ([入门型]填写1，[标准型]填写2，[进阶型]填写3，[容量型]填写4，[高阶型1]填写5，[高阶性2]填写6,[高阶型3]填写7,[高阶型4]填写8，[独占型]填写9。
     * @param string $VpcId vpcId，不填默认基础网络
     * @param string $SubnetId 子网id，vpc网络需要传该参数，基础网络可以不传
     * @param integer $MsgRetentionTime 可选。实例日志的最长保留时间，单位分钟，默认为10080（7天），最大30天，不填默认0，代表不开启日志保留时间回收策略
     * @param integer $ClusterId 创建实例时可以选择集群Id, 该入参表示集群Id
     * @param integer $RenewFlag 预付费自动续费标记，0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费(用户设置)
     * @param string $KafkaVersion CKafka版本号[0.10.2、1.1.1、2.4.1], 默认是1.1.1
     * @param string $SpecificationsType 实例类型: [标准版实例]填写 standard(默认), [专业版实例]填写 profession
     * @param integer $DiskSize 磁盘大小,专业版不填写默认最小磁盘,填写后根据磁盘带宽分区数弹性计算
     * @param integer $BandWidth 带宽,专业版不填写默认最小带宽,填写后根据磁盘带宽分区数弹性计算
     * @param integer $Partition 分区大小,专业版不填写默认最小分区数,填写后根据磁盘带宽分区数弹性计算
     * @param array $Tags 标签
     * @param string $DiskType 磁盘类型（ssd填写CLOUD_SSD，sata填写CLOUD_BASIC）
     * @param boolean $MultiZoneFlag 跨可用区，zoneIds必填
     * @param array $ZoneIds 可用区列表，购买多可用区实例时为必填项
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
        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("MsgRetentionTime",$param) and $param["MsgRetentionTime"] !== null) {
            $this->MsgRetentionTime = $param["MsgRetentionTime"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("KafkaVersion",$param) and $param["KafkaVersion"] !== null) {
            $this->KafkaVersion = $param["KafkaVersion"];
        }

        if (array_key_exists("SpecificationsType",$param) and $param["SpecificationsType"] !== null) {
            $this->SpecificationsType = $param["SpecificationsType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("BandWidth",$param) and $param["BandWidth"] !== null) {
            $this->BandWidth = $param["BandWidth"];
        }

        if (array_key_exists("Partition",$param) and $param["Partition"] !== null) {
            $this->Partition = $param["Partition"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("MultiZoneFlag",$param) and $param["MultiZoneFlag"] !== null) {
            $this->MultiZoneFlag = $param["MultiZoneFlag"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }
    }
}
