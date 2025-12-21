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
 * @method string getInstanceName() 获取<p>ckafka集群实例Name，是一个不超过 128 个字符的任意字符串。</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>ckafka集群实例Name，是一个不超过 128 个字符的任意字符串。</p>
 * @method integer getZoneId() 获取<p>可用区。当购买多可用区实例时，当前参数为主可用区。  <a href="https://cloud.tencent.com/document/product/597/55246">查看可用区</a></p>
 * @method void setZoneId(integer $ZoneId) 设置<p>可用区。当购买多可用区实例时，当前参数为主可用区。  <a href="https://cloud.tencent.com/document/product/597/55246">查看可用区</a></p>
 * @method string getPeriod() 获取<p>预付费购买时长，例如 "1m",就是一个月,取值范围 1m~36m</p>
 * @method void setPeriod(string $Period) 设置<p>预付费购买时长，例如 "1m",就是一个月,取值范围 1m~36m</p>
 * @method integer getInstanceType() 获取<p>国际站标准版实例规格。目前只有国际站标准版使用当前字段区分规格，国内站标准版使用峰值带宽区分规格。除了国际站标准版外的所有实例填写 1 即可。国际站标准版实例：入门型(general)]填写1；[标准型(standard)]填写2；[进阶型(advanced)]填写3；[容量型(capacity)]填写4；[高阶型1(specialized-1)]填写5；[高阶型2(specialized-2)]填写6；[高阶型3(specialized-3)]填写7；[高阶型4(specialized-4)]填写8。</p>
 * @method void setInstanceType(integer $InstanceType) 设置<p>国际站标准版实例规格。目前只有国际站标准版使用当前字段区分规格，国内站标准版使用峰值带宽区分规格。除了国际站标准版外的所有实例填写 1 即可。国际站标准版实例：入门型(general)]填写1；[标准型(standard)]填写2；[进阶型(advanced)]填写3；[容量型(capacity)]填写4；[高阶型1(specialized-1)]填写5；[高阶型2(specialized-2)]填写6；[高阶型3(specialized-3)]填写7；[高阶型4(specialized-4)]填写8。</p>
 * @method string getVpcId() 获取<p>私有网络Id</p>
 * @method void setVpcId(string $VpcId) 设置<p>私有网络Id</p>
 * @method string getSubnetId() 获取<p>子网id</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>子网id</p>
 * @method integer getMsgRetentionTime() 获取<p>可选。实例日志的最长保留时间，单位分钟，不填默认为1440（1天），可设置范围为1分钟到90天。</p>
 * @method void setMsgRetentionTime(integer $MsgRetentionTime) 设置<p>可选。实例日志的最长保留时间，单位分钟，不填默认为1440（1天），可设置范围为1分钟到90天。</p>
 * @method integer getClusterId() 获取<p>创建实例时可以选择集群Id, 该入参表示集群Id</p>
 * @method void setClusterId(integer $ClusterId) 设置<p>创建实例时可以选择集群Id, 该入参表示集群Id</p>
 * @method integer getRenewFlag() 获取<p>预付费自动续费标记，0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费(用户设置)</p>
 * @method void setRenewFlag(integer $RenewFlag) 设置<p>预付费自动续费标记，0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费(用户设置)</p>
 * @method string getKafkaVersion() 获取<p>CKafka版本号[2.4.1, 2.4.2, 2.8.1, 3.2.3], 默认取值是2.4.1。2.4.1 与 2.4.2 属于同一个版本，传任意一个均可。</p>
 * @method void setKafkaVersion(string $KafkaVersion) 设置<p>CKafka版本号[2.4.1, 2.4.2, 2.8.1, 3.2.3], 默认取值是2.4.1。2.4.1 与 2.4.2 属于同一个版本，传任意一个均可。</p>
 * @method string getSpecificationsType() 获取<p>实例类型: [标准版实例]填写 "standard" (默认), [专业版实例]填写 "profession",[高级版实例]填写"premium"</p>
 * @method void setSpecificationsType(string $SpecificationsType) 设置<p>实例类型: [标准版实例]填写 "standard" (默认), [专业版实例]填写 "profession",[高级版实例]填写"premium"</p>
 * @method integer getDiskSize() 获取<p>磁盘大小，如果跟控制台规格配比不相符，则无法创建成功。默认取值为500，步长设置为100。可以通过以下链接查看计费规格：https://cloud.tencent.com/document/product/597/122562</p>
 * @method void setDiskSize(integer $DiskSize) 设置<p>磁盘大小，如果跟控制台规格配比不相符，则无法创建成功。默认取值为500，步长设置为100。可以通过以下链接查看计费规格：https://cloud.tencent.com/document/product/597/122562</p>
 * @method integer getBandWidth() 获取<p>实例带宽,默认值为40，单位MB/s; 最小值:20MB/s, 高级版最大值:360MB/s,专业版最大值:100000MB/s  标准版固定带宽规格: 40MB/s, 100MB/s, 150MB/s。可以通过以下链接查看计费规格：https://cloud.tencent.com/document/product/597/11745</p>
 * @method void setBandWidth(integer $BandWidth) 设置<p>实例带宽,默认值为40，单位MB/s; 最小值:20MB/s, 高级版最大值:360MB/s,专业版最大值:100000MB/s  标准版固定带宽规格: 40MB/s, 100MB/s, 150MB/s。可以通过以下链接查看计费规格：https://cloud.tencent.com/document/product/597/11745</p>
 * @method integer getPartition() 获取<p>分区大小，如果跟控制台规格配比不相符，则无法创建成功。默认值为800，步长为100。可以通过以下链接查看计费规格：https://cloud.tencent.com/document/product/597/122563</p>
 * @method void setPartition(integer $Partition) 设置<p>分区大小，如果跟控制台规格配比不相符，则无法创建成功。默认值为800，步长为100。可以通过以下链接查看计费规格：https://cloud.tencent.com/document/product/597/122563</p>
 * @method array getTags() 获取<p>标签</p>
 * @method void setTags(array $Tags) 设置<p>标签</p>
 * @method string getDiskType() 获取<p>专业版/高级版实例磁盘类型，标准版实例不需要填写。"CLOUD_SSD"：SSD云硬盘；"CLOUD_BASIC"：高性能云硬盘。不传默认为 "CLOUD_BASIC"</p>
 * @method void setDiskType(string $DiskType) 设置<p>专业版/高级版实例磁盘类型，标准版实例不需要填写。"CLOUD_SSD"：SSD云硬盘；"CLOUD_BASIC"：高性能云硬盘。不传默认为 "CLOUD_BASIC"</p>
 * @method boolean getMultiZoneFlag() 获取<p>是否创建跨可用区实例，当前参数为 true 时，zoneIds必填</p>
 * @method void setMultiZoneFlag(boolean $MultiZoneFlag) 设置<p>是否创建跨可用区实例，当前参数为 true 时，zoneIds必填</p>
 * @method array getZoneIds() 获取<p>可用区列表，购买多可用区实例时为必填项</p>
 * @method void setZoneIds(array $ZoneIds) 设置<p>可用区列表，购买多可用区实例时为必填项</p>
 * @method integer getPublicNetworkMonthly() 获取<p>公网带宽大小，单位 Mbps。默认是没有加上免费 3Mbps 带宽。例如总共需要 3Mbps 公网带宽，此处传 0；总共需要 6Mbps 公网带宽，此处传 3。默认值为 0。需要保证传入参数为 3 的整数倍</p>
 * @method void setPublicNetworkMonthly(integer $PublicNetworkMonthly) 设置<p>公网带宽大小，单位 Mbps。默认是没有加上免费 3Mbps 带宽。例如总共需要 3Mbps 公网带宽，此处传 0；总共需要 6Mbps 公网带宽，此处传 3。默认值为 0。需要保证传入参数为 3 的整数倍</p>
 * @method integer getInstanceNum() 获取<p>购买实例数量。非必填，默认值为 1。当传入该参数时，会创建多个 instanceName 加后缀区分的实例</p>
 * @method void setInstanceNum(integer $InstanceNum) 设置<p>购买实例数量。非必填，默认值为 1。当传入该参数时，会创建多个 instanceName 加后缀区分的实例</p>
 * @method integer getAutoVoucher() 获取<p>是否自动选择代金券:1-是;0否。默认为0</p>
 * @method void setAutoVoucher(integer $AutoVoucher) 设置<p>是否自动选择代金券:1-是;0否。默认为0</p>
 * @method integer getElasticBandwidthSwitch() 获取<p>弹性带宽开关 0不开启  1开启（0默认）</p>
 * @method void setElasticBandwidthSwitch(integer $ElasticBandwidthSwitch) 设置<p>弹性带宽开关 0不开启  1开启（0默认）</p>
 * @method string getCustomSSLCertId() 获取<p>自定义证书Id,仅当SpecificationsType为profession时生效,支持自定义证书能力</p><p>可通过<a href="https://cloud.tencent.com/document/product/400/41673">DescribeCertificateDetail</a>接口获取</p>
 * @method void setCustomSSLCertId(string $CustomSSLCertId) 设置<p>自定义证书Id,仅当SpecificationsType为profession时生效,支持自定义证书能力</p><p>可通过<a href="https://cloud.tencent.com/document/product/400/41673">DescribeCertificateDetail</a>接口获取</p>
 */
