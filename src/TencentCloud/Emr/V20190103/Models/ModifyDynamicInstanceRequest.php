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
 * ModifyDynamicInstance请求参数结构体
 *
 * @method string getInstanceId() 获取<p>EMR集群id</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>EMR集群id</p>
 * @method string getServiceName() 获取<p>支持DynamicInstance的服务名称</p>
 * @method void setServiceName(string $ServiceName) 设置<p>支持DynamicInstance的服务名称</p>
 * @method string getDynamicInstanceType() 获取<p>DynamicInstance类型</p><p>枚举值：</p><ul><li>RayCluster： RayCluster类型</li></ul>
 * @method void setDynamicInstanceType(string $DynamicInstanceType) 设置<p>DynamicInstance类型</p><p>枚举值：</p><ul><li>RayCluster： RayCluster类型</li></ul>
 * @method integer getDynamicInstanceId() 获取<p>DynamicInstance的id</p>
 * @method void setDynamicInstanceId(integer $DynamicInstanceId) 设置<p>DynamicInstance的id</p>
 * @method ModifyDynamicInstanceForm getDynamicInstanceForm() 获取<p>更新表单配置（每个更新域都传递最新的内容，要完整）</p>
 * @method void setDynamicInstanceForm(ModifyDynamicInstanceForm $DynamicInstanceForm) 设置<p>更新表单配置（每个更新域都传递最新的内容，要完整）</p>
 * @method string getDynamicInstanceYaml() 获取<p>更新YAML配置</p>
 * @method void setDynamicInstanceYaml(string $DynamicInstanceYaml) 设置<p>更新YAML配置</p>
 */
class ModifyDynamicInstanceRequest extends AbstractModel
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
     * @var integer <p>DynamicInstance的id</p>
     */
    public $DynamicInstanceId;

    /**
     * @var ModifyDynamicInstanceForm <p>更新表单配置（每个更新域都传递最新的内容，要完整）</p>
     */
    public $DynamicInstanceForm;

    /**
     * @var string <p>更新YAML配置</p>
     */
    public $DynamicInstanceYaml;

    /**
     * @param string $InstanceId <p>EMR集群id</p>
     * @param string $ServiceName <p>支持DynamicInstance的服务名称</p>
     * @param string $DynamicInstanceType <p>DynamicInstance类型</p><p>枚举值：</p><ul><li>RayCluster： RayCluster类型</li></ul>
     * @param integer $DynamicInstanceId <p>DynamicInstance的id</p>
     * @param ModifyDynamicInstanceForm $DynamicInstanceForm <p>更新表单配置（每个更新域都传递最新的内容，要完整）</p>
     * @param string $DynamicInstanceYaml <p>更新YAML配置</p>
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

        if (array_key_exists("DynamicInstanceId",$param) and $param["DynamicInstanceId"] !== null) {
            $this->DynamicInstanceId = $param["DynamicInstanceId"];
        }

        if (array_key_exists("DynamicInstanceForm",$param) and $param["DynamicInstanceForm"] !== null) {
            $this->DynamicInstanceForm = new ModifyDynamicInstanceForm();
            $this->DynamicInstanceForm->deserialize($param["DynamicInstanceForm"]);
        }

        if (array_key_exists("DynamicInstanceYaml",$param) and $param["DynamicInstanceYaml"] !== null) {
            $this->DynamicInstanceYaml = $param["DynamicInstanceYaml"];
        }
    }
}
