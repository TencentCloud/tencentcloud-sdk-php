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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusters请求参数结构体
 *
 * @method array getClusterIds() 获取<p>按照一个或者多个集群 ID 查询，每次请求的集群上限为 100</p>
 * @method void setClusterIds(array $ClusterIds) 设置<p>按照一个或者多个集群 ID 查询，每次请求的集群上限为 100</p>
 * @method integer getOffset() 获取<p>偏移量，默认 0</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认 0</p>
 * @method integer getLimit() 获取<p>请求的集群数量，默认 20，最大值 100</p>
 * @method void setLimit(integer $Limit) 设置<p>请求的集群数量，默认 20，最大值 100</p>
 * @method integer getOrderType() 获取<p>集群信息结果排序规则，1 按时间降序，2 按照时间升序，3  按照状态排序</p>
 * @method void setOrderType(integer $OrderType) 设置<p>集群信息结果排序规则，1 按时间降序，2 按照时间升序，3  按照状态排序</p>
 * @method array getFilters() 获取<p>过滤规则</p><ul><li>Name<br>  按照集群的名字进行模糊查询。例如：测试<br>  类型： String<br>  必选： 否</li></ul>
 * @method void setFilters(array $Filters) 设置<p>过滤规则</p><ul><li>Name<br>  按照集群的名字进行模糊查询。例如：测试<br>  类型： String<br>  必选： 否</li></ul>
 * @method string getWorkSpaceId() 获取<p>工作空间 SerialId</p>
 * @method void setWorkSpaceId(string $WorkSpaceId) 设置<p>工作空间 SerialId</p>
 */
class DescribeClustersRequest extends AbstractModel
{
    /**
     * @var array <p>按照一个或者多个集群 ID 查询，每次请求的集群上限为 100</p>
     */
    public $ClusterIds;

    /**
     * @var integer <p>偏移量，默认 0</p>
     */
    public $Offset;

    /**
     * @var integer <p>请求的集群数量，默认 20，最大值 100</p>
     */
    public $Limit;

    /**
     * @var integer <p>集群信息结果排序规则，1 按时间降序，2 按照时间升序，3  按照状态排序</p>
     */
    public $OrderType;

    /**
     * @var array <p>过滤规则</p><ul><li>Name<br>  按照集群的名字进行模糊查询。例如：测试<br>  类型： String<br>  必选： 否</li></ul>
     */
    public $Filters;

    /**
     * @var string <p>工作空间 SerialId</p>
     */
    public $WorkSpaceId;

    /**
     * @param array $ClusterIds <p>按照一个或者多个集群 ID 查询，每次请求的集群上限为 100</p>
     * @param integer $Offset <p>偏移量，默认 0</p>
     * @param integer $Limit <p>请求的集群数量，默认 20，最大值 100</p>
     * @param integer $OrderType <p>集群信息结果排序规则，1 按时间降序，2 按照时间升序，3  按照状态排序</p>
     * @param array $Filters <p>过滤规则</p><ul><li>Name<br>  按照集群的名字进行模糊查询。例如：测试<br>  类型： String<br>  必选： 否</li></ul>
     * @param string $WorkSpaceId <p>工作空间 SerialId</p>
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
        if (array_key_exists("ClusterIds",$param) and $param["ClusterIds"] !== null) {
            $this->ClusterIds = $param["ClusterIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("WorkSpaceId",$param) and $param["WorkSpaceId"] !== null) {
            $this->WorkSpaceId = $param["WorkSpaceId"];
        }
    }
}
