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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AGENT_SKILLS 内容来源。Type 判别 MANUAL 与 TAR_PACKAGE 两种模式。
 *
 * @method string getType() 获取<p>来源类型。MANUAL：直接提交 SKILL.md 文本；TAR_PACKAGE：由服务端签发 COS PUT 预签名 URL，客户端上传后由服务端异步校验。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置<p>来源类型。MANUAL：直接提交 SKILL.md 文本；TAR_PACKAGE：由服务端签发 COS PUT 预签名 URL，客户端上传后由服务端异步校验。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSkillMd() 获取<p>SKILL.md 原文；Type=MANUAL 时必填非空；Type=TAR_PACKAGE 时不得提供。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSkillMd(string $SkillMd) 设置<p>SKILL.md 原文；Type=MANUAL 时必填非空；Type=TAR_PACKAGE 时不得提供。</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class CloudSkillSourceInput extends AbstractModel
{
    /**
     * @var string <p>来源类型。MANUAL：直接提交 SKILL.md 文本；TAR_PACKAGE：由服务端签发 COS PUT 预签名 URL，客户端上传后由服务端异步校验。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string <p>SKILL.md 原文；Type=MANUAL 时必填非空；Type=TAR_PACKAGE 时不得提供。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SkillMd;

    /**
     * @param string $Type <p>来源类型。MANUAL：直接提交 SKILL.md 文本；TAR_PACKAGE：由服务端签发 COS PUT 预签名 URL，客户端上传后由服务端异步校验。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SkillMd <p>SKILL.md 原文；Type=MANUAL 时必填非空；Type=TAR_PACKAGE 时不得提供。</p>
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SkillMd",$param) and $param["SkillMd"] !== null) {
            $this->SkillMd = $param["SkillMd"];
        }
    }
}
