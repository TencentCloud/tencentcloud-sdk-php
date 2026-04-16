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
namespace TencentCloud\Dts\V20211206\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 迁移选项，描述任务如何执行迁移等一系列配置信息
 *
 * @method DatabaseTableObject getDatabaseTable() 获取<p>迁移对象选项，需要告知迁移服务迁移哪些库表对象</p>
 * @method void setDatabaseTable(DatabaseTableObject $DatabaseTable) 设置<p>迁移对象选项，需要告知迁移服务迁移哪些库表对象</p>
 * @method string getMigrateType() 获取<p>迁移类型，full(全量迁移)，structure(结构迁移)，fullAndIncrement(全量加增量迁移)， 默认为fullAndIncrement;注意redis,keewidb产品只支持fullAndIncrement类型。</p>
 * @method void setMigrateType(string $MigrateType) 设置<p>迁移类型，full(全量迁移)，structure(结构迁移)，fullAndIncrement(全量加增量迁移)， 默认为fullAndIncrement;注意redis,keewidb产品只支持fullAndIncrement类型。</p>
 * @method ConsistencyOption getConsistency() 获取<p>数据一致性校验选项， 默认为不开启一致性校验</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsistency(ConsistencyOption $Consistency) 设置<p>数据一致性校验选项， 默认为不开启一致性校验</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getIsMigrateAccount() 获取<p>是否迁移账号，true(迁移账号)，false(不迁移账号)</p>
 * @method void setIsMigrateAccount(boolean $IsMigrateAccount) 设置<p>是否迁移账号，true(迁移账号)，false(不迁移账号)</p>
 * @method boolean getIsOverrideRoot() 获取<p>是否用源库Root账户覆盖目标库，值包括：false-不覆盖，true-覆盖，选择库表或者结构迁移时应该为false，注意只对旧版迁移有效</p>
 * @method void setIsOverrideRoot(boolean $IsOverrideRoot) 设置<p>是否用源库Root账户覆盖目标库，值包括：false-不覆盖，true-覆盖，选择库表或者结构迁移时应该为false，注意只对旧版迁移有效</p>
 * @method boolean getIsDstReadOnly() 获取<p>是否在迁移时设置目标库只读(仅对mysql有效)，true(设置只读)、false(不设置只读，默认此值)</p>
 * @method void setIsDstReadOnly(boolean $IsDstReadOnly) 设置<p>是否在迁移时设置目标库只读(仅对mysql有效)，true(设置只读)、false(不设置只读，默认此值)</p>
 * @method array getExtraAttr() 获取<p>其他附加信息，对于特定库可设置额外参数，Redis可定义如下的参数:<br>[&quot;DstWriteMode&quot;:normal,     目标库写入模式,可取值clearData(清空目标实例数据)、overwrite(以覆盖写的方式执行任务)、normal(要求目标端为空，否则校验不通过) ，不显示指定默认以覆盖写的方式执行任务    &quot;IsDstReadOnly&quot;:true,     是否在迁移时设置目标库只读,true(设置只读)、false(不设置只读)     &quot;ClientOutputBufferHardLimit&quot;:512,     从机缓冲区的硬性容量限制(MB)     &quot;ClientOutputBufferSoftLimit&quot;:512,     从机缓冲区的软性容量限制(MB)     &quot;ClientOutputBufferPersistTime&quot;:60, 从机缓冲区的软性限制持续时间(秒)     &quot;ReplBacklogSize&quot;:512,     环形缓冲区容量限制(MB)     &quot;ReplTimeout&quot;:120，        复制超时时间(秒)     &quot;IsExpireKey&quot;:&quot;true&quot;,过期key自动淘汰]</p>
 * @method void setExtraAttr(array $ExtraAttr) 设置<p>其他附加信息，对于特定库可设置额外参数，Redis可定义如下的参数:<br>[&quot;DstWriteMode&quot;:normal,     目标库写入模式,可取值clearData(清空目标实例数据)、overwrite(以覆盖写的方式执行任务)、normal(要求目标端为空，否则校验不通过) ，不显示指定默认以覆盖写的方式执行任务    &quot;IsDstReadOnly&quot;:true,     是否在迁移时设置目标库只读,true(设置只读)、false(不设置只读)     &quot;ClientOutputBufferHardLimit&quot;:512,     从机缓冲区的硬性容量限制(MB)     &quot;ClientOutputBufferSoftLimit&quot;:512,     从机缓冲区的软性容量限制(MB)     &quot;ClientOutputBufferPersistTime&quot;:60, 从机缓冲区的软性限制持续时间(秒)     &quot;ReplBacklogSize&quot;:512,     环形缓冲区容量限制(MB)     &quot;ReplTimeout&quot;:120，        复制超时时间(秒)     &quot;IsExpireKey&quot;:&quot;true&quot;,过期key自动淘汰]</p>
 * @method string getMigrateWay() 获取<p>pgsql迁移分类：logical(逻辑迁移)、physical(物理迁移)</p>
 * @method void setMigrateWay(string $MigrateWay) 设置<p>pgsql迁移分类：logical(逻辑迁移)、physical(物理迁移)</p>
 */
