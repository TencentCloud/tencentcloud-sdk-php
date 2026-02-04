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
 * DescribeUsageData请求参数结构体
 *
 * @method string getStartTime() 获取起始日期。使用 ISO 日期格式。
 * @method void setStartTime(string $StartTime) 设置起始日期。使用 ISO 日期格式。
 * @method string getEndTime() 获取结束日期，需大于等于起始日期。使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
 * @method void setEndTime(string $EndTime) 设置结束日期，需大于等于起始日期。使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
 * @method array getTypes() 获取查询媒体处理任务类型，默认查询转码。
<li>Transcode：转码</li>
<li>Enhance：增强</li>
<li>AIAnalysis：智能分析</li>
<li>AIRecognition：智能识别</li>
<li>AIReview：内容审核</li>
<li>Snapshot：截图</li>
<li>AnimatedGraphics：转动图</li>
<li>AiQualityControl：质检</li>
<li>Evaluation：视频评测</li>
<li>ImageProcess: 图片处理</li>
<li>AddBlindWatermark: 添加基础版权数字水印</li>
<li>AddNagraWatermark: 添加NAGRA数字水印</li>
<li>ExtractBlindWatermark: 提取基础版权数字水印</li>
<li>AIGC: AIGC</li>
 * @method void setTypes(array $Types) 设置查询媒体处理任务类型，默认查询转码。
<li>Transcode：转码</li>
<li>Enhance：增强</li>
<li>AIAnalysis：智能分析</li>
<li>AIRecognition：智能识别</li>
<li>AIReview：内容审核</li>
<li>Snapshot：截图</li>
<li>AnimatedGraphics：转动图</li>
<li>AiQualityControl：质检</li>
<li>Evaluation：视频评测</li>
<li>ImageProcess: 图片处理</li>
<li>AddBlindWatermark: 添加基础版权数字水印</li>
<li>AddNagraWatermark: 添加NAGRA数字水印</li>
<li>ExtractBlindWatermark: 提取基础版权数字水印</li>
<li>AIGC: AIGC</li>
 * @method array getProcessRegions() 获取媒体处理园区，默认返回 ap-guangzhou 园区。
<li>ap-guangzhou：广州</li>
<li>ap-hongkong：中国香港</li>
<li>ap-taipei：中国台北</li>
<li>ap-singapore：新加坡</li>
<li>ap-mumbai：印度</li>
<li>ap-jakarta：雅加达</li>
<li>ap-seoul：首尔</li>
<li>ap-bangkok：泰国</li>
<li>ap-tokyo：日本</li>
<li>na-siliconvalley：美国硅谷</li>
<li>na-ashburn：弗吉尼亚</li>
<li>na-toronto：多伦多</li>
<li>sa-saopaulo：圣保罗</li>
<li>eu-frankfurt：法兰克福</li>
<li>eu-moscow：俄罗斯</li>
<li>aws：AWS</li>
 * @method void setProcessRegions(array $ProcessRegions) 设置媒体处理园区，默认返回 ap-guangzhou 园区。
<li>ap-guangzhou：广州</li>
<li>ap-hongkong：中国香港</li>
<li>ap-taipei：中国台北</li>
<li>ap-singapore：新加坡</li>
<li>ap-mumbai：印度</li>
<li>ap-jakarta：雅加达</li>
<li>ap-seoul：首尔</li>
<li>ap-bangkok：泰国</li>
<li>ap-tokyo：日本</li>
<li>na-siliconvalley：美国硅谷</li>
<li>na-ashburn：弗吉尼亚</li>
<li>na-toronto：多伦多</li>
<li>sa-saopaulo：圣保罗</li>
<li>eu-frankfurt：法兰克福</li>
<li>eu-moscow：俄罗斯</li>
<li>aws：AWS</li>
 */
class DescribeUsageDataRequest extends AbstractModel
{
    /**
     * @var string 起始日期。使用 ISO 日期格式。
     */
    public $StartTime;

    /**
     * @var string 结束日期，需大于等于起始日期。使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
     */
    public $EndTime;

