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
namespace TencentCloud\Antiddos\V20200309\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeNewL7Rules请求参数结构体
 *
 * @method string getBusiness() 获取大禹子产品代号（bgpip表示高防IP）
 * @method void setBusiness(string $Business) 设置大禹子产品代号（bgpip表示高防IP）
 * @method array getStatusList() 获取状态搜索，选填，取值[0(规则配置成功)，1(规则配置生效中)，2(规则配置失败)，3(规则删除生效中)，5(规则删除失败)，6(规则等待配置)，7(规则等待删除)，8(规则待配置证书)]
 * @method void setStatusList(array $StatusList) 设置状态搜索，选填，取值[0(规则配置成功)，1(规则配置生效中)，2(规则配置失败)，3(规则删除生效中)，5(规则删除失败)，6(规则等待配置)，7(规则等待删除)，8(规则待配置证书)]
 * @method string getDomain() 获取域名搜索，选填，当需要搜索域名请填写
 * @method void setDomain(string $Domain) 设置域名搜索，选填，当需要搜索域名请填写
 * @method string getIp() 获取IP搜索，选填，当需要搜索IP请填写
 * @method void setIp(string $Ip) 设置IP搜索，选填，当需要搜索IP请填写
 * @method integer getLimit() 获取一页条数，填0表示不分页
 * @method void setLimit(integer $Limit) 设置一页条数，填0表示不分页
 * @method integer getOffset() 获取页起始偏移，取值为(页码-1)*一页条数
 * @method void setOffset(integer $Offset) 设置页起始偏移，取值为(页码-1)*一页条数
 * @method array getProtocolList() 获取转发协议搜索，选填，取值[http, https, http/https]
 * @method void setProtocolList(array $ProtocolList) 设置转发协议搜索，选填，取值[http, https, http/https]
 * @method string getCname() 获取高防IP实例的Cname
 * @method void setCname(string $Cname) 设置高防IP实例的Cname
 */
class DescribeNewL7RulesRequest extends AbstractModel
{
    /**
     * @var string 大禹子产品代号（bgpip表示高防IP）
     */
    public $Business;

    /**
     * @var array 状态搜索，选填，取值[0(规则配置成功)，1(规则配置生效中)，2(规则配置失败)，3(规则删除生效中)，5(规则删除失败)，6(规则等待配置)，7(规则等待删除)，8(规则待配置证书)]
     */
    public $StatusList;

    /**
     * @var string 域名搜索，选填，当需要搜索域名请填写
     */
    public $Domain;

    /**
     * @var string IP搜索，选填，当需要搜索IP请填写
     */
    public $Ip;

    /**
     * @var integer 一页条数，填0表示不分页
     */
    public $Limit;

    /**
     * @var integer 页起始偏移，取值为(页码-1)*一页条数
     */
    public $Offset;

    /**
     * @var array 转发协议搜索，选填，取值[http, https, http/https]
     */
    public $ProtocolList;

    /**
     * @var string 高防IP实例的Cname
     */
    public $Cname;

    /**
     * @param string $Business 大禹子产品代号（bgpip表示高防IP）
     * @param array $StatusList 状态搜索，选填，取值[0(规则配置成功)，1(规则配置生效中)，2(规则配置失败)，3(规则删除生效中)，5(规则删除失败)，6(规则等待配置)，7(规则等待删除)，8(规则待配置证书)]
     * @param string $Domain 域名搜索，选填，当需要搜索域名请填写
     * @param string $Ip IP搜索，选填，当需要搜索IP请填写
     * @param integer $Limit 一页条数，填0表示不分页
     * @param integer $Offset 页起始偏移，取值为(页码-1)*一页条数
     * @param array $ProtocolList 转发协议搜索，选填，取值[http, https, http/https]
     * @param string $Cname 高防IP实例的Cname
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
        if (array_key_exists("Business",$param) and $param["Business"] !== null) {
            $this->Business = $param["Business"];
        }

        if (array_key_exists("StatusList",$param) and $param["StatusList"] !== null) {
            $this->StatusList = $param["StatusList"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("ProtocolList",$param) and $param["ProtocolList"] !== null) {
            $this->ProtocolList = $param["ProtocolList"];
        }

        if (array_key_exists("Cname",$param) and $param["Cname"] !== null) {
            $this->Cname = $param["Cname"];
        }
    }
}
