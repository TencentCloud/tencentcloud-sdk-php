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
 * 一级标签信息

请注意，一级标签信息可能不包含二级标签(此时L2TagSet为空)。在这种情况下，一级标签可直接包含出现信息。
 *
 * @method string getName() 获取一级标签名
 * @method void setName(string $Name) 设置一级标签名
 * @method array getL2TagSet() 获取二级标签数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setL2TagSet(array $L2TagSet) 设置二级标签数组
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getAppearIndexPairSet() 获取一级标签出现信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppearIndexPairSet(array $AppearIndexPairSet) 设置一级标签出现信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getFirstAppear() 获取一级标签首次出现信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFirstAppear(integer $FirstAppear) 设置一级标签首次出现信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class L1Tag extends AbstractModel
{
    /**
     * @var string 一级标签名
     */
    public $Name;

    /**
     * @var array 二级标签数组
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $L2TagSet;

    /**
     * @var array 一级标签出现信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppearIndexPairSet;

    /**
     * @var integer 一级标签首次出现信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FirstAppear;

    /**
     * @param string $Name 一级标签名
     * @param array $L2TagSet 二级标签数组
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $AppearIndexPairSet 一级标签出现信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $FirstAppear 一级标签首次出现信息
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

        if (array_key_exists("L2TagSet",$param) and $param["L2TagSet"] !== null) {
            $this->L2TagSet = [];
            foreach ($param["L2TagSet"] as $key => $value){
                $obj = new L2Tag();
                $obj->deserialize($value);
                array_push($this->L2TagSet, $obj);
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