class CreateInstancePreRequest extends AbstractModel
{
    /**
     * @var string <p>ckafka集群实例Name，是一个不超过 128 个字符的任意字符串。</p>
     */
    public $InstanceName;

    /**
     * @var integer <p>可用区。当购买多可用区实例时，当前参数为主可用区。  <a href="https://cloud.tencent.com/document/product/597/55246">查看可用区</a></p>
     */
    public $ZoneId;

    /**
     * @var string <p>预付费购买时长，例如 "1m",就是一个月,取值范围 1m~36m</p>
     */
    public $Period;

    /**
     * @var integer <p>国际站标准版实例规格。目前只有国际站标准版使用当前字段区分规格，国内站标准版使用峰值带宽区分规格。除了国际站标准版外的所有实例填写 1 即可。国际站标准版实例：入门型(general)]填写1；[标准型(standard)]填写2；[进阶型(advanced)]填写3；[容量型(capacity)]填写4；[高阶型1(specialized-1)]填写5；[高阶型2(specialized-2)]填写6；[高阶型3(specialized-3)]填写7；[高阶型4(specialized-4)]填写8。</p>
     */
    public $InstanceType;

    /**
     * @var string <p>私有网络Id</p>
     */
    public $VpcId;

    /**
     * @var string <p>子网id</p>
     */
    public $SubnetId;

