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
 * ListRegionLbs请求参数结构体
 *
 * @method string getClusterId() 获取<p>TKE 集群 ID，用于查询集群所属 VPC，进而过滤同 VPC 下的独占型 CLB，例如 cls-xxxxxxxx</p>
 * @method void setClusterId(string $ClusterId) 设置<p>TKE 集群 ID，用于查询集群所属 VPC，进而过滤同 VPC 下的独占型 CLB，例如 cls-xxxxxxxx</p>
 * @method array getLoadBalancerIds() 获取<p>负载均衡实例 ID 列表，最多 20 个；不传则查询同地域全部实例</p>
 * @method void setLoadBalancerIds(array $LoadBalancerIds) 设置<p>负载均衡实例 ID 列表，最多 20 个；不传则查询同地域全部实例</p>
 * @method integer getOffset() 获取<p>分页偏移量，从 0 开始，默认 0</p>
 * @method void setOffset(integer $Offset) 设置<p>分页偏移量，从 0 开始，默认 0</p>
 * @method integer getLimit() 获取<p>分页每页条数，默认 20，最大 100</p>
 * @method void setLimit(integer $Limit) 设置<p>分页每页条数，默认 20，最大 100</p>
 */
class ListRegionLbsRequest extends AbstractModel
{
    /**
     * @var string <p>TKE 集群 ID，用于查询集群所属 VPC，进而过滤同 VPC 下的独占型 CLB，例如 cls-xxxxxxxx</p>
     */
    public $ClusterId;

    /**
     * @var array <p>负载均衡实例 ID 列表，最多 20 个；不传则查询同地域全部实例</p>
     */
    public $LoadBalancerIds;

    /**
     * @var integer <p>分页偏移量，从 0 开始，默认 0</p>
     */
    public $Offset;

    /**
     * @var integer <p>分页每页条数，默认 20，最大 100</p>
     */
    public $Limit;

    /**
     * @param string $ClusterId <p>TKE 集群 ID，用于查询集群所属 VPC，进而过滤同 VPC 下的独占型 CLB，例如 cls-xxxxxxxx</p>
     * @param array $LoadBalancerIds <p>负载均衡实例 ID 列表，最多 20 个；不传则查询同地域全部实例</p>
     * @param integer $Offset <p>分页偏移量，从 0 开始，默认 0</p>
     * @param integer $Limit <p>分页每页条数，默认 20，最大 100</p>
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

        if (array_key_exists("LoadBalancerIds",$param) and $param["LoadBalancerIds"] !== null) {
            $this->LoadBalancerIds = $param["LoadBalancerIds"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }
    }
}
