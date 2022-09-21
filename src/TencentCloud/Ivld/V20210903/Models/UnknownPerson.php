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
namespace TencentCloud\Ivld\V20210903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 未知人物信息
 *
 * @method array getVideoAppearSet() 获取视觉出现信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVideoAppearSet(array $VideoAppearSet) 设置视觉出现信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getPutLibraryAllowed() 获取未知人物是否可以入库(只有当未知人物人脸小图质量分符合要求时才可入库)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPutLibraryAllowed(boolean $PutLibraryAllowed) 设置未知人物是否可以入库(只有当未知人物人脸小图质量分符合要求时才可入库)
注意：此字段可能返回 null，表示取不到有效值。
 */
class UnknownPerson extends AbstractModel
{
    /**
     * @var array 视觉出现信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VideoAppearSet;

    /**
     * @var boolean 未知人物是否可以入库(只有当未知人物人脸小图质量分符合要求时才可入库)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PutLibraryAllowed;

    /**
     * @param array $VideoAppearSet 视觉出现信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $PutLibraryAllowed 未知人物是否可以入库(只有当未知人物人脸小图质量分符合要求时才可入库)
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
        if (array_key_exists("VideoAppearSet",$param) and $param["VideoAppearSet"] !== null) {
            $this->VideoAppearSet = [];
            foreach ($param["VideoAppearSet"] as $key => $value){
                $obj = new VideoAppearInfo();
                $obj->deserialize($value);
                array_push($this->VideoAppearSet, $obj);
            }
        }

        if (array_key_exists("PutLibraryAllowed",$param) and $param["PutLibraryAllowed"] !== null) {
            $this->PutLibraryAllowed = $param["PutLibraryAllowed"];
        }
    }
}
