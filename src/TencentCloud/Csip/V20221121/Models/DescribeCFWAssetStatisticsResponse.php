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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCFWAssetStatistics返回参数结构体
 *
 * @method integer getNetworkTotal() 获取网络资产总数
 * @method void setNetworkTotal(integer $NetworkTotal) 设置网络资产总数
 * @method integer getClbTotal() 获取资产clb数量
 * @method void setClbTotal(integer $ClbTotal) 设置资产clb数量
 * @method integer getNatTotal() 获取nat数量
 * @method void setNatTotal(integer $NatTotal) 设置nat数量
 * @method integer getPublicAssetTotal() 获取公网ip数量
 * @method void setPublicAssetTotal(integer $PublicAssetTotal) 设置公网ip数量
 * @method integer getCVMAssetTotal() 获取主机数量
 * @method void setCVMAssetTotal(integer $CVMAssetTotal) 设置主机数量
 * @method integer getCFGTotal() 获取配置风险
 * @method void setCFGTotal(integer $CFGTotal) 设置配置风险
 * @method integer getPortTotal() 获取端口风险
 * @method void setPortTotal(integer $PortTotal) 设置端口风险
 * @method integer getWebsiteTotal() 获取内容风险
 * @method void setWebsiteTotal(integer $WebsiteTotal) 设置内容风险
 * @method integer getServerTotal() 获取风险服务暴露
 * @method void setServerTotal(integer $ServerTotal) 设置风险服务暴露
 * @method integer getWeakPasswordTotal() 获取弱口令风险
 * @method void setWeakPasswordTotal(integer $WeakPasswordTotal) 设置弱口令风险
 * @method integer getVULTotal() 获取漏洞风险
 * @method void setVULTotal(integer $VULTotal) 设置漏洞风险
 * @method string getRequestId() 获取唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 * @method void setRequestId(string $RequestId) 设置唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
 */
class DescribeCFWAssetStatisticsResponse extends AbstractModel
{
    /**
     * @var integer 网络资产总数
     */
    public $NetworkTotal;

    /**
     * @var integer 资产clb数量
     */
    public $ClbTotal;

    /**
     * @var integer nat数量
     */
    public $NatTotal;

    /**
     * @var integer 公网ip数量
     */
    public $PublicAssetTotal;

    /**
     * @var integer 主机数量
     */
    public $CVMAssetTotal;

    /**
     * @var integer 配置风险
     */
    public $CFGTotal;

    /**
     * @var integer 端口风险
     */
    public $PortTotal;

    /**
     * @var integer 内容风险
     */
    public $WebsiteTotal;

    /**
     * @var integer 风险服务暴露
     */
    public $ServerTotal;

    /**
     * @var integer 弱口令风险
     */
    public $WeakPasswordTotal;

    /**
     * @var integer 漏洞风险
     */
    public $VULTotal;

    /**
     * @var string 唯一请求 ID，由服务端生成，每次请求都会返回（若请求因其他原因未能抵达服务端，则该次请求不会获得 RequestId）。定位问题时需要提供该次请求的 RequestId。
     */
    public $RequestId;

    /**
     * @param integer $NetworkTotal 网络资产总数
     * @param integer $ClbTotal 资产clb数量
     * @param integer $NatTotal nat数量
     * @param integer $PublicAssetTotal 公网ip数量
     * @param integer $CVMAssetTotal 主机数量
     * @param integer $CFGTotal 配置风险
     * @param integer $PortTotal 端口风险
     * @param integer $WebsiteTotal 内容风险
     * @param integer $ServerTotal 风险服务暴露
     * @param integer $WeakPasswordTotal 弱口令风险
     * @param integer $VULTotal 漏洞风险
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
        if (array_key_exists("NetworkTotal",$param) and $param["NetworkTotal"] !== null) {
            $this->NetworkTotal = $param["NetworkTotal"];
        }

        if (array_key_exists("ClbTotal",$param) and $param["ClbTotal"] !== null) {
            $this->ClbTotal = $param["ClbTotal"];
        }

        if (array_key_exists("NatTotal",$param) and $param["NatTotal"] !== null) {
            $this->NatTotal = $param["NatTotal"];
        }

        if (array_key_exists("PublicAssetTotal",$param) and $param["PublicAssetTotal"] !== null) {
            $this->PublicAssetTotal = $param["PublicAssetTotal"];
        }

        if (array_key_exists("CVMAssetTotal",$param) and $param["CVMAssetTotal"] !== null) {
            $this->CVMAssetTotal = $param["CVMAssetTotal"];
        }

        if (array_key_exists("CFGTotal",$param) and $param["CFGTotal"] !== null) {
            $this->CFGTotal = $param["CFGTotal"];
        }

        if (array_key_exists("PortTotal",$param) and $param["PortTotal"] !== null) {
            $this->PortTotal = $param["PortTotal"];
        }

        if (array_key_exists("WebsiteTotal",$param) and $param["WebsiteTotal"] !== null) {
            $this->WebsiteTotal = $param["WebsiteTotal"];
        }

        if (array_key_exists("ServerTotal",$param) and $param["ServerTotal"] !== null) {
            $this->ServerTotal = $param["ServerTotal"];
        }

        if (array_key_exists("WeakPasswordTotal",$param) and $param["WeakPasswordTotal"] !== null) {
            $this->WeakPasswordTotal = $param["WeakPasswordTotal"];
        }

        if (array_key_exists("VULTotal",$param) and $param["VULTotal"] !== null) {
            $this->VULTotal = $param["VULTotal"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }
    }
}
