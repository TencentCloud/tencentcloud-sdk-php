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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDeviceAccessRegions请求参数结构体
 *
 * @method array getDeviceIds() 获取<p>设备ID</p>
 * @method void setDeviceIds(array $DeviceIds) 设置<p>设备ID</p>
 * @method array getAllowedRegions() 获取<p>接入地域</p>
 * @method void setAllowedRegions(array $AllowedRegions) 设置<p>接入地域</p>
 */
class ModifyDeviceAccessRegionsRequest extends AbstractModel
{
    /**
     * @var array <p>设备ID</p>
     */
    public $DeviceIds;

    /**
     * @var array <p>接入地域</p>
     */
    public $AllowedRegions;

    /**
     * @param array $DeviceIds <p>设备ID</p>
     * @param array $AllowedRegions <p>接入地域</p>
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
        if (array_key_exists("DeviceIds",$param) and $param["DeviceIds"] !== null) {
            $this->DeviceIds = $param["DeviceIds"];
        }

        if (array_key_exists("AllowedRegions",$param) and $param["AllowedRegions"] !== null) {
            $this->AllowedRegions = $param["AllowedRegions"];
        }
    }
}
