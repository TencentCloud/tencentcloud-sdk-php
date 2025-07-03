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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNotebookSessions请求参数结构体
 *
 * @method string getDataEngineName() 获取DLC Spark作业引擎名称
 * @method void setDataEngineName(string $DataEngineName) 设置DLC Spark作业引擎名称
 * @method array getState() 获取Session状态，包含：not_started（未启动）、starting（已启动）、idle（等待输入）、busy(正在运行statement)、shutting_down（停止）、error（异常）、dead（已退出）、killed（被杀死）、success（正常停止）
 * @method void setState(array $State) 设置Session状态，包含：not_started（未启动）、starting（已启动）、idle（等待输入）、busy(正在运行statement)、shutting_down（停止）、error（异常）、dead（已退出）、killed（被杀死）、success（正常停止）
 * @method array getSortFields() 获取排序字段（默认按创建时间）
 * @method void setSortFields(array $SortFields) 设置排序字段（默认按创建时间）
 * @method boolean getAsc() 获取排序字段：true：升序、false：降序（默认）
 * @method void setAsc(boolean $Asc) 设置排序字段：true：升序、false：降序（默认）
 * @method integer getLimit() 获取分页参数，默认10
 * @method void setLimit(integer $Limit) 设置分页参数，默认10
 * @method integer getOffset() 获取分页参数，默认0
 * @method void setOffset(integer $Offset) 设置分页参数，默认0
 * @method array getFilters() 获取过滤类型，支持如下的过滤类型，传参Name应为以下其中一个, engine-generation - String（引擎时代： supersql：supersql引擎，native：标准引擎）：notebook-keyword - String（数据引擎名称或sessionid或sessionname的模糊搜索）
 * @method void setFilters(array $Filters) 设置过滤类型，支持如下的过滤类型，传参Name应为以下其中一个, engine-generation - String（引擎时代： supersql：supersql引擎，native：标准引擎）：notebook-keyword - String（数据引擎名称或sessionid或sessionname的模糊搜索）
 */
class DescribeNotebookSessionsRequest extends AbstractModel
{
    /**
     * @var string DLC Spark作业引擎名称
     */
    public $DataEngineName;

    /**
     * @var array Session状态，包含：not_started（未启动）、starting（已启动）、idle（等待输入）、busy(正在运行statement)、shutting_down（停止）、error（异常）、dead（已退出）、killed（被杀死）、success（正常停止）
     */
    public $State;

    /**
     * @var array 排序字段（默认按创建时间）
     */
    public $SortFields;

    /**
     * @var boolean 排序字段：true：升序、false：降序（默认）
     */
    public $Asc;

    /**
     * @var integer 分页参数，默认10
     */
    public $Limit;

    /**
     * @var integer 分页参数，默认0
     */
    public $Offset;

    /**
     * @var array 过滤类型，支持如下的过滤类型，传参Name应为以下其中一个, engine-generation - String（引擎时代： supersql：supersql引擎，native：标准引擎）：notebook-keyword - String（数据引擎名称或sessionid或sessionname的模糊搜索）
     */
    public $Filters;

    /**
     * @param string $DataEngineName DLC Spark作业引擎名称
     * @param array $State Session状态，包含：not_started（未启动）、starting（已启动）、idle（等待输入）、busy(正在运行statement)、shutting_down（停止）、error（异常）、dead（已退出）、killed（被杀死）、success（正常停止）
     * @param array $SortFields 排序字段（默认按创建时间）
     * @param boolean $Asc 排序字段：true：升序、false：降序（默认）
     * @param integer $Limit 分页参数，默认10
     * @param integer $Offset 分页参数，默认0
     * @param array $Filters 过滤类型，支持如下的过滤类型，传参Name应为以下其中一个, engine-generation - String（引擎时代： supersql：supersql引擎，native：标准引擎）：notebook-keyword - String（数据引擎名称或sessionid或sessionname的模糊搜索）
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
        if (array_key_exists("DataEngineName",$param) and $param["DataEngineName"] !== null) {
            $this->DataEngineName = $param["DataEngineName"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("SortFields",$param) and $param["SortFields"] !== null) {
            $this->SortFields = $param["SortFields"];
        }

        if (array_key_exists("Asc",$param) and $param["Asc"] !== null) {
            $this->Asc = $param["Asc"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
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
