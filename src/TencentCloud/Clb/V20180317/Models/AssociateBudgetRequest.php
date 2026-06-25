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
 * AssociateBudget请求参数结构体
 *
 * @method string getBudgetId() 获取<p>Budget ID。</p>
 * @method void setBudgetId(string $BudgetId) 设置<p>Budget ID。</p>
 * @method array getResources() 获取<p>要关联的资源列表。</p><p>仅支持企业型模型路由实例和企业型实例下的Key。同一请求内不允许重复资源；资源已关联其他Budget时将替换为新的Budget。</p>
 * @method void setResources(array $Resources) 设置<p>要关联的资源列表。</p><p>仅支持企业型模型路由实例和企业型实例下的Key。同一请求内不允许重复资源；资源已关联其他Budget时将替换为新的Budget。</p>
 */
class AssociateBudgetRequest extends AbstractModel
{
    /**
     * @var string <p>Budget ID。</p>
     */
    public $BudgetId;

    /**
     * @var array <p>要关联的资源列表。</p><p>仅支持企业型模型路由实例和企业型实例下的Key。同一请求内不允许重复资源；资源已关联其他Budget时将替换为新的Budget。</p>
     */
    public $Resources;

    /**
     * @param string $BudgetId <p>Budget ID。</p>
     * @param array $Resources <p>要关联的资源列表。</p><p>仅支持企业型模型路由实例和企业型实例下的Key。同一请求内不允许重复资源；资源已关联其他Budget时将替换为新的Budget。</p>
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
