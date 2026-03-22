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
 * DescribeAssetImageList请求参数结构体
 *
 * @method integer getLimit() 获取<p>需要返回的数量，默认为10，最大值为100</p>
 * @method void setLimit(integer $Limit) 设置<p>需要返回的数量，默认为10，最大值为100</p>
 * @method integer getOffset() 获取<p>偏移量，默认为0。</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量，默认为0。</p>
 * @method array getFilters() 获取<p>过滤条件。</p><li>ImageName- String - 是否必填：否 - 镜像名称筛选，</li><li>ScanStatus - String - 是否必填：否 - 镜像扫描状态notScan，scanning，scanned，scanErr</li><li>ImageID- String - 是否必填：否 - 镜像ID筛选，</li><li>SecurityRisk- String - 是否必填：否 - 安全风险，VirusCnt、RiskCnt、IsTrustImage、CriticalLevelVul、HighLevelVul、MediumLevelVul、LowLevelVul</li>
 * @method void setFilters(array $Filters) 设置<p>过滤条件。</p><li>ImageName- String - 是否必填：否 - 镜像名称筛选，</li><li>ScanStatus - String - 是否必填：否 - 镜像扫描状态notScan，scanning，scanned，scanErr</li><li>ImageID- String - 是否必填：否 - 镜像ID筛选，</li><li>SecurityRisk- String - 是否必填：否 - 安全风险，VirusCnt、RiskCnt、IsTrustImage、CriticalLevelVul、HighLevelVul、MediumLevelVul、LowLevelVul</li>
 * @method string getBy() 获取<p>排序字段</p>
 * @method void setBy(string $By) 设置<p>排序字段</p>
 * @method string getOrder() 获取<p>排序方式 asc,desc</p>
 * @method void setOrder(string $Order) 设置<p>排序方式 asc,desc</p>
 */
class DescribeAssetImageListRequest extends AbstractModel
{
    /**
     * @var integer <p>需要返回的数量，默认为10，最大值为100</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量，默认为0。</p>
     */
    public $Offset;

    /**
     * @var array <p>过滤条件。</p><li>ImageName- String - 是否必填：否 - 镜像名称筛选，</li><li>ScanStatus - String - 是否必填：否 - 镜像扫描状态notScan，scanning，scanned，scanErr</li><li>ImageID- String - 是否必填：否 - 镜像ID筛选，</li><li>SecurityRisk- String - 是否必填：否 - 安全风险，VirusCnt、RiskCnt、IsTrustImage、CriticalLevelVul、HighLevelVul、MediumLevelVul、LowLevelVul</li>
     */
    public $Filters;

    /**
     * @var string <p>排序字段</p>
     */
    public $By;

    /**
     * @var string <p>排序方式 asc,desc</p>
     */
    public $Order;

    /**
     * @param integer $Limit <p>需要返回的数量，默认为10，最大值为100</p>
     * @param integer $Offset <p>偏移量，默认为0。</p>
     * @param array $Filters <p>过滤条件。</p><li>ImageName- String - 是否必填：否 - 镜像名称筛选，</li><li>ScanStatus - String - 是否必填：否 - 镜像扫描状态notScan，scanning，scanned，scanErr</li><li>ImageID- String - 是否必填：否 - 镜像ID筛选，</li><li>SecurityRisk- String - 是否必填：否 - 安全风险，VirusCnt、RiskCnt、IsTrustImage、CriticalLevelVul、HighLevelVul、MediumLevelVul、LowLevelVul</li>
     * @param string $By <p>排序字段</p>
     * @param string $Order <p>排序方式 asc,desc</p>
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new AssetFilters();
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
