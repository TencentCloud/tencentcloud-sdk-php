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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI网关授权模型访问范围
 *
 * @method string getPrincipalId() 获取<p>授权主体 ID，如消费者组、消费者</p>
 * @method void setPrincipalId(string $PrincipalId) 设置<p>授权主体 ID，如消费者组、消费者</p>
 * @method string getPrincipalName() 获取<p>授权主体名称，如消费者组、消费者</p>
 * @method void setPrincipalName(string $PrincipalName) 设置<p>授权主体名称，如消费者组、消费者</p>
 * @method AIGWModelScope getModelScope() 获取<p>模型范围原始配置</p>
 * @method void setModelScope(AIGWModelScope $ModelScope) 设置<p>模型范围原始配置</p>
 * @method array getEffectiveModelNames() 获取<p>MAG 已展开、保序去重后的可用模型名称列表</p>
 * @method void setEffectiveModelNames(array $EffectiveModelNames) 设置<p>MAG 已展开、保序去重后的可用模型名称列表</p>
 */
class AIGWAuthModelScopeItem extends AbstractModel
{
    /**
     * @var string <p>授权主体 ID，如消费者组、消费者</p>
     */
    public $PrincipalId;

    /**
     * @var string <p>授权主体名称，如消费者组、消费者</p>
     */
    public $PrincipalName;

    /**
     * @var AIGWModelScope <p>模型范围原始配置</p>
     */
    public $ModelScope;

    /**
     * @var array <p>MAG 已展开、保序去重后的可用模型名称列表</p>
     */
    public $EffectiveModelNames;

    /**
     * @param string $PrincipalId <p>授权主体 ID，如消费者组、消费者</p>
     * @param string $PrincipalName <p>授权主体名称，如消费者组、消费者</p>
     * @param AIGWModelScope $ModelScope <p>模型范围原始配置</p>
     * @param array $EffectiveModelNames <p>MAG 已展开、保序去重后的可用模型名称列表</p>
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
        if (array_key_exists("PrincipalId",$param) and $param["PrincipalId"] !== null) {
            $this->PrincipalId = $param["PrincipalId"];
        }

        if (array_key_exists("PrincipalName",$param) and $param["PrincipalName"] !== null) {
            $this->PrincipalName = $param["PrincipalName"];
        }

        if (array_key_exists("ModelScope",$param) and $param["ModelScope"] !== null) {
            $this->ModelScope = new AIGWModelScope();
            $this->ModelScope->deserialize($param["ModelScope"]);
        }

        if (array_key_exists("EffectiveModelNames",$param) and $param["EffectiveModelNames"] !== null) {
            $this->EffectiveModelNames = $param["EffectiveModelNames"];
        }
    }
}
