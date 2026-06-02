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
namespace TencentCloud\Apis\V20240801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用API详情
 *
 * @method string getID() 获取<p>ID</p>
 * @method void setID(string $ID) 设置<p>ID</p>
 * @method string getAgentAppID() 获取<p>应用ID</p>
 * @method void setAgentAppID(string $AgentAppID) 设置<p>应用ID</p>
 * @method string getServiceID() 获取<p>服务ID</p>
 * @method void setServiceID(string $ServiceID) 设置<p>服务ID</p>
 * @method boolean getInvokeLimitConfigStatus() 获取<p>是否限流</p>
 * @method void setInvokeLimitConfigStatus(boolean $InvokeLimitConfigStatus) 设置<p>是否限流</p>
 * @method InvokeLimitConfigDTO getInvokeLimitConfig() 获取<p>限流配置</p>
 * @method void setInvokeLimitConfig(InvokeLimitConfigDTO $InvokeLimitConfig) 设置<p>限流配置</p>
 * @method ServiceVO getServiceVO() 获取<p>服务详情</p>
 * @method void setServiceVO(ServiceVO $ServiceVO) 设置<p>服务详情</p>
 * @method string getRelateTime() 获取<p>关联时间</p>
 * @method void setRelateTime(string $RelateTime) 设置<p>关联时间</p>
 * @method boolean getNeedAuth() 获取<p>是否需要认证</p>
 * @method void setNeedAuth(boolean $NeedAuth) 设置<p>是否需要认证</p>
 * @method string getAgentCredentialID() 获取<p>凭据ID</p>
 * @method void setAgentCredentialID(string $AgentCredentialID) 设置<p>凭据ID</p>
 * @method DescribeAgentCredentialResp getAgentCredentialVO() 获取<p>凭据详情</p>
 * @method void setAgentCredentialVO(DescribeAgentCredentialResp $AgentCredentialVO) 设置<p>凭据详情</p>
 */
class AgentAppServiceVO extends AbstractModel
{
    /**
     * @var string <p>ID</p>
     */
    public $ID;

    /**
     * @var string <p>应用ID</p>
     */
    public $AgentAppID;

    /**
     * @var string <p>服务ID</p>
     */
    public $ServiceID;

    /**
     * @var boolean <p>是否限流</p>
     */
    public $InvokeLimitConfigStatus;

    /**
     * @var InvokeLimitConfigDTO <p>限流配置</p>
     */
    public $InvokeLimitConfig;

    /**
     * @var ServiceVO <p>服务详情</p>
     */
    public $ServiceVO;

    /**
     * @var string <p>关联时间</p>
     */
    public $RelateTime;

    /**
     * @var boolean <p>是否需要认证</p>
     */
    public $NeedAuth;

    /**
     * @var string <p>凭据ID</p>
     */
    public $AgentCredentialID;

    /**
     * @var DescribeAgentCredentialResp <p>凭据详情</p>
     */
    public $AgentCredentialVO;

    /**
     * @param string $ID <p>ID</p>
     * @param string $AgentAppID <p>应用ID</p>
     * @param string $ServiceID <p>服务ID</p>
     * @param boolean $InvokeLimitConfigStatus <p>是否限流</p>
     * @param InvokeLimitConfigDTO $InvokeLimitConfig <p>限流配置</p>
     * @param ServiceVO $ServiceVO <p>服务详情</p>
     * @param string $RelateTime <p>关联时间</p>
     * @param boolean $NeedAuth <p>是否需要认证</p>
     * @param string $AgentCredentialID <p>凭据ID</p>
     * @param DescribeAgentCredentialResp $AgentCredentialVO <p>凭据详情</p>
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("AgentAppID",$param) and $param["AgentAppID"] !== null) {
            $this->AgentAppID = $param["AgentAppID"];
        }

        if (array_key_exists("ServiceID",$param) and $param["ServiceID"] !== null) {
            $this->ServiceID = $param["ServiceID"];
        }

        if (array_key_exists("InvokeLimitConfigStatus",$param) and $param["InvokeLimitConfigStatus"] !== null) {
            $this->InvokeLimitConfigStatus = $param["InvokeLimitConfigStatus"];
        }

        if (array_key_exists("InvokeLimitConfig",$param) and $param["InvokeLimitConfig"] !== null) {
            $this->InvokeLimitConfig = new InvokeLimitConfigDTO();
            $this->InvokeLimitConfig->deserialize($param["InvokeLimitConfig"]);
        }

        if (array_key_exists("ServiceVO",$param) and $param["ServiceVO"] !== null) {
            $this->ServiceVO = new ServiceVO();
            $this->ServiceVO->deserialize($param["ServiceVO"]);
        }

        if (array_key_exists("RelateTime",$param) and $param["RelateTime"] !== null) {
            $this->RelateTime = $param["RelateTime"];
        }

        if (array_key_exists("NeedAuth",$param) and $param["NeedAuth"] !== null) {
            $this->NeedAuth = $param["NeedAuth"];
        }

        if (array_key_exists("AgentCredentialID",$param) and $param["AgentCredentialID"] !== null) {
            $this->AgentCredentialID = $param["AgentCredentialID"];
        }

        if (array_key_exists("AgentCredentialVO",$param) and $param["AgentCredentialVO"] !== null) {
            $this->AgentCredentialVO = new DescribeAgentCredentialResp();
            $this->AgentCredentialVO->deserialize($param["AgentCredentialVO"]);
        }
    }
}
