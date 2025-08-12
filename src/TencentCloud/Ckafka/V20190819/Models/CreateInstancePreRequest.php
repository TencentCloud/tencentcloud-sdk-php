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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstancePre请求参数结构体
 *
 * @method string getInstanceName() 获取ckafka集群实例Name，是一个不超过 64 个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线(-)
 * @method void setInstanceName(string $InstanceName) 设置ckafka集群实例Name，是一个不超过 64 个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线(-)
 * @method integer getZoneId() 获取可用区。当购买多可用区实例时，当前参数为主可用区。  [查看可用区](https://cloud.tencent.com/document/product/597/55246)
 * @method void setZoneId(integer $ZoneId) 设置可用区。当购买多可用区实例时，当前参数为主可用区。  [查看可用区](https://cloud.tencent.com/document/product/597/55246)
 * @method string getPeriod() 获取预付费购买时长，例如 "1m",就是一个月
 * @method void setPeriod(string $Period) 设置预付费购买时长，例如 "1m",就是一个月
 * @method integer getInstanceType() 获取国际站标准版实例规格。目前只有国际站标准版使用当前字段区分规格，国内站标准版使用峰值带宽区分规格。除了国际站标准版外的所有实例填写 1 即可。国际站标准版实例：入门型(general)]填写1；[标准型(standard)]填写2；[进阶型(advanced)]填写3；[容量型(capacity)]填写4；[高阶型1(specialized-1)]填写5；[高阶型2(specialized-2)]填写6；[高阶型3(specialized-3)]填写7；[高阶型4(specialized-4)]填写8。
 * @method void setInstanceType(integer $InstanceType) 设置国际站标准版实例规格。目前只有国际站标准版使用当前字段区分规格，国内站标准版使用峰值带宽区分规格。除了国际站标准版外的所有实例填写 1 即可。国际站标准版实例：入门型(general)]填写1；[标准型(standard)]填写2；[进阶型(advanced)]填写3；[容量型(capacity)]填写4；[高阶型1(specialized-1)]填写5；[高阶型2(specialized-2)]填写6；[高阶型3(specialized-3)]填写7；[高阶型4(specialized-4)]填写8。
 * @method string getVpcId() 获取私有网络Id
 * @method void setVpcId(string $VpcId) 设置私有网络Id
 * @method string getSubnetId() 获取子网id
 * @method void setSubnetId(string $SubnetId) 设置子网id
 * @method integer getMsgRetentionTime() 获取可选。实例日志的最长保留时间，单位分钟，默认为10080（7天），最大30天，不填默认0，代表不开启日志保留时间回收策略
 * @method void setMsgRetentionTime(integer $MsgRetentionTime) 设置可选。实例日志的最长保留时间，单位分钟，默认为10080（7天），最大30天，不填默认0，代表不开启日志保留时间回收策略
 * @method integer getClusterId() 获取创建实例时可以选择集群Id, 该入参表示集群Id
 * @method void setClusterId(integer $ClusterId) 设置创建实例时可以选择集群Id, 该入参表示集群Id
 * @method integer getRenewFlag() 获取预付费自动续费标记，0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费(用户设置)
 * @method void setRenewFlag(integer $RenewFlag) 设置预付费自动续费标记，0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费(用户设置)
 * @method string getKafkaVersion() 获取CKafka版本号[0.10.2、1.1.1、2.4.1、2.4.2、2.8.1、3.2.3], 默认是1.1.1。2.4.1 与 2.4.2 属于同一个版本，传任意一个均可。
 * @method void setKafkaVersion(string $KafkaVersion) 设置CKafka版本号[0.10.2、1.1.1、2.4.1、2.4.2、2.8.1、3.2.3], 默认是1.1.1。2.4.1 与 2.4.2 属于同一个版本，传任意一个均可。
 * @method string getSpecificationsType() 获取实例类型: [标准版实例]填写 "standard" (默认), [专业版实例]填写 "profession",[高级版实例]填写"premium"
 * @method void setSpecificationsType(string $SpecificationsType) 设置实例类型: [标准版实例]填写 "standard" (默认), [专业版实例]填写 "profession",[高级版实例]填写"premium"
 * @method integer getDiskSize() 获取磁盘大小，如果跟控制台规格配比不相符，则无法创建成功
 * @method void setDiskSize(integer $DiskSize) 设置磁盘大小，如果跟控制台规格配比不相符，则无法创建成功
 * @method integer getBandWidth() 获取实例带宽,单位MB/s; 最小值:20MB/s, 高级版最大值:360MB/s,专业版最大值:100000MB/s  标准版固定带宽规格: 40MB/s, 100MB/s, 150MB/s
 * @method void setBandWidth(integer $BandWidth) 设置实例带宽,单位MB/s; 最小值:20MB/s, 高级版最大值:360MB/s,专业版最大值:100000MB/s  标准版固定带宽规格: 40MB/s, 100MB/s, 150MB/s
 * @method integer getPartition() 获取分区大小，如果跟控制台规格配比不相符，则无法创建成功
 * @method void setPartition(integer $Partition) 设置分区大小，如果跟控制台规格配比不相符，则无法创建成功
 * @method array getTags() 获取标签
 * @method void setTags(array $Tags) 设置标签
 * @method string getDiskType() 获取专业版/高级版实例磁盘类型，标准版实例不需要填写。"CLOUD_SSD"：SSD云硬盘；"CLOUD_BASIC"：高性能云硬盘。不传默认为 "CLOUD_BASIC"
 * @method void setDiskType(string $DiskType) 设置专业版/高级版实例磁盘类型，标准版实例不需要填写。"CLOUD_SSD"：SSD云硬盘；"CLOUD_BASIC"：高性能云硬盘。不传默认为 "CLOUD_BASIC"
 * @method boolean getMultiZoneFlag() 获取是否创建跨可用区实例，当前参数为 true 时，zoneIds必填
 * @method void setMultiZoneFlag(boolean $MultiZoneFlag) 设置是否创建跨可用区实例，当前参数为 true 时，zoneIds必填
 * @method array getZoneIds() 获取可用区列表，购买多可用区实例时为必填项
 * @method void setZoneIds(array $ZoneIds) 设置可用区列表，购买多可用区实例时为必填项
 * @method integer getPublicNetworkMonthly() 获取公网带宽大小，单位 Mbps。默认是没有加上免费 3Mbps 带宽。例如总共需要 3Mbps 公网带宽，此处传 0；总共需要 6Mbps 公网带宽，此处传 3。默认值为 0。需要保证传入参数为 3 的整数倍
 * @method void setPublicNetworkMonthly(integer $PublicNetworkMonthly) 设置公网带宽大小，单位 Mbps。默认是没有加上免费 3Mbps 带宽。例如总共需要 3Mbps 公网带宽，此处传 0；总共需要 6Mbps 公网带宽，此处传 3。默认值为 0。需要保证传入参数为 3 的整数倍
 * @method integer getInstanceNum() 获取购买实例数量。非必填，默认值为 1。当传入该参数时，会创建多个 instanceName 加后缀区分的实例
 * @method void setInstanceNum(integer $InstanceNum) 设置购买实例数量。非必填，默认值为 1。当传入该参数时，会创建多个 instanceName 加后缀区分的实例
 * @method integer getAutoVoucher() 获取是否自动选择代金券:1-是;0否。默认为0
 * @method void setAutoVoucher(integer $AutoVoucher) 设置是否自动选择代金券:1-是;0否。默认为0
 * @method integer getElasticBandwidthSwitch() 获取弹性带宽开关 0不开启  1开启（0默认）
 * @method void setElasticBandwidthSwitch(integer $ElasticBandwidthSwitch) 设置弹性带宽开关 0不开启  1开启（0默认）
 */
