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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeMigrationDetail返回参数结构体
 *
 * @method string getJobId() 获取数据迁移任务ID
 * @method void setJobId(string $JobId) 设置数据迁移任务ID
 * @method string getJobName() 获取数据迁移任务名称
 * @method void setJobName(string $JobName) 设置数据迁移任务名称
 * @method string getCreateTime() 获取任务创建(提交)时间，格式为 yyyy-mm-dd hh:mm:ss
 * @method void setCreateTime(string $CreateTime) 设置任务创建(提交)时间，格式为 yyyy-mm-dd hh:mm:ss
 * @method string getUpdateTime() 获取任务更新时间，格式为 yyyy-mm-dd hh:mm:ss
 * @method void setUpdateTime(string $UpdateTime) 设置任务更新时间，格式为 yyyy-mm-dd hh:mm:ss
 * @method string getStartTime() 获取任务开始执行时间，格式为 yyyy-mm-dd hh:mm:ss
 * @method void setStartTime(string $StartTime) 设置任务开始执行时间，格式为 yyyy-mm-dd hh:mm:ss
 * @method string getEndTime() 获取任务执行结束时间，格式为 yyyy-mm-dd hh:mm:ss
 * @method void setEndTime(string $EndTime) 设置任务执行结束时间，格式为 yyyy-mm-dd hh:mm:ss
 * @method string getBriefMsg() 获取迁移任务简要错误信息
 * @method void setBriefMsg(string $BriefMsg) 设置迁移任务简要错误信息
 * @method string getStatus() 获取任务状态，取值为：created(创建完成)、checking(校验中)、checkPass(校验通过)、checkNotPass(校验不通过)、readyRun(准备运行)、running(任务运行中)、readyComplete(准备完成)、success(任务成功)、failed(任务失败)、stopping(中止中)、completing(完成中)、
pausing(暂停中)、
manualPaused(已暂停)
 * @method void setStatus(string $Status) 设置任务状态，取值为：created(创建完成)、checking(校验中)、checkPass(校验通过)、checkNotPass(校验不通过)、readyRun(准备运行)、running(任务运行中)、readyComplete(准备完成)、success(任务成功)、failed(任务失败)、stopping(中止中)、completing(完成中)、
