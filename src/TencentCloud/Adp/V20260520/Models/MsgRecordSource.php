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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MsgRecordSource
 *
 * @method integer getChannelType() 获取对话消息的接入渠道类型：0=未指定, 1=坐席, 2=体验页面(腾讯云), 3=评测端对话, 4=体验页面(手机号), 5=对话端API接入, 6=评测任务对话, 10=工作流调试, 10000=微信公众号, 10001=微信服务号, 10002=企微应用, 10003=网页组件, 10004=微信客服, 10005=微信小程序, 10006=元器, 10007=应用宝, 10008=元宝, 10009=企微智能机器人, 10010=元器API, 10011=LINE, 10012=Telegram, 10100=电脑管家, 20001=荣耀智能体平台, 20002=小米应用商店；user_id（string）为该渠道下的访客唯一标识。
 * @method void setChannelType(integer $ChannelType) 设置对话消息的接入渠道类型：0=未指定, 1=坐席, 2=体验页面(腾讯云), 3=评测端对话, 4=体验页面(手机号), 5=对话端API接入, 6=评测任务对话, 10=工作流调试, 10000=微信公众号, 10001=微信服务号, 10002=企微应用, 10003=网页组件, 10004=微信客服, 10005=微信小程序, 10006=元器, 10007=应用宝, 10008=元宝, 10009=企微智能机器人, 10010=元器API, 10011=LINE, 10012=Telegram, 10100=电脑管家, 20001=荣耀智能体平台, 20002=小米应用商店；user_id（string）为该渠道下的访客唯一标识。
 * @method string getFromId() 获取用户ID
 * @method void setFromId(string $FromId) 设置用户ID
 * @method integer getFromType() 获取消息发送者的用户来源类型：1=用户（访客/C端用户）, 2=机器人（AI回复）, 3=坐席（人工客服）；from_id（string）为该来源类型下的用户唯一标识 ID。
 * @method void setFromType(integer $FromType) 设置消息发送者的用户来源类型：1=用户（访客/C端用户）, 2=机器人（AI回复）, 3=坐席（人工客服）；from_id（string）为该来源类型下的用户唯一标识 ID。
 * @method string getUserAvatar() 获取用户头像
 * @method void setUserAvatar(string $UserAvatar) 设置用户头像
 * @method string getUserId() 获取访客ID
 * @method void setUserId(string $UserId) 设置访客ID
 * @method string getUserNickname() 获取访客名称
 * @method void setUserNickname(string $UserNickname) 设置访客名称
 */
class MsgRecordSource extends AbstractModel
{
    /**
     * @var integer 对话消息的接入渠道类型：0=未指定, 1=坐席, 2=体验页面(腾讯云), 3=评测端对话, 4=体验页面(手机号), 5=对话端API接入, 6=评测任务对话, 10=工作流调试, 10000=微信公众号, 10001=微信服务号, 10002=企微应用, 10003=网页组件, 10004=微信客服, 10005=微信小程序, 10006=元器, 10007=应用宝, 10008=元宝, 10009=企微智能机器人, 10010=元器API, 10011=LINE, 10012=Telegram, 10100=电脑管家, 20001=荣耀智能体平台, 20002=小米应用商店；user_id（string）为该渠道下的访客唯一标识。
     */
    public $ChannelType;

    /**
     * @var string 用户ID
     */
    public $FromId;

    /**
     * @var integer 消息发送者的用户来源类型：1=用户（访客/C端用户）, 2=机器人（AI回复）, 3=坐席（人工客服）；from_id（string）为该来源类型下的用户唯一标识 ID。
     */
    public $FromType;

    /**
     * @var string 用户头像
     */
    public $UserAvatar;

    /**
     * @var string 访客ID
     */
    public $UserId;

    /**
     * @var string 访客名称
     */
    public $UserNickname;

    /**
     * @param integer $ChannelType 对话消息的接入渠道类型：0=未指定, 1=坐席, 2=体验页面(腾讯云), 3=评测端对话, 4=体验页面(手机号), 5=对话端API接入, 6=评测任务对话, 10=工作流调试, 10000=微信公众号, 10001=微信服务号, 10002=企微应用, 10003=网页组件, 10004=微信客服, 10005=微信小程序, 10006=元器, 10007=应用宝, 10008=元宝, 10009=企微智能机器人, 10010=元器API, 10011=LINE, 10012=Telegram, 10100=电脑管家, 20001=荣耀智能体平台, 20002=小米应用商店；user_id（string）为该渠道下的访客唯一标识。
     * @param string $FromId 用户ID
     * @param integer $FromType 消息发送者的用户来源类型：1=用户（访客/C端用户）, 2=机器人（AI回复）, 3=坐席（人工客服）；from_id（string）为该来源类型下的用户唯一标识 ID。
     * @param string $UserAvatar 用户头像
     * @param string $UserId 访客ID
     * @param string $UserNickname 访客名称
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
        if (array_key_exists("ChannelType",$param) and $param["ChannelType"] !== null) {
            $this->ChannelType = $param["ChannelType"];
        }

        if (array_key_exists("FromId",$param) and $param["FromId"] !== null) {
            $this->FromId = $param["FromId"];
        }

        if (array_key_exists("FromType",$param) and $param["FromType"] !== null) {
            $this->FromType = $param["FromType"];
        }

        if (array_key_exists("UserAvatar",$param) and $param["UserAvatar"] !== null) {
            $this->UserAvatar = $param["UserAvatar"];
        }

        if (array_key_exists("UserId",$param) and $param["UserId"] !== null) {
            $this->UserId = $param["UserId"];
        }

        if (array_key_exists("UserNickname",$param) and $param["UserNickname"] !== null) {
            $this->UserNickname = $param["UserNickname"];
        }
    }
}
