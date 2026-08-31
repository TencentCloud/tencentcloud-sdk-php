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
 * @method string getAppId() 获取<p>成员AppId</p>
 * @method void setAppId(string $AppId) 设置<p>成员AppId</p>
 * @method string getUin() 获取<p>成员Uin</p>
 * @method void setUin(string $Uin) 设置<p>成员Uin</p>
 * @method string getNickname() 获取<p>成员昵称</p>
 * @method void setNickname(string $Nickname) 设置<p>成员昵称</p>
 * @method string getMemberId() 获取<p>成员Id</p>
 * @method void setMemberId(string $MemberId) 设置<p>成员Id</p>
 * @method string getNodeName() 获取<p>所属部门</p>
 * @method void setNodeName(string $NodeName) 设置<p>所属部门</p>
 */
class MemberInfo extends AbstractModel
{
    /**
     * @var string <p>成员AppId</p>
     */
    public $AppId;

    /**
     * @var string <p>成员Uin</p>
     */
    public $Uin;

    /**
     * @var string <p>成员昵称</p>
     */
    public $Nickname;

    /**
     * @var string <p>成员Id</p>
     */
    public $MemberId;

    /**
     * @var string <p>所属部门</p>
     */
    public $NodeName;

    /**
     * @param string $AppId <p>成员AppId</p>
     * @param string $Uin <p>成员Uin</p>
     * @param string $Nickname <p>成员昵称</p>
     * @param string $MemberId <p>成员Id</p>
     * @param string $NodeName <p>所属部门</p>
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