    /**
     * @var integer <p>可选。实例日志的最长保留时间，单位分钟，不填默认为1440（1天），可设置范围为1分钟到90天。</p>
     */
    public $MsgRetentionTime;

    /**
     * @var integer <p>创建实例时可以选择集群Id, 该入参表示集群Id</p>
     */
    public $ClusterId;

    /**
     * @var integer <p>预付费自动续费标记，0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费(用户设置)</p>
     */
    public $RenewFlag;

    /**
     * @var string <p>CKafka版本号[2.4.1, 2.4.2, 2.8.1, 3.2.3], 默认取值是2.4.1。2.4.1 与 2.4.2 属于同一个版本，传任意一个均可。</p>
     */
    public $KafkaVersion;

    /**
     * @var string <p>实例类型: [标准版实例]填写 "standard" (默认), [专业版实例]填写 "profession",[高级版实例]填写"premium"</p>
     */
    public $SpecificationsType;

    /**
     * @var integer <p>磁盘大小，如果跟控制台规格配比不相符，则无法创建成功。默认取值为500，步长设置为100。可以通过以下链接查看计费规格：https://cloud.tencent.com/document/product/597/122562</p>
     */
    public $DiskSize;

    /**
     * @var integer <p>实例带宽,默认值为40，单位MB/s; 最小值:20MB/s, 高级版最大值:360MB/s,专业版最大值:100000MB/s  标准版固定带宽规格: 40MB/s, 100MB/s, 150MB/s。可以通过以下链接查看计费规格：https://cloud.tencent.com/document/product/597/11745</p>
     */
    public $BandWidth;

    /**
     * @var integer <p>分区大小，如果跟控制台规格配比不相符，则无法创建成功。默认值为800，步长为100。可以通过以下链接查看计费规格：https://cloud.tencent.com/document/product/597/122563</p>
     */
    public $Partition;

    /**
     * @var array <p>标签</p>
     */
    public $Tags;

    /**
     * @var string <p>专业版/高级版实例磁盘类型，标准版实例不需要填写。"CLOUD_SSD"：SSD云硬盘；"CLOUD_BASIC"：高性能云硬盘。不传默认为 "CLOUD_BASIC"</p>
     */
    public $DiskType;

    /**
     * @var boolean <p>是否创建跨可用区实例，当前参数为 true 时，zoneIds必填</p>
     */
    public $MultiZoneFlag;

    /**
     * @var array <p>可用区列表，购买多可用区实例时为必填项</p>
     */
    public $ZoneIds;

    /**
     * @var integer <p>公网带宽大小，单位 Mbps。默认是没有加上免费 3Mbps 带宽。例如总共需要 3Mbps 公网带宽，此处传 0；总共需要 6Mbps 公网带宽，此处传 3。默认值为 0。需要保证传入参数为 3 的整数倍</p>
     */
    public $PublicNetworkMonthly;

    /**
     * @var integer <p>购买实例数量。非必填，默认值为 1。当传入该参数时，会创建多个 instanceName 加后缀区分的实例</p>
     */
    public $InstanceNum;

    /**
     * @var integer <p>是否自动选择代金券:1-是;0否。默认为0</p>
     */
    public $AutoVoucher;

    /**
     * @var integer <p>弹性带宽开关 0不开启  1开启（0默认）</p>
     */
    public $ElasticBandwidthSwitch;

