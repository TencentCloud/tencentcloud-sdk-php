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
namespace TencentCloud\Cds\V20180420\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeAssetsList请求参数结构体
 *
 * @method integer getLimit() 获取<p>限制数目</p>
 * @method void setLimit(integer $Limit) 设置<p>限制数目</p>
 * @method integer getOffset() 获取<p>偏移量</p>
 * @method void setOffset(integer $Offset) 设置<p>偏移量</p>
 * @method array getSearchValues() 获取<p>实例Id/实例名称/资产名称</p>
 * @method void setSearchValues(array $SearchValues) 设置<p>实例Id/实例名称/资产名称</p>
 * @method string getAssetsType() 获取<p>数据资产类型</p>
 * @method void setAssetsType(string $AssetsType) 设置<p>数据资产类型</p>
 * @method integer getAssetsAddType() 获取<p>查询的资产类型（1:cdb、2:cvm、3:others）</p>
 * @method void setAssetsAddType(integer $AssetsAddType) 设置<p>查询的资产类型（1:cdb、2:cvm、3:others）</p>
 * @method string getRegionId() 获取<p>地域</p>
 * @method void setRegionId(string $RegionId) 设置<p>地域</p>
 * @method integer getPermission() 获取<p>审计权限</p>
 * @method void setPermission(integer $Permission) 设置<p>审计权限</p>
 * @method integer getAliveStatus() 获取<p>状态</p>
 * @method void setAliveStatus(integer $AliveStatus) 设置<p>状态</p>
 * @method integer getCasbOn() 获取<p>1.代理开启 0.代理关闭 -1.全查</p>
 * @method void setCasbOn(integer $CasbOn) 设置<p>1.代理开启 0.代理关闭 -1.全查</p>
 * @method integer getAgentOn() 获取<p>1.Agent开启 0.Agent关闭 -1.全查</p>
 * @method void setAgentOn(integer $AgentOn) 设置<p>1.Agent开启 0.Agent关闭 -1.全查</p>
 * @method integer getCdbOn() 获取<p>0.关闭，1.开启，2.关闭中，3.开启中 -1.全查</p>
 * @method void setCdbOn(integer $CdbOn) 设置<p>0.关闭，1.开启，2.关闭中，3.开启中 -1.全查</p>
 * @method string getExtendCategory() 获取<p>扩展分类，如sensitive，指定查询支持敏感数据识别的资产</p>
 * @method void setExtendCategory(string $ExtendCategory) 设置<p>扩展分类，如sensitive，指定查询支持敏感数据识别的资产</p>
 * @method array getGroupIds() 获取<p>资产组Id（Id=0 暂未分组；id&gt;0 组Id）</p>
 * @method void setGroupIds(array $GroupIds) 设置<p>资产组Id（Id=0 暂未分组；id&gt;0 组Id）</p>
 * @method array getAids() 获取<p>资产Id</p>
 * @method void setAids(array $Aids) 设置<p>资产Id</p>
 * @method integer getBindingState() 获取<p>查询绑定状态（1:查询规则绑定数量；2:查询模型绑定数量）</p>
 * @method void setBindingState(integer $BindingState) 设置<p>查询绑定状态（1:查询规则绑定数量；2:查询模型绑定数量）</p>
 * @method integer getTrafficMirrorOn() 获取<p>网卡是否开启流量审计</p><p>取值范围：[-1, 1]</p>
 * @method void setTrafficMirrorOn(integer $TrafficMirrorOn) 设置<p>网卡是否开启流量审计</p><p>取值范围：[-1, 1]</p>
 */
class DescribeAssetsListRequest extends AbstractModel
{
    /**
     * @var integer <p>限制数目</p>
     */
    public $Limit;

    /**
     * @var integer <p>偏移量</p>
     */
    public $Offset;

    /**
     * @var array <p>实例Id/实例名称/资产名称</p>
     */
    public $SearchValues;

    /**
     * @var string <p>数据资产类型</p>
     */
    public $AssetsType;

    /**
     * @var integer <p>查询的资产类型（1:cdb、2:cvm、3:others）</p>
     */
    public $AssetsAddType;

    /**
     * @var string <p>地域</p>
     */
    public $RegionId;

    /**
     * @var integer <p>审计权限</p>
     */
    public $Permission;

    /**
     * @var integer <p>状态</p>
     */
    public $AliveStatus;

    /**
     * @var integer <p>1.代理开启 0.代理关闭 -1.全查</p>
     */
    public $CasbOn;

    /**
     * @var integer <p>1.Agent开启 0.Agent关闭 -1.全查</p>
     */
    public $AgentOn;

