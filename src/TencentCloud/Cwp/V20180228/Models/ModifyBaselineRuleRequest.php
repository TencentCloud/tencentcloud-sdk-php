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
 * ModifyBaselineRule请求参数结构体
 *
 * @method BaselineRule getData() 获取无
 * @method void setData(BaselineRule $Data) 设置无
 * @method integer getSelectAll() 获取是否过滤全选
 * @method void setSelectAll(integer $SelectAll) 设置是否过滤全选
 * @method array getFilters() 获取<li>ItemName - string - 是否必填：否 - 项名称</li>
 * @method void setFilters(array $Filters) 设置<li>ItemName - string - 是否必填：否 - 项名称</li>
 */
class ModifyBaselineRuleRequest extends AbstractModel
{
    /**
     * @var BaselineRule 无
     */
    public $Data;

    /**
     * @var integer 是否过滤全选
     */
    public $SelectAll;

    /**
     * @var array <li>ItemName - string - 是否必填：否 - 项名称</li>
     */
    public $Filters;

    /**
     * @param BaselineRule $Data 无
     * @param integer $SelectAll 是否过滤全选
     * @param array $Filters <li>ItemName - string - 是否必填：否 - 项名称</li>
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = new BaselineRule();
            $this->Data->deserialize($param["Data"]);
        }

        if (array_key_exists("SelectAll",$param) and $param["SelectAll"] !== null) {
            $this->SelectAll = $param["SelectAll"];
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
