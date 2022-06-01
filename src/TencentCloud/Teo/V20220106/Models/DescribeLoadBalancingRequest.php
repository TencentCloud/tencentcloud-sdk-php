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
 * DescribeLoadBalancing请求参数结构体
 *
 * @method string getZoneId() 获取站点ID
 * @method void setZoneId(string $ZoneId) 设置站点ID
 * @method integer getOffset() 获取分页参数Offset
 * @method void setOffset(integer $Offset) 设置分页参数Offset
 * @method integer getLimit() 获取分页参数Limit
 * @method void setLimit(integer $Limit) 设置分页参数Limit
 * @method string getHost() 获取过滤参数Host
 * @method void setHost(string $Host) 设置过滤参数Host
 * @method boolean getFuzzy() 获取过滤参数Host是否支持模糊匹配
 * @method void setFuzzy(boolean $Fuzzy) 设置过滤参数Host是否支持模糊匹配
 */
class DescribeLoadBalancingRequest extends AbstractModel
{
    /**
     * @var string 站点ID
     */
    public $ZoneId;

    /**
     * @var integer 分页参数Offset
     */
    public $Offset;

    /**
     * @var integer 分页参数Limit
     */
    public $Limit;

    /**
     * @var string 过滤参数Host
     */
    public $Host;

    /**
     * @var boolean 过滤参数Host是否支持模糊匹配
     */
    public $Fuzzy;

    /**
     * @param string $ZoneId 站点ID
     * @param integer $Offset 分页参数Offset
     * @param integer $Limit 分页参数Limit
     * @param string $Host 过滤参数Host
     * @param boolean $Fuzzy 过滤参数Host是否支持模糊匹配
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
        if (array_key_exists("ZoneId",$param) and $param["ZoneId"] !== null) {
            $this->ZoneId = $param["ZoneId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Host",$param) and $param["Host"] !== null) {
            $this->Host = $param["Host"];
        }

        if (array_key_exists("Fuzzy",$param) and $param["Fuzzy"] !== null) {
            $this->Fuzzy = $param["Fuzzy"];
        }
    }
}
