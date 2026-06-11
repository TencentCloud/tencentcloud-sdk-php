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
namespace TencentCloud\Dataagent\V20250513\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyChunk请求参数结构体
 *
 * @method string getInstanceId() 获取<p>实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例ID</p>
 * @method string getFileId() 获取<p>文件ID</p>
 * @method void setFileId(string $FileId) 设置<p>文件ID</p>
 * @method string getChunkId() 获取<p>切片ID</p>
 * @method void setChunkId(string $ChunkId) 设置<p>切片ID</p>
 * @method string getContent() 获取<p>编辑后的文本</p>
 * @method void setContent(string $Content) 设置<p>编辑后的文本</p>
 * @method string getSummary() 获取<p>分段概要</p>
 * @method void setSummary(string $Summary) 设置<p>分段概要</p>
 * @method string getKnowledgeBaseId() 获取<p>知识库id</p>
 * @method void setKnowledgeBaseId(string $KnowledgeBaseId) 设置<p>知识库id</p>
 */
class ModifyChunkRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID</p>
     */
    public $InstanceId;

    /**
     * @var string <p>文件ID</p>
     */
    public $FileId;

    /**
     * @var string <p>切片ID</p>
     */
    public $ChunkId;

    /**
     * @var string <p>编辑后的文本</p>
     */
    public $Content;

    /**
     * @var string <p>分段概要</p>
     */
    public $Summary;

    /**
     * @var string <p>知识库id</p>
     */
    public $KnowledgeBaseId;

    /**
     * @param string $InstanceId <p>实例ID</p>
     * @param string $FileId <p>文件ID</p>
     * @param string $ChunkId <p>切片ID</p>
     * @param string $Content <p>编辑后的文本</p>
     * @param string $Summary <p>分段概要</p>
     * @param string $KnowledgeBaseId <p>知识库id</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("ChunkId",$param) and $param["ChunkId"] !== null) {
            $this->ChunkId = $param["ChunkId"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Summary",$param) and $param["Summary"] !== null) {
            $this->Summary = $param["Summary"];
        }

        if (array_key_exists("KnowledgeBaseId",$param) and $param["KnowledgeBaseId"] !== null) {
            $this->KnowledgeBaseId = $param["KnowledgeBaseId"];
        }
    }
}
