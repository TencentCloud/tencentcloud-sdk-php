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
namespace TencentCloud\Cwp\V20180228\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 安全播报列表
 *
 * @method string getTitle() 获取文章名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTitle(string $Title) 设置文章名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getType() 获取类型：0=紧急通知，1=功能更新，2=行业荣誉，3=版本发布
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setType(integer $Type) 设置类型：0=紧急通知，1=功能更新，2=行业荣誉，3=版本发布
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubtitle() 获取副标题
 * @method void setSubtitle(string $Subtitle) 设置副标题
 * @method string getCreateTime() 获取发布时间
 * @method void setCreateTime(string $CreateTime) 设置发布时间
 * @method integer getId() 获取文章唯一id
 * @method void setId(integer $Id) 设置文章唯一id
 * @method integer getLevel() 获取危险程度  0：无， 1：严重， 2: 高危， 3:中危， 4: 低危
 * @method void setLevel(integer $Level) 设置危险程度  0：无， 1：严重， 2: 高危， 3:中危， 4: 低危
 */
class Broadcasts extends AbstractModel
{
    /**
     * @var string 文章名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Title;

    /**
     * @var integer 类型：0=紧急通知，1=功能更新，2=行业荣誉，3=版本发布
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Type;

    /**
     * @var string 副标题
     */
    public $Subtitle;

    /**
     * @var string 发布时间
     */
    public $CreateTime;

    /**
     * @var integer 文章唯一id
     */
    public $Id;

    /**
     * @var integer 危险程度  0：无， 1：严重， 2: 高危， 3:中危， 4: 低危
     */
    public $Level;

    /**
     * @param string $Title 文章名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Type 类型：0=紧急通知，1=功能更新，2=行业荣誉，3=版本发布
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Subtitle 副标题
     * @param string $CreateTime 发布时间
     * @param integer $Id 文章唯一id
     * @param integer $Level 危险程度  0：无， 1：严重， 2: 高危， 3:中危， 4: 低危
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
        if (array_key_exists("Title",$param) and $param["Title"] !== null) {
            $this->Title = $param["Title"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("Subtitle",$param) and $param["Subtitle"] !== null) {
            $this->Subtitle = $param["Subtitle"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Level",$param) and $param["Level"] !== null) {
            $this->Level = $param["Level"];
        }
    }
}
