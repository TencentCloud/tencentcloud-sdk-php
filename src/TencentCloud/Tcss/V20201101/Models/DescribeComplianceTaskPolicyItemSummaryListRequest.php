<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
 * DescribeComplianceTaskPolicyItemSummaryList请求参数结构体
 *
 * @method string getAssetType() 获取资产类型。仅查询与指定资产类型相关的检测项。

ASSET_CONTAINER, 容器

ASSET_IMAGE, 镜像

ASSET_HOST, 主机

ASSET_K8S, K8S资产
 * @method void setAssetType(string $AssetType) 设置资产类型。仅查询与指定资产类型相关的检测项。

ASSET_CONTAINER, 容器

ASSET_IMAGE, 镜像

ASSET_HOST, 主机

ASSET_K8S, K8S资产
 * @method integer getOffset() 获取起始偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置起始偏移量，默认为0。
 * @method integer getLimit() 获取需要返回的数量，默认为10，最大值为100。
 * @method void setLimit(integer $Limit) 设置需要返回的数量，默认为10，最大值为100。
 * @method array getFilters() 获取过滤条件。
Name - String
Name 可取值：ItemType, StandardId,  RiskLevel。
当为K8S资产时，还可取ClusterName。
 * @method void setFilters(array $Filters) 设置过滤条件。
Name - String
Name 可取值：ItemType, StandardId,  RiskLevel。
当为K8S资产时，还可取ClusterName。
 */
class DescribeComplianceTaskPolicyItemSummaryListRequest extends AbstractModel
{
    /**
     * @var string 资产类型。仅查询与指定资产类型相关的检测项。

ASSET_CONTAINER, 容器

ASSET_IMAGE, 镜像

ASSET_HOST, 主机

ASSET_K8S, K8S资产
     */
    public $AssetType;

    /**
     * @var integer 起始偏移量，默认为0。
     */
    public $Offset;

    /**
     * @var integer 需要返回的数量，默认为10，最大值为100。
     */
    public $Limit;

    /**
     * @var array 过滤条件。
Name - String
Name 可取值：ItemType, StandardId,  RiskLevel。
当为K8S资产时，还可取ClusterName。
     */
    public $Filters;

    /**
     * @param string $AssetType 资产类型。仅查询与指定资产类型相关的检测项。

ASSET_CONTAINER, 容器

ASSET_IMAGE, 镜像

ASSET_HOST, 主机

ASSET_K8S, K8S资产
     * @param integer $Offset 起始偏移量，默认为0。
     * @param integer $Limit 需要返回的数量，默认为10，最大值为100。
     * @param array $Filters 过滤条件。
Name - String
Name 可取值：ItemType, StandardId,  RiskLevel。
当为K8S资产时，还可取ClusterName。
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
        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
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
    }
}
