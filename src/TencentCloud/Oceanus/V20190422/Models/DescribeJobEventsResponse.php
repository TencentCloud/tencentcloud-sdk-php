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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeJobEvents返回参数结构体
 *
 * @method array getEvents() 获取该作业指定范围内的事件列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEvents(array $Events) 设置该作业指定范围内的事件列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRunningOrderIds() 获取该作业指定范围内运行实例 ID 数组，仅当入参没有传入 RunningOrderIds 参数时才会返回。倒序输出
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRunningOrderIds(array $RunningOrderIds) 设置该作业指定范围内运行实例 ID 数组，仅当入参没有传入 RunningOrderIds 参数时才会返回。倒序输出
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取事件的总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置事件的总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getVersions() 获取实例对应的版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersions(array $Versions) 设置实例对应的版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeJobEventsResponse extends AbstractModel
{
    /**
     * @var array 该作业指定范围内的事件列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Events;

    /**
     * @var array 该作业指定范围内运行实例 ID 数组，仅当入参没有传入 RunningOrderIds 参数时才会返回。倒序输出
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RunningOrderIds;

    /**
     * @var integer 事件的总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var array 实例对应的版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Versions;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Events 该作业指定范围内的事件列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $RunningOrderIds 该作业指定范围内运行实例 ID 数组，仅当入参没有传入 RunningOrderIds 参数时才会返回。倒序输出
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 事件的总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Versions 实例对应的版本
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
        if (array_key_exists("Events",$param) and $param["Events"] !== null) {
            $this->Events = [];
            foreach ($param["Events"] as $key => $value){
                $obj = new JobEvent();
                $obj->deserialize($value);
                array_push($this->Events, $obj);
            }
        }

        if (array_key_exists("RunningOrderIds",$param) and $param["RunningOrderIds"] !== null) {
            $this->RunningOrderIds = $param["RunningOrderIds"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Versions",$param) and $param["Versions"] !== null) {
            $this->Versions = $param["Versions"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
