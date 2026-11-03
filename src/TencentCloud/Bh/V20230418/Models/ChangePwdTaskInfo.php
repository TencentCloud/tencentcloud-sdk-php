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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 修改密码任务信息
 *
 * @method integer getId() 获取<p>id</p>
 * @method void setId(integer $Id) 设置<p>id</p>
 * @method string getOperationId() 获取<p>任务id</p>
 * @method void setOperationId(string $OperationId) 设置<p>任务id</p>
 * @method string getTaskName() 获取<p>任务名</p>
 * @method void setTaskName(string $TaskName) 设置<p>任务名</p>
 * @method Department getDepartment() 获取<p>所属部门信息</p>
 * @method void setDepartment(Department $Department) 设置<p>所属部门信息</p>
 * @method integer getChangeMethod() 获取<p>改密方式。1：使用执行账号。2：修改自身密码</p>
 * @method void setChangeMethod(integer $ChangeMethod) 设置<p>改密方式。1：使用执行账号。2：修改自身密码</p>
 * @method string getRunAccount() 获取<p>执行账号</p>
 * @method void setRunAccount(string $RunAccount) 设置<p>执行账号</p>
 * @method integer getAuthGenerationStrategy() 获取<p>密码生成策略</p>
 * @method void setAuthGenerationStrategy(integer $AuthGenerationStrategy) 设置<p>密码生成策略</p>
 * @method integer getPasswordLength() 获取<p>密码长度</p>
 * @method void setPasswordLength(integer $PasswordLength) 设置<p>密码长度</p>
 * @method integer getSmallLetter() 获取<p>包含小写字母</p>
 * @method void setSmallLetter(integer $SmallLetter) 设置<p>包含小写字母</p>
 * @method integer getBigLetter() 获取<p>包含大写字母</p>
 * @method void setBigLetter(integer $BigLetter) 设置<p>包含大写字母</p>
 * @method integer getDigit() 获取<p>包含数字</p>
 * @method void setDigit(integer $Digit) 设置<p>包含数字</p>
 * @method string getSymbol() 获取<p>包含的特殊字符，入参base64</p>
 * @method void setSymbol(string $Symbol) 设置<p>包含的特殊字符，入参base64</p>
 * @method integer getCompleteNotify() 获取<p>改密完成通知。0-通知，1-不通知</p>
 * @method void setCompleteNotify(integer $CompleteNotify) 设置<p>改密完成通知。0-通知，1-不通知</p>
 * @method array getNotifyEmails() 获取<p>通知人邮箱</p>
 * @method void setNotifyEmails(array $NotifyEmails) 设置<p>通知人邮箱</p>
 * @method string getFilePassword() 获取<p>加密附件密码</p>
 * @method void setFilePassword(string $FilePassword) 设置<p>加密附件密码</p>
 * @method array getAccountSet() 获取<p>需要改密的账户</p>
 * @method void setAccountSet(array $AccountSet) 设置<p>需要改密的账户</p>
 * @method array getDeviceSet() 获取<p>需要改密的主机</p>
 * @method void setDeviceSet(array $DeviceSet) 设置<p>需要改密的主机</p>
 * @method integer getType() 获取<p>任务类型：4手动，5自动</p>
 * @method void setType(integer $Type) 设置<p>任务类型：4手动，5自动</p>
 * @method integer getPeriod() 获取<p>周期</p>
 * @method void setPeriod(integer $Period) 设置<p>周期</p>
 * @method string getFirstTime() 获取<p>首次执行时间</p>
 * @method void setFirstTime(string $FirstTime) 设置<p>首次执行时间</p>
 * @method string getNextTime() 获取<p>下次执行时间</p>
 * @method void setNextTime(string $NextTime) 设置<p>下次执行时间</p>
 * @method string getLastTime() 获取<p>上次执行时间</p>
 * @method void setLastTime(string $LastTime) 设置<p>上次执行时间</p>
 * @method integer getStatus() 获取<p>改密任务状态，0-待执行，1-执行完成，2-执行失败，3-执行中，4-执行超时</p>
 * @method void setStatus(integer $Status) 设置<p>改密任务状态，0-待执行，1-执行完成，2-执行失败，3-执行中，4-执行超时</p>
 * @method integer getCategory() 获取<p>改密任务类别</p><p>枚举值：</p><ul><li>0： Linux 类型改密任务</li><li>1： Windows 类型改密任务</li></ul><p>默认值：0</p>
 * @method void setCategory(integer $Category) 设置<p>改密任务类别</p><p>枚举值：</p><ul><li>0： Linux 类型改密任务</li><li>1： Windows 类型改密任务</li></ul><p>默认值：0</p>
 * @method integer getProtocol() 获取<p>改密任务协议类型</p><p>枚举值：</p><ul><li>0： 未定义，Linux 改密任务类型默认值</li><li>1： Windows OpenSSH 协议</li></ul><p>默认值：0</p>
 * @method void setProtocol(integer $Protocol) 设置<p>改密任务协议类型</p><p>枚举值：</p><ul><li>0： 未定义，Linux 改密任务类型默认值</li><li>1： Windows OpenSSH 协议</li></ul><p>默认值：0</p>
 * @method integer getPort() 获取<p>改密协议端口号. Linux 改密协议类型端口号值为0</p><p>默认值：0</p>
 * @method void setPort(integer $Port) 设置<p>改密协议端口号. Linux 改密协议类型端口号值为0</p><p>默认值：0</p>
 */
