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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 机器授权到期信息
 *
 * @method string getHostName() 获取机器名称
 * @method void setHostName(string $HostName) 设置机器名称
 * @method string getHostIp() 获取机器IP
 * @method void setHostIp(string $HostIp) 设置机器IP
 * @method integer getSafeguardDirNum() 获取防护目录数
 * @method void setSafeguardDirNum(integer $SafeguardDirNum) 设置防护目录数
 */
class ProtectMachine extends AbstractModel
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
     * @var integer 防护目录数
     */
    public $SafeguardDirNum;

    /**
     * @param string $HostName 机器名称
     * @param string $HostIp 机器IP
     * @param integer $SafeguardDirNum 防护目录数
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

        if (array_key_exists("SafeguardDirNum",$param) and $param["SafeguardDirNum"] !== null) {
            $this->SafeguardDirNum = $param["SafeguardDirNum"];
        }
    }
}
