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
 * AI转录参数
 *
 * @method string getUserId() 获取转录机器人的UserId，用于进房发起转录任务。【注意】这个UserId不能与当前房间内的主播观众[UserId](https://cloud.tencent.com/document/product/647/46351#userid)重复。如果一个房间发起多个转录任务时，机器人的userid也不能相互重复，否则会中断前一个任务。需要保证转录机器人UserId在房间内唯一。
 * @method void setUserId(string $UserId) 设置转录机器人的UserId，用于进房发起转录任务。【注意】这个UserId不能与当前房间内的主播观众[UserId](https://cloud.tencent.com/document/product/647/46351#userid)重复。如果一个房间发起多个转录任务时，机器人的userid也不能相互重复，否则会中断前一个任务。需要保证转录机器人UserId在房间内唯一。
 * @method string getUserSig() 获取转录机器人UserId对应的校验签名，即UserId和UserSig相当于转录机器人进房的登录密码，具体计算方法请参考TRTC计算[UserSig](https://cloud.tencent.com/document/product/647/45910#UserSig)的方案。
 * @method void setUserSig(string $UserSig) 设置转录机器人UserId对应的校验签名，即UserId和UserSig相当于转录机器人进房的登录密码，具体计算方法请参考TRTC计算[UserSig](https://cloud.tencent.com/document/product/647/45910#UserSig)的方案。
 * @method string getIMAdminUserId() 获取IM[管理员账户](
https://cloud.tencent.com/document/product/269/31999#app-.E7.AE.A1.E7.90.86.E5.91.98)，如果填写，后台下发消息会使用IM通道，而不是TRTC自定义消息。
 * @method void setIMAdminUserId(string $IMAdminUserId) 设置IM[管理员账户](
https://cloud.tencent.com/document/product/269/31999#app-.E7.AE.A1.E7.90.86.E5.91.98)，如果填写，后台下发消息会使用IM通道，而不是TRTC自定义消息。
 * @method string getIMAdminUserSig() 获取IM管理员账户生成的签名，用于向特定群组发送消息。如果填写，后台下发消息会使用IM通道，而不是TRTC自定义消息。必须和IM管理员的UserId一起填写。
 * @method void setIMAdminUserSig(string $IMAdminUserSig) 设置IM管理员账户生成的签名，用于向特定群组发送消息。如果填写，后台下发消息会使用IM通道，而不是TRTC自定义消息。必须和IM管理员的UserId一起填写。
 * @method integer getMaxIdleTime() 获取房间内推流用户全部退出后超过MaxIdleTime秒，后台自动关闭转录任务，默认值是60s。
 * @method void setMaxIdleTime(integer $MaxIdleTime) 设置房间内推流用户全部退出后超过MaxIdleTime秒，后台自动关闭转录任务，默认值是60s。
 * @method integer getTranscriptionMode() 获取1表示机器人只订阅单个人的流，0表示机器人订阅整个房间的流，如果不填默认订阅整个房间的流。
 * @method void setTranscriptionMode(integer $TranscriptionMode) 设置1表示机器人只订阅单个人的流，0表示机器人订阅整个房间的流，如果不填默认订阅整个房间的流。
 * @method string getTargetUserId() 获取TranscriptionMode为1时必填，机器人只会拉该userid的流，忽略房间里其他用户。
 * @method void setTargetUserId(string $TargetUserId) 设置TranscriptionMode为1时必填，机器人只会拉该userid的流，忽略房间里其他用户。
 * @method array getTargetUserIdList() 获取机器人订阅的用户列表
仅 TranscriptionMode 为 1或者 TranscriptionMode 为无限上麦模式支持传入多个用户列表
 * @method void setTargetUserIdList(array $TargetUserIdList) 设置机器人订阅的用户列表
仅 TranscriptionMode 为 1或者 TranscriptionMode 为无限上麦模式支持传入多个用户列表
 * @method VoicePrint getVoicePrint() 获取声纹配置
 * @method void setVoicePrint(VoicePrint $VoicePrint) 设置声纹配置
 * @method TurnDetection getTurnDetection() 获取语义断句检测
 * @method void setTurnDetection(TurnDetection $TurnDetection) 设置语义断句检测
 */
class TranscriptionParams extends AbstractModel
{
    /**
     * @var string 转录机器人的UserId，用于进房发起转录任务。【注意】这个UserId不能与当前房间内的主播观众[UserId](https://cloud.tencent.com/document/product/647/46351#userid)重复。如果一个房间发起多个转录任务时，机器人的userid也不能相互重复，否则会中断前一个任务。需要保证转录机器人UserId在房间内唯一。
     */
    public $UserId;

    /**
     * @var string 转录机器人UserId对应的校验签名，即UserId和UserSig相当于转录机器人进房的登录密码，具体计算方法请参考TRTC计算[UserSig](https://cloud.tencent.com/document/product/647/45910#UserSig)的方案。
     */
    public $UserSig;

    /**
     * @var string IM[管理员账户](
https://cloud.tencent.com/document/product/269/31999#app-.E7.AE.A1.E7.90.86.E5.91.98)，如果填写，后台下发消息会使用IM通道，而不是TRTC自定义消息。
     * @deprecated
     */
    public $IMAdminUserId;

    /**
     * @var string IM管理员账户生成的签名，用于向特定群组发送消息。如果填写，后台下发消息会使用IM通道，而不是TRTC自定义消息。必须和IM管理员的UserId一起填写。
     * @deprecated
     */
    public $IMAdminUserSig;

    /**
     * @var integer 房间内推流用户全部退出后超过MaxIdleTime秒，后台自动关闭转录任务，默认值是60s。
     */
    public $MaxIdleTime;

    /**
     * @var integer 1表示机器人只订阅单个人的流，0表示机器人订阅整个房间的流，如果不填默认订阅整个房间的流。
     */
    public $TranscriptionMode;

    /**
     * @var string TranscriptionMode为1时必填，机器人只会拉该userid的流，忽略房间里其他用户。
     */
    public $TargetUserId;

    /**
     * @var array 机器人订阅的用户列表
仅 TranscriptionMode 为 1或者 TranscriptionMode 为无限上麦模式支持传入多个用户列表
     */
    public $TargetUserIdList;

    /**
     * @var VoicePrint 声纹配置
     */
    public $VoicePrint;

    /**
     * @var TurnDetection 语义断句检测
     */
    public $TurnDetection;

    /**
     * @param string $UserId 转录机器人的UserId，用于进房发起转录任务。【注意】这个UserId不能与当前房间内的主播观众[UserId](https://cloud.tencent.com/document/product/647/46351#userid)重复。如果一个房间发起多个转录任务时，机器人的userid也不能相互重复，否则会中断前一个任务。需要保证转录机器人UserId在房间内唯一。
     * @param string $UserSig 转录机器人UserId对应的校验签名，即UserId和UserSig相当于转录机器人进房的登录密码，具体计算方法请参考TRTC计算[UserSig](https://cloud.tencent.com/document/product/647/45910#UserSig)的方案。
     * @param string $IMAdminUserId IM[管理员账户](
https://cloud.tencent.com/document/product/269/31999#app-.E7.AE.A1.E7.90.86.E5.91.98)，如果填写，后台下发消息会使用IM通道，而不是TRTC自定义消息。
     * @param string $IMAdminUserSig IM管理员账户生成的签名，用于向特定群组发送消息。如果填写，后台下发消息会使用IM通道，而不是TRTC自定义消息。必须和IM管理员的UserId一起填写。
     * @param integer $MaxIdleTime 房间内推流用户全部退出后超过MaxIdleTime秒，后台自动关闭转录任务，默认值是60s。
     * @param integer $TranscriptionMode 1表示机器人只订阅单个人的流，0表示机器人订阅整个房间的流，如果不填默认订阅整个房间的流。
     * @param string $TargetUserId TranscriptionMode为1时必填，机器人只会拉该userid的流，忽略房间里其他用户。
     * @param array $TargetUserIdList 机器人订阅的用户列表
仅 TranscriptionMode 为 1或者 TranscriptionMode 为无限上麦模式支持传入多个用户列表
     * @param VoicePrint $VoicePrint 声纹配置
     * @param TurnDetection $TurnDetection 语义断句检测
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

        if (array_key_exists("IMAdminUserId",$param) and $param["IMAdminUserId"] !== null) {
            $this->IMAdminUserId = $param["IMAdminUserId"];
        }

        if (array_key_exists("IMAdminUserSig",$param) and $param["IMAdminUserSig"] !== null) {
            $this->IMAdminUserSig = $param["IMAdminUserSig"];
        }

        if (array_key_exists("MaxIdleTime",$param) and $param["MaxIdleTime"] !== null) {
            $this->MaxIdleTime = $param["MaxIdleTime"];
        }

        if (array_key_exists("TranscriptionMode",$param) and $param["TranscriptionMode"] !== null) {
            $this->TranscriptionMode = $param["TranscriptionMode"];
        }

        if (array_key_exists("TargetUserId",$param) and $param["TargetUserId"] !== null) {
            $this->TargetUserId = $param["TargetUserId"];
        }

        if (array_key_exists("TargetUserIdList",$param) and $param["TargetUserIdList"] !== null) {
            $this->TargetUserIdList = $param["TargetUserIdList"];
        }

        if (array_key_exists("VoicePrint",$param) and $param["VoicePrint"] !== null) {
            $this->VoicePrint = new VoicePrint();
            $this->VoicePrint->deserialize($param["VoicePrint"]);
        }

        if (array_key_exists("TurnDetection",$param) and $param["TurnDetection"] !== null) {
            $this->TurnDetection = new TurnDetection();
            $this->TurnDetection->deserialize($param["TurnDetection"]);
        }
    }
}
