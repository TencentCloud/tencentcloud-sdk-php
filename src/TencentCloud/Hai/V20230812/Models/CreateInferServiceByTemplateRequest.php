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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateInferServiceByTemplate请求参数结构体
 *
 * @method string getTemplateId() 获取<p>模版ID</p>
 * @method void setTemplateId(string $TemplateId) 设置<p>模版ID</p>
 * @method string getServiceName() 获取<p>服务名称</p>
 * @method void setServiceName(string $ServiceName) 设置<p>服务名称</p>
 * @method integer getReplicas() 获取<p>副本数</p>
 * @method void setReplicas(integer $Replicas) 设置<p>副本数</p>
 * @method string getServiceChargeType() 获取<p>付费方式，POSTPAID_BY_HOUR按量后付费</p>
 * @method void setServiceChargeType(string $ServiceChargeType) 设置<p>付费方式，POSTPAID_BY_HOUR按量后付费</p>
 * @method HyperParam getHyperParam() 获取<p>描述了服务的超参数配置</p>
 * @method void setHyperParam(HyperParam $HyperParam) 设置<p>描述了服务的超参数配置</p>
 * @method NetworkSetting getNetworkSetting() 获取<p>网络设置</p>
 * @method void setNetworkSetting(NetworkSetting $NetworkSetting) 设置<p>网络设置</p>
 */
class CreateInferServiceByTemplateRequest extends AbstractModel
{
    /**
     * @var string <p>模版ID</p>
     */
    public $TemplateId;

    /**
     * @var string <p>服务名称</p>
     */
    public $ServiceName;

    /**
     * @var integer <p>副本数</p>
     */
    public $Replicas;

    /**
     * @var string <p>付费方式，POSTPAID_BY_HOUR按量后付费</p>
     */
    public $ServiceChargeType;

    /**
     * @var HyperParam <p>描述了服务的超参数配置</p>
     */
    public $HyperParam;

    /**
     * @var NetworkSetting <p>网络设置</p>
     */
    public $NetworkSetting;

    /**
     * @param string $TemplateId <p>模版ID</p>
     * @param string $ServiceName <p>服务名称</p>
     * @param integer $Replicas <p>副本数</p>
     * @param string $ServiceChargeType <p>付费方式，POSTPAID_BY_HOUR按量后付费</p>
     * @param HyperParam $HyperParam <p>描述了服务的超参数配置</p>
     * @param NetworkSetting $NetworkSetting <p>网络设置</p>
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
        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("Replicas",$param) and $param["Replicas"] !== null) {
            $this->Replicas = $param["Replicas"];
        }

        if (array_key_exists("ServiceChargeType",$param) and $param["ServiceChargeType"] !== null) {
            $this->ServiceChargeType = $param["ServiceChargeType"];
        }

        if (array_key_exists("HyperParam",$param) and $param["HyperParam"] !== null) {
            $this->HyperParam = new HyperParam();
            $this->HyperParam->deserialize($param["HyperParam"]);
        }

        if (array_key_exists("NetworkSetting",$param) and $param["NetworkSetting"] !== null) {
            $this->NetworkSetting = new NetworkSetting();
            $this->NetworkSetting->deserialize($param["NetworkSetting"]);
        }
    }
}
