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
 * SearchBusinessLog请求参数结构体
 *
 * @method string getConfigId() 获取日志配置项ID
可通过调用[DescribeBusinessLogConfigs](https://cloud.tencent.com/document/product/649/75777)查询已创建的日志配置项列表或登录[控制台](https://console.cloud.tencent.com/tsf/observable/log?rid=1)进行查看
 * @method void setConfigId(string $ConfigId) 设置日志配置项ID
可通过调用[DescribeBusinessLogConfigs](https://cloud.tencent.com/document/product/649/75777)查询已创建的日志配置项列表或登录[控制台](https://console.cloud.tencent.com/tsf/observable/log?rid=1)进行查看
 * @method array getInstanceIds() 获取机器实例ID，不传表示全部实例
 * @method void setInstanceIds(array $InstanceIds) 设置机器实例ID，不传表示全部实例
 * @method string getStartTime() 获取开始时间，格式yyyy-MM-dd HH:mm:ss
 * @method void setStartTime(string $StartTime) 设置开始时间，格式yyyy-MM-dd HH:mm:ss
 * @method string getEndTime() 获取结束时间，格式yyyy-MM-dd HH:mm:ss
 * @method void setEndTime(string $EndTime) 设置结束时间，格式yyyy-MM-dd HH:mm:ss
 * @method integer getOffset() 获取请求偏移量，取值范围大于等于0，默认值为0
 * @method void setOffset(integer $Offset) 设置请求偏移量，取值范围大于等于0，默认值为0
 * @method integer getLimit() 获取单页请求配置数量，取值范围[1, 200]，默认值为50
 * @method void setLimit(integer $Limit) 设置单页请求配置数量，取值范围[1, 200]，默认值为50
 * @method string getOrderBy() 获取排序规则，默认值"time"
 * @method void setOrderBy(string $OrderBy) 设置排序规则，默认值"time"
 * @method string getOrderType() 获取排序方式，取值"asc"或"desc"，默认值"desc"
 * @method void setOrderType(string $OrderType) 设置排序方式，取值"asc"或"desc"，默认值"desc"
 * @method array getSearchWords() 获取检索关键词
 * @method void setSearchWords(array $SearchWords) 设置检索关键词
 * @method array getGroupIds() 获取部署组ID列表，不传表示全部部署组
可通过调用[DescribeContainerGroups](https://cloud.tencent.com/document/product/649/36068)或[DescribeGroups](https://cloud.tencent.com/document/product/649/36065)查询已创建的部署组列表或登录[控制台](https://console.cloud.tencent.com/tsf/app-detail?rid=1&id=application-yo7kp9dv&tab=publish&subTab=group)进行查看
 * @method void setGroupIds(array $GroupIds) 设置部署组ID列表，不传表示全部部署组
可通过调用[DescribeContainerGroups](https://cloud.tencent.com/document/product/649/36068)或[DescribeGroups](https://cloud.tencent.com/document/product/649/36065)查询已创建的部署组列表或登录[控制台](https://console.cloud.tencent.com/tsf/app-detail?rid=1&id=application-yo7kp9dv&tab=publish&subTab=group)进行查看
 * @method string getSearchWordType() 获取检索类型，取值 LUCENE：Lucene检索，REGEXP：正则检索，NORMAL：普通检索
 * @method void setSearchWordType(string $SearchWordType) 设置检索类型，取值 LUCENE：Lucene检索，REGEXP：正则检索，NORMAL：普通检索
 * @method string getBatchType() 获取批量请求类型，取值 PAGE：分页查询，SCROLL：滚动查询，SEARCHAFTER：游标查询，默认值PAGE
 * @method void setBatchType(string $BatchType) 设置批量请求类型，取值 PAGE：分页查询，SCROLL：滚动查询，SEARCHAFTER：游标查询，默认值PAGE
 * @method string getScrollId() 获取游标ID
 * @method void setScrollId(string $ScrollId) 设置游标ID
 * @method array getSearchAfter() 获取查询es使用searchAfter时，游标
 * @method void setSearchAfter(array $SearchAfter) 设置查询es使用searchAfter时，游标
 */
class SearchBusinessLogRequest extends AbstractModel
{
    /**
     * @var string 日志配置项ID
可通过调用[DescribeBusinessLogConfigs](https://cloud.tencent.com/document/product/649/75777)查询已创建的日志配置项列表或登录[控制台](https://console.cloud.tencent.com/tsf/observable/log?rid=1)进行查看
     */
    public $ConfigId;

    /**
     * @var array 机器实例ID，不传表示全部实例
     */
    public $InstanceIds;

    /**
     * @var string 开始时间，格式yyyy-MM-dd HH:mm:ss
     */
    public $StartTime;

    /**
     * @var string 结束时间，格式yyyy-MM-dd HH:mm:ss
     */
    public $EndTime;

    /**
     * @var integer 请求偏移量，取值范围大于等于0，默认值为0
     */
    public $Offset;

    /**
     * @var integer 单页请求配置数量，取值范围[1, 200]，默认值为50
     */
    public $Limit;

    /**
     * @var string 排序规则，默认值"time"
     */
    public $OrderBy;

    /**
     * @var string 排序方式，取值"asc"或"desc"，默认值"desc"
     */
    public $OrderType;

    /**
     * @var array 检索关键词
     */
    public $SearchWords;

    /**
     * @var array 部署组ID列表，不传表示全部部署组
可通过调用[DescribeContainerGroups](https://cloud.tencent.com/document/product/649/36068)或[DescribeGroups](https://cloud.tencent.com/document/product/649/36065)查询已创建的部署组列表或登录[控制台](https://console.cloud.tencent.com/tsf/app-detail?rid=1&id=application-yo7kp9dv&tab=publish&subTab=group)进行查看
     */
    public $GroupIds;

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
     * @param string $ConfigId 日志配置项ID
可通过调用[DescribeBusinessLogConfigs](https://cloud.tencent.com/document/product/649/75777)查询已创建的日志配置项列表或登录[控制台](https://console.cloud.tencent.com/tsf/observable/log?rid=1)进行查看
     * @param array $InstanceIds 机器实例ID，不传表示全部实例
     * @param string $StartTime 开始时间，格式yyyy-MM-dd HH:mm:ss
     * @param string $EndTime 结束时间，格式yyyy-MM-dd HH:mm:ss
     * @param integer $Offset 请求偏移量，取值范围大于等于0，默认值为0
     * @param integer $Limit 单页请求配置数量，取值范围[1, 200]，默认值为50
     * @param string $OrderBy 排序规则，默认值"time"
     * @param string $OrderType 排序方式，取值"asc"或"desc"，默认值"desc"
     * @param array $SearchWords 检索关键词
     * @param array $GroupIds 部署组ID列表，不传表示全部部署组
可通过调用[DescribeContainerGroups](https://cloud.tencent.com/document/product/649/36068)或[DescribeGroups](https://cloud.tencent.com/document/product/649/36065)查询已创建的部署组列表或登录[控制台](https://console.cloud.tencent.com/tsf/app-detail?rid=1&id=application-yo7kp9dv&tab=publish&subTab=group)进行查看
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
        if (array_key_exists("ConfigId",$param) and $param["ConfigId"] !== null) {
            $this->ConfigId = $param["ConfigId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("SearchWords",$param) and $param["SearchWords"] !== null) {
            $this->SearchWords = $param["SearchWords"];
        }

        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
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
