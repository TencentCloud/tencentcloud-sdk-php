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
 * 机器人参数
 *
 * @method string getUserId() 获取机器人的UserId，用于进房发起任务。【注意】这个UserId不能与当前房间内的主播观众[UserId](https://cloud.tencent.com/document/product/647/46351#userid)重复。如果一个房间发起多个任务时，机器人的UserId也不能相互重复，否则会中断前一个任务。需要保证机器人UserId在房间内唯一。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserId(string $UserId) 设置机器人的UserId，用于进房发起任务。【注意】这个UserId不能与当前房间内的主播观众[UserId](https://cloud.tencent.com/document/product/647/46351#userid)重复。如果一个房间发起多个任务时，机器人的UserId也不能相互重复，否则会中断前一个任务。需要保证机器人UserId在房间内唯一。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUserSig() 获取机器人UserId对应的校验签名，即UserId和UserSig相当于机器人进房的登录密码，具体计算方法请参考TRTC计算[UserSig](https://cloud.tencent.com/document/product/647/45910#UserSig)的方案。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserSig(string $UserSig) 设置机器人UserId对应的校验签名，即UserId和UserSig相当于机器人进房的登录密码，具体计算方法请参考TRTC计算[UserSig](https://cloud.tencent.com/document/product/647/45910#UserSig)的方案。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTargetUserId() 获取机器人拉流的UserId, 填写后，机器人会拉取该UserId的流进行实时处理
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTargetUserId(string $TargetUserId) 设置机器人拉流的UserId, 填写后，机器人会拉取该UserId的流进行实时处理
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getMaxIdleTime() 获取房间内推流用户全部退出后超过MaxIdleTime秒，后台自动关闭任务，默认值是60s。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMaxIdleTime(integer $MaxIdleTime) 设置房间内推流用户全部退出后超过MaxIdleTime秒，后台自动关闭任务，默认值是60s。
注意：此字段可能返回 null，表示取不到有效值。
 */
class AgentConfig extends AbstractModel
{
    /**
     * @var string 机器人的UserId，用于进房发起任务。【注意】这个UserId不能与当前房间内的主播观众[UserId](https://cloud.tencent.com/document/product/647/46351#userid)重复。如果一个房间发起多个任务时，机器人的UserId也不能相互重复，否则会中断前一个任务。需要保证机器人UserId在房间内唯一。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserId;

    /**
     * @var string 机器人UserId对应的校验签名，即UserId和UserSig相当于机器人进房的登录密码，具体计算方法请参考TRTC计算[UserSig](https://cloud.tencent.com/document/product/647/45910#UserSig)的方案。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserSig;

    /**
     * @var string 机器人拉流的UserId, 填写后，机器人会拉取该UserId的流进行实时处理
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TargetUserId;

    /**
     * @var integer 房间内推流用户全部退出后超过MaxIdleTime秒，后台自动关闭任务，默认值是60s。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MaxIdleTime;

    /**
     * @param string $UserId 机器人的UserId，用于进房发起任务。【注意】这个UserId不能与当前房间内的主播观众[UserId](https://cloud.tencent.com/document/product/647/46351#userid)重复。如果一个房间发起多个任务时，机器人的UserId也不能相互重复，否则会中断前一个任务。需要保证机器人UserId在房间内唯一。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UserSig 机器人UserId对应的校验签名，即UserId和UserSig相当于机器人进房的登录密码，具体计算方法请参考TRTC计算[UserSig](https://cloud.tencent.com/document/product/647/45910#UserSig)的方案。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TargetUserId 机器人拉流的UserId, 填写后，机器人会拉取该UserId的流进行实时处理
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $MaxIdleTime 房间内推流用户全部退出后超过MaxIdleTime秒，后台自动关闭任务，默认值是60s。
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
        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserSig",$param) and $param["UserSig"] !== null) {
            $this->UserSig = $param["UserSig"];
        }

        if (array_key_exists("TargetUserId",$param) and $param["TargetUserId"] !== null) {
            $this->TargetUserId = $param["TargetUserId"];
        }

        if (array_key_exists("MaxIdleTime",$param) and $param["MaxIdleTime"] !== null) {
            $this->MaxIdleTime = $param["MaxIdleTime"];
        }
    }
}
