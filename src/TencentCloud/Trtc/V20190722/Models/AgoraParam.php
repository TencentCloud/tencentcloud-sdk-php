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
 * 声网拉流参数
 *
 * @method string getAppId() 获取<p>声网提供的应用标识</p>
 * @method void setAppId(string $AppId) 设置<p>声网提供的应用标识</p>
 * @method string getChannel() 获取<p>声网提供的频道名</p>
 * @method void setChannel(string $Channel) 设置<p>声网提供的频道名</p>
 * @method integer getChannelProfile() 获取<p>声网录制的频道模式， 可选值如下：（默认值为0） 0: 通信（默认）,即常见的 1 对 1 单聊或群聊， 频道内任何用户可以自由说话； 1: 直播，有两种用户角色: 主播和观众。</p><p>枚举值：</p><ul><li>0:： 通信（默认）</li><li>1： 直播</li></ul>
 * @method void setChannelProfile(integer $ChannelProfile) 设置<p>声网录制的频道模式， 可选值如下：（默认值为0） 0: 通信（默认）,即常见的 1 对 1 单聊或群聊， 频道内任何用户可以自由说话； 1: 直播，有两种用户角色: 主播和观众。</p><p>枚举值：</p><ul><li>0:： 通信（默认）</li><li>1： 直播</li></ul>
 * @method string getToken() 获取<p>绑定频道生成的临时Token</p>
 * @method void setToken(string $Token) 设置<p>绑定频道生成的临时Token</p>
 * @method integer getUid() 获取<p>用户ID</p>
 * @method void setUid(integer $Uid) 设置<p>用户ID</p>
 * @method array getTrustedUserIdList() 获取<p>信任用户的列表</p>
 * @method void setTrustedUserIdList(array $TrustedUserIdList) 设置<p>信任用户的列表</p>
 * @method array getUntrustedUserIdList() 获取<p>非信任用户的列表</p>
 * @method void setUntrustedUserIdList(array $UntrustedUserIdList) 设置<p>非信任用户的列表</p>
 */
class AgoraParam extends AbstractModel
{
    /**
     * @var string <p>声网提供的应用标识</p>
     */
    public $AppId;

    /**
     * @var string <p>声网提供的频道名</p>
     */
    public $Channel;

    /**
     * @var integer <p>声网录制的频道模式， 可选值如下：（默认值为0） 0: 通信（默认）,即常见的 1 对 1 单聊或群聊， 频道内任何用户可以自由说话； 1: 直播，有两种用户角色: 主播和观众。</p><p>枚举值：</p><ul><li>0:： 通信（默认）</li><li>1： 直播</li></ul>
     */
    public $ChannelProfile;

    /**
     * @var string <p>绑定频道生成的临时Token</p>
     */
    public $Token;

    /**
     * @var integer <p>用户ID</p>
     */
    public $Uid;

    /**
     * @var array <p>信任用户的列表</p>
     */
    public $TrustedUserIdList;

    /**
     * @var array <p>非信任用户的列表</p>
     */
    public $UntrustedUserIdList;

    /**
     * @param string $AppId <p>声网提供的应用标识</p>
     * @param string $Channel <p>声网提供的频道名</p>
     * @param integer $ChannelProfile <p>声网录制的频道模式， 可选值如下：（默认值为0） 0: 通信（默认）,即常见的 1 对 1 单聊或群聊， 频道内任何用户可以自由说话； 1: 直播，有两种用户角色: 主播和观众。</p><p>枚举值：</p><ul><li>0:： 通信（默认）</li><li>1： 直播</li></ul>
     * @param string $Token <p>绑定频道生成的临时Token</p>
     * @param integer $Uid <p>用户ID</p>
     * @param array $TrustedUserIdList <p>信任用户的列表</p>
     * @param array $UntrustedUserIdList <p>非信任用户的列表</p>
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
        if (array_key_exists("AppId",$param) and $param["AppId"] !== null) {
            $this->AppId = $param["AppId"];
        }

        if (array_key_exists("Channel",$param) and $param["Channel"] !== null) {
            $this->Channel = $param["Channel"];
        }

        if (array_key_exists("ChannelProfile",$param) and $param["ChannelProfile"] !== null) {
            $this->ChannelProfile = $param["ChannelProfile"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("Uid",$param) and $param["Uid"] !== null) {
            $this->Uid = $param["Uid"];
        }

        if (array_key_exists("TrustedUserIdList",$param) and $param["TrustedUserIdList"] !== null) {
            $this->TrustedUserIdList = $param["TrustedUserIdList"];
        }

        if (array_key_exists("UntrustedUserIdList",$param) and $param["UntrustedUserIdList"] !== null) {
            $this->UntrustedUserIdList = $param["UntrustedUserIdList"];
        }
    }
}
