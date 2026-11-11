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
namespace TencentCloud\Postgres\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyDBInstanceHAConfig请求参数结构体
 *
 * @method string getDBInstanceId() 获取<p>实例ID。可通过<a href="https://cloud.tencent.com/document/api/409/16773">DescribeDBInstances</a>接口获取</p>
 * @method void setDBInstanceId(string $DBInstanceId) 设置<p>实例ID。可通过<a href="https://cloud.tencent.com/document/api/409/16773">DescribeDBInstances</a>接口获取</p>
 * @method string getSyncMode() 获取<p>主从同步方式：</p><li>Semi-sync：半同步</li><li>Async：异步</li>
 * @method void setSyncMode(string $SyncMode) 设置<p>主从同步方式：</p><li>Semi-sync：半同步</li><li>Async：异步</li>
 * @method integer getMaxStandbyLatency() 获取<p>高可用备机最大延迟数据量。备节点延迟数据量小于等于该值，且备节点延迟时间小于等于MaxStandbyLag时，可以切换为主节点。</p><li>单位：byte</li><li>参数范围：[1073741824, 322122547200]</li>
 * @method void setMaxStandbyLatency(integer $MaxStandbyLatency) 设置<p>高可用备机最大延迟数据量。备节点延迟数据量小于等于该值，且备节点延迟时间小于等于MaxStandbyLag时，可以切换为主节点。</p><li>单位：byte</li><li>参数范围：[1073741824, 322122547200]</li>
 * @method integer getMaxStandbyLag() 获取<p>高可用备机最大延迟时间。备节点延迟时间小于等于该值，且备节点延迟数据量小于等于MaxStandbyLatency时，可以切换为主节点。</p><li>单位：s</li><li>参数范围：[5, 10]</li>
 * @method void setMaxStandbyLag(integer $MaxStandbyLag) 设置<p>高可用备机最大延迟时间。备节点延迟时间小于等于该值，且备节点延迟数据量小于等于MaxStandbyLatency时，可以切换为主节点。</p><li>单位：s</li><li>参数范围：[5, 10]</li>
 * @method integer getMaxSyncStandbyLatency() 获取<p>同步备机最大延迟数据量。备机延迟数据量小于等于该值，且该备机延迟时间小于等于MaxSyncStandbyLag时，则该备机采用同步复制；否则，采用异步复制。<br>该参数值针对SyncMode设置为Semi-sync的实例有效。<br>半同步实例禁止退化为异步复制时，不设置MaxSyncStandbyLatency、MaxSyncStandbyLag。<br>半同步实例允许退化异步复制时，PostgreSQL 9版本的实例须设置MaxSyncStandbyLatency且不设置MaxSyncStandbyLag，PostgreSQL 10及以上版本的实例须设置MaxSyncStandbyLatency、MaxSyncStandbyLag。</p>
 * @method void setMaxSyncStandbyLatency(integer $MaxSyncStandbyLatency) 设置<p>同步备机最大延迟数据量。备机延迟数据量小于等于该值，且该备机延迟时间小于等于MaxSyncStandbyLag时，则该备机采用同步复制；否则，采用异步复制。<br>该参数值针对SyncMode设置为Semi-sync的实例有效。<br>半同步实例禁止退化为异步复制时，不设置MaxSyncStandbyLatency、MaxSyncStandbyLag。<br>半同步实例允许退化异步复制时，PostgreSQL 9版本的实例须设置MaxSyncStandbyLatency且不设置MaxSyncStandbyLag，PostgreSQL 10及以上版本的实例须设置MaxSyncStandbyLatency、MaxSyncStandbyLag。</p>
 * @method integer getMaxSyncStandbyLag() 获取<p>同步备机最大延迟时间。备机延迟时间小于等于该值，且该备机延迟数据量小于等于MaxSyncStandbyLatency时，则该备机采用同步复制；否则，采用异步复制。<br>该参数值针对SyncMode设置为Semi-sync的实例有效。<br>半同步实例禁止退化为异步复制时，不设置MaxSyncStandbyLatency、MaxSyncStandbyLag。<br>半同步实例允许退化异步复制时，PostgreSQL 9版本的实例须设置MaxSyncStandbyLatency且不设置MaxSyncStandbyLag，PostgreSQL 10及以上版本的实例须设置MaxSyncStandbyLatency、MaxSyncStandbyLag，</p>
 * @method void setMaxSyncStandbyLag(integer $MaxSyncStandbyLag) 设置<p>同步备机最大延迟时间。备机延迟时间小于等于该值，且该备机延迟数据量小于等于MaxSyncStandbyLatency时，则该备机采用同步复制；否则，采用异步复制。<br>该参数值针对SyncMode设置为Semi-sync的实例有效。<br>半同步实例禁止退化为异步复制时，不设置MaxSyncStandbyLatency、MaxSyncStandbyLag。<br>半同步实例允许退化异步复制时，PostgreSQL 9版本的实例须设置MaxSyncStandbyLatency且不设置MaxSyncStandbyLag，PostgreSQL 10及以上版本的实例须设置MaxSyncStandbyLatency、MaxSyncStandbyLag，</p>
 */
class ModifyDBInstanceHAConfigRequest extends AbstractModel
{
    /**
     * @var string <p>实例ID。可通过<a href="https://cloud.tencent.com/document/api/409/16773">DescribeDBInstances</a>接口获取</p>
     */
    public $DBInstanceId;

    /**
     * @var string <p>主从同步方式：</p><li>Semi-sync：半同步</li><li>Async：异步</li>
     */
    public $SyncMode;

