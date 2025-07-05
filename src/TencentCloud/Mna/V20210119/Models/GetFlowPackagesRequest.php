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
 * GetFlowPackages请求参数结构体
 *
 * @method integer getPageNumber() 获取页码，从1开始
 * @method void setPageNumber(integer $PageNumber) 设置页码，从1开始
 * @method integer getPageSize() 获取每页个数
 * @method void setPageSize(integer $PageSize) 设置每页个数
 * @method string getResourceId() 获取流量包的唯一资源ID
 * @method void setResourceId(string $ResourceId) 设置流量包的唯一资源ID
 * @method string getDeviceId() 获取流量包绑定的设备ID
 * @method void setDeviceId(string $DeviceId) 设置流量包绑定的设备ID
 * @method integer getStatus() 获取流量包状态，0：未生效，1：有效期内，2：已过期

 * @method void setStatus(integer $Status) 设置流量包状态，0：未生效，1：有效期内，2：已过期
 */
class GetFlowPackagesRequest extends AbstractModel
{
    /**
     * @var integer 页码，从1开始
     */
    public $PageNumber;

    /**
     * @var integer 每页个数
     */
    public $PageSize;

    /**
     * @var string 流量包的唯一资源ID
     */
    public $ResourceId;

    /**
     * @var string 流量包绑定的设备ID
     */
    public $DeviceId;

    /**
     * @var integer 流量包状态，0：未生效，1：有效期内，2：已过期

     */
    public $Status;

    /**
     * @param integer $PageNumber 页码，从1开始
     * @param integer $PageSize 每页个数
     * @param string $ResourceId 流量包的唯一资源ID
     * @param string $DeviceId 流量包绑定的设备ID
     * @param integer $Status 流量包状态，0：未生效，1：有效期内，2：已过期
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
