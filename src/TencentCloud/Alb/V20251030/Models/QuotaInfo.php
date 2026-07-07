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
namespace TencentCloud\Alb\V20251030\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 单个配额项的查询结果。每个结果对应一个配额类型；当请求中传入 ResourceIds 时，每个结果还会对应一个具体资源。
 *
 * @method integer getAvailable() 获取当前剩余可用量，计算方式为 Limit - Used。仅当请求参数 DisplayFields 包含 available 时返回有效值；未请求时不返回或为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAvailable(integer $Available) 设置当前剩余可用量，计算方式为 Limit - Used。仅当请求参数 DisplayFields 包含 available 时返回有效值；未请求时不返回或为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLimit() 获取配额上限值。不同配额类型的单位不同，通常表示资源个数；超时时间类配额表示秒。
 * @method void setLimit(integer $Limit) 设置配额上限值。不同配额类型的单位不同，通常表示资源个数；超时时间类配额表示秒。
 * @method string getQuotaType() 获取配额类型，与请求参数 QuotaTypes 中的取值对应。每种配额类型的含义请参考 QuotaTypes 参数说明。
 * @method void setQuotaType(string $QuotaType) 设置配额类型，与请求参数 QuotaTypes 中的取值对应。每种配额类型的含义请参考 QuotaTypes 参数说明。
 * @method string getResourceId() 获取资源 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceId(string $ResourceId) 设置资源 ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getUsed() 获取当前已使用量。仅当请求参数 DisplayFields 包含 used 时返回有效值；未请求时不返回或为空。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUsed(integer $Used) 设置当前已使用量。仅当请求参数 DisplayFields 包含 used 时返回有效值；未请求时不返回或为空。
注意：此字段可能返回 null，表示取不到有效值。
 */
class QuotaInfo extends AbstractModel
{
    /**
     * @var integer 当前剩余可用量，计算方式为 Limit - Used。仅当请求参数 DisplayFields 包含 available 时返回有效值；未请求时不返回或为空。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Available;

    /**
     * @var integer 配额上限值。不同配额类型的单位不同，通常表示资源个数；超时时间类配额表示秒。
     */
    public $Limit;

    /**
     * @var string 配额类型，与请求参数 QuotaTypes 中的取值对应。每种配额类型的含义请参考 QuotaTypes 参数说明。
     */
    public $QuotaType;

    /**
     * @var string 资源 ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceId;

    /**
     * @var integer 当前已使用量。仅当请求参数 DisplayFields 包含 used 时返回有效值；未请求时不返回或为空。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Used;

    /**
     * @param integer $Available 当前剩余可用量，计算方式为 Limit - Used。仅当请求参数 DisplayFields 包含 available 时返回有效值；未请求时不返回或为空。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Limit 配额上限值。不同配额类型的单位不同，通常表示资源个数；超时时间类配额表示秒。
     * @param string $QuotaType 配额类型，与请求参数 QuotaTypes 中的取值对应。每种配额类型的含义请参考 QuotaTypes 参数说明。
     * @param string $ResourceId 资源 ID。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Used 当前已使用量。仅当请求参数 DisplayFields 包含 used 时返回有效值；未请求时不返回或为空。
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
        if (array_key_exists("Available",$param) and $param["Available"] !== null) {
            $this->Available = $param["Available"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("QuotaType",$param) and $param["QuotaType"] !== null) {
            $this->QuotaType = $param["QuotaType"];
        }

        if (array_key_exists("ResourceId",$param) and $param["ResourceId"] !== null) {
            $this->ResourceId = $param["ResourceId"];
        }

        if (array_key_exists("Used",$param) and $param["Used"] !== null) {
            $this->Used = $param["Used"];
        }
    }
}
