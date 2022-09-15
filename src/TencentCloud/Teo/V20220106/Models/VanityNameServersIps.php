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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义名字服务器 IP 信息
 *
 * @method string getName() 获取自定义名字服务器名称
 * @method void setName(string $Name) 设置自定义名字服务器名称
 * @method string getIPv4() 获取自定义名字服务器 IPv4 地址
 * @method void setIPv4(string $IPv4) 设置自定义名字服务器 IPv4 地址
 */
class VanityNameServersIps extends AbstractModel
{
    /**
     * @var string 自定义名字服务器名称
     */
    public $Name;

    /**
     * @var string 自定义名字服务器 IPv4 地址
     */
    public $IPv4;

    /**
     * @param string $Name 自定义名字服务器名称
     * @param string $IPv4 自定义名字服务器 IPv4 地址
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

        if (array_key_exists("IPv4",$param) and $param["IPv4"] !== null) {
            $this->IPv4 = $param["IPv4"];
        }
    }
}
