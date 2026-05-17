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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCosAuditDictionaryList请求参数结构体
 *
 * @method string getDictType() 获取<p>字典类型（RootCategory：一级分类，IdentifyRule:敏感识别数据项）</p>
 * @method void setDictType(string $DictType) 设置<p>字典类型（RootCategory：一级分类，IdentifyRule:敏感识别数据项）</p>
 * @method array getFilters() 获取<p>筛选条件</p>
 * @method void setFilters(array $Filters) 设置<p>筛选条件</p>
 */
class DescribeCosAuditDictionaryListRequest extends AbstractModel
{
    /**
     * @var string <p>字典类型（RootCategory：一级分类，IdentifyRule:敏感识别数据项）</p>
     */
    public $DictType;

    /**
     * @var array <p>筛选条件</p>
     */
    public $Filters;

    /**
     * @param string $DictType <p>字典类型（RootCategory：一级分类，IdentifyRule:敏感识别数据项）</p>
     * @param array $Filters <p>筛选条件</p>
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
        if (array_key_exists("DictType",$param) and $param["DictType"] !== null) {
            $this->DictType = $param["DictType"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new WhereFilter();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
