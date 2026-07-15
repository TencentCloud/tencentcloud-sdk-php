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
 * @method string getClusterId() 获取<p>集群 ID</p>
 * @method void setClusterId(string $ClusterId) 设置<p>集群 ID</p>
 * @method string getName() 获取<p>节点池名称</p>
 * @method void setName(string $Name) 设置<p>节点池名称</p>
 * @method string getType() 获取<p>节点池类型</p>
 * @method void setType(string $Type) 设置<p>节点池类型</p>
 * @method array getLabels() 获取<p>节点  Labels</p>
 * @method void setLabels(array $Labels) 设置<p>节点  Labels</p>
 * @method array getTaints() 获取<p>节点污点</p>
 * @method void setTaints(array $Taints) 设置<p>节点污点</p>
 * @method array getTags() 获取<p>节点标签</p>
 * @method void setTags(array $Tags) 设置<p>节点标签</p>
 * @method boolean getDeletionProtection() 获取<p>是否开启删除保护</p>
 * @method void setDeletionProtection(boolean $DeletionProtection) 设置<p>是否开启删除保护</p>
 * @method boolean getUnschedulable() 获取<p>节点是否默认不可调度</p>
 * @method void setUnschedulable(boolean $Unschedulable) 设置<p>节点是否默认不可调度</p>
 * @method CreateNativeNodePoolParam getNative() 获取<p>原生节点池创建参数（Type字段设置为Native时需填写）</p>
 * @method void setNative(CreateNativeNodePoolParam $Native) 设置<p>原生节点池创建参数（Type字段设置为Native时需填写）</p>
 * @method array getAnnotations() 获取<p>节点 Annotation 列表</p>
 * @method void setAnnotations(array $Annotations) 设置<p>节点 Annotation 列表</p>
 */
class CreateNodePoolRequest extends AbstractModel
{
    /**
     * @var string <p>集群 ID</p>
     */
    public $ClusterId;

    /**
     * @var string <p>节点池名称</p>
     */
    public $Name;

    /**
     * @var string <p>节点池类型</p>
     */
    public $Type;

    /**
     * @var array <p>节点  Labels</p>
     */
    public $Labels;

    /**
     * @var array <p>节点污点</p>
     */
    public $Taints;

    /**
     * @var array <p>节点标签</p>
     */
    public $Tags;

    /**
     * @var boolean <p>是否开启删除保护</p>
     */
    public $DeletionProtection;

    /**
     * @var boolean <p>节点是否默认不可调度</p>
     */
    public $Unschedulable;

    /**
     * @var CreateNativeNodePoolParam <p>原生节点池创建参数（Type字段设置为Native时需填写）</p>
     */
    public $Native;

    /**
     * @var array <p>节点 Annotation 列表</p>
     */
    public $Annotations;

    /**
     * @param string $ClusterId <p>集群 ID</p>
     * @param string $Name <p>节点池名称</p>
     * @param string $Type <p>节点池类型</p>
     * @param array $Labels <p>节点  Labels</p>
     * @param array $Taints <p>节点污点</p>
     * @param array $Tags <p>节点标签</p>
     * @param boolean $DeletionProtection <p>是否开启删除保护</p>
     * @param boolean $Unschedulable <p>节点是否默认不可调度</p>
     * @param CreateNativeNodePoolParam $Native <p>原生节点池创建参数（Type字段设置为Native时需填写）</p>
     * @param array $Annotations <p>节点 Annotation 列表</p>
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
