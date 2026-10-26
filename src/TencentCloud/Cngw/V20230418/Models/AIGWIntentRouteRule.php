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
namespace TencentCloud\Cngw\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AI 网关意图路由规则
 *
 * @method string getIntentCode() 获取<p>意图编码</p><p>枚举值：</p><ul><li>Coder： 代码编写</li><li>Math： 数学计算</li><li>Translation： 翻译</li><li>Flash： 快速问答</li><li>Complex： 复杂推理</li></ul>
 * @method void setIntentCode(string $IntentCode) 设置<p>意图编码</p><p>枚举值：</p><ul><li>Coder： 代码编写</li><li>Math： 数学计算</li><li>Translation： 翻译</li><li>Flash： 快速问答</li><li>Complex： 复杂推理</li></ul>
 * @method string getModelServiceId() 获取<p>模型服务id</p>
 * @method void setModelServiceId(string $ModelServiceId) 设置<p>模型服务id</p>
 * @method string getIntentId() 获取<p>意图ID</p>
 * @method void setIntentId(string $IntentId) 设置<p>意图ID</p>
 * @method string getIntentName() 获取<p>意图名称</p>
 * @method void setIntentName(string $IntentName) 设置<p>意图名称</p>
 * @method string getStandardModelName() 获取<p>当前意图路由规则中目标 ModelServiceId 对应的标准模型名称；为空表示未配置。仅对应 TIONE 模型服务时可配置。非空值最长 256 字节，支持中文、英文、数字、下划线和短横线，须以中文、英文或数字开头。同一网关内不同模型 API 不得使用相同的标准模型名称；同一模型 API 内同一模型服务在多处配置时须保持一致。</p>
 * @method void setStandardModelName(string $StandardModelName) 设置<p>当前意图路由规则中目标 ModelServiceId 对应的标准模型名称；为空表示未配置。仅对应 TIONE 模型服务时可配置。非空值最长 256 字节，支持中文、英文、数字、下划线和短横线，须以中文、英文或数字开头。同一网关内不同模型 API 不得使用相同的标准模型名称；同一模型 API 内同一模型服务在多处配置时须保持一致。</p>
 */
class AIGWIntentRouteRule extends AbstractModel
{
    /**
     * @var string <p>意图编码</p><p>枚举值：</p><ul><li>Coder： 代码编写</li><li>Math： 数学计算</li><li>Translation： 翻译</li><li>Flash： 快速问答</li><li>Complex： 复杂推理</li></ul>
     */
    public $IntentCode;

    /**
     * @var string <p>模型服务id</p>
     */
    public $ModelServiceId;

    /**
     * @var string <p>意图ID</p>
     */
    public $IntentId;

    /**
     * @var string <p>意图名称</p>
     */
    public $IntentName;

    /**
     * @var string <p>当前意图路由规则中目标 ModelServiceId 对应的标准模型名称；为空表示未配置。仅对应 TIONE 模型服务时可配置。非空值最长 256 字节，支持中文、英文、数字、下划线和短横线，须以中文、英文或数字开头。同一网关内不同模型 API 不得使用相同的标准模型名称；同一模型 API 内同一模型服务在多处配置时须保持一致。</p>
     */
    public $StandardModelName;

    /**
     * @param string $IntentCode <p>意图编码</p><p>枚举值：</p><ul><li>Coder： 代码编写</li><li>Math： 数学计算</li><li>Translation： 翻译</li><li>Flash： 快速问答</li><li>Complex： 复杂推理</li></ul>
     * @param string $ModelServiceId <p>模型服务id</p>
     * @param string $IntentId <p>意图ID</p>
     * @param string $IntentName <p>意图名称</p>
     * @param string $StandardModelName <p>当前意图路由规则中目标 ModelServiceId 对应的标准模型名称；为空表示未配置。仅对应 TIONE 模型服务时可配置。非空值最长 256 字节，支持中文、英文、数字、下划线和短横线，须以中文、英文或数字开头。同一网关内不同模型 API 不得使用相同的标准模型名称；同一模型 API 内同一模型服务在多处配置时须保持一致。</p>
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
        if (array_key_exists("IntentCode",$param) and $param["IntentCode"] !== null) {
            $this->IntentCode = $param["IntentCode"];
        }

        if (array_key_exists("ModelServiceId",$param) and $param["ModelServiceId"] !== null) {
            $this->ModelServiceId = $param["ModelServiceId"];
        }

        if (array_key_exists("IntentId",$param) and $param["IntentId"] !== null) {
            $this->IntentId = $param["IntentId"];
        }

        if (array_key_exists("IntentName",$param) and $param["IntentName"] !== null) {
            $this->IntentName = $param["IntentName"];
        }

        if (array_key_exists("StandardModelName",$param) and $param["StandardModelName"] !== null) {
            $this->StandardModelName = $param["StandardModelName"];
        }
    }
}
