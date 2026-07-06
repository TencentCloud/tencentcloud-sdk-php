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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceParams请求参数结构体
 *
 * @method string getInstanceId() 获取<p>指定实例 ID。例如：cmgo-p8vn****。请登录 <a href="https://console.cloud.tencent.com/mongodb">MongoDB 控制台</a>在实例列表复制实例 ID。</p>
 * @method void setInstanceId(string $InstanceId) 设置<p>指定实例 ID。例如：cmgo-p8vn****。请登录 <a href="https://console.cloud.tencent.com/mongodb">MongoDB 控制台</a>在实例列表复制实例 ID。</p>
 * @method array getInstanceParams() 获取<p>指定需修改的参数名及值。当前所支持的参数名及对应取值范围，请通过 <a href="https://cloud.tencent.com/document/product/240/65903">DescribeInstanceParams </a>获取。</p>
 * @method void setInstanceParams(array $InstanceParams) 设置<p>指定需修改的参数名及值。当前所支持的参数名及对应取值范围，请通过 <a href="https://cloud.tencent.com/document/product/240/65903">DescribeInstanceParams </a>获取。</p>
 * @method string getModifyType() 获取<p>操作类型，包括：</p><ul><li>IMMEDIATELY：立即调整。</li><li>DELAY：延迟调整。可选字段，不配置该参数则默认为立即调整。</li></ul>
 * @method void setModifyType(string $ModifyType) 设置<p>操作类型，包括：</p><ul><li>IMMEDIATELY：立即调整。</li><li>DELAY：延迟调整。可选字段，不配置该参数则默认为立即调整。</li></ul>
 */
class ModifyInstanceParamsRequest extends AbstractModel
{
    /**
     * @var string <p>指定实例 ID。例如：cmgo-p8vn****。请登录 <a href="https://console.cloud.tencent.com/mongodb">MongoDB 控制台</a>在实例列表复制实例 ID。</p>
     */
    public $InstanceId;

    /**
     * @var array <p>指定需修改的参数名及值。当前所支持的参数名及对应取值范围，请通过 <a href="https://cloud.tencent.com/document/product/240/65903">DescribeInstanceParams </a>获取。</p>
     */
    public $InstanceParams;

    /**
     * @var string <p>操作类型，包括：</p><ul><li>IMMEDIATELY：立即调整。</li><li>DELAY：延迟调整。可选字段，不配置该参数则默认为立即调整。</li></ul>
     */
    public $ModifyType;

    /**
     * @param string $InstanceId <p>指定实例 ID。例如：cmgo-p8vn****。请登录 <a href="https://console.cloud.tencent.com/mongodb">MongoDB 控制台</a>在实例列表复制实例 ID。</p>
     * @param array $InstanceParams <p>指定需修改的参数名及值。当前所支持的参数名及对应取值范围，请通过 <a href="https://cloud.tencent.com/document/product/240/65903">DescribeInstanceParams </a>获取。</p>
     * @param string $ModifyType <p>操作类型，包括：</p><ul><li>IMMEDIATELY：立即调整。</li><li>DELAY：延迟调整。可选字段，不配置该参数则默认为立即调整。</li></ul>
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
        if (array_key_exists("InstanceId",$param) and $param["InstanceId"] !== null) {
            $this->InstanceId = $param["InstanceId"];
        }

        if (array_key_exists("InstanceParams",$param) and $param["InstanceParams"] !== null) {
            $this->InstanceParams = [];
            foreach ($param["InstanceParams"] as $key => $value){
                $obj = new ModifyMongoDBParamType();
                $obj->deserialize($value);
                array_push($this->InstanceParams, $obj);
            }
        }

        if (array_key_exists("ModifyType",$param) and $param["ModifyType"] !== null) {
            $this->ModifyType = $param["ModifyType"];
        }
    }
}
