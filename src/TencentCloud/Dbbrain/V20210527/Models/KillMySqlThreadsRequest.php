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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * KillMySqlThreads请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method string getStage() 获取kill会话任务的阶段，取值包括："Prepare"-准备阶段，"Commit"-提交阶段。
 * @method void setStage(string $Stage) 设置kill会话任务的阶段，取值包括："Prepare"-准备阶段，"Commit"-提交阶段。
 * @method array getThreads() 获取需要kill的sql会话ID列表，此参数用于Prepare阶段。
 * @method void setThreads(array $Threads) 设置需要kill的sql会话ID列表，此参数用于Prepare阶段。
 * @method string getSqlExecId() 获取执行ID，此参数用于Commit阶段。
 * @method void setSqlExecId(string $SqlExecId) 设置执行ID，此参数用于Commit阶段。
 * @method string getProduct() 获取服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 CynosDB  for MySQL，默认为"mysql"。
 * @method void setProduct(string $Product) 设置服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 CynosDB  for MySQL，默认为"mysql"。
 * @method boolean getRecordHistory() 获取默认是true，会记录下kill的记录；该参数为true, 则在kill操作前校验目标会话是否存在，存在则继续kill，否则取消kill。为了加快kill速度，可设置为false。
 * @method void setRecordHistory(boolean $RecordHistory) 设置默认是true，会记录下kill的记录；该参数为true, 则在kill操作前校验目标会话是否存在，存在则继续kill，否则取消kill。为了加快kill速度，可设置为false。
 */
class KillMySqlThreadsRequest extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var string kill会话任务的阶段，取值包括："Prepare"-准备阶段，"Commit"-提交阶段。
     */
    public $Stage;

    /**
     * @var array 需要kill的sql会话ID列表，此参数用于Prepare阶段。
     */
    public $Threads;

    /**
     * @var string 执行ID，此参数用于Commit阶段。
     */
    public $SqlExecId;

    /**
     * @var string 服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 CynosDB  for MySQL，默认为"mysql"。
     */
    public $Product;

    /**
     * @var boolean 默认是true，会记录下kill的记录；该参数为true, 则在kill操作前校验目标会话是否存在，存在则继续kill，否则取消kill。为了加快kill速度，可设置为false。
     */
    public $RecordHistory;

    /**
     * @param string $InstanceId 实例ID。
     * @param string $Stage kill会话任务的阶段，取值包括："Prepare"-准备阶段，"Commit"-提交阶段。
     * @param array $Threads 需要kill的sql会话ID列表，此参数用于Prepare阶段。
     * @param string $SqlExecId 执行ID，此参数用于Commit阶段。
     * @param string $Product 服务产品类型，支持值包括： "mysql" - 云数据库 MySQL， "cynosdb" - 云数据库 CynosDB  for MySQL，默认为"mysql"。
     * @param boolean $RecordHistory 默认是true，会记录下kill的记录；该参数为true, 则在kill操作前校验目标会话是否存在，存在则继续kill，否则取消kill。为了加快kill速度，可设置为false。
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

        if (array_key_exists("Stage",$param) and $param["Stage"] !== null) {
            $this->Stage = $param["Stage"];
        }

        if (array_key_exists("Threads",$param) and $param["Threads"] !== null) {
            $this->Threads = $param["Threads"];
        }

        if (array_key_exists("SqlExecId",$param) and $param["SqlExecId"] !== null) {
            $this->SqlExecId = $param["SqlExecId"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("RecordHistory",$param) and $param["RecordHistory"] !== null) {
            $this->RecordHistory = $param["RecordHistory"];
        }
    }
}
