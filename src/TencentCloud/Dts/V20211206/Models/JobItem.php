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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 迁移任务列表
 *
 * @method string getJobId() 获取<p>数据迁移任务ID</p>
 * @method void setJobId(string $JobId) 设置<p>数据迁移任务ID</p>
 * @method string getJobName() 获取<p>数据迁移任务名称</p>
 * @method void setJobName(string $JobName) 设置<p>数据迁移任务名称</p>
 * @method string getCreateTime() 获取<p>任务创建(提交)时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>任务创建(提交)时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
 * @method string getUpdateTime() 获取<p>任务更新时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>任务更新时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
 * @method string getStartTime() 获取<p>任务开始执行时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
 * @method void setStartTime(string $StartTime) 设置<p>任务开始执行时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
 * @method string getEndTime() 获取<p>任务执行结束时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
 * @method void setEndTime(string $EndTime) 设置<p>任务执行结束时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
 * @method string getBriefMsg() 获取<p>迁移任务错误信息</p>
 * @method void setBriefMsg(string $BriefMsg) 设置<p>迁移任务错误信息</p>
 * @method string getStatus() 获取<p>任务状态，取值为：creating(创建中)、created(创建完成)、checking(校验中)、checkPass(校验通过)、checkNotPass(校验不通过)、readyRun(准备运行)、running(任务运行)、readyComplete(准备完成)、success(任务成功)、failed(任务失败)、stopping(终止中)、completing(完成中)、pausing(暂停中)、manualPaused(已暂停)、resumableErr(可重试错误)、resuming(重试中)、unknown(未知状态)、error(任务错误)、canceled(已取消)</p>
 * @method void setStatus(string $Status) 设置<p>任务状态，取值为：creating(创建中)、created(创建完成)、checking(校验中)、checkPass(校验通过)、checkNotPass(校验不通过)、readyRun(准备运行)、running(任务运行)、readyComplete(准备完成)、success(任务成功)、failed(任务失败)、stopping(终止中)、completing(完成中)、pausing(暂停中)、manualPaused(已暂停)、resumableErr(可重试错误)、resuming(重试中)、unknown(未知状态)、error(任务错误)、canceled(已取消)</p>
 * @method string getRunMode() 获取<p>任务运行模式，值包括：immediate(立即运行)，timed(定时运行)</p>
 * @method void setRunMode(string $RunMode) 设置<p>任务运行模式，值包括：immediate(立即运行)，timed(定时运行)</p>
 * @method string getExpectRunTime() 获取<p>期待启动时间，当 <code>RunMode</code> 取值为 <code>timed</code> 时此值必填。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
 * @method void setExpectRunTime(string $ExpectRunTime) 设置<p>期待启动时间，当 <code>RunMode</code> 取值为 <code>timed</code> 时此值必填。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
 * @method MigrateAction getAction() 获取<p>任务操作信息</p>
 * @method void setAction(MigrateAction $Action) 设置<p>任务操作信息</p>
 * @method MigrateDetailInfo getStepInfo() 获取<p>迁移执行过程信息</p>
 * @method void setStepInfo(MigrateDetailInfo $StepInfo) 设置<p>迁移执行过程信息</p>
 * @method DBEndpointInfo getSrcInfo() 获取<p>源实例信息</p>
 * @method void setSrcInfo(DBEndpointInfo $SrcInfo) 设置<p>源实例信息</p>
 * @method DBEndpointInfo getDstInfo() 获取<p>目标端信息</p>
 * @method void setDstInfo(DBEndpointInfo $DstInfo) 设置<p>目标端信息</p>
 * @method CompareTaskInfo getCompareTask() 获取<p>数据一致性校验结果</p>
 * @method void setCompareTask(CompareTaskInfo $CompareTask) 设置<p>数据一致性校验结果</p>
 * @method TradeInfo getTradeInfo() 获取<p>计费状态信息</p>
 * @method void setTradeInfo(TradeInfo $TradeInfo) 设置<p>计费状态信息</p>
 * @method array getTags() 获取<p>标签信息</p>
 * @method void setTags(array $Tags) 设置<p>标签信息</p>
 * @method integer getAutoRetryTimeRangeMinutes() 获取<p>自动重试时间段信息</p>
 * @method void setAutoRetryTimeRangeMinutes(integer $AutoRetryTimeRangeMinutes) 设置<p>自动重试时间段信息</p>
 * @method string getDumperResumeCtrl() 获取<p>全量导出可重入标识：enum::&quot;yes&quot;/&quot;no&quot;。yes表示当前任务可重入、no表示当前任务处于全量导出且不可重入阶段；如果在该值为no时重启任务导出流程不支持断点续传</p>
 * @method void setDumperResumeCtrl(string $DumperResumeCtrl) 设置<p>全量导出可重入标识：enum::&quot;yes&quot;/&quot;no&quot;。yes表示当前任务可重入、no表示当前任务处于全量导出且不可重入阶段；如果在该值为no时重启任务导出流程不支持断点续传</p>
 */
class JobItem extends AbstractModel
{
    /**
     * @var string <p>数据迁移任务ID</p>
     */
    public $JobId;

    /**
     * @var string <p>数据迁移任务名称</p>
     */
    public $JobName;

    /**
     * @var string <p>任务创建(提交)时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
     */
    public $CreateTime;

    /**
     * @var string <p>任务更新时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
     */
    public $UpdateTime;

    /**
     * @var string <p>任务开始执行时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
     */
    public $StartTime;

    /**
     * @var string <p>任务执行结束时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
     */
    public $EndTime;

