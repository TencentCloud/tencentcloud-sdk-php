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
namespace TencentCloud\Ssl\V20191205\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UpdateCertificateInstance返回参数结构体
 *
 * @method integer getDeployRecordId() 获取云资源部署任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDeployRecordId(integer $DeployRecordId) 设置云资源部署任务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getDeployStatus() 获取部署状态，1表示部署成功，0表示部署失败
 * @method void setDeployStatus(integer $DeployStatus) 设置部署状态，1表示部署成功，0表示部署失败
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class UpdateCertificateInstanceResponse extends AbstractModel
{
    /**
     * @var integer 云资源部署任务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $DeployRecordId;

    /**
     * @var integer 部署状态，1表示部署成功，0表示部署失败
     */
    public $DeployStatus;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $DeployRecordId 云资源部署任务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $DeployStatus 部署状态，1表示部署成功，0表示部署失败
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
        if (array_key_exists("DeployRecordId",$param) and $param["DeployRecordId"] !== null) {
            $this->DeployRecordId = $param["DeployRecordId"];
        }

        if (array_key_exists("DeployStatus",$param) and $param["DeployStatus"] !== null) {
            $this->DeployStatus = $param["DeployStatus"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
