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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 应用基本配置
 *
 * @method string getName() 获取名称
 * @method void setName(string $Name) 设置名称
 * @method string getNamespace() 获取命名空间
 * @method void setNamespace(string $Namespace) 设置命名空间
 * @method string getWorkflowKind() 获取工作负载类型
 * @method void setWorkflowKind(string $WorkflowKind) 设置工作负载类型
 * @method array getLabels() 获取标签信息
 * @method void setLabels(array $Labels) 设置标签信息
 * @method string getGridUniqKey() 获取Grid唯一Key
 * @method void setGridUniqKey(string $GridUniqKey) 设置Grid唯一Key
 * @method array getNodeSelector() 获取NodeSelector标签
 * @method void setNodeSelector(array $NodeSelector) 设置NodeSelector标签
 * @method integer getReplicas() 获取实例数
 * @method void setReplicas(integer $Replicas) 设置实例数
 * @method integer getAvailableReplicas() 获取可用实例数
 * @method void setAvailableReplicas(integer $AvailableReplicas) 设置可用实例数
 * @method boolean getEnableServiceLinks() 获取是否开启service环境变量注入pod
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEnableServiceLinks(boolean $EnableServiceLinks) 设置是否开启service环境变量注入pod
注意：此字段可能返回 null，表示取不到有效值。
 */
class ApplicationBasicConfig extends AbstractModel
{
    /**
     * @var string 名称
     */
    public $Name;

    /**
     * @var string 命名空间
     */
    public $Namespace;

    /**
     * @var string 工作负载类型
     */
    public $WorkflowKind;

    /**
     * @var array 标签信息
     */
    public $Labels;

    /**
     * @var string Grid唯一Key
     */
    public $GridUniqKey;

    /**
     * @var array NodeSelector标签
     */
    public $NodeSelector;

    /**
     * @var integer 实例数
     */
    public $Replicas;

    /**
     * @var integer 可用实例数
     */
    public $AvailableReplicas;

    /**
     * @var boolean 是否开启service环境变量注入pod
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $EnableServiceLinks;

    /**
     * @param string $Name 名称
     * @param string $Namespace 命名空间
     * @param string $WorkflowKind 工作负载类型
     * @param array $Labels 标签信息
     * @param string $GridUniqKey Grid唯一Key
     * @param array $NodeSelector NodeSelector标签
     * @param integer $Replicas 实例数
     * @param integer $AvailableReplicas 可用实例数
     * @param boolean $EnableServiceLinks 是否开启service环境变量注入pod
注意：此字段可能返回 null，表示取不到有效值。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("WorkflowKind",$param) and $param["WorkflowKind"] !== null) {
            $this->WorkflowKind = $param["WorkflowKind"];
        }

        if (array_key_exists("Labels",$param) and $param["Labels"] !== null) {
            $this->Labels = [];
            foreach ($param["Labels"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->Labels, $obj);
            }
        }

        if (array_key_exists("GridUniqKey",$param) and $param["GridUniqKey"] !== null) {
            $this->GridUniqKey = $param["GridUniqKey"];
        }

        if (array_key_exists("NodeSelector",$param) and $param["NodeSelector"] !== null) {
            $this->NodeSelector = [];
            foreach ($param["NodeSelector"] as $key => $value){
                $obj = new Label();
                $obj->deserialize($value);
                array_push($this->NodeSelector, $obj);
            }
        }

        if (array_key_exists("Replicas",$param) and $param["Replicas"] !== null) {
            $this->Replicas = $param["Replicas"];
        }

        if (array_key_exists("AvailableReplicas",$param) and $param["AvailableReplicas"] !== null) {
            $this->AvailableReplicas = $param["AvailableReplicas"];
        }

        if (array_key_exists("EnableServiceLinks",$param) and $param["EnableServiceLinks"] !== null) {
            $this->EnableServiceLinks = $param["EnableServiceLinks"];
        }
    }
}
