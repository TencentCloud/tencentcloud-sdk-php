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
 * 集群安全模式相关参数
 *
 * @method boolean getEnabled() 获取<p>安全模式开关（true 开启 / false 关闭）</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>安全模式开关（true 开启 / false 关闭）</p>
 * @method array getNamespaces() 获取<p>灰度 namespace 列表</p>
 * @method void setNamespaces(array $Namespaces) 设置<p>灰度 namespace 列表</p>
 * @method array getLabels() 获取<p>灰度 Pod label</p>
 * @method void setLabels(array $Labels) 设置<p>灰度 Pod label</p>
 */
class SecurityModeConfig extends AbstractModel
{
    /**
     * @var boolean <p>安全模式开关（true 开启 / false 关闭）</p>
     */
    public $Enabled;

    /**
     * @var array <p>灰度 namespace 列表</p>
     */
    public $Namespaces;

    /**
     * @var array <p>灰度 Pod label</p>
     */
    public $Labels;

    /**
     * @param boolean $Enabled <p>安全模式开关（true 开启 / false 关闭）</p>
     * @param array $Namespaces <p>灰度 namespace 列表</p>
     * @param array $Labels <p>灰度 Pod label</p>
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
        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("Namespaces",$param) and $param["Namespaces"] !== null) {
            $this->Namespaces = $param["Namespaces"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }
    }
}
