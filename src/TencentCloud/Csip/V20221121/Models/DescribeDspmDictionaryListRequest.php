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
 * DescribeDspmDictionaryList请求参数结构体
 *
 * @method string getDictType() 获取字典类型（RootCategory：一级分类，IdentifyRule:敏感识别数据项）
 * @method void setDictType(string $DictType) 设置字典类型（RootCategory：一级分类，IdentifyRule:敏感识别数据项）
 * @method array getFilters() 获取筛选条件
 * @method void setFilters(array $Filters) 设置筛选条件
 */
class DescribeDspmDictionaryListRequest extends AbstractModel
{
    /**
     * @var string 字典类型（RootCategory：一级分类，IdentifyRule:敏感识别数据项）
     */
    public $DictType;

    /**
     * @var array 筛选条件
     */
    public $Filters;

    /**
     * @param string $DictType 字典类型（RootCategory：一级分类，IdentifyRule:敏感识别数据项）
     * @param array $Filters 筛选条件
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
