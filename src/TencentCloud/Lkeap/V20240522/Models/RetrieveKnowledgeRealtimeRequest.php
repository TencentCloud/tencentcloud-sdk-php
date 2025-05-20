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
 * RetrieveKnowledgeRealtime请求参数结构体
 *
 * @method string getKnowledgeBaseId() 获取知识库ID。
 * @method void setKnowledgeBaseId(string $KnowledgeBaseId) 设置知识库ID。
 * @method string getQuery() 获取用于检索的文本。
 * @method void setQuery(string $Query) 设置用于检索的文本。
 * @method array getDocIds() 获取实时文件ID列表。
 * @method void setDocIds(array $DocIds) 设置实时文件ID列表。
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
 */
class RetrieveKnowledgeRealtimeRequest extends AbstractModel
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
     * @var array 实时文件ID列表。
     */
    public $DocIds;

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
     * @param string $KnowledgeBaseId 知识库ID。
     * @param string $Query 用于检索的文本。
     * @param array $DocIds 实时文件ID列表。
     * @param string $RetrievalMethod 检索方法，默认使用`HYBRID`混合检索。
- `SEMANTIC`：语义检索
- `FULL_TEXT`：全文检索
- `HYBRID`：混合检索
     * @param RetrievalSetting $RetrievalSetting 检索设置。
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

        if (array_key_exists("DocIds",$param) and $param["DocIds"] !== null) {
            $this->DocIds = $param["DocIds"];
        }

        if (array_key_exists("RetrievalMethod",$param) and $param["RetrievalMethod"] !== null) {
            $this->RetrievalMethod = $param["RetrievalMethod"];
        }

        if (array_key_exists("RetrievalSetting",$param) and $param["RetrievalSetting"] !== null) {
            $this->RetrievalSetting = new RetrievalSetting();
            $this->RetrievalSetting->deserialize($param["RetrievalSetting"]);
        }
    }
}
