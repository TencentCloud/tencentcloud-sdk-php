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
 * 单条模型重写规则。
 *
 * @method string getSourceModel() 获取<p>源模型名（重写规则的 key）。</p><p>特殊值 <code>default</code> 表示兜底规则（命中所有未显式列出的源模型）。</p>
 * @method void setSourceModel(string $SourceModel) 设置<p>源模型名（重写规则的 key）。</p><p>特殊值 <code>default</code> 表示兜底规则（命中所有未显式列出的源模型）。</p>
 * @method string getTargetModel() 获取<p>目标模型名（重写规则的 value）。</p>
 * @method void setTargetModel(string $TargetModel) 设置<p>目标模型名（重写规则的 value）。</p>
 */
class RewriteItem extends AbstractModel
{
    /**
     * @var string <p>源模型名（重写规则的 key）。</p><p>特殊值 <code>default</code> 表示兜底规则（命中所有未显式列出的源模型）。</p>
     */
    public $SourceModel;

    /**
     * @var string <p>目标模型名（重写规则的 value）。</p>
     */
    public $TargetModel;

    /**
     * @param string $SourceModel <p>源模型名（重写规则的 key）。</p><p>特殊值 <code>default</code> 表示兜底规则（命中所有未显式列出的源模型）。</p>
     * @param string $TargetModel <p>目标模型名（重写规则的 value）。</p>
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
        if (array_key_exists("SourceModel",$param) and $param["SourceModel"] !== null) {
            $this->SourceModel = $param["SourceModel"];
        }

        if (array_key_exists("TargetModel",$param) and $param["TargetModel"] !== null) {
            $this->TargetModel = $param["TargetModel"];
        }
    }
}
