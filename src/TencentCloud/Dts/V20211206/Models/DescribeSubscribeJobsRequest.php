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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSubscribeJobs请求参数结构体
 *
 * @method string getSubscribeId() 获取订阅 ID 筛选，精确匹配
 * @method void setSubscribeId(string $SubscribeId) 设置订阅 ID 筛选，精确匹配
 * @method array getSubscribeIds() 获取订阅 ID 筛选，精确匹配
 * @method void setSubscribeIds(array $SubscribeIds) 设置订阅 ID 筛选，精确匹配
 * @method string getSubscribeName() 获取订阅名称，前缀模糊匹配
 * @method void setSubscribeName(string $SubscribeName) 设置订阅名称，前缀模糊匹配
 * @method string getInstanceId() 获取订阅的云上数据库实例的 ID，精确匹配
 * @method void setInstanceId(string $InstanceId) 设置订阅的云上数据库实例的 ID，精确匹配
 * @method string getTopic() 获取订阅的topicName
 * @method void setTopic(string $Topic) 设置订阅的topicName
 * @method integer getPayType() 获取计费模式筛选，可能的值：0-包年包月，1-按量计费
 * @method void setPayType(integer $PayType) 设置计费模式筛选，可能的值：0-包年包月，1-按量计费
 * @method string getProduct() 获取订阅的数据库产品，目前支持 cynosdbmysql,mariadb,mongodb,mysql,percona,tdpg,tdsqlpercona(tdsqlmysql)
 * @method void setProduct(string $Product) 设置订阅的数据库产品，目前支持 cynosdbmysql,mariadb,mongodb,mysql,percona,tdpg,tdsqlpercona(tdsqlmysql)
 * @method array getStatus() 获取数据订阅生命周期状态，可能的值为：正常 normal, 隔离中 isolating, 已隔离 isolated, 下线中 offlining，按量转包年包月中 post2PrePayIng
 * @method void setStatus(array $Status) 设置数据订阅生命周期状态，可能的值为：正常 normal, 隔离中 isolating, 已隔离 isolated, 下线中 offlining，按量转包年包月中 post2PrePayIng
 * @method array getSubsStatus() 获取数据订阅状态，可能的值为：未启动 notStarted, 校验中 checking, 校验不通过 checkNotPass, 校验通过 checkPass, 启动中 starting, 运行中 running, 异常出错 error
 * @method void setSubsStatus(array $SubsStatus) 设置数据订阅状态，可能的值为：未启动 notStarted, 校验中 checking, 校验不通过 checkNotPass, 校验通过 checkPass, 启动中 starting, 运行中 running, 异常出错 error
 * @method integer getOffset() 获取返回记录的起始偏移量。默认0
 * @method void setOffset(integer $Offset) 设置返回记录的起始偏移量。默认0
 * @method integer getLimit() 获取单次返回的记录数量。默认20，最大100
 * @method void setLimit(integer $Limit) 设置单次返回的记录数量。默认20，最大100
 * @method string getOrderDirection() 获取排序方向，可选的值为"DESC"和"ASC"，默认为"DESC"，按创建时间逆序排序
 * @method void setOrderDirection(string $OrderDirection) 设置排序方向，可选的值为"DESC"和"ASC"，默认为"DESC"，按创建时间逆序排序
 * @method array getTagFilters() 获取tag 过滤条件，多个 TagFilter 之间关系为且
 * @method void setTagFilters(array $TagFilters) 设置tag 过滤条件，多个 TagFilter 之间关系为且
 */
class DescribeSubscribeJobsRequest extends AbstractModel
{
    /**
     * @var string 订阅 ID 筛选，精确匹配
     */
    public $SubscribeId;

    /**
     * @var array 订阅 ID 筛选，精确匹配
     */
    public $SubscribeIds;

    /**
     * @var string 订阅名称，前缀模糊匹配
     */
    public $SubscribeName;

