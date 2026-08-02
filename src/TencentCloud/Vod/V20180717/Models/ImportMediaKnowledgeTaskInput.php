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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 任务流模板导入智能媒资知识库输入参数类型。
 *
 * @method integer getDefinition() 获取<p>大模型理解模板</p>
 * @method void setDefinition(integer $Definition) 设置<p>大模型理解模板</p>
 * @method array getKnowledgeBaseIds() 获取<p>知识库ID列表，留空时将使用默认知识库</p>
 * @method void setKnowledgeBaseIds(array $KnowledgeBaseIds) 设置<p>知识库ID列表，留空时将使用默认知识库</p>
 */
class ImportMediaKnowledgeTaskInput extends AbstractModel
{
    /**
     * @var integer <p>大模型理解模板</p>
     */
    public $Definition;

    /**
     * @var array <p>知识库ID列表，留空时将使用默认知识库</p>
     */
    public $KnowledgeBaseIds;

    /**
     * @param integer $Definition <p>大模型理解模板</p>
     * @param array $KnowledgeBaseIds <p>知识库ID列表，留空时将使用默认知识库</p>
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
        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("KnowledgeBaseIds",$param) and $param["KnowledgeBaseIds"] !== null) {
            $this->KnowledgeBaseIds = $param["KnowledgeBaseIds"];
        }
    }
}
