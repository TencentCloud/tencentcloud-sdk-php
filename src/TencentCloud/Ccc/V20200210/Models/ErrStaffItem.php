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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 批量添加客服时，返回出错客服的像个信息
 *
 * @method string getStaffEmail() 获取坐席邮箱地址
 * @method void setStaffEmail(string $StaffEmail) 设置坐席邮箱地址
 * @method string getCode() 获取错误码
 * @method void setCode(string $Code) 设置错误码
 * @method string getMessage() 获取错误描述
 * @method void setMessage(string $Message) 设置错误描述
 */
class ErrStaffItem extends AbstractModel
{
    /**
     * @var string 坐席邮箱地址
     */
    public $StaffEmail;

    /**
     * @var string 错误码
     */
    public $Code;

    /**
     * @var string 错误描述
     */
    public $Message;

    /**
     * @param string $StaffEmail 坐席邮箱地址
     * @param string $Code 错误码
     * @param string $Message 错误描述
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
        if (array_key_exists("StaffEmail",$param) and $param["StaffEmail"] !== null) {
            $this->StaffEmail = $param["StaffEmail"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }
    }
}
