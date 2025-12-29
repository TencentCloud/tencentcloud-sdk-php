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
namespace TencentCloud\Mps\V20190612\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 用于AIGC生视频创作的参考图片信息。
 *
 * @method string getImageUrl() 获取用于指导视频生成的图片 URL。该URL需外网可访问。同时允许爬虫拉取。
 * @method void setImageUrl(string $ImageUrl) 设置用于指导视频生成的图片 URL。该URL需外网可访问。同时允许爬虫拉取。
 * @method string getReferenceType() 获取参考类型。
注意：
1. 当使用GV模型时，可作为参考方式,可选asset(素材)、style(风格)。
 * @method void setReferenceType(string $ReferenceType) 设置参考类型。
注意：
1. 当使用GV模型时，可作为参考方式,可选asset(素材)、style(风格)。
 */
class AigcVideoReferenceImageInfo extends AbstractModel
{
    /**
     * @var string 用于指导视频生成的图片 URL。该URL需外网可访问。同时允许爬虫拉取。
     */
    public $ImageUrl;

    /**
     * @var string 参考类型。
注意：
1. 当使用GV模型时，可作为参考方式,可选asset(素材)、style(风格)。
     */
    public $ReferenceType;

    /**
     * @param string $ImageUrl 用于指导视频生成的图片 URL。该URL需外网可访问。同时允许爬虫拉取。
     * @param string $ReferenceType 参考类型。
注意：
1. 当使用GV模型时，可作为参考方式,可选asset(素材)、style(风格)。
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

        if (array_key_exists("ReferenceType",$param) and $param["ReferenceType"] !== null) {
            $this->ReferenceType = $param["ReferenceType"];
        }
    }
}
