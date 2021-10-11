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
namespace TencentCloud\Iotexplorer\V20190423\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 位置空间详情
 *
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method string getSpaceId() 获取位置空间Id
 * @method void setSpaceId(string $SpaceId) 设置位置空间Id
 * @method string getSpaceName() 获取位置空间名称
 * @method void setSpaceName(string $SpaceName) 设置位置空间名称
 * @method integer getAuthorizeType() 获取授权类型
 * @method void setAuthorizeType(integer $AuthorizeType) 设置授权类型
 * @method string getDescription() 获取描述备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置描述备注
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getProductIdList() 获取产品列表
 * @method void setProductIdList(array $ProductIdList) 设置产品列表
 * @method string getIcon() 获取缩略图
 * @method void setIcon(string $Icon) 设置缩略图
 * @method integer getCreateTime() 获取创建时间
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
 * @method integer getUpdateTime() 获取更新时间
 * @method void setUpdateTime(integer $UpdateTime) 设置更新时间
 * @method integer getZoom() 获取用户自定义地图缩放
 * @method void setZoom(integer $Zoom) 设置用户自定义地图缩放
 */
class PositionSpaceInfo extends AbstractModel
{
    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var string 位置空间Id
     */
    public $SpaceId;

    /**
     * @var string 位置空间名称
     */
    public $SpaceName;

    /**
     * @var integer 授权类型
     */
    public $AuthorizeType;

    /**
     * @var string 描述备注
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var array 产品列表
     */
    public $ProductIdList;

    /**
     * @var string 缩略图
     */
    public $Icon;

    /**
     * @var integer 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 更新时间
     */
    public $UpdateTime;

    /**
     * @var integer 用户自定义地图缩放
     */
    public $Zoom;

    /**
     * @param string $ProjectId 项目Id
     * @param string $SpaceId 位置空间Id
     * @param string $SpaceName 位置空间名称
     * @param integer $AuthorizeType 授权类型
     * @param string $Description 描述备注
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $ProductIdList 产品列表
     * @param string $Icon 缩略图
     * @param integer $CreateTime 创建时间
     * @param integer $UpdateTime 更新时间
     * @param integer $Zoom 用户自定义地图缩放
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("SpaceId",$param) and $param["SpaceId"] !== null) {
            $this->SpaceId = $param["SpaceId"];
        }

        if (array_key_exists("SpaceName",$param) and $param["SpaceName"] !== null) {
            $this->SpaceName = $param["SpaceName"];
        }

        if (array_key_exists("AuthorizeType",$param) and $param["AuthorizeType"] !== null) {
            $this->AuthorizeType = $param["AuthorizeType"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ProductIdList",$param) and $param["ProductIdList"] !== null) {
            $this->ProductIdList = $param["ProductIdList"];
        }

        if (array_key_exists("Icon",$param) and $param["Icon"] !== null) {
            $this->Icon = $param["Icon"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Zoom",$param) and $param["Zoom"] !== null) {
            $this->Zoom = $param["Zoom"];
        }
    }
}
