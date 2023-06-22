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
namespace TencentCloud\Yinsuda\V20220527\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 其它片段时间（可用于抢唱）
 *
 * @method integer getSegmentBegin() 获取片段开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSegmentBegin(integer $SegmentBegin) 设置片段开始时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getSegmentEnd() 获取片段结束时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSegmentEnd(integer $SegmentEnd) 设置片段结束时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class KTVOtherSegments extends AbstractModel
{
    /**
     * @var integer 片段开始时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SegmentBegin;

    /**
     * @var integer 片段结束时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SegmentEnd;

    /**
     * @param integer $SegmentBegin 片段开始时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $SegmentEnd 片段结束时间
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
        if (array_key_exists("SegmentBegin",$param) and $param["SegmentBegin"] !== null) {
            $this->SegmentBegin = $param["SegmentBegin"];
        }

        if (array_key_exists("SegmentEnd",$param) and $param["SegmentEnd"] !== null) {
            $this->SegmentEnd = $param["SegmentEnd"];
        }
    }
}
