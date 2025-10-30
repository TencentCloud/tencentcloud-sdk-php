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
namespace TencentCloud\Dcdb\V20180411\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeProcessList请求参数结构体
 *
 * @method string getInstanceId() 获取实例ID。
 * @method void setInstanceId(string $InstanceId) 设置实例ID。
 * @method string getNodeId() 获取节点ID。
 * @method void setNodeId(string $NodeId) 设置节点ID。
 * @method string getShardId() 获取分片ID，与ShardSerialId设置一个。
 * @method void setShardId(string $ShardId) 设置分片ID，与ShardSerialId设置一个。
 * @method string getShardSerialId() 获取分片序列ID，与ShardId设置一个。
 * @method void setShardSerialId(string $ShardSerialId) 设置分片序列ID，与ShardId设置一个。
 * @method array getFilters() 获取<li><strong>id</strong></li>
    <p style="padding-left: 30px;">按照【<strong>会话ID</strong>】进行过滤。会话ID例如：125700。</p>
    <p style="padding-left: 30px;">类型：String</p>
    <p style="padding-left: 30px;">必选：否</p>
    <p style="padding-left: 30px;">匹配类型：精确匹配</p>

<li><strong>user</strong></li>
    <p style="padding-left: 30px;">按照【<strong>用户名</strong>】进行过滤。用户名例如：root。</p>
    <p style="padding-left: 30px;">类型：String</p>
    <p style="padding-left: 30px;">必选：否</p>
    <p style="padding-left: 30px;">匹配类型：精确匹配</p>
<li><strong>host</strong></li>
    <p style="padding-left: 30px;">按照【<strong>客户端Host</strong>】进行过滤。客户端Host例如：127.0.0.1:46295。</p>
    <p style="padding-left: 30px;">类型：String</p>
    <p style="padding-left: 30px;">必选：否</p>
    <p style="padding-left: 30px;">匹配类型：前缀匹配，例如可以查询客户端IP不加端口：127.0.0.1。</p>
<li><strong>state</strong></li>
    <p style="padding-left: 30px;">按照【<strong>线程状态</strong>】进行过滤。线程状态例如：Updating。</p>
    <p style="padding-left: 30px;">类型：String</p>
    <p style="padding-left: 30px;">必选：否</p>
    <p style="padding-left: 30px;">匹配类型：精确匹配</p>
<li><strong>db</strong></li>
    <p style="padding-left: 30px;">按照【<strong>数据库名称</strong>】进行过滤。数据库名称例如：mysql。</p>
    <p style="padding-left: 30px;">类型：String</p>
    <p style="padding-left: 30px;">必选：否</p>
    <p style="padding-left: 30px;">匹配类型：精确匹配</p>
<li><strong>command</strong></li>
    <p style="padding-left: 30px;">按照【<strong>命令类型</strong>】进行过滤。命令类型例如：Query。</p>
    <p style="padding-left: 30px;">类型：String</p>
    <p style="padding-left: 30px;">必选：否</p>
    <p style="padding-left: 30px;">匹配类型：精确匹配</p>
<li><strong>info</strong></li>
    <p style="padding-left: 30px;">按照【<strong>执行语句</strong>】进行过滤。执行语句例如：select id, name from demo.table1 where id > 10。</p>
    <p style="padding-left: 30px;">类型：String</p>
    <p style="padding-left: 30px;">必选：否</p>
    <p style="padding-left: 30px;">匹配类型：前缀匹配，例如SQL较长，可以输入SQL前缀：select  id, name from demo.table1。</p>
<li><strong>time</strong></li>
    <p style="padding-left: 30px;">按照【<strong>执行时间大于多少（秒）</strong>】进行过滤。例如：10，表示查询执行时间超过10秒的会话。</p>
    <p style="padding-left: 30px;">类型：Integer</p>
    <p style="padding-left: 30px;">必选：否</p>
    <p style="padding-left: 30px;">匹配类型：范围匹配，Values值只支持输入1个。</p>
每次请求的`Filters`的上限为10，`Filter.Values`的上限为50。
 * @method void setFilters(array $Filters) 设置<li><strong>id</strong></li>
    <p style="padding-left: 30px;">按照【<strong>会话ID</strong>】进行过滤。会话ID例如：125700。</p>
    <p style="padding-left: 30px;">类型：String</p>
    <p style="padding-left: 30px;">必选：否</p>
    <p style="padding-left: 30px;">匹配类型：精确匹配</p>

<li><strong>user</strong></li>
    <p style="padding-left: 30px;">按照【<strong>用户名</strong>】进行过滤。用户名例如：root。</p>
    <p style="padding-left: 30px;">类型：String</p>
    <p style="padding-left: 30px;">必选：否</p>
    <p style="padding-left: 30px;">匹配类型：精确匹配</p>
<li><strong>host</strong></li>
    <p style="padding-left: 30px;">按照【<strong>客户端Host</strong>】进行过滤。客户端Host例如：127.0.0.1:46295。</p>
    <p style="padding-left: 30px;">类型：String</p>
    <p style="padding-left: 30px;">必选：否</p>
    <p style="padding-left: 30px;">匹配类型：前缀匹配，例如可以查询客户端IP不加端口：127.0.0.1。</p>
