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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyWebhookPolicy请求参数结构体
 *
 * @method string getName() 获取<p>策略名称<br>入参限制：长度 1-20 个字符，租户内唯一</p>
 * @method void setName(string $Name) 设置<p>策略名称<br>入参限制：长度 1-20 个字符，租户内唯一</p>
 * @method string getStatus() 获取<p>启用状态<br>枚举值：<br>ON：启用<br>OFF：禁用</p>
 * @method void setStatus(string $Status) 设置<p>启用状态<br>枚举值：<br>ON：启用<br>OFF：禁用</p>
 * @method array getNotifyItems() 获取<p>通知项列表<br>入参限制：至少 1 项，Module/SubModule 必须为 DescribeWebhookNotifyItemTree 返回的合法组合</p>
 * @method void setNotifyItems(array $NotifyItems) 设置<p>通知项列表<br>入参限制：至少 1 项，Module/SubModule 必须为 DescribeWebhookNotifyItemTree 返回的合法组合</p>
 * @method WebhookAssetScope getAssetScope() 获取<p>通知资产范围</p>
 * @method void setAssetScope(WebhookAssetScope $AssetScope) 设置<p>通知资产范围</p>
 * @method string getReceiveFormat() 获取<p>接收格式<br>枚举值：<br>TEXT：文本格式<br>JSON：JSON 格式</p>
 * @method void setReceiveFormat(string $ReceiveFormat) 设置<p>接收格式<br>枚举值：<br>TEXT：文本格式<br>JSON：JSON 格式</p>
 * @method array getReceiverIDList() 获取<p>接收机器人 ID 列表<br>入参限制：至少 1 个，最多 50 个</p>
 * @method void setReceiverIDList(array $ReceiverIDList) 设置<p>接收机器人 ID 列表<br>入参限制：至少 1 个，最多 50 个</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method integer getID() 获取<p>策略 ID。大于 0 表示修改；等于 0 或不传表示新增<br>默认值：0</p>
 * @method void setID(integer $ID) 设置<p>策略 ID。大于 0 表示修改；等于 0 或不传表示新增<br>默认值：0</p>
 * @method string getMsgLanguage() 获取<p>推送语言<br>枚举值：<br>zh：中文<br>en：英文<br>默认值：国内站默认 zh，国际站默认 en</p>
 * @method void setMsgLanguage(string $MsgLanguage) 设置<p>推送语言<br>枚举值：<br>zh：中文<br>en：英文<br>默认值：国内站默认 zh，国际站默认 en</p>
 * @method array getCustomFields() 获取<p>自定义透传字段列表<br>入参限制：EnableCustomFields=true 时必填，最多 20 个</p>
 * @method void setCustomFields(array $CustomFields) 设置<p>自定义透传字段列表<br>入参限制：EnableCustomFields=true 时必填，最多 20 个</p>
 */
class ModifyWebhookPolicyRequest extends AbstractModel
{
    /**
     * @var string <p>策略名称<br>入参限制：长度 1-20 个字符，租户内唯一</p>
     */
    public $Name;

    /**
     * @var string <p>启用状态<br>枚举值：<br>ON：启用<br>OFF：禁用</p>
     */
    public $Status;

    /**
     * @var array <p>通知项列表<br>入参限制：至少 1 项，Module/SubModule 必须为 DescribeWebhookNotifyItemTree 返回的合法组合</p>
     */
    public $NotifyItems;

    /**
     * @var WebhookAssetScope <p>通知资产范围</p>
     */
    public $AssetScope;

    /**
     * @var string <p>接收格式<br>枚举值：<br>TEXT：文本格式<br>JSON：JSON 格式</p>
     */
    public $ReceiveFormat;

    /**
     * @var array <p>接收机器人 ID 列表<br>入参限制：至少 1 个，最多 50 个</p>
     */
    public $ReceiverIDList;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var integer <p>策略 ID。大于 0 表示修改；等于 0 或不传表示新增<br>默认值：0</p>
     */
    public $ID;

    /**
     * @var string <p>推送语言<br>枚举值：<br>zh：中文<br>en：英文<br>默认值：国内站默认 zh，国际站默认 en</p>
     */
    public $MsgLanguage;

    /**
     * @var array <p>自定义透传字段列表<br>入参限制：EnableCustomFields=true 时必填，最多 20 个</p>
     */
    public $CustomFields;

    /**
     * @param string $Name <p>策略名称<br>入参限制：长度 1-20 个字符，租户内唯一</p>
     * @param string $Status <p>启用状态<br>枚举值：<br>ON：启用<br>OFF：禁用</p>
     * @param array $NotifyItems <p>通知项列表<br>入参限制：至少 1 项，Module/SubModule 必须为 DescribeWebhookNotifyItemTree 返回的合法组合</p>
     * @param WebhookAssetScope $AssetScope <p>通知资产范围</p>
     * @param string $ReceiveFormat <p>接收格式<br>枚举值：<br>TEXT：文本格式<br>JSON：JSON 格式</p>
     * @param array $ReceiverIDList <p>接收机器人 ID 列表<br>入参限制：至少 1 个，最多 50 个</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param integer $ID <p>策略 ID。大于 0 表示修改；等于 0 或不传表示新增<br>默认值：0</p>
     * @param string $MsgLanguage <p>推送语言<br>枚举值：<br>zh：中文<br>en：英文<br>默认值：国内站默认 zh，国际站默认 en</p>
     * @param array $CustomFields <p>自定义透传字段列表<br>入参限制：EnableCustomFields=true 时必填，最多 20 个</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("NotifyItems",$param) and $param["NotifyItems"] !== null) {
            $this->NotifyItems = [];
            foreach ($param["NotifyItems"] as $key => $value){
                $obj = new WebhookNotifyItem();
                $obj->deserialize($value);
                array_push($this->NotifyItems, $obj);
            }
        }

        if (array_key_exists("AssetScope",$param) and $param["AssetScope"] !== null) {
            $this->AssetScope = new WebhookAssetScope();
            $this->AssetScope->deserialize($param["AssetScope"]);
        }

        if (array_key_exists("ReceiveFormat",$param) and $param["ReceiveFormat"] !== null) {
            $this->ReceiveFormat = $param["ReceiveFormat"];
        }

        if (array_key_exists("ReceiverIDList",$param) and $param["ReceiverIDList"] !== null) {
            $this->ReceiverIDList = $param["ReceiverIDList"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("MsgLanguage",$param) and $param["MsgLanguage"] !== null) {
            $this->MsgLanguage = $param["MsgLanguage"];
        }

        if (array_key_exists("CustomFields",$param) and $param["CustomFields"] !== null) {
            $this->CustomFields = [];
            foreach ($param["CustomFields"] as $key => $value){
                $obj = new WebhookCustomField();
                $obj->deserialize($value);
                array_push($this->CustomFields, $obj);
            }
        }
    }
}
