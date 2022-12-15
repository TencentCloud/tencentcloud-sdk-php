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
 * DescribeEnvironments请求参数结构体
 *
 * @method integer getLimit() 获取分页limit
 * @method void setLimit(integer $Limit) 设置分页limit
 * @method integer getOffset() 获取分页下标
 * @method void setOffset(integer $Offset) 设置分页下标
 * @method integer getSourceChannel() 获取来源source
 * @method void setSourceChannel(integer $SourceChannel) 设置来源source
 * @method array getFilters() 获取查询过滤器
 * @method void setFilters(array $Filters) 设置查询过滤器
 * @method SortType getSortInfo() 获取排序字段
 * @method void setSortInfo(SortType $SortInfo) 设置排序字段
 * @method string getEnvironmentId() 获取环境id
 * @method void setEnvironmentId(string $EnvironmentId) 设置环境id
 */
class DescribeEnvironmentsRequest extends AbstractModel
{
    /**
     * @var integer 分页limit
     */
    public $Limit;

    /**
     * @var integer 分页下标
     */
    public $Offset;

    /**
     * @var integer 来源source
     */
    public $SourceChannel;

    /**
     * @var array 查询过滤器
     */
    public $Filters;

    /**
     * @var SortType 排序字段
     */
    public $SortInfo;

    /**
     * @var string 环境id
     */
    public $EnvironmentId;

    /**
     * @param integer $Limit 分页limit
     * @param integer $Offset 分页下标
     * @param integer $SourceChannel 来源source
     * @param array $Filters 查询过滤器
     * @param SortType $SortInfo 排序字段
     * @param string $EnvironmentId 环境id
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

        if (array_key_exists("SourceChannel",$param) and $param["SourceChannel"] !== null) {
            $this->SourceChannel = $param["SourceChannel"];
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

        if (array_key_exists("EnvironmentId",$param) and $param["EnvironmentId"] !== null) {
            $this->EnvironmentId = $param["EnvironmentId"];
        }
    }
}
