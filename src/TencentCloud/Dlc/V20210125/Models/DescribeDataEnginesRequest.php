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
 * DescribeDataEngines请求参数结构体
 *
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method array getFilters() 获取过滤类型，支持如下的过滤类型，传参Name应为以下其中一个, data-engine-name - String（数据引擎名称）：engine-type - String（引擎类型：spark：spark 引擎，presto：presto引擎），state - String (数据引擎状态 -2已删除 -1失败 0初始化中 1挂起 2运行中 3准备删除 4删除中) ， mode - String（计费模式 0共享模式 1按量计费 2包年包月） ， create-time - String（创建时间，10位时间戳） message - String （描述信息），cluster-type - String (集群资源类型 spark_private/presto_private/presto_cu/spark_cu/kyuubi_cu)，engine-id - String（数据引擎ID），key-word - String（数据引擎名称或集群资源类型或描述信息模糊搜索），engine-exec-type - String（引擎执行任务类型，SQL/BATCH），engine-network-id - String（引擎网络Id）
 * @method void setFilters(array $Filters) 设置过滤类型，支持如下的过滤类型，传参Name应为以下其中一个, data-engine-name - String（数据引擎名称）：engine-type - String（引擎类型：spark：spark 引擎，presto：presto引擎），state - String (数据引擎状态 -2已删除 -1失败 0初始化中 1挂起 2运行中 3准备删除 4删除中) ， mode - String（计费模式 0共享模式 1按量计费 2包年包月） ， create-time - String（创建时间，10位时间戳） message - String （描述信息），cluster-type - String (集群资源类型 spark_private/presto_private/presto_cu/spark_cu/kyuubi_cu)，engine-id - String（数据引擎ID），key-word - String（数据引擎名称或集群资源类型或描述信息模糊搜索），engine-exec-type - String（引擎执行任务类型，SQL/BATCH），engine-network-id - String（引擎网络Id）
 * @method string getSortBy() 获取排序字段，支持如下字段类型，create-time
 * @method void setSortBy(string $SortBy) 设置排序字段，支持如下字段类型，create-time
 * @method string getSorting() 获取排序方式，desc表示正序，asc表示反序， 默认为asc。
 * @method void setSorting(string $Sorting) 设置排序方式，desc表示正序，asc表示反序， 默认为asc。
 * @method integer getLimit() 获取返回数量，默认为10，最大值为100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为10，最大值为100。
 * @method string getDatasourceConnectionName() 获取已废弃，请使用DatasourceConnectionNameSet
 * @method void setDatasourceConnectionName(string $DatasourceConnectionName) 设置已废弃，请使用DatasourceConnectionNameSet
 * @method boolean getExcludePublicEngine() 获取是否不返回共享引擎，true不返回共享引擎，false可以返回共享引擎
 * @method void setExcludePublicEngine(boolean $ExcludePublicEngine) 设置是否不返回共享引擎，true不返回共享引擎，false可以返回共享引擎
 * @method array getAccessTypes() 获取参数应该为引擎权限类型，有效类型："USE", "MODIFY", "OPERATE", "MONITOR", "DELETE"
 * @method void setAccessTypes(array $AccessTypes) 设置参数应该为引擎权限类型，有效类型："USE", "MODIFY", "OPERATE", "MONITOR", "DELETE"
 * @method string getEngineExecType() 获取引擎执行任务类型，有效值：SQL/BATCH，默认为SQL
 * @method void setEngineExecType(string $EngineExecType) 设置引擎执行任务类型，有效值：SQL/BATCH，默认为SQL
 * @method string getEngineType() 获取引擎类型，有效值：spark/presto/kyuubi，为空时默认获取非kyuubi引擎（网关引擎）
 * @method void setEngineType(string $EngineType) 设置引擎类型，有效值：spark/presto/kyuubi，为空时默认获取非kyuubi引擎（网关引擎）
 * @method array getDatasourceConnectionNameSet() 获取网络配置列表，若传入该参数，则返回网络配置关联的计算引擎
 * @method void setDatasourceConnectionNameSet(array $DatasourceConnectionNameSet) 设置网络配置列表，若传入该参数，则返回网络配置关联的计算引擎
 * @method string getEngineGeneration() 获取引擎版本，有效值：Native/SuperSQL，为空时默认获取SuperSQL引擎
 * @method void setEngineGeneration(string $EngineGeneration) 设置引擎版本，有效值：Native/SuperSQL，为空时默认获取SuperSQL引擎
 * @method string getEngineTypeDetail() 获取引擎类型，支持：SparkSQL、SparkBatch、PrestoSQL、Kyuubi
 * @method void setEngineTypeDetail(string $EngineTypeDetail) 设置引擎类型，支持：SparkSQL、SparkBatch、PrestoSQL、Kyuubi
 */
class DescribeDataEnginesRequest extends AbstractModel
{
    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var array 过滤类型，支持如下的过滤类型，传参Name应为以下其中一个, data-engine-name - String（数据引擎名称）：engine-type - String（引擎类型：spark：spark 引擎，presto：presto引擎），state - String (数据引擎状态 -2已删除 -1失败 0初始化中 1挂起 2运行中 3准备删除 4删除中) ， mode - String（计费模式 0共享模式 1按量计费 2包年包月） ， create-time - String（创建时间，10位时间戳） message - String （描述信息），cluster-type - String (集群资源类型 spark_private/presto_private/presto_cu/spark_cu/kyuubi_cu)，engine-id - String（数据引擎ID），key-word - String（数据引擎名称或集群资源类型或描述信息模糊搜索），engine-exec-type - String（引擎执行任务类型，SQL/BATCH），engine-network-id - String（引擎网络Id）
     */
    public $Filters;

