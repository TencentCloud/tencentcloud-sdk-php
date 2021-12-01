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
 * 二级标签信息

请注意，二级标签信息可能不包含三级标签(此时L3TagSet为空)。

 *
 * @method string getName() 获取二级标签名
 * @method void setName(string $Name) 设置二级标签名
 * @method array getL3TagSet() 获取从属于此二级标签的三级标签数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setL3TagSet(array $L3TagSet) 设置从属于此二级标签的三级标签数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAppearIndexPairSet() 获取二级标签出现信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppearIndexPairSet(array $AppearIndexPairSet) 设置二级标签出现信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFirstAppear() 获取二级标签首次出现信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstAppear(integer $FirstAppear) 设置二级标签首次出现信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class L2Tag extends AbstractModel
{
    /**
     * @var string 二级标签名
     */
    public $Name;

    /**
     * @var array 从属于此二级标签的三级标签数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $L3TagSet;

    /**
     * @var array 二级标签出现信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppearIndexPairSet;

    /**
     * @var integer 二级标签首次出现信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstAppear;

    /**
     * @param string $Name 二级标签名
     * @param array $L3TagSet 从属于此二级标签的三级标签数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AppearIndexPairSet 二级标签出现信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FirstAppear 二级标签首次出现信息
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("L3TagSet",$param) and $param["L3TagSet"] !== null) {
            $this->L3TagSet = [];
            foreach ($param["L3TagSet"] as $key => $value){
                $obj = new L3Tag();
                $obj->deserialize($value);
                array_push($this->L3TagSet, $obj);
            }
        }

        if (array_key_exists("AppearIndexPairSet",$param) and $param["AppearIndexPairSet"] !== null) {
            $this->AppearIndexPairSet = [];
            foreach ($param["AppearIndexPairSet"] as $key => $value){
                $obj = new AppearIndexPair();
                $obj->deserialize($value);
                array_push($this->AppearIndexPairSet, $obj);
            }
        }

        if (array_key_exists("FirstAppear",$param) and $param["FirstAppear"] !== null) {
            $this->FirstAppear = $param["FirstAppear"];
        }
    }
}