class CreateInstancePreRequest extends AbstractModel
{
    /**
     * @var string ckafka集群实例Name，是一个不超过 64 个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线(-)
     */
    public $InstanceName;

    /**
     * @var integer 可用区。当购买多可用区实例时，当前参数为主可用区。  [查看可用区](https://cloud.tencent.com/document/product/597/55246)
     */
    public $ZoneId;

    /**
     * @var string 预付费购买时长，例如 "1m",就是一个月
     */
    public $Period;

    /**
     * @var integer 国际站标准版实例规格。目前只有国际站标准版使用当前字段区分规格，国内站标准版使用峰值带宽区分规格。除了国际站标准版外的所有实例填写 1 即可。国际站标准版实例：入门型(general)]填写1；[标准型(standard)]填写2；[进阶型(advanced)]填写3；[容量型(capacity)]填写4；[高阶型1(specialized-1)]填写5；[高阶型2(specialized-2)]填写6；[高阶型3(specialized-3)]填写7；[高阶型4(specialized-4)]填写8。
     */
    public $InstanceType;

    /**
     * @var string 私有网络Id
     */
    public $VpcId;

    /**
     * @var string 子网id
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
     * @var string CKafka版本号[0.10.2、1.1.1、2.4.1、2.4.2、2.8.1、3.2.3], 默认是1.1.1。2.4.1 与 2.4.2 属于同一个版本，传任意一个均可。
     */
    public $KafkaVersion;

