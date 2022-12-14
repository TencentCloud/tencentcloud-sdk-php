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
namespace TencentCloud\Monitor\V20180724\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeGrafanaInstances请求参数结构体
 *
 * @method integer getOffset() 获取查询偏移量
 * @method void setOffset(integer $Offset) 设置查询偏移量
 * @method integer getLimit() 获取查询数量
 * @method void setLimit(integer $Limit) 设置查询数量
 * @method array getInstanceIds() 获取Grafana 实例 ID 数组
 * @method void setInstanceIds(array $InstanceIds) 设置Grafana 实例 ID 数组
 * @method string getInstanceName() 获取Grafana 实例名，支持前缀模糊搜索
 * @method void setInstanceName(string $InstanceName) 设置Grafana 实例名，支持前缀模糊搜索
 * @method array getInstanceStatus() 获取查询状态
 * @method void setInstanceStatus(array $InstanceStatus) 设置查询状态
 * @method array getTagFilters() 获取标签过滤数组
 * @method void setTagFilters(array $TagFilters) 设置标签过滤数组
 */
class DescribeGrafanaInstancesRequest extends AbstractModel
{
    /**
     * @var integer 查询偏移量
     */
    public $Offset;

    /**
     * @var integer 查询数量
     */
    public $Limit;

    /**
     * @var array Grafana 实例 ID 数组
     */
    public $InstanceIds;

    /**
     * @var string Grafana 实例名，支持前缀模糊搜索
     */
    public $InstanceName;

    /**
     * @var array 查询状态
     */
    public $InstanceStatus;

    /**
     * @var array 标签过滤数组
     */
    public $TagFilters;

    /**
     * @param integer $Offset 查询偏移量
     * @param integer $Limit 查询数量
     * @param array $InstanceIds Grafana 实例 ID 数组
     * @param string $InstanceName Grafana 实例名，支持前缀模糊搜索
     * @param array $InstanceStatus 查询状态
     * @param array $TagFilters 标签过滤数组
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceStatus",$param) and $param["InstanceStatus"] !== null) {
            $this->InstanceStatus = $param["InstanceStatus"];
        }

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new PrometheusTag();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
        }
    }
}
