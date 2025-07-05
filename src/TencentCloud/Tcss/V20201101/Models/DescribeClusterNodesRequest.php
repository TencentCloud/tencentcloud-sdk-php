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
namespace TencentCloud\Tcss\V20201101\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterNodes请求参数结构体
 *
 * @method string getClusterId() 获取集群Id,不输入表示查询所有
 * @method void setClusterId(string $ClusterId) 设置集群Id,不输入表示查询所有
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取每次查询的最大记录数量
 * @method void setLimit(integer $Limit) 设置每次查询的最大记录数量
 * @method array getFilters() 获取Name 可取值：
DefendStatus（防护状态）:
	Defended 已防护
	UnDefended 未防护
AgentStatus (容器agent状态):
 	OFFLINE 离线
 	ONLINE 在线
 	UNINSTALL 未安装
InstanceState (节点状态):
  	Running 运行中
  	Ready 准备
  	Notready 未准备好
  	Initializing 初始化
  	Failed 失败
  	Error 错误
InstanceRole (节点角色)
    WORKER 工作节点
    MASTER_ETCD 主节点
    SUPER 超级节点
 * @method void setFilters(array $Filters) 设置Name 可取值：
DefendStatus（防护状态）:
	Defended 已防护
	UnDefended 未防护
AgentStatus (容器agent状态):
 	OFFLINE 离线
 	ONLINE 在线
 	UNINSTALL 未安装
InstanceState (节点状态):
  	Running 运行中
  	Ready 准备
  	Notready 未准备好
  	Initializing 初始化
  	Failed 失败
  	Error 错误
InstanceRole (节点角色)
    WORKER 工作节点
    MASTER_ETCD 主节点
    SUPER 超级节点
 * @method string getBy() 获取排序字段
 * @method void setBy(string $By) 设置排序字段
 * @method string getOrder() 获取排序方式 asc,desc
 * @method void setOrder(string $Order) 设置排序方式 asc,desc
 */
class DescribeClusterNodesRequest extends AbstractModel
{
    /**
     * @var string 集群Id,不输入表示查询所有
     */
    public $ClusterId;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 每次查询的最大记录数量
     */
    public $Limit;

    /**
     * @var array Name 可取值：
DefendStatus（防护状态）:
	Defended 已防护
	UnDefended 未防护
AgentStatus (容器agent状态):
 	OFFLINE 离线
 	ONLINE 在线
 	UNINSTALL 未安装
InstanceState (节点状态):
  	Running 运行中
  	Ready 准备
  	Notready 未准备好
  	Initializing 初始化
  	Failed 失败
  	Error 错误
InstanceRole (节点角色)
    WORKER 工作节点
    MASTER_ETCD 主节点
    SUPER 超级节点
     */
    public $Filters;

    /**
     * @var string 排序字段
     */
    public $By;

    /**
     * @var string 排序方式 asc,desc
     */
    public $Order;

    /**
     * @param string $ClusterId 集群Id,不输入表示查询所有
     * @param integer $Offset 偏移量
     * @param integer $Limit 每次查询的最大记录数量
     * @param array $Filters Name 可取值：
DefendStatus（防护状态）:
	Defended 已防护
	UnDefended 未防护
AgentStatus (容器agent状态):
 	OFFLINE 离线
 	ONLINE 在线
 	UNINSTALL 未安装
InstanceState (节点状态):
  	Running 运行中
  	Ready 准备
  	Notready 未准备好
  	Initializing 初始化
  	Failed 失败
  	Error 错误
InstanceRole (节点角色)
    WORKER 工作节点
    MASTER_ETCD 主节点
    SUPER 超级节点
     * @param string $By 排序字段
     * @param string $Order 排序方式 asc,desc
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new ComplianceFilters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("By",$param) and $param["By"] !== null) {
            $this->By = $param["By"];
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }
    }
}
