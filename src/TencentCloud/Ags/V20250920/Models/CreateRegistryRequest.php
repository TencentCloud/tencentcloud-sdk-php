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
namespace TencentCloud\Ags\V20250920\Models;
use TencentCloud\Common\AbstractModel;

/**
 * CreateRegistry请求参数结构体
 *
 * @method string getName() 获取<p>同一 AppId + Region 唯一、长度 1–255</p>
 * @method void setName(string $Name) 设置<p>同一 AppId + Region 唯一、长度 1–255</p>
 * @method string getDescription() 获取<p>描述文本；最长 4096。</p>
 * @method void setDescription(string $Description) 设置<p>描述文本；最长 4096。</p>
 * @method string getApprovalMode() 获取<p>审批模式；创建时确定，创建后不可修改；省略时默认为 AUTO，枚举值区分大小写。</p>
 * @method void setApprovalMode(string $ApprovalMode) 设置<p>审批模式；创建时确定，创建后不可修改；省略时默认为 AUTO，枚举值区分大小写。</p>
 * @method array getTags() 获取<p>创建时绑定的腾讯云自定义标签；Key 不可重复；最多 10 个。</p>
 * @method void setTags(array $Tags) 设置<p>创建时绑定的腾讯云自定义标签；Key 不可重复；最多 10 个。</p>
 */
class CreateRegistryRequest extends AbstractModel
{
    /**
     * @var string <p>同一 AppId + Region 唯一、长度 1–255</p>
     */
    public $Name;

    /**
     * @var string <p>描述文本；最长 4096。</p>
     */
    public $Description;

    /**
     * @var string <p>审批模式；创建时确定，创建后不可修改；省略时默认为 AUTO，枚举值区分大小写。</p>
     */
    public $ApprovalMode;

    /**
     * @var array <p>创建时绑定的腾讯云自定义标签；Key 不可重复；最多 10 个。</p>
     */
    public $Tags;

    /**
     * @param string $Name <p>同一 AppId + Region 唯一、长度 1–255</p>
     * @param string $Description <p>描述文本；最长 4096。</p>
     * @param string $ApprovalMode <p>审批模式；创建时确定，创建后不可修改；省略时默认为 AUTO，枚举值区分大小写。</p>
     * @param array $Tags <p>创建时绑定的腾讯云自定义标签；Key 不可重复；最多 10 个。</p>
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
        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("ApprovalMode",$param) and $param["ApprovalMode"] !== null) {
            $this->ApprovalMode = $param["ApprovalMode"];
        }

        if (array_key_exists("Tags",$param) and $param["Tags"] !== null) {
            $this->Tags = [];
            foreach ($param["Tags"] as $key => $value){
                $obj = new CloudTag();
                $obj->deserialize($value);
                array_push($this->Tags, $obj);
            }
        }
    }
}
