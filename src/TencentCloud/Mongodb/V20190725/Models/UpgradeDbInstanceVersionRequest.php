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
 * UpgradeDbInstanceVersion请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID列表，格式如：cmgo-p8vnipr5。与云数据库控制台页面中显示的实例ID相同。
 * @method void setInstanceId(string $InstanceId) 设置实例ID列表，格式如：cmgo-p8vnipr5。与云数据库控制台页面中显示的实例ID相同。
 * @method string getMongoVersion() 获取新升级的数据库版本。当前支持版本如下所示，支持旧版本向高版本升级，不支持跨版本升级。
- MONGO_40_WT：4.0 版本。
- MONGO_42_WT：4.2 版本。
- MONGO_44_WT：4.4 版本
- MONGO_50_WT：5.0 版本
- MONGO_60_WT：6.0 版本。
- MONGO_70_WT：7.0 版本。
- MONGO_80_WT：8.0 版本。
 * @method void setMongoVersion(string $MongoVersion) 设置新升级的数据库版本。当前支持版本如下所示，支持旧版本向高版本升级，不支持跨版本升级。
- MONGO_40_WT：4.0 版本。
- MONGO_42_WT：4.2 版本。
- MONGO_44_WT：4.4 版本
- MONGO_50_WT：5.0 版本
- MONGO_60_WT：6.0 版本。
- MONGO_70_WT：7.0 版本。
- MONGO_80_WT：8.0 版本。
 * @method integer getInMaintenance() 获取指定升级操作是否在维护时间内进行。
- 0：立即升级。
- 1：维护时间窗升级。
 * @method void setInMaintenance(integer $InMaintenance) 设置指定升级操作是否在维护时间内进行。
- 0：立即升级。
- 1：维护时间窗升级。
 */
class UpgradeDbInstanceVersionRequest extends AbstractModel
{
    /**
     * @var string 实例ID列表，格式如：cmgo-p8vnipr5。与云数据库控制台页面中显示的实例ID相同。
     */
    public $InstanceId;

    /**
     * @var string 新升级的数据库版本。当前支持版本如下所示，支持旧版本向高版本升级，不支持跨版本升级。
- MONGO_40_WT：4.0 版本。
- MONGO_42_WT：4.2 版本。
- MONGO_44_WT：4.4 版本
- MONGO_50_WT：5.0 版本
- MONGO_60_WT：6.0 版本。
- MONGO_70_WT：7.0 版本。
- MONGO_80_WT：8.0 版本。
     */
    public $MongoVersion;

    /**
     * @var integer 指定升级操作是否在维护时间内进行。
- 0：立即升级。
- 1：维护时间窗升级。
     */
    public $InMaintenance;

    /**
     * @param string $InstanceId 实例ID列表，格式如：cmgo-p8vnipr5。与云数据库控制台页面中显示的实例ID相同。
     * @param string $MongoVersion 新升级的数据库版本。当前支持版本如下所示，支持旧版本向高版本升级，不支持跨版本升级。
- MONGO_40_WT：4.0 版本。
- MONGO_42_WT：4.2 版本。
- MONGO_44_WT：4.4 版本
- MONGO_50_WT：5.0 版本
- MONGO_60_WT：6.0 版本。
- MONGO_70_WT：7.0 版本。
- MONGO_80_WT：8.0 版本。
     * @param integer $InMaintenance 指定升级操作是否在维护时间内进行。
- 0：立即升级。
- 1：维护时间窗升级。
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

        if (array_key_exists("MongoVersion",$param) and $param["MongoVersion"] !== null) {
            $this->MongoVersion = $param["MongoVersion"];
        }

        if (array_key_exists("InMaintenance",$param) and $param["InMaintenance"] !== null) {
            $this->InMaintenance = $param["InMaintenance"];
        }
    }
}
