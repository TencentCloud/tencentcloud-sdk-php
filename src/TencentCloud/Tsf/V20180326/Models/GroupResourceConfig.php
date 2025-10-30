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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 部署组相关的参数配置
 *
 * @method ContainerGroupResourceConfig getContainer() 获取容器部署组相关的参数配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContainer(ContainerGroupResourceConfig $Container) 设置容器部署组相关的参数配置
注意：此字段可能返回 null，表示取不到有效值。
 */
class GroupResourceConfig extends AbstractModel
{
    /**
     * @var ContainerGroupResourceConfig 容器部署组相关的参数配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Container;

    /**
     * @param ContainerGroupResourceConfig $Container 容器部署组相关的参数配置
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
        if (array_key_exists("Container",$param) and $param["Container"] !== null) {
            $this->Container = new ContainerGroupResourceConfig();
            $this->Container->deserialize($param["Container"]);
        }
    }
}
