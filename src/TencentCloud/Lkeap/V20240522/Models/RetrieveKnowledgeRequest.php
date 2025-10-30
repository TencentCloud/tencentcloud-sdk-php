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
 * RetrieveKnowledge请求参数结构体
 *
 * @method string getKnowledgeBaseId() 获取知识库ID。
 * @method void setKnowledgeBaseId(string $KnowledgeBaseId) 设置知识库ID。
 * @method string getQuery() 获取用于检索的文本。
 * @method void setQuery(string $Query) 设置用于检索的文本。
 * @method string getRetrievalMethod() 获取检索方法，默认使用`HYBRID`混合检索。
- `SEMANTIC`：语义检索
- `FULL_TEXT`：全文检索
- `HYBRID`：混合检索
 * @method void setRetrievalMethod(string $RetrievalMethod) 设置检索方法，默认使用`HYBRID`混合检索。
- `SEMANTIC`：语义检索
- `FULL_TEXT`：全文检索
- `HYBRID`：混合检索
 * @method RetrievalSetting getRetrievalSetting() 获取检索设置。
 * @method void setRetrievalSetting(RetrievalSetting $RetrievalSetting) 设置检索设置。
 * @method array getAttributeLabels() 获取标签过滤。
 * @method void setAttributeLabels(array $AttributeLabels) 设置标签过滤。
 */
class RetrieveKnowledgeRequest extends AbstractModel
{
    /**
     * @var string 知识库ID。
     */
    public $KnowledgeBaseId;

    /**
     * @var string 用于检索的文本。
     */
    public $Query;

    /**
     * @var string 检索方法，默认使用`HYBRID`混合检索。
- `SEMANTIC`：语义检索
- `FULL_TEXT`：全文检索
- `HYBRID`：混合检索
     */
    public $RetrievalMethod;

    /**
     * @var RetrievalSetting 检索设置。
     */
    public $RetrievalSetting;

    /**
     * @var array 标签过滤。
     */
    public $AttributeLabels;

    /**
     * @param string $KnowledgeBaseId 知识库ID。
     * @param string $Query 用于检索的文本。
     * @param string $RetrievalMethod 检索方法，默认使用`HYBRID`混合检索。
- `SEMANTIC`：语义检索
- `FULL_TEXT`：全文检索
- `HYBRID`：混合检索
     * @param RetrievalSetting $RetrievalSetting 检索设置。
     * @param array $AttributeLabels 标签过滤。
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

        if (array_key_exists("Query",$param) and $param["Query"] !== null) {
            $this->Query = $param["Query"];
        }

        if (array_key_exists("RetrievalMethod",$param) and $param["RetrievalMethod"] !== null) {
            $this->RetrievalMethod = $param["RetrievalMethod"];
        }

        if (array_key_exists("RetrievalSetting",$param) and $param["RetrievalSetting"] !== null) {
            $this->RetrievalSetting = new RetrievalSetting();
            $this->RetrievalSetting->deserialize($param["RetrievalSetting"]);
        }

        if (array_key_exists("AttributeLabels",$param) and $param["AttributeLabels"] !== null) {
            $this->AttributeLabels = [];
            foreach ($param["AttributeLabels"] as $key => $value){
                $obj = new LabelItem();
                $obj->deserialize($value);
                array_push($this->AttributeLabels, $obj);
            }
        }
    }
}
