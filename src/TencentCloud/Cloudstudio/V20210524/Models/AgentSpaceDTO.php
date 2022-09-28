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
namespace TencentCloud\Cloudstudio\V20210524\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云服务器创建工作空间 DTO
 *
 * @method string getName() 获取工作空间名称
 * @method void setName(string $Name) 设置工作空间名称
 * @method integer getImageId() 获取镜像id
 * @method void setImageId(integer $ImageId) 设置镜像id
 * @method string getImageName() 获取镜像名称
 * @method void setImageName(string $ImageName) 设置镜像名称
 * @method string getRemoteUser() 获取云服务器登录名称
 * @method void setRemoteUser(string $RemoteUser) 设置云服务器登录名称
 * @method string getRemoteHost() 获取云服务器登录地址
 * @method void setRemoteHost(string $RemoteHost) 设置云服务器登录地址
 * @method string getRemotePort() 获取云服务器登录端口
 * @method void setRemotePort(string $RemotePort) 设置云服务器登录端口
 * @method string getWorkspaceType() 获取工作空间类型
 * @method void setWorkspaceType(string $WorkspaceType) 设置工作空间类型
 * @method integer getWorkspaceVersion() 获取工作空间版本
 * @method void setWorkspaceVersion(integer $WorkspaceVersion) 设置工作空间版本
 * @method WorkspaceResourceDTO getWorkspaceResourceDTO() 获取工作空间资源结构
 * @method void setWorkspaceResourceDTO(WorkspaceResourceDTO $WorkspaceResourceDTO) 设置工作空间资源结构
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 */
class AgentSpaceDTO extends AbstractModel
{
    /**
     * @var string 工作空间名称
     */
    public $Name;

    /**
     * @var integer 镜像id
     */
    public $ImageId;

    /**
     * @var string 镜像名称
     */
    public $ImageName;

    /**
     * @var string 云服务器登录名称
     */
    public $RemoteUser;

    /**
     * @var string 云服务器登录地址
     */
    public $RemoteHost;

    /**
     * @var string 云服务器登录端口
     */
    public $RemotePort;

    /**
     * @var string 工作空间类型
     */
    public $WorkspaceType;

    /**
     * @var integer 工作空间版本
     */
    public $WorkspaceVersion;

    /**
     * @var WorkspaceResourceDTO 工作空间资源结构
     */
    public $WorkspaceResourceDTO;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @param string $Name 工作空间名称
     * @param integer $ImageId 镜像id
     * @param string $ImageName 镜像名称
     * @param string $RemoteUser 云服务器登录名称
     * @param string $RemoteHost 云服务器登录地址
     * @param string $RemotePort 云服务器登录端口
     * @param string $WorkspaceType 工作空间类型
     * @param integer $WorkspaceVersion 工作空间版本
     * @param WorkspaceResourceDTO $WorkspaceResourceDTO 工作空间资源结构
     * @param string $Description 描述
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("RemoteUser",$param) and $param["RemoteUser"] !== null) {
            $this->RemoteUser = $param["RemoteUser"];
        }

        if (array_key_exists("RemoteHost",$param) and $param["RemoteHost"] !== null) {
            $this->RemoteHost = $param["RemoteHost"];
        }

        if (array_key_exists("RemotePort",$param) and $param["RemotePort"] !== null) {
            $this->RemotePort = $param["RemotePort"];
        }

        if (array_key_exists("WorkspaceType",$param) and $param["WorkspaceType"] !== null) {
            $this->WorkspaceType = $param["WorkspaceType"];
        }

        if (array_key_exists("WorkspaceVersion",$param) and $param["WorkspaceVersion"] !== null) {
            $this->WorkspaceVersion = $param["WorkspaceVersion"];
        }

        if (array_key_exists("WorkspaceResourceDTO",$param) and $param["WorkspaceResourceDTO"] !== null) {
            $this->WorkspaceResourceDTO = new WorkspaceResourceDTO();
            $this->WorkspaceResourceDTO->deserialize($param["WorkspaceResourceDTO"]);
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }
    }
}
