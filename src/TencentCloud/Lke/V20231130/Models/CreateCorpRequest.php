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
namespace TencentCloud\Lke\V20231130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateCorp请求参数结构体
 *
 * @method string getFullName() 获取企业全称
 * @method void setFullName(string $FullName) 设置企业全称
 * @method string getContactName() 获取联系人名称
 * @method void setContactName(string $ContactName) 设置联系人名称
 * @method string getEmail() 获取联系人邮箱
 * @method void setEmail(string $Email) 设置联系人邮箱
 * @method string getTelephone() 获取联系人手机号
 * @method void setTelephone(string $Telephone) 设置联系人手机号
 */
class CreateCorpRequest extends AbstractModel
{
    /**
     * @var string 企业全称
     */
    public $FullName;

    /**
     * @var string 联系人名称
     */
    public $ContactName;

    /**
     * @var string 联系人邮箱
     */
    public $Email;

    /**
     * @var string 联系人手机号
     */
    public $Telephone;

    /**
     * @param string $FullName 企业全称
     * @param string $ContactName 联系人名称
     * @param string $Email 联系人邮箱
     * @param string $Telephone 联系人手机号
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
        if (array_key_exists("FullName",$param) and $param["FullName"] !== null) {
            $this->FullName = $param["FullName"];
        }

        if (array_key_exists("ContactName",$param) and $param["ContactName"] !== null) {
            $this->ContactName = $param["ContactName"];
        }

        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = $param["Email"];
        }

        if (array_key_exists("Telephone",$param) and $param["Telephone"] !== null) {
            $this->Telephone = $param["Telephone"];
        }
    }
}
