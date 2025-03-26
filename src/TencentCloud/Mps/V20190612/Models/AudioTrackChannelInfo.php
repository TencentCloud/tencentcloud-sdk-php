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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 音轨信息
 *
 * @method integer getChannelsRemix() 获取是否开启混音，可选值：
0：表示不开启混音
1：表示开启混音
默认值：0
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setChannelsRemix(integer $ChannelsRemix) 设置是否开启混音，可选值：
0：表示不开启混音
1：表示开启混音
默认值：0
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSelectType() 获取合并音轨输入类型，可选值：
trask：表示使用音轨id；
trask_channel： 表示使用音轨id和声道id；
默认：trask。
注意：如果原视频是多声道，建议使用trask_channel。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSelectType(string $SelectType) 设置合并音轨输入类型，可选值：
trask：表示使用音轨id；
trask_channel： 表示使用音轨id和声道id；
默认：trask。
注意：如果原视频是多声道，建议使用trask_channel。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getInputTrackInfo() 获取音轨信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setInputTrackInfo(array $InputTrackInfo) 设置音轨信息
注意：此字段可能返回 null，表示取不到有效值。
 */
class AudioTrackChannelInfo extends AbstractModel
{
    /**
     * @var integer 是否开启混音，可选值：
0：表示不开启混音
1：表示开启混音
默认值：0
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ChannelsRemix;

    /**
     * @var string 合并音轨输入类型，可选值：
trask：表示使用音轨id；
trask_channel： 表示使用音轨id和声道id；
默认：trask。
注意：如果原视频是多声道，建议使用trask_channel。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SelectType;

    /**
     * @var array 音轨信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $InputTrackInfo;

    /**
     * @param integer $ChannelsRemix 是否开启混音，可选值：
0：表示不开启混音
1：表示开启混音
默认值：0
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SelectType 合并音轨输入类型，可选值：
trask：表示使用音轨id；
trask_channel： 表示使用音轨id和声道id；
默认：trask。
注意：如果原视频是多声道，建议使用trask_channel。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $InputTrackInfo 音轨信息
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
        if (array_key_exists("ChannelsRemix",$param) and $param["ChannelsRemix"] !== null) {
            $this->ChannelsRemix = $param["ChannelsRemix"];
        }

        if (array_key_exists("SelectType",$param) and $param["SelectType"] !== null) {
            $this->SelectType = $param["SelectType"];
        }

        if (array_key_exists("InputTrackInfo",$param) and $param["InputTrackInfo"] !== null) {
            $this->InputTrackInfo = [];
            foreach ($param["InputTrackInfo"] as $key => $value){
                $obj = new TrackInfo();
                $obj->deserialize($value);
                array_push($this->InputTrackInfo, $obj);
            }
        }
    }
}
