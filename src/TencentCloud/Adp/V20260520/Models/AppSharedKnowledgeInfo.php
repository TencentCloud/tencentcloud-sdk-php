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
 * 应用引用的共享知识库简要信息(查询时仅返回ID和名称)
 *
 * @method string getKnowledgeId() 获取共享知识库ID
 * @method void setKnowledgeId(string $KnowledgeId) 设置共享知识库ID
 * @method string getKnowledgeName() 获取共享知识库名称
 * @method void setKnowledgeName(string $KnowledgeName) 设置共享知识库名称
 */
class AppSharedKnowledgeInfo extends AbstractModel
{
    /**
     * @var string 共享知识库ID
     */
    public $KnowledgeId;

    /**
     * @var string 共享知识库名称
     */
    public $KnowledgeName;

    /**
     * @param string $KnowledgeId 共享知识库ID
     * @param string $KnowledgeName 共享知识库名称
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
        if (array_key_exists("KnowledgeId",$param) and $param["KnowledgeId"] !== null) {
            $this->KnowledgeId = $param["KnowledgeId"];
        }

        if (array_key_exists("KnowledgeName",$param) and $param["KnowledgeName"] !== null) {
            $this->KnowledgeName = $param["KnowledgeName"];
        }
    }
}
