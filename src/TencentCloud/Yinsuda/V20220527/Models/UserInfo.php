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
namespace TencentCloud\Yinsuda\V20220527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户信息
 *
 * @method string getAppName() 获取应用名称。
 * @method void setAppName(string $AppName) 设置应用名称。
 * @method string getUserId() 获取用户标识。
 * @method void setUserId(string $UserId) 设置用户标识。
 * @method LiveVipUserInfo getLiveVipUserInfo() 获取直播会员详细信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLiveVipUserInfo(LiveVipUserInfo $LiveVipUserInfo) 设置直播会员详细信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserType() 获取用户类型
<li>Normal：普通用户</li>
<li>LiveVip：直播会员用户</li>
 * @method void setUserType(string $UserType) 设置用户类型
<li>Normal：普通用户</li>
<li>LiveVip：直播会员用户</li>
 */
class UserInfo extends AbstractModel
{
    /**
     * @var string 应用名称。
     */
    public $AppName;

    /**
     * @var string 用户标识。
     */
    public $UserId;

    /**
     * @var LiveVipUserInfo 直播会员详细信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LiveVipUserInfo;

    /**
     * @var string 用户类型
<li>Normal：普通用户</li>
<li>LiveVip：直播会员用户</li>
     */
    public $UserType;

    /**
     * @param string $AppName 应用名称。
     * @param string $UserId 用户标识。
     * @param LiveVipUserInfo $LiveVipUserInfo 直播会员详细信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserType 用户类型
<li>Normal：普通用户</li>
<li>LiveVip：直播会员用户</li>
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
        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("LiveVipUserInfo",$param) and $param["LiveVipUserInfo"] !== null) {
            $this->LiveVipUserInfo = new LiveVipUserInfo();
            $this->LiveVipUserInfo->deserialize($param["LiveVipUserInfo"]);
        }

        if (array_key_exists("UserType",$param) and $param["UserType"] !== null) {
            $this->UserType = $param["UserType"];
        }
    }
}
