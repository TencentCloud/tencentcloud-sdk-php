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
namespace TencentCloud\Ioa\V20220601\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDeviceVirtualGroup请求参数结构体
 *
 * @method string getDeviceVirtualGroupName() 获取终端自定义分组名
 * @method void setDeviceVirtualGroupName(string $DeviceVirtualGroupName) 设置终端自定义分组名
 * @method string getDescription() 获取详情
 * @method void setDescription(string $Description) 设置详情
 * @method integer getOsType() 获取系统类型（0: win，1：linux，2: mac，3: win_srv，4：android，5：ios   默认值0）(只支持32位)
 * @method void setOsType(integer $OsType) 设置系统类型（0: win，1：linux，2: mac，3: win_srv，4：android，5：ios   默认值0）(只支持32位)
 * @method integer getTimeType() 获取时间设置类型（1:自动小时、2:自动每天、3:自定义、0:手动分组）(只支持32位)
 * @method void setTimeType(integer $TimeType) 设置时间设置类型（1:自动小时、2:自动每天、3:自定义、0:手动分组）(只支持32位)
 * @method integer getAutoMinute() 获取自动划分时间（单位min）(只支持32位)
 * @method void setAutoMinute(integer $AutoMinute) 设置自动划分时间（单位min）(只支持32位)
 * @method ComplexRule getAutoRules() 获取自动划分规则数据
 * @method void setAutoRules(ComplexRule $AutoRules) 设置自动划分规则数据
 */
class CreateDeviceVirtualGroupRequest extends AbstractModel
{
    /**
     * @var string 终端自定义分组名
     */
    public $DeviceVirtualGroupName;

    /**
     * @var string 详情
     */
    public $Description;

    /**
     * @var integer 系统类型（0: win，1：linux，2: mac，3: win_srv，4：android，5：ios   默认值0）(只支持32位)
     */
    public $OsType;

    /**
     * @var integer 时间设置类型（1:自动小时、2:自动每天、3:自定义、0:手动分组）(只支持32位)
     */
    public $TimeType;

    /**
     * @var integer 自动划分时间（单位min）(只支持32位)
     */
    public $AutoMinute;

    /**
     * @var ComplexRule 自动划分规则数据
     */
    public $AutoRules;

    /**
     * @param string $DeviceVirtualGroupName 终端自定义分组名
     * @param string $Description 详情
     * @param integer $OsType 系统类型（0: win，1：linux，2: mac，3: win_srv，4：android，5：ios   默认值0）(只支持32位)
     * @param integer $TimeType 时间设置类型（1:自动小时、2:自动每天、3:自定义、0:手动分组）(只支持32位)
     * @param integer $AutoMinute 自动划分时间（单位min）(只支持32位)
     * @param ComplexRule $AutoRules 自动划分规则数据
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
        if (array_key_exists("DeviceVirtualGroupName",$param) and $param["DeviceVirtualGroupName"] !== null) {
            $this->DeviceVirtualGroupName = $param["DeviceVirtualGroupName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("OsType",$param) and $param["OsType"] !== null) {
            $this->OsType = $param["OsType"];
        }

        if (array_key_exists("TimeType",$param) and $param["TimeType"] !== null) {
            $this->TimeType = $param["TimeType"];
        }

        if (array_key_exists("AutoMinute",$param) and $param["AutoMinute"] !== null) {
            $this->AutoMinute = $param["AutoMinute"];
        }

        if (array_key_exists("AutoRules",$param) and $param["AutoRules"] !== null) {
            $this->AutoRules = new ComplexRule();
            $this->AutoRules->deserialize($param["AutoRules"]);
        }
    }
}
