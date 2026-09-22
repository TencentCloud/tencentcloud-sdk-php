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
namespace TencentCloud\Workbuddyenterprise\V20260709\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 专家列表/详情项
 *
 * @method string getSource() 获取<p>专家来源：builtin、custom</p>
 * @method void setSource(string $Source) 设置<p>专家来源：builtin、custom</p>
 * @method string getDisplayName() 获取<p>展示名</p>
 * @method void setDisplayName(string $DisplayName) 设置<p>展示名</p>
 * @method string getDescription() 获取<p>描述</p>
 * @method void setDescription(string $Description) 设置<p>描述</p>
 * @method string getIcon() 获取<p>图标 URL</p>
 * @method void setIcon(string $Icon) 设置<p>图标 URL</p>
 * @method boolean getEnabled() 获取<p>是否启用</p>
 * @method void setEnabled(boolean $Enabled) 设置<p>是否启用</p>
 * @method string getDownloadUrl() 获取<p>下载 URL</p>
 * @method void setDownloadUrl(string $DownloadUrl) 设置<p>下载 URL</p>
 * @method string getModifiedTime() 获取<p>更新时间</p>
 * @method void setModifiedTime(string $ModifiedTime) 设置<p>更新时间</p>
 * @method string getStatus() 获取<p>启停状态：enabled、disabled</p>
 * @method void setStatus(string $Status) 设置<p>启停状态：enabled、disabled</p>
 * @method string getExpertId() 获取<p>专家标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpertId(string $ExpertId) 设置<p>专家标识</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method string getExpertVersion() 获取<p>当前生效版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
 * @method void setExpertVersion(string $ExpertVersion) 设置<p>当前生效版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
 */
class ExpertItem extends AbstractModel
{
    /**
     * @var string <p>专家来源：builtin、custom</p>
     */
    public $Source;

    /**
     * @var string <p>展示名</p>
     */
    public $DisplayName;

    /**
     * @var string <p>描述</p>
     */
    public $Description;

    /**
     * @var string <p>图标 URL</p>
     */
    public $Icon;

    /**
     * @var boolean <p>是否启用</p>
     */
    public $Enabled;

    /**
     * @var string <p>下载 URL</p>
     */
    public $DownloadUrl;

    /**
     * @var string <p>更新时间</p>
     */
    public $ModifiedTime;

    /**
     * @var string <p>启停状态：enabled、disabled</p>
     */
    public $Status;

    /**
     * @var string <p>专家标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpertId;

    /**
     * @var string <p>当前生效版本号</p>
注意：此字段可能返回 null，表示取不到有效值。
     */
    public $ExpertVersion;

    /**
     * @param string $Source <p>专家来源：builtin、custom</p>
     * @param string $DisplayName <p>展示名</p>
     * @param string $Description <p>描述</p>
     * @param string $Icon <p>图标 URL</p>
     * @param boolean $Enabled <p>是否启用</p>
     * @param string $DownloadUrl <p>下载 URL</p>
     * @param string $ModifiedTime <p>更新时间</p>
     * @param string $Status <p>启停状态：enabled、disabled</p>
     * @param string $ExpertId <p>专家标识</p>
注意：此字段可能返回 null，表示取不到有效值。
     * @param string $ExpertVersion <p>当前生效版本号</p>
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
        if (array_key_exists("Source",$param) and $param["Source"] !== null) {
            $this->Source = $param["Source"];
        }

        if (array_key_exists("DisplayName",$param) and $param["DisplayName"] !== null) {
            $this->DisplayName = $param["DisplayName"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("Icon",$param) and $param["Icon"] !== null) {
            $this->Icon = $param["Icon"];
        }

        if (array_key_exists("Enabled",$param) and $param["Enabled"] !== null) {
            $this->Enabled = $param["Enabled"];
        }

        if (array_key_exists("DownloadUrl",$param) and $param["DownloadUrl"] !== null) {
            $this->DownloadUrl = $param["DownloadUrl"];
        }

        if (array_key_exists("ModifiedTime",$param) and $param["ModifiedTime"] !== null) {
            $this->ModifiedTime = $param["ModifiedTime"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("ExpertId",$param) and $param["ExpertId"] !== null) {
            $this->ExpertId = $param["ExpertId"];
        }

        if (array_key_exists("ExpertVersion",$param) and $param["ExpertVersion"] !== null) {
            $this->ExpertVersion = $param["ExpertVersion"];
        }
    }
}
