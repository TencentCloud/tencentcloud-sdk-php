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
 * DescribeLiveTranscodeTemplates请求参数结构体
 *
 * @method integer getTemplateType() 获取转码模板类型，默认0。
0：普通转码模板。
1：自适应码率转码模板。
 * @method void setTemplateType(integer $TemplateType) 设置转码模板类型，默认0。
0：普通转码模板。
1：自适应码率转码模板。
 */
class DescribeLiveTranscodeTemplatesRequest extends AbstractModel
{
    /**
     * @var integer 转码模板类型，默认0。
0：普通转码模板。
1：自适应码率转码模板。
     */
    public $TemplateType;

    /**
     * @param integer $TemplateType 转码模板类型，默认0。
0：普通转码模板。
1：自适应码率转码模板。
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
        if (array_key_exists("TemplateType",$param) and $param["TemplateType"] !== null) {
            $this->TemplateType = $param["TemplateType"];
        }
    }
}