class ChangePwdTaskInfo extends AbstractModel
{
    /**
     * @var integer <p>id</p>
     */
    public $Id;

    /**
     * @var string <p>任务id</p>
     */
    public $OperationId;

    /**
     * @var string <p>任务名</p>
     */
    public $TaskName;

    /**
     * @var Department <p>所属部门信息</p>
     */
    public $Department;

    /**
     * @var integer <p>改密方式。1：使用执行账号。2：修改自身密码</p>
     */
    public $ChangeMethod;

    /**
     * @var string <p>执行账号</p>
     */
    public $RunAccount;

    /**
     * @var integer <p>密码生成策略</p>
     */
    public $AuthGenerationStrategy;

    /**
     * @var integer <p>密码长度</p>
     */
    public $PasswordLength;

    /**
     * @var integer <p>包含小写字母</p>
     */
    public $SmallLetter;

    /**
     * @var integer <p>包含大写字母</p>
     */
    public $BigLetter;

    /**
     * @var integer <p>包含数字</p>
     */
    public $Digit;

    /**
     * @var string <p>包含的特殊字符，入参base64</p>
     */
    public $Symbol;

    /**
     * @var integer <p>改密完成通知。0-通知，1-不通知</p>
     */
    public $CompleteNotify;

    /**
     * @var array <p>通知人邮箱</p>
     */
    public $NotifyEmails;

    /**
     * @var string <p>加密附件密码</p>
     */
    public $FilePassword;

    /**
     * @var array <p>需要改密的账户</p>
     */
    public $AccountSet;

    /**
     * @var array <p>需要改密的主机</p>
     */
    public $DeviceSet;

    /**
     * @var integer <p>任务类型：4手动，5自动</p>
     */
    public $Type;

    /**
     * @var integer <p>周期</p>
     */
    public $Period;

    /**
     * @var string <p>首次执行时间</p>
     */
    public $FirstTime;

    /**
     * @var string <p>下次执行时间</p>
     */
    public $NextTime;

    /**
     * @var string <p>上次执行时间</p>
     */
    public $LastTime;

    /**
     * @var integer <p>改密任务状态，0-待执行，1-执行完成，2-执行失败，3-执行中，4-执行超时</p>
     */
    public $Status;

    /**
     * @var integer <p>改密任务类别</p><p>枚举值：</p><ul><li>0： Linux 类型改密任务</li><li>1： Windows 类型改密任务</li></ul><p>默认值：0</p>
     */
    public $Category;

    /**
     * @var integer <p>改密任务协议类型</p><p>枚举值：</p><ul><li>0： 未定义，Linux 改密任务类型默认值</li><li>1： Windows OpenSSH 协议</li></ul><p>默认值：0</p>
     */
    public $Protocol;

    /**
     * @var integer <p>改密协议端口号. Linux 改密协议类型端口号值为0</p><p>默认值：0</p>
     */
    public $Port;

