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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecurityGroups请求参数结构体
 *
 * @method integer getPageNumber() 获取<p>页号，从1开始</p>
 * @method void setPageNumber(integer $PageNumber) 设置<p>页号，从1开始</p>
 * @method integer getPageSize() 获取<p>每页最大展示数量，默认20，最大100</p>
 * @method void setPageSize(integer $PageSize) 设置<p>每页最大展示数量，默认20，最大100</p>
 * @method string getSecurityGroupRegion() 获取<p>地域</p>
 * @method void setSecurityGroupRegion(string $SecurityGroupRegion) 设置<p>地域</p>
 */
class DescribeSecurityGroupsRequest extends AbstractModel
{
    /**
     * @var integer <p>页号，从1开始</p>
     */
    public $PageNumber;

    /**
     * @var integer <p>每页最大展示数量，默认20，最大100</p>
     */
    public $PageSize;

    /**
     * @var string <p>地域</p>
     */
    public $SecurityGroupRegion;

    /**
     * @param integer $PageNumber <p>页号，从1开始</p>
     * @param integer $PageSize <p>每页最大展示数量，默认20，最大100</p>
     * @param string $SecurityGroupRegion <p>地域</p>
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
        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("SecurityGroupRegion",$param) and $param["SecurityGroupRegion"] !== null) {
            $this->SecurityGroupRegion = $param["SecurityGroupRegion"];
        }
    }
}
