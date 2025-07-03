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
 * CreateChangePwdTask请求参数结构体
 *
 * @method string getTaskName() 获取任务名
 * @method void setTaskName(string $TaskName) 设置任务名
 * @method array getDeviceIdSet() 获取资产id数组
 * @method void setDeviceIdSet(array $DeviceIdSet) 设置资产id数组
 * @method array getAccountSet() 获取修改的账户数组
 * @method void setAccountSet(array $AccountSet) 设置修改的账户数组
 * @method integer getChangeMethod() 获取改密方式。1：使用执行账号修改密码；2：修改自身密码
 * @method void setChangeMethod(integer $ChangeMethod) 设置改密方式。1：使用执行账号修改密码；2：修改自身密码
 * @method integer getAuthGenerationStrategy() 获取认证生成方式。 1:自动生成相同密码 2:自动生成不同密码 3:手动指定相同密码
 * @method void setAuthGenerationStrategy(integer $AuthGenerationStrategy) 设置认证生成方式。 1:自动生成相同密码 2:自动生成不同密码 3:手动指定相同密码
 * @method string getRunAccount() 获取执行账号
 * @method void setRunAccount(string $RunAccount) 设置执行账号
 * @method string getPassword() 获取手动指定密码时必传
 * @method void setPassword(string $Password) 设置手动指定密码时必传
 * @method integer getPasswordLength() 获取密码限制长度，长度大于 12 位
 * @method void setPasswordLength(integer $PasswordLength) 设置密码限制长度，长度大于 12 位
 * @method integer getSmallLetter() 获取密码包含小写字母。0：否，1：是
 * @method void setSmallLetter(integer $SmallLetter) 设置密码包含小写字母。0：否，1：是
 * @method integer getBigLetter() 获取密码包含大写字母。0：否，1：是
 * @method void setBigLetter(integer $BigLetter) 设置密码包含大写字母。0：否，1：是
 * @method integer getDigit() 获取密码包含数字。0：否，1：是
 * @method void setDigit(integer $Digit) 设置密码包含数字。0：否，1：是
 * @method string getSymbol() 获取密码包含的特殊字符（base64编码），包含：^[-_#();%~!+=]*$
 * @method void setSymbol(string $Symbol) 设置密码包含的特殊字符（base64编码），包含：^[-_#();%~!+=]*$
 * @method integer getCompleteNotify() 获取改密完成通知。0：不通知 
  1：通知
 * @method void setCompleteNotify(integer $CompleteNotify) 设置改密完成通知。0：不通知 
  1：通知
 * @method array getNotifyEmails() 获取通知邮箱
 * @method void setNotifyEmails(array $NotifyEmails) 设置通知邮箱
 * @method string getFilePassword() 获取加密压缩文件密码
 * @method void setFilePassword(string $FilePassword) 设置加密压缩文件密码
 * @method string getDepartmentId() 获取所属部门id。“1.2.3”
 * @method void setDepartmentId(string $DepartmentId) 设置所属部门id。“1.2.3”
 * @method integer getType() 获取任务类型  4-手工执行  5-周期自动执行
 * @method void setType(integer $Type) 设置任务类型  4-手工执行  5-周期自动执行
 * @method integer getPeriod() 获取执行周期，单位天（大于等于 1，小于等于 365）
 * @method void setPeriod(integer $Period) 设置执行周期，单位天（大于等于 1，小于等于 365）
 * @method string getFirstTime() 获取周期任务首次执行时间
 * @method void setFirstTime(string $FirstTime) 设置周期任务首次执行时间
 */
class CreateChangePwdTaskRequest extends AbstractModel
{
    /**
     * @var string 任务名
     */
    public $TaskName;

    /**
     * @var array 资产id数组
     */
    public $DeviceIdSet;

    /**
     * @var array 修改的账户数组
     */
    public $AccountSet;

    /**
     * @var integer 改密方式。1：使用执行账号修改密码；2：修改自身密码
     */
    public $ChangeMethod;

    /**
     * @var integer 认证生成方式。 1:自动生成相同密码 2:自动生成不同密码 3:手动指定相同密码
     */
    public $AuthGenerationStrategy;

    /**
     * @var string 执行账号
     */
    public $RunAccount;

    /**
     * @var string 手动指定密码时必传
     */
    public $Password;

    /**
     * @var integer 密码限制长度，长度大于 12 位
     */
    public $PasswordLength;

    /**
     * @var integer 密码包含小写字母。0：否，1：是
     */
    public $SmallLetter;

    /**
     * @var integer 密码包含大写字母。0：否，1：是
     */
    public $BigLetter;

    /**
     * @var integer 密码包含数字。0：否，1：是
     */
    public $Digit;

    /**
     * @var string 密码包含的特殊字符（base64编码），包含：^[-_#();%~!+=]*$
     */
    public $Symbol;

    /**
     * @var integer 改密完成通知。0：不通知 
  1：通知
     */
    public $CompleteNotify;

    /**
     * @var array 通知邮箱
     */
    public $NotifyEmails;

    /**
     * @var string 加密压缩文件密码
     */
    public $FilePassword;

    /**
     * @var string 所属部门id。“1.2.3”
     */
    public $DepartmentId;

    /**
     * @var integer 任务类型  4-手工执行  5-周期自动执行
     */
    public $Type;

    /**
     * @var integer 执行周期，单位天（大于等于 1，小于等于 365）
     */
    public $Period;

    /**
     * @var string 周期任务首次执行时间
     */
    public $FirstTime;

    /**
     * @param string $TaskName 任务名
     * @param array $DeviceIdSet 资产id数组
     * @param array $AccountSet 修改的账户数组
     * @param integer $ChangeMethod 改密方式。1：使用执行账号修改密码；2：修改自身密码
     * @param integer $AuthGenerationStrategy 认证生成方式。 1:自动生成相同密码 2:自动生成不同密码 3:手动指定相同密码
     * @param string $RunAccount 执行账号
     * @param string $Password 手动指定密码时必传
     * @param integer $PasswordLength 密码限制长度，长度大于 12 位
     * @param integer $SmallLetter 密码包含小写字母。0：否，1：是
     * @param integer $BigLetter 密码包含大写字母。0：否，1：是
     * @param integer $Digit 密码包含数字。0：否，1：是
     * @param string $Symbol 密码包含的特殊字符（base64编码），包含：^[-_#();%~!+=]*$
     * @param integer $CompleteNotify 改密完成通知。0：不通知 
  1：通知
     * @param array $NotifyEmails 通知邮箱
     * @param string $FilePassword 加密压缩文件密码
     * @param string $DepartmentId 所属部门id。“1.2.3”
     * @param integer $Type 任务类型  4-手工执行  5-周期自动执行
     * @param integer $Period 执行周期，单位天（大于等于 1，小于等于 365）
     * @param string $FirstTime 周期任务首次执行时间
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
        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("DeviceIdSet",$param) and $param["DeviceIdSet"] !== null) {
            $this->DeviceIdSet = $param["DeviceIdSet"];
        }

        if (array_key_exists("AccountSet",$param) and $param["AccountSet"] !== null) {
            $this->AccountSet = $param["AccountSet"];
        }

        if (array_key_exists("ChangeMethod",$param) and $param["ChangeMethod"] !== null) {
            $this->ChangeMethod = $param["ChangeMethod"];
        }

        if (array_key_exists("AuthGenerationStrategy",$param) and $param["AuthGenerationStrategy"] !== null) {
            $this->AuthGenerationStrategy = $param["AuthGenerationStrategy"];
        }

        if (array_key_exists("RunAccount",$param) and $param["RunAccount"] !== null) {
            $this->RunAccount = $param["RunAccount"];
        }

        if (array_key_exists("Password",$param) and $param["Password"] !== null) {
            $this->Password = $param["Password"];
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

        if (array_key_exists("DepartmentId",$param) and $param["DepartmentId"] !== null) {
            $this->DepartmentId = $param["DepartmentId"];
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
    }
}
