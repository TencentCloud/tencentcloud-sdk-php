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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户信息
 *
 * @method string getId() 获取<p>用户ID。</p>
 * @method void setId(string $Id) 设置<p>用户ID。</p>
 * @method string getName() 获取<p>名字。</p>
 * @method void setName(string $Name) 设置<p>名字。</p>
 * @method string getDisplayName() 获取<p>显示名字。</p>
 * @method void setDisplayName(string $DisplayName) 设置<p>显示名字。</p>
 * @method string getMail() 获取<p>邮箱。</p>
 * @method void setMail(string $Mail) 设置<p>邮箱。</p>
 * @method string getPhoneNum() 获取<p>手机号。</p>
 * @method void setPhoneNum(string $PhoneNum) 设置<p>手机号。</p>
 * @method string getStatus() 获取<p>状态。<br>ACTIVE:启用<br>PENDING_ACTIVATE:待激活<br>PENDING_ONBOARD:待启用<br>SUSPENDED:已停用<br>INACTIVE:已离职<br>PASSWORD_RESET:重置密码<br>LOCKED_OUT:锁定</p>
 * @method void setStatus(string $Status) 设置<p>状态。<br>ACTIVE:启用<br>PENDING_ACTIVATE:待激活<br>PENDING_ONBOARD:待启用<br>SUSPENDED:已停用<br>INACTIVE:已离职<br>PASSWORD_RESET:重置密码<br>LOCKED_OUT:锁定</p>
 * @method string getDepartmentId() 获取<p>部门ID。</p>
 * @method void setDepartmentId(string $DepartmentId) 设置<p>部门ID。</p>
 * @method string getStrategyId() 获取<p>策略ID。</p>
 * @method void setStrategyId(string $StrategyId) 设置<p>策略ID。</p>
 * @method string getStrategyName() 获取<p>策略名称。</p>
 * @method void setStrategyName(string $StrategyName) 设置<p>策略名称。</p>
 * @method boolean getBindStatus() 获取<p>当前用户是否绑定桌面，true：绑定，false：未绑定任何桌面</p>
 * @method void setBindStatus(boolean $BindStatus) 设置<p>当前用户是否绑定桌面，true：绑定，false：未绑定任何桌面</p>
 */
class User extends AbstractModel
{
    /**
     * @var string <p>用户ID。</p>
     */
    public $Id;

    /**
     * @var string <p>名字。</p>
     */
    public $Name;

    /**
     * @var string <p>显示名字。</p>
     */
    public $DisplayName;

    /**
     * @var string <p>邮箱。</p>
     */
    public $Mail;

    /**
     * @var string <p>手机号。</p>
     */
    public $PhoneNum;

    /**
     * @var string <p>状态。<br>ACTIVE:启用<br>PENDING_ACTIVATE:待激活<br>PENDING_ONBOARD:待启用<br>SUSPENDED:已停用<br>INACTIVE:已离职<br>PASSWORD_RESET:重置密码<br>LOCKED_OUT:锁定</p>
     */
    public $Status;

    /**
     * @var string <p>部门ID。</p>
     */
    public $DepartmentId;

    /**
     * @var string <p>策略ID。</p>
     */
    public $StrategyId;

    /**
     * @var string <p>策略名称。</p>
     */
    public $StrategyName;

    /**
     * @var boolean <p>当前用户是否绑定桌面，true：绑定，false：未绑定任何桌面</p>
     */
    public $BindStatus;

    /**
     * @param string $Id <p>用户ID。</p>
     * @param string $Name <p>名字。</p>
     * @param string $DisplayName <p>显示名字。</p>
     * @param string $Mail <p>邮箱。</p>
     * @param string $PhoneNum <p>手机号。</p>
     * @param string $Status <p>状态。<br>ACTIVE:启用<br>PENDING_ACTIVATE:待激活<br>PENDING_ONBOARD:待启用<br>SUSPENDED:已停用<br>INACTIVE:已离职<br>PASSWORD_RESET:重置密码<br>LOCKED_OUT:锁定</p>
     * @param string $DepartmentId <p>部门ID。</p>
     * @param string $StrategyId <p>策略ID。</p>
     * @param string $StrategyName <p>策略名称。</p>
     * @param boolean $BindStatus <p>当前用户是否绑定桌面，true：绑定，false：未绑定任何桌面</p>
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Mail",$param) and $param["Mail"] !== null) {
            $this->Mail = $param["Mail"];
        }

        if (array_key_exists("PhoneNum",$param) and $param["PhoneNum"] !== null) {
            $this->PhoneNum = $param["PhoneNum"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("DepartmentId",$param) and $param["DepartmentId"] !== null) {
            $this->DepartmentId = $param["DepartmentId"];
        }

        if (array_key_exists("StrategyId",$param) and $param["StrategyId"] !== null) {
            $this->StrategyId = $param["StrategyId"];
        }

        if (array_key_exists("StrategyName",$param) and $param["StrategyName"] !== null) {
            $this->StrategyName = $param["StrategyName"];
        }

        if (array_key_exists("BindStatus",$param) and $param["BindStatus"] !== null) {
            $this->BindStatus = $param["BindStatus"];
        }
    }
}
