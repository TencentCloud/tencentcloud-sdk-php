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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AIGC 文档生视频任务重新生成的输入信息
 *
 * @method string getScope() 获取<p>重新生成的范围。</p><p>枚举值：</p><ul><li>full： 该阶段全量重新生成（例如：修改整体的场景数量）</li><li>scenes： 按场景局部重新生成（例如：修改某场景的具体内容）</li></ul>
 * @method void setScope(string $Scope) 设置<p>重新生成的范围。</p><p>枚举值：</p><ul><li>full： 该阶段全量重新生成（例如：修改整体的场景数量）</li><li>scenes： 按场景局部重新生成（例如：修改某场景的具体内容）</li></ul>
 * @method string getPrompt() 获取<p>重新生成时的提示词。</p>
 * @method void setPrompt(string $Prompt) 设置<p>重新生成时的提示词。</p>
 * @method array getSceneIds() 获取<p>按页局部重新生成时的目标页 ID 数组。仅 Scope=scenes 时必填。不可重复，单次重新生成最多 5 页。</p>
 * @method void setSceneIds(array $SceneIds) 设置<p>按页局部重新生成时的目标页 ID 数组。仅 Scope=scenes 时必填。不可重复，单次重新生成最多 5 页。</p>
 */
class DocToVideoRegenerateInput extends AbstractModel
{
    /**
     * @var string <p>重新生成的范围。</p><p>枚举值：</p><ul><li>full： 该阶段全量重新生成（例如：修改整体的场景数量）</li><li>scenes： 按场景局部重新生成（例如：修改某场景的具体内容）</li></ul>
     */
    public $Scope;

    /**
     * @var string <p>重新生成时的提示词。</p>
     */
    public $Prompt;

    /**
     * @var array <p>按页局部重新生成时的目标页 ID 数组。仅 Scope=scenes 时必填。不可重复，单次重新生成最多 5 页。</p>
     */
    public $SceneIds;

    /**
     * @param string $Scope <p>重新生成的范围。</p><p>枚举值：</p><ul><li>full： 该阶段全量重新生成（例如：修改整体的场景数量）</li><li>scenes： 按场景局部重新生成（例如：修改某场景的具体内容）</li></ul>
     * @param string $Prompt <p>重新生成时的提示词。</p>
     * @param array $SceneIds <p>按页局部重新生成时的目标页 ID 数组。仅 Scope=scenes 时必填。不可重复，单次重新生成最多 5 页。</p>
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
        if (array_key_exists("Scope",$param) and $param["Scope"] !== null) {
            $this->Scope = $param["Scope"];
        }

        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("SceneIds",$param) and $param["SceneIds"] !== null) {
            $this->SceneIds = $param["SceneIds"];
        }
    }
}
