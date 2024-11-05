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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资产类型和实例类型的映射
 *
 * @method string getText() 获取资产类型
 * @method void setText(string $Text) 设置资产类型
 * @method string getValue() 获取资产类型
 * @method void setValue(string $Value) 设置资产类型
 * @method array getInstanceTypeList() 获取资产类型和实例类型映射关系
 * @method void setInstanceTypeList(array $InstanceTypeList) 设置资产类型和实例类型映射关系
 */
class AssetInstanceTypeMap extends AbstractModel
{
    /**
     * @var string 资产类型
     */
    public $Text;

    /**
     * @var string 资产类型
     */
    public $Value;

    /**
     * @var array 资产类型和实例类型映射关系
     */
    public $InstanceTypeList;

    /**
     * @param string $Text 资产类型
     * @param string $Value 资产类型
     * @param array $InstanceTypeList 资产类型和实例类型映射关系
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
        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("InstanceTypeList",$param) and $param["InstanceTypeList"] !== null) {
            $this->InstanceTypeList = [];
            foreach ($param["InstanceTypeList"] as $key => $value){
                $obj = new FilterDataObject();
                $obj->deserialize($value);
                array_push($this->InstanceTypeList, $obj);
            }
        }
    }
}
