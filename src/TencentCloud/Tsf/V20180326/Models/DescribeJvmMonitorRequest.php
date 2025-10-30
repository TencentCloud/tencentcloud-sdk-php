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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeJvmMonitor请求参数结构体
 *
 * @method string getInstanceId() 获取查询的实例ID
可通过调用[DescribeClusterInstances](https://cloud.tencent.com/document/product/649/36048)查询已导入的实例列表或登录[控制台](https://console.cloud.tencent.com/tsf/resource?rid=1&tab=instance)进行查询。实例ID例如：ins-6decplwk
 * @method void setInstanceId(string $InstanceId) 设置查询的实例ID
可通过调用[DescribeClusterInstances](https://cloud.tencent.com/document/product/649/36048)查询已导入的实例列表或登录[控制台](https://console.cloud.tencent.com/tsf/resource?rid=1&tab=instance)进行查询。实例ID例如：ins-6decplwk
 * @method string getApplicationId() 获取实例所属应用ID
可通过调用[DescribeApplications](https://cloud.tencent.com/document/product/649/36090)查询已经存在的应用列表或登录[控制台](https://console.cloud.tencent.com/tsf/app?rid=1)查看。应用ID例如：application-v378ewna
 * @method void setApplicationId(string $ApplicationId) 设置实例所属应用ID
可通过调用[DescribeApplications](https://cloud.tencent.com/document/product/649/36090)查询已经存在的应用列表或登录[控制台](https://console.cloud.tencent.com/tsf/app?rid=1)查看。应用ID例如：application-v378ewna
 * @method integer getTimeGranularity() 获取时间粒度,单位:秒
 * @method void setTimeGranularity(integer $TimeGranularity) 设置时间粒度,单位:秒
 * @method string getFrom() 获取查询数据起始时间格式(yyyy-MM-dd HH:mm:ss)
 * @method void setFrom(string $From) 设置查询数据起始时间格式(yyyy-MM-dd HH:mm:ss)
 * @method string getTo() 获取查询数据结束时间格式(yyyy-MM-dd HH:mm:ss)
 * @method void setTo(string $To) 设置查询数据结束时间格式(yyyy-MM-dd HH:mm:ss)
 * @method array getRequiredPictures() 获取查询的监控图列表，以返回值属性名作为入参，可选值：
heapMemory：堆内存监控图；nonHeapMemory：非堆内存监控图；edenSpace：伊甸区监控图；survivorSpace：幸存者区监控图；oldSpace：老年代监控图；metaSpace：元空间监控图；youngGC：youngGC增量监控图；fullGC：fullGC增量监控图；cpuUsage：cpu使用率监控图；classCount：加载类数监控图；threadPicture：线程图
 * @method void setRequiredPictures(array $RequiredPictures) 设置查询的监控图列表，以返回值属性名作为入参，可选值：
heapMemory：堆内存监控图；nonHeapMemory：非堆内存监控图；edenSpace：伊甸区监控图；survivorSpace：幸存者区监控图；oldSpace：老年代监控图；metaSpace：元空间监控图；youngGC：youngGC增量监控图；fullGC：fullGC增量监控图；cpuUsage：cpu使用率监控图；classCount：加载类数监控图；threadPicture：线程图
 * @method string getTag() 获取扩展字段
 * @method void setTag(string $Tag) 设置扩展字段
 */
class DescribeJvmMonitorRequest extends AbstractModel
{
    /**
     * @var string 查询的实例ID
可通过调用[DescribeClusterInstances](https://cloud.tencent.com/document/product/649/36048)查询已导入的实例列表或登录[控制台](https://console.cloud.tencent.com/tsf/resource?rid=1&tab=instance)进行查询。实例ID例如：ins-6decplwk
     */
    public $InstanceId;

    /**
     * @var string 实例所属应用ID
可通过调用[DescribeApplications](https://cloud.tencent.com/document/product/649/36090)查询已经存在的应用列表或登录[控制台](https://console.cloud.tencent.com/tsf/app?rid=1)查看。应用ID例如：application-v378ewna
     */
    public $ApplicationId;

    /**
     * @var integer 时间粒度,单位:秒
     */
    public $TimeGranularity;

    /**
     * @var string 查询数据起始时间格式(yyyy-MM-dd HH:mm:ss)
     */
    public $From;

    /**
     * @var string 查询数据结束时间格式(yyyy-MM-dd HH:mm:ss)
     */
    public $To;

    /**
     * @var array 查询的监控图列表，以返回值属性名作为入参，可选值：
heapMemory：堆内存监控图；nonHeapMemory：非堆内存监控图；edenSpace：伊甸区监控图；survivorSpace：幸存者区监控图；oldSpace：老年代监控图；metaSpace：元空间监控图；youngGC：youngGC增量监控图；fullGC：fullGC增量监控图；cpuUsage：cpu使用率监控图；classCount：加载类数监控图；threadPicture：线程图
     */
    public $RequiredPictures;

    /**
     * @var string 扩展字段
     */
    public $Tag;

    /**
     * @param string $InstanceId 查询的实例ID
可通过调用[DescribeClusterInstances](https://cloud.tencent.com/document/product/649/36048)查询已导入的实例列表或登录[控制台](https://console.cloud.tencent.com/tsf/resource?rid=1&tab=instance)进行查询。实例ID例如：ins-6decplwk
     * @param string $ApplicationId 实例所属应用ID
可通过调用[DescribeApplications](https://cloud.tencent.com/document/product/649/36090)查询已经存在的应用列表或登录[控制台](https://console.cloud.tencent.com/tsf/app?rid=1)查看。应用ID例如：application-v378ewna
     * @param integer $TimeGranularity 时间粒度,单位:秒
     * @param string $From 查询数据起始时间格式(yyyy-MM-dd HH:mm:ss)
     * @param string $To 查询数据结束时间格式(yyyy-MM-dd HH:mm:ss)
     * @param array $RequiredPictures 查询的监控图列表，以返回值属性名作为入参，可选值：
heapMemory：堆内存监控图；nonHeapMemory：非堆内存监控图；edenSpace：伊甸区监控图；survivorSpace：幸存者区监控图；oldSpace：老年代监控图；metaSpace：元空间监控图；youngGC：youngGC增量监控图；fullGC：fullGC增量监控图；cpuUsage：cpu使用率监控图；classCount：加载类数监控图；threadPicture：线程图
     * @param string $Tag 扩展字段
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

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("TimeGranularity",$param) and $param["TimeGranularity"] !== null) {
            $this->TimeGranularity = $param["TimeGranularity"];
        }

        if (array_key_exists("From",$param) and $param["From"] !== null) {
            $this->From = $param["From"];
        }

        if (array_key_exists("To",$param) and $param["To"] !== null) {
            $this->To = $param["To"];
        }

        if (array_key_exists("RequiredPictures",$param) and $param["RequiredPictures"] !== null) {
            $this->RequiredPictures = $param["RequiredPictures"];
        }

        if (array_key_exists("Tag",$param) and $param["Tag"] !== null) {
            $this->Tag = $param["Tag"];
        }
    }
}
