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
 * @method integer getDocBizId() 获取实时文档解析接口返回的 DocBizId
 * @method void setDocBizId(integer $DocBizId) 设置实时文档解析接口返回的 DocBizId
 * @method string getFileName() 获取文件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileName(string $FileName) 设置文件名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileType() 获取文件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileType(string $FileType) 设置文件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFileSize() 获取文件大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileSize(integer $FileSize) 设置文件大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileUrl() 获取文件 URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileUrl(string $FileUrl) 设置文件 URL
注意：此字段可能返回 null，表示取不到有效值。
 */
class FileInfoContent extends AbstractModel
{
    /**
     * @var integer 实时文档解析接口返回的 DocBizId
     */
    public $DocBizId;

    /**
     * @var string 文件名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileName;

    /**
     * @var string 文件类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileType;

    /**
     * @var integer 文件大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileSize;

    /**
     * @var string 文件 URL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileUrl;

    /**
     * @param integer $DocBizId 实时文档解析接口返回的 DocBizId
     * @param string $FileName 文件名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileType 文件类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FileSize 文件大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileUrl 文件 URL
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
    }
}