    /**
     * @var string 实例类型: [标准版实例]填写 "standard" (默认), [专业版实例]填写 "profession",[高级版实例]填写"premium"
     */
    public $SpecificationsType;

    /**
     * @var integer 磁盘大小，如果跟控制台规格配比不相符，则无法创建成功
     */
    public $DiskSize;

    /**
     * @var integer 实例带宽,单位MB/s; 最小值:20MB/s, 高级版最大值:360MB/s,专业版最大值:100000MB/s  标准版固定带宽规格: 40MB/s, 100MB/s, 150MB/s
     */
    public $BandWidth;

    /**
     * @var integer 分区大小，如果跟控制台规格配比不相符，则无法创建成功
     */
    public $Partition;

    /**
     * @var array 标签
     */
    public $Tags;

    /**
     * @var string 专业版/高级版实例磁盘类型，标准版实例不需要填写。"CLOUD_SSD"：SSD云硬盘；"CLOUD_BASIC"：高性能云硬盘。不传默认为 "CLOUD_BASIC"
     */
    public $DiskType;

    /**
     * @var boolean 是否创建跨可用区实例，当前参数为 true 时，zoneIds必填
     */
    public $MultiZoneFlag;

    /**
     * @var array 可用区列表，购买多可用区实例时为必填项
     */
    public $ZoneIds;

    /**
     * @var integer 公网带宽大小，单位 Mbps。默认是没有加上免费 3Mbps 带宽。例如总共需要 3Mbps 公网带宽，此处传 0；总共需要 6Mbps 公网带宽，此处传 3。默认值为 0。需要保证传入参数为 3 的整数倍
     */
    public $PublicNetworkMonthly;

    /**
     * @var integer 购买实例数量。非必填，默认值为 1。当传入该参数时，会创建多个 instanceName 加后缀区分的实例
     */
    public $InstanceNum;

    /**
     * @var integer 是否自动选择代金券:1-是;0否。默认为0
     */
    public $AutoVoucher;

    /**
     * @var integer 弹性带宽开关 0不开启  1开启（0默认）
     */
    public $ElasticBandwidthSwitch;

