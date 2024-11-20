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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询改密计划详情
 *
 * @method Device getDevice() 获取资产信息
 * @method void setDevice(Device $Device) 设置资产信息
 * @method string getAccount() 获取资产账号
 * @method void setAccount(string $Account) 设置资产账号
 * @method integer getLastChangeStatus() 获取上次改密结果。0-未改密  1-改密成功 2-改密失败
 * @method void setLastChangeStatus(integer $LastChangeStatus) 设置上次改密结果。0-未改密  1-改密成功 2-改密失败
 */
class ChangePwdTaskDetail extends AbstractModel
{
    /**
     * @var Device 资产信息
     */
    public $Device;

    /**
     * @var string 资产账号
     */
    public $Account;

    /**
     * @var integer 上次改密结果。0-未改密  1-改密成功 2-改密失败
     */
    public $LastChangeStatus;

    /**
     * @param Device $Device 资产信息
     * @param string $Account 资产账号
     * @param integer $LastChangeStatus 上次改密结果。0-未改密  1-改密成功 2-改密失败
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
        if (array_key_exists("Device",$param) and $param["Device"] !== null) {
            $this->Device = new Device();
            $this->Device->deserialize($param["Device"]);
        }

        if (array_key_exists("Account",$param) and $param["Account"] !== null) {
            $this->Account = $param["Account"];
        }

        if (array_key_exists("LastChangeStatus",$param) and $param["LastChangeStatus"] !== null) {
            $this->LastChangeStatus = $param["LastChangeStatus"];
        }
    }
}