<li><strong>state</strong></li>
    <p style="padding-left: 30px;">按照【<strong>线程状态</strong>】进行过滤。线程状态例如：Updating。</p>
    <p style="padding-left: 30px;">类型：String</p>
    <p style="padding-left: 30px;">必选：否</p>
    <p style="padding-left: 30px;">匹配类型：精确匹配</p>
<li><strong>db</strong></li>
    <p style="padding-left: 30px;">按照【<strong>数据库名称</strong>】进行过滤。数据库名称例如：mysql。</p>
    <p style="padding-left: 30px;">类型：String</p>
    <p style="padding-left: 30px;">必选：否</p>
    <p style="padding-left: 30px;">匹配类型：精确匹配</p>
<li><strong>command</strong></li>
    <p style="padding-left: 30px;">按照【<strong>命令类型</strong>】进行过滤。命令类型例如：Query。</p>
    <p style="padding-left: 30px;">类型：String</p>
    <p style="padding-left: 30px;">必选：否</p>
    <p style="padding-left: 30px;">匹配类型：精确匹配</p>
<li><strong>info</strong></li>
    <p style="padding-left: 30px;">按照【<strong>执行语句</strong>】进行过滤。执行语句例如：select id, name from demo.table1 where id > 10。</p>
    <p style="padding-left: 30px;">类型：String</p>
    <p style="padding-left: 30px;">必选：否</p>
    <p style="padding-left: 30px;">匹配类型：前缀匹配，例如SQL较长，可以输入SQL前缀：select  id, name from demo.table1。</p>
<li><strong>time</strong></li>
    <p style="padding-left: 30px;">按照【<strong>执行时间大于多少（秒）</strong>】进行过滤。例如：10，表示查询执行时间超过10秒的会话。</p>
    <p style="padding-left: 30px;">类型：Integer</p>
    <p style="padding-left: 30px;">必选：否</p>
    <p style="padding-left: 30px;">匹配类型：范围匹配，Values值只支持输入1个。</p>
每次请求的`Filters`的上限为10，`Filter.Values`的上限为50。
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 * @method integer getLimit() 获取返回数量，默认为20，最大值为100。
 * @method void setLimit(integer $Limit) 设置返回数量，默认为20，最大值为100。
 */
class DescribeProcessListRequest extends AbstractModel
{
    /**
     * @var string 实例ID。
     */
    public $InstanceId;

    /**
     * @var string 节点ID。
     */
    public $NodeId;

    /**
     * @var string 分片ID，与ShardSerialId设置一个。
     */
    public $ShardId;

    /**
     * @var string 分片序列ID，与ShardId设置一个。
     */
    public $ShardSerialId;

    /**
     * @var array <li><strong>id</strong></li>
    <p style="padding-left: 30px;">按照【<strong>会话ID</strong>】进行过滤。会话ID例如：125700。</p>
    <p style="padding-left: 30px;">类型：String</p>
    <p style="padding-left: 30px;">必选：否</p>
    <p style="padding-left: 30px;">匹配类型：精确匹配</p>

<li><strong>user</strong></li>
    <p style="padding-left: 30px;">按照【<strong>用户名</strong>】进行过滤。用户名例如：root。</p>
    <p style="padding-left: 30px;">类型：String</p>
    <p style="padding-left: 30px;">必选：否</p>
    <p style="padding-left: 30px;">匹配类型：精确匹配</p>
<li><strong>host</strong></li>
    <p style="padding-left: 30px;">按照【<strong>客户端Host</strong>】进行过滤。客户端Host例如：127.0.0.1:46295。</p>
    <p style="padding-left: 30px;">类型：String</p>
    <p style="padding-left: 30px;">必选：否</p>
    <p style="padding-left: 30px;">匹配类型：前缀匹配，例如可以查询客户端IP不加端口：127.0.0.1。</p>
<li><strong>state</strong></li>
    <p style="padding-left: 30px;">按照【<strong>线程状态</strong>】进行过滤。线程状态例如：Updating。</p>
    <p style="padding-left: 30px;">类型：String</p>
    <p style="padding-left: 30px;">必选：否</p>
    <p style="padding-left: 30px;">匹配类型：精确匹配</p>
<li><strong>db</strong></li>
    <p style="padding-left: 30px;">按照【<strong>数据库名称</strong>】进行过滤。数据库名称例如：mysql。</p>
    <p style="padding-left: 30px;">类型：String</p>
    <p style="padding-left: 30px;">必选：否</p>
    <p style="padding-left: 30px;">匹配类型：精确匹配</p>
<li><strong>command</strong></li>
    <p style="padding-left: 30px;">按照【<strong>命令类型</strong>】进行过滤。命令类型例如：Query。</p>
    <p style="padding-left: 30px;">类型：String</p>
    <p style="padding-left: 30px;">必选：否</p>
    <p style="padding-left: 30px;">匹配类型：精确匹配</p>
<li><strong>info</strong></li>
    <p style="padding-left: 30px;">按照【<strong>执行语句</strong>】进行过滤。执行语句例如：select id, name from demo.table1 where id > 10。</p>
    <p style="padding-left: 30px;">类型：String</p>
    <p style="padding-left: 30px;">必选：否</p>
    <p style="padding-left: 30px;">匹配类型：前缀匹配，例如SQL较长，可以输入SQL前缀：select  id, name from demo.table1。</p>
<li><strong>time</strong></li>
    <p style="padding-left: 30px;">按照【<strong>执行时间大于多少（秒）</strong>】进行过滤。例如：10，表示查询执行时间超过10秒的会话。</p>
    <p style="padding-left: 30px;">类型：Integer</p>
    <p style="padding-left: 30px;">必选：否</p>
    <p style="padding-left: 30px;">匹配类型：范围匹配，Values值只支持输入1个。</p>
每次请求的`Filters`的上限为10，`Filter.Values`的上限为50。
     */
    public $Filters;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 返回数量，默认为20，最大值为100。
     */
    public $Limit;

