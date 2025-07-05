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
namespace TencentCloud\Domain\V20180808\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeReservedPreDomainInfo请求参数结构体
 *
 * @method array getDomainList() 获取域名,每次最多支持500条域名查询
 * @method void setDomainList(array $DomainList) 设置域名,每次最多支持500条域名查询
 * @method integer getReservedStatus() 获取状态，用于筛选，可不填写(1. 成功 2. 失败（失败Reason字段将会被赋值）3. 域名交割中 4. 域名交割完成 5. 预约 6. 竞价)
 * @method void setReservedStatus(integer $ReservedStatus) 设置状态，用于筛选，可不填写(1. 成功 2. 失败（失败Reason字段将会被赋值）3. 域名交割中 4. 域名交割完成 5. 预约 6. 竞价)
 * @method string getReservedTimeSort() 获取根据预约时间排序，仅支持："desc","asc"。
 * @method void setReservedTimeSort(string $ReservedTimeSort) 设置根据预约时间排序，仅支持："desc","asc"。
 * @method integer getLimit() 获取条数
 * @method void setLimit(integer $Limit) 设置条数
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 */
class DescribeReservedPreDomainInfoRequest extends AbstractModel
{
    /**
     * @var array 域名,每次最多支持500条域名查询
     */
    public $DomainList;

    /**
     * @var integer 状态，用于筛选，可不填写(1. 成功 2. 失败（失败Reason字段将会被赋值）3. 域名交割中 4. 域名交割完成 5. 预约 6. 竞价)
     */
    public $ReservedStatus;

    /**
     * @var string 根据预约时间排序，仅支持："desc","asc"。
     */
    public $ReservedTimeSort;

    /**
     * @var integer 条数
     */
    public $Limit;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @param array $DomainList 域名,每次最多支持500条域名查询
     * @param integer $ReservedStatus 状态，用于筛选，可不填写(1. 成功 2. 失败（失败Reason字段将会被赋值）3. 域名交割中 4. 域名交割完成 5. 预约 6. 竞价)
     * @param string $ReservedTimeSort 根据预约时间排序，仅支持："desc","asc"。
     * @param integer $Limit 条数
     * @param integer $Offset 偏移量
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
        if (array_key_exists("DomainList",$param) and $param["DomainList"] !== null) {
            $this->DomainList = $param["DomainList"];
        }

        if (array_key_exists("ReservedStatus",$param) and $param["ReservedStatus"] !== null) {
            $this->ReservedStatus = $param["ReservedStatus"];
        }

        if (array_key_exists("ReservedTimeSort",$param) and $param["ReservedTimeSort"] !== null) {
            $this->ReservedTimeSort = $param["ReservedTimeSort"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
