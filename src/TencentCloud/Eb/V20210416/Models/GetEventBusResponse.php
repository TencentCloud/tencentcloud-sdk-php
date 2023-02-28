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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetEventBus返回参数结构体
 *
 * @method string getModTime() 获取更新时间
 * @method void setModTime(string $ModTime) 设置更新时间
 * @method string getDescription() 获取事件集描述
 * @method void setDescription(string $Description) 设置事件集描述
 * @method string getClsTopicId() 获取日志主题ID
 * @method void setClsTopicId(string $ClsTopicId) 设置日志主题ID
 * @method string getAddTime() 获取创建时间
 * @method void setAddTime(string $AddTime) 设置创建时间
 * @method string getClsLogsetId() 获取日志集ID
 * @method void setClsLogsetId(string $ClsLogsetId) 设置日志集ID
 * @method string getEventBusName() 获取事件集名称
 * @method void setEventBusName(string $EventBusName) 设置事件集名称
 * @method string getEventBusId() 获取事件集ID
 * @method void setEventBusId(string $EventBusId) 设置事件集ID
 * @method string getType() 获取（已废弃）事件集类型
 * @method void setType(string $Type) 设置（已废弃）事件集类型
 * @method string getPayMode() 获取计费模式
 * @method void setPayMode(string $PayMode) 设置计费模式
 * @method integer getSaveDays() 获取EB日志存储时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSaveDays(integer $SaveDays) 设置EB日志存储时长
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogTopicId() 获取EB日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogTopicId(string $LogTopicId) 设置EB日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableStore() 获取是否开启存储
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableStore(boolean $EnableStore) 设置是否开启存储
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLinkMode() 获取消息序列，是否有序
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLinkMode(string $LinkMode) 设置消息序列，是否有序
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetEventBusResponse extends AbstractModel
{
    /**
     * @var string 更新时间
     */
    public $ModTime;

    /**
     * @var string 事件集描述
     */
    public $Description;

    /**
     * @var string 日志主题ID
     */
    public $ClsTopicId;

    /**
     * @var string 创建时间
     */
    public $AddTime;

    /**
     * @var string 日志集ID
     */
    public $ClsLogsetId;

    /**
     * @var string 事件集名称
     */
    public $EventBusName;

    /**
     * @var string 事件集ID
     */
    public $EventBusId;

    /**
     * @var string （已废弃）事件集类型
     */
    public $Type;

    /**
     * @var string 计费模式
     */
    public $PayMode;

    /**
     * @var integer EB日志存储时长
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SaveDays;

    /**
     * @var string EB日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogTopicId;

    /**
     * @var boolean 是否开启存储
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableStore;

    /**
     * @var string 消息序列，是否有序
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LinkMode;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ModTime 更新时间
     * @param string $Description 事件集描述
     * @param string $ClsTopicId 日志主题ID
     * @param string $AddTime 创建时间
     * @param string $ClsLogsetId 日志集ID
     * @param string $EventBusName 事件集名称
     * @param string $EventBusId 事件集ID
     * @param string $Type （已废弃）事件集类型
     * @param string $PayMode 计费模式
     * @param integer $SaveDays EB日志存储时长
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogTopicId EB日志主题ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableStore 是否开启存储
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LinkMode 消息序列，是否有序
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("ModTime",$param) and $param["ModTime"] !== null) {
            $this->ModTime = $param["ModTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ClsTopicId",$param) and $param["ClsTopicId"] !== null) {
            $this->ClsTopicId = $param["ClsTopicId"];
        }

        if (array_key_exists("AddTime",$param) and $param["AddTime"] !== null) {
            $this->AddTime = $param["AddTime"];
        }

        if (array_key_exists("ClsLogsetId",$param) and $param["ClsLogsetId"] !== null) {
            $this->ClsLogsetId = $param["ClsLogsetId"];
        }

        if (array_key_exists("EventBusName",$param) and $param["EventBusName"] !== null) {
            $this->EventBusName = $param["EventBusName"];
        }

        if (array_key_exists("EventBusId",$param) and $param["EventBusId"] !== null) {
            $this->EventBusId = $param["EventBusId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("SaveDays",$param) and $param["SaveDays"] !== null) {
            $this->SaveDays = $param["SaveDays"];
        }

        if (array_key_exists("LogTopicId",$param) and $param["LogTopicId"] !== null) {
            $this->LogTopicId = $param["LogTopicId"];
        }

        if (array_key_exists("EnableStore",$param) and $param["EnableStore"] !== null) {
            $this->EnableStore = $param["EnableStore"];
        }

        if (array_key_exists("LinkMode",$param) and $param["LinkMode"] !== null) {
            $this->LinkMode = $param["LinkMode"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
