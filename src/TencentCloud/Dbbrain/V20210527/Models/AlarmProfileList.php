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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 通知模板
 *
 * @method integer getIsWebHook() 获取0-不是 1-是
 * @method void setIsWebHook(integer $IsWebHook) 设置0-不是 1-是
 * @method integer getReceiveUinCount() 获取接收告警用户数量
 * @method void setReceiveUinCount(integer $ReceiveUinCount) 设置接收告警用户数量
 * @method string getLang() 获取语言
 * @method void setLang(string $Lang) 设置语言
 * @method string getTemplateType() 获取模板类型
 * @method void setTemplateType(string $TemplateType) 设置模板类型
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method integer getReceiveGroupCount() 获取接收组数量
 * @method void setReceiveGroupCount(integer $ReceiveGroupCount) 设置接收组数量
 * @method integer getUpdateUin() 获取更新用户的uin
 * @method void setUpdateUin(integer $UpdateUin) 设置更新用户的uin
 * @method array getReceiveType() 获取接收类型
 * @method void setReceiveType(array $ReceiveType) 设置接收类型
 * @method array getReceiveInfo() 获取接收用户信息
 * @method void setReceiveInfo(array $ReceiveInfo) 设置接收用户信息
 * @method string getUpdateTime() 获取更新时间，格式: "yyyy-MM-dd HH:mm:ss"
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间，格式: "yyyy-MM-dd HH:mm:ss"
 * @method string getTemplateName() 获取模板名
 * @method void setTemplateName(string $TemplateName) 设置模板名
 * @method array getSendChannel() 获取发送渠道
 * @method void setSendChannel(array $SendChannel) 设置发送渠道
 * @method integer getTemplateId() 获取模板id
 * @method void setTemplateId(integer $TemplateId) 设置模板id
 * @method integer getWebHookCount() 获取webhook数量
 * @method void setWebHookCount(integer $WebHookCount) 设置webhook数量
 */
class AlarmProfileList extends AbstractModel
{
    /**
     * @var integer 0-不是 1-是
     */
    public $IsWebHook;

    /**
     * @var integer 接收告警用户数量
     */
    public $ReceiveUinCount;

    /**
     * @var string 语言
     */
    public $Lang;

    /**
     * @var string 模板类型
     */
    public $TemplateType;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var integer 接收组数量
     */
    public $ReceiveGroupCount;

    /**
     * @var integer 更新用户的uin
     */
    public $UpdateUin;

    /**
     * @var array 接收类型
     */
    public $ReceiveType;

    /**
     * @var array 接收用户信息
     */
    public $ReceiveInfo;

    /**
     * @var string 更新时间，格式: "yyyy-MM-dd HH:mm:ss"
     */
    public $UpdateTime;

    /**
     * @var string 模板名
     */
    public $TemplateName;

    /**
     * @var array 发送渠道
     */
    public $SendChannel;

    /**
     * @var integer 模板id
     */
    public $TemplateId;

    /**
     * @var integer webhook数量
     */
    public $WebHookCount;

    /**
     * @param integer $IsWebHook 0-不是 1-是
     * @param integer $ReceiveUinCount 接收告警用户数量
     * @param string $Lang 语言
     * @param string $TemplateType 模板类型
     * @param string $Remark 备注
     * @param integer $ReceiveGroupCount 接收组数量
     * @param integer $UpdateUin 更新用户的uin
     * @param array $ReceiveType 接收类型
     * @param array $ReceiveInfo 接收用户信息
     * @param string $UpdateTime 更新时间，格式: "yyyy-MM-dd HH:mm:ss"
     * @param string $TemplateName 模板名
     * @param array $SendChannel 发送渠道
     * @param integer $TemplateId 模板id
     * @param integer $WebHookCount webhook数量
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
