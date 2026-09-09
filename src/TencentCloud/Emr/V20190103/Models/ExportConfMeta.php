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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 导出配置结构体
 *
 * @method string getServiceName() 获取<p>组件名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceName(string $ServiceName) 设置<p>组件名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getClassification() 获取<p>文件名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setClassification(string $Classification) 设置<p>文件名</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceVersion() 获取<p>组件版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceVersion(string $ServiceVersion) 设置<p>组件版本</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getProperties() 获取<p>导出配置参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setProperties(string $Properties) 设置<p>导出配置参数</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExportConfMeta extends AbstractModel
{
    /**
     * @var string <p>组件名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceName;

    /**
     * @var string <p>文件名</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Classification;

    /**
     * @var string <p>组件版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceVersion;

    /**
     * @var string <p>导出配置参数</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Properties;

    /**
     * @param string $ServiceName <p>组件名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Classification <p>文件名</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceVersion <p>组件版本</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Properties <p>导出配置参数</p>
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
        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("Classification",$param) and $param["Classification"] !== null) {
            $this->Classification = $param["Classification"];
        }

        if (array_key_exists("ServiceVersion",$param) and $param["ServiceVersion"] !== null) {
            $this->ServiceVersion = $param["ServiceVersion"];
        }

        if (array_key_exists("Properties",$param) and $param["Properties"] !== null) {
            $this->Properties = $param["Properties"];
        }
    }
}
