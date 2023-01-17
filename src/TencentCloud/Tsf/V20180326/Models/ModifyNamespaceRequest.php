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
namespace TencentCloud\Tsf\V20180326\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyNamespace请求参数结构体
 *
 * @method string getNamespaceId() 获取命名空间ID
 * @method void setNamespaceId(string $NamespaceId) 设置命名空间ID
 * @method string getNamespaceName() 获取命名空间名称
 * @method void setNamespaceName(string $NamespaceName) 设置命名空间名称
 * @method string getNamespaceDesc() 获取命名空间备注
 * @method void setNamespaceDesc(string $NamespaceDesc) 设置命名空间备注
 * @method string getIsHaEnable() 获取是否开启高可用
 * @method void setIsHaEnable(string $IsHaEnable) 设置是否开启高可用
 */
class ModifyNamespaceRequest extends AbstractModel
{
    /**
     * @var string 命名空间ID
     */
    public $NamespaceId;

    /**
     * @var string 命名空间名称
     */
    public $NamespaceName;

    /**
     * @var string 命名空间备注
     */
    public $NamespaceDesc;

    /**
     * @var string 是否开启高可用
     */
    public $IsHaEnable;

    /**
     * @param string $NamespaceId 命名空间ID
     * @param string $NamespaceName 命名空间名称
     * @param string $NamespaceDesc 命名空间备注
     * @param string $IsHaEnable 是否开启高可用
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
        if (array_key_exists("NamespaceId",$param) and $param["NamespaceId"] !== null) {
            $this->NamespaceId = $param["NamespaceId"];
        }

        if (array_key_exists("NamespaceName",$param) and $param["NamespaceName"] !== null) {
            $this->NamespaceName = $param["NamespaceName"];
        }

        if (array_key_exists("NamespaceDesc",$param) and $param["NamespaceDesc"] !== null) {
            $this->NamespaceDesc = $param["NamespaceDesc"];
        }

        if (array_key_exists("IsHaEnable",$param) and $param["IsHaEnable"] !== null) {
            $this->IsHaEnable = $param["IsHaEnable"];
        }
    }
}
