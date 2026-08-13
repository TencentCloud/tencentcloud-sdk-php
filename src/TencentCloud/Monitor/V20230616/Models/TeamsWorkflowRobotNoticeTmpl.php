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
 * Microsoft Teams 工作流内容模板配置
 *
 * @method string getContentTmpl() 获取<p>内容模板</p>
 * @method void setContentTmpl(string $ContentTmpl) 设置<p>内容模板</p>
 * @method string getVersion() 获取<p>区分 TeamsWorkflow 是自定义内容还是自定义 POST BODY</p><p>枚举值：</p><ul><li>WorkflowText： 自定义内容</li><li>WorkflowJson： 自定义 POST BODY</li></ul>
 * @method void setVersion(string $Version) 设置<p>区分 TeamsWorkflow 是自定义内容还是自定义 POST BODY</p><p>枚举值：</p><ul><li>WorkflowText： 自定义内容</li><li>WorkflowJson： 自定义 POST BODY</li></ul>
 * @method string getTitleTmpl() 获取<p>标题模版</p>
 * @method void setTitleTmpl(string $TitleTmpl) 设置<p>标题模版</p>
 */
class TeamsWorkflowRobotNoticeTmpl extends AbstractModel
{
    /**
     * @var string <p>内容模板</p>
     */
    public $ContentTmpl;

    /**
     * @var string <p>区分 TeamsWorkflow 是自定义内容还是自定义 POST BODY</p><p>枚举值：</p><ul><li>WorkflowText： 自定义内容</li><li>WorkflowJson： 自定义 POST BODY</li></ul>
     */
    public $Version;

    /**
     * @var string <p>标题模版</p>
     */
    public $TitleTmpl;

    /**
     * @param string $ContentTmpl <p>内容模板</p>
     * @param string $Version <p>区分 TeamsWorkflow 是自定义内容还是自定义 POST BODY</p><p>枚举值：</p><ul><li>WorkflowText： 自定义内容</li><li>WorkflowJson： 自定义 POST BODY</li></ul>
     * @param string $TitleTmpl <p>标题模版</p>
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

        if (array_key_exists("Version",$param) and $param["Version"] !== null) {
            $this->Version = $param["Version"];
        }

        if (array_key_exists("TitleTmpl",$param) and $param["TitleTmpl"] !== null) {
            $this->TitleTmpl = $param["TitleTmpl"];
        }
    }
}
