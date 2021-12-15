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
namespace TencentCloud\Thpc\V20211109\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述GooseFS挂载信息
 *
 * @method string getLocalPath() 获取文件系统本地挂载路径
 * @method void setLocalPath(string $LocalPath) 设置文件系统本地挂载路径
 * @method string getRemotePath() 获取文件系统远程挂载路径
 * @method void setRemotePath(string $RemotePath) 设置文件系统远程挂载路径
 * @method array getMasters() 获取文件系统master的ip和端口
 * @method void setMasters(array $Masters) 设置文件系统master的ip和端口
 */
class GooseFSOption extends AbstractModel
{
    /**
     * @var string 文件系统本地挂载路径
     */
    public $LocalPath;

    /**
     * @var string 文件系统远程挂载路径
     */
    public $RemotePath;

    /**
     * @var array 文件系统master的ip和端口
     */
    public $Masters;

    /**
     * @param string $LocalPath 文件系统本地挂载路径
     * @param string $RemotePath 文件系统远程挂载路径
     * @param array $Masters 文件系统master的ip和端口
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
        if (array_key_exists("LocalPath",$param) and $param["LocalPath"] !== null) {
            $this->LocalPath = $param["LocalPath"];
        }

        if (array_key_exists("RemotePath",$param) and $param["RemotePath"] !== null) {
            $this->RemotePath = $param["RemotePath"];
        }

        if (array_key_exists("Masters",$param) and $param["Masters"] !== null) {
            $this->Masters = $param["Masters"];
        }
    }
}
