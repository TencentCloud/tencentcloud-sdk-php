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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDeviceShadowList请求参数结构体
 *
 * @method integer getWorkspaceId() 获取工作空间id
 * @method void setWorkspaceId(integer $WorkspaceId) 设置工作空间id
 * @method array getWIDSet() 获取WID
 * @method void setWIDSet(array $WIDSet) 设置WID
 * @method integer getPageNumber() 获取分页查询，第几页
 * @method void setPageNumber(integer $PageNumber) 设置分页查询，第几页
 * @method integer getPageSize() 获取每页条数
 * @method void setPageSize(integer $PageSize) 设置每页条数
 * @method string getApplicationToken() 获取应用token
 * @method void setApplicationToken(string $ApplicationToken) 设置应用token
 * @method array getDeviceTypeSet() 获取设备类型code
 * @method void setDeviceTypeSet(array $DeviceTypeSet) 设置设备类型code
 * @method array getProductIdSet() 获取产品 pid
 * @method void setProductIdSet(array $ProductIdSet) 设置产品 pid
 * @method array getSpaceCodeSet() 获取空间层级，（支持空间多层，比如具体建筑、具体楼层）
 * @method void setSpaceCodeSet(array $SpaceCodeSet) 设置空间层级，（支持空间多层，比如具体建筑、具体楼层）
 * @method array getDeviceTagSet() 获取设备标签名
 * @method void setDeviceTagSet(array $DeviceTagSet) 设置设备标签名
 */
class DescribeDeviceShadowListRequest extends AbstractModel
{
    /**
     * @var integer 工作空间id
     */
    public $WorkspaceId;

    /**
     * @var array WID
     */
    public $WIDSet;

    /**
     * @var integer 分页查询，第几页
     */
    public $PageNumber;

    /**
     * @var integer 每页条数
     */
    public $PageSize;

    /**
     * @var string 应用token
     */
    public $ApplicationToken;

    /**
     * @var array 设备类型code
     */
    public $DeviceTypeSet;

    /**
     * @var array 产品 pid
     */
    public $ProductIdSet;

    /**
     * @var array 空间层级，（支持空间多层，比如具体建筑、具体楼层）
     */
    public $SpaceCodeSet;

    /**
     * @var array 设备标签名
     */
    public $DeviceTagSet;

    /**
     * @param integer $WorkspaceId 工作空间id
     * @param array $WIDSet WID
     * @param integer $PageNumber 分页查询，第几页
     * @param integer $PageSize 每页条数
     * @param string $ApplicationToken 应用token
     * @param array $DeviceTypeSet 设备类型code
     * @param array $ProductIdSet 产品 pid
     * @param array $SpaceCodeSet 空间层级，（支持空间多层，比如具体建筑、具体楼层）
     * @param array $DeviceTagSet 设备标签名
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

        if (array_key_exists("WIDSet",$param) and $param["WIDSet"] !== null) {
            $this->WIDSet = $param["WIDSet"];
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

        if (array_key_exists("SpaceCodeSet",$param) and $param["SpaceCodeSet"] !== null) {
            $this->SpaceCodeSet = $param["SpaceCodeSet"];
        }

        if (array_key_exists("DeviceTagSet",$param) and $param["DeviceTagSet"] !== null) {
            $this->DeviceTagSet = $param["DeviceTagSet"];
        }
    }
}
