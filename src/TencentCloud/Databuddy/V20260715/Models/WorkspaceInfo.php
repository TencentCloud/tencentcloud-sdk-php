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
namespace TencentCloud\Databuddy\V20260715\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 工作空间信息
 *
 * @method string getWorkspaceId() 获取工作空间ID
 * @method void setWorkspaceId(string $WorkspaceId) 设置工作空间ID
 * @method string getWorkspaceName() 获取工作空间名称
 * @method void setWorkspaceName(string $WorkspaceName) 设置工作空间名称
 * @method string getDescription() 获取工作空间描述
 * @method void setDescription(string $Description) 设置工作空间描述
 * @method string getWorkspaceRegion() 获取工作空间地域（如 ap-guangzhou）
 * @method void setWorkspaceRegion(string $WorkspaceRegion) 设置工作空间地域（如 ap-guangzhou）
 * @method integer getStatus() 获取工作空间状态：0=未指定 1=创建中 2=创建失败 3=正常运行中 4=已删除
 * @method void setStatus(integer $Status) 设置工作空间状态：0=未指定 1=创建中 2=创建失败 3=正常运行中 4=已删除
 * @method string getErrorReason() 获取失败原因（Status=2 创建失败时有值）
 * @method void setErrorReason(string $ErrorReason) 设置失败原因（Status=2 创建失败时有值）
 * @method StandardUserInfo getCreator() 获取创建者信息
 * @method void setCreator(StandardUserInfo $Creator) 设置创建者信息
 * @method string getCreateTime() 获取创建时间，毫秒时间戳
 * @method void setCreateTime(string $CreateTime) 设置创建时间，毫秒时间戳
 * @method string getUpdateTime() 获取更新时间，毫秒时间戳
 * @method void setUpdateTime(string $UpdateTime) 设置更新时间，毫秒时间戳
 * @method boolean getHasAccess() 获取当前用户是否拥有该工作空间的访问权限
 * @method void setHasAccess(boolean $HasAccess) 设置当前用户是否拥有该工作空间的访问权限
 */
class WorkspaceInfo extends AbstractModel
{
    /**
     * @var string 工作空间ID
     */
    public $WorkspaceId;

    /**
     * @var string 工作空间名称
     */
    public $WorkspaceName;

    /**
     * @var string 工作空间描述
     */
    public $Description;

    /**
     * @var string 工作空间地域（如 ap-guangzhou）
     */
    public $WorkspaceRegion;

    /**
     * @var integer 工作空间状态：0=未指定 1=创建中 2=创建失败 3=正常运行中 4=已删除
     */
    public $Status;

    /**
     * @var string 失败原因（Status=2 创建失败时有值）
     */
    public $ErrorReason;

    /**
     * @var StandardUserInfo 创建者信息
     */
    public $Creator;

    /**
     * @var string 创建时间，毫秒时间戳
     */
    public $CreateTime;

    /**
     * @var string 更新时间，毫秒时间戳
     */
    public $UpdateTime;

    /**
     * @var boolean 当前用户是否拥有该工作空间的访问权限
     */
    public $HasAccess;

    /**
     * @param string $WorkspaceId 工作空间ID
     * @param string $WorkspaceName 工作空间名称
     * @param string $Description 工作空间描述
     * @param string $WorkspaceRegion 工作空间地域（如 ap-guangzhou）
     * @param integer $Status 工作空间状态：0=未指定 1=创建中 2=创建失败 3=正常运行中 4=已删除
     * @param string $ErrorReason 失败原因（Status=2 创建失败时有值）
     * @param StandardUserInfo $Creator 创建者信息
     * @param string $CreateTime 创建时间，毫秒时间戳
     * @param string $UpdateTime 更新时间，毫秒时间戳
     * @param boolean $HasAccess 当前用户是否拥有该工作空间的访问权限
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
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("WorkspaceName",$param) and $param["WorkspaceName"] !== null) {
            $this->WorkspaceName = $param["WorkspaceName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("WorkspaceRegion",$param) and $param["WorkspaceRegion"] !== null) {
            $this->WorkspaceRegion = $param["WorkspaceRegion"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ErrorReason",$param) and $param["ErrorReason"] !== null) {
            $this->ErrorReason = $param["ErrorReason"];
        }

        if (array_key_exists("Creator",$param) and $param["Creator"] !== null) {
            $this->Creator = new StandardUserInfo();
            $this->Creator->deserialize($param["Creator"]);
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("HasAccess",$param) and $param["HasAccess"] !== null) {
            $this->HasAccess = $param["HasAccess"];
        }
    }
}
