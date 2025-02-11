<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * @method string getKnowledgeBaseId() 获取知识库ID
 * @method void setKnowledgeBaseId(string $KnowledgeBaseId) 设置知识库ID
 * @method string getAttributeId() 获取属性ID
 * @method void setAttributeId(string $AttributeId) 设置属性ID
 * @method string getAttributeKey() 获取属性标识，最大40个英文字符，如style
 * @method void setAttributeKey(string $AttributeKey) 设置属性标识，最大40个英文字符，如style
 * @method string getAttributeName() 获取属性名称，最大80个英文字符，如风格
 * @method void setAttributeName(string $AttributeName) 设置属性名称，最大80个英文字符，如风格
 * @method array getLabels() 获取属性标签
 * @method void setLabels(array $Labels) 设置属性标签
 */
class ModifyAttributeLabelRequest extends AbstractModel
{
    /**
     * @var string 知识库ID
     */
    public $KnowledgeBaseId;

    /**
     * @var string 属性ID
     */
    public $AttributeId;

    /**
     * @var string 属性标识，最大40个英文字符，如style
     */
    public $AttributeKey;

    /**
     * @var string 属性名称，最大80个英文字符，如风格
     */
    public $AttributeName;

    /**
     * @var array 属性标签
     */
    public $Labels;

    /**
     * @param string $KnowledgeBaseId 知识库ID
     * @param string $AttributeId 属性ID
     * @param string $AttributeKey 属性标识，最大40个英文字符，如style
     * @param string $AttributeName 属性名称，最大80个英文字符，如风格
     * @param array $Labels 属性标签
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
    }
}
