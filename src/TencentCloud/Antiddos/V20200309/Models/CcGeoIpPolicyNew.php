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
 * CC地域封禁列表详情
 *
 * @method string getPolicyId() 获取策略Id
 * @method void setPolicyId(string $PolicyId) 设置策略Id
 * @method string getInstanceId() 获取实例Id
 * @method void setInstanceId(string $InstanceId) 设置实例Id
 * @method string getIp() 获取IP地址
 * @method void setIp(string $Ip) 设置IP地址
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getProtocol() 获取协议，可取值HTTP，HTTPS
 * @method void setProtocol(string $Protocol) 设置协议，可取值HTTP，HTTPS
 * @method string getAction() 获取用户动作，drop或alg
 * @method void setAction(string $Action) 设置用户动作，drop或alg
 * @method string getRegionType() 获取地域类型，分为china, oversea与customized
 * @method void setRegionType(string $RegionType) 设置地域类型，分为china, oversea与customized
 * @method array getAreaList() 获取用户选择封禁的地域ID列表
 * @method void setAreaList(array $AreaList) 设置用户选择封禁的地域ID列表
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getModifyTime() 获取修改时间
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
 */
class CcGeoIpPolicyNew extends AbstractModel
{
    /**
     * @var string 策略Id
     */
    public $PolicyId;

    /**
     * @var string 实例Id
     */
    public $InstanceId;

    /**
     * @var string IP地址
     */
    public $Ip;

    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 协议，可取值HTTP，HTTPS
     */
    public $Protocol;

    /**
     * @var string 用户动作，drop或alg
     */
    public $Action;

    /**
     * @var string 地域类型，分为china, oversea与customized
     */
    public $RegionType;

    /**
     * @var array 用户选择封禁的地域ID列表
     */
    public $AreaList;

    /**
     * @var string 创建时间
     */
    public $CreateTime;

    /**
     * @var string 修改时间
     */
    public $ModifyTime;

    /**
     * @param string $PolicyId 策略Id
     * @param string $InstanceId 实例Id
     * @param string $Ip IP地址
     * @param string $Domain 域名
     * @param string $Protocol 协议，可取值HTTP，HTTPS
     * @param string $Action 用户动作，drop或alg
     * @param string $RegionType 地域类型，分为china, oversea与customized
     * @param array $AreaList 用户选择封禁的地域ID列表
     * @param string $CreateTime 创建时间
     * @param string $ModifyTime 修改时间
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
        if (array_key_exists("PolicyId",$param) and $param["PolicyId"] !== null) {
            $this->PolicyId = $param["PolicyId"];
        }

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("Ip",$param) and $param["Ip"] !== null) {
            $this->Ip = $param["Ip"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Action",$param) and $param["Action"] !== null) {
            $this->Action = $param["Action"];
        }

        if (array_key_exists("RegionType",$param) and $param["RegionType"] !== null) {
            $this->RegionType = $param["RegionType"];
        }

        if (array_key_exists("AreaList",$param) and $param["AreaList"] !== null) {
            $this->AreaList = $param["AreaList"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
