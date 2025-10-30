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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateCfsFileSystemName请求参数结构体
 *
 * @method string getFileSystemId() 获取文件系统 ID,通过[查询文件系统接口](https://cloud.tencent.com/document/api/582/38170)获取
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统 ID,通过[查询文件系统接口](https://cloud.tencent.com/document/api/582/38170)获取
 * @method string getFsName() 获取用户自定义文件系统名称，64字节内的中文字母数字或者 _,-,与CreationToken 至少填一个
 * @method void setFsName(string $FsName) 设置用户自定义文件系统名称，64字节内的中文字母数字或者 _,-,与CreationToken 至少填一个
 */
class UpdateCfsFileSystemNameRequest extends AbstractModel
{
    /**
     * @var string 文件系统 ID,通过[查询文件系统接口](https://cloud.tencent.com/document/api/582/38170)获取
     */
    public $FileSystemId;

    /**
     * @var string 用户自定义文件系统名称，64字节内的中文字母数字或者 _,-,与CreationToken 至少填一个
     */
    public $FsName;

    /**
     * @param string $FileSystemId 文件系统 ID,通过[查询文件系统接口](https://cloud.tencent.com/document/api/582/38170)获取
     * @param string $FsName 用户自定义文件系统名称，64字节内的中文字母数字或者 _,-,与CreationToken 至少填一个
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

        if (array_key_exists("FsName",$param) and $param["FsName"] !== null) {
            $this->FsName = $param["FsName"];
        }
    }
}
