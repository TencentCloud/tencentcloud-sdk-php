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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 管理人预审核的域名列表
 *
 * @method string getDomain() 获取预审核域名信息
 * @method void setDomain(string $Domain) 设置预审核域名信息
 * @method string getCreateTime() 获取预审核域名创建时间
 * @method void setCreateTime(string $CreateTime) 设置预审核域名创建时间
 * @method string getExpireTime() 获取预审核域名过期时间
 * @method void setExpireTime(string $ExpireTime) 设置预审核域名过期时间
 */
class ManagerPreAuditDomain extends AbstractModel
{
    /**
     * @var string 预审核域名信息
     */
    public $Domain;

    /**
     * @var string 预审核域名创建时间
     */
    public $CreateTime;

    /**
     * @var string 预审核域名过期时间
     */
    public $ExpireTime;

    /**
     * @param string $Domain 预审核域名信息
     * @param string $CreateTime 预审核域名创建时间
     * @param string $ExpireTime 预审核域名过期时间
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
        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
