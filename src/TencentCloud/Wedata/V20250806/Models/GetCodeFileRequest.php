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
namespace TencentCloud\Wedata\V20250806\Models;
use TencentCloud\Common\AbstractModel;

/**
 * GetCodeFile请求参数结构体
 *
 * @method string getProjectId() 获取项目ID
 * @method void setProjectId(string $ProjectId) 设置项目ID
 * @method string getCodeFileId() 获取代码文件ID，参数值来自CreateCodeFile接口的返回
 * @method void setCodeFileId(string $CodeFileId) 设置代码文件ID，参数值来自CreateCodeFile接口的返回
 * @method boolean getIncludeContent() 获取true：返回文件内容+配置，false：不返回文件内容，只返回配置信息；默认为false
 * @method void setIncludeContent(boolean $IncludeContent) 设置true：返回文件内容+配置，false：不返回文件内容，只返回配置信息；默认为false
 */
class GetCodeFileRequest extends AbstractModel
{
    /**
     * @var string 项目ID
     */
    public $ProjectId;

    /**
     * @var string 代码文件ID，参数值来自CreateCodeFile接口的返回
     */
    public $CodeFileId;

    /**
     * @var boolean true：返回文件内容+配置，false：不返回文件内容，只返回配置信息；默认为false
     */
    public $IncludeContent;

    /**
     * @param string $ProjectId 项目ID
     * @param string $CodeFileId 代码文件ID，参数值来自CreateCodeFile接口的返回
     * @param boolean $IncludeContent true：返回文件内容+配置，false：不返回文件内容，只返回配置信息；默认为false
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

        if (array_key_exists("CodeFileId",$param) and $param["CodeFileId"] !== null) {
            $this->CodeFileId = $param["CodeFileId"];
        }

        if (array_key_exists("IncludeContent",$param) and $param["IncludeContent"] !== null) {
            $this->IncludeContent = $param["IncludeContent"];
        }
    }
}
