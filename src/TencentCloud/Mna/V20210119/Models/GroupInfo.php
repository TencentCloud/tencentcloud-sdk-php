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
namespace TencentCloud\Mna\V20210119\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 分组的基本信息
 *
 * @method string getGroupId() 获取分组ID
 * @method void setGroupId(string $GroupId) 设置分组ID
 * @method string getGroupName() 获取分组名
 * @method void setGroupName(string $GroupName) 设置分组名
 * @method string getCreateTime() 获取分组创建的时间，单位：ms	
 * @method void setCreateTime(string $CreateTime) 设置分组创建的时间，单位：ms	
 * @method string getUpdateTime() 获取分组更新的时间，单位：ms	
 * @method void setUpdateTime(string $UpdateTime) 设置分组更新的时间，单位：ms	
 * @method string getDescription() 获取分组描述
 * @method void setDescription(string $Description) 设置分组描述
 * @method integer getDeviceNum() 获取分组中的设备数量
 * @method void setDeviceNum(integer $DeviceNum) 设置分组中的设备数量
 */
class GroupInfo extends AbstractModel
{
    /**
     * @var string 分组ID
     */
    public $GroupId;

    /**
     * @var string 分组名
     */
    public $GroupName;

    /**
     * @var string 分组创建的时间，单位：ms	
     */
    public $CreateTime;

    /**
     * @var string 分组更新的时间，单位：ms	
     */
    public $UpdateTime;

    /**
     * @var string 分组描述
     */
    public $Description;

    /**
     * @var integer 分组中的设备数量
     */
    public $DeviceNum;

    /**
     * @param string $GroupId 分组ID
     * @param string $GroupName 分组名
     * @param string $CreateTime 分组创建的时间，单位：ms	
     * @param string $UpdateTime 分组更新的时间，单位：ms	
     * @param string $Description 分组描述
     * @param integer $DeviceNum 分组中的设备数量
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
        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("DeviceNum",$param) and $param["DeviceNum"] !== null) {
            $this->DeviceNum = $param["DeviceNum"];
        }
    }
}
