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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模型关联信息
 *
 * @method array getInputModalitiesUnion() 获取<p>该模型最大可支持的输入多模态能力列表</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>image： 支持图像输入</li><li>file： 支持文件输入（当前仅支持pdf）</li></ul>
 * @method void setInputModalitiesUnion(array $InputModalitiesUnion) 设置<p>该模型最大可支持的输入多模态能力列表</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>image： 支持图像输入</li><li>file： 支持文件输入（当前仅支持pdf）</li></ul>
 * @method string getModelName() 获取<p>模型名称</p>
 * @method void setModelName(string $ModelName) 设置<p>模型名称</p>
 * @method array getServiceProviders() 获取<p>BYOK列表</p>
 * @method void setServiceProviders(array $ServiceProviders) 设置<p>BYOK列表</p>
 * @method string getType() 获取<p>模型类型</p>
 * @method void setType(string $Type) 设置<p>模型类型</p>
 */
class ModelAssociation extends AbstractModel
{
    /**
     * @var array <p>该模型最大可支持的输入多模态能力列表</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>image： 支持图像输入</li><li>file： 支持文件输入（当前仅支持pdf）</li></ul>
     */
    public $InputModalitiesUnion;

    /**
     * @var string <p>模型名称</p>
     */
    public $ModelName;

    /**
     * @var array <p>BYOK列表</p>
     */
    public $ServiceProviders;

    /**
     * @var string <p>模型类型</p>
     */
    public $Type;

    /**
     * @param array $InputModalitiesUnion <p>该模型最大可支持的输入多模态能力列表</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>image： 支持图像输入</li><li>file： 支持文件输入（当前仅支持pdf）</li></ul>
     * @param string $ModelName <p>模型名称</p>
     * @param array $ServiceProviders <p>BYOK列表</p>
     * @param string $Type <p>模型类型</p>
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
        if (array_key_exists("InputModalitiesUnion",$param) and $param["InputModalitiesUnion"] !== null) {
            $this->InputModalitiesUnion = $param["InputModalitiesUnion"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("ServiceProviders",$param) and $param["ServiceProviders"] !== null) {
            $this->ServiceProviders = [];
            foreach ($param["ServiceProviders"] as $key => $value){
                $obj = new ServiceProvider();
                $obj->deserialize($value);
                array_push($this->ServiceProviders, $obj);
            }
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }
    }
}
