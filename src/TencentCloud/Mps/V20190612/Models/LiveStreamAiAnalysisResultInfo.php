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
 * 直播流分析结果
 *
 * @method array getResultSet() 获取直播分析子任务结果，暂时只支持直播拆条。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResultSet(array $ResultSet) 设置直播分析子任务结果，暂时只支持直播拆条。
注意：此字段可能返回 null，表示取不到有效值。
 */
class LiveStreamAiAnalysisResultInfo extends AbstractModel
{
    /**
     * @var array 直播分析子任务结果，暂时只支持直播拆条。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResultSet;

    /**
     * @param array $ResultSet 直播分析子任务结果，暂时只支持直播拆条。
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
        if (array_key_exists("ResultSet",$param) and $param["ResultSet"] !== null) {
            $this->ResultSet = [];
            foreach ($param["ResultSet"] as $key => $value){
                $obj = new LiveStreamAiAnalysisResultItem();
                $obj->deserialize($value);
                array_push($this->ResultSet, $obj);
            }
        }
    }
}
