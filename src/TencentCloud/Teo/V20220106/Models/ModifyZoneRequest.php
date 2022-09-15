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
 * ModifyZone请求参数结构体
 *
 * @method string getId() 获取站点 ID，用于唯一标识站点信息
 * @method void setId(string $Id) 设置站点 ID，用于唯一标识站点信息
 * @method string getType() 获取站点接入方式
- full NS 接入
- partial CNAME 接入
 * @method void setType(string $Type) 设置站点接入方式
- full NS 接入
- partial CNAME 接入
 * @method VanityNameServers getVanityNameServers() 获取自定义站点信息
 * @method void setVanityNameServers(VanityNameServers $VanityNameServers) 设置自定义站点信息
 */
class ModifyZoneRequest extends AbstractModel
{
    /**
     * @var string 站点 ID，用于唯一标识站点信息
     */
    public $Id;

    /**
     * @var string 站点接入方式
- full NS 接入
- partial CNAME 接入
     */
    public $Type;

    /**
     * @var VanityNameServers 自定义站点信息
     */
    public $VanityNameServers;

    /**
     * @param string $Id 站点 ID，用于唯一标识站点信息
     * @param string $Type 站点接入方式
- full NS 接入
- partial CNAME 接入
     * @param VanityNameServers $VanityNameServers 自定义站点信息
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("VanityNameServers",$param) and $param["VanityNameServers"] !== null) {
            $this->VanityNameServers = new VanityNameServers();
            $this->VanityNameServers->deserialize($param["VanityNameServers"]);
        }
    }
}
