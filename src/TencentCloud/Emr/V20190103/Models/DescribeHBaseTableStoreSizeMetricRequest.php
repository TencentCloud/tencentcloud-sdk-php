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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeHBaseTableStoreSizeMetric请求参数结构体
 *
 * @method string getInstanceId() 获取集群ID
 * @method void setInstanceId(string $InstanceId) 设置集群ID
 * @method string getTableName() 获取Hbase表名
 * @method void setTableName(string $TableName) 设置Hbase表名
 * @method string getRegionServer() 获取Hbase的RegionServer服务
 * @method void setRegionServer(string $RegionServer) 设置Hbase的RegionServer服务
 * @method string getDownsample() 获取获取监控的数据粒度
 * @method void setDownsample(string $Downsample) 设置获取监控的数据粒度
 * @method integer getStartTime() 获取查询监控数据起始时间戳
 * @method void setStartTime(integer $StartTime) 设置查询监控数据起始时间戳
 * @method integer getEndTime() 获取查询监控数据结束时间戳
 * @method void setEndTime(integer $EndTime) 设置查询监控数据结束时间戳
 */
class DescribeHBaseTableStoreSizeMetricRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $InstanceId;

    /**
     * @var string Hbase表名
     */
    public $TableName;

    /**
     * @var string Hbase的RegionServer服务
     */
    public $RegionServer;

    /**
     * @var string 获取监控的数据粒度
     */
    public $Downsample;

    /**
     * @var integer 查询监控数据起始时间戳
     */
    public $StartTime;

    /**
     * @var integer 查询监控数据结束时间戳
     */
    public $EndTime;

    /**
     * @param string $InstanceId 集群ID
     * @param string $TableName Hbase表名
     * @param string $RegionServer Hbase的RegionServer服务
     * @param string $Downsample 获取监控的数据粒度
     * @param integer $StartTime 查询监控数据起始时间戳
     * @param integer $EndTime 查询监控数据结束时间戳
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

        if (array_key_exists("TableName",$param) and $param["TableName"] !== null) {
            $this->TableName = $param["TableName"];
        }

        if (array_key_exists("RegionServer",$param) and $param["RegionServer"] !== null) {
            $this->RegionServer = $param["RegionServer"];
        }

        if (array_key_exists("Downsample",$param) and $param["Downsample"] !== null) {
            $this->Downsample = $param["Downsample"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }
    }
}
