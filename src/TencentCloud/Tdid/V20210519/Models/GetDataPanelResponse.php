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
 * GetDataPanel返回参数结构体
 *
 * @method integer getBlockNetworkCount() 获取区块链网络数量
 * @method void setBlockNetworkCount(integer $BlockNetworkCount) 设置区块链网络数量
 * @method string getBlockNetworkName() 获取区块链网络名称
 * @method void setBlockNetworkName(string $BlockNetworkName) 设置区块链网络名称
 * @method integer getBlockHeight() 获取当前区块高度
 * @method void setBlockHeight(integer $BlockHeight) 设置当前区块高度
 * @method integer getBlockNetworkType() 获取区块链网络类型
 * @method void setBlockNetworkType(integer $BlockNetworkType) 设置区块链网络类型
 * @method integer getDidCount() 获取did数量
 * @method void setDidCount(integer $DidCount) 设置did数量
 * @method integer getCptCount() 获取凭证模版数量
 * @method void setCptCount(integer $CptCount) 设置凭证模版数量
 * @method integer getCertificatedAuthCount() 获取已认证权威机构数量
 * @method void setCertificatedAuthCount(integer $CertificatedAuthCount) 设置已认证权威机构数量
 * @method integer getIssueCptCount() 获取颁发凭证数量
 * @method void setIssueCptCount(integer $IssueCptCount) 设置颁发凭证数量
 * @method integer getNewDidCount() 获取本周新增DID数量
 * @method void setNewDidCount(integer $NewDidCount) 设置本周新增DID数量
 * @method integer getBcosCount() 获取BCOS网络类型数量
 * @method void setBcosCount(integer $BcosCount) 设置BCOS网络类型数量
 * @method integer getFabricCount() 获取Fabric网络类型数量
 * @method void setFabricCount(integer $FabricCount) 设置Fabric网络类型数量
 * @method integer getChainMakerCount() 获取长安链网络类型数量
 * @method void setChainMakerCount(integer $ChainMakerCount) 设置长安链网络类型数量
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */
class GetDataPanelResponse extends AbstractModel
{
    /**
     * @var integer 区块链网络数量
     */
    public $BlockNetworkCount;

    /**
     * @var string 区块链网络名称
     */
    public $BlockNetworkName;

    /**
     * @var integer 当前区块高度
     */
    public $BlockHeight;

    /**
     * @var integer 区块链网络类型
     */
    public $BlockNetworkType;

    /**
     * @var integer did数量
     */
    public $DidCount;

    /**
     * @var integer 凭证模版数量
     */
    public $CptCount;

    /**
     * @var integer 已认证权威机构数量
     */
    public $CertificatedAuthCount;

    /**
     * @var integer 颁发凭证数量
     */
    public $IssueCptCount;

    /**
     * @var integer 本周新增DID数量
     */
    public $NewDidCount;

    /**
     * @var integer BCOS网络类型数量
     */
    public $BcosCount;

    /**
     * @var integer Fabric网络类型数量
     */
    public $FabricCount;

    /**
     * @var integer 长安链网络类型数量
     */
    public $ChainMakerCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $BlockNetworkCount 区块链网络数量
     * @param string $BlockNetworkName 区块链网络名称
     * @param integer $BlockHeight 当前区块高度
     * @param integer $BlockNetworkType 区块链网络类型
     * @param integer $DidCount did数量
     * @param integer $CptCount 凭证模版数量
     * @param integer $CertificatedAuthCount 已认证权威机构数量
     * @param integer $IssueCptCount 颁发凭证数量
     * @param integer $NewDidCount 本周新增DID数量
     * @param integer $BcosCount BCOS网络类型数量
     * @param integer $FabricCount Fabric网络类型数量
     * @param integer $ChainMakerCount 长安链网络类型数量
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
        if (array_key_exists("BlockNetworkCount",$param) and $param["BlockNetworkCount"] !== null) {
            $this->BlockNetworkCount = $param["BlockNetworkCount"];
        }

        if (array_key_exists("BlockNetworkName",$param) and $param["BlockNetworkName"] !== null) {
            $this->BlockNetworkName = $param["BlockNetworkName"];
        }

        if (array_key_exists("BlockHeight",$param) and $param["BlockHeight"] !== null) {
            $this->BlockHeight = $param["BlockHeight"];
        }

        if (array_key_exists("BlockNetworkType",$param) and $param["BlockNetworkType"] !== null) {
            $this->BlockNetworkType = $param["BlockNetworkType"];
        }

        if (array_key_exists("DidCount",$param) and $param["DidCount"] !== null) {
            $this->DidCount = $param["DidCount"];
        }

        if (array_key_exists("CptCount",$param) and $param["CptCount"] !== null) {
            $this->CptCount = $param["CptCount"];
        }

        if (array_key_exists("CertificatedAuthCount",$param) and $param["CertificatedAuthCount"] !== null) {
            $this->CertificatedAuthCount = $param["CertificatedAuthCount"];
        }

        if (array_key_exists("IssueCptCount",$param) and $param["IssueCptCount"] !== null) {
            $this->IssueCptCount = $param["IssueCptCount"];
        }

        if (array_key_exists("NewDidCount",$param) and $param["NewDidCount"] !== null) {
            $this->NewDidCount = $param["NewDidCount"];
        }

        if (array_key_exists("BcosCount",$param) and $param["BcosCount"] !== null) {
            $this->BcosCount = $param["BcosCount"];
        }

        if (array_key_exists("FabricCount",$param) and $param["FabricCount"] !== null) {
            $this->FabricCount = $param["FabricCount"];
        }

        if (array_key_exists("ChainMakerCount",$param) and $param["ChainMakerCount"] !== null) {
            $this->ChainMakerCount = $param["ChainMakerCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
