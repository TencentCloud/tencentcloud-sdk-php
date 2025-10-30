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
namespace TencentCloud\Ess\V20201111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeContractComparisonTask返回参数结构体
 *
 * @method string getTaskId() 获取合同对比任务ID。
 * @method void setTaskId(string $TaskId) 设置合同对比任务ID。
 * @method integer getStatus() 获取合同对比任务状态。
状态如下：
<ul><li> **0**：待创建（未执行）</li>
<li> **1**：对比中</li>
<li> **2**：对比成功</li>
<li> **3**：对比失败</li>
</ul>
 * @method void setStatus(integer $Status) 设置合同对比任务状态。
状态如下：
<ul><li> **0**：待创建（未执行）</li>
<li> **1**：对比中</li>
<li> **2**：对比成功</li>
<li> **3**：对比失败</li>
</ul>
 * @method string getMessage() 获取对比失败的具体原因描述，仅当状态为失败时返回此字段。
 * @method void setMessage(string $Message) 设置对比失败的具体原因描述，仅当状态为失败时返回此字段。
 * @method string getOriginalFileResourceId() 获取原版文件ID，对比基准的旧版本文件唯一标识。
 * @method void setOriginalFileResourceId(string $OriginalFileResourceId) 设置原版文件ID，对比基准的旧版本文件唯一标识。
 * @method string getDiffFileResourceId() 获取新版文件ID，与旧版进行对比的新版本文件唯一标识。
 * @method void setDiffFileResourceId(string $DiffFileResourceId) 设置新版文件ID，与旧版进行对比的新版本文件唯一标识。
 * @method string getComment() 获取对比任务备注，长度不能超过50个字符。
 * @method void setComment(string $Comment) 设置对比任务备注，长度不能超过50个字符。
 * @method integer getTotalDiffCount() 获取合同对比差异点总数。
 * @method void setTotalDiffCount(integer $TotalDiffCount) 设置合同对比差异点总数。
 * @method integer getAddDiffCount() 获取合同对比新增点数量。
 * @method void setAddDiffCount(integer $AddDiffCount) 设置合同对比新增点数量。
 * @method integer getChangeDiffCount() 获取合同对比修改点数量。
 * @method void setChangeDiffCount(integer $ChangeDiffCount) 设置合同对比修改点数量。
 * @method integer getDeleteDiffCount() 获取合同对比删除点数量。
 * @method void setDeleteDiffCount(integer $DeleteDiffCount) 设置合同对比删除点数量。
 * @method string getOperator() 获取提交人，提交此任务或请求的用户唯一标识。
 * @method void setOperator(string $Operator) 设置提交人，提交此任务或请求的用户唯一标识。
 * @method integer getCreateTime() 获取合同对比任务创建时间，时间戳。
 * @method void setCreateTime(integer $CreateTime) 设置合同对比任务创建时间，时间戳。
 * @method array getComparisonDetail() 获取对比差异详情，请求参数ShowDetail为true时返回。
 * @method void setComparisonDetail(array $ComparisonDetail) 设置对比差异详情，请求参数ShowDetail为true时返回。
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeContractComparisonTaskResponse extends AbstractModel
{
    /**
     * @var string 合同对比任务ID。
     */
    public $TaskId;

    /**
     * @var integer 合同对比任务状态。
状态如下：
<ul><li> **0**：待创建（未执行）</li>
<li> **1**：对比中</li>
<li> **2**：对比成功</li>
<li> **3**：对比失败</li>
</ul>
     */
    public $Status;

    /**
     * @var string 对比失败的具体原因描述，仅当状态为失败时返回此字段。
     */
    public $Message;

    /**
     * @var string 原版文件ID，对比基准的旧版本文件唯一标识。
     */
    public $OriginalFileResourceId;

    /**
     * @var string 新版文件ID，与旧版进行对比的新版本文件唯一标识。
     */
    public $DiffFileResourceId;

    /**
     * @var string 对比任务备注，长度不能超过50个字符。
     */
    public $Comment;

    /**
     * @var integer 合同对比差异点总数。
     */
    public $TotalDiffCount;

    /**
     * @var integer 合同对比新增点数量。
     */
    public $AddDiffCount;

    /**
     * @var integer 合同对比修改点数量。
     */
    public $ChangeDiffCount;

    /**
     * @var integer 合同对比删除点数量。
     */
    public $DeleteDiffCount;

    /**
     * @var string 提交人，提交此任务或请求的用户唯一标识。
     */
    public $Operator;

    /**
     * @var integer 合同对比任务创建时间，时间戳。
     */
    public $CreateTime;

    /**
     * @var array 对比差异详情，请求参数ShowDetail为true时返回。
     */
    public $ComparisonDetail;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $TaskId 合同对比任务ID。
     * @param integer $Status 合同对比任务状态。
状态如下：
<ul><li> **0**：待创建（未执行）</li>
<li> **1**：对比中</li>
<li> **2**：对比成功</li>
<li> **3**：对比失败</li>
</ul>
     * @param string $Message 对比失败的具体原因描述，仅当状态为失败时返回此字段。
     * @param string $OriginalFileResourceId 原版文件ID，对比基准的旧版本文件唯一标识。
     * @param string $DiffFileResourceId 新版文件ID，与旧版进行对比的新版本文件唯一标识。
     * @param string $Comment 对比任务备注，长度不能超过50个字符。
     * @param integer $TotalDiffCount 合同对比差异点总数。
     * @param integer $AddDiffCount 合同对比新增点数量。
     * @param integer $ChangeDiffCount 合同对比修改点数量。
     * @param integer $DeleteDiffCount 合同对比删除点数量。
     * @param string $Operator 提交人，提交此任务或请求的用户唯一标识。
     * @param integer $CreateTime 合同对比任务创建时间，时间戳。
     * @param array $ComparisonDetail 对比差异详情，请求参数ShowDetail为true时返回。
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("OriginalFileResourceId",$param) and $param["OriginalFileResourceId"] !== null) {
            $this->OriginalFileResourceId = $param["OriginalFileResourceId"];
        }

        if (array_key_exists("DiffFileResourceId",$param) and $param["DiffFileResourceId"] !== null) {
            $this->DiffFileResourceId = $param["DiffFileResourceId"];
        }

        if (array_key_exists("Comment",$param) and $param["Comment"] !== null) {
            $this->Comment = $param["Comment"];
        }

        if (array_key_exists("TotalDiffCount",$param) and $param["TotalDiffCount"] !== null) {
            $this->TotalDiffCount = $param["TotalDiffCount"];
        }

        if (array_key_exists("AddDiffCount",$param) and $param["AddDiffCount"] !== null) {
            $this->AddDiffCount = $param["AddDiffCount"];
        }

        if (array_key_exists("ChangeDiffCount",$param) and $param["ChangeDiffCount"] !== null) {
            $this->ChangeDiffCount = $param["ChangeDiffCount"];
        }

        if (array_key_exists("DeleteDiffCount",$param) and $param["DeleteDiffCount"] !== null) {
            $this->DeleteDiffCount = $param["DeleteDiffCount"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ComparisonDetail",$param) and $param["ComparisonDetail"] !== null) {
            $this->ComparisonDetail = [];
            foreach ($param["ComparisonDetail"] as $key => $value){
                $obj = new ComparisonDetail();
                $obj->deserialize($value);
                array_push($this->ComparisonDetail, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
