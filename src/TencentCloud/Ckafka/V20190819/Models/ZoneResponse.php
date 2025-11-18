<?php
/*
 * Copyright (c) 2017-2025 Tencent. All Rights Reserved.
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
namespace TencentCloud\Ckafka\V20190819\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 查询kafka的zone信息返回的实体
 *
 * @method array getZoneList() 获取<p>zone列表</p>
 * @method void setZoneList(array $ZoneList) 设置<p>zone列表</p>
 * @method integer getMaxBuyInstanceNum() 获取<p>最大购买实例个数</p>
 * @method void setMaxBuyInstanceNum(integer $MaxBuyInstanceNum) 设置<p>最大购买实例个数</p>
 * @method integer getMaxBandwidth() 获取<p>最大购买带宽 单位Mb/s</p>
 * @method void setMaxBandwidth(integer $MaxBandwidth) 设置<p>最大购买带宽 单位Mb/s</p>
 * @method Price getUnitPrice() 获取<p>后付费单位价格</p>
 * @method void setUnitPrice(Price $UnitPrice) 设置<p>后付费单位价格</p>
 * @method Price getMessagePrice() 获取<p>后付费消息单价</p>
 * @method void setMessagePrice(Price $MessagePrice) 设置<p>后付费消息单价</p>
 * @method array getClusterInfo() 获取<p>用户独占集群信息</p>
 * @method void setClusterInfo(array $ClusterInfo) 设置<p>用户独占集群信息</p>
 * @method string getStandard() 获取<p>购买标准版配置</p>
 * @method void setStandard(string $Standard) 设置<p>购买标准版配置</p>
 * @method string getStandardS2() 获取<p>购买标准版S2配置</p>
 * @method void setStandardS2(string $StandardS2) 设置<p>购买标准版S2配置</p>
 * @method string getProfession() 获取<p>购买专业版配置</p>
 * @method void setProfession(string $Profession) 设置<p>购买专业版配置</p>
 * @method string getPhysical() 获取<p>购买物理独占版配置</p>
 * @method void setPhysical(string $Physical) 设置<p>购买物理独占版配置</p>
 * @method string getPublicNetwork() 获取<p>公网带宽 最小3Mbps  最大999Mbps 仅专业版支持填写   已废弃,无实际意义</p>
 * @method void setPublicNetwork(string $PublicNetwork) 设置<p>公网带宽 最小3Mbps  最大999Mbps 仅专业版支持填写   已废弃,无实际意义</p>
 * @method string getPublicNetworkLimit() 获取<p>公网带宽配置</p>
 * @method void setPublicNetworkLimit(string $PublicNetworkLimit) 设置<p>公网带宽配置</p>
 * @method string getRequestId() 获取<p>请求Id</p>
 * @method void setRequestId(string $RequestId) 设置<p>请求Id</p>
 * @method integer getOffset() 获取<p>分页offset</p>
 * @method void setOffset(integer $Offset) 设置<p>分页offset</p>
 * @method integer getLimit() 获取<p>分页limit</p>
 * @method void setLimit(integer $Limit) 设置<p>分页limit</p>
 * @method boolean getForceCheckTag() 获取<p>是否必须录入tag</p>
 * @method void setForceCheckTag(boolean $ForceCheckTag) 设置<p>是否必须录入tag</p>
 */
class ZoneResponse extends AbstractModel
{
    /**
     * @var array <p>zone列表</p>
     */
    public $ZoneList;

    /**
     * @var integer <p>最大购买实例个数</p>
     */
    public $MaxBuyInstanceNum;

    /**
     * @var integer <p>最大购买带宽 单位Mb/s</p>
     */
    public $MaxBandwidth;

    /**
     * @var Price <p>后付费单位价格</p>
     */
    public $UnitPrice;

    /**
     * @var Price <p>后付费消息单价</p>
     */
    public $MessagePrice;

    /**
     * @var array <p>用户独占集群信息</p>
     */
    public $ClusterInfo;

    /**
     * @var string <p>购买标准版配置</p>
     */
    public $Standard;

    /**
     * @var string <p>购买标准版S2配置</p>
     */
    public $StandardS2;

    /**
     * @var string <p>购买专业版配置</p>
     */
    public $Profession;

    /**
     * @var string <p>购买物理独占版配置</p>
     */
    public $Physical;

    /**
     * @var string <p>公网带宽 最小3Mbps  最大999Mbps 仅专业版支持填写   已废弃,无实际意义</p>
     */
    public $PublicNetwork;

