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
namespace TencentCloud\Tiw\V20190919\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApplicationUsage请求参数结构体
 *
 * @method string getBeginTime() 获取用量开始时间（包括该时间点）
 * @method void setBeginTime(string $BeginTime) 设置用量开始时间（包括该时间点）
 * @method string getEndTime() 获取用量结束时间（不包括该时间点）
 * @method void setEndTime(string $EndTime) 设置用量结束时间（不包括该时间点）
 * @method string getSubProduct() 获取白板子产品名
 * @method void setSubProduct(string $SubProduct) 设置白板子产品名
 * @method string getTimeLevel() 获取时间跨度单位
- MONTHLY：月
- DAILY：天
- MINUTELY：分钟
 * @method void setTimeLevel(string $TimeLevel) 设置时间跨度单位
- MONTHLY：月
- DAILY：天
- MINUTELY：分钟
 * @method integer getSdkAppId() 获取白板应用的SdkAppId
 * @method void setSdkAppId(integer $SdkAppId) 设置白板应用的SdkAppId
 * @method boolean getIsWeighted() 获取true: 返回加权求和后的用量数据
false: 返回原始用量数据
 * @method void setIsWeighted(boolean $IsWeighted) 设置true: 返回加权求和后的用量数据
false: 返回原始用量数据
 */
class DescribeApplicationUsageRequest extends AbstractModel
{
    /**
     * @var string 用量开始时间（包括该时间点）
     */
    public $BeginTime;

    /**
     * @var string 用量结束时间（不包括该时间点）
     */
    public $EndTime;

    /**
     * @var string 白板子产品名
     */
    public $SubProduct;

    /**
     * @var string 时间跨度单位
- MONTHLY：月
- DAILY：天
- MINUTELY：分钟
     */
    public $TimeLevel;

    /**
     * @var integer 白板应用的SdkAppId
     */
    public $SdkAppId;

    /**
     * @var boolean true: 返回加权求和后的用量数据
false: 返回原始用量数据
     */
    public $IsWeighted;

    /**
     * @param string $BeginTime 用量开始时间（包括该时间点）
     * @param string $EndTime 用量结束时间（不包括该时间点）
     * @param string $SubProduct 白板子产品名
     * @param string $TimeLevel 时间跨度单位
- MONTHLY：月
- DAILY：天
- MINUTELY：分钟
     * @param integer $SdkAppId 白板应用的SdkAppId
     * @param boolean $IsWeighted true: 返回加权求和后的用量数据
false: 返回原始用量数据
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
        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("SubProduct",$param) and $param["SubProduct"] !== null) {
            $this->SubProduct = $param["SubProduct"];
        }

        if (array_key_exists("TimeLevel",$param) and $param["TimeLevel"] !== null) {
            $this->TimeLevel = $param["TimeLevel"];
        }

        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("IsWeighted",$param) and $param["IsWeighted"] !== null) {
            $this->IsWeighted = $param["IsWeighted"];
        }
    }
}
