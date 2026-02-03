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
 * @method string getSetatsSerialId() 获取<p>setats serialId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSetatsSerialId(string $SetatsSerialId) 设置<p>setats serialId</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getStatus() 获取<p>1  // 停止<br>2  // 运行中<br>3  // 初始化中<br>4  // 扩容中<br>5  // Warehoouse未配置<br>6  // Warehoouse配置中<br>7  // 重启中<br>-2 // 已删除(集群被销毁时更新为此状态)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(integer $Status) 设置<p>1  // 停止<br>2  // 运行中<br>3  // 初始化中<br>4  // 扩容中<br>5  // Warehoouse未配置<br>6  // Warehoouse配置中<br>7  // 重启中<br>-2 // 已删除(集群被销毁时更新为此状态)</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method Warehouse getWarehouse() 获取<p>setats warehouse</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWarehouse(Warehouse $Warehouse) 设置<p>setats warehouse</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method SetatsCvmInfo getMasterInfo() 获取<p>setats master 机器规格</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMasterInfo(SetatsCvmInfo $MasterInfo) 设置<p>setats master 机器规格</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method SetatsCvmInfo getWorkerInfo() 获取<p>setats worker规格</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setWorkerInfo(SetatsCvmInfo $WorkerInfo) 设置<p>setats worker规格</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取<p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置<p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method integer getAutoRenewFlag() 获取<p>自动续费</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAutoRenewFlag(integer $AutoRenewFlag) 设置<p>自动续费</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpireTime() 获取<p>过期时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpireTime(string $ExpireTime) 设置<p>过期时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getSecondsUntilExpiry() 获取<p>过期时间 秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecondsUntilExpiry(string $SecondsUntilExpiry) 设置<p>过期时间 秒</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreateTime() 获取<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreateTime(string $CreateTime) 设置<p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getManagerUrl() 获取<p>manager url</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setManagerUrl(string $ManagerUrl) 设置<p>manager url</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getIsolatedTime() 获取<p>隔离时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setIsolatedTime(string $IsolatedTime) 设置<p>隔离时间</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getOwnerClusterGroupSerialId() 获取<p>Setats集群自己的id</p>
 * @method void setOwnerClusterGroupSerialId(string $OwnerClusterGroupSerialId) 设置<p>Setats集群自己的id</p>
 * @method integer getType() 获取<p>setats 集群类型</p>
 * @method void setType(integer $Type) 设置<p>setats 集群类型</p>
 * @method string getSetatsUiUrl() 获取<p>Setats UI url</p>
 * @method void setSetatsUiUrl(string $SetatsUiUrl) 设置<p>Setats UI url</p>
 * @method string getImageVersion() 获取<p>setats镜像版本</p>
 * @method void setImageVersion(string $ImageVersion) 设置<p>setats镜像版本</p>
 */
class Setats extends AbstractModel
{
    /**
     * @var string <p>setats serialId</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SetatsSerialId;

    /**
     * @var integer <p>1  // 停止<br>2  // 运行中<br>3  // 初始化中<br>4  // 扩容中<br>5  // Warehoouse未配置<br>6  // Warehoouse配置中<br>7  // 重启中<br>-2 // 已删除(集群被销毁时更新为此状态)</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var Warehouse <p>setats warehouse</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Warehouse;

    /**
     * @var SetatsCvmInfo <p>setats master 机器规格</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $MasterInfo;

    /**
     * @var SetatsCvmInfo <p>setats worker规格</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $WorkerInfo;

    /**
     * @var array <p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var integer <p>自动续费</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AutoRenewFlag;

    /**
     * @var string <p>过期时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpireTime;

    /**
     * @var string <p>过期时间 秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecondsUntilExpiry;

    /**
     * @var string <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreateTime;

    /**
     * @var string <p>manager url</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ManagerUrl;

    /**
     * @var string <p>隔离时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $IsolatedTime;

    /**
     * @var string <p>Setats集群自己的id</p>
     */
    public $OwnerClusterGroupSerialId;

    /**
     * @var integer <p>setats 集群类型</p>
     */
    public $Type;

    /**
     * @var string <p>Setats UI url</p>
     */
    public $SetatsUiUrl;

    /**
     * @var string <p>setats镜像版本</p>
     */
    public $ImageVersion;

    /**
     * @param string $SetatsSerialId <p>setats serialId</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $Status <p>1  // 停止<br>2  // 运行中<br>3  // 初始化中<br>4  // 扩容中<br>5  // Warehoouse未配置<br>6  // Warehoouse配置中<br>7  // 重启中<br>-2 // 已删除(集群被销毁时更新为此状态)</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param Warehouse $Warehouse <p>setats warehouse</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param SetatsCvmInfo $MasterInfo <p>setats master 机器规格</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param SetatsCvmInfo $WorkerInfo <p>setats worker规格</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags <p>标签</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param integer $AutoRenewFlag <p>自动续费</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpireTime <p>过期时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $SecondsUntilExpiry <p>过期时间 秒</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreateTime <p>创建时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ManagerUrl <p>manager url</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $IsolatedTime <p>隔离时间</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $OwnerClusterGroupSerialId <p>Setats集群自己的id</p>
     * @param integer $Type <p>setats 集群类型</p>
     * @param string $SetatsUiUrl <p>Setats UI url</p>
     * @param string $ImageVersion <p>setats镜像版本</p>
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

        if (array_key_exists("OwnerClusterGroupSerialId",$param) and $param["OwnerClusterGroupSerialId"] !== null) {
            $this->OwnerClusterGroupSerialId = $param["OwnerClusterGroupSerialId"];
        }

        if (array_key_exists("Type",$param) and $param["Type"] !== null) {
            $this->Type = $param["Type"];
        }

        if (array_key_exists("SetatsUiUrl",$param) and $param["SetatsUiUrl"] !== null) {
            $this->SetatsUiUrl = $param["SetatsUiUrl"];
        }

        if (array_key_exists("ImageVersion",$param) and $param["ImageVersion"] !== null) {
            $this->ImageVersion = $param["ImageVersion"];
        }
    }
}
