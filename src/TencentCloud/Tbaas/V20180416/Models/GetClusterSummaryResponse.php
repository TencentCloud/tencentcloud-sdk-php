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
namespace TencentCloud\Tbaas\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * @method integer getTotalChannelCount() 获取网络通道总数量
 * @method void setTotalChannelCount(integer $TotalChannelCount) 设置网络通道总数量
 * @method integer getMyChannelCount() 获取当前组织创建的通道数量
 * @method void setMyChannelCount(integer $MyChannelCount) 设置当前组织创建的通道数量
 * @method integer getOtherChannelCount() 获取其组织创建的通道数量
 * @method void setOtherChannelCount(integer $OtherChannelCount) 设置其组织创建的通道数量
 * @method integer getJoinChannelCount() 获取当前组织加入的通道数量
 * @method void setJoinChannelCount(integer $JoinChannelCount) 设置当前组织加入的通道数量
 * @method integer getNoneChannelCount() 获取与当前组织无关的通道数量
 * @method void setNoneChannelCount(integer $NoneChannelCount) 设置与当前组织无关的通道数量
 * @method integer getTotalPeerCount() 获取网络节点总数量
 * @method void setTotalPeerCount(integer $TotalPeerCount) 设置网络节点总数量
 * @method integer getMyPeerCount() 获取当前组织创建的节点数量
 * @method void setMyPeerCount(integer $MyPeerCount) 设置当前组织创建的节点数量
 * @method integer getOtherPeerCount() 获取其他组织创建的节点数量
 * @method void setOtherPeerCount(integer $OtherPeerCount) 设置其他组织创建的节点数量
 * @method integer getTotalGroupCount() 获取网络组织总数量
 * @method void setTotalGroupCount(integer $TotalGroupCount) 设置网络组织总数量
 * @method integer getMyGroupCount() 获取当前组织创建的组织数量
 * @method void setMyGroupCount(integer $MyGroupCount) 设置当前组织创建的组织数量
 * @method integer getOtherGroupCount() 获取其他组织创建的组织数量
 * @method void setOtherGroupCount(integer $OtherGroupCount) 设置其他组织创建的组织数量
 * @method integer getTotalChaincodeCount() 获取网络智能合约总数量
 * @method void setTotalChaincodeCount(integer $TotalChaincodeCount) 设置网络智能合约总数量
 * @method integer getRecentChaincodeCount() 获取最近7天发起的智能合约数量
 * @method void setRecentChaincodeCount(integer $RecentChaincodeCount) 设置最近7天发起的智能合约数量
 * @method integer getMyChaincodeCount() 获取当前组织发起的智能合约数量
 * @method void setMyChaincodeCount(integer $MyChaincodeCount) 设置当前组织发起的智能合约数量
 * @method integer getOtherChaincodeCount() 获取其组织发起的智能合约数量
 * @method void setOtherChaincodeCount(integer $OtherChaincodeCount) 设置其组织发起的智能合约数量
 * @method integer getTotalCertCount() 获取当前组织的证书总数量
 * @method void setTotalCertCount(integer $TotalCertCount) 设置当前组织的证书总数量
 * @method integer getTlsCertCount() 获取颁发给当前组织的证书数量
 * @method void setTlsCertCount(integer $TlsCertCount) 设置颁发给当前组织的证书数量
 * @method integer getPeerCertCount() 获取网络背书节点证书数量
 * @method void setPeerCertCount(integer $PeerCertCount) 设置网络背书节点证书数量
 * @method integer getOrderCertCount() 获取网络排序节点证书数量
 * @method void setOrderCertCount(integer $OrderCertCount) 设置网络排序节点证书数量
 * @method integer getClientCertCount() 获取当前组织业务证书数量
 * @method void setClientCertCount(integer $ClientCertCount) 设置当前组织业务证书数量
 * @method string getRequestId() 获取唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
 */

/**
 *GetClusterSummary返回参数结构体
 */
class GetClusterSummaryResponse extends AbstractModel
{
    /**
     * @var integer 网络通道总数量
     */
    public $TotalChannelCount;

    /**
     * @var integer 当前组织创建的通道数量
     */
    public $MyChannelCount;

    /**
     * @var integer 其组织创建的通道数量
     */
    public $OtherChannelCount;

    /**
     * @var integer 当前组织加入的通道数量
     */
    public $JoinChannelCount;

    /**
     * @var integer 与当前组织无关的通道数量
     */
    public $NoneChannelCount;

    /**
     * @var integer 网络节点总数量
     */
    public $TotalPeerCount;

    /**
     * @var integer 当前组织创建的节点数量
     */
    public $MyPeerCount;

    /**
     * @var integer 其他组织创建的节点数量
     */
    public $OtherPeerCount;

    /**
     * @var integer 网络组织总数量
     */
    public $TotalGroupCount;

    /**
     * @var integer 当前组织创建的组织数量
     */
    public $MyGroupCount;

    /**
     * @var integer 其他组织创建的组织数量
     */
    public $OtherGroupCount;

    /**
     * @var integer 网络智能合约总数量
     */
    public $TotalChaincodeCount;

    /**
     * @var integer 最近7天发起的智能合约数量
     */
    public $RecentChaincodeCount;

    /**
     * @var integer 当前组织发起的智能合约数量
     */
    public $MyChaincodeCount;

    /**
     * @var integer 其组织发起的智能合约数量
     */
    public $OtherChaincodeCount;

    /**
     * @var integer 当前组织的证书总数量
     */
    public $TotalCertCount;

    /**
     * @var integer 颁发给当前组织的证书数量
     */
    public $TlsCertCount;

