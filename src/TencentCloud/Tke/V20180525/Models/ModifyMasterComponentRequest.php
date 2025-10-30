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
 * ModifyMasterComponent请求参数结构体
 *
 * @method string getClusterId() 获取集群ID
 * @method void setClusterId(string $ClusterId) 设置集群ID
 * @method string getComponent() 获取master组件名称，支持kube-apiserver、kube-scheduler、kube-controller-manager
 * @method void setComponent(string $Component) 设置master组件名称，支持kube-apiserver、kube-scheduler、kube-controller-manager
 * @method string getOperation() 获取停机或恢复，值只能为：shutdown或restore
 * @method void setOperation(string $Operation) 设置停机或恢复，值只能为：shutdown或restore
 * @method boolean getDryRun() 获取为true时，不真正执行停机或恢复操作	
 * @method void setDryRun(boolean $DryRun) 设置为true时，不真正执行停机或恢复操作	
 */
class ModifyMasterComponentRequest extends AbstractModel
{
    /**
     * @var string 集群ID
     */
    public $ClusterId;

    /**
     * @var string master组件名称，支持kube-apiserver、kube-scheduler、kube-controller-manager
     */
    public $Component;

    /**
     * @var string 停机或恢复，值只能为：shutdown或restore
     */
    public $Operation;

    /**
     * @var boolean 为true时，不真正执行停机或恢复操作	
     */
    public $DryRun;

    /**
     * @param string $ClusterId 集群ID
     * @param string $Component master组件名称，支持kube-apiserver、kube-scheduler、kube-controller-manager
     * @param string $Operation 停机或恢复，值只能为：shutdown或restore
     * @param boolean $DryRun 为true时，不真正执行停机或恢复操作	
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

        if (array_key_exists("Component",$param) and $param["Component"] !== null) {
            $this->Component = $param["Component"];
        }

        if (array_key_exists("Operation",$param) and $param["Operation"] !== null) {
            $this->Operation = $param["Operation"];
        }

        if (array_key_exists("DryRun",$param) and $param["DryRun"] !== null) {
            $this->DryRun = $param["DryRun"];
        }
    }
}
