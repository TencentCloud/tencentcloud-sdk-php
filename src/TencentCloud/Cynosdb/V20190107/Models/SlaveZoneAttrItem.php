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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 可用区属性项
 *
 * @method string getZone() 获取可用区
 * @method void setZone(string $Zone) 设置可用区
 * @method string getBinlogSyncWay() 获取binlog同步方式
 * @method void setBinlogSyncWay(string $BinlogSyncWay) 设置binlog同步方式
 * @method integer getSemiSyncTimeout() 获取半同步超时时间，单位ms
 * @method void setSemiSyncTimeout(integer $SemiSyncTimeout) 设置半同步超时时间，单位ms
 */
class SlaveZoneAttrItem extends AbstractModel
{
    /**
     * @var string 可用区
     */
    public $Zone;

    /**
     * @var string binlog同步方式
     */
    public $BinlogSyncWay;

    /**
     * @var integer 半同步超时时间，单位ms
     */
    public $SemiSyncTimeout;

    /**
     * @param string $Zone 可用区
     * @param string $BinlogSyncWay binlog同步方式
     * @param integer $SemiSyncTimeout 半同步超时时间，单位ms
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
        if (array_key_exists("Zone",$param) and $param["Zone"] !== null) {
            $this->Zone = $param["Zone"];
        }

        if (array_key_exists("BinlogSyncWay",$param) and $param["BinlogSyncWay"] !== null) {
            $this->BinlogSyncWay = $param["BinlogSyncWay"];
        }

        if (array_key_exists("SemiSyncTimeout",$param) and $param["SemiSyncTimeout"] !== null) {
            $this->SemiSyncTimeout = $param["SemiSyncTimeout"];
        }
    }
}
