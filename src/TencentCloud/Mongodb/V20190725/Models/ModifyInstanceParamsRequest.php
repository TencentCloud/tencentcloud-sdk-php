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
namespace TencentCloud\Mongodb\V20190725\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ModifyInstanceParams请求参数结构体
 *
 * @method string getInstanceId() 获取指定实例 ID。例如：cmgo-p8vn****。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。

 * @method void setInstanceId(string $InstanceId) 设置指定实例 ID。例如：cmgo-p8vn****。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。

 * @method array getInstanceParams() 获取指定需修改的参数名及值。当前所支持的参数名及对应取值范围，请通过 [DescribeInstanceParams ](https://cloud.tencent.com/document/product/240/65903)获取。
 * @method void setInstanceParams(array $InstanceParams) 设置指定需修改的参数名及值。当前所支持的参数名及对应取值范围，请通过 [DescribeInstanceParams ](https://cloud.tencent.com/document/product/240/65903)获取。
 * @method string getModifyType() 获取操作类型，包括：
- IMMEDIATELY：立即调整。
- DELAY：延迟调整。可选字段，不配置该参数则默认为立即调整。
 * @method void setModifyType(string $ModifyType) 设置操作类型，包括：
- IMMEDIATELY：立即调整。
- DELAY：延迟调整。可选字段，不配置该参数则默认为立即调整。
 */
class ModifyInstanceParamsRequest extends AbstractModel
{
    /**
     * @var string 指定实例 ID。例如：cmgo-p8vn****。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。

     */
    public $InstanceId;

    /**
     * @var array 指定需修改的参数名及值。当前所支持的参数名及对应取值范围，请通过 [DescribeInstanceParams ](https://cloud.tencent.com/document/product/240/65903)获取。
     */
    public $InstanceParams;

    /**
     * @var string 操作类型，包括：
- IMMEDIATELY：立即调整。
- DELAY：延迟调整。可选字段，不配置该参数则默认为立即调整。
     */
    public $ModifyType;

    /**
     * @param string $InstanceId 指定实例 ID。例如：cmgo-p8vn****。请登录 [MongoDB 控制台](https://console.cloud.tencent.com/mongodb)在实例列表复制实例 ID。

     * @param array $InstanceParams 指定需修改的参数名及值。当前所支持的参数名及对应取值范围，请通过 [DescribeInstanceParams ](https://cloud.tencent.com/document/product/240/65903)获取。
     * @param string $ModifyType 操作类型，包括：
- IMMEDIATELY：立即调整。
- DELAY：延迟调整。可选字段，不配置该参数则默认为立即调整。
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
