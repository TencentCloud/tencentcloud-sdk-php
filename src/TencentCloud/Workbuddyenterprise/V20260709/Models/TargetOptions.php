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
namespace TencentCloud\Workbuddyenterprise\V20260709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 投递目标配置，按 Type 选用不同字段组
 *
 * @method string getChannelType() 获取<p>渠道类型（BOT_CHANNEL 必填）：FEISHU / DINGTALK / QQ / WECOM_NEW / WECOM_AIBOT / WECHAT_KF</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelType(string $ChannelType) 设置<p>渠道类型（BOT_CHANNEL 必填）：FEISHU / DINGTALK / QQ / WECOM_NEW / WECOM_AIBOT / WECHAT_KF</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getChannelId() 获取<p>渠道标识（BOT_CHANNEL 必填）：飞书 appId / 钉钉 appKey / QQ appId / 企微 corpId:agentId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelId(string $ChannelId) 设置<p>渠道标识（BOT_CHANNEL 必填）：飞书 appId / 钉钉 appKey / QQ appId / 企微 corpId:agentId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUrl() 获取<p>回调 URL（WEBHOOK 必填）：仅允许 http/https，禁止内网地址（SSRF 防护）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置<p>回调 URL（WEBHOOK 必填）：仅允许 http/https，禁止内网地址（SSRF 防护）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getHeaders() 获取<p>自定义请求头列表，与默认 Content-Type: application/json 合并</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHeaders(array $Headers) 设置<p>自定义请求头列表，与默认 Content-Type: application/json 合并</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSecret() 获取<p>HMAC-SHA256 签名密钥（WEBHOOK 可选）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecret(string $Secret) 设置<p>HMAC-SHA256 签名密钥（WEBHOOK 可选）</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRecipientIdSet() 获取<p>接收目标 ID 集合（群 ID / 用户 ID / 频道 ID），BOT_CHANNEL 模式必填，至少一个</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRecipientIdSet(array $RecipientIdSet) 设置<p>接收目标 ID 集合（群 ID / 用户 ID / 频道 ID），BOT_CHANNEL 模式必填，至少一个</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class TargetOptions extends AbstractModel
{
    /**
     * @var string <p>渠道类型（BOT_CHANNEL 必填）：FEISHU / DINGTALK / QQ / WECOM_NEW / WECOM_AIBOT / WECHAT_KF</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelType;

    /**
     * @var string <p>渠道标识（BOT_CHANNEL 必填）：飞书 appId / 钉钉 appKey / QQ appId / 企微 corpId:agentId</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelId;

    /**
     * @var string <p>回调 URL（WEBHOOK 必填）：仅允许 http/https，禁止内网地址（SSRF 防护）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @var array <p>自定义请求头列表，与默认 Content-Type: application/json 合并</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Headers;

    /**
     * @var string <p>HMAC-SHA256 签名密钥（WEBHOOK 可选）</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Secret;

    /**
     * @var array <p>接收目标 ID 集合（群 ID / 用户 ID / 频道 ID），BOT_CHANNEL 模式必填，至少一个</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RecipientIdSet;

    /**
     * @param string $ChannelType <p>渠道类型（BOT_CHANNEL 必填）：FEISHU / DINGTALK / QQ / WECOM_NEW / WECOM_AIBOT / WECHAT_KF</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ChannelId <p>渠道标识（BOT_CHANNEL 必填）：飞书 appId / 钉钉 appKey / QQ appId / 企微 corpId:agentId</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Url <p>回调 URL（WEBHOOK 必填）：仅允许 http/https，禁止内网地址（SSRF 防护）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Headers <p>自定义请求头列表，与默认 Content-Type: application/json 合并</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Secret <p>HMAC-SHA256 签名密钥（WEBHOOK 可选）</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RecipientIdSet <p>接收目标 ID 集合（群 ID / 用户 ID / 频道 ID），BOT_CHANNEL 模式必填，至少一个</p>
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
        if (array_key_exists("ChannelType",$param) and $param["ChannelType"] !== null) {
            $this->ChannelType = $param["ChannelType"];
        }

        if (array_key_exists("ChannelId",$param) and $param["ChannelId"] !== null) {
            $this->ChannelId = $param["ChannelId"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }

        if (array_key_exists("Headers",$param) and $param["Headers"] !== null) {
            $this->Headers = [];
            foreach ($param["Headers"] as $key => $value){
                $obj = new Header();
                $obj->deserialize($value);
                array_push($this->Headers, $obj);
            }
        }

        if (array_key_exists("Secret",$param) and $param["Secret"] !== null) {
            $this->Secret = $param["Secret"];
        }

        if (array_key_exists("RecipientIdSet",$param) and $param["RecipientIdSet"] !== null) {
            $this->RecipientIdSet = $param["RecipientIdSet"];
        }
    }
}
