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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * EKS Instance Nfs Volume
 *
 * @method string getName() 获取nfs volume 数据卷名称
 * @method void setName(string $Name) 设置nfs volume 数据卷名称
 * @method string getServer() 获取NFS 服务器地址
 * @method void setServer(string $Server) 设置NFS 服务器地址
 * @method string getPath() 获取NFS 数据卷路径
 * @method void setPath(string $Path) 设置NFS 数据卷路径
 * @method boolean getReadOnly() 获取默认为 False
 * @method void setReadOnly(boolean $ReadOnly) 设置默认为 False
 */
class NfsVolume extends AbstractModel
{
    /**
     * @var string nfs volume 数据卷名称
     */
    public $Name;

    /**
     * @var string NFS 服务器地址
     */
    public $Server;

    /**
     * @var string NFS 数据卷路径
     */
    public $Path;

    /**
     * @var boolean 默认为 False
     */
    public $ReadOnly;

    /**
     * @param string $Name nfs volume 数据卷名称
     * @param string $Server NFS 服务器地址
     * @param string $Path NFS 数据卷路径
     * @param boolean $ReadOnly 默认为 False
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Server",$param) and $param["Server"] !== null) {
            $this->Server = $param["Server"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("ReadOnly",$param) and $param["ReadOnly"] !== null) {
            $this->ReadOnly = $param["ReadOnly"];
        }
    }
}
