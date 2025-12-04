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
namespace TencentCloud\Kms\V20190118\Models;
use TencentCloud\Common\AbstractModel;

/**
 * ListDataKeyDetail请求参数结构体
 *
 * @method integer getOffset() 获取含义跟 SQL 查询的 Offset 一致，表示本次获取从按一定顺序排列数组的第 Offset 个元素开始，缺省为0
 * @method void setOffset(integer $Offset) 设置含义跟 SQL 查询的 Offset 一致，表示本次获取从按一定顺序排列数组的第 Offset 个元素开始，缺省为0
 * @method integer getLimit() 获取含义跟 SQL 查询的 Limit 一致，表示本次最多获取 Limit 个元素。缺省值为10，最大值为200
 * @method void setLimit(integer $Limit) 设置含义跟 SQL 查询的 Limit 一致，表示本次最多获取 Limit 个元素。缺省值为10，最大值为200
 * @method integer getRole() 获取根据创建者角色筛选，默认 0 表示用户自己创建的数据密钥， 1 表示授权其它云产品自动创建的数据密钥
 * @method void setRole(integer $Role) 设置根据创建者角色筛选，默认 0 表示用户自己创建的数据密钥， 1 表示授权其它云产品自动创建的数据密钥
 * @method integer getOrderType() 获取根据DataKey创建时间排序， 0 表示按照降序排序，1表示按照升序排序
 * @method void setOrderType(integer $OrderType) 设置根据DataKey创建时间排序， 0 表示按照降序排序，1表示按照升序排序
 * @method integer getKeyState() 获取根据DataKey状态筛选， 0表示全部DataKey， 1 表示仅查询Enabled DataKey， 2 表示仅查询Disabled DataKey，3 表示查询PendingDelete 状态的DataKey(处于计划删除状态的Key)。
 * @method void setKeyState(integer $KeyState) 设置根据DataKey状态筛选， 0表示全部DataKey， 1 表示仅查询Enabled DataKey， 2 表示仅查询Disabled DataKey，3 表示查询PendingDelete 状态的DataKey(处于计划删除状态的Key)。
 * @method string getSearchKeyAlias() 获取根据DataKeyId或者DataKeyName进行模糊匹配查询
 * @method void setSearchKeyAlias(string $SearchKeyAlias) 设置根据DataKeyId或者DataKeyName进行模糊匹配查询
 * @method string getOrigin() 获取根据DateKey类型筛选， "TENCENT_KMS" 表示筛选密钥材料由KMS创建的数据密钥， "EXTERNAL" 表示筛选密钥材料需要用户导入的 EXTERNAL类型数据密钥，"ALL" 或者不设置表示两种类型都查询，大小写敏感。
 * @method void setOrigin(string $Origin) 设置根据DateKey类型筛选， "TENCENT_KMS" 表示筛选密钥材料由KMS创建的数据密钥， "EXTERNAL" 表示筛选密钥材料需要用户导入的 EXTERNAL类型数据密钥，"ALL" 或者不设置表示两种类型都查询，大小写敏感。
 * @method string getHsmClusterId() 获取KMS 高级版对应的 HSM 集群 ID。
 * @method void setHsmClusterId(string $HsmClusterId) 设置KMS 高级版对应的 HSM 集群 ID。
 * @method string getKeyId() 获取根密钥全局唯一标识符
 * @method void setKeyId(string $KeyId) 设置根密钥全局唯一标识符
 * @method integer getDataKeyLen() 获取数据密钥的长度
 * @method void setDataKeyLen(integer $DataKeyLen) 设置数据密钥的长度
 * @method array getTagFilters() 获取标签过滤条件
 * @method void setTagFilters(array $TagFilters) 设置标签过滤条件
 */
class ListDataKeyDetailRequest extends AbstractModel
{
    /**
     * @var integer 含义跟 SQL 查询的 Offset 一致，表示本次获取从按一定顺序排列数组的第 Offset 个元素开始，缺省为0
     */
    public $Offset;

    /**
     * @var integer 含义跟 SQL 查询的 Limit 一致，表示本次最多获取 Limit 个元素。缺省值为10，最大值为200
     */
    public $Limit;

