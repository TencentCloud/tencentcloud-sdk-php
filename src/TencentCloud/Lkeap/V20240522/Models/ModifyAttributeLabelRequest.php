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
namespace TencentCloud\Lkeap\V20240522\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyAttributeLabel请求参数结构体
 *
 * @method string getKnowledgeBaseId() 获取说明：知识库ID
备注：通过创建知识库接口（DeleteKnowledgeBase）得到知识库ID（KnowledgeBaseId）
 * @method void setKnowledgeBaseId(string $KnowledgeBaseId) 设置说明：知识库ID
备注：通过创建知识库接口（DeleteKnowledgeBase）得到知识库ID（KnowledgeBaseId）
 * @method string getAttributeId() 获取说明：属性ID
备注：通过CreateAttributeLabel接口创建属性时会生成AttributeId，通过ListAttributeLabels接口可查询得到AttributeId、AttributeKey、AttributeName以及LabelId、LabelName的对应关系
 * @method void setAttributeId(string $AttributeId) 设置说明：属性ID
备注：通过CreateAttributeLabel接口创建属性时会生成AttributeId，通过ListAttributeLabels接口可查询得到AttributeId、AttributeKey、AttributeName以及LabelId、LabelName的对应关系
 * @method string getAttributeKey() 获取说明：属性标识，
备注：仅支持英文字符，不支持数字，支持下划线。最大支持40个英文字符，如style
 * @method void setAttributeKey(string $AttributeKey) 设置说明：属性标识，
备注：仅支持英文字符，不支持数字，支持下划线。最大支持40个英文字符，如style
 * @method string getAttributeName() 获取说明：属性名称
备注：支持中英文字符。最大支持80个中英文字符，如风格
 * @method void setAttributeName(string $AttributeName) 设置说明：属性名称
备注：支持中英文字符。最大支持80个中英文字符，如风格
 * @method array getLabels() 获取说明：标签ID（LabelId）以及标签名（LabelName）
备注：
- 不填写LabelId，默认在当前AttributeId下新增标签值（LabelName）；
- 若填写该AttributeId下的LabelId以及LabelName，则为修改该LabelId对应的标签值
 * @method void setLabels(array $Labels) 设置说明：标签ID（LabelId）以及标签名（LabelName）
备注：
- 不填写LabelId，默认在当前AttributeId下新增标签值（LabelName）；
- 若填写该AttributeId下的LabelId以及LabelName，则为修改该LabelId对应的标签值
 * @method array getDeleteLabelIds() 获取说明：删除的标签id
 * @method void setDeleteLabelIds(array $DeleteLabelIds) 设置说明：删除的标签id
 */
class ModifyAttributeLabelRequest extends AbstractModel
{
    /**
     * @var string 说明：知识库ID
备注：通过创建知识库接口（DeleteKnowledgeBase）得到知识库ID（KnowledgeBaseId）
     */
    public $KnowledgeBaseId;

    /**
     * @var string 说明：属性ID
备注：通过CreateAttributeLabel接口创建属性时会生成AttributeId，通过ListAttributeLabels接口可查询得到AttributeId、AttributeKey、AttributeName以及LabelId、LabelName的对应关系
     */
    public $AttributeId;

    /**
     * @var string 说明：属性标识，
备注：仅支持英文字符，不支持数字，支持下划线。最大支持40个英文字符，如style
     */
    public $AttributeKey;

    /**
     * @var string 说明：属性名称
备注：支持中英文字符。最大支持80个中英文字符，如风格
     */
    public $AttributeName;

    /**
     * @var array 说明：标签ID（LabelId）以及标签名（LabelName）
备注：
- 不填写LabelId，默认在当前AttributeId下新增标签值（LabelName）；
- 若填写该AttributeId下的LabelId以及LabelName，则为修改该LabelId对应的标签值
     */
    public $Labels;

    /**
     * @var array 说明：删除的标签id
     */
    public $DeleteLabelIds;

    /**
     * @param string $KnowledgeBaseId 说明：知识库ID
备注：通过创建知识库接口（DeleteKnowledgeBase）得到知识库ID（KnowledgeBaseId）
     * @param string $AttributeId 说明：属性ID
备注：通过CreateAttributeLabel接口创建属性时会生成AttributeId，通过ListAttributeLabels接口可查询得到AttributeId、AttributeKey、AttributeName以及LabelId、LabelName的对应关系
     * @param string $AttributeKey 说明：属性标识，
备注：仅支持英文字符，不支持数字，支持下划线。最大支持40个英文字符，如style
     * @param string $AttributeName 说明：属性名称
备注：支持中英文字符。最大支持80个中英文字符，如风格
     * @param array $Labels 说明：标签ID（LabelId）以及标签名（LabelName）
备注：
- 不填写LabelId，默认在当前AttributeId下新增标签值（LabelName）；
- 若填写该AttributeId下的LabelId以及LabelName，则为修改该LabelId对应的标签值
     * @param array $DeleteLabelIds 说明：删除的标签id
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
        if (array_key_exists("KnowledgeBaseId",$param) and $param["KnowledgeBaseId"] !== null) {
            $this->KnowledgeBaseId = $param["KnowledgeBaseId"];
        }

        if (array_key_exists("AttributeId",$param) and $param["AttributeId"] !== null) {
            $this->AttributeId = $param["AttributeId"];
        }

        if (array_key_exists("AttributeKey",$param) and $param["AttributeKey"] !== null) {
            $this->AttributeKey = $param["AttributeKey"];
        }

        if (array_key_exists("AttributeName",$param) and $param["AttributeName"] !== null) {
            $this->AttributeName = $param["AttributeName"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new AttributeLabelItem();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("DeleteLabelIds",$param) and $param["DeleteLabelIds"] !== null) {
            $this->DeleteLabelIds = $param["DeleteLabelIds"];
        }
    }
}
