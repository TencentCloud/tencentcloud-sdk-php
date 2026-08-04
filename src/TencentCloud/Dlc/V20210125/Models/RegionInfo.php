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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 可售卖地域信息
 *
 * @method string getRegionCode() 获取<p>地域编码，如 ap-chongqing</p>
 * @method void setRegionCode(string $RegionCode) 设置<p>地域编码，如 ap-chongqing</p>
 * @method string getRegionName() 获取<p>地域名称，如 重庆</p>
 * @method void setRegionName(string $RegionName) 设置<p>地域名称，如 重庆</p>
 * @method string getStatus() 获取<p>地域状态：AVAILABLE-可用，UNAVAILABLE-不可用</p>
 * @method void setStatus(string $Status) 设置<p>地域状态：AVAILABLE-可用，UNAVAILABLE-不可用</p>
 */
class RegionInfo extends AbstractModel
{
    /**
     * @var string <p>地域编码，如 ap-chongqing</p>
     */
    public $RegionCode;

    /**
     * @var string <p>地域名称，如 重庆</p>
     */
    public $RegionName;

    /**
     * @var string <p>地域状态：AVAILABLE-可用，UNAVAILABLE-不可用</p>
     */
    public $Status;

    /**
     * @param string $RegionCode <p>地域编码，如 ap-chongqing</p>
     * @param string $RegionName <p>地域名称，如 重庆</p>
     * @param string $Status <p>地域状态：AVAILABLE-可用，UNAVAILABLE-不可用</p>
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
        if (array_key_exists("RegionCode",$param) and $param["RegionCode"] !== null) {
            $this->RegionCode = $param["RegionCode"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
