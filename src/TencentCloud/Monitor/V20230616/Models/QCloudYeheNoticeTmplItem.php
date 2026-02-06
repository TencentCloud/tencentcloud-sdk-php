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
namespace TencentCloud\Monitor\V20230616\Models;
use TencentCloud\Common\AbstractModel;

/**
 * 官网通知内容模板元素
 *
 * @method string getContentTmpl() 获取内容模板
 * @method void setContentTmpl(string $ContentTmpl) 设置内容模板
 * @method string getTitleTmpl() 获取标题
 * @method void setTitleTmpl(string $TitleTmpl) 设置标题
 */
class QCloudYeheNoticeTmplItem extends AbstractModel
{
    /**
     * @var string 内容模板
     */
    public $ContentTmpl;

    /**
     * @var string 标题
     */
    public $TitleTmpl;

    /**
     * @param string $ContentTmpl 内容模板
     * @param string $TitleTmpl 标题
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
        if (array_key_exists("ContentTmpl",$param) and $param["ContentTmpl"] !== null) {
            $this->ContentTmpl = $param["ContentTmpl"];
        }

        if (array_key_exists("TitleTmpl",$param) and $param["TitleTmpl"] !== null) {
            $this->TitleTmpl = $param["TitleTmpl"];
        }
    }
}
