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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCostSummaryByTag请求参数结构体
 *
 * @method string getBeginTime() 获取目前必须和EndTime相同月份，不支持跨月查询，且查询结果是整月数据，例如 BeginTime为2025-12，EndTime 为 2025-12，查询结果是 2025 年 12 月数据。
 * @method void setBeginTime(string $BeginTime) 设置目前必须和EndTime相同月份，不支持跨月查询，且查询结果是整月数据，例如 BeginTime为2025-12，EndTime 为 2025-12，查询结果是 2025 年 12 月数据。
 * @method string getEndTime() 获取目前必须和BeginTime为相同月份，不支持跨月查询，且查询结果是整月数据，例如 BeginTime为2025-12，EndTime 为 2025-12，查询结果是 2025 年 12 月数据。
 * @method void setEndTime(string $EndTime) 设置目前必须和BeginTime为相同月份，不支持跨月查询，且查询结果是整月数据，例如 BeginTime为2025-12，EndTime 为 2025-12，查询结果是 2025 年 12 月数据。
 * @method string getTagKey() 获取分账标签键，用户自定义
 * @method void setTagKey(string $TagKey) 设置分账标签键，用户自定义
 */
class DescribeCostSummaryByTagRequest extends AbstractModel
{
    /**
     * @var string 目前必须和EndTime相同月份，不支持跨月查询，且查询结果是整月数据，例如 BeginTime为2025-12，EndTime 为 2025-12，查询结果是 2025 年 12 月数据。
     */
    public $BeginTime;

    /**
     * @var string 目前必须和BeginTime为相同月份，不支持跨月查询，且查询结果是整月数据，例如 BeginTime为2025-12，EndTime 为 2025-12，查询结果是 2025 年 12 月数据。
     */
    public $EndTime;

    /**
     * @var string 分账标签键，用户自定义
     */
    public $TagKey;

    /**
     * @param string $BeginTime 目前必须和EndTime相同月份，不支持跨月查询，且查询结果是整月数据，例如 BeginTime为2025-12，EndTime 为 2025-12，查询结果是 2025 年 12 月数据。
     * @param string $EndTime 目前必须和BeginTime为相同月份，不支持跨月查询，且查询结果是整月数据，例如 BeginTime为2025-12，EndTime 为 2025-12，查询结果是 2025 年 12 月数据。
     * @param string $TagKey 分账标签键，用户自定义
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

        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }
    }
}
