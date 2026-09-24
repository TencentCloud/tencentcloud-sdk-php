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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeJobResult返回参数结构体
 *
 * @method integer getTotal() 获取<p>总记录数.</p>
 * @method void setTotal(integer $Total) 设置<p>总记录数.</p>
 * @method string getJobId() 获取<p>作业 ID。</p>
 * @method void setJobId(string $JobId) 设置<p>作业 ID。</p>
 * @method string getState() 获取<p>结果状态（对客）：SUCCEEDED（结果集可用，含 0 行——DDL/DML 等无结果集语句亦归入此类，message 说明）/ UNAVAILABLE（终态无结果：statement 已失败或取消）/ ERROR（结果集拉取出错）/ NOT_READY（结果未就绪）/ NOT_SUPPORTED（作业形态不产出结果集）。</p>
 * @method void setState(string $State) 设置<p>结果状态（对客）：SUCCEEDED（结果集可用，含 0 行——DDL/DML 等无结果集语句亦归入此类，message 说明）/ UNAVAILABLE（终态无结果：statement 已失败或取消）/ ERROR（结果集拉取出错）/ NOT_READY（结果未就绪）/ NOT_SUPPORTED（作业形态不产出结果集）。</p>
 * @method string getMessage() 获取<p>状态描述（SUCCEEDED 0 行时为无结果集说明；ERROR 为错误信息；UNAVAILABLE 为 statement 失败/取消原因）。</p>
 * @method void setMessage(string $Message) 设置<p>状态描述（SUCCEEDED 0 行时为无结果集说明；ERROR 为错误信息；UNAVAILABLE 为 statement 失败/取消原因）。</p>
 * @method array getColumns() 获取<p>列定义列表（按结果集列顺序；State=SUCCEEDED 才有）。</p>
 * @method void setColumns(array $Columns) 设置<p>列定义列表（按结果集列顺序；State=SUCCEEDED 才有）。</p>
 * @method integer getTotalRows() 获取<p>结果集全量行数（未按在线展示上限封顶）。Total 为在线可见行数，二者不等说明仅部分行可内联查看，完整结果通过 Download 获取。</p>
 * @method void setTotalRows(integer $TotalRows) 设置<p>结果集全量行数（未按在线展示上限封顶）。Total 为在线可见行数，二者不等说明仅部分行可内联查看，完整结果通过 Download 获取。</p>
 * @method array getRows() 获取<p>行数据（State=SUCCEEDED 才有），每行为 {"Values": [单元格值...]} 数组。</p>
 * @method void setRows(array $Rows) 设置<p>行数据（State=SUCCEEDED 才有），每行为 {"Values": [单元格值...]} 数组。</p>
 * @method boolean getTruncated() 获取<p>本页内容是否因响应大小限制被截断（单元格/行超限，结果集仅 1 行时也可能触发）。行数超过在线展示上限不由本标记表达，以 TotalRows > Total 判断，完整结果通过 Download 获取.</p>
 * @method void setTruncated(boolean $Truncated) 设置<p>本页内容是否因响应大小限制被截断（单元格/行超限，结果集仅 1 行时也可能触发）。行数超过在线展示上限不由本标记表达，以 TotalRows > Total 判断，完整结果通过 Download 获取.</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeJobResultResponse extends AbstractModel
{
    /**
     * @var integer <p>总记录数.</p>
     */
    public $Total;

    /**
     * @var string <p>作业 ID。</p>
     */
    public $JobId;

    /**
     * @var string <p>结果状态（对客）：SUCCEEDED（结果集可用，含 0 行——DDL/DML 等无结果集语句亦归入此类，message 说明）/ UNAVAILABLE（终态无结果：statement 已失败或取消）/ ERROR（结果集拉取出错）/ NOT_READY（结果未就绪）/ NOT_SUPPORTED（作业形态不产出结果集）。</p>
     */
    public $State;

    /**
     * @var string <p>状态描述（SUCCEEDED 0 行时为无结果集说明；ERROR 为错误信息；UNAVAILABLE 为 statement 失败/取消原因）。</p>
     */
    public $Message;

    /**
     * @var array <p>列定义列表（按结果集列顺序；State=SUCCEEDED 才有）。</p>
     */
    public $Columns;

    /**
     * @var integer <p>结果集全量行数（未按在线展示上限封顶）。Total 为在线可见行数，二者不等说明仅部分行可内联查看，完整结果通过 Download 获取。</p>
     */
    public $TotalRows;

    /**
     * @var array <p>行数据（State=SUCCEEDED 才有），每行为 {"Values": [单元格值...]} 数组。</p>
     */
    public $Rows;

    /**
     * @var boolean <p>本页内容是否因响应大小限制被截断（单元格/行超限，结果集仅 1 行时也可能触发）。行数超过在线展示上限不由本标记表达，以 TotalRows > Total 判断，完整结果通过 Download 获取.</p>
     */
    public $Truncated;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Total <p>总记录数.</p>
     * @param string $JobId <p>作业 ID。</p>
     * @param string $State <p>结果状态（对客）：SUCCEEDED（结果集可用，含 0 行——DDL/DML 等无结果集语句亦归入此类，message 说明）/ UNAVAILABLE（终态无结果：statement 已失败或取消）/ ERROR（结果集拉取出错）/ NOT_READY（结果未就绪）/ NOT_SUPPORTED（作业形态不产出结果集）。</p>
     * @param string $Message <p>状态描述（SUCCEEDED 0 行时为无结果集说明；ERROR 为错误信息；UNAVAILABLE 为 statement 失败/取消原因）。</p>
     * @param array $Columns <p>列定义列表（按结果集列顺序；State=SUCCEEDED 才有）。</p>
     * @param integer $TotalRows <p>结果集全量行数（未按在线展示上限封顶）。Total 为在线可见行数，二者不等说明仅部分行可内联查看，完整结果通过 Download 获取。</p>
     * @param array $Rows <p>行数据（State=SUCCEEDED 才有），每行为 {"Values": [单元格值...]} 数组。</p>
     * @param boolean $Truncated <p>本页内容是否因响应大小限制被截断（单元格/行超限，结果集仅 1 行时也可能触发）。行数超过在线展示上限不由本标记表达，以 TotalRows > Total 判断，完整结果通过 Download 获取.</p>
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Columns",$param) and $param["Columns"] !== null) {
            $this->Columns = [];
            foreach ($param["Columns"] as $key => $value){
                $obj = new ResultColumn();
                $obj->deserialize($value);
                array_push($this->Columns, $obj);
            }
        }

        if (array_key_exists("TotalRows",$param) and $param["TotalRows"] !== null) {
            $this->TotalRows = $param["TotalRows"];
        }

        if (array_key_exists("Rows",$param) and $param["Rows"] !== null) {
            $this->Rows = [];
            foreach ($param["Rows"] as $key => $value){
                $obj = new ResultRow();
                $obj->deserialize($value);
                array_push($this->Rows, $obj);
            }
        }

        if (array_key_exists("Truncated",$param) and $param["Truncated"] !== null) {
            $this->Truncated = $param["Truncated"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
