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
 * 转录服务加入TRTC房间的参数。
 *
 * @method string getUserId() 获取转录服务在TRTC房间使用的[UserId](https://cloud.tencent.com/document/product/647/46351#userid)，注意这个userId不能与其他TRTC或者转录服务等已经使用的UserId重复，建议可以把房间ID作为userId的标识的一部分。
 * @method void setUserId(string $UserId) 设置转录服务在TRTC房间使用的[UserId](https://cloud.tencent.com/document/product/647/46351#userid)，注意这个userId不能与其他TRTC或者转录服务等已经使用的UserId重复，建议可以把房间ID作为userId的标识的一部分。
 * @method string getUserSig() 获取转录服务加入TRTC房间的用户签名，当前 UserId 对应的验证签名，相当于登录密码，具体计算方法请参考TRTC计算[UserSig](https://cloud.tencent.com/document/product/647/45910#UserSig)的方案。
 * @method void setUserSig(string $UserSig) 设置转录服务加入TRTC房间的用户签名，当前 UserId 对应的验证签名，相当于登录密码，具体计算方法请参考TRTC计算[UserSig](https://cloud.tencent.com/document/product/647/45910#UserSig)的方案。
 * @method array getSubscribeList() 获取转录用户白名单，开始服务时，为空或不填表示转录所有主播音频，填具体值表示转录指定主播音频。
使用黑白名单时，同一个用户同时在黑白名单时，以黑名单为主。
 * @method void setSubscribeList(array $SubscribeList) 设置转录用户白名单，开始服务时，为空或不填表示转录所有主播音频，填具体值表示转录指定主播音频。
使用黑白名单时，同一个用户同时在黑白名单时，以黑名单为主。
 * @method array getUnSubscribeList() 获取转录用户黑名单，为空或不填表示无黑名单，填具体值表示不转录指定主播音频。
同一个用户同时在黑白名单时，以黑名单为主。
 * @method void setUnSubscribeList(array $UnSubscribeList) 设置转录用户黑名单，为空或不填表示无黑名单，填具体值表示不转录指定主播音频。
同一个用户同时在黑白名单时，以黑名单为主。
 * @method integer getMaxIdleTime() 获取所有参与转录的主播持续离开TRTC房间或切换成观众超过MaxIdleTime的时长，自动停止转录任务，单位：秒。默认值为 30 秒，该值需大于等于 5秒，且小于等于 86400秒(24小时)。
 * @method void setMaxIdleTime(integer $MaxIdleTime) 设置所有参与转录的主播持续离开TRTC房间或切换成观众超过MaxIdleTime的时长，自动停止转录任务，单位：秒。默认值为 30 秒，该值需大于等于 5秒，且小于等于 86400秒(24小时)。
 * @method integer getSendCustomMode() 获取自定义通道：支持自定义信息，只可以填0-2， 0表示不开启自定义通道，1表示开启自定义数据，2表示开启自定义消息。不填默认不开启自定义通道。注意：填1自定义数据只对 SDK版本 >= 5.15.0生效。
 * @method void setSendCustomMode(integer $SendCustomMode) 设置自定义通道：支持自定义信息，只可以填0-2， 0表示不开启自定义通道，1表示开启自定义数据，2表示开启自定义消息。不填默认不开启自定义通道。注意：填1自定义数据只对 SDK版本 >= 5.15.0生效。
 */
class TranscriptionParam extends AbstractModel
{
    /**
     * @var string 转录服务在TRTC房间使用的[UserId](https://cloud.tencent.com/document/product/647/46351#userid)，注意这个userId不能与其他TRTC或者转录服务等已经使用的UserId重复，建议可以把房间ID作为userId的标识的一部分。
     */
    public $UserId;

    /**
     * @var string 转录服务加入TRTC房间的用户签名，当前 UserId 对应的验证签名，相当于登录密码，具体计算方法请参考TRTC计算[UserSig](https://cloud.tencent.com/document/product/647/45910#UserSig)的方案。
     */
    public $UserSig;

    /**
     * @var array 转录用户白名单，开始服务时，为空或不填表示转录所有主播音频，填具体值表示转录指定主播音频。
使用黑白名单时，同一个用户同时在黑白名单时，以黑名单为主。
     */
    public $SubscribeList;

    /**
     * @var array 转录用户黑名单，为空或不填表示无黑名单，填具体值表示不转录指定主播音频。
同一个用户同时在黑白名单时，以黑名单为主。
     */
    public $UnSubscribeList;

    /**
     * @var integer 所有参与转录的主播持续离开TRTC房间或切换成观众超过MaxIdleTime的时长，自动停止转录任务，单位：秒。默认值为 30 秒，该值需大于等于 5秒，且小于等于 86400秒(24小时)。
     */
    public $MaxIdleTime;

    /**
     * @var integer 自定义通道：支持自定义信息，只可以填0-2， 0表示不开启自定义通道，1表示开启自定义数据，2表示开启自定义消息。不填默认不开启自定义通道。注意：填1自定义数据只对 SDK版本 >= 5.15.0生效。
     */
    public $SendCustomMode;

    /**
     * @param string $UserId 转录服务在TRTC房间使用的[UserId](https://cloud.tencent.com/document/product/647/46351#userid)，注意这个userId不能与其他TRTC或者转录服务等已经使用的UserId重复，建议可以把房间ID作为userId的标识的一部分。
     * @param string $UserSig 转录服务加入TRTC房间的用户签名，当前 UserId 对应的验证签名，相当于登录密码，具体计算方法请参考TRTC计算[UserSig](https://cloud.tencent.com/document/product/647/45910#UserSig)的方案。
     * @param array $SubscribeList 转录用户白名单，开始服务时，为空或不填表示转录所有主播音频，填具体值表示转录指定主播音频。
使用黑白名单时，同一个用户同时在黑白名单时，以黑名单为主。
     * @param array $UnSubscribeList 转录用户黑名单，为空或不填表示无黑名单，填具体值表示不转录指定主播音频。
同一个用户同时在黑白名单时，以黑名单为主。
     * @param integer $MaxIdleTime 所有参与转录的主播持续离开TRTC房间或切换成观众超过MaxIdleTime的时长，自动停止转录任务，单位：秒。默认值为 30 秒，该值需大于等于 5秒，且小于等于 86400秒(24小时)。
     * @param integer $SendCustomMode 自定义通道：支持自定义信息，只可以填0-2， 0表示不开启自定义通道，1表示开启自定义数据，2表示开启自定义消息。不填默认不开启自定义通道。注意：填1自定义数据只对 SDK版本 >= 5.15.0生效。
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

        if (array_key_exists("UserSig",$param) and $param["UserSig"] !== null) {
            $this->UserSig = $param["UserSig"];
        }

        if (array_key_exists("SubscribeList",$param) and $param["SubscribeList"] !== null) {
            $this->SubscribeList = [];
            foreach ($param["SubscribeList"] as $key => $value){
                $obj = new TranscriptionUserInfoParams();
                $obj->deserialize($value);
                array_push($this->SubscribeList, $obj);
            }
        }

        if (array_key_exists("UnSubscribeList",$param) and $param["UnSubscribeList"] !== null) {
            $this->UnSubscribeList = [];
            foreach ($param["UnSubscribeList"] as $key => $value){
                $obj = new TranscriptionUserInfoParams();
                $obj->deserialize($value);
                array_push($this->UnSubscribeList, $obj);
            }
        }

        if (array_key_exists("MaxIdleTime",$param) and $param["MaxIdleTime"] !== null) {
            $this->MaxIdleTime = $param["MaxIdleTime"];
        }

        if (array_key_exists("SendCustomMode",$param) and $param["SendCustomMode"] !== null) {
            $this->SendCustomMode = $param["SendCustomMode"];
        }
    }
}
