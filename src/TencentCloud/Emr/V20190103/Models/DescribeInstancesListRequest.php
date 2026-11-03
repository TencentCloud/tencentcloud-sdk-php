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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeInstancesList请求参数结构体
 *
 * @method string getDisplayStrategy() 获取<p>集群筛选策略。取值范围：<li>clusterList：表示查询除了已销毁集群之外的集群列表。</li><li>monitorManage：表示查询除了已销毁、创建中以及创建失败的集群之外的集群列表。</li><li>cloudHardwareManage/componentManage：目前这两个取值为预留取值，暂时和monitorManage表示同样的含义。</li></p>
 * @method void setDisplayStrategy(string $DisplayStrategy) 设置<p>集群筛选策略。取值范围：<li>clusterList：表示查询除了已销毁集群之外的集群列表。</li><li>monitorManage：表示查询除了已销毁、创建中以及创建失败的集群之外的集群列表。</li><li>cloudHardwareManage/componentManage：目前这两个取值为预留取值，暂时和monitorManage表示同样的含义。</li></p>
 * @method integer getOffset() 获取<p>页编号，默认值为0，表示第一页。</p>
 * @method void setOffset(integer $Offset) 设置<p>页编号，默认值为0，表示第一页。</p>
 * @method integer getLimit() 获取<p>每页返回数量，默认值为100，最大值为100。<br>如果limit和offset都为0，则查询全部记录；</p>
 * @method void setLimit(integer $Limit) 设置<p>每页返回数量，默认值为100，最大值为100。<br>如果limit和offset都为0，则查询全部记录；</p>
 * @method string getOrderField() 获取<p>排序字段。取值范围：<li>clusterId：表示按照实例ID排序。</li><li>addTime：表示按照实例创建时间排序。</li><li>status：表示按照实例的状态码排序。</li></p>
 * @method void setOrderField(string $OrderField) 设置<p>排序字段。取值范围：<li>clusterId：表示按照实例ID排序。</li><li>addTime：表示按照实例创建时间排序。</li><li>status：表示按照实例的状态码排序。</li></p>
 * @method integer getAsc() 获取<p>按照OrderField升序或者降序进行排序。取值范围：<li>0：表示升序。</li><li>1：表示降序。</li>默认值为0。</p>
 * @method void setAsc(integer $Asc) 设置<p>按照OrderField升序或者降序进行排序。取值范围：<li>0：表示升序。</li><li>1：表示降序。</li>默认值为0。</p>
 * @method array getFilters() 获取<p>自定义查询过滤器。示例：<li>根据ClusterId过滤实例：[{&quot;Name&quot;:&quot;ClusterId&quot;,&quot;Values&quot;:[&quot;emr-xxxxxxxx&quot;]}]</li><li>根据clusterName过滤实例：[{&quot;Name&quot;: &quot;ClusterName&quot;,&quot;Values&quot;: [&quot;cluster_name&quot;]}]</li><li>根据ClusterStatus过滤实例：[{&quot;Name&quot;: &quot;ClusterStatus&quot;,&quot;Values&quot;: [&quot;2&quot;]}]</li></p>
 * @method void setFilters(array $Filters) 设置<p>自定义查询过滤器。示例：<li>根据ClusterId过滤实例：[{&quot;Name&quot;:&quot;ClusterId&quot;,&quot;Values&quot;:[&quot;emr-xxxxxxxx&quot;]}]</li><li>根据clusterName过滤实例：[{&quot;Name&quot;: &quot;ClusterName&quot;,&quot;Values&quot;: [&quot;cluster_name&quot;]}]</li><li>根据ClusterStatus过滤实例：[{&quot;Name&quot;: &quot;ClusterStatus&quot;,&quot;Values&quot;: [&quot;2&quot;]}]</li></p>
 * @method integer getClusterType() 获取<p>默认0为普通集群，2为tke集群</p>
 * @method void setClusterType(integer $ClusterType) 设置<p>默认0为普通集群，2为tke集群</p>
 * @method boolean getNeedMcpPasswordInfo() 获取<p>是否返回需要密码信息</p>
 * @method void setNeedMcpPasswordInfo(boolean $NeedMcpPasswordInfo) 设置<p>是否返回需要密码信息</p>
 */