class MigrateOption extends AbstractModel
{
    /**
     * @var DatabaseTableObject <p>迁移对象选项，需要告知迁移服务迁移哪些库表对象</p>
     */
    public $DatabaseTable;

    /**
     * @var string <p>迁移类型，full(全量迁移)，structure(结构迁移)，fullAndIncrement(全量加增量迁移)， 默认为fullAndIncrement;注意redis,keewidb产品只支持fullAndIncrement类型。</p>
     */
    public $MigrateType;

    /**
     * @var ConsistencyOption <p>数据一致性校验选项， 默认为不开启一致性校验</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Consistency;

    /**
     * @var boolean <p>是否迁移账号，true(迁移账号)，false(不迁移账号)</p>
     */
    public $IsMigrateAccount;

    /**
     * @var boolean <p>是否用源库Root账户覆盖目标库，值包括：false-不覆盖，true-覆盖，选择库表或者结构迁移时应该为false，注意只对旧版迁移有效</p>
     */
    public $IsOverrideRoot;

    /**
     * @var boolean <p>是否在迁移时设置目标库只读(仅对mysql有效)，true(设置只读)、false(不设置只读，默认此值)</p>
     */
    public $IsDstReadOnly;

    /**
     * @var array <p>其他附加信息，对于特定库可设置额外参数，Redis可定义如下的参数:<br>[&quot;DstWriteMode&quot;:normal,     目标库写入模式,可取值clearData(清空目标实例数据)、overwrite(以覆盖写的方式执行任务)、normal(要求目标端为空，否则校验不通过) ，不显示指定默认以覆盖写的方式执行任务    &quot;IsDstReadOnly&quot;:true,     是否在迁移时设置目标库只读,true(设置只读)、false(不设置只读)     &quot;ClientOutputBufferHardLimit&quot;:512,     从机缓冲区的硬性容量限制(MB)     &quot;ClientOutputBufferSoftLimit&quot;:512,     从机缓冲区的软性容量限制(MB)     &quot;ClientOutputBufferPersistTime&quot;:60, 从机缓冲区的软性限制持续时间(秒)     &quot;ReplBacklogSize&quot;:512,     环形缓冲区容量限制(MB)     &quot;ReplTimeout&quot;:120，        复制超时时间(秒)     &quot;IsExpireKey&quot;:&quot;true&quot;,过期key自动淘汰]</p>
     */
    public $ExtraAttr;

    /**
     * @var string <p>pgsql迁移分类：logical(逻辑迁移)、physical(物理迁移)</p>
     */
    public $MigrateWay;

