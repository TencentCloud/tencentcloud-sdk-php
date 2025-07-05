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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分组信息
 *
 * @method string getGroupName() 获取分组名称
 * @method void setGroupName(string $GroupName) 设置分组名称
 * @method string getParentId() 获取父分组ID
 * @method void setParentId(string $ParentId) 设置父分组ID
 * @method string getGroupId() 获取分组ID
 * @method void setGroupId(string $GroupId) 设置分组ID
 * @method string getGroupPath() 获取分组路径
 * @method void setGroupPath(string $GroupPath) 设置分组路径
 * @method string getGroupDescribe() 获取分组描述
 * @method void setGroupDescribe(string $GroupDescribe) 设置分组描述
 * @method integer getDeviceNum() 获取分组绑定设备数
 * @method void setDeviceNum(integer $DeviceNum) 设置分组绑定设备数
 * @method integer getSubGroupNum() 获取子分组数量
 * @method void setSubGroupNum(integer $SubGroupNum) 设置子分组数量
 * @method string getExtraInformation() 获取分组附加信息
 * @method void setExtraInformation(string $ExtraInformation) 设置分组附加信息
 * @method string getGroupType() 获取分组类型
 * @method void setGroupType(string $GroupType) 设置分组类型
 * @method integer getCreateTime() 获取创建时间
 * @method void setCreateTime(integer $CreateTime) 设置创建时间
 * @method integer getGroupStatus() 获取分组状态
 * @method void setGroupStatus(integer $GroupStatus) 设置分组状态
 */
class GroupItem extends AbstractModel
{
    /**
     * @var string 分组名称
     */
    public $GroupName;

    /**
     * @var string 父分组ID
     */
    public $ParentId;

    /**
     * @var string 分组ID
     */
    public $GroupId;

    /**
     * @var string 分组路径
     */
    public $GroupPath;

    /**
     * @var string 分组描述
     */
    public $GroupDescribe;

    /**
     * @var integer 分组绑定设备数
     */
    public $DeviceNum;

    /**
     * @var integer 子分组数量
     */
    public $SubGroupNum;

    /**
     * @var string 分组附加信息
     */
    public $ExtraInformation;

    /**
     * @var string 分组类型
     */
    public $GroupType;

    /**
     * @var integer 创建时间
     */
    public $CreateTime;

    /**
     * @var integer 分组状态
     */
    public $GroupStatus;

    /**
     * @param string $GroupName 分组名称
     * @param string $ParentId 父分组ID
     * @param string $GroupId 分组ID
     * @param string $GroupPath 分组路径
     * @param string $GroupDescribe 分组描述
     * @param integer $DeviceNum 分组绑定设备数
     * @param integer $SubGroupNum 子分组数量
     * @param string $ExtraInformation 分组附加信息
     * @param string $GroupType 分组类型
     * @param integer $CreateTime 创建时间
     * @param integer $GroupStatus 分组状态
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
        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("ParentId",$param) and $param["ParentId"] !== null) {
            $this->ParentId = $param["ParentId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupPath",$param) and $param["GroupPath"] !== null) {
            $this->GroupPath = $param["GroupPath"];
        }

        if (array_key_exists("GroupDescribe",$param) and $param["GroupDescribe"] !== null) {
            $this->GroupDescribe = $param["GroupDescribe"];
        }

        if (array_key_exists("DeviceNum",$param) and $param["DeviceNum"] !== null) {
            $this->DeviceNum = $param["DeviceNum"];
        }

        if (array_key_exists("SubGroupNum",$param) and $param["SubGroupNum"] !== null) {
            $this->SubGroupNum = $param["SubGroupNum"];
        }

        if (array_key_exists("ExtraInformation",$param) and $param["ExtraInformation"] !== null) {
            $this->ExtraInformation = $param["ExtraInformation"];
        }

        if (array_key_exists("GroupType",$param) and $param["GroupType"] !== null) {
            $this->GroupType = $param["GroupType"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("GroupStatus",$param) and $param["GroupStatus"] !== null) {
            $this->GroupStatus = $param["GroupStatus"];
        }
    }
}
