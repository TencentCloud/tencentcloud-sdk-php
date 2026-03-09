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
 * 创建自定义主体输入。
 *
 * @method string getElementName() 获取<p>主体名称。</p>
 * @method void setElementName(string $ElementName) 设置<p>主体名称。</p>
 * @method string getElementDescription() 获取<p>主体描述。</p>
 * @method void setElementDescription(string $ElementDescription) 设置<p>主体描述。</p>
 * @method string getReferenceType() 获取<p>主体参考方式。</p>
 * @method void setReferenceType(string $ReferenceType) 设置<p>主体参考方式。</p>
 * @method string getElementVoiceId() 获取<p>主体音色。</p>
 * @method void setElementVoiceId(string $ElementVoiceId) 设置<p>主体音色。</p>
 * @method string getElementVideoList() 获取<p>主体参考视频。</p>
 * @method void setElementVideoList(string $ElementVideoList) 设置<p>主体参考视频。</p>
 * @method string getElementImageList() 获取<p>主体参考图。</p>
 * @method void setElementImageList(string $ElementImageList) 设置<p>主体参考图。</p>
 * @method string getTagList() 获取<p>主体配置标签。</p>
 * @method void setTagList(string $TagList) 设置<p>主体配置标签。</p>
 */
class CreateAigcAdvancedCustomElementInput extends AbstractModel
{
    /**
     * @var string <p>主体名称。</p>
     */
    public $ElementName;

    /**
     * @var string <p>主体描述。</p>
     */
    public $ElementDescription;

    /**
     * @var string <p>主体参考方式。</p>
     */
    public $ReferenceType;

    /**
     * @var string <p>主体音色。</p>
     */
    public $ElementVoiceId;

    /**
     * @var string <p>主体参考视频。</p>
     */
    public $ElementVideoList;

    /**
     * @var string <p>主体参考图。</p>
     */
    public $ElementImageList;

    /**
     * @var string <p>主体配置标签。</p>
     */
    public $TagList;

    /**
     * @param string $ElementName <p>主体名称。</p>
     * @param string $ElementDescription <p>主体描述。</p>
     * @param string $ReferenceType <p>主体参考方式。</p>
     * @param string $ElementVoiceId <p>主体音色。</p>
     * @param string $ElementVideoList <p>主体参考视频。</p>
     * @param string $ElementImageList <p>主体参考图。</p>
     * @param string $TagList <p>主体配置标签。</p>
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
        if (array_key_exists("ElementName",$param) and $param["ElementName"] !== null) {
            $this->ElementName = $param["ElementName"];
        }

        if (array_key_exists("ElementDescription",$param) and $param["ElementDescription"] !== null) {
            $this->ElementDescription = $param["ElementDescription"];
        }

        if (array_key_exists("ReferenceType",$param) and $param["ReferenceType"] !== null) {
            $this->ReferenceType = $param["ReferenceType"];
        }

        if (array_key_exists("ElementVoiceId",$param) and $param["ElementVoiceId"] !== null) {
            $this->ElementVoiceId = $param["ElementVoiceId"];
        }

        if (array_key_exists("ElementVideoList",$param) and $param["ElementVideoList"] !== null) {
            $this->ElementVideoList = $param["ElementVideoList"];
        }

        if (array_key_exists("ElementImageList",$param) and $param["ElementImageList"] !== null) {
            $this->ElementImageList = $param["ElementImageList"];
        }

        if (array_key_exists("TagList",$param) and $param["TagList"] !== null) {
            $this->TagList = $param["TagList"];
        }
    }
}
