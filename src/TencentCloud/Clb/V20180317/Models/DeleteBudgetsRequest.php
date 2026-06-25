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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteBudgets请求参数结构体
 *
 * @method array getBudgetIds() 获取<p>要删除的Budget ID列表。</p>
 * @method void setBudgetIds(array $BudgetIds) 设置<p>要删除的Budget ID列表。</p>
 */
class DeleteBudgetsRequest extends AbstractModel
{
    /**
     * @var array <p>要删除的Budget ID列表。</p>
     */
    public $BudgetIds;

    /**
     * @param array $BudgetIds <p>要删除的Budget ID列表。</p>
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
