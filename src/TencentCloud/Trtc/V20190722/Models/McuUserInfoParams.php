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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 混流用户参数
 *
 * @method MixUserInfo getUserInfo() 获取用户参数。
 * @method void setUserInfo(MixUserInfo $UserInfo) 设置用户参数。
 * @method integer getSoundLevel() 获取混音的音量调整：取值范围是0到100，100为原始上行音量，不填默认为100，值越小则音量越低。
注：该参数只在音量白名单下配置生效，其他场景配置无效。
 * @method void setSoundLevel(integer $SoundLevel) 设置混音的音量调整：取值范围是0到100，100为原始上行音量，不填默认为100，值越小则音量越低。
注：该参数只在音量白名单下配置生效，其他场景配置无效。
 */
class McuUserInfoParams extends AbstractModel
{
    /**
     * @var MixUserInfo 用户参数。
     */
    public $UserInfo;

    /**
     * @var integer 混音的音量调整：取值范围是0到100，100为原始上行音量，不填默认为100，值越小则音量越低。
注：该参数只在音量白名单下配置生效，其他场景配置无效。
     */
    public $SoundLevel;

    /**
     * @param MixUserInfo $UserInfo 用户参数。
     * @param integer $SoundLevel 混音的音量调整：取值范围是0到100，100为原始上行音量，不填默认为100，值越小则音量越低。
注：该参数只在音量白名单下配置生效，其他场景配置无效。
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
        if (array_key_exists("UserInfo",$param) and $param["UserInfo"] !== null) {
            $this->UserInfo = new MixUserInfo();
            $this->UserInfo->deserialize($param["UserInfo"]);
        }

        if (array_key_exists("SoundLevel",$param) and $param["SoundLevel"] !== null) {
            $this->SoundLevel = $param["SoundLevel"];
        }
    }
}
