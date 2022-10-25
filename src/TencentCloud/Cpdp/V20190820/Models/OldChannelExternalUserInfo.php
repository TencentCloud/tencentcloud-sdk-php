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
namespace TencentCloud\Cpdp\V20190820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 渠道方用户信息
 *
 * @method string getChannelExternalUserType() 获取渠道方用户类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelExternalUserType(string $ChannelExternalUserType) 设置渠道方用户类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChannelExternalUserId() 获取渠道方用户ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelExternalUserId(string $ChannelExternalUserId) 设置渠道方用户ID
注意：此字段可能返回 null，表示取不到有效值。
 */
class OldChannelExternalUserInfo extends AbstractModel
{
    /**
     * @var string 渠道方用户类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelExternalUserType;

    /**
     * @var string 渠道方用户ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelExternalUserId;

    /**
     * @param string $ChannelExternalUserType 渠道方用户类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChannelExternalUserId 渠道方用户ID
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
        if (array_key_exists("ChannelExternalUserType",$param) and $param["ChannelExternalUserType"] !== null) {
            $this->ChannelExternalUserType = $param["ChannelExternalUserType"];
        }

        if (array_key_exists("ChannelExternalUserId",$param) and $param["ChannelExternalUserId"] !== null) {
            $this->ChannelExternalUserId = $param["ChannelExternalUserId"];
        }
    }
}
