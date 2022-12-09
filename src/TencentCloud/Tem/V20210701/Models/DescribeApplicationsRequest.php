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
namespace TencentCloud\Tem\V20210701\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeApplications请求参数结构体
 *
 * @method string getEnvironmentId() 获取命名空间ID
 * @method void setEnvironmentId(string $EnvironmentId) 设置命名空间ID
 * @method integer getLimit() 获取分页Limit
 * @method void setLimit(integer $Limit) 设置分页Limit
 * @method integer getOffset() 获取分页offset
 * @method void setOffset(integer $Offset) 设置分页offset
 * @method integer getSourceChannel() 获取来源渠道
 * @method void setSourceChannel(integer $SourceChannel) 设置来源渠道
 * @method string getApplicationId() 获取服务id
 * @method void setApplicationId(string $ApplicationId) 设置服务id
 * @method string getKeyword() 获取搜索关键字
 * @method void setKeyword(string $Keyword) 设置搜索关键字
 * @method array getFilters() 获取查询过滤器
 * @method void setFilters(array $Filters) 设置查询过滤器
 * @method SortType getSortInfo() 获取排序字段
 * @method void setSortInfo(SortType $SortInfo) 设置排序字段
 */
class DescribeApplicationsRequest extends AbstractModel
{
    /**
     * @var string 命名空间ID
     */
    public $EnvironmentId;

    /**
     * @var integer 分页Limit
     */
    public $Limit;

    /**
     * @var integer 分页offset
     */
    public $Offset;

    /**
     * @var integer 来源渠道
     */
    public $SourceChannel;

    /**
     * @var string 服务id
     */
    public $ApplicationId;

    /**
     * @var string 搜索关键字
     */
    public $Keyword;

    /**
     * @var array 查询过滤器
     */
    public $Filters;

    /**
     * @var SortType 排序字段
     */
    public $SortInfo;

    /**
     * @param string $EnvironmentId 命名空间ID
     * @param integer $Limit 分页Limit
     * @param integer $Offset 分页offset
     * @param integer $SourceChannel 来源渠道
     * @param string $ApplicationId 服务id
     * @param string $Keyword 搜索关键字
     * @param array $Filters 查询过滤器
     * @param SortType $SortInfo 排序字段
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
        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
        }

        if (array_key_exists("ApplicationId",$param) and $param["ApplicationId"] !== null) {
            $this->ApplicationId = $param["ApplicationId"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new QueryFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("SortInfo",$param) and $param["SortInfo"] !== null) {
            $this->SortInfo = new SortType();
            $this->SortInfo->deserialize($param["SortInfo"]);
        }
    }
}
