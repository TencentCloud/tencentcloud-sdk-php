<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Vrs\V20200824\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 音色信息列表
 *
 * @method array getVoiceTypeList() 获取音色信息列表
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setVoiceTypeList(array $VoiceTypeList) 设置音色信息列表
注意：此字段可能返回 null，表示取不到有效值。
 */
class VoiceTypeListData extends AbstractModel
{
    /**
     * @var array 音色信息列表
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $VoiceTypeList;

    /**
     * @param array $VoiceTypeList 音色信息列表
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
        if (array_key_exists("VoiceTypeList",$param) and $param["VoiceTypeList"] !== null) {
            $this->VoiceTypeList = [];
            foreach ($param["VoiceTypeList"] as $key => $value){
                $obj = new VoiceTypeInfo();
                $obj->deserialize($value);
                array_push($this->VoiceTypeList, $obj);
            }
        }
    }
}
