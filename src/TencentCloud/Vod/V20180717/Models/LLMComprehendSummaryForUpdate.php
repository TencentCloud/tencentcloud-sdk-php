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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 大模型解析分段摘要解析配置
 *
 * @method string getSwitch() 获取分段摘要任务开关，可选值：
- ON：开启分段摘要任务；
- OFF：关闭分段摘要任
 * @method void setSwitch(string $Switch) 设置分段摘要任务开关，可选值：
- ON：开启分段摘要任务；
- OFF：关闭分段摘要任
 * @method string getExtendedParameter() 获取扩展参数，其值为序列化的 json字符串。可参考[扩展参数说明](/document/product/862/104493#note)
 * @method void setExtendedParameter(string $ExtendedParameter) 设置扩展参数，其值为序列化的 json字符串。可参考[扩展参数说明](/document/product/862/104493#note)
 */
class LLMComprehendSummaryForUpdate extends AbstractModel
{
    /**
     * @var string 分段摘要任务开关，可选值：
- ON：开启分段摘要任务；
- OFF：关闭分段摘要任
     */
    public $Switch;

    /**
     * @var string 扩展参数，其值为序列化的 json字符串。可参考[扩展参数说明](/document/product/862/104493#note)
     */
    public $ExtendedParameter;

    /**
     * @param string $Switch 分段摘要任务开关，可选值：
- ON：开启分段摘要任务；
- OFF：关闭分段摘要任
     * @param string $ExtendedParameter 扩展参数，其值为序列化的 json字符串。可参考[扩展参数说明](/document/product/862/104493#note)
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
        if (array_key_exists("Switch",$param) and $param["Switch"] !== null) {
            $this->Switch = $param["Switch"];
        }

        if (array_key_exists("ExtendedParameter",$param) and $param["ExtendedParameter"] !== null) {
            $this->ExtendedParameter = $param["ExtendedParameter"];
        }
    }
}
