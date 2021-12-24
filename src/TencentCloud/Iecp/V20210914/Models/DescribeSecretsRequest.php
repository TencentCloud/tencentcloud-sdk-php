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
namespace TencentCloud\Iecp\V20210914\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeSecrets请求参数结构体
 *
 * @method integer getEdgeUnitID() 获取边缘单元ID
 * @method void setEdgeUnitID(integer $EdgeUnitID) 设置边缘单元ID
 * @method integer getOffset() 获取页号
 * @method void setOffset(integer $Offset) 设置页号
 * @method integer getLimit() 获取每页数目
 * @method void setLimit(integer $Limit) 设置每页数目
 * @method string getSecretNamespace() 获取命名空间
 * @method void setSecretNamespace(string $SecretNamespace) 设置命名空间
 * @method string getNamePattern() 获取Secret名(模糊匹配)
 * @method void setNamePattern(string $NamePattern) 设置Secret名(模糊匹配)
 * @method FieldSort getSort() 获取Sort.Field:CreateTime Sort.Order:ASC|DESC
 * @method void setSort(FieldSort $Sort) 设置Sort.Field:CreateTime Sort.Order:ASC|DESC
 * @method string getSecretType() 获取Secret类型(DockerConfigJson或Opaque)
 * @method void setSecretType(string $SecretType) 设置Secret类型(DockerConfigJson或Opaque)
 */
class DescribeSecretsRequest extends AbstractModel
{
    /**
     * @var integer 边缘单元ID
     */
    public $EdgeUnitID;

    /**
     * @var integer 页号
     */
    public $Offset;

    /**
     * @var integer 每页数目
     */
    public $Limit;

    /**
     * @var string 命名空间
     */
    public $SecretNamespace;

    /**
     * @var string Secret名(模糊匹配)
     */
    public $NamePattern;

    /**
     * @var FieldSort Sort.Field:CreateTime Sort.Order:ASC|DESC
     */
    public $Sort;

    /**
     * @var string Secret类型(DockerConfigJson或Opaque)
     */
    public $SecretType;

    /**
     * @param integer $EdgeUnitID 边缘单元ID
     * @param integer $Offset 页号
     * @param integer $Limit 每页数目
     * @param string $SecretNamespace 命名空间
     * @param string $NamePattern Secret名(模糊匹配)
     * @param FieldSort $Sort Sort.Field:CreateTime Sort.Order:ASC|DESC
     * @param string $SecretType Secret类型(DockerConfigJson或Opaque)
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
        if (array_key_exists("EdgeUnitID",$param) and $param["EdgeUnitID"] !== null) {
            $this->EdgeUnitID = $param["EdgeUnitID"];
        }

        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("SecretNamespace",$param) and $param["SecretNamespace"] !== null) {
            $this->SecretNamespace = $param["SecretNamespace"];
        }

        if (array_key_exists("NamePattern",$param) and $param["NamePattern"] !== null) {
            $this->NamePattern = $param["NamePattern"];
        }

        if (array_key_exists("Sort",$param) and $param["Sort"] !== null) {
            $this->Sort = new FieldSort();
            $this->Sort->deserialize($param["Sort"]);
        }

        if (array_key_exists("SecretType",$param) and $param["SecretType"] !== null) {
            $this->SecretType = $param["SecretType"];
        }
    }
}
