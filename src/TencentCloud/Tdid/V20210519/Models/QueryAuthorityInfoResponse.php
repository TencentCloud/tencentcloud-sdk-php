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
namespace TencentCloud\Tdid\V20210519\Models;
use TencentCloud\Common\AbstractModel;

/**
 * QueryAuthorityInfo返回参数结构体
 *
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getDid() 获取权威机构did
 * @method void setDid(string $Did) 设置权威机构did
 * @method integer getStatus() 获取状态：1为已认证，2为未认证
 * @method void setStatus(integer $Status) 设置状态：1为已认证，2为未认证
 * @method string getDescription() 获取机构备注信息
 * @method void setDescription(string $Description) 设置机构备注信息
 * @method string getRecognizeTime() 获取认证时间
 * @method void setRecognizeTime(string $RecognizeTime) 设置认证时间
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class QueryAuthorityInfoResponse extends AbstractModel
{
    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 权威机构did
     */
    public $Did;

    /**
     * @var integer 状态：1为已认证，2为未认证
     */
    public $Status;

    /**
     * @var string 机构备注信息
     */
    public $Description;

    /**
     * @var string 认证时间
     */
    public $RecognizeTime;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Name 名称
     * @param string $Did 权威机构did
     * @param integer $Status 状态：1为已认证，2为未认证
     * @param string $Description 机构备注信息
     * @param string $RecognizeTime 认证时间
     * @param string $RequestId 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
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

        if (array_key_exists("Did",$param) and $param["Did"] !== null) {
            $this->Did = $param["Did"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RecognizeTime",$param) and $param["RecognizeTime"] !== null) {
            $this->RecognizeTime = $param["RecognizeTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
