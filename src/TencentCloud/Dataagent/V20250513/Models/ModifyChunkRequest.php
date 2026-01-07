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
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getFileId() 获取文件ID
 * @method void setFileId(string $FileId) 设置文件ID
 * @method string getChunkId() 获取切片ID
 * @method void setChunkId(string $ChunkId) 设置切片ID
 * @method string getContent() 获取编辑后的文本
 * @method void setContent(string $Content) 设置编辑后的文本
 * @method string getKnowledgeBaseId() 获取知识库id
 * @method void setKnowledgeBaseId(string $KnowledgeBaseId) 设置知识库id
 */
class ModifyChunkRequest extends AbstractModel
{
    /**
     * @var string 实例ID
     */
    public $InstanceId;

    /**
     * @var string 文件ID
     */
    public $FileId;

    /**
     * @var string 切片ID
     */
    public $ChunkId;

    /**
     * @var string 编辑后的文本
     */
    public $Content;

    /**
     * @var string 知识库id
     */
    public $KnowledgeBaseId;

    /**
     * @param string $InstanceId 实例ID
     * @param string $FileId 文件ID
     * @param string $ChunkId 切片ID
     * @param string $Content 编辑后的文本
     * @param string $KnowledgeBaseId 知识库id
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

        if (array_key_exists("KnowledgeBaseId",$param) and $param["KnowledgeBaseId"] !== null) {
            $this->KnowledgeBaseId = $param["KnowledgeBaseId"];
        }
    }
}
