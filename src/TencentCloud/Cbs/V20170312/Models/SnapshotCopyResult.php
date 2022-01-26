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
namespace TencentCloud\Cbs\V20170312\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 描述快照跨地域复制的结果。
 *
 * @method string getSnapshotId() 获取复制到目标地域的新快照ID。
 * @method void setSnapshotId(string $SnapshotId) 设置复制到目标地域的新快照ID。
 * @method string getMessage() 获取指示具体错误信息，成功时为空字符串。
 * @method void setMessage(string $Message) 设置指示具体错误信息，成功时为空字符串。
 * @method string getCode() 获取错误码，成功时取值为“Success”。
 * @method void setCode(string $Code) 设置错误码，成功时取值为“Success”。
 * @method string getDestinationRegion() 获取跨地复制的目标地域。
 * @method void setDestinationRegion(string $DestinationRegion) 设置跨地复制的目标地域。
 */
class SnapshotCopyResult extends AbstractModel
{
    /**
     * @var string 复制到目标地域的新快照ID。
     */
    public $SnapshotId;

    /**
     * @var string 指示具体错误信息，成功时为空字符串。
     */
    public $Message;

    /**
     * @var string 错误码，成功时取值为“Success”。
     */
    public $Code;

    /**
     * @var string 跨地复制的目标地域。
     */
    public $DestinationRegion;

    /**
     * @param string $SnapshotId 复制到目标地域的新快照ID。
     * @param string $Message 指示具体错误信息，成功时为空字符串。
     * @param string $Code 错误码，成功时取值为“Success”。
     * @param string $DestinationRegion 跨地复制的目标地域。
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
        if (array_key_exists("SnapshotId",$param) and $param["SnapshotId"] !== null) {
            $this->SnapshotId = $param["SnapshotId"];
        }

        if (array_key_exists("Message",$param) and $param["Message"] !== null) {
            $this->Message = $param["Message"];
        }

        if (array_key_exists("Code",$param) and $param["Code"] !== null) {
            $this->Code = $param["Code"];
        }

        if (array_key_exists("DestinationRegion",$param) and $param["DestinationRegion"] !== null) {
            $this->DestinationRegion = $param["DestinationRegion"];
        }
    }
}
