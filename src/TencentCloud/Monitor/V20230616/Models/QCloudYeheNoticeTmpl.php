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
 * 官网通知内容模板
 *
 * @method QCloudYeheNoticeTmplItem getEmail() 获取邮件通知渠道
 * @method void setEmail(QCloudYeheNoticeTmplItem $Email) 设置邮件通知渠道
 * @method QCloudYeheNoticeTmplItem getQYWX() 获取企业微信通知渠道
 * @method void setQYWX(QCloudYeheNoticeTmplItem $QYWX) 设置企业微信通知渠道
 * @method QCloudYeheNoticeTmplItem getSMS() 获取短信通知渠道
 * @method void setSMS(QCloudYeheNoticeTmplItem $SMS) 设置短信通知渠道
 * @method QCloudYeheNoticeTmplItem getVoice() 获取语音通知渠道
 * @method void setVoice(QCloudYeheNoticeTmplItem $Voice) 设置语音通知渠道
 * @method QCloudYeheWeChatNoticeTmplItem getWeChat() 获取微信通知渠道
 * @method void setWeChat(QCloudYeheWeChatNoticeTmplItem $WeChat) 设置微信通知渠道
 * @method QCloudYeheNoticeTmplItem getSite() 获取站内信通知渠道
 * @method void setSite(QCloudYeheNoticeTmplItem $Site) 设置站内信通知渠道
 * @method QCloudYeheNoticeTmplItem getAndon() 获取安灯通知渠道
 * @method void setAndon(QCloudYeheNoticeTmplItem $Andon) 设置安灯通知渠道
 */
class QCloudYeheNoticeTmpl extends AbstractModel
{
    /**
     * @var QCloudYeheNoticeTmplItem 邮件通知渠道
     */
    public $Email;

    /**
     * @var QCloudYeheNoticeTmplItem 企业微信通知渠道
     */
    public $QYWX;

    /**
     * @var QCloudYeheNoticeTmplItem 短信通知渠道
     */
    public $SMS;

    /**
     * @var QCloudYeheNoticeTmplItem 语音通知渠道
     */
    public $Voice;

    /**
     * @var QCloudYeheWeChatNoticeTmplItem 微信通知渠道
     */
    public $WeChat;

    /**
     * @var QCloudYeheNoticeTmplItem 站内信通知渠道
     */
    public $Site;

    /**
     * @var QCloudYeheNoticeTmplItem 安灯通知渠道
     */
    public $Andon;

    /**
     * @param QCloudYeheNoticeTmplItem $Email 邮件通知渠道
     * @param QCloudYeheNoticeTmplItem $QYWX 企业微信通知渠道
     * @param QCloudYeheNoticeTmplItem $SMS 短信通知渠道
     * @param QCloudYeheNoticeTmplItem $Voice 语音通知渠道
     * @param QCloudYeheWeChatNoticeTmplItem $WeChat 微信通知渠道
     * @param QCloudYeheNoticeTmplItem $Site 站内信通知渠道
     * @param QCloudYeheNoticeTmplItem $Andon 安灯通知渠道
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
        if (array_key_exists("Email",$param) and $param["Email"] !== null) {
            $this->Email = new QCloudYeheNoticeTmplItem();
            $this->Email->deserialize($param["Email"]);
        }

        if (array_key_exists("QYWX",$param) and $param["QYWX"] !== null) {
            $this->QYWX = new QCloudYeheNoticeTmplItem();
            $this->QYWX->deserialize($param["QYWX"]);
        }

        if (array_key_exists("SMS",$param) and $param["SMS"] !== null) {
            $this->SMS = new QCloudYeheNoticeTmplItem();
            $this->SMS->deserialize($param["SMS"]);
        }

        if (array_key_exists("Voice",$param) and $param["Voice"] !== null) {
            $this->Voice = new QCloudYeheNoticeTmplItem();
            $this->Voice->deserialize($param["Voice"]);
        }

        if (array_key_exists("WeChat",$param) and $param["WeChat"] !== null) {
            $this->WeChat = new QCloudYeheWeChatNoticeTmplItem();
            $this->WeChat->deserialize($param["WeChat"]);
        }

        if (array_key_exists("Site",$param) and $param["Site"] !== null) {
            $this->Site = new QCloudYeheNoticeTmplItem();
            $this->Site->deserialize($param["Site"]);
        }

        if (array_key_exists("Andon",$param) and $param["Andon"] !== null) {
            $this->Andon = new QCloudYeheNoticeTmplItem();
            $this->Andon->deserialize($param["Andon"]);
        }
    }
}
