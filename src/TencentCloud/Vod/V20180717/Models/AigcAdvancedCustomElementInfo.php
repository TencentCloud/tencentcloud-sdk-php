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
namespace TencentCloud\Vod\V20180717\Models;
use TencentCloud\Common\AbstractModel;

/**
 * AIGC 高级自定义主体信息
 *
 * @method string getId() 获取<p>主体 ID。</p>
 * @method void setId(string $Id) 设置<p>主体 ID。</p>
 * @method string getName() 获取<p>主体名字。</p>
 * @method void setName(string $Name) 设置<p>主体名字。</p>
 * @method string getVoiceId() 获取<p>主体音色 ID。</p>
 * @method void setVoiceId(string $VoiceId) 设置<p>主体音色 ID。</p>
 * @method string getDescription() 获取<p>主体描述。</p>
 * @method void setDescription(string $Description) 设置<p>主体描述。</p>
 * @method string getCreateTime() 获取<p>主体创建时间。格式按照 ISO 8601标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</p>
 * @method void setCreateTime(string $CreateTime) 设置<p>主体创建时间。格式按照 ISO 8601标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</p>
 */
class AigcAdvancedCustomElementInfo extends AbstractModel
{
    /**
     * @var string <p>主体 ID。</p>
     */
    public $Id;

    /**
     * @var string <p>主体名字。</p>
     */
    public $Name;

    /**
     * @var string <p>主体音色 ID。</p>
     */
    public $VoiceId;

    /**
     * @var string <p>主体描述。</p>
     */
    public $Description;

    /**
     * @var string <p>主体创建时间。格式按照 ISO 8601标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</p>
     */
    public $CreateTime;

    /**
     * @param string $Id <p>主体 ID。</p>
     * @param string $Name <p>主体名字。</p>
     * @param string $VoiceId <p>主体音色 ID。</p>
     * @param string $Description <p>主体描述。</p>
     * @param string $CreateTime <p>主体创建时间。格式按照 ISO 8601标准表示，详见 <a href="https://cloud.tencent.com/document/product/266/11732#I">ISO 日期格式说明</a>。</p>
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
        if (array_key_exists("Id",$param) and $param["Id"] !== null) {
            $this->Id = $param["Id"];
        }

        if (array_key_exists("Name",$param) and $param["Name"] !== null) {
            $this->Name = $param["Name"];
        }

        if (array_key_exists("VoiceId",$param) and $param["VoiceId"] !== null) {
            $this->VoiceId = $param["VoiceId"];
        }

        if (array_key_exists("Description",$param) and $param["Description"] !== null) {
            $this->Description = $param["Description"];
        }

        if (array_key_exists("CreateTime",$param) and $param["CreateTime"] !== null) {
            $this->CreateTime = $param["CreateTime"];
        }
    }
}
