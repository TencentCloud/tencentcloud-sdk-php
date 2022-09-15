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
namespace TencentCloud\Tiia\V20190529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 图像的主体信息。
 *
 * @method Box getBox() 获取图像主体区域。
 * @method void setBox(Box $Box) 设置图像主体区域。
 * @method integer getCategoryId() 获取主体类别ID。
 * @method void setCategoryId(integer $CategoryId) 设置主体类别ID。
 * @method array getColors() 获取整张图颜色信息。
 * @method void setColors(array $Colors) 设置整张图颜色信息。
 * @method array getAttributes() 获取属性信息。
 * @method void setAttributes(array $Attributes) 设置属性信息。
 * @method array getAllBox() 获取图像的所有主体区域，置信度，以及主体区域类别ID。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAllBox(array $AllBox) 设置图像的所有主体区域，置信度，以及主体区域类别ID。
注意：此字段可能返回 null，表示取不到有效值。
 */
class ObjectInfo extends AbstractModel
{
    /**
     * @var Box 图像主体区域。
     */
    public $Box;

    /**
     * @var integer 主体类别ID。
     */
    public $CategoryId;

    /**
     * @var array 整张图颜色信息。
     */
    public $Colors;

    /**
     * @var array 属性信息。
     */
    public $Attributes;

    /**
     * @var array 图像的所有主体区域，置信度，以及主体区域类别ID。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AllBox;

    /**
     * @param Box $Box 图像主体区域。
     * @param integer $CategoryId 主体类别ID。
     * @param array $Colors 整张图颜色信息。
     * @param array $Attributes 属性信息。
     * @param array $AllBox 图像的所有主体区域，置信度，以及主体区域类别ID。
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
        if (array_key_exists("Box",$param) and $param["Box"] !== null) {
            $this->Box = new Box();
            $this->Box->deserialize($param["Box"]);
        }

        if (array_key_exists("CategoryId",$param) and $param["CategoryId"] !== null) {
            $this->CategoryId = $param["CategoryId"];
        }

        if (array_key_exists("Colors",$param) and $param["Colors"] !== null) {
            $this->Colors = [];
            foreach ($param["Colors"] as $key => $value){
                $obj = new ColorInfo();
                $obj->deserialize($value);
                array_push($this->Colors, $obj);
            }
        }

        if (array_key_exists("Attributes",$param) and $param["Attributes"] !== null) {
            $this->Attributes = [];
            foreach ($param["Attributes"] as $key => $value){
                $obj = new Attribute();
                $obj->deserialize($value);
                array_push($this->Attributes, $obj);
            }
        }

        if (array_key_exists("AllBox",$param) and $param["AllBox"] !== null) {
            $this->AllBox = [];
            foreach ($param["AllBox"] as $key => $value){
                $obj = new Box();
                $obj->deserialize($value);
                array_push($this->AllBox, $obj);
            }
        }
    }
}
