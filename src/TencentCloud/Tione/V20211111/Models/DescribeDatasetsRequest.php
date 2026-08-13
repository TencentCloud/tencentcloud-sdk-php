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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDatasets请求参数结构体
 *
 * @method string getTiProjectId() 获取<p>TI工作空间ID</p><p>仅用于“工作空间”白名单功能。如需使用，请联系TI管理员开通白名单。</p>
 * @method void setTiProjectId(string $TiProjectId) 设置<p>TI工作空间ID</p><p>仅用于“工作空间”白名单功能。如需使用，请联系TI管理员开通白名单。</p>
 * @method array getDatasetIds() 获取<p>数据集id列表</p>
 * @method void setDatasetIds(array $DatasetIds) 设置<p>数据集id列表</p>
 * @method array getFilters() 获取<p>数据集查询过滤条件，多个Filter之间的关系为逻辑与（AND）关系，过滤字段Filter.Name，类型为String<br>DatasetName，数据集名称<br>DatasetScope，数据集范围，SCOPE_DATASET_PRIVATE或SCOPE_DATASET_PUBLIC</p>
 * @method void setFilters(array $Filters) 设置<p>数据集查询过滤条件，多个Filter之间的关系为逻辑与（AND）关系，过滤字段Filter.Name，类型为String<br>DatasetName，数据集名称<br>DatasetScope，数据集范围，SCOPE_DATASET_PRIVATE或SCOPE_DATASET_PUBLIC</p>
 * @method array getTagFilters() 获取<p>标签过滤条件</p>
 * @method void setTagFilters(array $TagFilters) 设置<p>标签过滤条件</p>
 * @method string getOrder() 获取<p>排序值，支持Asc或Desc，默认Desc</p>
 * @method void setOrder(string $Order) 设置<p>排序值，支持Asc或Desc，默认Desc</p>
 * @method string getOrderField() 获取<p>排序字段，支持CreateTime或UpdateTime，默认CreateTime</p>
 * @method void setOrderField(string $OrderField) 设置<p>排序字段，支持CreateTime或UpdateTime，默认CreateTime</p>
 * @method integer getOffset() 获取<p>偏移值</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移值</p>
 * @method integer getLimit() 获取<p>返回数据个数，默认20，最大支持200</p>
 * @method void setLimit(integer $Limit) 设置<p>返回数据个数，默认20，最大支持200</p>
 * @method boolean getCFSChecking() 获取<p>是否检查CFS。若开启，则在CFS挂载好之前，不会返回数据集列表。</p>
 * @method void setCFSChecking(boolean $CFSChecking) 设置<p>是否检查CFS。若开启，则在CFS挂载好之前，不会返回数据集列表。</p>
 * @method boolean getCFSDetail() 获取<p>是否返回CFS详情。</p>
 * @method void setCFSDetail(boolean $CFSDetail) 设置<p>是否返回CFS详情。</p>
 */
class DescribeDatasetsRequest extends AbstractModel
{
    /**
     * @var string <p>TI工作空间ID</p><p>仅用于“工作空间”白名单功能。如需使用，请联系TI管理员开通白名单。</p>
     */
    public $TiProjectId;

    /**
     * @var array <p>数据集id列表</p>
     */
    public $DatasetIds;

    /**
     * @var array <p>数据集查询过滤条件，多个Filter之间的关系为逻辑与（AND）关系，过滤字段Filter.Name，类型为String<br>DatasetName，数据集名称<br>DatasetScope，数据集范围，SCOPE_DATASET_PRIVATE或SCOPE_DATASET_PUBLIC</p>
     */
    public $Filters;

    /**
     * @var array <p>标签过滤条件</p>
     */
    public $TagFilters;

    /**
     * @var string <p>排序值，支持Asc或Desc，默认Desc</p>
     */
    public $Order;

    /**
     * @var string <p>排序字段，支持CreateTime或UpdateTime，默认CreateTime</p>
     */
    public $OrderField;

    /**
     * @var integer <p>偏移值</p>
     */
    public $Offset;

    /**
     * @var integer <p>返回数据个数，默认20，最大支持200</p>
     */
    public $Limit;

    /**
     * @var boolean <p>是否检查CFS。若开启，则在CFS挂载好之前，不会返回数据集列表。</p>
     */
    public $CFSChecking;

    /**
     * @var boolean <p>是否返回CFS详情。</p>
     */
    public $CFSDetail;

    /**
     * @param string $TiProjectId <p>TI工作空间ID</p><p>仅用于“工作空间”白名单功能。如需使用，请联系TI管理员开通白名单。</p>
     * @param array $DatasetIds <p>数据集id列表</p>
     * @param array $Filters <p>数据集查询过滤条件，多个Filter之间的关系为逻辑与（AND）关系，过滤字段Filter.Name，类型为String<br>DatasetName，数据集名称<br>DatasetScope，数据集范围，SCOPE_DATASET_PRIVATE或SCOPE_DATASET_PUBLIC</p>
     * @param array $TagFilters <p>标签过滤条件</p>
     * @param string $Order <p>排序值，支持Asc或Desc，默认Desc</p>
     * @param string $OrderField <p>排序字段，支持CreateTime或UpdateTime，默认CreateTime</p>
     * @param integer $Offset <p>偏移值</p>
     * @param integer $Limit <p>返回数据个数，默认20，最大支持200</p>
     * @param boolean $CFSChecking <p>是否检查CFS。若开启，则在CFS挂载好之前，不会返回数据集列表。</p>
     * @param boolean $CFSDetail <p>是否返回CFS详情。</p>
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
        if (array_key_exists("TiProjectId",$param) and $param["TiProjectId"] !== null) {
            $this->TiProjectId = $param["TiProjectId"];
        }

        if (array_key_exists("DatasetIds",$param) and $param["DatasetIds"] !== null) {
            $this->DatasetIds = $param["DatasetIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new TagFilter();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
        }

        if (array_key_exists("Order",$param) and $param["Order"] !== null) {
            $this->Order = $param["Order"];
        }

        if (array_key_exists("OrderField",$param) and $param["OrderField"] !== null) {
            $this->OrderField = $param["OrderField"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("CFSChecking",$param) and $param["CFSChecking"] !== null) {
            $this->CFSChecking = $param["CFSChecking"];
        }

        if (array_key_exists("CFSDetail",$param) and $param["CFSDetail"] !== null) {
            $this->CFSDetail = $param["CFSDetail"];
        }
    }
}
