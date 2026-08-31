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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 指定规格任务统计数据。
 *
 * @method string getSpecification() 获取<p>任务规格。</p>
 * @method void setSpecification(string $Specification) 设置<p>任务规格。</p>
 * @method array getData() 获取<p>统计数据。</p>
 * @method void setData(array $Data) 设置<p>统计数据。</p>
 */
class SpecificationDataItem extends AbstractModel
{
    /**
     * @var string <p>任务规格。</p>
     */
    public $Specification;

    /**
     * @var array <p>统计数据。</p>
     */
    public $Data;

    /**
     * @param string $Specification <p>任务规格。</p>
     * @param array $Data <p>统计数据。</p>
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
        if (array_key_exists("Specification",$param) and $param["Specification"] !== null) {
            $this->Specification = $param["Specification"];
        }

        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = [];
            foreach ($param["Data"] as $key => $value){
                $obj = new TaskStatDataItem();
                $obj->deserialize($value);
                array_push($this->Data, $obj);
            }
        }
    }
}
