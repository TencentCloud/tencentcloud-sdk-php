<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * 文档信息
 *
 * @method string getFileName() 获取文档名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileName(string $FileName) 设置文档名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileSize() 获取文档大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileSize(string $FileSize) 设置文档大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileUrl() 获取文档URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileUrl(string $FileUrl) 设置文档URL
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileType() 获取文档类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileType(string $FileType) 设置文档类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDocId() 获取文档ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDocId(string $DocId) 设置文档ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class MsgFileInfo extends AbstractModel
{
    /**
     * @var string 文档名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileName;

    /**
     * @var string 文档大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileSize;

    /**
     * @var string 文档URL
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileUrl;

    /**
     * @var string 文档类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileType;

    /**
     * @var string 文档ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DocId;

    /**
     * @param string $FileName 文档名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileSize 文档大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileUrl 文档URL
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileType 文档类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $DocId 文档ID
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
        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileSize",$param) and $param["FileSize"] !== null) {
            $this->FileSize = $param["FileSize"];
        }

        if (array_key_exists("FileUrl",$param) and $param["FileUrl"] !== null) {
            $this->FileUrl = $param["FileUrl"];
        }

        if (array_key_exists("FileType",$param) and $param["FileType"] !== null) {
            $this->FileType = $param["FileType"];
        }

        if (array_key_exists("DocId",$param) and $param["DocId"] !== null) {
            $this->DocId = $param["DocId"];
        }
    }
}