    /**
     * @param string $InstanceName ckafka集群实例Name，是一个不超过 64 个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线(-)
     * @param integer $ZoneId 可用区。当购买多可用区实例时，当前参数为主可用区。  [查看可用区](https://cloud.tencent.com/document/product/597/55246)
     * @param string $Period 预付费购买时长，例如 "1m",就是一个月
     * @param integer $InstanceType 国际站标准版实例规格。目前只有国际站标准版使用当前字段区分规格，国内站标准版使用峰值带宽区分规格。除了国际站标准版外的所有实例填写 1 即可。国际站标准版实例：入门型(general)]填写1；[标准型(standard)]填写2；[进阶型(advanced)]填写3；[容量型(capacity)]填写4；[高阶型1(specialized-1)]填写5；[高阶型2(specialized-2)]填写6；[高阶型3(specialized-3)]填写7；[高阶型4(specialized-4)]填写8。
     * @param string $VpcId 私有网络Id
     * @param string $SubnetId 子网id
     * @param integer $MsgRetentionTime 可选。实例日志的最长保留时间，单位分钟，默认为10080（7天），最大30天，不填默认0，代表不开启日志保留时间回收策略
     * @param integer $ClusterId 创建实例时可以选择集群Id, 该入参表示集群Id
     * @param integer $RenewFlag 预付费自动续费标记，0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费(用户设置)
     * @param string $KafkaVersion CKafka版本号[0.10.2、1.1.1、2.4.1、2.4.2、2.8.1、3.2.3], 默认是1.1.1。2.4.1 与 2.4.2 属于同一个版本，传任意一个均可。
     * @param string $SpecificationsType 实例类型: [标准版实例]填写 "standard" (默认), [专业版实例]填写 "profession",[高级版实例]填写"premium"
     * @param integer $DiskSize 磁盘大小，如果跟控制台规格配比不相符，则无法创建成功
     * @param integer $BandWidth 实例带宽,单位MB/s; 最小值:20MB/s, 高级版最大值:360MB/s,专业版最大值:100000MB/s  标准版固定带宽规格: 40MB/s, 100MB/s, 150MB/s
     * @param integer $Partition 分区大小，如果跟控制台规格配比不相符，则无法创建成功
     * @param array $Tags 标签
     * @param string $DiskType 专业版/高级版实例磁盘类型，标准版实例不需要填写。"CLOUD_SSD"：SSD云硬盘；"CLOUD_BASIC"：高性能云硬盘。不传默认为 "CLOUD_BASIC"
     * @param boolean $MultiZoneFlag 是否创建跨可用区实例，当前参数为 true 时，zoneIds必填
     * @param array $ZoneIds 可用区列表，购买多可用区实例时为必填项
     * @param integer $PublicNetworkMonthly 公网带宽大小，单位 Mbps。默认是没有加上免费 3Mbps 带宽。例如总共需要 3Mbps 公网带宽，此处传 0；总共需要 6Mbps 公网带宽，此处传 3。默认值为 0。需要保证传入参数为 3 的整数倍
     * @param integer $InstanceNum 购买实例数量。非必填，默认值为 1。当传入该参数时，会创建多个 instanceName 加后缀区分的实例
     * @param integer $AutoVoucher 是否自动选择代金券:1-是;0否。默认为0
     * @param integer $ElasticBandwidthSwitch 弹性带宽开关 0不开启  1开启（0默认）
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

        if (array_key_exists("PublicNetworkMonthly",$param) and $param["PublicNetworkMonthly"] !== null) {
            $this->PublicNetworkMonthly = $param["PublicNetworkMonthly"];
        }

        if (array_key_exists("InstanceNum",$param) and $param["InstanceNum"] !== null) {
            $this->InstanceNum = $param["InstanceNum"];
        }

        if (array_key_exists("AutoVoucher",$param) and $param["AutoVoucher"] !== null) {
            $this->AutoVoucher = $param["AutoVoucher"];
        }

        if (array_key_exists("ElasticBandwidthSwitch",$param) and $param["ElasticBandwidthSwitch"] !== null) {
            $this->ElasticBandwidthSwitch = $param["ElasticBandwidthSwitch"];
        }
    }
}
