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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 自定义指标采集对象
 *
 * @method string getPort() 获取端口。取值范围 [1,65535]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPort(string $Port) 设置端口。取值范围 [1,65535]
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPath() 获取Metric地址。校验格式：`^/[a-zA-Z0-9-_./]*$`
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPath(string $Path) 设置Metric地址。校验格式：`^/[a-zA-Z0-9-_./]*$`
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getNamespaces() 获取命名空间列表。
- 最大支持100个
- namespace 校验格式 `[a-z0-9]([-a-z0-9]*[a-z0-9])?` ， 长度不能超过63
- namespace 不能重复
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespaces(array $Namespaces) 设置命名空间列表。
- 最大支持100个
- namespace 校验格式 `[a-z0-9]([-a-z0-9]*[a-z0-9])?` ， 长度不能超过63
- namespace 不能重复
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getPodLabel() 获取Pod标签。
- 最大支持100个

注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPodLabel(array $PodLabel) 设置Pod标签。
- 最大支持100个

注意：此字段可能返回 null，表示取不到有效值。
 */
class CustomMetricSpec extends AbstractModel
{
    /**
     * @var string 端口。取值范围 [1,65535]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Port;

    /**
     * @var string Metric地址。校验格式：`^/[a-zA-Z0-9-_./]*$`
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Path;

    /**
     * @var array 命名空间列表。
- 最大支持100个
- namespace 校验格式 `[a-z0-9]([-a-z0-9]*[a-z0-9])?` ， 长度不能超过63
- namespace 不能重复
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Namespaces;

    /**
     * @var array Pod标签。
- 最大支持100个

注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PodLabel;

    /**
     * @param string $Port 端口。取值范围 [1,65535]
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Path Metric地址。校验格式：`^/[a-zA-Z0-9-_./]*$`
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Namespaces 命名空间列表。
- 最大支持100个
- namespace 校验格式 `[a-z0-9]([-a-z0-9]*[a-z0-9])?` ， 长度不能超过63
- namespace 不能重复
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $PodLabel Pod标签。
- 最大支持100个

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
        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Namespaces",$param) and $param["Namespaces"] !== null) {
            $this->Namespaces = $param["Namespaces"];
        }

        if (array_key_exists("PodLabel",$param) and $param["PodLabel"] !== null) {
            $this->PodLabel = [];
            foreach ($param["PodLabel"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->PodLabel, $obj);
            }
        }
    }
}
