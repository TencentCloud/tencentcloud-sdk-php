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
 * @method integer getPageNumber() 获取<p>页码，从1开始</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页码，从1开始</p>
 * @method integer getPageSize() 获取<p>每页个数</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页个数</p>
 * @method string getResourceId() 获取<p>流量包的唯一资源ID</p>
 * @method void setResourceId(string $ResourceId) 设置<p>流量包的唯一资源ID</p>
 * @method string getDeviceId() 获取<p>流量包绑定的设备ID</p>
 * @method void setDeviceId(string $DeviceId) 设置<p>流量包绑定的设备ID</p>
 * @method integer getStatus() 获取<p>流量包状态，0：未生效，1：有效期内，2：已过期</p>
 * @method void setStatus(integer $Status) 设置<p>流量包状态，0：未生效，1：有效期内，2：已过期</p>
 * @method string getActiveTimeStart() 获取<p>生效时间在此时间之后</p>
 * @method void setActiveTimeStart(string $ActiveTimeStart) 设置<p>生效时间在此时间之后</p>
 * @method string getActiveTimeEnd() 获取<p>生效时间在此时间之前</p>
 * @method void setActiveTimeEnd(string $ActiveTimeEnd) 设置<p>生效时间在此时间之前</p>
 */
class GetFlowPackagesRequest extends AbstractModel
{
    /**
     * @var integer <p>页码，从1开始</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>每页个数</p>
     */
    public $PageSize;

    /**
     * @var string <p>流量包的唯一资源ID</p>
     */
    public $ResourceId;

    /**
     * @var string <p>流量包绑定的设备ID</p>
     */
    public $DeviceId;

    /**
     * @var integer <p>流量包状态，0：未生效，1：有效期内，2：已过期</p>
     */
    public $Status;

    /**
     * @var string <p>生效时间在此时间之后</p>
     */
    public $ActiveTimeStart;

    /**
     * @var string <p>生效时间在此时间之前</p>
     */
    public $ActiveTimeEnd;

    /**
     * @param integer $PageNumber <p>页码，从1开始</p>
     * @param integer $PageSize <p>每页个数</p>
     * @param string $ResourceId <p>流量包的唯一资源ID</p>
     * @param string $DeviceId <p>流量包绑定的设备ID</p>
     * @param integer $Status <p>流量包状态，0：未生效，1：有效期内，2：已过期</p>
     * @param string $ActiveTimeStart <p>生效时间在此时间之后</p>
     * @param string $ActiveTimeEnd <p>生效时间在此时间之前</p>
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

        if (array_key_exists("ActiveTimeStart",$param) and $param["ActiveTimeStart"] !== null) {
            $this->ActiveTimeStart = $param["ActiveTimeStart"];
        }

        if (array_key_exists("ActiveTimeEnd",$param) and $param["ActiveTimeEnd"] !== null) {
            $this->ActiveTimeEnd = $param["ActiveTimeEnd"];
        }
    }
}