    /**
     * @param integer $Id <p>id</p>
     * @param string $OperationId <p>任务id</p>
     * @param string $TaskName <p>任务名</p>
     * @param Department $Department <p>所属部门信息</p>
     * @param integer $ChangeMethod <p>改密方式。1：使用执行账号。2：修改自身密码</p>
     * @param string $RunAccount <p>执行账号</p>
     * @param integer $AuthGenerationStrategy <p>密码生成策略</p>
     * @param integer $PasswordLength <p>密码长度</p>
     * @param integer $SmallLetter <p>包含小写字母</p>
     * @param integer $BigLetter <p>包含大写字母</p>
     * @param integer $Digit <p>包含数字</p>
     * @param string $Symbol <p>包含的特殊字符，入参base64</p>
     * @param integer $CompleteNotify <p>改密完成通知。0-通知，1-不通知</p>
     * @param array $NotifyEmails <p>通知人邮箱</p>
     * @param string $FilePassword <p>加密附件密码</p>
     * @param array $AccountSet <p>需要改密的账户</p>
     * @param array $DeviceSet <p>需要改密的主机</p>
     * @param integer $Type <p>任务类型：4手动，5自动</p>
     * @param integer $Period <p>周期</p>
     * @param string $FirstTime <p>首次执行时间</p>
     * @param string $NextTime <p>下次执行时间</p>
     * @param string $LastTime <p>上次执行时间</p>
     * @param integer $Status <p>改密任务状态，0-待执行，1-执行完成，2-执行失败，3-执行中，4-执行超时</p>
     * @param integer $Category <p>改密任务类别</p><p>枚举值：</p><ul><li>0： Linux 类型改密任务</li><li>1： Windows 类型改密任务</li></ul><p>默认值：0</p>
     * @param integer $Protocol <p>改密任务协议类型</p><p>枚举值：</p><ul><li>0： 未定义，Linux 改密任务类型默认值</li><li>1： Windows OpenSSH 协议</li></ul><p>默认值：0</p>
     * @param integer $Port <p>改密协议端口号. Linux 改密协议类型端口号值为0</p><p>默认值：0</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("OperationId",$param) and $param["OperationId"] !== null) {
            $this->OperationId = $param["OperationId"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("Department",$param) and $param["Department"] !== null) {
            $this->Department = new Department();
            $this->Department->deserialize($param["Department"]);
        }

        if (array_key_exists("ChangeMethod",$param) and $param["ChangeMethod"] !== null) {
            $this->ChangeMethod = $param["ChangeMethod"];
        }

        if (array_key_exists("RunAccount",$param) and $param["RunAccount"] !== null) {
            $this->RunAccount = $param["RunAccount"];
        }

        if (array_key_exists("AuthGenerationStrategy",$param) and $param["AuthGenerationStrategy"] !== null) {
            $this->AuthGenerationStrategy = $param["AuthGenerationStrategy"];
        }

        if (array_key_exists("PasswordLength",$param) and $param["PasswordLength"] !== null) {
            $this->PasswordLength = $param["PasswordLength"];
        }

        if (array_key_exists("SmallLetter",$param) and $param["SmallLetter"] !== null) {
            $this->SmallLetter = $param["SmallLetter"];
        }

        if (array_key_exists("BigLetter",$param) and $param["BigLetter"] !== null) {
            $this->BigLetter = $param["BigLetter"];
        }

        if (array_key_exists("Digit",$param) and $param["Digit"] !== null) {
            $this->Digit = $param["Digit"];
        }

        if (array_key_exists("Symbol",$param) and $param["Symbol"] !== null) {
            $this->Symbol = $param["Symbol"];
        }

        if (array_key_exists("CompleteNotify",$param) and $param["CompleteNotify"] !== null) {
            $this->CompleteNotify = $param["CompleteNotify"];
        }

        if (array_key_exists("NotifyEmails",$param) and $param["NotifyEmails"] !== null) {
            $this->NotifyEmails = $param["NotifyEmails"];
        }

        if (array_key_exists("FilePassword",$param) and $param["FilePassword"] !== null) {
            $this->FilePassword = $param["FilePassword"];
        }

        if (array_key_exists("AccountSet",$param) and $param["AccountSet"] !== null) {
            $this->AccountSet = $param["AccountSet"];
        }

        if (array_key_exists("DeviceSet",$param) and $param["DeviceSet"] !== null) {
            $this->DeviceSet = [];
            foreach ($param["DeviceSet"] as $key => $value){
                $obj = new Device();
                $obj->deserialize($value);
                array_push($this->DeviceSet, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("FirstTime",$param) and $param["FirstTime"] !== null) {
            $this->FirstTime = $param["FirstTime"];
        }

        if (array_key_exists("NextTime",$param) and $param["NextTime"] !== null) {
            $this->NextTime = $param["NextTime"];
        }

        if (array_key_exists("LastTime",$param) and $param["LastTime"] !== null) {
            $this->LastTime = $param["LastTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Category",$param) and $param["Category"] !== null) {
            $this->Category = $param["Category"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }
    }
}
