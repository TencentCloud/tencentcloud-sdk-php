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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateCustomBlackList请求参数结构体
 *
 * @method integer getId() 获取需要更改的黑名单id
 * @method void setId(integer $Id) 设置需要更改的黑名单id
 * @method string getEmail() 获取修改后的邮件地址
 * @method void setEmail(string $Email) 设置修改后的邮件地址
 * @method string getExpireDate() 获取过期时间，为空则表示永久有效
 * @method void setExpireDate(string $ExpireDate) 设置过期时间，为空则表示永久有效
 */
class UpdateCustomBlackListRequest extends AbstractModel
{
    /**
     * @var integer 需要更改的黑名单id
     */
    public $Id;

    /**
     * @var string 修改后的邮件地址
     */
    public $Email;

    /**
     * @var string 过期时间，为空则表示永久有效
     */
    public $ExpireDate;

    /**
     * @param integer $Id 需要更改的黑名单id
     * @param string $Email 修改后的邮件地址
     * @param string $ExpireDate 过期时间，为空则表示永久有效
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

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("ExpireDate",$param) and $param["ExpireDate"] !== null) {
            $this->ExpireDate = $param["ExpireDate"];
        }
    }
}
