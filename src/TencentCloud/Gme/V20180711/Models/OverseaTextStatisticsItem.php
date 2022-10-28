<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Gme\V20180711\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 海外转文本用量数据
 *
 * @method float getData() 获取统计值，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setData(float $Data) 设置统计值，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
 */
class OverseaTextStatisticsItem extends AbstractModel
{
    /**
     * @var float 统计值，单位：秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Data;

    /**
     * @param float $Data 统计值，单位：秒
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
        if (array_key_exists("Data",$param) and $param["Data"] !== null) {
            $this->Data = $param["Data"];
        }
    }
}
