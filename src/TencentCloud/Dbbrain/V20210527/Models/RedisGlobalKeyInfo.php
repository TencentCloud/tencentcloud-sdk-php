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
namespace TencentCloud\Dbbrain\V20210527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Redis全量Key的聚合信息。
 *
 * @method integer getCapacity() 获取占用内存大小，单位Byte。
 * @method void setCapacity(integer $Capacity) 设置占用内存大小，单位Byte。
 * @method integer getCount() 获取Key个数。
 * @method void setCount(integer $Count) 设置Key个数。
 * @method integer getRangeMax() 获取剩余过期时间范围的结束时间，当小于0时，代表已过期时间，单位：小时。当RangeMin与RangeMax同时为空时，代表未设置过期时间。当RangeMax为空时，代表剩余过期时间大于等于RangeMin小时。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRangeMax(integer $RangeMax) 设置剩余过期时间范围的结束时间，当小于0时，代表已过期时间，单位：小时。当RangeMin与RangeMax同时为空时，代表未设置过期时间。当RangeMax为空时，代表剩余过期时间大于等于RangeMin小时。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getRangeMin() 获取剩余过期时间范围的起始时间，当小于0时，代表已过期时间，单位：小时。当RangeMin与RangeMax同时为空时，代表未设置过期时间。当RangeMin为空时，代表已过期。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRangeMin(integer $RangeMin) 设置剩余过期时间范围的起始时间，当小于0时，代表已过期时间，单位：小时。当RangeMin与RangeMax同时为空时，代表未设置过期时间。当RangeMin为空时，代表已过期。
注意：此字段可能返回 null，表示取不到有效值。
 */
class RedisGlobalKeyInfo extends AbstractModel
{
    /**
     * @var integer 占用内存大小，单位Byte。
     */
    public $Capacity;

    /**
     * @var integer Key个数。
     */
    public $Count;

    /**
     * @var integer 剩余过期时间范围的结束时间，当小于0时，代表已过期时间，单位：小时。当RangeMin与RangeMax同时为空时，代表未设置过期时间。当RangeMax为空时，代表剩余过期时间大于等于RangeMin小时。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RangeMax;

    /**
     * @var integer 剩余过期时间范围的起始时间，当小于0时，代表已过期时间，单位：小时。当RangeMin与RangeMax同时为空时，代表未设置过期时间。当RangeMin为空时，代表已过期。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RangeMin;

    /**
     * @param integer $Capacity 占用内存大小，单位Byte。
     * @param integer $Count Key个数。
     * @param integer $RangeMax 剩余过期时间范围的结束时间，当小于0时，代表已过期时间，单位：小时。当RangeMin与RangeMax同时为空时，代表未设置过期时间。当RangeMax为空时，代表剩余过期时间大于等于RangeMin小时。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $RangeMin 剩余过期时间范围的起始时间，当小于0时，代表已过期时间，单位：小时。当RangeMin与RangeMax同时为空时，代表未设置过期时间。当RangeMin为空时，代表已过期。
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
        if (array_key_exists("Capacity",$param) and $param["Capacity"] !== null) {
            $this->Capacity = $param["Capacity"];
        }

        if (array_key_exists("Count",$param) and $param["Count"] !== null) {
            $this->Count = $param["Count"];
        }

        if (array_key_exists("RangeMax",$param) and $param["RangeMax"] !== null) {
            $this->RangeMax = $param["RangeMax"];
        }

        if (array_key_exists("RangeMin",$param) and $param["RangeMin"] !== null) {
            $this->RangeMin = $param["RangeMin"];
        }
    }
}
