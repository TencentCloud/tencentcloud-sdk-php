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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateDynamicInstance请求参数结构体
 *
 * @method string getInstanceId() 获取<p>EMR集群id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>EMR集群id</p>
 * @method string getServiceName() 获取<p>支持DynamicInstance的服务名称</p>
 * @method void setServiceName(string $ServiceName) 设置<p>支持DynamicInstance的服务名称</p>
 * @method string getDynamicInstanceType() 获取<p>DynamicInstance类型</p><p>枚举值：</p><ul><li>RayCluster： RayCluster类型</li></ul>
 * @method void setDynamicInstanceType(string $DynamicInstanceType) 设置<p>DynamicInstance类型</p><p>枚举值：</p><ul><li>RayCluster： RayCluster类型</li></ul>
 * @method DynamicInstanceForm getDynamicInstanceForm() 获取<p>表单创建信息</p>
 * @method void setDynamicInstanceForm(DynamicInstanceForm $DynamicInstanceForm) 设置<p>表单创建信息</p>
 * @method string getDynamicInstanceYaml() 获取<p>yaml创建信息</p>
 * @method void setDynamicInstanceYaml(string $DynamicInstanceYaml) 设置<p>yaml创建信息</p>
 */
class CreateDynamicInstanceRequest extends AbstractModel
{
    /**
     * @var string <p>EMR集群id</p>
     */
    public $InstanceId;

    /**
     * @var string <p>支持DynamicInstance的服务名称</p>
     */
    public $ServiceName;

    /**
     * @var string <p>DynamicInstance类型</p><p>枚举值：</p><ul><li>RayCluster： RayCluster类型</li></ul>
     */
    public $DynamicInstanceType;

    /**
     * @var DynamicInstanceForm <p>表单创建信息</p>
     */
    public $DynamicInstanceForm;

    /**
     * @var string <p>yaml创建信息</p>
     */
    public $DynamicInstanceYaml;

    /**
     * @param string $InstanceId <p>EMR集群id</p>
     * @param string $ServiceName <p>支持DynamicInstance的服务名称</p>
     * @param string $DynamicInstanceType <p>DynamicInstance类型</p><p>枚举值：</p><ul><li>RayCluster： RayCluster类型</li></ul>
     * @param DynamicInstanceForm $DynamicInstanceForm <p>表单创建信息</p>
     * @param string $DynamicInstanceYaml <p>yaml创建信息</p>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("ServiceName",$param) and $param["ServiceName"] !== null) {
            $this->ServiceName = $param["ServiceName"];
        }

        if (array_key_exists("DynamicInstanceType",$param) and $param["DynamicInstanceType"] !== null) {
            $this->DynamicInstanceType = $param["DynamicInstanceType"];
        }

        if (array_key_exists("DynamicInstanceForm",$param) and $param["DynamicInstanceForm"] !== null) {
            $this->DynamicInstanceForm = new DynamicInstanceForm();
            $this->DynamicInstanceForm->deserialize($param["DynamicInstanceForm"]);
        }

        if (array_key_exists("DynamicInstanceYaml",$param) and $param["DynamicInstanceYaml"] !== null) {
            $this->DynamicInstanceYaml = $param["DynamicInstanceYaml"];
        }
    }
}
