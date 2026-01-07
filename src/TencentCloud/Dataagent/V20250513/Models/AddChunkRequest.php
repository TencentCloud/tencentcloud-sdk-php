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
 * AddChunk请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID
 * @method void setInstanceId(string $InstanceId) 设置实例ID
 * @method string getFileId() 获取文件ID
 * @method void setFileId(string $FileId) 设置文件ID
 * @method string getBeforeChunkId() 获取新增chunk的后面一个ChunkID。如果是空就是插到队尾。插入位置的下一个 chunkId。如果插到最前面，传入原切片的第一个。
 * @method void setBeforeChunkId(string $BeforeChunkId) 设置新增chunk的后面一个ChunkID。如果是空就是插到队尾。插入位置的下一个 chunkId。如果插到最前面，传入原切片的第一个。
 * @method integer getInsertPos() 获取显式指定的位置,实际的位置。从 0 开始计算。0 代表插到最前面，chunk total 代表插到最后面。
 * @method void setInsertPos(integer $InsertPos) 设置显式指定的位置,实际的位置。从 0 开始计算。0 代表插到最前面，chunk total 代表插到最后面。
 * @method string getContent() 获取chunk内容
 * @method void setContent(string $Content) 设置chunk内容
 * @method string getAfterChunkId() 获取新 Chunk 插入到目标 Chunk ​之后的位置。插入位置的上一个 chunkId
 * @method void setAfterChunkId(string $AfterChunkId) 设置新 Chunk 插入到目标 Chunk ​之后的位置。插入位置的上一个 chunkId
 * @method string getKnowledgeBaseId() 获取知识库id
 * @method void setKnowledgeBaseId(string $KnowledgeBaseId) 设置知识库id
 */
class AddChunkRequest extends AbstractModel
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
     * @var string 新增chunk的后面一个ChunkID。如果是空就是插到队尾。插入位置的下一个 chunkId。如果插到最前面，传入原切片的第一个。
     */
    public $BeforeChunkId;

    /**
     * @var integer 显式指定的位置,实际的位置。从 0 开始计算。0 代表插到最前面，chunk total 代表插到最后面。
     */
    public $InsertPos;

    /**
     * @var string chunk内容
     */
    public $Content;

    /**
     * @var string 新 Chunk 插入到目标 Chunk ​之后的位置。插入位置的上一个 chunkId
     */
    public $AfterChunkId;

    /**
     * @var string 知识库id
     */
    public $KnowledgeBaseId;

    /**
     * @param string $InstanceId 实例ID
     * @param string $FileId 文件ID
     * @param string $BeforeChunkId 新增chunk的后面一个ChunkID。如果是空就是插到队尾。插入位置的下一个 chunkId。如果插到最前面，传入原切片的第一个。
     * @param integer $InsertPos 显式指定的位置,实际的位置。从 0 开始计算。0 代表插到最前面，chunk total 代表插到最后面。
     * @param string $Content chunk内容
     * @param string $AfterChunkId 新 Chunk 插入到目标 Chunk ​之后的位置。插入位置的上一个 chunkId
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

        if (array_key_exists("BeforeChunkId",$param) and $param["BeforeChunkId"] !== null) {
            $this->BeforeChunkId = $param["BeforeChunkId"];
        }

        if (array_key_exists("InsertPos",$param) and $param["InsertPos"] !== null) {
            $this->InsertPos = $param["InsertPos"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("AfterChunkId",$param) and $param["AfterChunkId"] !== null) {
            $this->AfterChunkId = $param["AfterChunkId"];
        }

        if (array_key_exists("KnowledgeBaseId",$param) and $param["KnowledgeBaseId"] !== null) {
            $this->KnowledgeBaseId = $param["KnowledgeBaseId"];
        }
    }
}
