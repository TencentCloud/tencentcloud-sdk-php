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
namespace TencentCloud\Bdrc\V20260330\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文件信息
 *
 * @method string getPath() 获取完整路径：浏览路径 + "/" + 名称（浏览根目录时为 "/名称"）
 * @method void setPath(string $Path) 设置完整路径：浏览路径 + "/" + 名称（浏览根目录时为 "/名称"）
 * @method integer getSize() 获取文件大小，单位是Bytes
 * @method void setSize(integer $Size) 设置文件大小，单位是Bytes
 * @method integer getModifyTime() 获取文件mtime
 * @method void setModifyTime(integer $ModifyTime) 设置文件mtime
 * @method integer getChangeTime() 获取文件ctime
 * @method void setChangeTime(integer $ChangeTime) 设置文件ctime
 * @method string getType() 获取文件类型。取值包含"dir"、"file"、"symlink"
 * @method void setType(string $Type) 设置文件类型。取值包含"dir"、"file"、"symlink"
 */
class FileInfo extends AbstractModel
{
    /**
     * @var string 完整路径：浏览路径 + "/" + 名称（浏览根目录时为 "/名称"）
     */
    public $Path;

    /**
     * @var integer 文件大小，单位是Bytes
     */
    public $Size;

    /**
     * @var integer 文件mtime
     */
    public $ModifyTime;

    /**
     * @var integer 文件ctime
     */
    public $ChangeTime;

    /**
     * @var string 文件类型。取值包含"dir"、"file"、"symlink"
     */
    public $Type;

    /**
     * @param string $Path 完整路径：浏览路径 + "/" + 名称（浏览根目录时为 "/名称"）
     * @param integer $Size 文件大小，单位是Bytes
     * @param integer $ModifyTime 文件mtime
     * @param integer $ChangeTime 文件ctime
     * @param string $Type 文件类型。取值包含"dir"、"file"、"symlink"
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Size",$param) and $param["Size"] !== null) {
            $this->Size = $param["Size"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }

        if (array_key_exists("ChangeTime",$param) and $param["ChangeTime"] !== null) {
            $this->ChangeTime = $param["ChangeTime"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
