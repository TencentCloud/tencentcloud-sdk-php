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
namespace TencentCloud\Cfw\V20190904\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeEnterpriseSecurityGroupRule请求参数结构体
 *
 * @method string getPageNo() 获取分页查询时，显示的当前页的页码。

默认值为1。
 * @method void setPageNo(string $PageNo) 设置分页查询时，显示的当前页的页码。

默认值为1。
 * @method string getPageSize() 获取分页查询时，显示的每页数据的最大条数。

可设置值最大为50。
 * @method void setPageSize(string $PageSize) 设置分页查询时，显示的每页数据的最大条数。

可设置值最大为50。
 * @method string getSourceContent() 获取访问源示例：
net：IP/CIDR(192.168.0.2)
template：参数模板(ipm-dyodhpby)
instance：资产实例(ins-123456)
resourcegroup：资产分组(/全部分组/分组1/子分组1)
tag：资源标签({"Key":"标签key值","Value":"标签Value值"})
region：地域(ap-gaungzhou)
支持通配
 * @method void setSourceContent(string $SourceContent) 设置访问源示例：
net：IP/CIDR(192.168.0.2)
template：参数模板(ipm-dyodhpby)
instance：资产实例(ins-123456)
resourcegroup：资产分组(/全部分组/分组1/子分组1)
tag：资源标签({"Key":"标签key值","Value":"标签Value值"})
region：地域(ap-gaungzhou)
支持通配
 * @method string getDestContent() 获取访问目的示例：
net：IP/CIDR(192.168.0.2)
template：参数模板(ipm-dyodhpby)
instance：资产实例(ins-123456)
resourcegroup：资产分组(/全部分组/分组1/子分组1)
tag：资源标签({"Key":"标签key值","Value":"标签Value值"})
region：地域(ap-gaungzhou)
支持通配
 * @method void setDestContent(string $DestContent) 设置访问目的示例：
net：IP/CIDR(192.168.0.2)
template：参数模板(ipm-dyodhpby)
instance：资产实例(ins-123456)
resourcegroup：资产分组(/全部分组/分组1/子分组1)
tag：资源标签({"Key":"标签key值","Value":"标签Value值"})
region：地域(ap-gaungzhou)
支持通配
 * @method string getDescription() 获取规则描述，支持通配
 * @method void setDescription(string $Description) 设置规则描述，支持通配
 * @method string getRuleAction() 获取访问控制策略中设置的流量通过云防火墙的方式。取值：
accept：放行
drop：拒绝
 * @method void setRuleAction(string $RuleAction) 设置访问控制策略中设置的流量通过云防火墙的方式。取值：
accept：放行
drop：拒绝
 * @method string getEnable() 获取是否启用规则，默认为启用，取值：
true为启用，false为不启用
 * @method void setEnable(string $Enable) 设置是否启用规则，默认为启用，取值：
true为启用，false为不启用
 * @method string getPort() 获取访问控制策略的端口。取值：
-1/-1：全部端口
80：80端口
 * @method void setPort(string $Port) 设置访问控制策略的端口。取值：
-1/-1：全部端口
80：80端口
 * @method string getProtocol() 获取协议；TCP/UDP/ICMP/ANY
 * @method void setProtocol(string $Protocol) 设置协议；TCP/UDP/ICMP/ANY
 * @method string getServiceTemplateId() 获取端口协议类型参数模板id；协议端口模板id；与Protocol,Port互斥
 * @method void setServiceTemplateId(string $ServiceTemplateId) 设置端口协议类型参数模板id；协议端口模板id；与Protocol,Port互斥
 */
class DescribeEnterpriseSecurityGroupRuleRequest extends AbstractModel
{
    /**
     * @var string 分页查询时，显示的当前页的页码。

默认值为1。
     */
    public $PageNo;

    /**
     * @var string 分页查询时，显示的每页数据的最大条数。

可设置值最大为50。
     */
    public $PageSize;

