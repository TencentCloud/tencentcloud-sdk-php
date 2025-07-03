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
 * DeleteDocs请求参数结构体
 *
 * @method string getKnowledgeBaseId() 获取知识库ID
 * @method void setKnowledgeBaseId(string $KnowledgeBaseId) 设置知识库ID
 * @method array getDocIds() 获取文档ID列表。支持批量删除，数量不超过100
 * @method void setDocIds(array $DocIds) 设置文档ID列表。支持批量删除，数量不超过100
 */
class DeleteDocsRequest extends AbstractModel
{
    /**
     * @var string 知识库ID
     */
    public $KnowledgeBaseId;

    /**
     * @var array 文档ID列表。支持批量删除，数量不超过100
     */
    public $DocIds;

    /**
     * @param string $KnowledgeBaseId 知识库ID
     * @param array $DocIds 文档ID列表。支持批量删除，数量不超过100
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

        if (array_key_exists("DocIds",$param) and $param["DocIds"] !== null) {
            $this->DocIds = $param["DocIds"];
        }
    }
}