    /**
     * @param DatabaseTableObject $DatabaseTable <p>迁移对象选项，需要告知迁移服务迁移哪些库表对象</p>
     * @param string $MigrateType <p>迁移类型，full(全量迁移)，structure(结构迁移)，fullAndIncrement(全量加增量迁移)， 默认为fullAndIncrement;注意redis,keewidb产品只支持fullAndIncrement类型。</p>
     * @param ConsistencyOption $Consistency <p>数据一致性校验选项， 默认为不开启一致性校验</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $IsMigrateAccount <p>是否迁移账号，true(迁移账号)，false(不迁移账号)</p>
     * @param boolean $IsOverrideRoot <p>是否用源库Root账户覆盖目标库，值包括：false-不覆盖，true-覆盖，选择库表或者结构迁移时应该为false，注意只对旧版迁移有效</p>
     * @param boolean $IsDstReadOnly <p>是否在迁移时设置目标库只读(仅对mysql有效)，true(设置只读)、false(不设置只读，默认此值)</p>
     * @param array $ExtraAttr <p>其他附加信息，对于特定库可设置额外参数，Redis可定义如下的参数:<br>[&quot;DstWriteMode&quot;:normal,     目标库写入模式,可取值clearData(清空目标实例数据)、overwrite(以覆盖写的方式执行任务)、normal(要求目标端为空，否则校验不通过) ，不显示指定默认以覆盖写的方式执行任务    &quot;IsDstReadOnly&quot;:true,     是否在迁移时设置目标库只读,true(设置只读)、false(不设置只读)     &quot;ClientOutputBufferHardLimit&quot;:512,     从机缓冲区的硬性容量限制(MB)     &quot;ClientOutputBufferSoftLimit&quot;:512,     从机缓冲区的软性容量限制(MB)     &quot;ClientOutputBufferPersistTime&quot;:60, 从机缓冲区的软性限制持续时间(秒)     &quot;ReplBacklogSize&quot;:512,     环形缓冲区容量限制(MB)     &quot;ReplTimeout&quot;:120，        复制超时时间(秒)     &quot;IsExpireKey&quot;:&quot;true&quot;,过期key自动淘汰]</p>
     * @param string $MigrateWay <p>pgsql迁移分类：logical(逻辑迁移)、physical(物理迁移)</p>
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
        if (array_key_exists("DatabaseTable",$param) and $param["DatabaseTable"] !== null) {
            $this->DatabaseTable = new DatabaseTableObject();
            $this->DatabaseTable->deserialize($param["DatabaseTable"]);
        }

        if (array_key_exists("MigrateType",$param) and $param["MigrateType"] !== null) {
            $this->MigrateType = $param["MigrateType"];
        }

        if (array_key_exists("Consistency",$param) and $param["Consistency"] !== null) {
            $this->Consistency = new ConsistencyOption();
            $this->Consistency->deserialize($param["Consistency"]);
        }

        if (array_key_exists("IsMigrateAccount",$param) and $param["IsMigrateAccount"] !== null) {
            $this->IsMigrateAccount = $param["IsMigrateAccount"];
        }

        if (array_key_exists("IsOverrideRoot",$param) and $param["IsOverrideRoot"] !== null) {
            $this->IsOverrideRoot = $param["IsOverrideRoot"];
        }

        if (array_key_exists("IsDstReadOnly",$param) and $param["IsDstReadOnly"] !== null) {
            $this->IsDstReadOnly = $param["IsDstReadOnly"];
        }

        if (array_key_exists("ExtraAttr",$param) and $param["ExtraAttr"] !== null) {
            $this->ExtraAttr = [];
            foreach ($param["ExtraAttr"] as $key => $value){
                $obj = new KeyValuePairOption();
                $obj->deserialize($value);
                array_push($this->ExtraAttr, $obj);
            }
        }

        if (array_key_exists("MigrateWay",$param) and $param["MigrateWay"] !== null) {
            $this->MigrateWay = $param["MigrateWay"];
        }
    }
}
