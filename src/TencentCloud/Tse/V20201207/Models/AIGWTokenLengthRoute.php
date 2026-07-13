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
 * AI 网关token长度路由配置
 *
 * @method string getDefaultEncodingName() 获取<p>默认tokenizer编码器</p><p>枚举值：</p><ul><li>o200k_base： OpenApi o200k_base</li><li>cl100k_base： OpenApi cl100k_base</li><li>p50k_base： OpenApi p50k_base</li><li>r50k_base： OpenApi r50k_base</li></ul>
 * @method void setDefaultEncodingName(string $DefaultEncodingName) 设置<p>默认tokenizer编码器</p><p>枚举值：</p><ul><li>o200k_base： OpenApi o200k_base</li><li>cl100k_base： OpenApi cl100k_base</li><li>p50k_base： OpenApi p50k_base</li><li>r50k_base： OpenApi r50k_base</li></ul>
 * @method AIGWLLMModelServiceSubRoute getDefaultTarget() 获取<p>token 计数失败、规则为空或未命中任何规则时执行的默认二级路由（暂时只能选择一个指定模型路由）</p>
 * @method void setDefaultTarget(AIGWLLMModelServiceSubRoute $DefaultTarget) 设置<p>token 计数失败、规则为空或未命中任何规则时执行的默认二级路由（暂时只能选择一个指定模型路由）</p>
 * @method array getRules() 获取<p>规则</p>
 * @method void setRules(array $Rules) 设置<p>规则</p>
 */
class AIGWTokenLengthRoute extends AbstractModel
{
    /**
     * @var string <p>默认tokenizer编码器</p><p>枚举值：</p><ul><li>o200k_base： OpenApi o200k_base</li><li>cl100k_base： OpenApi cl100k_base</li><li>p50k_base： OpenApi p50k_base</li><li>r50k_base： OpenApi r50k_base</li></ul>
     */
    public $DefaultEncodingName;

    /**
     * @var AIGWLLMModelServiceSubRoute <p>token 计数失败、规则为空或未命中任何规则时执行的默认二级路由（暂时只能选择一个指定模型路由）</p>
     */
    public $DefaultTarget;

    /**
     * @var array <p>规则</p>
     */
    public $Rules;

    /**
     * @param string $DefaultEncodingName <p>默认tokenizer编码器</p><p>枚举值：</p><ul><li>o200k_base： OpenApi o200k_base</li><li>cl100k_base： OpenApi cl100k_base</li><li>p50k_base： OpenApi p50k_base</li><li>r50k_base： OpenApi r50k_base</li></ul>
     * @param AIGWLLMModelServiceSubRoute $DefaultTarget <p>token 计数失败、规则为空或未命中任何规则时执行的默认二级路由（暂时只能选择一个指定模型路由）</p>
     * @param array $Rules <p>规则</p>
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
        if (array_key_exists("DefaultEncodingName",$param) and $param["DefaultEncodingName"] !== null) {
            $this->DefaultEncodingName = $param["DefaultEncodingName"];
        }

        if (array_key_exists("DefaultTarget",$param) and $param["DefaultTarget"] !== null) {
            $this->DefaultTarget = new AIGWLLMModelServiceSubRoute();
            $this->DefaultTarget->deserialize($param["DefaultTarget"]);
        }

        if (array_key_exists("Rules",$param) and $param["Rules"] !== null) {
            $this->Rules = [];
            foreach ($param["Rules"] as $key => $value){
                $obj = new AIGWTokenLengthRouteRule();
                $obj->deserialize($value);
                array_push($this->Rules, $obj);
            }
        }
    }
}
