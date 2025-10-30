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
 * DescribeDeviceStatusList请求参数结构体
 *
 * @method integer getWorkspaceId() 获取工作空间id
 * @method void setWorkspaceId(integer $WorkspaceId) 设置工作空间id
 * @method string getApplicationToken() 获取应用token
 * @method void setApplicationToken(string $ApplicationToken) 设置应用token
 * @method integer getPageNumber() 获取分页查询，第几页，必传，大于0
 * @method void setPageNumber(integer $PageNumber) 设置分页查询，第几页，必传，大于0
 * @method integer getPageSize() 获取每页条数，必传大于0
 * @method void setPageSize(integer $PageSize) 设置每页条数，必传大于0
 * @method array getDeviceTypeSet() 获取设备类型
 * @method void setDeviceTypeSet(array $DeviceTypeSet) 设置设备类型
 * @method array getProductIdSet() 获取产品 pid
 * @method void setProductIdSet(array $ProductIdSet) 设置产品 pid
 * @method array getTagIdSet() 获取设备标签id

 * @method void setTagIdSet(array $TagIdSet) 设置设备标签id

 * @method array getSpaceCodeSet() 获取空间位置（支持空间多层，比如具体建筑、具体楼层）
 * @method void setSpaceCodeSet(array $SpaceCodeSet) 设置空间位置（支持空间多层，比如具体建筑、具体楼层）
 * @method array getWIDSet() 获取设备编号列表

 * @method void setWIDSet(array $WIDSet) 设置设备编号列表

 * @method array getDeviceTagSet() 获取设备标签名，非必填
 * @method void setDeviceTagSet(array $DeviceTagSet) 设置设备标签名，非必填
 * @method array getDeviceStatusSet() 获取通信在/离线状态（online=normal+fault、offline）
 * @method void setDeviceStatusSet(array $DeviceStatusSet) 设置通信在/离线状态（online=normal+fault、offline）
 * @method array getStatusSet() 获取设备业务状态
（正常-normal、故障-fault、离线-offline）

 * @method void setStatusSet(array $StatusSet) 设置设备业务状态
（正常-normal、故障-fault、离线-offline）

 * @method array getIsAlive() 获取推流状态，推流中-true，未推流-false 仅摄像头有的状态
 * @method void setIsAlive(array $IsAlive) 设置推流状态，推流中-true，未推流-false 仅摄像头有的状态
 */
class DescribeDeviceStatusListRequest extends AbstractModel
{
    /**
     * @var integer 工作空间id
     */
    public $WorkspaceId;

    /**
     * @var string 应用token
     */
    public $ApplicationToken;

    /**
     * @var integer 分页查询，第几页，必传，大于0
     */
    public $PageNumber;

    /**
     * @var integer 每页条数，必传大于0
     */
    public $PageSize;

    /**
     * @var array 设备类型
     */
    public $DeviceTypeSet;

    /**
     * @var array 产品 pid
     */
    public $ProductIdSet;

    /**
     * @var array 设备标签id

     */
    public $TagIdSet;

    /**
     * @var array 空间位置（支持空间多层，比如具体建筑、具体楼层）
     */
    public $SpaceCodeSet;

    /**
     * @var array 设备编号列表

     */
    public $WIDSet;

    /**
     * @var array 设备标签名，非必填
     */
    public $DeviceTagSet;

    /**
     * @var array 通信在/离线状态（online=normal+fault、offline）
     */
    public $DeviceStatusSet;

    /**
     * @var array 设备业务状态
（正常-normal、故障-fault、离线-offline）

     */
    public $StatusSet;

    /**
     * @var array 推流状态，推流中-true，未推流-false 仅摄像头有的状态
     */
    public $IsAlive;

    /**
     * @param integer $WorkspaceId 工作空间id
     * @param string $ApplicationToken 应用token
     * @param integer $PageNumber 分页查询，第几页，必传，大于0
     * @param integer $PageSize 每页条数，必传大于0
     * @param array $DeviceTypeSet 设备类型
     * @param array $ProductIdSet 产品 pid
     * @param array $TagIdSet 设备标签id

     * @param array $SpaceCodeSet 空间位置（支持空间多层，比如具体建筑、具体楼层）
     * @param array $WIDSet 设备编号列表

     * @param array $DeviceTagSet 设备标签名，非必填
     * @param array $DeviceStatusSet 通信在/离线状态（online=normal+fault、offline）
     * @param array $StatusSet 设备业务状态
（正常-normal、故障-fault、离线-offline）

     * @param array $IsAlive 推流状态，推流中-true，未推流-false 仅摄像头有的状态
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

        if (array_key_exists("ApplicationToken",$param) and $param["ApplicationToken"] !== null) {
            $this->ApplicationToken = $param["ApplicationToken"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
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

        if (array_key_exists("WIDSet",$param) and $param["WIDSet"] !== null) {
            $this->WIDSet = $param["WIDSet"];
        }

        if (array_key_exists("DeviceTagSet",$param) and $param["DeviceTagSet"] !== null) {
            $this->DeviceTagSet = $param["DeviceTagSet"];
        }

        if (array_key_exists("DeviceStatusSet",$param) and $param["DeviceStatusSet"] !== null) {
            $this->DeviceStatusSet = $param["DeviceStatusSet"];
        }

        if (array_key_exists("StatusSet",$param) and $param["StatusSet"] !== null) {
            $this->StatusSet = $param["StatusSet"];
        }

        if (array_key_exists("IsAlive",$param) and $param["IsAlive"] !== null) {
            $this->IsAlive = $param["IsAlive"];
        }
    }
}
