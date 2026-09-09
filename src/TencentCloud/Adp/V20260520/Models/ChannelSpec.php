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
 * 渠道规格（聚合场景/类型/名称/备注/配置）
 *
 * @method string getChannelName() 获取<p>渠道名称</p>
 * @method void setChannelName(string $ChannelName) 设置<p>渠道名称</p>
 * @method integer getChannelType() 获取<p>渠道类型，详见ChannelType枚举</p><p>枚举值：</p><ul><li>10000： 微信服务号(Wechat)</li><li>10002： 企微应用(WeComApp)</li><li>10004： 微信客服(WechatCustomerService)</li><li>10009： 企微智能机器人(WeComRobot)</li><li>10013： 钉钉机器人(DingTalk)</li><li>10014： 企微智能机器人WebSocket(WeComRobot)</li><li>10015： 微信ClawBot(WechatClawBot)</li><li>10011： LINE(Line)</li><li>10012： Telegram(Telegram)</li><li>10016： 飞书机器人(Lark) </li></ul><p>C端场景（Scene=1时）只支持10014和10015</p>
 * @method void setChannelType(integer $ChannelType) 设置<p>渠道类型，详见ChannelType枚举</p><p>枚举值：</p><ul><li>10000： 微信服务号(Wechat)</li><li>10002： 企微应用(WeComApp)</li><li>10004： 微信客服(WechatCustomerService)</li><li>10009： 企微智能机器人(WeComRobot)</li><li>10013： 钉钉机器人(DingTalk)</li><li>10014： 企微智能机器人WebSocket(WeComRobot)</li><li>10015： 微信ClawBot(WechatClawBot)</li><li>10011： LINE(Line)</li><li>10012： Telegram(Telegram)</li><li>10016： 飞书机器人(Lark) </li></ul><p>C端场景（Scene=1时）只支持10014和10015</p>
 * @method string getDescription() 获取<p>备注</p>
 * @method void setDescription(string $Description) 设置<p>备注</p>
 * @method DingTalkChannelConfig getDingTalk() 获取<p>钉钉机器人配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDingTalk(DingTalkChannelConfig $DingTalk) 设置<p>钉钉机器人配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method LarkChannelConfig getLark() 获取<p>飞书机器人配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLark(LarkChannelConfig $Lark) 设置<p>飞书机器人配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method LineChannelConfig getLine() 获取<p>LINE配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLine(LineChannelConfig $Line) 设置<p>LINE配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getScene() 获取<p>渠道场景：0-B端场景，1-C端场景</p>
 * @method void setScene(integer $Scene) 设置<p>渠道场景：0-B端场景，1-C端场景</p>
 * @method TelegramChannelConfig getTelegram() 获取<p>Telegram配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTelegram(TelegramChannelConfig $Telegram) 设置<p>Telegram配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method UserAgentReference getUserAgent() 获取<p>归属用户+Agent运行态标识（C端）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUserAgent(UserAgentReference $UserAgent) 设置<p>归属用户+Agent运行态标识（C端）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method WechatChannelConfig getWechat() 获取<p>微信公众号/小程序配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWechat(WechatChannelConfig $Wechat) 设置<p>微信公众号/小程序配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method WechatClawBotChannelConfig getWechatClawBot() 获取<p>微信ClawBot配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWechatClawBot(WechatClawBotChannelConfig $WechatClawBot) 设置<p>微信ClawBot配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method WechatCustomerServiceChannelConfig getWechatCustomerService() 获取<p>微信客服配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWechatCustomerService(WechatCustomerServiceChannelConfig $WechatCustomerService) 设置<p>微信客服配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method WecomAppChannelConfig getWecomApp() 获取<p>企微应用配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWecomApp(WecomAppChannelConfig $WecomApp) 设置<p>企微应用配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method WecomRobotChannelConfig getWecomRobot() 获取<p>企微机器人配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWecomRobot(WecomRobotChannelConfig $WecomRobot) 设置<p>企微机器人配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ChannelSpec extends AbstractModel
{
    /**
     * @var string <p>渠道名称</p>
     */
    public $ChannelName;

    /**
     * @var integer <p>渠道类型，详见ChannelType枚举</p><p>枚举值：</p><ul><li>10000： 微信服务号(Wechat)</li><li>10002： 企微应用(WeComApp)</li><li>10004： 微信客服(WechatCustomerService)</li><li>10009： 企微智能机器人(WeComRobot)</li><li>10013： 钉钉机器人(DingTalk)</li><li>10014： 企微智能机器人WebSocket(WeComRobot)</li><li>10015： 微信ClawBot(WechatClawBot)</li><li>10011： LINE(Line)</li><li>10012： Telegram(Telegram)</li><li>10016： 飞书机器人(Lark) </li></ul><p>C端场景（Scene=1时）只支持10014和10015</p>
     */
    public $ChannelType;

    /**
     * @var string <p>备注</p>
     */
    public $Description;

    /**
     * @var DingTalkChannelConfig <p>钉钉机器人配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DingTalk;

    /**
     * @var LarkChannelConfig <p>飞书机器人配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Lark;

    /**
     * @var LineChannelConfig <p>LINE配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Line;

    /**
     * @var integer <p>渠道场景：0-B端场景，1-C端场景</p>
     */
    public $Scene;

    /**
     * @var TelegramChannelConfig <p>Telegram配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Telegram;

    /**
     * @var UserAgentReference <p>归属用户+Agent运行态标识（C端）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UserAgent;

    /**
     * @var WechatChannelConfig <p>微信公众号/小程序配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Wechat;

    /**
     * @var WechatClawBotChannelConfig <p>微信ClawBot配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WechatClawBot;

    /**
     * @var WechatCustomerServiceChannelConfig <p>微信客服配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WechatCustomerService;

    /**
     * @var WecomAppChannelConfig <p>企微应用配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WecomApp;

    /**
     * @var WecomRobotChannelConfig <p>企微机器人配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WecomRobot;

    /**
     * @param string $ChannelName <p>渠道名称</p>
     * @param integer $ChannelType <p>渠道类型，详见ChannelType枚举</p><p>枚举值：</p><ul><li>10000： 微信服务号(Wechat)</li><li>10002： 企微应用(WeComApp)</li><li>10004： 微信客服(WechatCustomerService)</li><li>10009： 企微智能机器人(WeComRobot)</li><li>10013： 钉钉机器人(DingTalk)</li><li>10014： 企微智能机器人WebSocket(WeComRobot)</li><li>10015： 微信ClawBot(WechatClawBot)</li><li>10011： LINE(Line)</li><li>10012： Telegram(Telegram)</li><li>10016： 飞书机器人(Lark) </li></ul><p>C端场景（Scene=1时）只支持10014和10015</p>
     * @param string $Description <p>备注</p>
     * @param DingTalkChannelConfig $DingTalk <p>钉钉机器人配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param LarkChannelConfig $Lark <p>飞书机器人配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param LineChannelConfig $Line <p>LINE配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Scene <p>渠道场景：0-B端场景，1-C端场景</p>
     * @param TelegramChannelConfig $Telegram <p>Telegram配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param UserAgentReference $UserAgent <p>归属用户+Agent运行态标识（C端）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param WechatChannelConfig $Wechat <p>微信公众号/小程序配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param WechatClawBotChannelConfig $WechatClawBot <p>微信ClawBot配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param WechatCustomerServiceChannelConfig $WechatCustomerService <p>微信客服配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param WecomAppChannelConfig $WecomApp <p>企微应用配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param WecomRobotChannelConfig $WecomRobot <p>企微机器人配置</p>
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
        if (array_key_exists("ChannelName",$param) and $param["ChannelName"] !== null) {
            $this->ChannelName = $param["ChannelName"];
        }

        if (array_key_exists("ChannelType",$param) and $param["ChannelType"] !== null) {
            $this->ChannelType = $param["ChannelType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DingTalk",$param) and $param["DingTalk"] !== null) {
            $this->DingTalk = new DingTalkChannelConfig();
            $this->DingTalk->deserialize($param["DingTalk"]);
        }

        if (array_key_exists("Lark",$param) and $param["Lark"] !== null) {
            $this->Lark = new LarkChannelConfig();
            $this->Lark->deserialize($param["Lark"]);
        }

        if (array_key_exists("Line",$param) and $param["Line"] !== null) {
            $this->Line = new LineChannelConfig();
            $this->Line->deserialize($param["Line"]);
        }

        if (array_key_exists("Scene",$param) and $param["Scene"] !== null) {
            $this->Scene = $param["Scene"];
        }

        if (array_key_exists("Telegram",$param) and $param["Telegram"] !== null) {
            $this->Telegram = new TelegramChannelConfig();
            $this->Telegram->deserialize($param["Telegram"]);
        }

        if (array_key_exists("UserAgent",$param) and $param["UserAgent"] !== null) {
            $this->UserAgent = new UserAgentReference();
            $this->UserAgent->deserialize($param["UserAgent"]);
        }

        if (array_key_exists("Wechat",$param) and $param["Wechat"] !== null) {
            $this->Wechat = new WechatChannelConfig();
            $this->Wechat->deserialize($param["Wechat"]);
        }

        if (array_key_exists("WechatClawBot",$param) and $param["WechatClawBot"] !== null) {
            $this->WechatClawBot = new WechatClawBotChannelConfig();
            $this->WechatClawBot->deserialize($param["WechatClawBot"]);
        }

        if (array_key_exists("WechatCustomerService",$param) and $param["WechatCustomerService"] !== null) {
            $this->WechatCustomerService = new WechatCustomerServiceChannelConfig();
            $this->WechatCustomerService->deserialize($param["WechatCustomerService"]);
        }

        if (array_key_exists("WecomApp",$param) and $param["WecomApp"] !== null) {
            $this->WecomApp = new WecomAppChannelConfig();
            $this->WecomApp->deserialize($param["WecomApp"]);
        }

        if (array_key_exists("WecomRobot",$param) and $param["WecomRobot"] !== null) {
            $this->WecomRobot = new WecomRobotChannelConfig();
            $this->WecomRobot->deserialize($param["WecomRobot"]);
        }
    }
}
