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
 * CC精准防护策略信息
 *
 * @method string getPolicyId() 获取策略Id
 * @method void setPolicyId(string $PolicyId) 设置策略Id
 * @method string getInstanceId() 获取实例Id
 * @method void setInstanceId(string $InstanceId) 设置实例Id
 * @method string getIp() 获取Ip地址
 * @method void setIp(string $Ip) 设置Ip地址
 * @method string getProtocol() 获取协议
 * @method void setProtocol(string $Protocol) 设置协议
 * @method string getDomain() 获取域名
 * @method void setDomain(string $Domain) 设置域名
 * @method string getPolicyAction() 获取策略方式（丢弃或验证码）
 * @method void setPolicyAction(string $PolicyAction) 设置策略方式（丢弃或验证码）
 * @method array getPolicyList() 获取策略列表
 * @method void setPolicyList(array $PolicyList) 设置策略列表
 * @method string getCreateTime() 获取创建时间
 * @method void setCreateTime(string $CreateTime) 设置创建时间
 * @method string getModifyTime() 获取修改时间
 * @method void setModifyTime(string $ModifyTime) 设置修改时间
 */
class CCPrecisionPolicy extends AbstractModel
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
     * @var string Ip地址
     */
    public $Ip;

    /**
     * @var string 协议
     */
    public $Protocol;

    /**
     * @var string 域名
     */
    public $Domain;

    /**
     * @var string 策略方式（丢弃或验证码）
     */
    public $PolicyAction;

    /**
     * @var array 策略列表
     */
    public $PolicyList;

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
     * @param string $Ip Ip地址
     * @param string $Protocol 协议
     * @param string $Domain 域名
     * @param string $PolicyAction 策略方式（丢弃或验证码）
     * @param array $PolicyList 策略列表
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

        if (array_key_exists("Protocol",$param) and $param["Protocol"] !== null) {
            $this->Protocol = $param["Protocol"];
        }

        if (array_key_exists("Domain",$param) and $param["Domain"] !== null) {
            $this->Domain = $param["Domain"];
        }

        if (array_key_exists("PolicyAction",$param) and $param["PolicyAction"] !== null) {
            $this->PolicyAction = $param["PolicyAction"];
        }

        if (array_key_exists("PolicyList",$param) and $param["PolicyList"] !== null) {
            $this->PolicyList = [];
            foreach ($param["PolicyList"] as $key => $value){
                $obj = new CCPrecisionPlyRecord();
                $obj->deserialize($value);
                array_push($this->PolicyList, $obj);
            }
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ModifyTime",$param) and $param["ModifyTime"] !== null) {
            $this->ModifyTime = $param["ModifyTime"];
        }
    }
}
