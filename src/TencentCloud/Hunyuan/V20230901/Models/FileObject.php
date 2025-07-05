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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 已上传的文件对象。
 *
 * @method string getID() 获取文件标识符，可在各个API中引用。
 * @method void setID(string $ID) 设置文件标识符，可在各个API中引用。
 * @method string getObject() 获取对象类型，始终为 file。
 * @method void setObject(string $Object) 设置对象类型，始终为 file。
 * @method integer getBytes() 获取文件大小，单位为字节。
 * @method void setBytes(integer $Bytes) 设置文件大小，单位为字节。
 * @method integer getCreatedAt() 获取文件创建时的 Unix 时间戳（秒）。
 * @method void setCreatedAt(integer $CreatedAt) 设置文件创建时的 Unix 时间戳（秒）。
 * @method string getFilename() 获取文件名。
 * @method void setFilename(string $Filename) 设置文件名。
 * @method string getPurpose() 获取上传文件的用途。
 * @method void setPurpose(string $Purpose) 设置上传文件的用途。
 */
class FileObject extends AbstractModel
{
    /**
     * @var string 文件标识符，可在各个API中引用。
     */
    public $ID;

    /**
     * @var string 对象类型，始终为 file。
     */
    public $Object;

    /**
     * @var integer 文件大小，单位为字节。
     */
    public $Bytes;

    /**
     * @var integer 文件创建时的 Unix 时间戳（秒）。
     */
    public $CreatedAt;

    /**
     * @var string 文件名。
     */
    public $Filename;

    /**
     * @var string 上传文件的用途。
     */
    public $Purpose;

    /**
     * @param string $ID 文件标识符，可在各个API中引用。
     * @param string $Object 对象类型，始终为 file。
     * @param integer $Bytes 文件大小，单位为字节。
     * @param integer $CreatedAt 文件创建时的 Unix 时间戳（秒）。
     * @param string $Filename 文件名。
     * @param string $Purpose 上传文件的用途。
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Object",$param) and $param["Object"] !== null) {
            $this->Object = $param["Object"];
        }

        if (array_key_exists("Bytes",$param) and $param["Bytes"] !== null) {
            $this->Bytes = $param["Bytes"];
        }

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }

        if (array_key_exists("Filename",$param) and $param["Filename"] !== null) {
            $this->Filename = $param["Filename"];
        }

        if (array_key_exists("Purpose",$param) and $param["Purpose"] !== null) {
            $this->Purpose = $param["Purpose"];
        }
    }
}
