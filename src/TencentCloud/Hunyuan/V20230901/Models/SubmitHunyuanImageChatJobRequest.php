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
namespace TencentCloud\Hunyuan\V20230901\Models;
use TencentCloud\Common\AbstractModel;

/**
 * SubmitHunyuanImageChatJob请求参数结构体
 *
 * @method string getPrompt() 获取本轮对话的文本描述。
提交一个任务请求对应发起一轮生图对话，每轮对话中可输入一条 Prompt，生成一张图像，支持通过多轮输入 Prompt 来不断调整图像内容。
推荐使用中文，最多可传1024个 utf-8 字符。
输入示例：
<li> 第一轮对话：一颗红色的苹果 </li>
<li> 第二轮对话：将苹果改为绿色 </li>
<li> 第三轮对话：苹果放在桌子上 </li>
 * @method void setPrompt(string $Prompt) 设置本轮对话的文本描述。
提交一个任务请求对应发起一轮生图对话，每轮对话中可输入一条 Prompt，生成一张图像，支持通过多轮输入 Prompt 来不断调整图像内容。
推荐使用中文，最多可传1024个 utf-8 字符。
输入示例：
<li> 第一轮对话：一颗红色的苹果 </li>
<li> 第二轮对话：将苹果改为绿色 </li>
<li> 第三轮对话：苹果放在桌子上 </li>
 * @method string getChatId() 获取上传上一轮对话的 ChatId，本轮对话将在指定的上一轮对话结果基础上继续生成图像。
如果不传代表新建一个对话组，重新开启一轮新的对话。
一个对话组中，最多支持进行100轮对话。
 * @method void setChatId(string $ChatId) 设置上传上一轮对话的 ChatId，本轮对话将在指定的上一轮对话结果基础上继续生成图像。
如果不传代表新建一个对话组，重新开启一轮新的对话。
一个对话组中，最多支持进行100轮对话。
 * @method integer getLogoAdd() 获取为生成结果图添加显式水印标识的开关，默认为1。  
1：添加。  
0：不添加。  
其他数值：默认按1处理。  
建议您使用显著标识来提示结果图使用了 AI 绘画技术，是 AI 生成的图片。
 * @method void setLogoAdd(integer $LogoAdd) 设置为生成结果图添加显式水印标识的开关，默认为1。  
1：添加。  
0：不添加。  
其他数值：默认按1处理。  
建议您使用显著标识来提示结果图使用了 AI 绘画技术，是 AI 生成的图片。
 * @method LogoParam getLogoParam() 获取标识内容设置。
默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。
 * @method void setLogoParam(LogoParam $LogoParam) 设置标识内容设置。
默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。
 */
class SubmitHunyuanImageChatJobRequest extends AbstractModel
{
    /**
     * @var string 本轮对话的文本描述。
提交一个任务请求对应发起一轮生图对话，每轮对话中可输入一条 Prompt，生成一张图像，支持通过多轮输入 Prompt 来不断调整图像内容。
推荐使用中文，最多可传1024个 utf-8 字符。
输入示例：
<li> 第一轮对话：一颗红色的苹果 </li>
<li> 第二轮对话：将苹果改为绿色 </li>
<li> 第三轮对话：苹果放在桌子上 </li>
     */
    public $Prompt;

    /**
     * @var string 上传上一轮对话的 ChatId，本轮对话将在指定的上一轮对话结果基础上继续生成图像。
如果不传代表新建一个对话组，重新开启一轮新的对话。
一个对话组中，最多支持进行100轮对话。
     */
    public $ChatId;

    /**
     * @var integer 为生成结果图添加显式水印标识的开关，默认为1。  
1：添加。  
0：不添加。  
其他数值：默认按1处理。  
建议您使用显著标识来提示结果图使用了 AI 绘画技术，是 AI 生成的图片。
     */
    public $LogoAdd;

    /**
     * @var LogoParam 标识内容设置。
默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。
     */
    public $LogoParam;

    /**
     * @param string $Prompt 本轮对话的文本描述。
提交一个任务请求对应发起一轮生图对话，每轮对话中可输入一条 Prompt，生成一张图像，支持通过多轮输入 Prompt 来不断调整图像内容。
推荐使用中文，最多可传1024个 utf-8 字符。
输入示例：
<li> 第一轮对话：一颗红色的苹果 </li>
<li> 第二轮对话：将苹果改为绿色 </li>
<li> 第三轮对话：苹果放在桌子上 </li>
     * @param string $ChatId 上传上一轮对话的 ChatId，本轮对话将在指定的上一轮对话结果基础上继续生成图像。
如果不传代表新建一个对话组，重新开启一轮新的对话。
一个对话组中，最多支持进行100轮对话。
     * @param integer $LogoAdd 为生成结果图添加显式水印标识的开关，默认为1。  
1：添加。  
0：不添加。  
其他数值：默认按1处理。  
建议您使用显著标识来提示结果图使用了 AI 绘画技术，是 AI 生成的图片。
     * @param LogoParam $LogoParam 标识内容设置。
默认在生成结果图右下角添加“图片由 AI 生成”字样，您可根据自身需要替换为其他的标识图片。
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
        if (array_key_exists("Prompt",$param) and $param["Prompt"] !== null) {
            $this->Prompt = $param["Prompt"];
        }

        if (array_key_exists("ChatId",$param) and $param["ChatId"] !== null) {
            $this->ChatId = $param["ChatId"];
        }

        if (array_key_exists("LogoAdd",$param) and $param["LogoAdd"] !== null) {
            $this->LogoAdd = $param["LogoAdd"];
        }

        if (array_key_exists("LogoParam",$param) and $param["LogoParam"] !== null) {
            $this->LogoParam = new LogoParam();
            $this->LogoParam->deserialize($param["LogoParam"]);
        }
    }
}
