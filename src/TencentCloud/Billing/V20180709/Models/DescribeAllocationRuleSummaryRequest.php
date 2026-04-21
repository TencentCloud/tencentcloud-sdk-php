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
 * @method integer getLimit() 获取<p>每次获取数据量，最大值1000</p>
 * @method void setLimit(integer $Limit) 设置<p>每次获取数据量，最大值1000</p>
 * @method integer getOffset() 获取<p>分页偏移量</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量</p>
 * @method string getMonth() 获取<p>月份，不传默认当前月</p>
 * @method void setMonth(string $Month) 设置<p>月份，不传默认当前月</p>
 * @method integer getType() 获取<p>公摊策略类型，用于筛选。<br>枚举值如下：<br>1 - 自定义分摊占比<br>2 - 等比分摊<br>3 - 按占比分摊</p>
 * @method void setType(integer $Type) 设置<p>公摊策略类型，用于筛选。<br>枚举值如下：<br>1 - 自定义分摊占比<br>2 - 等比分摊<br>3 - 按占比分摊</p>
 * @method string getName() 获取<p>公摊规则名称或分账单元名称，用于模糊筛选。</p>
 * @method void setName(string $Name) 设置<p>公摊规则名称或分账单元名称，用于模糊筛选。</p>
 */
class DescribeAllocationRuleSummaryRequest extends AbstractModel
{
    /**
     * @var integer <p>每次获取数据量，最大值1000</p>
     */
    public $Limit;

    /**
     * @var integer <p>分页偏移量</p>
     */
    public $Offset;

    /**
     * @var string <p>月份，不传默认当前月</p>
     */
    public $Month;

    /**
     * @var integer <p>公摊策略类型，用于筛选。<br>枚举值如下：<br>1 - 自定义分摊占比<br>2 - 等比分摊<br>3 - 按占比分摊</p>
     */
    public $Type;

    /**
     * @var string <p>公摊规则名称或分账单元名称，用于模糊筛选。</p>
     */
    public $Name;

    /**
     * @param integer $Limit <p>每次获取数据量，最大值1000</p>
     * @param integer $Offset <p>分页偏移量</p>
     * @param string $Month <p>月份，不传默认当前月</p>
     * @param integer $Type <p>公摊策略类型，用于筛选。<br>枚举值如下：<br>1 - 自定义分摊占比<br>2 - 等比分摊<br>3 - 按占比分摊</p>
     * @param string $Name <p>公摊规则名称或分账单元名称，用于模糊筛选。</p>
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
