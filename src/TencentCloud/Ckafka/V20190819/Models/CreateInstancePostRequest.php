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
 * CreateInstancePost请求参数结构体
 *
 * @method string getInstanceName() 获取实例名称，是一个不超过 64 个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线(-)
 * @method void setInstanceName(string $InstanceName) 设置实例名称，是一个不超过 64 个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线(-)
 * @method integer getBandWidth() 获取实例内网峰值带宽。单位 MB/s。标准版需传入当前实例规格所对应的峰值带宽。注意如果创建的实例为专业版实例，峰值带宽，分区数等参数配置需要满足专业版的计费规格。
 * @method void setBandWidth(integer $BandWidth) 设置实例内网峰值带宽。单位 MB/s。标准版需传入当前实例规格所对应的峰值带宽。注意如果创建的实例为专业版实例，峰值带宽，分区数等参数配置需要满足专业版的计费规格。
 * @method string getVpcId() 获取创建的实例默认接入点所在的 vpc 对应 vpcId。目前不支持创建基础网络实例，因此该参数必填
 * @method void setVpcId(string $VpcId) 设置创建的实例默认接入点所在的 vpc 对应 vpcId。目前不支持创建基础网络实例，因此该参数必填
 * @method string getSubnetId() 获取子网id。创建实例默认接入点所在的子网对应的子网 id
 * @method void setSubnetId(string $SubnetId) 设置子网id。创建实例默认接入点所在的子网对应的子网 id
 * @method integer getInstanceType() 获取实例规格。当创建标准版实例时必填，创建专业版实例时不需要填写。1：入门型；2：标准型；3：进阶型；4：容量型；5：高阶型1；6：高阶性2；7：高阶型3；8：高阶型4；9 ：独占型
 * @method void setInstanceType(integer $InstanceType) 设置实例规格。当创建标准版实例时必填，创建专业版实例时不需要填写。1：入门型；2：标准型；3：进阶型；4：容量型；5：高阶型1；6：高阶性2；7：高阶型3；8：高阶型4；9 ：独占型
 * @method integer getMsgRetentionTime() 获取实例日志的默认最长保留时间，单位分钟。不传入该参数时默认为 1440 分钟（1天），最大30天。当 topic 显式设置消息保留时间时，以 topic 保留时间为准
 * @method void setMsgRetentionTime(integer $MsgRetentionTime) 设置实例日志的默认最长保留时间，单位分钟。不传入该参数时默认为 1440 分钟（1天），最大30天。当 topic 显式设置消息保留时间时，以 topic 保留时间为准
 * @method integer getClusterId() 获取创建实例时可以选择集群Id, 该入参表示集群Id。不指定实例所在集群则不传入该参数
 * @method void setClusterId(integer $ClusterId) 设置创建实例时可以选择集群Id, 该入参表示集群Id。不指定实例所在集群则不传入该参数
 * @method string getKafkaVersion() 获取实例版本。目前支持 "0.10.2","1.1.1","2.4.2","2.8.1"
 * @method void setKafkaVersion(string $KafkaVersion) 设置实例版本。目前支持 "0.10.2","1.1.1","2.4.2","2.8.1"
 * @method string getSpecificationsType() 获取实例类型。"standard"：标准版，"profession"：专业版
 * @method void setSpecificationsType(string $SpecificationsType) 设置实例类型。"standard"：标准版，"profession"：专业版
 * @method string getDiskType() 获取实例硬盘类型，"CLOUD_BASIC"：云硬盘，"CLOUD_SSD"：高速云硬盘。不传默认为 "CLOUD_BASIC"
 * @method void setDiskType(string $DiskType) 设置实例硬盘类型，"CLOUD_BASIC"：云硬盘，"CLOUD_SSD"：高速云硬盘。不传默认为 "CLOUD_BASIC"
 * @method integer getDiskSize() 获取实例硬盘大小，需要满足当前实例的计费规格
 * @method void setDiskSize(integer $DiskSize) 设置实例硬盘大小，需要满足当前实例的计费规格
 * @method integer getPartition() 获取实例最大分区数量，需要满足当前实例的计费规格
 * @method void setPartition(integer $Partition) 设置实例最大分区数量，需要满足当前实例的计费规格
 * @method integer getTopicNum() 获取实例最大 topic 数量，需要满足当前实例的计费规格
 * @method void setTopicNum(integer $TopicNum) 设置实例最大 topic 数量，需要满足当前实例的计费规格
 * @method integer getZoneId() 获取实例所在的可用区。当创建多可用区实例时，该参数为创建的默认接入点所在的子网
 * @method void setZoneId(integer $ZoneId) 设置实例所在的可用区。当创建多可用区实例时，该参数为创建的默认接入点所在的子网
 * @method boolean getMultiZoneFlag() 获取当前实例是否为多可用区实例。
 * @method void setMultiZoneFlag(boolean $MultiZoneFlag) 设置当前实例是否为多可用区实例。
 * @method array getZoneIds() 获取当实例为多可用区实例时，多可用区 id 列表。注意参数 ZoneId 对应的多可用区需要包含在该参数数组中
 * @method void setZoneIds(array $ZoneIds) 设置当实例为多可用区实例时，多可用区 id 列表。注意参数 ZoneId 对应的多可用区需要包含在该参数数组中
 * @method integer getInstanceNum() 获取购买实例数量。非必填，默认值为 1。当传入该参数时，会创建多个 instanceName 加后缀区分的实例
 * @method void setInstanceNum(integer $InstanceNum) 设置购买实例数量。非必填，默认值为 1。当传入该参数时，会创建多个 instanceName 加后缀区分的实例
 * @method integer getPublicNetworkMonthly() 获取公网带宽大小，单位 Mbps。默认是没有加上免费 3Mbps 带宽。例如总共需要 3Mbps 公网带宽，此处传 0；总共需要 4Mbps 公网带宽，此处传 1
 * @method void setPublicNetworkMonthly(integer $PublicNetworkMonthly) 设置公网带宽大小，单位 Mbps。默认是没有加上免费 3Mbps 带宽。例如总共需要 3Mbps 公网带宽，此处传 0；总共需要 4Mbps 公网带宽，此处传 1
 */
