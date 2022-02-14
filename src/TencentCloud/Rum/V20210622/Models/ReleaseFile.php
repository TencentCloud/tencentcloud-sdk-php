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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 发布文件列表(SOURCEMAP)
 *
 * @method string getVersion() 获取文件版本
 * @method void setVersion(string $Version) 设置文件版本
 * @method string getFileKey() 获取文件唯一 key
 * @method void setFileKey(string $FileKey) 设置文件唯一 key
 * @method string getFileName() 获取文件名
 * @method void setFileName(string $FileName) 设置文件名
 * @method string getFileHash() 获取文件哈希值
 * @method void setFileHash(string $FileHash) 设置文件哈希值
 * @method integer getID() 获取文件 id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setID(integer $ID) 设置文件 id
注意：此字段可能返回 null，表示取不到有效值。
 */
class ReleaseFile extends AbstractModel
{
    /**
     * @var string 文件版本
     */
    public $Version;

    /**
     * @var string 文件唯一 key
     */
    public $FileKey;

    /**
     * @var string 文件名
     */
    public $FileName;

    /**
     * @var string 文件哈希值
     */
    public $FileHash;

    /**
     * @var integer 文件 id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ID;

    /**
     * @param string $Version 文件版本
     * @param string $FileKey 文件唯一 key
     * @param string $FileName 文件名
     * @param string $FileHash 文件哈希值
     * @param integer $ID 文件 id
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
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("FileKey",$param) and $param["FileKey"] !== null) {
            $this->FileKey = $param["FileKey"];
        }

        if (array_key_exists("FileName",$param) and $param["FileName"] !== null) {
            $this->FileName = $param["FileName"];
        }

        if (array_key_exists("FileHash",$param) and $param["FileHash"] !== null) {
            $this->FileHash = $param["FileHash"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }
    }
}
