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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeBatchIpAccessControl请求参数结构体
 *
 * @method array getFilters() 获取筛选条件，支持 ActionType（可选的值为40：白名单，42：黑名单），ValidStatus（可选的值0：全部，1：生效，2：过期），Ip，Domains（域名列表），GroupId（防护对象组ID），GroupName（防护对象组名），RuleId（规则ID），TimerType（生效方式，1：永久生效，2：定时生效，3：按周周期生效，4：按月周期生效）
 * @method void setFilters(array $Filters) 设置筛选条件，支持 ActionType（可选的值为40：白名单，42：黑名单），ValidStatus（可选的值0：全部，1：生效，2：过期），Ip，Domains（域名列表），GroupId（防护对象组ID），GroupName（防护对象组名），RuleId（规则ID），TimerType（生效方式，1：永久生效，2：定时生效，3：按周周期生效，4：按月周期生效）
 * @method integer getOffSet() 获取偏移
 * @method void setOffSet(integer $OffSet) 设置偏移
 * @method integer getLimit() 获取限制
 * @method void setLimit(integer $Limit) 设置限制
 * @method string getSort() 获取排序参数
 * @method void setSort(string $Sort) 设置排序参数
 */
class DescribeBatchIpAccessControlRequest extends AbstractModel
{
    /**
     * @var array 筛选条件，支持 ActionType（可选的值为40：白名单，42：黑名单），ValidStatus（可选的值0：全部，1：生效，2：过期），Ip，Domains（域名列表），GroupId（防护对象组ID），GroupName（防护对象组名），RuleId（规则ID），TimerType（生效方式，1：永久生效，2：定时生效，3：按周周期生效，4：按月周期生效）
     */
    public $Filters;

    /**
     * @var integer 偏移
     */
    public $OffSet;

    /**
     * @var integer 限制
     */
    public $Limit;

    /**
     * @var string 排序参数
     */
    public $Sort;

    /**
     * @param array $Filters 筛选条件，支持 ActionType（可选的值为40：白名单，42：黑名单），ValidStatus（可选的值0：全部，1：生效，2：过期），Ip，Domains（域名列表），GroupId（防护对象组ID），GroupName（防护对象组名），RuleId（规则ID），TimerType（生效方式，1：永久生效，2：定时生效，3：按周周期生效，4：按月周期生效）
     * @param integer $OffSet 偏移
     * @param integer $Limit 限制
     * @param string $Sort 排序参数
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
        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new FiltersItemNew();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("OffSet",$param) and $param["OffSet"] !== null) {
            $this->OffSet = $param["OffSet"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = $param["Sort"];
        }
    }
}
