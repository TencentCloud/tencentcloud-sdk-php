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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeElementProfilePage请求参数结构体
 *
 * @method string getBuildingId() 获取建筑id
 * @method void setBuildingId(string $BuildingId) 设置建筑id
 * @method integer getPageNumber() 获取页码
 * @method void setPageNumber(integer $PageNumber) 设置页码
 * @method integer getPageSize() 获取页容量
 * @method void setPageSize(integer $PageSize) 设置页容量
 * @method string getWorkspaceId() 获取项目空间id
 * @method void setWorkspaceId(string $WorkspaceId) 设置项目空间id
 * @method string getApplicationToken() 获取应用token
 * @method void setApplicationToken(string $ApplicationToken) 设置应用token
 * @method array getParentElementIds() 获取父级构件id
 * @method void setParentElementIds(array $ParentElementIds) 设置父级构件id
 * @method integer getLevel() 获取空间层级
 * @method void setLevel(integer $Level) 设置空间层级
 * @method string getSpaceTypeCode() 获取空间分类代码
 * @method void setSpaceTypeCode(string $SpaceTypeCode) 设置空间分类代码
 * @method array getEntityTypes() 获取构件类型
 * @method void setEntityTypes(array $EntityTypes) 设置构件类型
 * @method boolean getIncludeDelete() 获取是否包含已删除构件
 * @method void setIncludeDelete(boolean $IncludeDelete) 设置是否包含已删除构件
 * @method integer getStartTime() 获取时间范围-开始
 * @method void setStartTime(integer $StartTime) 设置时间范围-开始
 * @method integer getEndTime() 获取时间范围-结束
 * @method void setEndTime(integer $EndTime) 设置时间范围-结束
 */
class DescribeElementProfilePageRequest extends AbstractModel
{
    /**
     * @var string 建筑id
     */
    public $BuildingId;

    /**
     * @var integer 页码
     */
    public $PageNumber;

    /**
     * @var integer 页容量
     */
    public $PageSize;

    /**
     * @var string 项目空间id
     */
    public $WorkspaceId;

    /**
     * @var string 应用token
     */
    public $ApplicationToken;

    /**
     * @var array 父级构件id
     */
    public $ParentElementIds;

    /**
     * @var integer 空间层级
     */
    public $Level;

    /**
     * @var string 空间分类代码
     */
    public $SpaceTypeCode;

    /**
     * @var array 构件类型
     */
    public $EntityTypes;

    /**
     * @var boolean 是否包含已删除构件
     */
    public $IncludeDelete;

    /**
     * @var integer 时间范围-开始
     */
    public $StartTime;

    /**
     * @var integer 时间范围-结束
     */
    public $EndTime;

    /**
     * @param string $BuildingId 建筑id
     * @param integer $PageNumber 页码
     * @param integer $PageSize 页容量
     * @param string $WorkspaceId 项目空间id
     * @param string $ApplicationToken 应用token
     * @param array $ParentElementIds 父级构件id
     * @param integer $Level 空间层级
     * @param string $SpaceTypeCode 空间分类代码
     * @param array $EntityTypes 构件类型
     * @param boolean $IncludeDelete 是否包含已删除构件
     * @param integer $StartTime 时间范围-开始
     * @param integer $EndTime 时间范围-结束
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
        if (array_key_exists("BuildingId",$param) and $param["BuildingId"] !== null) {
            $this->BuildingId = $param["BuildingId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("ApplicationToken",$param) and $param["ApplicationToken"] !== null) {
            $this->ApplicationToken = $param["ApplicationToken"];
        }

        if (array_key_exists("ParentElementIds",$param) and $param["ParentElementIds"] !== null) {
            $this->ParentElementIds = $param["ParentElementIds"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("SpaceTypeCode",$param) and $param["SpaceTypeCode"] !== null) {
            $this->SpaceTypeCode = $param["SpaceTypeCode"];
        }

        if (array_key_exists("EntityTypes",$param) and $param["EntityTypes"] !== null) {
            $this->EntityTypes = $param["EntityTypes"];
        }

        if (array_key_exists("IncludeDelete",$param) and $param["IncludeDelete"] !== null) {
            $this->IncludeDelete = $param["IncludeDelete"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
