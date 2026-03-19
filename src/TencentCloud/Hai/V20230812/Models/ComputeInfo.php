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
namespace TencentCloud\Hai\V20230812\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 资源相关信息
 *
 * @method array getComputeResources() 获取资源类型及数量
 * @method void setComputeResources(array $ComputeResources) 设置资源类型及数量
 * @method integer getReplicas() 获取副本数
 * @method void setReplicas(integer $Replicas) 设置副本数
 */
class ComputeInfo extends AbstractModel
{
    /**
     * @var array 资源类型及数量
     */
    public $ComputeResources;

    /**
     * @var integer 副本数
     */
    public $Replicas;

    /**
     * @param array $ComputeResources 资源类型及数量
     * @param integer $Replicas 副本数
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
        if (array_key_exists("ComputeResources",$param) and $param["ComputeResources"] !== null) {
            $this->ComputeResources = [];
            foreach ($param["ComputeResources"] as $key => $value){
                $obj = new ComputeResource();
                $obj->deserialize($value);
                array_push($this->ComputeResources, $obj);
            }
        }

        if (array_key_exists("Replicas",$param) and $param["Replicas"] !== null) {
            $this->Replicas = $param["Replicas"];
        }
    }
}
