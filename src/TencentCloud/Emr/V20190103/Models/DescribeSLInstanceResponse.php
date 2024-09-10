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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSLInstance返回参数结构体
 *
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
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeSLInstanceResponse extends AbstractModel
{
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
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $InstanceName 实例名称。
     * @param integer $PayMode 实例计费模式。0表示后付费，即按量计费，1表示预付费，即包年包月。
     * @param string $DiskType 实例存储类型。
     * @param integer $DiskSize 实例单节点磁盘容量，单位GB。
     * @param string $NodeType 实例节点规格。
     * @param array $ZoneSettings 实例可用区详细配置，包含可用区名称，VPC信息、节点数量。
     * @param array $Tags 实例绑定的标签列表。
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
