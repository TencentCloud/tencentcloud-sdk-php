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
namespace TencentCloud\Organization\V20210331\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CIC权限配置
 *
 * @method string getRoleConfigurationId() 获取<p>权限配置配置ID。</p>
 * @method void setRoleConfigurationId(string $RoleConfigurationId) 设置<p>权限配置配置ID。</p>
 * @method string getRoleConfigurationName() 获取<p>权限配置配名称。</p>
 * @method void setRoleConfigurationName(string $RoleConfigurationName) 设置<p>权限配置配名称。</p>
 * @method string getDescription() 获取<p>权限配置的描述。</p>
 * @method void setDescription(string $Description) 设置<p>权限配置的描述。</p>
 * @method integer getSessionDuration() 获取<p>会话持续时间。CIC 用户使用访问配置访问成员账号时，会话最多保持的时间。<br>单位：秒。</p>
 * @method void setSessionDuration(integer $SessionDuration) 设置<p>会话持续时间。CIC 用户使用访问配置访问成员账号时，会话最多保持的时间。<br>单位：秒。</p>
 * @method string getRelayState() 获取<p>初始访问页面。CIC 用户使用访问配置访问成员账号时，初始访问的页面地址。</p>
 * @method void setRelayState(string $RelayState) 设置<p>初始访问页面。CIC 用户使用访问配置访问成员账号时，初始访问的页面地址。</p>
 * @method string getCreateTime() 获取<p>权限配置的创建时间。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>权限配置的创建时间。</p>
 * @method string getUpdateTime() 获取<p>权限配置的更新时间。</p>
 * @method void setUpdateTime(string $UpdateTime) 设置<p>权限配置的更新时间。</p>
 * @method boolean getIsSelected() 获取<p>如果有入参FilterTargets查询成员账号是否配置过权限，配置了返回true，否则返回false。</p>
 * @method void setIsSelected(boolean $IsSelected) 设置<p>如果有入参FilterTargets查询成员账号是否配置过权限，配置了返回true，否则返回false。</p>
 * @method string getApplyStatus() 获取<p>会话时长应用状态</p><p>枚举值：</p><ul><li>Success： 全部账号应用成功</li><li>Failed： 存在失败账号</li><li>Applying： 任务在途</li><li>Unknown： 已部署账号超查询上限</li></ul>
 * @method void setApplyStatus(string $ApplyStatus) 设置<p>会话时长应用状态</p><p>枚举值：</p><ul><li>Success： 全部账号应用成功</li><li>Failed： 存在失败账号</li><li>Applying： 任务在途</li><li>Unknown： 已部署账号超查询上限</li></ul>
 * @method integer getAppliedSessionDuration() 获取<p>当前已真实下发到 CAM 的会话时长</p><p>取值范围：[900, 43200]</p><p>单位：秒</p>
 * @method void setAppliedSessionDuration(integer $AppliedSessionDuration) 设置<p>当前已真实下发到 CAM 的会话时长</p><p>取值范围：[900, 43200]</p><p>单位：秒</p>
 * @method string getSessionDurationUpdateTime() 获取<p>最近一次成功下发时间</p><p>参数格式： YYYY-MM-DD hh:mm:ss</p>
 * @method void setSessionDurationUpdateTime(string $SessionDurationUpdateTime) 设置<p>最近一次成功下发时间</p><p>参数格式： YYYY-MM-DD hh:mm:ss</p>
 * @method array getFailedAccounts() 获取<p>未成功应用的账号明细</p><p>仅 Failed 态返回</p>
 * @method void setFailedAccounts(array $FailedAccounts) 设置<p>未成功应用的账号明细</p><p>仅 Failed 态返回</p>
 */
class RoleConfiguration extends AbstractModel
{
    /**
     * @var string <p>权限配置配置ID。</p>
     */
    public $RoleConfigurationId;

    /**
     * @var string <p>权限配置配名称。</p>
     */
    public $RoleConfigurationName;

    /**
     * @var string <p>权限配置的描述。</p>
     */
    public $Description;

    /**
     * @var integer <p>会话持续时间。CIC 用户使用访问配置访问成员账号时，会话最多保持的时间。<br>单位：秒。</p>
     */
    public $SessionDuration;

    /**
     * @var string <p>初始访问页面。CIC 用户使用访问配置访问成员账号时，初始访问的页面地址。</p>
     */
    public $RelayState;