    /**
     * @param string $InstanceId 实例ID。
     * @param string $NodeId 节点ID。
     * @param string $ShardId 分片ID，与ShardSerialId设置一个。
     * @param string $ShardSerialId 分片序列ID，与ShardId设置一个。
     * @param array $Filters <li><strong>id</strong></li>
    <p style="padding-left: 30px;">按照【<strong>会话ID</strong>】进行过滤。会话ID例如：125700。</p>
    <p style="padding-left: 30px;">类型：String</p>
    <p style="padding-left: 30px;">必选：否</p>
    <p style="padding-left: 30px;">匹配类型：精确匹配</p>

<li><strong>user</strong></li>
    <p style="padding-left: 30px;">按照【<strong>用户名</strong>】进行过滤。用户名例如：root。</p>
    <p style="padding-left: 30px;">类型：String</p>
    <p style="padding-left: 30px;">必选：否</p>
    <p style="padding-left: 30px;">匹配类型：精确匹配</p>
<li><strong>host</strong></li>
    <p style="padding-left: 30px;">按照【<strong>客户端Host</strong>】进行过滤。客户端Host例如：127.0.0.1:46295。</p>
    <p style="padding-left: 30px;">类型：String</p>
    <p style="padding-left: 30px;">必选：否</p>
    <p style="padding-left: 30px;">匹配类型：前缀匹配，例如可以查询客户端IP不加端口：127.0.0.1。</p>
<li><strong>state</strong></li>
    <p style="padding-left: 30px;">按照【<strong>线程状态</strong>】进行过滤。线程状态例如：Updating。</p>
    <p style="padding-left: 30px;">类型：String</p>
    <p style="padding-left: 30px;">必选：否</p>
    <p style="padding-left: 30px;">匹配类型：精确匹配</p>
<li><strong>db</strong></li>
    <p style="padding-left: 30px;">按照【<strong>数据库名称</strong>】进行过滤。数据库名称例如：mysql。</p>
    <p style="padding-left: 30px;">类型：String</p>
    <p style="padding-left: 30px;">必选：否</p>
    <p style="padding-left: 30px;">匹配类型：精确匹配</p>
<li><strong>command</strong></li>
    <p style="padding-left: 30px;">按照【<strong>命令类型</strong>】进行过滤。命令类型例如：Query。</p>
    <p style="padding-left: 30px;">类型：String</p>
    <p style="padding-left: 30px;">必选：否</p>
    <p style="padding-left: 30px;">匹配类型：精确匹配</p>
<li><strong>info</strong></li>
    <p style="padding-left: 30px;">按照【<strong>执行语句</strong>】进行过滤。执行语句例如：select id, name from demo.table1 where id > 10。</p>
    <p style="padding-left: 30px;">类型：String</p>
    <p style="padding-left: 30px;">必选：否</p>
    <p style="padding-left: 30px;">匹配类型：前缀匹配，例如SQL较长，可以输入SQL前缀：select  id, name from demo.table1。</p>
<li><strong>time</strong></li>
    <p style="padding-left: 30px;">按照【<strong>执行时间大于多少（秒）</strong>】进行过滤。例如：10，表示查询执行时间超过10秒的会话。</p>
    <p style="padding-left: 30px;">类型：Integer</p>
    <p style="padding-left: 30px;">必选：否</p>
    <p style="padding-left: 30px;">匹配类型：范围匹配，Values值只支持输入1个。</p>
每次请求的`Filters`的上限为10，`Filter.Values`的上限为50。
     * @param integer $Offset 偏移量，默认为0。
     * @param integer $Limit 返回数量，默认为20，最大值为100。
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

        if (array_key_exists("NodeId",$param) and $param["NodeId"] !== null) {
            $this->NodeId = $param["NodeId"];
        }

        if (array_key_exists("ShardId",$param) and $param["ShardId"] !== null) {
            $this->ShardId = $param["ShardId"];
        }

        if (array_key_exists("ShardSerialId",$param) and $param["ShardSerialId"] !== null) {
            $this->ShardSerialId = $param["ShardSerialId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
