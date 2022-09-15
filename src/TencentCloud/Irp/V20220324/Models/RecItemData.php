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
namespace TencentCloud\Irp\V20220324\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 推荐内容信息
 *
 * @method string getItemId() 获取推荐的内容id，即用户行为上报中的itemId
 * @method void setItemId(string $ItemId) 设置推荐的内容id，即用户行为上报中的itemId
 * @method integer getItemType() 获取物料子类型，包括如下： 1-图文、2-长视频（横视频）、3-短视频（横视频）、4-小说、5-小视频（竖视频）、6-纯文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setItemType(integer $ItemType) 设置物料子类型，包括如下： 1-图文、2-长视频（横视频）、3-短视频（横视频）、4-小说、5-小视频（竖视频）、6-纯文本
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getWeight() 获取推荐内容的权重，取值范围[0,1000000]
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWeight(integer $Weight) 设置推荐内容的权重，取值范围[0,1000000]
注意：此字段可能返回 null，表示取不到有效值。
 * @method float getScore() 获取推荐预测分
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setScore(float $Score) 设置推荐预测分
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getKeyword() 获取关键词，多个用英文分号分割，和物料上传的keyword一致
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setKeyword(string $Keyword) 设置关键词，多个用英文分号分割，和物料上传的keyword一致
注意：此字段可能返回 null，表示取不到有效值。
 */
class RecItemData extends AbstractModel
{
    /**
     * @var string 推荐的内容id，即用户行为上报中的itemId
     */
    public $ItemId;

    /**
     * @var integer 物料子类型，包括如下： 1-图文、2-长视频（横视频）、3-短视频（横视频）、4-小说、5-小视频（竖视频）、6-纯文本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ItemType;

    /**
     * @var integer 推荐内容的权重，取值范围[0,1000000]
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Weight;

    /**
     * @var float 推荐预测分
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Score;

    /**
     * @var string 关键词，多个用英文分号分割，和物料上传的keyword一致
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Keyword;

    /**
     * @param string $ItemId 推荐的内容id，即用户行为上报中的itemId
     * @param integer $ItemType 物料子类型，包括如下： 1-图文、2-长视频（横视频）、3-短视频（横视频）、4-小说、5-小视频（竖视频）、6-纯文本
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Weight 推荐内容的权重，取值范围[0,1000000]
注意：此字段可能返回 null，表示取不到有效值。
     * @param float $Score 推荐预测分
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Keyword 关键词，多个用英文分号分割，和物料上传的keyword一致
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

        if (array_key_exists("Weight",$param) and $param["Weight"] !== null) {
            $this->Weight = $param["Weight"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Keyword",$param) and $param["Keyword"] !== null) {
            $this->Keyword = $param["Keyword"];
        }
    }
}
