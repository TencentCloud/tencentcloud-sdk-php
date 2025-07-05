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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeTasksOverview请求参数结构体
 *
 * @method string getStartTime() 获取开始时间
 * @method void setStartTime(string $StartTime) 设置开始时间
 * @method string getEndTime() 获取结束时间
 * @method void setEndTime(string $EndTime) 设置结束时间
 * @method array getFilters() 获取筛选条件
 * @method void setFilters(array $Filters) 设置筛选条件
 * @method string getDataEngineName() 获取引擎名
 * @method void setDataEngineName(string $DataEngineName) 设置引擎名
 * @method array getHouseIds() 获取DataEngine-dm8bjs29
 * @method void setHouseIds(array $HouseIds) 设置DataEngine-dm8bjs29
 */
class DescribeTasksOverviewRequest extends AbstractModel
{
    /**
     * @var string 开始时间
     */
    public $StartTime;

    /**
     * @var string 结束时间
     */
    public $EndTime;

    /**
     * @var array 筛选条件
     */
    public $Filters;

    /**
     * @var string 引擎名
     */
    public $DataEngineName;

    /**
     * @var array DataEngine-dm8bjs29
     */
    public $HouseIds;

    /**
     * @param string $StartTime 开始时间
     * @param string $EndTime 结束时间
     * @param array $Filters 筛选条件
     * @param string $DataEngineName 引擎名
     * @param array $HouseIds DataEngine-dm8bjs29
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("DataEngineName",$param) and $param["DataEngineName"] !== null) {
            $this->DataEngineName = $param["DataEngineName"];
        }

        if (array_key_exists("HouseIds",$param) and $param["HouseIds"] !== null) {
            $this->HouseIds = $param["HouseIds"];
        }
    }
}
