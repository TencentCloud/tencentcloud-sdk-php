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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyKB请求参数结构体
 *
 * @method string getKbId() 获取<p>知识库 ID</p>
 * @method void setKbId(string $KbId) 设置<p>知识库 ID</p>
 * @method KBSpec getSpec() 获取<p>可写属性（与 update_mask 配合使用）</p>
 * @method void setSpec(KBSpec $Spec) 设置<p>可写属性（与 update_mask 配合使用）</p>
 * @method FieldMask getUpdateMask() 获取<p>字段掩码：指定要修改的字段（蛇形字段名），未列出的字段忽略</p>
 * @method void setUpdateMask(FieldMask $UpdateMask) 设置<p>字段掩码：指定要修改的字段（蛇形字段名），未列出的字段忽略</p>
 * @method KBModifyExtendFields getExtendFields() 获取<p>扩展操作（用于承载无法归类到常规字段修改的特殊操作，例如触发超量恢复等；需在 update_mask 中同时传入 &#39;extend_fields&#39; 才会生效，取值参见 KBExtendedAction：1=触发恢复超量）</p>
 * @method void setExtendFields(KBModifyExtendFields $ExtendFields) 设置<p>扩展操作（用于承载无法归类到常规字段修改的特殊操作，例如触发超量恢复等；需在 update_mask 中同时传入 &#39;extend_fields&#39; 才会生效，取值参见 KBExtendedAction：1=触发恢复超量）</p>
 */
class ModifyKBRequest extends AbstractModel
{
    /**
     * @var string <p>知识库 ID</p>
     */
    public $KbId;

    /**
     * @var KBSpec <p>可写属性（与 update_mask 配合使用）</p>
     */
    public $Spec;

    /**
     * @var FieldMask <p>字段掩码：指定要修改的字段（蛇形字段名），未列出的字段忽略</p>
     */
    public $UpdateMask;

    /**
     * @var KBModifyExtendFields <p>扩展操作（用于承载无法归类到常规字段修改的特殊操作，例如触发超量恢复等；需在 update_mask 中同时传入 &#39;extend_fields&#39; 才会生效，取值参见 KBExtendedAction：1=触发恢复超量）</p>
     */
    public $ExtendFields;

    /**
     * @param string $KbId <p>知识库 ID</p>
     * @param KBSpec $Spec <p>可写属性（与 update_mask 配合使用）</p>
     * @param FieldMask $UpdateMask <p>字段掩码：指定要修改的字段（蛇形字段名），未列出的字段忽略</p>
     * @param KBModifyExtendFields $ExtendFields <p>扩展操作（用于承载无法归类到常规字段修改的特殊操作，例如触发超量恢复等；需在 update_mask 中同时传入 &#39;extend_fields&#39; 才会生效，取值参见 KBExtendedAction：1=触发恢复超量）</p>
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
        if (array_key_exists("KbId",$param) and $param["KbId"] !== null) {
            $this->KbId = $param["KbId"];
        }

        if (array_key_exists("Spec",$param) and $param["Spec"] !== null) {
            $this->Spec = new KBSpec();
            $this->Spec->deserialize($param["Spec"]);
        }

        if (array_key_exists("UpdateMask",$param) and $param["UpdateMask"] !== null) {
            $this->UpdateMask = new FieldMask();
            $this->UpdateMask->deserialize($param["UpdateMask"]);
        }

        if (array_key_exists("ExtendFields",$param) and $param["ExtendFields"] !== null) {
            $this->ExtendFields = new KBModifyExtendFields();
            $this->ExtendFields->deserialize($param["ExtendFields"]);
        }
    }
}
