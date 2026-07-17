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
 * ModifyExternalNodePool请求参数结构体
 *
 * @method string getClusterId() 获取<p>集群ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群ID</p>
 * @method string getNodePoolId() 获取<p>节点池ID</p>
 * @method void setNodePoolId(string $NodePoolId) 设置<p>节点池ID</p>
 * @method string getName() 获取<p>节点池名称</p>
 * @method void setName(string $Name) 设置<p>节点池名称</p>
 * @method array getLabels() 获取<p>注册节点标签</p>
 * @method void setLabels(array $Labels) 设置<p>注册节点标签</p>
 * @method array getTaints() 获取<p>注册节点污点</p>
 * @method void setTaints(array $Taints) 设置<p>注册节点污点</p>
 * @method boolean getDeletionProtection() 获取<p>删除保护开关</p>
 * @method void setDeletionProtection(boolean $DeletionProtection) 设置<p>删除保护开关</p>
 * @method string getUserScript() 获取<p>base64 编码的用户脚本, 此脚本会在 k8s 组件运行后执行, 需要用户保证脚本的可重入及重试逻辑, 脚本及其生成的日志文件可在节点的 /data/ccs_userscript/ 路径查看</p>
 * @method void setUserScript(string $UserScript) 设置<p>base64 编码的用户脚本, 此脚本会在 k8s 组件运行后执行, 需要用户保证脚本的可重入及重试逻辑, 脚本及其生成的日志文件可在节点的 /data/ccs_userscript/ 路径查看</p>
 */
class ModifyExternalNodePoolRequest extends AbstractModel
{
    /**
     * @var string <p>集群ID</p>
     */
    public $ClusterId;

    /**
     * @var string <p>节点池ID</p>
     */
    public $NodePoolId;

    /**
     * @var string <p>节点池名称</p>
     */
    public $Name;

    /**
     * @var array <p>注册节点标签</p>
     */
    public $Labels;

    /**
     * @var array <p>注册节点污点</p>
     */
    public $Taints;

    /**
     * @var boolean <p>删除保护开关</p>
     */
    public $DeletionProtection;

    /**
     * @var string <p>base64 编码的用户脚本, 此脚本会在 k8s 组件运行后执行, 需要用户保证脚本的可重入及重试逻辑, 脚本及其生成的日志文件可在节点的 /data/ccs_userscript/ 路径查看</p>
     */
    public $UserScript;

    /**
     * @param string $ClusterId <p>集群ID</p>
     * @param string $NodePoolId <p>节点池ID</p>
     * @param string $Name <p>节点池名称</p>
     * @param array $Labels <p>注册节点标签</p>
     * @param array $Taints <p>注册节点污点</p>
     * @param boolean $DeletionProtection <p>删除保护开关</p>
     * @param string $UserScript <p>base64 编码的用户脚本, 此脚本会在 k8s 组件运行后执行, 需要用户保证脚本的可重入及重试逻辑, 脚本及其生成的日志文件可在节点的 /data/ccs_userscript/ 路径查看</p>
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

        if (array_key_exists("NodePoolId",$param) and $param["NodePoolId"] !== null) {
            $this->NodePoolId = $param["NodePoolId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("Taints",$param) and $param["Taints"] !== null) {
            $this->Taints = [];
            foreach ($param["Taints"] as $key => $value){
                $obj = new Taint();
                $obj->deserialize($value);
                array_push($this->Taints, $obj);
            }
        }

        if (array_key_exists("DeletionProtection",$param) and $param["DeletionProtection"] !== null) {
            $this->DeletionProtection = $param["DeletionProtection"];
        }

        if (array_key_exists("UserScript",$param) and $param["UserScript"] !== null) {
            $this->UserScript = $param["UserScript"];
        }
    }
}
