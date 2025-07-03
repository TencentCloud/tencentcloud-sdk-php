<?php
/*
 * Copyright (c) 2017-2018 THL A29 Limited, a Tencent company. All Rights Reserved.
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
namespace TencentCloud\Wedata\V20210820\Models;
use TencentCloud\Common\AbstractModel;

/**
 * DescribeCodeTemplateDetail请求参数结构体
 *
 * @method string getProjectId() 获取项目Id
 * @method void setProjectId(string $ProjectId) 设置项目Id
 * @method string getCodeTemplateId() 获取模版Id
 * @method void setCodeTemplateId(string $CodeTemplateId) 设置模版Id
 * @method boolean getNeedReturnScriptContent() 获取是否需要返回脚本内容，默认false。
 * @method void setNeedReturnScriptContent(boolean $NeedReturnScriptContent) 设置是否需要返回脚本内容，默认false。
 */
class DescribeCodeTemplateDetailRequest extends AbstractModel
{
    /**
     * @var string 项目Id
     */
    public $ProjectId;

    /**
     * @var string 模版Id
     */
    public $CodeTemplateId;

    /**
     * @var boolean 是否需要返回脚本内容，默认false。
     */
    public $NeedReturnScriptContent;

    /**
     * @param string $ProjectId 项目Id
     * @param string $CodeTemplateId 模版Id
     * @param boolean $NeedReturnScriptContent 是否需要返回脚本内容，默认false。
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
        if (array_key_exists("ProjectId",$param) and $param["ProjectId"] !== null) {
            $this->ProjectId = $param["ProjectId"];
        }

        if (array_key_exists("CodeTemplateId",$param) and $param["CodeTemplateId"] !== null) {
            $this->CodeTemplateId = $param["CodeTemplateId"];
        }

        if (array_key_exists("NeedReturnScriptContent",$param) and $param["NeedReturnScriptContent"] !== null) {
            $this->NeedReturnScriptContent = $param["NeedReturnScriptContent"];
        }
    }
}
