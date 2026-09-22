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
 * 成员信息
 *
 * @method string getAppId() 获取成员 AppId
 * @method void setAppId(string $AppId) 设置成员 AppId
 * @method string getUin() 获取成员 Uin
 * @method void setUin(string $Uin) 设置成员 Uin
 * @method string getNickname() 获取成员昵称
 * @method void setNickname(string $Nickname) 设置成员昵称
 * @method string getMemberId() 获取成员 ID（个人场景为空）
 * @method void setMemberId(string $MemberId) 设置成员 ID（个人场景为空）
 * @method string getNodeName() 获取所属部门
 * @method void setNodeName(string $NodeName) 设置所属部门
 */
class MemberInfo extends AbstractModel
{
    /**
     * @var string 成员 AppId
     */
    public $AppId;

    /**
     * @var string 成员 Uin
     */
    public $Uin;

    /**
     * @var string 成员昵称
     */
    public $Nickname;

    /**
     * @var string 成员 ID（个人场景为空）
     */
    public $MemberId;

    /**
     * @var string 所属部门
     */
    public $NodeName;

    /**
     * @param string $AppId 成员 AppId
     * @param string $Uin 成员 Uin
     * @param string $Nickname 成员昵称
     * @param string $MemberId 成员 ID（个人场景为空）
     * @param string $NodeName 所属部门
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("Nickname",$param) and $param["Nickname"] !== null) {
            $this->Nickname = $param["Nickname"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("NodeName",$param) and $param["NodeName"] !== null) {
            $this->NodeName = $param["NodeName"];
        }
    }
}