class CreateInstancePostRequest extends AbstractModel
{
    /**
     * @var string 实例名称，是一个不超过 64 个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线(-)
     */
    public $InstanceName;

    /**
     * @var integer 实例内网峰值带宽。单位 MB/s。标准版需传入当前实例规格所对应的峰值带宽。注意如果创建的实例为专业版实例，峰值带宽，分区数等参数配置需要满足专业版的计费规格。
     */
    public $BandWidth;

    /**
     * @var string 创建的实例默认接入点所在的 vpc 对应 vpcId。目前不支持创建基础网络实例，因此该参数必填
     */
    public $VpcId;

    /**
     * @var string 子网id。创建实例默认接入点所在的子网对应的子网 id
     */
    public $SubnetId;

    /**
     * @var integer 实例规格。当创建标准版实例时必填，创建专业版实例时不需要填写。1：入门型；2：标准型；3：进阶型；4：容量型；5：高阶型1；6：高阶性2；7：高阶型3；8：高阶型4；9 ：独占型
     */
    public $InstanceType;

    /**
     * @var integer 实例日志的默认最长保留时间，单位分钟。不传入该参数时默认为 1440 分钟（1天），最大30天。当 topic 显式设置消息保留时间时，以 topic 保留时间为准
     */
    public $MsgRetentionTime;

    /**
     * @var integer 创建实例时可以选择集群Id, 该入参表示集群Id。不指定实例所在集群则不传入该参数
     */
    public $ClusterId;

    /**
     * @var string 实例版本。目前支持 "0.10.2","1.1.1","2.4.2","2.8.1"
     */
    public $KafkaVersion;

    /**
     * @var string 实例类型。"standard"：标准版，"profession"：专业版
     */
    public $SpecificationsType;

    /**
     * @var string 实例硬盘类型，"CLOUD_BASIC"：云硬盘，"CLOUD_SSD"：高速云硬盘。不传默认为 "CLOUD_BASIC"
     */
    public $DiskType;

    /**
     * @var integer 实例硬盘大小，需要满足当前实例的计费规格
     */
    public $DiskSize;

    /**
     * @var integer 实例最大分区数量，需要满足当前实例的计费规格
     */
    public $Partition;

    /**
     * @var integer 实例最大 topic 数量，需要满足当前实例的计费规格
     */
    public $TopicNum;

    /**
     * @var integer 实例所在的可用区。当创建多可用区实例时，该参数为创建的默认接入点所在的子网
     */
    public $ZoneId;

    /**
     * @var boolean 当前实例是否为多可用区实例。
     */
    public $MultiZoneFlag;

    /**
     * @var array 当实例为多可用区实例时，多可用区 id 列表。注意参数 ZoneId 对应的多可用区需要包含在该参数数组中
     */
    public $ZoneIds;

    /**
     * @var integer 购买实例数量。非必填，默认值为 1。当传入该参数时，会创建多个 instanceName 加后缀区分的实例
     */
    public $InstanceNum;