    /**
     * @var integer <p>0.关闭，1.开启，2.关闭中，3.开启中 -1.全查</p>
     */
    public $CdbOn;

    /**
     * @var string <p>扩展分类，如sensitive，指定查询支持敏感数据识别的资产</p>
     */
    public $ExtendCategory;

    /**
     * @var array <p>资产组Id（Id=0 暂未分组；id&gt;0 组Id）</p>
     */
    public $GroupIds;

    /**
     * @var array <p>资产Id</p>
     */
    public $Aids;

    /**
     * @var integer <p>查询绑定状态（1:查询规则绑定数量；2:查询模型绑定数量）</p>
     */
    public $BindingState;

    /**
     * @var integer <p>网卡是否开启流量审计</p><p>取值范围：[-1, 1]</p>
     */
    public $TrafficMirrorOn;

    /**
     * @param integer $Limit <p>限制数目</p>
     * @param integer $Offset <p>偏移量</p>
     * @param array $SearchValues <p>实例Id/实例名称/资产名称</p>
     * @param string $AssetsType <p>数据资产类型</p>
     * @param integer $AssetsAddType <p>查询的资产类型（1:cdb、2:cvm、3:others）</p>
     * @param string $RegionId <p>地域</p>
     * @param integer $Permission <p>审计权限</p>
     * @param integer $AliveStatus <p>状态</p>
     * @param integer $CasbOn <p>1.代理开启 0.代理关闭 -1.全查</p>
     * @param integer $AgentOn <p>1.Agent开启 0.Agent关闭 -1.全查</p>
     * @param integer $CdbOn <p>0.关闭，1.开启，2.关闭中，3.开启中 -1.全查</p>
     * @param string $ExtendCategory <p>扩展分类，如sensitive，指定查询支持敏感数据识别的资产</p>
     * @param array $GroupIds <p>资产组Id（Id=0 暂未分组；id&gt;0 组Id）</p>
     * @param array $Aids <p>资产Id</p>
     * @param integer $BindingState <p>查询绑定状态（1:查询规则绑定数量；2:查询模型绑定数量）</p>
     * @param integer $TrafficMirrorOn <p>网卡是否开启流量审计</p><p>取值范围：[-1, 1]</p>
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
        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("SearchValues",$param) and $param["SearchValues"] !== null) {
            $this->SearchValues = [];
            foreach ($param["SearchValues"] as $key => $value){
                $obj = new NameValueString();
                $obj->deserialize($value);
                array_push($this->SearchValues, $obj);
            }
        }

        if (array_key_exists("AssetsType",$param) and $param["AssetsType"] !== null) {
            $this->AssetsType = $param["AssetsType"];
        }

        if (array_key_exists("AssetsAddType",$param) and $param["AssetsAddType"] !== null) {
            $this->AssetsAddType = $param["AssetsAddType"];
        }

        if (array_key_exists("RegionId",$param) and $param["RegionId"] !== null) {
            $this->RegionId = $param["RegionId"];
        }

        if (array_key_exists("Permission",$param) and $param["Permission"] !== null) {
            $this->Permission = $param["Permission"];
        }

        if (array_key_exists("AliveStatus",$param) and $param["AliveStatus"] !== null) {
            $this->AliveStatus = $param["AliveStatus"];
        }

        if (array_key_exists("CasbOn",$param) and $param["CasbOn"] !== null) {
            $this->CasbOn = $param["CasbOn"];
        }

        if (array_key_exists("AgentOn",$param) and $param["AgentOn"] !== null) {
            $this->AgentOn = $param["AgentOn"];
        }

        if (array_key_exists("CdbOn",$param) and $param["CdbOn"] !== null) {
            $this->CdbOn = $param["CdbOn"];
        }

        if (array_key_exists("ExtendCategory",$param) and $param["ExtendCategory"] !== null) {
            $this->ExtendCategory = $param["ExtendCategory"];
        }

        if (array_key_exists("GroupIds",$param) and $param["GroupIds"] !== null) {
            $this->GroupIds = $param["GroupIds"];
        }

        if (array_key_exists("Aids",$param) and $param["Aids"] !== null) {
            $this->Aids = $param["Aids"];
        }

        if (array_key_exists("BindingState",$param) and $param["BindingState"] !== null) {
            $this->BindingState = $param["BindingState"];
        }

        if (array_key_exists("TrafficMirrorOn",$param) and $param["TrafficMirrorOn"] !== null) {
            $this->TrafficMirrorOn = $param["TrafficMirrorOn"];
        }
    }
}
