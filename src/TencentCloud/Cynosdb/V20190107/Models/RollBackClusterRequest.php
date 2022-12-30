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
namespace TencentCloud\Cynosdb\V20190107\Models;
use TencentCloud\Common\AbstractModel;

/**
 * RollBackCluster请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getRollbackStrategy() 获取回档策略 timeRollback-按时间点回档 snapRollback-按备份文件回档
 * @method void setRollbackStrategy(string $RollbackStrategy) 设置回档策略 timeRollback-按时间点回档 snapRollback-按备份文件回档
 * @method integer getRollbackId() 获取回档ID
 * @method void setRollbackId(integer $RollbackId) 设置回档ID
 * @method string getExpectTime() 获取期望回档时间
 * @method void setExpectTime(string $ExpectTime) 设置期望回档时间
 * @method integer getExpectTimeThresh() 获取期望阈值（已废弃）
 * @method void setExpectTimeThresh(integer $ExpectTimeThresh) 设置期望阈值（已废弃）
 * @method array getRollbackDatabases() 获取回档数据库列表
 * @method void setRollbackDatabases(array $RollbackDatabases) 设置回档数据库列表
 * @method array getRollbackTables() 获取回档数据库表列表
 * @method void setRollbackTables(array $RollbackTables) 设置回档数据库表列表
 * @method string getRollbackMode() 获取按时间点回档模式，full: 普通; db: 快速; table: 极速  （默认是普通）
 * @method void setRollbackMode(string $RollbackMode) 设置按时间点回档模式，full: 普通; db: 快速; table: 极速  （默认是普通）
 */
class RollBackClusterRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string 回档策略 timeRollback-按时间点回档 snapRollback-按备份文件回档
     */
    public $RollbackStrategy;

    /**
     * @var integer 回档ID
     */
    public $RollbackId;

    /**
     * @var string 期望回档时间
     */
    public $ExpectTime;

    /**
     * @var integer 期望阈值（已废弃）
     */
    public $ExpectTimeThresh;

    /**
     * @var array 回档数据库列表
     */
    public $RollbackDatabases;

    /**
     * @var array 回档数据库表列表
     */
    public $RollbackTables;

    /**
     * @var string 按时间点回档模式，full: 普通; db: 快速; table: 极速  （默认是普通）
     */
    public $RollbackMode;

    /**
     * @param string $ClusterId 集群ID
     * @param string $RollbackStrategy 回档策略 timeRollback-按时间点回档 snapRollback-按备份文件回档
     * @param integer $RollbackId 回档ID
     * @param string $ExpectTime 期望回档时间
     * @param integer $ExpectTimeThresh 期望阈值（已废弃）
     * @param array $RollbackDatabases 回档数据库列表
     * @param array $RollbackTables 回档数据库表列表
     * @param string $RollbackMode 按时间点回档模式，full: 普通; db: 快速; table: 极速  （默认是普通）
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

        if (array_key_exists("RollbackStrategy",$param) and $param["RollbackStrategy"] !== null) {
            $this->RollbackStrategy = $param["RollbackStrategy"];
        }

        if (array_key_exists("RollbackId",$param) and $param["RollbackId"] !== null) {
            $this->RollbackId = $param["RollbackId"];
        }

        if (array_key_exists("ExpectTime",$param) and $param["ExpectTime"] !== null) {
            $this->ExpectTime = $param["ExpectTime"];
        }

        if (array_key_exists("ExpectTimeThresh",$param) and $param["ExpectTimeThresh"] !== null) {
            $this->ExpectTimeThresh = $param["ExpectTimeThresh"];
        }

        if (array_key_exists("RollbackDatabases",$param) and $param["RollbackDatabases"] !== null) {
            $this->RollbackDatabases = [];
            foreach ($param["RollbackDatabases"] as $key => $value){
                $obj = new RollbackDatabase();
                $obj->deserialize($value);
                array_push($this->RollbackDatabases, $obj);
            }
        }

        if (array_key_exists("RollbackTables",$param) and $param["RollbackTables"] !== null) {
            $this->RollbackTables = [];
            foreach ($param["RollbackTables"] as $key => $value){
                $obj = new RollbackTable();
                $obj->deserialize($value);
                array_push($this->RollbackTables, $obj);
            }
        }

        if (array_key_exists("RollbackMode",$param) and $param["RollbackMode"] !== null) {
            $this->RollbackMode = $param["RollbackMode"];
        }
    }
}
