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
 * DeleteBudget请求参数结构体
 *
 * @method array getBudgetIds() 获取预算项目id
 * @method void setBudgetIds(array $BudgetIds) 设置预算项目id
 */
class DeleteBudgetRequest extends AbstractModel
{
    /**
     * @var array 预算项目id
     */
    public $BudgetIds;

    /**
     * @param array $BudgetIds 预算项目id
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
        if (array_key_exists("BudgetIds",$param) and $param["BudgetIds"] !== null) {
            $this->BudgetIds = $param["BudgetIds"];
        }
    }
}
