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
 * InquireCkafkaPrice请求参数结构体
 *
 * @method string getInstanceType() 获取国内站标准版填写standards2, 专业版填写profession
 * @method void setInstanceType(string $InstanceType) 设置国内站标准版填写standards2, 专业版填写profession
 * @method InstanceChargeParam getInstanceChargeParam() 获取购买/续费付费类型(购买时不填的话, 默认获取购买包年包月一个月的费用)
 * @method void setInstanceChargeParam(InstanceChargeParam $InstanceChargeParam) 设置购买/续费付费类型(购买时不填的话, 默认获取购买包年包月一个月的费用)
 * @method integer getInstanceNum() 获取购买/续费时购买的实例数量(不填时, 默认为1个)
 * @method void setInstanceNum(integer $InstanceNum) 设置购买/续费时购买的实例数量(不填时, 默认为1个)
 * @method integer getBandwidth() 获取实例内网带宽大小, 单位MB/s (购买时必填)
 * @method void setBandwidth(integer $Bandwidth) 设置实例内网带宽大小, 单位MB/s (购买时必填)
 * @method InquiryDiskParam getInquiryDiskParam() 获取实例的硬盘购买类型以及大小 (购买时必填)
 * @method void setInquiryDiskParam(InquiryDiskParam $InquiryDiskParam) 设置实例的硬盘购买类型以及大小 (购买时必填)
 * @method integer getMessageRetention() 获取实例消息保留时间大小, 单位小时 (购买时必填)
 * @method void setMessageRetention(integer $MessageRetention) 设置实例消息保留时间大小, 单位小时 (购买时必填)
 * @method integer getTopic() 获取购买实例topic数, 单位个 (购买时必填)
 * @method void setTopic(integer $Topic) 设置购买实例topic数, 单位个 (购买时必填)
 * @method integer getPartition() 获取购买实例分区数, 单位个 (购买时必填)
 * @method void setPartition(integer $Partition) 设置购买实例分区数, 单位个 (购买时必填)
 * @method array getZoneIds() 获取购买地域, 可通过查看DescribeCkafkaZone这个接口获取ZoneId
 * @method void setZoneIds(array $ZoneIds) 设置购买地域, 可通过查看DescribeCkafkaZone这个接口获取ZoneId
 * @method string getCategoryAction() 获取标记操作, 新购填写purchase, 续费填写renew, (不填时, 默认为purchase)
 * @method void setCategoryAction(string $CategoryAction) 设置标记操作, 新购填写purchase, 续费填写renew, (不填时, 默认为purchase)
 * @method string getBillType() 获取国内站购买的版本, sv_ckafka_instance_s2_1(入门型), sv_ckafka_instance_s2_2(标准版), sv_ckafka_instance_s2_3(进阶型), 如果instanceType为standards2, 但该参数为空, 则默认值为sv_ckafka_instance_s2_1
 * @method void setBillType(string $BillType) 设置国内站购买的版本, sv_ckafka_instance_s2_1(入门型), sv_ckafka_instance_s2_2(标准版), sv_ckafka_instance_s2_3(进阶型), 如果instanceType为standards2, 但该参数为空, 则默认值为sv_ckafka_instance_s2_1
 * @method InquiryPublicNetworkParam getPublicNetworkParam() 获取公网带宽计费模式, 目前只有专业版支持公网带宽 (购买公网带宽时必填)
 * @method void setPublicNetworkParam(InquiryPublicNetworkParam $PublicNetworkParam) 设置公网带宽计费模式, 目前只有专业版支持公网带宽 (购买公网带宽时必填)
 * @method string getInstanceId() 获取续费时的实例id, 续费时填写
 * @method void setInstanceId(string $InstanceId) 设置续费时的实例id, 续费时填写
 */
class InquireCkafkaPriceRequest extends AbstractModel
{
    /**
     * @var string 国内站标准版填写standards2, 专业版填写profession
     */
    public $InstanceType;

    /**
     * @var InstanceChargeParam 购买/续费付费类型(购买时不填的话, 默认获取购买包年包月一个月的费用)
     */
    public $InstanceChargeParam;

    /**
     * @var integer 购买/续费时购买的实例数量(不填时, 默认为1个)
     */
    public $InstanceNum;

    /**
     * @var integer 实例内网带宽大小, 单位MB/s (购买时必填)
     */
    public $Bandwidth;

    /**
     * @var InquiryDiskParam 实例的硬盘购买类型以及大小 (购买时必填)
     */
    public $InquiryDiskParam;

    /**
     * @var integer 实例消息保留时间大小, 单位小时 (购买时必填)
     */
    public $MessageRetention;

