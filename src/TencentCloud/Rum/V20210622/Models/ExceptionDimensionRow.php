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
namespace TencentCloud\Rum\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 异常维度值的同批完整分类计数；TotalCount为互斥主类之和，Items包含全部适用类型。
 *
 * @method string getRowKey() 获取<p>由目录域、维度或TagKey及归一化值确定的稳定、不透明唯一标识。</p>
 * @method void setRowKey(string $RowKey) 设置<p>由目录域、维度或TagKey及归一化值确定的稳定、不透明唯一标识。</p>
 * @method string getValue() 获取<p>维度显示值；标签保留原始值，普通province/platform/network_type按既有显示别名归一化。</p>
 * @method void setValue(string $Value) 设置<p>维度显示值；标签保留原始值，普通province/platform/network_type按既有显示别名归一化。</p>
 * @method integer getTotalCount() 获取<p>本行全部 IncludedInTotal=true 主项的 Count 之和，安全非负整数。</p>
 * @method void setTotalCount(integer $TotalCount) 设置<p>本行全部 IncludedInTotal=true 主项的 Count 之和，安全非负整数。</p>
 * @method array getItems() 获取<p>完整固定分类向量，含0计数及适用包含项；不按数量裁剪。</p>
 * @method void setItems(array $Items) 设置<p>完整固定分类向量，含0计数及适用包含项；不按数量裁剪。</p>
 */
class ExceptionDimensionRow extends AbstractModel
{
    /**
     * @var string <p>由目录域、维度或TagKey及归一化值确定的稳定、不透明唯一标识。</p>
     */
    public $RowKey;

    /**
     * @var string <p>维度显示值；标签保留原始值，普通province/platform/network_type按既有显示别名归一化。</p>
     */
    public $Value;

    /**
     * @var integer <p>本行全部 IncludedInTotal=true 主项的 Count 之和，安全非负整数。</p>
     */
    public $TotalCount;

    /**
     * @var array <p>完整固定分类向量，含0计数及适用包含项；不按数量裁剪。</p>
     */
    public $Items;

    /**
     * @param string $RowKey <p>由目录域、维度或TagKey及归一化值确定的稳定、不透明唯一标识。</p>
     * @param string $Value <p>维度显示值；标签保留原始值，普通province/platform/network_type按既有显示别名归一化。</p>
     * @param integer $TotalCount <p>本行全部 IncludedInTotal=true 主项的 Count 之和，安全非负整数。</p>
     * @param array $Items <p>完整固定分类向量，含0计数及适用包含项；不按数量裁剪。</p>
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
        if (array_key_exists("RowKey",$param) and $param["RowKey"] !== null) {
            $this->RowKey = $param["RowKey"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("TotalCount",$param) and $param["TotalCount"] !== null) {
            $this->TotalCount = $param["TotalCount"];
        }

        if (array_key_exists("Items",$param) and $param["Items"] !== null) {
            $this->Items = [];
            foreach ($param["Items"] as $key => $value){
                $obj = new ExceptionBucket();
                $obj->deserialize($value);
                array_push($this->Items, $obj);
            }
        }
    }
}
