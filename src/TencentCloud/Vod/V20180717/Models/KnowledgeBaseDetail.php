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
 * 媒资当导入的知识库列表，以及使用的解析模板等详细信息
 *
 * @method string getKnowledgeBaseId() 获取<p>知识库ID</p>
 * @method void setKnowledgeBaseId(string $KnowledgeBaseId) 设置<p>知识库ID</p>
 * @method integer getDefinition() 获取<p>关联的大模型解析模板</p>
 * @method void setDefinition(integer $Definition) 设置<p>关联的大模型解析模板</p>
 * @method string getImportTime() 获取<p>入库时间</p>
 * @method void setImportTime(string $ImportTime) 设置<p>入库时间</p>
 */
class KnowledgeBaseDetail extends AbstractModel
{
    /**
     * @var string <p>知识库ID</p>
     */
    public $KnowledgeBaseId;

    /**
     * @var integer <p>关联的大模型解析模板</p>
     */
    public $Definition;

    /**
     * @var string <p>入库时间</p>
     */
    public $ImportTime;

    /**
     * @param string $KnowledgeBaseId <p>知识库ID</p>
     * @param integer $Definition <p>关联的大模型解析模板</p>
     * @param string $ImportTime <p>入库时间</p>
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

        if (array_key_exists("Definition",$param) and $param["Definition"] !== null) {
            $this->Definition = $param["Definition"];
        }

        if (array_key_exists("ImportTime",$param) and $param["ImportTime"] !== null) {
            $this->ImportTime = $param["ImportTime"];
        }
    }
}