    /**
     * @var string 订阅的云上数据库实例的 ID，精确匹配
     */
    public $InstanceId;

    /**
     * @var string 订阅的topicName
     */
    public $Topic;

    /**
     * @var integer 计费模式筛选，可能的值：0-包年包月，1-按量计费
     */
    public $PayType;

    /**
     * @var string 订阅的数据库产品，目前支持 cynosdbmysql,mariadb,mongodb,mysql,percona,tdpg,tdsqlpercona(tdsqlmysql)
     */
    public $Product;

    /**
     * @var array 数据订阅生命周期状态，可能的值为：正常 normal, 隔离中 isolating, 已隔离 isolated, 下线中 offlining，按量转包年包月中 post2PrePayIng
     */
    public $Status;

    /**
     * @var array 数据订阅状态，可能的值为：未启动 notStarted, 校验中 checking, 校验不通过 checkNotPass, 校验通过 checkPass, 启动中 starting, 运行中 running, 异常出错 error
     */
    public $SubsStatus;

    /**
     * @var integer 返回记录的起始偏移量。默认0
     */
    public $Offset;

    /**
     * @var integer 单次返回的记录数量。默认20，最大100
     */
    public $Limit;

    /**
     * @var string 排序方向，可选的值为"DESC"和"ASC"，默认为"DESC"，按创建时间逆序排序
     */
    public $OrderDirection;

    /**
     * @var array tag 过滤条件，多个 TagFilter 之间关系为且
     */
    public $TagFilters;

    /**
     * @param string $SubscribeId 订阅 ID 筛选，精确匹配
     * @param array $SubscribeIds 订阅 ID 筛选，精确匹配
     * @param string $SubscribeName 订阅名称，前缀模糊匹配
     * @param string $InstanceId 订阅的云上数据库实例的 ID，精确匹配
     * @param string $Topic 订阅的topicName
     * @param integer $PayType 计费模式筛选，可能的值：0-包年包月，1-按量计费
     * @param string $Product 订阅的数据库产品，目前支持 cynosdbmysql,mariadb,mongodb,mysql,percona,tdpg,tdsqlpercona(tdsqlmysql)
     * @param array $Status 数据订阅生命周期状态，可能的值为：正常 normal, 隔离中 isolating, 已隔离 isolated, 下线中 offlining，按量转包年包月中 post2PrePayIng
     * @param array $SubsStatus 数据订阅状态，可能的值为：未启动 notStarted, 校验中 checking, 校验不通过 checkNotPass, 校验通过 checkPass, 启动中 starting, 运行中 running, 异常出错 error
     * @param integer $Offset 返回记录的起始偏移量。默认0
     * @param integer $Limit 单次返回的记录数量。默认20，最大100
     * @param string $OrderDirection 排序方向，可选的值为"DESC"和"ASC"，默认为"DESC"，按创建时间逆序排序
     * @param array $TagFilters tag 过滤条件，多个 TagFilter 之间关系为且
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
        if (array_key_exists("SubscribeId",$param) and $param["SubscribeId"] !== null) {
            $this->SubscribeId = $param["SubscribeId"];
        }

        if (array_key_exists("SubscribeIds",$param) and $param["SubscribeIds"] !== null) {
            $this->SubscribeIds = $param["SubscribeIds"];
        }

        if (array_key_exists("SubscribeName",$param) and $param["SubscribeName"] !== null) {
            $this->SubscribeName = $param["SubscribeName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Topic",$param) and $param["Topic"] !== null) {
            $this->Topic = $param["Topic"];
        }

        if (array_key_exists("PayType",$param) and $param["PayType"] !== null) {
            $this->PayType = $param["PayType"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("SubsStatus",$param) and $param["SubsStatus"] !== null) {
            $this->SubsStatus = $param["SubsStatus"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderDirection",$param) and $param["OrderDirection"] !== null) {
            $this->OrderDirection = $param["OrderDirection"];
        }

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new TagFilter();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
        }
    }
}
