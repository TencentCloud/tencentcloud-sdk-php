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
namespace TencentCloud\Tke\V20180525\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyClusterSchedulerPolicy请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method array getSchedulerPolicyConfig() 获取SchedulerPolicy配置信息
 * @method void setSchedulerPolicyConfig(array $SchedulerPolicyConfig) 设置SchedulerPolicy配置信息
 * @method ClientConnection getClientConnection() 获取客户端连接
 * @method void setClientConnection(ClientConnection $ClientConnection) 设置客户端连接
 * @method array getExtenders() 获取扩展调度器
 * @method void setExtenders(array $Extenders) 设置扩展调度器
 * @method boolean getHighPerformance() 获取高性能模式
 * @method void setHighPerformance(boolean $HighPerformance) 设置高性能模式
 */
class ModifyClusterSchedulerPolicyRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var array SchedulerPolicy配置信息
     */
    public $SchedulerPolicyConfig;

    /**
     * @var ClientConnection 客户端连接
     */
    public $ClientConnection;

    /**
     * @var array 扩展调度器
     */
    public $Extenders;

    /**
     * @var boolean 高性能模式
     */
    public $HighPerformance;

    /**
     * @param string $ClusterId 集群ID
     * @param array $SchedulerPolicyConfig SchedulerPolicy配置信息
     * @param ClientConnection $ClientConnection 客户端连接
     * @param array $Extenders 扩展调度器
     * @param boolean $HighPerformance 高性能模式
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
        if (array_key_exists("ClusterId",$param) and $param["ClusterId"] !== null) {
            $this->ClusterId = $param["ClusterId"];
        }

        if (array_key_exists("SchedulerPolicyConfig",$param) and $param["SchedulerPolicyConfig"] !== null) {
            $this->SchedulerPolicyConfig = [];
            foreach ($param["SchedulerPolicyConfig"] as $key => $value){
                $obj = new SchedulerPolicyConfig();
                $obj->deserialize($value);
                array_push($this->SchedulerPolicyConfig, $obj);
            }
        }

        if (array_key_exists("ClientConnection",$param) and $param["ClientConnection"] !== null) {
            $this->ClientConnection = new ClientConnection();
            $this->ClientConnection->deserialize($param["ClientConnection"]);
        }

        if (array_key_exists("Extenders",$param) and $param["Extenders"] !== null) {
            $this->Extenders = [];
            foreach ($param["Extenders"] as $key => $value){
                $obj = new Extenders();
                $obj->deserialize($value);
                array_push($this->Extenders, $obj);
            }
        }

        if (array_key_exists("HighPerformance",$param) and $param["HighPerformance"] !== null) {
            $this->HighPerformance = $param["HighPerformance"];
        }
    }
}
