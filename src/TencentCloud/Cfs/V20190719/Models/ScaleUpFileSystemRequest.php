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
namespace TencentCloud\Cfs\V20190719\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ScaleUpFileSystem请求参数结构体
 *
 * @method string getFileSystemId() 获取文件系统Id,该参数通过查询文件系统列表接口获取
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统Id,该参数通过查询文件系统列表接口获取
 * @method integer getTargetCapacity() 获取扩容的目标容量（单位GiB）
 * @method void setTargetCapacity(integer $TargetCapacity) 设置扩容的目标容量（单位GiB）
 */
class ScaleUpFileSystemRequest extends AbstractModel
{
    /**
     * @var string 文件系统Id,该参数通过查询文件系统列表接口获取
     */
    public $FileSystemId;

    /**
     * @var integer 扩容的目标容量（单位GiB）
     */
    public $TargetCapacity;

    /**
     * @param string $FileSystemId 文件系统Id,该参数通过查询文件系统列表接口获取
     * @param integer $TargetCapacity 扩容的目标容量（单位GiB）
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

        if (array_key_exists("TargetCapacity",$param) and $param["TargetCapacity"] !== null) {
            $this->TargetCapacity = $param["TargetCapacity"];
        }
    }
}
