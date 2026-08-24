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
 * ListKeyDetail请求参数结构体
 *
 * @method integer getOffset() 获取<p>含义跟 SQL 查询的 Offset 一致，表示本次获取从按一定顺序排列数组的第 Offset 个元素开始，缺省为0</p>
 * @method void setOffset(integer $Offset) 设置<p>含义跟 SQL 查询的 Offset 一致，表示本次获取从按一定顺序排列数组的第 Offset 个元素开始，缺省为0</p>
 * @method integer getLimit() 获取<p>含义跟 SQL 查询的 Limit 一致，表示本次最多获取 Limit 个元素。缺省值为10，最大值为200</p>
 * @method void setLimit(integer $Limit) 设置<p>含义跟 SQL 查询的 Limit 一致，表示本次最多获取 Limit 个元素。缺省值为10，最大值为200</p>
 * @method integer getRole() 获取<p>根据创建者角色筛选，默认 0 表示用户自己创建的cmk， 1 表示授权其它云产品自动创建的cmk</p>
 * @method void setRole(integer $Role) 设置<p>根据创建者角色筛选，默认 0 表示用户自己创建的cmk， 1 表示授权其它云产品自动创建的cmk</p>
 * @method integer getOrderType() 获取<p>根据CMK创建时间排序， 0 表示按照降序排序，1表示按照升序排序</p>
 * @method void setOrderType(integer $OrderType) 设置<p>根据CMK创建时间排序， 0 表示按照降序排序，1表示按照升序排序</p>
 * @method integer getKeyState() 获取<p>根据CMK状态筛选， 0表示全部CMK， 1 表示仅查询Enabled CMK， 2 表示仅查询Disabled CMK，3 表示查询PendingDelete 状态的CMK(处于计划删除状态的Key)，4 表示查询 PendingImport 状态的CMK，5 表示查询 Archived 状态的 CMK</p>
 * @method void setKeyState(integer $KeyState) 设置<p>根据CMK状态筛选， 0表示全部CMK， 1 表示仅查询Enabled CMK， 2 表示仅查询Disabled CMK，3 表示查询PendingDelete 状态的CMK(处于计划删除状态的Key)，4 表示查询 PendingImport 状态的CMK，5 表示查询 Archived 状态的 CMK</p>
 * @method string getSearchKeyAlias() 获取<p>根据KeyId或者Alias进行模糊匹配查询</p>
 * @method void setSearchKeyAlias(string $SearchKeyAlias) 设置<p>根据KeyId或者Alias进行模糊匹配查询</p>
 * @method string getOrigin() 获取<p>根据CMK类型筛选， &quot;TENCENT_KMS&quot; 表示筛选密钥材料由KMS创建的CMK， &quot;EXTERNAL&quot; 表示筛选密钥材料需要用户导入的 EXTERNAL类型CMK，&quot;ALL&quot; 或者不设置表示两种类型都查询，大小写敏感。</p>
 * @method void setOrigin(string $Origin) 设置<p>根据CMK类型筛选， &quot;TENCENT_KMS&quot; 表示筛选密钥材料由KMS创建的CMK， &quot;EXTERNAL&quot; 表示筛选密钥材料需要用户导入的 EXTERNAL类型CMK，&quot;ALL&quot; 或者不设置表示两种类型都查询，大小写敏感。</p>
 * @method string getKeyUsage() 获取<p>根据CMK的KeyUsage筛选，ALL表示筛选全部，可使用的参数为：ALL 或 ENCRYPT_DECRYPT 或 ASYMMETRIC_DECRYPT_RSA_2048 或 ASYMMETRIC_DECRYPT_SM2 或 ASYMMETRIC_SIGN_VERIFY_SM2 或 ASYMMETRIC_SIGN_VERIFY_RSA_2048 或 ASYMMETRIC_SIGN_VERIFY_ECC，为空则默认筛选ENCRYPT_DECRYPT类型</p>
 * @method void setKeyUsage(string $KeyUsage) 设置<p>根据CMK的KeyUsage筛选，ALL表示筛选全部，可使用的参数为：ALL 或 ENCRYPT_DECRYPT 或 ASYMMETRIC_DECRYPT_RSA_2048 或 ASYMMETRIC_DECRYPT_SM2 或 ASYMMETRIC_SIGN_VERIFY_SM2 或 ASYMMETRIC_SIGN_VERIFY_RSA_2048 或 ASYMMETRIC_SIGN_VERIFY_ECC，为空则默认筛选ENCRYPT_DECRYPT类型</p>
 * @method array getTagFilters() 获取<p>标签过滤条件</p>
 * @method void setTagFilters(array $TagFilters) 设置<p>标签过滤条件</p>
 * @method string getHsmClusterId() 获取<p>KMS 高级版对应的 HSM 集群 ID（仅对 KMS 独占版/托管版服务实例有效）。当指定集群ID时查询集群的密钥列表；当指定default时,查询公有云共享版的密钥列表；当为空，默认查询所有的密钥列表包括集群和非集群。</p>
 * @method void setHsmClusterId(string $HsmClusterId) 设置<p>KMS 高级版对应的 HSM 集群 ID（仅对 KMS 独占版/托管版服务实例有效）。当指定集群ID时查询集群的密钥列表；当指定default时,查询公有云共享版的密钥列表；当为空，默认查询所有的密钥列表包括集群和非集群。</p>
 * @method array getMemberAccounts() 获取<p>可信服务成员账号信息数组</p>
 * @method void setMemberAccounts(array $MemberAccounts) 设置<p>可信服务成员账号信息数组</p>
 */
