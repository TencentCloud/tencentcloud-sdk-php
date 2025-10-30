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
namespace TencentCloud\Lowcode\V20210108\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 上传知识库文档返回结果
 *
 * @method string getDocumentSetId() 获取给文件分配的 ID 信息。
 * @method void setDocumentSetId(string $DocumentSetId) 设置给文件分配的 ID 信息。
 * @method string getDocumentSetName() 获取文件名
 * @method void setDocumentSetName(string $DocumentSetName) 设置文件名
 * @method string getFileTitle() 获取文件标题
 * @method void setFileTitle(string $FileTitle) 设置文件标题
 * @method string getFileMetaData() 获取文件元信息，为jsonstring
 * @method void setFileMetaData(string $FileMetaData) 设置文件元信息，为jsonstring
 * @method string getFileId() 获取Cos存储文件ID
 * @method void setFileId(string $FileId) 设置Cos存储文件ID
 */
class UploadKnowledgeDocumentSetRsp extends AbstractModel
{
    /**
     * @var string 给文件分配的 ID 信息。
     * @deprecated
     */
    public $DocumentSetId;

    /**
     * @var string 文件名
     */
    public $DocumentSetName;

    /**
     * @var string 文件标题
     */
    public $FileTitle;

    /**
     * @var string 文件元信息，为jsonstring
     */
    public $FileMetaData;

    /**
     * @var string Cos存储文件ID
     */
    public $FileId;

    /**
     * @param string $DocumentSetId 给文件分配的 ID 信息。
     * @param string $DocumentSetName 文件名
     * @param string $FileTitle 文件标题
     * @param string $FileMetaData 文件元信息，为jsonstring
     * @param string $FileId Cos存储文件ID
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
        if (array_key_exists("DocumentSetId",$param) and $param["DocumentSetId"] !== null) {
            $this->DocumentSetId = $param["DocumentSetId"];
        }

        if (array_key_exists("DocumentSetName",$param) and $param["DocumentSetName"] !== null) {
            $this->DocumentSetName = $param["DocumentSetName"];
        }

        if (array_key_exists("FileTitle",$param) and $param["FileTitle"] !== null) {
            $this->FileTitle = $param["FileTitle"];
        }

        if (array_key_exists("FileMetaData",$param) and $param["FileMetaData"] !== null) {
            $this->FileMetaData = $param["FileMetaData"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }
    }
}