    /**
     * @var string <p>自定义证书Id,仅当SpecificationsType为profession时生效,支持自定义证书能力</p><p>可通过<a href="https://cloud.tencent.com/document/product/400/41673">DescribeCertificateDetail</a>接口获取</p>
     */
    public $CustomSSLCertId;

    /**
     * @param string $InstanceName <p>ckafka集群实例Name，是一个不超过 128 个字符的任意字符串。</p>
     * @param integer $ZoneId <p>可用区。当购买多可用区实例时，当前参数为主可用区。  <a href="https://cloud.tencent.com/document/product/597/55246">查看可用区</a></p>
     * @param string $Period <p>预付费购买时长，例如 "1m",就是一个月,取值范围 1m~36m</p>
     * @param integer $InstanceType <p>国际站标准版实例规格。目前只有国际站标准版使用当前字段区分规格，国内站标准版使用峰值带宽区分规格。除了国际站标准版外的所有实例填写 1 即可。国际站标准版实例：入门型(general)]填写1；[标准型(standard)]填写2；[进阶型(advanced)]填写3；[容量型(capacity)]填写4；[高阶型1(specialized-1)]填写5；[高阶型2(specialized-2)]填写6；[高阶型3(specialized-3)]填写7；[高阶型4(specialized-4)]填写8。</p>
     * @param string $VpcId <p>私有网络Id</p>
     * @param string $SubnetId <p>子网id</p>
     * @param integer $MsgRetentionTime <p>可选。实例日志的最长保留时间，单位分钟，不填默认为1440（1天），可设置范围为1分钟到90天。</p>
     * @param integer $ClusterId <p>创建实例时可以选择集群Id, 该入参表示集群Id</p>
     * @param integer $RenewFlag <p>预付费自动续费标记，0表示默认状态(用户未设置，即初始状态)， 1表示自动续费，2表示明确不自动续费(用户设置)</p>
     * @param string $KafkaVersion <p>CKafka版本号[2.4.1, 2.4.2, 2.8.1, 3.2.3], 默认取值是2.4.1。2.4.1 与 2.4.2 属于同一个版本，传任意一个均可。</p>
     * @param string $SpecificationsType <p>实例类型: [标准版实例]填写 "standard" (默认), [专业版实例]填写 "profession",[高级版实例]填写"premium"</p>
     * @param integer $DiskSize <p>磁盘大小，如果跟控制台规格配比不相符，则无法创建成功。默认取值为500，步长设置为100。可以通过以下链接查看计费规格：https://cloud.tencent.com/document/product/597/122562</p>
     * @param integer $BandWidth <p>实例带宽,默认值为40，单位MB/s; 最小值:20MB/s, 高级版最大值:360MB/s,专业版最大值:100000MB/s  标准版固定带宽规格: 40MB/s, 100MB/s, 150MB/s。可以通过以下链接查看计费规格：https://cloud.tencent.com/document/product/597/11745</p>
     * @param integer $Partition <p>分区大小，如果跟控制台规格配比不相符，则无法创建成功。默认值为800，步长为100。可以通过以下链接查看计费规格：https://cloud.tencent.com/document/product/597/122563</p>
     * @param array $Tags <p>标签</p>
     * @param string $DiskType <p>专业版/高级版实例磁盘类型，标准版实例不需要填写。"CLOUD_SSD"：SSD云硬盘；"CLOUD_BASIC"：高性能云硬盘。不传默认为 "CLOUD_BASIC"</p>
     * @param boolean $MultiZoneFlag <p>是否创建跨可用区实例，当前参数为 true 时，zoneIds必填</p>
     * @param array $ZoneIds <p>可用区列表，购买多可用区实例时为必填项</p>
     * @param integer $PublicNetworkMonthly <p>公网带宽大小，单位 Mbps。默认是没有加上免费 3Mbps 带宽。例如总共需要 3Mbps 公网带宽，此处传 0；总共需要 6Mbps 公网带宽，此处传 3。默认值为 0。需要保证传入参数为 3 的整数倍</p>
     * @param integer $InstanceNum <p>购买实例数量。非必填，默认值为 1。当传入该参数时，会创建多个 instanceName 加后缀区分的实例</p>
     * @param integer $AutoVoucher <p>是否自动选择代金券:1-是;0否。默认为0</p>
     * @param integer $ElasticBandwidthSwitch <p>弹性带宽开关 0不开启  1开启（0默认）</p>
     * @param string $CustomSSLCertId <p>自定义证书Id,仅当SpecificationsType为profession时生效,支持自定义证书能力</p><p>可通过<a href="https://cloud.tencent.com/document/product/400/41673">DescribeCertificateDetail</a>接口获取</p>
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

        if (array_key_exists("CustomSSLCertId",$param) and $param["CustomSSLCertId"] !== null) {
            $this->CustomSSLCertId = $param["CustomSSLCertId"];
        }
    }
}
