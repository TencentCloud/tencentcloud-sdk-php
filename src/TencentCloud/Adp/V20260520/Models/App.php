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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * App 应用完整信息
 *
 * @method AppAuxiliaryInfo getAuxiliaryInfo() 获取辅助信息(子状态/审批/申诉/搜索资源/特殊状态等)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setAuxiliaryInfo(AppAuxiliaryInfo $AuxiliaryInfo) 设置辅助信息(子状态/审批/申诉/搜索资源/特殊状态等)
注意：此字段可能返回 null，表示取不到有效值。
 * @method AppConfig getConfig() 获取配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConfig(AppConfig $Config) 设置配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method AppMetadata getMetadata() 获取元数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setMetadata(AppMetadata $Metadata) 设置元数据
注意：此字段可能返回 null，表示取不到有效值。
 * @method AppSecretInfo getSecretInfo() 获取应用密钥信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setSecretInfo(AppSecretInfo $SecretInfo) 设置应用密钥信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method AppShareURLInfo getShareUrlInfo() 获取分享链接信息(含访问控制)
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setShareUrlInfo(AppShareURLInfo $ShareUrlInfo) 设置分享链接信息(含访问控制)
注意：此字段可能返回 null，表示取不到有效值。
 * @method AppStatusInfo getStatus() 获取状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setStatus(AppStatusInfo $Status) 设置状态
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getSharedKnowledgeList() 获取应用引用的共享知识库列表
 * @method void setSharedKnowledgeList(array $SharedKnowledgeList) 设置应用引用的共享知识库列表
 */
class App extends AbstractModel
{
    /**
     * @var AppAuxiliaryInfo 辅助信息(子状态/审批/申诉/搜索资源/特殊状态等)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $AuxiliaryInfo;

    /**
     * @var AppConfig 配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Config;

    /**
     * @var AppMetadata 元数据
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Metadata;

    /**
     * @var AppSecretInfo 应用密钥信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $SecretInfo;

    /**
     * @var AppShareURLInfo 分享链接信息(含访问控制)
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ShareUrlInfo;

    /**
     * @var AppStatusInfo 状态
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Status;

    /**
     * @var array 应用引用的共享知识库列表
     */
    public $SharedKnowledgeList;

    /**
     * @param AppAuxiliaryInfo $AuxiliaryInfo 辅助信息(子状态/审批/申诉/搜索资源/特殊状态等)
注意：此字段可能返回 null，表示取不到有效值。
     * @param AppConfig $Config 配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param AppMetadata $Metadata 元数据
注意：此字段可能返回 null，表示取不到有效值。
     * @param AppSecretInfo $SecretInfo 应用密钥信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param AppShareURLInfo $ShareUrlInfo 分享链接信息(含访问控制)
注意：此字段可能返回 null，表示取不到有效值。
     * @param AppStatusInfo $Status 状态
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $SharedKnowledgeList 应用引用的共享知识库列表
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
        if (array_key_exists("AuxiliaryInfo",$param) and $param["AuxiliaryInfo"] !== null) {
            $this->AuxiliaryInfo = new AppAuxiliaryInfo();
            $this->AuxiliaryInfo->deserialize($param["AuxiliaryInfo"]);
        }

        if (array_key_exists("Config",$param) and $param["Config"] !== null) {
            $this->Config = new AppConfig();
            $this->Config->deserialize($param["Config"]);
        }

        if (array_key_exists("Metadata",$param) and $param["Metadata"] !== null) {
            $this->Metadata = new AppMetadata();
            $this->Metadata->deserialize($param["Metadata"]);
        }

        if (array_key_exists("SecretInfo",$param) and $param["SecretInfo"] !== null) {
            $this->SecretInfo = new AppSecretInfo();
            $this->SecretInfo->deserialize($param["SecretInfo"]);
        }

        if (array_key_exists("ShareUrlInfo",$param) and $param["ShareUrlInfo"] !== null) {
            $this->ShareUrlInfo = new AppShareURLInfo();
            $this->ShareUrlInfo->deserialize($param["ShareUrlInfo"]);
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = new AppStatusInfo();
            $this->Status->deserialize($param["Status"]);
        }

        if (array_key_exists("SharedKnowledgeList",$param) and $param["SharedKnowledgeList"] !== null) {
            $this->SharedKnowledgeList = [];
            foreach ($param["SharedKnowledgeList"] as $key => $value){
                $obj = new AppSharedKnowledgeInfo();
                $obj->deserialize($value);
                array_push($this->SharedKnowledgeList, $obj);
            }
        }
    }
}
