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
 * 账户组信息
 *
 * @method string getGroupId() 获取账户组ID
 * @method void setGroupId(string $GroupId) 设置账户组ID
 * @method string getGroupName() 获取账户组名称
 * @method void setGroupName(string $GroupName) 设置账户组名称
 */
class AccountGroupInfo extends AbstractModel
{
    /**
     * @var string 账户组ID
     */
    public $GroupId;

    /**
     * @var string 账户组名称
     */
    public $GroupName;

    /**
     * @param string $GroupId 账户组ID
     * @param string $GroupName 账户组名称
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }
    }
}
