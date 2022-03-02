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
 * GetAuthorityIssuer返回参数结构体
 *
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getClusterId() 获取区块链网络id
 * @method void setClusterId(string $ClusterId) 设置区块链网络id
 * @method integer getGroupId() 获取区块链群组id
 * @method void setGroupId(integer $GroupId) 设置区块链群组id
 * @method string getDid() 获取权威机构did
 * @method void setDid(string $Did) 设置权威机构did
 * @method string getRemark() 获取机构备注信息
 * @method void setRemark(string $Remark) 设置机构备注信息
 * @method string getRegisterTime() 获取注册时间
 * @method void setRegisterTime(string $RegisterTime) 设置注册时间
 * @method string getRecognizeTime() 获取认证时间
 * @method void setRecognizeTime(string $RecognizeTime) 设置认证时间
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetAuthorityIssuerResponse extends AbstractModel
{
    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 区块链网络id
     */
    public $ClusterId;

    /**
     * @var integer 区块链群组id
     */
    public $GroupId;

    /**
     * @var string 权威机构did
     */
    public $Did;

    /**
     * @var string 机构备注信息
     */
    public $Remark;

    /**
     * @var string 注册时间
     */
    public $RegisterTime;

    /**
     * @var string 认证时间
     */
    public $RecognizeTime;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Name 名称
     * @param string $ClusterId 区块链网络id
     * @param integer $GroupId 区块链群组id
     * @param string $Did 权威机构did
     * @param string $Remark 机构备注信息
     * @param string $RegisterTime 注册时间
     * @param string $RecognizeTime 认证时间
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("Did",$param) and $param["Did"] !== null) {
            $this->Did = $param["Did"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("RegisterTime",$param) and $param["RegisterTime"] !== null) {
            $this->RegisterTime = $param["RegisterTime"];
        }

        if (array_key_exists("RecognizeTime",$param) and $param["RecognizeTime"] !== null) {
            $this->RecognizeTime = $param["RecognizeTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
