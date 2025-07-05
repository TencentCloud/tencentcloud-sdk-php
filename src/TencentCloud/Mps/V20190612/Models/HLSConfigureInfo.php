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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HLS配置参数
 *
 * @method integer getItemDuration() 获取单个 TS 文件时长，单位：秒，取值范围 5-30 秒。

不填默认为 30 秒。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItemDuration(integer $ItemDuration) 设置单个 TS 文件时长，单位：秒，取值范围 5-30 秒。

不填默认为 30 秒。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getInterval() 获取录制周期，单位：秒，取值范围 10 分钟到  12 小时。

不填默认为 10分钟（3600 秒）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInterval(integer $Interval) 设置录制周期，单位：秒，取值范围 10 分钟到  12 小时。

不填默认为 10分钟（3600 秒）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getContinueTimeout() 获取续录等待时间，单位：秒。取值范围为60秒-1800秒。
不填默认为0（不启用续录）。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setContinueTimeout(integer $ContinueTimeout) 设置续录等待时间，单位：秒。取值范围为60秒-1800秒。
不填默认为0（不启用续录）。
注意：此字段可能返回 null，表示取不到有效值。
 */
class HLSConfigureInfo extends AbstractModel
{
    /**
     * @var integer 单个 TS 文件时长，单位：秒，取值范围 5-30 秒。

不填默认为 30 秒。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ItemDuration;

    /**
     * @var integer 录制周期，单位：秒，取值范围 10 分钟到  12 小时。

不填默认为 10分钟（3600 秒）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Interval;

    /**
     * @var integer 续录等待时间，单位：秒。取值范围为60秒-1800秒。
不填默认为0（不启用续录）。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ContinueTimeout;

    /**
     * @param integer $ItemDuration 单个 TS 文件时长，单位：秒，取值范围 5-30 秒。

不填默认为 30 秒。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Interval 录制周期，单位：秒，取值范围 10 分钟到  12 小时。

不填默认为 10分钟（3600 秒）。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $ContinueTimeout 续录等待时间，单位：秒。取值范围为60秒-1800秒。
不填默认为0（不启用续录）。
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
        if (array_key_exists("ItemDuration",$param) and $param["ItemDuration"] !== null) {
            $this->ItemDuration = $param["ItemDuration"];
        }

        if (array_key_exists("Interval",$param) and $param["Interval"] !== null) {
            $this->Interval = $param["Interval"];
        }

        if (array_key_exists("ContinueTimeout",$param) and $param["ContinueTimeout"] !== null) {
            $this->ContinueTimeout = $param["ContinueTimeout"];
        }
    }
}
