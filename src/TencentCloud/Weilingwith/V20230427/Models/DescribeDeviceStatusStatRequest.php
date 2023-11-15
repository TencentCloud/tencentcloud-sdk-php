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
 * DescribeDeviceStatusStat请求参数结构体
 *
 * @method integer getLevel() 获取所属空间地理层级，必填。0表示查询所有层级（1、2）的设备状态，1表示楼栋，2表示楼层
 * @method void setLevel(integer $Level) 设置所属空间地理层级，必填。0表示查询所有层级（1、2）的设备状态，1表示楼栋，2表示楼层
 * @method integer getWorkspaceId() 获取工作空间id
 * @method void setWorkspaceId(integer $WorkspaceId) 设置工作空间id
 * @method string getApplicationToken() 获取应用token
 * @method void setApplicationToken(string $ApplicationToken) 设置应用token
 * @method array getSpaceCodeSet() 获取空间位置，非必填。为空表示查询所有（1，2）层级
 * @method void setSpaceCodeSet(array $SpaceCodeSet) 设置空间位置，非必填。为空表示查询所有（1，2）层级
 * @method array getDeviceTypeSet() 获取设备类型，非必填。为空表示查询所有设备类型
 * @method void setDeviceTypeSet(array $DeviceTypeSet) 设置设备类型，非必填。为空表示查询所有设备类型
 */
class DescribeDeviceStatusStatRequest extends AbstractModel
{
    /**
     * @var integer 所属空间地理层级，必填。0表示查询所有层级（1、2）的设备状态，1表示楼栋，2表示楼层
     */
    public $Level;

    /**
     * @var integer 工作空间id
     */
    public $WorkspaceId;

    /**
     * @var string 应用token
     */
    public $ApplicationToken;

    /**
     * @var array 空间位置，非必填。为空表示查询所有（1，2）层级
     */
    public $SpaceCodeSet;

    /**
     * @var array 设备类型，非必填。为空表示查询所有设备类型
     */
    public $DeviceTypeSet;

    /**
     * @param integer $Level 所属空间地理层级，必填。0表示查询所有层级（1、2）的设备状态，1表示楼栋，2表示楼层
     * @param integer $WorkspaceId 工作空间id
     * @param string $ApplicationToken 应用token
     * @param array $SpaceCodeSet 空间位置，非必填。为空表示查询所有（1，2）层级
     * @param array $DeviceTypeSet 设备类型，非必填。为空表示查询所有设备类型
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
        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }

        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("ApplicationToken",$param) and $param["ApplicationToken"] !== null) {
            $this->ApplicationToken = $param["ApplicationToken"];
        }

        if (array_key_exists("SpaceCodeSet",$param) and $param["SpaceCodeSet"] !== null) {
            $this->SpaceCodeSet = $param["SpaceCodeSet"];
        }

        if (array_key_exists("DeviceTypeSet",$param) and $param["DeviceTypeSet"] !== null) {
            $this->DeviceTypeSet = $param["DeviceTypeSet"];
        }
    }
}
