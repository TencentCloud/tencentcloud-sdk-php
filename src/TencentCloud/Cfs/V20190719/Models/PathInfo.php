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
 * 生命周期管理策略关联目录的绝对路径
 *
 * @method string getFileSystemId() 获取文件系统ID
 * @method void setFileSystemId(string $FileSystemId) 设置文件系统ID
 * @method string getPath() 获取目录绝对路径
 * @method void setPath(string $Path) 设置目录绝对路径
 * @method string getDataFlowId() 获取数据流动Id
 * @method void setDataFlowId(string $DataFlowId) 设置数据流动Id
 */
class PathInfo extends AbstractModel
{
    /**
     * @var string 文件系统ID
     */
    public $FileSystemId;

    /**
     * @var string 目录绝对路径
     */
    public $Path;

    /**
     * @var string 数据流动Id
     */
    public $DataFlowId;

    /**
     * @param string $FileSystemId 文件系统ID
     * @param string $Path 目录绝对路径
     * @param string $DataFlowId 数据流动Id
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

        if (array_key_exists("DataFlowId",$param) and $param["DataFlowId"] !== null) {
            $this->DataFlowId = $param["DataFlowId"];
        }
    }
}
