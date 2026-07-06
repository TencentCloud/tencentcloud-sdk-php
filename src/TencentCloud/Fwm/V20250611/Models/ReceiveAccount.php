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
namespace TencentCloud\Fwm\V20250611\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 账号信息
 *
 * @method string getUin() 获取租户 uin
 * @method void setUin(string $Uin) 设置租户 uin
 * @method string getNickname() 获取租户名称
 * @method void setNickname(string $Nickname) 设置租户名称
 * @method integer getReceiverType() 获取0=账号uin，1=账号组
 * @method void setReceiverType(integer $ReceiverType) 设置0=账号uin，1=账号组
 * @method array getMembers() 获取只有ReceiverType 是 1 时 才返回账号列表
 * @method void setMembers(array $Members) 设置只有ReceiverType 是 1 时 才返回账号列表
 */
class ReceiveAccount extends AbstractModel
{
    /**
     * @var string 租户 uin
     */
    public $Uin;

    /**
     * @var string 租户名称
     */
    public $Nickname;

    /**
     * @var integer 0=账号uin，1=账号组
     */
    public $ReceiverType;

    /**
     * @var array 只有ReceiverType 是 1 时 才返回账号列表
     */
    public $Members;

    /**
     * @param string $Uin 租户 uin
     * @param string $Nickname 租户名称
     * @param integer $ReceiverType 0=账号uin，1=账号组
     * @param array $Members 只有ReceiverType 是 1 时 才返回账号列表
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
        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("ReceiverType",$param) and $param["ReceiverType"] !== null) {
            $this->ReceiverType = $param["ReceiverType"];
        }

        if (array_key_exists("Members",$param) and $param["Members"] !== null) {
            $this->Members = [];
            foreach ($param["Members"] as $key => $value){
                $obj = new MemberInfo();
                $obj->deserialize($value);
                array_push($this->Members, $obj);
            }
        }
    }
}