    /**
     * @var integer 根据创建者角色筛选，默认 0 表示用户自己创建的数据密钥， 1 表示授权其它云产品自动创建的数据密钥
     */
    public $Role;

    /**
     * @var integer 根据DataKey创建时间排序， 0 表示按照降序排序，1表示按照升序排序
     */
    public $OrderType;

    /**
     * @var integer 根据DataKey状态筛选， 0表示全部DataKey， 1 表示仅查询Enabled DataKey， 2 表示仅查询Disabled DataKey，3 表示查询PendingDelete 状态的DataKey(处于计划删除状态的Key)。
     */
    public $KeyState;

    /**
     * @var string 根据DataKeyId或者DataKeyName进行模糊匹配查询
     */
    public $SearchKeyAlias;

    /**
     * @var string 根据DateKey类型筛选， "TENCENT_KMS" 表示筛选密钥材料由KMS创建的数据密钥， "EXTERNAL" 表示筛选密钥材料需要用户导入的 EXTERNAL类型数据密钥，"ALL" 或者不设置表示两种类型都查询，大小写敏感。
     */
    public $Origin;

    /**
     * @var string KMS 高级版对应的 HSM 集群 ID。
     */
    public $HsmClusterId;

    /**
     * @var string 根密钥全局唯一标识符
     */
    public $KeyId;

    /**
     * @var integer 数据密钥的长度
     */
    public $DataKeyLen;

    /**
     * @var array 标签过滤条件
     */
    public $TagFilters;

    /**
     * @param integer $Offset 含义跟 SQL 查询的 Offset 一致，表示本次获取从按一定顺序排列数组的第 Offset 个元素开始，缺省为0
     * @param integer $Limit 含义跟 SQL 查询的 Limit 一致，表示本次最多获取 Limit 个元素。缺省值为10，最大值为200
     * @param integer $Role 根据创建者角色筛选，默认 0 表示用户自己创建的数据密钥， 1 表示授权其它云产品自动创建的数据密钥
     * @param integer $OrderType 根据DataKey创建时间排序， 0 表示按照降序排序，1表示按照升序排序
     * @param integer $KeyState 根据DataKey状态筛选， 0表示全部DataKey， 1 表示仅查询Enabled DataKey， 2 表示仅查询Disabled DataKey，3 表示查询PendingDelete 状态的DataKey(处于计划删除状态的Key)。
     * @param string $SearchKeyAlias 根据DataKeyId或者DataKeyName进行模糊匹配查询
     * @param string $Origin 根据DateKey类型筛选， "TENCENT_KMS" 表示筛选密钥材料由KMS创建的数据密钥， "EXTERNAL" 表示筛选密钥材料需要用户导入的 EXTERNAL类型数据密钥，"ALL" 或者不设置表示两种类型都查询，大小写敏感。
     * @param string $HsmClusterId KMS 高级版对应的 HSM 集群 ID。
     * @param string $KeyId 根密钥全局唯一标识符
     * @param integer $DataKeyLen 数据密钥的长度
     * @param array $TagFilters 标签过滤条件
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

        if (array_key_exists("Role",$param) and $param["Role"] !== null) {
            $this->Role = $param["Role"];
        }

        if (array_key_exists("OrderType",$param) and $param["OrderType"] !== null) {
            $this->OrderType = $param["OrderType"];
        }

        if (array_key_exists("KeyState",$param) and $param["KeyState"] !== null) {
            $this->KeyState = $param["KeyState"];
        }

        if (array_key_exists("SearchKeyAlias",$param) and $param["SearchKeyAlias"] !== null) {
            $this->SearchKeyAlias = $param["SearchKeyAlias"];
        }

        if (array_key_exists("Origin",$param) and $param["Origin"] !== null) {
            $this->Origin = $param["Origin"];
        }

        if (array_key_exists("HsmClusterId",$param) and $param["HsmClusterId"] !== null) {
            $this->HsmClusterId = $param["HsmClusterId"];
        }

        if (array_key_exists("KeyId",$param) and $param["KeyId"] !== null) {
            $this->KeyId = $param["KeyId"];
        }

        if (array_key_exists("DataKeyLen",$param) and $param["DataKeyLen"] !== null) {
            $this->DataKeyLen = $param["DataKeyLen"];
        }

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new TagFilter();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
        }
    }
}
