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
 * ListModelVersions返回参数结构体
 *
 * @method array getItems() 获取<p>模型版本列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItems(array $Items) 设置<p>模型版本列表</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getTotal() 获取<p>模型总数量</p>
 * @method void setTotal(integer $Total) 设置<p>模型总数量</p>
 * @method integer getPage() 获取<p>当前多少页</p>
 * @method void setPage(integer $Page) 设置<p>当前多少页</p>
 * @method integer getPageSize() 获取<p>当前页模型数量</p>
 * @method void setPageSize(integer $PageSize) 设置<p>当前页模型数量</p>
 * @method integer getTotalPages() 获取<p>结果总页数</p>
 * @method void setTotalPages(integer $TotalPages) 设置<p>结果总页数</p>
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class ListModelVersionsResponse extends AbstractModel
{
    /**
     * @var array <p>模型版本列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Items;

    /**
     * @var integer <p>模型总数量</p>
     */
    public $Total;

    /**
     * @var integer <p>当前多少页</p>
     */
    public $Page;

    /**
     * @var integer <p>当前页模型数量</p>
     */
    public $PageSize;

    /**
     * @var integer <p>结果总页数</p>
     */
    public $TotalPages;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param array $Items <p>模型版本列表</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Total <p>模型总数量</p>
     * @param integer $Page <p>当前多少页</p>
     * @param integer $PageSize <p>当前页模型数量</p>
     * @param integer $TotalPages <p>结果总页数</p>
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
        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new ModelVersionInfo();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
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

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
