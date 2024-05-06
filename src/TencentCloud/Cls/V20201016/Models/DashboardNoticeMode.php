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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 仪表盘订阅通知方式
 *
 * @method string getReceiverType() 获取仪表盘通知方式。<br>
<li/>Uin：腾讯云用户<br>
<li/>Group：腾讯云用户组<br>
<li/>Email：自定义Email<br>
<li/>WeCom: 企业微信回调
 * @method void setReceiverType(string $ReceiverType) 设置仪表盘通知方式。<br>
<li/>Uin：腾讯云用户<br>
<li/>Group：腾讯云用户组<br>
<li/>Email：自定义Email<br>
<li/>WeCom: 企业微信回调
 * @method array getValues() 获取知方式对应的值。
<br> <li/> 当ReceiverType不是 Wecom 时，Values必填。
 * @method void setValues(array $Values) 设置知方式对应的值。
<br> <li/> 当ReceiverType不是 Wecom 时，Values必填。
 * @method array getReceiverChannels() 获取仪表盘通知渠道。
<br><li/> 支持：["Email","Sms","WeChat","Phone"]。
<br><li/> 当ReceiverType是 Email 或 Wecom 时，ReceiverChannels不能赋值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReceiverChannels(array $ReceiverChannels) 设置仪表盘通知渠道。
<br><li/> 支持：["Email","Sms","WeChat","Phone"]。
<br><li/> 当ReceiverType是 Email 或 Wecom 时，ReceiverChannels不能赋值。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUrl() 获取回调Url。
<br><li/> 当ReceiverType是 Wecom 时，Url必填。
<br><li/> 当ReceiverType不是 Wecom 时，Url不能填写。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUrl(string $Url) 设置回调Url。
<br><li/> 当ReceiverType是 Wecom 时，Url必填。
<br><li/> 当ReceiverType不是 Wecom 时，Url不能填写。
注意：此字段可能返回 null，表示取不到有效值。
 */
class DashboardNoticeMode extends AbstractModel
{
    /**
     * @var string 仪表盘通知方式。<br>
<li/>Uin：腾讯云用户<br>
<li/>Group：腾讯云用户组<br>
<li/>Email：自定义Email<br>
<li/>WeCom: 企业微信回调
     */
    public $ReceiverType;

    /**
     * @var array 知方式对应的值。
<br> <li/> 当ReceiverType不是 Wecom 时，Values必填。
     */
    public $Values;

    /**
     * @var array 仪表盘通知渠道。
<br><li/> 支持：["Email","Sms","WeChat","Phone"]。
<br><li/> 当ReceiverType是 Email 或 Wecom 时，ReceiverChannels不能赋值。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReceiverChannels;

    /**
     * @var string 回调Url。
<br><li/> 当ReceiverType是 Wecom 时，Url必填。
<br><li/> 当ReceiverType不是 Wecom 时，Url不能填写。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Url;

    /**
     * @param string $ReceiverType 仪表盘通知方式。<br>
<li/>Uin：腾讯云用户<br>
<li/>Group：腾讯云用户组<br>
<li/>Email：自定义Email<br>
<li/>WeCom: 企业微信回调
     * @param array $Values 知方式对应的值。
<br> <li/> 当ReceiverType不是 Wecom 时，Values必填。
     * @param array $ReceiverChannels 仪表盘通知渠道。
<br><li/> 支持：["Email","Sms","WeChat","Phone"]。
<br><li/> 当ReceiverType是 Email 或 Wecom 时，ReceiverChannels不能赋值。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Url 回调Url。
<br><li/> 当ReceiverType是 Wecom 时，Url必填。
<br><li/> 当ReceiverType不是 Wecom 时，Url不能填写。
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
