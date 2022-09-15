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
namespace TencentCloud\Apigateway\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeUpstreamBindApis请求参数结构体
 *
 * @method integer getLimit() 获取分页大小
 * @method void setLimit(integer $Limit) 设置分页大小
 * @method integer getOffset() 获取分页起始位置
 * @method void setOffset(integer $Offset) 设置分页起始位置
 * @method string getUpstreamId() 获取后端通道ID
 * @method void setUpstreamId(string $UpstreamId) 设置后端通道ID
 * @method array getFilters() 获取ServiceId和ApiId过滤查询
 * @method void setFilters(array $Filters) 设置ServiceId和ApiId过滤查询
 */
class DescribeUpstreamBindApisRequest extends AbstractModel
{
    /**
     * @var integer 分页大小
     */
    public $Limit;

    /**
     * @var integer 分页起始位置
     */
    public $Offset;

    /**
     * @var string 后端通道ID
     */
    public $UpstreamId;

    /**
     * @var array ServiceId和ApiId过滤查询
     */
    public $Filters;

    /**
     * @param integer $Limit 分页大小
     * @param integer $Offset 分页起始位置
     * @param string $UpstreamId 后端通道ID
     * @param array $Filters ServiceId和ApiId过滤查询
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

        if (array_key_exists("UpstreamId",$param) and $param["UpstreamId"] !== null) {
            $this->UpstreamId = $param["UpstreamId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
