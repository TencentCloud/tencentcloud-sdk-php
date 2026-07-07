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
 * model 信息
 *
 * @method array getAssociatedModelRouters() 获取<p>关联的模型路由实例列表</p>
 * @method void setAssociatedModelRouters(array $AssociatedModelRouters) 设置<p>关联的模型路由实例列表</p>
 * @method array getInputModalities() 获取<p>该模型当前支持的输入多模态能力列表</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>image： 支持图像输入</li><li>file： 支持文件输入（当前仅支持pdf）</li></ul><p>默认值：text</p>
 * @method void setInputModalities(array $InputModalities) 设置<p>该模型当前支持的输入多模态能力列表</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>image： 支持图像输入</li><li>file： 支持文件输入（当前仅支持pdf）</li></ul><p>默认值：text</p>
 * @method string getModelAlias() 获取<p>模型别名, 可以用于实际访问</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelAlias(string $ModelAlias) 设置<p>模型别名, 可以用于实际访问</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getModelId() 获取<p>模型唯一标识, 原始模型名称</p>
 * @method void setModelId(string $ModelId) 设置<p>模型唯一标识, 原始模型名称</p>
 * @method array getProbedInputModalities() 获取<p>该模型经探测最多支持的输入多模态能力列表</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>file： 支持文件输入（当前仅支持pdf）</li><li>image： 支持图像输入</li></ul><p>模型不健康时列表为空</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProbedInputModalities(array $ProbedInputModalities) 设置<p>该模型经探测最多支持的输入多模态能力列表</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>file： 支持文件输入（当前仅支持pdf）</li><li>image： 支持图像输入</li></ul><p>模型不健康时列表为空</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ServiceProviderModelItem extends AbstractModel
{
    /**
     * @var array <p>关联的模型路由实例列表</p>
     */
    public $AssociatedModelRouters;

    /**
     * @var array <p>该模型当前支持的输入多模态能力列表</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>image： 支持图像输入</li><li>file： 支持文件输入（当前仅支持pdf）</li></ul><p>默认值：text</p>
     */
    public $InputModalities;

    /**
     * @var string <p>模型别名, 可以用于实际访问</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelAlias;

    /**
     * @var string <p>模型唯一标识, 原始模型名称</p>
     */
    public $ModelId;

    /**
     * @var array <p>该模型经探测最多支持的输入多模态能力列表</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>file： 支持文件输入（当前仅支持pdf）</li><li>image： 支持图像输入</li></ul><p>模型不健康时列表为空</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ProbedInputModalities;

    /**
     * @param array $AssociatedModelRouters <p>关联的模型路由实例列表</p>
     * @param array $InputModalities <p>该模型当前支持的输入多模态能力列表</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>image： 支持图像输入</li><li>file： 支持文件输入（当前仅支持pdf）</li></ul><p>默认值：text</p>
     * @param string $ModelAlias <p>模型别名, 可以用于实际访问</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ModelId <p>模型唯一标识, 原始模型名称</p>
     * @param array $ProbedInputModalities <p>该模型经探测最多支持的输入多模态能力列表</p><p>枚举值：</p><ul><li>text： 支持文本输入</li><li>file： 支持文件输入（当前仅支持pdf）</li><li>image： 支持图像输入</li></ul><p>模型不健康时列表为空</p>
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("AssociatedModelRouters",$param) and $param["AssociatedModelRouters"] !== null) {
            $this->AssociatedModelRouters = [];
            foreach ($param["AssociatedModelRouters"] as $key => $value){
                $obj = new AssociatedModelRouterItem();
                $obj->deserialize($value);
                array_push($this->AssociatedModelRouters, $obj);
            }
        }

        if (array_key_exists("InputModalities",$param) and $param["InputModalities"] !== null) {
            $this->InputModalities = $param["InputModalities"];
        }

        if (array_key_exists("ModelAlias",$param) and $param["ModelAlias"] !== null) {
            $this->ModelAlias = $param["ModelAlias"];
        }

        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("ProbedInputModalities",$param) and $param["ProbedInputModalities"] !== null) {
            $this->ProbedInputModalities = $param["ProbedInputModalities"];
        }
    }
}
