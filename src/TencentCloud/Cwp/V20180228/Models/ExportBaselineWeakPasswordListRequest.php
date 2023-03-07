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
 * ExportBaselineWeakPasswordList请求参数结构体
 *
 * @method array getFilters() 获取<li>WeakPassword - string - 是否必填：否 - 弱口令</li>
 * @method void setFilters(array $Filters) 设置<li>WeakPassword - string - 是否必填：否 - 弱口令</li>
 * @method integer getExportAll() 获取0:过滤的结果导出；1:全部导出
 * @method void setExportAll(integer $ExportAll) 设置0:过滤的结果导出；1:全部导出
 */
class ExportBaselineWeakPasswordListRequest extends AbstractModel
{
    /**
     * @var array <li>WeakPassword - string - 是否必填：否 - 弱口令</li>
     */
    public $Filters;

    /**
     * @var integer 0:过滤的结果导出；1:全部导出
     */
    public $ExportAll;

    /**
     * @param array $Filters <li>WeakPassword - string - 是否必填：否 - 弱口令</li>
     * @param integer $ExportAll 0:过滤的结果导出；1:全部导出
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

        if (array_key_exists("ExportAll",$param) and $param["ExportAll"] !== null) {
            $this->ExportAll = $param["ExportAll"];
        }
    }
}
