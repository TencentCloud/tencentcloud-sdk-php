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
namespace TencentCloud\Cme\V20191029\Models;
use TencentCloud\Common\AbstractModel;

/**
 * MoveClass请求参数结构体
 *
 * @method string getPlatform() 获取平台名称，指定访问的平台。关于平台概念，请参见文档 [平台](https://cloud.tencent.com/document/product/1156/43767)。
 * @method void setPlatform(string $Platform) 设置平台名称，指定访问的平台。关于平台概念，请参见文档 [平台](https://cloud.tencent.com/document/product/1156/43767)。
 * @method Entity getOwner() 获取归属者。
 * @method void setOwner(Entity $Owner) 设置归属者。
 * @method string getSourceClassPath() 获取源分类路径。
 * @method void setSourceClassPath(string $SourceClassPath) 设置源分类路径。
 * @method string getDestinationClassPath() 获取目标分类路径。
 * @method void setDestinationClassPath(string $DestinationClassPath) 设置目标分类路径。
 * @method string getOperator() 获取操作者。填写用户的 Id，用于标识调用者及校验操作权限。
 * @method void setOperator(string $Operator) 设置操作者。填写用户的 Id，用于标识调用者及校验操作权限。
 */
class MoveClassRequest extends AbstractModel
{
    /**
     * @var string 平台名称，指定访问的平台。关于平台概念，请参见文档 [平台](https://cloud.tencent.com/document/product/1156/43767)。
     */
    public $Platform;

    /**
     * @var Entity 归属者。
     */
    public $Owner;

    /**
     * @var string 源分类路径。
     */
    public $SourceClassPath;

    /**
     * @var string 目标分类路径。
     */
    public $DestinationClassPath;

    /**
     * @var string 操作者。填写用户的 Id，用于标识调用者及校验操作权限。
     */
    public $Operator;

    /**
     * @param string $Platform 平台名称，指定访问的平台。关于平台概念，请参见文档 [平台](https://cloud.tencent.com/document/product/1156/43767)。
     * @param Entity $Owner 归属者。
     * @param string $SourceClassPath 源分类路径。
     * @param string $DestinationClassPath 目标分类路径。
     * @param string $Operator 操作者。填写用户的 Id，用于标识调用者及校验操作权限。
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
        if (array_key_exists("Platform",$param) and $param["Platform"] !== null) {
            $this->Platform = $param["Platform"];
        }

        if (array_key_exists("Owner",$param) and $param["Owner"] !== null) {
            $this->Owner = new Entity();
            $this->Owner->deserialize($param["Owner"]);
        }

        if (array_key_exists("SourceClassPath",$param) and $param["SourceClassPath"] !== null) {
            $this->SourceClassPath = $param["SourceClassPath"];
        }

        if (array_key_exists("DestinationClassPath",$param) and $param["DestinationClassPath"] !== null) {
            $this->DestinationClassPath = $param["DestinationClassPath"];
        }

        if (array_key_exists("Operator",$param) and $param["Operator"] !== null) {
            $this->Operator = $param["Operator"];
        }
    }
}
