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
 * 飞书机器人内容模板配置
 *
 * @method string getContentTmpl() 获取<p>内容模板</p>
 * @method void setContentTmpl(string $ContentTmpl) 设置<p>内容模板</p>
 * @method string getTitleTmpl() 获取<p>标题模板</p>
 * @method void setTitleTmpl(string $TitleTmpl) 设置<p>标题模板</p>
 * @method RobotNoticeTitleColor getTitleColor() 获取<p>通知内容模版标题自定义颜色</p>
 * @method void setTitleColor(RobotNoticeTitleColor $TitleColor) 设置<p>通知内容模版标题自定义颜色</p>
 */
class FeiShuRobotNoticeTmpl extends AbstractModel
{
    /**
     * @var string <p>内容模板</p>
     */
    public $ContentTmpl;

    /**
     * @var string <p>标题模板</p>
     */
    public $TitleTmpl;

    /**
     * @var RobotNoticeTitleColor <p>通知内容模版标题自定义颜色</p>
     */
    public $TitleColor;

    /**
     * @param string $ContentTmpl <p>内容模板</p>
     * @param string $TitleTmpl <p>标题模板</p>
     * @param RobotNoticeTitleColor $TitleColor <p>通知内容模版标题自定义颜色</p>
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

        if (array_key_exists("TitleColor",$param) and $param["TitleColor"] !== null) {
            $this->TitleColor = new RobotNoticeTitleColor();
            $this->TitleColor->deserialize($param["TitleColor"]);
        }
    }
}
