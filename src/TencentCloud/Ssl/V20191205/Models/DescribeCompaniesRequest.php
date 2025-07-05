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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCompanies请求参数结构体
 *
 * @method integer getOffset() 获取分页偏移量，默认值为0.
 * @method void setOffset(integer $Offset) 设置分页偏移量，默认值为0.
 * @method integer getLimit() 获取分页每页限制数，默认值为0，最大值1000.
 * @method void setLimit(integer $Limit) 设置分页每页限制数，默认值为0，最大值1000.
 * @method integer getCompanyId() 获取公司ID
 * @method void setCompanyId(integer $CompanyId) 设置公司ID
 */
class DescribeCompaniesRequest extends AbstractModel
{
    /**
     * @var integer 分页偏移量，默认值为0.
     */
    public $Offset;

    /**
     * @var integer 分页每页限制数，默认值为0，最大值1000.
     */
    public $Limit;

    /**
     * @var integer 公司ID
     */
    public $CompanyId;

    /**
     * @param integer $Offset 分页偏移量，默认值为0.
     * @param integer $Limit 分页每页限制数，默认值为0，最大值1000.
     * @param integer $CompanyId 公司ID
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

        if (array_key_exists("CompanyId",$param) and $param["CompanyId"] !== null) {
            $this->CompanyId = $param["CompanyId"];
        }
    }
}
