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
namespace TencentCloud\Cvd\V20201104\Models;
use TencentCloud\Common\AbstractModel;

/**
 * UnbindInstances请求参数结构体
 *
 * @method string getInstanceRegion() 获取实例所在地域
 * @method void setInstanceRegion(string $InstanceRegion) 设置实例所在地域
 * @method array getBindInfos() 获取解除绑定关系列表
 * @method void setBindInfos(array $BindInfos) 设置解除绑定关系列表
 */
class UnbindInstancesRequest extends AbstractModel
{
    /**
     * @var string 实例所在地域
     */
    public $InstanceRegion;

    /**
     * @var array 解除绑定关系列表
     */
    public $BindInfos;

    /**
     * @param string $InstanceRegion 实例所在地域
     * @param array $BindInfos 解除绑定关系列表
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
        if (array_key_exists("InstanceRegion",$param) and $param["InstanceRegion"] !== null) {
            $this->InstanceRegion = $param["InstanceRegion"];
        }

        if (array_key_exists("BindInfos",$param) and $param["BindInfos"] !== null) {
            $this->BindInfos = [];
            foreach ($param["BindInfos"] as $key => $value){
                $obj = new BindInfo();
                $obj->deserialize($value);
                array_push($this->BindInfos, $obj);
            }
        }
    }
}
