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
namespace TencentCloud\Ctem\V20231128\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLeakageCodes请求参数结构体
 *
 * @method boolean getIsAggregation() 获取是否聚合数据
 * @method void setIsAggregation(boolean $IsAggregation) 设置是否聚合数据
 * @method boolean getIsNew() 获取是否新增数据
 * @method void setIsNew(boolean $IsNew) 设置是否新增数据
 * @method integer getCustomerId() 获取企业ID
 * @method void setCustomerId(integer $CustomerId) 设置企业ID
 * @method integer getLimit() 获取分页大小
 * @method void setLimit(integer $Limit) 设置分页大小
 * @method integer getOffset() 获取分页偏移
 * @method void setOffset(integer $Offset) 设置分页偏移
 * @method array getEnterpriseUidList() 获取子公司ID列表
 * @method void setEnterpriseUidList(array $EnterpriseUidList) 设置子公司ID列表
 * @method string getFormat() 获取数据输出格式：json、file，默认不填为json
 * @method void setFormat(string $Format) 设置数据输出格式：json、file，默认不填为json
 * @method string getCreateAtStart() 获取创建时间-开始
 * @method void setCreateAtStart(string $CreateAtStart) 设置创建时间-开始
 * @method string getCreateAtEnd() 获取创建时间-结束
 * @method void setCreateAtEnd(string $CreateAtEnd) 设置创建时间-结束
 * @method string getUpdateAtStart() 获取更新时间-开始
 * @method void setUpdateAtStart(string $UpdateAtStart) 设置更新时间-开始
 * @method string getUpdateAtEnd() 获取更新时间-结束
 * @method void setUpdateAtEnd(string $UpdateAtEnd) 设置更新时间-结束
 * @method array getFilters() 获取查询数组
 * @method void setFilters(array $Filters) 设置查询数组
 * @method boolean getIgnored() 获取是否显示被忽略的数据
 * @method void setIgnored(boolean $Ignored) 设置是否显示被忽略的数据
 */
class DescribeLeakageCodesRequest extends AbstractModel
{
    /**
     * @var boolean 是否聚合数据
     */
    public $IsAggregation;

    /**
     * @var boolean 是否新增数据
     */
    public $IsNew;

    /**
     * @var integer 企业ID
     */
    public $CustomerId;

    /**
     * @var integer 分页大小
     */
    public $Limit;

    /**
     * @var integer 分页偏移
     */
    public $Offset;

    /**
     * @var array 子公司ID列表
     */
    public $EnterpriseUidList;

    /**
     * @var string 数据输出格式：json、file，默认不填为json
     */
    public $Format;

    /**
     * @var string 创建时间-开始
     */
    public $CreateAtStart;

    /**
     * @var string 创建时间-结束
     */
    public $CreateAtEnd;

    /**
     * @var string 更新时间-开始
     */
    public $UpdateAtStart;

    /**
     * @var string 更新时间-结束
     */
    public $UpdateAtEnd;

    /**
     * @var array 查询数组
     */
    public $Filters;

    /**
     * @var boolean 是否显示被忽略的数据
     */
    public $Ignored;

    /**
     * @param boolean $IsAggregation 是否聚合数据
     * @param boolean $IsNew 是否新增数据
     * @param integer $CustomerId 企业ID
     * @param integer $Limit 分页大小
     * @param integer $Offset 分页偏移
     * @param array $EnterpriseUidList 子公司ID列表
     * @param string $Format 数据输出格式：json、file，默认不填为json
     * @param string $CreateAtStart 创建时间-开始
     * @param string $CreateAtEnd 创建时间-结束
     * @param string $UpdateAtStart 更新时间-开始
     * @param string $UpdateAtEnd 更新时间-结束
     * @param array $Filters 查询数组
     * @param boolean $Ignored 是否显示被忽略的数据
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
        if (array_key_exists("IsAggregation",$param) and $param["IsAggregation"] !== null) {
            $this->IsAggregation = $param["IsAggregation"];
        }

        if (array_key_exists("IsNew",$param) and $param["IsNew"] !== null) {
            $this->IsNew = $param["IsNew"];
        }

        if (array_key_exists("CustomerId",$param) and $param["CustomerId"] !== null) {
            $this->CustomerId = $param["CustomerId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("EnterpriseUidList",$param) and $param["EnterpriseUidList"] !== null) {
            $this->EnterpriseUidList = $param["EnterpriseUidList"];
        }

        if (array_key_exists("Format",$param) and $param["Format"] !== null) {
            $this->Format = $param["Format"];
        }

        if (array_key_exists("CreateAtStart",$param) and $param["CreateAtStart"] !== null) {
            $this->CreateAtStart = $param["CreateAtStart"];
        }

        if (array_key_exists("CreateAtEnd",$param) and $param["CreateAtEnd"] !== null) {
            $this->CreateAtEnd = $param["CreateAtEnd"];
        }

        if (array_key_exists("UpdateAtStart",$param) and $param["UpdateAtStart"] !== null) {
            $this->UpdateAtStart = $param["UpdateAtStart"];
        }

        if (array_key_exists("UpdateAtEnd",$param) and $param["UpdateAtEnd"] !== null) {
            $this->UpdateAtEnd = $param["UpdateAtEnd"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Ignored",$param) and $param["Ignored"] !== null) {
            $this->Ignored = $param["Ignored"];
        }
    }
}
