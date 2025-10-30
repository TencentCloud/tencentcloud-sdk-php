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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 仪表盘订阅通知方式
 *
 * @method string getReceiverType() 获取仪表盘通知方式。

- Uin：腾讯云用户
- Group：腾讯云用户组
- WeCom：企业微信回调
- Email：自定义邮件
- DingTalk：钉钉
- Lark：飞书
 * @method void setReceiverType(string $ReceiverType) 设置仪表盘通知方式。

- Uin：腾讯云用户
- Group：腾讯云用户组
- WeCom：企业微信回调
- Email：自定义邮件
- DingTalk：钉钉
- Lark：飞书
 * @method array getValues() 获取知方式对应的值。
- 当ReceiverType为：`WeCom`、`DingTalk`、`Lark` 时，Values必须为空，且Url字段必填。
- 当ReceiverType为：`Uin`、`Group`、`Email` 时，Values必填，且Url字段必须为空。
- 当ReceiverType为：`Uin ` 时，Values为用户id，通过 [拉取子用户](https://cloud.tencent.com/document/product/598/34587) 获取子用户 UID 。
- 当ReceiverType为：`Group` 时，Values为用户组id，通过 [查询用户组列表](https://cloud.tencent.com/document/product/598/34589) 获取用户组 ID 。
- 当ReceiverType为：`Email` 时，Values为用户邮箱信息。
 * @method void setValues(array $Values) 设置知方式对应的值。
- 当ReceiverType为：`WeCom`、`DingTalk`、`Lark` 时，Values必须为空，且Url字段必填。
- 当ReceiverType为：`Uin`、`Group`、`Email` 时，Values必填，且Url字段必须为空。
- 当ReceiverType为：`Uin ` 时，Values为用户id，通过 [拉取子用户](https://cloud.tencent.com/document/product/598/34587) 获取子用户 UID 。
- 当ReceiverType为：`Group` 时，Values为用户组id，通过 [查询用户组列表](https://cloud.tencent.com/document/product/598/34589) 获取用户组 ID 。
- 当ReceiverType为：`Email` 时，Values为用户邮箱信息。
 * @method array getReceiverChannels() 获取仪表盘通知渠道。

-  支持：["Email","Sms","WeChat","Phone"]。
-  当ReceiverType为 `Email` 或 `WeCom` 时，ReceiverChannels无效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReceiverChannels(array $ReceiverChannels) 设置仪表盘通知渠道。

-  支持：["Email","Sms","WeChat","Phone"]。
-  当ReceiverType为 `Email` 或 `WeCom` 时，ReceiverChannels无效。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUrl() 获取订阅方式	- 回调地址。
- 当ReceiverType为：`WeCom`、`DingTalk`、`Lark` 时，Url字段必填为各渠道的回调地址。
    - 为：`WeCom` 时，Url为 企业微信回调地址。
    - 为：`DingTalk` 时，Url为 钉钉机器人Webhook地址。
    - 为：`Lark` 时，Url为 飞书机器人Webhook地址。
- 当ReceiverType为：`Uin`、`Group`、`Email` 时，Url字段必须为空。
 * @method void setUrl(string $Url) 设置订阅方式	- 回调地址。
- 当ReceiverType为：`WeCom`、`DingTalk`、`Lark` 时，Url字段必填为各渠道的回调地址。
    - 为：`WeCom` 时，Url为 企业微信回调地址。
    - 为：`DingTalk` 时，Url为 钉钉机器人Webhook地址。
    - 为：`Lark` 时，Url为 飞书机器人Webhook地址。
- 当ReceiverType为：`Uin`、`Group`、`Email` 时，Url字段必须为空。
 */
class DashboardNoticeMode extends AbstractModel
{
    /**
     * @var string 仪表盘通知方式。

- Uin：腾讯云用户
- Group：腾讯云用户组
- WeCom：企业微信回调
- Email：自定义邮件
- DingTalk：钉钉
- Lark：飞书
     */
    public $ReceiverType;

    /**
     * @var array 知方式对应的值。
- 当ReceiverType为：`WeCom`、`DingTalk`、`Lark` 时，Values必须为空，且Url字段必填。
- 当ReceiverType为：`Uin`、`Group`、`Email` 时，Values必填，且Url字段必须为空。
- 当ReceiverType为：`Uin ` 时，Values为用户id，通过 [拉取子用户](https://cloud.tencent.com/document/product/598/34587) 获取子用户 UID 。
- 当ReceiverType为：`Group` 时，Values为用户组id，通过 [查询用户组列表](https://cloud.tencent.com/document/product/598/34589) 获取用户组 ID 。
- 当ReceiverType为：`Email` 时，Values为用户邮箱信息。
     */
    public $Values;

    /**
     * @var array 仪表盘通知渠道。

-  支持：["Email","Sms","WeChat","Phone"]。
-  当ReceiverType为 `Email` 或 `WeCom` 时，ReceiverChannels无效。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReceiverChannels;

    /**
     * @var string 订阅方式	- 回调地址。
- 当ReceiverType为：`WeCom`、`DingTalk`、`Lark` 时，Url字段必填为各渠道的回调地址。
    - 为：`WeCom` 时，Url为 企业微信回调地址。
    - 为：`DingTalk` 时，Url为 钉钉机器人Webhook地址。
    - 为：`Lark` 时，Url为 飞书机器人Webhook地址。
- 当ReceiverType为：`Uin`、`Group`、`Email` 时，Url字段必须为空。
     */
    public $Url;

    /**
     * @param string $ReceiverType 仪表盘通知方式。

- Uin：腾讯云用户
- Group：腾讯云用户组
- WeCom：企业微信回调
- Email：自定义邮件
- DingTalk：钉钉
- Lark：飞书
     * @param array $Values 知方式对应的值。
- 当ReceiverType为：`WeCom`、`DingTalk`、`Lark` 时，Values必须为空，且Url字段必填。
- 当ReceiverType为：`Uin`、`Group`、`Email` 时，Values必填，且Url字段必须为空。
- 当ReceiverType为：`Uin ` 时，Values为用户id，通过 [拉取子用户](https://cloud.tencent.com/document/product/598/34587) 获取子用户 UID 。
- 当ReceiverType为：`Group` 时，Values为用户组id，通过 [查询用户组列表](https://cloud.tencent.com/document/product/598/34589) 获取用户组 ID 。
- 当ReceiverType为：`Email` 时，Values为用户邮箱信息。
     * @param array $ReceiverChannels 仪表盘通知渠道。

-  支持：["Email","Sms","WeChat","Phone"]。
-  当ReceiverType为 `Email` 或 `WeCom` 时，ReceiverChannels无效。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Url 订阅方式	- 回调地址。
- 当ReceiverType为：`WeCom`、`DingTalk`、`Lark` 时，Url字段必填为各渠道的回调地址。
    - 为：`WeCom` 时，Url为 企业微信回调地址。
    - 为：`DingTalk` 时，Url为 钉钉机器人Webhook地址。
    - 为：`Lark` 时，Url为 飞书机器人Webhook地址。
- 当ReceiverType为：`Uin`、`Group`、`Email` 时，Url字段必须为空。
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
        if (array_key_exists("ReceiverType",$param) and $param["ReceiverType"] !== null) {
            $this->ReceiverType = $param["ReceiverType"];
        }

        if (array_key_exists("Values",$param) and $param["Values"] !== null) {
            $this->Values = $param["Values"];
        }

        if (array_key_exists("ReceiverChannels",$param) and $param["ReceiverChannels"] !== null) {
            $this->ReceiverChannels = $param["ReceiverChannels"];
        }

        if (array_key_exists("Url",$param) and $param["Url"] !== null) {
            $this->Url = $param["Url"];
        }
    }
}
