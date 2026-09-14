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
 * 知识片段基础信息
 *
 * @method string getContent() 获取<p>内容</p>
 * @method void setContent(string $Content) 设置<p>内容</p>
 * @method string getDocId() 获取<p>关联文档 ID</p>
 * @method void setDocId(string $DocId) 设置<p>关联文档 ID</p>
 * @method string getDocName() 获取<p>文档名</p>
 * @method void setDocName(string $DocName) 设置<p>文档名</p>
 * @method string getKbId() 获取<p>知识库 ID</p>
 * @method void setKbId(string $KbId) 设置<p>知识库 ID</p>
 * @method string getKnowledgeId() 获取<p>知识 ID</p>
 * @method void setKnowledgeId(string $KnowledgeId) 设置<p>知识 ID</p>
 * @method string getQuestion() 获取<p>问题</p>
 * @method void setQuestion(string $Question) 设置<p>问题</p>
 * @method string getTitle() 获取<p>文档标题</p>
 * @method void setTitle(string $Title) 设置<p>文档标题</p>
 */
class KnowledgeSnippetProfile extends AbstractModel
{
    /**
     * @var string <p>内容</p>
     */
    public $Content;

    /**
     * @var string <p>关联文档 ID</p>
     */
    public $DocId;

    /**
     * @var string <p>文档名</p>
     */
    public $DocName;

    /**
     * @var string <p>知识库 ID</p>
     */
    public $KbId;

    /**
     * @var string <p>知识 ID</p>
     */
    public $KnowledgeId;

    /**
     * @var string <p>问题</p>
     */
    public $Question;

    /**
     * @var string <p>文档标题</p>
     */
    public $Title;

    /**
     * @param string $Content <p>内容</p>
     * @param string $DocId <p>关联文档 ID</p>
     * @param string $DocName <p>文档名</p>
     * @param string $KbId <p>知识库 ID</p>
     * @param string $KnowledgeId <p>知识 ID</p>
     * @param string $Question <p>问题</p>
     * @param string $Title <p>文档标题</p>
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
        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("DocId",$param) and $param["DocId"] !== null) {
            $this->DocId = $param["DocId"];
        }

        if (array_key_exists("DocName",$param) and $param["DocName"] !== null) {
            $this->DocName = $param["DocName"];
        }

        if (array_key_exists("KbId",$param) and $param["KbId"] !== null) {
            $this->KbId = $param["KbId"];
        }

        if (array_key_exists("KnowledgeId",$param) and $param["KnowledgeId"] !== null) {
            $this->KnowledgeId = $param["KnowledgeId"];
        }

        if (array_key_exists("Question",$param) and $param["Question"] !== null) {
            $this->Question = $param["Question"];
        }

        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }
    }
}
