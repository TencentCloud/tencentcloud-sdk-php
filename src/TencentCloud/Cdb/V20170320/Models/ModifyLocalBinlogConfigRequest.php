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
namespace TencentCloud\Cdb\V20170320\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyLocalBinlogConfig请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同。
 * @method integer getSaveHours() 获取本地 binlog 保留时长。不同实例的可取值如下：
1. 云盘版实例、双节点实例、三节点实例的本地 binlog 保留时长（小时）默认为120，范围：6 - 168。
2. 灾备实例的本地 binlog 保留时长（小时）默认为120，范围：120 - 168。
3. 单节点云盘实例的本地 binlog 保留时长（小时）默认为120，范围：0 - 168。
4. 若双节点实例、三节点实例下无灾备实例，则该主实例的本地 binlog 保留时长（小时）范围是：6 - 168；若双节点实例、三节点实例下有灾备实例，或者要为双节点实例、三节点实例添加灾备实例，为避免同步异常，该主实例的本地 binlog 保留时长（小时）不能设置低于120小时，范围是：120 - 168。
 * @method void setSaveHours(integer $SaveHours) 设置本地 binlog 保留时长。不同实例的可取值如下：
1. 云盘版实例、双节点实例、三节点实例的本地 binlog 保留时长（小时）默认为120，范围：6 - 168。
2. 灾备实例的本地 binlog 保留时长（小时）默认为120，范围：120 - 168。
3. 单节点云盘实例的本地 binlog 保留时长（小时）默认为120，范围：0 - 168。
4. 若双节点实例、三节点实例下无灾备实例，则该主实例的本地 binlog 保留时长（小时）范围是：6 - 168；若双节点实例、三节点实例下有灾备实例，或者要为双节点实例、三节点实例添加灾备实例，为避免同步异常，该主实例的本地 binlog 保留时长（小时）不能设置低于120小时，范围是：120 - 168。
 * @method integer getMaxUsage() 获取本地 binlog 空间使用率，可取值范围：[30,50]。
 * @method void setMaxUsage(integer $MaxUsage) 设置本地 binlog 空间使用率，可取值范围：[30,50]。
 */
class ModifyLocalBinlogConfigRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同。
     */
    public $InstanceId;

    /**
     * @var integer 本地 binlog 保留时长。不同实例的可取值如下：
1. 云盘版实例、双节点实例、三节点实例的本地 binlog 保留时长（小时）默认为120，范围：6 - 168。
2. 灾备实例的本地 binlog 保留时长（小时）默认为120，范围：120 - 168。
3. 单节点云盘实例的本地 binlog 保留时长（小时）默认为120，范围：0 - 168。
4. 若双节点实例、三节点实例下无灾备实例，则该主实例的本地 binlog 保留时长（小时）范围是：6 - 168；若双节点实例、三节点实例下有灾备实例，或者要为双节点实例、三节点实例添加灾备实例，为避免同步异常，该主实例的本地 binlog 保留时长（小时）不能设置低于120小时，范围是：120 - 168。
     */
    public $SaveHours;

    /**
     * @var integer 本地 binlog 空间使用率，可取值范围：[30,50]。
     */
    public $MaxUsage;

    /**
     * @param string $InstanceId 实例 ID，格式如：cdb-c1nl9rpv。与云数据库控制台页面中显示的实例 ID 相同。
     * @param integer $SaveHours 本地 binlog 保留时长。不同实例的可取值如下：
1. 云盘版实例、双节点实例、三节点实例的本地 binlog 保留时长（小时）默认为120，范围：6 - 168。
2. 灾备实例的本地 binlog 保留时长（小时）默认为120，范围：120 - 168。
3. 单节点云盘实例的本地 binlog 保留时长（小时）默认为120，范围：0 - 168。
4. 若双节点实例、三节点实例下无灾备实例，则该主实例的本地 binlog 保留时长（小时）范围是：6 - 168；若双节点实例、三节点实例下有灾备实例，或者要为双节点实例、三节点实例添加灾备实例，为避免同步异常，该主实例的本地 binlog 保留时长（小时）不能设置低于120小时，范围是：120 - 168。
     * @param integer $MaxUsage 本地 binlog 空间使用率，可取值范围：[30,50]。
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

        if (array_key_exists("SaveHours",$param) and $param["SaveHours"] !== null) {
            $this->SaveHours = $param["SaveHours"];
        }

        if (array_key_exists("MaxUsage",$param) and $param["MaxUsage"] !== null) {
            $this->MaxUsage = $param["MaxUsage"];
        }
    }
}
