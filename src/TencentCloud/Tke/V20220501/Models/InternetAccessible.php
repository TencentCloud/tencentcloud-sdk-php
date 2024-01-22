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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 公网带宽
 *
 * @method integer getMaxBandwidthOut() 获取带宽
 * @method void setMaxBandwidthOut(integer $MaxBandwidthOut) 设置带宽
 * @method string getChargeType() 获取网络计费方式
 * @method void setChargeType(string $ChargeType) 设置网络计费方式
 * @method string getBandwidthPackageId() 获取带宽包 ID
 * @method void setBandwidthPackageId(string $BandwidthPackageId) 设置带宽包 ID
 */
class InternetAccessible extends AbstractModel
{
    /**
     * @var integer 带宽
     */
    public $MaxBandwidthOut;

    /**
     * @var string 网络计费方式
     */
    public $ChargeType;

    /**
     * @var string 带宽包 ID
     */
    public $BandwidthPackageId;

    /**
     * @param integer $MaxBandwidthOut 带宽
     * @param string $ChargeType 网络计费方式
     * @param string $BandwidthPackageId 带宽包 ID
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
        if (array_key_exists("MaxBandwidthOut",$param) and $param["MaxBandwidthOut"] !== null) {
            $this->MaxBandwidthOut = $param["MaxBandwidthOut"];
        }

        if (array_key_exists("ChargeType",$param) and $param["ChargeType"] !== null) {
            $this->ChargeType = $param["ChargeType"];
        }

        if (array_key_exists("BandwidthPackageId",$param) and $param["BandwidthPackageId"] !== null) {
            $this->BandwidthPackageId = $param["BandwidthPackageId"];
        }
    }
}