    /**
     * @var integer 公网带宽大小，单位 Mbps。默认是没有加上免费 3Mbps 带宽。例如总共需要 3Mbps 公网带宽，此处传 0；总共需要 4Mbps 公网带宽，此处传 1
     */
    public $PublicNetworkMonthly;

    /**
     * @param string $InstanceName 实例名称，是一个不超过 64 个字符的字符串，必须以字母为首字符，剩余部分可以包含字母、数字和横划线(-)
     * @param integer $BandWidth 实例内网峰值带宽。单位 MB/s。标准版需传入当前实例规格所对应的峰值带宽。注意如果创建的实例为专业版实例，峰值带宽，分区数等参数配置需要满足专业版的计费规格。
     * @param string $VpcId 创建的实例默认接入点所在的 vpc 对应 vpcId。目前不支持创建基础网络实例，因此该参数必填
     * @param string $SubnetId 子网id。创建实例默认接入点所在的子网对应的子网 id
     * @param integer $InstanceType 实例规格。当创建标准版实例时必填，创建专业版实例时不需要填写。1：入门型；2：标准型；3：进阶型；4：容量型；5：高阶型1；6：高阶性2；7：高阶型3；8：高阶型4；9 ：独占型
     * @param integer $MsgRetentionTime 实例日志的默认最长保留时间，单位分钟。不传入该参数时默认为 1440 分钟（1天），最大30天。当 topic 显式设置消息保留时间时，以 topic 保留时间为准
     * @param integer $ClusterId 创建实例时可以选择集群Id, 该入参表示集群Id。不指定实例所在集群则不传入该参数
     * @param string $KafkaVersion 实例版本。目前支持 "0.10.2","1.1.1","2.4.2","2.8.1"
     * @param string $SpecificationsType 实例类型。"standard"：标准版，"profession"：专业版
     * @param string $DiskType 实例硬盘类型，"CLOUD_BASIC"：云硬盘，"CLOUD_SSD"：高速云硬盘。不传默认为 "CLOUD_BASIC"
     * @param integer $DiskSize 实例硬盘大小，需要满足当前实例的计费规格
     * @param integer $Partition 实例最大分区数量，需要满足当前实例的计费规格
     * @param integer $TopicNum 实例最大 topic 数量，需要满足当前实例的计费规格
     * @param integer $ZoneId 实例所在的可用区。当创建多可用区实例时，该参数为创建的默认接入点所在的子网
     * @param boolean $MultiZoneFlag 当前实例是否为多可用区实例。
     * @param array $ZoneIds 当实例为多可用区实例时，多可用区 id 列表。注意参数 ZoneId 对应的多可用区需要包含在该参数数组中
     * @param integer $InstanceNum 购买实例数量。非必填，默认值为 1。当传入该参数时，会创建多个 instanceName 加后缀区分的实例
     * @param integer $PublicNetworkMonthly 公网带宽大小，单位 Mbps。默认是没有加上免费 3Mbps 带宽。例如总共需要 3Mbps 公网带宽，此处传 0；总共需要 4Mbps 公网带宽，此处传 1
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

        if (array_key_exists("BandWidth",$param) and $param["BandWidth"] !== null) {
            $this->BandWidth = $param["BandWidth"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("MsgRetentionTime",$param) and $param["MsgRetentionTime"] !== null) {
            $this->MsgRetentionTime = $param["MsgRetentionTime"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("KafkaVersion",$param) and $param["KafkaVersion"] !== null) {
            $this->KafkaVersion = $param["KafkaVersion"];
        }

        if (array_key_exists("SpecificationsType",$param) and $param["SpecificationsType"] !== null) {
            $this->SpecificationsType = $param["SpecificationsType"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("Partition",$param) and $param["Partition"] !== null) {
            $this->Partition = $param["Partition"];
        }

        if (array_key_exists("TopicNum",$param) and $param["TopicNum"] !== null) {
            $this->TopicNum = $param["TopicNum"];
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("MultiZoneFlag",$param) and $param["MultiZoneFlag"] !== null) {
            $this->MultiZoneFlag = $param["MultiZoneFlag"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("InstanceNum",$param) and $param["InstanceNum"] !== null) {
            $this->InstanceNum = $param["InstanceNum"];
        }

        if (array_key_exists("PublicNetworkMonthly",$param) and $param["PublicNetworkMonthly"] !== null) {
            $this->PublicNetworkMonthly = $param["PublicNetworkMonthly"];
        }
    }
}
