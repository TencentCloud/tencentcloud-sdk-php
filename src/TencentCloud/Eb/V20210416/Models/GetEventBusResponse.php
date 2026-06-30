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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetEventBus返回参数结构体
 *
 * @method string getModTime() 获取<p>更新时间</p>
 * @method void setModTime(string $ModTime) 设置<p>更新时间</p>
 * @method string getDescription() 获取<p>事件集描述</p>
 * @method void setDescription(string $Description) 设置<p>事件集描述</p>
 * @method string getClsTopicId() 获取<p>日志主题ID</p>
 * @method void setClsTopicId(string $ClsTopicId) 设置<p>日志主题ID</p>
 * @method string getAddTime() 获取<p>创建时间</p>
 * @method void setAddTime(string $AddTime) 设置<p>创建时间</p>
 * @method string getClsLogsetId() 获取<p>日志集ID</p>
 * @method void setClsLogsetId(string $ClsLogsetId) 设置<p>日志集ID</p>
 * @method string getEventBusName() 获取<p>事件集名称</p>
 * @method void setEventBusName(string $EventBusName) 设置<p>事件集名称</p>
 * @method string getEventBusId() 获取<p>事件集ID</p>
 * @method void setEventBusId(string $EventBusId) 设置<p>事件集ID</p>
 * @method string getType() 获取<p>事件集类型</p><p>枚举值：</p><ul><li>Cloud： 云服务事件集</li><li>Platform： 平台事件集</li><li>Custom： 自定义事件集</li></ul>
 * @method void setType(string $Type) 设置<p>事件集类型</p><p>枚举值：</p><ul><li>Cloud： 云服务事件集</li><li>Platform： 平台事件集</li><li>Custom： 自定义事件集</li></ul>
 * @method string getPayMode() 获取<p>计费模式</p>
 * @method void setPayMode(string $PayMode) 设置<p>计费模式</p>
 * @method integer getSaveDays() 获取<p>EB日志存储时长</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSaveDays(integer $SaveDays) 设置<p>EB日志存储时长</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLogTopicId() 获取<p>EB日志主题ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLogTopicId(string $LogTopicId) 设置<p>EB日志主题ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEnableStore() 获取<p>是否开启存储</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableStore(boolean $EnableStore) 设置<p>是否开启存储</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLinkMode() 获取<p>消息序列，是否有序</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLinkMode(string $LinkMode) 设置<p>消息序列，是否有序</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetEventBusResponse extends AbstractModel
{
    /**
     * @var string <p>更新时间</p>
     */
    public $ModTime;

    /**
     * @var string <p>事件集描述</p>
     */
    public $Description;

    /**
     * @var string <p>日志主题ID</p>
     */
    public $ClsTopicId;

    /**
     * @var string <p>创建时间</p>
     */
    public $AddTime;

    /**
     * @var string <p>日志集ID</p>
     */
    public $ClsLogsetId;

    /**
     * @var string <p>事件集名称</p>
     */
    public $EventBusName;

    /**
     * @var string <p>事件集ID</p>
     */
    public $EventBusId;

    /**
     * @var string <p>事件集类型</p><p>枚举值：</p><ul><li>Cloud： 云服务事件集</li><li>Platform： 平台事件集</li><li>Custom： 自定义事件集</li></ul>
     */
    public $Type;

    /**
     * @var string <p>计费模式</p>
     */
    public $PayMode;

    /**
     * @var integer <p>EB日志存储时长</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SaveDays;

    /**
     * @var string <p>EB日志主题ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LogTopicId;

    /**
     * @var boolean <p>是否开启存储</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableStore;

    /**
     * @var string <p>消息序列，是否有序</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LinkMode;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $ModTime <p>更新时间</p>
     * @param string $Description <p>事件集描述</p>
     * @param string $ClsTopicId <p>日志主题ID</p>
     * @param string $AddTime <p>创建时间</p>
     * @param string $ClsLogsetId <p>日志集ID</p>
     * @param string $EventBusName <p>事件集名称</p>
     * @param string $EventBusId <p>事件集ID</p>
     * @param string $Type <p>事件集类型</p><p>枚举值：</p><ul><li>Cloud： 云服务事件集</li><li>Platform： 平台事件集</li><li>Custom： 自定义事件集</li></ul>
     * @param string $PayMode <p>计费模式</p>
     * @param integer $SaveDays <p>EB日志存储时长</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LogTopicId <p>EB日志主题ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $EnableStore <p>是否开启存储</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LinkMode <p>消息序列，是否有序</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
