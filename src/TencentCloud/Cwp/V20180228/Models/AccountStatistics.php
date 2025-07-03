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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 账号统计数据。
 *
 * @method string getUsername() 获取用户名。
 * @method void setUsername(string $Username) 设置用户名。
 * @method integer getMachineNum() 获取主机数量。
 * @method void setMachineNum(integer $MachineNum) 设置主机数量。
 */
class AccountStatistics extends AbstractModel
{
    /**
     * @var string 用户名。
     */
    public $Username;

    /**
     * @var integer 主机数量。
     */
    public $MachineNum;

    /**
     * @param string $Username 用户名。
     * @param integer $MachineNum 主机数量。
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
        if (array_key_exists("Username",$param) and $param["Username"] !== null) {
            $this->Username = $param["Username"];
        }

        if (array_key_exists("MachineNum",$param) and $param["MachineNum"] !== null) {
            $this->MachineNum = $param["MachineNum"];
        }
    }
}
