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
namespace TencentCloud\Ims\V20201229\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 实体检测结果明细，当检测场景为实体、广告台标、二维码时表示模型检测目标框的标签名称、标签值、标签分数以及检测框的位置信息。
 *
 * @method integer getId() 获取该参数用于返回识别对象的ID以方便识别和区分。
 * @method void setId(integer $Id) 设置该参数用于返回识别对象的ID以方便识别和区分。
 * @method string getName() 获取该参数用于返回命中的实体标签。
 * @method void setName(string $Name) 设置该参数用于返回命中的实体标签。
 * @method string getValue() 获取该参数用于返回对应实体标签所对应的值或内容。如：当标签为*二维码(QrCode)*时，该字段为识别出的二维码对应的URL地址。
 * @method void setValue(string $Value) 设置该参数用于返回对应实体标签所对应的值或内容。如：当标签为*二维码(QrCode)*时，该字段为识别出的二维码对应的URL地址。
 * @method integer getScore() 获取该参数用于返回对应实体标签命中的分值，取值为**0-100**，如：*QrCode 99* 则代表相应识别内容命中二维码场景标签的概率非常高。
 * @method void setScore(integer $Score) 设置该参数用于返回对应实体标签命中的分值，取值为**0-100**，如：*QrCode 99* 则代表相应识别内容命中二维码场景标签的概率非常高。
 * @method Location getLocation() 获取该字段用于返回实体检测框的坐标位置（左上角xy坐标、长宽、旋转角度）以方便快速定位实体的相关信息。
 * @method void setLocation(Location $Location) 设置该字段用于返回实体检测框的坐标位置（左上角xy坐标、长宽、旋转角度）以方便快速定位实体的相关信息。
 * @method string getSubLabel() 获取该参数用于返回命中的实体二级标签。
 * @method void setSubLabel(string $SubLabel) 设置该参数用于返回命中的实体二级标签。
 * @method string getObjectId() 获取该参数用于返回命中的人脸id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setObjectId(string $ObjectId) 设置该参数用于返回命中的人脸id
注意：此字段可能返回 null，表示取不到有效值。
 */
class ObjectDetail extends AbstractModel
{
    /**
     * @var integer 该参数用于返回识别对象的ID以方便识别和区分。
     */
    public $Id;

    /**
     * @var string 该参数用于返回命中的实体标签。
     */
    public $Name;

    /**
     * @var string 该参数用于返回对应实体标签所对应的值或内容。如：当标签为*二维码(QrCode)*时，该字段为识别出的二维码对应的URL地址。
     */
    public $Value;

    /**
     * @var integer 该参数用于返回对应实体标签命中的分值，取值为**0-100**，如：*QrCode 99* 则代表相应识别内容命中二维码场景标签的概率非常高。
     */
    public $Score;

    /**
     * @var Location 该字段用于返回实体检测框的坐标位置（左上角xy坐标、长宽、旋转角度）以方便快速定位实体的相关信息。
     */
    public $Location;

    /**
     * @var string 该参数用于返回命中的实体二级标签。
     */
    public $SubLabel;

    /**
     * @var string 该参数用于返回命中的人脸id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ObjectId;

    /**
     * @param integer $Id 该参数用于返回识别对象的ID以方便识别和区分。
     * @param string $Name 该参数用于返回命中的实体标签。
     * @param string $Value 该参数用于返回对应实体标签所对应的值或内容。如：当标签为*二维码(QrCode)*时，该字段为识别出的二维码对应的URL地址。
     * @param integer $Score 该参数用于返回对应实体标签命中的分值，取值为**0-100**，如：*QrCode 99* 则代表相应识别内容命中二维码场景标签的概率非常高。
     * @param Location $Location 该字段用于返回实体检测框的坐标位置（左上角xy坐标、长宽、旋转角度）以方便快速定位实体的相关信息。
     * @param string $SubLabel 该参数用于返回命中的实体二级标签。
     * @param string $ObjectId 该参数用于返回命中的人脸id
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Value",$param) and $param["Value"] !== null) {
            $this->Value = $param["Value"];
        }

        if (array_key_exists("Score",$param) and $param["Score"] !== null) {
            $this->Score = $param["Score"];
        }

        if (array_key_exists("Location",$param) and $param["Location"] !== null) {
            $this->Location = new Location();
            $this->Location->deserialize($param["Location"]);
        }

        if (array_key_exists("SubLabel",$param) and $param["SubLabel"] !== null) {
            $this->SubLabel = $param["SubLabel"];
        }

        if (array_key_exists("ObjectId",$param) and $param["ObjectId"] !== null) {
            $this->ObjectId = $param["ObjectId"];
        }
    }
}
