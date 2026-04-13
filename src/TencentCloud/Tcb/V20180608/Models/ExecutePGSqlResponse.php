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
namespace TencentCloud\Tcb\V20180608\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExecutePGSql返回参数结构体
 *
 * @method integer getAffectedRows() 获取<p>影响行数</p>
 * @method void setAffectedRows(integer $AffectedRows) 设置<p>影响行数</p>
 * @method array getColumns() 获取<p>字段名列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setColumns(array $Columns) 设置<p>字段名列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getRows() 获取<p>数据行。每一行数据都是一个JSON串，将JSON进行反序列化将得到了每列的值。值可能是 null 或者 字符串，如果是 null 说明该列的值为 &lt;null&gt;，如果是字符串则为该列的值的字符串表示形式。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRows(array $Rows) 设置<p>数据行。每一行数据都是一个JSON串，将JSON进行反序列化将得到了每列的值。值可能是 null 或者 字符串，如果是 null 说明该列的值为 &lt;null&gt;，如果是字符串则为该列的值的字符串表示形式。</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getExecutionTimeMs() 获取<p>SQL执行耗时</p><p>单位：毫秒</p>
 * @method void setExecutionTimeMs(integer $ExecutionTimeMs) 设置<p>SQL执行耗时</p><p>单位：毫秒</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ExecutePGSqlResponse extends AbstractModel
{
    /**
     * @var integer <p>影响行数</p>
     */
    public $AffectedRows;

    /**
     * @var array <p>字段名列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Columns;

    /**
     * @var array <p>数据行。每一行数据都是一个JSON串，将JSON进行反序列化将得到了每列的值。值可能是 null 或者 字符串，如果是 null 说明该列的值为 &lt;null&gt;，如果是字符串则为该列的值的字符串表示形式。</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Rows;

    /**
     * @var integer <p>SQL执行耗时</p><p>单位：毫秒</p>
     */
    public $ExecutionTimeMs;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $AffectedRows <p>影响行数</p>
     * @param array $Columns <p>字段名列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Rows <p>数据行。每一行数据都是一个JSON串，将JSON进行反序列化将得到了每列的值。值可能是 null 或者 字符串，如果是 null 说明该列的值为 &lt;null&gt;，如果是字符串则为该列的值的字符串表示形式。</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ExecutionTimeMs <p>SQL执行耗时</p><p>单位：毫秒</p>
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
        if (array_key_exists("AffectedRows",$param) and $param["AffectedRows"] !== null) {
            $this->AffectedRows = $param["AffectedRows"];
        }

        if (array_key_exists("Columns",$param) and $param["Columns"] !== null) {
            $this->Columns = $param["Columns"];
        }

        if (array_key_exists("Rows",$param) and $param["Rows"] !== null) {
            $this->Rows = $param["Rows"];
        }

        if (array_key_exists("ExecutionTimeMs",$param) and $param["ExecutionTimeMs"] !== null) {
            $this->ExecutionTimeMs = $param["ExecutionTimeMs"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
