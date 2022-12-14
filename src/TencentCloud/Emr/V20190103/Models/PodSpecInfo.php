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
namespace TencentCloud\Emr\V20190103\Models;
use TencentCloud\Common\AbstractModel;

/**
 * Pod相关信息
 *
 * @method PodNewSpec getPodSpec() 获取使用Pod资源扩容时，指定的Pod规格以及来源等信息
 * @method void setPodSpec(PodNewSpec $PodSpec) 设置使用Pod资源扩容时，指定的Pod规格以及来源等信息
 * @method PodNewParameter getPodParameter() 获取POD自定义权限和自定义参数
 * @method void setPodParameter(PodNewParameter $PodParameter) 设置POD自定义权限和自定义参数
 */
class PodSpecInfo extends AbstractModel
{
    /**
     * @var PodNewSpec 使用Pod资源扩容时，指定的Pod规格以及来源等信息
     */
    public $PodSpec;

    /**
     * @var PodNewParameter POD自定义权限和自定义参数
     */
    public $PodParameter;

    /**
     * @param PodNewSpec $PodSpec 使用Pod资源扩容时，指定的Pod规格以及来源等信息
     * @param PodNewParameter $PodParameter POD自定义权限和自定义参数
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
        if (array_key_exists("PodSpec",$param) and $param["PodSpec"] !== null) {
            $this->PodSpec = new PodNewSpec();
            $this->PodSpec->deserialize($param["PodSpec"]);
        }

        if (array_key_exists("PodParameter",$param) and $param["PodParameter"] !== null) {
            $this->PodParameter = new PodNewParameter();
            $this->PodParameter->deserialize($param["PodParameter"]);
        }
    }
}
