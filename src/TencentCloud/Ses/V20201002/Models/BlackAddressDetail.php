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
 * 黑名单详情
 *
 * @method integer getId() 获取黑名单地址id
 * @method void setId(integer $Id) 设置黑名单地址id
 * @method string getEmail() 获取邮箱地址
 * @method void setEmail(string $Email) 设置邮箱地址
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getExpireDate() 获取过期时间
 * @method void setExpireDate(string $ExpireDate) 设置过期时间
 * @method integer getStatus() 获取黑名单状态，0:已过期，1:生效中
 * @method void setStatus(integer $Status) 设置黑名单状态，0:已过期，1:生效中
 */
class BlackAddressDetail extends AbstractModel
{
    /**
     * @var integer 黑名单地址id
     */
    public $Id;

    /**
     * @var string 邮箱地址
     */
    public $Email;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 过期时间
     */
    public $ExpireDate;

    /**
     * @var integer 黑名单状态，0:已过期，1:生效中
     */
    public $Status;

    /**
     * @param integer $Id 黑名单地址id
     * @param string $Email 邮箱地址
     * @param string $CreateTime 创建时间
     * @param string $ExpireDate 过期时间
     * @param integer $Status 黑名单状态，0:已过期，1:生效中
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

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExpireDate",$param) and $param["ExpireDate"] !== null) {
            $this->ExpireDate = $param["ExpireDate"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
