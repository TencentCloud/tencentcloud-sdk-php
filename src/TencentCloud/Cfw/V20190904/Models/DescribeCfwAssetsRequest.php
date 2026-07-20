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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCfwAssets请求参数结构体
 *
 * @method string getAssetType() 获取<p>资产类型。可选，默认 host；枚举 host 主机资产、vpc VPC 网络、subnet 子网。</p>
 * @method void setAssetType(string $AssetType) 设置<p>资产类型。可选，默认 host；枚举 host 主机资产、vpc VPC 网络、subnet 子网。</p>
 * @method string getIp() 获取<p>IP 地址过滤。可选，支持部分匹配；适用于 host。</p>
 * @method void setIp(string $Ip) 设置<p>IP 地址过滤。可选，支持部分匹配；适用于 host。</p>
 * @method string getInstanceId() 获取<p>实例 ID 过滤。可选，适用于 host。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>实例 ID 过滤。可选，适用于 host。</p>
 * @method string getVpcId() 获取<p>VPC ID 过滤。可选，适用于 host、vpc、subnet。</p>
 * @method void setVpcId(string $VpcId) 设置<p>VPC ID 过滤。可选，适用于 host、vpc、subnet。</p>
 * @method string getSubnetId() 获取<p>子网 ID 过滤。可选，适用于 host、subnet。</p>
 * @method void setSubnetId(string $SubnetId) 设置<p>子网 ID 过滤。可选，适用于 host、subnet。</p>
 * @method string getInstanceType() 获取<p>实例类型过滤。可选，适用于 host；常见值包括 CVM、CLB、ENI、POD、MYSQL、REDIS、MARIADB、NAT、VPN、HAVIP、NATFW、GAAP、DC。</p>
 * @method void setInstanceType(string $InstanceType) 设置<p>实例类型过滤。可选，适用于 host；常见值包括 CVM、CLB、ENI、POD、MYSQL、REDIS、MARIADB、NAT、VPN、HAVIP、NATFW、GAAP、DC。</p>
 * @method integer getLimit() 获取<p>最大返回资产数。可选，默认 100，最大 1000。</p>
 * @method void setLimit(integer $Limit) 设置<p>最大返回资产数。可选，默认 100，最大 1000。</p>
 * @method string getNextToken() 获取<p>上一页 Response.Data 返回的不透明资产或指纹续查 token。首次查询不传；续查时只传 NextToken，不能同时传 AssetType、过滤条件或 Limit。调用方无需区分 token 类型；无效、篡改或租户不匹配会被拒绝。</p>
 * @method void setNextToken(string $NextToken) 设置<p>上一页 Response.Data 返回的不透明资产或指纹续查 token。首次查询不传；续查时只传 NextToken，不能同时传 AssetType、过滤条件或 Limit。调用方无需区分 token 类型；无效、篡改或租户不匹配会被拒绝。</p>
 */
class DescribeCfwAssetsRequest extends AbstractModel
{
    /**
     * @var string <p>资产类型。可选，默认 host；枚举 host 主机资产、vpc VPC 网络、subnet 子网。</p>
     */
    public $AssetType;

    /**
     * @var string <p>IP 地址过滤。可选，支持部分匹配；适用于 host。</p>
     */
    public $Ip;

    /**
     * @var string <p>实例 ID 过滤。可选，适用于 host。</p>
     */
    public $InstanceId;

    /**
     * @var string <p>VPC ID 过滤。可选，适用于 host、vpc、subnet。</p>
     */
    public $VpcId;

    /**
     * @var string <p>子网 ID 过滤。可选，适用于 host、subnet。</p>
     */
    public $SubnetId;

    /**
     * @var string <p>实例类型过滤。可选，适用于 host；常见值包括 CVM、CLB、ENI、POD、MYSQL、REDIS、MARIADB、NAT、VPN、HAVIP、NATFW、GAAP、DC。</p>
     */
    public $InstanceType;

    /**
     * @var integer <p>最大返回资产数。可选，默认 100，最大 1000。</p>
     */
    public $Limit;

    /**
     * @var string <p>上一页 Response.Data 返回的不透明资产或指纹续查 token。首次查询不传；续查时只传 NextToken，不能同时传 AssetType、过滤条件或 Limit。调用方无需区分 token 类型；无效、篡改或租户不匹配会被拒绝。</p>
     */
    public $NextToken;

    /**
     * @param string $AssetType <p>资产类型。可选，默认 host；枚举 host 主机资产、vpc VPC 网络、subnet 子网。</p>
     * @param string $Ip <p>IP 地址过滤。可选，支持部分匹配；适用于 host。</p>
     * @param string $InstanceId <p>实例 ID 过滤。可选，适用于 host。</p>
     * @param string $VpcId <p>VPC ID 过滤。可选，适用于 host、vpc、subnet。</p>
     * @param string $SubnetId <p>子网 ID 过滤。可选，适用于 host、subnet。</p>
     * @param string $InstanceType <p>实例类型过滤。可选，适用于 host；常见值包括 CVM、CLB、ENI、POD、MYSQL、REDIS、MARIADB、NAT、VPN、HAVIP、NATFW、GAAP、DC。</p>
     * @param integer $Limit <p>最大返回资产数。可选，默认 100，最大 1000。</p>
     * @param string $NextToken <p>上一页 Response.Data 返回的不透明资产或指纹续查 token。首次查询不传；续查时只传 NextToken，不能同时传 AssetType、过滤条件或 Limit。调用方无需区分 token 类型；无效、篡改或租户不匹配会被拒绝。</p>
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
        if (array_key_exists("AssetType",$param) and $param["AssetType"] !== null) {
            $this->AssetType = $param["AssetType"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("SubnetId",$param) and $param["SubnetId"] !== null) {
            $this->SubnetId = $param["SubnetId"];
        }

        if (array_key_exists("InstanceType",$param) and $param["InstanceType"] !== null) {
            $this->InstanceType = $param["InstanceType"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("NextToken",$param) and $param["NextToken"] !== null) {
            $this->NextToken = $param["NextToken"];
        }
    }
}
