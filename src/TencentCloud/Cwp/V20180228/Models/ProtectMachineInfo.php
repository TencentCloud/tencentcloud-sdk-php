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
 * 授权机器信息
 *
 * @method string getHostName() 获取机器名称
 * @method void setHostName(string $HostName) 设置机器名称
 * @method string getHostIp() 获取机器IP
 * @method void setHostIp(string $HostIp) 设置机器IP
 * @method string getCreateTime() 获取开通时间
 * @method void setCreateTime(string $CreateTime) 设置开通时间
 * @method string getExpireTime() 获取到期时间
 * @method void setExpireTime(string $ExpireTime) 设置到期时间
 */
class ProtectMachineInfo extends AbstractModel
{
    /**
     * @var string 机器名称
     */
    public $HostName;

    /**
     * @var string 机器IP
     */
    public $HostIp;

    /**
     * @var string 开通时间
     */
    public $CreateTime;

    /**
     * @var string 到期时间
     */
    public $ExpireTime;

    /**
     * @param string $HostName 机器名称
     * @param string $HostIp 机器IP
     * @param string $CreateTime 开通时间
     * @param string $ExpireTime 到期时间
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
        if (array_key_exists("HostName",$param) and $param["HostName"] !== null) {
            $this->HostName = $param["HostName"];
        }

        if (array_key_exists("HostIp",$param) and $param["HostIp"] !== null) {
            $this->HostIp = $param["HostIp"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }
    }
}
