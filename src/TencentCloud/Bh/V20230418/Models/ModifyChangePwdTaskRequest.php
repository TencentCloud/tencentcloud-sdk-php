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
 * ModifyChangePwdTask请求参数结构体
 *
 * @method string getOperationId() 获取<p>改密任务id</p>
 * @method void setOperationId(string $OperationId) 设置<p>改密任务id</p>
 * @method array getDeviceIdSet() 获取<p>改密资产id列表</p>
 * @method void setDeviceIdSet(array $DeviceIdSet) 设置<p>改密资产id列表</p>
 * @method array getAccountSet() 获取<p>改密资产的账号列表</p>
 * @method void setAccountSet(array $AccountSet) 设置<p>改密资产的账号列表</p>
 * @method integer getModifyType() 获取<p>修改类型：1：修改任务信息  2：关联任务资产账号</p>
 * @method void setModifyType(integer $ModifyType) 设置<p>修改类型：1：修改任务信息  2：关联任务资产账号</p>
 * @method integer getChangeMethod() 获取<p>改密方式。1：使用执行账号修改密码；2：修改自身密码</p>
 * @method void setChangeMethod(integer $ChangeMethod) 设置<p>改密方式。1：使用执行账号修改密码；2：修改自身密码</p>
 * @method integer getAuthGenerationStrategy() 获取<p>密码生成方式。 1:自动生成相同密码 2:自动生成不同密码 3:手动指定相同密码</p>
 * @method void setAuthGenerationStrategy(integer $AuthGenerationStrategy) 设置<p>密码生成方式。 1:自动生成相同密码 2:自动生成不同密码 3:手动指定相同密码</p>
 * @method string getTaskName() 获取<p>任务名称</p>
 * @method void setTaskName(string $TaskName) 设置<p>任务名称</p>
 * @method string getDepartmentId() 获取<p>所属部门ID，&quot;1,2,3&quot;</p>
 * @method void setDepartmentId(string $DepartmentId) 设置<p>所属部门ID，&quot;1,2,3&quot;</p>
 * @method string getRunAccount() 获取<p>任务的执行账号</p>
 * @method void setRunAccount(string $RunAccount) 设置<p>任务的执行账号</p>
 * @method string getPassword() 获取<p>密码，手动指定密码时必传。</p>
 * @method void setPassword(string $Password) 设置<p>密码，手动指定密码时必传。</p>
 * @method integer getPasswordLength() 获取<p>密码限制长度，自动生成密码必传。</p>
 * @method void setPasswordLength(integer $PasswordLength) 设置<p>密码限制长度，自动生成密码必传。</p>
 * @method integer getSmallLetter() 获取<p>密码包含小写字母，0：否，1：是。</p>
 * @method void setSmallLetter(integer $SmallLetter) 设置<p>密码包含小写字母，0：否，1：是。</p>
 * @method integer getBigLetter() 获取<p>密码包含大写字母，0：否，1：是。</p>
 * @method void setBigLetter(integer $BigLetter) 设置<p>密码包含大写字母，0：否，1：是。</p>
 * @method integer getDigit() 获取<p>密码包含数字，0：否，1：是。</p>
 * @method void setDigit(integer $Digit) 设置<p>密码包含数字，0：否，1：是。</p>
 * @method string getSymbol() 获取<p>密码包含的特殊字符（base64编码），包含：^[-_#();%~!+=]*$</p>
 * @method void setSymbol(string $Symbol) 设置<p>密码包含的特殊字符（base64编码），包含：^[-_#();%~!+=]*$</p>
 * @method integer getCompleteNotify() 获取<p>改密完成通知。0：不通知 1：通知</p>
 * @method void setCompleteNotify(integer $CompleteNotify) 设置<p>改密完成通知。0：不通知 1：通知</p>
 * @method array getNotifyEmails() 获取<p>通知邮箱</p>
 * @method void setNotifyEmails(array $NotifyEmails) 设置<p>通知邮箱</p>
 * @method string getFilePassword() 获取<p>加密压缩文件密码</p>
 * @method void setFilePassword(string $FilePassword) 设置<p>加密压缩文件密码</p>
 * @method integer getType() 获取<p>任务类型， 4：手工执行  5：周期自动执行</p>
 * @method void setType(integer $Type) 设置<p>任务类型， 4：手工执行  5：周期自动执行</p>
 * @method integer getPeriod() 获取<p>周期任务周期，单位天（大于等于 1，小于等于 365）</p>
 * @method void setPeriod(integer $Period) 设置<p>周期任务周期，单位天（大于等于 1，小于等于 365）</p>
 * @method string getFirstTime() 获取<p>周期任务首次执行时间</p>
 * @method void setFirstTime(string $FirstTime) 设置<p>周期任务首次执行时间</p>
 * @method integer getCategory() 获取<p>改密任务类别</p><p>枚举值：</p><ul><li>0： Linux 类型改密任务</li><li>1： Windows 类型改密任务</li></ul><p>默认值：0</p>
 * @method void setCategory(integer $Category) 设置<p>改密任务类别</p><p>枚举值：</p><ul><li>0： Linux 类型改密任务</li><li>1： Windows 类型改密任务</li></ul><p>默认值：0</p>
 * @method integer getProtocol() 获取<p>改密任务协议类型</p><p>枚举值：</p><ul><li>0： 未定义，Linux 改密任务类型默认值</li><li>1： Windows OpenSSH 协议</li></ul><p>默认值：0</p>
 * @method void setProtocol(integer $Protocol) 设置<p>改密任务协议类型</p><p>枚举值：</p><ul><li>0： 未定义，Linux 改密任务类型默认值</li><li>1： Windows OpenSSH 协议</li></ul><p>默认值：0</p>
 * @method integer getPort() 获取<p>改密协议端口号，Linux 改密类型协议端口号需设置为0</p><p>取值范围：[0, 65535]</p><p>默认值：0</p>
 * @method void setPort(integer $Port) 设置<p>改密协议端口号，Linux 改密类型协议端口号需设置为0</p><p>取值范围：[0, 65535]</p><p>默认值：0</p>
 */
class ModifyChangePwdTaskRequest extends AbstractModel
{
    /**
     * @var string <p>改密任务id</p>
     */
    public $OperationId;

    /**
     * @var array <p>改密资产id列表</p>
     */
    public $DeviceIdSet;

    /**
     * @var array <p>改密资产的账号列表</p>
     */
    public $AccountSet;

    /**
     * @var integer <p>修改类型：1：修改任务信息  2：关联任务资产账号</p>
     */
    public $ModifyType;

    /**
     * @var integer <p>改密方式。1：使用执行账号修改密码；2：修改自身密码</p>
     */
    public $ChangeMethod;

    /**
     * @var integer <p>密码生成方式。 1:自动生成相同密码 2:自动生成不同密码 3:手动指定相同密码</p>
     */
    public $AuthGenerationStrategy;

    /**
     * @var string <p>任务名称</p>
     */
    public $TaskName;

    /**
     * @var string <p>所属部门ID，&quot;1,2,3&quot;</p>
     */
    public $DepartmentId;

    /**
     * @var string <p>任务的执行账号</p>
     */
    public $RunAccount;

    /**
     * @var string <p>密码，手动指定密码时必传。</p>
     */
    public $Password;

    /**
     * @var integer <p>密码限制长度，自动生成密码必传。</p>
     */
    public $PasswordLength;

    /**
     * @var integer <p>密码包含小写字母，0：否，1：是。</p>
     */
    public $SmallLetter;

    /**
     * @var integer <p>密码包含大写字母，0：否，1：是。</p>
     */
    public $BigLetter;

    /**
     * @var integer <p>密码包含数字，0：否，1：是。</p>
     */
    public $Digit;

    /**
     * @var string <p>密码包含的特殊字符（base64编码），包含：^[-_#();%~!+=]*$</p>
     */
    public $Symbol;

    /**
     * @var integer <p>改密完成通知。0：不通知 1：通知</p>
     */
    public $CompleteNotify;

    /**
     * @var array <p>通知邮箱</p>
     */
    public $NotifyEmails;

    /**
     * @var string <p>加密压缩文件密码</p>
     */
    public $FilePassword;

    /**
     * @var integer <p>任务类型， 4：手工执行  5：周期自动执行</p>
     */
    public $Type;

    /**
     * @var integer <p>周期任务周期，单位天（大于等于 1，小于等于 365）</p>
     */
    public $Period;

    /**
     * @var string <p>周期任务首次执行时间</p>
     */
    public $FirstTime;

    /**
     * @var integer <p>改密任务类别</p><p>枚举值：</p><ul><li>0： Linux 类型改密任务</li><li>1： Windows 类型改密任务</li></ul><p>默认值：0</p>
     */
    public $Category;

    /**
     * @var integer <p>改密任务协议类型</p><p>枚举值：</p><ul><li>0： 未定义，Linux 改密任务类型默认值</li><li>1： Windows OpenSSH 协议</li></ul><p>默认值：0</p>
     */
    public $Protocol;

    /**
     * @var integer <p>改密协议端口号，Linux 改密类型协议端口号需设置为0</p><p>取值范围：[0, 65535]</p><p>默认值：0</p>
     */
    public $Port;

    /**
     * @param string $OperationId <p>改密任务id</p>
     * @param array $DeviceIdSet <p>改密资产id列表</p>
     * @param array $AccountSet <p>改密资产的账号列表</p>
     * @param integer $ModifyType <p>修改类型：1：修改任务信息  2：关联任务资产账号</p>
     * @param integer $ChangeMethod <p>改密方式。1：使用执行账号修改密码；2：修改自身密码</p>
     * @param integer $AuthGenerationStrategy <p>密码生成方式。 1:自动生成相同密码 2:自动生成不同密码 3:手动指定相同密码</p>
     * @param string $TaskName <p>任务名称</p>
     * @param string $DepartmentId <p>所属部门ID，&quot;1,2,3&quot;</p>
     * @param string $RunAccount <p>任务的执行账号</p>
     * @param string $Password <p>密码，手动指定密码时必传。</p>
     * @param integer $PasswordLength <p>密码限制长度，自动生成密码必传。</p>
     * @param integer $SmallLetter <p>密码包含小写字母，0：否，1：是。</p>
     * @param integer $BigLetter <p>密码包含大写字母，0：否，1：是。</p>
     * @param integer $Digit <p>密码包含数字，0：否，1：是。</p>
     * @param string $Symbol <p>密码包含的特殊字符（base64编码），包含：^[-_#();%~!+=]*$</p>
     * @param integer $CompleteNotify <p>改密完成通知。0：不通知 1：通知</p>
     * @param array $NotifyEmails <p>通知邮箱</p>
     * @param string $FilePassword <p>加密压缩文件密码</p>
     * @param integer $Type <p>任务类型， 4：手工执行  5：周期自动执行</p>
     * @param integer $Period <p>周期任务周期，单位天（大于等于 1，小于等于 365）</p>
     * @param string $FirstTime <p>周期任务首次执行时间</p>
     * @param integer $Category <p>改密任务类别</p><p>枚举值：</p><ul><li>0： Linux 类型改密任务</li><li>1： Windows 类型改密任务</li></ul><p>默认值：0</p>
     * @param integer $Protocol <p>改密任务协议类型</p><p>枚举值：</p><ul><li>0： 未定义，Linux 改密任务类型默认值</li><li>1： Windows OpenSSH 协议</li></ul><p>默认值：0</p>
     * @param integer $Port <p>改密协议端口号，Linux 改密类型协议端口号需设置为0</p><p>取值范围：[0, 65535]</p><p>默认值：0</p>
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
        if (array_key_exists("OperationId",$param) and $param["OperationId"] !== null) {
            $this->OperationId = $param["OperationId"];
        }

        if (array_key_exists("DeviceIdSet",$param) and $param["DeviceIdSet"] !== null) {
            $this->DeviceIdSet = $param["DeviceIdSet"];
        }

        if (array_key_exists("AccountSet",$param) and $param["AccountSet"] !== null) {
            $this->AccountSet = $param["AccountSet"];
        }

        if (array_key_exists("ModifyType",$param) and $param["ModifyType"] !== null) {
            $this->ModifyType = $param["ModifyType"];
        }

        if (array_key_exists("ChangeMethod",$param) and $param["ChangeMethod"] !== null) {
            $this->ChangeMethod = $param["ChangeMethod"];
        }

        if (array_key_exists("AuthGenerationStrategy",$param) and $param["AuthGenerationStrategy"] !== null) {
            $this->AuthGenerationStrategy = $param["AuthGenerationStrategy"];
        }

        if (array_key_exists("TaskName",$param) and $param["TaskName"] !== null) {
            $this->TaskName = $param["TaskName"];
        }

        if (array_key_exists("DepartmentId",$param) and $param["DepartmentId"] !== null) {
            $this->DepartmentId = $param["DepartmentId"];
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

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }

        if (array_key_exists("FirstTime",$param) and $param["FirstTime"] !== null) {
            $this->FirstTime = $param["FirstTime"];
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
