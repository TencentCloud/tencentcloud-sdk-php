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
namespace TencentCloud\Trtc\V20190722\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 混流转推的音频相关参数。
 *
 * @method AudioEncode getAudioEncode() 获取音频编码参数。
 * @method void setAudioEncode(AudioEncode $AudioEncode) 设置音频编码参数。
 * @method array getSubscribeAudioList() 获取音频用户白名单，start时，为空或不填表示混所有主播音频，填具体值表示混指定主播音频；update时，不填表示不更新，为空表示更新为混所有主播音频，填具体值表示更新为混指定主播音频。
使用黑白名单时，黑白名单必须同时填写。都不填写时表示不更新。同一个用户同时在黑白名单时，以黑名单为主。
 * @method void setSubscribeAudioList(array $SubscribeAudioList) 设置音频用户白名单，start时，为空或不填表示混所有主播音频，填具体值表示混指定主播音频；update时，不填表示不更新，为空表示更新为混所有主播音频，填具体值表示更新为混指定主播音频。
使用黑白名单时，黑白名单必须同时填写。都不填写时表示不更新。同一个用户同时在黑白名单时，以黑名单为主。
 * @method array getUnSubscribeAudioList() 获取音频用户黑名单，为空或不填表示无黑名单，填具体值表示不混指定主播音频。update时，不填表示不更新，为空表示更新为清空黑名单，填具体值表示更新为不混指定主播音频。
使用黑白名单时，黑白名单必须同时填写。都不填写时表示不更新。同一个用户同时在黑白名单时，以黑名单为主。
 * @method void setUnSubscribeAudioList(array $UnSubscribeAudioList) 设置音频用户黑名单，为空或不填表示无黑名单，填具体值表示不混指定主播音频。update时，不填表示不更新，为空表示更新为清空黑名单，填具体值表示更新为不混指定主播音频。
使用黑白名单时，黑白名单必须同时填写。都不填写时表示不更新。同一个用户同时在黑白名单时，以黑名单为主。
 */
class McuAudioParams extends AbstractModel
{
    /**
     * @var AudioEncode 音频编码参数。
     */
    public $AudioEncode;

    /**
     * @var array 音频用户白名单，start时，为空或不填表示混所有主播音频，填具体值表示混指定主播音频；update时，不填表示不更新，为空表示更新为混所有主播音频，填具体值表示更新为混指定主播音频。
使用黑白名单时，黑白名单必须同时填写。都不填写时表示不更新。同一个用户同时在黑白名单时，以黑名单为主。
     */
    public $SubscribeAudioList;

    /**
     * @var array 音频用户黑名单，为空或不填表示无黑名单，填具体值表示不混指定主播音频。update时，不填表示不更新，为空表示更新为清空黑名单，填具体值表示更新为不混指定主播音频。
使用黑白名单时，黑白名单必须同时填写。都不填写时表示不更新。同一个用户同时在黑白名单时，以黑名单为主。
     */
    public $UnSubscribeAudioList;

    /**
     * @param AudioEncode $AudioEncode 音频编码参数。
     * @param array $SubscribeAudioList 音频用户白名单，start时，为空或不填表示混所有主播音频，填具体值表示混指定主播音频；update时，不填表示不更新，为空表示更新为混所有主播音频，填具体值表示更新为混指定主播音频。
使用黑白名单时，黑白名单必须同时填写。都不填写时表示不更新。同一个用户同时在黑白名单时，以黑名单为主。
     * @param array $UnSubscribeAudioList 音频用户黑名单，为空或不填表示无黑名单，填具体值表示不混指定主播音频。update时，不填表示不更新，为空表示更新为清空黑名单，填具体值表示更新为不混指定主播音频。
使用黑白名单时，黑白名单必须同时填写。都不填写时表示不更新。同一个用户同时在黑白名单时，以黑名单为主。
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
        if (array_key_exists("AudioEncode",$param) and $param["AudioEncode"] !== null) {
            $this->AudioEncode = new AudioEncode();
            $this->AudioEncode->deserialize($param["AudioEncode"]);
        }

        if (array_key_exists("SubscribeAudioList",$param) and $param["SubscribeAudioList"] !== null) {
            $this->SubscribeAudioList = [];
            foreach ($param["SubscribeAudioList"] as $key => $value){
                $obj = new McuUserInfoParams();
                $obj->deserialize($value);
                array_push($this->SubscribeAudioList, $obj);
            }
        }

        if (array_key_exists("UnSubscribeAudioList",$param) and $param["UnSubscribeAudioList"] !== null) {
            $this->UnSubscribeAudioList = [];
            foreach ($param["UnSubscribeAudioList"] as $key => $value){
                $obj = new McuUserInfoParams();
                $obj->deserialize($value);
                array_push($this->UnSubscribeAudioList, $obj);
            }
        }
    }
}
