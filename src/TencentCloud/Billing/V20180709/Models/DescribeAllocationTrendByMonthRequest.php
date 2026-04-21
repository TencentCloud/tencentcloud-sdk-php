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
 * DescribeAllocationTrendByMonth请求参数结构体
 *
 * @method string getMonth() 获取<p>账单月份，格式为2024-02，不传默认当前月</p>
 * @method void setMonth(string $Month) 设置<p>账单月份，格式为2024-02，不传默认当前月</p>
 * @method string getTreeNodeUniqKey() 获取<p>分账单元唯一标识</p>
 * @method void setTreeNodeUniqKey(string $TreeNodeUniqKey) 设置<p>分账单元唯一标识</p>
 * @method string getBusinessCode() 获取<p>产品编码，用作筛选</p>
 * @method void setBusinessCode(string $BusinessCode) 设置<p>产品编码，用作筛选</p>
 */
class DescribeAllocationTrendByMonthRequest extends AbstractModel
{
    /**
     * @var string <p>账单月份，格式为2024-02，不传默认当前月</p>
     */
    public $Month;

    /**
     * @var string <p>分账单元唯一标识</p>
     */
    public $TreeNodeUniqKey;

    /**
     * @var string <p>产品编码，用作筛选</p>
     */
    public $BusinessCode;

    /**
     * @param string $Month <p>账单月份，格式为2024-02，不传默认当前月</p>
     * @param string $TreeNodeUniqKey <p>分账单元唯一标识</p>
     * @param string $BusinessCode <p>产品编码，用作筛选</p>
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

        if (array_key_exists("TreeNodeUniqKey",$param) and $param["TreeNodeUniqKey"] !== null) {
            $this->TreeNodeUniqKey = $param["TreeNodeUniqKey"];
        }

        if (array_key_exists("BusinessCode",$param) and $param["BusinessCode"] !== null) {
            $this->BusinessCode = $param["BusinessCode"];
        }
    }
}
