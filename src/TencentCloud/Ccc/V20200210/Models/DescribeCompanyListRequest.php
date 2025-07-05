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
namespace TencentCloud\Ccc\V20200210\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCompanyList请求参数结构体
 *
 * @method integer getPageSize() 获取分页尺寸，上限 100
 * @method void setPageSize(integer $PageSize) 设置分页尺寸，上限 100
 * @method integer getPageNumber() 获取分页页码，从 0 开始
 * @method void setPageNumber(integer $PageNumber) 设置分页页码，从 0 开始
 * @method array getCompanyName() 获取公司名称
 * @method void setCompanyName(array $CompanyName) 设置公司名称
 * @method array getState() 获取审核状态，1-待审核，2-审核通过，3-驳回
 * @method void setState(array $State) 设置审核状态，1-待审核，2-审核通过，3-驳回
 * @method array getApplyID() 获取申请ID
 * @method void setApplyID(array $ApplyID) 设置申请ID
 */
class DescribeCompanyListRequest extends AbstractModel
{
    /**
     * @var integer 分页尺寸，上限 100
     */
    public $PageSize;

    /**
     * @var integer 分页页码，从 0 开始
     */
    public $PageNumber;

    /**
     * @var array 公司名称
     */
    public $CompanyName;

    /**
     * @var array 审核状态，1-待审核，2-审核通过，3-驳回
     */
    public $State;

    /**
     * @var array 申请ID
     */
    public $ApplyID;

    /**
     * @param integer $PageSize 分页尺寸，上限 100
     * @param integer $PageNumber 分页页码，从 0 开始
     * @param array $CompanyName 公司名称
     * @param array $State 审核状态，1-待审核，2-审核通过，3-驳回
     * @param array $ApplyID 申请ID
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
        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("PageNumber",$param) and $param["PageNumber"] !== null) {
            $this->PageNumber = $param["PageNumber"];
        }

        if (array_key_exists("CompanyName",$param) and $param["CompanyName"] !== null) {
            $this->CompanyName = $param["CompanyName"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("ApplyID",$param) and $param["ApplyID"] !== null) {
            $this->ApplyID = $param["ApplyID"];
        }
    }
}
