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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeScanTaskDetails请求参数结构体
 *
 * @method string getModuleType() 获取模块类型 当前提供 Malware 木马 , Vul 漏洞 , Baseline 基线
 * @method void setModuleType(string $ModuleType) 设置模块类型 当前提供 Malware 木马 , Vul 漏洞 , Baseline 基线
 * @method integer getTaskId() 获取任务ID
 * @method void setTaskId(integer $TaskId) 设置任务ID
 * @method array getFilters() 获取过滤参数
 * @method void setFilters(array $Filters) 设置过滤参数
 * @method integer getLimit() 获取需要返回的数量，最大值为100
 * @method void setLimit(integer $Limit) 设置需要返回的数量，最大值为100
 * @method integer getOffset() 获取偏移量，默认为0。
 * @method void setOffset(integer $Offset) 设置偏移量，默认为0。
 */
class DescribeScanTaskDetailsRequest extends AbstractModel
{
    /**
     * @var string 模块类型 当前提供 Malware 木马 , Vul 漏洞 , Baseline 基线
     */
    public $ModuleType;

    /**
     * @var integer 任务ID
     */
    public $TaskId;

    /**
     * @var array 过滤参数
     */
    public $Filters;

    /**
     * @var integer 需要返回的数量，最大值为100
     */
    public $Limit;

    /**
     * @var integer 偏移量，默认为0。
     */
    public $Offset;

    /**
     * @param string $ModuleType 模块类型 当前提供 Malware 木马 , Vul 漏洞 , Baseline 基线
     * @param integer $TaskId 任务ID
     * @param array $Filters 过滤参数
     * @param integer $Limit 需要返回的数量，最大值为100
     * @param integer $Offset 偏移量，默认为0。
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
        if (array_key_exists("ModuleType",$param) and $param["ModuleType"] !== null) {
            $this->ModuleType = $param["ModuleType"];
        }

        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }
    }
}
