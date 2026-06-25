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
 * LLM-模型参数检查信息
 *
 * @method array getAllowModelList() 获取允许的模型列表。
 * @method void setAllowModelList(array $AllowModelList) 设置允许的模型列表。
 * @method string getModelValidationFailureStrategy() 获取模型参数校验失败时的处理策略，选项：Return404（返回404）、FallBackToDefaultModel（使用默认模型降级）。
 * @method void setModelValidationFailureStrategy(string $ModelValidationFailureStrategy) 设置模型参数校验失败时的处理策略，选项：Return404（返回404）、FallBackToDefaultModel（使用默认模型降级）。
 */
class CloudNativeAPIGatewayLLMModelParamCheckInfo extends AbstractModel
{
    /**
     * @var array 允许的模型列表。
     */
    public $AllowModelList;

    /**
     * @var string 模型参数校验失败时的处理策略，选项：Return404（返回404）、FallBackToDefaultModel（使用默认模型降级）。
     */
    public $ModelValidationFailureStrategy;

    /**
     * @param array $AllowModelList 允许的模型列表。
     * @param string $ModelValidationFailureStrategy 模型参数校验失败时的处理策略，选项：Return404（返回404）、FallBackToDefaultModel（使用默认模型降级）。
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
        if (array_key_exists("AllowModelList",$param) and $param["AllowModelList"] !== null) {
            $this->AllowModelList = $param["AllowModelList"];
        }

        if (array_key_exists("ModelValidationFailureStrategy",$param) and $param["ModelValidationFailureStrategy"] !== null) {
            $this->ModelValidationFailureStrategy = $param["ModelValidationFailureStrategy"];
        }
    }
}
