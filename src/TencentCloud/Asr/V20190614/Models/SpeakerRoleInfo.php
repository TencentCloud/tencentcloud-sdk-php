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
namespace TencentCloud\Asr\V20190614\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 说话人注册角色声纹信息
 *
 * @method string getRoleAudioUrl() 获取<p>音频url地址，建议不超过30秒，最大45秒</p>
 * @method void setRoleAudioUrl(string $RoleAudioUrl) 设置<p>音频url地址，建议不超过30秒，最大45秒</p>
 * @method string getRoleName() 获取<p>不超过30字节</p>
 * @method void setRoleName(string $RoleName) 设置<p>不超过30字节</p>
 * @method string getVoicePrintId() 获取<p>声纹 ID（V2 版本使用），注意：</p><ul><li>传入未注册或不属于本 AppId 的声纹 ID，该 ID 会被跳过（不报错，相当于没有传入这个说话人信息）</li></ul>
 * @method void setVoicePrintId(string $VoicePrintId) 设置<p>声纹 ID（V2 版本使用），注意：</p><ul><li>传入未注册或不属于本 AppId 的声纹 ID，该 ID 会被跳过（不报错，相当于没有传入这个说话人信息）</li></ul>
 * @method string getSpeakerNick() 获取<p>角色昵称（V2 版本使用），注意：</p><ul><li>传空字符串或者不传入则使用声纹注册时指定的角色名</li><li>否则将覆盖声纹注册时指定的角色名</li><li>角色名不超过 30 字节，仅支持字母、数字、下划线和中文。</li><li>这里指定的角色名只影响本次识别，不影响声纹库中注册的角色名</li></ul>
 * @method void setSpeakerNick(string $SpeakerNick) 设置<p>角色昵称（V2 版本使用），注意：</p><ul><li>传空字符串或者不传入则使用声纹注册时指定的角色名</li><li>否则将覆盖声纹注册时指定的角色名</li><li>角色名不超过 30 字节，仅支持字母、数字、下划线和中文。</li><li>这里指定的角色名只影响本次识别，不影响声纹库中注册的角色名</li></ul>
 */
class SpeakerRoleInfo extends AbstractModel
{
    /**
     * @var string <p>音频url地址，建议不超过30秒，最大45秒</p>
     */
    public $RoleAudioUrl;

    /**
     * @var string <p>不超过30字节</p>
     */
    public $RoleName;

    /**
     * @var string <p>声纹 ID（V2 版本使用），注意：</p><ul><li>传入未注册或不属于本 AppId 的声纹 ID，该 ID 会被跳过（不报错，相当于没有传入这个说话人信息）</li></ul>
     */
    public $VoicePrintId;

    /**
     * @var string <p>角色昵称（V2 版本使用），注意：</p><ul><li>传空字符串或者不传入则使用声纹注册时指定的角色名</li><li>否则将覆盖声纹注册时指定的角色名</li><li>角色名不超过 30 字节，仅支持字母、数字、下划线和中文。</li><li>这里指定的角色名只影响本次识别，不影响声纹库中注册的角色名</li></ul>
     */
    public $SpeakerNick;

    /**
     * @param string $RoleAudioUrl <p>音频url地址，建议不超过30秒，最大45秒</p>
     * @param string $RoleName <p>不超过30字节</p>
     * @param string $VoicePrintId <p>声纹 ID（V2 版本使用），注意：</p><ul><li>传入未注册或不属于本 AppId 的声纹 ID，该 ID 会被跳过（不报错，相当于没有传入这个说话人信息）</li></ul>
     * @param string $SpeakerNick <p>角色昵称（V2 版本使用），注意：</p><ul><li>传空字符串或者不传入则使用声纹注册时指定的角色名</li><li>否则将覆盖声纹注册时指定的角色名</li><li>角色名不超过 30 字节，仅支持字母、数字、下划线和中文。</li><li>这里指定的角色名只影响本次识别，不影响声纹库中注册的角色名</li></ul>
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
        if (array_key_exists("RoleAudioUrl",$param) and $param["RoleAudioUrl"] !== null) {
            $this->RoleAudioUrl = $param["RoleAudioUrl"];
        }

        if (array_key_exists("RoleName",$param) and $param["RoleName"] !== null) {
            $this->RoleName = $param["RoleName"];
        }

        if (array_key_exists("VoicePrintId",$param) and $param["VoicePrintId"] !== null) {
            $this->VoicePrintId = $param["VoicePrintId"];
        }

        if (array_key_exists("SpeakerNick",$param) and $param["SpeakerNick"] !== null) {
            $this->SpeakerNick = $param["SpeakerNick"];
        }
    }
}
