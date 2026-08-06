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
namespace TencentCloud\Tse\V20201207\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 云原生网关服务预览信息
 *
 * @method string getID() 获取<p>服务ID</p>
 * @method void setID(string $ID) 设置<p>服务ID</p>
 * @method string getName() 获取<p>服务名字</p>
 * @method void setName(string $Name) 设置<p>服务名字</p>
 * @method array getTags() 获取<p>标签</p>
 * @method void setTags(array $Tags) 设置<p>标签</p>
 * @method KongUpstreamInfo getUpstreamInfo() 获取<p>后端配置</p>
 * @method void setUpstreamInfo(KongUpstreamInfo $UpstreamInfo) 设置<p>后端配置</p>
 * @method string getUpstreamType() 获取<p>后端类型</p>
 * @method void setUpstreamType(string $UpstreamType) 设置<p>后端类型</p>
 * @method string getCreatedTime() 获取<p>创建时间</p>
 * @method void setCreatedTime(string $CreatedTime) 设置<p>创建时间</p>
 * @method boolean getEditable() 获取<p>是否可编辑</p>
 * @method void setEditable(boolean $Editable) 设置<p>是否可编辑</p>
 * @method string getPath() 获取<p>请求路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setPath(string $Path) 设置<p>请求路径</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class KongServicePreview extends AbstractModel
{
    /**
     * @var string <p>服务ID</p>
     */
    public $ID;

    /**
     * @var string <p>服务名字</p>
     */
    public $Name;

    /**
     * @var array <p>标签</p>
     */
    public $Tags;

    /**
     * @var KongUpstreamInfo <p>后端配置</p>
     */
    public $UpstreamInfo;

    /**
     * @var string <p>后端类型</p>
     */
    public $UpstreamType;

    /**
     * @var string <p>创建时间</p>
     */
    public $CreatedTime;

    /**
     * @var boolean <p>是否可编辑</p>
     */
    public $Editable;

    /**
     * @var string <p>请求路径</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $Path;

    /**
     * @param string $ID <p>服务ID</p>
     * @param string $Name <p>服务名字</p>
     * @param array $Tags <p>标签</p>
     * @param KongUpstreamInfo $UpstreamInfo <p>后端配置</p>
     * @param string $UpstreamType <p>后端类型</p>
     * @param string $CreatedTime <p>创建时间</p>
     * @param boolean $Editable <p>是否可编辑</p>
     * @param string $Path <p>请求路径</p>
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
