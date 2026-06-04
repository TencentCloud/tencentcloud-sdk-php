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
namespace TencentCloud\Adp\V20260520\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 模版中心同步信息(私有化独有 - 公有云/SaaS 版本忽略此字段)
 *
 * @method boolean getIsPublished() 获取是否已同步到模版中心
 * @method void setIsPublished(boolean $IsPublished) 设置是否已同步到模版中心
 */
class TemplatePublishInfo extends AbstractModel
{
    /**
     * @var boolean 是否已同步到模版中心
     */
    public $IsPublished;

    /**
     * @param boolean $IsPublished 是否已同步到模版中心
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
        if (array_key_exists("IsPublished",$param) and $param["IsPublished"] !== null) {
            $this->IsPublished = $param["IsPublished"];
        }
    }
}
