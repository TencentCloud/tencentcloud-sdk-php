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
namespace TencentCloud\Cloudaudit\V20190319\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAuditTrack返回参数结构体
 *
 * @method string getName() 获取跟踪集名称
 * @method void setName(string $Name) 设置跟踪集名称
 * @method string getActionType() 获取跟踪事件类型（读：Read；写：Write；全部：*）
 * @method void setActionType(string $ActionType) 设置跟踪事件类型（读：Read；写：Write；全部：*）
 * @method string getResourceType() 获取跟踪事件所属产品（如：cos，全部：*）
 * @method void setResourceType(string $ResourceType) 设置跟踪事件所属产品（如：cos，全部：*）
 * @method integer getStatus() 获取跟踪集状态（未开启：0；开启：1）
 * @method void setStatus(integer $Status) 设置跟踪集状态（未开启：0；开启：1）
 * @method array getEventNames() 获取跟踪事件接口名列表（全部：[*]）
 * @method void setEventNames(array $EventNames) 设置跟踪事件接口名列表（全部：[*]）
 * @method Storage getStorage() 获取数据投递存储（目前支持 cos、cls）
 * @method void setStorage(Storage $Storage) 设置数据投递存储（目前支持 cos、cls）
 * @method string getCreateTime() 获取跟踪集创建时间
 * @method void setCreateTime(string $CreateTime) 设置跟踪集创建时间
 * @method integer getTrackForAllMembers() 获取是否开启将集团成员操作日志投递到集团管理账号或者可信服务管理账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTrackForAllMembers(integer $TrackForAllMembers) 设置是否开启将集团成员操作日志投递到集团管理账号或者可信服务管理账号
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeAuditTrackResponse extends AbstractModel
{
    /**
     * @var string 跟踪集名称
     */
    public $Name;

    /**
     * @var string 跟踪事件类型（读：Read；写：Write；全部：*）
     */
    public $ActionType;

    /**
     * @var string 跟踪事件所属产品（如：cos，全部：*）
     */
    public $ResourceType;

    /**
     * @var integer 跟踪集状态（未开启：0；开启：1）
     */
    public $Status;

    /**
     * @var array 跟踪事件接口名列表（全部：[*]）
     */
    public $EventNames;

    /**
     * @var Storage 数据投递存储（目前支持 cos、cls）
     */
    public $Storage;

    /**
     * @var string 跟踪集创建时间
     */
    public $CreateTime;

    /**
     * @var integer 是否开启将集团成员操作日志投递到集团管理账号或者可信服务管理账号
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TrackForAllMembers;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Name 跟踪集名称
     * @param string $ActionType 跟踪事件类型（读：Read；写：Write；全部：*）
     * @param string $ResourceType 跟踪事件所属产品（如：cos，全部：*）
     * @param integer $Status 跟踪集状态（未开启：0；开启：1）
     * @param array $EventNames 跟踪事件接口名列表（全部：[*]）
     * @param Storage $Storage 数据投递存储（目前支持 cos、cls）
     * @param string $CreateTime 跟踪集创建时间
     * @param integer $TrackForAllMembers 是否开启将集团成员操作日志投递到集团管理账号或者可信服务管理账号
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ActionType",$param) and $param["ActionType"] !== null) {
            $this->ActionType = $param["ActionType"];
        }

        if (array_key_exists("ResourceType",$param) and $param["ResourceType"] !== null) {
            $this->ResourceType = $param["ResourceType"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("EventNames",$param) and $param["EventNames"] !== null) {
            $this->EventNames = $param["EventNames"];
        }

        if (array_key_exists("Storage",$param) and $param["Storage"] !== null) {
            $this->Storage = new Storage();
            $this->Storage->deserialize($param["Storage"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("TrackForAllMembers",$param) and $param["TrackForAllMembers"] !== null) {
            $this->TrackForAllMembers = $param["TrackForAllMembers"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
