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
 * 后端路由配置信息
 *
 * @method string getNamespace() 获取函数命名空间
 * @method void setNamespace(string $Namespace) 设置函数命名空间
 * @method string getFunctionName() 获取函数名
 * @method void setFunctionName(string $FunctionName) 设置函数名
 * @method string getQualifier() 获取函数别名或版本
 * @method void setQualifier(string $Qualifier) 设置函数别名或版本
 * @method string getPathMatch() 获取路径,取值规范：/，/*，/xxx，/xxx/a，/xxx/*"
 * @method void setPathMatch(string $PathMatch) 设置路径,取值规范：/，/*，/xxx，/xxx/a，/xxx/*"
 * @method array getPathRewrite() 获取路径重写策略
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPathRewrite(array $PathRewrite) 设置路径重写策略
注意：此字段可能返回 null，表示取不到有效值。
 */
class EndpointsConf extends AbstractModel
{
    /**
     * @var string 函数命名空间
     */
    public $Namespace;

    /**
     * @var string 函数名
     */
    public $FunctionName;

    /**
     * @var string 函数别名或版本
     */
    public $Qualifier;

    /**
     * @var string 路径,取值规范：/，/*，/xxx，/xxx/a，/xxx/*"
     */
    public $PathMatch;

    /**
     * @var array 路径重写策略
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $PathRewrite;

    /**
     * @param string $Namespace 函数命名空间
     * @param string $FunctionName 函数名
     * @param string $Qualifier 函数别名或版本
     * @param string $PathMatch 路径,取值规范：/，/*，/xxx，/xxx/a，/xxx/*"
     * @param array $PathRewrite 路径重写策略
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
        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("FunctionName",$param) and $param["FunctionName"] !== null) {
            $this->FunctionName = $param["FunctionName"];
        }

        if (array_key_exists("Qualifier",$param) and $param["Qualifier"] !== null) {
            $this->Qualifier = $param["Qualifier"];
        }

        if (array_key_exists("PathMatch",$param) and $param["PathMatch"] !== null) {
            $this->PathMatch = $param["PathMatch"];
        }

        if (array_key_exists("PathRewrite",$param) and $param["PathRewrite"] !== null) {
            $this->PathRewrite = [];
            foreach ($param["PathRewrite"] as $key => $value){
                $obj = new PathRewriteRule();
                $obj->deserialize($value);
                array_push($this->PathRewrite, $obj);
            }
        }
    }
}
