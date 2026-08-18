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
namespace TencentCloud\Thpc\V20230321\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 价格
 *
 * @method ItemPrice getSpacePrice() 获取工作空间价格
 * @method void setSpacePrice(ItemPrice $SpacePrice) 设置工作空间价格
 * @method ItemPrice getBandwidthPrice() 获取网络价格
 * @method void setBandwidthPrice(ItemPrice $BandwidthPrice) 设置网络价格
 */
class Price extends AbstractModel
{
    /**
     * @var ItemPrice 工作空间价格
     */
    public $SpacePrice;

    /**
     * @var ItemPrice 网络价格
     */
    public $BandwidthPrice;

    /**
     * @param ItemPrice $SpacePrice 工作空间价格
     * @param ItemPrice $BandwidthPrice 网络价格
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
        if (array_key_exists("SpacePrice",$param) and $param["SpacePrice"] !== null) {
            $this->SpacePrice = new ItemPrice();
            $this->SpacePrice->deserialize($param["SpacePrice"]);
        }

        if (array_key_exists("BandwidthPrice",$param) and $param["BandwidthPrice"] !== null) {
            $this->BandwidthPrice = new ItemPrice();
            $this->BandwidthPrice->deserialize($param["BandwidthPrice"]);
        }
    }
}
