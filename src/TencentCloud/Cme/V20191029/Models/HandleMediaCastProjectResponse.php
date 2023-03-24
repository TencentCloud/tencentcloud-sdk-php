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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * HandleMediaCastProject返回参数结构体
 *
 * @method MediaCastPlayInfo getPlayInfo() 获取播放信息，Operation 为 DescribePlayInfo 时返回。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPlayInfo(MediaCastPlayInfo $PlayInfo) 设置播放信息，Operation 为 DescribePlayInfo 时返回。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSourceInfoSet() 获取输入源信息， Operation 为 AddSource 时返回添加成功的输入源信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSourceInfoSet(array $SourceInfoSet) 设置输入源信息， Operation 为 AddSource 时返回添加成功的输入源信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getDestinationInfoSet() 获取输出源信息， Operation 为 AddDestination 时返回添加成功的输出源信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDestinationInfoSet(array $DestinationInfoSet) 设置输出源信息， Operation 为 AddDestination 时返回添加成功的输出源信息。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class HandleMediaCastProjectResponse extends AbstractModel
{
    /**
     * @var MediaCastPlayInfo 播放信息，Operation 为 DescribePlayInfo 时返回。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PlayInfo;

    /**
     * @var array 输入源信息， Operation 为 AddSource 时返回添加成功的输入源信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SourceInfoSet;

    /**
     * @var array 输出源信息， Operation 为 AddDestination 时返回添加成功的输出源信息。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DestinationInfoSet;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param MediaCastPlayInfo $PlayInfo 播放信息，Operation 为 DescribePlayInfo 时返回。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SourceInfoSet 输入源信息， Operation 为 AddSource 时返回添加成功的输入源信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $DestinationInfoSet 输出源信息， Operation 为 AddDestination 时返回添加成功的输出源信息。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
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
        if (array_key_exists("PlayInfo",$param) and $param["PlayInfo"] !== null) {
            $this->PlayInfo = new MediaCastPlayInfo();
            $this->PlayInfo->deserialize($param["PlayInfo"]);
        }

        if (array_key_exists("SourceInfoSet",$param) and $param["SourceInfoSet"] !== null) {
            $this->SourceInfoSet = [];
            foreach ($param["SourceInfoSet"] as $key => $value){
                $obj = new MediaCastSourceInfo();
                $obj->deserialize($value);
                array_push($this->SourceInfoSet, $obj);
            }
        }

        if (array_key_exists("DestinationInfoSet",$param) and $param["DestinationInfoSet"] !== null) {
            $this->DestinationInfoSet = [];
            foreach ($param["DestinationInfoSet"] as $key => $value){
                $obj = new MediaCastDestinationInfo();
                $obj->deserialize($value);
                array_push($this->DestinationInfoSet, $obj);
            }
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
