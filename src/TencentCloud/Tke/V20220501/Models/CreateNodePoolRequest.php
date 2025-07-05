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
namespace TencentCloud\Tke\V20220501\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateNodePool请求参数结构体
 *
 * @method string getClusterId() 获取集群 ID
 * @method void setClusterId(string $ClusterId) 设置集群 ID
 * @method string getName() 获取节点池名称
 * @method void setName(string $Name) 设置节点池名称
 * @method string getType() 获取节点池类型
 * @method void setType(string $Type) 设置节点池类型
 * @method array getLabels() 获取节点  Labels
 * @method void setLabels(array $Labels) 设置节点  Labels
 * @method array getTaints() 获取节点污点
 * @method void setTaints(array $Taints) 设置节点污点
 * @method array getTags() 获取节点标签
 * @method void setTags(array $Tags) 设置节点标签
 * @method boolean getDeletionProtection() 获取是否开启删除保护
 * @method void setDeletionProtection(boolean $DeletionProtection) 设置是否开启删除保护
 * @method boolean getUnschedulable() 获取节点是否默认不可调度
 * @method void setUnschedulable(boolean $Unschedulable) 设置节点是否默认不可调度
 * @method CreateNativeNodePoolParam getNative() 获取原生节点池创建参数
 * @method void setNative(CreateNativeNodePoolParam $Native) 设置原生节点池创建参数
 * @method array getAnnotations() 获取节点 Annotation 列表
 * @method void setAnnotations(array $Annotations) 设置节点 Annotation 列表
 */
class CreateNodePoolRequest extends AbstractModel
{
    /**
     * @var string 集群 ID
     */
    public $ClusterId;

    /**
     * @var string 节点池名称
     */
    public $Name;

    /**
     * @var string 节点池类型
     */
    public $Type;

    /**
     * @var array 节点  Labels
     */
    public $Labels;

    /**
     * @var array 节点污点
     */
    public $Taints;

    /**
     * @var array 节点标签
     */
    public $Tags;

    /**
     * @var boolean 是否开启删除保护
     */
    public $DeletionProtection;

    /**
     * @var boolean 节点是否默认不可调度
     */
    public $Unschedulable;

    /**
     * @var CreateNativeNodePoolParam 原生节点池创建参数
     */
    public $Native;

    /**
     * @var array 节点 Annotation 列表
     */
    public $Annotations;

    /**
     * @param string $ClusterId 集群 ID
     * @param string $Name 节点池名称
     * @param string $Type 节点池类型
     * @param array $Labels 节点  Labels
     * @param array $Taints 节点污点
     * @param array $Tags 节点标签
     * @param boolean $DeletionProtection 是否开启删除保护
     * @param boolean $Unschedulable 节点是否默认不可调度
     * @param CreateNativeNodePoolParam $Native 原生节点池创建参数
     * @param array $Annotations 节点 Annotation 列表
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

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
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

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagSpecification();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("DeletionProtection",$param) and $param["DeletionProtection"] !== null) {
            $this->DeletionProtection = $param["DeletionProtection"];
        }

        if (array_key_exists("Unschedulable",$param) and $param["Unschedulable"] !== null) {
            $this->Unschedulable = $param["Unschedulable"];
        }

        if (array_key_exists("Native",$param) and $param["Native"] !== null) {
            $this->Native = new CreateNativeNodePoolParam();
            $this->Native->deserialize($param["Native"]);
        }

        if (array_key_exists("Annotations",$param) and $param["Annotations"] !== null) {
            $this->Annotations = [];
            foreach ($param["Annotations"] as $key => $value){
                $obj = new Annotation();
                $obj->deserialize($value);
                array_push($this->Annotations, $obj);
            }
        }
    }
}
