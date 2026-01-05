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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyWebHookPolicy请求参数结构体
 *
 * @method integer getId() 获取id
 * @method void setId(integer $Id) 设置id
 * @method string getName() 获取策略名称
 * @method void setName(string $Name) 设置策略名称
 * @method array getEvents() 获取事件类型
 * @method void setEvents(array $Events) 设置事件类型
 * @method array getHostLabels() 获取主机范围
 * @method void setHostLabels(array $HostLabels) 设置主机范围
 * @method array getReceivers() 获取接收人
 * @method void setReceivers(array $Receivers) 设置接收人
 * @method integer getFormat() 获取格式 0text 1json
 * @method void setFormat(integer $Format) 设置格式 0text 1json
 * @method array getCustomFields() 获取自定义透传字段
 * @method void setCustomFields(array $CustomFields) 设置自定义透传字段
 * @method integer getIsDisabled() 获取是否启用[1:禁用|0:启用]
 * @method void setIsDisabled(integer $IsDisabled) 设置是否启用[1:禁用|0:启用]
 * @method array getQuuids() 获取主机列表
 * @method void setQuuids(array $Quuids) 设置主机列表
 * @method array getExcludedQuuids() 获取需排除的机器列表	
 * @method void setExcludedQuuids(array $ExcludedQuuids) 设置需排除的机器列表	
 * @method string getMsgLanguage() 获取推送语言类型，中文zh，英文en
 * @method void setMsgLanguage(string $MsgLanguage) 设置推送语言类型，中文zh，英文en
 */
class ModifyWebHookPolicyRequest extends AbstractModel
{
    /**
     * @var integer id
     */
    public $Id;

    /**
     * @var string 策略名称
     */
    public $Name;

    /**
     * @var array 事件类型
     */
    public $Events;

    /**
     * @var array 主机范围
     */
    public $HostLabels;

    /**
     * @var array 接收人
     */
    public $Receivers;

    /**
     * @var integer 格式 0text 1json
     */
    public $Format;

    /**
     * @var array 自定义透传字段
     */
    public $CustomFields;

    /**
     * @var integer 是否启用[1:禁用|0:启用]
     */
    public $IsDisabled;

    /**
     * @var array 主机列表
     */
    public $Quuids;

    /**
     * @var array 需排除的机器列表	
     */
    public $ExcludedQuuids;

    /**
     * @var string 推送语言类型，中文zh，英文en
     */
    public $MsgLanguage;

    /**
     * @param integer $Id id
     * @param string $Name 策略名称
     * @param array $Events 事件类型
     * @param array $HostLabels 主机范围
     * @param array $Receivers 接收人
     * @param integer $Format 格式 0text 1json
     * @param array $CustomFields 自定义透传字段
     * @param integer $IsDisabled 是否启用[1:禁用|0:启用]
     * @param array $Quuids 主机列表
     * @param array $ExcludedQuuids 需排除的机器列表	
     * @param string $MsgLanguage 推送语言类型，中文zh，英文en
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Events",$param) and $param["Events"] !== null) {
            $this->Events = [];
            foreach ($param["Events"] as $key => $value){
                $obj = new WebHookEventKv();
                $obj->deserialize($value);
                array_push($this->Events, $obj);
            }
        }

        if (array_key_exists("HostLabels",$param) and $param["HostLabels"] !== null) {
            $this->HostLabels = [];
            foreach ($param["HostLabels"] as $key => $value){
                $obj = new WebHookHostLabel();
                $obj->deserialize($value);
                array_push($this->HostLabels, $obj);
            }
        }

        if (array_key_exists("Receivers",$param) and $param["Receivers"] !== null) {
            $this->Receivers = [];
            foreach ($param["Receivers"] as $key => $value){
                $obj = new WebHookReceiver();
                $obj->deserialize($value);
                array_push($this->Receivers, $obj);
            }
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("CustomFields",$param) and $param["CustomFields"] !== null) {
            $this->CustomFields = [];
            foreach ($param["CustomFields"] as $key => $value){
                $obj = new WebHookCustomField();
                $obj->deserialize($value);
                array_push($this->CustomFields, $obj);
            }
        }

        if (array_key_exists("IsDisabled",$param) and $param["IsDisabled"] !== null) {
            $this->IsDisabled = $param["IsDisabled"];
        }

        if (array_key_exists("Quuids",$param) and $param["Quuids"] !== null) {
            $this->Quuids = $param["Quuids"];
        }

        if (array_key_exists("ExcludedQuuids",$param) and $param["ExcludedQuuids"] !== null) {
            $this->ExcludedQuuids = $param["ExcludedQuuids"];
        }

        if (array_key_exists("MsgLanguage",$param) and $param["MsgLanguage"] !== null) {
            $this->MsgLanguage = $param["MsgLanguage"];
        }
    }
}
