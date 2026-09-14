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
 * ModifyLabel请求参数结构体
 *
 * @method LabelModifyFields getFields() 获取<p>修改字段内容（不可为空，与 update_mask 配合使用）</p>
 * @method void setFields(LabelModifyFields $Fields) 设置<p>修改字段内容（不可为空，与 update_mask 配合使用）</p>
 * @method string getKbId() 获取<p>所属知识库 ID</p>
 * @method void setKbId(string $KbId) 设置<p>所属知识库 ID</p>
 * @method string getLabelId() 获取<p>待修改的标签 ID</p>
 * @method void setLabelId(string $LabelId) 设置<p>待修改的标签 ID</p>
 * @method FieldMask getUpdateMask() 获取<p>字段掩码：指定要修改的字段（支持的 Paths：Name, TermModifyList）</p>
 * @method void setUpdateMask(FieldMask $UpdateMask) 设置<p>字段掩码：指定要修改的字段（支持的 Paths：Name, TermModifyList）</p>
 */
class ModifyLabelRequest extends AbstractModel
{
    /**
     * @var LabelModifyFields <p>修改字段内容（不可为空，与 update_mask 配合使用）</p>
     */
    public $Fields;

    /**
     * @var string <p>所属知识库 ID</p>
     */
    public $KbId;

    /**
     * @var string <p>待修改的标签 ID</p>
     */
    public $LabelId;

    /**
     * @var FieldMask <p>字段掩码：指定要修改的字段（支持的 Paths：Name, TermModifyList）</p>
     */
    public $UpdateMask;

    /**
     * @param LabelModifyFields $Fields <p>修改字段内容（不可为空，与 update_mask 配合使用）</p>
     * @param string $KbId <p>所属知识库 ID</p>
     * @param string $LabelId <p>待修改的标签 ID</p>
     * @param FieldMask $UpdateMask <p>字段掩码：指定要修改的字段（支持的 Paths：Name, TermModifyList）</p>
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
        if (array_key_exists("Fields",$param) and $param["Fields"] !== null) {
            $this->Fields = new LabelModifyFields();
            $this->Fields->deserialize($param["Fields"]);
        }

        if (array_key_exists("KbId",$param) and $param["KbId"] !== null) {
            $this->KbId = $param["KbId"];
        }

        if (array_key_exists("LabelId",$param) and $param["LabelId"] !== null) {
            $this->LabelId = $param["LabelId"];
        }

        if (array_key_exists("UpdateMask",$param) and $param["UpdateMask"] !== null) {
            $this->UpdateMask = new FieldMask();
            $this->UpdateMask->deserialize($param["UpdateMask"]);
        }
    }
}
