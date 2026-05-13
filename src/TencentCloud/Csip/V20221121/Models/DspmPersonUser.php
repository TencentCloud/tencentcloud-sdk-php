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
 * 个人用户信息
 *
 * @method string getPersonId() 获取个人id
 * @method void setPersonId(string $PersonId) 设置个人id
 * @method string getPersonName() 获取姓名
 * @method void setPersonName(string $PersonName) 设置姓名
 * @method string getPhone() 获取手机号
 * @method void setPhone(string $Phone) 设置手机号
 */
class DspmPersonUser extends AbstractModel
{
    /**
     * @var string 个人id
     */
    public $PersonId;

    /**
     * @var string 姓名
     */
    public $PersonName;

    /**
     * @var string 手机号
     */
    public $Phone;

    /**
     * @param string $PersonId 个人id
     * @param string $PersonName 姓名
     * @param string $Phone 手机号
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
        if (array_key_exists("PersonId",$param) and $param["PersonId"] !== null) {
            $this->PersonId = $param["PersonId"];
        }

        if (array_key_exists("PersonName",$param) and $param["PersonName"] !== null) {
            $this->PersonName = $param["PersonName"];
        }

        if (array_key_exists("Phone",$param) and $param["Phone"] !== null) {
            $this->Phone = $param["Phone"];
        }
    }
}
