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
 * AI 网关Token长度路由规则
 *
 * @method integer getMinTokenLength() 获取<p>token 长度下界，闭区间；0 合法</p>
 * @method void setMinTokenLength(integer $MinTokenLength) 设置<p>token 长度下界，闭区间；0 合法</p>
 * @method integer getMaxTokenLength() 获取<p>token 长度上界，闭区间</p>
 * @method void setMaxTokenLength(integer $MaxTokenLength) 设置<p>token 长度上界，闭区间</p>
 * @method AIGWLLMModelServiceSubRoute getTarget() 获取<p>命中该分段后执行的二级路由</p>
 * @method void setTarget(AIGWLLMModelServiceSubRoute $Target) 设置<p>命中该分段后执行的二级路由</p>
 */
class AIGWTokenLengthRouteRule extends AbstractModel
{
    /**
     * @var integer <p>token 长度下界，闭区间；0 合法</p>
     */
    public $MinTokenLength;

    /**
     * @var integer <p>token 长度上界，闭区间</p>
     */
    public $MaxTokenLength;

    /**
     * @var AIGWLLMModelServiceSubRoute <p>命中该分段后执行的二级路由</p>
     */
    public $Target;

    /**
     * @param integer $MinTokenLength <p>token 长度下界，闭区间；0 合法</p>
     * @param integer $MaxTokenLength <p>token 长度上界，闭区间</p>
     * @param AIGWLLMModelServiceSubRoute $Target <p>命中该分段后执行的二级路由</p>
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
        if (array_key_exists("MinTokenLength",$param) and $param["MinTokenLength"] !== null) {
            $this->MinTokenLength = $param["MinTokenLength"];
        }

        if (array_key_exists("MaxTokenLength",$param) and $param["MaxTokenLength"] !== null) {
            $this->MaxTokenLength = $param["MaxTokenLength"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = new AIGWLLMModelServiceSubRoute();
            $this->Target->deserialize($param["Target"]);
        }
    }
}
