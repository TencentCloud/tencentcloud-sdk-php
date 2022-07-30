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
 * ListTaskJobLogDetail请求参数结构体
 *
 * @method string getTaskId() 获取列表返回的Id
 * @method void setTaskId(string $TaskId) 设置列表返回的Id
 * @method integer getStartTime() 获取开始运行时间，unix时间戳（毫秒）
 * @method void setStartTime(integer $StartTime) 设置开始运行时间，unix时间戳（毫秒）
 * @method integer getEndTime() 获取结束运行时间，unix时间戳（毫秒）
 * @method void setEndTime(integer $EndTime) 设置结束运行时间，unix时间戳（毫秒）
 * @method integer getLimit() 获取分页大小，最大1000，配合Context一起使用
 * @method void setLimit(integer $Limit) 设置分页大小，最大1000，配合Context一起使用
 * @method string getContext() 获取下一次分页参数，第一次传空
 * @method void setContext(string $Context) 设置下一次分页参数，第一次传空
 * @method boolean getAsc() 获取最近1000条日志是否升序排列，true:升序排序，false:倒序，默认false，倒序排列
 * @method void setAsc(boolean $Asc) 设置最近1000条日志是否升序排列，true:升序排序，false:倒序，默认false，倒序排列
 * @method array getFilters() 获取预览日志的通用过滤条件
 * @method void setFilters(array $Filters) 设置预览日志的通用过滤条件
 */
class ListTaskJobLogDetailRequest extends AbstractModel
{
    /**
     * @var string 列表返回的Id
     */
    public $TaskId;

    /**
     * @var integer 开始运行时间，unix时间戳（毫秒）
     */
    public $StartTime;

    /**
     * @var integer 结束运行时间，unix时间戳（毫秒）
     */
    public $EndTime;

    /**
     * @var integer 分页大小，最大1000，配合Context一起使用
     */
    public $Limit;

    /**
     * @var string 下一次分页参数，第一次传空
     */
    public $Context;

    /**
     * @var boolean 最近1000条日志是否升序排列，true:升序排序，false:倒序，默认false，倒序排列
     */
    public $Asc;

    /**
     * @var array 预览日志的通用过滤条件
     */
    public $Filters;

    /**
     * @param string $TaskId 列表返回的Id
     * @param integer $StartTime 开始运行时间，unix时间戳（毫秒）
     * @param integer $EndTime 结束运行时间，unix时间戳（毫秒）
     * @param integer $Limit 分页大小，最大1000，配合Context一起使用
     * @param string $Context 下一次分页参数，第一次传空
     * @param boolean $Asc 最近1000条日志是否升序排列，true:升序排序，false:倒序，默认false，倒序排列
     * @param array $Filters 预览日志的通用过滤条件
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Context",$param) and $param["Context"] !== null) {
            $this->Context = $param["Context"];
        }

        if (array_key_exists("Asc",$param) and $param["Asc"] !== null) {
            $this->Asc = $param["Asc"];
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
