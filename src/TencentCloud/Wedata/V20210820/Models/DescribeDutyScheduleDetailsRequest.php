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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeDutyScheduleDetails请求参数结构体
 *
 * @method integer getId() 获取值班表id
 * @method void setId(integer $Id) 设置值班表id
 * @method string getQueryDate() 获取查询时间
 * @method void setQueryDate(string $QueryDate) 设置查询时间
 * @method array getFilters() 获取扩展字段
 * @method void setFilters(array $Filters) 设置扩展字段
 */
class DescribeDutyScheduleDetailsRequest extends AbstractModel
{
    /**
     * @var integer 值班表id
     */
    public $Id;

    /**
     * @var string 查询时间
     */
    public $QueryDate;

    /**
     * @var array 扩展字段
     */
    public $Filters;

    /**
     * @param integer $Id 值班表id
     * @param string $QueryDate 查询时间
     * @param array $Filters 扩展字段
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("QueryDate",$param) and $param["QueryDate"] !== null) {
            $this->QueryDate = $param["QueryDate"];
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
