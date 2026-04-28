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
 * @method string getFileName() 获取<p>文件名称</p>
 * @method void setFileName(string $FileName) 设置<p>文件名称</p>
 * @method float getFileSize() 获取<p>文件大小，字节</p>
 * @method void setFileSize(float $FileSize) 设置<p>文件大小，字节</p>
 * @method integer getType() 获取<p>文件类型,0=文本,1=表格，默认0</p>
 * @method void setType(integer $Type) 设置<p>文件类型,0=文本,1=表格，默认0</p>
 * @method string getFileId() 获取<p>文件ID</p>
 * @method void setFileId(string $FileId) 设置<p>文件ID</p>
 * @method integer getStatus() 获取<p>状态，0：数据处理中  1：可用 -1：错误</p>
 * @method void setStatus(integer $Status) 设置<p>状态，0：数据处理中  1：可用 -1：错误</p>
 * @method string getCreateUser() 获取<p>操作者</p>
 * @method void setCreateUser(string $CreateUser) 设置<p>操作者</p>
 * @method string getCreateTime() 获取<p>创建时间</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
 * @method KnowledgeTaskConfig getChunkConfig() 获取<p>分片策略</p>
 * @method void setChunkConfig(KnowledgeTaskConfig $ChunkConfig) 设置<p>分片策略</p>
 * @method integer getSource() 获取<p>文件来源0=unknow,1=user_cos,2=local</p>
 * @method void setSource(integer $Source) 设置<p>文件来源0=unknow,1=user_cos,2=local</p>
 * @method string getFileUrl() 获取<p>文件url</p>
 * @method void setFileUrl(string $FileUrl) 设置<p>文件url</p>
 * @method integer getIsShowCase() 获取<p>是否官方示例，0=否，1=是</p>
 * @method void setIsShowCase(integer $IsShowCase) 设置<p>是否官方示例，0=否，1=是</p>
 * @method string getDocumentSummary() 获取<p>文档摘要</p>
 * @method void setDocumentSummary(string $DocumentSummary) 设置<p>文档摘要</p>
 * @method string getWebUrl() 获取<p>网页地址</p>
 * @method void setWebUrl(string $WebUrl) 设置<p>网页地址</p>
 * @method array getCapabilities() 获取<p>文件能力标识列表</p>
 * @method void setCapabilities(array $Capabilities) 设置<p>文件能力标识列表</p>
 */
class FileInfo extends AbstractModel
{
    /**
     * @var string <p>文件名称</p>
     */
    public $FileName;

    /**
     * @var float <p>文件大小，字节</p>
     */
    public $FileSize;

    /**
     * @var integer <p>文件类型,0=文本,1=表格，默认0</p>
     */
    public $Type;

    /**
     * @var string <p>文件ID</p>
     */
    public $FileId;

    /**
     * @var integer <p>状态，0：数据处理中  1：可用 -1：错误</p>
     */
    public $Status;

    /**
     * @var string <p>操作者</p>
     */
    public $CreateUser;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreateTime;

    /**
     * @var KnowledgeTaskConfig <p>分片策略</p>
     */
    public $ChunkConfig;

    /**
     * @var integer <p>文件来源0=unknow,1=user_cos,2=local</p>
     */
    public $Source;

    /**
     * @var string <p>文件url</p>
     */
    public $FileUrl;

    /**
     * @var integer <p>是否官方示例，0=否，1=是</p>
     */
    public $IsShowCase;

    /**
     * @var string <p>文档摘要</p>
     */
    public $DocumentSummary;

    /**
     * @var string <p>网页地址</p>
     */
    public $WebUrl;

    /**
     * @var array <p>文件能力标识列表</p>
     */
    public $Capabilities;

    /**
     * @param string $FileName <p>文件名称</p>
     * @param float $FileSize <p>文件大小，字节</p>
     * @param integer $Type <p>文件类型,0=文本,1=表格，默认0</p>
     * @param string $FileId <p>文件ID</p>
     * @param integer $Status <p>状态，0：数据处理中  1：可用 -1：错误</p>
     * @param string $CreateUser <p>操作者</p>
     * @param string $CreateTime <p>创建时间</p>
     * @param KnowledgeTaskConfig $ChunkConfig <p>分片策略</p>
     * @param integer $Source <p>文件来源0=unknow,1=user_cos,2=local</p>
     * @param string $FileUrl <p>文件url</p>
     * @param integer $IsShowCase <p>是否官方示例，0=否，1=是</p>
     * @param string $DocumentSummary <p>文档摘要</p>
     * @param string $WebUrl <p>网页地址</p>
     * @param array $Capabilities <p>文件能力标识列表</p>
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

        if (array_key_exists("WebUrl",$param) and $param["WebUrl"] !== null) {
            $this->WebUrl = $param["WebUrl"];
        }

        if (array_key_exists("Capabilities",$param) and $param["Capabilities"] !== null) {
            $this->Capabilities = $param["Capabilities"];
        }
    }
}
