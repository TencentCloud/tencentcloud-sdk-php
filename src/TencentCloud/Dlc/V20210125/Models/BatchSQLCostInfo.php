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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * spark session batch SQL的消耗信息
 *
 * @method string getBatchId() 获取任务id
 * @method void setBatchId(string $BatchId) 设置任务id
 * @method string getDataEngineName() 获取引擎名称
 * @method void setDataEngineName(string $DataEngineName) 设置引擎名称
 * @method string getDataEngineId() 获取引擎id
 * @method void setDataEngineId(string $DataEngineId) 设置引擎id
 * @method float getCost() 获取本次消耗，单位cu
 * @method void setCost(float $Cost) 设置本次消耗，单位cu
 * @method integer getTimeCost() 获取时间开销，秒
 * @method void setTimeCost(integer $TimeCost) 设置时间开销，秒
 * @method string getOperator() 获取操作者
 * @method void setOperator(string $Operator) 设置操作者
 */
class BatchSQLCostInfo extends AbstractModel
{
    /**
     * @var string 任务id
     */
    public $BatchId;

    /**
     * @var string 引擎名称
     */
    public $DataEngineName;

    /**
     * @var string 引擎id
     */
    public $DataEngineId;

    /**
     * @var float 本次消耗，单位cu
     */
    public $Cost;

    /**
     * @var integer 时间开销，秒
     */
    public $TimeCost;

    /**
     * @var string 操作者
     */
    public $Operator;

    /**
     * @param string $BatchId 任务id
     * @param string $DataEngineName 引擎名称
     * @param string $DataEngineId 引擎id
     * @param float $Cost 本次消耗，单位cu
     * @param integer $TimeCost 时间开销，秒
     * @param string $Operator 操作者
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
        if (array_key_exists("BatchId",$param) and $param["BatchId"] !== null) {
            $this->BatchId = $param["BatchId"];
        }

        if (array_key_exists("DataEngineName",$param) and $param["DataEngineName"] !== null) {
            $this->DataEngineName = $param["DataEngineName"];
        }

        if (array_key_exists("DataEngineId",$param) and $param["DataEngineId"] !== null) {
            $this->DataEngineId = $param["DataEngineId"];
        }

        if (array_key_exists("Cost",$param) and $param["Cost"] !== null) {
            $this->Cost = $param["Cost"];
        }

        if (array_key_exists("TimeCost",$param) and $param["TimeCost"] !== null) {
            $this->TimeCost = $param["TimeCost"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}
