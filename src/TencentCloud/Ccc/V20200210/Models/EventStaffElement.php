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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 座席信息
 *
 * @method string getMail() 获取座席邮箱账号
 * @method void setMail(string $Mail) 设置座席邮箱账号
 * @method string getStaffNumber() 获取座席工号
 * @method void setStaffNumber(string $StaffNumber) 设置座席工号
 */
class EventStaffElement extends AbstractModel
{
    /**
     * @var string 座席邮箱账号
     */
    public $Mail;

    /**
     * @var string 座席工号
     */
    public $StaffNumber;

    /**
     * @param string $Mail 座席邮箱账号
     * @param string $StaffNumber 座席工号
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
        if (array_key_exists("Mail",$param) and $param["Mail"] !== null) {
            $this->Mail = $param["Mail"];
        }

        if (array_key_exists("StaffNumber",$param) and $param["StaffNumber"] !== null) {
            $this->StaffNumber = $param["StaffNumber"];
        }
    }
}
