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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSLInstance返回参数结构体
 *
 * @method string getInstanceId() 获取实例字符串标识。
 * @method void setInstanceId(string $InstanceId) 设置实例字符串标识。
 * @method string getInstanceName() 获取实例名称。
 * @method void setInstanceName(string $InstanceName) 设置实例名称。
 * @method integer getPayMode() 获取实例计费模式。0表示后付费，即按量计费，1表示预付费，即包年包月。
 * @method void setPayMode(integer $PayMode) 设置实例计费模式。0表示后付费，即按量计费，1表示预付费，即包年包月。
 * @method string getDiskType() 获取实例存储类型。
 * @method void setDiskType(string $DiskType) 设置实例存储类型。
 * @method integer getDiskSize() 获取实例单节点磁盘容量，单位GB。
 * @method void setDiskSize(integer $DiskSize) 设置实例单节点磁盘容量，单位GB。
 * @method string getNodeType() 获取实例节点规格。
 * @method void setNodeType(string $NodeType) 设置实例节点规格。
 * @method array getZoneSettings() 获取实例可用区详细配置，包含可用区名称，VPC信息、节点数量。
 * @method void setZoneSettings(array $ZoneSettings) 设置实例可用区详细配置，包含可用区名称，VPC信息、节点数量。
 * @method array getTags() 获取实例绑定的标签列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置实例绑定的标签列表。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getClusterId() 获取实例数字标识。
 * @method void setClusterId(integer $ClusterId) 设置实例数字标识。
 * @method integer getRegionId() 获取实例区域ID。
 * @method void setRegionId(integer $RegionId) 设置实例区域ID。
 * @method string getZone() 获取实例主可用区。
 * @method void setZone(string $Zone) 设置实例主可用区。
 * @method string getExpireTime() 获取实例过期时间，后付费返回0000-00-00 00:00:00
 * @method void setExpireTime(string $ExpireTime) 设置实例过期时间，后付费返回0000-00-00 00:00:00
 * @method string getIsolateTime() 获取实例隔离时间，未隔离返回0000-00-00 00:00:00。
 * @method void setIsolateTime(string $IsolateTime) 设置实例隔离时间，未隔离返回0000-00-00 00:00:00。
 * @method string getCreateTime() 获取实例创建时间。
 * @method void setCreateTime(string $CreateTime) 设置实例创建时间。
 * @method integer getStatus() 获取实例状态码，-2:  "TERMINATED", 2:   "RUNNING", 14:  "TERMINATING", 19:  "ISOLATING", 22:  "ADJUSTING", 201: "ISOLATED"。
 * @method void setStatus(integer $Status) 设置实例状态码，-2:  "TERMINATED", 2:   "RUNNING", 14:  "TERMINATING", 19:  "ISOLATING", 22:  "ADJUSTING", 201: "ISOLATED"。
 * @method integer getAutoRenewFlag() 获取自动续费标记， 0：表示通知即将过期，但不自动续费 1：表示通知即将过期，而且自动续费 2：表示不通知即将过期，也不自动续费，若业务无续费概念为0
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费标记， 0：表示通知即将过期，但不自动续费 1：表示通知即将过期，而且自动续费 2：表示不通知即将过期，也不自动续费，若业务无续费概念为0
 * @method integer getNodeNum() 获取实例节点总数。
 * @method void setNodeNum(integer $NodeNum) 设置实例节点总数。
 * @method array getSLInstance() 获取Serverless Instance infomation
 * @method void setSLInstance(array $SLInstance) 设置Serverless Instance infomation
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSLInstanceResponse extends AbstractModel
{
    /**
     * @var string 实例字符串标识。
     */
    public $InstanceId;

    /**
     * @var string 实例名称。
     */
    public $InstanceName;

    /**
     * @var integer 实例计费模式。0表示后付费，即按量计费，1表示预付费，即包年包月。
     */
    public $PayMode;

    /**
     * @var string 实例存储类型。
     */
    public $DiskType;

    /**
     * @var integer 实例单节点磁盘容量，单位GB。
     */
    public $DiskSize;

    /**
     * @var string 实例节点规格。
     */
    public $NodeType;

    /**
     * @var array 实例可用区详细配置，包含可用区名称，VPC信息、节点数量。
     */
    public $ZoneSettings;

    /**
     * @var array 实例绑定的标签列表。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var integer 实例数字标识。
     */
    public $ClusterId;

    /**
     * @var integer 实例区域ID。
     */
    public $RegionId;

    /**
     * @var string 实例主可用区。
     */
    public $Zone;

    /**
     * @var string 实例过期时间，后付费返回0000-00-00 00:00:00
     */
    public $ExpireTime;

    /**
     * @var string 实例隔离时间，未隔离返回0000-00-00 00:00:00。
     */
    public $IsolateTime;

    /**
     * @var string 实例创建时间。
     */
    public $CreateTime;

    /**
     * @var integer 实例状态码，-2:  "TERMINATED", 2:   "RUNNING", 14:  "TERMINATING", 19:  "ISOLATING", 22:  "ADJUSTING", 201: "ISOLATED"。
     */
    public $Status;

    /**
     * @var integer 自动续费标记， 0：表示通知即将过期，但不自动续费 1：表示通知即将过期，而且自动续费 2：表示不通知即将过期，也不自动续费，若业务无续费概念为0
     */
    public $AutoRenewFlag;

    /**
     * @var integer 实例节点总数。
     */
    public $NodeNum;

    /**
     * @var array Serverless Instance infomation
     */
    public $SLInstance;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $InstanceId 实例字符串标识。
     * @param string $InstanceName 实例名称。
     * @param integer $PayMode 实例计费模式。0表示后付费，即按量计费，1表示预付费，即包年包月。
     * @param string $DiskType 实例存储类型。
     * @param integer $DiskSize 实例单节点磁盘容量，单位GB。
     * @param string $NodeType 实例节点规格。
     * @param array $ZoneSettings 实例可用区详细配置，包含可用区名称，VPC信息、节点数量。
     * @param array $Tags 实例绑定的标签列表。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ClusterId 实例数字标识。
     * @param integer $RegionId 实例区域ID。
     * @param string $Zone 实例主可用区。
     * @param string $ExpireTime 实例过期时间，后付费返回0000-00-00 00:00:00
     * @param string $IsolateTime 实例隔离时间，未隔离返回0000-00-00 00:00:00。
     * @param string $CreateTime 实例创建时间。
     * @param integer $Status 实例状态码，-2:  "TERMINATED", 2:   "RUNNING", 14:  "TERMINATING", 19:  "ISOLATING", 22:  "ADJUSTING", 201: "ISOLATED"。
     * @param integer $AutoRenewFlag 自动续费标记， 0：表示通知即将过期，但不自动续费 1：表示通知即将过期，而且自动续费 2：表示不通知即将过期，也不自动续费，若业务无续费概念为0
     * @param integer $NodeNum 实例节点总数。
     * @param array $SLInstance Serverless Instance infomation
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("PayMode",$param) and $param["PayMode"] !== null) {
            $this->PayMode = $param["PayMode"];
        }

        if (array_key_exists("DiskType",$param) and $param["DiskType"] !== null) {
            $this->DiskType = $param["DiskType"];
        }

        if (array_key_exists("DiskSize",$param) and $param["DiskSize"] !== null) {
            $this->DiskSize = $param["DiskSize"];
        }

        if (array_key_exists("NodeType",$param) and $param["NodeType"] !== null) {
            $this->NodeType = $param["NodeType"];
        }

        if (array_key_exists("ZoneSettings",$param) and $param["ZoneSettings"] !== null) {
            $this->ZoneSettings = [];
            foreach ($param["ZoneSettings"] as $key => $value){
                $obj = new ZoneSetting();
                $obj->deserialize($value);
                array_push($this->ZoneSettings, $obj);
            }
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("IsolateTime",$param) and $param["IsolateTime"] !== null) {
            $this->IsolateTime = $param["IsolateTime"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("NodeNum",$param) and $param["NodeNum"] !== null) {
            $this->NodeNum = $param["NodeNum"];
        }

        if (array_key_exists("SLInstance",$param) and $param["SLInstance"] !== null) {
            $this->SLInstance = [];
            foreach ($param["SLInstance"] as $key => $value){
                $obj = new SLInstance();
                $obj->deserialize($value);
                array_push($this->SLInstance, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
