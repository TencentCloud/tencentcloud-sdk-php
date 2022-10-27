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
namespace TencentCloud\Dlc\V20210125\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeResultDownload返回参数结构体
 *
 * @method string getPath() 获取下载文件路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPath(string $Path) 设置下载文件路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getStatus() 获取任务状态 init | queue | format | compress | success|  timeout | error
 * @method void setStatus(string $Status) 设置任务状态 init | queue | format | compress | success|  timeout | error
 * @method string getReason() 获取任务异常原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setReason(string $Reason) 设置任务异常原因
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSecretId() 获取临时AK
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecretId(string $SecretId) 设置临时AK
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSecretKey() 获取临时SK
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecretKey(string $SecretKey) 设置临时SK
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getToken() 获取临时Token
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setToken(string $Token) 设置临时Token
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeResultDownloadResponse extends AbstractModel
{
    /**
     * @var string 下载文件路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Path;

    /**
     * @var string 任务状态 init | queue | format | compress | success|  timeout | error
     */
    public $Status;

    /**
     * @var string 任务异常原因
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Reason;

    /**
     * @var string 临时AK
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecretId;

    /**
     * @var string 临时SK
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecretKey;

    /**
     * @var string 临时Token
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Token;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Path 下载文件路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Status 任务状态 init | queue | format | compress | success|  timeout | error
     * @param string $Reason 任务异常原因
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SecretId 临时AK
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SecretKey 临时SK
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Token 临时Token
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
        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Reason",$param) and $param["Reason"] !== null) {
            $this->Reason = $param["Reason"];
        }

        if (array_key_exists("SecretId",$param) and $param["SecretId"] !== null) {
            $this->SecretId = $param["SecretId"];
        }

        if (array_key_exists("SecretKey",$param) and $param["SecretKey"] !== null) {
            $this->SecretKey = $param["SecretKey"];
        }

        if (array_key_exists("Token",$param) and $param["Token"] !== null) {
            $this->Token = $param["Token"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
