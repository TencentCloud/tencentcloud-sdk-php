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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云原生网关服务预览信息
 *
 * @method string getID() 获取服务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setID(string $ID) 设置服务ID
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getName() 获取服务名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setName(string $Name) 设置服务名字
注意：此字段可能返回 null，表示取不到有效值。
 * @method array getTags() 获取标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setTags(array $Tags) 设置标签
注意：此字段可能返回 null，表示取不到有效值。
 * @method KongUpstreamInfo getUpstreamInfo() 获取后端配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpstreamInfo(KongUpstreamInfo $UpstreamInfo) 设置后端配置
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getUpstreamType() 获取后端类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setUpstreamType(string $UpstreamType) 设置后端类型
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getCreatedTime() 获取创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setCreatedTime(string $CreatedTime) 设置创建时间
注意：此字段可能返回 null，表示取不到有效值。
 * @method boolean getEditable() 获取是否可编辑
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setEditable(boolean $Editable) 设置是否可编辑
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getPath() 获取请求路径
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPath(string $Path) 设置请求路径
注意：此字段可能返回 null，表示取不到有效值。
 */
class KongServicePreview extends AbstractModel
{
    /**
     * @var string 服务ID
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ID;

    /**
     * @var string 服务名字
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Name;

    /**
     * @var array 标签
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Tags;

    /**
     * @var KongUpstreamInfo 后端配置
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpstreamInfo;

    /**
     * @var string 后端类型
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $UpstreamType;

    /**
     * @var string 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $CreatedTime;

    /**
     * @var boolean 是否可编辑
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Editable;

    /**
     * @var string 请求路径
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Path;

    /**
     * @param string $ID 服务ID
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Name 服务名字
注意：此字段可能返回 null，表示取不到有效值。
     * @param array $Tags 标签
注意：此字段可能返回 null，表示取不到有效值。
     * @param KongUpstreamInfo $UpstreamInfo 后端配置
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $UpstreamType 后端类型
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $CreatedTime 创建时间
注意：此字段可能返回 null，表示取不到有效值。
     * @param boolean $Editable 是否可编辑
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $Path 请求路径
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
        if (array_key_exists("ID",$param) and $param["ID"] !== null) {
            $this->ID = $param["ID"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = $param["Tags"];
        }

        if (array_key_exists("UpstreamInfo",$param) and $param["UpstreamInfo"] !== null) {
            $this->UpstreamInfo = new KongUpstreamInfo();
            $this->UpstreamInfo->deserialize($param["UpstreamInfo"]);
        }

        if (array_key_exists("UpstreamType",$param) and $param["UpstreamType"] !== null) {
            $this->UpstreamType = $param["UpstreamType"];
        }

        if (array_key_exists("CreatedTime",$param) and $param["CreatedTime"] !== null) {
            $this->CreatedTime = $param["CreatedTime"];
        }

        if (array_key_exists("Editable",$param) and $param["Editable"] !== null) {
            $this->Editable = $param["Editable"];
        }

        if (array_key_exists("Path",$param) and $param["Path"] !== null) {
            $this->Path = $param["Path"];
        }
    }
}
