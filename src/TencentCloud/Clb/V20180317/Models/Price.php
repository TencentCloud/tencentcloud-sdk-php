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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 表示负载均衡的价格
 *
 * @method ItemPrice getInstancePrice() 获取描述了实例价格。
 * @method void setInstancePrice(ItemPrice $InstancePrice) 设置描述了实例价格。
 * @method ItemPrice getBandwidthPrice() 获取描述了网络价格。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setBandwidthPrice(ItemPrice $BandwidthPrice) 设置描述了网络价格。
注意：此字段可能返回 null，表示取不到有效值。
 * @method ItemPrice getLcuPrice() 获取描述了lcu价格。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLcuPrice(ItemPrice $LcuPrice) 设置描述了lcu价格。
注意：此字段可能返回 null，表示取不到有效值。
 */
class Price extends AbstractModel
{
    /**
     * @var ItemPrice 描述了实例价格。
     */
    public $InstancePrice;

    /**
     * @var ItemPrice 描述了网络价格。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $BandwidthPrice;

    /**
     * @var ItemPrice 描述了lcu价格。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LcuPrice;

    /**
     * @param ItemPrice $InstancePrice 描述了实例价格。
     * @param ItemPrice $BandwidthPrice 描述了网络价格。
注意：此字段可能返回 null，表示取不到有效值。
     * @param ItemPrice $LcuPrice 描述了lcu价格。
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
        if (array_key_exists("InstancePrice",$param) and $param["InstancePrice"] !== null) {
            $this->InstancePrice = new ItemPrice();
            $this->InstancePrice->deserialize($param["InstancePrice"]);
        }

        if (array_key_exists("BandwidthPrice",$param) and $param["BandwidthPrice"] !== null) {
            $this->BandwidthPrice = new ItemPrice();
            $this->BandwidthPrice->deserialize($param["BandwidthPrice"]);
        }

        if (array_key_exists("LcuPrice",$param) and $param["LcuPrice"] !== null) {
            $this->LcuPrice = new ItemPrice();
            $this->LcuPrice->deserialize($param["LcuPrice"]);
        }
    }
}
