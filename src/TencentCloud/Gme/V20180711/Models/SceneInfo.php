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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SceneInfo场景信息
'RealTime','实时语音分析',
'VoiceMessage','语音消息',
'GMECloudApi':'GME云API接口'
 *
 * @method string getSceneId() 获取'RealTime','实时语音分析',
'VoiceMessage','语音消息',
'GMECloudApi':'GME云API接口'
 * @method void setSceneId(string $SceneId) 设置'RealTime','实时语音分析',
'VoiceMessage','语音消息',
'GMECloudApi':'GME云API接口'
 * @method boolean getStatus() 获取开关状态，true开启/false关闭
 * @method void setStatus(boolean $Status) 设置开关状态，true开启/false关闭
 * @method string getCallbackUrl() 获取用户回调地址
 * @method void setCallbackUrl(string $CallbackUrl) 设置用户回调地址
 */
class SceneInfo extends AbstractModel
{
    /**
     * @var string 'RealTime','实时语音分析',
'VoiceMessage','语音消息',
'GMECloudApi':'GME云API接口'
     */
    public $SceneId;

    /**
     * @var boolean 开关状态，true开启/false关闭
     */
    public $Status;

    /**
     * @var string 用户回调地址
     */
    public $CallbackUrl;

    /**
     * @param string $SceneId 'RealTime','实时语音分析',
'VoiceMessage','语音消息',
'GMECloudApi':'GME云API接口'
     * @param boolean $Status 开关状态，true开启/false关闭
     * @param string $CallbackUrl 用户回调地址
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
        if (array_key_exists("SceneId",$param) and $param["SceneId"] !== null) {
            $this->SceneId = $param["SceneId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("CallbackUrl",$param) and $param["CallbackUrl"] !== null) {
            $this->CallbackUrl = $param["CallbackUrl"];
        }
    }
}
