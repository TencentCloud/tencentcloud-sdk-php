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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 发布文件列表(SOURCEMAP)
 *
 * @method string getVersion() 获取<p>文件版本</p>
 * @method void setVersion(string $Version) 设置<p>文件版本</p>
 * @method string getFileKey() 获取<p>文件唯一 key</p>
 * @method void setFileKey(string $FileKey) 设置<p>文件唯一 key</p>
 * @method string getFileName() 获取<p>文件名</p>
 * @method void setFileName(string $FileName) 设置<p>文件名</p>
 * @method string getFileHash() 获取<p>文件哈希值</p>
 * @method void setFileHash(string $FileHash) 设置<p>文件哈希值</p>
 * @method integer getID() 获取<p>文件 id</p>
 * @method void setID(integer $ID) 设置<p>文件 id</p>
 * @method string getCreatedAt() 获取<p>创建时间</p>
 * @method void setCreatedAt(string $CreatedAt) 设置<p>创建时间</p>
 */
class ReleaseFile extends AbstractModel
{
    /**
     * @var string <p>文件版本</p>
     */
    public $Version;

    /**
     * @var string <p>文件唯一 key</p>
     */
    public $FileKey;

    /**
     * @var string <p>文件名</p>
     */
    public $FileName;

    /**
     * @var string <p>文件哈希值</p>
     */
    public $FileHash;

    /**
     * @var integer <p>文件 id</p>
     */
    public $ID;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreatedAt;

    /**
     * @param string $Version <p>文件版本</p>
     * @param string $FileKey <p>文件唯一 key</p>
     * @param string $FileName <p>文件名</p>
     * @param string $FileHash <p>文件哈希值</p>
     * @param integer $ID <p>文件 id</p>
     * @param string $CreatedAt <p>创建时间</p>
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

        if (array_key_exists("CreatedAt",$param) and $param["CreatedAt"] !== null) {
            $this->CreatedAt = $param["CreatedAt"];
        }
    }
}
