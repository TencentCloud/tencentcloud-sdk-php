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
namespace TencentCloud\Ses\V20201002\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 发送任务数据
 *
 * @method integer getTaskId() 获取任务id
 * @method void setTaskId(integer $TaskId) 设置任务id
 * @method string getFromEmailAddress() 获取发信地址
 * @method void setFromEmailAddress(string $FromEmailAddress) 设置发信地址
 * @method integer getReceiverId() 获取收件人列表Id
 * @method void setReceiverId(integer $ReceiverId) 设置收件人列表Id
 * @method integer getTaskStatus() 获取任务状态 1 待开始 5 发送中 6 今日暂停发送  7 发信异常 10 发送完成
 * @method void setTaskStatus(integer $TaskStatus) 设置任务状态 1 待开始 5 发送中 6 今日暂停发送  7 发信异常 10 发送完成
 * @method integer getTaskType() 获取任务类型 1 即时 2 定时 3 周期
 * @method void setTaskType(integer $TaskType) 设置任务类型 1 即时 2 定时 3 周期
 * @method integer getRequestCount() 获取任务请求发信数量
 * @method void setRequestCount(integer $RequestCount) 设置任务请求发信数量
 * @method integer getSendCount() 获取已经发送数量
 * @method void setSendCount(integer $SendCount) 设置已经发送数量
 * @method integer getCacheCount() 获取缓存数量
 * @method void setCacheCount(integer $CacheCount) 设置缓存数量
 * @method string getCreateTime() 获取任务创建时间
 * @method void setCreateTime(string $CreateTime) 设置任务创建时间
 * @method string getUpdateTime() 获取任务更新时间
 * @method void setUpdateTime(string $UpdateTime) 设置任务更新时间
 * @method string getSubject() 获取邮件主题
 * @method void setSubject(string $Subject) 设置邮件主题
 * @method Template getTemplate() 获取模板和模板数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTemplate(Template $Template) 设置模板和模板数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method CycleEmailParam getCycleParam() 获取周期任务参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCycleParam(CycleEmailParam $CycleParam) 设置周期任务参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method TimedEmailParam getTimedParam() 获取定时任务参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTimedParam(TimedEmailParam $TimedParam) 设置定时任务参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getErrMsg() 获取任务异常信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setErrMsg(string $ErrMsg) 设置任务异常信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getReceiversName() 获取收件人列表名称
 * @method void setReceiversName(string $ReceiversName) 设置收件人列表名称
 */
class SendTaskData extends AbstractModel
{
    /**
     * @var integer 任务id
     */
    public $TaskId;

    /**
     * @var string 发信地址
     */
    public $FromEmailAddress;

    /**
     * @var integer 收件人列表Id
     */
    public $ReceiverId;

    /**
     * @var integer 任务状态 1 待开始 5 发送中 6 今日暂停发送  7 发信异常 10 发送完成
     */
    public $TaskStatus;

    /**
     * @var integer 任务类型 1 即时 2 定时 3 周期
     */
    public $TaskType;

    /**
     * @var integer 任务请求发信数量
     */
    public $RequestCount;

    /**
     * @var integer 已经发送数量
     */
    public $SendCount;

    /**
     * @var integer 缓存数量
     */
    public $CacheCount;

    /**
     * @var string 任务创建时间
     */
    public $CreateTime;

    /**
     * @var string 任务更新时间
     */
    public $UpdateTime;

    /**
     * @var string 邮件主题
     */
    public $Subject;

    /**
     * @var Template 模板和模板数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Template;

    /**
     * @var CycleEmailParam 周期任务参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CycleParam;

    /**
     * @var TimedEmailParam 定时任务参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TimedParam;

    /**
     * @var string 任务异常信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ErrMsg;

    /**
     * @var string 收件人列表名称
     */
    public $ReceiversName;

    /**
     * @param integer $TaskId 任务id
     * @param string $FromEmailAddress 发信地址
     * @param integer $ReceiverId 收件人列表Id
     * @param integer $TaskStatus 任务状态 1 待开始 5 发送中 6 今日暂停发送  7 发信异常 10 发送完成
     * @param integer $TaskType 任务类型 1 即时 2 定时 3 周期
     * @param integer $RequestCount 任务请求发信数量
     * @param integer $SendCount 已经发送数量
     * @param integer $CacheCount 缓存数量
     * @param string $CreateTime 任务创建时间
     * @param string $UpdateTime 任务更新时间
     * @param string $Subject 邮件主题
     * @param Template $Template 模板和模板数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param CycleEmailParam $CycleParam 周期任务参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param TimedEmailParam $TimedParam 定时任务参数
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ErrMsg 任务异常信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ReceiversName 收件人列表名称
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

        if (array_key_exists("FromEmailAddress",$param) and $param["FromEmailAddress"] !== null) {
            $this->FromEmailAddress = $param["FromEmailAddress"];
        }

        if (array_key_exists("ReceiverId",$param) and $param["ReceiverId"] !== null) {
            $this->ReceiverId = $param["ReceiverId"];
        }

        if (array_key_exists("TaskStatus",$param) and $param["TaskStatus"] !== null) {
            $this->TaskStatus = $param["TaskStatus"];
        }

        if (array_key_exists("TaskType",$param) and $param["TaskType"] !== null) {
            $this->TaskType = $param["TaskType"];
        }

        if (array_key_exists("RequestCount",$param) and $param["RequestCount"] !== null) {
            $this->RequestCount = $param["RequestCount"];
        }

        if (array_key_exists("SendCount",$param) and $param["SendCount"] !== null) {
            $this->SendCount = $param["SendCount"];
        }

        if (array_key_exists("CacheCount",$param) and $param["CacheCount"] !== null) {
            $this->CacheCount = $param["CacheCount"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Subject",$param) and $param["Subject"] !== null) {
            $this->Subject = $param["Subject"];
        }

        if (array_key_exists("Template",$param) and $param["Template"] !== null) {
            $this->Template = new Template();
            $this->Template->deserialize($param["Template"]);
        }

        if (array_key_exists("CycleParam",$param) and $param["CycleParam"] !== null) {
            $this->CycleParam = new CycleEmailParam();
            $this->CycleParam->deserialize($param["CycleParam"]);
        }

        if (array_key_exists("TimedParam",$param) and $param["TimedParam"] !== null) {
            $this->TimedParam = new TimedEmailParam();
            $this->TimedParam->deserialize($param["TimedParam"]);
        }

        if (array_key_exists("ErrMsg",$param) and $param["ErrMsg"] !== null) {
            $this->ErrMsg = $param["ErrMsg"];
        }

        if (array_key_exists("ReceiversName",$param) and $param["ReceiversName"] !== null) {
            $this->ReceiversName = $param["ReceiversName"];
        }
    }
}
