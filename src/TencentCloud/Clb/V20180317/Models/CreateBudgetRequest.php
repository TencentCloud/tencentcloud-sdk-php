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
 * CreateBudget请求参数结构体
 *
 * @method array getBudgetConfigs() 获取<p>预算配置数组。</p><p>数组长度最大为1。BudgetResetAt不支持作为入参设置。</p>
 * @method void setBudgetConfigs(array $BudgetConfigs) 设置<p>预算配置数组。</p><p>数组长度最大为1。BudgetResetAt不支持作为入参设置。</p>
 * @method string getBudgetName() 获取<p>Budget名称。</p><p>不传默认为空字符串。</p>
 * @method void setBudgetName(string $BudgetName) 设置<p>Budget名称。</p><p>不传默认为空字符串。</p>
 * @method RateLimitConfigForBudget getRateLimitConfig() 获取<p>Budget限速配置。</p>
 * @method void setRateLimitConfig(RateLimitConfigForBudget $RateLimitConfig) 设置<p>Budget限速配置。</p>
 * @method array getResources() 获取<p>创建Budget时同时关联的资源列表。</p><p>仅支持企业型模型路由实例和企业型实例下的Key。如果资源不存在或不可关联，创建请求失败；资源已关联其他Budget时将替换为新创建的Budget。</p>
 * @method void setResources(array $Resources) 设置<p>创建Budget时同时关联的资源列表。</p><p>仅支持企业型模型路由实例和企业型实例下的Key。如果资源不存在或不可关联，创建请求失败；资源已关联其他Budget时将替换为新创建的Budget。</p>
 */
class CreateBudgetRequest extends AbstractModel
{
    /**
     * @var array <p>预算配置数组。</p><p>数组长度最大为1。BudgetResetAt不支持作为入参设置。</p>
     */
    public $BudgetConfigs;

    /**
     * @var string <p>Budget名称。</p><p>不传默认为空字符串。</p>
     */
    public $BudgetName;

    /**
     * @var RateLimitConfigForBudget <p>Budget限速配置。</p>
     */
    public $RateLimitConfig;

    /**
     * @var array <p>创建Budget时同时关联的资源列表。</p><p>仅支持企业型模型路由实例和企业型实例下的Key。如果资源不存在或不可关联，创建请求失败；资源已关联其他Budget时将替换为新创建的Budget。</p>
     */
    public $Resources;

    /**
     * @param array $BudgetConfigs <p>预算配置数组。</p><p>数组长度最大为1。BudgetResetAt不支持作为入参设置。</p>
     * @param string $BudgetName <p>Budget名称。</p><p>不传默认为空字符串。</p>
     * @param RateLimitConfigForBudget $RateLimitConfig <p>Budget限速配置。</p>
     * @param array $Resources <p>创建Budget时同时关联的资源列表。</p><p>仅支持企业型模型路由实例和企业型实例下的Key。如果资源不存在或不可关联，创建请求失败；资源已关联其他Budget时将替换为新创建的Budget。</p>
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

        if (array_key_exists("Resources",$param) and $param["Resources"] !== null) {
            $this->Resources = [];
            foreach ($param["Resources"] as $key => $value){
                $obj = new BudgetResource();
                $obj->deserialize($value);
                array_push($this->Resources, $obj);
            }
        }
    }
}
