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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * k8s env 的 ValueFrom
 *
 * @method FieldRef getFieldRef() 获取k8s env 的 FieldRef
 * @method void setFieldRef(FieldRef $FieldRef) 设置k8s env 的 FieldRef
 * @method ResourceFieldRef getResourceFieldRef() 获取k8s env 的 ResourceFieldRef
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setResourceFieldRef(ResourceFieldRef $ResourceFieldRef) 设置k8s env 的 ResourceFieldRef
注意：此字段可能返回 null，表示取不到有效值。
 * @method CommonRef getConfigMapKeyRef() 获取k8s env的configMapKeyRef
 * @method void setConfigMapKeyRef(CommonRef $ConfigMapKeyRef) 设置k8s env的configMapKeyRef
 * @method CommonRef getSecretKeyRef() 获取k8s env 的 secretKeyRef
 * @method void setSecretKeyRef(CommonRef $SecretKeyRef) 设置k8s env 的 secretKeyRef
 */
class ValueFrom extends AbstractModel
{
    /**
     * @var FieldRef k8s env 的 FieldRef
     */
    public $FieldRef;

    /**
     * @var ResourceFieldRef k8s env 的 ResourceFieldRef
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ResourceFieldRef;

    /**
     * @var CommonRef k8s env的configMapKeyRef
     */
    public $ConfigMapKeyRef;

    /**
     * @var CommonRef k8s env 的 secretKeyRef
     */
    public $SecretKeyRef;

    /**
     * @param FieldRef $FieldRef k8s env 的 FieldRef
     * @param ResourceFieldRef $ResourceFieldRef k8s env 的 ResourceFieldRef
注意：此字段可能返回 null，表示取不到有效值。
     * @param CommonRef $ConfigMapKeyRef k8s env的configMapKeyRef
     * @param CommonRef $SecretKeyRef k8s env 的 secretKeyRef
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
        if (array_key_exists("FieldRef",$param) and $param["FieldRef"] !== null) {
            $this->FieldRef = new FieldRef();
            $this->FieldRef->deserialize($param["FieldRef"]);
        }

        if (array_key_exists("ResourceFieldRef",$param) and $param["ResourceFieldRef"] !== null) {
            $this->ResourceFieldRef = new ResourceFieldRef();
            $this->ResourceFieldRef->deserialize($param["ResourceFieldRef"]);
        }

        if (array_key_exists("ConfigMapKeyRef",$param) and $param["ConfigMapKeyRef"] !== null) {
            $this->ConfigMapKeyRef = new CommonRef();
            $this->ConfigMapKeyRef->deserialize($param["ConfigMapKeyRef"]);
        }

        if (array_key_exists("SecretKeyRef",$param) and $param["SecretKeyRef"] !== null) {
            $this->SecretKeyRef = new CommonRef();
            $this->SecretKeyRef->deserialize($param["SecretKeyRef"]);
        }
    }
}
