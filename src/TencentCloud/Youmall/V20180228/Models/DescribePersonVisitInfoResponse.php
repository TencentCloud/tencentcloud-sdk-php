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
namespace TencentCloud\Youmall\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribePersonVisitInfo返回参数结构体
 *
 * @method string getCompanyId() 获取公司ID
 * @method void setCompanyId(string $CompanyId) 设置公司ID
 * @method integer getShopId() 获取门店ID
 * @method void setShopId(integer $ShopId) 设置门店ID
 * @method integer getTotalCount() 获取总数
 * @method void setTotalCount(integer $TotalCount) 设置总数
 * @method array getPersonVisitInfoSet() 获取用户到访明细
 * @method void setPersonVisitInfoSet(array $PersonVisitInfoSet) 设置用户到访明细
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribePersonVisitInfoResponse extends AbstractModel
{
    /**
     * @var string 公司ID
     */
    public $CompanyId;

    /**
     * @var integer 门店ID
     */
    public $ShopId;

    /**
     * @var integer 总数
     */
    public $TotalCount;

    /**
     * @var array 用户到访明细
     */
    public $PersonVisitInfoSet;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $CompanyId 公司ID
     * @param integer $ShopId 门店ID
     * @param integer $TotalCount 总数
     * @param array $PersonVisitInfoSet 用户到访明细
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("CompanyId",$param) and $param["CompanyId"] !== null) {
            $this->CompanyId = $param["CompanyId"];
        }

        if (array_key_exists("ShopId",$param) and $param["ShopId"] !== null) {
            $this->ShopId = $param["ShopId"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("PersonVisitInfoSet",$param) and $param["PersonVisitInfoSet"] !== null) {
            $this->PersonVisitInfoSet = [];
            foreach ($param["PersonVisitInfoSet"] as $key => $value){
                $obj = new PersonVisitInfo();
                $obj->deserialize($value);
                array_push($this->PersonVisitInfoSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
