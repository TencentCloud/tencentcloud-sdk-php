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
 * DescribeAllocationRuleSummary请求参数结构体
 *
 * @method integer getLimit() 获取每次获取数据量，最大值1000
 * @method void setLimit(integer $Limit) 设置每次获取数据量，最大值1000
 * @method integer getOffset() 获取分页偏移量
 * @method void setOffset(integer $Offset) 设置分页偏移量
 * @method string getMonth() 获取月份，不传默认当前月
 * @method void setMonth(string $Month) 设置月份，不传默认当前月
 * @method integer getType() 获取公摊策略类型，用于筛选。
枚举值如下： 
1 - 自定义分摊占比 
2 - 等比分摊 
3 - 按占比分摊
 * @method void setType(integer $Type) 设置公摊策略类型，用于筛选。
枚举值如下： 
1 - 自定义分摊占比 
2 - 等比分摊 
3 - 按占比分摊
 * @method string getName() 获取公摊规则名称或分账单元名称，用于模糊筛选。
 * @method void setName(string $Name) 设置公摊规则名称或分账单元名称，用于模糊筛选。
 */
class DescribeAllocationRuleSummaryRequest extends AbstractModel
{
    /**
     * @var integer 每次获取数据量，最大值1000
     */
    public $Limit;

    /**
     * @var integer 分页偏移量
     */
    public $Offset;

    /**
     * @var string 月份，不传默认当前月
     */
    public $Month;

    /**
     * @var integer 公摊策略类型，用于筛选。
枚举值如下： 
1 - 自定义分摊占比 
2 - 等比分摊 
3 - 按占比分摊
     */
    public $Type;

    /**
     * @var string 公摊规则名称或分账单元名称，用于模糊筛选。
     */
    public $Name;

    /**
     * @param integer $Limit 每次获取数据量，最大值1000
     * @param integer $Offset 分页偏移量
     * @param string $Month 月份，不传默认当前月
     * @param integer $Type 公摊策略类型，用于筛选。
枚举值如下： 
1 - 自定义分摊占比 
2 - 等比分摊 
3 - 按占比分摊
     * @param string $Name 公摊规则名称或分账单元名称，用于模糊筛选。
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Month",$param) and $param["Month"] !== null) {
            $this->Month = $param["Month"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }
    }
}
