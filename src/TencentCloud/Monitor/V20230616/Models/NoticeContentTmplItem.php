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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 内容通知模板元素
 *
 * @method array getQCloudYehe() 获取<p>官网通知渠道配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQCloudYehe(array $QCloudYehe) 设置<p>官网通知渠道配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getWeWorkRobot() 获取<p>企业微信机器人通知渠道配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeWorkRobot(array $WeWorkRobot) 设置<p>企业微信机器人通知渠道配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDingDingRobot() 获取<p>钉钉机器人通知渠道配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDingDingRobot(array $DingDingRobot) 设置<p>钉钉机器人通知渠道配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getFeiShuRobot() 获取<p>飞书机器人通知渠道配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFeiShuRobot(array $FeiShuRobot) 设置<p>飞书机器人通知渠道配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getWebhook() 获取<p>自定义Webhook通知渠道配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWebhook(array $Webhook) 设置<p>自定义Webhook通知渠道配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTeamsRobot() 获取<p>Teams机器人通知渠道配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTeamsRobot(array $TeamsRobot) 设置<p>Teams机器人通知渠道配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPagerDutyRobot() 获取<p>PagerDutyRobot机器人通知渠道配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPagerDutyRobot(array $PagerDutyRobot) 设置<p>PagerDutyRobot机器人通知渠道配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getGoogleChatRobot() 获取<p>GoogleChat</p>
 * @method void setGoogleChatRobot(array $GoogleChatRobot) 设置<p>GoogleChat</p>
 * @method array getSlackRobot() 获取<p>Slack</p>
 * @method void setSlackRobot(array $SlackRobot) 设置<p>Slack</p>
 */
class NoticeContentTmplItem extends AbstractModel
{
    /**
     * @var array <p>官网通知渠道配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QCloudYehe;

    /**
     * @var array <p>企业微信机器人通知渠道配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WeWorkRobot;

    /**
     * @var array <p>钉钉机器人通知渠道配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DingDingRobot;

    /**
     * @var array <p>飞书机器人通知渠道配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FeiShuRobot;

    /**
     * @var array <p>自定义Webhook通知渠道配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Webhook;

    /**
     * @var array <p>Teams机器人通知渠道配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TeamsRobot;

    /**
     * @var array <p>PagerDutyRobot机器人通知渠道配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PagerDutyRobot;

    /**
     * @var array <p>GoogleChat</p>
     */
    public $GoogleChatRobot;

    /**
     * @var array <p>Slack</p>
     */
    public $SlackRobot;

    /**
     * @param array $QCloudYehe <p>官网通知渠道配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $WeWorkRobot <p>企业微信机器人通知渠道配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DingDingRobot <p>钉钉机器人通知渠道配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $FeiShuRobot <p>飞书机器人通知渠道配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Webhook <p>自定义Webhook通知渠道配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TeamsRobot <p>Teams机器人通知渠道配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PagerDutyRobot <p>PagerDutyRobot机器人通知渠道配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $GoogleChatRobot <p>GoogleChat</p>
     * @param array $SlackRobot <p>Slack</p>
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
        if (array_key_exists("QCloudYehe",$param) and $param["QCloudYehe"] !== null) {
            $this->QCloudYehe = [];
            foreach ($param["QCloudYehe"] as $key => $value){
                $obj = new QCloudYeheNoticeTmplMatcher();
                $obj->deserialize($value);
                array_push($this->QCloudYehe, $obj);
            }
        }

        if (array_key_exists("WeWorkRobot",$param) and $param["WeWorkRobot"] !== null) {
            $this->WeWorkRobot = [];
            foreach ($param["WeWorkRobot"] as $key => $value){
                $obj = new WeWorkRobotNoticeTmplMatcher();
                $obj->deserialize($value);
                array_push($this->WeWorkRobot, $obj);
            }
        }

        if (array_key_exists("DingDingRobot",$param) and $param["DingDingRobot"] !== null) {
            $this->DingDingRobot = [];
            foreach ($param["DingDingRobot"] as $key => $value){
                $obj = new DingDingRobotNoticeTmplMatcher();
                $obj->deserialize($value);
                array_push($this->DingDingRobot, $obj);
            }
        }

        if (array_key_exists("FeiShuRobot",$param) and $param["FeiShuRobot"] !== null) {
            $this->FeiShuRobot = [];
            foreach ($param["FeiShuRobot"] as $key => $value){
                $obj = new FeiShuRobotNoticeTmplMatcher();
                $obj->deserialize($value);
                array_push($this->FeiShuRobot, $obj);
            }
        }

        if (array_key_exists("Webhook",$param) and $param["Webhook"] !== null) {
            $this->Webhook = [];
            foreach ($param["Webhook"] as $key => $value){
                $obj = new WebhookNoticeTmplMatcher();
                $obj->deserialize($value);
                array_push($this->Webhook, $obj);
            }
        }

        if (array_key_exists("TeamsRobot",$param) and $param["TeamsRobot"] !== null) {
            $this->TeamsRobot = [];
            foreach ($param["TeamsRobot"] as $key => $value){
                $obj = new TeamsRobotNoticeTmplMatcher();
                $obj->deserialize($value);
                array_push($this->TeamsRobot, $obj);
            }
        }

        if (array_key_exists("PagerDutyRobot",$param) and $param["PagerDutyRobot"] !== null) {
            $this->PagerDutyRobot = [];
            foreach ($param["PagerDutyRobot"] as $key => $value){
                $obj = new PagerDutyRobotNoticeTmplMatcher();
                $obj->deserialize($value);
                array_push($this->PagerDutyRobot, $obj);
            }
        }

        if (array_key_exists("GoogleChatRobot",$param) and $param["GoogleChatRobot"] !== null) {
            $this->GoogleChatRobot = [];
            foreach ($param["GoogleChatRobot"] as $key => $value){
                $obj = new GoogleChatRobotNoticeTmplMatcher();
                $obj->deserialize($value);
                array_push($this->GoogleChatRobot, $obj);
            }
        }

        if (array_key_exists("SlackRobot",$param) and $param["SlackRobot"] !== null) {
            $this->SlackRobot = [];
            foreach ($param["SlackRobot"] as $key => $value){
                $obj = new SlackRobotNoticeTmplMatcher();
                $obj->deserialize($value);
                array_push($this->SlackRobot, $obj);
            }
        }
    }
}
