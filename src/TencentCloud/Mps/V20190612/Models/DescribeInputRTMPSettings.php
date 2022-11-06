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
 * 查询输入的RTMP配置信息。
 *
 * @method string getAppName() 获取RTMP的推流路径。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAppName(string $AppName) 设置RTMP的推流路径。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStreamKey() 获取RTMP的推流StreamKey。
RTMP的推流地址拼接规则为：rtmp://Ip:1935/AppName/StreamKey
 * @method void setStreamKey(string $StreamKey) 设置RTMP的推流StreamKey。
RTMP的推流地址拼接规则为：rtmp://Ip:1935/AppName/StreamKey
 */
class DescribeInputRTMPSettings extends AbstractModel
{
    /**
     * @var string RTMP的推流路径。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AppName;

    /**
     * @var string RTMP的推流StreamKey。
RTMP的推流地址拼接规则为：rtmp://Ip:1935/AppName/StreamKey
     */
    public $StreamKey;

    /**
     * @param string $AppName RTMP的推流路径。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $StreamKey RTMP的推流StreamKey。
RTMP的推流地址拼接规则为：rtmp://Ip:1935/AppName/StreamKey
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
        if (array_key_exists("AppName",$param) and $param["AppName"] !== null) {
            $this->AppName = $param["AppName"];
        }

        if (array_key_exists("StreamKey",$param) and $param["StreamKey"] !== null) {
            $this->StreamKey = $param["StreamKey"];
        }
    }
}
