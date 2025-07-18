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
namespace TencentCloud\Bm\V20180423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeHostedDeviceOutBandInfo请求参数结构体
 *
 * @method array getInstanceIds() 获取托管设备的唯一ID数组,数组个数不超过20
 * @method void setInstanceIds(array $InstanceIds) 设置托管设备的唯一ID数组,数组个数不超过20
 * @method string getZone() 获取可用区ID
 * @method void setZone(string $Zone) 设置可用区ID
 */
class DescribeHostedDeviceOutBandInfoRequest extends AbstractModel
{
    /**
     * @var array 托管设备的唯一ID数组,数组个数不超过20
     */
    public $InstanceIds;

    /**
     * @var string 可用区ID
     */
    public $Zone;

    /**
     * @param array $InstanceIds 托管设备的唯一ID数组,数组个数不超过20
     * @param string $Zone 可用区ID
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
        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }
    }
}
