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
namespace TencentCloud\Bh\V20230418\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 修改密码任务信息
 *
 * @method integer getId() 获取id
 * @method void setId(integer $Id) 设置id
 * @method string getOperationId() 获取任务id
 * @method void setOperationId(string $OperationId) 设置任务id
 * @method string getTaskName() 获取任务名
 * @method void setTaskName(string $TaskName) 设置任务名
 * @method Department getDepartment() 获取所属部门信息
 * @method void setDepartment(Department $Department) 设置所属部门信息
 * @method integer getChangeMethod() 获取改密方式。1：使用执行账号。2：修改自身密码
 * @method void setChangeMethod(integer $ChangeMethod) 设置改密方式。1：使用执行账号。2：修改自身密码
 * @method string getRunAccount() 获取执行账号
 * @method void setRunAccount(string $RunAccount) 设置执行账号
 * @method integer getAuthGenerationStrategy() 获取密码生成策略
 * @method void setAuthGenerationStrategy(integer $AuthGenerationStrategy) 设置密码生成策略
 * @method integer getPasswordLength() 获取密码长度
 * @method void setPasswordLength(integer $PasswordLength) 设置密码长度
 * @method integer getSmallLetter() 获取包含小写字母
 * @method void setSmallLetter(integer $SmallLetter) 设置包含小写字母
 * @method integer getBigLetter() 获取包含大写字母
 * @method void setBigLetter(integer $BigLetter) 设置包含大写字母
 * @method integer getDigit() 获取包含数字
 * @method void setDigit(integer $Digit) 设置包含数字
 * @method string getSymbol() 获取包含的特殊字符，入参base64
 * @method void setSymbol(string $Symbol) 设置包含的特殊字符，入参base64
 * @method integer getCompleteNotify() 获取改密完成通知。0-通知，1-不通知
 * @method void setCompleteNotify(integer $CompleteNotify) 设置改密完成通知。0-通知，1-不通知
 * @method array getNotifyEmails() 获取通知人邮箱
 * @method void setNotifyEmails(array $NotifyEmails) 设置通知人邮箱
 * @method string getFilePassword() 获取加密附件密码
 * @method void setFilePassword(string $FilePassword) 设置加密附件密码
 * @method array getAccountSet() 获取需要改密的账户
 * @method void setAccountSet(array $AccountSet) 设置需要改密的账户
 * @method array getDeviceSet() 获取需要改密的主机
 * @method void setDeviceSet(array $DeviceSet) 设置需要改密的主机
 * @method integer getType() 获取任务类型：4手动，5自动
 * @method void setType(integer $Type) 设置任务类型：4手动，5自动
 * @method integer getPeriod() 获取周期
 * @method void setPeriod(integer $Period) 设置周期
 * @method string getFirstTime() 获取首次执行时间
 * @method void setFirstTime(string $FirstTime) 设置首次执行时间
 * @method string getNextTime() 获取下次执行时间
 * @method void setNextTime(string $NextTime) 设置下次执行时间
 */
class ChangePwdTaskInfo extends AbstractModel
{
    /**
     * @var integer id
     */
    public $Id;

    /**
     * @var string 任务id
     */
    public $OperationId;

    /**
     * @var string 任务名
     */
    public $TaskName;

    /**
     * @var Department 所属部门信息
     */
    public $Department;

    /**
     * @var integer 改密方式。1：使用执行账号。2：修改自身密码
     */
    public $ChangeMethod;

    /**
     * @var string 执行账号
     */
    public $RunAccount;

    /**
     * @var integer 密码生成策略
     */
    public $AuthGenerationStrategy;

    /**
     * @var integer 密码长度
     */
    public $PasswordLength;

    /**
     * @var integer 包含小写字母
     */
    public $SmallLetter;

    /**
     * @var integer 包含大写字母
     */
    public $BigLetter;

    /**
     * @var integer 包含数字
     */
    public $Digit;

    /**
     * @var string 包含的特殊字符，入参base64
     */
    public $Symbol;

    /**
     * @var integer 改密完成通知。0-通知，1-不通知
     */
    public $CompleteNotify;

    /**
     * @var array 通知人邮箱
     */
    public $NotifyEmails;

    /**
     * @var string 加密附件密码
     */
    public $FilePassword;

    /**
     * @var array 需要改密的账户
     */
    public $AccountSet;

    /**
     * @var array 需要改密的主机
     */
    public $DeviceSet;

    /**
     * @var integer 任务类型：4手动，5自动
     */
    public $Type;

    /**
     * @var integer 周期
     */
    public $Period;

    /**
     * @var string 首次执行时间
     */
    public $FirstTime;

    /**
     * @var string 下次执行时间
     */
    public $NextTime;

    /**
     * @param integer $Id id
     * @param string $OperationId 任务id
     * @param string $TaskName 任务名
     * @param Department $Department 所属部门信息
     * @param integer $ChangeMethod 改密方式。1：使用执行账号。2：修改自身密码
     * @param string $RunAccount 执行账号
     * @param integer $AuthGenerationStrategy 密码生成策略
     * @param integer $PasswordLength 密码长度
     * @param integer $SmallLetter 包含小写字母
     * @param integer $BigLetter 包含大写字母
     * @param integer $Digit 包含数字
     * @param string $Symbol 包含的特殊字符，入参base64
     * @param integer $CompleteNotify 改密完成通知。0-通知，1-不通知
     * @param array $NotifyEmails 通知人邮箱
     * @param string $FilePassword 加密附件密码
     * @param array $AccountSet 需要改密的账户
     * @param array $DeviceSet 需要改密的主机
     * @param integer $Type 任务类型：4手动，5自动
     * @param integer $Period 周期
     * @param string $FirstTime 首次执行时间
     * @param string $NextTime 下次执行时间
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
    }
}
