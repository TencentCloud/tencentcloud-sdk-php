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
 * @method string getClusterId() 获取<p>集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID</p>
 * @method string getSlaveZone() 获取<p>备可用区</p>
 * @method void setSlaveZone(string $SlaveZone) 设置<p>备可用区</p>
 * @method string getBinlogSyncWay() 获取<p>binlog同步方式。默认值：async。可选值：sync、semisync、async</p>
 * @method void setBinlogSyncWay(string $BinlogSyncWay) 设置<p>binlog同步方式。默认值：async。可选值：sync、semisync、async</p>
 * @method integer getSemiSyncTimeout() 获取<p>半同步超时时间，单位ms。为保证业务稳定性，半同步复制存在退化逻辑，当主可用区集群在等待备可用区集群确认事务时若超过该超时时间，复制方式将降为异步复制。最低设置为1000ms，最高支持4294967295ms，默认10000ms。</p>
 * @method void setSemiSyncTimeout(integer $SemiSyncTimeout) 设置<p>半同步超时时间，单位ms。为保证业务稳定性，半同步复制存在退化逻辑，当主可用区集群在等待备可用区集群确认事务时若超过该超时时间，复制方式将降为异步复制。最低设置为1000ms，最高支持4294967295ms，默认10000ms。</p>
 */
class AddClusterSlaveZoneRequest extends AbstractModel
{
    /**
     * @var string <p>集群ID</p>
     */
    public $ClusterId;

    /**
     * @var string <p>备可用区</p>
     */
    public $SlaveZone;

    /**
     * @var string <p>binlog同步方式。默认值：async。可选值：sync、semisync、async</p>
     */
    public $BinlogSyncWay;

    /**
     * @var integer <p>半同步超时时间，单位ms。为保证业务稳定性，半同步复制存在退化逻辑，当主可用区集群在等待备可用区集群确认事务时若超过该超时时间，复制方式将降为异步复制。最低设置为1000ms，最高支持4294967295ms，默认10000ms。</p>
     */
    public $SemiSyncTimeout;

    /**
     * @param string $ClusterId <p>集群ID</p>
     * @param string $SlaveZone <p>备可用区</p>
     * @param string $BinlogSyncWay <p>binlog同步方式。默认值：async。可选值：sync、semisync、async</p>
     * @param integer $SemiSyncTimeout <p>半同步超时时间，单位ms。为保证业务稳定性，半同步复制存在退化逻辑，当主可用区集群在等待备可用区集群确认事务时若超过该超时时间，复制方式将降为异步复制。最低设置为1000ms，最高支持4294967295ms，默认10000ms。</p>
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

        if (array_key_exists("SemiSyncTimeout",$param) and $param["SemiSyncTimeout"] !== null) {
            $this->SemiSyncTimeout = $param["SemiSyncTimeout"];
        }
    }
}
