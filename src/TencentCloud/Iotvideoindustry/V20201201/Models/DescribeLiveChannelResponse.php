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
namespace TencentCloud\Iotvideoindustry\V20201201\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeLiveChannel返回参数结构体
 *
 * @method string getLiveChannelId() 获取频道ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLiveChannelId(string $LiveChannelId) 设置频道ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getLiveChannelName() 获取频道名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLiveChannelName(string $LiveChannelName) 设置频道名称
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLiveChannelType() 获取直播频道类型 1：固定直播；2：移动直播
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLiveChannelType(integer $LiveChannelType) 设置直播频道类型 1：固定直播；2：移动直播
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getLiveStatus() 获取通道直播状态：1: 未推流，2: 推流中
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setLiveStatus(integer $LiveStatus) 设置通道直播状态：1: 未推流，2: 推流中
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPushStreamAddress() 获取推流地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPushStreamAddress(string $PushStreamAddress) 设置推流地址
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(array $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getUpdateTime() 获取修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdateTime(array $UpdateTime) 设置修改时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeLiveChannelResponse extends AbstractModel
{
    /**
     * @var string 频道ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LiveChannelId;

    /**
     * @var string 频道名称
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LiveChannelName;

    /**
     * @var integer 直播频道类型 1：固定直播；2：移动直播
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LiveChannelType;

    /**
     * @var integer 通道直播状态：1: 未推流，2: 推流中
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $LiveStatus;

    /**
     * @var string 推流地址
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PushStreamAddress;

    /**
     * @var array 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var array 修改时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdateTime;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $LiveChannelId 频道ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $LiveChannelName 频道名称
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LiveChannelType 直播频道类型 1：固定直播；2：移动直播
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $LiveStatus 通道直播状态：1: 未推流，2: 推流中
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $PushStreamAddress 推流地址
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $UpdateTime 修改时间
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
        if (array_key_exists("LiveChannelId",$param) and $param["LiveChannelId"] !== null) {
            $this->LiveChannelId = $param["LiveChannelId"];
        }

        if (array_key_exists("LiveChannelName",$param) and $param["LiveChannelName"] !== null) {
            $this->LiveChannelName = $param["LiveChannelName"];
        }

        if (array_key_exists("LiveChannelType",$param) and $param["LiveChannelType"] !== null) {
            $this->LiveChannelType = $param["LiveChannelType"];
        }

        if (array_key_exists("LiveStatus",$param) and $param["LiveStatus"] !== null) {
            $this->LiveStatus = $param["LiveStatus"];
        }

        if (array_key_exists("PushStreamAddress",$param) and $param["PushStreamAddress"] !== null) {
            $this->PushStreamAddress = $param["PushStreamAddress"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("UpdateTime",$param) and $param["UpdateTime"] !== null) {
            $this->UpdateTime = $param["UpdateTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
