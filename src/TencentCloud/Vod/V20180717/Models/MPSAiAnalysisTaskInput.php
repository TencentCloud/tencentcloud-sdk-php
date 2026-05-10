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
 * AI 视频智能分析输入参数类型
 *
 * @method integer getDefinition() 获取<p>视频内容分析模板 ID。</p>
 * @method void setDefinition(integer $Definition) 设置<p>视频内容分析模板 ID。</p>
 * @method string getExtendedParameter() 获取<p>扩展参数，其值为序列化的 json字符串。注意：此参数为定制需求参数，参考如下：<a href="https://cloud.tencent.com/document/product/862/101530">智能檫除</a><a href="https://cloud.tencent.com/document/product/862/112098">智能拆条</a><a href="https://cloud.tencent.com/document/product/862/107280">高光集锦</a><a href="https://cloud.tencent.com/document/product/862/112112">智能横转竖</a></p>
 * @method void setExtendedParameter(string $ExtendedParameter) 设置<p>扩展参数，其值为序列化的 json字符串。注意：此参数为定制需求参数，参考如下：<a href="https://cloud.tencent.com/document/product/862/101530">智能檫除</a><a href="https://cloud.tencent.com/document/product/862/112098">智能拆条</a><a href="https://cloud.tencent.com/document/product/862/107280">高光集锦</a><a href="https://cloud.tencent.com/document/product/862/112112">智能横转竖</a></p>
 */
class MPSAiAnalysisTaskInput extends AbstractModel
{
    /**
     * @var integer <p>视频内容分析模板 ID。</p>
     */
    public $Definition;

    /**
     * @var string <p>扩展参数，其值为序列化的 json字符串。注意：此参数为定制需求参数，参考如下：<a href="https://cloud.tencent.com/document/product/862/101530">智能檫除</a><a href="https://cloud.tencent.com/document/product/862/112098">智能拆条</a><a href="https://cloud.tencent.com/document/product/862/107280">高光集锦</a><a href="https://cloud.tencent.com/document/product/862/112112">智能横转竖</a></p>
     */
    public $ExtendedParameter;

    /**
     * @param integer $Definition <p>视频内容分析模板 ID。</p>
     * @param string $ExtendedParameter <p>扩展参数，其值为序列化的 json字符串。注意：此参数为定制需求参数，参考如下：<a href="https://cloud.tencent.com/document/product/862/101530">智能檫除</a><a href="https://cloud.tencent.com/document/product/862/112098">智能拆条</a><a href="https://cloud.tencent.com/document/product/862/107280">高光集锦</a><a href="https://cloud.tencent.com/document/product/862/112112">智能横转竖</a></p>
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("ExtendedParameter",$param) and $param["ExtendedParameter"] !== null) {
            $this->ExtendedParameter = $param["ExtendedParameter"];
        }
    }
}
