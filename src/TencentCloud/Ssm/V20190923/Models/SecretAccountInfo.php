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
namespace TencentCloud\Ssm\V20190923\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 凭据对应的账户信息(用户名、主机、版本号、轮转时间)
 *
 * @method string getAccountName() 获取<p>账户名称</p>
 * @method void setAccountName(string $AccountName) 设置<p>账户名称</p>
 * @method array getHost() 获取<p>账户登录主机</p>
 * @method void setHost(array $Host) 设置<p>账户登录主机</p>
 * @method string getVersion() 获取<p>账号状态（生效中/待轮转）</p>
 * @method void setVersion(string $Version) 设置<p>账号状态（生效中/待轮转）</p>
 * @method string getRotatedTime() 获取<p>账号轮转时间</p>
 * @method void setRotatedTime(string $RotatedTime) 设置<p>账号轮转时间</p>
 */
class SecretAccountInfo extends AbstractModel
{
    /**
     * @var string <p>账户名称</p>
     */
    public $AccountName;

    /**
     * @var array <p>账户登录主机</p>
     */
    public $Host;

    /**
     * @var string <p>账号状态（生效中/待轮转）</p>
     */
    public $Version;

    /**
     * @var string <p>账号轮转时间</p>
     */
    public $RotatedTime;

    /**
     * @param string $AccountName <p>账户名称</p>
     * @param array $Host <p>账户登录主机</p>
     * @param string $Version <p>账号状态（生效中/待轮转）</p>
     * @param string $RotatedTime <p>账号轮转时间</p>
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

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("RotatedTime",$param) and $param["RotatedTime"] !== null) {
            $this->RotatedTime = $param["RotatedTime"];
        }
    }
}
