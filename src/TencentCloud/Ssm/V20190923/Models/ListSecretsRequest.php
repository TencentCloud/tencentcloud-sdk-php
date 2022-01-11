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
namespace TencentCloud\Ssm\V20190923\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListSecrets请求参数结构体
 *
 * @method integer getOffset() 获取查询列表的起始位置，以0开始，不设置默认为0。
 * @method void setOffset(integer $Offset) 设置查询列表的起始位置，以0开始，不设置默认为0。
 * @method integer getLimit() 获取单次查询返回的最大数量，0或不设置则使用默认值 20。
 * @method void setLimit(integer $Limit) 设置单次查询返回的最大数量，0或不设置则使用默认值 20。
 * @method integer getOrderType() 获取根据创建时间的排序方式，0或者不设置则使用降序排序， 1 表示升序排序。
 * @method void setOrderType(integer $OrderType) 设置根据创建时间的排序方式，0或者不设置则使用降序排序， 1 表示升序排序。
 * @method integer getState() 获取根据凭据状态进行过滤。
默认为0表示查询全部。
1 --  表示查询Enabled 凭据列表。
2 --  表示查询Disabled 凭据列表。
3 --  表示查询PendingDelete 凭据列表。
4 --  表示PendingCreate。
5 --  表示CreateFailed。
其中状态PendingCreate和CreateFailed只有在SecretType为云产品凭据时生效
 * @method void setState(integer $State) 设置根据凭据状态进行过滤。
默认为0表示查询全部。
1 --  表示查询Enabled 凭据列表。
2 --  表示查询Disabled 凭据列表。
3 --  表示查询PendingDelete 凭据列表。
4 --  表示PendingCreate。
5 --  表示CreateFailed。
其中状态PendingCreate和CreateFailed只有在SecretType为云产品凭据时生效
 * @method string getSearchSecretName() 获取根据凭据名称进行过滤，为空表示不过滤。
 * @method void setSearchSecretName(string $SearchSecretName) 设置根据凭据名称进行过滤，为空表示不过滤。
 * @method array getTagFilters() 获取标签过滤条件。
 * @method void setTagFilters(array $TagFilters) 设置标签过滤条件。
 * @method integer getSecretType() 获取0  -- 表示用户自定义凭据，默认为0。
1  -- 表示用户云产品凭据。
2 -- 表示SSH密钥对凭据。
3 -- 表示云API密钥对凭据。
 * @method void setSecretType(integer $SecretType) 设置0  -- 表示用户自定义凭据，默认为0。
1  -- 表示用户云产品凭据。
2 -- 表示SSH密钥对凭据。
3 -- 表示云API密钥对凭据。
 * @method string getProductName() 获取此参数仅在SecretType参数值为1时生效，
当SecretType值为1时：
如果ProductName值为空，则表示查询所有类型的云产品凭据
如果ProductName值为Mysql，则表示查询Mysql数据库凭据
如果ProductName值为Tdsql-mysql，则表示查询Tdsql（Mysql版本）的凭据
 * @method void setProductName(string $ProductName) 设置此参数仅在SecretType参数值为1时生效，
当SecretType值为1时：
如果ProductName值为空，则表示查询所有类型的云产品凭据
如果ProductName值为Mysql，则表示查询Mysql数据库凭据
如果ProductName值为Tdsql-mysql，则表示查询Tdsql（Mysql版本）的凭据
 */
class ListSecretsRequest extends AbstractModel
{
    /**
     * @var integer 查询列表的起始位置，以0开始，不设置默认为0。
     */
    public $Offset;

    /**
     * @var integer 单次查询返回的最大数量，0或不设置则使用默认值 20。
     */
    public $Limit;

    /**
     * @var integer 根据创建时间的排序方式，0或者不设置则使用降序排序， 1 表示升序排序。
     */
    public $OrderType;

    /**
     * @var integer 根据凭据状态进行过滤。
默认为0表示查询全部。
1 --  表示查询Enabled 凭据列表。
2 --  表示查询Disabled 凭据列表。
3 --  表示查询PendingDelete 凭据列表。
4 --  表示PendingCreate。
5 --  表示CreateFailed。
其中状态PendingCreate和CreateFailed只有在SecretType为云产品凭据时生效
     */
    public $State;

    /**
     * @var string 根据凭据名称进行过滤，为空表示不过滤。
     */
    public $SearchSecretName;

    /**
     * @var array 标签过滤条件。
     */
    public $TagFilters;

    /**
     * @var integer 0  -- 表示用户自定义凭据，默认为0。
1  -- 表示用户云产品凭据。
2 -- 表示SSH密钥对凭据。
3 -- 表示云API密钥对凭据。
     */
    public $SecretType;

    /**
     * @var string 此参数仅在SecretType参数值为1时生效，
当SecretType值为1时：
如果ProductName值为空，则表示查询所有类型的云产品凭据
如果ProductName值为Mysql，则表示查询Mysql数据库凭据
如果ProductName值为Tdsql-mysql，则表示查询Tdsql（Mysql版本）的凭据
     */
    public $ProductName;

    /**
     * @param integer $Offset 查询列表的起始位置，以0开始，不设置默认为0。
     * @param integer $Limit 单次查询返回的最大数量，0或不设置则使用默认值 20。
     * @param integer $OrderType 根据创建时间的排序方式，0或者不设置则使用降序排序， 1 表示升序排序。
     * @param integer $State 根据凭据状态进行过滤。
默认为0表示查询全部。
1 --  表示查询Enabled 凭据列表。
2 --  表示查询Disabled 凭据列表。
3 --  表示查询PendingDelete 凭据列表。
4 --  表示PendingCreate。
5 --  表示CreateFailed。
其中状态PendingCreate和CreateFailed只有在SecretType为云产品凭据时生效
     * @param string $SearchSecretName 根据凭据名称进行过滤，为空表示不过滤。
     * @param array $TagFilters 标签过滤条件。
     * @param integer $SecretType 0  -- 表示用户自定义凭据，默认为0。
1  -- 表示用户云产品凭据。
2 -- 表示SSH密钥对凭据。
3 -- 表示云API密钥对凭据。
     * @param string $ProductName 此参数仅在SecretType参数值为1时生效，
当SecretType值为1时：
如果ProductName值为空，则表示查询所有类型的云产品凭据
如果ProductName值为Mysql，则表示查询Mysql数据库凭据
如果ProductName值为Tdsql-mysql，则表示查询Tdsql（Mysql版本）的凭据
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
        if (array_key_exists("Offset",$param) and $param["Offset"] !== null) {
            $this->Offset = $param["Offset"];
        }

        if (array_key_exists("Limit",$param) and $param["Limit"] !== null) {
            $this->Limit = $param["Limit"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("State",$param) and $param["State"] !== null) {
            $this->State = $param["State"];
        }

        if (array_key_exists("SearchSecretName",$param) and $param["SearchSecretName"] !== null) {
            $this->SearchSecretName = $param["SearchSecretName"];
        }

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new TagFilter();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
        }

        if (array_key_exists("SecretType",$param) and $param["SecretType"] !== null) {
            $this->SecretType = $param["SecretType"];
        }

        if (array_key_exists("ProductName",$param) and $param["ProductName"] !== null) {
            $this->ProductName = $param["ProductName"];
        }
    }
}
