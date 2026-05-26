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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * InquireTWeSeeSubscriptionCreatePrice请求参数结构体
 *
 * @method string getServiceType() 获取算法类型。可选值：

- `VID_COMP`：视频理解
 * @method void setServiceType(string $ServiceType) 设置算法类型。可选值：

- `VID_COMP`：视频理解
 * @method string getServiceTier() 获取套餐规格。可选值：

- `BASIC`：包年包月基础版（适用于视频理解）
 * @method void setServiceTier(string $ServiceTier) 设置套餐规格。可选值：

- `BASIC`：包年包月基础版（适用于视频理解）
 * @method integer getPeriod() 获取订阅购买时长，单位：月，支持 1-60
 * @method void setPeriod(integer $Period) 设置订阅购买时长，单位：月，支持 1-60
 */
class InquireTWeSeeSubscriptionCreatePriceRequest extends AbstractModel
{
    /**
     * @var string 算法类型。可选值：

- `VID_COMP`：视频理解
     */
    public $ServiceType;

    /**
     * @var string 套餐规格。可选值：

- `BASIC`：包年包月基础版（适用于视频理解）
     */
    public $ServiceTier;

    /**
     * @var integer 订阅购买时长，单位：月，支持 1-60
     */
    public $Period;

    /**
     * @param string $ServiceType 算法类型。可选值：

- `VID_COMP`：视频理解
     * @param string $ServiceTier 套餐规格。可选值：

- `BASIC`：包年包月基础版（适用于视频理解）
     * @param integer $Period 订阅购买时长，单位：月，支持 1-60
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
        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("ServiceTier",$param) and $param["ServiceTier"] !== null) {
            $this->ServiceTier = $param["ServiceTier"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }
    }
}
