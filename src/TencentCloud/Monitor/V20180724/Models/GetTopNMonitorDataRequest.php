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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetTopNMonitorData请求参数结构体
 *
 * @method integer getN() 获取topN
 * @method void setN(integer $N) 设置topN
 * @method string getStartTime() 获取起始时间
 * @method void setStartTime(string $StartTime) 设置起始时间
 * @method string getEndTime() 获取截止时间
 * @method void setEndTime(string $EndTime) 设置截止时间
 * @method array getInstances() 获取实例对象的维度组合，格式为key-value键值对形式的集合。不同类型的实例字段完全不同，如CVM为[{"Name":"InstanceId","Value":"ins-j0hk02zo"}]，Ckafka为[{"Name":"instanceId","Value":"ckafka-l49k54dd"}]，COS为[{"Name":"appid","Value":"1258344699"},{"Name":"bucket","Value":"rig-1258344699"}]。各个云产品的维度请参阅各个产品监控指标文档，对应的维度列即为维度组合的key，value为key对应的值。单请求最多支持批量拉取50个实例的监控数据。
 * @method void setInstances(array $Instances) 设置实例对象的维度组合，格式为key-value键值对形式的集合。不同类型的实例字段完全不同，如CVM为[{"Name":"InstanceId","Value":"ins-j0hk02zo"}]，Ckafka为[{"Name":"instanceId","Value":"ckafka-l49k54dd"}]，COS为[{"Name":"appid","Value":"1258344699"},{"Name":"bucket","Value":"rig-1258344699"}]。各个云产品的维度请参阅各个产品监控指标文档，对应的维度列即为维度组合的key，value为key对应的值。单请求最多支持批量拉取50个实例的监控数据。
 * @method string getMetricName() 获取指标名称，如Bwpresourcebandwidthin，仅支持单指标拉取。各个云产品的详细指标说明请参阅各个产品监控指标文档，对应的指标英文名即为MetricName
 * @method void setMetricName(string $MetricName) 设置指标名称，如Bwpresourcebandwidthin，仅支持单指标拉取。各个云产品的详细指标说明请参阅各个产品监控指标文档，对应的指标英文名即为MetricName
 * @method string getNamespace() 获取命名空间，如QCE/CVM。各个云产品的详细命名空间说明请参阅各个产品监控指标文档
 * @method void setNamespace(string $Namespace) 设置命名空间，如QCE/CVM。各个云产品的详细命名空间说明请参阅各个产品监控指标文档
 * @method integer getPeriod() 获取监控统计周期，如60。默认为取值为60，单位为s。每个指标支持的统计周期不一定相同，各个云产品支持的统计周期请参阅各个产品监控指标文档，对应的统计周期列即为支持的统计周期。
 * @method void setPeriod(integer $Period) 设置监控统计周期，如60。默认为取值为60，单位为s。每个指标支持的统计周期不一定相同，各个云产品支持的统计周期请参阅各个产品监控指标文档，对应的统计周期列即为支持的统计周期。
 */
class GetTopNMonitorDataRequest extends AbstractModel
{
    /**
     * @var integer topN
     */
    public $N;

    /**
     * @var string 起始时间
     */
    public $StartTime;

    /**
     * @var string 截止时间
     */
    public $EndTime;

    /**
     * @var array 实例对象的维度组合，格式为key-value键值对形式的集合。不同类型的实例字段完全不同，如CVM为[{"Name":"InstanceId","Value":"ins-j0hk02zo"}]，Ckafka为[{"Name":"instanceId","Value":"ckafka-l49k54dd"}]，COS为[{"Name":"appid","Value":"1258344699"},{"Name":"bucket","Value":"rig-1258344699"}]。各个云产品的维度请参阅各个产品监控指标文档，对应的维度列即为维度组合的key，value为key对应的值。单请求最多支持批量拉取50个实例的监控数据。
     */
    public $Instances;

    /**
     * @var string 指标名称，如Bwpresourcebandwidthin，仅支持单指标拉取。各个云产品的详细指标说明请参阅各个产品监控指标文档，对应的指标英文名即为MetricName
     */
    public $MetricName;

    /**
     * @var string 命名空间，如QCE/CVM。各个云产品的详细命名空间说明请参阅各个产品监控指标文档
     */
    public $Namespace;

    /**
     * @var integer 监控统计周期，如60。默认为取值为60，单位为s。每个指标支持的统计周期不一定相同，各个云产品支持的统计周期请参阅各个产品监控指标文档，对应的统计周期列即为支持的统计周期。
     */
    public $Period;

    /**
     * @param integer $N topN
     * @param string $StartTime 起始时间
     * @param string $EndTime 截止时间
     * @param array $Instances 实例对象的维度组合，格式为key-value键值对形式的集合。不同类型的实例字段完全不同，如CVM为[{"Name":"InstanceId","Value":"ins-j0hk02zo"}]，Ckafka为[{"Name":"instanceId","Value":"ckafka-l49k54dd"}]，COS为[{"Name":"appid","Value":"1258344699"},{"Name":"bucket","Value":"rig-1258344699"}]。各个云产品的维度请参阅各个产品监控指标文档，对应的维度列即为维度组合的key，value为key对应的值。单请求最多支持批量拉取50个实例的监控数据。
     * @param string $MetricName 指标名称，如Bwpresourcebandwidthin，仅支持单指标拉取。各个云产品的详细指标说明请参阅各个产品监控指标文档，对应的指标英文名即为MetricName
     * @param string $Namespace 命名空间，如QCE/CVM。各个云产品的详细命名空间说明请参阅各个产品监控指标文档
     * @param integer $Period 监控统计周期，如60。默认为取值为60，单位为s。每个指标支持的统计周期不一定相同，各个云产品支持的统计周期请参阅各个产品监控指标文档，对应的统计周期列即为支持的统计周期。
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
        if (array_key_exists("N",$param) and $param["N"] !== null) {
            $this->N = $param["N"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Instances",$param) and $param["Instances"] !== null) {
            $this->Instances = [];
            foreach ($param["Instances"] as $key => $value){
                $obj = new Instance();
                $obj->deserialize($value);
                array_push($this->Instances, $obj);
            }
        }

        if (array_key_exists("MetricName",$param) and $param["MetricName"] !== null) {
            $this->MetricName = $param["MetricName"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("Period",$param) and $param["Period"] !== null) {
            $this->Period = $param["Period"];
        }
    }
}