class ListKeyDetailRequest extends AbstractModel
{
    /**
     * @var integer <p>含义跟 SQL 查询的 Offset 一致，表示本次获取从按一定顺序排列数组的第 Offset 个元素开始，缺省为0</p>
     */
    public $Offset;

    /**
     * @var integer <p>含义跟 SQL 查询的 Limit 一致，表示本次最多获取 Limit 个元素。缺省值为10，最大值为200</p>
     */
    public $Limit;

    /**
     * @var integer <p>根据创建者角色筛选，默认 0 表示用户自己创建的cmk， 1 表示授权其它云产品自动创建的cmk</p>
     */
    public $Role;

    /**
     * @var integer <p>根据CMK创建时间排序， 0 表示按照降序排序，1表示按照升序排序</p>
     */
    public $OrderType;

    /**
     * @var integer <p>根据CMK状态筛选， 0表示全部CMK， 1 表示仅查询Enabled CMK， 2 表示仅查询Disabled CMK，3 表示查询PendingDelete 状态的CMK(处于计划删除状态的Key)，4 表示查询 PendingImport 状态的CMK，5 表示查询 Archived 状态的 CMK</p>
     */
    public $KeyState;

    /**
     * @var string <p>根据KeyId或者Alias进行模糊匹配查询</p>
     */
    public $SearchKeyAlias;

    /**
     * @var string <p>根据CMK类型筛选， &quot;TENCENT_KMS&quot; 表示筛选密钥材料由KMS创建的CMK， &quot;EXTERNAL&quot; 表示筛选密钥材料需要用户导入的 EXTERNAL类型CMK，&quot;ALL&quot; 或者不设置表示两种类型都查询，大小写敏感。</p>
     */
    public $Origin;

    /**
     * @var string <p>根据CMK的KeyUsage筛选，ALL表示筛选全部，可使用的参数为：ALL 或 ENCRYPT_DECRYPT 或 ASYMMETRIC_DECRYPT_RSA_2048 或 ASYMMETRIC_DECRYPT_SM2 或 ASYMMETRIC_SIGN_VERIFY_SM2 或 ASYMMETRIC_SIGN_VERIFY_RSA_2048 或 ASYMMETRIC_SIGN_VERIFY_ECC，为空则默认筛选ENCRYPT_DECRYPT类型</p>
     */
    public $KeyUsage;

    /**
     * @var array <p>标签过滤条件</p>
     */
    public $TagFilters;

