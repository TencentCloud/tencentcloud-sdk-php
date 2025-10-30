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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ExportVulDefenceList请求参数结构体
 *
 * @method array getFilters() 获取过滤条件：Keywords: 漏洞名称或CVE编号模糊匹配, Level精确匹配
 * @method void setFilters(array $Filters) 设置过滤条件：Keywords: 漏洞名称或CVE编号模糊匹配, Level精确匹配
 * @method array getWhere() 获取导出字段，默认全导出
 * @method void setWhere(array $Where) 设置导出字段，默认全导出
 */
class ExportVulDefenceListRequest extends AbstractModel
{
    /**
     * @var array 过滤条件：Keywords: 漏洞名称或CVE编号模糊匹配, Level精确匹配
     */
    public $Filters;

    /**
     * @var array 导出字段，默认全导出
     */
    public $Where;

    /**
     * @param array $Filters 过滤条件：Keywords: 漏洞名称或CVE编号模糊匹配, Level精确匹配
     * @param array $Where 导出字段，默认全导出
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
                $obj = new Filter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }

        if (array_key_exists("Where",$param) and $param["Where"] !== null) {
            $this->Where = $param["Where"];
        }
    }
}
