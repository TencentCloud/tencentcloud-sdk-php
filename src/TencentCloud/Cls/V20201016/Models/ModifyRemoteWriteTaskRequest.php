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
 * @method string getTaskId() 获取<p>任务id</p>
 * @method void setTaskId(string $TaskId) 设置<p>任务id</p>
 * @method string getTopicId() 获取<p>日志主题id</p>
 * @method void setTopicId(string $TopicId) 设置<p>日志主题id</p>
 * @method integer getEnable() 获取<p>任务状态<br>0 关闭 1 开启</p>
 * @method void setEnable(integer $Enable) 设置<p>任务状态<br>0 关闭 1 开启</p>
 * @method string getName() 获取<p>RemoteWrite任务名称</p>
 * @method void setName(string $Name) 设置<p>RemoteWrite任务名称</p>
 * @method integer getNetType() 获取<p>1 内网 2外网</p>
 * @method void setNetType(integer $NetType) 设置<p>1 内网 2外网</p>
 * @method string getVpcId() 获取<p>私有网络id</p>
 * @method void setVpcId(string $VpcId) 设置<p>私有网络id</p>
 * @method string getTarget() 获取<p>目标服务名称</p>
 * @method void setTarget(string $Target) 设置<p>目标服务名称</p>
 * @method string getRemoteWriteURL() 获取<p>目标地址</p>
 * @method void setRemoteWriteURL(string $RemoteWriteURL) 设置<p>目标地址</p>
 * @method integer getAuthType() 获取<p>0: 无鉴权 1: basic_auth 2: token</p>
 * @method void setAuthType(integer $AuthType) 设置<p>0: 无鉴权 1: basic_auth 2: token</p>
 * @method RemoteWriteAuthInfo getAuthInfo() 获取<p>鉴权信息</p>
 * @method void setAuthInfo(RemoteWriteAuthInfo $AuthInfo) 设置<p>鉴权信息</p>
 * @method integer getVirtualGatewayType() 获取<p>后端服务类型<br>-1 没有<br>0 CVM<br>1025 CLB</p>
 * @method void setVirtualGatewayType(integer $VirtualGatewayType) 设置<p>后端服务类型<br>-1 没有<br>0 CVM<br>1025 CLB</p>
 * @method string getInstanceId() 获取<p>云时序数据库实例ID</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>云时序数据库实例ID</p>
 * @method integer getHasServicesLog() 获取<p>是否开启投递服务日志。1：关闭，2：开启。</p>
 * @method void setHasServicesLog(integer $HasServicesLog) 设置<p>是否开启投递服务日志。1：关闭，2：开启。</p>
 */
class ModifyRemoteWriteTaskRequest extends AbstractModel
{
    /**
     * @var string <p>任务id</p>
     */
    public $TaskId;

    /**
     * @var string <p>日志主题id</p>
     */
    public $TopicId;

    /**
     * @var integer <p>任务状态<br>0 关闭 1 开启</p>
     */
    public $Enable;

    /**
     * @var string <p>RemoteWrite任务名称</p>
     */
    public $Name;

    /**
     * @var integer <p>1 内网 2外网</p>
     */
    public $NetType;

    /**
     * @var string <p>私有网络id</p>
     */
    public $VpcId;

    /**
     * @var string <p>目标服务名称</p>
     */
    public $Target;

    /**
     * @var string <p>目标地址</p>
     */
    public $RemoteWriteURL;

    /**
     * @var integer <p>0: 无鉴权 1: basic_auth 2: token</p>
     */
    public $AuthType;

    /**
     * @var RemoteWriteAuthInfo <p>鉴权信息</p>
     */
    public $AuthInfo;

    /**
     * @var integer <p>后端服务类型<br>-1 没有<br>0 CVM<br>1025 CLB</p>
     */
    public $VirtualGatewayType;

    /**
     * @var string <p>云时序数据库实例ID</p>
     */
    public $InstanceId;

    /**
     * @var integer <p>是否开启投递服务日志。1：关闭，2：开启。</p>
     */
    public $HasServicesLog;

    /**
     * @param string $TaskId <p>任务id</p>
     * @param string $TopicId <p>日志主题id</p>
     * @param integer $Enable <p>任务状态<br>0 关闭 1 开启</p>
     * @param string $Name <p>RemoteWrite任务名称</p>
     * @param integer $NetType <p>1 内网 2外网</p>
     * @param string $VpcId <p>私有网络id</p>
     * @param string $Target <p>目标服务名称</p>
     * @param string $RemoteWriteURL <p>目标地址</p>
     * @param integer $AuthType <p>0: 无鉴权 1: basic_auth 2: token</p>
     * @param RemoteWriteAuthInfo $AuthInfo <p>鉴权信息</p>
     * @param integer $VirtualGatewayType <p>后端服务类型<br>-1 没有<br>0 CVM<br>1025 CLB</p>
     * @param string $InstanceId <p>云时序数据库实例ID</p>
     * @param integer $HasServicesLog <p>是否开启投递服务日志。1：关闭，2：开启。</p>
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

        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("HasServicesLog",$param) and $param["HasServicesLog"] !== null) {
            $this->HasServicesLog = $param["HasServicesLog"];
        }
    }
}
