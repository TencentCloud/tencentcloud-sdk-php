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
namespace TencentCloud\Redis\V20180412\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateParamTemplate请求参数结构体
 *
 * @method string getName() 获取参数模板名称。字符长度要求为[2,64]。
 * @method void setName(string $Name) 设置参数模板名称。字符长度要求为[2,64]。
 * @method string getDescription() 获取参数模板描述。
 * @method void setDescription(string $Description) 设置参数模板描述。
 * @method integer getProductType() 获取产品类型。
- 6：Redis 4.0 内存版（标准架构）。
- 7：Redis 4.0 内存版（集群架构）。
- 8：Redis 5.0 内存版（标准架构）。
- 9：Redis 5.0 内存版（集群架构）。
- 15：Redis 6.2 内存版（标准架构）。
- 16：Redis 6.2 内存版（集群架构）。
- 17：Redis 7.0 内存版（标准架构）。
- 18：Redis 7.0 内存版（集群架构）。
 * @method void setProductType(integer $ProductType) 设置产品类型。
- 6：Redis 4.0 内存版（标准架构）。
- 7：Redis 4.0 内存版（集群架构）。
- 8：Redis 5.0 内存版（标准架构）。
- 9：Redis 5.0 内存版（集群架构）。
- 15：Redis 6.2 内存版（标准架构）。
- 16：Redis 6.2 内存版（集群架构）。
- 17：Redis 7.0 内存版（标准架构）。
- 18：Redis 7.0 内存版（集群架构）。
 * @method string getTemplateId() 获取源参数模板 ID。
 * @method void setTemplateId(string $TemplateId) 设置源参数模板 ID。
 * @method array getParamList() 获取参数列表。
 * @method void setParamList(array $ParamList) 设置参数列表。
 */
class CreateParamTemplateRequest extends AbstractModel
{
    /**
     * @var string 参数模板名称。字符长度要求为[2,64]。
     */
    public $Name;

    /**
     * @var string 参数模板描述。
     */
    public $Description;

    /**
     * @var integer 产品类型。
- 6：Redis 4.0 内存版（标准架构）。
- 7：Redis 4.0 内存版（集群架构）。
- 8：Redis 5.0 内存版（标准架构）。
- 9：Redis 5.0 内存版（集群架构）。
- 15：Redis 6.2 内存版（标准架构）。
- 16：Redis 6.2 内存版（集群架构）。
- 17：Redis 7.0 内存版（标准架构）。
- 18：Redis 7.0 内存版（集群架构）。
     */
    public $ProductType;

    /**
     * @var string 源参数模板 ID。
     */
    public $TemplateId;

    /**
     * @var array 参数列表。
     */
    public $ParamList;

    /**
     * @param string $Name 参数模板名称。字符长度要求为[2,64]。
     * @param string $Description 参数模板描述。
     * @param integer $ProductType 产品类型。
- 6：Redis 4.0 内存版（标准架构）。
- 7：Redis 4.0 内存版（集群架构）。
- 8：Redis 5.0 内存版（标准架构）。
- 9：Redis 5.0 内存版（集群架构）。
- 15：Redis 6.2 内存版（标准架构）。
- 16：Redis 6.2 内存版（集群架构）。
- 17：Redis 7.0 内存版（标准架构）。
- 18：Redis 7.0 内存版（集群架构）。
     * @param string $TemplateId 源参数模板 ID。
     * @param array $ParamList 参数列表。
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ProductType",$param) and $param["ProductType"] !== null) {
            $this->ProductType = $param["ProductType"];
        }

        if (array_key_exists("TemplateId",$param) and $param["TemplateId"] !== null) {
            $this->TemplateId = $param["TemplateId"];
        }

        if (array_key_exists("ParamList",$param) and $param["ParamList"] !== null) {
            $this->ParamList = [];
            foreach ($param["ParamList"] as $key => $value){
                $obj = new InstanceParam();
                $obj->deserialize($value);
                array_push($this->ParamList, $obj);
            }
        }
    }
}
