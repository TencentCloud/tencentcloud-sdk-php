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
namespace TencentCloud\Scf\V20180416\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 限制信息
 *
 * @method integer getNamespacesCount() 获取命名空间个数限制
 * @method void setNamespacesCount(integer $NamespacesCount) 设置命名空间个数限制
 * @method array getNamespace() 获取命名空间限制信息
 * @method void setNamespace(array $Namespace) 设置命名空间限制信息
 */
class LimitsInfo extends AbstractModel
{
    /**
     * @var integer 命名空间个数限制
     */
    public $NamespacesCount;

    /**
     * @var array 命名空间限制信息
     */
    public $Namespace;

    /**
     * @param integer $NamespacesCount 命名空间个数限制
     * @param array $Namespace 命名空间限制信息
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
        if (array_key_exists("NamespacesCount",$param) and $param["NamespacesCount"] !== null) {
            $this->NamespacesCount = $param["NamespacesCount"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = [];
            foreach ($param["Namespace"] as $key => $value){
                $obj = new NamespaceLimit();
                $obj->deserialize($value);
                array_push($this->Namespace, $obj);
            }
        }
    }
}
