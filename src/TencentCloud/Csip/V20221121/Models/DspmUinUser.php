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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云账号用户信息
 *
 * @method string getUin() 获取账号uin
 * @method void setUin(string $Uin) 设置账号uin
 * @method string getName() 获取姓名
 * @method void setName(string $Name) 设置姓名
 * @method integer getUserType() 获取用户类型。1-主账号 2-子用户
 * @method void setUserType(integer $UserType) 设置用户类型。1-主账号 2-子用户
 */
class DspmUinUser extends AbstractModel
{
    /**
     * @var string 账号uin
     */
    public $Uin;

    /**
     * @var string 姓名
     */
    public $Name;

    /**
     * @var integer 用户类型。1-主账号 2-子用户
     */
    public $UserType;

    /**
     * @param string $Uin 账号uin
     * @param string $Name 姓名
     * @param integer $UserType 用户类型。1-主账号 2-子用户
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }
    }
}
