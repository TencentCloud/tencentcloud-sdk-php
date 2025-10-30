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
namespace TencentCloud\Tdmq\V20200217\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeRabbitMQExchanges请求参数结构体
 *
 * @method string getInstanceId() 获取实例 ID，形如 amqp-xxxxxxxx。有效的 InstanceId 可通过登录 [TDMQ RabbitMQ 控制台](https://console.cloud.tencent.com/trabbitmq/cluster?rid=1)查询。
 * @method void setInstanceId(string $InstanceId) 设置实例 ID，形如 amqp-xxxxxxxx。有效的 InstanceId 可通过登录 [TDMQ RabbitMQ 控制台](https://console.cloud.tencent.com/trabbitmq/cluster?rid=1)查询。
 * @method string getVirtualHost() 获取VirtualHost 名称，形如 testvhost。有效的 VirtualHost 名称可通过登录 [TDMQ RabbitMQ 控制台](https://console.cloud.tencent.com/trabbitmq/cluster?rid=1)查询，在左侧导航栏点击 Vhost，并在 Vhost 列表中找到Vhost名称。
 * @method void setVirtualHost(string $VirtualHost) 设置VirtualHost 名称，形如 testvhost。有效的 VirtualHost 名称可通过登录 [TDMQ RabbitMQ 控制台](https://console.cloud.tencent.com/trabbitmq/cluster?rid=1)查询，在左侧导航栏点击 Vhost，并在 Vhost 列表中找到Vhost名称。
 * @method integer getOffset() 获取分页 offset，默认 0
 * @method void setOffset(integer $Offset) 设置分页 offset，默认 0
 * @method integer getLimit() 获取分页 limit，默认 20
 * @method void setLimit(integer $Limit) 设置分页 limit，默认 20
 * @method string getSearchWord() 获取搜索关键词, 支持模糊匹配 
 * @method void setSearchWord(string $SearchWord) 设置搜索关键词, 支持模糊匹配 
 * @method array getExchangeTypeFilters() 获取筛选 exchange 类型, 数组中每个元素为选中的过滤类型，仅支持 direct、fanout、topic、header
 * @method void setExchangeTypeFilters(array $ExchangeTypeFilters) 设置筛选 exchange 类型, 数组中每个元素为选中的过滤类型，仅支持 direct、fanout、topic、header
 * @method array getExchangeCreatorFilters() 获取筛选 exchange 创建来源,  "system":"系统创建", "user":"用户创建"
 * @method void setExchangeCreatorFilters(array $ExchangeCreatorFilters) 设置筛选 exchange 创建来源,  "system":"系统创建", "user":"用户创建"
 * @method string getExchangeName() 获取exchange 名称，用于精确匹配
 * @method void setExchangeName(string $ExchangeName) 设置exchange 名称，用于精确匹配
 * @method string getSortElement() 获取排序依据的字段：
MessageRateInOut - 生产消费速率之和；
MessageRateIn - 生产速率；
MessageRateOut - 消费速率；
 * @method void setSortElement(string $SortElement) 设置排序依据的字段：
MessageRateInOut - 生产消费速率之和；
MessageRateIn - 生产速率；
MessageRateOut - 消费速率；
 * @method string getSortOrder() 获取排序顺序，ascend 或 descend
ascend：升序
descend：降序
 * @method void setSortOrder(string $SortOrder) 设置排序顺序，ascend 或 descend
ascend：升序
descend：降序
 */
class DescribeRabbitMQExchangesRequest extends AbstractModel
{
    /**
     * @var string 实例 ID，形如 amqp-xxxxxxxx。有效的 InstanceId 可通过登录 [TDMQ RabbitMQ 控制台](https://console.cloud.tencent.com/trabbitmq/cluster?rid=1)查询。
     */
    public $InstanceId;

    /**
     * @var string VirtualHost 名称，形如 testvhost。有效的 VirtualHost 名称可通过登录 [TDMQ RabbitMQ 控制台](https://console.cloud.tencent.com/trabbitmq/cluster?rid=1)查询，在左侧导航栏点击 Vhost，并在 Vhost 列表中找到Vhost名称。
     */
    public $VirtualHost;

    /**
     * @var integer 分页 offset，默认 0
     */
    public $Offset;

    /**
     * @var integer 分页 limit，默认 20
     */
    public $Limit;

    /**
     * @var string 搜索关键词, 支持模糊匹配 
     */
    public $SearchWord;

    /**
     * @var array 筛选 exchange 类型, 数组中每个元素为选中的过滤类型，仅支持 direct、fanout、topic、header
     */
    public $ExchangeTypeFilters;

    /**
     * @var array 筛选 exchange 创建来源,  "system":"系统创建", "user":"用户创建"
     */
    public $ExchangeCreatorFilters;

    /**
     * @var string exchange 名称，用于精确匹配
     */
    public $ExchangeName;

    /**
     * @var string 排序依据的字段：
MessageRateInOut - 生产消费速率之和；
MessageRateIn - 生产速率；
MessageRateOut - 消费速率；
     */
    public $SortElement;

    /**
     * @var string 排序顺序，ascend 或 descend
ascend：升序
descend：降序
     */
    public $SortOrder;

    /**
     * @param string $InstanceId 实例 ID，形如 amqp-xxxxxxxx。有效的 InstanceId 可通过登录 [TDMQ RabbitMQ 控制台](https://console.cloud.tencent.com/trabbitmq/cluster?rid=1)查询。
     * @param string $VirtualHost VirtualHost 名称，形如 testvhost。有效的 VirtualHost 名称可通过登录 [TDMQ RabbitMQ 控制台](https://console.cloud.tencent.com/trabbitmq/cluster?rid=1)查询，在左侧导航栏点击 Vhost，并在 Vhost 列表中找到Vhost名称。
     * @param integer $Offset 分页 offset，默认 0
     * @param integer $Limit 分页 limit，默认 20
     * @param string $SearchWord 搜索关键词, 支持模糊匹配 
     * @param array $ExchangeTypeFilters 筛选 exchange 类型, 数组中每个元素为选中的过滤类型，仅支持 direct、fanout、topic、header
     * @param array $ExchangeCreatorFilters 筛选 exchange 创建来源,  "system":"系统创建", "user":"用户创建"
     * @param string $ExchangeName exchange 名称，用于精确匹配
     * @param string $SortElement 排序依据的字段：
MessageRateInOut - 生产消费速率之和；
MessageRateIn - 生产速率；
MessageRateOut - 消费速率；
     * @param string $SortOrder 排序顺序，ascend 或 descend
ascend：升序
descend：降序
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

        if (array_key_exists("VirtualHost",$param) and $param["VirtualHost"] !== null) {
            $this->VirtualHost = $param["VirtualHost"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SearchWord",$param) and $param["SearchWord"] !== null) {
            $this->SearchWord = $param["SearchWord"];
        }

        if (array_key_exists("ExchangeTypeFilters",$param) and $param["ExchangeTypeFilters"] !== null) {
            $this->ExchangeTypeFilters = $param["ExchangeTypeFilters"];
        }

        if (array_key_exists("ExchangeCreatorFilters",$param) and $param["ExchangeCreatorFilters"] !== null) {
            $this->ExchangeCreatorFilters = $param["ExchangeCreatorFilters"];
        }

        if (array_key_exists("ExchangeName",$param) and $param["ExchangeName"] !== null) {
            $this->ExchangeName = $param["ExchangeName"];
        }

        if (array_key_exists("SortElement",$param) and $param["SortElement"] !== null) {
            $this->SortElement = $param["SortElement"];
        }

        if (array_key_exists("SortOrder",$param) and $param["SortOrder"] !== null) {
            $this->SortOrder = $param["SortOrder"];
        }
    }
}