    /**
     * @var string <p>KMS 高级版对应的 HSM 集群 ID（仅对 KMS 独占版/托管版服务实例有效）。当指定集群ID时查询集群的密钥列表；当指定default时,查询公有云共享版的密钥列表；当为空，默认查询所有的密钥列表包括集群和非集群。</p>
     */
    public $HsmClusterId;

    /**
     * @var array <p>可信服务成员账号信息数组</p>
     */
    public $MemberAccounts;

    /**
     * @param integer $Offset <p>含义跟 SQL 查询的 Offset 一致，表示本次获取从按一定顺序排列数组的第 Offset 个元素开始，缺省为0</p>
     * @param integer $Limit <p>含义跟 SQL 查询的 Limit 一致，表示本次最多获取 Limit 个元素。缺省值为10，最大值为200</p>
     * @param integer $Role <p>根据创建者角色筛选，默认 0 表示用户自己创建的cmk， 1 表示授权其它云产品自动创建的cmk</p>
     * @param integer $OrderType <p>根据CMK创建时间排序， 0 表示按照降序排序，1表示按照升序排序</p>
     * @param integer $KeyState <p>根据CMK状态筛选， 0表示全部CMK， 1 表示仅查询Enabled CMK， 2 表示仅查询Disabled CMK，3 表示查询PendingDelete 状态的CMK(处于计划删除状态的Key)，4 表示查询 PendingImport 状态的CMK，5 表示查询 Archived 状态的 CMK</p>
     * @param string $SearchKeyAlias <p>根据KeyId或者Alias进行模糊匹配查询</p>
     * @param string $Origin <p>根据CMK类型筛选， &quot;TENCENT_KMS&quot; 表示筛选密钥材料由KMS创建的CMK， &quot;EXTERNAL&quot; 表示筛选密钥材料需要用户导入的 EXTERNAL类型CMK，&quot;ALL&quot; 或者不设置表示两种类型都查询，大小写敏感。</p>
     * @param string $KeyUsage <p>根据CMK的KeyUsage筛选，ALL表示筛选全部，可使用的参数为：ALL 或 ENCRYPT_DECRYPT 或 ASYMMETRIC_DECRYPT_RSA_2048 或 ASYMMETRIC_DECRYPT_SM2 或 ASYMMETRIC_SIGN_VERIFY_SM2 或 ASYMMETRIC_SIGN_VERIFY_RSA_2048 或 ASYMMETRIC_SIGN_VERIFY_ECC，为空则默认筛选ENCRYPT_DECRYPT类型</p>
     * @param array $TagFilters <p>标签过滤条件</p>
     * @param string $HsmClusterId <p>KMS 高级版对应的 HSM 集群 ID（仅对 KMS 独占版/托管版服务实例有效）。当指定集群ID时查询集群的密钥列表；当指定default时,查询公有云共享版的密钥列表；当为空，默认查询所有的密钥列表包括集群和非集群。</p>
     * @param array $MemberAccounts <p>可信服务成员账号信息数组</p>
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

        if (array_key_exists("KeyUsage",$param) and $param["KeyUsage"] !== null) {
            $this->KeyUsage = $param["KeyUsage"];
        }

        if (array_key_exists("TagFilters",$param) and $param["TagFilters"] !== null) {
            $this->TagFilters = [];
            foreach ($param["TagFilters"] as $key => $value){
                $obj = new TagFilter();
                $obj->deserialize($value);
                array_push($this->TagFilters, $obj);
            }
        }

        if (array_key_exists("HsmClusterId",$param) and $param["HsmClusterId"] !== null) {
            $this->HsmClusterId = $param["HsmClusterId"];
        }

        if (array_key_exists("MemberAccounts",$param) and $param["MemberAccounts"] !== null) {
            $this->MemberAccounts = [];
            foreach ($param["MemberAccounts"] as $key => $value){
                $obj = new MemberAccount();
                $obj->deserialize($value);
                array_push($this->MemberAccounts, $obj);
            }
        }
    }
}
