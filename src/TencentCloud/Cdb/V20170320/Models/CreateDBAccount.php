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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 创建账号信息
 *
 * @method string getUser() 获取<p>账号名称</p>
 * @method void setUser(string $User) 设置<p>账号名称</p>
 * @method string getHost() 获取<p>主机名</p>
 * @method void setHost(string $Host) 设置<p>主机名</p>
 * @method SSMCreateAccountInfos getSSMInfos() 获取<p>开始SSM托管的相关信息</p>
 * @method void setSSMInfos(SSMCreateAccountInfos $SSMInfos) 设置<p>开始SSM托管的相关信息</p>
 */
class CreateDBAccount extends AbstractModel
{
    /**
     * @var string <p>账号名称</p>
     */
    public $User;

    /**
     * @var string <p>主机名</p>
     */
    public $Host;

    /**
     * @var SSMCreateAccountInfos <p>开始SSM托管的相关信息</p>
     */
    public $SSMInfos;

    /**
     * @param string $User <p>账号名称</p>
     * @param string $Host <p>主机名</p>
     * @param SSMCreateAccountInfos $SSMInfos <p>开始SSM托管的相关信息</p>
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
        if (array_key_exists("User",$param) and $param["User"] !== null) {
            $this->User = $param["User"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("SSMInfos",$param) and $param["SSMInfos"] !== null) {
            $this->SSMInfos = new SSMCreateAccountInfos();
            $this->SSMInfos->deserialize($param["SSMInfos"]);
        }
    }
}
