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
 * 模型详细信息
 *
 * @method string getAlias() 获取模型别名
 * @method void setAlias(string $Alias) 设置模型别名
 * @method integer getHistoryLimit() 获取历史对话条数限制
 * @method void setHistoryLimit(integer $HistoryLimit) 设置历史对话条数限制
 * @method string getModelId() 获取模型唯一ID
 * @method void setModelId(string $ModelId) 设置模型唯一ID
 * @method ModelParams getModelParams() 获取模型参数
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setModelParams(ModelParams $ModelParams) 设置模型参数
注意：此字段可能返回 null，表示取不到有效值。
 */
class ModelDetailInfo extends AbstractModel
{
    /**
     * @var string 模型别名
     */
    public $Alias;

    /**
     * @var integer 历史对话条数限制
     */
    public $HistoryLimit;

    /**
     * @var string 模型唯一ID
     */
    public $ModelId;

    /**
     * @var ModelParams 模型参数
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ModelParams;

    /**
     * @param string $Alias 模型别名
     * @param integer $HistoryLimit 历史对话条数限制
     * @param string $ModelId 模型唯一ID
     * @param ModelParams $ModelParams 模型参数
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
        if (array_key_exists("Alias",$param) and $param["Alias"] !== null) {
            $this->Alias = $param["Alias"];
        }

        if (array_key_exists("HistoryLimit",$param) and $param["HistoryLimit"] !== null) {
            $this->HistoryLimit = $param["HistoryLimit"];
        }

        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("ModelParams",$param) and $param["ModelParams"] !== null) {
            $this->ModelParams = new ModelParams();
            $this->ModelParams->deserialize($param["ModelParams"]);
        }
    }
}
