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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 引擎版本
 *
 * @method string getVersion() 获取引擎版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVersion(string $Version) 设置引擎版本
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImage() 获取运行镜像
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImage(string $Image) 设置运行镜像
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsSupportIntEightQuantization() 获取是否支持int8量化
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsSupportIntEightQuantization(boolean $IsSupportIntEightQuantization) 设置是否支持int8量化
注意：此字段可能返回 null，表示取不到有效值。
 */
class EngineVersion extends AbstractModel
{
    /**
     * @var string 引擎版本
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Version;

    /**
     * @var string 运行镜像
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Image;

    /**
     * @var boolean 是否支持int8量化
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsSupportIntEightQuantization;

    /**
     * @param string $Version 引擎版本
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Image 运行镜像
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsSupportIntEightQuantization 是否支持int8量化
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
        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("Image",$param) and $param["Image"] !== null) {
            $this->Image = $param["Image"];
        }

        if (array_key_exists("IsSupportIntEightQuantization",$param) and $param["IsSupportIntEightQuantization"] !== null) {
            $this->IsSupportIntEightQuantization = $param["IsSupportIntEightQuantization"];
        }
    }
}
