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
 * CreateTrashConfig请求参数结构体
 *
 * @method string getFileSystemId() 获取<p>文件系统ID</p>
 * @method void setFileSystemId(string $FileSystemId) 设置<p>文件系统ID</p>
 * @method integer getReservedDays() 获取<p>数据保留时间（天）</p>
 * @method void setReservedDays(integer $ReservedDays) 设置<p>数据保留时间（天）</p>
 * @method integer getStatus() 获取<p>规则状态（1：打开；2：关闭）</p>
 * @method void setStatus(integer $Status) 设置<p>规则状态（1：打开；2：关闭）</p>
 * @method string getPath() 获取<ol><li>字段为空表示开启普通用户回收站 </li><li>字段不为空表示开启HDFS原生回收站，且值必须为/user/*/.Trash</li></ol>
 * @method void setPath(string $Path) 设置<ol><li>字段为空表示开启普通用户回收站 </li><li>字段不为空表示开启HDFS原生回收站，且值必须为/user/*/.Trash</li></ol>
 */
class CreateTrashConfigRequest extends AbstractModel
{
    /**
     * @var string <p>文件系统ID</p>
     */
    public $FileSystemId;

    /**
     * @var integer <p>数据保留时间（天）</p>
     */
    public $ReservedDays;

    /**
     * @var integer <p>规则状态（1：打开；2：关闭）</p>
     */
    public $Status;

    /**
     * @var string <ol><li>字段为空表示开启普通用户回收站 </li><li>字段不为空表示开启HDFS原生回收站，且值必须为/user/*/.Trash</li></ol>
     */
    public $Path;

    /**
     * @param string $FileSystemId <p>文件系统ID</p>
     * @param integer $ReservedDays <p>数据保留时间（天）</p>
     * @param integer $Status <p>规则状态（1：打开；2：关闭）</p>
     * @param string $Path <ol><li>字段为空表示开启普通用户回收站 </li><li>字段不为空表示开启HDFS原生回收站，且值必须为/user/*/.Trash</li></ol>
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
