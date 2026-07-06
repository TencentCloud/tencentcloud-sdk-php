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
namespace TencentCloud\Fwm\V20250611\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyStrategySequence请求参数结构体
 *
 * @method array getSequences() 获取优先级列表
 * @method void setSequences(array $Sequences) 设置优先级列表
 * @method string getExecArea() 获取执行区域
 * @method void setExecArea(string $ExecArea) 设置执行区域
 * @method string getProduct() 获取产品类型
 * @method void setProduct(string $Product) 设置产品类型
 */
class ModifyStrategySequenceRequest extends AbstractModel
{
    /**
     * @var array 优先级列表
     */
    public $Sequences;

    /**
     * @var string 执行区域
     */
    public $ExecArea;

    /**
     * @var string 产品类型
     */
    public $Product;

    /**
     * @param array $Sequences 优先级列表
     * @param string $ExecArea 执行区域
     * @param string $Product 产品类型
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
        if (array_key_exists("Sequences",$param) and $param["Sequences"] !== null) {
            $this->Sequences = [];
            foreach ($param["Sequences"] as $key => $value){
                $obj = new SequenceIndex();
                $obj->deserialize($value);
                array_push($this->Sequences, $obj);
            }
        }

        if (array_key_exists("ExecArea",$param) and $param["ExecArea"] !== null) {
            $this->ExecArea = $param["ExecArea"];
        }

        if (array_key_exists("Product",$param) and $param["Product"] !== null) {
            $this->Product = $param["Product"];
        }
    }
}
