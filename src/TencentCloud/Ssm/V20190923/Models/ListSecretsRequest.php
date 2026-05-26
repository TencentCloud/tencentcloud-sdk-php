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
namespace TencentCloud\Ssm\V20190923\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListSecrets请求参数结构体
 *
 * @method integer getOffset() 获取<p>查询列表的起始位置，以0开始，不设置默认为0。</p>
 * @method void setOffset(integer $Offset) 设置<p>查询列表的起始位置，以0开始，不设置默认为0。</p>
 * @method integer getLimit() 获取<p>单次查询返回的最大数量，0或不设置则使用默认值 20。</p>
 * @method void setLimit(integer $Limit) 设置<p>单次查询返回的最大数量，0或不设置则使用默认值 20。</p>
 * @method integer getOrderType() 获取<p>根据创建时间的排序方式，0或者不设置则使用降序排序， 1 表示升序排序。</p>
 * @method void setOrderType(integer $OrderType) 设置<p>根据创建时间的排序方式，0或者不设置则使用降序排序， 1 表示升序排序。</p>
 * @method integer getState() 获取<p>根据凭据状态进行过滤。<br>默认为0表示查询全部。<br>1 --  表示查询Enabled 凭据列表。<br>2 --  表示查询Disabled 凭据列表。<br>3 --  表示查询PendingDelete 凭据列表。<br>4 --  表示PendingCreate。<br>5 --  表示CreateFailed。<br>其中状态PendingCreate和CreateFailed只有在SecretType为云产品凭据时生效</p>
 * @method void setState(integer $State) 设置<p>根据凭据状态进行过滤。<br>默认为0表示查询全部。<br>1 --  表示查询Enabled 凭据列表。<br>2 --  表示查询Disabled 凭据列表。<br>3 --  表示查询PendingDelete 凭据列表。<br>4 --  表示PendingCreate。<br>5 --  表示CreateFailed。<br>其中状态PendingCreate和CreateFailed只有在SecretType为云产品凭据时生效</p>
 * @method string getSearchSecretName() 获取<p>根据凭据名称进行过滤，为空表示不过滤。</p>
 * @method void setSearchSecretName(string $SearchSecretName) 设置<p>根据凭据名称进行过滤，为空表示不过滤。</p>
 * @method array getTagFilters() 获取<p>标签过滤条件。</p>
 * @method void setTagFilters(array $TagFilters) 设置<p>标签过滤条件。</p>
 * @method integer getSecretType() 获取<p>0  -- 表示用户自定义凭据，默认为0。<br>1  -- 表示用户云产品凭据。<br>2 -- 表示SSH密钥对凭据。<br>3 -- 表示云API密钥对凭据。</p>
 * @method void setSecretType(integer $SecretType) 设置<p>0  -- 表示用户自定义凭据，默认为0。<br>1  -- 表示用户云产品凭据。<br>2 -- 表示SSH密钥对凭据。<br>3 -- 表示云API密钥对凭据。</p>
 * @method string getProductName() 获取<p>此参数仅在SecretType参数值为1时生效，<br>当SecretType值为1时：<br>如果ProductName值为空，则表示查询所有类型的云产品凭据；<br>如果ProductName值为某个指定的云产品值如Mysql时，则表示查询Mysql数据库凭据；<br>如果ProductName值为多个云产品值，如：Mysql,Tdsql-mysql,Tdsql_C_Mysql（多个值以英文逗号,分隔开）则表示查询三种云产品类型的凭据；<br>支持的云产品列表请通过接口：DescribeSupportedProducts进行查询。</p>
 * @method void setProductName(string $ProductName) 设置<p>此参数仅在SecretType参数值为1时生效，<br>当SecretType值为1时：<br>如果ProductName值为空，则表示查询所有类型的云产品凭据；<br>如果ProductName值为某个指定的云产品值如Mysql时，则表示查询Mysql数据库凭据；<br>如果ProductName值为多个云产品值，如：Mysql,Tdsql-mysql,Tdsql_C_Mysql（多个值以英文逗号,分隔开）则表示查询三种云产品类型的凭据；<br>支持的云产品列表请通过接口：DescribeSupportedProducts进行查询。</p>
 * @method integer getEncryptType() 获取<p>凭据加密类型</p><p>枚举值：</p><ul><li>0： KMS 密钥加密</li><li>1： 软密钥加密</li></ul><p>默认值：0</p>
 * @method void setEncryptType(integer $EncryptType) 设置<p>凭据加密类型</p><p>枚举值：</p><ul><li>0： KMS 密钥加密</li><li>1： 软密钥加密</li></ul><p>默认值：0</p>
 */
