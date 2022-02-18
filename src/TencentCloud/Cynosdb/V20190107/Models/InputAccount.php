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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 账号，包含accountName和host
 *
 * @method string getAccountName() 获取账号
 * @method void setAccountName(string $AccountName) 设置账号
 * @method string getHost() 获取主机，默认‘%’
 * @method void setHost(string $Host) 设置主机，默认‘%’
 */
class InputAccount extends AbstractModel
{
    /**
     * @var string 账号
     */
    public $AccountName;

    /**
     * @var string 主机，默认‘%’
     */
    public $Host;

    /**
     * @param string $AccountName 账号
     * @param string $Host 主机，默认‘%’
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
        if (array_key_exists("AccountName",$param) and $param["AccountName"] !== null) {
            $this->AccountName = $param["AccountName"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }
    }
}