    /**
     * @var integer 网络背书节点证书数量
     */
    public $PeerCertCount;

    /**
     * @var integer 网络排序节点证书数量
     */
    public $OrderCertCount;

    /**
     * @var integer 当前组织业务证书数量
     */
    public $ClientCertCount;

    /**
     * @var string 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;
    /**
     * @param integer $TotalChannelCount 网络通道总数量
     * @param integer $MyChannelCount 当前组织创建的通道数量
     * @param integer $OtherChannelCount 其组织创建的通道数量
     * @param integer $JoinChannelCount 当前组织加入的通道数量
     * @param integer $NoneChannelCount 与当前组织无关的通道数量
     * @param integer $TotalPeerCount 网络节点总数量
     * @param integer $MyPeerCount 当前组织创建的节点数量
     * @param integer $OtherPeerCount 其他组织创建的节点数量
     * @param integer $TotalGroupCount 网络组织总数量
     * @param integer $MyGroupCount 当前组织创建的组织数量
     * @param integer $OtherGroupCount 其他组织创建的组织数量
     * @param integer $TotalChaincodeCount 网络智能合约总数量
     * @param integer $RecentChaincodeCount 最近7天发起的智能合约数量
     * @param integer $MyChaincodeCount 当前组织发起的智能合约数量
     * @param integer $OtherChaincodeCount 其组织发起的智能合约数量
     * @param integer $TotalCertCount 当前组织的证书总数量
     * @param integer $TlsCertCount 颁发给当前组织的证书数量
     * @param integer $PeerCertCount 网络背书节点证书数量
     * @param integer $OrderCertCount 网络排序节点证书数量
     * @param integer $ClientCertCount 当前组织业务证书数量
     * @param string $RequestId 唯一请求 ID，每次请求都会返回。定位问题时需要提供该次请求的 RequestId。
     */
    function __construct()
    {

    }
    /**
     * 内部实现，用户禁止调用
     */
    public function deserialize($param)
    {
        if ($param === null) {
            return;
        }
        if (array_key_exists("TotalChannelCount",$param) and $param["TotalChannelCount"] !== null) {
            $this->TotalChannelCount = $param["TotalChannelCount"];
        }

        if (array_key_exists("MyChannelCount",$param) and $param["MyChannelCount"] !== null) {
            $this->MyChannelCount = $param["MyChannelCount"];
        }

        if (array_key_exists("OtherChannelCount",$param) and $param["OtherChannelCount"] !== null) {
            $this->OtherChannelCount = $param["OtherChannelCount"];
        }

        if (array_key_exists("JoinChannelCount",$param) and $param["JoinChannelCount"] !== null) {
            $this->JoinChannelCount = $param["JoinChannelCount"];
        }

        if (array_key_exists("NoneChannelCount",$param) and $param["NoneChannelCount"] !== null) {
            $this->NoneChannelCount = $param["NoneChannelCount"];
        }

        if (array_key_exists("TotalPeerCount",$param) and $param["TotalPeerCount"] !== null) {
            $this->TotalPeerCount = $param["TotalPeerCount"];
        }

        if (array_key_exists("MyPeerCount",$param) and $param["MyPeerCount"] !== null) {
            $this->MyPeerCount = $param["MyPeerCount"];
        }

        if (array_key_exists("OtherPeerCount",$param) and $param["OtherPeerCount"] !== null) {
            $this->OtherPeerCount = $param["OtherPeerCount"];
        }

        if (array_key_exists("TotalGroupCount",$param) and $param["TotalGroupCount"] !== null) {
            $this->TotalGroupCount = $param["TotalGroupCount"];
        }

        if (array_key_exists("MyGroupCount",$param) and $param["MyGroupCount"] !== null) {
            $this->MyGroupCount = $param["MyGroupCount"];
        }

        if (array_key_exists("OtherGroupCount",$param) and $param["OtherGroupCount"] !== null) {
            $this->OtherGroupCount = $param["OtherGroupCount"];
        }

        if (array_key_exists("TotalChaincodeCount",$param) and $param["TotalChaincodeCount"] !== null) {
            $this->TotalChaincodeCount = $param["TotalChaincodeCount"];
        }

        if (array_key_exists("RecentChaincodeCount",$param) and $param["RecentChaincodeCount"] !== null) {
            $this->RecentChaincodeCount = $param["RecentChaincodeCount"];
        }

        if (array_key_exists("MyChaincodeCount",$param) and $param["MyChaincodeCount"] !== null) {
            $this->MyChaincodeCount = $param["MyChaincodeCount"];
        }

        if (array_key_exists("OtherChaincodeCount",$param) and $param["OtherChaincodeCount"] !== null) {
            $this->OtherChaincodeCount = $param["OtherChaincodeCount"];
        }

        if (array_key_exists("TotalCertCount",$param) and $param["TotalCertCount"] !== null) {
            $this->TotalCertCount = $param["TotalCertCount"];
        }

        if (array_key_exists("TlsCertCount",$param) and $param["TlsCertCount"] !== null) {
            $this->TlsCertCount = $param["TlsCertCount"];
        }

        if (array_key_exists("PeerCertCount",$param) and $param["PeerCertCount"] !== null) {
            $this->PeerCertCount = $param["PeerCertCount"];
        }

        if (array_key_exists("OrderCertCount",$param) and $param["OrderCertCount"] !== null) {
            $this->OrderCertCount = $param["OrderCertCount"];
        }

        if (array_key_exists("ClientCertCount",$param) and $param["ClientCertCount"] !== null) {
            $this->ClientCertCount = $param["ClientCertCount"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
