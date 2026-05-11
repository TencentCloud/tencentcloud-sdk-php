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
namespace TencentCloud\Live\V20180801\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于场景化生视频创作的参考图片信息。
 *
 * @method string getImageUrl() 获取<p>输入的参考图Url，需外网可访问。</p>
 * @method void setImageUrl(string $ImageUrl) 设置<p>输入的参考图Url，需外网可访问。</p>
 * @method string getText() 获取<p>针对该参考图的Prompt描述，仅部分模型是支持。</p>
 * @method void setText(string $Text) 设置<p>针对该参考图的Prompt描述，仅部分模型是支持。</p>
 * @method string getReferenceType() 获取<p>参考类型。</p>
 * @method void setReferenceType(string $ReferenceType) 设置<p>参考类型。</p>
 */
class SceneVideoReferenceImageInfo extends AbstractModel
{
    /**
     * @var string <p>输入的参考图Url，需外网可访问。</p>
     */
    public $ImageUrl;

    /**
     * @var string <p>针对该参考图的Prompt描述，仅部分模型是支持。</p>
     */
    public $Text;

    /**
     * @var string <p>参考类型。</p>
     */
    public $ReferenceType;

    /**
     * @param string $ImageUrl <p>输入的参考图Url，需外网可访问。</p>
     * @param string $Text <p>针对该参考图的Prompt描述，仅部分模型是支持。</p>
     * @param string $ReferenceType <p>参考类型。</p>
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
        if (array_key_exists("ImageUrl",$param) and $param["ImageUrl"] !== null) {
            $this->ImageUrl = $param["ImageUrl"];
        }

        if (array_key_exists("Text",$param) and $param["Text"] !== null) {
            $this->Text = $param["Text"];
        }

        if (array_key_exists("ReferenceType",$param) and $param["ReferenceType"] !== null) {
            $this->ReferenceType = $param["ReferenceType"];
        }
    }
}
