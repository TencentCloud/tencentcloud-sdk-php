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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 通知模板
 *
 * @method integer getIsWebHook() 获取0-不是 1-是
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsWebHook(integer $IsWebHook) 设置0-不是 1-是
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReceiveUinCount() 获取接收告警用户数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReceiveUinCount(integer $ReceiveUinCount) 设置接收告警用户数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLang() 获取语言
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLang(string $Lang) 设置语言
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTemplateType() 获取模板类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemplateType(string $TemplateType) 设置模板类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getReceiveGroupCount() 获取接收组数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReceiveGroupCount(integer $ReceiveGroupCount) 设置接收组数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateUin() 获取更新用户的uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateUin(integer $UpdateUin) 设置更新用户的uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getReceiveType() 获取接收类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReceiveType(array $ReceiveType) 设置接收类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getReceiveInfo() 获取接收用户信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReceiveInfo(array $ReceiveInfo) 设置接收用户信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdateTime() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTemplateName() 获取模板名
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemplateName(string $TemplateName) 设置模板名
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSendChannel() 获取发送渠道
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSendChannel(array $SendChannel) 设置发送渠道
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTemplateId() 获取模板id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemplateId(integer $TemplateId) 设置模板id
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWebHookCount() 获取webhook数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWebHookCount(integer $WebHookCount) 设置webhook数量
注意：此字段可能返回 null，表示取不到有效值。
 */
class AlarmProfileList extends AbstractModel
{
    /**
     * @var integer 0-不是 1-是
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsWebHook;

    /**
     * @var integer 接收告警用户数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReceiveUinCount;

    /**
     * @var string 语言
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Lang;

    /**
     * @var string 模板类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TemplateType;

    /**
     * @var string 备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var integer 接收组数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReceiveGroupCount;

    /**
     * @var integer 更新用户的uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateUin;

    /**
     * @var array 接收类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReceiveType;

    /**
     * @var array 接收用户信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ReceiveInfo;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 模板名
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TemplateName;

    /**
     * @var array 发送渠道
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SendChannel;

    /**
     * @var integer 模板id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TemplateId;

    /**
     * @var integer webhook数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WebHookCount;

    /**
     * @param integer $IsWebHook 0-不是 1-是
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReceiveUinCount 接收告警用户数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Lang 语言
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TemplateType 模板类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ReceiveGroupCount 接收组数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateUin 更新用户的uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ReceiveType 接收类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ReceiveInfo 接收用户信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdateTime 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TemplateName 模板名
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SendChannel 发送渠道
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TemplateId 模板id
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $WebHookCount webhook数量
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
        if (array_key_exists("IsWebHook",$param) and $param["IsWebHook"] !== null) {
            $this->IsWebHook = $param["IsWebHook"];
        }

        if (array_key_exists("ReceiveUinCount",$param) and $param["ReceiveUinCount"] !== null) {
            $this->ReceiveUinCount = $param["ReceiveUinCount"];
        }

        if (array_key_exists("Lang",$param) and $param["Lang"] !== null) {
            $this->Lang = $param["Lang"];
        }

        if (array_key_exists("TemplateType",$param) and $param["TemplateType"] !== null) {
            $this->TemplateType = $param["TemplateType"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("ReceiveGroupCount",$param) and $param["ReceiveGroupCount"] !== null) {
            $this->ReceiveGroupCount = $param["ReceiveGroupCount"];
        }

        if (array_key_exists("UpdateUin",$param) and $param["UpdateUin"] !== null) {
            $this->UpdateUin = $param["UpdateUin"];
        }

        if (array_key_exists("ReceiveType",$param) and $param["ReceiveType"] !== null) {
            $this->ReceiveType = $param["ReceiveType"];
        }

        if (array_key_exists("ReceiveInfo",$param) and $param["ReceiveInfo"] !== null) {
            $this->ReceiveInfo = [];
            foreach ($param["ReceiveInfo"] as $key => $value){
                $obj = new ReceiveInfo();
                $obj->deserialize($value);
                array_push($this->ReceiveInfo, $obj);
            }
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("TemplateName",$param) and $param["TemplateName"] !== null) {
            $this->TemplateName = $param["TemplateName"];
        }

        if (array_key_exists("SendChannel",$param) and $param["SendChannel"] !== null) {
            $this->SendChannel = $param["SendChannel"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("WebHookCount",$param) and $param["WebHookCount"] !== null) {
            $this->WebHookCount = $param["WebHookCount"];
        }
    }
}
