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
namespace TencentCloud\Apm\V20210622\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源层信息
 *
 * @method array getType() 获取资源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(array $Type) 设置资源类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTKEMeta() 获取tke资源层信息
 * @method void setTKEMeta(array $TKEMeta) 设置tke资源层信息
 * @method array getCVMMeta() 获取cvm资源信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCVMMeta(array $CVMMeta) 设置cvm资源信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class Resource extends AbstractModel
{
    /**
     * @var array 资源类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var array tke资源层信息
     */
    public $TKEMeta;

    /**
     * @var array cvm资源信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CVMMeta;

    /**
     * @param array $Type 资源类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $TKEMeta tke资源层信息
     * @param array $CVMMeta cvm资源信息
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
        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("TKEMeta",$param) and $param["TKEMeta"] !== null) {
            $this->TKEMeta = [];
            foreach ($param["TKEMeta"] as $key => $value){
                $obj = new TkeMeta();
                $obj->deserialize($value);
                array_push($this->TKEMeta, $obj);
            }
        }

        if (array_key_exists("CVMMeta",$param) and $param["CVMMeta"] !== null) {
            $this->CVMMeta = [];
            foreach ($param["CVMMeta"] as $key => $value){
                $obj = new CVMMeta();
                $obj->deserialize($value);
                array_push($this->CVMMeta, $obj);
            }
        }
    }
}
