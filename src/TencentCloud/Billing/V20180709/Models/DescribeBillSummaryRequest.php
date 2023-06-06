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
namespace TencentCloud\Billing\V20180709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBillSummary请求参数结构体
 *
 * @method string getMonth() 获取账单月份，格式为2023-04
 * @method void setMonth(string $Month) 设置账单月份，格式为2023-04
 * @method string getGroupType() 获取账单维度类型，枚举值如下：business、project、region、payMode、tag
 * @method void setGroupType(string $GroupType) 设置账单维度类型，枚举值如下：business、project、region、payMode、tag
 * @method array getTagKey() 获取标签键，GroupType=tag获取标签维度账单时传
 * @method void setTagKey(array $TagKey) 设置标签键，GroupType=tag获取标签维度账单时传
 */
class DescribeBillSummaryRequest extends AbstractModel
{
    /**
     * @var string 账单月份，格式为2023-04
     */
    public $Month;

    /**
     * @var string 账单维度类型，枚举值如下：business、project、region、payMode、tag
     */
    public $GroupType;

    /**
     * @var array 标签键，GroupType=tag获取标签维度账单时传
     */
    public $TagKey;

    /**
     * @param string $Month 账单月份，格式为2023-04
     * @param string $GroupType 账单维度类型，枚举值如下：business、project、region、payMode、tag
     * @param array $TagKey 标签键，GroupType=tag获取标签维度账单时传
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
        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }

        if (array_key_exists("TagKey",$param) and $param["TagKey"] !== null) {
            $this->TagKey = $param["TagKey"];
        }
    }
}
