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
namespace TencentCloud\Config\V20220802\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeConfigRecorder返回参数结构体
 *
 * @method array getItems() 获取用户监控资源列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItems(array $Items) 设置用户监控资源列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取0 关闭1 打开
 * @method void setStatus(integer $Status) 设置0 关闭1 打开
 * @method integer getTriggerCount() 获取当日快照次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTriggerCount(integer $TriggerCount) 设置当日快照次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOpenCount() 获取当日打开监控次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOpenCount(integer $OpenCount) 设置当日打开监控次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUpdateCount() 获取当日修改监控范围次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateCount(integer $UpdateCount) 设置当日修改监控范围次数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeConfigRecorderResponse extends AbstractModel
{
    /**
     * @var array 用户监控资源列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Items;

    /**
     * @var integer 0 关闭1 打开
     */
    public $Status;

    /**
     * @var integer 当日快照次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TriggerCount;

    /**
     * @var integer 当日打开监控次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OpenCount;

    /**
     * @var integer 当日修改监控范围次数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateCount;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Items 用户监控资源列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 0 关闭1 打开
     * @param integer $TriggerCount 当日快照次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OpenCount 当日打开监控次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $UpdateCount 当日修改监控范围次数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
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
        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new UserConfigResource();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("TriggerCount",$param) and $param["TriggerCount"] !== null) {
            $this->TriggerCount = $param["TriggerCount"];
        }

        if (array_key_exists("OpenCount",$param) and $param["OpenCount"] !== null) {
            $this->OpenCount = $param["OpenCount"];
        }

        if (array_key_exists("UpdateCount",$param) and $param["UpdateCount"] !== null) {
            $this->UpdateCount = $param["UpdateCount"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