class DescribeInstancesListRequest extends AbstractModel
{
    /**
     * @var string <p>集群筛选策略。取值范围：<li>clusterList：表示查询除了已销毁集群之外的集群列表。</li><li>monitorManage：表示查询除了已销毁、创建中以及创建失败的集群之外的集群列表。</li><li>cloudHardwareManage/componentManage：目前这两个取值为预留取值，暂时和monitorManage表示同样的含义。</li></p>
     */
    public $DisplayStrategy;

    /**
     * @var integer <p>页编号，默认值为0，表示第一页。</p>
     */
    public $Offset;

    /**
     * @var integer <p>每页返回数量，默认值为100，最大值为100。<br>如果limit和offset都为0，则查询全部记录；</p>
     */
    public $Limit;

    /**
     * @var string <p>排序字段。取值范围：<li>clusterId：表示按照实例ID排序。</li><li>addTime：表示按照实例创建时间排序。</li><li>status：表示按照实例的状态码排序。</li></p>
     */
    public $OrderField;

    /**
     * @var integer <p>按照OrderField升序或者降序进行排序。取值范围：<li>0：表示升序。</li><li>1：表示降序。</li>默认值为0。</p>
     */
    public $Asc;

    /**
     * @var array <p>自定义查询过滤器。示例：<li>根据ClusterId过滤实例：[{&quot;Name&quot;:&quot;ClusterId&quot;,&quot;Values&quot;:[&quot;emr-xxxxxxxx&quot;]}]</li><li>根据clusterName过滤实例：[{&quot;Name&quot;: &quot;ClusterName&quot;,&quot;Values&quot;: [&quot;cluster_name&quot;]}]</li><li>根据ClusterStatus过滤实例：[{&quot;Name&quot;: &quot;ClusterStatus&quot;,&quot;Values&quot;: [&quot;2&quot;]}]</li></p>
     */
    public $Filters;

    /**
     * @var integer <p>默认0为普通集群，2为tke集群</p>
     */
    public $ClusterType;

    /**
     * @var boolean <p>是否返回需要密码信息</p>
     */
    public $NeedMcpPasswordInfo;

    /**
     * @param string $DisplayStrategy <p>集群筛选策略。取值范围：<li>clusterList：表示查询除了已销毁集群之外的集群列表。</li><li>monitorManage：表示查询除了已销毁、创建中以及创建失败的集群之外的集群列表。</li><li>cloudHardwareManage/componentManage：目前这两个取值为预留取值，暂时和monitorManage表示同样的含义。</li></p>
     * @param integer $Offset <p>页编号，默认值为0，表示第一页。</p>
     * @param integer $Limit <p>每页返回数量，默认值为100，最大值为100。<br>如果limit和offset都为0，则查询全部记录；</p>
     * @param string $OrderField <p>排序字段。取值范围：<li>clusterId：表示按照实例ID排序。</li><li>addTime：表示按照实例创建时间排序。</li><li>status：表示按照实例的状态码排序。</li></p>
     * @param integer $Asc <p>按照OrderField升序或者降序进行排序。取值范围：<li>0：表示升序。</li><li>1：表示降序。</li>默认值为0。</p>
     * @param array $Filters <p>自定义查询过滤器。示例：<li>根据ClusterId过滤实例：[{&quot;Name&quot;:&quot;ClusterId&quot;,&quot;Values&quot;:[&quot;emr-xxxxxxxx&quot;]}]</li><li>根据clusterName过滤实例：[{&quot;Name&quot;: &quot;ClusterName&quot;,&quot;Values&quot;: [&quot;cluster_name&quot;]}]</li><li>根据ClusterStatus过滤实例：[{&quot;Name&quot;: &quot;ClusterStatus&quot;,&quot;Values&quot;: [&quot;2&quot;]}]</li></p>
     * @param integer $ClusterType <p>默认0为普通集群，2为tke集群</p>
     * @param boolean $NeedMcpPasswordInfo <p>是否返回需要密码信息</p>
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
        if (array_key_exists("DisplayStrategy",$param) and $param["DisplayStrategy"] !== null) {
            $this->DisplayStrategy = $param["DisplayStrategy"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("Asc",$param) and $param["Asc"] !== null) {
            $this->Asc = $param["Asc"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("ClusterType",$param) and $param["ClusterType"] !== null) {
            $this->ClusterType = $param["ClusterType"];
        }

        if (array_key_exists("NeedMcpPasswordInfo",$param) and $param["NeedMcpPasswordInfo"] !== null) {
            $this->NeedMcpPasswordInfo = $param["NeedMcpPasswordInfo"];
        }
    }
}
