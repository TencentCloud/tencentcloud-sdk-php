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
namespace TencentCloud\Eiam\V20210420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUserThirdPartyAccountInfo请求参数结构体
 *
 * @method string getUserName() 获取用户名。 Username 和 UserId 需至少一个不为空；都不为空时优先使用 Username。
 * @method void setUserName(string $UserName) 设置用户名。 Username 和 UserId 需至少一个不为空；都不为空时优先使用 Username。
 * @method string getUserId() 获取用户 ID。 Username 和 UserId 需至少一个不为空；都不为空时优先使用 Username。
 * @method void setUserId(string $UserId) 设置用户 ID。 Username 和 UserId 需至少一个不为空；都不为空时优先使用 Username。
 */
class DescribeUserThirdPartyAccountInfoRequest extends AbstractModel
{
    /**
     * @var string 用户名。 Username 和 UserId 需至少一个不为空；都不为空时优先使用 Username。
     */
    public $UserName;

    /**
     * @var string 用户 ID。 Username 和 UserId 需至少一个不为空；都不为空时优先使用 Username。
     */
    public $UserId;

    /**
     * @param string $UserName 用户名。 Username 和 UserId 需至少一个不为空；都不为空时优先使用 Username。
     * @param string $UserId 用户 ID。 Username 和 UserId 需至少一个不为空；都不为空时优先使用 Username。
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
        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }
    }
}
