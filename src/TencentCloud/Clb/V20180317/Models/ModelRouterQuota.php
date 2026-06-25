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
 * 模型路由相关配额
 *
 * @method string getQuotaType() 获取<p>配额名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setQuotaType(string $QuotaType) 设置<p>配额名称</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getResourceId() 获取<p>资源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceId(string $ResourceId) 设置<p>资源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLimit() 获取<p>配额上限</p><p>单位：个</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLimit(integer $Limit) 设置<p>配额上限</p><p>单位：个</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUsed() 获取<p>已使用配额数量</p><p>单位：个</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsed(integer $Used) 设置<p>已使用配额数量</p><p>单位：个</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAvailable() 获取<p>剩余配额数量</p><p>单位：个</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvailable(integer $Available) 设置<p>剩余配额数量</p><p>单位：个</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ModelRouterQuota extends AbstractModel
{
    /**
     * @var string <p>配额名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $QuotaType;

    /**
     * @var string <p>资源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceId;

    /**
     * @var integer <p>配额上限</p><p>单位：个</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Limit;

    /**
     * @var integer <p>已使用配额数量</p><p>单位：个</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Used;

    /**
     * @var integer <p>剩余配额数量</p><p>单位：个</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Available;

    /**
     * @param string $QuotaType <p>配额名称</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ResourceId <p>资源ID</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Limit <p>配额上限</p><p>单位：个</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Used <p>已使用配额数量</p><p>单位：个</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Available <p>剩余配额数量</p><p>单位：个</p>
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
        if (array_key_exists("QuotaType",$param) and $param["QuotaType"] !== null) {
            $this->QuotaType = $param["QuotaType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Used",$param) and $param["Used"] !== null) {
            $this->Used = $param["Used"];
        }

        if (array_key_exists("Available",$param) and $param["Available"] !== null) {
            $this->Available = $param["Available"];
        }
    }
}