    /**
     * @var integer 购买实例topic数, 单位个 (购买时必填)
     */
    public $Topic;

    /**
     * @var integer 购买实例分区数, 单位个 (购买时必填)
     */
    public $Partition;

    /**
     * @var array 购买地域, 可通过查看DescribeCkafkaZone这个接口获取ZoneId
     */
    public $ZoneIds;

    /**
     * @var string 标记操作, 新购填写purchase, 续费填写renew, (不填时, 默认为purchase)
     */
    public $CategoryAction;

    /**
     * @var string 国内站购买的版本, sv_ckafka_instance_s2_1(入门型), sv_ckafka_instance_s2_2(标准版), sv_ckafka_instance_s2_3(进阶型), 如果instanceType为standards2, 但该参数为空, 则默认值为sv_ckafka_instance_s2_1
     */
    public $BillType;

    /**
     * @var InquiryPublicNetworkParam 公网带宽计费模式, 目前只有专业版支持公网带宽 (购买公网带宽时必填)
     */
    public $PublicNetworkParam;

    /**
     * @var string 续费时的实例id, 续费时填写
     */
    public $InstanceId;

    /**
     * @param string $InstanceType 国内站标准版填写standards2, 专业版填写profession
     * @param InstanceChargeParam $InstanceChargeParam 购买/续费付费类型(购买时不填的话, 默认获取购买包年包月一个月的费用)
     * @param integer $InstanceNum 购买/续费时购买的实例数量(不填时, 默认为1个)
     * @param integer $Bandwidth 实例内网带宽大小, 单位MB/s (购买时必填)
     * @param InquiryDiskParam $InquiryDiskParam 实例的硬盘购买类型以及大小 (购买时必填)
     * @param integer $MessageRetention 实例消息保留时间大小, 单位小时 (购买时必填)
     * @param integer $Topic 购买实例topic数, 单位个 (购买时必填)
     * @param integer $Partition 购买实例分区数, 单位个 (购买时必填)
     * @param array $ZoneIds 购买地域, 可通过查看DescribeCkafkaZone这个接口获取ZoneId
     * @param string $CategoryAction 标记操作, 新购填写purchase, 续费填写renew, (不填时, 默认为purchase)
     * @param string $BillType 国内站购买的版本, sv_ckafka_instance_s2_1(入门型), sv_ckafka_instance_s2_2(标准版), sv_ckafka_instance_s2_3(进阶型), 如果instanceType为standards2, 但该参数为空, 则默认值为sv_ckafka_instance_s2_1
     * @param InquiryPublicNetworkParam $PublicNetworkParam 公网带宽计费模式, 目前只有专业版支持公网带宽 (购买公网带宽时必填)
     * @param string $InstanceId 续费时的实例id, 续费时填写
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

        if (array_key_exists("InstanceChargeParam",$param) and $param["InstanceChargeParam"] !== null) {
            $this->InstanceChargeParam = new InstanceChargeParam();
            $this->InstanceChargeParam->deserialize($param["InstanceChargeParam"]);
        }

        if (array_key_exists("InstanceNum",$param) and $param["InstanceNum"] !== null) {
            $this->InstanceNum = $param["InstanceNum"];
        }

        if (array_key_exists("Bandwidth",$param) and $param["Bandwidth"] !== null) {
            $this->Bandwidth = $param["Bandwidth"];
        }

        if (array_key_exists("InquiryDiskParam",$param) and $param["InquiryDiskParam"] !== null) {
            $this->InquiryDiskParam = new InquiryDiskParam();
            $this->InquiryDiskParam->deserialize($param["InquiryDiskParam"]);
        }

        if (array_key_exists("MessageRetention",$param) and $param["MessageRetention"] !== null) {
            $this->MessageRetention = $param["MessageRetention"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("Partition",$param) and $param["Partition"] !== null) {
            $this->Partition = $param["Partition"];
        }

        if (array_key_exists("ZoneIds",$param) and $param["ZoneIds"] !== null) {
            $this->ZoneIds = $param["ZoneIds"];
        }

        if (array_key_exists("CategoryAction",$param) and $param["CategoryAction"] !== null) {
            $this->CategoryAction = $param["CategoryAction"];
        }

        if (array_key_exists("BillType",$param) and $param["BillType"] !== null) {
            $this->BillType = $param["BillType"];
        }

        if (array_key_exists("PublicNetworkParam",$param) and $param["PublicNetworkParam"] !== null) {
            $this->PublicNetworkParam = new InquiryPublicNetworkParam();
            $this->PublicNetworkParam->deserialize($param["PublicNetworkParam"]);
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }
    }
}
