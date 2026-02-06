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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 文件存储配置
 *
 * @method string getFileSystemId() 获取CFS资源ID
 * @method void setFileSystemId(string $FileSystemId) 设置CFS资源ID
 * @method string getPath() 获取CFS挂载路径
 * @method void setPath(string $Path) 设置CFS挂载路径
 */
class CfsStorageSource extends AbstractModel
{
    /**
     * @var string CFS资源ID
     */
    public $FileSystemId;

    /**
     * @var string CFS挂载路径
     */
    public $Path;

    /**
     * @param string $FileSystemId CFS资源ID
     * @param string $Path CFS挂载路径
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

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }
    }
}