class ListSecretsRequest extends AbstractModel
{
    /**
     * @var integer <p>查询列表的起始位置，以0开始，不设置默认为0。</p>
     */
    public $Offset;

    /**
     * @var integer <p>单次查询返回的最大数量，0或不设置则使用默认值 20。</p>
     */
    public $Limit;

    /**
     * @var integer <p>根据创建时间的排序方式，0或者不设置则使用降序排序， 1 表示升序排序。</p>
     */
    public $OrderType;

    /**
     * @var integer <p>根据凭据状态进行过滤。<br>默认为0表示查询全部。<br>1 --  表示查询Enabled 凭据列表。<br>2 --  表示查询Disabled 凭据列表。<br>3 --  表示查询PendingDelete 凭据列表。<br>4 --  表示PendingCreate。<br>5 --  表示CreateFailed。<br>其中状态PendingCreate和CreateFailed只有在SecretType为云产品凭据时生效</p>
     */
    public $State;

    /**
     * @var string <p>根据凭据名称进行过滤，为空表示不过滤。</p>
     */
    public $SearchSecretName;

    /**
     * @var array <p>标签过滤条件。</p>
     */
    public $TagFilters;

    /**
     * @var integer <p>0  -- 表示用户自定义凭据，默认为0。<br>1  -- 表示用户云产品凭据。<br>2 -- 表示SSH密钥对凭据。<br>3 -- 表示云API密钥对凭据。</p>
     */
    public $SecretType;

    /**
     * @var string <p>此参数仅在SecretType参数值为1时生效，<br>当SecretType值为1时：<br>如果ProductName值为空，则表示查询所有类型的云产品凭据；<br>如果ProductName值为某个指定的云产品值如Mysql时，则表示查询Mysql数据库凭据；<br>如果ProductName值为多个云产品值，如：Mysql,Tdsql-mysql,Tdsql_C_Mysql（多个值以英文逗号,分隔开）则表示查询三种云产品类型的凭据；<br>支持的云产品列表请通过接口：DescribeSupportedProducts进行查询。</p>
     */
    public $ProductName;

    /**
     * @var integer <p>凭据加密类型</p><p>枚举值：</p><ul><li>0： KMS 密钥加密</li><li>1： 软密钥加密</li></ul><p>默认值：0</p>
     */
    public $EncryptType;

    /**
     * @param integer $Offset <p>查询列表的起始位置，以0开始，不设置默认为0。</p>
     * @param integer $Limit <p>单次查询返回的最大数量，0或不设置则使用默认值 20。</p>
     * @param integer $OrderType <p>根据创建时间的排序方式，0或者不设置则使用降序排序， 1 表示升序排序。</p>
     * @param integer $State <p>根据凭据状态进行过滤。<br>默认为0表示查询全部。<br>1 --  表示查询Enabled 凭据列表。<br>2 --  表示查询Disabled 凭据列表。<br>3 --  表示查询PendingDelete 凭据列表。<br>4 --  表示PendingCreate。<br>5 --  表示CreateFailed。<br>其中状态PendingCreate和CreateFailed只有在SecretType为云产品凭据时生效</p>
     * @param string $SearchSecretName <p>根据凭据名称进行过滤，为空表示不过滤。</p>
     * @param array $TagFilters <p>标签过滤条件。</p>
     * @param integer $SecretType <p>0  -- 表示用户自定义凭据，默认为0。<br>1  -- 表示用户云产品凭据。<br>2 -- 表示SSH密钥对凭据。<br>3 -- 表示云API密钥对凭据。</p>
     * @param string $ProductName <p>此参数仅在SecretType参数值为1时生效，<br>当SecretType值为1时：<br>如果ProductName值为空，则表示查询所有类型的云产品凭据；<br>如果ProductName值为某个指定的云产品值如Mysql时，则表示查询Mysql数据库凭据；<br>如果ProductName值为多个云产品值，如：Mysql,Tdsql-mysql,Tdsql_C_Mysql（多个值以英文逗号,分隔开）则表示查询三种云产品类型的凭据；<br>支持的云产品列表请通过接口：DescribeSupportedProducts进行查询。</p>
     * @param integer $EncryptType <p>凭据加密类型</p><p>枚举值：</p><ul><li>0： KMS 密钥加密</li><li>1： 软密钥加密</li></ul><p>默认值：0</p>
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

        if (array_key_exists("EncryptType",$param) and $param["EncryptType"] !== null) {
            $this->EncryptType = $param["EncryptType"];
        }
    }
}
