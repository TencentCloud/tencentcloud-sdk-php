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
namespace TencentCloud\Tchd\V20230306\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 事件详情信息，包含：产品名称、地域名称、事件开始时间、事件结束时间、事件当前状态；
 *
 * @method string getProductId() 获取产品ID
 * @method void setProductId(string $ProductId) 设置产品ID
 * @method string getProductName() 获取产品名称
 * @method void setProductName(string $ProductName) 设置产品名称
 * @method string getRegionId() 获取地域ID，非区域性地域返回non-regional
 * @method void setRegionId(string $RegionId) 设置地域ID，非区域性地域返回non-regional
 * @method string getRegionName() 获取地域名称
 * @method void setRegionName(string $RegionName) 设置地域名称
 * @method string getStartTime() 获取事件开始时间
 * @method void setStartTime(string $StartTime) 设置事件开始时间
 * @method string getEndTime() 获取事件结束时间，当事件正在发生还未结束时，结束时间返回空
 * @method void setEndTime(string $EndTime) 设置事件结束时间，当事件正在发生还未结束时，结束时间返回空
 * @method string getCurrentStatus() 获取事件当前状态：提示、异常、正常
 * @method void setCurrentStatus(string $CurrentStatus) 设置事件当前状态：提示、异常、正常
 */
class EventDetail extends AbstractModel
{
    /**
     * @var string 产品ID
     */
    public $ProductId;

    /**
     * @var string 产品名称
     */
    public $ProductName;

    /**
     * @var string 地域ID，非区域性地域返回non-regional
     */
    public $RegionId;

    /**
     * @var string 地域名称
     */
    public $RegionName;

    /**
     * @var string 事件开始时间
     */
    public $StartTime;

    /**
     * @var string 事件结束时间，当事件正在发生还未结束时，结束时间返回空
     */
    public $EndTime;

    /**
     * @var string 事件当前状态：提示、异常、正常
     */
    public $CurrentStatus;

    /**
     * @param string $ProductId 产品ID
     * @param string $ProductName 产品名称
     * @param string $RegionId 地域ID，非区域性地域返回non-regional
     * @param string $RegionName 地域名称
     * @param string $StartTime 事件开始时间
     * @param string $EndTime 事件结束时间，当事件正在发生还未结束时，结束时间返回空
     * @param string $CurrentStatus 事件当前状态：提示、异常、正常
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
        if (array_key_exists("ProductId",$param) and $param["ProductId"] !== null) {
            $this->ProductId = $param["ProductId"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("RegionName",$param) and $param["RegionName"] !== null) {
            $this->RegionName = $param["RegionName"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("CurrentStatus",$param) and $param["CurrentStatus"] !== null) {
            $this->CurrentStatus = $param["CurrentStatus"];
        }
    }
}
