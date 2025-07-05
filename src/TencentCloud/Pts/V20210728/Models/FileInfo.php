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
namespace TencentCloud\Pts\V20210728\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文件基本信息
 *
 * @method string getName() 获取文件名
 * @method void setName(string $Name) 设置文件名
 * @method integer getSize() 获取文件大小
 * @method void setSize(integer $Size) 设置文件大小
 * @method string getType() 获取文件类型
 * @method void setType(string $Type) 设置文件类型
 * @method string getUpdatedAt() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedAt(string $UpdatedAt) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFileId() 获取文件 ID
 * @method void setFileId(string $FileId) 设置文件 ID
 */
class FileInfo extends AbstractModel
{
    /**
     * @var string 文件名
     */
    public $Name;

    /**
     * @var integer 文件大小
     */
    public $Size;

    /**
     * @var string 文件类型
     */
    public $Type;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedAt;

    /**
     * @var string 文件 ID
     */
    public $FileId;

    /**
     * @param string $Name 文件名
     * @param integer $Size 文件大小
     * @param string $Type 文件类型
     * @param string $UpdatedAt 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FileId 文件 ID
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

        if (array_key_exists("FileId",$param) and $param["FileId"] !== null) {
            $this->FileId = $param["FileId"];
        }
    }
}
