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
 * DescribeDeviceList请求参数结构体
 *
 * @method integer getWorkspaceId() 获取工作空间id
 * @method void setWorkspaceId(integer $WorkspaceId) 设置工作空间id
 * @method integer getPageNumber() 获取分页查询，第几页，必传，大于0
 * @method void setPageNumber(integer $PageNumber) 设置分页查询，第几页，必传，大于0
 * @method integer getPageSize() 获取每页条数，必传大于0
 * @method void setPageSize(integer $PageSize) 设置每页条数，必传大于0
 * @method string getApplicationToken() 获取应用token
 * @method void setApplicationToken(string $ApplicationToken) 设置应用token
 * @method array getDeviceTypeSet() 获取设备类型，非必填
 * @method void setDeviceTypeSet(array $DeviceTypeSet) 设置设备类型，非必填
 * @method array getProductIdSet() 获取产品 pid，非必填
 * @method void setProductIdSet(array $ProductIdSet) 设置产品 pid，非必填
 * @method array getTagIdSet() 获取设备标签，非必填
 * @method void setTagIdSet(array $TagIdSet) 设置设备标签，非必填
 * @method array getSpaceCodeSet() 获取空间层级
 * @method void setSpaceCodeSet(array $SpaceCodeSet) 设置空间层级
 * @method array getDeviceTagSet() 获取设备标签名，非必填
 * @method void setDeviceTagSet(array $DeviceTagSet) 设置设备标签名，非必填
 * @method array getWIDSet() 获取设备wid,非必填
 * @method void setWIDSet(array $WIDSet) 设置设备wid,非必填
 * @method CustomField getField() 获取自定义字段
 * @method void setField(CustomField $Field) 设置自定义字段
 * @method array getGroupIdSet() 获取分组id列表，非必填
 * @method void setGroupIdSet(array $GroupIdSet) 设置分组id列表，非必填
 * @method string getIsActive() 获取是否激活，默认全部，"1"激活，"0"未激活
 * @method void setIsActive(string $IsActive) 设置是否激活，默认全部，"1"激活，"0"未激活
 * @method string getIsCamera() 获取是否为摄像头，默认全部，"true"摄像头，"false"非摄像头
 * @method void setIsCamera(string $IsCamera) 设置是否为摄像头，默认全部，"true"摄像头，"false"非摄像头
 */
class DescribeDeviceListRequest extends AbstractModel
{
    /**
     * @var integer 工作空间id
     */
    public $WorkspaceId;

    /**
     * @var integer 分页查询，第几页，必传，大于0
     */
    public $PageNumber;

    /**
     * @var integer 每页条数，必传大于0
     */
    public $PageSize;

    /**
     * @var string 应用token
     */
    public $ApplicationToken;

    /**
     * @var array 设备类型，非必填
     */
    public $DeviceTypeSet;

    /**
     * @var array 产品 pid，非必填
     */
    public $ProductIdSet;

    /**
     * @var array 设备标签，非必填
     */
    public $TagIdSet;

    /**
     * @var array 空间层级
     */
    public $SpaceCodeSet;

    /**
     * @var array 设备标签名，非必填
     */
    public $DeviceTagSet;

    /**
     * @var array 设备wid,非必填
     */
    public $WIDSet;

    /**
     * @var CustomField 自定义字段
     */
    public $Field;

    /**
     * @var array 分组id列表，非必填
     */
    public $GroupIdSet;

    /**
     * @var string 是否激活，默认全部，"1"激活，"0"未激活
     */
    public $IsActive;

    /**
     * @var string 是否为摄像头，默认全部，"true"摄像头，"false"非摄像头
     */
    public $IsCamera;

    /**
     * @param integer $WorkspaceId 工作空间id
     * @param integer $PageNumber 分页查询，第几页，必传，大于0
     * @param integer $PageSize 每页条数，必传大于0
     * @param string $ApplicationToken 应用token
     * @param array $DeviceTypeSet 设备类型，非必填
     * @param array $ProductIdSet 产品 pid，非必填
     * @param array $TagIdSet 设备标签，非必填
     * @param array $SpaceCodeSet 空间层级
     * @param array $DeviceTagSet 设备标签名，非必填
     * @param array $WIDSet 设备wid,非必填
     * @param CustomField $Field 自定义字段
     * @param array $GroupIdSet 分组id列表，非必填
     * @param string $IsActive 是否激活，默认全部，"1"激活，"0"未激活
     * @param string $IsCamera 是否为摄像头，默认全部，"true"摄像头，"false"非摄像头
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

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("ApplicationToken",$param) and $param["ApplicationToken"] !== null) {
            $this->ApplicationToken = $param["ApplicationToken"];
        }

        if (array_key_exists("DeviceTypeSet",$param) and $param["DeviceTypeSet"] !== null) {
            $this->DeviceTypeSet = $param["DeviceTypeSet"];
        }

        if (array_key_exists("ProductIdSet",$param) and $param["ProductIdSet"] !== null) {
            $this->ProductIdSet = $param["ProductIdSet"];
        }

        if (array_key_exists("TagIdSet",$param) and $param["TagIdSet"] !== null) {
            $this->TagIdSet = $param["TagIdSet"];
        }

        if (array_key_exists("SpaceCodeSet",$param) and $param["SpaceCodeSet"] !== null) {
            $this->SpaceCodeSet = $param["SpaceCodeSet"];
        }

        if (array_key_exists("DeviceTagSet",$param) and $param["DeviceTagSet"] !== null) {
            $this->DeviceTagSet = $param["DeviceTagSet"];
        }

        if (array_key_exists("WIDSet",$param) and $param["WIDSet"] !== null) {
            $this->WIDSet = $param["WIDSet"];
        }

        if (array_key_exists("Field",$param) and $param["Field"] !== null) {
            $this->Field = new CustomField();
            $this->Field->deserialize($param["Field"]);
        }

        if (array_key_exists("GroupIdSet",$param) and $param["GroupIdSet"] !== null) {
            $this->GroupIdSet = $param["GroupIdSet"];
        }

        if (array_key_exists("IsActive",$param) and $param["IsActive"] !== null) {
            $this->IsActive = $param["IsActive"];
        }

        if (array_key_exists("IsCamera",$param) and $param["IsCamera"] !== null) {
            $this->IsCamera = $param["IsCamera"];
        }
    }
}