    /**
     * @var string 访问源示例：
net：IP/CIDR(192.168.0.2)
template：参数模板(ipm-dyodhpby)
instance：资产实例(ins-123456)
resourcegroup：资产分组(/全部分组/分组1/子分组1)
tag：资源标签({"Key":"标签key值","Value":"标签Value值"})
region：地域(ap-gaungzhou)
支持通配
     */
    public $SourceContent;

    /**
     * @var string 访问目的示例：
net：IP/CIDR(192.168.0.2)
template：参数模板(ipm-dyodhpby)
instance：资产实例(ins-123456)
resourcegroup：资产分组(/全部分组/分组1/子分组1)
tag：资源标签({"Key":"标签key值","Value":"标签Value值"})
region：地域(ap-gaungzhou)
支持通配
     */
    public $DestContent;

    /**
     * @var string 规则描述，支持通配
     */
    public $Description;

    /**
     * @var string 访问控制策略中设置的流量通过云防火墙的方式。取值：
accept：放行
drop：拒绝
     */
    public $RuleAction;

    /**
     * @var string 是否启用规则，默认为启用，取值：
true为启用，false为不启用
     */
    public $Enable;

    /**
     * @var string 访问控制策略的端口。取值：
-1/-1：全部端口
80：80端口
     */
    public $Port;

    /**
     * @var string 协议；TCP/UDP/ICMP/ANY
     */
    public $Protocol;

    /**
     * @var string 端口协议类型参数模板id；协议端口模板id；与Protocol,Port互斥
     */
    public $ServiceTemplateId;

    /**
     * @param string $PageNo 分页查询时，显示的当前页的页码。

默认值为1。
     * @param string $PageSize 分页查询时，显示的每页数据的最大条数。

可设置值最大为50。
     * @param string $SourceContent 访问源示例：
net：IP/CIDR(192.168.0.2)
template：参数模板(ipm-dyodhpby)
instance：资产实例(ins-123456)
resourcegroup：资产分组(/全部分组/分组1/子分组1)
tag：资源标签({"Key":"标签key值","Value":"标签Value值"})
region：地域(ap-gaungzhou)
支持通配
     * @param string $DestContent 访问目的示例：
net：IP/CIDR(192.168.0.2)
template：参数模板(ipm-dyodhpby)
instance：资产实例(ins-123456)
resourcegroup：资产分组(/全部分组/分组1/子分组1)
tag：资源标签({"Key":"标签key值","Value":"标签Value值"})
region：地域(ap-gaungzhou)
支持通配
     * @param string $Description 规则描述，支持通配
     * @param string $RuleAction 访问控制策略中设置的流量通过云防火墙的方式。取值：
accept：放行
drop：拒绝
     * @param string $Enable 是否启用规则，默认为启用，取值：
true为启用，false为不启用
     * @param string $Port 访问控制策略的端口。取值：
-1/-1：全部端口
80：80端口
     * @param string $Protocol 协议；TCP/UDP/ICMP/ANY
     * @param string $ServiceTemplateId 端口协议类型参数模板id；协议端口模板id；与Protocol,Port互斥
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
        if (array_key_exists("PageNo",$param) and $param["PageNo"] !== null) {
            $this->PageNo = $param["PageNo"];
        }

        if (array_key_exists("PageSize",$param) and $param["PageSize"] !== null) {
            $this->PageSize = $param["PageSize"];
        }

        if (array_key_exists("SourceContent",$param) and $param["SourceContent"] !== null) {
            $this->SourceContent = $param["SourceContent"];
        }

        if (array_key_exists("DestContent",$param) and $param["DestContent"] !== null) {
            $this->DestContent = $param["DestContent"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RuleAction",$param) and $param["RuleAction"] !== null) {
            $this->RuleAction = $param["RuleAction"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Port",$param) and $param["Port"] !== null) {
            $this->Port = $param["Port"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("ServiceTemplateId",$param) and $param["ServiceTemplateId"] !== null) {
            $this->ServiceTemplateId = $param["ServiceTemplateId"];
        }
    }
}
