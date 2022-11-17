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
 * GetDidDetail返回参数结构体
 *
 * @method string getDid() 获取DID名称
 * @method void setDid(string $Did) 设置DID名称
 * @method string getRemark() 获取备注
 * @method void setRemark(string $Remark) 设置备注
 * @method string getPublicKey() 获取公钥
 * @method void setPublicKey(string $PublicKey) 设置公钥
 * @method integer getAuthorityState() 获取权威认证
 * @method void setAuthorityState(integer $AuthorityState) 设置权威认证
 * @method integer getConsortiumId() 获取联盟ID
 * @method void setConsortiumId(integer $ConsortiumId) 设置联盟ID
 * @method string getConsortiumName() 获取联盟名称
 * @method void setConsortiumName(string $ConsortiumName) 设置联盟名称
 * @method integer getGroupId() 获取群组ID
 * @method void setGroupId(integer $GroupId) 设置群组ID
 * @method string getClusterId() 获取网络ID
 * @method void setClusterId(string $ClusterId) 设置网络ID
 * @method string getResChainId() 获取bcos资源ID
 * @method void setResChainId(string $ResChainId) 设置bcos资源ID
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetDidDetailResponse extends AbstractModel
{
    /**
     * @var string DID名称
     */
    public $Did;

    /**
     * @var string 备注
     */
    public $Remark;

    /**
     * @var string 公钥
     */
    public $PublicKey;

    /**
     * @var integer 权威认证
     */
    public $AuthorityState;

    /**
     * @var integer 联盟ID
     */
    public $ConsortiumId;

    /**
     * @var string 联盟名称
     */
    public $ConsortiumName;

    /**
     * @var integer 群组ID
     */
    public $GroupId;

    /**
     * @var string 网络ID
     */
    public $ClusterId;

    /**
     * @var string bcos资源ID
     */
    public $ResChainId;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Did DID名称
     * @param string $Remark 备注
     * @param string $PublicKey 公钥
     * @param integer $AuthorityState 权威认证
     * @param integer $ConsortiumId 联盟ID
     * @param string $ConsortiumName 联盟名称
     * @param integer $GroupId 群组ID
     * @param string $ClusterId 网络ID
     * @param string $ResChainId bcos资源ID
     * @param string $CreateTime 创建时间
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
        if (array_key_exists("Did",$param) and $param["Did"] !== null) {
            $this->Did = $param["Did"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("PublicKey",$param) and $param["PublicKey"] !== null) {
            $this->PublicKey = $param["PublicKey"];
        }

        if (array_key_exists("AuthorityState",$param) and $param["AuthorityState"] !== null) {
            $this->AuthorityState = $param["AuthorityState"];
        }

        if (array_key_exists("ConsortiumId",$param) and $param["ConsortiumId"] !== null) {
            $this->ConsortiumId = $param["ConsortiumId"];
        }

        if (array_key_exists("ConsortiumName",$param) and $param["ConsortiumName"] !== null) {
            $this->ConsortiumName = $param["ConsortiumName"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("ResChainId",$param) and $param["ResChainId"] !== null) {
            $this->ResChainId = $param["ResChainId"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
