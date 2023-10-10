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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 策略
 *
 * @method integer getId() 获取id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(integer $Id) 设置id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取策略名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置策略名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getEvents() 获取事件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEvents(array $Events) 设置事件类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getHostLabels() 获取主机范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostLabels(array $HostLabels) 设置主机范围
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getReceivers() 获取接收人
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReceivers(array $Receivers) 设置接收人
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFormat() 获取格式 0text 1json
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFormat(integer $Format) 设置格式 0text 1json
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCustomFields() 获取自定义透传字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCustomFields(array $CustomFields) 设置自定义透传字段
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getIsDisabled() 获取是否启用[1:禁用|0:启用]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsDisabled(integer $IsDisabled) 设置是否启用[1:禁用|0:启用]
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getQuuids() 获取主机列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuuids(array $Quuids) 设置主机列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getHostCount() 获取主机数目
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHostCount(integer $HostCount) 设置主机数目
注意：此字段可能返回 null，表示取不到有效值。
 */
class WebHookPolicy extends AbstractModel
{
    /**
     * @var integer id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 策略名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var array 事件类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Events;

    /**
     * @var array 主机范围
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostLabels;

    /**
     * @var array 接收人
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Receivers;

    /**
     * @var integer 格式 0text 1json
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Format;

    /**
     * @var array 自定义透传字段
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CustomFields;

    /**
     * @var integer 是否启用[1:禁用|0:启用]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsDisabled;

    /**
     * @var array 主机列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Quuids;

    /**
     * @var integer 主机数目
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HostCount;

    /**
     * @param integer $Id id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 策略名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Events 事件类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $HostLabels 主机范围
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Receivers 接收人
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Format 格式 0text 1json
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CustomFields 自定义透传字段
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $IsDisabled 是否启用[1:禁用|0:启用]
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Quuids 主机列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $HostCount 主机数目
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

        if (array_key_exists("HostCount",$param) and $param["HostCount"] !== null) {
            $this->HostCount = $param["HostCount"];
        }
    }
}
