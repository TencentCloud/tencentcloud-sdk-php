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
namespace TencentCloud\Dasb\V20191018\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 立即执行改密任务的入参
 *
 * @method integer getDeviceId() 获取资产id
 * @method void setDeviceId(integer $DeviceId) 设置资产id
 * @method string getAccount() 获取资产账号
 * @method void setAccount(string $Account) 设置资产账号
 */
class RunChangePwdTaskDetail extends AbstractModel
{
    /**
     * @var integer 资产id
     */
    public $DeviceId;

    /**
     * @var string 资产账号
     */
    public $Account;

    /**
     * @param integer $DeviceId 资产id
     * @param string $Account 资产账号
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
        if (array_key_exists("DeviceId",$param) and $param["DeviceId"] !== null) {
            $this->DeviceId = $param["DeviceId"];
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = $param["Account"];
        }
    }
}
