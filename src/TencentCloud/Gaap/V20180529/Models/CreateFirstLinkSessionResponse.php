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
namespace TencentCloud\Gaap\V20180529\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateFirstLinkSession返回参数结构体
 *
 * @method string getSessionId() 获取加速成功时返回，单次加速唯一会话Id。。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSessionId(string $SessionId) 设置加速成功时返回，单次加速唯一会话Id。。
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDuration() 获取剩余的加速时间，单位秒。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDuration(integer $Duration) 设置剩余的加速时间，单位秒。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class CreateFirstLinkSessionResponse extends AbstractModel
{
    /**
     * @var string 加速成功时返回，单次加速唯一会话Id。。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SessionId;

    /**
     * @var integer 剩余的加速时间，单位秒。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Duration;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $SessionId 加速成功时返回，单次加速唯一会话Id。。
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Duration 剩余的加速时间，单位秒。
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
        if (array_key_exists("SessionId",$param) and $param["SessionId"] !== null) {
            $this->SessionId = $param["SessionId"];
        }

        if (array_key_exists("Duration",$param) and $param["Duration"] !== null) {
            $this->Duration = $param["Duration"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
