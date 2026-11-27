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
namespace TencentCloud\Antiddos\V20250903\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DDoS 防护实例信息。
 *
 * @method string getProtectionId() 获取<p>防护实例 ID。</p>
 * @method void setProtectionId(string $ProtectionId) 设置<p>防护实例 ID。</p>
 * @method string getName() 获取<p>防护实例名称。</p>
 * @method void setName(string $Name) 设置<p>防护实例名称。</p>
 * @method string getProtectionLevel() 获取<p>防护实例的防护级别。</p><p>枚举值：</p><ul><li>advanced： 增强防护；</li><li>ultimate： 卓越防护。</li></ul>
 * @method void setProtectionLevel(string $ProtectionLevel) 设置<p>防护实例的防护级别。</p><p>枚举值：</p><ul><li>advanced： 增强防护；</li><li>ultimate： 卓越防护。</li></ul>
 * @method string getStatus() 获取<p>防护实例状态。</p><p>枚举值：</p><ul><li>protecting： 防护中；</li><li>processing： 变更中；</li><li>disabling： 停用中；</li><li>disabled： 已停用。</li></ul>
 * @method void setStatus(string $Status) 设置<p>防护实例状态。</p><p>枚举值：</p><ul><li>protecting： 防护中；</li><li>processing： 变更中；</li><li>disabling： 停用中；</li><li>disabled： 已停用。</li></ul>
 * @method array getTags() 获取<p>资源标签列表。</p>
 * @method void setTags(array $Tags) 设置<p>资源标签列表。</p>
 * @method integer getResourceCount() 获取<p>防护实例中的防护资源数量。</p>
 * @method void setResourceCount(integer $ResourceCount) 设置<p>防护实例中的防护资源数量。</p>
 */
class ProtectionInfo extends AbstractModel
{
    /**
     * @var string <p>防护实例 ID。</p>
     */
    public $ProtectionId;

    /**
     * @var string <p>防护实例名称。</p>
     */
    public $Name;

    /**
     * @var string <p>防护实例的防护级别。</p><p>枚举值：</p><ul><li>advanced： 增强防护；</li><li>ultimate： 卓越防护。</li></ul>
     */
    public $ProtectionLevel;

    /**
     * @var string <p>防护实例状态。</p><p>枚举值：</p><ul><li>protecting： 防护中；</li><li>processing： 变更中；</li><li>disabling： 停用中；</li><li>disabled： 已停用。</li></ul>
     */
    public $Status;

    /**
     * @var array <p>资源标签列表。</p>
     */
    public $Tags;

    /**
     * @var integer <p>防护实例中的防护资源数量。</p>
     */
    public $ResourceCount;

    /**
     * @param string $ProtectionId <p>防护实例 ID。</p>
     * @param string $Name <p>防护实例名称。</p>
     * @param string $ProtectionLevel <p>防护实例的防护级别。</p><p>枚举值：</p><ul><li>advanced： 增强防护；</li><li>ultimate： 卓越防护。</li></ul>
     * @param string $Status <p>防护实例状态。</p><p>枚举值：</p><ul><li>protecting： 防护中；</li><li>processing： 变更中；</li><li>disabling： 停用中；</li><li>disabled： 已停用。</li></ul>
     * @param array $Tags <p>资源标签列表。</p>
     * @param integer $ResourceCount <p>防护实例中的防护资源数量。</p>
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
        if (array_key_exists("ProtectionId",$param) and $param["ProtectionId"] !== null) {
            $this->ProtectionId = $param["ProtectionId"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("ProtectionLevel",$param) and $param["ProtectionLevel"] !== null) {
            $this->ProtectionLevel = $param["ProtectionLevel"];
        }

        if (array_key_exists("Status",$param) and $param["Status"] !== null) {
            $this->Status = $param["Status"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new TagInfo();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }

        if (array_key_exists("ResourceCount",$param) and $param["ResourceCount"] !== null) {
            $this->ResourceCount = $param["ResourceCount"];
        }
    }
}
