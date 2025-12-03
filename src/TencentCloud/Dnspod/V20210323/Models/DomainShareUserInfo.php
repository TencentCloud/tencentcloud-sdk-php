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
namespace TencentCloud\Dnspod\V20210323\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 域名共享信息
 *
 * @method integer getDomainShareId() 获取共享记录ID
 * @method void setDomainShareId(integer $DomainShareId) 设置共享记录ID
 * @method string getMode() 获取共享模式。r-只读；rw-可读写。
 * @method void setMode(string $Mode) 设置共享模式。r-只读；rw-可读写。
 * @method string getNickname() 获取共享到的用户昵称
 * @method void setNickname(string $Nickname) 设置共享到的用户昵称
 * @method string getQCloudUIN() 获取共享到的用户UIN
 * @method void setQCloudUIN(string $QCloudUIN) 设置共享到的用户UIN
 * @method string getStatus() 获取共享状态。enabled-有效；pause-无效。
 * @method void setStatus(string $Status) 设置共享状态。enabled-有效；pause-无效。
 * @method string getSubDomain() 获取共享的子域名
 * @method void setSubDomain(string $SubDomain) 设置共享的子域名
 */
class DomainShareUserInfo extends AbstractModel
{
    /**
     * @var integer 共享记录ID
     */
    public $DomainShareId;

    /**
     * @var string 共享模式。r-只读；rw-可读写。
     */
    public $Mode;

    /**
     * @var string 共享到的用户昵称
     */
    public $Nickname;

    /**
     * @var string 共享到的用户UIN
     */
    public $QCloudUIN;

    /**
     * @var string 共享状态。enabled-有效；pause-无效。
     */
    public $Status;

    /**
     * @var string 共享的子域名
     */
    public $SubDomain;

    /**
     * @param integer $DomainShareId 共享记录ID
     * @param string $Mode 共享模式。r-只读；rw-可读写。
     * @param string $Nickname 共享到的用户昵称
     * @param string $QCloudUIN 共享到的用户UIN
     * @param string $Status 共享状态。enabled-有效；pause-无效。
     * @param string $SubDomain 共享的子域名
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
        if (array_key_exists("DomainShareId",$param) and $param["DomainShareId"] !== null) {
            $this->DomainShareId = $param["DomainShareId"];
        }

        if (array_key_exists("Mode",$param) and $param["Mode"] !== null) {
            $this->Mode = $param["Mode"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("QCloudUIN",$param) and $param["QCloudUIN"] !== null) {
            $this->QCloudUIN = $param["QCloudUIN"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SubDomain",$param) and $param["SubDomain"] !== null) {
            $this->SubDomain = $param["SubDomain"];
        }
    }
}
