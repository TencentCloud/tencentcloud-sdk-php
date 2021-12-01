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
 * 标签信息结构体

包含多级(最多三级)标签结果，以及这些标签在识别结果中的出现位置
 *
 * @method array getTagSet() 获取树状标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTagSet(array $TagSet) 设置树状标签信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method AppearInfo getAppearInfo() 获取标签在识别结果中的定位信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppearInfo(AppearInfo $AppearInfo) 设置标签在识别结果中的定位信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class MultiLevelTag extends AbstractModel
{
    /**
     * @var array 树状标签信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $TagSet;

    /**
     * @var AppearInfo 标签在识别结果中的定位信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppearInfo;

    /**
     * @param array $TagSet 树状标签信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param AppearInfo $AppearInfo 标签在识别结果中的定位信息
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
        if (array_key_exists("TagSet",$param) and $param["TagSet"] !== null) {
            $this->TagSet = [];
            foreach ($param["TagSet"] as $key => $value){
                $obj = new L1Tag();
                $obj->deserialize($value);
                array_push($this->TagSet, $obj);
            }
        }

        if (array_key_exists("AppearInfo",$param) and $param["AppearInfo"] !== null) {
            $this->AppearInfo = new AppearInfo();
            $this->AppearInfo->deserialize($param["AppearInfo"]);
        }
    }
}
