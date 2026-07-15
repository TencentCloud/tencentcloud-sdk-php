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
namespace TencentCloud\Cls\V20201016\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyRemoteWriteTask请求参数结构体
 *
 * @method string getTaskId() 获取任务id
 * @method void setTaskId(string $TaskId) 设置任务id
 * @method string getTopicId() 获取日志主题id
 * @method void setTopicId(string $TopicId) 设置日志主题id
 * @method integer getEnable() 获取任务状态
0 关闭 1 开启
 * @method void setEnable(integer $Enable) 设置任务状态
0 关闭 1 开启
 * @method string getName() 获取RemoteWrite任务名称
 * @method void setName(string $Name) 设置RemoteWrite任务名称
 * @method integer getNetType() 获取1 内网 2外网
 * @method void setNetType(integer $NetType) 设置1 内网 2外网
 * @method string getVpcId() 获取私有网络id
 * @method void setVpcId(string $VpcId) 设置私有网络id
 * @method string getTarget() 获取目标服务名称
 * @method void setTarget(string $Target) 设置目标服务名称
 * @method string getRemoteWriteURL() 获取目标地址
 * @method void setRemoteWriteURL(string $RemoteWriteURL) 设置目标地址
 * @method integer getAuthType() 获取0: 无鉴权 1: basic_auth 2: token	
 * @method void setAuthType(integer $AuthType) 设置0: 无鉴权 1: basic_auth 2: token	
 * @method RemoteWriteAuthInfo getAuthInfo() 获取鉴权信息
 * @method void setAuthInfo(RemoteWriteAuthInfo $AuthInfo) 设置鉴权信息
 * @method integer getVirtualGatewayType() 获取后端服务类型
-1 没有
0 CVM
1025 CLB
 * @method void setVirtualGatewayType(integer $VirtualGatewayType) 设置后端服务类型
-1 没有
0 CVM
1025 CLB
 */
class ModifyRemoteWriteTaskRequest extends AbstractModel
{
    /**
     * @var string 任务id
     */
    public $TaskId;

    /**
     * @var string 日志主题id
     */
    public $TopicId;

    /**
     * @var integer 任务状态
0 关闭 1 开启
     */
    public $Enable;

    /**
     * @var string RemoteWrite任务名称
     */
    public $Name;

    /**
     * @var integer 1 内网 2外网
     */
    public $NetType;

    /**
     * @var string 私有网络id
     */
    public $VpcId;

    /**
     * @var string 目标服务名称
     */
    public $Target;

    /**
     * @var string 目标地址
     */
    public $RemoteWriteURL;

    /**
     * @var integer 0: 无鉴权 1: basic_auth 2: token	
     */
    public $AuthType;

    /**
     * @var RemoteWriteAuthInfo 鉴权信息
     */
    public $AuthInfo;

    /**
     * @var integer 后端服务类型
-1 没有
0 CVM
1025 CLB
     */
    public $VirtualGatewayType;

    /**
     * @param string $TaskId 任务id
     * @param string $TopicId 日志主题id
     * @param integer $Enable 任务状态
0 关闭 1 开启
     * @param string $Name RemoteWrite任务名称
     * @param integer $NetType 1 内网 2外网
     * @param string $VpcId 私有网络id
     * @param string $Target 目标服务名称
     * @param string $RemoteWriteURL 目标地址
     * @param integer $AuthType 0: 无鉴权 1: basic_auth 2: token	
     * @param RemoteWriteAuthInfo $AuthInfo 鉴权信息
     * @param integer $VirtualGatewayType 后端服务类型
-1 没有
0 CVM
1025 CLB
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
        if (array_key_exists("TaskId",$param) and $param["TaskId"] !== null) {
            $this->TaskId = $param["TaskId"];
        }

        if (array_key_exists("TopicId",$param) and $param["TopicId"] !== null) {
            $this->TopicId = $param["TopicId"];
        }

        if (array_key_exists("Enable",$param) and $param["Enable"] !== null) {
            $this->Enable = $param["Enable"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("NetType",$param) and $param["NetType"] !== null) {
            $this->NetType = $param["NetType"];
        }

        if (array_key_exists("VpcId",$param) and $param["VpcId"] !== null) {
            $this->VpcId = $param["VpcId"];
        }

        if (array_key_exists("Target",$param) and $param["Target"] !== null) {
            $this->Target = $param["Target"];
        }

        if (array_key_exists("RemoteWriteURL",$param) and $param["RemoteWriteURL"] !== null) {
            $this->RemoteWriteURL = $param["RemoteWriteURL"];
        }

        if (array_key_exists("AuthType",$param) and $param["AuthType"] !== null) {
            $this->AuthType = $param["AuthType"];
        }

        if (array_key_exists("AuthInfo",$param) and $param["AuthInfo"] !== null) {
            $this->AuthInfo = new RemoteWriteAuthInfo();
            $this->AuthInfo->deserialize($param["AuthInfo"]);
        }

        if (array_key_exists("VirtualGatewayType",$param) and $param["VirtualGatewayType"] !== null) {
            $this->VirtualGatewayType = $param["VirtualGatewayType"];
        }
    }
}