    /**
     * @var integer <p>高可用备机最大延迟数据量。备节点延迟数据量小于等于该值，且备节点延迟时间小于等于MaxStandbyLag时，可以切换为主节点。</p><li>单位：byte</li><li>参数范围：[1073741824, 322122547200]</li>
     */
    public $MaxStandbyLatency;

    /**
     * @var integer <p>高可用备机最大延迟时间。备节点延迟时间小于等于该值，且备节点延迟数据量小于等于MaxStandbyLatency时，可以切换为主节点。</p><li>单位：s</li><li>参数范围：[5, 10]</li>
     */
    public $MaxStandbyLag;

    /**
     * @var integer <p>同步备机最大延迟数据量。备机延迟数据量小于等于该值，且该备机延迟时间小于等于MaxSyncStandbyLag时，则该备机采用同步复制；否则，采用异步复制。<br>该参数值针对SyncMode设置为Semi-sync的实例有效。<br>半同步实例禁止退化为异步复制时，不设置MaxSyncStandbyLatency、MaxSyncStandbyLag。<br>半同步实例允许退化异步复制时，PostgreSQL 9版本的实例须设置MaxSyncStandbyLatency且不设置MaxSyncStandbyLag，PostgreSQL 10及以上版本的实例须设置MaxSyncStandbyLatency、MaxSyncStandbyLag。</p>
     */
    public $MaxSyncStandbyLatency;

    /**
     * @var integer <p>同步备机最大延迟时间。备机延迟时间小于等于该值，且该备机延迟数据量小于等于MaxSyncStandbyLatency时，则该备机采用同步复制；否则，采用异步复制。<br>该参数值针对SyncMode设置为Semi-sync的实例有效。<br>半同步实例禁止退化为异步复制时，不设置MaxSyncStandbyLatency、MaxSyncStandbyLag。<br>半同步实例允许退化异步复制时，PostgreSQL 9版本的实例须设置MaxSyncStandbyLatency且不设置MaxSyncStandbyLag，PostgreSQL 10及以上版本的实例须设置MaxSyncStandbyLatency、MaxSyncStandbyLag，</p>
     */
    public $MaxSyncStandbyLag;

    /**
     * @param string $DBInstanceId <p>实例ID。可通过<a href="https://cloud.tencent.com/document/api/409/16773">DescribeDBInstances</a>接口获取</p>
     * @param string $SyncMode <p>主从同步方式：</p><li>Semi-sync：半同步</li><li>Async：异步</li>
     * @param integer $MaxStandbyLatency <p>高可用备机最大延迟数据量。备节点延迟数据量小于等于该值，且备节点延迟时间小于等于MaxStandbyLag时，可以切换为主节点。</p><li>单位：byte</li><li>参数范围：[1073741824, 322122547200]</li>
     * @param integer $MaxStandbyLag <p>高可用备机最大延迟时间。备节点延迟时间小于等于该值，且备节点延迟数据量小于等于MaxStandbyLatency时，可以切换为主节点。</p><li>单位：s</li><li>参数范围：[5, 10]</li>
     * @param integer $MaxSyncStandbyLatency <p>同步备机最大延迟数据量。备机延迟数据量小于等于该值，且该备机延迟时间小于等于MaxSyncStandbyLag时，则该备机采用同步复制；否则，采用异步复制。<br>该参数值针对SyncMode设置为Semi-sync的实例有效。<br>半同步实例禁止退化为异步复制时，不设置MaxSyncStandbyLatency、MaxSyncStandbyLag。<br>半同步实例允许退化异步复制时，PostgreSQL 9版本的实例须设置MaxSyncStandbyLatency且不设置MaxSyncStandbyLag，PostgreSQL 10及以上版本的实例须设置MaxSyncStandbyLatency、MaxSyncStandbyLag。</p>
     * @param integer $MaxSyncStandbyLag <p>同步备机最大延迟时间。备机延迟时间小于等于该值，且该备机延迟数据量小于等于MaxSyncStandbyLatency时，则该备机采用同步复制；否则，采用异步复制。<br>该参数值针对SyncMode设置为Semi-sync的实例有效。<br>半同步实例禁止退化为异步复制时，不设置MaxSyncStandbyLatency、MaxSyncStandbyLag。<br>半同步实例允许退化异步复制时，PostgreSQL 9版本的实例须设置MaxSyncStandbyLatency且不设置MaxSyncStandbyLag，PostgreSQL 10及以上版本的实例须设置MaxSyncStandbyLatency、MaxSyncStandbyLag，</p>
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
        if (array_key_exists("DBInstanceId",$param) and $param["DBInstanceId"] !== null) {
            $this->DBInstanceId = $param["DBInstanceId"];
        }

        if (array_key_exists("SyncMode",$param) and $param["SyncMode"] !== null) {
            $this->SyncMode = $param["SyncMode"];
        }

        if (array_key_exists("MaxStandbyLatency",$param) and $param["MaxStandbyLatency"] !== null) {
            $this->MaxStandbyLatency = $param["MaxStandbyLatency"];
        }

        if (array_key_exists("MaxStandbyLag",$param) and $param["MaxStandbyLag"] !== null) {
            $this->MaxStandbyLag = $param["MaxStandbyLag"];
        }

        if (array_key_exists("MaxSyncStandbyLatency",$param) and $param["MaxSyncStandbyLatency"] !== null) {
            $this->MaxSyncStandbyLatency = $param["MaxSyncStandbyLatency"];
        }

        if (array_key_exists("MaxSyncStandbyLag",$param) and $param["MaxSyncStandbyLag"] !== null) {
            $this->MaxSyncStandbyLag = $param["MaxSyncStandbyLag"];
        }
    }
}
