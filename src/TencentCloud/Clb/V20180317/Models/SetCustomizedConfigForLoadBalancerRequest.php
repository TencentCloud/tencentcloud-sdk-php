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
namespace TencentCloud\Clb\V20180317\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SetCustomizedConfigForLoadBalancer请求参数结构体
 *
 * @method string getOperationType() 获取操作类型：'ADD', 'DELETE', 'UPDATE', 'BIND', 'UNBIND'
 * @method void setOperationType(string $OperationType) 设置操作类型：'ADD', 'DELETE', 'UPDATE', 'BIND', 'UNBIND'
 * @method string getUconfigId() 获取除了创建个性化配置外，必传此字段，如：pz-1234abcd
 * @method void setUconfigId(string $UconfigId) 设置除了创建个性化配置外，必传此字段，如：pz-1234abcd
 * @method string getConfigContent() 获取创建个性化配置或修改个性化配置的内容时，必传此字段
 * @method void setConfigContent(string $ConfigContent) 设置创建个性化配置或修改个性化配置的内容时，必传此字段
 * @method string getConfigName() 获取创建个性化配置或修改个性化配置的名字时，必传此字段
 * @method void setConfigName(string $ConfigName) 设置创建个性化配置或修改个性化配置的名字时，必传此字段
 * @method array getLoadBalancerIds() 获取绑定解绑时，必传此字段
 * @method void setLoadBalancerIds(array $LoadBalancerIds) 设置绑定解绑时，必传此字段
 */
class SetCustomizedConfigForLoadBalancerRequest extends AbstractModel
{
    /**
     * @var string 操作类型：'ADD', 'DELETE', 'UPDATE', 'BIND', 'UNBIND'
     */
    public $OperationType;

    /**
     * @var string 除了创建个性化配置外，必传此字段，如：pz-1234abcd
     */
    public $UconfigId;

    /**
     * @var string 创建个性化配置或修改个性化配置的内容时，必传此字段
     */
    public $ConfigContent;

    /**
     * @var string 创建个性化配置或修改个性化配置的名字时，必传此字段
     */
    public $ConfigName;

    /**
     * @var array 绑定解绑时，必传此字段
     */
    public $LoadBalancerIds;

    /**
     * @param string $OperationType 操作类型：'ADD', 'DELETE', 'UPDATE', 'BIND', 'UNBIND'
     * @param string $UconfigId 除了创建个性化配置外，必传此字段，如：pz-1234abcd
     * @param string $ConfigContent 创建个性化配置或修改个性化配置的内容时，必传此字段
     * @param string $ConfigName 创建个性化配置或修改个性化配置的名字时，必传此字段
     * @param array $LoadBalancerIds 绑定解绑时，必传此字段
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
        if (array_key_exists("OperationType",$param) and $param["OperationType"] !== null) {
            $this->OperationType = $param["OperationType"];
        }

        if (array_key_exists("UconfigId",$param) and $param["UconfigId"] !== null) {
            $this->UconfigId = $param["UconfigId"];
        }

        if (array_key_exists("ConfigContent",$param) and $param["ConfigContent"] !== null) {
            $this->ConfigContent = $param["ConfigContent"];
        }

        if (array_key_exists("ConfigName",$param) and $param["ConfigName"] !== null) {
            $this->ConfigName = $param["ConfigName"];
        }

        if (array_key_exists("LoadBalancerIds",$param) and $param["LoadBalancerIds"] !== null) {
            $this->LoadBalancerIds = $param["LoadBalancerIds"];
        }
    }
}
