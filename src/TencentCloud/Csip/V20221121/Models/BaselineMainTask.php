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
 * 基线扫描主任务，对应一次“一键扫描/周期扫描/分散扫描”动作。
 *
 * @method string getJobID() 获取<p>主任务对应的全局任务 ID。</p>
 * @method void setJobID(string $JobID) 设置<p>主任务对应的全局任务 ID。</p>
 * @method integer getID() 获取<p>主任务 ID。</p>
 * @method void setID(integer $ID) 设置<p>主任务 ID。</p>
 * @method string getStatus() 获取<p>主任务状态。取值：</p><ul><li>INIT：初始化</li><li>SUBTASK_CREATING：子任务创建中</li><li>SCANNING：扫描中</li><li>TIMEOUT：超时</li><li>USER_CANCELED：用户取消</li><li>ALL_FAILED：全部失败</li><li>SUCCESS：成功</li></ul>
 * @method void setStatus(string $Status) 设置<p>主任务状态。取值：</p><ul><li>INIT：初始化</li><li>SUBTASK_CREATING：子任务创建中</li><li>SCANNING：扫描中</li><li>TIMEOUT：超时</li><li>USER_CANCELED：用户取消</li><li>ALL_FAILED：全部失败</li><li>SUCCESS：成功</li></ul>
 * @method integer getAppid() 获取<p>主任务所属租户 Appid。</p>
 * @method void setAppid(integer $Appid) 设置<p>主任务所属租户 Appid。</p>
 * @method string getTaskType() 获取<p>主任务类型。取值：</p><ul><li>ONE_SHOT：一键策略扫描（手动触发）</li><li>PERIODIC：周期扫描（按 CycleScanConf 自动触发）</li><li>OTHER：其他分散扫描（资产维度等触发）</li></ul>
 * @method void setTaskType(string $TaskType) 设置<p>主任务类型。取值：</p><ul><li>ONE_SHOT：一键策略扫描（手动触发）</li><li>PERIODIC：周期扫描（按 CycleScanConf 自动触发）</li><li>OTHER：其他分散扫描（资产维度等触发）</li></ul>
 * @method string getStartTime() 获取<p>主任务开始执行时间。</p>
 * @method void setStartTime(string $StartTime) 设置<p>主任务开始执行时间。</p>
 * @method string getFinishTime() 获取<p>主任务结束时间，未结束时为空。</p>
 * @method void setFinishTime(string $FinishTime) 设置<p>主任务结束时间，未结束时为空。</p>
 * @method string getCheckAssetType() 获取<p>检测资产大类，区分主机基线与容器集群基线。取值：</p><ul><li>HOST：主机</li><li>CLUSTER：容器集群</li></ul>
 * @method void setCheckAssetType(string $CheckAssetType) 设置<p>检测资产大类，区分主机基线与容器集群基线。取值：</p><ul><li>HOST：主机</li><li>CLUSTER：容器集群</li></ul>
 * @method string getErrCode() 获取<p>失败错误码，成功时为空。</p>
 * @method void setErrCode(string $ErrCode) 设置<p>失败错误码，成功时为空。</p>
 * @method string getErrMessage() 获取<p>失败原因，成功时为空。</p>
 * @method void setErrMessage(string $ErrMessage) 设置<p>失败原因，成功时为空。</p>
 * @method string getSolution() 获取<p>解决方案（根据 ErrCode 映射，成功时为空）</p>
 * @method void setSolution(string $Solution) 设置<p>解决方案（根据 ErrCode 映射，成功时为空）</p>
 * @method integer getScanSuccessCount() 获取<p>扫描成功的资产数量。</p>
 * @method void setScanSuccessCount(integer $ScanSuccessCount) 设置<p>扫描成功的资产数量。</p>
 * @method integer getScanFailedCount() 获取<p>扫描失败的资产数量。</p>
 * @method void setScanFailedCount(integer $ScanFailedCount) 设置<p>扫描失败的资产数量。</p>
 * @method integer getScanTotalCount() 获取<p>子任务总数</p>
 * @method void setScanTotalCount(integer $ScanTotalCount) 设置<p>子任务总数</p>
 */
class BaselineMainTask extends AbstractModel
{
    /**
     * @var string <p>主任务对应的全局任务 ID。</p>
     */
    public $JobID;

    /**
     * @var integer <p>主任务 ID。</p>
     */
    public $ID;

    /**
     * @var string <p>主任务状态。取值：</p><ul><li>INIT：初始化</li><li>SUBTASK_CREATING：子任务创建中</li><li>SCANNING：扫描中</li><li>TIMEOUT：超时</li><li>USER_CANCELED：用户取消</li><li>ALL_FAILED：全部失败</li><li>SUCCESS：成功</li></ul>
     */
    public $Status;

