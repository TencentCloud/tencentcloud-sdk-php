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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInstance请求参数结构体
 *
 * @method string getInstanceType() 获取实例类型，枚举值如下：

- EXPERIMENT：体验版

- BASIC：基础版

- PRO：专业版

- PLATINUM：铂金版
 * @method void setInstanceType(string $InstanceType) 设置实例类型，枚举值如下：

- EXPERIMENT：体验版

- BASIC：基础版

- PRO：专业版

- PLATINUM：铂金版
 * @method string getName() 获取集群名称，不能为空， 3-64个字符，只能包含数字、字母、“-”和“_”
 * @method void setName(string $Name) 设置集群名称，不能为空， 3-64个字符，只能包含数字、字母、“-”和“_”
 * @method string getSkuCode() 获取商品规格，从 [DescribeProductSKUs](https://cloud.tencent.com/document/api/1493/107676) 接口中的 [ProductSKU](https://cloud.tencent.com/document/api/1493/96031#ProductSKU) 出参获得。
 * @method void setSkuCode(string $SkuCode) 设置商品规格，从 [DescribeProductSKUs](https://cloud.tencent.com/document/api/1493/107676) 接口中的 [ProductSKU](https://cloud.tencent.com/document/api/1493/96031#ProductSKU) 出参获得。
 * @method array getVpcList() 获取集群绑定的VPC信息
 * @method void setVpcList(array $VpcList) 设置集群绑定的VPC信息
 * @method string getRemark() 获取备注信息
 * @method void setRemark(string $Remark) 设置备注信息
 * @method array getTagList() 获取标签列表
 * @method void setTagList(array $TagList) 设置标签列表
 * @method boolean getEnablePublic() 获取是否开启公网，默认值为false表示不开启
 * @method void setEnablePublic(boolean $EnablePublic) 设置是否开启公网，默认值为false表示不开启
 * @method boolean getBillingFlow() 获取公网是否按流量计费，默认值为false表示不按流量计费
 * @method void setBillingFlow(boolean $BillingFlow) 设置公网是否按流量计费，默认值为false表示不按流量计费
 * @method integer getBandwidth() 获取公网带宽（单位：兆），默认值为0。如果开启公网，该字段必须为大于0的正整数
 * @method void setBandwidth(integer $Bandwidth) 设置公网带宽（单位：兆），默认值为0。如果开启公网，该字段必须为大于0的正整数
 * @method array getIpRules() 获取公网访问白名单，不填表示拒绝所有 IP 访问
 * @method void setIpRules(array $IpRules) 设置公网访问白名单，不填表示拒绝所有 IP 访问
 * @method integer getMessageRetention() 获取消息保留时长（单位：小时），取值范围参考 [DescribeProductSKUs](https://cloud.tencent.com/document/api/1493/107676) 接口中的 [ProductSKU](https://cloud.tencent.com/document/api/1493/96031#ProductSKU) 出参：

- 默认值：DefaultRetention 参数
- 最小值：RetentionLowerLimit 参数
- 最大值：RetentionUpperLimit 参数
 * @method void setMessageRetention(integer $MessageRetention) 设置消息保留时长（单位：小时），取值范围参考 [DescribeProductSKUs](https://cloud.tencent.com/document/api/1493/107676) 接口中的 [ProductSKU](https://cloud.tencent.com/document/api/1493/96031#ProductSKU) 出参：

- 默认值：DefaultRetention 参数
- 最小值：RetentionLowerLimit 参数
- 最大值：RetentionUpperLimit 参数
 * @method integer getPayMode() 获取付费模式（0: 后付费；1: 预付费），默认值为0
 * @method void setPayMode(integer $PayMode) 设置付费模式（0: 后付费；1: 预付费），默认值为0
 * @method integer getRenewFlag() 获取预付费集群是否自动续费（0: 不自动续费；1: 自动续费），默认值为0
 * @method void setRenewFlag(integer $RenewFlag) 设置预付费集群是否自动续费（0: 不自动续费；1: 自动续费），默认值为0
 * @method integer getTimeSpan() 获取预付费集群的购买时长（单位：月），取值范围为1～60，默认值为1
 * @method void setTimeSpan(integer $TimeSpan) 设置预付费集群的购买时长（单位：月），取值范围为1～60，默认值为1
 * @method integer getMaxTopicNum() 获取最大可创建主题数，从 [DescribeProductSKUs](https://cloud.tencent.com/document/api/1493/107676) 接口中的 [ProductSKU](https://cloud.tencent.com/document/api/1493/96031#ProductSKU) 出参：

- 默认值和最小值：TopicNumLimit 参数
- 最大值：TopicNumUpperLimit 参数
 * @method void setMaxTopicNum(integer $MaxTopicNum) 设置最大可创建主题数，从 [DescribeProductSKUs](https://cloud.tencent.com/document/api/1493/107676) 接口中的 [ProductSKU](https://cloud.tencent.com/document/api/1493/96031#ProductSKU) 出参：

- 默认值和最小值：TopicNumLimit 参数
- 最大值：TopicNumUpperLimit 参数
 * @method array getZoneIds() 获取部署可用区列表，从 [DescribeZones](https://cloud.tencent.com/document/product/1596/77929) 接口返回中的 [ZoneInfo](https://cloud.tencent.com/document/api/1596/77932#ZoneInfo) 数据结构中获得。
 * @method void setZoneIds(array $ZoneIds) 设置部署可用区列表，从 [DescribeZones](https://cloud.tencent.com/document/product/1596/77929) 接口返回中的 [ZoneInfo](https://cloud.tencent.com/document/api/1596/77932#ZoneInfo) 数据结构中获得。
 */
class CreateInstanceRequest extends AbstractModel
{
    /**
     * @var string 实例类型，枚举值如下：

- EXPERIMENT：体验版

- BASIC：基础版

- PRO：专业版

- PLATINUM：铂金版
     */
    public $InstanceType;

    /**
     * @var string 集群名称，不能为空， 3-64个字符，只能包含数字、字母、“-”和“_”
     */
    public $Name;

    /**
     * @var string 商品规格，从 [DescribeProductSKUs](https://cloud.tencent.com/document/api/1493/107676) 接口中的 [ProductSKU](https://cloud.tencent.com/document/api/1493/96031#ProductSKU) 出参获得。
     */
    public $SkuCode;

    /**
     * @var array 集群绑定的VPC信息
     */
    public $VpcList;

    /**
     * @var string 备注信息
     */
    public $Remark;

    /**
     * @var array 标签列表
     */
    public $TagList;

    /**
     * @var boolean 是否开启公网，默认值为false表示不开启
     */
    public $EnablePublic;

    /**
     * @var boolean 公网是否按流量计费，默认值为false表示不按流量计费
     */
    public $BillingFlow;

    /**
     * @var integer 公网带宽（单位：兆），默认值为0。如果开启公网，该字段必须为大于0的正整数
     */
    public $Bandwidth;

    /**
     * @var array 公网访问白名单，不填表示拒绝所有 IP 访问
     */
    public $IpRules;

    /**
     * @var integer 消息保留时长（单位：小时），取值范围参考 [DescribeProductSKUs](https://cloud.tencent.com/document/api/1493/107676) 接口中的 [ProductSKU](https://cloud.tencent.com/document/api/1493/96031#ProductSKU) 出参：

- 默认值：DefaultRetention 参数
- 最小值：RetentionLowerLimit 参数
- 最大值：RetentionUpperLimit 参数
     */
    public $MessageRetention;

    /**
     * @var integer 付费模式（0: 后付费；1: 预付费），默认值为0
     */
    public $PayMode;

    /**
     * @var integer 预付费集群是否自动续费（0: 不自动续费；1: 自动续费），默认值为0
     */
    public $RenewFlag;

    /**
     * @var integer 预付费集群的购买时长（单位：月），取值范围为1～60，默认值为1
     */
    public $TimeSpan;

    /**
     * @var integer 最大可创建主题数，从 [DescribeProductSKUs](https://cloud.tencent.com/document/api/1493/107676) 接口中的 [ProductSKU](https://cloud.tencent.com/document/api/1493/96031#ProductSKU) 出参：

- 默认值和最小值：TopicNumLimit 参数
- 最大值：TopicNumUpperLimit 参数
     */
    public $MaxTopicNum;

    /**
     * @var array 部署可用区列表，从 [DescribeZones](https://cloud.tencent.com/document/product/1596/77929) 接口返回中的 [ZoneInfo](https://cloud.tencent.com/document/api/1596/77932#ZoneInfo) 数据结构中获得。
     */
    public $ZoneIds;

    /**
     * @param string $InstanceType 实例类型，枚举值如下：

- EXPERIMENT：体验版

- BASIC：基础版

- PRO：专业版

- PLATINUM：铂金版
     * @param string $Name 集群名称，不能为空， 3-64个字符，只能包含数字、字母、“-”和“_”
     * @param string $SkuCode 商品规格，从 [DescribeProductSKUs](https://cloud.tencent.com/document/api/1493/107676) 接口中的 [ProductSKU](https://cloud.tencent.com/document/api/1493/96031#ProductSKU) 出参获得。
     * @param array $VpcList 集群绑定的VPC信息
     * @param string $Remark 备注信息
     * @param array $TagList 标签列表
     * @param boolean $EnablePublic 是否开启公网，默认值为false表示不开启
     * @param boolean $BillingFlow 公网是否按流量计费，默认值为false表示不按流量计费
     * @param integer $Bandwidth 公网带宽（单位：兆），默认值为0。如果开启公网，该字段必须为大于0的正整数
     * @param array $IpRules 公网访问白名单，不填表示拒绝所有 IP 访问
     * @param integer $MessageRetention 消息保留时长（单位：小时），取值范围参考 [DescribeProductSKUs](https://cloud.tencent.com/document/api/1493/107676) 接口中的 [ProductSKU](https://cloud.tencent.com/document/api/1493/96031#ProductSKU) 出参：

- 默认值：DefaultRetention 参数
- 最小值：RetentionLowerLimit 参数
- 最大值：RetentionUpperLimit 参数
     * @param integer $PayMode 付费模式（0: 后付费；1: 预付费），默认值为0
     * @param integer $RenewFlag 预付费集群是否自动续费（0: 不自动续费；1: 自动续费），默认值为0
     * @param integer $TimeSpan 预付费集群的购买时长（单位：月），取值范围为1～60，默认值为1
     * @param integer $MaxTopicNum 最大可创建主题数，从 [DescribeProductSKUs](https://cloud.tencent.com/document/api/1493/107676) 接口中的 [ProductSKU](https://cloud.tencent.com/document/api/1493/96031#ProductSKU) 出参：

- 默认值和最小值：TopicNumLimit 参数
- 最大值：TopicNumUpperLimit 参数
     * @param array $ZoneIds 部署可用区列表，从 [DescribeZones](https://cloud.tencent.com/document/product/1596/77929) 接口返回中的 [ZoneInfo](https://cloud.tencent.com/document/api/1596/77932#ZoneInfo) 数据结构中获得。
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
        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("SkuCode",$param) and $param["SkuCode"] !== null) {
            $this->SkuCode = $param["SkuCode"];
        }

        if (array_key_exists("VpcList",$param) and $param["VpcList"] !== null) {
            $this->VpcList = [];
            foreach ($param["VpcList"] as $key => $value){
                $obj = new VpcInfo();
                $obj->deserialize($value);
                array_push($this->VpcList, $obj);
            }
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = [];
            foreach ($param["TagList"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->TagList, $obj);
            }
        }

        if (array_key_exists("EnablePublic",$param) and $param["EnablePublic"] !== null) {
            $this->EnablePublic = $param["EnablePublic"];
        }

        if (array_key_exists("BillingFlow",$param) and $param["BillingFlow"] !== null) {
            $this->BillingFlow = $param["BillingFlow"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("IpRules",$param) and $param["IpRules"] !== null) {
            $this->IpRules = [];
            foreach ($param["IpRules"] as $key => $value){
                $obj = new IpRule();
                $obj->deserialize($value);
                array_push($this->IpRules, $obj);
            }
        }

        if (array_key_exists("MessageRetention",$param) and $param["MessageRetention"] !== null) {
            $this->MessageRetention = $param["MessageRetention"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("RenewFlag",$param) and $param["RenewFlag"] !== null) {
            $this->RenewFlag = $param["RenewFlag"];
        }

        if (array_key_exists("TimeSpan",$param) and $param["TimeSpan"] !== null) {
            $this->TimeSpan = $param["TimeSpan"];
        }

        if (array_key_exists("MaxTopicNum",$param) and $param["MaxTopicNum"] !== null) {
            $this->MaxTopicNum = $param["MaxTopicNum"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }
    }
}
