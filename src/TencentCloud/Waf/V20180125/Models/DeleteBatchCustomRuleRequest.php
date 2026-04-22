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
namespace TencentCloud\Waf\V20180125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DeleteBatchCustomRule请求参数结构体
 *
 * @method string getDataType() 获取数据类型 
"custom-rule"-自定义规则、"custom-white-rule"-精准白名单

 * @method void setDataType(string $DataType) 设置数据类型 
"custom-rule"-自定义规则、"custom-white-rule"-精准白名单

 * @method integer getIsDeleteAll() 获取0-指定Id删除、1-删除全部（除部分排除的Id）

 * @method void setIsDeleteAll(integer $IsDeleteAll) 设置0-指定Id删除、1-删除全部（除部分排除的Id）

 * @method array getIds() 获取具体Ids 由IsDeleteAll而定
 * @method void setIds(array $Ids) 设置具体Ids 由IsDeleteAll而定
 * @method array getFilters() 获取筛选条件
 * @method void setFilters(array $Filters) 设置筛选条件
 */
class DeleteBatchCustomRuleRequest extends AbstractModel
{
    /**
     * @var string 数据类型 
"custom-rule"-自定义规则、"custom-white-rule"-精准白名单

     */
    public $DataType;

    /**
     * @var integer 0-指定Id删除、1-删除全部（除部分排除的Id）

     */
    public $IsDeleteAll;

    /**
     * @var array 具体Ids 由IsDeleteAll而定
     */
    public $Ids;

    /**
     * @var array 筛选条件
     */
    public $Filters;

    /**
     * @param string $DataType 数据类型 
"custom-rule"-自定义规则、"custom-white-rule"-精准白名单

     * @param integer $IsDeleteAll 0-指定Id删除、1-删除全部（除部分排除的Id）

     * @param array $Ids 具体Ids 由IsDeleteAll而定
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
        if (array_key_exists("DataType",$param) and $param["DataType"] !== null) {
            $this->DataType = $param["DataType"];
        }

        if (array_key_exists("IsDeleteAll",$param) and $param["IsDeleteAll"] !== null) {
            $this->IsDeleteAll = $param["IsDeleteAll"];
        }

        if (array_key_exists("Ids",$param) and $param["Ids"] !== null) {
            $this->Ids = $param["Ids"];
        }

        if (array_key_exists("Filters",$param) and $param["Filters"] !== null) {
            $this->Filters = [];
            foreach ($param["Filters"] as $key => $value){
                $obj = new FiltersItemNew();
                $obj->deserialize($value);
                array_push($this->Filters, $obj);
            }
        }
    }
}