    /**
     * @var string <p>迁移任务错误信息</p>
     */
    public $BriefMsg;

    /**
     * @var string <p>任务状态，取值为：creating(创建中)、created(创建完成)、checking(校验中)、checkPass(校验通过)、checkNotPass(校验不通过)、readyRun(准备运行)、running(任务运行)、readyComplete(准备完成)、success(任务成功)、failed(任务失败)、stopping(终止中)、completing(完成中)、pausing(暂停中)、manualPaused(已暂停)、resumableErr(可重试错误)、resuming(重试中)、unknown(未知状态)、error(任务错误)、canceled(已取消)</p>
     */
    public $Status;

    /**
     * @var string <p>任务运行模式，值包括：immediate(立即运行)，timed(定时运行)</p>
     */
    public $RunMode;

    /**
     * @var string <p>期待启动时间，当 <code>RunMode</code> 取值为 <code>timed</code> 时此值必填。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
     */
    public $ExpectRunTime;

    /**
     * @var MigrateAction <p>任务操作信息</p>
     */
    public $Action;

    /**
     * @var MigrateDetailInfo <p>迁移执行过程信息</p>
     */
    public $StepInfo;

    /**
     * @var DBEndpointInfo <p>源实例信息</p>
     */
    public $SrcInfo;

    /**
     * @var DBEndpointInfo <p>目标端信息</p>
     */
    public $DstInfo;

    /**
     * @var CompareTaskInfo <p>数据一致性校验结果</p>
     */
    public $CompareTask;

    /**
     * @var TradeInfo <p>计费状态信息</p>
     */
    public $TradeInfo;

    /**
     * @var array <p>标签信息</p>
     */
    public $Tags;

    /**
     * @var integer <p>自动重试时间段信息</p>
     */
    public $AutoRetryTimeRangeMinutes;

    /**
     * @var string <p>全量导出可重入标识：enum::&quot;yes&quot;/&quot;no&quot;。yes表示当前任务可重入、no表示当前任务处于全量导出且不可重入阶段；如果在该值为no时重启任务导出流程不支持断点续传</p>
     */
    public $DumperResumeCtrl;

    /**
     * @param string $JobId <p>数据迁移任务ID</p>
     * @param string $JobName <p>数据迁移任务名称</p>
     * @param string $CreateTime <p>任务创建(提交)时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
     * @param string $UpdateTime <p>任务更新时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
     * @param string $StartTime <p>任务开始执行时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
     * @param string $EndTime <p>任务执行结束时间。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
     * @param string $BriefMsg <p>迁移任务错误信息</p>
     * @param string $Status <p>任务状态，取值为：creating(创建中)、created(创建完成)、checking(校验中)、checkPass(校验通过)、checkNotPass(校验不通过)、readyRun(准备运行)、running(任务运行)、readyComplete(准备完成)、success(任务成功)、failed(任务失败)、stopping(终止中)、completing(完成中)、pausing(暂停中)、manualPaused(已暂停)、resumableErr(可重试错误)、resuming(重试中)、unknown(未知状态)、error(任务错误)、canceled(已取消)</p>
     * @param string $RunMode <p>任务运行模式，值包括：immediate(立即运行)，timed(定时运行)</p>
     * @param string $ExpectRunTime <p>期待启动时间，当 <code>RunMode</code> 取值为 <code>timed</code> 时此值必填。当 <code>DateTimeISOFormat=true</code> 时返回 RFC 3339 格式（如 <code>2026-04-23T20:21:35+08:00</code>），否则返回 <code>yyyy-mm-dd hh:mm:ss</code>（北京时间）</p>
     * @param MigrateAction $Action <p>任务操作信息</p>
     * @param MigrateDetailInfo $StepInfo <p>迁移执行过程信息</p>
     * @param DBEndpointInfo $SrcInfo <p>源实例信息</p>
     * @param DBEndpointInfo $DstInfo <p>目标端信息</p>
     * @param CompareTaskInfo $CompareTask <p>数据一致性校验结果</p>
     * @param TradeInfo $TradeInfo <p>计费状态信息</p>
     * @param array $Tags <p>标签信息</p>
     * @param integer $AutoRetryTimeRangeMinutes <p>自动重试时间段信息</p>
     * @param string $DumperResumeCtrl <p>全量导出可重入标识：enum::&quot;yes&quot;/&quot;no&quot;。yes表示当前任务可重入、no表示当前任务处于全量导出且不可重入阶段；如果在该值为no时重启任务导出流程不支持断点续传</p>
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

        if (array_key_exists("RunMode",$param) and $param["RunMode"] !== null) {
            $this->RunMode = $param["RunMode"];
        }

        if (array_key_exists("ExpectRunTime",$param) and $param["ExpectRunTime"] !== null) {
            $this->ExpectRunTime = $param["ExpectRunTime"];
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

        if (array_key_exists("TradeInfo",$param) and $param["TradeInfo"] !== null) {
            $this->TradeInfo = new TradeInfo();
            $this->TradeInfo->deserialize($param["TradeInfo"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagItem();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("AutoRetryTimeRangeMinutes",$param) and $param["AutoRetryTimeRangeMinutes"] !== null) {
            $this->AutoRetryTimeRangeMinutes = $param["AutoRetryTimeRangeMinutes"];
        }

        if (array_key_exists("DumperResumeCtrl",$param) and $param["DumperResumeCtrl"] !== null) {
            $this->DumperResumeCtrl = $param["DumperResumeCtrl"];
        }
    }
}
