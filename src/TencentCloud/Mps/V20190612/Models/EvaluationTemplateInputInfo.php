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
 * 在评测中使用的转码模板的信息
 *
 * @method integer getDefinition() 获取转码模板的 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDefinition(integer $Definition) 设置转码模板的 ID。
注意：此字段可能返回 null，表示取不到有效值。
 */
class EvaluationTemplateInputInfo extends AbstractModel
{
    /**
     * @var integer 转码模板的 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Definition;

    /**
     * @param integer $Definition 转码模板的 ID。
注意：此字段可能返回 null，表示取不到有效值。
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
    }
}
