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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEdgeOperationLogs请求参数结构体
 *
 * @method string getBeginTime() 获取开始时间
 * @method void setBeginTime(string $BeginTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method integer getOffset() 获取偏移量
 * @method void setOffset(integer $Offset) 设置偏移量
 * @method integer getLimit() 获取翻页大小
 * @method void setLimit(integer $Limit) 设置翻页大小
 * @method array getSort() 获取排序字段
 * @method void setSort(array $Sort) 设置排序字段
 * @method string getModule() 获取模块
 * @method void setModule(string $Module) 设置模块
 * @method OperationLogsCondition getCondition() 获取过滤条件
 * @method void setCondition(OperationLogsCondition $Condition) 设置过滤条件
 */
class DescribeEdgeOperationLogsRequest extends AbstractModel
{
    /**
     * @var string 开始时间
     */
    public $BeginTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var integer 偏移量
     */
    public $Offset;

    /**
     * @var integer 翻页大小
     */
    public $Limit;

    /**
     * @var array 排序字段
     */
    public $Sort;

    /**
     * @var string 模块
     */
    public $Module;

    /**
     * @var OperationLogsCondition 过滤条件
     */
    public $Condition;

    /**
     * @param string $BeginTime 开始时间
     * @param string $EndTime 结束时间
     * @param integer $Offset 偏移量
     * @param integer $Limit 翻页大小
     * @param array $Sort 排序字段
     * @param string $Module 模块
     * @param OperationLogsCondition $Condition 过滤条件
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
        if (array_key_exists("BeginTime",$param) and $param["BeginTime"] !== null) {
            $this->BeginTime = $param["BeginTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = [];
            foreach ($param["Sort"] as $key => $value){
                $obj = new FieldSort();
                $obj->deserialize($value);
                array_push($this->Sort, $obj);
            }
        }

        if (array_key_exists("Module",$param) and $param["Module"] !== null) {
            $this->Module = $param["Module"];
        }

        if (array_key_exists("Condition",$param) and $param["Condition"] !== null) {
            $this->Condition = new OperationLogsCondition();
            $this->Condition->deserialize($param["Condition"]);
        }
    }
}
