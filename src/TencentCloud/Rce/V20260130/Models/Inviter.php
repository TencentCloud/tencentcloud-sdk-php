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
namespace TencentCloud\Rce\V20260130\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 邀请人信息
 *
 * @method string getInviterUserId() 获取<p>邀请人ID</p>
 * @method void setInviterUserId(string $InviterUserId) 设置<p>邀请人ID</p>
 * @method string getInviterPhone() 获取<p>邀请人电话号码</p><p>参数格式：符合E.164标准的带“+”、地区编码和号码的格式</p>
 * @method void setInviterPhone(string $InviterPhone) 设置<p>邀请人电话号码</p><p>参数格式：符合E.164标准的带“+”、地区编码和号码的格式</p>
 * @method string getInviteCode() 获取<p>邀请码</p>
 * @method void setInviteCode(string $InviteCode) 设置<p>邀请码</p>
 * @method string getInviteChannel() 获取<p>邀请渠道</p>
 * @method void setInviteChannel(string $InviteChannel) 设置<p>邀请渠道</p>
 */
class Inviter extends AbstractModel
{
    /**
     * @var string <p>邀请人ID</p>
     */
    public $InviterUserId;

    /**
     * @var string <p>邀请人电话号码</p><p>参数格式：符合E.164标准的带“+”、地区编码和号码的格式</p>
     */
    public $InviterPhone;

    /**
     * @var string <p>邀请码</p>
     */
    public $InviteCode;

    /**
     * @var string <p>邀请渠道</p>
     */
    public $InviteChannel;

    /**
     * @param string $InviterUserId <p>邀请人ID</p>
     * @param string $InviterPhone <p>邀请人电话号码</p><p>参数格式：符合E.164标准的带“+”、地区编码和号码的格式</p>
     * @param string $InviteCode <p>邀请码</p>
     * @param string $InviteChannel <p>邀请渠道</p>
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
        if (array_key_exists("InviterUserId",$param) and $param["InviterUserId"] !== null) {
            $this->InviterUserId = $param["InviterUserId"];
        }

        if (array_key_exists("InviterPhone",$param) and $param["InviterPhone"] !== null) {
            $this->InviterPhone = $param["InviterPhone"];
        }

        if (array_key_exists("InviteCode",$param) and $param["InviteCode"] !== null) {
            $this->InviteCode = $param["InviteCode"];
        }

        if (array_key_exists("InviteChannel",$param) and $param["InviteChannel"] !== null) {
            $this->InviteChannel = $param["InviteChannel"];
        }
    }
}
