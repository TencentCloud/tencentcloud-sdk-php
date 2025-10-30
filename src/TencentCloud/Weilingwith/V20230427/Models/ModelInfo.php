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
namespace TencentCloud\Weilingwith\V20230427\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模型基础信息
 *
 * @method integer getWorkspaceId() 获取工作空间id
 * @method void setWorkspaceId(integer $WorkspaceId) 设置工作空间id
 * @method string getModelName() 获取模型名称
 * @method void setModelName(string $ModelName) 设置模型名称
 * @method string getModelId() 获取物模型id
 * @method void setModelId(string $ModelId) 设置物模型id
 * @method array getRelatedProduct() 获取关联产品信息
 * @method void setRelatedProduct(array $RelatedProduct) 设置关联产品信息
 * @method string getDeviceTypeName() 获取设备类型名
 * @method void setDeviceTypeName(string $DeviceTypeName) 设置设备类型名
 * @method string getDeviceType() 获取设备类型id
 * @method void setDeviceType(string $DeviceType) 设置设备类型id
 * @method integer getModelType() 获取物模型类型，产品模型/标准模型
 * @method void setModelType(integer $ModelType) 设置物模型类型，产品模型/标准模型
 * @method string getModelParams() 获取模型参数内容,有效字段为"x-json:"后的字段
 * @method void setModelParams(string $ModelParams) 设置模型参数内容,有效字段为"x-json:"后的字段
 */
class ModelInfo extends AbstractModel
{
    /**
     * @var integer 工作空间id
     */
    public $WorkspaceId;

    /**
     * @var string 模型名称
     */
    public $ModelName;

    /**
     * @var string 物模型id
     */
    public $ModelId;

    /**
     * @var array 关联产品信息
     */
    public $RelatedProduct;

    /**
     * @var string 设备类型名
     */
    public $DeviceTypeName;

    /**
     * @var string 设备类型id
     */
    public $DeviceType;

    /**
     * @var integer 物模型类型，产品模型/标准模型
     */
    public $ModelType;

    /**
     * @var string 模型参数内容,有效字段为"x-json:"后的字段
     */
    public $ModelParams;

    /**
     * @param integer $WorkspaceId 工作空间id
     * @param string $ModelName 模型名称
     * @param string $ModelId 物模型id
     * @param array $RelatedProduct 关联产品信息
     * @param string $DeviceTypeName 设备类型名
     * @param string $DeviceType 设备类型id
     * @param integer $ModelType 物模型类型，产品模型/标准模型
     * @param string $ModelParams 模型参数内容,有效字段为"x-json:"后的字段
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
        if (array_key_exists("WorkspaceId",$param) and $param["WorkspaceId"] !== null) {
            $this->WorkspaceId = $param["WorkspaceId"];
        }

        if (array_key_exists("ModelName",$param) and $param["ModelName"] !== null) {
            $this->ModelName = $param["ModelName"];
        }

        if (array_key_exists("ModelId",$param) and $param["ModelId"] !== null) {
            $this->ModelId = $param["ModelId"];
        }

        if (array_key_exists("RelatedProduct",$param) and $param["RelatedProduct"] !== null) {
            $this->RelatedProduct = [];
            foreach ($param["RelatedProduct"] as $key => $value){
                $obj = new RelatedProduct();
                $obj->deserialize($value);
                array_push($this->RelatedProduct, $obj);
            }
        }

        if (array_key_exists("DeviceTypeName",$param) and $param["DeviceTypeName"] !== null) {
            $this->DeviceTypeName = $param["DeviceTypeName"];
        }

        if (array_key_exists("DeviceType",$param) and $param["DeviceType"] !== null) {
            $this->DeviceType = $param["DeviceType"];
        }

        if (array_key_exists("ModelType",$param) and $param["ModelType"] !== null) {
            $this->ModelType = $param["ModelType"];
        }

        if (array_key_exists("ModelParams",$param) and $param["ModelParams"] !== null) {
            $this->ModelParams = $param["ModelParams"];
        }
    }
}
