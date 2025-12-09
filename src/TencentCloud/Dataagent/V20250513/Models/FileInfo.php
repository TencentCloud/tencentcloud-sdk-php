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
 * 知识库文件信息
 *
 * @method string getFileName() 获取文件名称
 * @method void setFileName(string $FileName) 设置文件名称
 * @method float getFileSize() 获取文件大小，字节
 * @method void setFileSize(float $FileSize) 设置文件大小，字节
 * @method integer getType() 获取文件类型,0=文本,1=表格，默认0

 * @method void setType(integer $Type) 设置文件类型,0=文本,1=表格，默认0

 * @method string getFileId() 获取文件ID
 * @method void setFileId(string $FileId) 设置文件ID
 * @method integer getStatus() 获取状态，0：数据处理中  1：可用 -1：错误
 * @method void setStatus(integer $Status) 设置状态，0：数据处理中  1：可用 -1：错误
 * @method string getCreateUser() 获取操作者

 * @method void setCreateUser(string $CreateUser) 设置操作者

 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method KnowledgeTaskConfig getChunkConfig() 获取分片策略
 * @method void setChunkConfig(KnowledgeTaskConfig $ChunkConfig) 设置分片策略
 * @method integer getSource() 获取文件来源0=unknow,1=user_cos,2=local
 * @method void setSource(integer $Source) 设置文件来源0=unknow,1=user_cos,2=local
 * @method string getFileUrl() 获取文件url
 * @method void setFileUrl(string $FileUrl) 设置文件url
 * @method integer getIsShowCase() 获取是否官方示例，0=否，1=是
 * @method void setIsShowCase(integer $IsShowCase) 设置是否官方示例，0=否，1=是
 * @method string getDocumentSummary() 获取文档摘要
 * @method void setDocumentSummary(string $DocumentSummary) 设置文档摘要
 */
class FileInfo extends AbstractModel
{
    /**
     * @var string 文件名称
     */
    public $FileName;

    /**
     * @var float 文件大小，字节
     */
    public $FileSize;

    /**
     * @var integer 文件类型,0=文本,1=表格，默认0

     */
    public $Type;

    /**
     * @var string 文件ID
     */
    public $FileId;

    /**
     * @var integer 状态，0：数据处理中  1：可用 -1：错误
     */
    public $Status;

    /**
     * @var string 操作者

     */
    public $CreateUser;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var KnowledgeTaskConfig 分片策略
     */
    public $ChunkConfig;

    /**
     * @var integer 文件来源0=unknow,1=user_cos,2=local
     */
    public $Source;

    /**
     * @var string 文件url
     */
    public $FileUrl;

    /**
     * @var integer 是否官方示例，0=否，1=是
     */
    public $IsShowCase;

    /**
     * @var string 文档摘要
     */
    public $DocumentSummary;

    /**
     * @param string $FileName 文件名称
     * @param float $FileSize 文件大小，字节
     * @param integer $Type 文件类型,0=文本,1=表格，默认0

     * @param string $FileId 文件ID
     * @param integer $Status 状态，0：数据处理中  1：可用 -1：错误
     * @param string $CreateUser 操作者

     * @param string $CreateTime 创建时间
     * @param KnowledgeTaskConfig $ChunkConfig 分片策略
     * @param integer $Source 文件来源0=unknow,1=user_cos,2=local
     * @param string $FileUrl 文件url
     * @param integer $IsShowCase 是否官方示例，0=否，1=是
     * @param string $DocumentSummary 文档摘要
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CreateUser",$param) and $param["CreateUser"] !== null) {
            $this->CreateUser = $param["CreateUser"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ChunkConfig",$param) and $param["ChunkConfig"] !== null) {
            $this->ChunkConfig = new KnowledgeTaskConfig();
            $this->ChunkConfig->deserialize($param["ChunkConfig"]);
        }

        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("IsShowCase",$param) and $param["IsShowCase"] !== null) {
            $this->IsShowCase = $param["IsShowCase"];
        }

        if (array_key_exists("DocumentSummary",$param) and $param["DocumentSummary"] !== null) {
            $this->DocumentSummary = $param["DocumentSummary"];
        }
    }
}
