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
 * AddClusterSlaveZone请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getSlaveZone() 获取从可用区
 * @method void setSlaveZone(string $SlaveZone) 设置从可用区
 * @method string getBinlogSyncWay() 获取binlog同步方式。默认值：async。可选值：sync、semisync、async
 * @method void setBinlogSyncWay(string $BinlogSyncWay) 设置binlog同步方式。默认值：async。可选值：sync、semisync、async
 */
class AddClusterSlaveZoneRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 从可用区
     */
    public $SlaveZone;

    /**
     * @var string binlog同步方式。默认值：async。可选值：sync、semisync、async
     */
    public $BinlogSyncWay;

    /**
     * @param string $ClusterId 集群ID
     * @param string $SlaveZone 从可用区
     * @param string $BinlogSyncWay binlog同步方式。默认值：async。可选值：sync、semisync、async
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("SlaveZone",$param) and $param["SlaveZone"] !== null) {
            $this->SlaveZone = $param["SlaveZone"];
        }

        if (array_key_exists("BinlogSyncWay",$param) and $param["BinlogSyncWay"] !== null) {
            $this->BinlogSyncWay = $param["BinlogSyncWay"];
        }
    }
}
