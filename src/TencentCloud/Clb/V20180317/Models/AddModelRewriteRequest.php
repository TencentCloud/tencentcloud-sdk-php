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
 * AddModelRewrite请求参数结构体
 *
 * @method string getModelRouterId() 获取<p>模型路由实例 ID。</p>
 * @method void setModelRouterId(string $ModelRouterId) 设置<p>模型路由实例 ID。</p>
 * @method string getSourceModel() 获取<p>源模型名（重写规则的 key）。</p><p>长度 1-255 字符；支持特殊值 <code>default</code> 表示兜底规则（命中所有未显式列出的源模型）。</p><p>不允许使用 <code>IntentRouter/</code> 前缀（大小写不敏感），即 IntentRouter 不能作为 source。</p>
 * @method void setSourceModel(string $SourceModel) 设置<p>源模型名（重写规则的 key）。</p><p>长度 1-255 字符；支持特殊值 <code>default</code> 表示兜底规则（命中所有未显式列出的源模型）。</p><p>不允许使用 <code>IntentRouter/</code> 前缀（大小写不敏感），即 IntentRouter 不能作为 source。</p>
 * @method string getTargetModel() 获取<p>目标模型名（重写规则的 value）。</p><p>长度 1-255 字符；必须是已关联到该模型路由实例的模型（含 IntentRouter/* 也需先通过 AssociateModels 关联）。</p><p>不允许使用 <code>default</code>；不允许与 SourceModel 相同（大小写不敏感）。</p>
 * @method void setTargetModel(string $TargetModel) 设置<p>目标模型名（重写规则的 value）。</p><p>长度 1-255 字符；必须是已关联到该模型路由实例的模型（含 IntentRouter/* 也需先通过 AssociateModels 关联）。</p><p>不允许使用 <code>default</code>；不允许与 SourceModel 相同（大小写不敏感）。</p>
 */
class AddModelRewriteRequest extends AbstractModel
{
    /**
     * @var string <p>模型路由实例 ID。</p>
     */
    public $ModelRouterId;

    /**
     * @var string <p>源模型名（重写规则的 key）。</p><p>长度 1-255 字符；支持特殊值 <code>default</code> 表示兜底规则（命中所有未显式列出的源模型）。</p><p>不允许使用 <code>IntentRouter/</code> 前缀（大小写不敏感），即 IntentRouter 不能作为 source。</p>
     */
    public $SourceModel;

    /**
     * @var string <p>目标模型名（重写规则的 value）。</p><p>长度 1-255 字符；必须是已关联到该模型路由实例的模型（含 IntentRouter/* 也需先通过 AssociateModels 关联）。</p><p>不允许使用 <code>default</code>；不允许与 SourceModel 相同（大小写不敏感）。</p>
     */
    public $TargetModel;

    /**
     * @param string $ModelRouterId <p>模型路由实例 ID。</p>
     * @param string $SourceModel <p>源模型名（重写规则的 key）。</p><p>长度 1-255 字符；支持特殊值 <code>default</code> 表示兜底规则（命中所有未显式列出的源模型）。</p><p>不允许使用 <code>IntentRouter/</code> 前缀（大小写不敏感），即 IntentRouter 不能作为 source。</p>
     * @param string $TargetModel <p>目标模型名（重写规则的 value）。</p><p>长度 1-255 字符；必须是已关联到该模型路由实例的模型（含 IntentRouter/* 也需先通过 AssociateModels 关联）。</p><p>不允许使用 <code>default</code>；不允许与 SourceModel 相同（大小写不敏感）。</p>
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
        if (array_key_exists("ModelRouterId",$param) and $param["ModelRouterId"] !== null) {
            $this->ModelRouterId = $param["ModelRouterId"];
        }

        if (array_key_exists("SourceModel",$param) and $param["SourceModel"] !== null) {
            $this->SourceModel = $param["SourceModel"];
        }

        if (array_key_exists("TargetModel",$param) and $param["TargetModel"] !== null) {
            $this->TargetModel = $param["TargetModel"];
        }
    }
}
