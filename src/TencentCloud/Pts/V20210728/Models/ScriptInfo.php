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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 脚本信息
 *
 * @method string getName() 获取文件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置文件名
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSize() 获取文件大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSize(integer $Size) 设置文件大小
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getType() 获取文件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(string $Type) 设置文件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedAt() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedAt(string $UpdatedAt) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEncodedContent() 获取base64编码后的文件内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEncodedContent(string $EncodedContent) 设置base64编码后的文件内容
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getEncodedHttpArchive() 获取base64编码后的har结构体
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEncodedHttpArchive(string $EncodedHttpArchive) 设置base64编码后的har结构体
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLoadWeight() 获取脚本权重，范围 1-100
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLoadWeight(integer $LoadWeight) 设置脚本权重，范围 1-100
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileId() 获取文件 ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFileId(string $FileId) 设置文件 ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class ScriptInfo extends AbstractModel
{
    /**
     * @var string 文件名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var integer 文件大小
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Size;

    /**
     * @var string 文件类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedAt;

    /**
     * @var string base64编码后的文件内容
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EncodedContent;

    /**
     * @var string base64编码后的har结构体
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EncodedHttpArchive;

    /**
     * @var integer 脚本权重，范围 1-100
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LoadWeight;

    /**
     * @var string 文件 ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FileId;

    /**
     * @param string $Name 文件名
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Size 文件大小
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Type 文件类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedAt 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EncodedContent base64编码后的文件内容
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $EncodedHttpArchive base64编码后的har结构体
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LoadWeight 脚本权重，范围 1-100
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileId 文件 ID
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("EncodedContent",$param) and $param["EncodedContent"] !== null) {
            $this->EncodedContent = $param["EncodedContent"];
        }

        if (array_key_exists("EncodedHttpArchive",$param) and $param["EncodedHttpArchive"] !== null) {
            $this->EncodedHttpArchive = $param["EncodedHttpArchive"];
        }

        if (array_key_exists("LoadWeight",$param) and $param["LoadWeight"] !== null) {
            $this->LoadWeight = $param["LoadWeight"];
        }

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }
    }
}
