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
namespace TencentCloud\Tione\V20211111\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 接口描述信息
 *
 * @method string getId() 获取接口id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setId(string $Id) 设置接口id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceGroupId() 获取接口所属服务组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceGroupId(string $ServiceGroupId) 设置接口所属服务组id
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getDescription() 获取接口描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setDescription(string $Description) 设置接口描述
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRelativeUrl() 获取相对路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRelativeUrl(string $RelativeUrl) 设置相对路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getServiceType() 获取服务类型 HTTP HTTPS
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setServiceType(string $ServiceType) 设置服务类型 HTTP HTTPS
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHttpMethod() 获取GET POST
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpMethod(string $HttpMethod) 设置GET POST
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHttpInputExample() 获取请求示例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpInputExample(string $HttpInputExample) 设置请求示例
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getHttpOutputExample() 获取回包示例
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setHttpOutputExample(string $HttpOutputExample) 设置回包示例
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedBy() 获取更新成员
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedBy(string $UpdatedBy) 设置更新成员
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpdatedAt() 获取更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpdatedAt(string $UpdatedAt) 设置更新时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUin() 获取主账号uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUin(string $Uin) 设置主账号uin
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSubUin() 获取子账号subuin
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSubUin(string $SubUin) 设置子账号subuin
注意：此字段可能返回 null，表示取不到有效值。
 */
class APIConfigDetail extends AbstractModel
{
    /**
     * @var string 接口id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Id;

    /**
     * @var string 接口所属服务组id
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceGroupId;

    /**
     * @var string 接口描述
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Description;

    /**
     * @var string 相对路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $RelativeUrl;

    /**
     * @var string 服务类型 HTTP HTTPS
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ServiceType;

    /**
     * @var string GET POST
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpMethod;

    /**
     * @var string 请求示例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpInputExample;

    /**
     * @var string 回包示例
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $HttpOutputExample;

    /**
     * @var string 更新成员
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedBy;

    /**
     * @var string 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpdatedAt;

    /**
     * @var string 主账号uin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Uin;

    /**
     * @var string 子账号subuin
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SubUin;

    /**
     * @param string $Id 接口id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceGroupId 接口所属服务组id
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Description 接口描述
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $RelativeUrl 相对路径
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ServiceType 服务类型 HTTP HTTPS
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HttpMethod GET POST
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HttpInputExample 请求示例
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $HttpOutputExample 回包示例
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedBy 更新成员
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpdatedAt 更新时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Uin 主账号uin
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SubUin 子账号subuin
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("ServiceGroupId",$param) and $param["ServiceGroupId"] !== null) {
            $this->ServiceGroupId = $param["ServiceGroupId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("RelativeUrl",$param) and $param["RelativeUrl"] !== null) {
            $this->RelativeUrl = $param["RelativeUrl"];
        }

        if (array_key_exists("ServiceType",$param) and $param["ServiceType"] !== null) {
            $this->ServiceType = $param["ServiceType"];
        }

        if (array_key_exists("HttpMethod",$param) and $param["HttpMethod"] !== null) {
            $this->HttpMethod = $param["HttpMethod"];
        }

        if (array_key_exists("HttpInputExample",$param) and $param["HttpInputExample"] !== null) {
            $this->HttpInputExample = $param["HttpInputExample"];
        }

        if (array_key_exists("HttpOutputExample",$param) and $param["HttpOutputExample"] !== null) {
            $this->HttpOutputExample = $param["HttpOutputExample"];
        }

        if (array_key_exists("UpdatedBy",$param) and $param["UpdatedBy"] !== null) {
            $this->UpdatedBy = $param["UpdatedBy"];
        }

        if (array_key_exists("UpdatedAt",$param) and $param["UpdatedAt"] !== null) {
            $this->UpdatedAt = $param["UpdatedAt"];
        }

        if (array_key_exists("Uin",$param) and $param["Uin"] !== null) {
            $this->Uin = $param["Uin"];
        }

        if (array_key_exists("SubUin",$param) and $param["SubUin"] !== null) {
            $this->SubUin = $param["SubUin"];
        }
    }
}
