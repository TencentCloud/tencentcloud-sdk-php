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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ComplexBilling
 *
 * @method array getComplexList() 获取<p>复合计费列表</p>
 * @method void setComplexList(array $ComplexList) 设置<p>复合计费列表</p>
 */
class ComplexBilling extends AbstractModel
{
    /**
     * @var array <p>复合计费列表</p>
     */
    public $ComplexList;

    /**
     * @param array $ComplexList <p>复合计费列表</p>
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
        if (array_key_exists("ComplexList",$param) and $param["ComplexList"] !== null) {
            $this->ComplexList = [];
            foreach ($param["ComplexList"] as $key => $value){
                $obj = new ComplexBillingItem();
                $obj->deserialize($value);
                array_push($this->ComplexList, $obj);
            }
        }
    }
}
