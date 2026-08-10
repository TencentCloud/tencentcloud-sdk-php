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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeVulScanTaskDetail返回参数结构体
 *
 * @method array getList() 获取<p>任务详情列表</p>
 * @method void setList(array $List) 设置<p>任务详情列表</p>
 * @method integer getTotal() 获取<p>总数</p>
 * @method void setTotal(integer $Total) 设置<p>总数</p>
 * @method integer getVuls() 获取<p>漏洞数量</p>
 * @method void setVuls(integer $Vuls) 设置<p>漏洞数量</p>
 * @method integer getScanned() 获取<p>扫描数量</p>
 * @method void setScanned(integer $Scanned) 设置<p>扫描数量</p>
 * @method integer getRisk() 获取<p>风险数量</p>
 * @method void setRisk(integer $Risk) 设置<p>风险数量</p>
 * @method integer getFailed() 获取<p>失败数量</p>
 * @method void setFailed(integer $Failed) 设置<p>失败数量</p>
 * @method integer getProgress() 获取<p>扫描进度（0-100）</p>
 * @method void setProgress(integer $Progress) 设置<p>扫描进度（0-100）</p>
 * @method string getTaskPdf() 获取<p>任务pdf报告地址</p>
 * @method void setTaskPdf(string $TaskPdf) 设置<p>任务pdf报告地址</p>
 * @method string getTaskExcel() 获取<p>任务excel报告地址</p>
 * @method void setTaskExcel(string $TaskExcel) 设置<p>任务excel报告地址</p>
 * @method string getStartTime() 获取<p>任务开始时间，格式：2006-01-02T15:04:05+08:00</p>
 * @method void setStartTime(string $StartTime) 设置<p>任务开始时间，格式：2006-01-02T15:04:05+08:00</p>
 * @method string getEndTime() 获取<p>任务结束时间，格式：2006-01-02T15:04:05+08:00</p>
 * @method void setEndTime(string $EndTime) 设置<p>任务结束时间，格式：2006-01-02T15:04:05+08:00</p>
 * @method array getVulId() 获取<p>漏洞ID</p>
 * @method void setVulId(array $VulId) 设置<p>漏洞ID</p>
 * @method array getKbNo() 获取<p>KB编号</p>
 * @method void setKbNo(array $KbNo) 设置<p>KB编号</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeVulScanTaskDetailResponse extends AbstractModel
{
    /**
     * @var array <p>任务详情列表</p>
     */
    public $List;

    /**
     * @var integer <p>总数</p>
     */
    public $Total;

    /**
     * @var integer <p>漏洞数量</p>
     */
    public $Vuls;

    /**
     * @var integer <p>扫描数量</p>
     */
    public $Scanned;

    /**
     * @var integer <p>风险数量</p>
     */
    public $Risk;

    /**
     * @var integer <p>失败数量</p>
     */
    public $Failed;

    /**
     * @var integer <p>扫描进度（0-100）</p>
     */
    public $Progress;

    /**
     * @var string <p>任务pdf报告地址</p>
     */
    public $TaskPdf;

    /**
     * @var string <p>任务excel报告地址</p>
     */
    public $TaskExcel;

    /**
     * @var string <p>任务开始时间，格式：2006-01-02T15:04:05+08:00</p>
     */
    public $StartTime;

    /**
     * @var string <p>任务结束时间，格式：2006-01-02T15:04:05+08:00</p>
     */
    public $EndTime;

    /**
     * @var array <p>漏洞ID</p>
     */
    public $VulId;

    /**
     * @var array <p>KB编号</p>
     */
    public $KbNo;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $List <p>任务详情列表</p>
     * @param integer $Total <p>总数</p>
     * @param integer $Vuls <p>漏洞数量</p>
     * @param integer $Scanned <p>扫描数量</p>
     * @param integer $Risk <p>风险数量</p>
     * @param integer $Failed <p>失败数量</p>
     * @param integer $Progress <p>扫描进度（0-100）</p>
     * @param string $TaskPdf <p>任务pdf报告地址</p>
     * @param string $TaskExcel <p>任务excel报告地址</p>
     * @param string $StartTime <p>任务开始时间，格式：2006-01-02T15:04:05+08:00</p>
     * @param string $EndTime <p>任务结束时间，格式：2006-01-02T15:04:05+08:00</p>
     * @param array $VulId <p>漏洞ID</p>
     * @param array $KbNo <p>KB编号</p>
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
        if (array_key_exists("List",$param) and $param["List"] !== null) {
            $this->List = [];
            foreach ($param["List"] as $key => $value){
                $obj = new VulScanTaskDetail();
                $obj->deserialize($value);
                array_push($this->List, $obj);
            }
        }

        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Vuls",$param) and $param["Vuls"] !== null) {
            $this->Vuls = $param["Vuls"];
        }

        if (array_key_exists("Scanned",$param) and $param["Scanned"] !== null) {
            $this->Scanned = $param["Scanned"];
        }

        if (array_key_exists("Risk",$param) and $param["Risk"] !== null) {
            $this->Risk = $param["Risk"];
        }

        if (array_key_exists("Failed",$param) and $param["Failed"] !== null) {
            $this->Failed = $param["Failed"];
        }

        if (array_key_exists("Progress",$param) and $param["Progress"] !== null) {
            $this->Progress = $param["Progress"];
        }

        if (array_key_exists("TaskPdf",$param) and $param["TaskPdf"] !== null) {
            $this->TaskPdf = $param["TaskPdf"];
        }

        if (array_key_exists("TaskExcel",$param) and $param["TaskExcel"] !== null) {
            $this->TaskExcel = $param["TaskExcel"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("VulId",$param) and $param["VulId"] !== null) {
            $this->VulId = $param["VulId"];
        }

        if (array_key_exists("KbNo",$param) and $param["KbNo"] !== null) {
            $this->KbNo = $param["KbNo"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
