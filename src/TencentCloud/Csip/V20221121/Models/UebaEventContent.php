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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用户行为分析 发生事件结构体
 *
 * @method integer getEventType() 获取发生事件类型
1:语句检索
2:过滤检索
 * @method void setEventType(integer $EventType) 设置发生事件类型
1:语句检索
2:过滤检索
 * @method string getContent() 获取语句检索内容
 * @method void setContent(string $Content) 设置语句检索内容
 * @method array getFilters() 获取检索条件

 * @method void setFilters(array $Filters) 设置检索条件

 * @method StatisticalFilter getStatisticalFilter() 获取统计条件
 * @method void setStatisticalFilter(StatisticalFilter $StatisticalFilter) 设置统计条件
 */
class UebaEventContent extends AbstractModel
{
    /**
     * @var integer 发生事件类型
1:语句检索
2:过滤检索
     */
    public $EventType;

    /**
     * @var string 语句检索内容
     */
    public $Content;

    /**
     * @var array 检索条件

     */
    public $Filters;

    /**
     * @var StatisticalFilter 统计条件
     */
    public $StatisticalFilter;

    /**
     * @param integer $EventType 发生事件类型
1:语句检索
2:过滤检索
     * @param string $Content 语句检索内容
     * @param array $Filters 检索条件

     * @param StatisticalFilter $StatisticalFilter 统计条件
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
        if (array_key_exists("EventType",$param) and $param["EventType"] !== null) {
            $this->EventType = $param["EventType"];
        }

        if (array_key_exists("Content",$param) and $param["Content"] !== null) {
            $this->Content = $param["Content"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new WhereFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("StatisticalFilter",$param) and $param["StatisticalFilter"] !== null) {
            $this->StatisticalFilter = new StatisticalFilter();
            $this->StatisticalFilter->deserialize($param["StatisticalFilter"]);
        }
    }
}
