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
 * 账号关联的用户信息
 *
 * @method string getUserId() 获取用户ID，是用户全局唯一标识，长度限制：64个字符。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(string $UserId) 设置用户ID，是用户全局唯一标识，长度限制：64个字符。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserName() 获取用户名称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserName(string $UserName) 设置用户名称。
注意：此字段可能返回 null，表示取不到有效值。
 */
class LinkUserInfo extends AbstractModel
{
    /**
     * @var string 用户ID，是用户全局唯一标识，长度限制：64个字符。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @var string 用户名称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserName;

    /**
     * @param string $UserId 用户ID，是用户全局唯一标识，长度限制：64个字符。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserName 用户名称。
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserName",$param) and $param["UserName"] !== null) {
            $this->UserName = $param["UserName"];
        }
    }
}
