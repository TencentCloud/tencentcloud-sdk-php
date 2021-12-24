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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * NFS挂载卷
 *
 * @method string getServer() 获取服务地址
 * @method void setServer(string $Server) 设置服务地址
 * @method string getServerPath() 获取对应服务器路径
 * @method void setServerPath(string $ServerPath) 设置对应服务器路径
 * @method string getPath() 获取对应本地路径
 * @method void setPath(string $Path) 设置对应本地路径
 */
class VolumeNFS extends AbstractModel
{
    /**
     * @var string 服务地址
     */
    public $Server;

    /**
     * @var string 对应服务器路径
     */
    public $ServerPath;

    /**
     * @var string 对应本地路径
     */
    public $Path;

    /**
     * @param string $Server 服务地址
     * @param string $ServerPath 对应服务器路径
     * @param string $Path 对应本地路径
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
        if (array_key_exists("Server",$param) and $param["Server"] !== null) {
            $this->Server = $param["Server"];
        }

        if (array_key_exists("ServerPath",$param) and $param["ServerPath"] !== null) {
            $this->ServerPath = $param["ServerPath"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }
    }
}