    /**
     * @var array 查询媒体处理任务类型，默认查询转码。
<li>Transcode：转码</li>
<li>Enhance：增强</li>
<li>AIAnalysis：智能分析</li>
<li>AIRecognition：智能识别</li>
<li>AIReview：内容审核</li>
<li>Snapshot：截图</li>
<li>AnimatedGraphics：转动图</li>
<li>AiQualityControl：质检</li>
<li>Evaluation：视频评测</li>
<li>ImageProcess: 图片处理</li>
<li>AddBlindWatermark: 添加基础版权数字水印</li>
<li>AddNagraWatermark: 添加NAGRA数字水印</li>
<li>ExtractBlindWatermark: 提取基础版权数字水印</li>
<li>AIGC: AIGC</li>
     */
    public $Types;

    /**
     * @var array 媒体处理园区，默认返回 ap-guangzhou 园区。
<li>ap-guangzhou：广州</li>
<li>ap-hongkong：中国香港</li>
<li>ap-taipei：中国台北</li>
<li>ap-singapore：新加坡</li>
<li>ap-mumbai：印度</li>
<li>ap-jakarta：雅加达</li>
<li>ap-seoul：首尔</li>
<li>ap-bangkok：泰国</li>
<li>ap-tokyo：日本</li>
<li>na-siliconvalley：美国硅谷</li>
<li>na-ashburn：弗吉尼亚</li>
<li>na-toronto：多伦多</li>
<li>sa-saopaulo：圣保罗</li>
<li>eu-frankfurt：法兰克福</li>
<li>eu-moscow：俄罗斯</li>
<li>aws：AWS</li>
     */
    public $ProcessRegions;

    /**
     * @param string $StartTime 起始日期。使用 ISO 日期格式。
     * @param string $EndTime 结束日期，需大于等于起始日期。使用 [ISO 日期格式](https://cloud.tencent.com/document/product/266/11732#iso-.E6.97.A5.E6.9C.9F.E6.A0.BC.E5.BC.8F)。
     * @param array $Types 查询媒体处理任务类型，默认查询转码。
<li>Transcode：转码</li>
<li>Enhance：增强</li>
<li>AIAnalysis：智能分析</li>
<li>AIRecognition：智能识别</li>
<li>AIReview：内容审核</li>
<li>Snapshot：截图</li>
<li>AnimatedGraphics：转动图</li>
<li>AiQualityControl：质检</li>
<li>Evaluation：视频评测</li>
<li>ImageProcess: 图片处理</li>
<li>AddBlindWatermark: 添加基础版权数字水印</li>
<li>AddNagraWatermark: 添加NAGRA数字水印</li>
<li>ExtractBlindWatermark: 提取基础版权数字水印</li>
<li>AIGC: AIGC</li>
     * @param array $ProcessRegions 媒体处理园区，默认返回 ap-guangzhou 园区。
<li>ap-guangzhou：广州</li>
<li>ap-hongkong：中国香港</li>
<li>ap-taipei：中国台北</li>
<li>ap-singapore：新加坡</li>
<li>ap-mumbai：印度</li>
<li>ap-jakarta：雅加达</li>
<li>ap-seoul：首尔</li>
<li>ap-bangkok：泰国</li>
<li>ap-tokyo：日本</li>
<li>na-siliconvalley：美国硅谷</li>
<li>na-ashburn：弗吉尼亚</li>
<li>na-toronto：多伦多</li>
<li>sa-saopaulo：圣保罗</li>
<li>eu-frankfurt：法兰克福</li>
<li>eu-moscow：俄罗斯</li>
<li>aws：AWS</li>
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
        if (array_key_exists("StartTime",$param) and $param["StartTime"] !== null) {
            $this->StartTime = $param["StartTime"];
        }

        if (array_key_exists("EndTime",$param) and $param["EndTime"] !== null) {
            $this->EndTime = $param["EndTime"];
        }

        if (array_key_exists("Types",$param) and $param["Types"] !== null) {
            $this->Types = $param["Types"];
        }

        if (array_key_exists("ProcessRegions",$param) and $param["ProcessRegions"] !== null) {
            $this->ProcessRegions = $param["ProcessRegions"];
        }
    }
}