pausing(暂停中)、
manualPaused(已暂停)
 * @method MigrateAction getAction() 获取任务操作信息
 * @method void setAction(MigrateAction $Action) 设置任务操作信息
 * @method MigrateDetailInfo getStepInfo() 获取迁移执行过程信息，在校验阶段显示校验过程步骤信息，在迁移阶段会显示迁移步骤信息
 * @method void setStepInfo(MigrateDetailInfo $StepInfo) 设置迁移执行过程信息，在校验阶段显示校验过程步骤信息，在迁移阶段会显示迁移步骤信息
 * @method DBEndpointInfo getSrcInfo() 获取源实例信息
 * @method void setSrcInfo(DBEndpointInfo $SrcInfo) 设置源实例信息
 * @method DBEndpointInfo getDstInfo() 获取目标端信息
 * @method void setDstInfo(DBEndpointInfo $DstInfo) 设置目标端信息
 * @method CompareTaskInfo getCompareTask() 获取数据一致性校验结果
 * @method void setCompareTask(CompareTaskInfo $CompareTask) 设置数据一致性校验结果
 * @method array getTags() 获取标签信息
 * @method void setTags(array $Tags) 设置标签信息
 * @method string getRunMode() 获取运行模式，取值如：immediate(表示立即运行)、timed(表示定时运行)
 * @method void setRunMode(string $RunMode) 设置运行模式，取值如：immediate(表示立即运行)、timed(表示定时运行)
 * @method string getExpectRunTime() 获取期待启动时间，当RunMode取值为timed时，此值必填，形如："2006-01-02 15:04:05"
 * @method void setExpectRunTime(string $ExpectRunTime) 设置期待启动时间，当RunMode取值为timed时，此值必填，形如："2006-01-02 15:04:05"
 * @method MigrateOption getMigrateOption() 获取迁移选项，描述任务如何执行迁移等一系列配置信息
 * @method void setMigrateOption(MigrateOption $MigrateOption) 设置迁移选项，描述任务如何执行迁移等一系列配置信息
 * @method CheckStepInfo getCheckStepInfo() 获取校验任务运行详情
 * @method void setCheckStepInfo(CheckStepInfo $CheckStepInfo) 设置校验任务运行详情
 * @method TradeInfo getTradeInfo() 获取描述计费相关的信息
 * @method void setTradeInfo(TradeInfo $TradeInfo) 设置描述计费相关的信息
 * @method array getErrorInfo() 获取任务错误信息
 * @method void setErrorInfo(array $ErrorInfo) 设置任务错误信息
 * @method string getDumperResumeCtrl() 获取全量导出可重入标识：enum::"yes"/"no"。yes表示当前任务可重入、no表示当前任务处于全量导出且不可重入阶段；如果在该值为no时重启任务导出流程不支持断点续传
 * @method void setDumperResumeCtrl(string $DumperResumeCtrl) 设置全量导出可重入标识：enum::"yes"/"no"。yes表示当前任务可重入、no表示当前任务处于全量导出且不可重入阶段；如果在该值为no时重启任务导出流程不支持断点续传
 * @method RateLimitOption getRateLimitOption() 获取任务的限速信息
 * @method void setRateLimitOption(RateLimitOption $RateLimitOption) 设置任务的限速信息
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeMigrationDetailResponse extends AbstractModel
{
    /**
     * @var string 数据迁移任务ID
     */
    public $JobId;

    /**
     * @var string 数据迁移任务名称
     */
    public $JobName;

    /**
     * @var string 任务创建(提交)时间，格式为 yyyy-mm-dd hh:mm:ss
     */
    public $CreateTime;

    /**
     * @var string 任务更新时间，格式为 yyyy-mm-dd hh:mm:ss
     */
    public $UpdateTime;

    /**
     * @var string 任务开始执行时间，格式为 yyyy-mm-dd hh:mm:ss
     */
    public $StartTime;

    /**
     * @var string 任务执行结束时间，格式为 yyyy-mm-dd hh:mm:ss
     */
    public $EndTime;

    /**
     * @var string 迁移任务简要错误信息
     */
    public $BriefMsg;

    /**
     * @var string 任务状态，取值为：created(创建完成)、checking(校验中)、checkPass(校验通过)、checkNotPass(校验不通过)、readyRun(准备运行)、running(任务运行中)、readyComplete(准备完成)、success(任务成功)、failed(任务失败)、stopping(中止中)、completing(完成中)、
pausing(暂停中)、
manualPaused(已暂停)
     */
    public $Status;

    /**
     * @var MigrateAction 任务操作信息
     */
    public $Action;

    /**
     * @var MigrateDetailInfo 迁移执行过程信息，在校验阶段显示校验过程步骤信息，在迁移阶段会显示迁移步骤信息
     */
    public $StepInfo;

    /**
     * @var DBEndpointInfo 源实例信息
     */
    public $SrcInfo;

    /**
     * @var DBEndpointInfo 目标端信息
     */
    public $DstInfo;

    /**
     * @var CompareTaskInfo 数据一致性校验结果
     */
    public $CompareTask;

    /**
     * @var array 标签信息
     */
    public $Tags;

    /**
     * @var string 运行模式，取值如：immediate(表示立即运行)、timed(表示定时运行)
     */
    public $RunMode;

    /**
     * @var string 期待启动时间，当RunMode取值为timed时，此值必填，形如："2006-01-02 15:04:05"
     */
    public $ExpectRunTime;

    /**
     * @var MigrateOption 迁移选项，描述任务如何执行迁移等一系列配置信息
     */
    public $MigrateOption;

    /**
     * @var CheckStepInfo 校验任务运行详情
     */
    public $CheckStepInfo;

    /**
     * @var TradeInfo 描述计费相关的信息
     */
    public $TradeInfo;

    /**
     * @var array 任务错误信息
     */
    public $ErrorInfo;

    /**
     * @var string 全量导出可重入标识：enum::"yes"/"no"。yes表示当前任务可重入、no表示当前任务处于全量导出且不可重入阶段；如果在该值为no时重启任务导出流程不支持断点续传
     */
    public $DumperResumeCtrl;

    /**
     * @var RateLimitOption 任务的限速信息
     */
    public $RateLimitOption;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $JobId 数据迁移任务ID
     * @param string $JobName 数据迁移任务名称
     * @param string $CreateTime 任务创建(提交)时间，格式为 yyyy-mm-dd hh:mm:ss
     * @param string $UpdateTime 任务更新时间，格式为 yyyy-mm-dd hh:mm:ss
     * @param string $StartTime 任务开始执行时间，格式为 yyyy-mm-dd hh:mm:ss
     * @param string $EndTime 任务执行结束时间，格式为 yyyy-mm-dd hh:mm:ss
     * @param string $BriefMsg 迁移任务简要错误信息
     * @param string $Status 任务状态，取值为：created(创建完成)、checking(校验中)、checkPass(校验通过)、checkNotPass(校验不通过)、readyRun(准备运行)、running(任务运行中)、readyComplete(准备完成)、success(任务成功)、failed(任务失败)、stopping(中止中)、completing(完成中)、
pausing(暂停中)、
manualPaused(已暂停)
     * @param MigrateAction $Action 任务操作信息
     * @param MigrateDetailInfo $StepInfo 迁移执行过程信息，在校验阶段显示校验过程步骤信息，在迁移阶段会显示迁移步骤信息
     * @param DBEndpointInfo $SrcInfo 源实例信息
     * @param DBEndpointInfo $DstInfo 目标端信息
     * @param CompareTaskInfo $CompareTask 数据一致性校验结果
     * @param array $Tags 标签信息
     * @param string $RunMode 运行模式，取值如：immediate(表示立即运行)、timed(表示定时运行)
     * @param string $ExpectRunTime 期待启动时间，当RunMode取值为timed时，此值必填，形如："2006-01-02 15:04:05"
     * @param MigrateOption $MigrateOption 迁移选项，描述任务如何执行迁移等一系列配置信息
     * @param CheckStepInfo $CheckStepInfo 校验任务运行详情
     * @param TradeInfo $TradeInfo 描述计费相关的信息
     * @param array $ErrorInfo 任务错误信息
     * @param string $DumperResumeCtrl 全量导出可重入标识：enum::"yes"/"no"。yes表示当前任务可重入、no表示当前任务处于全量导出且不可重入阶段；如果在该值为no时重启任务导出流程不支持断点续传
     * @param RateLimitOption $RateLimitOption 任务的限速信息
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
        if (array_key_exists("JobId",$param) and $param["JobId"] !== null) {
            $this->JobId = $param["JobId"];
        }

        if (array_key_exists("JobName",$param) and $param["JobName"] !== null) {
            $this->JobName = $param["JobName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("BriefMsg",$param) and $param["BriefMsg"] !== null) {
            $this->BriefMsg = $param["BriefMsg"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = new MigrateAction();
            $this->Action->deserialize($param["Action"]);
        }

        if (array_key_exists("StepInfo",$param) and $param["StepInfo"] !== null) {
            $this->StepInfo = new MigrateDetailInfo();
            $this->StepInfo->deserialize($param["StepInfo"]);
        }

        if (array_key_exists("SrcInfo",$param) and $param["SrcInfo"] !== null) {
            $this->SrcInfo = new DBEndpointInfo();
            $this->SrcInfo->deserialize($param["SrcInfo"]);
        }

        if (array_key_exists("DstInfo",$param) and $param["DstInfo"] !== null) {
            $this->DstInfo = new DBEndpointInfo();
            $this->DstInfo->deserialize($param["DstInfo"]);
        }

        if (array_key_exists("CompareTask",$param) and $param["CompareTask"] !== null) {
            $this->CompareTask = new CompareTaskInfo();
            $this->CompareTask->deserialize($param["CompareTask"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagItem();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("RunMode",$param) and $param["RunMode"] !== null) {
            $this->RunMode = $param["RunMode"];
        }

        if (array_key_exists("ExpectRunTime",$param) and $param["ExpectRunTime"] !== null) {
            $this->ExpectRunTime = $param["ExpectRunTime"];
        }

        if (array_key_exists("MigrateOption",$param) and $param["MigrateOption"] !== null) {
            $this->MigrateOption = new MigrateOption();
            $this->MigrateOption->deserialize($param["MigrateOption"]);
        }

        if (array_key_exists("CheckStepInfo",$param) and $param["CheckStepInfo"] !== null) {
            $this->CheckStepInfo = new CheckStepInfo();
            $this->CheckStepInfo->deserialize($param["CheckStepInfo"]);
        }

        if (array_key_exists("TradeInfo",$param) and $param["TradeInfo"] !== null) {
            $this->TradeInfo = new TradeInfo();
            $this->TradeInfo->deserialize($param["TradeInfo"]);
        }

        if (array_key_exists("ErrorInfo",$param) and $param["ErrorInfo"] !== null) {
            $this->ErrorInfo = [];
            foreach ($param["ErrorInfo"] as $key => $value){
                $obj = new ErrorInfoItem();
                $obj->deserialize($value);
                array_push($this->ErrorInfo, $obj);
            }
        }

        if (array_key_exists("DumperResumeCtrl",$param) and $param["DumperResumeCtrl"] !== null) {
            $this->DumperResumeCtrl = $param["DumperResumeCtrl"];
        }

        if (array_key_exists("RateLimitOption",$param) and $param["RateLimitOption"] !== null) {
            $this->RateLimitOption = new RateLimitOption();
            $this->RateLimitOption->deserialize($param["RateLimitOption"]);
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
