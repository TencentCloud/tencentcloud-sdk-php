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
namespace TencentCloud\Irp\V20220805\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 推荐返回的内容信息
 *
 * @method string getItemId() 获取推荐的内容ID
 * @method void setItemId(string $ItemId) 设置推荐的内容ID
 * @method string getItemType() 获取内容类型，同内容上报类型一致
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItemType(string $ItemType) 设置内容类型，同内容上报类型一致
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getItemTraceId() 获取推荐追踪id，本次推荐内容产生的后续行为上报均要用该ItemTraceId上报。每次接口调用返回的ItemTraceId不同
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItemTraceId(string $ItemTraceId) 设置推荐追踪id，本次推荐内容产生的后续行为上报均要用该ItemTraceId上报。每次接口调用返回的ItemTraceId不同
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getScore() 获取推荐预测分，分值越高被推荐的理由越充分，取值范围[0,1000000]，用于做二次排序的参考
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScore(float $Score) 设置推荐预测分，分值越高被推荐的理由越充分，取值范围[0,1000000]，用于做二次排序的参考
注意：此字段可能返回 null，表示取不到有效值。
 */
class RecItemData extends AbstractModel
{
    /**
     * @var string 推荐的内容ID
     */
    public $ItemId;

    /**
     * @var string 内容类型，同内容上报类型一致
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ItemType;

    /**
     * @var string 推荐追踪id，本次推荐内容产生的后续行为上报均要用该ItemTraceId上报。每次接口调用返回的ItemTraceId不同
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ItemTraceId;

    /**
     * @var float 推荐预测分，分值越高被推荐的理由越充分，取值范围[0,1000000]，用于做二次排序的参考
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Score;

    /**
     * @param string $ItemId 推荐的内容ID
     * @param string $ItemType 内容类型，同内容上报类型一致
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ItemTraceId 推荐追踪id，本次推荐内容产生的后续行为上报均要用该ItemTraceId上报。每次接口调用返回的ItemTraceId不同
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Score 推荐预测分，分值越高被推荐的理由越充分，取值范围[0,1000000]，用于做二次排序的参考
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
        if (array_key_exists("ItemId",$param) and $param["ItemId"] !== null) {
            $this->ItemId = $param["ItemId"];
        }

        if (array_key_exists("ItemType",$param) and $param["ItemType"] !== null) {
            $this->ItemType = $param["ItemType"];
        }

        if (array_key_exists("ItemTraceId",$param) and $param["ItemTraceId"] !== null) {
            $this->ItemTraceId = $param["ItemTraceId"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }
    }
}
