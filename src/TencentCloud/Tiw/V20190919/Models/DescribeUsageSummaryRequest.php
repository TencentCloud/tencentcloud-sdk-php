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
 * DescribeUsageSummary请求参数结构体
 *
 * @method string getBeginTime() 获取统计时间段的开始时间
 * @method void setBeginTime(string $BeginTime) 设置统计时间段的开始时间
 * @method string getEndTime() 获取统计时间段的结束时间
 * @method void setEndTime(string $EndTime) 设置统计时间段的结束时间
 * @method array getSubProducts() 获取需要获取用量的子产品列表
 * @method void setSubProducts(array $SubProducts) 设置需要获取用量的子产品列表
 * @method boolean getIsWeighted() 获取true: 返回加权后的数据
false: 返回原始数据
 * @method void setIsWeighted(boolean $IsWeighted) 设置true: 返回加权后的数据
false: 返回原始数据
 */
class DescribeUsageSummaryRequest extends AbstractModel
{
    /**
     * @var string 统计时间段的开始时间
     */
    public $BeginTime;

    /**
     * @var string 统计时间段的结束时间
     */
    public $EndTime;

    /**
     * @var array 需要获取用量的子产品列表
     */
    public $SubProducts;

    /**
     * @var boolean true: 返回加权后的数据
false: 返回原始数据
     */
    public $IsWeighted;

    /**
     * @param string $BeginTime 统计时间段的开始时间
     * @param string $EndTime 统计时间段的结束时间
     * @param array $SubProducts 需要获取用量的子产品列表
     * @param boolean $IsWeighted true: 返回加权后的数据
false: 返回原始数据
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

        if (array_key_exists("SubProducts",$param) and $param["SubProducts"] !== null) {
            $this->SubProducts = $param["SubProducts"];
        }

        if (array_key_exists("IsWeighted",$param) and $param["IsWeighted"] !== null) {
            $this->IsWeighted = $param["IsWeighted"];
        }
    }
}
