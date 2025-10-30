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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SwitchDBInstanceHA请求参数结构体
 *
 * @method string getInstanceId() 获取实例Id，形如 tdsql-ow728lmc。
 * @method void setInstanceId(string $InstanceId) 设置实例Id，形如 tdsql-ow728lmc。
 * @method string getZone() 获取指定可用区标识符，具体含义由zoneMode参数决定。 

- 当zoneMode为target时表示目标可用区 

- 当zoneMode为avoid时表示需避开的故障可用区
 * @method void setZone(string $Zone) 设置指定可用区标识符，具体含义由zoneMode参数决定。 

- 当zoneMode为target时表示目标可用区 

- 当zoneMode为avoid时表示需避开的故障可用区
 * @method array getShardInstanceIds() 获取指定分片实例id进行切换
 * @method void setShardInstanceIds(array $ShardInstanceIds) 设置指定分片实例id进行切换
 * @method string getZoneMode() 获取可用区模式选择器，定义zone参数的语义类型。  - 默认值：target  - 可选值：target, avoid
 * @method void setZoneMode(string $ZoneMode) 设置可用区模式选择器，定义zone参数的语义类型。  - 默认值：target  - 可选值：target, avoid
 */
class SwitchDBInstanceHARequest extends AbstractModel
{
    /**
     * @var string 实例Id，形如 tdsql-ow728lmc。
     */
    public $InstanceId;

    /**
     * @var string 指定可用区标识符，具体含义由zoneMode参数决定。 

- 当zoneMode为target时表示目标可用区 

- 当zoneMode为avoid时表示需避开的故障可用区
     */
    public $Zone;

    /**
     * @var array 指定分片实例id进行切换
     */
    public $ShardInstanceIds;

    /**
     * @var string 可用区模式选择器，定义zone参数的语义类型。  - 默认值：target  - 可选值：target, avoid
     */
    public $ZoneMode;

    /**
     * @param string $InstanceId 实例Id，形如 tdsql-ow728lmc。
     * @param string $Zone 指定可用区标识符，具体含义由zoneMode参数决定。 

- 当zoneMode为target时表示目标可用区 

- 当zoneMode为avoid时表示需避开的故障可用区
     * @param array $ShardInstanceIds 指定分片实例id进行切换
     * @param string $ZoneMode 可用区模式选择器，定义zone参数的语义类型。  - 默认值：target  - 可选值：target, avoid
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

        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("ShardInstanceIds",$param) and $param["ShardInstanceIds"] !== null) {
            $this->ShardInstanceIds = $param["ShardInstanceIds"];
        }

        if (array_key_exists("ZoneMode",$param) and $param["ZoneMode"] !== null) {
            $this->ZoneMode = $param["ZoneMode"];
        }
    }
}
