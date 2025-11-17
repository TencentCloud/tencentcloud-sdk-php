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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpgradeDBInstanceKernelVersion请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID列表，格式如：cmgo-p8vnipr5。与云数据库控制台页面中显示的实例ID相同
 * @method void setInstanceId(string $InstanceId) 设置实例ID列表，格式如：cmgo-p8vnipr5。与云数据库控制台页面中显示的实例ID相同
 * @method integer getInMaintenance() 获取是否维护时间内升级。0-否，1-是
 * @method void setInMaintenance(integer $InMaintenance) 设置是否维护时间内升级。0-否，1-是
 */
class UpgradeDBInstanceKernelVersionRequest extends AbstractModel
{
    /**
     * @var string 实例ID列表，格式如：cmgo-p8vnipr5。与云数据库控制台页面中显示的实例ID相同
     */
    public $InstanceId;

    /**
     * @var integer 是否维护时间内升级。0-否，1-是
     */
    public $InMaintenance;

    /**
     * @param string $InstanceId 实例ID列表，格式如：cmgo-p8vnipr5。与云数据库控制台页面中显示的实例ID相同
     * @param integer $InMaintenance 是否维护时间内升级。0-否，1-是
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InMaintenance",$param) and $param["InMaintenance"] !== null) {
            $this->InMaintenance = $param["InMaintenance"];
        }
    }
}
