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
namespace TencentCloud\Vpc\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyBandwidthPackageBandwidth请求参数结构体
 *
 * @method integer getInternetMaxBandwidth() 获取带宽包限速大小。单位：Mbps。
 * @method void setInternetMaxBandwidth(integer $InternetMaxBandwidth) 设置带宽包限速大小。单位：Mbps。
 * @method string getBandwidthPackageId() 获取共享带宽包ID
 * @method void setBandwidthPackageId(string $BandwidthPackageId) 设置共享带宽包ID
 */
class ModifyBandwidthPackageBandwidthRequest extends AbstractModel
{
    /**
     * @var integer 带宽包限速大小。单位：Mbps。
     */
    public $InternetMaxBandwidth;

    /**
     * @var string 共享带宽包ID
     */
    public $BandwidthPackageId;

    /**
     * @param integer $InternetMaxBandwidth 带宽包限速大小。单位：Mbps。
     * @param string $BandwidthPackageId 共享带宽包ID
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
        if (array_key_exists("InternetMaxBandwidth",$param) and $param["InternetMaxBandwidth"] !== null) {
            $this->InternetMaxBandwidth = $param["InternetMaxBandwidth"];
        }

        if (array_key_exists("BandwidthPackageId",$param) and $param["BandwidthPackageId"] !== null) {
            $this->BandwidthPackageId = $param["BandwidthPackageId"];
        }
    }
}
