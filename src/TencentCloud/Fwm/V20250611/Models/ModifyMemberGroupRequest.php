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
 * ModifyMemberGroup请求参数结构体
 *
 * @method string getUserMemberId() 获取目标成员 AppId
 * @method void setUserMemberId(string $UserMemberId) 设置目标成员 AppId
 * @method string getGroupId() 获取账户组ID（空字符串表示移出账户组）
 * @method void setGroupId(string $GroupId) 设置账户组ID（空字符串表示移出账户组）
 */
class ModifyMemberGroupRequest extends AbstractModel
{
    /**
     * @var string 目标成员 AppId
     */
    public $UserMemberId;

    /**
     * @var string 账户组ID（空字符串表示移出账户组）
     */
    public $GroupId;

    /**
     * @param string $UserMemberId 目标成员 AppId
     * @param string $GroupId 账户组ID（空字符串表示移出账户组）
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
        if (array_key_exists("UserMemberId",$param) and $param["UserMemberId"] !== null) {
            $this->UserMemberId = $param["UserMemberId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }
    }
}
