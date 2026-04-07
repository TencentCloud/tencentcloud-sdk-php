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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 调度器访问自定义 Extender 服务 URL 的设置
 *
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 * @method string getName() 获取服务名称
 * @method void setName(string $Name) 设置服务名称
 * @method integer getPort() 获取服务端口
 * @method void setPort(integer $Port) 设置服务端口
 * @method string getPath() 获取服务路径
 * @method void setPath(string $Path) 设置服务路径
 * @method string getScheme() 获取服务协议
 * @method void setScheme(string $Scheme) 设置服务协议
 */
class ServiceReference extends AbstractModel
{
    /**
     * @var string 命名空间
     */
    public $Namespace;

    /**
     * @var string 服务名称
     */
    public $Name;

    /**
     * @var integer 服务端口
     */
    public $Port;

    /**
     * @var string 服务路径
     */
    public $Path;

    /**
     * @var string 服务协议
     */
    public $Scheme;

    /**
     * @param string $Namespace 命名空间
     * @param string $Name 服务名称
     * @param integer $Port 服务端口
     * @param string $Path 服务路径
     * @param string $Scheme 服务协议
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
        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Scheme",$param) and $param["Scheme"] !== null) {
            $this->Scheme = $param["Scheme"];
        }
    }
}
