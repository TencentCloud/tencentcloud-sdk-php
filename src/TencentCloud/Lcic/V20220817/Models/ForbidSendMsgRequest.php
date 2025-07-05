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
namespace TencentCloud\Lcic\V20220817\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ForbidSendMsg请求参数结构体
 *
 * @method integer getSdkAppId() 获取低代码互动课堂的SdkAppId。
 * @method void setSdkAppId(integer $SdkAppId) 设置低代码互动课堂的SdkAppId。
 * @method integer getRoomId() 获取房间ID。
 * @method void setRoomId(integer $RoomId) 设置房间ID。
 * @method array getMembersAccount() 获取需要禁言的用户账号，最多支持500个账号
 * @method void setMembersAccount(array $MembersAccount) 设置需要禁言的用户账号，最多支持500个账号
 * @method integer getMuteTime() 获取需禁言时间，单位为秒，为0时表示取消禁言，4294967295为永久禁言。
 * @method void setMuteTime(integer $MuteTime) 设置需禁言时间，单位为秒，为0时表示取消禁言，4294967295为永久禁言。
 */
class ForbidSendMsgRequest extends AbstractModel
{
    /**
     * @var integer 低代码互动课堂的SdkAppId。
     */
    public $SdkAppId;

    /**
     * @var integer 房间ID。
     */
    public $RoomId;

    /**
     * @var array 需要禁言的用户账号，最多支持500个账号
     */
    public $MembersAccount;

    /**
     * @var integer 需禁言时间，单位为秒，为0时表示取消禁言，4294967295为永久禁言。
     */
    public $MuteTime;

    /**
     * @param integer $SdkAppId 低代码互动课堂的SdkAppId。
     * @param integer $RoomId 房间ID。
     * @param array $MembersAccount 需要禁言的用户账号，最多支持500个账号
     * @param integer $MuteTime 需禁言时间，单位为秒，为0时表示取消禁言，4294967295为永久禁言。
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

        if (array_key_exists("RoomId",$param) and $param["RoomId"] !== null) {
            $this->RoomId = $param["RoomId"];
        }

        if (array_key_exists("MembersAccount",$param) and $param["MembersAccount"] !== null) {
            $this->MembersAccount = $param["MembersAccount"];
        }

        if (array_key_exists("MuteTime",$param) and $param["MuteTime"] !== null) {
            $this->MuteTime = $param["MuteTime"];
        }
    }
}
