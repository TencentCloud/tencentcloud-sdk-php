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
 * HTTP GET 探测动作配置
 *
 * @method string getPath() 获取路径
 * @method void setPath(string $Path) 设置路径
 * @method integer getPort() 获取端口
 * @method void setPort(integer $Port) 设置端口
 * @method string getScheme() 获取协议
 * @method void setScheme(string $Scheme) 设置协议
 */
class HttpGetAction extends AbstractModel
{
    /**
     * @var string 路径
     */
    public $Path;

    /**
     * @var integer 端口
     */
    public $Port;

    /**
     * @var string 协议
     */
    public $Scheme;

    /**
     * @param string $Path 路径
     * @param integer $Port 端口
     * @param string $Scheme 协议
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Scheme",$param) and $param["Scheme"] !== null) {
            $this->Scheme = $param["Scheme"];
        }
    }
}
