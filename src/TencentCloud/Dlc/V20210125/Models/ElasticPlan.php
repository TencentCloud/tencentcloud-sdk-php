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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 引擎资源弹性伸缩计划
 *
 * @method integer getMinElasticClusters() 获取最小集群数
 * @method void setMinElasticClusters(integer $MinElasticClusters) 设置最小集群数
 * @method integer getMaxElasticClusters() 获取最大集群数
 * @method void setMaxElasticClusters(integer $MaxElasticClusters) 设置最大集群数
 * @method integer getTolerableQueueTime() 获取最大排队时间
 * @method void setTolerableQueueTime(integer $TolerableQueueTime) 设置最大排队时间
 * @method string getStartTime() 获取开始时间，Once格式：yyyy-MM-dd HH:mm:ss; 非Once格式： HH:mm:ss
 * @method void setStartTime(string $StartTime) 设置开始时间，Once格式：yyyy-MM-dd HH:mm:ss; 非Once格式： HH:mm:ss
 * @method string getEndTime() 获取结束时间，Once格式：yyyy-MM-dd HH:mm:ss; 非Once格式： HH:mm:ss
 * @method void setEndTime(string $EndTime) 设置结束时间，Once格式：yyyy-MM-dd HH:mm:ss; 非Once格式： HH:mm:ss
 */
class ElasticPlan extends AbstractModel
{
    /**
     * @var integer 最小集群数
     */
    public $MinElasticClusters;

    /**
     * @var integer 最大集群数
     */
    public $MaxElasticClusters;

    /**
     * @var integer 最大排队时间
     */
    public $TolerableQueueTime;

    /**
     * @var string 开始时间，Once格式：yyyy-MM-dd HH:mm:ss; 非Once格式： HH:mm:ss
     */
    public $StartTime;

    /**
     * @var string 结束时间，Once格式：yyyy-MM-dd HH:mm:ss; 非Once格式： HH:mm:ss
     */
    public $EndTime;

    /**
     * @param integer $MinElasticClusters 最小集群数
     * @param integer $MaxElasticClusters 最大集群数
     * @param integer $TolerableQueueTime 最大排队时间
     * @param string $StartTime 开始时间，Once格式：yyyy-MM-dd HH:mm:ss; 非Once格式： HH:mm:ss
     * @param string $EndTime 结束时间，Once格式：yyyy-MM-dd HH:mm:ss; 非Once格式： HH:mm:ss
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
        if (array_key_exists("MinElasticClusters",$param) and $param["MinElasticClusters"] !== null) {
            $this->MinElasticClusters = $param["MinElasticClusters"];
        }

        if (array_key_exists("MaxElasticClusters",$param) and $param["MaxElasticClusters"] !== null) {
            $this->MaxElasticClusters = $param["MaxElasticClusters"];
        }

        if (array_key_exists("TolerableQueueTime",$param) and $param["TolerableQueueTime"] !== null) {
            $this->TolerableQueueTime = $param["TolerableQueueTime"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
