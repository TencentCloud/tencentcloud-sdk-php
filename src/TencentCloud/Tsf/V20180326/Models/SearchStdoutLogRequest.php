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
 * SearchStdoutLog请求参数结构体
 *
 * @method string getInstanceId() 获取机器实例ID， 和 部署组 ID 二者必选其一，不能同时为空
可通过调用[DescribeClusterInstances](https://cloud.tencent.com/document/product/649/36048)查询已导入的实例列表或登录[控制台](https://console.cloud.tencent.com/tsf/resource?rid=1&tab=instance)进行查询。实例ID例如：ins-6decplwk



 * @method void setInstanceId(string $InstanceId) 设置机器实例ID， 和 部署组 ID 二者必选其一，不能同时为空
可通过调用[DescribeClusterInstances](https://cloud.tencent.com/document/product/649/36048)查询已导入的实例列表或登录[控制台](https://console.cloud.tencent.com/tsf/resource?rid=1&tab=instance)进行查询。实例ID例如：ins-6decplwk



 * @method integer getLimit() 获取单页请求配置数量，取值范围[1, 500]，默认值为100
 * @method void setLimit(integer $Limit) 设置单页请求配置数量，取值范围[1, 500]，默认值为100
 * @method array getSearchWords() 获取检索关键词
 * @method void setSearchWords(array $SearchWords) 设置检索关键词
 * @method string getStartTime() 获取查询起始时间，格式yyyy-MM-dd HH:mm:ss
 * @method void setStartTime(string $StartTime) 设置查询起始时间，格式yyyy-MM-dd HH:mm:ss
 * @method string getGroupId() 获取部署组ID，和 InstanceId 二者必选其一，不能同时为空
可通过调用[DescribeContainerGroups](https://cloud.tencent.com/document/product/649/36068)或[DescribeGroups](https://cloud.tencent.com/document/product/649/36065)查询已创建的部署组列表或登录[控制台](https://console.cloud.tencent.com/tsf/app-detail?rid=1&id=application-yo7kp9dv&tab=publish&subTab=group)进行查看
 * @method void setGroupId(string $GroupId) 设置部署组ID，和 InstanceId 二者必选其一，不能同时为空
可通过调用[DescribeContainerGroups](https://cloud.tencent.com/document/product/649/36068)或[DescribeGroups](https://cloud.tencent.com/document/product/649/36065)查询已创建的部署组列表或登录[控制台](https://console.cloud.tencent.com/tsf/app-detail?rid=1&id=application-yo7kp9dv&tab=publish&subTab=group)进行查看
 * @method string getEndTime() 获取查询结束时间，格式yyyy-MM-dd HH:mm:ss
 * @method void setEndTime(string $EndTime) 设置查询结束时间，格式yyyy-MM-dd HH:mm:ss
 * @method integer getOffset() 获取请求偏移量，取值范围大于等于0，默认值为
0
 * @method void setOffset(integer $Offset) 设置请求偏移量，取值范围大于等于0，默认值为
0
 * @method string getOrderBy() 获取排序规则，time：按时间排序，score：按检索值排序，默认值"time"
 * @method void setOrderBy(string $OrderBy) 设置排序规则，time：按时间排序，score：按检索值排序，默认值"time"
 * @method string getOrderType() 获取排序方式，取值 asc：升序 或 desc：降序，默认值desc
 * @method void setOrderType(string $OrderType) 设置排序方式，取值 asc：升序 或 desc：降序，默认值desc
 * @method string getSearchWordType() 获取检索类型，取值 LUCENE：Lucene检索，REGEXP：正则检索，NORMAL：普通检索
 * @method void setSearchWordType(string $SearchWordType) 设置检索类型，取值 LUCENE：Lucene检索，REGEXP：正则检索，NORMAL：普通检索
 * @method string getBatchType() 获取批量请求类型，取值 PAGE：分页查询，SCROLL：滚动查询，SEARCHAFTER：游标查询，默认值PAGE

 * @method void setBatchType(string $BatchType) 设置批量请求类型，取值 PAGE：分页查询，SCROLL：滚动查询，SEARCHAFTER：游标查询，默认值PAGE

 * @method string getScrollId() 获取游标ID
 * @method void setScrollId(string $ScrollId) 设置游标ID
 * @method array getSearchAfter() 获取查询es使用searchAfter时，游标
 * @method void setSearchAfter(array $SearchAfter) 设置查询es使用searchAfter时，游标
 */
class SearchStdoutLogRequest extends AbstractModel
{
    /**
     * @var string 机器实例ID， 和 部署组 ID 二者必选其一，不能同时为空
可通过调用[DescribeClusterInstances](https://cloud.tencent.com/document/product/649/36048)查询已导入的实例列表或登录[控制台](https://console.cloud.tencent.com/tsf/resource?rid=1&tab=instance)进行查询。实例ID例如：ins-6decplwk



     */
    public $InstanceId;

    /**
     * @var integer 单页请求配置数量，取值范围[1, 500]，默认值为100
     */
    public $Limit;

    /**
     * @var array 检索关键词
     */
    public $SearchWords;

    /**
     * @var string 查询起始时间，格式yyyy-MM-dd HH:mm:ss
     */
    public $StartTime;

    /**
     * @var string 部署组ID，和 InstanceId 二者必选其一，不能同时为空
可通过调用[DescribeContainerGroups](https://cloud.tencent.com/document/product/649/36068)或[DescribeGroups](https://cloud.tencent.com/document/product/649/36065)查询已创建的部署组列表或登录[控制台](https://console.cloud.tencent.com/tsf/app-detail?rid=1&id=application-yo7kp9dv&tab=publish&subTab=group)进行查看
     */
    public $GroupId;

    /**
     * @var string 查询结束时间，格式yyyy-MM-dd HH:mm:ss
     */
    public $EndTime;

    /**
     * @var integer 请求偏移量，取值范围大于等于0，默认值为
0
     */
    public $Offset;

    /**
     * @var string 排序规则，time：按时间排序，score：按检索值排序，默认值"time"
     */
    public $OrderBy;

    /**
     * @var string 排序方式，取值 asc：升序 或 desc：降序，默认值desc
     */
    public $OrderType;

    /**
     * @var string 检索类型，取值 LUCENE：Lucene检索，REGEXP：正则检索，NORMAL：普通检索
     */
    public $SearchWordType;

    /**
     * @var string 批量请求类型，取值 PAGE：分页查询，SCROLL：滚动查询，SEARCHAFTER：游标查询，默认值PAGE

     */
    public $BatchType;

    /**
     * @var string 游标ID
     */
    public $ScrollId;

    /**
     * @var array 查询es使用searchAfter时，游标
     */
    public $SearchAfter;

    /**
     * @param string $InstanceId 机器实例ID， 和 部署组 ID 二者必选其一，不能同时为空
可通过调用[DescribeClusterInstances](https://cloud.tencent.com/document/product/649/36048)查询已导入的实例列表或登录[控制台](https://console.cloud.tencent.com/tsf/resource?rid=1&tab=instance)进行查询。实例ID例如：ins-6decplwk



     * @param integer $Limit 单页请求配置数量，取值范围[1, 500]，默认值为100
     * @param array $SearchWords 检索关键词
     * @param string $StartTime 查询起始时间，格式yyyy-MM-dd HH:mm:ss
     * @param string $GroupId 部署组ID，和 InstanceId 二者必选其一，不能同时为空
可通过调用[DescribeContainerGroups](https://cloud.tencent.com/document/product/649/36068)或[DescribeGroups](https://cloud.tencent.com/document/product/649/36065)查询已创建的部署组列表或登录[控制台](https://console.cloud.tencent.com/tsf/app-detail?rid=1&id=application-yo7kp9dv&tab=publish&subTab=group)进行查看
     * @param string $EndTime 查询结束时间，格式yyyy-MM-dd HH:mm:ss
     * @param integer $Offset 请求偏移量，取值范围大于等于0，默认值为
0
     * @param string $OrderBy 排序规则，time：按时间排序，score：按检索值排序，默认值"time"
     * @param string $OrderType 排序方式，取值 asc：升序 或 desc：降序，默认值desc
     * @param string $SearchWordType 检索类型，取值 LUCENE：Lucene检索，REGEXP：正则检索，NORMAL：普通检索
     * @param string $BatchType 批量请求类型，取值 PAGE：分页查询，SCROLL：滚动查询，SEARCHAFTER：游标查询，默认值PAGE

     * @param string $ScrollId 游标ID
     * @param array $SearchAfter 查询es使用searchAfter时，游标
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

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchWords",$param) and $param["SearchWords"] !== null) {
            $this->SearchWords = $param["SearchWords"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("SearchWordType",$param) and $param["SearchWordType"] !== null) {
            $this->SearchWordType = $param["SearchWordType"];
        }

        if (array_key_exists("BatchType",$param) and $param["BatchType"] !== null) {
            $this->BatchType = $param["BatchType"];
        }

        if (array_key_exists("ScrollId",$param) and $param["ScrollId"] !== null) {
            $this->ScrollId = $param["ScrollId"];
        }

        if (array_key_exists("SearchAfter",$param) and $param["SearchAfter"] !== null) {
            $this->SearchAfter = $param["SearchAfter"];
        }
    }
}
