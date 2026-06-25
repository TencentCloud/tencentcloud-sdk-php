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
     * @param string $IntentCode <p>意图编码</p><p>枚举值：</p><ul><li>Coder： 代码编写</li><li>Math： 数学计算</li><li>Translation： 翻译</li><li>Flash： 快速问答</li><li>Complex： 复杂推理</li></ul>
     * @param string $ModelServiceId <p>模型服务id</p>
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
    }
}
