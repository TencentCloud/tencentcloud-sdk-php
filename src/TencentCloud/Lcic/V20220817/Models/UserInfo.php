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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户信息结构体
 *
 * @method integer getSdkAppId() 获取应用Id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSdkAppId(integer $SdkAppId) 设置应用Id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserId() 获取用户Id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(string $UserId) 设置用户Id。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取用户昵称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置用户昵称。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getAvatar() 获取用户头像Url。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvatar(string $Avatar) 设置用户头像Url。
注意：此字段可能返回 null，表示取不到有效值。
 */
class UserInfo extends AbstractModel
{
    /**
     * @var integer 应用Id。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SdkAppId;

    /**
     * @var string 用户Id。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @var string 用户昵称。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var string 用户头像Url。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Avatar;

    /**
     * @param integer $SdkAppId 应用Id。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserId 用户Id。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 用户昵称。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Avatar 用户头像Url。
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Avatar",$param) and $param["Avatar"] !== null) {
            $this->Avatar = $param["Avatar"];
        }
    }
}
