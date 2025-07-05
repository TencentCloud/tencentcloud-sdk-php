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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 更新异步任务进度
 *
 * @method string getRegion() 获取资源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRegion(string $Region) 设置资源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotalCount() 获取总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTotalCount(integer $TotalCount) 设置总数
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getOffsetCount() 获取执行完成数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOffsetCount(integer $OffsetCount) 设置执行完成数量
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取异步更新进度状态：0， 待处理， 1 已处理， 3 处理中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置异步更新进度状态：0， 待处理， 1 已处理， 3 处理中
注意：此字段可能返回 null，表示取不到有效值。
 */
class UpdateSyncProgressRegion extends AbstractModel
{
    /**
     * @var string 资源类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Region;

    /**
     * @var integer 总数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TotalCount;

    /**
     * @var integer 执行完成数量
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OffsetCount;

    /**
     * @var integer 异步更新进度状态：0， 待处理， 1 已处理， 3 处理中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @param string $Region 资源类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $TotalCount 总数
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $OffsetCount 执行完成数量
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 异步更新进度状态：0， 待处理， 1 已处理， 3 处理中
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
        if (array_key_exists("Region",$param) and $param["Region"] !== null) {
            $this->Region = $param["Region"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("OffsetCount",$param) and $param["OffsetCount"] !== null) {
            $this->OffsetCount = $param["OffsetCount"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }
    }
}
