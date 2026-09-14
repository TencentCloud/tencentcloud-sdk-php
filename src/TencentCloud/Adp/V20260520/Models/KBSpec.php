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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 知识库可写属性集合（配合 update_mask 使用）
 *
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method ESConfig getEsConfig() 获取<p>ES 配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEsConfig(ESConfig $EsConfig) 设置<p>ES 配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method KBModelConfig getModelConfig() 获取<p>模型配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelConfig(KBModelConfig $ModelConfig) 设置<p>模型配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取<p>知识库名称</p>
 * @method void setName(string $Name) 设置<p>知识库名称</p>
 * @method string getOwnerId() 获取<p>所有者 ID</p>
 * @method void setOwnerId(string $OwnerId) 设置<p>所有者 ID</p>
 */
class KBSpec extends AbstractModel
{
    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var ESConfig <p>ES 配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EsConfig;

    /**
     * @var KBModelConfig <p>模型配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelConfig;

    /**
     * @var string <p>知识库名称</p>
     */
    public $Name;

    /**
     * @var string <p>所有者 ID</p>
     */
    public $OwnerId;

    /**
     * @param string $Description <p>描述</p>
     * @param ESConfig $EsConfig <p>ES 配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param KBModelConfig $ModelConfig <p>模型配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name <p>知识库名称</p>
     * @param string $OwnerId <p>所有者 ID</p>
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
        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("EsConfig",$param) and $param["EsConfig"] !== null) {
            $this->EsConfig = new ESConfig();
            $this->EsConfig->deserialize($param["EsConfig"]);
        }

        if (array_key_exists("ModelConfig",$param) and $param["ModelConfig"] !== null) {
            $this->ModelConfig = new KBModelConfig();
            $this->ModelConfig->deserialize($param["ModelConfig"]);
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("OwnerId",$param) and $param["OwnerId"] !== null) {
            $this->OwnerId = $param["OwnerId"];
        }
    }
}
