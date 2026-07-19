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
namespace TencentCloud\Chdfs\V20201112\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 回收站配置
 *
 * @method string getFileSystemId() 获取文件系统ID
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统ID
 * @method integer getReservedDays() 获取数据保留时间（天）
 * @method void setReservedDays(integer $ReservedDays) 设置数据保留时间（天）
 * @method integer getStatus() 获取回收站配置状态（1：打开；2：关闭）
 * @method void setStatus(integer $Status) 设置回收站配置状态（1：打开；2：关闭）
 * @method string getPath() 获取回收站路径
 * @method void setPath(string $Path) 设置回收站路径
 */
class TrashConfig extends AbstractModel
{
    /**
     * @var string 文件系统ID
     */
    public $FileSystemId;

    /**
     * @var integer 数据保留时间（天）
     */
    public $ReservedDays;

    /**
     * @var integer 回收站配置状态（1：打开；2：关闭）
     */
    public $Status;

    /**
     * @var string 回收站路径
     */
    public $Path;

    /**
     * @param string $FileSystemId 文件系统ID
     * @param integer $ReservedDays 数据保留时间（天）
     * @param integer $Status 回收站配置状态（1：打开；2：关闭）
     * @param string $Path 回收站路径
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
        if (array_key_exists("FileSystemId",$param) and $param["FileSystemId"] !== null) {
            $this->FileSystemId = $param["FileSystemId"];
        }

        if (array_key_exists("ReservedDays",$param) and $param["ReservedDays"] !== null) {
            $this->ReservedDays = $param["ReservedDays"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }
    }
}
