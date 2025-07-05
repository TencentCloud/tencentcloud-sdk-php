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
namespace TencentCloud\Oceanus\V20190422\Models;
use TencentCloud\Common\AbstractModel;

/**
 * setats类型
 *
 * @method string getSetatsSerialId() 获取setats serialId
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSetatsSerialId(string $SetatsSerialId) 设置setats serialId
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取1  // 停止
2  // 运行中
3  // 初始化中
4  // 扩容中
5  // Warehoouse未配置
6  // Warehoouse配置中
7  // 重启中
-2 // 已删除(集群被销毁时更新为此状态)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置1  // 停止
2  // 运行中
3  // 初始化中
4  // 扩容中
5  // Warehoouse未配置
6  // Warehoouse配置中
7  // 重启中
-2 // 已删除(集群被销毁时更新为此状态)
注意：此字段可能返回 null，表示取不到有效值。
 * @method Warehouse getWarehouse() 获取setats warehouse
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWarehouse(Warehouse $Warehouse) 设置setats warehouse
注意：此字段可能返回 null，表示取不到有效值。
 * @method SetatsCvmInfo getMasterInfo() 获取setats master 机器规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMasterInfo(SetatsCvmInfo $MasterInfo) 设置setats master 机器规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method SetatsCvmInfo getWorkerInfo() 获取setats worker规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkerInfo(SetatsCvmInfo $WorkerInfo) 设置setats worker规格
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAutoRenewFlag() 获取自动续费
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置自动续费
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireTime() 获取过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(string $ExpireTime) 设置过期时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSecondsUntilExpiry() 获取过期时间 秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecondsUntilExpiry(string $SecondsUntilExpiry) 设置过期时间 秒
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getManagerUrl() 获取manager url
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setManagerUrl(string $ManagerUrl) 设置manager url
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsolatedTime() 获取隔离时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsolatedTime(string $IsolatedTime) 设置隔离时间
注意：此字段可能返回 null，表示取不到有效值。
 */
class Setats extends AbstractModel
{
    /**
     * @var string setats serialId
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SetatsSerialId;

    /**
     * @var integer 1  // 停止
2  // 运行中
3  // 初始化中
4  // 扩容中
5  // Warehoouse未配置
6  // Warehoouse配置中
7  // 重启中
-2 // 已删除(集群被销毁时更新为此状态)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var Warehouse setats warehouse
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Warehouse;

    /**
     * @var SetatsCvmInfo setats master 机器规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MasterInfo;

    /**
     * @var SetatsCvmInfo setats worker规格
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkerInfo;

    /**
     * @var array 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var integer 自动续费
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoRenewFlag;

    /**
     * @var string 过期时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var string 过期时间 秒
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecondsUntilExpiry;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string manager url
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ManagerUrl;

    /**
     * @var string 隔离时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsolatedTime;

    /**
     * @param string $SetatsSerialId setats serialId
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status 1  // 停止
2  // 运行中
3  // 初始化中
4  // 扩容中
5  // Warehoouse未配置
6  // Warehoouse配置中
7  // 重启中
-2 // 已删除(集群被销毁时更新为此状态)
注意：此字段可能返回 null，表示取不到有效值。
     * @param Warehouse $Warehouse setats warehouse
注意：此字段可能返回 null，表示取不到有效值。
     * @param SetatsCvmInfo $MasterInfo setats master 机器规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param SetatsCvmInfo $WorkerInfo setats worker规格
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AutoRenewFlag 自动续费
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireTime 过期时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SecondsUntilExpiry 过期时间 秒
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ManagerUrl manager url
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsolatedTime 隔离时间
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
        if (array_key_exists("SetatsSerialId",$param) and $param["SetatsSerialId"] !== null) {
            $this->SetatsSerialId = $param["SetatsSerialId"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Warehouse",$param) and $param["Warehouse"] !== null) {
            $this->Warehouse = new Warehouse();
            $this->Warehouse->deserialize($param["Warehouse"]);
        }

        if (array_key_exists("MasterInfo",$param) and $param["MasterInfo"] !== null) {
            $this->MasterInfo = new SetatsCvmInfo();
            $this->MasterInfo->deserialize($param["MasterInfo"]);
        }

        if (array_key_exists("WorkerInfo",$param) and $param["WorkerInfo"] !== null) {
            $this->WorkerInfo = new SetatsCvmInfo();
            $this->WorkerInfo->deserialize($param["WorkerInfo"]);
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new Tag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("AutoRenewFlag",$param) and $param["AutoRenewFlag"] !== null) {
            $this->AutoRenewFlag = $param["AutoRenewFlag"];
        }

        if (array_key_exists("ExpireTime",$param) and $param["ExpireTime"] !== null) {
            $this->ExpireTime = $param["ExpireTime"];
        }

        if (array_key_exists("SecondsUntilExpiry",$param) and $param["SecondsUntilExpiry"] !== null) {
            $this->SecondsUntilExpiry = $param["SecondsUntilExpiry"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }

        if (array_key_exists("ManagerUrl",$param) and $param["ManagerUrl"] !== null) {
            $this->ManagerUrl = $param["ManagerUrl"];
        }

        if (array_key_exists("IsolatedTime",$param) and $param["IsolatedTime"] !== null) {
            $this->IsolatedTime = $param["IsolatedTime"];
        }
    }
}