    /**
     * @var string <p>权限配置的创建时间。</p>
     */
    public $CreateTime;

    /**
     * @var string <p>权限配置的更新时间。</p>
     */
    public $UpdateTime;

    /**
     * @var boolean <p>如果有入参FilterTargets查询成员账号是否配置过权限，配置了返回true，否则返回false。</p>
     */
    public $IsSelected;

    /**
     * @var string <p>会话时长应用状态</p><p>枚举值：</p><ul><li>Success： 全部账号应用成功</li><li>Failed： 存在失败账号</li><li>Applying： 任务在途</li><li>Unknown： 已部署账号超查询上限</li></ul>
     */
    public $ApplyStatus;

    /**
     * @var integer <p>当前已真实下发到 CAM 的会话时长</p><p>取值范围：[900, 43200]</p><p>单位：秒</p>
     */
    public $AppliedSessionDuration;

    /**
     * @var string <p>最近一次成功下发时间</p><p>参数格式： YYYY-MM-DD hh:mm:ss</p>
     */
    public $SessionDurationUpdateTime;

    /**
     * @var array <p>未成功应用的账号明细</p><p>仅 Failed 态返回</p>
     */
    public $FailedAccounts;

    /**
     * @param string $RoleConfigurationId <p>权限配置配置ID。</p>
     * @param string $RoleConfigurationName <p>权限配置配名称。</p>
     * @param string $Description <p>权限配置的描述。</p>
     * @param integer $SessionDuration <p>会话持续时间。CIC 用户使用访问配置访问成员账号时，会话最多保持的时间。<br>单位：秒。</p>
     * @param string $RelayState <p>初始访问页面。CIC 用户使用访问配置访问成员账号时，初始访问的页面地址。</p>
     * @param string $CreateTime <p>权限配置的创建时间。</p>
     * @param string $UpdateTime <p>权限配置的更新时间。</p>
     * @param boolean $IsSelected <p>如果有入参FilterTargets查询成员账号是否配置过权限，配置了返回true，否则返回false。</p>
     * @param string $ApplyStatus <p>会话时长应用状态</p><p>枚举值：</p><ul><li>Success： 全部账号应用成功</li><li>Failed： 存在失败账号</li><li>Applying： 任务在途</li><li>Unknown： 已部署账号超查询上限</li></ul>
     * @param integer $AppliedSessionDuration <p>当前已真实下发到 CAM 的会话时长</p><p>取值范围：[900, 43200]</p><p>单位：秒</p>
     * @param string $SessionDurationUpdateTime <p>最近一次成功下发时间</p><p>参数格式： YYYY-MM-DD hh:mm:ss</p>
     * @param array $FailedAccounts <p>未成功应用的账号明细</p><p>仅 Failed 态返回</p>
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
        if (array_key_exists("RoleConfigurationId",$param) and $param["RoleConfigurationId"] !== null) {
            $this->RoleConfigurationId = $param["RoleConfigurationId"];
        }

        if (array_key_exists("RoleConfigurationName",$param) and $param["RoleConfigurationName"] !== null) {
            $this->RoleConfigurationName = $param["RoleConfigurationName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("SessionDuration",$param) and $param["SessionDuration"] !== null) {
            $this->SessionDuration = $param["SessionDuration"];
        }

        if (array_key_exists("RelayState",$param) and $param["RelayState"] !== null) {
            $this->RelayState = $param["RelayState"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("IsSelected",$param) and $param["IsSelected"] !== null) {
            $this->IsSelected = $param["IsSelected"];
        }

        if (array_key_exists("ApplyStatus",$param) and $param["ApplyStatus"] !== null) {
            $this->ApplyStatus = $param["ApplyStatus"];
        }

        if (array_key_exists("AppliedSessionDuration",$param) and $param["AppliedSessionDuration"] !== null) {
            $this->AppliedSessionDuration = $param["AppliedSessionDuration"];
        }

        if (array_key_exists("SessionDurationUpdateTime",$param) and $param["SessionDurationUpdateTime"] !== null) {
            $this->SessionDurationUpdateTime = $param["SessionDurationUpdateTime"];
        }

        if (array_key_exists("FailedAccounts",$param) and $param["FailedAccounts"] !== null) {
            $this->FailedAccounts = [];
            foreach ($param["FailedAccounts"] as $key => $value){
                $obj = new FailedAccount();
                $obj->deserialize($value);
                array_push($this->FailedAccounts, $obj);
            }
        }
    }
}
