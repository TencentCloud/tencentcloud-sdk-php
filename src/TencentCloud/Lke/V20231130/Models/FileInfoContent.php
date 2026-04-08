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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文件信息内容
 *
 * @method string getDocBizId() 获取<p>实时文档解析接口返回的 DocBizId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDocBizId(string $DocBizId) 设置<p>实时文档解析接口返回的 DocBizId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileName() 获取<p>文件名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileName(string $FileName) 设置<p>文件名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileType() 获取<p>文件类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileType(string $FileType) 设置<p>文件类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileSize() 获取<p>文件大小，单位为Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileSize(string $FileSize) 设置<p>文件大小，单位为Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileUrl() 获取<p>文件 URL</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileUrl(string $FileUrl) 设置<p>文件 URL</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDocId() 获取<p>实时文档解析接口返回的 doc_id。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDocId(string $DocId) 设置<p>实时文档解析接口返回的 doc_id。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>文件创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>文件创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class FileInfoContent extends AbstractModel
{
    /**
     * @var string <p>实时文档解析接口返回的 DocBizId</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @deprecated
     */
    public $DocBizId;

    /**
     * @var string <p>文件名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileName;

    /**
     * @var string <p>文件类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileType;

    /**
     * @var string <p>文件大小，单位为Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileSize;

    /**
     * @var string <p>文件 URL</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileUrl;

    /**
     * @var string <p>实时文档解析接口返回的 doc_id。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DocId;

    /**
     * @var string <p>文件创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @param string $DocBizId <p>实时文档解析接口返回的 DocBizId</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileName <p>文件名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileType <p>文件类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileSize <p>文件大小，单位为Byte</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileUrl <p>文件 URL</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DocId <p>实时文档解析接口返回的 doc_id。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>文件创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("DocBizId",$param) and $param["DocBizId"] !== null) {
            $this->DocBizId = $param["DocBizId"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("DocId",$param) and $param["DocId"] !== null) {
            $this->DocId = $param["DocId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
