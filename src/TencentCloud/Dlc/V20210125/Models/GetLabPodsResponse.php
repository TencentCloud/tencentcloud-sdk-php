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
 * GetLabPods返回参数结构体
 *
 * @method integer getTotal() 获取<p>总记录数</p>
 * @method void setTotal(integer $Total) 设置<p>总记录数</p>
 * @method integer getPage() 获取<p>当前页码（从1开始）</p>
 * @method void setPage(integer $Page) 设置<p>当前页码（从1开始）</p>
 * @method integer getPageSize() 获取<p>每页数量</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页数量</p>
 * @method integer getTotalPages() 获取<p>总页数</p>
 * @method void setTotalPages(integer $TotalPages) 设置<p>总页数</p>
 * @method array getItems() 获取<p>集群的Pod列表</p>
 * @method void setItems(array $Items) 设置<p>集群的Pod列表</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class GetLabPodsResponse extends AbstractModel
{
    /**
     * @var integer <p>总记录数</p>
     */
    public $Total;

    /**
     * @var integer <p>当前页码（从1开始）</p>
     */
    public $Page;

    /**
     * @var integer <p>每页数量</p>
     */
    public $PageSize;

    /**
     * @var integer <p>总页数</p>
     */
    public $TotalPages;

    /**
     * @var array <p>集群的Pod列表</p>
     */
    public $Items;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $Total <p>总记录数</p>
     * @param integer $Page <p>当前页码（从1开始）</p>
     * @param integer $PageSize <p>每页数量</p>
     * @param integer $TotalPages <p>总页数</p>
     * @param array $Items <p>集群的Pod列表</p>
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("Total",$param) and $param["Total"] !== null) {
            $this->Total = $param["Total"];
        }

        if (array_key_exists("Page",$param) and $param["Page"] !== null) {
            $this->Page = $param["Page"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("TotalPages",$param) and $param["TotalPages"] !== null) {
            $this->TotalPages = $param["TotalPages"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new ClusterPod();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
