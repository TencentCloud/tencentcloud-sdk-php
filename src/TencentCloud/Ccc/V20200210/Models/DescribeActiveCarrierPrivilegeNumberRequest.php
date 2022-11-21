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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeActiveCarrierPrivilegeNumber请求参数结构体
 *
 * @method integer getSdkAppId() 获取实例Id
 * @method void setSdkAppId(integer $SdkAppId) 设置实例Id
 * @method integer getPageNumber() 获取默认0
 * @method void setPageNumber(integer $PageNumber) 设置默认0
 * @method integer getPageSize() 获取默认10，最大100
 * @method void setPageSize(integer $PageSize) 设置默认10，最大100
 * @method array getFilters() 获取筛选条件 Name支持PhoneNumber(按号码模糊查找)
 * @method void setFilters(array $Filters) 设置筛选条件 Name支持PhoneNumber(按号码模糊查找)
 */
class DescribeActiveCarrierPrivilegeNumberRequest extends AbstractModel
{
    /**
     * @var integer 实例Id
     */
    public $SdkAppId;

    /**
     * @var integer 默认0
     */
    public $PageNumber;

    /**
     * @var integer 默认10，最大100
     */
    public $PageSize;

    /**
     * @var array 筛选条件 Name支持PhoneNumber(按号码模糊查找)
     */
    public $Filters;

    /**
     * @param integer $SdkAppId 实例Id
     * @param integer $PageNumber 默认0
     * @param integer $PageSize 默认10，最大100
     * @param array $Filters 筛选条件 Name支持PhoneNumber(按号码模糊查找)
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
        if (array_key_exists("SdkAppId",$param) and $param["SdkAppId"] !== null) {
            $this->SdkAppId = $param["SdkAppId"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
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
