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
 * ModifyBudgetAttributes请求参数结构体
 *
 * @method string getBudgetId() 获取<p>Budget ID。</p>
 * @method void setBudgetId(string $BudgetId) 设置<p>Budget ID。</p>
 * @method array getBudgetConfigs() 获取<p>预算配置数组。</p><p>数组长度最大为1。BudgetResetAt不支持作为入参设置。</p>
 * @method void setBudgetConfigs(array $BudgetConfigs) 设置<p>预算配置数组。</p><p>数组长度最大为1。BudgetResetAt不支持作为入参设置。</p>
 * @method string getBudgetName() 获取<p>Budget名称。</p>
 * @method void setBudgetName(string $BudgetName) 设置<p>Budget名称。</p>
 * @method RateLimitConfigForBudget getRateLimitConfig() 获取<p>Budget限速配置。</p>
 * @method void setRateLimitConfig(RateLimitConfigForBudget $RateLimitConfig) 设置<p>Budget限速配置。</p>
 */
class ModifyBudgetAttributesRequest extends AbstractModel
{
    /**
     * @var string <p>Budget ID。</p>
     */
    public $BudgetId;

    /**
     * @var array <p>预算配置数组。</p><p>数组长度最大为1。BudgetResetAt不支持作为入参设置。</p>
     */
    public $BudgetConfigs;

    /**
     * @var string <p>Budget名称。</p>
     */
    public $BudgetName;

    /**
     * @var RateLimitConfigForBudget <p>Budget限速配置。</p>
     */
    public $RateLimitConfig;

    /**
     * @param string $BudgetId <p>Budget ID。</p>
     * @param array $BudgetConfigs <p>预算配置数组。</p><p>数组长度最大为1。BudgetResetAt不支持作为入参设置。</p>
     * @param string $BudgetName <p>Budget名称。</p>
     * @param RateLimitConfigForBudget $RateLimitConfig <p>Budget限速配置。</p>
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
        if (array_key_exists("BudgetId",$param) and $param["BudgetId"] !== null) {
            $this->BudgetId = $param["BudgetId"];
        }

        if (array_key_exists("BudgetConfigs",$param) and $param["BudgetConfigs"] !== null) {
            $this->BudgetConfigs = [];
            foreach ($param["BudgetConfigs"] as $key => $value){
                $obj = new BudgetConfigInput();
                $obj->deserialize($value);
                array_push($this->BudgetConfigs, $obj);
            }
        }

        if (array_key_exists("BudgetName",$param) and $param["BudgetName"] !== null) {
            $this->BudgetName = $param["BudgetName"];
        }

        if (array_key_exists("RateLimitConfig",$param) and $param["RateLimitConfig"] !== null) {
            $this->RateLimitConfig = new RateLimitConfigForBudget();
            $this->RateLimitConfig->deserialize($param["RateLimitConfig"]);
        }
    }
}
