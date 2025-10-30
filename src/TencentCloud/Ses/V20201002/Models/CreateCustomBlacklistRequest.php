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
 * CreateCustomBlacklist请求参数结构体
 *
 * @method array getEmails() 获取添加到黑名单的邮件地址
 * @method void setEmails(array $Emails) 设置添加到黑名单的邮件地址
 * @method string getExpireDate() 获取过期日期
 * @method void setExpireDate(string $ExpireDate) 设置过期日期
 */
class CreateCustomBlacklistRequest extends AbstractModel
{
    /**
     * @var array 添加到黑名单的邮件地址
     */
    public $Emails;

    /**
     * @var string 过期日期
     */
    public $ExpireDate;

    /**
     * @param array $Emails 添加到黑名单的邮件地址
     * @param string $ExpireDate 过期日期
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
        if (array_key_exists("Emails",$param) and $param["Emails"] !== null) {
            $this->Emails = $param["Emails"];
        }

        if (array_key_exists("ExpireDate",$param) and $param["ExpireDate"] !== null) {
            $this->ExpireDate = $param["ExpireDate"];
        }
    }
}
