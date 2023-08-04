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
namespace TencentCloud\Iss\V20230517\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ControlRecord请求参数结构体
 *
 * @method string getChannelId() 获取通道ID（录像播放地址格式 https://${domain}/live/${ChannelId}@${Session}）
 * @method void setChannelId(string $ChannelId) 设置通道ID（录像播放地址格式 https://${domain}/live/${ChannelId}@${Session}）
 * @method string getSession() 获取录像会话 ID （ 录像播放地址格式 https://${domain}/live/${ChannelId}@${Session}）
 * @method void setSession(string $Session) 设置录像会话 ID （ 录像播放地址格式 https://${domain}/live/${ChannelId}@${Session}）
 * @method string getControlAction() 获取录像操作类型 （play:播放；pause:暂停 ；stop:关闭）
 * @method void setControlAction(string $ControlAction) 设置录像操作类型 （play:播放；pause:暂停 ；stop:关闭）
 * @method integer getPosition() 获取跳转进度 （ 参数应大于等于0，跳转到录像开始时间的相对时间（单位秒），例如0就是跳转到录像开始的时间,不可以和 Scale 参数同时出现）
 * @method void setPosition(integer $Position) 设置跳转进度 （ 参数应大于等于0，跳转到录像开始时间的相对时间（单位秒），例如0就是跳转到录像开始的时间,不可以和 Scale 参数同时出现）
 * @method float getScale() 获取速度 （ 范围（0.25,0.5,1,2,4,8），不可以和 Pos 参数同时出现）
 * @method void setScale(float $Scale) 设置速度 （ 范围（0.25,0.5,1,2,4,8），不可以和 Pos 参数同时出现）
 */
class ControlRecordRequest extends AbstractModel
{
    /**
     * @var string 通道ID（录像播放地址格式 https://${domain}/live/${ChannelId}@${Session}）
     */
    public $ChannelId;

    /**
     * @var string 录像会话 ID （ 录像播放地址格式 https://${domain}/live/${ChannelId}@${Session}）
     */
    public $Session;

    /**
     * @var string 录像操作类型 （play:播放；pause:暂停 ；stop:关闭）
     */
    public $ControlAction;

    /**
     * @var integer 跳转进度 （ 参数应大于等于0，跳转到录像开始时间的相对时间（单位秒），例如0就是跳转到录像开始的时间,不可以和 Scale 参数同时出现）
     */
    public $Position;

    /**
     * @var float 速度 （ 范围（0.25,0.5,1,2,4,8），不可以和 Pos 参数同时出现）
     */
    public $Scale;

    /**
     * @param string $ChannelId 通道ID（录像播放地址格式 https://${domain}/live/${ChannelId}@${Session}）
     * @param string $Session 录像会话 ID （ 录像播放地址格式 https://${domain}/live/${ChannelId}@${Session}）
     * @param string $ControlAction 录像操作类型 （play:播放；pause:暂停 ；stop:关闭）
     * @param integer $Position 跳转进度 （ 参数应大于等于0，跳转到录像开始时间的相对时间（单位秒），例如0就是跳转到录像开始的时间,不可以和 Scale 参数同时出现）
     * @param float $Scale 速度 （ 范围（0.25,0.5,1,2,4,8），不可以和 Pos 参数同时出现）
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
        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("Session",$param) and $param["Session"] !== null) {
            $this->Session = $param["Session"];
        }

        if (array_key_exists("ControlAction",$param) and $param["ControlAction"] !== null) {
            $this->ControlAction = $param["ControlAction"];
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }

        if (array_key_exists("Scale",$param) and $param["Scale"] !== null) {
            $this->Scale = $param["Scale"];
        }
    }
}
