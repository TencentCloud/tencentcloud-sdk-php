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
 * ModifyCategory请求参数结构体
 *
 * @method string getCategoryId() 获取<p>待修改的分类 ID（必须大于 0）</p>
 * @method void setCategoryId(string $CategoryId) 设置<p>待修改的分类 ID（必须大于 0）</p>
 * @method integer getCategoryType() 获取<p>分类类型（不可为 0，取值：1=文档分类，2=问答分类）<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>CATEGORY_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>CATEGORY_TYPE_DOC</td><td>1</td><td>文档分类</td></tr><tr><td>CATEGORY_TYPE_QA</td><td>2</td><td>问答分类</td></tr></tbody></table></p>
 * @method void setCategoryType(integer $CategoryType) 设置<p>分类类型（不可为 0，取值：1=文档分类，2=问答分类）<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>CATEGORY_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>CATEGORY_TYPE_DOC</td><td>1</td><td>文档分类</td></tr><tr><td>CATEGORY_TYPE_QA</td><td>2</td><td>问答分类</td></tr></tbody></table></p>
 * @method CategoryModifyFields getFields() 获取<p>修改字段内容（不可为空，与 update_mask 配合使用）</p>
 * @method void setFields(CategoryModifyFields $Fields) 设置<p>修改字段内容（不可为空，与 update_mask 配合使用）</p>
 * @method string getKbId() 获取<p>所属知识库 ID</p>
 * @method void setKbId(string $KbId) 设置<p>所属知识库 ID</p>
 * @method FieldMask getUpdateMask() 获取<p>字段掩码：指定要修改的字段（支持的 Paths：Name）</p>
 * @method void setUpdateMask(FieldMask $UpdateMask) 设置<p>字段掩码：指定要修改的字段（支持的 Paths：Name）</p>
 */
class ModifyCategoryRequest extends AbstractModel
{
    /**
     * @var string <p>待修改的分类 ID（必须大于 0）</p>
     */
    public $CategoryId;

    /**
     * @var integer <p>分类类型（不可为 0，取值：1=文档分类，2=问答分类）<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>CATEGORY_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>CATEGORY_TYPE_DOC</td><td>1</td><td>文档分类</td></tr><tr><td>CATEGORY_TYPE_QA</td><td>2</td><td>问答分类</td></tr></tbody></table></p>
     */
    public $CategoryType;

    /**
     * @var CategoryModifyFields <p>修改字段内容（不可为空，与 update_mask 配合使用）</p>
     */
    public $Fields;

    /**
     * @var string <p>所属知识库 ID</p>
     */
    public $KbId;

    /**
     * @var FieldMask <p>字段掩码：指定要修改的字段（支持的 Paths：Name）</p>
     */
    public $UpdateMask;

    /**
     * @param string $CategoryId <p>待修改的分类 ID（必须大于 0）</p>
     * @param integer $CategoryType <p>分类类型（不可为 0，取值：1=文档分类，2=问答分类）<table><tbody><tr><td>枚举项</td><td>枚举值</td><td>描述</td></tr><tr><td>CATEGORY_TYPE_UNKNOWN</td><td>0</td><td></td></tr><tr><td>CATEGORY_TYPE_DOC</td><td>1</td><td>文档分类</td></tr><tr><td>CATEGORY_TYPE_QA</td><td>2</td><td>问答分类</td></tr></tbody></table></p>
     * @param CategoryModifyFields $Fields <p>修改字段内容（不可为空，与 update_mask 配合使用）</p>
     * @param string $KbId <p>所属知识库 ID</p>
     * @param FieldMask $UpdateMask <p>字段掩码：指定要修改的字段（支持的 Paths：Name）</p>
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
        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("CategoryType",$param) and $param["CategoryType"] !== null) {
            $this->CategoryType = $param["CategoryType"];
        }

        if (array_key_exists("Fields",$param) and $param["Fields"] !== null) {
            $this->Fields = new CategoryModifyFields();
            $this->Fields->deserialize($param["Fields"]);
        }

        if (array_key_exists("KbId",$param) and $param["KbId"] !== null) {
            $this->KbId = $param["KbId"];
        }

        if (array_key_exists("UpdateMask",$param) and $param["UpdateMask"] !== null) {
            $this->UpdateMask = new FieldMask();
            $this->UpdateMask->deserialize($param["UpdateMask"]);
        }
    }
}
