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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 服务的 WAF 状态
 *
 * @method string getName() 获取 服务的名字
 * @method void setName(string $Name) 设置 服务的名字
 * @method string getId() 获取服务的 ID
 * @method void setId(string $Id) 设置服务的 ID
 * @method string getType() 获取服务的类型
 * @method void setType(string $Type) 设置服务的类型
 * @method string getStatus() 获取 服务是否开启 WAF 防护
 * @method void setStatus(string $Status) 设置 服务是否开启 WAF 防护
 */
class ServiceWafStatus extends AbstractModel
{
    /**
     * @var string  服务的名字
     */
    public $Name;

    /**
     * @var string 服务的 ID
     */
    public $Id;

    /**
     * @var string 服务的类型
     */
    public $Type;

    /**
     * @var string  服务是否开启 WAF 防护
     */
    public $Status;

    /**
     * @param string $Name  服务的名字
     * @param string $Id 服务的 ID
     * @param string $Type 服务的类型
     * @param string $Status  服务是否开启 WAF 防护
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

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
