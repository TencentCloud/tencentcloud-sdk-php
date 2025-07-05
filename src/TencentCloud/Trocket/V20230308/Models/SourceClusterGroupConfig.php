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
namespace TencentCloud\Trocket\V20230308\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 消费组配置信息
 *
 * @method string getGroupName() 获取消费组名称，可在[DescribeSourceClusterGroupList](https://cloud.tencent.com/document/api/1493/118006)接口返回的[SourceClusterGroupConfig](https://cloud.tencent.com/document/api/1493/96031#SourceClusterGroupConfig)数据中获取。
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupName(string $GroupName) 设置消费组名称，可在[DescribeSourceClusterGroupList](https://cloud.tencent.com/document/api/1493/118006)接口返回的[SourceClusterGroupConfig](https://cloud.tencent.com/document/api/1493/96031#SourceClusterGroupConfig)数据中获取。
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getRemark() 获取备注信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setRemark(string $Remark) 设置备注信息
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getImported() 获取是否已导入，作为入参时无效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImported(boolean $Imported) 设置是否已导入，作为入参时无效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespace() 获取命名空间，仅4.x集群有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespace(string $Namespace) 设置命名空间，仅4.x集群有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getImportStatus() 获取导入状态
Unknown 未知
Success 成功
Failure 失败
AlreadyExists 已存在

仅作为出参时使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setImportStatus(string $ImportStatus) 设置导入状态
Unknown 未知
Success 成功
Failure 失败
AlreadyExists 已存在

仅作为出参时使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getNamespaceV4() 获取4.x的命名空间，出参使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setNamespaceV4(string $NamespaceV4) 设置4.x的命名空间，出参使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getGroupNameV4() 获取4.x的消费组名，出参使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setGroupNameV4(string $GroupNameV4) 设置4.x的消费组名，出参使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getFullNamespaceV4() 获取4.x的完整命名空间，出参使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setFullNamespaceV4(string $FullNamespaceV4) 设置4.x的完整命名空间，出参使用
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getConsumeMessageOrderly() 获取是否为顺序投递，5.0有效
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setConsumeMessageOrderly(boolean $ConsumeMessageOrderly) 设置是否为顺序投递，5.0有效
注意：此字段可能返回 null，表示取不到有效值。
 */
class SourceClusterGroupConfig extends AbstractModel
{
    /**
     * @var string 消费组名称，可在[DescribeSourceClusterGroupList](https://cloud.tencent.com/document/api/1493/118006)接口返回的[SourceClusterGroupConfig](https://cloud.tencent.com/document/api/1493/96031#SourceClusterGroupConfig)数据中获取。
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupName;

    /**
     * @var string 备注信息
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Remark;

    /**
     * @var boolean 是否已导入，作为入参时无效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Imported;

    /**
     * @var string 命名空间，仅4.x集群有效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Namespace;

    /**
     * @var string 导入状态
Unknown 未知
Success 成功
Failure 失败
AlreadyExists 已存在

仅作为出参时使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ImportStatus;

    /**
     * @var string 4.x的命名空间，出参使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $NamespaceV4;

    /**
     * @var string 4.x的消费组名，出参使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $GroupNameV4;

    /**
     * @var string 4.x的完整命名空间，出参使用
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $FullNamespaceV4;

    /**
     * @var boolean 是否为顺序投递，5.0有效
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ConsumeMessageOrderly;

    /**
     * @param string $GroupName 消费组名称，可在[DescribeSourceClusterGroupList](https://cloud.tencent.com/document/api/1493/118006)接口返回的[SourceClusterGroupConfig](https://cloud.tencent.com/document/api/1493/96031#SourceClusterGroupConfig)数据中获取。
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Remark 备注信息
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Imported 是否已导入，作为入参时无效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Namespace 命名空间，仅4.x集群有效
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ImportStatus 导入状态
Unknown 未知
Success 成功
Failure 失败
AlreadyExists 已存在

仅作为出参时使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $NamespaceV4 4.x的命名空间，出参使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $GroupNameV4 4.x的消费组名，出参使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $FullNamespaceV4 4.x的完整命名空间，出参使用
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $ConsumeMessageOrderly 是否为顺序投递，5.0有效
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
        if (array_key_exists("GroupName",$param) and $param["GroupName"] !== null) {
            $this->GroupName = $param["GroupName"];
        }

        if (array_key_exists("Remark",$param) and $param["Remark"] !== null) {
            $this->Remark = $param["Remark"];
        }

        if (array_key_exists("Imported",$param) and $param["Imported"] !== null) {
            $this->Imported = $param["Imported"];
        }

        if (array_key_exists("Namespace",$param) and $param["Namespace"] !== null) {
            $this->Namespace = $param["Namespace"];
        }

        if (array_key_exists("ImportStatus",$param) and $param["ImportStatus"] !== null) {
            $this->ImportStatus = $param["ImportStatus"];
        }

        if (array_key_exists("NamespaceV4",$param) and $param["NamespaceV4"] !== null) {
            $this->NamespaceV4 = $param["NamespaceV4"];
        }

        if (array_key_exists("GroupNameV4",$param) and $param["GroupNameV4"] !== null) {
            $this->GroupNameV4 = $param["GroupNameV4"];
        }

        if (array_key_exists("FullNamespaceV4",$param) and $param["FullNamespaceV4"] !== null) {
            $this->FullNamespaceV4 = $param["FullNamespaceV4"];
        }

        if (array_key_exists("ConsumeMessageOrderly",$param) and $param["ConsumeMessageOrderly"] !== null) {
            $this->ConsumeMessageOrderly = $param["ConsumeMessageOrderly"];
        }
    }
}
