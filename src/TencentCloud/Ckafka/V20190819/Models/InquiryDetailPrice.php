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
 * 详细类别的价格
 *
 * @method InquiryBasePrice getBandwidthPrice() 获取额外内网带宽价格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBandwidthPrice(InquiryBasePrice $BandwidthPrice) 设置额外内网带宽价格
注意：此字段可能返回 null，表示取不到有效值。
 * @method InquiryBasePrice getDiskPrice() 获取硬盘价格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDiskPrice(InquiryBasePrice $DiskPrice) 设置硬盘价格
注意：此字段可能返回 null，表示取不到有效值。
 * @method InquiryBasePrice getPartitionPrice() 获取额外分区价格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPartitionPrice(InquiryBasePrice $PartitionPrice) 设置额外分区价格
注意：此字段可能返回 null，表示取不到有效值。
 * @method InquiryBasePrice getTopicPrice() 获取额外Topic价格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTopicPrice(InquiryBasePrice $TopicPrice) 设置额外Topic价格
注意：此字段可能返回 null，表示取不到有效值。
 * @method InquiryBasePrice getInstanceTypePrice() 获取实例套餐价格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInstanceTypePrice(InquiryBasePrice $InstanceTypePrice) 设置实例套餐价格
注意：此字段可能返回 null，表示取不到有效值。
 */
class InquiryDetailPrice extends AbstractModel
{
    /**
     * @var InquiryBasePrice 额外内网带宽价格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BandwidthPrice;

    /**
     * @var InquiryBasePrice 硬盘价格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DiskPrice;

    /**
     * @var InquiryBasePrice 额外分区价格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PartitionPrice;

    /**
     * @var InquiryBasePrice 额外Topic价格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TopicPrice;

    /**
     * @var InquiryBasePrice 实例套餐价格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InstanceTypePrice;

    /**
     * @param InquiryBasePrice $BandwidthPrice 额外内网带宽价格
注意：此字段可能返回 null，表示取不到有效值。
     * @param InquiryBasePrice $DiskPrice 硬盘价格
注意：此字段可能返回 null，表示取不到有效值。
     * @param InquiryBasePrice $PartitionPrice 额外分区价格
注意：此字段可能返回 null，表示取不到有效值。
     * @param InquiryBasePrice $TopicPrice 额外Topic价格
注意：此字段可能返回 null，表示取不到有效值。
     * @param InquiryBasePrice $InstanceTypePrice 实例套餐价格
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
        if (array_key_exists("BandwidthPrice",$param) and $param["BandwidthPrice"] !== null) {
            $this->BandwidthPrice = new InquiryBasePrice();
            $this->BandwidthPrice->deserialize($param["BandwidthPrice"]);
        }

        if (array_key_exists("DiskPrice",$param) and $param["DiskPrice"] !== null) {
            $this->DiskPrice = new InquiryBasePrice();
            $this->DiskPrice->deserialize($param["DiskPrice"]);
        }

        if (array_key_exists("PartitionPrice",$param) and $param["PartitionPrice"] !== null) {
            $this->PartitionPrice = new InquiryBasePrice();
            $this->PartitionPrice->deserialize($param["PartitionPrice"]);
        }

        if (array_key_exists("TopicPrice",$param) and $param["TopicPrice"] !== null) {
            $this->TopicPrice = new InquiryBasePrice();
            $this->TopicPrice->deserialize($param["TopicPrice"]);
        }

        if (array_key_exists("InstanceTypePrice",$param) and $param["InstanceTypePrice"] !== null) {
            $this->InstanceTypePrice = new InquiryBasePrice();
            $this->InstanceTypePrice->deserialize($param["InstanceTypePrice"]);
        }
    }
}
