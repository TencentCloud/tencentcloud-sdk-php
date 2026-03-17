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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTableContentPreview返回参数结构体
 *
 * @method array getColumnNames() 获取表的列名列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumnNames(array $ColumnNames) 设置表的列名列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTableRecordSet() 获取表的行数据列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTableRecordSet(array $TableRecordSet) 设置表的行数据列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getTaskId() 获取异步预览任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTaskId(string $TaskId) 设置异步预览任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAsyncState() 获取异步预览结果状态: 0 初始化， 1 执行中， 2 执行成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAsyncState(integer $AsyncState) 设置异步预览结果状态: 0 初始化， 1 执行中， 2 执行成功
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeTableContentPreviewResponse extends AbstractModel
{
    /**
     * @var array 表的列名列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ColumnNames;

    /**
     * @var array 表的行数据列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TableRecordSet;

    /**
     * @var string 异步预览任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TaskId;

    /**
     * @var integer 异步预览结果状态: 0 初始化， 1 执行中， 2 执行成功
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AsyncState;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $ColumnNames 表的列名列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TableRecordSet 表的行数据列表
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $TaskId 异步预览任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AsyncState 异步预览结果状态: 0 初始化， 1 执行中， 2 执行成功
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
        if (array_key_exists("ColumnNames",$param) and $param["ColumnNames"] !== null) {
            $this->ColumnNames = $param["ColumnNames"];
        }

        if (array_key_exists("TableRecordSet",$param) and $param["TableRecordSet"] !== null) {
            $this->TableRecordSet = [];
            foreach ($param["TableRecordSet"] as $key => $value){
                $obj = new TableRecord();
                $obj->deserialize($value);
                array_push($this->TableRecordSet, $obj);
            }
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("AsyncState",$param) and $param["AsyncState"] !== null) {
            $this->AsyncState = $param["AsyncState"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
