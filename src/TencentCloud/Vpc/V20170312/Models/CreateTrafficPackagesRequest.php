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
 * CreateTrafficPackages请求参数结构体
 *
 * @method integer getTrafficAmount() 获取流量包规格。可选值:
<li>10: 10GB流量，有效期一个月</li>
<li>50: 50GB流量，有效期一个月</li>
<li>512: 512GB流量，有效期一个月</li>
<li>1024: 1TB流量，有效期一个月</li>
<li>5120: 5TB流量，有效期一个月</li>
<li>51200: 50TB流量，有效期一个月</li>
<li>60: 60GB流量，有效期半年</li>
<li>300: 300GB流量，有效期半年</li>
<li>600: 600GB流量，有效期半年</li>
<li>3072: 3TB流量，有效期半年</li>
<li>6144: 6TB流量，有效期半年</li>
<li>30720: 30TB流量，有效期半年</li>
<li>61440: 60TB流量，有效期半年</li>
<li>307200: 300TB流量，有效期半年</li>
 * @method void setTrafficAmount(integer $TrafficAmount) 设置流量包规格。可选值:
<li>10: 10GB流量，有效期一个月</li>
<li>50: 50GB流量，有效期一个月</li>
<li>512: 512GB流量，有效期一个月</li>
<li>1024: 1TB流量，有效期一个月</li>
<li>5120: 5TB流量，有效期一个月</li>
<li>51200: 50TB流量，有效期一个月</li>
<li>60: 60GB流量，有效期半年</li>
<li>300: 300GB流量，有效期半年</li>
<li>600: 600GB流量，有效期半年</li>
<li>3072: 3TB流量，有效期半年</li>
<li>6144: 6TB流量，有效期半年</li>
<li>30720: 30TB流量，有效期半年</li>
<li>61440: 60TB流量，有效期半年</li>
<li>307200: 300TB流量，有效期半年</li>
 * @method integer getTrafficPackageCount() 获取流量包数量，可选范围 1~20。
 * @method void setTrafficPackageCount(integer $TrafficPackageCount) 设置流量包数量，可选范围 1~20。
 */
class CreateTrafficPackagesRequest extends AbstractModel
{
    /**
     * @var integer 流量包规格。可选值:
<li>10: 10GB流量，有效期一个月</li>
<li>50: 50GB流量，有效期一个月</li>
<li>512: 512GB流量，有效期一个月</li>
<li>1024: 1TB流量，有效期一个月</li>
<li>5120: 5TB流量，有效期一个月</li>
<li>51200: 50TB流量，有效期一个月</li>
<li>60: 60GB流量，有效期半年</li>
<li>300: 300GB流量，有效期半年</li>
<li>600: 600GB流量，有效期半年</li>
<li>3072: 3TB流量，有效期半年</li>
<li>6144: 6TB流量，有效期半年</li>
<li>30720: 30TB流量，有效期半年</li>
<li>61440: 60TB流量，有效期半年</li>
<li>307200: 300TB流量，有效期半年</li>
     */
    public $TrafficAmount;

    /**
     * @var integer 流量包数量，可选范围 1~20。
     */
    public $TrafficPackageCount;

    /**
     * @param integer $TrafficAmount 流量包规格。可选值:
<li>10: 10GB流量，有效期一个月</li>
<li>50: 50GB流量，有效期一个月</li>
<li>512: 512GB流量，有效期一个月</li>
<li>1024: 1TB流量，有效期一个月</li>
<li>5120: 5TB流量，有效期一个月</li>
<li>51200: 50TB流量，有效期一个月</li>
<li>60: 60GB流量，有效期半年</li>
<li>300: 300GB流量，有效期半年</li>
<li>600: 600GB流量，有效期半年</li>
<li>3072: 3TB流量，有效期半年</li>
<li>6144: 6TB流量，有效期半年</li>
<li>30720: 30TB流量，有效期半年</li>
<li>61440: 60TB流量，有效期半年</li>
<li>307200: 300TB流量，有效期半年</li>
     * @param integer $TrafficPackageCount 流量包数量，可选范围 1~20。
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
        if (array_key_exists("TrafficAmount",$param) and $param["TrafficAmount"] !== null) {
            $this->TrafficAmount = $param["TrafficAmount"];
        }

        if (array_key_exists("TrafficPackageCount",$param) and $param["TrafficPackageCount"] !== null) {
            $this->TrafficPackageCount = $param["TrafficPackageCount"];
        }
    }
}
