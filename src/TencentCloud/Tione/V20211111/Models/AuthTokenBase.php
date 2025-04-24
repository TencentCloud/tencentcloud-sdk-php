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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AuthToken 的基础信息
 *
 * @method string getValue() 获取token 值
 * @method void setValue(string $Value) 设置token 值
 * @method string getName() 获取token 别名
 * @method void setName(string $Name) 设置token 别名
 * @method string getDescription() 获取token 描述
 * @method void setDescription(string $Description) 设置token 描述
 * @method string getCreateTime() 获取token 创建时间
 * @method void setCreateTime(string $CreateTime) 设置token 创建时间
 * @method string getStatus() 获取token状态
 * @method void setStatus(string $Status) 设置token状态
 */
class AuthTokenBase extends AbstractModel
{
    /**
     * @var string token 值
     */
    public $Value;

    /**
     * @var string token 别名
     */
    public $Name;

    /**
     * @var string token 描述
     */
    public $Description;

    /**
     * @var string token 创建时间
     */
    public $CreateTime;

    /**
     * @var string token状态
     */
    public $Status;

    /**
     * @param string $Value token 值
     * @param string $Name token 别名
     * @param string $Description token 描述
     * @param string $CreateTime token 创建时间
     * @param string $Status token状态
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
        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
