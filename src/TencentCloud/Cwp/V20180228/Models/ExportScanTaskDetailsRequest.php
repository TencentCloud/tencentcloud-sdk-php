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
 * ExportScanTaskDetails请求参数结构体
 *
 * @method integer getTaskId() 获取本次检测的任务id（不同于出参的导出本次检测Excel的任务Id）
 * @method void setTaskId(integer $TaskId) 设置本次检测的任务id（不同于出参的导出本次检测Excel的任务Id）
 * @method string getModuleType() 获取模块类型，当前提供：Malware 木马 , Vul 漏洞 , Baseline 基线
 * @method void setModuleType(string $ModuleType) 设置模块类型，当前提供：Malware 木马 , Vul 漏洞 , Baseline 基线
 * @method array getFilters() 获取过滤参数：ipOrAlias（服务器名/ip）
 * @method void setFilters(array $Filters) 设置过滤参数：ipOrAlias（服务器名/ip）
 */
class ExportScanTaskDetailsRequest extends AbstractModel
{
    /**
     * @var integer 本次检测的任务id（不同于出参的导出本次检测Excel的任务Id）
     */
    public $TaskId;

    /**
     * @var string 模块类型，当前提供：Malware 木马 , Vul 漏洞 , Baseline 基线
     */
    public $ModuleType;

    /**
     * @var array 过滤参数：ipOrAlias（服务器名/ip）
     */
    public $Filters;

    /**
     * @param integer $TaskId 本次检测的任务id（不同于出参的导出本次检测Excel的任务Id）
     * @param string $ModuleType 模块类型，当前提供：Malware 木马 , Vul 漏洞 , Baseline 基线
     * @param array $Filters 过滤参数：ipOrAlias（服务器名/ip）
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

        if (array_key_exists("ModuleType",$param) and $param["ModuleType"] !== null) {
            $this->ModuleType = $param["ModuleType"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new Filters();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