    /**
     * @var string <p>公网带宽配置</p>
     */
    public $PublicNetworkLimit;

    /**
     * @var string <p>请求Id</p>
     */
    public $RequestId;

    /**
     * @var integer <p>分页offset</p>
     */
    public $Offset;

    /**
     * @var integer <p>分页limit</p>
     */
    public $Limit;

    /**
     * @var boolean <p>是否必须录入tag</p>
     */
    public $ForceCheckTag;

    /**
     * @param array $ZoneList <p>zone列表</p>
     * @param integer $MaxBuyInstanceNum <p>最大购买实例个数</p>
     * @param integer $MaxBandwidth <p>最大购买带宽 单位Mb/s</p>
     * @param Price $UnitPrice <p>后付费单位价格</p>
     * @param Price $MessagePrice <p>后付费消息单价</p>
     * @param array $ClusterInfo <p>用户独占集群信息</p>
     * @param string $Standard <p>购买标准版配置</p>
     * @param string $StandardS2 <p>购买标准版S2配置</p>
     * @param string $Profession <p>购买专业版配置</p>
     * @param string $Physical <p>购买物理独占版配置</p>
     * @param string $PublicNetwork <p>公网带宽 最小3Mbps  最大999Mbps 仅专业版支持填写   已废弃,无实际意义</p>
     * @param string $PublicNetworkLimit <p>公网带宽配置</p>
     * @param string $RequestId <p>请求Id</p>
     * @param integer $Offset <p>分页offset</p>
     * @param integer $Limit <p>分页limit</p>
     * @param boolean $ForceCheckTag <p>是否必须录入tag</p>
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
        if (array_key_exists("ZoneList",$param) and $param["ZoneList"] !== null) {
            $this->ZoneList = [];
            foreach ($param["ZoneList"] as $key => $value){
                $obj = new ZoneInfo();
                $obj->deserialize($value);
                array_push($this->ZoneList, $obj);
            }
        }

        if (array_key_exists("MaxBuyInstanceNum",$param) and $param["MaxBuyInstanceNum"] !== null) {
            $this->MaxBuyInstanceNum = $param["MaxBuyInstanceNum"];
        }

        if (array_key_exists("MaxBandwidth",$param) and $param["MaxBandwidth"] !== null) {
            $this->MaxBandwidth = $param["MaxBandwidth"];
        }

        if (array_key_exists("UnitPrice",$param) and $param["UnitPrice"] !== null) {
            $this->UnitPrice = new Price();
            $this->UnitPrice->deserialize($param["UnitPrice"]);
        }

        if (array_key_exists("MessagePrice",$param) and $param["MessagePrice"] !== null) {
            $this->MessagePrice = new Price();
            $this->MessagePrice->deserialize($param["MessagePrice"]);
        }

        if (array_key_exists("ClusterInfo",$param) and $param["ClusterInfo"] !== null) {
            $this->ClusterInfo = [];
            foreach ($param["ClusterInfo"] as $key => $value){
                $obj = new ClusterInfo();
                $obj->deserialize($value);
                array_push($this->ClusterInfo, $obj);
            }
        }

        if (array_key_exists("Standard",$param) and $param["Standard"] !== null) {
            $this->Standard = $param["Standard"];
        }

        if (array_key_exists("StandardS2",$param) and $param["StandardS2"] !== null) {
            $this->StandardS2 = $param["StandardS2"];
        }

        if (array_key_exists("Profession",$param) and $param["Profession"] !== null) {
            $this->Profession = $param["Profession"];
        }

        if (array_key_exists("Physical",$param) and $param["Physical"] !== null) {
            $this->Physical = $param["Physical"];
        }

        if (array_key_exists("PublicNetwork",$param) and $param["PublicNetwork"] !== null) {
            $this->PublicNetwork = $param["PublicNetwork"];
        }

        if (array_key_exists("PublicNetworkLimit",$param) and $param["PublicNetworkLimit"] !== null) {
            $this->PublicNetworkLimit = $param["PublicNetworkLimit"];
        }

        if (array_key_exists("RequestId",$param) and $param["RequestId"] !== null) {
            $this->RequestId = $param["RequestId"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("ForceCheckTag",$param) and $param["ForceCheckTag"] !== null) {
            $this->ForceCheckTag = $param["ForceCheckTag"];
        }
    }
}
