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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSubscribeJobs请求参数结构体
 *
 * @method string getSubscribeId() 获取<p>订阅 ID 筛选，精确匹配</p>
 * @method void setSubscribeId(string $SubscribeId) 设置<p>订阅 ID 筛选，精确匹配</p>
 * @method array getSubscribeIds() 获取<p>订阅 ID 筛选，精确匹配</p>
 * @method void setSubscribeIds(array $SubscribeIds) 设置<p>订阅 ID 筛选，精确匹配</p>
 * @method string getSubscribeName() 获取<p>订阅名称，前缀模糊匹配</p>
 * @method void setSubscribeName(string $SubscribeName) 设置<p>订阅名称，前缀模糊匹配</p>
 * @method string getInstanceId() 获取<p>订阅的云上数据库实例的 ID，精确匹配</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>订阅的云上数据库实例的 ID，精确匹配</p>
 * @method string getTopic() 获取<p>订阅的topicName</p>
 * @method void setTopic(string $Topic) 设置<p>订阅的topicName</p>
 * @method integer getPayType() 获取<p>计费模式筛选，可能的值：0-包年包月，1-按量计费</p>
 * @method void setPayType(integer $PayType) 设置<p>计费模式筛选，可能的值：0-包年包月，1-按量计费</p>
 * @method string getProduct() 获取<p>订阅的数据库产品，目前支持 cynosdbmysql,mariadb,mongodb,mysql,percona,tdpg,tdsqlpercona(tdsqlmysql)</p>
 * @method void setProduct(string $Product) 设置<p>订阅的数据库产品，目前支持 cynosdbmysql,mariadb,mongodb,mysql,percona,tdpg,tdsqlpercona(tdsqlmysql)</p>
 * @method array getStatus() 获取<p>数据订阅生命周期状态，可能的值为：正常 normal, 隔离中 isolating, 已隔离 isolated, 下线中 offlining，按量转包年包月中 post2PrePayIng</p>
 * @method void setStatus(array $Status) 设置<p>数据订阅生命周期状态，可能的值为：正常 normal, 隔离中 isolating, 已隔离 isolated, 下线中 offlining，按量转包年包月中 post2PrePayIng</p>
 * @method array getSubsStatus() 获取<p>数据订阅状态，可能的值为：未启动 notStarted, 校验中 checking, 校验不通过 checkNotPass, 校验通过 checkPass, 启动中 starting, 运行中 running, 异常出错 error</p>
 * @method void setSubsStatus(array $SubsStatus) 设置<p>数据订阅状态，可能的值为：未启动 notStarted, 校验中 checking, 校验不通过 checkNotPass, 校验通过 checkPass, 启动中 starting, 运行中 running, 异常出错 error</p>
 * @method integer getOffset() 获取<p>返回记录的起始偏移量。默认0</p>
 * @method void setOffset(integer $Offset) 设置<p>返回记录的起始偏移量。默认0</p>
 * @method integer getLimit() 获取<p>单次返回的记录数量。默认20，最大100</p>
 * @method void setLimit(integer $Limit) 设置<p>单次返回的记录数量。默认20，最大100</p>
 * @method string getOrderDirection() 获取<p>排序方向，可选的值为&quot;DESC&quot;和&quot;ASC&quot;，默认为&quot;DESC&quot;，按创建时间逆序排序</p>
 * @method void setOrderDirection(string $OrderDirection) 设置<p>排序方向，可选的值为&quot;DESC&quot;和&quot;ASC&quot;，默认为&quot;DESC&quot;，按创建时间逆序排序</p>
 * @method array getTagFilters() 获取<p>tag 过滤条件，多个 TagFilter 之间关系为且</p>
 * @method void setTagFilters(array $TagFilters) 设置<p>tag 过滤条件，多个 TagFilter 之间关系为且</p>
 */
class DescribeSubscribeJobsRequest extends AbstractModel
{
    /**
     * @var string <p>订阅 ID 筛选，精确匹配</p>
     */
    public $SubscribeId;

    /**
     * @var array <p>订阅 ID 筛选，精确匹配</p>
     */
    public $SubscribeIds;

    /**
     * @var string <p>订阅名称，前缀模糊匹配</p>
     */
    public $SubscribeName;

    /**
     * @var string <p>订阅的云上数据库实例的 ID，精确匹配</p>
     */
    public $InstanceId;

    /**
     * @var string <p>订阅的topicName</p>
     */
    public $Topic;

    /**
     * @var integer <p>计费模式筛选，可能的值：0-包年包月，1-按量计费</p>
     */
    public $PayType;

    /**
     * @var string <p>订阅的数据库产品，目前支持 cynosdbmysql,mariadb,mongodb,mysql,percona,tdpg,tdsqlpercona(tdsqlmysql)</p>
     */
    public $Product;

    /**
     * @var array <p>数据订阅生命周期状态，可能的值为：正常 normal, 隔离中 isolating, 已隔离 isolated, 下线中 offlining，按量转包年包月中 post2PrePayIng</p>
     */
    public $Status;

    /**
     * @var array <p>数据订阅状态，可能的值为：未启动 notStarted, 校验中 checking, 校验不通过 checkNotPass, 校验通过 checkPass, 启动中 starting, 运行中 running, 异常出错 error</p>
     */
    public $SubsStatus;

    /**
     * @var integer <p>返回记录的起始偏移量。默认0</p>
     */
    public $Offset;

    /**
     * @var integer <p>单次返回的记录数量。默认20，最大100</p>
     */
    public $Limit;

    /**
     * @var string <p>排序方向，可选的值为&quot;DESC&quot;和&quot;ASC&quot;，默认为&quot;DESC&quot;，按创建时间逆序排序</p>
     */
    public $OrderDirection;

    /**
     * @var array <p>tag 过滤条件，多个 TagFilter 之间关系为且</p>
     */
    public $TagFilters;

    /**
     * @param string $SubscribeId <p>订阅 ID 筛选，精确匹配</p>
     * @param array $SubscribeIds <p>订阅 ID 筛选，精确匹配</p>
     * @param string $SubscribeName <p>订阅名称，前缀模糊匹配</p>
     * @param string $InstanceId <p>订阅的云上数据库实例的 ID，精确匹配</p>
     * @param string $Topic <p>订阅的topicName</p>
     * @param integer $PayType <p>计费模式筛选，可能的值：0-包年包月，1-按量计费</p>
     * @param string $Product <p>订阅的数据库产品，目前支持 cynosdbmysql,mariadb,mongodb,mysql,percona,tdpg,tdsqlpercona(tdsqlmysql)</p>
     * @param array $Status <p>数据订阅生命周期状态，可能的值为：正常 normal, 隔离中 isolating, 已隔离 isolated, 下线中 offlining，按量转包年包月中 post2PrePayIng</p>
     * @param array $SubsStatus <p>数据订阅状态，可能的值为：未启动 notStarted, 校验中 checking, 校验不通过 checkNotPass, 校验通过 checkPass, 启动中 starting, 运行中 running, 异常出错 error</p>
     * @param integer $Offset <p>返回记录的起始偏移量。默认0</p>
     * @param integer $Limit <p>单次返回的记录数量。默认20，最大100</p>
     * @param string $OrderDirection <p>排序方向，可选的值为&quot;DESC&quot;和&quot;ASC&quot;，默认为&quot;DESC&quot;，按创建时间逆序排序</p>
     * @param array $TagFilters <p>tag 过滤条件，多个 TagFilter 之间关系为且</p>
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
