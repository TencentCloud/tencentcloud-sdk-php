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
namespace TencentCloud\Csip\V20221121\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeClusterInstallCommand请求参数结构体
 *
 * @method boolean getIsCloud() 获取<p>是否腾讯云。true：走平行容器 daemonset yaml 安装分支；false：走主机 agent 安装命令分支</p>
 * @method void setIsCloud(boolean $IsCloud) 设置<p>是否腾讯云。true：走平行容器 daemonset yaml 安装分支；false：走主机 agent 安装命令分支</p>
 * @method array getMemberId() 获取<p>集团账号的成员id</p>
 * @method void setMemberId(array $MemberId) 设置<p>集团账号的成员id</p>
 * @method string getNetType() 获取<p>网络类型<br>枚举值：<br>basic：基础网络<br>private：VPC<br>public：公网<br>direct：专线</p>
 * @method void setNetType(string $NetType) 设置<p>网络类型<br>枚举值：<br>basic：基础网络<br>private：VPC<br>public：公网<br>direct：专线</p>
 * @method string getRegionCode() 获取<p>地域编码（NetType=direct 时必填；腾讯云分支用于特殊地域镜像仓库替换）</p>
 * @method void setRegionCode(string $RegionCode) 设置<p>地域编码（NetType=direct 时必填；腾讯云分支用于特殊地域镜像仓库替换）</p>
 * @method string getVpcId() 获取<p>VPC ID（NetType=direct 时必填）<br>参数格式：形如 vpc-xxxxxxxx</p>
 * @method void setVpcId(string $VpcId) 设置<p>VPC ID（NetType=direct 时必填）<br>参数格式：形如 vpc-xxxxxxxx</p>
 * @method string getExpireDate() 获取<p>过期时间<br>参数格式：yyyy-MM-dd（如 2026-12-31）<br>用途：腾讯云分支用于 daemonset yaml 的 cos 下载链接过期时间；非腾讯云分支用于 agent 安装 token 过期时间</p>
 * @method void setExpireDate(string $ExpireDate) 设置<p>过期时间<br>参数格式：yyyy-MM-dd（如 2026-12-31）<br>用途：腾讯云分支用于 daemonset yaml 的 cos 下载链接过期时间；非腾讯云分支用于 agent 安装 token 过期时间</p>
 * @method array getTagIds() 获取<p>csip 标签 ID 列表（非腾讯云分支用，关联安装标签）</p>
 * @method void setTagIds(array $TagIds) 设置<p>csip 标签 ID 列表（非腾讯云分支用，关联安装标签）</p>
 * @method array getClusterCustomParameters() 获取<p>集群自定义参数（腾讯云分支用于替换 daemonset 模板占位符）</p>
 * @method void setClusterCustomParameters(array $ClusterCustomParameters) 设置<p>集群自定义参数（腾讯云分支用于替换 daemonset 模板占位符）</p>
 * @method string getVip() 获取<p>接入 VIP（非腾讯云分支用；NetType=direct 且未传 Vip 时由专线服务自动申请）</p>
 * @method void setVip(string $Vip) 设置<p>接入 VIP（非腾讯云分支用；NetType=direct 且未传 Vip 时由专线服务自动申请）</p>
 */
class DescribeClusterInstallCommandRequest extends AbstractModel
{
    /**
     * @var boolean <p>是否腾讯云。true：走平行容器 daemonset yaml 安装分支；false：走主机 agent 安装命令分支</p>
     */
    public $IsCloud;

    /**
     * @var array <p>集团账号的成员id</p>
     */
    public $MemberId;

    /**
     * @var string <p>网络类型<br>枚举值：<br>basic：基础网络<br>private：VPC<br>public：公网<br>direct：专线</p>
     */
    public $NetType;

    /**
     * @var string <p>地域编码（NetType=direct 时必填；腾讯云分支用于特殊地域镜像仓库替换）</p>
     */
    public $RegionCode;

    /**
     * @var string <p>VPC ID（NetType=direct 时必填）<br>参数格式：形如 vpc-xxxxxxxx</p>
     */
    public $VpcId;

    /**
     * @var string <p>过期时间<br>参数格式：yyyy-MM-dd（如 2026-12-31）<br>用途：腾讯云分支用于 daemonset yaml 的 cos 下载链接过期时间；非腾讯云分支用于 agent 安装 token 过期时间</p>
     */
    public $ExpireDate;

    /**
     * @var array <p>csip 标签 ID 列表（非腾讯云分支用，关联安装标签）</p>
     */
    public $TagIds;

    /**
     * @var array <p>集群自定义参数（腾讯云分支用于替换 daemonset 模板占位符）</p>
     */
    public $ClusterCustomParameters;

    /**
     * @var string <p>接入 VIP（非腾讯云分支用；NetType=direct 且未传 Vip 时由专线服务自动申请）</p>
     */
    public $Vip;

    /**
     * @param boolean $IsCloud <p>是否腾讯云。true：走平行容器 daemonset yaml 安装分支；false：走主机 agent 安装命令分支</p>
     * @param array $MemberId <p>集团账号的成员id</p>
     * @param string $NetType <p>网络类型<br>枚举值：<br>basic：基础网络<br>private：VPC<br>public：公网<br>direct：专线</p>
     * @param string $RegionCode <p>地域编码（NetType=direct 时必填；腾讯云分支用于特殊地域镜像仓库替换）</p>
     * @param string $VpcId <p>VPC ID（NetType=direct 时必填）<br>参数格式：形如 vpc-xxxxxxxx</p>
     * @param string $ExpireDate <p>过期时间<br>参数格式：yyyy-MM-dd（如 2026-12-31）<br>用途：腾讯云分支用于 daemonset yaml 的 cos 下载链接过期时间；非腾讯云分支用于 agent 安装 token 过期时间</p>
     * @param array $TagIds <p>csip 标签 ID 列表（非腾讯云分支用，关联安装标签）</p>
     * @param array $ClusterCustomParameters <p>集群自定义参数（腾讯云分支用于替换 daemonset 模板占位符）</p>
     * @param string $Vip <p>接入 VIP（非腾讯云分支用；NetType=direct 且未传 Vip 时由专线服务自动申请）</p>
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
        if (array_key_exists("IsCloud",$param) and $param["IsCloud"] !== null) {
            $this->IsCloud = $param["IsCloud"];
        }

        if (array_key_exists("MemberId",$param) and $param["MemberId"] !== null) {
            $this->MemberId = $param["MemberId"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("RegionCode",$param) and $param["RegionCode"] !== null) {
            $this->RegionCode = $param["RegionCode"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("ExpireDate",$param) and $param["ExpireDate"] !== null) {
            $this->ExpireDate = $param["ExpireDate"];
        }

        if (array_key_exists("TagIds",$param) and $param["TagIds"] !== null) {
            $this->TagIds = $param["TagIds"];
        }

        if (array_key_exists("ClusterCustomParameters",$param) and $param["ClusterCustomParameters"] !== null) {
            $this->ClusterCustomParameters = [];
            foreach ($param["ClusterCustomParameters"] as $key => $value){
                $obj = new ClusterCustomParameters();
                $obj->deserialize($value);
                array_push($this->ClusterCustomParameters, $obj);
            }
        }

        if (array_key_exists("Vip",$param) and $param["Vip"] !== null) {
            $this->Vip = $param["Vip"];
        }
    }
}
