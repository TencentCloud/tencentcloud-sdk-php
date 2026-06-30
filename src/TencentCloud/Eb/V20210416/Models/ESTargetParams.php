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
namespace TencentCloud\Eb\V20210416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述Es规则目标
 *
 * @method string getNetMode() 获取<p>网络连接类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNetMode(string $NetMode) 设置<p>网络连接类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndexPrefix() 获取<p>索引前缀</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexPrefix(string $IndexPrefix) 设置<p>索引前缀</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRotationInterval() 获取<p>es日志轮换粒度</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRotationInterval(string $RotationInterval) 设置<p>es日志轮换粒度</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOutputMode() 获取<p>DTS事件配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setOutputMode(string $OutputMode) 设置<p>DTS事件配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndexSuffixMode() 获取<p>DTS索引配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexSuffixMode(string $IndexSuffixMode) 设置<p>DTS索引配置</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIndexTemplateType() 获取<p>es模版类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIndexTemplateType(string $IndexTemplateType) 设置<p>es模版类型</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ESTargetParams extends AbstractModel
{
    /**
     * @var string <p>网络连接类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NetMode;

    /**
     * @var string <p>索引前缀</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexPrefix;

    /**
     * @var string <p>es日志轮换粒度</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RotationInterval;

    /**
     * @var string <p>DTS事件配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $OutputMode;

    /**
     * @var string <p>DTS索引配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexSuffixMode;

    /**
     * @var string <p>es模版类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IndexTemplateType;

    /**
     * @param string $NetMode <p>网络连接类型</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndexPrefix <p>索引前缀</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RotationInterval <p>es日志轮换粒度</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OutputMode <p>DTS事件配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndexSuffixMode <p>DTS索引配置</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IndexTemplateType <p>es模版类型</p>
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
        if (array_key_exists("NetMode",$param) and $param["NetMode"] !== null) {
            $this->NetMode = $param["NetMode"];
        }

        if (array_key_exists("IndexPrefix",$param) and $param["IndexPrefix"] !== null) {
            $this->IndexPrefix = $param["IndexPrefix"];
        }

        if (array_key_exists("RotationInterval",$param) and $param["RotationInterval"] !== null) {
            $this->RotationInterval = $param["RotationInterval"];
        }

        if (array_key_exists("OutputMode",$param) and $param["OutputMode"] !== null) {
            $this->OutputMode = $param["OutputMode"];
        }

        if (array_key_exists("IndexSuffixMode",$param) and $param["IndexSuffixMode"] !== null) {
            $this->IndexSuffixMode = $param["IndexSuffixMode"];
        }

        if (array_key_exists("IndexTemplateType",$param) and $param["IndexTemplateType"] !== null) {
            $this->IndexTemplateType = $param["IndexTemplateType"];
        }
    }
}