    /**
     * @var string 排序字段，支持如下字段类型，create-time
     */
    public $SortBy;

    /**
     * @var string 排序方式，desc表示正序，asc表示反序， 默认为asc。
     */
    public $Sorting;

    /**
     * @var integer 返回数量，默认为10，最大值为100。
     */
    public $Limit;

    /**
     * @var string 已废弃，请使用DatasourceConnectionNameSet
     */
    public $DatasourceConnectionName;

    /**
     * @var boolean 是否不返回共享引擎，true不返回共享引擎，false可以返回共享引擎
     */
    public $ExcludePublicEngine;

    /**
     * @var array 参数应该为引擎权限类型，有效类型："USE", "MODIFY", "OPERATE", "MONITOR", "DELETE"
     */
    public $AccessTypes;

    /**
     * @var string 引擎执行任务类型，有效值：SQL/BATCH，默认为SQL
     */
    public $EngineExecType;

    /**
     * @var string 引擎类型，有效值：spark/presto/kyuubi，为空时默认获取非kyuubi引擎（网关引擎）
     */
    public $EngineType;

    /**
     * @var array 网络配置列表，若传入该参数，则返回网络配置关联的计算引擎
     */
    public $DatasourceConnectionNameSet;

    /**
     * @var string 引擎版本，有效值：Native/SuperSQL，为空时默认获取SuperSQL引擎
     */
    public $EngineGeneration;

    /**
     * @var string 引擎类型，支持：SparkSQL、SparkBatch、PrestoSQL、Kyuubi
     */
    public $EngineTypeDetail;

    /**
     * @param integer $Offset 偏移量，默认为0。
     * @param array $Filters 过滤类型，支持如下的过滤类型，传参Name应为以下其中一个, data-engine-name - String（数据引擎名称）：engine-type - String（引擎类型：spark：spark 引擎，presto：presto引擎），state - String (数据引擎状态 -2已删除 -1失败 0初始化中 1挂起 2运行中 3准备删除 4删除中) ， mode - String（计费模式 0共享模式 1按量计费 2包年包月） ， create-time - String（创建时间，10位时间戳） message - String （描述信息），cluster-type - String (集群资源类型 spark_private/presto_private/presto_cu/spark_cu/kyuubi_cu)，engine-id - String（数据引擎ID），key-word - String（数据引擎名称或集群资源类型或描述信息模糊搜索），engine-exec-type - String（引擎执行任务类型，SQL/BATCH），engine-network-id - String（引擎网络Id）
     * @param string $SortBy 排序字段，支持如下字段类型，create-time
     * @param string $Sorting 排序方式，desc表示正序，asc表示反序， 默认为asc。
     * @param integer $Limit 返回数量，默认为10，最大值为100。
     * @param string $DatasourceConnectionName 已废弃，请使用DatasourceConnectionNameSet
     * @param boolean $ExcludePublicEngine 是否不返回共享引擎，true不返回共享引擎，false可以返回共享引擎
     * @param array $AccessTypes 参数应该为引擎权限类型，有效类型："USE", "MODIFY", "OPERATE", "MONITOR", "DELETE"
     * @param string $EngineExecType 引擎执行任务类型，有效值：SQL/BATCH，默认为SQL
     * @param string $EngineType 引擎类型，有效值：spark/presto/kyuubi，为空时默认获取非kyuubi引擎（网关引擎）
     * @param array $DatasourceConnectionNameSet 网络配置列表，若传入该参数，则返回网络配置关联的计算引擎
     * @param string $EngineGeneration 引擎版本，有效值：Native/SuperSQL，为空时默认获取SuperSQL引擎
     * @param string $EngineTypeDetail 引擎类型，支持：SparkSQL、SparkBatch、PrestoSQL、Kyuubi
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("SortBy",$param) and $param["SortBy"] !== null) {
            $this->SortBy = $param["SortBy"];
        }

        if (array_key_exists("Sorting",$param) and $param["Sorting"] !== null) {
            $this->Sorting = $param["Sorting"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("DatasourceConnectionName",$param) and $param["DatasourceConnectionName"] !== null) {
            $this->DatasourceConnectionName = $param["DatasourceConnectionName"];
        }

        if (array_key_exists("ExcludePublicEngine",$param) and $param["ExcludePublicEngine"] !== null) {
            $this->ExcludePublicEngine = $param["ExcludePublicEngine"];
        }

        if (array_key_exists("AccessTypes",$param) and $param["AccessTypes"] !== null) {
            $this->AccessTypes = $param["AccessTypes"];
        }

        if (array_key_exists("EngineExecType",$param) and $param["EngineExecType"] !== null) {
            $this->EngineExecType = $param["EngineExecType"];
        }

        if (array_key_exists("EngineType",$param) and $param["EngineType"] !== null) {
            $this->EngineType = $param["EngineType"];
        }

        if (array_key_exists("DatasourceConnectionNameSet",$param) and $param["DatasourceConnectionNameSet"] !== null) {
            $this->DatasourceConnectionNameSet = $param["DatasourceConnectionNameSet"];
        }

        if (array_key_exists("EngineGeneration",$param) and $param["EngineGeneration"] !== null) {
            $this->EngineGeneration = $param["EngineGeneration"];
        }

        if (array_key_exists("EngineTypeDetail",$param) and $param["EngineTypeDetail"] !== null) {
            $this->EngineTypeDetail = $param["EngineTypeDetail"];
        }
    }
}