    /**
     * @var integer <p>主任务所属租户 Appid。</p>
     */
    public $Appid;

    /**
     * @var string <p>主任务类型。取值：</p><ul><li>ONE_SHOT：一键策略扫描（手动触发）</li><li>PERIODIC：周期扫描（按 CycleScanConf 自动触发）</li><li>OTHER：其他分散扫描（资产维度等触发）</li></ul>
     */
    public $TaskType;

    /**
     * @var string <p>主任务开始执行时间。</p>
     */
    public $StartTime;

    /**
     * @var string <p>主任务结束时间，未结束时为空。</p>
     */
    public $FinishTime;

    /**
     * @var string <p>检测资产大类，区分主机基线与容器集群基线。取值：</p><ul><li>HOST：主机</li><li>CLUSTER：容器集群</li></ul>
     */
    public $CheckAssetType;

    /**
     * @var string <p>失败错误码，成功时为空。</p>
     */
    public $ErrCode;

    /**
     * @var string <p>失败原因，成功时为空。</p>
     */
    public $ErrMessage;

    /**
     * @var string <p>解决方案（根据 ErrCode 映射，成功时为空）</p>
     */
    public $Solution;

    /**
     * @var integer <p>扫描成功的资产数量。</p>
     */
    public $ScanSuccessCount;

    /**
     * @var integer <p>扫描失败的资产数量。</p>
     */
    public $ScanFailedCount;

    /**
     * @var integer <p>子任务总数</p>
     */
    public $ScanTotalCount;

    /**
     * @param string $JobID <p>主任务对应的全局任务 ID。</p>
     * @param integer $ID <p>主任务 ID。</p>
     * @param string $Status <p>主任务状态。取值：</p><ul><li>INIT：初始化</li><li>SUBTASK_CREATING：子任务创建中</li><li>SCANNING：扫描中</li><li>TIMEOUT：超时</li><li>USER_CANCELED：用户取消</li><li>ALL_FAILED：全部失败</li><li>SUCCESS：成功</li></ul>
     * @param integer $Appid <p>主任务所属租户 Appid。</p>
     * @param string $TaskType <p>主任务类型。取值：</p><ul><li>ONE_SHOT：一键策略扫描（手动触发）</li><li>PERIODIC：周期扫描（按 CycleScanConf 自动触发）</li><li>OTHER：其他分散扫描（资产维度等触发）</li></ul>
     * @param string $StartTime <p>主任务开始执行时间。</p>
     * @param string $FinishTime <p>主任务结束时间，未结束时为空。</p>
     * @param string $CheckAssetType <p>检测资产大类，区分主机基线与容器集群基线。取值：</p><ul><li>HOST：主机</li><li>CLUSTER：容器集群</li></ul>
     * @param string $ErrCode <p>失败错误码，成功时为空。</p>
     * @param string $ErrMessage <p>失败原因，成功时为空。</p>
     * @param string $Solution <p>解决方案（根据 ErrCode 映射，成功时为空）</p>
     * @param integer $ScanSuccessCount <p>扫描成功的资产数量。</p>
     * @param integer $ScanFailedCount <p>扫描失败的资产数量。</p>
     * @param integer $ScanTotalCount <p>子任务总数</p>
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
        if (array_key_exists("JobID",$param) and $param["JobID"] !== null) {
            $this->JobID = $param["JobID"];
        }

        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Appid",$param) and $param["Appid"] !== null) {
            $this->Appid = $param["Appid"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("FinishTime",$param) and $param["FinishTime"] !== null) {
            $this->FinishTime = $param["FinishTime"];
        }

        if (array_key_exists("CheckAssetType",$param) and $param["CheckAssetType"] !== null) {
            $this->CheckAssetType = $param["CheckAssetType"];
        }

        if (array_key_exists("ErrCode",$param) and $param["ErrCode"] !== null) {
            $this->ErrCode = $param["ErrCode"];
        }

        if (array_key_exists("ErrMessage",$param) and $param["ErrMessage"] !== null) {
            $this->ErrMessage = $param["ErrMessage"];
        }

        if (array_key_exists("Solution",$param) and $param["Solution"] !== null) {
            $this->Solution = $param["Solution"];
        }

        if (array_key_exists("ScanSuccessCount",$param) and $param["ScanSuccessCount"] !== null) {
            $this->ScanSuccessCount = $param["ScanSuccessCount"];
        }

        if (array_key_exists("ScanFailedCount",$param) and $param["ScanFailedCount"] !== null) {
            $this->ScanFailedCount = $param["ScanFailedCount"];
        }

        if (array_key_exists("ScanTotalCount",$param) and $param["ScanTotalCount"] !== null) {
            $this->ScanTotalCount = $param["ScanTotalCount"];
        }
    }
}
