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
 * DescribeNodeDataDisks请求参数结构体
 *
 * @method string getInstanceId() 获取EMR集群实例ID
 * @method void setInstanceId(string $InstanceId) 设置EMR集群实例ID
 * @method array getCvmInstanceIds() 获取节点CVM实例Id列表
 * @method void setCvmInstanceIds(array $CvmInstanceIds) 设置节点CVM实例Id列表
 * @method array getFilters() 获取查询云盘的过滤条件
 * @method void setFilters(array $Filters) 设置查询云盘的过滤条件
 * @method string getInnerSearch() 获取模糊搜索
 * @method void setInnerSearch(string $InnerSearch) 设置模糊搜索
 * @method integer getLimit() 获取每页返回数量，默认值为100，最大值为100。
 * @method void setLimit(integer $Limit) 设置每页返回数量，默认值为100，最大值为100。
 * @method integer getOffset() 获取数据偏移值
 * @method void setOffset(integer $Offset) 设置数据偏移值
 */
class DescribeNodeDataDisksRequest extends AbstractModel
{
    /**
     * @var string EMR集群实例ID
     */
    public $InstanceId;

    /**
     * @var array 节点CVM实例Id列表
     */
    public $CvmInstanceIds;

    /**
     * @var array 查询云盘的过滤条件
     */
    public $Filters;

    /**
     * @var string 模糊搜索
     */
    public $InnerSearch;

    /**
     * @var integer 每页返回数量，默认值为100，最大值为100。
     */
    public $Limit;

    /**
     * @var integer 数据偏移值
     */
    public $Offset;

    /**
     * @param string $InstanceId EMR集群实例ID
     * @param array $CvmInstanceIds 节点CVM实例Id列表
     * @param array $Filters 查询云盘的过滤条件
     * @param string $InnerSearch 模糊搜索
     * @param integer $Limit 每页返回数量，默认值为100，最大值为100。
     * @param integer $Offset 数据偏移值
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

        if (array_key_exists("CvmInstanceIds",$param) and $param["CvmInstanceIds"] !== null) {
            $this->CvmInstanceIds = $param["CvmInstanceIds"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("InnerSearch",$param) and $param["InnerSearch"] !== null) {
            $this->InnerSearch = $param["InnerSearch"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
