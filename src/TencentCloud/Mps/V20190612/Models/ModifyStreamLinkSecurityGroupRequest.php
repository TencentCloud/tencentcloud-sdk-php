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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyStreamLinkSecurityGroup请求参数结构体
 *
 * @method string getId() 获取安全组Id。
 * @method void setId(string $Id) 设置安全组Id。
 * @method string getName() 获取安全组名称，限制大小写、数字和下划线，长度[1, 32]，Region下唯一。
 * @method void setName(string $Name) 设置安全组名称，限制大小写、数字和下划线，长度[1, 32]，Region下唯一。
 * @method array getWhitelist() 获取白名单列表，最多10个。
 * @method void setWhitelist(array $Whitelist) 设置白名单列表，最多10个。
 */
class ModifyStreamLinkSecurityGroupRequest extends AbstractModel
{
    /**
     * @var string 安全组Id。
     */
    public $Id;

    /**
     * @var string 安全组名称，限制大小写、数字和下划线，长度[1, 32]，Region下唯一。
     */
    public $Name;

    /**
     * @var array 白名单列表，最多10个。
     */
    public $Whitelist;

    /**
     * @param string $Id 安全组Id。
     * @param string $Name 安全组名称，限制大小写、数字和下划线，长度[1, 32]，Region下唯一。
     * @param array $Whitelist 白名单列表，最多10个。
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Whitelist",$param) and $param["Whitelist"] !== null) {
            $this->Whitelist = $param["Whitelist"];
        }
    }
}
