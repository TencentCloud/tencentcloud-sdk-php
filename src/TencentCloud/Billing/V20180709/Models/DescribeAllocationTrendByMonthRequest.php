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
 * DescribeAllocationTrendByMonth请求参数结构体
 *
 * @method string getMonth() 获取账单月份，格式为2024-02，不传默认当前月
 * @method void setMonth(string $Month) 设置账单月份，格式为2024-02，不传默认当前月
 * @method string getTreeNodeUniqKey() 获取分账单元唯一标识
 * @method void setTreeNodeUniqKey(string $TreeNodeUniqKey) 设置分账单元唯一标识
 * @method string getBusinessCode() 获取产品编码，用作筛选
 * @method void setBusinessCode(string $BusinessCode) 设置产品编码，用作筛选
 */
class DescribeAllocationTrendByMonthRequest extends AbstractModel
{
    /**
     * @var string 账单月份，格式为2024-02，不传默认当前月
     */
    public $Month;

    /**
     * @var string 分账单元唯一标识
     */
    public $TreeNodeUniqKey;

    /**
     * @var string 产品编码，用作筛选
     */
    public $BusinessCode;

    /**
     * @param string $Month 账单月份，格式为2024-02，不传默认当前月
     * @param string $TreeNodeUniqKey 分账单元唯一标识
     * @param string $BusinessCode 产品编码，用作筛选
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
