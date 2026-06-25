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
 * LLM-单模型内降级规则
 *
 * @method array getFallbackModels() 获取备选模型，主模型不可用时将依次按顺序尝试。
 * @method void setFallbackModels(array $FallbackModels) 设置备选模型，主模型不可用时将依次按顺序尝试。
 */
class CloudNativeAPIGatewayLLMModelFallbackRule extends AbstractModel
{
    /**
     * @var array 备选模型，主模型不可用时将依次按顺序尝试。
     */
    public $FallbackModels;

    /**
     * @param array $FallbackModels 备选模型，主模型不可用时将依次按顺序尝试。
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
        if (array_key_exists("FallbackModels",$param) and $param["FallbackModels"] !== null) {
            $this->FallbackModels = $param["FallbackModels"];
        }
    }
}
