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
 * GetDeployInfo返回参数结构体
 *
 * @method string getHash() 获取合约CNS地址
 * @method void setHash(string $Hash) 设置合约CNS地址
 * @method string getGroupId() 获取合约主群组ID
 * @method void setGroupId(string $GroupId) 设置合约主群组ID
 * @method string getDeployDid() 获取部署机构DID
 * @method void setDeployDid(string $DeployDid) 设置部署机构DID
 * @method string getSdkVersion() 获取TDID SDK版本
 * @method void setSdkVersion(string $SdkVersion) 设置TDID SDK版本
 * @method string getContractVersion() 获取TDID 合约版本
 * @method void setContractVersion(string $ContractVersion) 设置TDID 合约版本
 * @method string getBlockVersion() 获取区块链节点版本
 * @method void setBlockVersion(string $BlockVersion) 设置区块链节点版本
 * @method string getBlockIp() 获取区块链节点IP
 * @method void setBlockIp(string $BlockIp) 设置区块链节点IP
 * @method string getDidAddress() 获取DID合约地址
 * @method void setDidAddress(string $DidAddress) 设置DID合约地址
 * @method string getCptAddress() 获取CPT合约地址
 * @method void setCptAddress(string $CptAddress) 设置CPT合约地址
 * @method string getAuthorityAddress() 获取Authority Issuer地址
 * @method void setAuthorityAddress(string $AuthorityAddress) 设置Authority Issuer地址
 * @method string getEvidenceAddress() 获取Evidence合约地址
 * @method void setEvidenceAddress(string $EvidenceAddress) 设置Evidence合约地址
 * @method string getSpecificAddress() 获取Specific Issuer合约地址
 * @method void setSpecificAddress(string $SpecificAddress) 设置Specific Issuer合约地址
 * @method string getChainId() 获取链ID
 * @method void setChainId(string $ChainId) 设置链ID
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetDeployInfoResponse extends AbstractModel
{
    /**
     * @var string 合约CNS地址
     */
    public $Hash;

    /**
     * @var string 合约主群组ID
     */
    public $GroupId;

    /**
     * @var string 部署机构DID
     */
    public $DeployDid;

    /**
     * @var string TDID SDK版本
     */
    public $SdkVersion;

    /**
     * @var string TDID 合约版本
     */
    public $ContractVersion;

    /**
     * @var string 区块链节点版本
     */
    public $BlockVersion;

    /**
     * @var string 区块链节点IP
     */
    public $BlockIp;

    /**
     * @var string DID合约地址
     */
    public $DidAddress;

    /**
     * @var string CPT合约地址
     */
    public $CptAddress;

    /**
     * @var string Authority Issuer地址
     */
    public $AuthorityAddress;

    /**
     * @var string Evidence合约地址
     */
    public $EvidenceAddress;

    /**
     * @var string Specific Issuer合约地址
     */
    public $SpecificAddress;

    /**
     * @var string 链ID
     */
    public $ChainId;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param string $Hash 合约CNS地址
     * @param string $GroupId 合约主群组ID
     * @param string $DeployDid 部署机构DID
     * @param string $SdkVersion TDID SDK版本
     * @param string $ContractVersion TDID 合约版本
     * @param string $BlockVersion 区块链节点版本
     * @param string $BlockIp 区块链节点IP
     * @param string $DidAddress DID合约地址
     * @param string $CptAddress CPT合约地址
     * @param string $AuthorityAddress Authority Issuer地址
     * @param string $EvidenceAddress Evidence合约地址
     * @param string $SpecificAddress Specific Issuer合约地址
     * @param string $ChainId 链ID
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
        if (array_key_exists("Hash",$param) and $param["Hash"] !== null) {
            $this->Hash = $param["Hash"];
        }

        if (array_key_exists("GroupId",$param) and $param["GroupId"] !== null) {
            $this->GroupId = $param["GroupId"];
        }

        if (array_key_exists("DeployDid",$param) and $param["DeployDid"] !== null) {
            $this->DeployDid = $param["DeployDid"];
        }

        if (array_key_exists("SdkVersion",$param) and $param["SdkVersion"] !== null) {
            $this->SdkVersion = $param["SdkVersion"];
        }

        if (array_key_exists("ContractVersion",$param) and $param["ContractVersion"] !== null) {
            $this->ContractVersion = $param["ContractVersion"];
        }

        if (array_key_exists("BlockVersion",$param) and $param["BlockVersion"] !== null) {
            $this->BlockVersion = $param["BlockVersion"];
        }

        if (array_key_exists("BlockIp",$param) and $param["BlockIp"] !== null) {
            $this->BlockIp = $param["BlockIp"];
        }

        if (array_key_exists("DidAddress",$param) and $param["DidAddress"] !== null) {
            $this->DidAddress = $param["DidAddress"];
        }

        if (array_key_exists("CptAddress",$param) and $param["CptAddress"] !== null) {
            $this->CptAddress = $param["CptAddress"];
        }

        if (array_key_exists("AuthorityAddress",$param) and $param["AuthorityAddress"] !== null) {
            $this->AuthorityAddress = $param["AuthorityAddress"];
        }

        if (array_key_exists("EvidenceAddress",$param) and $param["EvidenceAddress"] !== null) {
            $this->EvidenceAddress = $param["EvidenceAddress"];
        }

        if (array_key_exists("SpecificAddress",$param) and $param["SpecificAddress"] !== null) {
            $this->SpecificAddress = $param["SpecificAddress"];
        }

        if (array_key_exists("ChainId",$param) and $param["ChainId"] !== null) {
            $this->ChainId = $param["ChainId"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
