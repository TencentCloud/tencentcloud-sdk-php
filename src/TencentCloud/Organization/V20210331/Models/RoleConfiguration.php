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
 * @method string getRoleConfigurationId() 获取权限配置配置ID。
 * @method void setRoleConfigurationId(string $RoleConfigurationId) 设置权限配置配置ID。
 * @method string getRoleConfigurationName() 获取权限配置配名称。
 * @method void setRoleConfigurationName(string $RoleConfigurationName) 设置权限配置配名称。
 * @method string getDescription() 获取权限配置的描述。
 * @method void setDescription(string $Description) 设置权限配置的描述。
 * @method integer getSessionDuration() 获取会话持续时间。CIC 用户使用访问配置访问成员账号时，会话最多保持的时间。
单位：秒。
 * @method void setSessionDuration(integer $SessionDuration) 设置会话持续时间。CIC 用户使用访问配置访问成员账号时，会话最多保持的时间。
单位：秒。
 * @method string getRelayState() 获取初始访问页面。CIC 用户使用访问配置访问成员账号时，初始访问的页面地址。
 * @method void setRelayState(string $RelayState) 设置初始访问页面。CIC 用户使用访问配置访问成员账号时，初始访问的页面地址。
 * @method string getCreateTime() 获取权限配置的创建时间。
 * @method void setCreateTime(string $CreateTime) 设置权限配置的创建时间。
 * @method string getUpdateTime() 获取权限配置的更新时间。
 * @method void setUpdateTime(string $UpdateTime) 设置权限配置的更新时间。
 * @method boolean getIsSelected() 获取如果有入参FilterTargets查询成员账号是否配置过权限，配置了返回true，否则返回false。
 * @method void setIsSelected(boolean $IsSelected) 设置如果有入参FilterTargets查询成员账号是否配置过权限，配置了返回true，否则返回false。
 */
class RoleConfiguration extends AbstractModel
{
    /**
     * @var string 权限配置配置ID。
     */
    public $RoleConfigurationId;

    /**
     * @var string 权限配置配名称。
     */
    public $RoleConfigurationName;

    /**
     * @var string 权限配置的描述。
     */
    public $Description;

    /**
     * @var integer 会话持续时间。CIC 用户使用访问配置访问成员账号时，会话最多保持的时间。
单位：秒。
     */
    public $SessionDuration;

    /**
     * @var string 初始访问页面。CIC 用户使用访问配置访问成员账号时，初始访问的页面地址。
     */
    public $RelayState;

    /**
     * @var string 权限配置的创建时间。
     */
    public $CreateTime;

    /**
     * @var string 权限配置的更新时间。
     */
    public $UpdateTime;

    /**
     * @var boolean 如果有入参FilterTargets查询成员账号是否配置过权限，配置了返回true，否则返回false。
     */
    public $IsSelected;

    /**
     * @param string $RoleConfigurationId 权限配置配置ID。
     * @param string $RoleConfigurationName 权限配置配名称。
     * @param string $Description 权限配置的描述。
     * @param integer $SessionDuration 会话持续时间。CIC 用户使用访问配置访问成员账号时，会话最多保持的时间。
单位：秒。
     * @param string $RelayState 初始访问页面。CIC 用户使用访问配置访问成员账号时，初始访问的页面地址。
     * @param string $CreateTime 权限配置的创建时间。
     * @param string $UpdateTime 权限配置的更新时间。
     * @param boolean $IsSelected 如果有入参FilterTargets查询成员账号是否配置过权限，配置了返回true，否则返回false。
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
    }
}
