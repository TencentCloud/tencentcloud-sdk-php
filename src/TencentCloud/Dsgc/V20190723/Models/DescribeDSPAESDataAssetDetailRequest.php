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
namespace TencentCloud\Dsgc\V20190723\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDSPAESDataAssetDetail请求参数结构体
 *
 * @method string getDspaId() 获取dspa实例id
 * @method void setDspaId(string $DspaId) 设置dspa实例id
 * @method integer getComplianceId() 获取合规组id
 * @method void setComplianceId(integer $ComplianceId) 设置合规组id
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取限制条目数
 * @method void setLimit(integer $Limit) 设置限制条目数
 * @method array getFilters() 获取过滤条件
 * @method void setFilters(array $Filters) 设置过滤条件
 * @method string getCreditScore() 获取可信分排序，ASC升序
DESC降序
 * @method void setCreditScore(string $CreditScore) 设置可信分排序，ASC升序
DESC降序
 */
class DescribeDSPAESDataAssetDetailRequest extends AbstractModel
{
    /**
     * @var string dspa实例id
     */
    public $DspaId;

    /**
     * @var integer 合规组id
     */
    public $ComplianceId;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 限制条目数
     */
    public $Limit;

    /**
     * @var array 过滤条件
     */
    public $Filters;

    /**
     * @var string 可信分排序，ASC升序
DESC降序
     */
    public $CreditScore;

    /**
     * @param string $DspaId dspa实例id
     * @param integer $ComplianceId 合规组id
     * @param integer $Offset 偏移量
     * @param integer $Limit 限制条目数
     * @param array $Filters 过滤条件
     * @param string $CreditScore 可信分排序，ASC升序
DESC降序
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
        if (array_key_exists("DspaId",$param) and $param["DspaId"] !== null) {
            $this->DspaId = $param["DspaId"];
        }

        if (array_key_exists("ComplianceId",$param) and $param["ComplianceId"] !== null) {
            $this->ComplianceId = $param["ComplianceId"];
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
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("CreditScore",$param) and $param["CreditScore"] !== null) {
            $this->CreditScore = $param["CreditScore"];
        }
    }
}
