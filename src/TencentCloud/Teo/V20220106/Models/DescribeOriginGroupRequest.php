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
namespace TencentCloud\Teo\V20220106\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeOriginGroup请求参数结构体
 *
 * @method integer getOffset() 获取分页参数Offset
 * @method void setOffset(integer $Offset) 设置分页参数Offset
 * @method integer getLimit() 获取分页参数Limit
 * @method void setLimit(integer $Limit) 设置分页参数Limit
 * @method array getFilters() 获取过滤参数
 * @method void setFilters(array $Filters) 设置过滤参数
 * @method string getZoneId() 获取站点ID
不填写获取所有站点源站组
 * @method void setZoneId(string $ZoneId) 设置站点ID
不填写获取所有站点源站组
 */
class DescribeOriginGroupRequest extends AbstractModel
{
    /**
     * @var integer 分页参数Offset
     */
    public $Offset;

    /**
     * @var integer 分页参数Limit
     */
    public $Limit;

    /**
     * @var array 过滤参数
     */
    public $Filters;

    /**
     * @var string 站点ID
不填写获取所有站点源站组
     */
    public $ZoneId;

    /**
     * @param integer $Offset 分页参数Offset
     * @param integer $Limit 分页参数Limit
     * @param array $Filters 过滤参数
     * @param string $ZoneId 站点ID
不填写获取所有站点源站组
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

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new OriginFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }
    }
}
