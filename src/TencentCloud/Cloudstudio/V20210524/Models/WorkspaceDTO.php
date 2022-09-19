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
 * 工作空间结构
 *
 * @method string getName() 获取工作空间名称
 * @method void setName(string $Name) 设置工作空间名称
 * @method string getVersionControlType() 获取代码来源类型
 * @method void setVersionControlType(string $VersionControlType) 设置代码来源类型
 * @method integer getImageId() 获取镜像id
 * @method void setImageId(integer $ImageId) 设置镜像id
 * @method string getImageName() 获取镜像名称
 * @method void setImageName(string $ImageName) 设置镜像名称
 * @method string getDescription() 获取描述
 * @method void setDescription(string $Description) 设置描述
 * @method integer getWorkspaceVersion() 获取工作空间版本
 * @method void setWorkspaceVersion(integer $WorkspaceVersion) 设置工作空间版本
 * @method WorkspaceResourceDTO getWorkspaceResourceDTO() 获取工作空间资源结构
 * @method void setWorkspaceResourceDTO(WorkspaceResourceDTO $WorkspaceResourceDTO) 设置工作空间资源结构
 * @method string getVersionControlUrl() 获取代码仓库地址
 * @method void setVersionControlUrl(string $VersionControlUrl) 设置代码仓库地址
 * @method string getVersionControlRef() 获取代码Ref是分支还是标签
 * @method void setVersionControlRef(string $VersionControlRef) 设置代码Ref是分支还是标签
 * @method string getVersionControlRefType() 获取代码Ref地址
 * @method void setVersionControlRefType(string $VersionControlRefType) 设置代码Ref地址
 * @method string getSnapshotUid() 获取快照Uid
 * @method void setSnapshotUid(string $SnapshotUid) 设置快照Uid
 * @method integer getTemplateId() 获取模板id
 * @method void setTemplateId(integer $TemplateId) 设置模板id
 * @method integer getPriceId() 获取价格id
 * @method void setPriceId(integer $PriceId) 设置价格id
 * @method integer getInitializeStatus() 获取初始化状态
 * @method void setInitializeStatus(integer $InitializeStatus) 设置初始化状态
 * @method string getVersionControlDesc() 获取描述
 * @method void setVersionControlDesc(string $VersionControlDesc) 设置描述
 */
class WorkspaceDTO extends AbstractModel
{
    /**
     * @var string 工作空间名称
     */
    public $Name;

    /**
     * @var string 代码来源类型
     */
    public $VersionControlType;

    /**
     * @var integer 镜像id
     */
    public $ImageId;

    /**
     * @var string 镜像名称
     */
    public $ImageName;

    /**
     * @var string 描述
     */
    public $Description;

    /**
     * @var integer 工作空间版本
     */
    public $WorkspaceVersion;

    /**
     * @var WorkspaceResourceDTO 工作空间资源结构
     */
    public $WorkspaceResourceDTO;

    /**
     * @var string 代码仓库地址
     */
    public $VersionControlUrl;

    /**
     * @var string 代码Ref是分支还是标签
     */
    public $VersionControlRef;

    /**
     * @var string 代码Ref地址
     */
    public $VersionControlRefType;

    /**
     * @var string 快照Uid
     */
    public $SnapshotUid;

    /**
     * @var integer 模板id
     */
    public $TemplateId;

    /**
     * @var integer 价格id
     */
    public $PriceId;

    /**
     * @var integer 初始化状态
     */
    public $InitializeStatus;

    /**
     * @var string 描述
     */
    public $VersionControlDesc;

    /**
     * @param string $Name 工作空间名称
     * @param string $VersionControlType 代码来源类型
     * @param integer $ImageId 镜像id
     * @param string $ImageName 镜像名称
     * @param string $Description 描述
     * @param integer $WorkspaceVersion 工作空间版本
     * @param WorkspaceResourceDTO $WorkspaceResourceDTO 工作空间资源结构
     * @param string $VersionControlUrl 代码仓库地址
     * @param string $VersionControlRef 代码Ref是分支还是标签
     * @param string $VersionControlRefType 代码Ref地址
     * @param string $SnapshotUid 快照Uid
     * @param integer $TemplateId 模板id
     * @param integer $PriceId 价格id
     * @param integer $InitializeStatus 初始化状态
     * @param string $VersionControlDesc 描述
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

        if (array_key_exists("VersionControlType",$param) and $param["VersionControlType"] !== null) {
            $this->VersionControlType = $param["VersionControlType"];
        }

        if (array_key_exists("ImageId",$param) and $param["ImageId"] !== null) {
            $this->ImageId = $param["ImageId"];
        }

        if (array_key_exists("ImageName",$param) and $param["ImageName"] !== null) {
            $this->ImageName = $param["ImageName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("WorkspaceVersion",$param) and $param["WorkspaceVersion"] !== null) {
            $this->WorkspaceVersion = $param["WorkspaceVersion"];
        }

        if (array_key_exists("WorkspaceResourceDTO",$param) and $param["WorkspaceResourceDTO"] !== null) {
            $this->WorkspaceResourceDTO = new WorkspaceResourceDTO();
            $this->WorkspaceResourceDTO->deserialize($param["WorkspaceResourceDTO"]);
        }

        if (array_key_exists("VersionControlUrl",$param) and $param["VersionControlUrl"] !== null) {
            $this->VersionControlUrl = $param["VersionControlUrl"];
        }

        if (array_key_exists("VersionControlRef",$param) and $param["VersionControlRef"] !== null) {
            $this->VersionControlRef = $param["VersionControlRef"];
        }

        if (array_key_exists("VersionControlRefType",$param) and $param["VersionControlRefType"] !== null) {
            $this->VersionControlRefType = $param["VersionControlRefType"];
        }

        if (array_key_exists("SnapshotUid",$param) and $param["SnapshotUid"] !== null) {
            $this->SnapshotUid = $param["SnapshotUid"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("PriceId",$param) and $param["PriceId"] !== null) {
            $this->PriceId = $param["PriceId"];
        }

        if (array_key_exists("InitializeStatus",$param) and $param["InitializeStatus"] !== null) {
            $this->InitializeStatus = $param["InitializeStatus"];
        }

        if (array_key_exists("VersionControlDesc",$param) and $param["VersionControlDesc"] !== null) {
            $this->VersionControlDesc = $param["VersionControlDesc"];
        }
    }
}
