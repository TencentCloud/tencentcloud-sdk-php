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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApmInstances请求参数结构体
 *
 * @method array getTags() 获取<p>Tag 列表</p>
 * @method void setTags(array $Tags) 设置<p>Tag 列表</p>
 * @method string getInstanceName() 获取<p>按业务系统名过滤，支持模糊检索</p>
 * @method void setInstanceName(string $InstanceName) 设置<p>按业务系统名过滤，支持模糊检索</p>
 * @method string getInstanceId() 获取<p>按业务系统 ID 过滤，支持模糊检索</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>按业务系统 ID 过滤，支持模糊检索</p>
 * @method array getInstanceIds() 获取<p>按业务系统 ID 过滤</p>
 * @method void setInstanceIds(array $InstanceIds) 设置<p>按业务系统 ID 过滤</p>
 * @method integer getDemoInstanceFlag() 获取<p>是否查询官方 Demo 业务系统（0=非 Demo 业务系统，1=Demo 业务系统，默认为0）</p>
 * @method void setDemoInstanceFlag(integer $DemoInstanceFlag) 设置<p>是否查询官方 Demo 业务系统（0=非 Demo 业务系统，1=Demo 业务系统，默认为0）</p>
 * @method integer getAllRegionsFlag() 获取<p>是否查询全地域业务系统（0=不查询全地域，1=查询全地域，默认为0）</p>
 * @method void setAllRegionsFlag(integer $AllRegionsFlag) 设置<p>是否查询全地域业务系统（0=不查询全地域，1=查询全地域，默认为0）</p>
 * @method integer getPageIndex() 获取<p>页码，从1开始</p><p>单位：页</p>
 * @method void setPageIndex(integer $PageIndex) 设置<p>页码，从1开始</p><p>单位：页</p>
 * @method integer getPageSize() 获取<p>每页数量，默认20，最大100</p><p>单位：个</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页数量，默认20，最大100</p><p>单位：个</p>
 * @method string getKeyword() 获取<p>搜索参数（OR 匹配 Name / InstanceKey）</p>
 * @method void setKeyword(string $Keyword) 设置<p>搜索参数（OR 匹配 Name / InstanceKey）</p>
 * @method string getOrderDirection() 获取<p>排序类型：ASC | DESC</p>
 * @method void setOrderDirection(string $OrderDirection) 设置<p>排序类型：ASC | DESC</p>
 * @method string getOrderBy() 获取<p>排序字段：ServiceCount / TotalCount</p>
 * @method void setOrderBy(string $OrderBy) 设置<p>排序字段：ServiceCount / TotalCount</p>
 */
class DescribeApmInstancesRequest extends AbstractModel
{
    /**
     * @var array <p>Tag 列表</p>
     */
    public $Tags;

    /**
     * @var string <p>按业务系统名过滤，支持模糊检索</p>
     */
    public $InstanceName;

    /**
     * @var string <p>按业务系统 ID 过滤，支持模糊检索</p>
     */
    public $InstanceId;

    /**
     * @var array <p>按业务系统 ID 过滤</p>
     */
    public $InstanceIds;

    /**
     * @var integer <p>是否查询官方 Demo 业务系统（0=非 Demo 业务系统，1=Demo 业务系统，默认为0）</p>
     */
    public $DemoInstanceFlag;

    /**
     * @var integer <p>是否查询全地域业务系统（0=不查询全地域，1=查询全地域，默认为0）</p>
     */
    public $AllRegionsFlag;

    /**
     * @var integer <p>页码，从1开始</p><p>单位：页</p>
     */
    public $PageIndex;

    /**
     * @var integer <p>每页数量，默认20，最大100</p><p>单位：个</p>
     */
    public $PageSize;

    /**
     * @var string <p>搜索参数（OR 匹配 Name / InstanceKey）</p>
     */
    public $Keyword;

    /**
     * @var string <p>排序类型：ASC | DESC</p>
     */
    public $OrderDirection;

    /**
     * @var string <p>排序字段：ServiceCount / TotalCount</p>
     */
    public $OrderBy;

    /**
     * @param array $Tags <p>Tag 列表</p>
     * @param string $InstanceName <p>按业务系统名过滤，支持模糊检索</p>
     * @param string $InstanceId <p>按业务系统 ID 过滤，支持模糊检索</p>
     * @param array $InstanceIds <p>按业务系统 ID 过滤</p>
     * @param integer $DemoInstanceFlag <p>是否查询官方 Demo 业务系统（0=非 Demo 业务系统，1=Demo 业务系统，默认为0）</p>
     * @param integer $AllRegionsFlag <p>是否查询全地域业务系统（0=不查询全地域，1=查询全地域，默认为0）</p>
     * @param integer $PageIndex <p>页码，从1开始</p><p>单位：页</p>
     * @param integer $PageSize <p>每页数量，默认20，最大100</p><p>单位：个</p>
     * @param string $Keyword <p>搜索参数（OR 匹配 Name / InstanceKey）</p>
     * @param string $OrderDirection <p>排序类型：ASC | DESC</p>
     * @param string $OrderBy <p>排序字段：ServiceCount / TotalCount</p>
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
        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new ApmTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("InstanceName",$param) and $param["InstanceName"] !== null) {
            $this->InstanceName = $param["InstanceName"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceIds",$param) and $param["InstanceIds"] !== null) {
            $this->InstanceIds = $param["InstanceIds"];
        }

        if (array_key_exists("DemoInstanceFlag",$param) and $param["DemoInstanceFlag"] !== null) {
            $this->DemoInstanceFlag = $param["DemoInstanceFlag"];
        }

        if (array_key_exists("AllRegionsFlag",$param) and $param["AllRegionsFlag"] !== null) {
            $this->AllRegionsFlag = $param["AllRegionsFlag"];
        }

        if (array_key_exists("PageIndex",$param) and $param["PageIndex"] !== null) {
            $this->PageIndex = $param["PageIndex"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("OrderDirection",$param) and $param["OrderDirection"] !== null) {
            $this->OrderDirection = $param["OrderDirection"];
        }

        if (array_key_exists("OrderBy",$param) and $param["OrderBy"] !== null) {
            $this->OrderBy = $param["OrderBy"];
        }
    }
}
