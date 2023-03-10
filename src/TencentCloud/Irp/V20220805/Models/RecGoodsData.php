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
 * @method string getGoodsId() 获取推荐返回的商品ID
 * @method void setGoodsId(string $GoodsId) 设置推荐返回的商品ID
 * @method float getScore() 获取推荐结果分，取值范围[0,1000000]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScore(float $Score) 设置推荐结果分，取值范围[0,1000000]
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGoodsTraceId() 获取推荐追踪id，本次推荐内容产生的后续行为上报均要用该GoodsTraceId上报。每次接口调用返回的GoodsTraceId不同
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGoodsTraceId(string $GoodsTraceId) 设置推荐追踪id，本次推荐内容产生的后续行为上报均要用该GoodsTraceId上报。每次接口调用返回的GoodsTraceId不同
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getPosition() 获取商品所在位置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPosition(integer $Position) 设置商品所在位置
注意：此字段可能返回 null，表示取不到有效值。
 */
class RecGoodsData extends AbstractModel
{
    /**
     * @var string 推荐返回的商品ID
     */
    public $GoodsId;

    /**
     * @var float 推荐结果分，取值范围[0,1000000]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Score;

    /**
     * @var string 推荐追踪id，本次推荐内容产生的后续行为上报均要用该GoodsTraceId上报。每次接口调用返回的GoodsTraceId不同
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GoodsTraceId;

    /**
     * @var integer 商品所在位置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Position;

    /**
     * @param string $GoodsId 推荐返回的商品ID
     * @param float $Score 推荐结果分，取值范围[0,1000000]
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GoodsTraceId 推荐追踪id，本次推荐内容产生的后续行为上报均要用该GoodsTraceId上报。每次接口调用返回的GoodsTraceId不同
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Position 商品所在位置
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
        if (array_key_exists("GoodsId",$param) and $param["GoodsId"] !== null) {
            $this->GoodsId = $param["GoodsId"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("GoodsTraceId",$param) and $param["GoodsTraceId"] !== null) {
            $this->GoodsTraceId = $param["GoodsTraceId"];
        }

        if (array_key_exists("Position",$param) and $param["Position"] !== null) {
            $this->Position = $param["Position"];
        }
    }
}
